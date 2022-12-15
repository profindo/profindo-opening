<h3 class="text-center">Data Pekerjaan atau Perusahaan</h3>
<div class="d-flex flex-column container-fluid">
    <div id="cust_occupation" class="col d-flex flex-column form-group">
        <label for="cust_occupation">Pekerjaan Nasabah</label>
        <div class="col d-flex flex-row">
            <div class="col me-1 form-floating">
                <select id="cust_occupation_profession" class="select-others col form-control me-1" name="cust_occupation_profession" value="{{ $investor->occupation_profession }}">
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
                <input id="cust_occupation_profession_other" class="form-control" name="cust_occupation_profession_other" type="text" placeholder="Lainnya" value="{{ $investor->occupation_profession }}">
                <label for="cust_occupation_profession_other">Profesi</label>
            </div>
            <div class="col ms-1 form-floating">
                <select id="cust_occupation_position" class="select-others col form-control ms-1" name="cust_occupation_position" value="{{ $investor->occupation_position }}">
                    <option value="1">Pemilik (Owner)</option>
                    <option value="2">Manajer</option>
                    <option value="3">Komisaris</option>
                    <option value="4">Pengawas (Supervisor)</option>
                    <option value="5">Direktur (Director)</option>
                    <option value="6">Pegawai (staff)</option>
                    <option value="7">Ibu Rumah Tangga (Housewife)</option>
                    <option value="0">Lainnya</option>
                </select>
                <input id="cust_occupation_position_other" class="form-control" name="cust_occupation_position_other" type="text" placeholder="Lainnya" value="{{ is_numeric($investor->occupation_position) ? "" : $investor->occupation_position }}">
                <label for="cust_occupation_position">Posisi</label>
            </div>
        </div>
        <div class="col d-flex flex-row">
            <div class="col me-1 form-floating">
                <select id="cust_occupation_income_range" class="form-control" name="cust_occupation_income_range" value="{{ $investor->occupation_income_range }}">
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
                <select id="cust_occupation_income_origin" class="select-others form-control" name="cust_occupation_income_origin" value="{{ $investor->occupation_income_origin }}">
                    <option value="1">Penghasilan / Gaji</option>
                    <option value="2">Dari Orang Tua / Anak</option>
                    <option value="3">Bisnis</option>
                    <option value="4">Suami / Istri</option>
                    <option value="0">Lainnya</option>
                </select>
                <input id="cust_occupation_income_origin_other" class="form-control" name="cust_occupation_income_origin_other" type="text" value="{{ is_numeric($investor->occupation_income_origin) ? "" : $investor->occupation_income_origin }}" placeholder="Lainnya">
                <label for="cust_occupation_income_origin">Sumber Penghasilan</label>
            </div>
        </div>
    </div>
    <div id="cust_company" class="col d-flex flex-column form-group">
        <label for="cust_company">Perusahaan Nasabah</label>
        <div class="col d-flex flex-lg-row flex-column">
            <div class="col me-lg-1 form-floating">
                <input id="cust_occupation_name" class="form-control" name="cust_occupation_name" type="text" value="{{ $investor->company_name }}" placeholder="Nama perusahaan">
                <label for="cust_occupation_name">Nama Perusahaan</label>
                <span class="text-danger" id="cust_occupation_name_error"></span>
            </div>
            <div class="col ms-lg-1 form-floating">
                <input id="cust_occupation_industry" class="form-control" name="cust_occupation_industry" type="text" value="{{ $investor->company_industry }}" placeholder="Bidang perusahaan">
                <label for="cust_occupation_industry">Bidang Usaha</label>
                <span class="text-danger" id="cust_occupation_industry_error"></span>
            </div>
        </div>
        <div class="col d-flex flex-row">
            <div class="col me-1 form-floating">
                <input id="cust_occupation_phone" class="form-control" name="cust_occupation_phone" type="text" value="{{ $investor->company_phone }}" placeholder="0812484219824">
                <label for="cust_occupation_phone">No. Telepon Kantor</label>
                <span class="text-danger" id="cust_occupation_phone_error"></span>
            </div>
            <div class="col ms-1 form-floating">
                <input id="cust_occupation_fax" class="form-control" name="cust_occupation_fax" type="text" value="{{ $investor->company_fax }}" placeholder="081284219824">
                <label for="cust_occupation_fax">No. Fax Kantor</label>
            </div>
        </div>
    </div>
    @include('components.address-picker', ['name' => 'Perusahaan', 'field_name' => "cust_company_address", 'column_name' => "address_company"])
</div>