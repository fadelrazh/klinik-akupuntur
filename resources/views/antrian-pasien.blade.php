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
<body onload="initClock()">

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

    <div class="content text-center">
        <h3>Daftar Antrian</h3>
        <p><span id="dayname">Day</span>, <span id="month">Month</span> <span id="daynum">00</span>, <span id="year">Year</span></p>
        <p><span id="hour">00</span> :  <span id="minutes">00</span> : <span id="seconds">00</span><span id="period">AM</span></p>
    </div>

</section>

<section class="services" id="services">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-flush" id="products-list" style="font-size: 14px; width: 100%; border: 1px solid black">
                <thead class="thead-dark">
                    <tr style="border: 1px solid black; height: 40px;">
                        <th style="border: 1px solid black">No Antrian</th>
                        <th style="border: 1px solid black">Nama Pasien</th>
                        <th style="border: 1px solid black">Umur</th>
                        <th style="border: 1px solid black">Mendaftar Pada</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($datarekam as $row)
                        <tr style="border: 1px solid black">
                            <td style="border: 1px solid black; text-align: center;"> {{ $row->nomorantrian }} </td>
                            <td style="border: 1px solid black"> {{ $row->pasien->nama }}</td>
                            <td style="border: 1px solid black; text-align: center;"> {{ $row->pasien->lahir->age }} Tahun</td>
                            <td style="border: 1px solid black; text-align: center;"> {{ $row->updated_at->format('H:i:s -- d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
    @push('scripts')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

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

            setTimeout(function() {
                window.location.reload();
            }, 16000);
        </script>
    </body>
