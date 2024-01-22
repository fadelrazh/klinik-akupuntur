<?php
    $klinikkk= "Antah";
    $mappp= "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2552.7933967249073!2d117.22912786566681!3d-0.8342596379442541!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd748a34b972a55b!2sKlinik%20Maju%20Sejahtera!5e1!3m2!1sid!2sid!4v1664207204197!5m2!1sid!2sid";

?>

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
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#book">book</a>
        <a href="#review">review</a>
        <a href="#videos">videos</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>Stay Safe, Stay Healthy</h3>
        <p>Ensuring your well-being is our top priority. We are dedicated to providing a safe and healthy environment for everyone. Our commitment is unwavering!</p>
        <a href="#footer" class="btn">Contact Us <span class="fas fa-chevron-right"></span></a>
</div>


</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">Our <span>Services</span></h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Free Checkups</h3>
            <p>Ensure your well-being with our complimentary health checkups. We prioritize your health and peace of mind.</p>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 Ambulance</h3>
            <p>Our round-the-clock ambulance services are here for you whenever you need immediate medical assistance. Your safety is our priority.</p>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Expert Doctors</h3>
            <p>Trust your health in the hands of our experienced and knowledgeable doctors. We are dedicated to providing you with the best medical care.</p>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Medicines</h3>
            <p>Access a wide range of quality medicines to support your health and well-being. We strive to provide the medications you need.</p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>About</span> Us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="About Us Image">
        </div>

        <div class="content">
            <h3>We Prioritize Your Well-being</h3>
            <p>At our core, we are dedicated to ensuring your healthy life. We prioritize your well-being by providing comprehensive healthcare services.</p>
            <p>Our commitment extends to delivering exceptional care, fostering a healthy community, and addressing your healthcare needs with compassion and expertise.</p>
            <a href="/about-us" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- booking section starts   -->

<section class="book" id="book">
    <div class="container text-center">
        <h1 class="heading"> <span>Book</span> Now </h1>

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="" style="width: 500px; height: 500px; display: block; margin: 0 auto;">
        </div>

        <!-- Icon Divider-->
        <div class="row justify-content-center">
            <div class="col-lg-3 mb-3">
                <button class="btn btn-xl btn-outline-light" data-bs-toggle="modal" data-bs-target="#daftarPasien">
                    <i class="fas fa-book me-2"></i>
                    Daftar Sebagai Pasien
                </button>
            </div>
            <div class="col-lg-3 mb-3">
                <a class="btn btn-outline-light" href="/antrian-pasien">
                    <i class="fas fa-users me-2"></i>
                    Cek Antrian disini
                </a>
            </div>
            <div class="col-lg-3 mb-3">
                <a class="btn btn-xl btn-outline-light" href="/dashboard">
                    <i class="fas fa-user me-2"></i>
                    Masuk Sebagai Staff
                </a>
            </div>
        </div>
    </div>
</section>


<!-- booking section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">Client's <span>Review</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="image/rev-1.jpeg" alt="Review 1">
            <h3>Sutrisno</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I am grateful for the exceptional service provided by this team. They have made a positive impact on my health, and I highly recommend their services to others.</p>
        </div>

        <div class="box">
            <img src="image/rev-2.jpeg" alt="Review 2">
            <h3>Sutarni</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Exceptional healthcare experience! The team's dedication to patient care and well-being is truly commendable. I'm extremely satisfied with their services.</p>
        </div>

        <div class="box">
            <img src="image/rev-3.jpeg" alt="Review 3">
            <h3>Surti</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">Outstanding! The team provides top-notch medical care with a personalized touch. I appreciate their professionalism and commitment to patient well-being.</p>
        </div>

    </div>

</section>


<!-- review section ends -->

<!-- video section starts  -->

<section class="videos" id="videos">
    <h1 class="heading">Our <span>videos</span></h1>
    <div class="box-container">
        <iframe src="https://www.youtube.com/embed/XKBlQqvaAD4?si=dAW4AG9_B9g4lXhL" title="YouTube video player" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/QCWjxK3LeJ0?si=-6XBC9kgxIPPGwAD" title="YouTube video player" allowfullscreen></iframe>
    </div>
</section>

<!-- video section ends -->

<!-- footer section starts  -->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> videos </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> acupuncture </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a style="text-transform: lowercase;" href="#"> <i class="fas fa-envelope"></i> klinikakupunturdewi@gmail.com </a>
            <a style="text-transform: lowercase;" href="#"> <i class="fas fa-envelope"></i> www.klinikakupunturdewi.co.id </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Depok - Jawa Barat </a>
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

