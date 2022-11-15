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
                        <form id="openingAccountForm">
                            <div class="container d-flex flex-column">
                                <div id="cust_bank" class="col form-group d-flex flex-column">
                                    <label for="cust_bank">Bank Pribadi Nasabah</label>
                                    <div class="col form-floating">
                                        <select id="cust_bank_code" class="form-control" name="cust_bank_code" value="" placeholder="Tipe Bank" required>
                                            <option value="BBCA">BCA</option>
                                            <option value="CIMB">CIMB Niaga</option>
                                            <option value="BSIM">Sinarmas</option>
                                        </select>
                                        <label for="cust_bank_code">Tipe Bank</label>
                                    </div>
                                    <div class="col form-floating">
                                        <input class="form-control" id="cust_bank_name" type="text" name="cust_bank_name" placeholder="Nama" value="{{ (old('cust_bankname')) }}" required>
                                        <span class="text-danger" id="cust_bank_name_error"></span>
                                        <label for="cust_bank_name">Nama pemilik rekening (Pribadi)</label>
                                    </div>
                                    <div class="col form-floating">
                                        <input class="form-control" id="cust_bank_no" type="text" name="cust_bank_no" placeholder="No. Rekening" required>
                                        <span class="text-danger" id="cust_bank_no_error"></span>
                                        <label for="cust_bank_no">Nomor rekening (Pribadi)</label>
                                    </div>
                                </div>
                                <div id="cust_info" class="col form-group d-flex flex-column">
                                    <label for="cust_info">Informasi Pribadi Nasabah</label>
                                    <div class='col d-flex flex-lg-row flex-column'>
                                        <div class="col form-floating">
                                            <input class="form-control" id="cust_name" name="cust_name" type="text" placeholder="Nama" required>
                                            <span class="text-danger" id="cust_name_error"></span>
                                            <label for="cust_name">Nama sesuai identitas KTP</label>
                                        </div>
                                        <div class="col form-floating">
                                            <input class="form-control" id="cust_birth_date" type="date" name="cust_birth_date">
                                            <label for="cust_birth_date">Tanggal Lahir</label>
                                        </div>
                                    </div>
                                    <div class="col d-flex flex-lg-row flex-column">
                                        <div class="col form-floating">
                                            <input class="form-control" id="cust_email" type="text" name="cust_email" placeholder="E-Mail" required>
                                            <span class="text-danger" id="cust_email_error"></span>
                                            <label for="cust_email">Email</label>
                                        </div>
                                        <div class="col form-floating">
                                            <input class="form-control" id="cust_phone" type="text" name="cust_phone" placeholder="No. Telepon" required>
                                            <span class="text-danger" id="cust_phone_error"></span>
                                            <label for="cust_phone">No Telepon</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="cust_additional_info" class="col form-group d-flex flex-column">
                                    <label for="cust_additional_info">Info Tambahan</label>
                                    <div class="col form-floating">
                                        <input class="form-control" id="cust_referral" type="text" name="cust_referral" placeholder="Referral">
                                        <label for="cust_referral">Sales/Referral</label>
                                    </div>
                                    <div class="col form-floating">
                                        <input class="form-control" id="cust_password" type="password" name="cust_password" placeholder="Password" required>
                                        <label for="cust_password">Password</label>
                                    </div>
                                    <div class="col form-floating">
                                        <input class="form-control" id="cust_passconfirm" type="password" name="cust_passconfirm" placeholder="Password Confirmation" required>
                                        <label for="cust_passconfirm">Konfirmasi password</label>
                                        <span class="text-danger" id="cust_password_error"></span>
                                        <span class="text-danger" id="cust_passconfirm_error"></span>
                                    </div>
                                </div>
                                <div class="col form-group">
                                    <label class="form-check-label" for="checkTerms">Saya dengan ini memberikan
                                        persetujuan kepada PT PROFINDO SEKURITAS INDONESIA untuk meminta konfirmasi atas
                                        data rekening saya tersebut diatas kepada PT Bank Central Asia Tbk.</label>
                                    <input class="form-check-input" id="checkTerms" type="checkbox" name="checkTerms" value="" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
        <li id="carousel_indicator_1" class="container" data-bs-target="#carouselForm" data-bs-slide-to="0">
            <div class="w-100 item active">Persiapan</div>
        </li>
        <li id="carousel_indicator_2" class="container" data-bs-target="#carouselForm" data-bs-slide-to="1">
            <div class="w-100 item">FAQ</div>
        </li>
        <li id="carousel_indicator_3" class="container" data-bs-target="#carouselForm" data-bs-slide-to="2">
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
            var form_data = form.serializeArray().reduce(function(prev, data) {
                console.log(prev, data)
                prev[data.name] = data.value;
                return prev;
            }, {});
            $.each(form_data, function(key, val) {
                $('#' + key + '_error').attr('hidden', 'true');
            });
            $.ajax({
                type: 'POST',
                url: '/validate',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json',
                },
                dataType: 'application/json',
                data: JSON.stringify(form_data),
                statusCode: {
                    200: function(response) {
                        console.log("Logged in", response)
                        location.reload();                        
                    },
                    201: function(response) {
                        console.log("Created", response)
                        
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