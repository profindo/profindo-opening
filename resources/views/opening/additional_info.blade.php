<h3 class="text-center">Informasi Tambahan</h3>
<div class="d-flex flex-column container-fluid">
    <div id="cust_media" class="col d-flex flex-column form-group">
        <label for="cust_media">Upload Media</label>
        <div class="col d-flex flex-lg-row flex-column">
            <div class="col form-group">
                <div class="preview-container mx-5 mb-2">
                    <img id="cust_media_ktp_preview" class="col img-fluid me-1" src="{!! Storage::disk('uploads')->exists($investor->media_ktp) ? $investor->ktpAsImage() : 'https://mdbootstrap.com/img/Photos/Others/placeholder.jpg' !!}">
                </div>
                <input id="cust_media_ktp" class="form-control" name="cust_media_ktp" type="file" accept="image/*">
                <label for="cust_media_ktp">e-KTP
            </div>
            <div class="col form-group">
                <div class="preview-container mx-5 mb-2">
                    <img id="cust_media_npwp_preview" class="col img-fluid me-1" src="{!! Storage::disk('uploads')->exists($investor->media_npwp) ?  $investor->npwpAsImage() : 'https://mdbootstrap.com/img/Photos/Others/placeholder.jpg' !!}">
                </div>
                <input id="cust_media_npwp" class="form-control" name="cust_media_npwp" type="file" accept="image/*">
                <label for="cust_media_npwp">NPWP
            </div>
        </div>
        <div class="col d-flex flex-lg-row flex-column">
            <div class="col form-group">
                <div class="preview-container mx-5 mb-2">
                    <img id="cust_media_signature_preview" class="col img-fluid me-1" src="{!! Storage::disk('uploads')->exists($investor->media_signature) ?  $investor->signatureAsImage() : 'https://mdbootstrap.com/img/Photos/Others/placeholder.jpg' !!}">
                </div>
                <input id="cust_media_signature" class="form-control" name="cust_media_signature" type="file" accept="image/*">
                <label for="cust_media_signature">Tanda Tangan
            </div>
            <div class="col form-group">
                <div class="preview-container mx-5 mb-2">
                    <img id="cust_media_selfie_preview" class="col img-fluid me-1" src="{!! Storage::disk('uploads')->exists($investor->media_selfie) ?  $investor->selfieAsImage() : 'https://mdbootstrap.com/img/Photos/Others/placeholder.jpg' !!}">
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
            <option value="1">Brosur/Spanduk/Banner</option>
            <option value="2">Cabang Profindo Sekuritas</option>
            <option value="3">Internet (Google Search, Iklan Bersponsor, Iklan Bergambar dan Iklan Video)</option>
            <option value="4">Komunitas</option>
            <option value="5">Nasabah Profindo Sekuritas</option>
            <option value="6">Pameran/Event</option>
            <option value="7">Sales/Marketing</option>
            <option value="8">Social Media</option>
            <option value="9">SPM</option>
            <option value="0">Lainnya</option>
        </select>
        <input id="cust_reference_other" class="form-control" name="cust_reference_other" type="text" placeholder="Lainnya">
    </div>
    <div class="col form-group">
        <label for="cust_reason">Tujuan Investasi</label>
        <select id="cust_reason" class="select-others form-control" name="cust_reason">
            <option value="1">Pendapatan</option>
            <option value="2">Investasi</option>
            <option value="3">Long Term Investment</option>
            <option value="4">Pertumbuhan Cepat</option>
            <option value="5">Price Appreciation</option>
            <option value="6">Spekulasi</option>
            <option value="0">Lainnya</option>
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
                <input id="cust_acquintance1" class="form-check-input" name="cust_acquintance" type="radio" value="0" {{ $investor->is_occupation_related ? '' : 'checked' }}>
                <label for="cust_acquintance1" class="form-check-label">Tidak</label>
            </div>
            <div class="form-check">
                <input id="cust_acquintance2" class="form-check-input" name="cust_acquintance" type="radio" value="1"  {{ $investor->is_occupation_related ? 'checked' : '' }}>
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
                <input id="cust_other1" class="form-check-input" name="cust_other" type="radio" value="0" {{ $investor->other_securities_company ? '' : 'checked' }}>
                <label for="cust_other1" class="form-check-label">Tidak</label>
            </div>
            <div class="form-check">
                <input id="cust_other2" class="form-check-input" name="cust_other" type="radio" value="1" {{ $investor->other_securities_company ? 'checked' : '' }}>
                <label for="cust_other2" class="form-check-label">Ya</label>
            </div>
            <div class="form-check">
                <input id="cust_other_text" class="form-control" name="cust_other_text" placeholder="PT Profindo Sekuritas Indonesia" value="{{ $investor->other_securities_company }}" style="{{ $investor->other_securities_company ? '' : 'display: none;'}}">
            </div>
        </div>
    </div>
</div>