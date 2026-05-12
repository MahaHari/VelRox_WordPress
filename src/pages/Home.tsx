import { useEffect, useRef } from 'react'
import { Link } from 'react-router-dom'
import { ArrowRight, Fish, Package, Truck, ChartBar as BarChart3, Globe, ShieldCheck, Zap, Users, TrendingUp, Anchor, MapPin, CircleCheck as CheckCircle } from 'lucide-react'
import './Home.css'

function useAnimateOnScroll(selector = '.animate-fade-up, .animate-fade-in, .animate-slide-left, .animate-slide-right') {
  const ref = useRef<HTMLDivElement>(null)
  useEffect(() => {
    const el = ref.current
    if (!el) return
    const observer = new IntersectionObserver(
      entries => entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible') }),
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    )
    el.querySelectorAll(selector).forEach(node => observer.observe(node))
    return () => observer.disconnect()
  }, [selector])
  return ref
}

const services = [
  { icon: <Fish size={28}/>, title: 'Frozen Seafood Sourcing', desc: 'Direct access to premium frozen seafood from certified processing partners across global supply chains.' },
  { icon: <Package size={28}/>, title: 'Export Coordination', desc: 'End-to-end export management ensuring compliance with international trade regulations and documentation.' },
  { icon: <Truck size={28}/>, title: 'Logistics & Distribution', desc: 'Container logistics and cold-chain distribution networks optimized for European market delivery.' },
  { icon: <BarChart3 size={28}/>, title: 'Trade Solutions', desc: 'Customized commercial trade solutions tailored to the specific needs of importers and wholesalers.' },
]

const strengths = [
  { icon: <Anchor size={24}/>, title: 'Direct Sourcing from India', desc: 'Strong established relationships with certified processing partners in India\'s seafood industry.' },
  { icon: <Globe size={24}/>, title: 'European Logistics Network', desc: 'Deep knowledge of European import standards, cold-chain requirements, and distribution channels.' },
  { icon: <Zap size={24}/>, title: 'Commercial Flexibility', desc: 'Adaptable commercial terms and supply arrangements to match your business requirements.' },
  { icon: <ShieldCheck size={24}/>, title: 'Quality & Compliance', desc: 'Rigorous quality standards and full compliance with EU food safety and import regulations.' },
]

const whyCards = [
  { icon: <Globe size={22}/>, title: 'International Trade Mindset', desc: 'Built for cross-border trade with deep expertise in navigating global seafood markets.' },
  { icon: <TrendingUp size={22}/>, title: 'European Market Focus', desc: 'Specialized understanding of European buyer expectations, certifications, and regulations.' },
  { icon: <Package size={22}/>, title: 'Flexible Supply', desc: 'Volume flexibility from trial orders to full container loads to match your procurement cycle.' },
  { icon: <Zap size={22}/>, title: 'Fast Communication', desc: 'Dedicated team ensuring rapid response and transparent communication at every step.' },
  { icon: <Users size={22}/>, title: 'Long-term Partnerships', desc: 'We invest in relationships, not transactions — growing together with our trading partners.' },
]

