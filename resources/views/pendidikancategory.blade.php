@extends('layout.main')
@section('body')

<a href="/">
<img src="{{ asset('img/iconHome.png') }}" width="50px" style="float:left; margin-left:75px">
</a>

<div style="font-family:Roboto;color:white;font-weight:bold;font-size:25px;float:left;padding-top:10px;padding-left:25px">
Kategori yang dipilih : 
</div>
<form action="/category/pendidikan">
                <button style="border:0;
                                margin-top:10px;
                                margin-left:25px;
                                width:210px;
                                background-color:white;
                                border-radius:20px;
                                text-align:center;
                                color:black;
                                text-decoration: none;
                                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                font-size:25px;
                                font-weight:bold;">
                    Pendidikan
                </button>
                </form> 
<div style="padding:10px">

    <nav>
    <ul class="nav">
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/pendidikan1.jpeg') }}" width="175px">
                        <h5>10 Tahun Era Kepemimpinan Risma, Begini Mutu Pendidikan di Surabaya</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis enim cum alias distinctio eligendi consectetur? Architecto quasi voluptatum maxim Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, rem libero nulla maxime officia odio Lorem ipsum dolor sit, amet. 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="pendidikan/1" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/pendidikan2.jpeg') }}" width="175px">
                        <h5>Kinerja Pendidikan Jawa Timur Tertinggi di Indonesia</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis lacus nec neque laoreet, eu faucibus nulla bibendum. Pellentesque ac hendrerit ante. Morbi imperdiet nisl id massa tempus egestas. Duis metus arcu, molestie ac convallis sit amet, tristique.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="pendidikan/2" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/pendidikan3.jpg') }}" width="175px">
                        <h5>Khofifah Minta Sekolah Tak Wajibkan Siswa Ikut PTM Terbatas</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales urna felis, eget mollis nulla cursus vel. Nulla eu turpis sit amet tortor iaculis bibendum. Nunc auctor volutpat eros, egestas sodales erat mattis ac. Pellentesque faucibus mi faucibus, accumsan Lorem, ipsum dolor.. 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="pendidikan/3" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/pendidikan4.jpg') }}" width="175px">
                        <h5>Pemprov Jatim Imbau Sekolah di Wilayah PPKM Level 2 Terapkan PTM 50 Persen</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc neque turpis, porta quis auctor eget, volutpat luctus dui. Praesent ut laoreet augue, sit amet venenatis felis. In a pharetra quam, nec feugiat dui. Fusce maximus interdum rutrum. Phasellus. Lorem, ipsum.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="pendidikan/4" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/pendidikan5.jpg') }}" width="175px">
                        <h5>Kapan Masuk Sekolah Tahun Ajaran Baru 2022/2023 Wilayah Jawa Tengah, Jawa Timur, dan Jawa Barat</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget varius dui, et sagittis tellus. Vivamus cursus quam at tellus congue, quis faucibus Suspendisse feugiat egestas dapibus. Aenean bibendum eget lacus vel Lorem, ipsum. lorem pharetra. Lorem ipsum dolor.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="pendidikan/5" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/pendidikan6.jpeg') }}" width="175px">
                        <h5>Jatim Perbolehkan SMA 20 Kabupaten/Kota Belajar Tatap Muka</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum elit. In id euismod Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis commodi sit numquam molestias animi nisi voluptates voluptatibus placeat quod corrupti mi. Suspendisse vitae elit facilisis, egestas mauris dignissim, gravida velit. Nunc lobortis massa dolor, sit amet viverra odio finibus sit amet. Ut consectetur tellus.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="pendidikan/6" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/pendidikan7.jpg') }}" width="175px">
                        <h5>Jatim Tak Perpanjang Libur Sekolah seperti Jabar dan DKI Jakarta, Siswa Tetap Masuk Senin 9 Mei</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod convallis libero, a mollis nulla fermentum a. Nunc sem magna, condimentum vitae mi eget, pulvinar ornare sem. Pellentesque ornare gravida massa sit amet pulvinar. Lorem ipsum dolor sit amet.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="pendidikan/7" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/pendidikan8.jpg') }}" width="175px">
                        <h5>Jos! SMA di Jawa Timur Ini Masuk 10 Sekolah Terbaik Nasional</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, harum. adipiscing elit. Suspendisse in dignissim sem. Morbi porta at lectus sed iaculis. Fusce porta purus ac condimentum vitae semper rutrum. In et rhoncus risus, vel pretium orci. Nullam felis neque, mattis ac
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="ekonomi/8" >
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