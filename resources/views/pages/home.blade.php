@extends('layout.main')
@section('content')

    <div class="row">
        <div class="col-lg-12 p-0">
            @include('components.herohome')
        </div>
    </div>
    <!-- Add your rest of the page content here -->
    
    <div class="bg-full-100">
        <div class="mid-txt-box">
            <div class="two-box-row">
                <div class="left-box">
                    <h2>Let us show you the <br />value of a true <br />partnership.</h2>
                </div>
                <div class="right-box">
                    <p>
                      By utilizing technology, analytics, and personalized revenue cycle solutions, we aim to revolutionize the revenue-cycle management of both fee for service models and value-based care systems, while also fostering financial stability across the healthcare system.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark-light-pur" id="meeting-section">
        <a href="#" class="req-btn" id="zoom-btn">Request a meeting</a>
    </div>
    
    <!-- Service Start -->
    <div class="bg-slider-img">
        <h4 class="reven-box">Revenue Cycle Management</h4>  
        <div class="row">
            <div class="log-lg-12 p-0">
                <div class="py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-text bg-light text-center p-4 mb-4">
                                    <h4 class="slider-heding">Patient Experience</h4>
                                    <p class="mb-0">Optimization from the start with  front-end solutions for seamless patient experience and financial success.</p>
                                    <a class="et_pb_button dipi-carousel-button" href="">→</a>
                                </div>
                            </div>
                                <div class="testimonial-item text-center">
                                <div class="testimonial-text bg-light text-center p-4 mb-4">
                                    <h4 class="slider-heding">Chargemaster Services</h4>
                                    <p class="mb-0">Market-based pricing, Chargemaster Review, Price Transparency, No Surprises Act</p>
                                     <a class="et_pb_button dipi-carousel-button" href="">→</a>
                                </div>
                            </div>
                                <div class="testimonial-item text-center">
                                <div class="testimonial-text bg-light text-center p-4 mb-4">
                                    <h4 class="slider-heding">Utilization Management</h4>
                                    <p class="mb-0">Concurrent and Retrospective Reviews done for you</p>
                                     <a class="et_pb_button dipi-carousel-button" href="">→</a>
                                </div>
                            </div>
                                <div class="testimonial-item text-center">
                                <div class="testimonial-text bg-light text-center p-4 mb-4">
                                    <h4 class="slider-heding">Medical Coding</h4>
                                    <p class="mb-0">Outsourced and concurrent medical coding and claim audits</p>
                                     <a class="et_pb_button dipi-carousel-button" href="">→</a>
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="testimonial-text bg-light text-center p-4 mb-4">
                                    <h4 class="slider-heding">Claims Management</h4>
                                    <p class="mb-0">Resolve AR challenges with expert-driven billing, claims, payment reconciliation, and specialized recovery solutions.</p>
                                    <a class="et_pb_button dipi-carousel-button" href="">→</a>
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="testimonial-text bg-light text-center p-4 mb-4">
                                    <h4 class="slider-heding">Denials</h4>
                                    <p class="mb-0">Converting claim denials into financial gains, enhancing your financial health and operational efficiency</p>
                                    <a class="et_pb_button dipi-carousel-button" href="">→</a>
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="testimonial-text bg-light text-center p-4 mb-4">
                                    <h4 class="slider-heding">Value-Base Care</h4>
                                    <p class="mb-0">RAF Accuracy, HCC Coding & Hedis Abstraction, Coding reviews.</p>
                                    <a class="et_pb_button dipi-carousel-button" href="">→</a>
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="testimonial-text bg-light text-center p-4 mb-4">
                                    <h4 class="slider-heding">Clinical Documentation</h4>
                                    <p class="mb-0">Concurrent and Retrospective Reviews done for you</p>
                                    <a class="et_pb_button dipi-carousel-button" href="">→</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    {{-- <div class="stats-section">
        <div class="stats-row">
            <div class="stats-box">
                <div class="stats-value">300+</div>
                <p class="stats-label">MEDICAL DOCTORS & CLINICIANS</p>
            </div>
            
            <div class="stats-box">
                <div class="stats-value">200,000+</div>
                <p class="stats-label">HEALTHCARE DATA SCIENTIST HOURS</p>
            </div>
            
            <div class="stats-box">
                <div class="stats-value">5,000+</div>
                <p class="stats-label">INTELLIGENT TECHNOLOGY RULES</p>
            </div>
            
            <div class="stats-box">
                <div class="stats-value">$ 5.7 Billion+</div>
                <p class="stats-label">IN COMPLIANTLY RECOVERED REVENUE</p>
            </div>
        </div>
    </div> --}}

    <div class="container my-3">
        <div class="row">
                <div class="col-lg-6 col-md-12 box-left">
                <h6 class="financial-head">Your financial health. Our priority.</h6>
                    <p class="financial-txt">
                        You deserve a partnership based on mutual understanding and trust while delivering tangible results.
                        We bridge the gap between providers and payers, fostering collaboration to maximize financial outcomes
                        and creating a win-win for all.
                    </p>
                    <a href="" class="start-200">Get Started  <span class="icon"><i class="fas fa-arrow-right"></i></span></a>
                </div>
                <div class="col-lg-6 col-md-12 box-right">
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span>Healthcare Technology</span>
                            <i class="icon">+</i>
                        </button>
                        <div class="accordion-content">
                            <p>Our suite of innovative healthcare technologies addresses critical areas in your revenue cycle, enabling fast, efficient, and compliant revenue reimbursements.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span>Payer-Provider Relationships</span>
                            <i class="icon">+</i>
                        </button>
                        <div class="accordion-content">
                            <p>We help healthcare organizations navigate the complex relationship between payers and providers for smoother operations and effective revenue cycle management.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span>Analytics Based on Revenue Goals</span>
                            <i class="icon">+</i>
                        </button>
                        <div class="accordion-content">
                            <p>Our clinically-led healthcare analytics provide invaluable insights to help you make informed decisions based on your revenue goals.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span>Efficient Processes</span>
                            <i class="icon">+</i>
                        </button>
                        <div class="accordion-content">
                            <p>Optimize your operations and achieve financial resilience with our expertise, even with limited resources</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('js')

@endsection