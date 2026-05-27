document.addEventListener('DOMContentLoaded', function () {

  const navbar = document.querySelector('.bs-navbar');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 40) {
      navbar.style.boxShadow = '0 4px 24px rgba(44,38,35,0.10)';
      navbar.style.padding = '10px 0';
    } else {
      navbar.style.boxShadow = 'none';
      navbar.style.padding = '14px 0';
    }
  });

  const observerOptions = { threshold: 0.15, rootMargin: '0px 0px -40px 0px' };
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  const animTargets = document.querySelectorAll(
    '.service-card, .work-card, .testimonial-card, .stat-item, .about-image-wrap, .about-value, .contact-info-item, .contact-form-card'
  );
  animTargets.forEach(function (el, i) {
    el.classList.add('fade-in-up');
    el.style.transitionDelay = (i % 4) * 0.08 + 's';
    observer.observe(el);
  });

  const contactForm = document.getElementById('contactForm');
  if (!contactForm) return;

  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();

    if (!contactForm.checkValidity()) {
      contactForm.classList.add('was-validated');
      return;
    }

    const submitBtn = document.getElementById('submitBtn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoading = submitBtn.querySelector('.btn-loading');

    submitBtn.disabled = true;
    btnText.classList.add('d-none');
    btnLoading.classList.remove('d-none');

    const formData = new FormData(contactForm);

    fetch('process/contact_process.php', {
      method: 'POST',
      body: formData
    })
      .then(function (res) { return res.json(); })
      .then(function (data) {
        if (data.success) {
          document.getElementById('contactFormWrap').classList.add('d-none');
          const successMsg = document.getElementById('successMsg');
          successMsg.classList.remove('d-none');
          successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else {
          submitBtn.disabled = false;
          btnText.classList.remove('d-none');
          btnLoading.classList.add('d-none');
          alert(data.message || 'Something went wrong. Please try again.');
        }
      })
      .catch(function () {
        submitBtn.disabled = false;
        btnText.classList.remove('d-none');
        btnLoading.classList.add('d-none');
        alert('Network error. Please try again.');
      });
  });

});