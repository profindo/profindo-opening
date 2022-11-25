<div id="{{ $field_name }}" class="form-group row">
    <input type="hidden" name="{{ $field_name }}" value="">
    <label for="{{ $field_name }}">Alamat {{ $name }}</label>
    <div class="d-flex flex-column">
        <div class="d-flex flex-lg-row flex-column">
            <div class="col-lg-6 col me-lg-1 form-floating">
                <input class="form-control" id="{{ $field_name }}_road" type="text" name="{{ $field_name }}[road]" value="{{ $investor[$column_name."_road"] }}" placeholder="Jalan">
                <label for="{{ $field_name }}_road">Jalan</label>
            </div>
            <div class="col d-flex flex-row form-group ms-lg-1 mt-lg-0 mt-1">
                <div class="col form-floating">
                    <input class="col form-control me-1" id="{{ $field_name }}_unit" type="text" name="{{ $field_name }}[unit]" value="{{ $investor[$column_name."_unit"] }}" placeholder="RT/RW">
                    <label for="{{ $field_name }}_unit">RT/RW</label>
                </div>
                <div class="col form-floating">
                    <input class="col form-control ms-1" id="{{ $field_name }}_postal" type="text" name="{{ $field_name }}[postal]" value="{{ $investor[$column_name."_postal"] }}" placeholder="Kode Pos">
                    <label for="{{ $field_name }}_postal">Kode Pos</label>
                </div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-column form-group">
            <div class="col d-flex flex-row">
                <div class="col form-floating">
                    <input class="col form-control me-2 dropdown-selector" list="{{ $field_name }}_province" name="{{ $field_name }}[province]" value="{{ $investor[$column_name."_province"] }}" placeholder="Provinsi">
                    <label for="{{ $field_name }}_province">Provinsi</label>
                    <datalist id="{{ $field_name }}_province" data-route="{{ route('api.province.list', '') }}">
                    @foreach(App\Models\Province::all()->sortBy('prov_name') as $prov)
                        <option value="{{ $prov->prov_name }}" data-id="{{ $prov->prov_id }}">
                    @endforeach
                    </datalist>
                </div>
                <div class="col form-floating">
                    <input class="col form-control dropdown-selector" list="{{ $field_name }}_city" name="{{ $field_name }}[city]" value="{{ $investor[$column_name."_city"] }}" placeholder="Kota">
                    <label for="{{ $field_name }}_city">Kota</label>
                    <datalist id="{{ $field_name }}_city" data-route="{{ route('api.city.list', '') }}" data-identifier="city">
                    </datalist>
                </div>
            </div>
            <div class="col d-flex flex-row">
                <div class="col form-floating">
                    <input class="col form-control dropdown-selector ms-2" list="{{ $field_name }}_district" name="{{ $field_name }}[district]" value="{{ $investor[$column_name."_district"] }}" placeholder="Kecamatan">
                    <label for="{{ $field_name }}_district">Kecamatan</label>
                    <datalist id="{{ $field_name }}_district" data-route="{{ route('api.district.list', '') }}" data-identifier="dis">
                    </datalist>
                </div>
                <div class="col form-floating">
                    <input class="col form-control dropdown-selector ms-2" list="{{ $field_name }}_subdistrict" name="{{ $field_name }}[subdistrict]" value="{{ $investor[$column_name."_subdistrict"] }}" placeholder="Kelurahan">
                    <label for="{{ $field_name }}_subdistrict">Kelurahan</label>
                    <datalist id="{{ $field_name }}_subdistrict" data-identifier="subdis">
                </div>
            </div>
        </div>
    </div>
    <span class="text-danger" id="{{ $field_name }}_error"></span>
</div>