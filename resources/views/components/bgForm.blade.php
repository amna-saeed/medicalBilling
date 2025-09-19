<div class="bg-form-img">
    @if(session('success'))
        <div class="bg-dark-300 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
        <ul>
            @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
            @endforeach
        </ul>
        </div>
    @endif
    <div class="hero-text-form">
        <form method="POST" action="{{ route('bgform.submit') }}" id="contactForm"> 
            @csrf
            <div class="row g-3">
                <div class="col-md-6 second-form">
                    <input type="text" class="custom-input form-control" placeholder="Full Name" id="name" name="name" required>
                </div>
                <div class="col-md-6 second-form">
                    <input type="email" class="custom-input form-control" placeholder="Email Address" id="email" name="email" required>
                </div>
                <div class="col-md-6 second-form">
                    <input type="number" class="custom-input form-control" placeholder="Phone Number" id="phone" name="phone" required>
                </div>
                <div class="col-md-6 second-form">
                    <input type="text" class="custom-input form-control" placeholder="Business Name" id="business" name="business" required>
                </div>
                <div class="col-12 second-form">
                    <textarea class="custom-textarea form-control" rows="4" placeholder="Your Message" name="message"></textarea>
                </div>
                <div class="col-12 text-center second-form">
                    <button type="submit" class="custom-btn btn btn-primary">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>
<style>
    .second-form ::placeholder{
        color: #ffff !important;
    }
    .bg-dark-300.text-green-800.p-3.rounded.mb-4 {
        background: green;
        color: #fff;
        font-size: 15px;
        font-weight: 500;
        width: 31%;
        text-align: center;
        margin-left: 36%;
    }
</style>