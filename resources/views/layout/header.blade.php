<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-container d-flex w-100 align-items-center justify-content-between">
        <a class="navbar-brand text-white mb-0" href="#">
          <h1 class="m-0">Plumberz</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto nav-links">
           <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Company</a>
                  <div class="dropdown-menu fade-up m-0">
                    <div class="dropdown-grid dropdown-grid-2">
                      <a href="booking.html" class="dropdown-item-custom">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                        Our Story
                      </a>
                      <a href="booking.html" class="dropdown-item-custom">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                        About Us
                      </a>
                      <a href="booking.html" class="dropdown-item-custom pd-rmve">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                        privacy-policy
                      </a>
                      <a href="booking.html" class="dropdown-item-custom pd-rmve">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                       Terms and Conditions
                      </a>
                    </div>
                  </div>
              </div>
              {{-- scnd --}}
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                <div class="dropdown-menu fade-up m-0 dropdown-center-menu dropdown-center-3">
                  <div class="dropdown-grid dropdown-grid-3">
                    <a href="{{ route('services.medical-billing') }}" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Billing
                    </a>
                    <a href="{{ route('services.medical-credentialing') }}" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Credentialing
                    </a>
                    <a href="{{ route('services.medical-coding') }}" class="dropdown-item-custom">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Coding
                    </a>
                    <a href="{{route('services.denial-management')}}" class="dropdown-item-custom">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Denial Management
                    </a>
                    <a href="{{route('services.out-of-network-billing')}}" class="dropdown-item-custom">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                      Out of Network
                    </a>
                    <a href="{{route('services.revenue-cycle-management')}}" class="dropdown-item-custom">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                     Revenue Cycle
                    </a>
                    <a href="{{route('services.medical-billing-consulting')}}" class="dropdown-item-custom pd-rmve">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Consulting
                    </a>
                    <a href="{{route('services.outsource-medical-billing')}}" class="dropdown-item-custom pd-rmve">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                     Outsource Billing
                    </a>
                    <a href="booking.html" class="dropdown-item-custom pd-rmve">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                     A/R Follow Up
                    </a>
                  </div>
                </div>
              </div>
              {{-- scnd end --}}

               {{-- thrd --}}
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Specialities</a>
                <div class="dropdown-menu fade-up dropdown-center-menu dropdown-center-4">
                  <div class="dropdown-grid dropdown-grid-4 fade-up m-0">
                    <a href="booking.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Orthopedic Billing
                    </a>
                    <a href="team.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                     Urology Billing
                    </a>
                    <a href="testimonial.html" class="dropdown-item-custom">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                     Dental Billing
                    </a>
                    <a href="404.html" class="dropdown-item-custom">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                    Pathology Billing
                    </a>
                    <a href="booking.html" class="dropdown-item-custom">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                      Mental Health
                    </a>
                    <a href="team.html" class="dropdown-item-custom">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                    Radiology Billing
                    </a>
                    <a href="testimonial.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                     Cardiology Billing
                    </a>
                    <a href="404.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Neurology Billing
                    </a>
                    <a href="404.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Neurosurgery billing
                    </a>
                    <a href="booking.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                    Dermatology Billing
                    </a>
                    <a href="booking.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Rehab Billing
                    </a>
                    <a href="booking.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Allergy & Immunology
                    </a>
                    <a href="booking.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Pediatric Billing
                    </a>
                    <a href="booking.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Nephrology Billing
                    </a>
                    <a href="booking.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Ophthalmology Billing
                    </a>
                    <a href="booking.html" class="dropdown-item-custom">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internett(1).png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/interneticonblack -red.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Geriatrics Billing
                    </a>
                  </div>
                </div>
              </div>
              {{-- thrd end --}}
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resources</a>
                  <div class="dropdown-menu fade-up m-0">
                      <a href="booking.html" class="dropdown-item">ff</a>
                      <a href="team.html" class="dropdown-item">fffffffffff</a>
                      <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                      <a href="404.html" class="dropdown-item">404 Page</a>
                  </div>
              </div>
              <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          </ul>
          <a href="#" class="header-btn-100 btn btn-primary rounded-pill px-3 ml-lg-3">Let’s Talk</a>
        </div>
      </div>
    </nav>
