
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
  <link rel="icon" type="image/x-icon" href="{{ URL::asset('images/favicon.ico') }}">
<title>The Scoree - Check Ignou Results, grade card with new experience</title>


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">

<!-- <link rel="icon" type="image/png" sizes="32x32" href="http://ismartsolar.in/css/cropped-Teri-logoifavicon-2-32x32.png"> -->

<style>

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
            <li><span id="center_text"><a id="center_text" href="{{ url('') }}">The Scoree</a></span></li>    
          </ul>
    </div>
    
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <ul class="list-inline" id="right_header">
          <li>
            <!-- <span class="glyphicon glyphicon-th toggle"></span>
            <div id="target"></div> -->
              <!-- <div class="dropdown"> -->
                <!-- <button class="dropbtn">Dropdown</button> -->
                <span class="dropbtn glyphicon glyphicon-th toggle" style="font-size:18px;"></span>
                  <!-- <div class="dropdown-content">
                    <a href="#">Stay Tuned...</a>
                  </div> -->
              <!-- </div> -->
            </li>  
          <li></li>
        </ul>
    </div>
</div>
</div>



<script>
$('.toggle').click(function() {
    $('#target').toggle('slow');
});
</script>

