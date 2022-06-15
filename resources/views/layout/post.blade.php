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
                background-attachment: absolute;
                background-image: linear-gradient(to bottom, #0B50F0, #205A73, #FFC300 ); ;
                font-family: Montserrat;
            }
            .container{
                background-color:white;
                width:70%;
                border-radius:20px;
                text-align:justify;
                margin-left:50px;
                padding-left:50px;
                padding-right:70px;
                padding-bottom:40px;
                box-shadow:0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15); 

            }
            .scrolling-wrapper {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                
            }
            .header{
                font-size:40px;
                font-weight:bold;
                color:white;
                margin-right:400px;
                padding-top:40px;
                padding-left:40px;
            }
        </style>
    </head>
    <body>

        <div id="main">
            @include('layout.navbar')
            
            @yield('body')
            @include('layout.bottom')
        </div>
    </body>
        
    </html>
