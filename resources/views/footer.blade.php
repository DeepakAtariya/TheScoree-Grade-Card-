<link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">
<style>
#developer{
  font-size:8px;
}

</style>
<div class="container-fluid" id="footer">
    <div class="row" id="footer_row" >
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <ul class="list-inline" id="left">
              <li><a href="{{ url('about') }}" data-toggle="modal"  href='#modal-about'> &#8226; About & Releases</a></li>
              <!-- <li><a href="{{ url('contribute') }}"  data-toggle="modal"  href='#modal-id'> &#8226; Contribute</a></li> -->
              <li><a href="{{ url('disclaimer') }}"  data-toggle="modal"  href='#modal-id'> &#8226; Disclaimer</a></li>
              <li><a href="{{ url('privacypolicy') }}"  data-toggle="modal"  href='#modal-id'> &#8226; Privacy Policy</a></li>
              <li><a href="{{ url('contactus') }}"  data-toggle="modal"  href='#modal-id'> &#8226; Contact Us</a></li>

            </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <ul class="list-inline" id="right">
              <li><a href="https://github.com/DeepakAtariya" target="_blank" id="developer"> Developed by Deepak </a></li>
              <!-- <li><a href="http://codolic.com/deepakatariya" target="_blank" style="font-size:9px;" >By Deepak Atariya</a></li> -->
              <li><a href="https://www.instagram.com/thescoree_/?hl=en" class="fa fa-instagram" target="_blank"></a></li>
              <li><a href="https://www.facebook.com/thescoree127/" class="fa fa-facebook" target="_blank"></a></li>
            </ul>
      </div>
</div>
  </body>
</html>



