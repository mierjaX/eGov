@extends('layout.post')
@section('body')

<a href="/">
    <img src="{{ asset('img/iconHome.png') }}" width="50px" style="float:left; margin-left:40px; padding-top:40px">
</a>
<br><br><br>
<div class="header">
    Semester I/2022, Realisasi Belanja APBN KPPN Malang Rp3,32 Triliun
    <p style="opacity: 75%; font-size:15px; margin-left:3px">31-Mei-2022</p>
</div>

<div style="margin-left:55px; margin-bottom: 20px; margin-top:50px; color:white;">
    <img src="{{ asset('img/ekonomi4.jpg') }}" width="500px">
        <br>
        Ilustrasi uang rupiah pecahan Rp100.000 dan Rp50.000. - Bisnis
</div>
<div class="container">
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique mattis molestie. Aenean interdum ante nec lobortis finibus. Curabitur dictum ullamcorper dignissim. Quisque sed cursus erat, non imperdiet est. Vestibulum et libero ornare, molestie ligula et, vehicula nulla. Nulla facilisi. In at nulla sit amet nibh elementum tempor. Aliquam vel tortor purus. Ut mauris est, ornare vel egestas eget, aliquam quis diam. Nulla metus magna, fermentum ac luctus eget, volutpat quis urna. Nam vehicula elit eu ligula cursus molestie. Mauris sit amet odio convallis, lobortis orci quis, volutpat justo. Praesent nec odio erat. In hendrerit nunc libero, nec vulputate mauris ullamcorper nec. Aliquam sodales mi eget felis suscipit, in maximus mi dignissim. Suspendisse id euismod libero, at iaculis mauris.
    <br>
    <br>
    Aliquam nec tortor quis orci commodo cursus. Ut tristique ultricies justo. Praesent suscipit turpis in nisi laoreet interdum. Fusce elementum erat ac sollicitudin iaculis. Aliquam erat volutpat. Praesent ut justo nibh. Pellentesque porta convallis cursus. Sed tempor leo nunc, eget varius enim vehicula eget.
</div>

<div class="header" style="font-size:30px">
    Artikel Terkait
</div>


<ul class="nav scrolling-wrapper">
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
            <a href="5" >
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
            <a href="6" >
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
            <a href="7" >
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
            <a href="8" >
                Baca Selengkapnya
            </a>
            </span>
        <br>
        </div>
    </li>
</ul>
@endsection