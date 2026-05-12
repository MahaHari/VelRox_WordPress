import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Header from './components/Header'
import Footer from './components/Footer'
import WhatsAppFloat from './components/WhatsAppFloat'
import Home from './pages/Home'
import About from './pages/About'
import Services from './pages/Services'
import WhyVelrox from './pages/WhyVelrox'
import VisionMission from './pages/VisionMission'
import Contact from './pages/Contact'
import ScrollToTop from './components/ScrollToTop'

export default function App() {
  return (
    <Router>
      <ScrollToTop />
      <Header />
      <main>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/services" element={<Services />} />
          <Route path="/why-velrox" element={<WhyVelrox />} />
          <Route path="/vision-mission" element={<VisionMission />} />
          <Route path="/contact" element={<Contact />} />
        </Routes>
      </main>
      <Footer />
      <WhatsAppFloat />
    </Router>
  )
}
