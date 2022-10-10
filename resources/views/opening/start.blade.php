<div class="container-fluid d-flex flex-column justify-content-center p-lg-5">
    <div class="d-flex flex-column">
        <img class="m-auto col-sm-2" src="{{ asset('img/logo.png') }}">
        <h3 class="text-center">Profindo Opening Account</h3>
    </div>
    <div class="container col-sm-8">

        <div id="carouselForm" class="carousel slide mt-2 mb-4" data-bs-ride="carousel" data-bs-interval="false" data-bs-wrap="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <span class="card-header card-title">Apa yang perlu kamu siapkan?</span>
                        <div class="container">
                            <ol class="card-body card-text">
                                <li>e-KTP</li>
                                <li>NPWP (Wajib jika telah memiliki penghasilan)</li>
                                <li>Memiliki rekening personal dari salah satu:
                                    <ol>
                                        <li>Bank BCA</li>
                                        <li>Bank Sinarmas</li>
                                        <li>Bank CIMB Niaga</li>
                                    </ol>
                                    <span>( Catatan : TEST)</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <span class="card-header card-title">Frequently Asked Questions</span>
                        <div class="container">
                            <ul class="card-body card-columns list-group-flush" style="column-count:2;">
                                <li class="list-group-item">Pertanyaan 1</li>
                                <li class="list-group-item">Pertanyaan 2</li>
                                <li class="list-group-item">Pertanyaan 3</li>
                                <li class="list-group-item">Pertanyaan 4</li>
                                <li class="list-group-item">Pertanyaan 5</li>
                                <li class="list-group-item">Pertanyaan 6</li>
                                <li class="list-group-item">Pertanyaan 7</li>
                                <li class="list-group-item">Pertanyaan 8</li>
                                <li class="list-group-item">Pertanyaan 9</li>
                                <li class="list-group-item">Pertanyaan 10</li>
                                <li class="list-group-item"> </li>
                                </ol>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <span class="card-header card-title">Pendaftaran</span>
                        <div class="container">
                            <form id="openingAccountForm">
                                <div class="form-group">
                                    <span>Bank reksa dana (RDN)</span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipeRDN" id="tipeRDN1"
                                            value="BBCA" checked>
                                        <label class="form-check-label card-text" for="tipeRDN1">
                                            Bank BCA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipeRDN" id="tipeRDN2"
                                            value="CIMB">
                                        <label class="form-check-label card-text" for="tipeRDN2">
                                            Bank CIMB Niaga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipeRDN" id="tipeRDN3"
                                            value="BSIM">
                                        <label class="form-check-label card-text" for="tipeRDN3">
                                            Bank Sinarmas
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="custBankName">Nama pemilik rekening (Pribadi)</label>
                                    <input class="form-control form-control-sm" id="custBankName" type="text"
                                        placeholder="e.g John Doe">
                                </div>
                                <div class="form-group">
                                    <label for="custBankNo">Nomor rekening (Pribadi)</label>
                                    <input class="form-control form-control-sm" id="custBankNo" type="text"
                                        placeholder="e.g 05123456789">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="custName">Nama sesuai identitas KTP</label>
                                    <input class="form-control form-control-sm" id="custName" type="text"
                                        placeholder="e.g John Doe">
                                </div>
                                <div class="form-group">
                                    <label for="custEmail">Email</label>
                                    <input class="form-control form-control-sm" id="custEmail" type="text"
                                        placeholder="e.g john@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="custEmail">No Telepon</label>
                                    <input class="form-control form-control-sm" id="custPhone" type="text"
                                        placeholder="e.g 081234567890">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="custRef">Sales/Referral</label>
                                    <input class="form-control form-control-sm" id="custRef" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="custPassword">Password</label>
                                    <input class="form-control form-control-sm" id="custPassword" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="custPasswordConfirm">Konfirmasi password</label>
                                    <input class="form-control form-control-sm" id="custPasswordConfirm" type="text">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="form-check-label" for="checkTerms">Saya dengan ini memberikan
                                        persetujuan kepada PT PROFINDO SEKURITAS INDONESIA untuk meminta konfirmasi atas
                                        data rekening saya tersebut diatas kepada PT Bank Central Asia Tbk.</label>
                                    <input class="form-check-input" type="checkbox" value="" id="checkTerms">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center">
                <button class="btn btn-primary col-lg-5 m-1" id="prevBtn" href="#carouselForm" data-bs-slide="prev">Kembali</button>
                <button class="btn btn-primary col-lg-5 m-1" id="nextBtn" href="#carouselForm" data-bs-slide="next">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>

<script>
    function registerUser() {

        var form = $('#openingAccountForm');
        var rdn_service;
        switch (form[0].elements["tipeRDN"].value) {
            case "BBCA":
                rdn_service = '/bca'
                break;

            case "CIMB":
                rdn_service = '/cimb'
                break;

            case "BSIM":
                rdb_service = '/sinarmas'
                break;
        
            default:
                break;
        }
        $.ajax({
            type: 'POST',
            url: rdn_service.concat('/validate'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 'application/json',
            },
            data: form.serialize(),
            success : function(response){
                console.log(response)
            },
            error : function(response){
                console.log(response)
            }
        });
    }

    $(document).ready(function() {
        $('#carouselForm').on('slid.bs.carousel', function () {
            var currentSlide = $('div.active').index();
            nextButton = $('#nextBtn');
            if(currentSlide >= 2) {
                nextButton.attr('onclick', 'registerUser()');
            }
            else{
                nextButton.removeAttr('onclick');
            }
        });
    });
</script>
@include('opening.components.confirmation_modal')
