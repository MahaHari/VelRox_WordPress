import { useEffect, useRef } from 'react'
import { Link } from 'react-router-dom'
import { ArrowRight, CircleCheck as CheckCircle, Users, Globe, Handshake, TrendingUp } from 'lucide-react'
import PageBanner from '../components/PageBanner'
import './About.css'

function useAnimate() {
  const ref = useRef<HTMLDivElement>(null)
  useEffect(() => {
    const el = ref.current
    if (!el) return
    const observer = new IntersectionObserver(
      entries => entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible') }),
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    )
    el.querySelectorAll('.animate-fade-up, .animate-fade-in, .animate-slide-left, .animate-slide-right').forEach(n => observer.observe(n))
    return () => observer.disconnect()
  }, [])
  return ref
}

const values = [
  { icon: <Handshake size={22}/>, title: 'Integrity', desc: 'We conduct business with complete transparency and honesty in every transaction.' },
  { icon: <TrendingUp size={22}/>, title: 'Excellence', desc: 'We are committed to delivering the highest quality products and services.' },
  { icon: <Users size={22}/>, title: 'Partnership', desc: 'We build meaningful long-term partnerships based on mutual trust and growth.' },
  { icon: <Globe size={22}/>, title: 'Global Vision', desc: 'We think globally and act with a deep understanding of international markets.' },
]

export default function About() {
  const ref = useAnimate()

  return (
    <div ref={ref}>
      <PageBanner
        title="About Velrox"
        subtitle="Learn about our story, values, and the team driving Velrox Global Seafood Trading."
        image="https://images.pexels.com/photos/3766111/pexels-photo-3766111.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
        breadcrumb="About Us"
      />

      {/* Who We Are */}
      <section className="section-padding">
        <div className="container">
          <div className="about-who-grid">
            <div className="animate-slide-left">
              <div className="section-tag">Who We Are</div>
              <h2 className="section-title">
                A Trusted Name in <span className="highlight">Global Seafood Trade</span>
              </h2>
              <div className="divider" />
              <p style={{ marginBottom: '16px' }}>
                At Velrox, we connect global seafood supply with European market standards through reliable sourcing, transparent trade, and long-term partnerships.
              </p>
              <p style={{ marginBottom: '24px' }}>
                Founded with a focus on international frozen seafood trading, Velrox works closely with processing partners and logistics networks to deliver consistent quality products to importers, wholesalers, distributors, and food service buyers across Europe.
              </p>
              <p>
                Our team brings together expertise in international trade, seafood processing standards, cold-chain logistics, and European regulatory compliance — allowing us to serve as a reliable bridge between suppliers and buyers across continents.
              </p>
              <div className="about-points">
                {[
                  'Established relationships with certified Indian seafood processors',
                  'Deep knowledge of EU import regulations and food safety standards',
                  'Experienced trade and logistics coordination team',
                  'Commitment to transparent, long-term commercial relationships',
                ].map(pt => (
                  <div key={pt} className="about-point">
                    <CheckCircle size={15} color="var(--teal)" />
                    <span>{pt}</span>
                  </div>
                ))}
              </div>
            </div>
            <div className="animate-slide-right">
              <div className="about-img-stack">
                <div className="about-img-main">
                  <img src="https://images.pexels.com/photos/1619838/pexels-photo-1619838.jpeg?auto=compress&cs=tinysrgb&w=800&q=80" alt="Seafood trading vessel" />
                </div>
                <div className="about-img-secondary">
                  <img src="https://images.pexels.com/photos/3680219/pexels-photo-3680219.jpeg?auto=compress&cs=tinysrgb&w=400&q=80" alt="Seafood processing" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Our Values */}
      <section className="section-padding" style={{ background: 'var(--grey-bg)' }}>
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Core Values</div>
            <h2 className="section-title animate-fade-up delay-1">
              The Principles That <span className="highlight">Guide Us</span>
            </h2>
            <p className="section-subtitle animate-fade-up delay-2">
              Our values are the foundation of every relationship we build and every trade we facilitate.
            </p>
          </div>
          <div className="values-grid">
            {values.map((v, i) => (
              <div key={i} className={`value-card animate-fade-up delay-${i + 1}`}>
                <div className="value-icon">{v.icon}</div>
                <h3 className="value-title">{v.title}</h3>
                <p>{v.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Journey */}
      <section className="section-padding">
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Our Journey</div>
            <h2 className="section-title animate-fade-up delay-1">
              Building <span className="highlight">Trade Excellence</span> Over the Years
            </h2>
          </div>
          <div className="timeline">
            {[
              { year: '2010', title: 'Founded in Amsterdam', desc: 'Velrox was established with a mission to bridge global seafood supply with European buyers.' },
              { year: '2013', title: 'Indian Market Entry', desc: 'Established direct partnerships with certified frozen seafood processors in India.' },
              { year: '2016', title: 'European Expansion', desc: 'Expanded operations to serve importers across 10+ European countries.' },
              { year: '2019', title: 'Logistics Network', desc: 'Built a comprehensive cold-chain logistics and container distribution network.' },
              { year: '2022', title: 'Sustainable Trading', desc: 'Adopted sustainable sourcing practices and enhanced compliance programs.' },
              { year: '2024', title: 'Global Leadership', desc: 'Recognized as a trusted partner for European frozen seafood procurement.' },
            ].map((item, i) => (
              <div key={i} className={`timeline-item ${i % 2 === 0 ? 'left' : 'right'} animate-fade-up delay-${(i % 3) + 1}`}>
                <div className="timeline-content">
                  <span className="timeline-year">{item.year}</span>
                  <h4>{item.title}</h4>
                  <p>{item.desc}</p>
                </div>
              </div>
            ))}
            <div className="timeline-line" />
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="section-padding-sm" style={{ background: 'var(--navy)' }}>
        <div className="container" style={{ textAlign: 'center' }}>
          <h2 className="animate-fade-up" style={{ color: 'white', marginBottom: '16px', fontFamily: 'Raleway, sans-serif', fontSize: 'clamp(24px,3vw,36px)' }}>
            Ready to Trade with Velrox?
          </h2>
          <p className="animate-fade-up delay-1" style={{ color: 'rgba(255,255,255,0.65)', marginBottom: '32px', maxWidth: '480px', margin: '0 auto 32px' }}>
            Contact our team to discuss your requirements and start a rewarding partnership.
          </p>
          <Link to="/contact" className="btn btn-primary btn-lg animate-fade-up delay-2">
            Contact Us <ArrowRight size={18}/>
          </Link>
        </div>
      </section>
    </div>
  )
}
