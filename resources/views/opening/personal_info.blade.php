@extends('opening.start')
@section('form')
<div class="carousel-item">
    <div class="card">
        <span class="card-header card-title">Data Pribadi</span>
        <div class="container">
            <ul class="card-body card-columns list-group-flush" style="column-count:2;">
                <li class="list-group-item">Pertanyaan 10</li>
                <li class="list-group-item"> </li>
                </ol>
        </div>
    </div>
</div>
<div class="carousel-item">
    <div class="card">
        <span class="card-header card-title">Data 2</span>
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
@endsection