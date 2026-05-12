/**
 * Velrox Contact Form — AJAX Submission
 */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var form       = document.getElementById('velrox-contact-form');
        var submitBtn  = document.getElementById('form-submit');
        var successBox = document.getElementById('form-success');
        var errorBox   = document.getElementById('form-error');
        var errorMsg   = document.getElementById('form-error-msg');

        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Validate
            var name    = form.querySelector('[name="name"]').value.trim();
            var email   = form.querySelector('[name="email"]').value.trim();
            var subject = form.querySelector('[name="subject"]').value;
            var message = form.querySelector('[name="message"]').value.trim();

            if (!name || !email || !subject || !message) {
                showError('Please fill in all required fields.');
                return;
            }

            if (!isValidEmail(email)) {
                showError('Please enter a valid email address.');
                return;
            }

            setLoading(true);
            hideMessages();

            var data = new FormData(form);
            data.append('action', 'velrox_contact');
            data.append('nonce', velroxContact.nonce);

            fetch(velroxContact.ajaxUrl, {
                method: 'POST',
                body: data,
            })
                .then(function (res) { return res.json(); })
                .then(function (res) {
                    setLoading(false);
                    if (res.success) {
                        form.reset();
                        if (successBox) {
                            successBox.classList.add('show');
                            form.style.display = 'none';
                        }
                    } else {
                        showError(res.data && res.data.message ? res.data.message : 'An error occurred. Please try again.');
                    }
                })
                .catch(function () {
                    setLoading(false);
                    showError('Network error. Please try again or contact us directly.');
                });
        });

        function setLoading(loading) {
            if (!submitBtn) return;
            if (loading) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span style="display:inline-block;width:16px;height:16px;border:2px solid rgba(255,255,255,0.35);border-top-color:white;border-radius:50%;animation:velrox-spin 0.7s linear infinite;"></span> Sending...';
            } else {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg> Send Message';
            }
        }

        function showError(msg) {
            if (!errorBox) return;
            if (errorMsg) errorMsg.textContent = msg;
            errorBox.classList.add('show');
        }

        function hideMessages() {
            if (errorBox) errorBox.classList.remove('show');
        }

        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
    });

    // Add spinner keyframe
    var style = document.createElement('style');
    style.textContent = '@keyframes velrox-spin { to { transform: rotate(360deg); } }';
    document.head.appendChild(style);

})();
