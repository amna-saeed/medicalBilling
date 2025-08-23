
<!-- Modal -->
<div class="d-md-none">
<div class="modal fade custom-modal" id="uniqueModal" tabindex="-1" role="dialog" aria-labelledby="uniqueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content custom-modal-content">
        
            <div class="modal-header custom-modal-header">
                <button type="button" class="close 120-cls" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-modal-body">
                @include('components.bnrForm')
            </div>
        </div>
    </div>
</div>
</div>

<style>
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
.transparent-form {
    background-color: rgb(16 9 6 / 35%) !important;
    border-radius: 0px !important;
    margin-right: 0px !important;
    padding: 30px 23px !important;
    margin: 0px !important;
    border: 0px solid #bebebe96 !important;
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
.col-md-6.p-rmve {
    padding: 0px 0px !important;
}
.col-md-12.p-rmve {
    padding: 0px 0px !important;
}
.col-md-6.p-rmve, .mb-3
 {
    padding: 0px 0px !important;
    margin-bottom: 0px !important;
}
.frm-btn-10 {
    padding: 7px 20px;
    font-size: 14px;
}
select.form-select.custm-input-bnr {
    border-radius: 6px !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    height: 47px !important;
    margin-bottom: 10px;
    padding: 2px 10px;
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
   
}
</style>

<script>
     $('#uniqueModal').modal('hide'); 
</script>