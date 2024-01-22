<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Akupuntur Dewi</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Akupuntur Dewi. </a>

    <nav class="navbar">
        <a href="/#home">home</a>
        <a href="/#services">services</a>
        <a href="/#about">about</a>
        <a href="/#book">book</a>
        <a href="/#review">review</a>
        <a href="/#videos">videos</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>Stay Safe, Stay Healthy</h3>
        <p>Pasien Lama atau yang sudah pernah berobat sebelumnya</p>
        <a href="antrian-pasien" type="button" class="btn btn-warning">Cek Antrian <span class="fas fa-chevron-right"></span></a>
    </div>

</section>

<section class="services" id="services">
    <form action="/cekpasienlama" method="POST">
        @csrf
        <!-- Nama -->
        <div class="form-group">
            <label class="col-md-4 control-label" style="font-size: 16px;">Nama Lengkap</label>
            <div class="col-sm-5">
                <input type="text" style="font-size: 16px; border-radius: 6px; width: 50%; border: 1px solid #ced4da;" class="form-control" name="Nama" placeholder="Nama Lengkap"
                    required="required" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                    oninput="setCustomValidity('')">
            </div>
        </div></br>
        <!-- Tanggal Lahir -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="font-size: 16px;">Tanggal Lahir</label>
            <div class="col-sm-5">
                <input type="date" style="font-size: 16px; width: 50%; border: 1px solid #ced4da;" class="form-control @error('Lahir') is-invalid @enderror" name="Lahir"
                    placeholder="Lahir">
                @error('Lahir')
                    <div class="invalid-feedback">
                        Tanggal lahir masih kosong
                    </div>
                @enderror
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-warning col-sm-2">
            <i class="fas fa-search"></i> Cari
        </button>
    </form>
</section>



<!-- Footer Section Starts -->
<section class="footer">
    <div class="box-container">
        <!-- Quick Links -->
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> About </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Videos </a>
        </div>
        <!-- Our Services -->
        <div class="box">
            <h3>Our Services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Message Therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Acupuncture </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Ambulance Service </a>
        </div>
        <!-- Contact Info -->
        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> name@domainname.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> www.freewebsitecode.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Depok - Jawa Barat</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://facebook.com/freewebsitecode/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://freewebsitecode.com"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos"> <i class="fab fa-youtube"></i> youtube </a>
            <a href="https://freewebsitecode.com"> <i class="fab fa-instagram"></i> instagram </a>
        </div>

    </div>

    <div class="credit"> created by <span><a href="#about">Gaspar Ferdiansyah. Gia Algapura. Marleen Elizabeth</a></span> | all rights reserved 2024</div>

