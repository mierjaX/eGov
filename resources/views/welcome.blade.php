@extends('layout.main')
@section('body')
<div style="width: 500px;padding: 25px;;position: absolute; top: 30%; transform: translate(-50%, -50%); left: 50%;border-radius:30px">
    <h2 style="text-align:center;font-weight:bold;color:white;font-family:Roboto">
        PUSAT INFORMASI <br>PROVINSI JAWA TIMUR
    </h2>
    <div style="border-radius:30px; background-color:white;padding:15px;padding-left:25px">
        <input type="text" style="border:none ;width:370px">
        <div style="float:right">
        <form action="/search">
        <button style="border:0;background-color:white;"> <img src="{{ asset('img/logoCari.png') }}" width="25px"> </button> </form>
        </div>
    </div>
</div>  
<div style="width: 910px;padding: 15px;;position: absolute; top: 52%; transform: translate(-50%, -50%); left: 50%;border-radius:25px">
    <nav>
        <ul class="nav">
            <li>
                
                <div style="margin:5px;width:210px;background-color:white;border-radius:20px;padding:5px;text-align:center;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size:25px;font-weight:bold">
                    Ekonomi
                </div>
            </li>
            <li>
                <div style="margin:5px;width:210px;background-color:white;border-radius:20px;padding:5px;text-align:center;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size:25px;font-weight:bold">
                    Pendidikan
                </div>
            </li>
            <li>
                <form action="/category/covid">
                <button style="border:0;margin:5px;width:210px;background-color:white;border-radius:20px;padding:5px;text-align:center;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size:25px;font-weight:bold">
                
                    Info Covid
                
                </button>
                </form> 
            </li>
            <li>
                <div style="margin:5px;width:210px;background-color:white;border-radius:20px;padding:5px;text-align:center;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size:25px;font-weight:bold">
                    Transportasi
                </div>
            </li>
        </ul>
    </nav>
</div>  

<div style="color:white;font-weight:bold;font-family:Roboto;position: absolute; top: 65%; transform: translate(-50%, -50%); left: 50%;border-radius:15px; padding:15px;font-size:30px">
    INFO TERKINI
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div style="width: 100%;padding: 15px;;position: absolute;border-radius:25px">
    <nav>
        <ul class="nav scrolling-wrapper">
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi.jpg') }}" width="175px">
                        <h3>Pertumbuhan Ekonomi Surabaya</h3>
                    </center>
                    <hr><br>
                    Meski di tengah pandemi Covid-19, pada tahun 2021 pertumbuhan ekonomi Kota Surabaya, melampaui kinerja Jawa Timur dan bahkan Nasional. Peningkatan itu tercatat dari tahun 2020 terkontraksi minus 4,85 persen, kemudian melompat ke angka 4,29 persen pada... 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                        Baca Selengkapnya
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi.jpg') }}" width="175px">
                        <h3>Pertumbuhan Ekonomi Surabaya</h3>
                    </center>
                    <hr><br>
                    Meski di tengah pandemi Covid-19, pada tahun 2021 pertumbuhan ekonomi Kota Surabaya, melampaui kinerja Jawa Timur dan bahkan Nasional. Peningkatan itu tercatat dari tahun 2020 terkontraksi minus 4,85 persen, kemudian melompat ke angka 4,29 persen pada... 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                        Baca Selengkapnya
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi.jpg') }}" width="175px">
                        <h3>Pertumbuhan Ekonomi Surabaya</h3>
                    </center>
                    <hr><br>
                    Meski di tengah pandemi Covid-19, pada tahun 2021 pertumbuhan ekonomi Kota Surabaya, melampaui kinerja Jawa Timur dan bahkan Nasional. Peningkatan itu tercatat dari tahun 2020 terkontraksi minus 4,85 persen, kemudian melompat ke angka 4,29 persen pada... 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                        Baca Selengkapnya
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi.jpg') }}" width="175px">
                        <h3>Pertumbuhan Ekonomi Surabaya</h3>
                    </center>
                    <hr><br>
                    Meski di tengah pandemi Covid-19, pada tahun 2021 pertumbuhan ekonomi Kota Surabaya, melampaui kinerja Jawa Timur dan bahkan Nasional. Peningkatan itu tercatat dari tahun 2020 terkontraksi minus 4,85 persen, kemudian melompat ke angka 4,29 persen pada... 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                        Baca Selengkapnya
                    </span>
                <br>
                </div>
            </li>
        </ul>
    </nav>
</div> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br> <br><br> 
@endsection