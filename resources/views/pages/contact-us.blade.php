@extends('layout.main')
@section('content')

<div class="bg-service-contact">
    <div id="particles-js"></div>
    <div class="service-overlay-7">
    </div>
</div>

<div class="ggle-box">
    <div class="ggle-left-2">
        <h2 class="ggle-head">Contact Us</h2>
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
        <div class="row tp-1 blackis-xx">
            <div class="col-lg-5">
                <h4 class="cont-headngzz">Let's Connect Now!</h4>
                <div class="text-box-cont">
                    <p class="md-para change-xx">
                    If you are interested in our services, want to know more or have got any question's, We would be glad to answer your query. Get in touch now to find out how we can skyrocket your practice growth. 
                    </p>
                </div>
                <div class="left-cont-box">
                    <div class="sngle-box d-flex align-items-center gap-2">
                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                        <a class="cont-para-xx" href="">134 N 4Th St, Brooklyn, NY 11249</a>
                    </div>
                    <div class="sngle-box">
                        <i aria-hidden="true" class="fas fa-phone-alt"></i>
                        <a class="cont-para-xx" href="">(800) 516-5234</a>
                    </div>
                    <div class="sngle-box">
                        <i aria-hidden="true" class="fas fa-envelope"></i>
                        <a class="cont-para-xx" href="">info@ircm.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" style="padding-right: 0px;">
                <div class="form-box-1">
                    <form id="contactForm">
                        <div class="row g-3">
                            <!-- Name -->
                            <div class="col-md-6 fotm-mr-all">
                                <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control usr-xx" id="name" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 fotm-mr-all">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control usr-xx" id="email" required>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6 fotm-mr-all">
                                <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control usr-xx" id="phone" required>
                            </div>

                            <!-- Address -->
                            <div class="col-md-6 fotm-mr-all">
                                <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control usr-xx" id="address" required>
                            </div>

                            <!-- Service Type -->
                            <div class="col-md-6 fotm-mr-all">
                                <label for="serviceType" class="form-label">Service Type <span class="text-danger">*</span></label>
                                <select class="form-select usr-xx" id="serviceType" required>
                                    <option value="" disabled selected>Select a service</option>
                                    <option>Consultation</option>
                                    <option>Home Visit</option>
                                    <option>Telehealth</option>
                                </select>
                            </div>

                            <!-- Healthcare Type -->
                            <div class="col-md-6 fotm-mr-all">
                                <label for="healthcareType" class="form-label">Healthcare Type <span class="text-danger">*</span></label>
                                <select class="form-select usr-xx" id="healthcareType" required>
                                    <option value="" disabled selected>Select healthcare type</option>
                                    <option>Primary Care</option>
                                    <option>Specialist</option>
                                    <option>Emergency</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 text-center pt-3">
                                <button type="submit" class="btn sbmt-xx">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13610.344461855575!2d74.38383534295772!3d31.48056963731725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905fd549278bb%3A0x555638325551aad1!2sD.H.A.%20Phase%201%2C%20Lahore%2C%20Pakistan!5e0!3m2!1sen!2s!4v1751884390269!5m2!1sen!2s" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
    </div>
</div>

<style>
.row.tp-1.blackis-xx {
    margin-top: 50px;
}
h4.cont-headngzz {
  font-size: 30px;
  font-weight: 700;
  color: #502e6d;
  margin: 45px 0px 0px;
  line-height: 37px;
}
.fotm-mr-all{
  margin-bottom: 15px;
}
.text-box-cont p {
    color: #434343;
    font-size: 17px;
    font-weight: 400;
    line-height: 26px;
    text-align: justify;
    width: 385px;
    margin-top: 13px;
    margin-bottom: 0px;
}
.top-contact-bar {
  position: relative;
  background-size: cover;
  background-position: center;
  height: 400px; 
  color: #fff;
}
.btn-outline-dark
 {
    font-size: 24px;
    margin: 0px;
    color: #502e6d;
}
input.form-control.usr-xx {
    height: 47px;
    border-radius: 25px;
    border: 1px solid #ffff;
    width: 100%;
    padding: 2px 16px;
    font-size: 15px;
}
.form-select.usr-xx{
  height: 46px;
  border-radius: 25px;
  border: 1px solid #fff;
  width: 100%;
  padding: 2px 16px;
  font-size: 15px;
}
input.form-control.usr-xx:focus-visible{
   border: 1px solid #fff !important;
   border: none;
}
.left-cont-box {
    padding: 10px 0;
    flex-wrap: wrap; 
}
.sngle-box
 {
    margin: 25px 0px;
}
.sngle-box i {
    color: #502E6D;
    font-size: 21px;
}
.cont-para-xx {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    font-size: 16px;
    transition: color 0.3s ease;
    padding-left: 10px;
}
.invalid-feedback {
    font-size: 13px;
    color: red;
    font-weight: 600;
    margin-top: 7px;
}
label.form-label {
    font-size: 15px;
    color: #ffff;
    font-weight: 500;
}
.cont-para-xx:hover {
    color: #502E6D;
}
</style>
<link href="{{ asset('assets/css/medical-service.css') }}" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script>
  // Bootstrap 5 validation
  (function () {
    'use strict';
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  })();
</script>


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
