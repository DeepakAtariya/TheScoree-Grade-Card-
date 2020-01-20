
<!DOCTYPE html>
<html lang="">
  <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144591904-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144591904-1');
</script>

<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MWXS75V');</script> -->
<!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta data-rh="true" name="theme-color" content="#000000" />
    <meta data-rh="true" property="og:site_name" content="TheScoree" />
    <meta data-rh="true" property="og:type" content="Notes" />
 
    <meta data-rh="true" name="robots" content="index,follow" />

  <link rel="icon" type="image/x-icon" href="{{ URL::asset('images/favicon.ico') }}">

@php

$current_url = url()->current();
$title = $unit_data[0]->unit_name;

@endphp

    <title>{{ $title }}</title>
    <meta name='description' content='{{ substr(strip_tags($unit_data[0]->unit_description),50) }}'>
    <meta name='keyword' content=''>
    <meta data-rh="true" name="title" content="{{$title}}" />
    <meta data-rh="true" property="og:title" content="{{$title}}" />
    <meta data-rh="true" property="twitter:title" content="{{$title}}" />
    <meta data-rh="true" name="description" content="{{$title}}" />
    <meta data-rh="true" property="og:description" content="{{ $title}}" />
    <meta data-rh="true" property="og:url" content="{{$current_url}}" />
    <meta data-rh="true" property="al:web:url" content="{{$current_url}}" />
    <meta data-rh="true" property="og:image" content="https://thescoree.com/images/grade_card_resized.png" />


<!-- termendform -->




<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/notes4user.css') }}">

<!-- <link rel="icon" type="image/png" sizes="32x32" href="http://ismartsolar.in/css/cropped-Teri-logoifavicon-2-32x32.png"> -->

<style>

body{
  font-family : medium-content-serif-font, Georgia, Cambria, "Times New Roman", Times, serif
}

#target {
  background:#0099cc;
  width:300px;
  height:300px;
  height:160px;
  padding:5px;
  display:none;
}

.dropbtn {
  /* background-color: #4CAF50; */
  color: white;
  /* padding: 16px; */
  font-size: 19px;
  border: none;
}

.glyphicon{
  font-size:19px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  /* min-width: 160px; */
  /* width:150px; */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  /* z-index: 1; */
  /* margin-right:50px; */
  /* padding-left:100px; */
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>

  </head>
  <body>

  <div id="divLoading" style="margin: auto; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(15, 15, 17); z-index: 30001; opacity: 0.3;display: none;">
    <p style="position: absolute; color: white; font-weight: bold; top: 45%; margin-left: 50%;">
      
      <img src="https://timesheet.teri.res.in/images/ajax-loading.gif">
    </p>
  </div> 

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWXS75V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="main_tmp">


<div class="container-fluid" id="header">
<div class="row" id="header_row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <ul class="list-inline" id="left_header">
            <li class="list-inline-item"><i class="fa fa-bars" onclick="openNav()"> <span style="color:black">SCOREE</span></i></li>
            <!-- <li class="list-inline-item">SCOREE</li> -->
            <!-- <li><a routerLink="contribute">Contribute</a></li> -->
          </ul>
    </div>
    
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <!-- <ul class="list-inline" id="center">
            <li><span id="center_text"><a id="center_text" href="{{ url('') }}">The Scoree</a></span></li>    
          </ul> -->
    </div>
    
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <ul class="list-inline" id="left_header">
        <!-- <li class="list-inline-item"><i class="fa fa-bars" onclick="openNav()"></i></li> -->
        <!-- <li class="list-inline-item">SCOREE</li> -->
      </ul>
    </div>
</div>
</div>

<div id="mySidenav" class="sidenav">
  <br>
  <!-- <span class="closebtn" style="margin-right:50px;">dasda</span> -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="{{ url('') }}" class="option">Home</a><hr>
  <a href="{{ url('notes') }}" class="option">IGNOU Notes</a><hr>
  <a href="{{ url('about') }}" class="option">About Us</a><hr>
  <a href="{{ url('contactus') }}" class="option">Contact Us</a><hr><br>
  <!-- <ul class="list-inline" id="sidebar_part">
    <li>Disclaimer</li>

    <li>Privacy Policy</li>
  </ul> -->

  
</div>


<!-- Toggle button perform two function in single event -->



<script>
$('.toggle').click(function() {
    $('#target').toggle('slow');
});


/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  if(document.getElementById("mySidenav").style.width == "250px"){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main_tmp").style.marginLeft = "0";
  }else{
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main_tmp").style.marginLeft = "250px";
  } 
  // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  // document.getElementById('header_row').style = "background:rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main_tmp").style.marginLeft = "0";
  // document.body.style.backgroundColor = "white";
  // document.getElementById('header_row').style = "background:white";
}

</script>






