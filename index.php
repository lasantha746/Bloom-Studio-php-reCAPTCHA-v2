<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bloom Studio — Where Ideas Blossom</title>
  <link rel="icon" href="https://api.iconify.design/fluent-emoji-flat:cherry-blossom.svg" type="image/svg+xml"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="assets/style.css"/>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bs-navbar fixed-top">
    <div class="container">
      <a class="navbar-brand brand-logo" href="index.php">
        <span class="brand-icon">✿</span> Bloom Studio
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#work">Work</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li class="nav-item ms-lg-3">
            <a class="btn btn-bloom" href="contact.php">Get in Touch</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero-section">
    <div class="hero-petals">
      <span class="petal p1">✿</span>
      <span class="petal p2">❀</span>
      <span class="petal p3">✾</span>
      <span class="petal p4">✿</span>
      <span class="petal p5">❀</span>
    </div>
    <div class="container hero-content text-center">
      <span class="hero-tag">Creative Design Studio</span>
      <h1 class="hero-title">Where Bold<br/><em>Ideas Blossom</em></h1>
      <p class="hero-sub">We craft digital experiences that are elegant, purposeful,<br class="d-none d-md-block"/> and beautifully unforgettable.</p>
      <div class="d-flex gap-3 justify-content-center flex-wrap mt-5">
        <a href="#work" class="btn btn-bloom btn-lg">View Our Work</a>
        <a href="contact.php" class="btn btn-outline-bloom btn-lg">Start a Project</a>
      </div>
    </div>
    <div class="hero-scroll-hint">
      <span>scroll</span>
      <i class="bi bi-arrow-down"></i>
    </div>
  </section>

  <!-- STATS -->
  <section class="stats-section">
    <div class="container">
      <div class="row g-0 stats-row">
        <div class="col-6 col-md-3 stat-item">
          <div class="stat-number">120+</div>
          <div class="stat-label">Projects Delivered</div>
        </div>
        <div class="col-6 col-md-3 stat-item">
          <div class="stat-number">8+</div>
          <div class="stat-label">Years of Craft</div>
        </div>
        <div class="col-6 col-md-3 stat-item">
          <div class="stat-number">40+</div>
          <div class="stat-label">Happy Clients</div>
        </div>
        <div class="col-6 col-md-3 stat-item">
          <div class="stat-number">15</div>
          <div class="stat-label">Awards Won</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="section-pad" id="services">
    <div class="container">
      <div class="section-header text-center mb-5">
        <span class="section-tag">What We Do</span>
        <h2 class="section-title">Our <em>Services</em></h2>
        <p class="section-desc">Every project is an opportunity to create something extraordinary.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="service-card">
            <div class="service-icon">
              <img src="https://api.iconify.design/fluent:design-ideas-24-regular.svg?color=%23c9856a" width="36" height="36" alt="Brand Design"/>
            </div>
            <h3>Brand Identity</h3>
            <p>Visual systems that speak your truth — logos, palettes, type, and the story behind every pixel.</p>
            <a href="contact.php" class="service-link">Let's talk <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-card">
            <div class="service-icon">
              <img src="https://api.iconify.design/fluent:window-dev-tools-24-regular.svg?color=%23c9856a" width="36" height="36" alt="Web Dev"/>
            </div>
            <h3>Web Development</h3>
            <p>Fast, elegant websites and web apps crafted with attention to performance, accessibility, and beauty.</p>
            <a href="contact.php" class="service-link">Let's talk <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-card">
            <div class="service-icon">
              <img src="https://api.iconify.design/fluent:phone-laptop-24-regular.svg?color=%23c9856a" width="36" height="36" alt="UI UX"/>
            </div>
            <h3>UI / UX Design</h3>
            <p>Interfaces that feel intuitive and look stunning — user research, wireframes, and polished prototypes.</p>
            <a href="contact.php" class="service-link">Let's talk <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-card">
            <div class="service-icon">
              <img src="https://api.iconify.design/fluent:camera-sparkles-24-regular.svg?color=%23c9856a" width="36" height="36" alt="Photography"/>
            </div>
            <h3>Photography & Media</h3>
            <p>Visual content that captures mood and tells your story — product, editorial, and lifestyle shoots.</p>
            <a href="contact.php" class="service-link">Let's talk <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-card">
            <div class="service-icon">
              <img src="https://api.iconify.design/fluent:megaphone-loud-24-regular.svg?color=%23c9856a" width="36" height="36" alt="Marketing"/>
            </div>
            <h3>Digital Marketing</h3>
            <p>Strategy-led campaigns across social, search, and beyond — built to convert and built to last.</p>
            <a href="contact.php" class="service-link">Let's talk <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-card service-card--cta">
            <div class="service-cta-inner">
              <span class="big-petal">✿</span>
              <h3>Have something else in mind?</h3>
              <p>We love unusual briefs. Tell us your vision.</p>
              <a href="contact.php" class="btn btn-bloom mt-3">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WORK -->
  <section class="section-pad work-section" id="work">
    <div class="container">
      <div class="section-header text-center mb-5">
        <span class="section-tag">Portfolio</span>
        <h2 class="section-title">Selected <em>Work</em></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-8">
          <div class="work-card work-card--large" style="background-image: url('https://images.unsplash.com/photo-1558655146-d09347e92766?w=900&q=80')">
            <div class="work-overlay">
              <span class="work-tag">Brand Identity</span>
              <h3>Marigold Collective</h3>
              <p>Full brand identity and packaging design</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="work-card" style="background-image: url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80')">
            <div class="work-overlay">
              <span class="work-tag">Web Design</span>
              <h3>Soleil Co.</h3>
              <p>E-commerce & UX overhaul</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="work-card" style="background-image: url('https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600&q=80')">
            <div class="work-overlay">
              <span class="work-tag">UI / UX</span>
              <h3>Fern App</h3>
              <p>Mobile app design system</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-8">
          <div class="work-card work-card--large" style="background-image: url('https://images.unsplash.com/photo-1561070791-2526d30994b5?w=900&q=80')">
            <div class="work-overlay">
              <span class="work-tag">Photography</span>
              <h3>Lumière Editorial</h3>
              <p>Full campaign photography & art direction</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="section-pad about-section" id="about">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="about-image-wrap">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=700&q=80" alt="Bloom Studio Team" class="about-img"/>
            <div class="about-badge">
              <span class="badge-num">8+</span>
              <span class="badge-text">Years of crafting beautiful digital experiences</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <span class="section-tag">About Us</span>
          <h2 class="section-title mt-2">A studio that <em>cares deeply</em> about craft</h2>
          <p class="about-text">Bloom Studio was founded on a simple belief — that every brand deserves design that is both beautiful and purposeful. We are a small, dedicated team of designers, developers, and strategists who care deeply about the work we make.</p>
          <p class="about-text">We partner closely with our clients, treating every project as a long-term relationship, not a transaction. When you work with us, you get our full attention, creative energy, and honest thinking.</p>
          <div class="about-values d-flex gap-4 flex-wrap mt-4">
            <div class="about-value">
              <i class="bi bi-gem"></i>
              <span>Quality First</span>
            </div>
            <div class="about-value">
              <i class="bi bi-heart"></i>
              <span>People-Centered</span>
            </div>
            <div class="about-value">
              <i class="bi bi-lightbulb"></i>
              <span>Always Curious</span>
            </div>
          </div>
          <a href="contact.php" class="btn btn-bloom mt-5">Work With Us</a>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="section-pad testimonials-section" id="testimonials">
    <div class="container">
      <div class="section-header text-center mb-5">
        <span class="section-tag">Kind Words</span>
        <h2 class="section-title">What Clients <em>Say</em></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="testimonial-card">
            <div class="testi-quote">❝</div>
            <p>"Bloom Studio transformed our brand completely. The attention to detail and the way they understood our vision was remarkable. Our customers noticed immediately."</p>
            <div class="testi-author">
              <img src="https://i.pravatar.cc/60?img=47" alt="Sophie M." class="testi-avatar"/>
              <div>
                <div class="testi-name">Sophie Marchetti</div>
                <div class="testi-role">Founder, Marigold Collective</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="testimonial-card testimonial-card--accent">
            <div class="testi-quote">❝</div>
            <p>"The website they built for us increased our conversions by 40%. But beyond the numbers, we finally have a digital presence we're proud to show the world."</p>
            <div class="testi-author">
              <img src="https://i.pravatar.cc/60?img=32" alt="James K." class="testi-avatar"/>
              <div>
                <div class="testi-name">James Keller</div>
                <div class="testi-role">CEO, Soleil Co.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="testimonial-card">
            <div class="testi-quote">❝</div>
            <p>"Working with Bloom is a joy from first brief to final delivery. They ask the right questions, push back when needed, and deliver results that exceed expectations."</p>
            <div class="testi-author">
              <img src="https://i.pravatar.cc/60?img=25" alt="Nadia R." class="testi-avatar"/>
              <div>
                <div class="testi-name">Nadia Rossi</div>
                <div class="testi-role">Creative Director, Fern App</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-section">
    <div class="container text-center">
      <span class="big-petal-cta">✿</span>
      <h2 class="cta-title">Ready to make something<br/><em>beautiful together?</em></h2>
      <p class="cta-sub">Tell us about your project — we respond within 24 hours.</p>
      <a href="contact.php" class="btn btn-bloom btn-lg mt-4">Start a Conversation</a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="row g-4 align-items-start">
        <div class="col-lg-4">
          <div class="footer-brand">✿ Bloom Studio</div>
          <p class="footer-tagline">Where bold ideas blossom into beautiful digital experiences.</p>
          <div class="footer-social d-flex gap-3 mt-3">
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-behance"></i></a>
          </div>
        </div>
        <div class="col-6 col-lg-2 offset-lg-2">
          <div class="footer-heading">Studio</div>
          <ul class="footer-links">
            <li><a href="#about">About</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2">
          <div class="footer-heading">Services</div>
          <ul class="footer-links">
            <li><a href="#">Brand Identity</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">UI / UX</a></li>
            <li><a href="#">Photography</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <div class="footer-heading">Contact</div>
          <ul class="footer-links">
            <li><a href="mailto:hello@bloomstudio.co">hello@bloomstudio.co</a></li>
            <li><a href="tel:+11234567890">+1 (123) 456-7890</a></li>
            <li><span>Colombo, Sri Lanka</span></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>&copy; <?php echo date('Y'); ?> Bloom Studio. All rights reserved.</span>
        <span>Crafted with ✿ and care</span>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/script.js"></script>
</body>
</html>