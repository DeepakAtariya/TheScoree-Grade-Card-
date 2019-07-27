<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<div class="container-fluid" id="header">
<div class="row" id="header_row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <ul class="list-inline" id="left">
            <li><a routerLink=""><i style="font-size: 22px;" class="fa fa-home"></i></a></li>
            <!-- <li><a routerLink="contribute">Contribute</a></li> -->
          </ul>
    </div>
    
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <ul class="list-inline" id="center">
            <li><span id="center_text">The Score</span></li>  
          </ul>
    </div>
    
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <ul class="list-inline" id="right">
          <li><span class="glyphicon glyphicon-th"></span></li>  
          <li></li>
        </ul>
    </div>
</div>
</div>

