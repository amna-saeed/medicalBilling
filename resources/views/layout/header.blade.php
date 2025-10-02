<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="navbar-container d-flex w-100 align-items-center justify-content-between">
        <a class="navbar-brand text-white mb-0" href="{{ route('home') }}">
          <img src="{{asset('assets/appImg/white.svg')}}" alt="" loading="lazy" class="logo-web" />
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
                      <!-- <a href="booking.html" class="dropdown-item-custom pd-rmve">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/terms.png') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/terms_.png') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                       Terms and Conditions
                      </a> -->
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
                        <img src="{{ asset('assets/appImg/medicalbilling.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/medicalbilling_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Billing
                    </a>
                    <a href="{{ route('services.medical-credentialing') }}" class="dropdown-item-custom {{request()->routeIs('services.medical-credentialing') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/medicalCredentialling.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/medicalCredentialling_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Credentialing
                    </a>
                    <a href="{{ route('services.medical-coding') }}" class="dropdown-item-custom {{request()->routeIs('services.medical-coding') ? 'active' : '' }} ">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/medicalcoding.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/medicalcoding_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Coding
                    </a>
                    <a href="{{route('services.denial-management')}}" class="dropdown-item-custom {{request()->routeIs('services.denial-management') ? 'active' : '' }} ">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/Denialmanagement.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/Denialmanagement_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Denial Management
                    </a>
                    <a href="{{route('services.out-of-network-billing')}}" class="dropdown-item-custom {{request()->routeIs('services.out-of-network-billing') ? 'active' : '' }} ">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/OutofNetworking.webp') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/OutofNetworking_.webp') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                      Out of Network
                    </a>
                    <a href="{{route('services.revenue-cycle-management')}}" class="dropdown-item-custom {{request()->routeIs('services.revenue-cycle-management') ? 'active' : '' }} ">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/revenuecycle.webp') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/revenuecycle_.webp') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                     Revenue Cycle
                    </a>
                    <a href="{{route('services.medical-billing-consulting')}}" class="dropdown-item-custom pd-rmve {{request()->routeIs('services.medical-billing-consulting') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/medicalconsulting.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/medicalconsulting_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Consulting
                    </a>
                    <a href="{{route('services.medical-transcription-service')}}" class="dropdown-item-custom pd-rmve {{request()->routeIs('services.medical-transcription-service') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/outsourcebilling.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/outsourcebilling_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Medical Transcription Services 
                    </a>
                    <a href="{{route('services.ar-follow-up')}}" class="dropdown-item-custom pd-rmve {{request()->routeIs('services.ar-follow-up') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/Followup.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/Followup_.webp') }}" class="icon-hover" alt="" loading="lazy">
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
                          <img src="{{ asset('assets/appImg/ophathamology.webp') }}" class="icon-default" alt="">
                          <img src="{{ asset('assets/appImg/ophathamology_.webp') }}" class="icon-hover" alt="">
                        </span>
                        Orthopedic Billing
                      </a>
                      
                      <a href="{{ route('specialities', 'urology') }}" class="dropdown-item-custom {{ request()->is('specialities/urology') ? 'active' : '' }}">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/urology.webp') }}" class="icon-default" alt="">
                          <img src="{{ asset('assets/appImg/urology_.webp') }}" class="icon-hover" alt="">
                        </span>
                      Urology Billing
                      </a>
                      <a href="{{ route('specialities', 'MentalHealth') }}" class="dropdown-item-custom {{request()->is('specialities/MentalHealth') ? 'active' : '' }} ">
                       
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/menta.webp') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/mental_.webp') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                      Mental Health
                    </a>
                    <a href="{{ route('specialities', 'urgentcare') }}" class="dropdown-item-custom" {{request()->is('specialities/urgentcare') ? 'active' : '' }} ">
                       <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/urgent-care2.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/urgent-care1.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Urgent Care
                    </a>
                      <a href="{{ route('specialities', 'dental') }}" class="dropdown-item-custom {{ request()->is('specialities/dental') ? 'active' : '' }}">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/dental.webp') }}" class="icon-default" alt="">
                          <img src="{{ asset('assets/appImg/dental_1.webp') }}" class="icon-hover" alt="">
                        </span>
                        Dental Billing
                      </a>
                    
                    
                    <a href="{{ route('specialities', 'RadiologyBilling') }}" class="dropdown-item-custom" {{request()->is('specialities/RadiologyBilling') ? 'active' : '' }} ">
                        <span class="icon-wrapper">
                          <img src="{{ asset('assets/appImg/radialogy.webp') }}" class="icon-default" alt="" loading="lazy">
                          <img src="{{ asset('assets/appImg/radialogy_.webp') }}" class="icon-hover" alt="" loading="lazy">
                        </span>
                      Radiology Billing
                    </a>
                    <a href="{{ route('specialities', 'CardiologyBilling') }}" class="dropdown-item-custom {{request()->is('specialities/CardiologyBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/cardialogy1.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/cardialogy_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                     Cardiology Billing
                    </a>
                    <a href="{{ route('specialities', 'NeurologyBilling') }}" class="dropdown-item-custom" {{request()->is('specialities/NeurologyBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/urology.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/urology_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Neurology Billing
                    </a>
                    <a href="{{ route('specialities', 'NeurosurgeryBilling') }}" class="dropdown-item-custom" {{request()->is('specialities/NeurosurgeryBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/neourosurgery.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/neourosurgery_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Neurosurgery Billing
                    </a>
                    <a href="{{ route('specialities', 'DermatologyBilling') }}" class="dropdown-item-custom {{request()->is('specialities/DermatologyBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/dermatology1.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/dermatology_2.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Dermatology Billing
                    </a>
                    <a href="{{ route('specialities', 'RehabBilling') }}" class="dropdown-item-custom {{request()->is('specialities/RehabBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/rehab.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/rehab_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Rehab Billing
                    </a>
                    <a href="{{ route('specialities', 'Allergy & Immunology') }}" class="dropdown-item-custom {{request()->is('specialities/Allergy & Immunology') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/allergyand Immonology.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/allergyand Immonology_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                        Allergy & Immunology
                    </a>
                    <a href="{{ route('specialities', 'PediatricBilling') }}" class="dropdown-item-custom {{request()->is('specialities/PediatricBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/pediatric.webp') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/pediatric_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                        Pediatric Billing
                    </a>
                    <a href="{{ route('specialities', 'NephrologyBilling') }}" class="dropdown-item-custom {{request()->is('specialities/NephrologyBilling') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/nephrology22.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/nephrology_.webp') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Nephrology Billing
                    </a>
                    <a href="{{ route('specialities', 'InternalMedicine') }}" class="dropdown-item-custom {{request()->is('specialities/InternalMedicine ') ? 'active' : '' }} ">
                      <span class="icon-wrapper">
                        <img src="{{ asset('assets/appImg/internalmedicine1.png') }}" class="icon-default" alt="" loading="lazy">
                        <img src="{{ asset('assets/appImg/internalmedicine2.png') }}" class="icon-hover" alt="" loading="lazy">
                      </span>
                      Internal Medicine
                    </a>
                    <a href="{{ route('specialities', 'HospitalBilling') }}" class="dropdown-item-custom {{request()->is('specialities/HospitalBilling') ? 'active' : '' }} ">
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
              <!-- <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resources</a>
                  <div class="dropdown-menu fade-up m-0">
                      <a href="booking.html" class="dropdown-item">ff</a>
                      <a href="team.html" class="dropdown-item">fffffffffff</a>
                      <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                      <a href="404.html" class="dropdown-item">404 Page</a>
                  </div>  
              </div> -->
              <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}">Contact</a></li>
          </ul>
          <a href="#" class="header-btn-100 btn btn-primary rounded-pill px-3 ml-lg-3">Let’s Talk</a>
        </div>
      </div>
    </nav>
</header>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bp-navbar">
  <div class="container">
      <a class="bp-brand" href="/">
         <img src="{{asset('assets/appImg/white.svg')}}" alt="" loading="lazy" />
      </a>
      <button class="navbar-toggler bp-toggler" type="button" data-toggle="collapse" data-target="#bpNav" aria-controls="bpNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="bp-hamburger"></span>
          <span class="bp-hamburger"></span>
          <span class="bp-hamburger"></span>
      </button>

      <div class="collapse navbar-collapse bp-collapse" id="bpNav">
          <ul class="navbar-nav ml-auto bp-nav">
              <li class="bp-item active">
                  <a class="bp-link" href="#">Home</a>
              </li>
              <li class="bp-item dropdown bp-specialities">
              <a class="bp-link dropdown-toggle" href="#" id="bpSpecialitiesDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Company
              </a>
              <ul class="dropdown-menu" aria-labelledby="bpSpecialitiesDropdown">
                <li><a class="dropdown-item inner-resp" href="{{ route('about-us')}}">About Us</a></li>
                <li><a class="dropdown-item inner-resp" href="{{route('privacy-policy')}}"> privacy-policy</a></li>
                <!-- <li><a class="dropdown-item inner-resp" href="#">Terms and Conditions</a></li> -->
              </ul>
              </li>
               <li class="bp-item dropdown bp-specialities">
                <a class="bp-link dropdown-toggle" href="#" id="bpSpecialitiesDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a> 
                <ul class="dropdown-menu specialities-fix-h" aria-labelledby="bpSpecialitiesDropdown">
                  <li><a class="dropdown-item inner-resp" href="{{ route('services.medical-billing') }}"> Medical Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('services.medical-credentialing') }}">Medical Credentialing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('services.medical-coding') }}"> Medical Coding</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{route('services.denial-management')}}">Denial Management</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{route('services.out-of-network-billing')}}">Out of Network</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{route('services.revenue-cycle-management')}}">Revenue Cycle</a> </li>
                  <li><a class="dropdown-item inner-resp" href="{{route('services.medical-billing-consulting')}}">Medical Consulting</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{route('services.medical-transcription-service')}}">Medical Transcription Services</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{route('services.ar-follow-up')}}"> A/R Follow Up</a></li>
                </ul>
              </li>
              <li class="bp-item dropdown bp-specialities">
                <a class="bp-link dropdown-toggle" href="#" id="bpSpecialitiesDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Specialities
                </a>
                <ul class="dropdown-menu specialities-fix-h" aria-labelledby="bpSpecialitiesDropdown">
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'orthopedic') }}"> Orthopedic Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'urology') }}">Urology Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'MentalHealth') }}">Mental Health</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'urgentcare') }}">Urgent Care</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'dental') }}">Dental Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'RadiologyBilling') }}">Radiology Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'CardiologyBilling') }}">Cardiology Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'NeurologyBilling') }}">Neurology Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'NeurosurgeryBilling') }}">Neurosurgery Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'DermatologyBilling') }}">Dermatology Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'RehabBilling') }}">Rehab Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'Allergy & Immunology') }}">Allergy & Immunology</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'PediatricBilling') }}">Pediatric Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'NephrologyBilling') }}">Nephrology Billing</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'InternalMedicine') }}">Internal Medicine</a></li>
                  <li><a class="dropdown-item inner-resp" href="{{ route('specialities', 'HospitalBilling') }}">Hospital Billing</a></li>
                </ul>
              </li>
              <li class="bp-item">
                  <a class="bp-link" href="{{route('contact-us')}}">Contact</a>
              </li>
          </ul>
      </div>
  </div>
