<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-container d-flex w-100 align-items-center justify-content-between">
        <a class="navbar-brand text-white mb-0" href="#">
          <img src="{{asset('assets/appImg/white.svg')}}" alt="" loading="lazy" class="logo-web" />
          {{-- <img src="{{asset('assets/appImg/black.svg')}}" alt="" loading="lazy" class="logo-web" /> --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto nav-links">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Company</a>
                  <div class="dropdown-menu fade-up m-0">
                    <div class="dropdown-grid dropdown-grid-2">
                      <a href="{{ route('about-us')}}" class="dropdown-item-custom {{ request()->routeIs('about-us') ? 'active' : '' }}">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/about.png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/about_.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                        About Us
                      </a>
                      <a href="{{route('privacy-policy')}}" class="dropdown-item-custom {{ request()->routeIs('privacy-policy') ? 'active' : '' }}">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/privacy.png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/privacy_.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                        privacy-policy
                      </a>
                      <a href="booking.html" class="dropdown-item-custom pd-rmve">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/terms.png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/terms_.png') }}" class="icon-hover" alt="" loading="lazy">
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
                    <a href="{{ route('services.medical-billing') }}" class="dropdown-item-custom {{ request()->routeIs('services.medical-billing') ? 'active' : '' }}">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/medicalbilling.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/medicalbilling_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Billing
                    </a>
                    <a href="{{ route('services.medical-credentialing') }}" class="dropdown-item-custom {{request()->routeIs('services.medical-credentialing') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/medicalCredentialling.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/medicalCredentialling_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Credentialing
                    </a>
                    <a href="{{ route('services.medical-coding') }}" class="dropdown-item-custom {{request()->routeIs('services.medical-coding') ? 'active' : '' }} ">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/medicalcoding.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/medicalcoding_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Coding
                    </a>
                    <a href="{{route('services.denial-management')}}" class="dropdown-item-custom {{request()->routeIs('services.denial-management') ? 'active' : '' }} ">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/Denialmanagement.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/Denialmanagement_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Denial Management
                    </a>
                    <a href="{{route('services.out-of-network-billing')}}" class="dropdown-item-custom {{request()->routeIs('services.out-of-network-billing') ? 'active' : '' }} ">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/OutofNetworking.png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/OutofNetworking_.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                      Out of Network
                    </a>
                    <a href="{{route('services.revenue-cycle-management')}}" class="dropdown-item-custom {{request()->routeIs('services.revenue-cycle-management') ? 'active' : '' }} ">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/revenuecycle.png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/revenuecycle_.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                     Revenue Cycle
                    </a>
                    <a href="{{route('services.medical-billing-consulting')}}" class="dropdown-item-custom pd-rmve {{request()->routeIs('services.medical-billing-consulting') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/medicalconsulting.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/medicalconsulting_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Consulting
                    </a>
                    <a href="{{route('services.medical-transcription-service')}}" class="dropdown-item-custom pd-rmve {{request()->routeIs('services.medical-transcription-service') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/outsourcebilling.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/outsourcebilling_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Transcription Services 
                    </a>
                    <a href="{{route('services.ar-follow-up')}}" class="dropdown-item-custom pd-rmve {{request()->routeIs('services.ar-follow-up') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/Followup.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/Followup_.png') }}" class="icon-hover" alt="" loading="lazy">
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
                      
                      <a href="{{ route('specialities', 'orthopedic') }}" class="dropdown-item-custom {{ request()->is('specialities/orthopedic') ? 'active' : '' }}">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/ophathamology.png') }}" class="icon-default" alt="">
                          <img src="{{ asset('assets/appImg/ophathamology_.png') }}" class="icon-hover" alt="">
                        </span>
                        Orthopedic Billing
                      </a>
                      
                      <a href="{{ route('specialities', 'urology') }}" class="dropdown-item-custom {{ request()->is('specialities/urology') ? 'active' : '' }}">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/urology.png') }}" class="icon-default" alt="">
                          <img src="{{ asset('assets/appImg/urology_.png') }}" class="icon-hover" alt="">
                        </span>
                      Urology Billing
                      </a>
                      <a href="{{ route('specialities', 'MentalHealth') }}" class="dropdown-item-custom" {{request()->routeIs('specialities/MentalHealth') ? 'active' : '' }} ">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/menta.png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/mental_.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                      Mental Health
                    </a>
                    <a href="{{ route('specialities', 'urgentcare') }}" class="dropdown-item-custom" {{request()->routeIs('specialities/urgentcare') ? 'active' : '' }} ">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/urgent-care2.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/urgent-care1.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Urgent Care
                    </a>
                      <a href="{{ route('specialities', 'dental') }}" class="dropdown-item-custom {{ request()->is('specialities/dental') ? 'active' : '' }}">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/dental.png') }}" class="icon-default" alt="">
                          <img src="{{ asset('assets/appIm`g/dental_.png') }}" class="icon-hover" alt="">
                        </span>
                        Dental Billing
                      </a>
                    
                    
                    <a href="{{ route('specialities', 'RadiologyBilling') }}" class="dropdown-item-custom" {{request()->routeIs('specialities/RadiologyBilling') ? 'active' : '' }} ">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/radialogy.png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/radialogy_.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                      Radiology Billing
                    </a>
                    <a href="{{ route('specialities', 'CardiologyBilling') }}" class="dropdown-item-custom {{request()->routeIs('specialities/CardiologyBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/cardialogy.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/cardialogy_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                     Cardiology Billing
                    </a>
                    <a href="{{ route('specialities', 'NeurologyBilling') }}" class="dropdown-item-custom" {{request()->routeIs('specialities/NeurologyBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/urology.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/urology_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Neurology Billing
                    </a>
                    <a href="{{ route('specialities', 'NeurosurgeryBilling') }}" class="dropdown-item-custom" {{request()->routeIs('specialities/NeurosurgeryBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/neourosurgery.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/neourosurgery_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Neurosurgery Billing
                    </a>
                    <a href="{{ route('specialities', 'DermatologyBilling') }}" class="dropdown-item-custom {{request()->routeIs('specialities/DermatologyBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/dermatology.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/dermatology_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Dermatology Billing
                    </a>
                    <a href="{{ route('specialities', 'RehabBilling') }}" class="dropdown-item-custom {{request()->routeIs('specialities/RehabBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/rehab.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/rehab_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Rehab Billing
                    </a>
                    <a href="{{ route('specialities', 'Allergy & Immunology') }}" class="dropdown-item-custom {{request()->routeIs('specialities/Allergy & Immunology') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/allergyand Immonology.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/allergyand Immonology_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                        Allergy & Immunology
                    </a>
                    <a href="{{ route('specialities', 'PediatricBilling') }}" class="dropdown-item-custom {{request()->routeIs('specialities/PediatricBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/pediatric.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/pediatric_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                        Pediatric Billing
                    </a>
                    <a href="{{ route('specialities', 'NephrologyBilling') }}" class="dropdown-item-custom {{request()->routeIs('specialities/NephrologyBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/nephrology.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/nephrology_.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Nephrology Billing
                    </a>
                    <a href="{{ route('specialities', 'InternalMedicine') }}" class="dropdown-item-custom {{request()->routeIs('specialities/InternalMedicine ') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internalmedicine1.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/internalmedicine2.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Internal Medicine
                    </a>
                    <a href="{{ route('specialities', 'HospitalBilling') }}" class="dropdown-item-custom {{request()->routeIs('specialities/HospitalBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/hospitalbilling2.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/hospitalbilling1.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Hospital Billing
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
              <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}">Contact</a></li>
          </ul>
          <a href="#" class="header-btn-100 btn btn-primary rounded-pill px-3 ml-lg-3">Let’s Talk</a>
        </div>
      </div>
    </nav>
</header>
<style>
a.nav-link.active {
  color: #ffffff !important;
  display: inline-block; /* ensure the element wraps text width */
  position: relative;
  padding-bottom: 6px; /* optional: create room for underline */
}

a.nav-link.active::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, #502e6d, #502e6d);
  border-radius: 2px;
  pointer-events: none;
}
.nav-item.dropdown{
  padding: 0.5rem 1rem;
}
.nav-item{
  padding: 0.5rem 1rem;
}
.navbar-expand-lg .navbar-nav .nav-link {
  padding-right: 0px;
  padding-left: 0px;
}
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

.dropdown-grid-2 .dropdown-item-custom:nth-last-child(-n+1) {
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
  width: 30px;
  transition: opacity 0.3s ease;
}

.icon-hover {
  opacity: 0;
}

.dropdown-item-custom:hover .icon-hover,
.dropdown-item-custom.active .icon-hover {
  opacity: 1;
}

.dropdown-item-custom:hover .icon-default,
.dropdown-item-custom.active .icon-default {
  opacity: 0;
}
a.dropdown-item-custom:hover, .dropdown-item-custom.active{
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