<div class="modal fade" id="aggreements_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Terms and Conditions</h5>
                <button type="button" class="close" style="border-color:transparent;background:transparent;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="aggreements_carousel" class="modal-body carousel slide" data-bs-ride="carousel" data-bs-interval="false" data-bs-wrap="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        @include('surat.surat-pernyataan')
                    </div>
                    <div class="carousel-item">
                        @include('surat.ketentuan-tabungan')
                    </div>
                    <div class="carousel-item">
                        @include('surat.pernyataan-nasabah-rdn-bca')
                    </div>
                    <div class="carousel-item">
                        @include('surat.perjanjian-pembukaan-rekening')
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between" data-bs-ride="carousel">
                <ul class="d-flex flex-row list-unstyled btn-group text-center">
                    <li class="container" type="button" data-bs-target="#aggreements_carousel" data-bs-slide-to="0">
                        <div class="w-100 item active">Surat Pernyataan</div>
                    </li>
                    <li class="container" type="button" data-bs-target="#aggreements_carousel" data-bs-slide-to="1">
                        <div class="w-100 item">Ketentuan Tabungan</div>
                    </li>
                    <li class="container" type="button" data-bs-target="#aggreements_carousel" data-bs-slide-to="2">
                        <div class="w-100 item">Pernyataan Nasabah RDN BCA</div>
                    </li>
                    <li class="container" type="button" data-bs-target="#aggreements_carousel" data-bs-slide-to="3">
                        <div class="w-100 item">Perjanjian Pembukaan Rekening</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>