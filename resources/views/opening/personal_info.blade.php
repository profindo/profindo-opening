<h3 class="text-center">Informasi Nasabah Perorangan</h3>
<div class="container-fluid">
    <div class="form-group form-floating">
        <input class="form-control form-control-sm" id="cust_email" type="text" name="cust_email" value="{{ Auth::user()->email }}" placeholder="email@test.com">
        <label for="cust_email">Email</label>
        <span class="text-danger" id="cust_email_error"></span>
    </div>
    <div class="form-floating mb-2">
        <input class="form-control form-control-sm" id="cust_phone" type="text" name="cust_phone" value="{{ $investor->phone }}" placeholder="081234567890">
        <label class="form-control-label" for="cust_phone">No Telepon</label>
        <span class="text-danger" id="cust_phone_error"></span>
    </div>
    <div class="d-flex flex-lg-row flex-column">
        <div class="col form-group form-floating">
            <input class="form-control form-control-sm" id="cust_name" name="cust_name" type="text" value="{{ $investor->name }}" placeholder="John Doe">
            <label for="cust_name">Nama sesuai identitas KTP</label>
            <span class="text-danger" id="cust_name_error"></span>
        </div>
        <div class="col-lg-3 col form-group mx-1">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cust_gender" id="cust_gender1" value="M" {{ $investor->gender=="M" ? 'checked' : '' }}>
                <label class="form-check-label card-text" for="cust_gender1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="cust_gender" id="cust_gender2" value="F" {{ $investor->gender=="F" ? 'checked' : '' }}>
                <label class="form-check-label card-text" for="cust_gender2">
                    Perempuan
                </label>
            </div>
            <span class="text-danger" id="cust_gender_error"></span>
        </div>
    </div>
    <div class="d-flex flex-rowmb-2">
        <div class="col form-floating ">
            <select class="form-control select-others" id="cust_religion" name="cust_religion" value="{{ $investor->religion }}">
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Katolik</option>
                <option value="4">Hindu</option>
                <option value="5">Buddha</option>
                <option value="0">Lainnya</option>
            </select>
            <input id="cust_religion_other" class="form-control" name="cust_religion_other" type="text" placeholder="Lainnya" value="{{ is_numeric($investor->religion) ? "" : $investor->religion }}">
            <label for="cust_religion">Agama</label>
            <span class="text-danger" id="cust_religion_error"></span>
        </div>
        <div class="col form-floating ">
            <select class="form-control" id="cust_education" name="cust_education" value="{{ $investor->religion }}">
                <option value="1">SD</option>
                <option value="2">SMP/SLTP</option>
                <option value="3">SMA/SMU/SMK</option>
                <option value="4">Sarjana (S1)</option>
                <option value="5">Pasca Sarjana (S2)</option>
                <option value="6">Diploma</option>
                <option value="0">Lainnya</option>
            </select>
            <input id="cust_education_other" class="form-control" name="cust_education_other" type="text" placeholder="Lainnya" value="{{ is_numeric($investor->education) ? "" : $investor->education }}">
            <label for="cust_education">Pendidikan Terakhir</label>
            <span class="text-danger" id="cust_education_error"></span>
        </div>
    </div>
    <div class="d-flex flex-lg-row flex-column">
        <div class="col form-group form-floating me-lg-1">
            <select class="form-control" id=cust_nationality name="cust_nationality" value="{{ $investor->nationality }}">
                <option value="1">Indonesia</option>
                <option value="2">Warga Negara Asing</option>
            </select>
            <label for="cust_nationality">Status Warga Negara</label>
            <span class="text-danger" id="cust_nationality_error"></span>
        </div>
        <div class="col form-group form-floating ms-lg-1">
            <select class="form-control" id=cust_relationship_status name="cust_relationship_status" value="{{ $investor->relationship_status }}">
                <option value="1">Belum Menikah</option>
                <option value="2">Sudah Menikah</option>
                <option value="3">Duda</option>
                <option value="4">Janda</option>
            </select>
            <label for="cust_relationship_status">Status Hubungan</label>
            <span class="text-danger" id="cust_relationship_status_error"></span>
        </div>
    </div>
    <div id="cust_birth" class="d-flex flex-lg-row flex-column form-group">
        <div class="col form-floating">
            <input class="form-control" list="cust_birthplace" type="text" name="cust_birthplace" value="{{ $investor->birth_place }}" placeholder="Kota">
            <datalist id="cust_birthplace">
                @foreach(App\Models\City::all()->sortBy('city_name') as $city)
                <option value="{{ $city->city_name }}"></option>
                @endforeach
            </datalist>
            <label for="cust_birthplace">Tempat / Tanggal Lahir</label>
            <span class="text-danger" id="cust_birthplace_error"></span>
        </div>
        <div class="col form-group form-floating ms-lg-1">
            <input class="form-control datepicker" id="cust_birthdate" type="date" name="cust_birthdate" value="{{ $investor->birth_date }}">
            <span class="text-danger" id="cust_birthdate_error"></span>
        </div>
    </div>
    <div class="d-flex flex-lg-row flex-column">
        <div class="col form-floating me-lg-1">
            <input class="form-control form-control-sm" id="cust_nik" type="text" name="cust_nik" value="{{ $investor->nik_no }}" placeholder="NIK">
            <label for="cust_nik">NIK</label>
            <div class="d-flex flex-row form-group mt-1 align-items-center">
                <input class="form-control col" id="cust_nik_expire" type="date" name="cust_nik_expire" value="{{ $investor->nik_expire ? $investor->nik_expire : '' }}">
                <div class="col form-group ms-2 form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cust_nik_no_expire" name="cust_nik_no_expire" {{ $investor->nik_expire ? "" : "checked" }}>
                    <label class="form-check-label" for="cust_nik_no_expire">Seumur Hidup</label>
                </div>
            <span class="text-danger" id="cust_nik_error"></span>
        </div>
        </div>
        <div class="col d-flex flex-column align-content-center form-floating ms-lg-1">
            <input class="form-control form-control-sm" id="cust_npwp" type="text" name="cust_npwp" value="{{ $investor->npwp }}" placeholder="NPWP">
            <label for="cust_npwp">NPWP</label>
            <div class="col form-group ms-2 form-check form-check-inline mt-1" style="padding: 10px 16px;">
                <input class="form-check-input" type="checkbox" id="cust_no_npwp" name="cust_no_npwp" {{ ($investor->npwp || (Auth::user()->form_step == 1)) ? "" : "checked"}}>
                <label class="form-check-label" for="cust_no_npwp">Tidak memiliki NPWP</label>
            </div>
            <span class="text-danger" id="cust_npwp_error"></span>
        </div>
    </div>
</div>