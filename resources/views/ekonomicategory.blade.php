@extends('layout.main')
@section('body')

<a href="/">
<img src="{{ asset('img/iconHome.png') }}" width="50px" style="float:left; margin-left:75px">
</a>

<div style="font-family:Roboto;color:white;font-weight:bold;font-size:25px;float:left;padding-top:10px;padding-left:25px">
Kategori yang dipilih : 
</div>
<form action="/category/ekonomi">
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
                
                    Ekonomi
                
                </button>
                </form> 
<div style="padding:10px">

    <nav>
    <ul class="nav">
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi1.jpg') }}" width="175px">
                        <h5>Pertumbuhan Ekonomi Surabaya Lampaui Nasional</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis enim cum alias distinctio eligendi consectetur? Architecto quasi voluptatum maxim Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, rem libero nulla maxime officia odio Lorem ipsum dolor sit, amet. 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="ekonomi/1" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi2.jpg') }}" width="175px">
                        <h5>Pertumbuhan Ekonomi Jatim Lebih Tinggi daripada Capaian Nasional</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis lacus nec neque laoreet, eu faucibus nulla bibendum. Pellentesque ac hendrerit ante. Morbi imperdiet nisl id massa tempus egestas. Duis metus arcu, molestie ac convallis sit amet, tristique.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="/category/ekonomi/2" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi3.jpg') }}" width="175px">
                        <h5>Kunci Keberlanjutan Pertumbuhan Ekonomi Jatim</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales urna felis, eget mollis nulla cursus vel. Nulla eu turpis sit amet tortor iaculis bibendum. Nunc auctor volutpat eros, egestas sodales erat mattis ac. Pellentesque faucibus mi faucibus, accumsan Lorem, ipsum dolor.. 
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="ekonomi/3" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi4.jpg') }}" width="175px">
                        <h5>Semester I/2022, Realisasi Belanja APBN KPPN Malang Rp3,32 Triliun</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc neque turpis, porta quis auctor eget, volutpat luctus dui. Praesent ut laoreet augue, sit amet venenatis felis. In a pharetra quam, nec feugiat dui. Fusce maximus interdum rutrum. Phasellus. Lorem, ipsum.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="ekonomi/4" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi5.jpg') }}" width="175px">
                        <h5>Perekonomian Kota Surabaya Terbesar di Jawa Timur pada 2020</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget varius dui, et sagittis tellus. Vivamus cursus quam at tellus congue, quis faucibus orci vestibulum. Suspendisse feugiat egestas dapibus. Aenean bibendum eget lacus vel Lorem, ipsum. lorem pharetra. Lorem ipsum dolor.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="ekonomi/5" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi6.jpeg') }}" width="175px">
                        <h5>Ekonomi Jatim Tumbuh 5,20 Persen Kuartal I – 2022, di Atas Pertumbuhan Nasional 5,01 Persen</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum elit. In id euismod mi. Suspendisse vitae elit facilisis, egestas mauris dignissim, gravida velit. Nunc lobortis massa dolor, sit amet viverra odio finibus sit amet. Ut consectetur tellus.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="ekonomi/6" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi7.jpg') }}" width="175px">
                        <h5>25 Persen Ekonomi Jatim Berasal dari Surabaya, Ini Penyumbang PAD Terbesar</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod convallis libero, a mollis nulla fermentum a. Nunc sem magna, condimentum vitae mi eget, pulvinar ornare sem. Pellentesque ornare gravida massa sit amet pulvinar.
                <br>
                    <span style="float:right;opacity:55%;text-decoration:underline">
                    <a href="ekonomi/7" >
                        Baca Selengkapnya
                    </a>
                    </span>
                <br>
                </div>
            </li>
            <li>
                <div style="margin:35px;width:300px;background-color:white;border-radius:20px;padding:20px;text-align:left;color:black;text-decoration: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <center>
                        <img src="{{ asset('img/ekonomi2.jpg') }}" width="175px">
                        <h5>Khofifah Bersyukur Ekonomi Jatim Tumbuh di Atas Nasional</h5>
                    </center>
                    <p style="opacity: 75%; font-size:15px">31-Mei-2022</p>
                    <hr>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in dignissim sem. Morbi porta at lectus sed iaculis. Fusce porta purus ac condimentum vitae semper rutrum. In et rhoncus risus, vel pretium orci. Nullam felis neque, mattis ac
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