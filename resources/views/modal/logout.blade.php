<div class="modal fade" id="logout_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Logout</h5>
                <button type="button" class="close" style="border-color:transparent;background:transparent;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container-fluid">
                <span>Apakah anda ingin logout?</span>
            </div>
            <div class="modal-footer justify-content-between">
                <button class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                
            </div>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>