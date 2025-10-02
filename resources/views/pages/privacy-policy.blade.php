@extends('layout.main')
@section('content')

  <div class="bg-service-privacy">
    <div id="particles-js"></div>
    <div class="service-overlay">
    </div>
</div>
<div class="ggle-box">
    <div class="ggle-left-2">
        <h2 class="ggle-head">Privacy Policy</h2>
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
            <div class="col-lg-12 resp-0">
                <div class="topr-about">
                    <div class="text-box-cont-about">
                        <p class="about-para">
                          Thank you for choosing SybridMD <b>(Official Business Name: MD Syhealth LLC) </b>to handle all of your medical billing needs. We care about our customers and aim to provide the best services in the industry. For the sake of clarity and to promote transparency on our end, we have prepared the following privacy policy to help you understand the way our company handles your information and how your security is ensured.
                        </p>
                        <p class="about-para">
                          Being in the medical billing industry, we require that all of our customers provide us with the relevant insurance and medical information that we request, so that we can begin pursuing claims on your behalf. By opting to use our services, you are consenting to our requirements and are agreeing to provide us with this information. Additionally, you are also consenting to the use of your details in accordance with the SybridMD Privacy Policy. We are aware that this information is extremely private and can be identifying, which is why, to that end, we can guarantee that it will not be compromised or exploited in any malicious way.
                        </p>
                        <p class="about-para">
                          Introduced in <b>August 1996,</b> the Health Insurance Portability and Accountability Act <b>(HIPAA)</b> was implemented in order to improve standards for healthcare by guaranteeing greater security for personal information. In the process of handling all medical billing, we will handle your information in line with the standards described in this act.
                          The details and information you provide us will be handled in the manner stated below:
                        </p>
                         <p class="about-para">
                            <ul class="privacy-list">
                                <li>
                                    Personal information will be shared as per HIPAA regulations.
                                </li>
                                <li>Identifiable details will be disclosed for reasons related to payment and treatment</li>
                                <li>Depending on various requirements, your information might potentially be disclosed for auditing purposes or in the event of an emergency.</li>
                                <li>All federal and state laws with regard to the collection, transmission and storage of medical data will be observed and abided by</li>
                            </ul>
                         </p>
                         <p class="about-para">
                            Additionally, in the event of a legal matter we reserve the right to share relevant information with the concerned party. This can be in the form of a subpoena, fraud, etc. However, note that this is only in very specific cases where we, at SybridMD, feel this is necessary, as we value the security of our customers and do not want to compromise your privacy in any way whatsoever.
                         </p>
                         <p class="about-para">
                            No mobile information will be shared with third parties/affiliates for marketing/promotional purposes. All the above categories exclude text messaging originator opt-in data and consent; this information will not be shared with any third parties.
                         </p>
                         <p class="about-para">
                            Messages from us may incur carrier messaging and data charges. Please reply HELP to get assistance or STOP to unsubscribe.
                            At SybridMD, we reserve the right to adjust or revise this policy in the event that any laws, regulations or standards have been altered at the state-wide or national level.

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
