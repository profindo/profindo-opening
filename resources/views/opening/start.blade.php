@extends('home')

@section('content')
<div class="container-fluid d-flex flex-column justify-content-center p-lg-5">
    <div class="d-flex flex-column">
        <img class="m-auto col-sm-2" id="openingLogo" src="{{ asset('img/logo.png') }}">
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
                                        <input class="form-check-input" type="radio" name="tipeRDN" id="tipeRDN1" value="1" checked>
                                        <label class="form-check-label card-text" for="tipeRDN1">
                                            Bank BCA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipeRDN" id="tipeRDN2" value="2">
                                        <label class="form-check-label card-text" for="tipeRDN2">
                                            Bank CIMB Niaga
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipeRDN" id="tipeRDN3" value="3">
                                        <label class="form-check-label card-text" for="tipeRDN3">
                                            Bank Sinarmas
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cust_bankname">Nama pemilik rekening (Pribadi)</label>
                                    <input class="form-control form-control-sm" id="cust_bankname" type="text" name="cust_bankname" placeholder="e.g John Doe" autocomplete="on" value={{ (old('cust_bankname')) }}>
                                    <span class="text-danger" id="cust_bankname_error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cust_bankno">Nomor rekening (Pribadi)</label>
                                    <input class="form-control form-control-sm" id="cust_bankno" type="text" name="cust_bankno" placeholder="e.g 05123456789" autocomplete="on">
                                    <span class="text-danger" id="cust_bankno_error"></span>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="cust_name">Nama sesuai identitas KTP</label>
                                    <input class="form-control form-control-sm" id="cust_name" name="cust_name" type="text" placeholder="e.g John Doe" autocomplete="on">
                                    <span class="text-danger" id="cust_name_error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cust_email">Email</label>
                                    <input class="form-control form-control-sm" id="cust_email" type="text" name="cust_email" placeholder="e.g john@example.com" autocomplete="on">
                                    <span class="text-danger" id="cust_email_error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cust_phone">No Telepon</label>
                                    <input class="form-control form-control-sm" id="cust_phone" type="text" name="cust_phone" placeholder="e.g 081234567890" autocomplete="on">
                                    <span class="text-danger" id="cust_phone_error"></span>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="cust_referral">Sales/Referral</label>
                                    <input class="form-control form-control-sm" id="cust_referral" type="text" name="cust_referral">
                                </div>
                                <div class="form-group">
                                    <label for="cust_password">Password</label>
                                    <input class="form-control form-control-sm" id="cust_password" type="password" name="cust_password">
                                </div>
                                <div class="form-group">
                                    <label for="cust_passconfirm">Konfirmasi password</label>
                                    <input class="form-control form-control-sm" id="cust_passconfirm" type="password" name="cust_passconfirm">
                                    <span class="text-danger" id="cust_password_error"></span>
                                    <span class="text-danger" id="cust_passconfirm_error"></span>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="form-check-label" for="checkTerms">Saya dengan ini memberikan
                                        persetujuan kepada PT PROFINDO SEKURITAS INDONESIA untuk meminta konfirmasi atas
                                        data rekening saya tersebut diatas kepada PT Bank Central Asia Tbk.</label>
                                    <input class="form-check-input" id="checkTerms" type="checkbox" name="checkTerms" value="" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @yield('form')
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center">
                <button class="btn btn-primary col-lg-5 m-1" id="prevBtn" href="#carouselForm" data-bs-slide="prev"><span>Kembali</span></button>
                <button class="btn btn-primary col-lg-5 m-1" id="nextBtn" href="#carouselForm" data-bs-slide="next"><span>Selanjutnya</span></button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div id="carouselFormIndicators" class="container" data-bs-ride="carousel">
    <ul id="carousel_indicators" class="d-flex flex-row list-unstyled text-center">
        <li id="carousel_indicator_1" class="container col-3" data-bs-target="#carouselForm" data-bs-slide-to="0">
            <div class="w-100 item active">Persiapan</div>
        </li>
        <li id="carousel_indicator_2" class="container col-3" data-bs-target="#carouselForm" data-bs-slide-to="1">
            <div class="w-100 item">FAQ</div>
        </li>
        <li id="carousel_indicator_3" class="container col-3" data-bs-target="#carouselForm" data-bs-slide-to="2">
            <div class="w-100 item">Register</div>
        </li>
    </ul>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var carousel = $('#carouselForm');

        carousel.on('slide.bs.carousel', function (e) {
            var slideTo = e.to;
            nextButton = $('#nextBtn');
            if(slideTo >= 2) {
                nextButton.attr('type', 'submit');
                nextButton.attr('form', 'openingAccountForm');
                nextButton.removeAttr('href');
            }
            else{
                nextButton.removeAttr('type');
                nextButton.removeAttr('form');
                nextButton.attr('href', '#carouselForm');
            }
            $('#carousel_indicators li div').removeClass('active');
            $('#carousel_indicators li div')[slideTo].classList.add('active');
        });

        $("#openingAccountForm").submit(function (event) {
            event.preventDefault();
            document.getElementById('nextBtn').innerHTML = "<i class='fas fa-circle-notch fa-spin'></i>"
            var form = $('#openingAccountForm');
            var form_data = form.serializeArray()
                        .reduce(function (prev, data) {
                            prev[data.name] = data.value;
                            return prev;
                        });
            var rdn_service;
            switch (form.find('input[name="tipeRDN"]').val()) {
                case "1":
                    rdn_service = '/bca'
                    break;

                case "2":
                    rdn_service = '/cimb'
                    break;

                case "3":
                    rdb_service = '/sinarmas'
                    break;            
            }
            $.ajax({
                type: 'POST',
                url: rdn_service.concat('/validate'),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json',
                },
                dataType: 'application/json',
                data: JSON.stringify(form_data),
                statusCode: {
                    200: function(response) {
                        console.log(response);
                        $.each(form_data, function(key, val) {
                            $('#' + key + '_error').attr('hidden', 'true');
                        });
                        sendOTP();
                    },
                    422: function(response) {
                        console.log("ERROR : ", response)
                        var error = JSON.parse(response.responseText)['errors'];
                        $('#openingLogo')[0].scrollIntoView();
                        $.each(form_data, function(key, val) {
                            if(!(error[key])) {
                                $('#' + key + '_error').attr('hidden', 'true');
                            }
                            else {
                                $('#' + key + '_error').text(error[key][0]);
                                $('#' + key + '_error').removeAttr('hidden');
                            }
                        });
                    }
                },
                complete: function(response) {
                    document.getElementById('nextBtn').innerHTML = "<span>Selanjutnya</span>"
                }
            });
        });
    });
</script>
@endsection
@section('modals')
@include('opening.components.confirmation_modal')
@endsection