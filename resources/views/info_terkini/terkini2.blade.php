@extends('layout.post')
@section('body')

<a href="/">
    <img src="{{ asset('img/iconHome.png') }}" width="50px" style="float:left; margin-left:40px; padding-top:40px">
</a>
<br><br><br>
<div class="header">
    Unesa Raih Rekor MURI Kerja Sama Terbanyak dengan 837 SMK se-Jatim
    <p style="opacity: 75%; font-size:15px; margin-left:3px">31-Mei-2022</p>
</div>

<div style="margin-left:55px; margin-bottom: 20px; margin-top:50px; color:white;">
    <img src="{{ asset('img/terkini2.jpeg') }}" width="500px">
        <br>
        Unesa raih Rekor MURI (Foto: Esti Widiyana/detikcom)
</div>
<div class="container">
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis sem sit amet maximus tristique. Phasellus vitae malesuada purus. Suspendisse vel ullamcorper leo. Integer rutrum dui a ante gravida porta. Sed tellus erat, rhoncus et odio condimentum, rhoncus placerat sem. Fusce sed semper orci, eu lacinia enim. Maecenas ut dui et turpis venenatis mattis a ac felis. Nunc non iaculis magna. Nulla eget leo eu nulla egestas egestas. Phasellus eu maximus metus.    <br>
    <br>
    Cras porttitor orci et ante porttitor, sit amet vestibulum libero rutrum. Etiam viverra risus vel imperdiet semper. Nullam in orci euismod, cursus diam non, pharetra felis. Quisque blandit iaculis justo, sed bibendum tellus tristique sed. Quisque in mi justo. Praesent nunc ligula, interdum sit amet augue id, cursus pretium nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In hac habitasse platea dictumst. Donec convallis non lectus id laoreet. Vestibulum non erat et eros posuere mollis. Vivamus commodo malesuada turpis a facilisis. Aenean auctor nisl lectus, vitae placerat ligula fringilla vitae. Quisque quis elit nec dolor laoreet tincidunt. Integer laoreet, dolor a maximus luctus, purus nisi blandit ligula, ac aliquet velit metus ut sapien. Nulla gravida consequat velit, fringilla euismod diam finibus eget. Ut feugiat felis eu molestie lobortis.
</div>

<div class="header" style="font-size:30px">
    Artikel Terkait
</div>

<ul class="nav scrolling-wrapper">
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
            <a href="category/pendidikan/2" >
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
            <a href="category/pendidikan/3" >
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
            <a href="category/pendidikan/4" >
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
            <a href="category/pendidikan/5" >
                Baca Selengkapnya
            </a>
            </span>
        <br>
        </div>
    </li>
</ul>
@endsection