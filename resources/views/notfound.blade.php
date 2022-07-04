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
    <div style="margin-top:70px; font-family:'Roboto'; height: 30ch;">
        <h3 style="text-align: center; color:white"><b>Hasil Pencarian :</b></h3>
        <br><br>
        <h2 style="text-align: center; color:white"><b>Maaf informasi yang anda cari tidak ditemukan</b></h2>
    </div>
</nav>
@endsection