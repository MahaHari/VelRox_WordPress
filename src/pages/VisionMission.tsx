import { useEffect, useRef } from 'react'
import { Link } from 'react-router-dom'
import { ArrowRight, Globe, Anchor, Target, Heart, Leaf, ChartBar as BarChart3 } from 'lucide-react'
import PageBanner from '../components/PageBanner'
import './VisionMission.css'

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

const coreValues = [
  { icon: <Heart size={20}/>, title: 'Integrity', desc: 'Every trade is conducted with complete honesty and accountability.' },
  { icon: <Target size={20}/>, title: 'Precision', desc: 'Accurate documentation, compliance, and quality standards on every shipment.' },
  { icon: <Globe size={20}/>, title: 'Global Reach', desc: 'Building connections that bridge continents and cultures in seafood trade.' },
  { icon: <Leaf size={20}/>, title: 'Sustainability', desc: 'Promoting responsible and sustainable seafood sourcing practices.' },
  { icon: <BarChart3 size={20}/>, title: 'Growth', desc: 'Growing together with our partners through consistent value delivery.' },
  { icon: <Anchor size={20}/>, title: 'Reliability', desc: 'Being the dependable partner our clients can always count on.' },
]

const goals = [
  { year: '2025', title: 'Market Leadership', desc: 'Establish Velrox as the top-of-mind brand for Indian frozen seafood exports to Europe.' },
  { year: '2026', title: 'Product Expansion', desc: 'Extend product range to cover 15+ species and value-added seafood categories.' },
  { year: '2027', title: 'Logistics Excellence', desc: 'Own and operate dedicated cold logistics assets across key European ports.' },
  { year: '2028', title: 'Sustainability Leader', desc: 'Achieve full sustainability certification for all sourcing partnerships.' },
]

export default function VisionMission() {
  const ref = useAnimate()

  return (
    <div ref={ref}>
      <PageBanner
        title="Vision & Mission"
        subtitle="The purpose and ambition that drives everything we do at Velrox Global Seafood Trading."
        image="https://images.pexels.com/photos/1619838/pexels-photo-1619838.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
        breadcrumb="Vision & Mission"
      />

      {/* Vision & Mission Cards */}
      <section className="section-padding vm-main-section">
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Our Purpose</div>
            <h2 className="section-title animate-fade-up delay-1">
              Guided by <span className="highlight">Clear Vision</span> & Purpose
            </h2>
            <p className="section-subtitle animate-fade-up delay-2">
              At Velrox, our vision and mission are not just words — they are the compass that guides every decision and every partnership we forge.
            </p>
          </div>

          <div className="vm-main-grid">
            <div className="vm-main-card vision-card animate-slide-left">
              <div className="vmc-accent" />
              <div className="vmc-icon">
                <Globe size={40}/>
              </div>
              <div className="vmc-tag">Our Vision</div>
              <h2>A Global Leader in Responsible Seafood Trade</h2>
              <div className="vmc-divider" />
              <p>
                To become a leading international seafood trading company recognized for reliability, quality, and sustainable supply chain excellence across European markets and beyond.
              </p>
              <p>
                We envision a world where premium frozen seafood from the world's best production regions reaches European buyers effortlessly, with full traceability and confidence in every shipment.
              </p>
              <ul className="vmc-points">
                <li>Industry recognition for trade excellence in Europe</li>
                <li>Benchmark standards for Asian seafood exports</li>
                <li>Trusted partner for 100+ European businesses</li>
              </ul>
            </div>

            <div className="vm-main-card mission-card animate-slide-right">
              <div className="vmc-accent" />
              <div className="vmc-icon">
                <Anchor size={40}/>
              </div>
              <div className="vmc-tag">Our Mission</div>
              <h2>Connecting Supply to Standards, Every Day</h2>
              <div className="vmc-divider" />
              <p>
                To bridge global seafood supply with European market standards by delivering transparent, efficient, and reliable trade partnerships that create lasting value for all stakeholders.
              </p>
              <p>
                We fulfill this mission by maintaining rigorous quality standards, building strong supplier relationships, investing in logistics excellence, and treating every client as a long-term partner.
              </p>
              <ul className="vmc-points">
                <li>End-to-end trade management for every order</li>
                <li>Transparent communication at every trade stage</li>
                <li>Consistent quality and on-time delivery</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      {/* Core Values */}
      <section className="section-padding" style={{ background: 'var(--grey-bg)' }}>
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Core Values</div>
            <h2 className="section-title animate-fade-up delay-1">
              The Values We <span className="highlight">Live By</span>
            </h2>
            <p className="section-subtitle animate-fade-up delay-2">
              These principles shape our culture, our decisions, and our relationships.
            </p>
          </div>
          <div className="core-values-grid">
            {coreValues.map((val, i) => (
              <div key={i} className={`cv-card animate-fade-up delay-${(i % 3) + 1}`}>
                <div className="cv-icon">{val.icon}</div>
                <h4>{val.title}</h4>
                <p>{val.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Strategic Goals */}
      <section className="section-padding">
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Strategic Goals</div>
            <h2 className="section-title animate-fade-up delay-1">
              Our Roadmap to <span className="highlight">2028</span>
            </h2>
          </div>
          <div className="goals-grid">
            {goals.map((goal, i) => (
              <div key={i} className={`goal-card animate-fade-up delay-${i + 1}`}>
                <div className="goal-year">{goal.year}</div>
                <h4>{goal.title}</h4>
                <p>{goal.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="section-padding" style={{ background: 'var(--navy)' }}>
        <div className="container" style={{ textAlign: 'center' }}>
          <h2 className="animate-fade-up" style={{ color: 'white', marginBottom: '16px', fontFamily: 'Raleway,sans-serif', fontSize: 'clamp(26px,3vw,38px)' }}>
            Share Our Vision
          </h2>
          <p className="animate-fade-up delay-1" style={{ color: 'rgba(255,255,255,0.65)', marginBottom: '32px', maxWidth: '460px', margin: '0 auto 32px' }}>
            If our mission resonates with your business values, let's build something great together.
          </p>
          <Link to="/contact" className="btn btn-primary btn-lg animate-fade-up delay-2">
            Partner With Us <ArrowRight size={18}/>
          </Link>
        </div>
      </section>
    </div>
  )
}
