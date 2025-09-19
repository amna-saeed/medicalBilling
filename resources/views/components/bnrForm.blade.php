<!-- Right Form -->

    <div class="transparent-form mx-auto p-4">
        @if(session('success'))
        <div class="bg-grdark-600 text-green-800 p-3 rounded mb-4">
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
        <form method="POST" action="{{ route('transparentform.submit') }}">
            @csrf
            <!-- Row 1 -->
            <div class="row mb-3">
                <div class="col-md-12 p-rmve form-box">
                    <select class="form-select custm-input-bnr" name="service_type" required>
                        <option value="" disabled selected hidden>Select Service Type</option>
                        <option value="" disabled selected hidden>Select Service Type</option>
                        <option>Medical Billing</option>
                        <option>Medical Credentialing</option>
                        <option>Medical Coding</option>
                        <option>Denial Management</option>
                        <option>Out of Network</option>
                        <option>Revenue Cycle</option>
                        <option>Medical Consulting</option>
                        <option>Medical Transcription Services</option>
                        <option>A/R Follow Up</option>
                    </select>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="mb-3">
                <div class="col-md-12 p-rmve form-box">
                    <select class="form-select custm-input-bnr" name="healthcare_type" required>
                        <option value="" disabled selected hidden>Select Healthcare Type</option>
                        <option>Individual Practice</option>
                        <option>Group Practice</option>
                        <option>Hospital</option>
                    </select>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="row mb-3">
                <div class="col-md-6 p-rmve form-box">
                    <input type="text" class="form-control custm-input-bnr" placeholder="Your Name" name="name" required />
                </div>
                <div class="col-md-6 p-rmve form-box">
                    <input type="email" class="form-control custm-input-bnr" placeholder="Email Address" name="email" required />
                </div>
            </div>

            <!-- Row 4 -->
            <div class="row mb-3">
                <div class="col-md-6 p-rmve form-box">
                    <input type="number" class="form-control custm-input-bnr" name="phone" placeholder="Phone Number" required />
                </div>
                <div class="col-md-6 p-rmve form-box">
                    <input type="url" class="form-control custm-input-bnr" placeholder="Website (optional)"  name="website" />
                </div>
            </div>
            <div class="text-center w-100 form-box">
                <button type="submit" class="frm-btn-10">Get Started</button>
            </div>
        </form>
    </div>

    <style>
        .form-box ::placeholder{
            color: #000 !important;
        }
        .bg-grdark-600.text-green-800.p-3.rounded.mb-4 {
            background: green;
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            width: 96%;
            text-align: center;
            margin-left: 2%;
            border-radius: 15px;
        }
    </style>

