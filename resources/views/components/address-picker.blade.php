<div id="{{ $field_name }}" class="form-group row">
    <label for="{{ $field_name }}">Alamat {{ $name }}</label>
    <div class="d-flex flex-column">
        <div class="d-flex flex-lg-row flex-column">
            <div class="col-lg-6 col me-lg-1 form-floating">
                <input class="form-control" id="{{ $field_name }}_road" type="text" name="{{ $field_name }}_road" value="{{ Auth::user()->address_ktp_road }}" placeholder="Jalan">
                <label for="{{ $field_name }}_road">Jalan</label>
            </div>
            <div class="col d-flex flex-row form-group ms-lg-1 mt-lg-0 mt-1">
                <div class="col form-floating">
                    <input class="col form-control me-1" id="{{ $field_name }}_unit" type="text" name="{{ $field_name }}_unit[]" value="{{ Auth::user()->address_ktp_unit }}" placeholder="RT/RW">
                    <label for="{{ $field_name }}_unit">RT/RW</label>
                </div>
                <div class="col form-floating">
                    <input class="col form-control ms-1" id="{{ $field_name }}_postal" type="text" name="{{ $field_name }}_postal[]" value="{{ Auth::user()->address_ktp_unit }}" placeholder="Kode Pos">
                    <label for="{{ $field_name }}_postal">Kode Pos</label>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row form-floating">
            <div class="form-floating">
                <input class="col form-control me-2 dropdown-selector" list="{{ $field_name }}_prov" name="{{ $field_name }}_prov" placeholder="Provinsi">
                <label for="{{ $field_name }}_prov">Provinsi</label>
                <datalist id="{{ $field_name }}_prov" data-route="{{ route('api.province.list', '') }}">
                @foreach(App\Models\Province::all()->sortBy('prov_name') as $prov)
                    <option value="{{ $prov->prov_name }}" data-id="{{ $prov->prov_id }}">
                @endforeach
                </datalist>
            </div>
            <div class="form-floating">
                <input class="col form-control dropdown-selector" list="{{ $field_name }}_city" name="{{ $field_name }}_city" placeholder="Kota">
                <label for="{{ $field_name }}_city">Kota</label>
                <datalist id="{{ $field_name }}_city" data-route="{{ route('api.city.list', '') }}" data-identifier="city">
                </datalist>
            </div>
            <div class="form-floating">
                <input class="col form-control dropdown-selector ms-2" list="{{ $field_name }}_district" name="{{ $field_name }}_district" placeholder="Kecamatan">
                <label for="{{ $field_name }}_district">Kecamatan</label>
                <datalist id="{{ $field_name }}_district" data-route="{{ route('api.district.list', '') }}" data-identifier="dis">
                </datalist>
            </div>
            <div class="form-floating">
                <input class="col form-control dropdown-selector ms-2" list="{{ $field_name }}_subdistrict" name="{{ $field_name }}_subdistrict" placeholder="Kelurahan">
                <label for="{{ $field_name }}_subdistrict">Kelurahan</label>
                <datalist id="{{ $field_name }}_subdistrict" data-identifier="subdis">
            </div>
        </div>
    </div>
</div>