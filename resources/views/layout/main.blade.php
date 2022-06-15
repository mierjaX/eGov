<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Pusat Penyampaian Informasi
        </title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            #navbar{
                width:100%;
                height:96px;
                background-color:transparent;
            }
            /* .scrolling-wrapper {
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;

            .card {
                display: inline-block;
                }
            }
            .scrolling-wrapper-flexbox {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;

                .card {
                    flex: 0 0 auto;
                }
                }
                .scrolling-wrapper {
                -webkit-overflow-scrolling: touch;
                } */
            body{
                background-repeat:no-repeat;
                background-size:cover;
                background-attachment: fixed;
                background-image: url('https://sewabussurabaya.com/wp-content/uploads/2019/07/Lokasi-Tugu-Pahlawan-Surabaya.jpg');
                font-family: Montserrat;
            }
            footer {

                position: absolute;
                bottom: auto;
                width: 100%;
                background-color: #FFC300;
                color: black;
                padding:25px; 
                height:290px;
                }
            .scrolling-wrapper {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                
            }
            .search-button{
                border-radius:30px; 
                background-color:white;
                padding:15px;
                padding-left:25px;
                width:50%;
                margin-left:25%;
            }
        </style>
    </head>
    <body>

        <div id="main" style="background-color:rgba(0,0,0,.5)">
            @include('layout.navbar')
            @yield('body')
        </div>
    </body>
    @include('layout.bottom')
    
    
</html>
