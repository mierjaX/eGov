@extends('layout.main')
@section('body')

<a href="/">
<img src="{{ asset('img/iconHome.png') }}" width="50px" style="float:left; margin-left:300px;padding-top:40px">
</a>
<div class="search-button" style="margin-top:40px">
        <input type="text" style="border:none ;width:670px">
        <div style="float:right">
            <form action="/notfound">
            <button style="border:0;background-color:white;"> <img src="{{ asset('img/logoCari.png') }}" width="25px"> </button> </form>
        </div>
</div>
<nav>
    <div style="margin-top:50px; font-family:'Roboto'; height: 30ch;">
        <h3 style="text-align: center; color:white"><b>Hasil Pencarian :</b></h3>
        <br><br>
        <h2 style="text-align: center; color:white"><b>Maaf informasi yang anda cari tidak ditemukan</b></h2>
    </div>
</nav>
@endsection