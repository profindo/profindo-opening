<h3 class="text-center">Data Rekening Pribadi</h3>
<div class="d-flex flex-column container-fluid">
    <div id="cust_bank" class="col d-flex flex-column form-group">
        <label for="cust_bank">Rekening Nasabah</label>
        <div class="col form-floating">
            <input id="cust_bank_name" class="form-control" name="cust_bank_name" type="text" value="{{ $investor->bank_name }}" placeholder="Nama sesuai Buku Tabungan" disabled>
            <label for="cust_bank_name">Nama Pemilik Rekening</label>
        </div>
        <div class="col d-flex flex-row">
            <div class="col form-floating">
                <input id="cust_bank_no" class="form-control" name="cust_bank_no" type="text" value="{{ $investor->bank_no }}" placeholder="No Rekening" disabled>
                <label for="cust_bank_no">No Rekening</label>
            </div>
            <div class="col form-floating">
                <select id="cust_bank_code" class="form-control" name="cust_bank_code" type="text" value="{{ $investor->bank_code }}" placeholder="Tipe Bank" disabled>
                    <option value="BBCA">BCA</option>
                    <option value="CIMB">CIMB Niaga</option>
                    <option value="BSIM">Sinarmas</option>
                </select>
                <label for="cust_bank_code">Tipe Bank</label>
            </div>
        </div>
    </div>
    <div id="cust_rdn" class="col d-flex flex-column form-group">
        <label for="cust_rdn">Rekening Reksadana</label>
        <div class="col form-floating">
            <input id="cust_rdn_no" class="form-control" name="cust_rdn_no" value="{{ $investor->bank_rdn_no }}" placeholder="No Rekening Reksadana">
            <label for="cust_rdn_no">No Rekening Reksadana</label>
        </div>
    </div>
</div>