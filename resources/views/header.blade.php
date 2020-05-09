

<!DOCTYPE html>

<html lang="">

  <head>

  @php
  $current_url = url()->current();
  //echo strlen($current_url);
  @endphp 

  @if(strlen($current_url) != 21)
      <!-- Google ads code -->
      
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-6203486592623594",
              enable_page_level_ads: true
         });
    </script>


<script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>
  @endif

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



if(strpos($current_url,"contactus") > 0){

  echo "<title>Contact - Contact us to give your suggestions, the scoree tries best to make your experience better</title>  ";

  echo "<meta name='description' content='Please feel free to write scoree anytime, we wil ensure you for better resolution '>";

  $title = "Contact - Contact us to give your suggestions, the scoree tries best to make your experience better";

}elseif(strpos($current_url,"about") > 0){

  echo "<meta name='description' content='Scoree is the platform where ignou student can perpare for the ignou exam by reading comprehensive ignou notes. Scoree keeps the track of your weak points by your grade card and provide you helpful material to prepare for ignou exams.'>";

  echo "<title>About - The Scoree - Read about the scoree, releases and contact for improvements</title>";

  $title = "About - The Scoree - Read about the scoree, releases and contact for improvements";

}elseif(strpos($current_url,"privacypolicy") > 0){

  echo "<meta name='description' content='At thescoree.com, accessible from thescoree.com , one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by thescoree.com and how we use it. If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at admin@thescoree.com'>";

  echo "<title>Privacy policy - The Scoree - Read the privacy policy for awareness, what and how do we work</title>";

  $title = "Privacy policy - The Scoree - Read the privacy policy for awareness, what and how do we work";

}elseif(strpos($current_url,"disclaimer") > 0){

  echo "<meta name='description' content='The Scoree application is a free web application for the students of IGNOU. The information on this website is published for general information purpose only. The Scoree application does not guarantee the correctness, completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (https://www.thescoree.com), is strictly at your own risk. The Scoree application will not be liable for any losses and/or damages in connection with the use of our website. Whenever we update, amend or make any changes to this document, those changes will be prominently posted here.'>";

  echo "<title>Disclaimer - The Scoree - Read the disclaimer carefully for following things thescoree is not responsible.</title>";

  $title = "Disclaimer - The Scoree - Read the disclaimer carefully for following things thescoree is not responsible.";

}elseif(strpos($current_url,"contribute") > 0){

  

  echo "<title>Contribute - The Scoree - Developers are everyone who keeps the idea to develop anything. We would like to hear from them.</title>";

  $title = "Contribute - The Scoree - Developers are everyone who keeps the idea to develop anything. We would like to hear from them.";

}elseif(strpos($current_url,"scores") > 0){

  echo "<meta name='description' content='Ignou Grade Card - The Scoree - Shows the ignou grade card with more indicators and mobile friendly. Scoree indicates the awaited and disqualified results seperately and provide you links to work on your weak points'>";

  echo "<title>Grade Card - The Scoree - Shows the grade card with more indicators and mobile friendly.</title>";

  $title = "Grade Card - The Scoree - Shows the grade card with more indicators and mobile friendly.";

}elseif(strpos($current_url,"termendresults") > 0 || strpos($current_url,"termend") > 0){

  echo "<title>Term End Exam Results December 2019! The Scoree - Shows the term end exam results with more indicators and mobile friendly.</title>";

  $title = "Term End Exam Results December 2019! The Scoree - Shows the term end exam results with more indicators and mobile friendly.";

}elseif(strpos($current_url,"units") > 0 ){

  echo "<meta name='description' content='Units - IGNOU Notes or reference study material available for given programmes'>";

  echo "<title>Units - Notes or reference study material available for given programmes</title>";

  $title = "Units - Notes or reference study material available for given programmes";

}elseif(strpos($current_url,"view") > 0 ){

  echo "<title>Unit Description - unit description, application and important questions</title>";

  $title = "Unit Description - unit description, application and important questions";

}elseif(strpos($current_url,"notes") > 0 ){

  echo "<meta name='description' content='IGNOU Programme List - IGNOU Notes or reference ignou study material available for given ignou programmes'>";

  echo "<title>Programme List - Notes or reference study material available for given programmes</title>";

  $title = "Programme List - Notes or reference study material available for given programmes";

}else{

  echo "<meta name='description' content='The Scoree - Prepare yourself by studying from ignou notes provided by thescoree and get boost in your scores , interactive gradecard will help you to work on your weak points'>";

  echo "<title>The Scoree - Check your grade card with Scoree.  </title>";

  $title = "The Scoree - Check your grade card with Scoree.";

}





@endphp

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
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWXS75V"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

  @php
    $current_url = url()->current();
  @endphp

    @if(strlen($current_url) != 21)
<amp-auto-ads type="adsense"
  data-ad-client="ca-pub-6203486592623594">
</amp-auto-ads>
    @endif






  <div id="divLoading" style="margin: auto; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(15, 15, 17); z-index: 30001; opacity: 0.3;display: none;">

    <p style="position: absolute; color: white; font-weight: bold; top: 45%; margin-left: 50%;">

      

      <img src="https://timesheet.teri.res.in/images/ajax-loading.gif">

    </p>

  </div> 






<div id="main_tmp">





<div class="container-fluid" id="header">



</div>




<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <i class="fa fa-bars"> <span style="color:black"></span></i>

      </button>
      <!-- <a class="navbar-brand " href="#" onclick="openNav()"> <span class="custom-brand glyphicon glyphicon-th">  </span></a> -->
      <a class="navbar-brand " href="{{ url('') }}" > <span class="custom-brand"> SCOREE </span> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class=""> <a href="{{ url('') }}">Home</a> </li>
        <li class=""> <a href="https://thescoree.com/contactus">Contact Us</a> </li>
        <li class=""><a href="https://thescoree.com/privacypolicy"> Privacy Policy </a></li>
        <li class=""><a href="https://thescoree.com/disclaimer"> Disclaimer </a></li>
        <li class=""><a href="https://thescoree.com/about">About</a></li>
      </ul>
    </div>
  </div>
</nav> 
 




<div id="mySidenav" class="sidenav">
  <h2 class="text-center option" style="color:white">Our Planets</h2>
  <br>

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="https://solvedignouassignments.thescoree.com/" target="_blank" class="option ">
  <div class="planet">
    <span class="text-adjustment text-center">
    IGNOU ASSIGNMENTS <br> THESCOREE <br>
    </span> 
  </div>
  </a>
<!-- 
  <a href="{{ url('notes') }}" class="option">IGNOU Notes</a><hr>

  <a href="{{ url('about') }}" class="option">About Us</a><hr>

  <a href="{{ url('contactus') }}" class="option">Contact Us</a><hr><br> 
-->

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













