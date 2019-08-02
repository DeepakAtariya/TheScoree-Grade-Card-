@include('header')

<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
<div class="text-center" id="main" style="padding: 2%;">
    <div class="row" id="row">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-10 col-lg-10 col-md-10 col-sm-10 ">
            <table id="contribute_container" >
                  <thead>
                    <tr id="contribute">
                      <th>Disclaimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                      <div class="modal-body">
                        <p>The Scoree application is a free web application for the students of IGNOU. The information on this website is published for general information purpose only. The Scoree application does not guarantee the correctness, completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website <a id="mail_admin" href="https://www.thescoree.com">(https://www.thescoree.com)</a>, is strictly at your own risk. The Scoree application will not be liable for any losses and/or damages in connection with the use of our website. Whenever we update, amend or make any changes to this document, those changes will be prominently posted here.</p>
                      </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
    </div>
</div>
<script src="{{ URL::asset('js/home.js') }}"></script>

@include('footer')