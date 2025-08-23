<!-- Hero Section -->
<section class="hero-section">
  <div id="particles-js"></div>
    <img 
      src="{{ asset('assets/appImg/home-hero.webp') }}" 
      alt="Revive Health Partners" 
      fetchpriority="high"
      decoding="async"
      class="hero-bg-img"
    />
  <div class="container hero-content">
    <h1 class="display-4 font-weight-bold">Smart Option For A Healthier Revenue Cycle </h1>
    <p class="lead">Intelligent Technology to Improve Your Financial Health</p>
    <hr class="bg-white w-50 mx-auto my-4">
    <div class="services-list mb-3">
      <span>Patient Experience</span>
      <span>Chargemaster Services</span>
      <span>Utilization Management</span>
      <span>CDI</span>
      <span>Medical Coding</span>
      <span>Claims Management</span>
      <span>Denials</span>
    </div>
    <a href="{{route('contact-us')}}" class="btn btn-outline-light strategy-btn">
      Book a Strategy Call
      <span class="icon"><i class="fas fa-arrow-right"></i></span>
    </a>

  </div>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
  particlesJS("particles-js", {
    "particles": {
      "number": {
        "value": 35,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#313131"
      },
      "shape": {
        "type": "circle"
      },
      "opacity": {
        "value": 0.4,
        "random": true
      },
      "size": {
        "value": 4,         // medium size
        "random": true,
        "anim": {
          "enable": true,
          "speed": 2,
          "size_min": 2,    // slightly bigger min size
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#766a6a",
        "opacity": 0.6,
        "width": 2.03       // slightly thicker lines
      },
      "move": {
        "enable": true,
        "speed": 6
      }
    },
    "interactivity": {
      "events": {
        "onhover": {
          "enable": true,
          "mode": "grab"
        }
      },
      "modes": {
        "grab": {
          "distance": 300,
          "line_linked": {
            "opacity": 0.8
          }
        }
      }
    },
    "retina_detect": true
  });

   // Debounce expensive reflows on resize
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      // Re-init particles canvas to fit new size
      if (window.pJSDom && window.pJSDom.length) {
        window.pJSDom[0].pJS.fn.particlesRefresh();
      }

      // 👉 If you also have OwlCarousel, you could re-trigger refresh here too
      // $('.owl-carousel').trigger('refresh.owl.carousel');
    }, 150);
  });
</script>