</section>


    <div class="modal fade" id="pasienlamaf" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div id="kartuantrian">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <img src="{{ asset('img/logo.png') }}" style="float:left; width:55px; height:55px;" />Klinik {{ env('APP_NAME') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p class="h3">Data Pasien</p>
                        <p class="h3" style="color:RED;">Tidak Ditemukan</p>
                        <p class="p" style="color:rgb(129, 129, 129); font-style: italic;">Coba ingat
                            kembali, apakah anda sudah pernah berobat diklinik {{ env('APP_NAME') }} sebelumnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------modal kartu antrian----------------------------------------------------------------------------------->
    <div class="modal fade" id="antrian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="kartuantrian2">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="h3">Nomor Antrian : <span
                                class="text-primary">{{ Session::has('nomorAntrian') ? Session::get('nomorAntrian') : '' }}</span>
                        </p>
                        <p class="h3">Atas Nama : <span
                                class="text-primary">{{ Session::has('nama') ? Session::get('nama') : '' }}</span>
                        </p>
                        <p>Daftar pada jam : <span
                                class="text-primary">{{ Session::has('timestamps') ? Session::get('timestamps') : '' }}</span>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <p>Tanggal : <span
                                class="text-primary">{{ Session::has('tanggaldaftar') ? Session::get('tanggaldaftar') : '' }}</span>
                        </p>

                        <a type="button" class="btn btn-secondary" href="/antrian-pasien">
                            <i class="fas fa-users me-2"></i>
                            Cek Antrian
                        </a>
                        <button type="button" class="btn btn-primary" id="download">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------modal kartu pasien----------------------------------------------------------------------------------->


        <div class="modal fade" id="pasienlamas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="antrianLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="h3">Data Pasien Ditemukan</p>
                            <p>Nama : <span class="text-primary">{{ Session::get('nama') }}</span>
                            </p>
                            <p>Alamat : <span class="text-primary">{{ Session::get('alamat') }}</span>
                            </p>
                            <p>Tanggal Lahir : <span class="text-primary">{{ Session::get('lahir') }}</span>
                            </p>
                            <p>Kelamin : <span class="text-primary">{{ Session::get('kelamin') }}</span>
                            </p>

                            <form action="addrekam" method="POST">
                                @csrf
                                <div class="form-group row mt-2">
                                    <input type="text" value="{{ Session::get('id') }}" name="id_player" readonly
                                        hidden>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-form-label col-sm-2 pt-0">Layanan</label>
                                    <div class="col-sm">
                                        <select name="layanan" class="form-control " required
                                            oninvalid="this.setCustomValidity('Pribadi / Asuransi?')"
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
                                    <div class="col-sm">
                                        <textarea type="text" name="keluhan" class="form-control" cols="30" rows="5"
                                            placeholder="Jelaskan keluhan anda, dan sudah berapa lama?" required
                                            oninvalid="this.setCustomValidity('jelaskan keluhan anda...')" oninput="setCustomValidity('')"></textarea>
                                    </div>
                                </div>

                                <!--------------------------------------------------------pilih dokter----------------------------------------------------------------------------------- -->
                                <div class="form-group row mt-2">
                                    <label class="col-form-label col-sm-2 pt-0">Dokter</label>
                                    <div class="col-sm">
                                        <select name="dokter" class="form-control " required
                                            oninvalid="this.setCustomValidity('pilih dokter yang tersedia...')"
                                            oninput="setCustomValidity('')">
                                            <option value="">pilih dokter...</option>
                                            @foreach ($dokter as $row)
                                                <option {{ $row->jadwal->jadwalpraktek == 'LIBUR' ? 'disabled' : ''}} {{ $row->jadwal->jadwalpraktek == 'CUTI' ? 'disabled' : ''}} value="{{ $row->id }}">
                                                    {{ $row->nama }}({{ $row->poli == '' ? '-' : $row->poli->name }}) |
                                                    {{ $row->jadwal == '' ? 'Belum ada Jadwal' : $row->jadwal->jadwalpraktek }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-2 d-flex justify-content-center">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" >Daftar</button>
                                </div>

                            </form>


                    </div>
                </div>
            </div>

    <!--------------------------------------------------------modal error----------------------------------------------------------------------------------->
    <div class="modal fade" id="error" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div id="kartuantrian">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <img src="{{ asset('img/logo.png') }}" style=”float:left;
                                width="55";height="55"” />Klinik {{ env('APP_NAME') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @foreach ($errors->all() as $item)
                            <div class="alert alert-danger" role="alert">
                                {{ $item }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--------------------------------------------------------Bootstrap JS----------------------------------------------------------------------------------->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!--------------------------------------------------------modal antrian----------------------------------------------------------------------------------->
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#error').modal('show')
            });
        </script>
    @endif

    <script>
        @if (Session::has('success'))
            $(document).ready(function() {
                $('#pasienlamas').modal('show')
            });
        @elseif (Session::has('failed'))
            $(document).ready(function() {
                $('#pasienlamaf').modal('show')
            });
        @elseif (Session::has('addsuccess'))
            $(document).ready(function() {
                $('#antrian').modal('show')
            });
        @endif
    </script>

    <!--------------------------------------------------------modal antrian----------------------------------------------------------------------------------->
    <script>
        @if (Session::has('nomorAntrian'))
            $(document).ready(function() {
                $('#antrian').modal('show')
            });
        @endif
    </script>
    <!--------------------------------------------------------fungsi inputan angka/number only----------------------------------------------------------------------------------->
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

    <!--------------------------------------------------------fungsi jam----------------------------------------------------------------------------------->
    <script type="text/javascript">
        function updateClock() {
            var now = new Date();
            var dname = now.getDay(),
                mo = now.getMonth(),
                dnum = now.getDate(),
                yr = now.getFullYear(),
                hou = now.getHours(),
                min = now.getMinutes(),
                sec = now.getSeconds(),
                pe = "AM";

            if (hou >= 12) {
                pe = "PM";
            }
            if (hou == 0) {
                hou = 12;
            }
            if (hou > 12) {
                hou = hou - 12;
            }

            Number.prototype.pad = function(digits) {
                for (var n = this.toString(); n.length < digits; n = 0 + n);
                return n;
            }

            var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
            var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
            var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
            for (var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
        }

        function initClock() {
            updateClock();
            window.setInterval("updateClock()", 1);
        }
    </script>

    <!--------------------------------------------------------fungsi download kartu antrian----------------------------------------------------------------------------------->
    <script>
        document.getElementById("download").addEventListener("click", function() {
            const imgName = prompt("Input nama gambar yang akan diunduh: ")
            html2canvas(document.querySelector('#kartuantrian2')).then(function(canvas) {

                console.log(canvas);
                saveAs(canvas.toDataURL(), imgName + '.jpg');
            });
        });

        function saveAs(uri, filename) {
            var link = document.createElement('a');
            if (typeof link.download === 'string') {
                link.href = uri;
                link.download = filename;
                //Firefox requires the link to be in the body
                document.body.appendChild(link);
                //simulate click
                link.click();
                //remove the link when done
                document.body.removeChild(link);
            } else {
                window.open(uri);
            }
        }
    </script>
</body>

</html>
