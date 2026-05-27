<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact — Bloom Studio</title>
  <link rel="icon" href="https://api.iconify.design/fluent-emoji-flat:cherry-blossom.svg" type="image/svg+xml" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/style.css" />

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="contact-page">

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
          <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#work">Work</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#testimonials">Testimonials</a></li>
          <li class="nav-item ms-lg-3">
            <a class="btn btn-bloom active-nav-btn" href="contact.php">Get in Touch</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- CONTACT HERO -->
  <section class="contact-hero">
    <div class="contact-hero-petals">
      <span class="petal p1">✿</span>
      <span class="petal p3">❀</span>
      <span class="petal p5">✾</span>
    </div>
    <div class="container text-center">
      <span class="section-tag">Get in Touch</span>
      <h1 class="contact-hero-title">Let's create something<br /><em>extraordinary together</em></h1>
      <p class="contact-hero-sub">Tell us about your project and we'll get back to you within 24 hours.</p>
    </div>
  </section>

  <!-- CONTACT MAIN -->
  <section class="contact-main">
    <div class="container">
      <div class="row g-5 align-items-start">

        <!-- LEFT INFO -->
        <div class="col-lg-5">
          <div class="contact-info-block">
            <h2 class="contact-info-title">We'd love to<br /><em>hear from you</em></h2>
            <p class="contact-info-desc">Whether you have a fully formed brief or just a spark of an idea — we're here to listen, explore, and create with you.</p>

            <div class="contact-info-items mt-5">
              <div class="contact-info-item">
                <div class="cinfo-icon">
                  <img src="https://api.iconify.design/fluent:mail-24-regular.svg?color=%23c9856a" width="22" height="22" alt="Email" />
                </div>
                <div>
                  <div class="cinfo-label">Email us</div>
                  <a href="mailto:hello@bloomstudio.co" class="cinfo-value">hello@bloomstudio.co</a>
                </div>
              </div>
              <div class="contact-info-item">
                <div class="cinfo-icon">
                  <img src="https://api.iconify.design/fluent:call-24-regular.svg?color=%23c9856a" width="22" height="22" alt="Phone" />
                </div>
                <div>
                  <div class="cinfo-label">Call us</div>
                  <a href="tel:+11234567890" class="cinfo-value">+1 (123) 456-7890</a>
                </div>
              </div>
              <div class="contact-info-item">
                <div class="cinfo-icon">
                  <img src="https://api.iconify.design/fluent:location-24-regular.svg?color=%23c9856a" width="22" height="22" alt="Location" />
                </div>
                <div>
                  <div class="cinfo-label">Find us</div>
                  <span class="cinfo-value">Colombo, Sri Lanka</span>
                </div>
              </div>
              <div class="contact-info-item">
                <div class="cinfo-icon">
                  <img src="https://api.iconify.design/fluent:clock-24-regular.svg?color=%23c9856a" width="22" height="22" alt="Hours" />
                </div>
                <div>
                  <div class="cinfo-label">Studio hours</div>
                  <span class="cinfo-value">Mon – Fri, 9am – 6pm</span>
                </div>
              </div>
            </div>

            <div class="contact-social mt-5">
              <div class="cinfo-label mb-3">Follow our work</div>
              <div class="d-flex gap-3">
                <a href="#" class="social-pill"><i class="bi bi-instagram"></i> Instagram</a>
                <a href="#" class="social-pill"><i class="bi bi-behance"></i> Behance</a>
                <a href="#" class="social-pill"><i class="bi bi-linkedin"></i> LinkedIn</a>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT FORM -->
        <div class="col-lg-7">
          <div class="contact-form-card">

            <!-- SUCCESS MESSAGE (hidden by default, shown via JS) -->
            <div id="successMsg" class="contact-success d-none">
              <div class="success-icon">✿</div>
              <h3>Thank you for reaching out!</h3>
              <p>Your message has been received. We'll be in touch within 24 hours.</p>
              <a href="index.php" class="btn btn-bloom mt-3">Back to Home</a>
            </div>

            <!-- THE FORM -->
            <div id="contactFormWrap">
              <h3 class="form-heading">Tell us about your project</h3>
              <p class="form-subheading">Fill in the details below and we'll get back to you shortly.</p>

              <form id="contactForm" novalidate>
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group-bloom">
                      <label for="fullName">Full Name <span class="req">*</span></label>
                      <input type="text" id="fullName" name="fullName" class="form-control bloom-input" placeholder="Jane Smith" required />
                      <div class="invalid-feedback">Please enter your name.</div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group-bloom">
                      <label for="email">Email Address <span class="req">*</span></label>
                      <input type="email" id="email" name="email" class="form-control bloom-input" placeholder="jane@company.com" required />
                      <div class="invalid-feedback">Please enter a valid email.</div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group-bloom">
                      <label for="phone">Phone Number</label>
                      <input type="tel" id="phone" name="phone" class="form-control bloom-input" placeholder="+1 (555) 000-0000" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group-bloom">
                      <label for="company">Company / Brand</label>
                      <input type="text" id="company" name="company" class="form-control bloom-input" placeholder="Your Company Name" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group-bloom">
                      <label>Services Interested In</label>
                      <div class="service-chips d-flex flex-wrap gap-2 mt-2">
                        <label class="chip-label"><input type="checkbox" name="services[]" value="Brand Identity" /> Brand Identity</label>
                        <label class="chip-label"><input type="checkbox" name="services[]" value="Web Development" /> Web Development</label>
                        <label class="chip-label"><input type="checkbox" name="services[]" value="UI/UX Design" /> UI / UX Design</label>
                        <label class="chip-label"><input type="checkbox" name="services[]" value="Photography" /> Photography</label>
                        <label class="chip-label"><input type="checkbox" name="services[]" value="Marketing" /> Digital Marketing</label>
                        <label class="chip-label"><input type="checkbox" name="services[]" value="Other" /> Other</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group-bloom">
                      <label for="budget">Approximate Budget</label>
                      <select id="budget" name="budget" class="form-select bloom-input">
                        <option value="" disabled selected>Select a range</option>
                        <option>Under $2,000</option>
                        <option>$2,000 – $5,000</option>
                        <option>$5,000 – $15,000</option>
                        <option>$15,000 – $50,000</option>
                        <option>$50,000+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group-bloom">
                      <label for="timeline">Project Timeline</label>
                      <select id="timeline" name="timeline" class="form-select bloom-input">
                        <option value="" disabled selected>When do you need it?</option>
                        <option>ASAP</option>
                        <option>Within 1 month</option>
                        <option>1 – 3 months</option>
                        <option>3 – 6 months</option>
                        <option>Flexible</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group-bloom">
                      <label for="message">Project Details <span class="req">*</span></label>
                      <textarea id="message" name="message" class="form-control bloom-input" rows="5" placeholder="Tell us about your vision, goals, audience, and anything else that's important to know..." required></textarea>
                      <div class="invalid-feedback">Please describe your project.</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group-bloom">
                      <label for="heardFrom">How did you hear about us?</label>
                      <select id="heardFrom" name="heardFrom" class="form-select bloom-input">
                        <option value="" disabled selected>Select an option</option>
                        <option>Google / Search</option>
                        <option>Social Media</option>
                        <option>Referral from a friend</option>
                        <option>Behance / Dribbble</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div> <!-- Replace with your actual site key -->

                  <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-bloom btn-submit w-100" id="submitBtn">
                      <span class="btn-text">Send Message <i class="bi bi-send"></i></span>
                      <span class="btn-loading d-none">
                        <span class="spinner-border spinner-border-sm me-2"></span> Sending...
                      </span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="site-footer mt-0">
    <div class="container">
      <div class="footer-bottom justify-content-center text-center">
        <span>&copy; <?php echo date('Y'); ?> Bloom Studio. All rights reserved.</span>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/script.js"></script>

</body>

</html>