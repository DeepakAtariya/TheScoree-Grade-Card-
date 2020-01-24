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
                        <p>
                          Scoree is a technology for the students. It shows results of students in an improved structure. Scoree displays the programme name, total marks obtained in each course and the aggregate percentage. The students will be able to download their grade card in PDF format, or they can view their grade card on university official website. <br><br>Students enrolled in various programmes will now be able to prepare for their term-end exams by referring to the notes provided by Scoree. The notes will be provided for every course and every unit, in a very comprehensive and exam-oriented format, thereby making it convenient for the students to understand the concepts and have it on their fingertips.<br><br>Scoree saves your enrollment number and progress data to provide you with better services in the future. For more details, please read the Disclaimer and Privacy Policy.
                        </p>
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