</header>
<style>
.dropdown-center-3 {
  left: 50% !important;
  transform: translateX(-40%) !important;
  right: auto !important;
}
.dropdown-center-4 {
 left: 50% !important;
  transform: translateX(-47%) !important; /* or -46% / -48% */
  right: auto !important;
}
.dropdown:hover .dropdown-menu{
    display: block;
    left: 0;
    background-image: linear-gradient(180deg, rgba(94, 94, 94, 0) 5%, #100906 100%) !important;
    box-shadow: rgb(80, 46, 109) 0px 12px 18px -6px;
    background-color: #1f1525 !important;
    color: #ffff;
   padding: 0px;
}
.dropdown-grid {
  display: grid;
  min-width: 580px;
}

.dropdown-grid-3 {
    grid-template-columns: repeat(3, 1fr);
    min-width: 790px;
    gap: 30px;
    padding: 20px 12px 40px;
    animation: zoomIn 0.6s ease forwards;
    transform-origin: top center;
    border-bottom: 1px solid #ffff;
}
.dropdown-grid-2 {
    grid-template-columns: repeat(2, 1fr);
    min-width: 520px;
    gap: 20px;
    padding: 13px 17px;
    animation: zoomIn 0.6s ease forwards;
    transform-origin: top center;
      border-bottom: 1px solid #ffff;
}
.dropdown-grid-4 {
    grid-template-columns: repeat(4, 1fr);
    min-width: 930px;
    padding: 17px 10px;
    gap: 20px;
    animation: zoomIn 0.6s ease forwards;
    transform-origin: top center;
    height: 390px;
    border-bottom: 1px solid #ffff;
}
@keyframes zoomIn {
  from {
    transform: scale(0.8);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}
.dropdown-menu.show {
  animation: zoomIn 0.6s ease forwards;
  transform-origin: top center;
}

@media (max-width: 576px) {
  .dropdown-grid,
  .dropdown-grid-3,
  .dropdown-grid-4 {
    grid-template-columns: repeat(2, 1fr);
    min-width: auto;
  }
}
.dropdown-item-custom {
  position: relative;
  display: flex;
  align-items: center;
  gap: 10px;
  padding:0px 2px 0px 10px;
  height: 66px;
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  font-size: 15px;
  transition: all 0.3s ease;
  box-sizing: border-box !important;
}
.rmv-pd{
    padding: 0px 19px;
}
.dropdown-grid-3 .dropdown-item-custom {
   border-bottom: 1px solid #502e6d;
}

.dropdown-grid-3 .dropdown-item-custom:nth-last-child(-n+3) {
  border-bottom: none;
}
.dropdown-grid-2 .dropdown-item-custom {
   border-bottom: 1px solid #502e6d;
}

.dropdown-grid-2 .dropdown-item-custom:nth-last-child(-n+2) {
  border-bottom: none;
}
.dropdown-grid-4 .dropdown-item-custom {
   border-bottom: 1px solid #502e6d;
}

.dropdown-grid-4 .dropdown-item-custom:nth-last-child(-n+4) {
  border-bottom: none;
}

.icon-wrapper {
  position: relative;
  width: 30px;
  height: 24px;
  display: inline-block;
}
.icon-wrapper img {
  position: absolute;
  top: 0;
  left: 0;
  width: 25px;
  transition: opacity 0.3s ease;
}

.icon-hover {
  opacity: 0;
}

.dropdown-item-custom:hover .icon-hover {
  opacity: 1;
}

.dropdown-item-custom:hover .icon-default {
  opacity: 0;
}
a.dropdown-item-custom:hover{
  color: #ffff;
  font-size: 15px;
  font-weight: 500;
  background: #502e6d;
  padding:0px 9px 0px;
  height: 66px;
  }
a.dropdown-item-custom.pd-rmve{
  padding: 20px 9px;
  height: 58px;
}

</style>