<title>Daftarkan Pasien Baru</title>
@include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h1>Pasien Baru</h1>
        <br>
        <form action="tambahpasien" method="post">
            @csrf
            </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama" required="required"
                        value="{{ old('Nama') }}" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
            </div>
            </--------------------------------------------------------Alamat-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat"
                        placeholder="Alamat" value="{{ old('Alamat') }}">
                    @error('Alamat')
                        <div class="invalid-feedback">
                            "alamat masih kosong
                        </div>
                    @enderror
                </div>
            </div>


            </--------------------------------------------------------Lahir-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Lahir</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control @error('Lahir') is-invalid @enderror" name="Lahir"
                        placeholder="Lahir" value="{{ old('Lahir') }}">
                    @error('Lahir')
                        <div class="invalid-feedback">
                            "tanggal lahir masih kosong
                        </div>
                    @enderror
                </div>
            </div>

            </--------------------------------------------------------Kelamin-----------------------------------------------------------------------------------* />

            <div class="form-group row">
                <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                <div class="col-sm-5">
                    <select name="Kelamin" value="{{ old('Kelamin') }}" class="form-control @error('Kelamin') is-invalid @enderror">

                        <option selected value="">pilih</option>
                        <option value="laki-laki" {{ old('Kelamin') != 'laki-laki' ?: 'selected' }}>Laki-laki</option>
                        <option value="perempuan" {{ old('Kelamin') != 'perempuan' ?: 'selected' }}>Perempuan</option>
                    </select>
                    @error('Kelamin')
                        <div class="invalid-feedback">
                            "pilih jenis kelamin
                        </div>
                    @enderror
                </div>
            </div>
            <br>

            </--------------------------------------------------------Telepon-----------------------------------------------------------------------------------* />
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control @error('Telepon') is-invalid @enderror" id="notelp"
                        name="Telepon" placeholder="Nomer Telepon (aktif)" value="{{ old('Telepon') }}">
                    @error('Telepon')
                        <div class="invalid-feedback">
                            "nomer telepon masih kosong
                        </div>
                    @enderror
                </div>
            </div>

            <!--------------------------------------------------------pilih layanan----------------------------------------------------------------------------------- -->
            <div class="form-group row mt-2">
                <label class="col-form-label col-sm-2 pt-0">Layanan</label>
                <div class="col-sm-3">
                    <select name="layanan" class="form-control "
                    required oninvalid="this.setCustomValidity('pilih...')"
                                    oninput="setCustomValidity('')">
                        <option value="">pilih layanan...</option>
                        <option value="Umum">Umum</option>
                        <option value="Asuransi">Asuransi</option>
                    </select>
                </div>
            </div>
            <!--------------------------------------------------------rekam medis----------------------------------------------------------------------------------- -->
            <div class="form-group row mt-2">
                <label class="col-sm-2 col-form-label">Keluhan</label>
                <div class="col-sm-5">
                        <textarea type="text" name="RekamMedis" class="form-control" cols="30" rows="5"
                        placeholder="Masukkan keluhan si pasien, dan sudah berapa lama?"
                        required oninvalid="this.setCustomValidity('isi...')"
                                    oninput="setCustomValidity('')"></textarea>
                </div>
            </div>

            <!--------------------------------------------------------pilih dokter----------------------------------------------------------------------------------- -->
            <div class="form-group row mt-2">
                <label class="col-form-label col-sm-2 pt-0">Dokter</label>
                <div class="col-sm-7">
                    <select name="dokter" class="form-control"
                    required oninvalid="this.setCustomValidity('pilih dokter yang memeriksa...')"
                                    oninput="setCustomValidity('')">
                        <option selected value="">Pilih dokter..</option>

                        @foreach($dokter as $row)
                        <option value= "{{ $row->id }}">{{ $row->nama }}({{ $row->poli == '' ? '-' : $row->poli->name }})  | {{ $row->jadwal == '' ? 'Belum ada Jadwal' : $row->jadwal->jadwalpraktek }}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/pendaftaran" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </form>
    </div>

    <script>
        function setInputFilter(textbox, inputFilter, errMsg) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(
                function(event) {
                    textbox.addEventListener(event, function(e) {
                        if (inputFilter(this.value)) {
                            // Accepted value
                            if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
                                this.classList.remove("input-error");
                                this.setCustomValidity("");
                            }
                            this.oldValue = this.value;
                            this.oldSelectionStart = this.selectionStart;
                            this.oldSelectionEnd = this.selectionEnd;
                        } else if (this.hasOwnProperty("oldValue")) {
                            // Rejected value - restore the previous one
                            this.classList.add("input-error");
                            this.setCustomValidity(errMsg);
                            this.reportValidity();
                            this.value = this.oldValue;
                            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                        } else {
                            // Rejected value - nothing to restore
                            this.value = "";
                        }
                    });
                });
        }

        setInputFilter(document.getElementById("nonik"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
        setInputFilter(document.getElementById("notelp"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
    </script>
