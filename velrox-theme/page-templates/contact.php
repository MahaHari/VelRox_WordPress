<?php
/**
 * Template Name: Contact Us
 */
get_header();

velrox_page_banner(
    __( 'Contact Us', 'velrox' ),
    __( 'Get in touch with our trade team to discuss your seafood sourcing requirements.', 'velrox' ),
    'https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80',
    __( 'Contact Us', 'velrox' )
);
?>

<section class="section-padding">
    <div class="container">
        <div class="contact-grid">

            <!-- Contact Info -->
            <div class="animate-slide-left">
                <div class="section-tag"><?php esc_html_e( 'Get In Touch', 'velrox' ); ?></div>
                <h2 class="section-title">
                    <?php esc_html_e( "Let's Start a", 'velrox' ); ?>
                    <span class="highlight"><?php esc_html_e( 'Conversation', 'velrox' ); ?></span>
                </h2>
                <div class="divider"></div>
                <p style="margin-bottom:40px;color:var(--text-muted);line-height:1.7;">
                    <?php esc_html_e( "Whether you're a seafood importer, wholesaler, distributor, or food service buyer in Europe — we'd love to hear from you. Our team is ready to discuss your requirements.", 'velrox' ); ?>
                </p>

                <div class="contact-details">
                    <div class="contact-detail-item">
                        <div class="cdi-icon"><?php echo velrox_icon( 'mappin', 20 ); // phpcs:ignore ?></div>
                        <div>
                            <div class="cdi-label"><?php esc_html_e( 'Office Address', 'velrox' ); ?></div>
                            <div class="cdi-value"><?php esc_html_e( '123 Trade Centre, Business Bay', 'velrox' ); ?><br><?php esc_html_e( 'Amsterdam, Netherlands', 'velrox' ); ?></div>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="cdi-icon"><?php echo velrox_icon( 'mail', 20 ); // phpcs:ignore ?></div>
                        <div>
                            <div class="cdi-label"><?php esc_html_e( 'Email', 'velrox' ); ?></div>
                            <div class="cdi-value"><a href="mailto:info@velrox.com">info@velrox.com</a></div>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="cdi-icon"><?php echo velrox_icon( 'phone', 20 ); // phpcs:ignore ?></div>
                        <div>
                            <div class="cdi-label"><?php esc_html_e( 'Phone', 'velrox' ); ?></div>
                            <div class="cdi-value"><a href="tel:+31201234567">+31 20 123 4567</a></div>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="cdi-icon whatsapp"><?php echo velrox_icon( 'message', 20 ); // phpcs:ignore ?></div>
                        <div>
                            <div class="cdi-label"><?php esc_html_e( 'WhatsApp', 'velrox' ); ?></div>
                            <div class="cdi-value"><a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer">+31 20 123 4567</a></div>
                        </div>
                    </div>
                </div>

                <div class="contact-hours">
                    <h4><?php esc_html_e( 'Business Hours', 'velrox' ); ?></h4>
                    <div class="hours-grid">
                        <span><?php esc_html_e( 'Monday – Friday', 'velrox' ); ?></span>
                        <span class="hours-value"><?php esc_html_e( '9:00 AM – 6:00 PM CET', 'velrox' ); ?></span>
                        <span><?php esc_html_e( 'Saturday', 'velrox' ); ?></span>
                        <span class="hours-value"><?php esc_html_e( '10:00 AM – 2:00 PM CET', 'velrox' ); ?></span>
                        <span><?php esc_html_e( 'Sunday', 'velrox' ); ?></span>
                        <span class="hours-value"><?php esc_html_e( 'Closed', 'velrox' ); ?></span>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="animate-slide-right">
                <div class="contact-form-card">
                    <h3><?php esc_html_e( 'Send Us a Message', 'velrox' ); ?></h3>
                    <p><?php esc_html_e( 'Fill out the form below and our team will respond within 1 business day.', 'velrox' ); ?></p>

                    <div class="form-success" id="form-success">
                        <p style="font-size:48px;margin-bottom:0;">✓</p>
                        <h4><?php esc_html_e( 'Message Sent!', 'velrox' ); ?></h4>
                        <p><?php esc_html_e( 'Thank you for reaching out. Our team will get back to you within 1 business day.', 'velrox' ); ?></p>
                    </div>

                    <div class="form-error" id="form-error">
                        <span>⚠</span>
                        <span id="form-error-msg"><?php esc_html_e( 'Something went wrong. Please try again.', 'velrox' ); ?></span>
                    </div>

                    <form class="inquiry-form" id="velrox-contact-form" novalidate>
                        <?php wp_nonce_field( 'velrox_contact_nonce', 'velrox_nonce' ); ?>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name"><?php esc_html_e( 'Full Name *', 'velrox' ); ?></label>
                                <input id="contact-name" name="name" type="text" placeholder="<?php esc_attr_e( 'Your full name', 'velrox' ); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="contact-email"><?php esc_html_e( 'Email Address *', 'velrox' ); ?></label>
                                <input id="contact-email" name="email" type="email" placeholder="your@email.com" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-company"><?php esc_html_e( 'Company Name', 'velrox' ); ?></label>
                                <input id="contact-company" name="company" type="text" placeholder="<?php esc_attr_e( 'Your company', 'velrox' ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="contact-phone"><?php esc_html_e( 'Phone Number', 'velrox' ); ?></label>
                                <input id="contact-phone" name="phone" type="tel" placeholder="+31 xx xxx xxxx">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-subject"><?php esc_html_e( 'Subject *', 'velrox' ); ?></label>
                            <select id="contact-subject" name="subject" required>
                                <option value=""><?php esc_html_e( 'Select inquiry type', 'velrox' ); ?></option>
                                <?php
                                $subjects = [
                                    __( 'Frozen Seafood Sourcing Inquiry', 'velrox' ),
                                    __( 'Export Coordination', 'velrox' ),
                                    __( 'Logistics & Distribution', 'velrox' ),
                                    __( 'Trade Partnership', 'velrox' ),
                                    __( 'Price & Availability', 'velrox' ),
                                    __( 'General Inquiry', 'velrox' ),
                                ];
                                foreach ( $subjects as $s ) :
                                ?>
                                <option value="<?php echo esc_attr( $s ); ?>"><?php echo esc_html( $s ); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact-message"><?php esc_html_e( 'Message *', 'velrox' ); ?></label>
                            <textarea id="contact-message" name="message" rows="5"
                                placeholder="<?php esc_attr_e( 'Please describe your requirements, quantities, preferred products, and any other relevant details...', 'velrox' ); ?>"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg form-submit" id="form-submit">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                            <?php esc_html_e( 'Send Message', 'velrox' ); ?>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
