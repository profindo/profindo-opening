<h3 class="text-center">Alamat Nasabah</h3>
<div class="container-fluid">
    @include('components.address-picker', ['name' => 'sesuai KTP', 'field_name' => "cust_ktp_address", 'column_name' => 'address_ktp'])
    <div class="col form-group">
        <label for="cust_home_address_status">Status rumah tinggal</label>
        <select class="form-control select-others" id="cust_home_address_status" name="cust_home_address_status" value="{{ $investor->address_home_status }}">
            <option value="1">Rumah Keluarga</option>
            <option value="2">Milik Pribadi</option>
            <option value="3">Sewa/Kontrak</option>
            <option value="4">Kos</option>
            <option value="0">Lainnya</option>
        </select>
        <input id="cust_home_address_status_other" class="form-control" name="cust_reference_other" type="text" placeholder="Lainnya">
    </div>
    <div class="form-group">
        <input id="home_ktp_address_same" class="form-check-input" name="home_ktp_address_same" type="checkbox">
        <label class="form-check-label" for="home_ktp_address_same">Alamat rumah sama dengan KTP</label>
    </div>
    @include('components.address-picker', ['name' => 'Rumah', 'field_name' => "cust_home_address", 'column_name' => 'address_home'])
    <ul id="cust_other_address" class="list-unstyled">
    </ul>
    <div id="cust_other_address_buttons" class="form-group">
        <a class="btn btn-primary p-3" onclick="addAddress()"><i class="fa fa-plus"></i></a>
        <a class="btn btn-danger p-3" onclick="removeAddress()"><i class="fa fa-minus"></i></a>
    </div>
</div>