<!-- footer section ends -->


<!-- footer section ends -->

    <!-- Daftar Pasien Modalllllllllllll -->
    <!-- Daftar Pasien Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="daftarPasien" tabindex="-1" aria-labelledby="daftarPasienLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md relative w-auto pointer-events-none" role="document">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                        Daftar Sebagai Pasien
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pasien.store') }}" method="post">
                    @csrf
                    <input type="hidden" value="1" name="daftarPasien">
                    <div class="modal-body relative p-4 text-center">
                        <a href="pasien-lama">
                            <button type="button" class="btn btn-none p-0" style="border: none; background: none; color: red;">
                                <i class="fas fa-user fa-8x"></i><br>Pasien Lama
                            </button>
                        </a>

                        <a href="#">
                            <button type="button" class="btn btn-none p-0" style="border: none; background: none;" data-bs-toggle="modal" data-bs-target="#daftarPasienbaru">
                                <i class="fas fa-user fa-8x"></i><br>Pasien Baru
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="daftarPasienbaru" tabindex="-1" role="dialog" aria-labelledby="daftarPasienbaruLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <label class="col-sm-5 col-form-label"><a href="pasien-lama" type="button"
                class="btn btn-warning">Pasien Lama klik disini</a></label>

        </div>
        <div class="modal-body">
            <form action="{{ route('pasien.store') }}" method="post">
                @csrf
                <input type="hidden" value="1" name="daftarPasien">

            <!--------------------------------------------------------pasien lama----------------------------------------------------------------------------------->
            <div class="form-group row">

                <div class="col-sm">
                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <h4>Pasien Baru, Lengkapi data dibawah ini</h4>
            <h6 style="color:RED;">*Semua Form WAJIB diisi, mohon periksa data anda dengan benar</h6>
            <!--------------------------------------------------------Nama----------------------------------------------------------------------------------->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm">
                    <input type="text" class="form-control" name="Nama" placeholder="Nama" style="width: 100%;"
                        required oninvalid="this.setCustomValidity('nama tidak boleh kosong')"
                        oninput="setCustomValidity('')">
                </div>
            </div>
            <!--------------------------------------------------------Alamat----------------------------------------------------------------------------------->
            <div class="form-group row mt-2">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm">
                    <input type="text" class="form-control" name="Alamat" placeholder="Alamat"
                        required oninvalid="this.setCustomValidity('alamat masih kosong')" style="width: 100%;"
                        oninput="setCustomValidity('')">
                </div>
            </div>

            <script>
                selDate=(e)=>
                {
                    this.setState({date1:e.target.value})
                }
                render()
                disableDates=()=>
                {
                    var today, ,mm,yyyy;
                    today=new Date();
                    dd=today.getDate()+1;
                    mm=today.getMonth()+1;
                    yyyy=today.getFullYear();
                    return mm+ "-" +dd+ "-"+yyyy;
                }

                </script>

            <!--------------------------------------------------------Lahir----------------------------------------------------------------------------------->
            <div class="form-group row mt-2">
                <label class="col-sm-2 col-form-label">Lahir</label>
                <div class="col-sm">
                    <input type="date" class="form-control" min={this.disableDates()} onchange={this.selDate} name="Lahir" placeholder="Lahir" style="width: 100%;"
                        required oninvalid="this.setCustomValidity('tanggal lahir tidak boleh kosong')"
                        oninput="setCustomValidity('')">
                </div>
            </div>

            <!--------------------------------------------------------Kelamin----------------------------------------------------------------------------------->

            <div class="form-group row mt-2">
                <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                <div class="col-sm">
                    <select name="Kelamin" class="form-control " required style="width: 100%; font-size: 14px; border: 1px solid #ced4da;"
                        oninvalid="this.setCustomValidity('jenis kelamin tidak boleh kosong')"
                        oninput="setCustomValidity('')">

                        <option selected value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki
                        </option>
                        <option value="perempuan">Perempuan
                        </option>
                    </select>
                </div>
            </div>

            <!--------------------------------------------------------Telepon----------------------------------------------------------------------------------->
            <div class="form-group row mt-2">
                <label class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm">
                    <input type="tel" class="form-control" id="notelp" name="Telepon" style="width: 100%;"
                        placeholder="Nomor Telepon (Aktif)" minlength="4" maxlength="13"
                        oninvalid="this.setCustomValidity('nomer telepon harus berupa Angka')"
                        oninput="setCustomValidity('')" required>
                </div>
            </div>

            <!--------------------------------------------------------pilih layanan----------------------------------------------------------------------------------- -->
            <div class="form-group row mt-2">
                <label class="col-form-label col-sm-2 pt-0">Layanan</label>
                <div class="col-sm">
                    <select name="layanan" class="form-control " required style="width: 100%; font-size: 14px; border: 1px solid #ced4da;"
                        oninvalid="this.setCustomValidity('pilih layanan dahulu')"
                        oninput="setCustomValidity('')">
                        <option value="">Pilih Layanan</option>
                        <option value="Umum">Umum</option>
                        <option value="Asuransi">Asuransi</option>
                    </select>
                </div>
            </div>
            <!--------------------------------------------------------rekam medis----------------------------------------------------------------------------------- -->
            <div class="form-group row mt-2">
                <label class="col-sm-2 col-form-label">Keluhan</label>
                <div class="col-sm">
                    {{-- <input type="text" class="form-control" name="RekamMedis"
                        placeholder="Anda sakit apa, dan sudah berapa lama?"> --}}
                    <textarea type="text" name="RekamMedis" class="form-control" cols="30" rows="5" style="width: 100%;"
                        placeholder="Jelaskan keluhan anda, dan sudah berapa lama?" required
                        oninvalid="this.setCustomValidity('jelaskan dahulu...')" oninput="setCustomValidity('')"></textarea>
                </div>
            </div>

            <!--------------------------------------------------------pilih dokter----------------------------------------------------------------------------------- -->
            <div class="form-group row mt-2">
                <label class="col-form-label col-sm-2 pt-0">Dokter</label>
                <div class="col-sm">
                    <select name="doktor" class="form-control " required style="width: 100%; font-size: 14px; border: 1px solid #ced4da;"
                        oninvalid="this.setCustomValidity('Silahkan pilih dokter yang tersedia')"
                        oninput="setCustomValidity('')">
                        <option value="">Pilih Dokter</option>
                        @foreach ($dokter as $row)
                        <option {{ $row->jadwal->jadwalpraktek == 'LIBUR' ? 'disabled' : ''}} {{ $row->jadwal->jadwalpraktek == 'CUTI' ? 'disabled' : ''}} value="{{ $row->id }}">
                                {{ $row->nama }}({{ $row->poli == '' ? '-' : $row->poli->name }}) |
                                {{ $row->jadwal == '' ? 'Belum ada Jadwal' : $row->jadwal->jadwalpraktek }}

                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!--------------------------------------------------------pilih dokter----------------------------------------------------------------------------------- -->
            <div class="mt-2 d-flex justify-content-center" required>
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            </div>
        </div>
        <div class="modal-footer">
            <input type="checkbox" id="check" onclick="enable()">
