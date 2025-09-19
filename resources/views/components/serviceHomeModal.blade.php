
<!-- Modal -->
<div class="">
    <div class="modal fade custom-modal" id="uniqueModal" tabindex="-1" role="dialog" aria-labelledby="uniqueModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content custom-modal-content">
            
                <div class="modal-header custom-modal-header">
                    <button type="button" class="close 120-cls" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body custom-modal-body">
                    <div class="bg-gradient-xx mx-auto p-4">
                        <form method="POST" action="{{ route('transparentform.submit') }}">
                            @csrf
                            <!-- Row 1 -->
                            <div class="row mrgnz-btm-frm">
                                <div class="col-md-12 pdng-rmve service-modal">
                                    <select class="form-select frm-input-wdth" name="service_type" required>
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
                            <div class="row mrgnz-btm-frm">
                                <div class="col-md-12 pdng-rmve service-modal">
                                    <select class="form-select frm-input-wdth" name="healthcare_type" required>
                                        <option value="" disabled selected hidden>Select Healthcare Type</option>
                                        <option>Individual Practice</option>
                                        <option>Group Practice</option>
                                        <option>Hospital</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="row mrgnz-btm-frm">
                                <div class="col-md-6 pdng-rmve-rght service-modal">
                                    <input type="text" class="form-control frm-input-wdth" placeholder="Your Name" name="name" required />
                                </div>
                                <div class="col-md-6 pdng-rmve-lft service-modal">
                                    <input type="email" class="form-control frm-input-wdth" placeholder="Email Address" name="email" required />
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="row mrgnz-btm-frm">
                                <div class="col-md-6 pdng-rmve-rght service-modal">
                                    <input type="number" class="form-control frm-input-wdth" placeholder="Phone Number" name="phone" required />
                                </div>
                                <div class="col-md-6 pdng-rmve-lft service-modal">
                                    <input type="url" class="form-control frm-input-wdth" placeholder="Website (optional)" name="website" />
                                </div>
                            </div>
                            <div class="text-center w-100 service-modal">
                                <button type="submit" class="frm-btn-10">Get Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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
button.close.\31 20-cls{
    position: absolute;
    right: -11px;   
    border: none;
    background: transparent;
    color: #cb0505;
    font-weight: 800;
    font-size: 51px;
    top: -59px;
}
div#uniqueModal
 {
    background: #100906e0 !important;
}
select.form-select.frm-input-wdth {
    border-radius: 6px !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    height: 50px !important;
    margin-bottom: 10px;
    padding: 2px 10px;
    width: 100%;
}
.row.mrgnz-btm-frm
 {
    margin-bottom: 10px !important;
}
.col-md-6.pdng-rmve-lft {
    padding-right: 0px;
}
.bg-gradient-xx {
    background-color: rgb(16 9 6 / 35%) !important;
    border-radius: 0px !important;
    margin-right: 0px !important;
    padding: 30px 23px !important;
    margin: 0px !important;
    border: 0px solid #bebebe96 !important;
    border-radius: 14px !important;
}
.service-modal ::placeholder{
    color: #101010 !important;
}
.col-md-6.pdng-rmve-rght {
    padding-left: 0px;
}
.custom-modal-body{
    background-color: rgb(16 9 6 / 35%) !important;
    border: 0px solid #bebebe96 !important;
    border-radius: 10px !important;
    margin: 0px !important;
    box-shadow: rgb(156 39 176 / 28%) 0px 5px 15px !important;
}
input.form-control.frm-input-wdth{
    background-color: #fff;
    color: #101010 !important;
    border: 1px solid #ccc;
    width: 100%;
    padding: 4px 13px;
    height: 48px;
    margin-bottom: 10px;
    border-radius: 6px;
    font-size: 15px;
    font-weight: 600;
}
.btn-custom {
  background-color: #6f42c1;
  color: #fff;
  border-radius: 30px;
  padding: 10px 20px;
  transition: 0.3s;
}
.btn-custom:hover {
  background-color: #563d7c !important;
}

/* Modal Customization */
.custom-modal .custom-modal-content {
    border-radius: 14px !important;
    border: 1px solid #411537fa !important;
    background: linear-gradient(0deg, #140d15 0%, #2a0b27 35%) !important;
}
.col-md-6.pdng-rmve {
    padding: 0px 0px !important;
}
.col-md-12.pdng-rmve {
    padding: 0px 0px !important;
}
.col-md-6.pdng-rmve, .mrgnz-btm-frm
 {
    padding: 0px 0px !important;
    margin-bottom: 0px !important;
}
.frm-btn-10 {
    padding: 7px 20px;
    font-size: 14px;
}
select.form-select.frm-input-wdth {
    border-radius: 6px !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    height: 47px !important;
    margin-bottom: 10px;
    padding: 2px 10px;
    width: 100%;
}
.custom-modal-header {
    padding: 0px;
    border: 0;
}

.custom-modal-body {
  padding: 0px;
}

.custom-modal-footer {
  border-top: 1px solid #eee;
  padding: 15px;
}

@media (min-width: 320px) and (max-width: 525px) {
    .col-md-6.pdng-rmve-rght {
        padding: 0px;
        margin-bottom: 8px;
    }
    .col-md-6.pdng-rmve-lft {
        padding: 0px;
    }
    select.form-select.frm-input-wdth{
        margin-bottom: 6px !important;
    }
}
</style>

<script>
     $('#uniqueModal').modal('hide'); 
</script>