</nav>


<style>
a.dropdown-item.inner-resp{
      display: block;
    width: 100%;
    padding: .29rem 1.9rem;
    clear: both;
    font-weight: 400;
    color: #ededed;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    margin-bottom: 5px;
}
 .bp-navbar {
    background: #050304 !important;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 0.6rem 0rem;
    transition: all 0.3s ease;
    border-bottom: 1px solid #7f7f7f;
}
.dropdown-menu {
    color: #ffff !important;
    text-align: left;
    list-style: none;
    background-clip: padding-box;
    border: 1px solid rgb(22 12 30);
    background-image: radial-gradient(circle at center, #502e6d 0%, #100906 99%) !important;
}
.dropdown-menu.show {
  max-height: 500px; /* big enough for menu */
  opacity: 1;
}
.bp-brand {
  font-weight: 700;
  color: #fff !important;
  display: flex;
  align-items: center;
  width: 125px;
}

  .bp-link {
     color: rgba(255, 255, 255, 0.85) !important;
    font-weight: 400;
    padding: 0.8rem 1.2rem !important;
    margin: 0 2px;
    border-radius: 4px;
    transition: all 0.3s ease;
    font-size: 15px;
}

  .bp-link:hover {
      color: #fff !important;
      transform: translateY(-2px);
  }

  .bp-link.active {
      /* background-color: rgba(255, 255, 255, 0.15); */
      color: rgb(177 49 104) !important;
  }

  .bp-toggler {
      border: none;
      padding: 0.5rem;
      outline: none;
      width: 47px;
      height: 40px;
      position: relative;
      transition: all 0.3s ease;
  }

  .bp-toggler:focus {
      outline: none;
      box-shadow: none;
  }

  /* Custom hamburger icon */
  .bp-hamburger {
      display: block;
      position: absolute;
      height: 3px;
      width: 25px;
      background: white;
      border-radius: 2px;
      left: 11px;
      transition: all 0.3s ease;
  }

  .bp-hamburger:nth-child(1) {
      top: 12px;
  }

  .bp-hamburger:nth-child(2) {
      top: 18.5px;
      opacity: 1;
  }

  .bp-hamburger:nth-child(3) {
      top: 24px;
  }

  /* Transform hamburger into close icon when navbar is open */
  .bp-toggler[aria-expanded="true"] .bp-hamburger:nth-child(1) {
      transform: rotate(45deg);
      top: 18.5px;
  }

  .bp-toggler[aria-expanded="true"] .bp-hamburger:nth-child(2) {
      opacity: 0;
  }

  .bp-toggler[aria-expanded="true"] .bp-hamburger:nth-child(3) {
      transform: rotate(-45deg);
      top: 18.5px;
  }

  .bp-btn {
      background: linear-gradient(90deg, #2c3e50, #4a6491);
      border: none;
  }

  .bp-btn:hover {
      background: linear-gradient(90deg, #4a6491, #2c3e50);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  /* Animation for the mobile menu */
  @media (max-width: 991.98px) {
    .bp-collapse {
        position: fixed;
        top: 70px;
        left: 0;
        padding: 15px;
        width: 100%;
        background: linear-gradient(90deg, #2c3e50, #4a6491);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        transition: all 0.3s ease;
        transform: translateY(-10px);
        opacity: 0;
        visibility: hidden;
        display: block !important;
    }

    .bp-collapse.show {
      transform: translateY(0);
      opacity: 1;
      visibility: visible;
      background-image: linear-gradient(180deg, rgba(94, 94, 94, 0) 5%, #100906 100%) !important;
      box-shadow: rgb(80, 46, 109) 0px 12px 18px -6px;
      background-color: #1f1525 !important;
      color: #ffff;
    }
    }

    .bp-nav {
        margin-top: 10px;
    }

    .bp-item {
        margin-bottom: 11px;
    }

/*  */
 header.main-header{
    display: block;
  }
nav.navbar.navbar-expand-lg.navbar-dark.fixed-top.bp-navbar{
    display: none;
  }

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
  background: linear-gradient(90deg, #502e6d, #a23f6d);
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

@media (min-width: 320px) and (max-width: 525px) {
  header.main-header{
    display: none;
  }
  ul.dropdown-menu.specialities-fix-h.show{
    height: 160px;
    overflow-y: scroll;
  }
  nav.navbar.navbar-expand-lg.navbar-dark.fixed-top.bp-navbar{
    display: block;
  }
}
</style>

   <!-- Bootstrap 4 JS Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    
   {{-- <script>
  $(document).ready(function() {
      // Toggle hamburger
      $('.bp-toggler').on('click', function() {
          const isExpanded = $(this).attr('aria-expanded') === 'true';
          $(this).attr('aria-expanded', !isExpanded);
      });

      // Close menu on link click
      $('.bp-link').on('click', function() {
          $('.bp-collapse').collapse('hide');
          $('.bp-toggler').attr('aria-expanded', 'false');
      });
  });
</script> --}}

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.nav-item.dropdown .dropdown-toggle').forEach(function (toggle) {
      toggle.addEventListener('click', function (e) {
        e.preventDefault();

        // Close other open dropdowns inside navbar
        this.closest('.navbar-nav')
            .querySelectorAll('.dropdown-menu.show')
            .forEach(menu => menu.classList.remove('show'));

        // Toggle current dropdown
        let dropdownMenu = this.nextElementSibling;
        dropdownMenu.classList.toggle('show');
      });
    });
  });
</script>