<label style="color:RED;"> Data yang diisi Benar</label><br>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <button id="btn" disabled="True" type="submit" class="btn btn-primary">Daftar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
    <!-- Daftar Pasien Modal -->

    <!-- Antrian -->


    <!--------------------------------------------------------modal kartu antrian----------------------------------------------------------------------------------->
    <div class="modal fade" id="antrian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div id="kartuantrian">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                           Klinik Tongpang
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="h3">Nomor Antrian : <span
                                class="text-primary">{{ Session::has('nomorAntrian') ? Session::get('nomorAntrian') : '' }}</span>
                        </p>
                        <p class="h3">Atas Nama : <span
                                class="text-primary">{{ Session::has('nama') ? Session::get('nama') : '' }}</span></p>
                        <p>Daftar pada jam : <span
                                class="text-primary">{{ Session::has('timestamps') ? Session::get('timestamps') : '' }}</span>
                            </p>

                        <!-- estimasi tunggu jam -->
                            <p>Mohon Tunggu Jam : <span
                                    class="h3 text-primary">{{ Session::has('jadwalkedatangan') ? Session::get('jadwalkedatangan') : '' }}</span>
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

    <!--------------------------------------------------------modal error----------------------------------------------------------------------------------->
    <div class="modal fade" id="error" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="antrianLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div id="kartuantrian">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <img src="{{ asset('img/logo.png') }}" style=”float:left;
                                width="55";height="55"” />Klinik Tongpang
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

        <!-- Fungsi checklist / checkbox daftar -->
<script>
    function enable(){
    var check = document.getElementById("check");
    var btn = document.getElementById("btn");
    if (check.checked) {
    btn.removeAttribute("disabled");
    } else {
    btn.disabled = "true";
    }
    }
    </script>

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
            html2canvas(document.querySelector('#kartuantrian')).then(function(canvas) {

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
