@extends('home')

@section('content')
<div class="container-fluid d-flex flex-column justify-content-center p-lg-5">
    <div class="container col-sm-8">
        <div id="carouselForm" class="carousel slide mt-2 mb-4" data-bs-ride="carousel" data-bs-interval="false" data-bs-wrap="false">
            @section('header')
            <div class="w-75 m-auto" data-bs-ride="carousel">
                <div class="col progress mb-2">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                        
                    </div>
                </div>
            </div>
            @endsection
            <div class="carousel-inner">
                <form id="personalInfoForm">
                <div class="carousel-item active">
                    <h3 class="text-center">Informasi Nasabah Perorangan</h3>
                    <div class="container-fluid">
                        <div class="form-group form-floating">
                            <input class="form-control form-control-sm" id="cust_email" type="text" name="cust_email" value="{{ Auth::user()->email }}" placeholder="email@test.com">
                            <label for="cust_email">Email</label>
                            <span class="text-danger" id="cust_email_error"></span>
                        </div>
                        <div class="form-floating mb-2">
                            <input class="form-control form-control-sm" id="cust_phone" type="text" name="cust_phone" value="{{ Auth::user()->phone }}" placeholder="081234567890">
                            <label class="form-control-label" for="cust_phone">No Telepon</label>
                            <span class="text-danger" id="cust_phone_error"></span>
                        </div>
                        <div class="d-flex flex-lg-row flex-column">
                            <div class="col form-group form-floating">
                                <input class="form-control form-control-sm" id="cust_name" name="cust_name" type="text" value="{{ Auth::user()->name }}" placeholder="John Doe">
                                <label for="cust_name">Nama sesuai identitas KTP</label>
                                <span class="text-danger" id="cust_name_error"></span>
                            </div>
                            <div class="col-lg-3 col form-group mx-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cust_gender" id="cust_gender1" value="M" checked>
                                    <label class="form-check-label card-text" for="cust_gender1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cust_gender" id="cust_gender2" value="2">
                                    <label class="form-check-label card-text" for="cust_gender2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-lg-row flex-column">
                            <div class="col form-group form-floating me-lg-1">
                                <select class="form-control" id=cust_nationality name="cust_nationality">
                                    <option value="1">Indonesia</option>
                                    <option value="2">Warga Negara Asing</option>
                                </select>
                                <label for="cust_nationality">Status Warga Negara</label>
                            </div>
                            <div class="col form-group form-floating ms-lg-1">
                                <select class="form-control" id=cust_relationship_status name="cust_relationship_status">
                                    <option value="1">Belum Menikah</option>
                                    <option value="2">Sudah Menikah</option>
                                    <option value="3">Duda</option>
                                    <option value="4">Janda</option>
                                </select>
                                <label for="cust_relationship_status">Status Warga Negara</label>
                            </div>
                        </div>
                        <div id="cust_birth" class="d-flex flex-lg-row flex-column form-group">
                            <div class="col form-floating">
                                <select class="form-control" id=cust_birthplace>
                                    @foreach(App\Models\City::all()->sortBy('city_name') as $city)
                                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                                <label for="cust_birthplace">Tempat / Tanggal Lahir</label>
                                <span class="text-danger" id="cust_name_error"></span>
                            </div>
                            <div class="col form-group form-floating ms-lg-1">
                                <input class="form-control datepicker" id="cust_birthdate" type="date" name="cust_birthdate">
                            </div>
                        </div>
                        <div class="d-flex flex-lg-row flex-column">
                            <div class="col form-floating me-lg-1">
                                <input class="form-control form-control-sm" id="cust_nik" type="text" name="cust_nik" value="{{ Auth::user()->nik }}" placeholder="NIK">
                                <label for="cust_nik">NIK</label>
                                <div class="d-flex flex-row form-group mt-1 align-items-center">
                                    <input class="form-control col" id="cust_nik_expire" type="date" name="cust_nik_expire">
                                    <div class="col form-group ms-2 form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="cust_nik_no_expire" name="cust_nik_no_expire">
                                        <label class="form-check-label" for="cust_nik_no_expire">Seumur Hidup</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-column align-content-center form-floating ms-lg-1">
                                <input class="form-control form-control-sm" id="cust_npwp" type="text" name="cust_npwp" value="{{ Auth::user()->npwp }}" placeholder="NPWP">
                                <label for="cust_npwp">NPWP</label>
                                <div class="col form-group ms-2 form-check form-check-inline mt-1" style="padding: 10px 16px;">
                                    <input class="form-check-input" type="checkbox" id="cust_no_npwp" name="cust_no_npwp">
                                    <label class="form-check-label" for="cust_no_npwp">Tidak memiliki NPWP</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3 class="text-center">Alamat Nasabah</h3>
                    <div class="container-fluid">
                        @include('components.address-picker', ['name' => 'sesuai KTP', 'field_name' => "cust_address"])
                        <div class="col form-group">
                            <label for="cust_address_home_status">Status rumah tinggal</label>
                            <select class="form-control select-others" id="cust_address_home_status" name="cust_address_home_status">
                                <option value="1">Milik Keluarga</option>
                                <option value="2">Milik Sendiri</option>
                                <option value="3">Sewa/Kontrak</option>
                                <option value="4">Lainnya</option>
                            </select>
                            <input id="cust_address_home_status_other" class="form-control" name="cust_reference_other" type="text" placeholder="Lainnya">
                        </div>
                        <div class="form-group">
                            <input id="home_ktp_address_same" class="form-check-input" type="checkbox">
                            <label  class="form-check-label" for="home_ktp_address_same">Alamat rumah sama dengan KTP</label>
                        </div>
                        @include('components.address-picker', ['name' => 'Rumah', 'field_name' => "cust_home_address"])
                        <ul id="cust_other_address" class="list-unstyled">
                        </ul>
                        <div id="cust_other_address_buttons" class="form-group">
                            <a class="btn btn-primary p-3" onclick="addAddress()"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-danger p-3" onclick="removeAddress()"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3 class="text-center">Data Keluarga dan Ahli Waris Nasabah</h3>
                    <div class="d-flex flex-column container-fluid">
                        <div id="cust_family" class="col form-group">
                            <label for="cust_family">Keluarga Nasabah</label>
                            <div class="form-floating">
                                <input id="cust_mother_name" class="form-control" name="cust_mother_name" type="text" value="" placeholder="e.g Maria Susanti">
                                <label for="cust_mother_name">Nama Gadis Ibu Kandung</label>
                            </div>
                        </div>
                        <div id="cust_inheritor" class="col d-flex flex-column form-group">
                            <label for="cust_inheritor">Ahli waris</label>
                            <div class="form-floating">
                                <input id="cust_inheritor_name" class="col form-control mb-1" type="text" name="cust_inheritor_name" value="" placeholder="Nama ">
                                <label for="cust_inheritor_name">Nama</label>
                            </div>
                            <div class="col d-flex flex-row">
                                <div class="col form-floating me-1">
                                    <input id="cust_inheritor_phone" class="form-control" type="text" name="cust_inheritor_phone" value="" placeholder="No. Telepon">
                                    <label for="cust_inheritor_phone">No. Telepon</label>
                                </div>
                                <div class="col form-floating ms-1">
                                    <select class="form-control" id="cust_inheritor_relationship" class="form-control" name="cust_inheritor_relationship">
                                        <option value="1">Keluarga</option>
                                        <option value="2">Pasangan</option>
                                        <option value="3">Sepupu</option>
                                    </select>
                                    <label for="cust_inheritor_relationship">Status Hubungan</label>
                                </div>
                            </div>
                        </div>
                        <div id="cust_inheritor_address" class="form-group row">
                            <label for="cust_inheritor_address">Alamat Rumah</label>
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-lg-row flex-column">
                                    <div class="col-lg-6 col me-lg-1 form-floating">
                                        <input class="form-control" id="cust_inheritor_address_road" type="text" name="cust_inheritor_address_road[]" value="{{ Auth::user()->address_ktp_road }}" placeholder="Jl. HR Rasuna Said">
                                        <label for="cust_inheritor_address_road">Jalan</label>
                                    </div>
                                    <div class="col d-flex flex-row form-group ms-lg-1 mt-lg-0 mt-1">
                                        <div class="form-floating">
                                            <input class="col form-control me-1" id="cust_inheritor_address_unit" type="text" name="cust_inheritor_address_unit[]" value="{{ Auth::user()->address_ktp_unit }}" placeholder="RT/RW">
                                            <label for="cust_inheritor_address_unit">RT/RW</label>
                                        </div>
                                        <div class='form-floating'>
                                            <input class="col form-control ms-1" id="cust_inheritor_address_postal" type="text" name="cust_inheritor_address_postal[]" value="{{ Auth::user()->address_ktp_unit }}" placeholder="Kode Pos">
                                            <label for="cust_inheritor_address_postal">Kode Pos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row form-floating">
                                    <div class="form-floating">
                                        <input class="col form-control me-2 dropdown-selector" list="cust_inheritor_address_prov" name="cust_inheritor_address_prov" placeholder="Provinsi">
                                        <label for="cust_inheritor_address_prov">Provinsi</label>
                                        <datalist id="cust_inheritor_address_prov" data-route="{{ route('api.province.list', '') }}">
                                        @foreach(App\Models\Province::all()->sortBy('prov_name') as $prov)
                                            <option value="{{ $prov->prov_name }}" data-id="{{ $prov->prov_id }}">
                                        @endforeach
                                        </datalist>
                                    </div>
                                    <div class="form-floating">
                                        <input class="col form-control dropdown-selector" list="cust_inheritor_address_city" name="cust_inheritor_address_city" placeholder="Kota">
                                        <label for="cust_inheritor_address_city">Kota</label>
                                        <datalist id="cust_inheritor_address_city" data-route="{{ route('api.city.list', '') }}" data-identifier="city">
                                        </datalist>
                                    </div>
                                    <div class="form-floating">
                                        <input class="col form-control dropdown-selector ms-2" list="cust_inheritor_address_district" name="cust_inheritor_address_district" placeholder="Kecamatan">
                                        <label for="cust_inheritor_address_district">Kecamatan</label>
                                        <datalist id="cust_inheritor_address_district" data-route="{{ route('api.district.list', '') }}" data-identifier="dis">
                                        </datalist>
                                    </div>
                                    <div class="form-floating">
                                        <input class="col form-control dropdown-selector ms-2" list="cust_inheritor_address_subdistrict" name="cust_inheritor_address_subdistrict" placeholder="Kelurahan">
                                        <label for="cust_inheritor_address_subdistrict">Kelurahan</label>
                                        <datalist id="cust_inheritor_address_subdistrict" data-identifier="subdis">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3 class="text-center">Data Pekerjaan atau Perusahaan</h3>
                    <div class="d-flex flex-column container-fluid">
                        <div id="cust_occupation" class="col d-flex flex-column form-group">
                            <label for="cust_occupation">Pekerjaan Nasabah</label>
                            <div class="col d-flex flex-row">
                                <div class="col me-1 form-floating">
                                    <select id="cust_occupation_profession" class="select-others col form-control me-1" name="cust_occupation_profession">
                                        <option value="1">Karyawan Swasta</option>
                                        <option value="2">Wiraswasta</option>
                                        <option value="3">Pegawai Negeri</option>
                                        <option value="4">TNI/Polri</option>
                                        <option value="5">Pelajar</option>
                                        <option value="6">Ibu Rumah Tangga</option>
                                        <option value="7">Guru</option>
                                        <option value="8">Pensiun</option>
                                        <option value="9">Lainnya</option>
                                    </select>
                                    <input id="cust_occupation_profession_other" class="form-control" name="cust_occupation_profession_other" type="text" placeholder="Lainnya">
                                    <label for="cust_occupation_profession_other">Profesi</label>
                                </div>
                                <div class="col ms-1 form-floating">
                                    <select id="cust_occupation_position" class="select-others col form-control ms-1" name="cust_occupation_position">
                                        <option value="1">Pemilik (Owner)</option>
                                        <option value="2">Manajer</option>
                                        <option value="3">Komisaris</option>
                                        <option value="4">Pengawas (Supervisor)</option>
                                        <option value="5">Direktur (Director)</option>
                                        <option value="6">Pegawai (staff)</option>
                                        <option value="7">Ibu Rumah Tangga (Housewife)</option>
                                        <option value="8">Lainnya</option>
                                    </select>
                                    <input id="cust_occupation_position_other" class="form-control" name="cust_occupation_position_other" type="text" placeholder="Lainnya">
                                    <label for="cust_occupation_position">Posisi</label>
                                </div>
                            </div>
                            <div class="col d-flex flex-row">
                                <div class="col me-1 form-floating">
                                    <select id="cust_occupation_income_range" class="form-control" name="cust_occupation_income_range">
                                        <option value="1">< Rp.10 juta</option>
                                        <option value="2">Rp. 10 juta s/d Rp. 50 juta</option>
                                        <option value="3">Rp. 50 juta s/d Rp. 100 juta</option>
                                        <option value="4">Rp. 100 juta s/d Rp. 500 juta</option>
                                        <option value="5">Rp. 500 juta s/d Rp. 1 Milyar</option>
                                        <option value="6">> Rp 1 Milyar</option>
                                    </select>
                                    <label for="cust_occupation_income_range">Penghasilan per Tahun</label>
                                </div>
                                <div class="col ms-1 form-floating">
                                    <select id="cust_occupation_income_origin" class="select-others form-control" name="cust_occupation_income_origin">
                                        <option value="1">Penghasilan/Gaji</option>
                                        <option value="2">Hasil Usaha</option>
                                        <option value="3">Bunga simpanan</option>
                                        <option value="4">Warisan</option>
                                        <option value="5">Dari orang tua/anak</option>
                                        <option value="6">Hibah</option>
                                        <option value="7">Dari suami/istri</option>
                                        <option value="8">Undian</option>
                                        <option value="9">Hasil Investasi</option>
                                        <option value="10">Lainnya</option>
                                    </select>
                                    <input id="cust_occupation_income_origin_other" class="form-control" name="cust_reference_other" type="text" placeholder="Lainnya">
                                    <label for="cust_occupation_income_origin">Sumber Penghasilan</label>
                                </div>
                            </div>
                        </div>
                        <div id="cust_company" class="col d-flex flex-column form-group">
                            <label for="cust_company">Perusahaan Nasabah</label>
                            <div class="col d-flex flex-lg-row flex-column">
                                <div class="col me-lg-1 form-floating">
                                    <input id="cust_occupation_name" class="form-control" name="cust_occupation_name" type="text" value="" placeholder="Nama perusahaan">
                                    <label for="cust_occupation_name">Nama Perusahaan</label>
                                </div>
                                <div class="col ms-lg-1 form-floating">
                                    <input id="cust_occupation_industry" class="form-control" name="cust_occupation_industry" type="text" value="" placeholder="Bidang perusahaan">
                                    <label for="cust_occupation_industry">Bidang Usaha</label>
                                </div>
                            </div>
                            <div class="col d-flex flex-row">
                                <div class="col me-1 form-floating">
                                    <input id="cust_occupation_phone" class="form-control" name="cust_occupation_phone" type="text" value="" placeholder="0812484219824">
                                    <label for="cust_occupation_phone">No. Telepon Kantor</label>
                                </div>
                                <div class="col ms-1 form-floating">
                                    <input id="cust_occupation_fax" class="form-control" name="cust_occupation_fax" type="text" value="" placeholder="081284219824">
                                    <label for="cust_occupation_fax">No. Fax Kantor</label>
                                </div>
                            </div>
                        </div>
                        @include('components.address-picker', ['name' => 'Perusahaan', 'field_name' => "cust_company_address"])
                    </div>
                </div>
                <div class="carousel-item">
                    <h3 class="text-center">Informasi Tambahan</h3>
                    <div class="d-flex flex-column container-fluid">
                        <div id="cust_media" class="col d-flex flex-column form-group">
                            <label for="cust_media">Upload Media</label>
                            <div class="col d-flex flex-lg-row flex-column">
                                <div class="col form-group">
                                    <div class="d-flex justify-content-center mx-5 mb-2">
                                        <img id="cust_media_ktp_preview" class="col img-fluid me-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg">
                                    </div>
                                    <input id="cust_media_ktp" class="form-control" name="cust_media_ktp" type="file" accept="image/*">
                                    <label for="cust_media_ktp">e-KTP
                                </div>
                                <div class="col form-group">
                                    <div class="d-flex justify-content-center mx-5 mb-2">
                                        <img id="cust_media_npwp_preview" class="col img-fluid me-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg">
                                    </div>
                                    <input id="cust_media_npwp" class="form-control" name="cust_media_npwp" type="file" accept="image/*">
                                    <label for="cust_media_npwp">NPWP
                                </div>
                            </div>
                            <div class="col d-flex flex-lg-row flex-column">
                                <div class="col form-group">
                                    <div class="d-flex justify-content-center mx-5 mb-2">
                                        <img id="cust_media_signature_preview" class="col img-fluid me-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg">
                                    </div>
                                    <input id="cust_media_signature" class="form-control" name="cust_media_signature" type="file" accept="image/*">
                                    <label for="cust_media_signature">Tanda Tangan
                                </div>
                                <div class="col form-group">
                                    <div class="d-flex justify-content-center mx-5 mb-2">
                                        <img id="cust_media_selfie_preview" class="col img-fluid me-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg">
                                    </div>
                                    <input id="cust_media_selfie" class="form-control" name="cust_media_selfie" type="file" accept="image/*">
                                    <label for="cust_media_selfie">Selfie memegang e-KTP
                                </div>
                            </div>
                        </div>
                        <div class="col form-group form-floating">
                            <input class="form-control form-control-sm" id="cust_referral" type="text" name="cust_referral" value="{{ Auth::user()->referral }}" placeholder="Sales">
                            <label for="cust_referral">Sales/Referral</label>
                        </div>
                        <div class="col form-group">
                            <label for="cust_reference">Darimana anda mengenal PT Profindo Sekuritas Indonesia?</label>
                            <select id="cust_reference" class="select-others form-control" name="cust_reference">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">Lainnya</option>
                            </select>
                            <input id="cust_reference_other" class="form-control" name="cust_reference_other" type="text" placeholder="Lainnya">
                        </div>
                        <div class="col form-group">
                            <label for="cust_reason">Tujuan Investasi</label>
                            <select id="cust_reason" class="select-others form-control" name="cust_reason">
                                <option value="1">Investasi</option>
                                <option value="2">Spekulasi</option>
                                <option value="3">Pendapatan</option>
                                <option value="4">Pertumbuhan cepat</option>
                                <option value="5">Lainnya...</option>
                            </select>
                            <input id="cust_reason_other" class="form-control" name="cust_reason_other" type="text" placeholder="Lainnya">
                        </div>
                        <div class="col form-group">
                            <label class="form-control-label" for="cust_acquintance">
                                Apakah Saudara atau anggota keluarga Saudara bekerja 
                                pada Perusahaan Eek, Bursa Efek, perusahaan 
                                yang diatur oleh Bursa Efek / Otoritas Jasa Keuangan (OJK),
                                Bank, Asuransi atau Lembaga Keuangan sejenis?
                            </label>
                            <div id="cust_acquintance" class="d-flex flex-column">
                                <div class="form-check">
                                    <input id="cust_acquintance1" class="form-check-input" name="cust_acquintance" type="radio" value="0" checked>
                                    <label for="cust_acquintance1" class="form-check-label">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input id="cust_acquintance2" class="form-check-input" name="cust_acquintance" type="radio" value="1">
                                    <label for="cust_acquintance2" class="form-check-label">Ya</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col form-group">
                            <label for="cust_other">
                                Apakah Saudara sudah memiliki Rekening Efek pada Perusahaan Efek Lainnya?
                            </label>
                            <div id="cust_other" class="d-flex flex-column">
                                <div class="form-check">
                                    <input id="cust_other1" class="form-check-input" name="cust_other" type="radio" value="0" checked>
                                    <label for="cust_other1" class="form-check-label">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input id="cust_other2" class="form-check-input" name="cust_other" type="radio" value="1">
                                    <label for="cust_other2" class="form-check-label">Ya</label>
                                </div>
                                <div class="form-check">
                                    <input id="cust_other_text" class="form-control" name="cust_other_text" placeholder="PT Profindo Sekuritas Indonesia">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3 class="text-center">Data Rekening Pribadi</h3>
                    <div class="d-flex flex-column container">
                        <div id="cust_bank" class="col d-flex flex-column form-group">
                            <label for="cust_bank">Rekening Nasabah</label>
                            <div class="col form-floating">
                                <input id="cust_bank_name" class="form-control" name="cust_bank_name" value="" placeholder="Nama sesuai Buku Tabungan">
                                <label for="cust_bank_name">Nama Pemilik Rekening</label>
                            </div>
                            <div class="col d-flex flex-row">
                                <div class="col form-floating">
                                    <input id="cust_bank_no" class="form-control" name="cust_bank_no" value="" placeholder="No Rekening">
                                    <label for="cust_bank_no">No Rekening</label>
                                </div>
                                <div class="col form-floating">
                                    <select id="cust_bank_code" class="form-control" name="cust_bank_code" value="" placeholder="Tipe Bank">
                                        <option value="1">BCA</option>
                                        <option value="2">CIMB Niaga</option>
                                        <option value="3">Sinarmas</option>
                                    </select>
                                    <label for="cust_bank_code">Tipe Bank</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center">
                <button class="btn btn-primary col-lg-5 m-1" id="prevBtn" href="#carouselForm" data-bs-slide="prev"><span>Kembali</span></button>
                <button class="btn btn-primary col-lg-5 m-1" id="nextBtn" type="submit"><span>Selanjutnya</span></button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="container-fluid">
    <ul id="carousel_indicators" class="d-flex flex-row list-unstyled text-center">
        <li class="container col" data-bs-target="#carouselForm" data-bs-slide-to="0">
            <div class="w-100 item active">Data Pribadi</div>
        </li>
        <li class="container col" data-bs-target="#carouselForm" data-bs-slide-to="1">
            <div class="w-100 item">Alamat Nasabah</div>
        </li>
        <li class="container col" data-bs-target="#carouselForm" data-bs-slide-to="2">
            <div class="w-100 item">Data Keluarga dan Ahli Waris</div>
        </li>
        <li class="container col" data-bs-target="#carouselForm" data-bs-slide-to="3">
            <div class="w-100 item">Data Pekerjaan atau Perusahaan</div>
        </li>
        <li class="container col" data-bs-target="#carouselForm" data-bs-slide-to="4">
            <div class="w-100 item">Informasi Tambahan</div>
        </li>
        <li class="container col" data-bs-target="#carouselForm" data-bs-slide-to="5">
            <div class="w-100 item">Data Rekening Pribadi</div>
        </li>
    </ul>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        dropdownSelector();
        othersSelectInput();

        var carousel = $('#carouselForm');
        var carousel_indicator = $('#carousel_indicators li div');
        carousel.on('slide.bs.carousel', function (e) {
            if((e.to === -1) && (e.from === -1)) return false;
            $(carousel_indicator[e.from]).removeClass('active')
            $(carousel_indicator[e.to]).addClass('active')
            var total_width = $('.progress').width()
            $('.progress-bar').css("width", ((e.to+1)/($('.carousel-item').length))*total_width)
        });

        $('#home_ktp_address_same').on('change', function (e) {
            if(!$(this).is(':checked')) {
                $('#cust_home_address').show();
                $('#cust_other_address').show();
                $('#cust_other_address_buttons').show();
            } else {
                $('#cust_home_address').hide();
                $('#cust_other_address').hide();
                $('#cust_other_address_buttons').hide();
            }
        })

        $("#personalInfoForm").submit(function (event) {
            event.preventDefault();
            document.getElementById('nextBtn').innerHTML = "<i class='fas fa-circle-notch fa-spin'></i>"
            var form = $('#personalInfoForm');
            var form_data = form.serializeArray()
                        .reduce(function (prev, data) {
                            prev[data.name] = data.value;
                            return prev;
                        });
            form_data['step'] = $('.carousel-item .active').index()
            $.each(form_data, function(key, val) {
                $('#' + key + '_error').attr('hidden', 'true');
            });
            $.ajax({
                type: 'POST',
                url: '/user/update',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json',
                },
                dataType: 'application/json',
                data: JSON.stringify(form_data),
                statusCode: {
                    200: function(response) {
                        carousel.carousel('next');
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

        $('#cust_media_ktp').on('change', function (event) {
            cropImage(this)
            
        });
    });

    function addAddress(event) {
        var other_address_list = $('#cust_other_address');
        if(other_address_list.children().length < 1) {
            other_address_list.append($('#cust_address_home').clone());
            dropdownSelector();
        }
    };

    function removeAddress(event) {
        $('#cust_other_address').children().last().remove();
    };

    function othersSelectInput(event) {
        $.each($('.select-others'), function (key, val) {
            var select = $(this);
            var others_option = $(this).children().last();
            var others_input  = $(this).next('input');

            others_input.hide();

            others_input.focusout(function (e) {
                if(others_input.val()) return false;
                select.show();
                others_input.hide();
            })

            $(this).on('change', function (e) {
                if($("option:selected", this).val() == others_option.val()) {
                    select.hide();
                    others_input.show();
                    others_input.focus();
                }
            })
        });
    }
</script>
@endsection

@section('modals')
@include('modal.image-cropper')
@endsection