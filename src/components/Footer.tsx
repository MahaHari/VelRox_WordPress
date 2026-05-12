import { Link } from 'react-router-dom'
import { MapPin, Mail, Phone, Linkedin, Twitter, Facebook, Instagram } from 'lucide-react'
import './Footer.css'

const quickLinks = [
  { label: 'Home', path: '/' },
  { label: 'About Us', path: '/about' },
  { label: 'Services', path: '/services' },
  { label: 'Why Velrox', path: '/why-velrox' },
  { label: 'Vision & Mission', path: '/vision-mission' },
  { label: 'Contact Us', path: '/contact' },
]

export default function Footer() {
  return (
    <footer className="site-footer">
      <div className="footer-top">
        <div className="container">
          <div className="footer-grid">
            {/* Brand Column */}
            <div className="footer-brand">
              <Link to="/" className="footer-logo">
                <div className="footer-logo-icon">
                  <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="6" fill="#00A6CB"/>
                    <path d="M8 20C8 20 12 12 20 12C28 12 32 20 32 20C32 20 28 28 20 28C12 28 8 20 8 20Z" fill="white" opacity="0.15"/>
                    <ellipse cx="20" cy="20" rx="7" ry="5" fill="white" opacity="0.9"/>
                    <circle cx="22" cy="19" r="1.5" fill="#00A6CB"/>
                    <path d="M30 20C30 20 32 18 34 20C32 22 30 20 30 20Z" fill="white" opacity="0.8"/>
                  </svg>
                </div>
                <div>
                  <div className="footer-brand-name">VELROX</div>
                  <div className="footer-brand-sub">Global Seafood Trading</div>
                </div>
              </Link>
              <p className="footer-desc">
                Connecting global seafood supply with European market standards through reliable sourcing, transparent trade, and long-term partnerships.
              </p>
              <div className="social-links">
                <a href="#" className="social-link" aria-label="LinkedIn"><Linkedin size={16}/></a>
                <a href="#" className="social-link" aria-label="Twitter"><Twitter size={16}/></a>
                <a href="#" className="social-link" aria-label="Facebook"><Facebook size={16}/></a>
                <a href="#" className="social-link" aria-label="Instagram"><Instagram size={16}/></a>
              </div>
            </div>

            {/* Quick Links */}
            <div className="footer-col">
              <h4 className="footer-heading">Quick Links</h4>
              <ul className="footer-links">
                {quickLinks.map(link => (
                  <li key={link.path}>
                    <Link to={link.path} className="footer-link">{link.label}</Link>
                  </li>
                ))}
              </ul>
            </div>

            {/* Services */}
            <div className="footer-col">
              <h4 className="footer-heading">Our Services</h4>
              <ul className="footer-links">
                <li><span className="footer-link">Frozen Seafood Sourcing</span></li>
                <li><span className="footer-link">Export Coordination</span></li>
                <li><span className="footer-link">Import & Wholesale Supply</span></li>
                <li><span className="footer-link">Container Logistics</span></li>
                <li><span className="footer-link">Trade Solutions</span></li>
              </ul>
            </div>

            {/* Contact */}
            <div className="footer-col">
              <h4 className="footer-heading">Contact Us</h4>
              <div className="footer-contact">
                <div className="contact-item">
                  <MapPin size={15} />
                  <span>123 Trade Centre, Business Bay, Amsterdam, Netherlands</span>
                </div>
                <div className="contact-item">
                  <Mail size={15} />
                  <a href="mailto:info@velrox.com">info@velrox.com</a>
                </div>
                <div className="contact-item">
                  <Phone size={15} />
                  <a href="tel:+31201234567">+31 20 123 4567</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="footer-bottom">
        <div className="container">
          <p>&copy; {new Date().getFullYear()} Velrox Global Seafood Trading. All rights reserved.</p>
          <div className="footer-legal">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>
  )
}
