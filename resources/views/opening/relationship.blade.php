<h3 class="text-center">Data Keluarga dan Ahli Waris Nasabah</h3>
<div class="d-flex flex-column container-fluid">
    <div id="cust_family" class="col form-group">
        <label for="cust_family">Keluarga Nasabah</label>
        <div class="form-floating">
            <input id="cust_mother_name" class="form-control" name="cust_mother_name" type="text" value="{{ $investor->mother_name }}" placeholder="e.g Maria Susanti">
            <label for="cust_mother_name">Nama Gadis Ibu Kandung</label>
        </div>
        <span class="text-danger" id="cust_mother_name_error"></span>
    </div>
    <div id="cust_inheritor" class="col d-flex flex-column form-group">
        <label for="cust_inheritor">Ahli waris</label>
        <div class="form-floating">
            <input id="cust_inheritor_name" class="col form-control mb-1" type="text" name="cust_inheritor_name" value="{{ $investor->inheritor_name }}" placeholder="Nama ">
            <label for="cust_inheritor_name">Nama</label>
            <span class="text-danger" id="cust_inheritor_name_error"></span>
        </div>
        <div class="col d-flex flex-row">
            <div class="col form-floating me-1">
                <input id="cust_inheritor_phone" class="form-control" type="text" name="cust_inheritor_phone" value="{{ $investor->inheritor_phone }}" placeholder="No. Telepon">
                <label for="cust_inheritor_phone">No. Telepon</label>
            </div>
            <div class="col form-floating ms-1">
                <select class="form-control" id="cust_inheritor_relationship" class="form-control" name="cust_inheritor_relationship" value="{{ $investor->inheritor_relationship }}">
                    <option value="1">Anak Kandung</option>
                    <option value="2">Adik Kandung</option>
                    <option value="3">Kakak Kandung</option>
                    <option value="4">Ayah</option>
                    <option value="5">Ibu</option>
                    <option value="6">Istri</option>
                    <option value="7">Suami</option>
                    <option value="8">Keponakan</option>
                    <option value="9">Orangtua Wali</option>
                    <option value="10">Saudara Lainnya</option>
                    <option value="11">Sepupu</option>
                </select>
                <label for="cust_inheritor_relationship">Status Hubungan</label>
                <span class="text-danger" id="cust_inheritor_relationship_error"></span>
            </div>
        </div>
    </div>
    @include('components.address-picker', ['name' => "Ahli Waris", 'field_name' => 'cust_inheritor_address', 'column_name' => 'address_inheritor'])
    <div id="cust_partner" class="col d-flex flex-column form-group">
        <label for="cust_partner">Pasangan</label>
        <div class="form-floating">
            <input id="cust_partnerr_name" class="col form-control mb-1" type="text" name="cust_partner_name" value="{{ $investor->partner_name }}" placeholder="Nama ">
            <label for="cust_partner_name">Nama</label>
            <span class="text-danger" id="cust_partner_name_error"></span>
        </div>
        <div class="col d-flex flex-row">
            <div class="col form-floating me-1">
                <input id="cust_partner_phone" class="form-control" type="text" name="cust_partner_phone" value="{{ $investor->partner_phone }}" placeholder="No. Telepon">
                <label for="cust_partner_phone">No. Telepon</label>
            </div>
            <div class="col form-floating ms-1">
                <select class="form-control" id="cust_partner_relationship" class="form-control" name="cust_partner_relationship" value="{{ $investor->partner_relationship }}">
                    <option value="1">Keluarga</option>
                    <option value="2">Pasangan</option>
                    <option value="3">Sepupu</option>
                </select>
                <label for="cust_partner_relationship">Status Hubungan</label>
                <span class="text-danger" id="cust_partner_relationship_error"></span>
            </div>
        </div>
    </div>
    @include('components.address-picker', ['name' => "Pasangan", 'field_name' => 'cust_partner_address', 'column_name' => 'address_partner'])
    <div id="cust_partner_company" class="col d-flex flex-column form-group">
        <label for="cust_partner_company">Pekerjaan Pasangan</label>
        <div class="col ms-1 form-floating">
            <select id="cust_partner_profession" class="select-others col form-control me-1" name="cust_partner_profession" value="{{ $investor->partner_profession }}">
                <option value="1">Ibu Rumah Tangga</option>
                <option value="2">Karyawan</option>
                <option value="3">Karyawan BUMN</option>
                <option value="4">Karyawan Swasta</option>
                <option value="5">Pegawai Negeri</option>
                <option value="6">Pelajar/Mahasiswa</option>
                <option value="7">Pensiun</option>
                <option value="8">TNI Polri</option>
                <option value="9">Wiraswasta</option>
                <option value="0">Lainnya</option>
            </select>
            <input id="cust_partner_profession_other" class="form-control" name="cust_partner_profession_other" type="text" placeholder="Lainnya">
            <label for="cust_partner_profession_other">Profesi</label>
        </div>
        <div class="col d-flex flex-row">
            <div class="col ms-1 form-floating">
                <select id="cust_partner_position" class="select-others col form-control ms-1" name="cust_partner_position" value="{{ $investor->partner_position }}">
                    <option value="1">Pemilik (Owner)</option>
                    <option value="2">Manajer</option>
                    <option value="3">Komisaris</option>
                    <option value="4">Pengawas (Supervisor)</option>
                    <option value="5">Direktur (Director)</option>
                    <option value="6">Pegawai (staff)</option>
                    <option value="7">Ibu Rumah Tangga (Housewife)</option>
                    <option value="0">Lainnya</option>
                </select>
                <input id="cust_partner_position_other" class="form-control" name="cust_partner_position_other" type="text" placeholder="Lainnya" value="{{ $investor->partner_occupation_position }}">
                <label for="cust_partner_position">Posisi</label>
            </div>
            <div class="col me-1 form-floating">
                <input id="cust_partner_company_name" class="form-control" name="cust_partner_company_name" type="text" value="{{ $investor->partner_company_name }}" placeholder="Nama perusahaan">
                <label for="cust_partner_company_name">Nama Perusahaan</label>
                <span class="text-danger" id="cust_partner_company_name_error"></span>
            </div>
        </div>
        <div class="col form-floating">
            <input id="cust_partner_company_address" class="col form-control mb-1" type="text" name="cust_partner_company_address" value="{{ $investor->partner_company_address }}" placeholder="Nama ">
            <label for="cust_partner_company_address">Alamat Perusahaan Pasangan</label>
            <span class="text-danger" id="cust_partner_company_address_error"></span>
        </div>
    </div>
</div>