@include('header')

<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
<div class="container" id="" style="padding: 2%;">
    <div class="row" id="">
        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-12 col-lg-10 col-md-10 col-sm-12 ">
            <table id="" >
                  <thead>
                    <tr id="contribute">
                      <th>About Us</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="standard_width">
                      <hr>
                        <p>Hello, Scoree is a general purpose website for the students of IGNOU. Scoree shows the results, grade cards of IGNOU students in improved structure, such as Scoree shows course name, calculate total marks and percentage. If student is in first or second semester then Scoree will calculate percentage, total marks according to given course results. Currently Scoree is able to show few programs as mentioned in the releases. Later on Scoree will able to show most of the IGNOU programs.  </p>

                        <p>Scoree is saving your enrollment and progress data to provide you better service in the future for more details please read our disclaimer and policies.</p>
                        </td>
                        <td>
                          
                        </td>
                    </tr>
                    <tr>
                      <td> <h3>Releases</h3></td>
                    </tr>
                    <tr>
                      <td>
                      <p>
                          <!-- <strong><span class="glyphicon glyphicon-info-sign"></span> Release 1.1 : </strong> Term-End Results are  -->
                          <strong><span class="glyphicon glyphicon-info-sign"></span> Release 1.0 : </strong> With this release you can check the results of IGNOU BCA/MCA courses only.
                        </p>
                        <p>
                          <!-- <strong><span class="glyphicon glyphicon-info-sign"></span> Release 1.1 : </strong> Term-End Results are  -->
                          <strong><span class="glyphicon glyphicon-info-sign"></span> Release 1.1 : </strong> MEG, BCOM Programs are added.
                        </p>

                        <p>There's a lot more to come, so stay tuned!</p>
                      </td>
                    </tr>
                   
                  </tbody> 
                </table>
        </div>
        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
        </div>
    </div>
</div>
<script src="{{ URL::asset('js/home.js') }}"></script>
<br>
<footer class="footer">
@include('footer')
</footer>