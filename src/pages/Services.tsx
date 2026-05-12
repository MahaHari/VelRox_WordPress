import { useEffect, useRef } from 'react'
import { Link } from 'react-router-dom'
import { ArrowRight, Fish, Package, Truck, ChartBar as BarChart3, Shield, Globe, Clock, CircleCheck as CheckCircle } from 'lucide-react'
import PageBanner from '../components/PageBanner'
import './Services.css'

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

const services = [
  {
    icon: <Fish size={32}/>,
    title: 'Frozen Seafood Sourcing',
    desc: 'We specialize in sourcing premium frozen seafood from certified processing partners across India and global supply chains. Our sourcing team ensures consistent product quality, species availability, and competitive pricing for European buyers.',
    features: ['Vannamei shrimp, black tiger shrimp', 'Squid, cuttlefish, octopus', 'Fish fillets and value-added products', 'IQF and block frozen formats'],
  },
  {
    icon: <Package size={32}/>,
    title: 'Export Coordination',
    desc: 'End-to-end export management covering documentation, regulatory compliance, inspection coordination, and customs clearance. We manage the complexity so you can focus on your business.',
    features: ['Export documentation handling', 'EU health certificate coordination', 'HACCP and BRC compliance support', 'Phyto and veterinary certification'],
  },
  {
    icon: <Truck size={32}/>,
    title: 'Logistics & Distribution',
    desc: 'Our cold-chain logistics network is designed for reliability and efficiency. We coordinate container shipments from Indian ports to major European destinations with full temperature integrity.',
    features: ['Reefer container shipping', 'Port-to-door delivery coordination', 'Cold warehouse management', 'Real-time shipment tracking'],
  },
  {
    icon: <BarChart3 size={32}/>,
    title: 'Trade Solutions',
    desc: 'We offer customized commercial trade solutions that adapt to your procurement cycle, volume requirements, and budget constraints. Flexible arrangements from spot purchases to annual contracts.',
    features: ['Spot and contract supply options', 'Volume-flexible ordering', 'Custom packing and labeling', 'Private label support'],
  },
  {
    icon: <Shield size={32}/>,
    title: 'Quality & Compliance',
    desc: 'Quality is non-negotiable at Velrox. We ensure all products meet EU food safety standards with full documentation trail, inspection records, and third-party certifications.',
    features: ['EU import compliance checks', 'Third-party quality inspection', 'Allergen and labeling compliance', 'Certificate of origin coordination'],
  },
  {
    icon: <Globe size={32}/>,
    title: 'Market Intelligence',
    desc: 'Stay ahead with Velrox market insights. We provide our partners with regular updates on pricing trends, species availability, regulatory changes, and supply chain developments.',
    features: ['Seasonal price trend reports', 'Regulatory update briefings', 'Supply availability forecasts', 'Species and product advisory'],
  },
]

export default function Services() {
  const ref = useAnimate()

  return (
    <div ref={ref}>
      <PageBanner
        title="Our Services"
        subtitle="Comprehensive frozen seafood trade services from sourcing to delivery, built for European market standards."
        image="https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&w=1920&q=80"
        breadcrumb="Services"
      />

      {/* Services Detail */}
      <section className="section-padding">
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">What We Offer</div>
            <h2 className="section-title animate-fade-up delay-1">
              Full-Spectrum <span className="highlight">Trade Services</span>
            </h2>
            <p className="section-subtitle animate-fade-up delay-2">
              Every service we provide is designed to make your frozen seafood procurement smoother, more reliable, and more profitable.
            </p>
          </div>

          <div className="services-detail-grid">
            {services.map((s, i) => (
              <div key={i} className={`service-detail-card animate-fade-up delay-${(i % 3) + 1}`}>
                <div className="sdc-icon">{s.icon}</div>
                <h3 className="sdc-title">{s.title}</h3>
                <p className="sdc-desc">{s.desc}</p>
                <ul className="sdc-features">
                  {s.features.map(f => (
                    <li key={f}>
                      <CheckCircle size={13} />
                      <span>{f}</span>
                    </li>
                  ))}
                </ul>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Process Section */}
      <section className="section-padding" style={{ background: 'var(--grey-bg)' }}>
        <div className="container">
          <div className="section-header centered">
            <div className="section-tag animate-fade-up">Our Process</div>
            <h2 className="section-title animate-fade-up delay-1">
              How We Work With <span className="highlight">You</span>
            </h2>
          </div>
          <div className="process-steps">
            {[
              { num: '01', icon: <Clock size={20}/>, title: 'Initial Consultation', desc: 'We begin with understanding your specific requirements, target species, volumes, and delivery timelines.' },
              { num: '02', icon: <Fish size={20}/>, title: 'Sourcing & Quotation', desc: 'Our team identifies the best available products and processing partners, then provides competitive pricing.' },
              { num: '03', icon: <Shield size={20}/>, title: 'Quality Confirmation', desc: 'Pre-shipment inspection and documentation review ensures the product meets your exact specifications.' },
              { num: '04', icon: <Truck size={20}/>, title: 'Shipment & Delivery', desc: 'We coordinate the full logistics chain to ensure on-time, temperature-compliant delivery to your location.' },
            ].map((step, i) => (
              <div key={i} className={`process-step animate-fade-up delay-${i + 1}`}>
                <div className="ps-number">{step.num}</div>
                <div className="ps-icon">{step.icon}</div>
                <h4>{step.title}</h4>
                <p>{step.desc}</p>
                {i < 3 && <div className="ps-connector" />}
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="section-padding" style={{ background: 'var(--navy)' }}>
        <div className="container" style={{ textAlign: 'center' }}>
          <h2 className="animate-fade-up" style={{ color: 'white', marginBottom: '16px', fontFamily: 'Raleway,sans-serif', fontSize: 'clamp(26px,3vw,38px)' }}>
            Need a Specific Service?
          </h2>
          <p className="animate-fade-up delay-1" style={{ color: 'rgba(255,255,255,0.65)', marginBottom: '32px', maxWidth: '460px', margin: '0 auto 32px' }}>
            Our team is ready to discuss your requirements and create a tailored trade solution for your business.
          </p>
          <Link to="/contact" className="btn btn-primary btn-lg animate-fade-up delay-2">
            Contact Our Team <ArrowRight size={18}/>
          </Link>
        </div>
      </section>
    </div>
  )
}
