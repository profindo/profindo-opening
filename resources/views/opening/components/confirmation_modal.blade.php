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
                <form id="email_verification" method="POST" action="{{ route('verification.verify') }}">
                    @csrf
                    <div class="form-group">
                        <label for="otp">Token verifikasi telah dikirim via e-mail</label>
                        <input class="form-control" id="otp_token" type="text" name="otp_token" placeholder>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="email_verification" class="btn btn-primary">Submit</button>
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