import { useState, useEffect } from 'react'
import { Link, useLocation } from 'react-router-dom'
import { Menu, X } from 'lucide-react'
import './Header.css'

const navLinks = [
  { label: 'Home', path: '/' },
  { label: 'About Us', path: '/about' },
  { label: 'Services', path: '/services' },
  { label: 'Why Velrox', path: '/why-velrox' },
  { label: 'Vision & Mission', path: '/vision-mission' },
]

export default function Header() {
  const [scrolled, setScrolled] = useState(false)
  const [mobileOpen, setMobileOpen] = useState(false)
  const location = useLocation()

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 40)
    window.addEventListener('scroll', onScroll)
    return () => window.removeEventListener('scroll', onScroll)
  }, [])

  useEffect(() => {
    setMobileOpen(false)
  }, [location.pathname])

  useEffect(() => {
    document.body.style.overflow = mobileOpen ? 'hidden' : ''
    return () => { document.body.style.overflow = '' }
  }, [mobileOpen])

  return (
    <header className={`site-header ${scrolled ? 'scrolled' : ''}`}>
      <div className="header-inner container-wide">
        <Link to="/" className="logo">
          <div className="logo-icon">
            <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="40" height="40" rx="6" fill="#00A6CB"/>
              <path d="M8 20C8 20 12 12 20 12C28 12 32 20 32 20C32 20 28 28 20 28C12 28 8 20 8 20Z" fill="white" opacity="0.15"/>
              <ellipse cx="20" cy="20" rx="7" ry="5" fill="white" opacity="0.9"/>
              <circle cx="22" cy="19" r="1.5" fill="#00A6CB"/>
              <path d="M30 20C30 20 32 18 34 20C32 22 30 20 30 20Z" fill="white" opacity="0.8"/>
            </svg>
          </div>
          <div className="logo-text">
            <span className="logo-brand">VELROX</span>
            <span className="logo-sub">Global Seafood Trading</span>
          </div>
        </Link>

        <nav className="desktop-nav">
          {navLinks.map(link => (
            <Link
              key={link.path}
              to={link.path}
              className={`nav-link ${location.pathname === link.path ? 'active' : ''}`}
            >
              {link.label}
            </Link>
          ))}
        </nav>

        <div className="header-actions">
          <Link to="/contact" className="btn btn-primary">
            Contact Us
          </Link>
          <button
            className="mobile-toggle"
            onClick={() => setMobileOpen(!mobileOpen)}
            aria-label="Toggle menu"
          >
            {mobileOpen ? <X size={22} /> : <Menu size={22} />}
          </button>
        </div>
      </div>

      {/* Mobile Menu */}
      <div className={`mobile-menu ${mobileOpen ? 'open' : ''}`}>
        <nav className="mobile-nav">
          {navLinks.map(link => (
            <Link
              key={link.path}
              to={link.path}
              className={`mobile-nav-link ${location.pathname === link.path ? 'active' : ''}`}
            >
              {link.label}
            </Link>
          ))}
          <Link to="/contact" className="btn btn-primary mobile-cta">
            Contact Us
          </Link>
        </nav>
      </div>
    </header>
  )
}
