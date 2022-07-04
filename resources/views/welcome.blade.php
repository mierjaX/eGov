@extends('layout.main')
@section('body')
<div style="width: 550px;padding: 25px;;position: absolute; top: 30%; transform: translate(-50%, -50%); left: 50%;border-radius:30px">
    <h2 style="text-align:center;font-weight:bold;color:white;font-family:Roboto">
        PUSAT INFORMASI <br>PROVINSI JAWA TIMUR
    </h2><br>
    <div style="border-radius:30px; background-color:grey;">
        <input type="text" style="padding-left:15px;border:none;width:448px;text-decoration:none;height:40px;border-radius:30px;">
        <div style="float:right">
        <form action="/search">
        <button style="border:0;border-radius:30px;margin-top:5px;margin-right:7px;background-color:grey;"> <img src="{{ asset('img/logoCari.png') }}" width="25px"> </button> </form>
        </div>
    </div>
</div>  
<div style="width: 910px;padding: 15px;;position: absolute; top: 52%; transform: translate(-50%, -50%); left: 50%;border-radius:25px">
    <nav>
        <ul class="nav">
            <li>
                <form action="/category/ekonomi">
                <button style="border:0;margin:5px;width:210px;background-color:white;border-radius:20px;padding:5px;text-align:center;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size:25px;font-weight:bold">
                    Ekonomi
                </button>
                </form>
            </li>
            <li>
                <form action="/category/pendidikan">
                <button style="border:0;margin:5px;width:210px;background-color:white;border-radius:20px;padding:5px;text-align:center;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size:25px;font-weight:bold">
                    Pendidikan
                </button>
                </form>
            </li>
            <li>
                <form action="/category/covid">
                <button style="border:0;margin:5px;width:210px;background-color:white;border-radius:20px;padding:5px;text-align:center;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size:25px;font-weight:bold">
                    Info Covid
                </button>
                </form> 
            </li>
            <li>
                <form action="/category/transportasi">
                <button style="border:0;margin:5px;width:210px;background-color:white;border-radius:20px;padding:5px;text-align:center;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size:25px;font-weight:bold">
                    Transportasi
                </button>
                </form>
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
                <div style="margin:35px;height:650px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/terkini1.jpg') }}" width="175px" height="120px">
                        <br><br>
                        <h4>Langkah Pemprov Jatim Atasi Gelombang Ketiga Covid-19</h4>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at nisi interdum, imperdiet arcu ut, cursus lorem. Aenean vitae aliquam nulla, at pulvinar ex. Nulla dignissim mi justo, vitae aliquet augue luctus eget. In sit amet ipsum vel ligula vehicula Cras. Finibus hendrerit quam ac mollis... 
                    <br><br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                        <a href="/t1">Baca Selengkapnya</a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;height:650px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/terkini2.jpeg') }}" width="175px" height="120px">
                        <br><br>
                        <h4>Unesa Raih Rekor MURI Kerja Sama Terbanyak dengan 837 SMK se-Jatim</h4>
                    </center>
                    <p style="opacity: 75%; font-size:15px">16-Juni-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras finibus hendrerit quam ac mollis. Sed eget dapibus risus. Aliquam ullamcorper nibh nec augue consequat accumsan. Quisque tristique dapibus tellus, eget sodales lorem tempor sed. Phasellus id risus ut augue maximus sagittis... 
                    <br><br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                        <a href="/t2">Baca Selengkapnya</a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;height:650px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/terkini3.jpeg') }}" width="175px" height="120px">
                        <br><br>
                        <h4>Harga Cabai Rawit Makin 'Pedas', Wagub Emil Beberkan Penyebabnya</h4>
                    </center>
                    <p style="opacity: 75%; font-size:15px">20-Juni-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus bibendum dolor a vestibulum. Nullam dignissim sem nibh, ac lacinia est viverra eget. Aliquam erat volutpat. Nunc et dui leo. Pellentesque habitant morbi tristique senectus et netus... 
                    <br><br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                        <a href="/t3">Baca Selengkapnya</a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;height:650px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/terkini4.jpg') }}" width="175px" height="120px">
                        <br><br>
                        <h4>Pemkot Surabaya Pastikan Layanan TOB di Suroboyo Bus Berjalan Lancar</h4>
                    </center>
                    <p style="opacity: 75%; font-size:15px">24-Juni-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus odio et libero ullamcorper finibus. Duis ac leo blandit tortor convallis vehicula sed euismod eros. Pellentesque quis commodo arcu. Nulla elementum porttitor egestas. Aliquam tempus feugiat. Fusce maximus tortor sit... 
                    <br><br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                        <a href="/t4">Baca Selengkapnya</a>
                    </span>
                <br>
                </div>
            </li>
        </ul>
    </nav>
</div> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br> <br><br> 
@endsection