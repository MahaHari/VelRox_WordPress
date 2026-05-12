import { useState, useEffect, useRef } from 'react'
import { MapPin, Mail, Phone, MessageCircle, Send, CircleCheck as CheckCircle, CircleAlert as AlertCircle } from 'lucide-react'
import { supabase } from '../lib/supabase'
import PageBanner from '../components/PageBanner'
import './Contact.css'

function useAnimate() {
  const ref = useRef<HTMLDivElement>(null)
  useEffect(() => {
    const el = ref.current
    if (!el) return
    const observer = new IntersectionObserver(
      entries => entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible') }),
      { threshold: 0.08, rootMargin: '0px 0px -40px 0px' }
    )
    el.querySelectorAll('.animate-fade-up, .animate-fade-in, .animate-slide-left, .animate-slide-right').forEach(n => observer.observe(n))
    return () => observer.disconnect()
  }, [])
  return ref
}

interface FormState {
  name: string
  email: string
  company: string
  phone: string
  subject: string
  message: string
}

const initialForm: FormState = {
  name: '',
  email: '',
  company: '',
  phone: '',
  subject: '',
  message: '',
}

const subjects = [
  'Frozen Seafood Sourcing Inquiry',
  'Export Coordination',
  'Logistics & Distribution',
  'Trade Partnership',
  'Price & Availability',
  'General Inquiry',
]

