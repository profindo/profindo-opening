<div class="modal fade" id="confirmationModal" style="z-index: 10000 !important;" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="confirmationModalTitle">Konfirmasi OTP</h5>
                <button type="button" class="close" style="border-color:transparent;background:transparent;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="otp">Link verifikasi telah dikirim via e-mail</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function sendOTP(){
        $('#confirmationModal').modal('toggle')
        $('#confirmationModal').modal({
            backdrop: 'static',
        })
    }
</script>