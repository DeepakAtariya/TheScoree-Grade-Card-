<div id="divLoading" style="margin: auto; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(15, 15, 17); z-index: 30001; opacity: 0.3;display: none;">
    <p style="position: absolute; color: white; font-weight: bold; top: 45%; margin-left: 50%;">
      
      <img src="https://timesheet.teri.res.in/images/ajax-loading.gif">
    </p>
  </div> 
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  </head>
  <body>

<div class="container-fluid" id="header">
<div class="row" id="header_row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <ul class="list-inline" id="left_header">
            <li><a href="{{ url('') }}"><i style="font-size: 22px;" class="fa fa-home"></i></a></li>
            <!-- <li><a routerLink="contribute">Contribute</a></li> -->
          </ul>
    </div>
    
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <ul class="list-inline" id="center">
            <li><span id="center_text">The Scoree</span></li>  
          </ul>
    </div>
    
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <ul class="list-inline" id="right_header">
          <li><span class="glyphicon glyphicon-th"></span></li>  
          <li></li>
        </ul>
    </div>
</div>
</div>