export default function Contact() {
  const ref = useAnimate()
  const [form, setForm] = useState<FormState>(initialForm)
  const [submitting, setSubmitting] = useState(false)
  const [status, setStatus] = useState<'idle' | 'success' | 'error'>('idle')
  const [errorMsg, setErrorMsg] = useState('')

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>) => {
    setForm(prev => ({ ...prev, [e.target.name]: e.target.value }))
  }

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault()
    setSubmitting(true)
    setStatus('idle')
    setErrorMsg('')

    const { error } = await supabase.from('contact_inquiries').insert({
      name: form.name.trim(),
      email: form.email.trim(),
      company: form.company.trim(),
      phone: form.phone.trim(),
      subject: form.subject,
      message: form.message.trim(),
    })

    setSubmitting(false)

    if (error) {
      setStatus('error')
      setErrorMsg('Something went wrong. Please try again or contact us directly.')
    } else {
      setStatus('success')
      setForm(initialForm)
    }
  }

  return (
    <div ref={ref}>
      <PageBanner
        title="Contact Us"
        subtitle="Get in touch with our trade team to discuss your seafood sourcing requirements."
        image="https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
        breadcrumb="Contact Us"
      />

      <section className="section-padding">
        <div className="container">
          <div className="contact-grid">
            {/* Contact Info */}
            <div className="contact-info animate-slide-left">
              <div className="section-tag">Get In Touch</div>
              <h2 className="section-title">
                Let's Start a <span className="highlight">Conversation</span>
              </h2>
              <div className="divider" />
              <p style={{ marginBottom: '40px', color: 'var(--text-muted)', lineHeight: '1.7' }}>
                Whether you're a seafood importer, wholesaler, distributor, or food service buyer in Europe — we'd love to hear from you. Our team is ready to discuss your requirements.
              </p>

              <div className="contact-details">
                <div className="contact-detail-item">
                  <div className="cdi-icon">
                    <MapPin size={20}/>
                  </div>
                  <div>
                    <div className="cdi-label">Office Address</div>
                    <div className="cdi-value">123 Trade Centre, Business Bay<br/>Amsterdam, Netherlands</div>
                  </div>
                </div>
                <div className="contact-detail-item">
                  <div className="cdi-icon">
                    <Mail size={20}/>
                  </div>
                  <div>
                    <div className="cdi-label">Email</div>
                    <a href="mailto:info@velrox.com" className="cdi-value cdi-link">info@velrox.com</a>
                  </div>
                </div>
                <div className="contact-detail-item">
                  <div className="cdi-icon">
                    <Phone size={20}/>
                  </div>
                  <div>
                    <div className="cdi-label">Phone</div>
                    <a href="tel:+31201234567" className="cdi-value cdi-link">+31 20 123 4567</a>
                  </div>
                </div>
                <div className="contact-detail-item">
                  <div className="cdi-icon" style={{ background: 'rgba(37,211,102,0.12)', borderColor: 'rgba(37,211,102,0.25)' }}>
                    <MessageCircle size={20} style={{ color: '#25D366' }}/>
                  </div>
                  <div>
                    <div className="cdi-label">WhatsApp</div>
                    <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" className="cdi-value cdi-link">+31 20 123 4567</a>
                  </div>
                </div>
              </div>

              <div className="contact-hours">
                <h4>Business Hours</h4>
                <div className="hours-grid">
                  <span>Monday – Friday</span>
                  <span>9:00 AM – 6:00 PM CET</span>
                  <span>Saturday</span>
                  <span>10:00 AM – 2:00 PM CET</span>
                  <span>Sunday</span>
                  <span>Closed</span>
                </div>
              </div>
            </div>

            {/* Contact Form */}
            <div className="contact-form-col animate-slide-right">
              <div className="contact-form-card">
                <h3>Send Us a Message</h3>
                <p>Fill out the form below and our team will respond within 1 business day.</p>

                {status === 'success' ? (
                  <div className="form-success">
                    <CheckCircle size={48}/>
                    <h4>Message Sent!</h4>
                    <p>Thank you for reaching out. Our team will get back to you within 1 business day.</p>
                    <button className="btn btn-primary" onClick={() => setStatus('idle')}>
                      Send Another Message
                    </button>
                  </div>
                ) : (
                  <form className="inquiry-form" onSubmit={handleSubmit}>
                    <div className="form-row">
                      <div className="form-group">
                        <label htmlFor="name">Full Name *</label>
                        <input
                          id="name"
                          name="name"
                          type="text"
                          placeholder="Your full name"
                          value={form.name}
                          onChange={handleChange}
                          required
                        />
                      </div>
                      <div className="form-group">
                        <label htmlFor="email">Email Address *</label>
                        <input
                          id="email"
                          name="email"
                          type="email"
                          placeholder="your@email.com"
                          value={form.email}
                          onChange={handleChange}
                          required
                        />
                      </div>
                    </div>
                    <div className="form-row">
                      <div className="form-group">
                        <label htmlFor="company">Company Name</label>
                        <input
                          id="company"
                          name="company"
                          type="text"
                          placeholder="Your company"
                          value={form.company}
                          onChange={handleChange}
                        />
                      </div>
                      <div className="form-group">
                        <label htmlFor="phone">Phone Number</label>
                        <input
                          id="phone"
                          name="phone"
                          type="tel"
                          placeholder="+31 xx xxx xxxx"
                          value={form.phone}
                          onChange={handleChange}
                        />
                      </div>
                    </div>
                    <div className="form-group">
                      <label htmlFor="subject">Subject *</label>
                      <select
                        id="subject"
                        name="subject"
                        value={form.subject}
                        onChange={handleChange}
                        required
                      >
                        <option value="">Select inquiry type</option>
                        {subjects.map(s => (
                          <option key={s} value={s}>{s}</option>
                        ))}
                      </select>
                    </div>
                    <div className="form-group">
                      <label htmlFor="message">Message *</label>
                      <textarea
                        id="message"
                        name="message"
                        rows={5}
                        placeholder="Please describe your requirements, quantities, preferred products, and any other relevant details..."
                        value={form.message}
                        onChange={handleChange}
                        required
                      />
                    </div>

                    {status === 'error' && (
                      <div className="form-error-msg">
                        <AlertCircle size={16}/>
                        <span>{errorMsg}</span>
                      </div>
                    )}

                    <button
                      type="submit"
                      className="btn btn-primary btn-lg form-submit"
                      disabled={submitting}
                    >
                      {submitting ? (
                        <>
                          <div className="spinner" />
                          Sending...
                        </>
                      ) : (
                        <>
                          <Send size={17}/>
                          Send Message
                        </>
                      )}
                    </button>
                  </form>
                )}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