export default function Home() {
  const heroRef = useRef<HTMLDivElement>(null)
  const sectionsRef = useAnimateOnScroll()

  useEffect(() => {
    const hero = heroRef.current
    if (!hero) return
    const onScroll = () => {
      const scrollY = window.scrollY
      hero.style.transform = `translateY(${scrollY * 0.3}px)`
    }
    window.addEventListener('scroll', onScroll, { passive: true })
    return () => window.removeEventListener('scroll', onScroll)
  }, [])

  return (
    <div className="home-page" ref={sectionsRef}>
      {/* HERO */}
      <section className="hero-section">
        <div className="hero-bg" ref={heroRef}>
          <img
            src="https://images.pexels.com/photos/1619838/pexels-photo-1619838.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
            alt="Seafood trading vessel"
          />
        </div>
        <div className="hero-overlay" />
        <div className="hero-content container">
          <div className="hero-text animate-fade-up">
            <div className="hero-tag">
              <span className="tag-dot" />
              Global Seafood Trading
            </div>
            <h1 className="hero-title">
              Reliable Global<br/>
              <span>Seafood Trading</span><br/>
              Solutions
            </h1>
            <p className="hero-subtitle">
              Connecting international seafood supply with European market standards through trust, logistics, and long-term partnerships.
            </p>
            <div className="hero-actions">
              <Link to="/services" className="btn btn-primary btn-lg">
                Explore Services <ArrowRight size={18}/>
              </Link>
              <Link to="/contact" className="btn btn-outline btn-lg">
                Contact Us
              </Link>
            </div>
          </div>
        </div>
        <div className="hero-scroll-indicator">
          <div className="scroll-line" />
        </div>
      </section>

      {/* STATS BAR */}
      <section className="stats-bar animate-fade-up">
        <div className="container-wide">
          <div className="stats-grid">
            {[
              { num: '10+', label: 'Years Experience' },
              { num: '50+', label: 'Trading Partners' },
              { num: '20+', label: 'European Markets' },
              { num: '100%', label: 'Quality Assured' },
            ].map((stat, i) => (
              <div key={i} className="stat-item">
                <span className="stat-num">{stat.num}</span>
                <span className="stat-label">{stat.label}</span>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ABOUT VELROX */}
      <section className="section-padding about-section">
        <div className="container">
          <div className="about-grid">
            <div className="about-image-col animate-slide-left">
              <div className="about-img-wrapper">
                <img
                  src="https://images.pexels.com/photos/3766111/pexels-photo-3766111.jpeg?auto=compress&cs=tinysrgb&w=800&q=80"
                  alt="Seafood trading operations"
                />
                <div className="about-badge">
                  <Fish size={20}/>
                  <span>Trusted Since 2010</span>
                </div>
              </div>
            </div>
            <div className="about-text-col animate-slide-right">
              <div className="section-tag">About Velrox</div>
              <h2 className="section-title">
                Bridging Global Supply with <span className="highlight">European Standards</span>
              </h2>
              <div className="divider" />
              <p style={{ marginBottom: '16px' }}>
                At Velrox, we connect global seafood supply with European market standards through reliable sourcing, transparent trade, and long-term partnerships.
              </p>
              <p>
                Founded with a focus on international frozen seafood trading, Velrox works closely with processing partners and logistics networks to deliver consistent quality products to importers, wholesalers, distributors, and food service buyers across Europe.
              </p>
              <div className="about-checklist">
                {['Certified processing partners', 'EU food safety compliance', 'Transparent trade practices', 'Dedicated account support'].map(item => (
                  <div key={item} className="check-item">
                    <CheckCircle size={16} className="check-icon" />
                    <span>{item}</span>
                  </div>
                ))}
              </div>
              <Link to="/about" className="btn btn-outline-dark" style={{ marginTop: '8px' }}>
                Learn More About Us <ArrowRight size={16}/>
              </Link>
            </div>
          </div>
        </div>
      </section>

      {/* WHAT WE DO - Services */}
      <section className="section-padding services-section">
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">What We Do</div>
            <h2 className="section-title animate-fade-up delay-1">
              Comprehensive <span className="highlight">Seafood Trade</span> Services
            </h2>
            <p className="section-subtitle animate-fade-up delay-2">
              From sourcing to logistics, we provide end-to-end solutions for your frozen seafood procurement needs.
            </p>
          </div>
          <div className="services-grid">
            {services.map((s, i) => (
              <div key={i} className={`service-card animate-fade-up delay-${i + 1}`}>
                <div className="service-icon">{s.icon}</div>
                <h3 className="service-title">{s.title}</h3>
                <p className="service-desc">{s.desc}</p>
                <Link to="/services" className="service-link">
                  Learn more <ArrowRight size={14}/>
                </Link>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* OUR STRENGTHS */}
      <section className="section-padding strengths-section">
        <div className="container">
          <div className="strengths-grid">
            <div className="strengths-left animate-slide-left">
              <div className="section-tag">Our Strengths</div>
              <h2 className="section-title">
                Why the Industry <span className="highlight">Trusts Velrox</span>
              </h2>
              <div className="divider" />
              <p className="section-subtitle">
                Built on decades of experience in international seafood trade, our capabilities set us apart in the European market.
              </p>
              <Link to="/why-velrox" className="btn btn-primary" style={{ marginTop: '32px' }}>
                Why Choose Us <ArrowRight size={16}/>
              </Link>
            </div>
            <div className="strengths-right">
              {strengths.map((s, i) => (
                <div key={i} className={`strength-item animate-fade-up delay-${i + 1}`}>
                  <div className="strength-icon">{s.icon}</div>
                  <div>
                    <h4 className="strength-title">{s.title}</h4>
                    <p className="strength-desc">{s.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* OUR APPROACH */}
      <section className="section-padding approach-section">
        <div className="approach-bg">
          <img
            src="https://images.pexels.com/photos/1117211/pexels-photo-1117211.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
            alt="Ocean shipping"
          />
          <div className="approach-overlay" />
        </div>
        <div className="container">
          <div className="approach-content">
            <div className="section-tag animate-fade-up" style={{ background: 'rgba(0,166,203,0.15)', borderColor: 'rgba(0,166,203,0.30)', color: '#00A6CB' }}>
              Our Approach
            </div>
            <h2 className="section-title animate-fade-up delay-1" style={{ color: 'white' }}>
              How We Deliver <span className="highlight">Excellence</span>
            </h2>
            <div className="approach-steps">
              {[
                { num: '01', title: 'Reliable Sourcing', desc: 'We maintain strong relationships with certified processing partners, ensuring consistent product availability and quality.' },
                { num: '02', title: 'Efficient Logistics', desc: 'Our cold-chain logistics network ensures your seafood arrives in perfect condition, on time, every time.' },
                { num: '03', title: 'Competitive Pricing', desc: 'Direct sourcing relationships and operational efficiency allow us to offer market-competitive pricing structures.' },
                { num: '04', title: 'Long-term Relationships', desc: 'We grow with our partners, building lasting commercial relationships through trust, transparency, and consistent delivery.' },
              ].map((step, i) => (
                <div key={i} className={`approach-step animate-fade-up delay-${i + 1}`}>
                  <div className="step-num">{step.num}</div>
                  <div className="step-content">
                    <h4>{step.title}</h4>
                    <p>{step.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* VISION & MISSION PREVIEW */}
      <section className="section-padding vm-preview-section">
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Vision & Mission</div>
            <h2 className="section-title animate-fade-up delay-1">
              Guided by <span className="highlight">Purpose</span>
            </h2>
          </div>
          <div className="vm-grid">
            <div className="vm-card vm-vision animate-slide-left">
              <div className="vm-icon">
                <Globe size={32}/>
              </div>
              <h3>Our Vision</h3>
              <p>To become a leading international seafood trading company known for reliability, quality, and sustainable supply chain excellence across European markets.</p>
              <Link to="/vision-mission" className="vm-link">Read More <ArrowRight size={14}/></Link>
            </div>
            <div className="vm-card vm-mission animate-slide-right">
              <div className="vm-icon">
                <Anchor size={32}/>
              </div>
              <h3>Our Mission</h3>
              <p>To bridge global seafood supply with European market standards by delivering transparent, efficient, and reliable trade partnerships that create lasting value for all stakeholders.</p>
              <Link to="/vision-mission" className="vm-link">Read More <ArrowRight size={14}/></Link>
            </div>
          </div>
        </div>
      </section>

      {/* WHY VELROX HIGHLIGHTS */}
      <section className="section-padding why-section">
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Why Velrox</div>
            <h2 className="section-title animate-fade-up delay-1">
              The Velrox <span className="highlight">Advantage</span>
            </h2>
            <p className="section-subtitle animate-fade-up delay-2">
              We combine industry expertise with a client-first approach to deliver measurable value to every partner.
            </p>
          </div>
          <div className="why-grid">
            {whyCards.map((card, i) => (
              <div key={i} className={`why-card animate-fade-up delay-${i + 1}`}>
                <div className="why-icon">{card.icon}</div>
                <h4>{card.title}</h4>
                <p>{card.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* GLOBAL TRADE SECTION */}
      <section className="section-padding global-section">
        <div className="container">
          <div className="global-inner animate-fade-up">
            <div className="global-bg">
              <img
                src="https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1200&q=80"
                alt="Global shipping"
              />
            </div>
            <div className="global-overlay" />
            <div className="global-content">
              <div className="section-tag" style={{ background: 'rgba(0,166,203,0.15)', borderColor: 'rgba(0,166,203,0.30)' }}>
                Global Reach
              </div>
              <h2 style={{ color: 'white', fontSize: 'clamp(26px, 3.5vw, 40px)', fontFamily: 'Raleway, sans-serif', fontWeight: 800, marginBottom: '16px' }}>
                Connecting Supply Chains<br/>Across Continents
              </h2>
              <p style={{ color: 'rgba(255,255,255,0.75)', maxWidth: '520px', marginBottom: '32px', fontSize: '16px', lineHeight: '1.7' }}>
                From the processing facilities in South Asia to the ports of Northern Europe, Velrox manages the entire trade journey to ensure your seafood arrives with quality and precision.
              </p>
              <div className="global-stats">
                {[
                  { icon: <MapPin size={18}/>, text: 'India Origin Sourcing' },
                  { icon: <Truck size={18}/>, text: 'EU Port Delivery' },
                  { icon: <ShieldCheck size={18}/>, text: 'HACCP Compliant' },
                ].map((item, i) => (
                  <div key={i} className="global-stat-tag">
                    {item.icon}
                    <span>{item.text}</span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA SECTION */}
      <section className="cta-section">
        <div className="container">
          <div className="cta-inner animate-fade-up">
            <h2>Ready to Start a Conversation?</h2>
            <p>Reach out to discuss your seafood sourcing requirements and discover how Velrox can support your business.</p>
            <div className="cta-actions">
              <Link to="/contact" className="btn btn-primary btn-lg">
                Get In Touch <ArrowRight size={18}/>
              </Link>
              <Link to="/services" className="btn btn-outline btn-lg">
                View Services
              </Link>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
