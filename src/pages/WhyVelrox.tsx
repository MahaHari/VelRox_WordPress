import { useEffect, useRef } from 'react'
import { Link } from 'react-router-dom'
import { ArrowRight, Globe, TrendingUp, Package, Zap, Users, Award, Star, ShieldCheck } from 'lucide-react'
import PageBanner from '../components/PageBanner'
import './WhyVelrox.css'

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

const advantages = [
  {
    icon: <Globe size={28}/>,
    title: 'International Trade Mindset',
    desc: 'Velrox operates with a global perspective, understanding the complexities of cross-border seafood trade, documentation, customs, and regulatory compliance across multiple jurisdictions.',
    highlight: 'Global Expertise',
  },
  {
    icon: <TrendingUp size={28}/>,
    title: 'European Market Orientation',
    desc: 'Deep understanding of European buyers\' expectations, EU food safety regulations, labeling requirements, and import procedures makes Velrox the ideal gateway for Asian seafood into Europe.',
    highlight: 'EU Specialists',
  },
  {
    icon: <Package size={28}/>,
    title: 'Flexible Supply Capabilities',
    desc: 'Whether you need a trial container or annual supply contracts, Velrox scales to match your procurement needs — offering flexibility in volume, packing formats, and delivery scheduling.',
    highlight: 'Scale With You',
  },
  {
    icon: <Zap size={28}/>,
    title: 'Fast Communication',
    desc: 'Our dedicated trade team ensures rapid response times, proactive communication on shipment status, and immediate escalation handling. Your business doesn\'t wait — neither should your supplier.',
    highlight: 'Always Responsive',
  },
  {
    icon: <Users size={28}/>,
    title: 'Long-term Partnership Focus',
    desc: 'We don\'t just look for transactions — we look to build lasting commercial relationships. Our partners benefit from consistent pricing, priority allocation, and dedicated account management.',
    highlight: 'Partnership First',
  },
  {
    icon: <ShieldCheck size={28}/>,
    title: 'Quality Commitment',
    desc: 'Every shipment is backed by rigorous quality checks, full documentation, and compliance verification. We put our reputation on the line with every container we ship.',
    highlight: 'Zero Compromise',
  },
]

const testimonialStats = [
  { value: '98%', label: 'On-time Delivery Rate' },
  { value: '50+', label: 'European Trade Partners' },
  { value: '200+', label: 'Containers Shipped' },
  { value: '100%', label: 'Compliance Record' },
]

export default function WhyVelrox() {
  const ref = useAnimate()

  return (
    <div ref={ref}>
      <PageBanner
        title="Why Choose Velrox"
        subtitle="Discover what makes Velrox the preferred seafood trading partner for European importers and wholesalers."
        image="https://images.pexels.com/photos/1117211/pexels-photo-1117211.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
        breadcrumb="Why Velrox"
      />

      {/* Intro */}
      <section className="section-padding">
        <div className="container">
          <div className="why-intro-grid">
            <div className="animate-slide-left">
              <div className="section-tag">The Velrox Advantage</div>
              <h2 className="section-title">
                Built for <span className="highlight">Modern International</span> Seafood Trade
              </h2>
              <div className="divider" />
              <p style={{ marginBottom: '16px' }}>
                In a competitive global seafood market, your trading partner makes all the difference. Velrox was built from the ground up to address the pain points of European seafood buyers working with Asian suppliers.
              </p>
              <p>
                From documentation headaches to logistics coordination and quality assurance — we manage the complexity so you receive consistent, compliant, quality seafood products on time and at competitive prices.
              </p>
            </div>
            <div className="why-stats-grid animate-slide-right">
              {testimonialStats.map((stat, i) => (
                <div key={i} className={`why-stat-card animate-fade-up delay-${i + 1}`}>
                  <div className="why-stat-num">{stat.value}</div>
                  <div className="why-stat-label">{stat.label}</div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* Key Advantages */}
      <section className="section-padding" style={{ background: 'var(--grey-bg)' }}>
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Key Advantages</div>
            <h2 className="section-title animate-fade-up delay-1">
              6 Reasons to Partner with <span className="highlight">Velrox</span>
            </h2>
          </div>
          <div className="advantages-grid">
            {advantages.map((adv, i) => (
              <div key={i} className={`advantage-card animate-fade-up delay-${(i % 3) + 1}`}>
                <div className="adv-tag">{adv.highlight}</div>
                <div className="adv-icon">{adv.icon}</div>
                <h3>{adv.title}</h3>
                <p>{adv.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Comparison */}
      <section className="section-padding">
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">The Difference</div>
            <h2 className="section-title animate-fade-up delay-1">
              Velrox vs. <span className="highlight">Typical Suppliers</span>
            </h2>
          </div>
          <div className="comparison-table animate-fade-up delay-2">
            <div className="comparison-header">
              <div className="comp-feature">Feature</div>
              <div className="comp-velrox">Velrox</div>
              <div className="comp-other">Typical Supplier</div>
            </div>
            {[
              ['EU regulatory expertise', true, false],
              ['Dedicated European account manager', true, false],
              ['Flexible volume options', true, false],
              ['Pre-shipment quality inspection', true, false],
              ['Full documentation support', true, true],
              ['Real-time shipment tracking', true, false],
              ['Transparent pricing', true, false],
              ['Long-term contract flexibility', true, false],
            ].map(([feature, velrox, other], i) => (
              <div key={i} className="comparison-row">
                <div className="comp-feature">{feature as string}</div>
                <div className="comp-velrox">
                  {velrox ? <Award size={16} style={{ color: 'var(--teal)' }}/> : <span style={{ color: 'var(--grey-medium)' }}>—</span>}
                </div>
                <div className="comp-other">
                  {other ? <Star size={16} style={{ color: 'var(--grey-medium)' }}/> : <span style={{ color: '#e05555' }}>✕</span>}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="section-padding" style={{ background: 'var(--navy)' }}>
        <div className="container" style={{ textAlign: 'center' }}>
          <h2 className="animate-fade-up" style={{ color: 'white', marginBottom: '16px', fontFamily: 'Raleway,sans-serif', fontSize: 'clamp(26px,3vw,38px)' }}>
            Experience the Velrox Difference
          </h2>
          <p className="animate-fade-up delay-1" style={{ color: 'rgba(255,255,255,0.65)', marginBottom: '32px', maxWidth: '460px', margin: '0 auto 32px' }}>
            Start a conversation and discover how Velrox can transform your seafood procurement.
          </p>
          <Link to="/contact" className="btn btn-primary btn-lg animate-fade-up delay-2">
            Start a Conversation <ArrowRight size={18}/>
          </Link>
        </div>
      </section>
    </div>
  )
}
