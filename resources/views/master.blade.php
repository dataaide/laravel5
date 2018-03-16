<!doctype html>
<html lang="fr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DataAide</title>

    <style>


        body {
            background-color: #ccccff;
        }
        .padding-100 {
            padding-top: 100px;
        }

        .padding-50 {
            padding-bottom: 50px;
        }
    </style>    

  </head>

<body>

<!-- navbar -->    
@include('_navbar')

<!-- Main -->
@yield('content')

<!-- footer -->
@include('_footer')
