@extends('layout.main')
@section('content')

  <div class="bg-service-about">
    <div id="particles-js"></div>
    <div class="service-overlay">
    </div>
</div>
<div class="ggle-box">
    <div class="ggle-left-2">
        <h2 class="ggle-head">About Us</h2>
    </div>
    <div class="ggle-break">
        <div class="ggle-rvew">
            <div class="set-phonez">
                <i aria-hidden="true" class="fa fa-phone fx-xx"></i>
                <div class="right-cont-11">
                    <span class="elementskit-info-box-title">(800) 516-5234</span>
                    <p>Talk To An Expert</p>
                </div>
            </div>      
        </div>
    </div>
    <div class="ggle-right">
    </div>
</div>

<div class="main-hero-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="topr-about">
                  <div class="text-box-cont-about">
                      <p class="about-para">
                          UNIFYMD is a leading provider of healthcare IT services and solutions that transform the clinical and administrative functioning of healthcare institutions of all sizes.
                          Our cutting edge solutions , Reduce errors and denials, expedite processes, and simplify decision-making. WE ensure best industry standards and practices, thereby maximising value and returns while saving time and effort.
                      </p>
                      <p class="about-para">
                          This means you don't have to hire expert billers or spend time training your staff to handle complex billing queries—we handle it all for you. <br/>
                          With nearly 10 years of medical billing experience, we streamline the claims process and make it easier to manage, so you can focus on delivering quality care to your patients. From claim creation and submission to denial management, appeals, payment posting, and reporting, our experienced team moves your billing operations forward, whether you are a multispecialty group or a solo practice. At-------------, we are committed to guiding your practice staff and helping them get you paid 4 to 10% more and 35% faster

                      </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="{{ asset('assets/css/medical-service.css') }}" rel="stylesheet">

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
        "color": "#fff",
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

</script>

@stop
@section('js')
@endsection
