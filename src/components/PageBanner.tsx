import './PageBanner.css'

interface PageBannerProps {
  title: string
  subtitle?: string
  image: string
  breadcrumb?: string
}

export default function PageBanner({ title, subtitle, image, breadcrumb }: PageBannerProps) {
  return (
    <section className="page-banner">
      <div className="page-banner-bg">
        <img src={image} alt={title} />
        <div className="page-banner-overlay" />
      </div>
      <div className="page-banner-content container">
        {breadcrumb && (
          <div className="page-breadcrumb">
            <span>Home</span>
            <span className="bc-sep">/</span>
            <span>{breadcrumb}</span>
          </div>
        )}
        <h1 className="page-banner-title">{title}</h1>
        {subtitle && <p className="page-banner-subtitle">{subtitle}</p>}
      </div>
    </section>
  )
}
