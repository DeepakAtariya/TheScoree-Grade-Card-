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
                        <p>Hello, Scoree is a general purpose website for the students of IGNOU. It shows term-end exam results as well as grade cards of IGNOU students in an improved structure. Scoree displays the programme name, total marks obtained in each course and the aggregate percentage. The students will be able to download their grade card in PDF format, or they can view their grade card on IGNOU’s official website. Currently it is able to show the results for a few programmes as mentioned in the Releases. More of the IGNOU programmes will be added in due course of time. <br><br>
Students enrolled in various programmes will now be able to prepare for their term-end exams by referring to the notes provided by Scoree. The notes will be provided for every course and every unit, in a very comprehensive and exam-oriented format, thereby making it convenient for the students to understand the concepts and have it on their fingertips. This is currently available for MCA students; notes for other units/courses and programmes will be uploaded in due course of time.<br><br>
Scoree saves your enrollment number and progress data to provide you with better services in the future. For more details, please read the Disclaimer and Privacy Policy.
  </p>
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
<footer class="">
@include('footer')
</footer>