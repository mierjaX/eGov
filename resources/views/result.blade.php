@extends('layout.main')
@section('body')

<a href="/">
<img src="{{ asset('img/iconHome.png') }}" width="50px" style="float:left; margin-left:325px;padding-top:50px">
</a>
<div class="search-button" style="margin-top:55px">
    <input type="text" style="padding-left:15px;border:none;width:643px;text-decoration:none;height:45px;border-radius:30px;">
        <div style="float:right">
            <form action="/notfound">
            <button style="border:0;background-color:grey;border-radius:30px;margin-top:8px;margin-right:13px"> <img src="{{ asset('img/logoCari.png') }}" width="25px"> </button> </form>
        </div>
</div>  
    <nav>
        <div style="margin-top:70px; font-family:'Roboto'; ">
            <h3 style="text-align: center; color:white"><b>Hasil Pencarian :</b></h3>
            <br>
        </div>    
    <ul class="nav">  
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/kopit.png') }}" width="175px">
                        <h5>COVID-19 Hari Ini di Jatim, Kasus Aktif Terus Turun Hingga 90 Persen</h5>
                        
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Meski di tengah pandemi Covid-19, pada tahun 2021 pertumbuhan ekonomi Kota Surabaya, melampaui kinerja Jawa Timur dan bahkan Nasional. Peningkatan itu tercatat dari tahun 2020 terkontraksi minus 4,85 persen, kemudian melompat ke angka 4,29 persen pada... 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/covid/1" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="https://akcdn.detik.net.id/community/media/visual/2022/03/15/beda-pandemi-dengan-endemi-peralihan-transisi-yang-disiapkan-pemerintah_169.jpeg?w=700&q=90" width="200px">
                        <h5>Jumlah COVID-19 Terus Bertambah, Yuk Vaksin Booster di 30 Lokasinya</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">24-Juni-2022</p>
                    <hr>
                    <div style="padding-bottom:5px">
                    Menteri Koordinator Bidang Kemaritiman dan Investasi Luhut Binsar Panjaitan tengah mengkaji kemungkinan vaksin booster COVID-19 sebagai syarat perjalanan. Pasalnya, kasus COVID-19 di Indonesia terus mengalami kenaikan di bulan Juli.
                    </div>
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/covid/2" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="https://akcdn.detik.net.id/community/media/visual/2021/09/14/rs-lapangan-indrapura-rsli-2_43.jpeg?w=700&q=90" width="175px">
                        <h5>BOR COVID-19 Rendah, 3 RS Lapangan di Jatim Resmi Tak Beroperasi</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">4-July-2022</p>
                    <hr>
                    Tiga rumah sakit lapangan di Jawa Timur yang sebelumnya masih aktif, resmi tidak beroperasi. 3 RS Lapangan itu yakni RS Darurat Lapangan Bangkalan, RS Darurat Lapangan Joglo Dungus Madiun dan Rumah Sakit Darurat...
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/covid/3" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="https://akcdn.detik.net.id/community/media/visual/2022/03/13/ilustrasi-virus-corona-covid-19_43.jpeg?w=700&q=90" width="175px">
                        <h5>Kasus COVID-19 Jatim Naik, Satgas Minta Warga Lengkapi Vaksin</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">24-Juni-2022</p>
                    <hr>
                    
                    Diketahui, kasus aktif COVID-19 di Jatim sebanyak 220. Terbanyak ada di Kota Surabaya sebanyak 96 kasus aktif, kemudian Sidoarjo 23 kasus aktif, lalu Jombang 15 kasus aktif.
                    
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/covid/4" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="https://akcdn.detik.net.id/community/media/visual/2021/12/28/jumlah-kasus-omicron-di-indonesia-ada-47-kasus-ini-3-faktanya_43.jpeg?w=700&q=90" width="175px">
                        <h5>COVID-19 Kembali Merebak, Jatim Urutan ke-4 Terbanyak</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">15-Juni-2022</p>
                    <hr>
                    
                    COVID-19 di Indonesia kembali merebak. Kasus positif kini bertambah sebanyak 1.242 hari ini, Rabu (15/6/2022). Dari 34 provinsi, Jawa Timur berada di urutan ke-4 terbanyak, yakni sebanyak 63 kasus positif.
                    
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/covid/5" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="https://akcdn.detik.net.id/community/media/visual/2021/08/20/anggota-satgas-kuratif-covid-19-jatim-makhyan-jibril_169.jpeg?w=700&q=90" width="175px">
                        <h5>Detail Jumlah Pertambahan Kasus Baru COVID-19 di Jatim Selama Sepekan</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">15-Juni-2022</p>
                    <hr>
                    
                    Kasus COVID-19 Indonesia kembali naik. Jumlah kasus COVID-19 di Indonesia bertambah 1.242 kasus positif pada Rabu (15/6/2022). Sementara itu jumlah pasien sembuh bertambah 525, meninggal 8.
                    
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/covid/6" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="https://akcdn.detik.net.id/community/media/visual/2022/02/16/ppkm-jakarta-februari-2022_43.jpeg?w=700&q=90" width="175px">
                        <h5>Pamekasan Masih PPKM Level 3, Kenapa?</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">24-Mei-2022</p>
                    <hr>
                    
                    Pemerintah kembali memperpanjang pemberlakuan pembatasan kegiatan masyarakat (PPKM). Berdasarkan Inmendagri No 26-27 Tahun 2022, perpanjangan PPKM ini berlaku mulai hari ini, Selasa (24/5/2022) hingga 6 Juni 2022.
                    
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/covid/7" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="https://akcdn.detik.net.id/community/media/visual/2022/04/04/aturan-mudik-2022-boleh-tidak-tes-covid-19-asal_169.png?w=700&q=90" width="175px">
                        <h5>PPKM Level 1-3 Diperpanjang, Simak Detail Lengkap di 38 Kab/Kota Jatim</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">24-Mei-2022</p>
                    <hr>
                    
                    Pemerintah kembali memperpanjang pemberlakuan pembatasan kegiatan masyarakat (PPKM). Berdasarkan Inmendagri Nomor 26 dan Nomor 27 Tahun 2022, perpanjangan PPKM mulai berlaku 24 Mei 2022 hingga 6 Juni 2022.
                    
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/covid/8" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
        </ul>
    </nav>
</div>
@endsection