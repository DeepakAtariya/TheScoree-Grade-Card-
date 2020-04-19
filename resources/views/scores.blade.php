@include('header')
<link rel="stylesheet" href="{{ URL::asset('css/scores.css') }}">
<!-- main column -->
<div class="main">
    <!-- alert switching row  -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <ul class="list-inline">
                <li>
                    <span style="font-size: 25px;">{{ $scores['program'] }} - {{ round($scores['percent'],1)."%" }} </span><br>
                    <h4></h4>
                    <h5>{{ $scores['name'] }} ({{ $scores['enrollment'] }})</h5>

                </li>
            </ul>
            <div>
                <a class="btn-link" href="{{ url('download_score') }}?enrollment={{ $scores['enrollment'] }}&program={{ $scores['program'] }}&download=1">
                    Download Original Grade Card
                    <!-- <span class="glyphicon glyphicon-download-alt"></span> -->
                </a>

                |

                <a class="btn-link" target="_blank" href="{{ url('download_score') }}?enrollment={{ $scores['enrollment'] }}&program={{ $scores['program'] }}&download=1&view=1">
                    See Original Grade Card
                    <!-- <span class="glyphicon glyphicon-download-alt"></span> -->
                </a>
            </div>
        </div>
    </div>

    <!-- score table row -->
    <div style="background-color:white; border:white 1px solid" class="row">

            <div class="row" id="scorecard">
            <h5>If you find any discrepency with the scores. please report at <a href="mailto:support@thescoree.com" class="hyperlink"> support@thescoree.com </a> or <a href="contactus" class="hyperlink" target="_blank"> contact us </a></h5>
                @php
                $i=0;
                @endphp
                @foreach($scores['scores'] as $data)
                @if($i > 0)
                @if($data[7]=="Completed")
                <div *ngFor="let row of master_data; let i = index;" class="column">
                    <div class="card" *ngIf="row.status=='Pass' else failed">
                        <div class="row">
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <h2 id="course_code" style="padding-right:10px;">{{ $data[0] }}</h2>
                                <span style="font-size: 11px;"> {{ $data[9] }} </span>

                                <h3 id="total"><span style="">{{ $data[8] }}</span></h3>
                                <!-- <h3 id="total" ></h3> -->
                            </div>

                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">

                                <div id="assignment">
                                    <label>Assignment<br> {{ $data[1] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab1 <br>{{ $data[2] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab2 <br> {{ $data[3] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab3 <br> {{ $data[4] }} </label>
                                </div>
                                <div id="assignment">
                                    <label> Lab4 <br> {{ $data[5] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Theory <br>
                                        @if(true)
                                        {{ $data[6] }}
                                        @else
                                        waiting...
                                        @endif
                                    </label>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                @elseif($data[6]!="-")
                <div *ngFor="let row of master_data; let i = index;" class="column">
                    <div class="card container" style="background-color:rgb(235, 235, 235)">
                        <div class="row">
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" id="failed_head">
                                <h2 id="course_code_failed" style="padding-right:10px;">{{ $data[0] }}</h2>
                                <span style="font-size: 11px; color:red;"> {{ $data[9] }} </span>

                                <h3 id="total" style="color:red"><span>{{ $data[8] }}</span></h3>
                                <!-- <h3 id="total" ></h3> -->
                            </div>

                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" id="failed" style="color:red">

                                <div id="assignment">
                                    <label>Assignment<br> {{ $data[1] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab1 <br>{{ $data[2] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab2 <br> {{ $data[3] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab3 <br> {{ $data[4] }} </label>
                                </div>
                                <div id="assignment">
                                    <label> Lab4 <br> {{ $data[5] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Theory <br>
                                        @if(true)
                                        {{ $data[6] }}
                                        @else
                                        waiting...
                                        @endif
                                    </label>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                @else
                <div *ngFor="let row of master_data; let i = index;" class="column">
                    <div class="card" *ngIf="row.status=='Pass' else failed">
                        <div class="row">
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <h2 id="course_code" style="padding-right:10px;">{{ $data[0] }}</h2>
                                <span style="font-size: 11px;"> {{ $data[9] }} </span>

                                <h3 id="total"><span style="">Awaited</span></h3>
                                <!-- <h3 id="total" ></h3> -->
                            </div>

                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">

                                <div id="assignment">
                                    <label>Assignment<br> {{ $data[1] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab1 <br>{{ $data[2] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab2 <br> {{ $data[3] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Lab3 <br> {{ $data[4] }} </label>
                                </div>
                                <div id="assignment">
                                    <label> Lab4 <br> {{ $data[5] }}</label>
                                </div>
                                <div id="assignment">
                                    <label>Theory <br>
                                        @if(true)
                                        {{ $data[6] }}
                                        @else
                                        waiting...
                                        @endif
                                    </label>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                @endif
                @endif

                @php
                $i++;
                @endphp
                @endforeach
                <h5>If you find any discrepency with the scores. please report at <a href="mailto:support@thescoree.com" class="hyperlink"> support@thescoree.com </a> or <a href="contactus" class="hyperlink" target="_blank"> contact us </a></h5>
            </div>

            <div id="scoretable">
                <h5>If you find any discrepency with the scores. please report at <a href="mailto:support@thescoree.com" class="hyperlink"> support@thescoree.com </a> or <a href="contactus" class="hyperlink" target="_blank"> contact us </a></h5>
                <table class="table table-responsive table-fit ">
                    <thead>
                        <tr>
                            <th> {{ $scores['scores'][0][0] }}</th>
                            <th>Name</th>
                            <th>{{ $scores['scores'][0][1] }}</th>
                            <th>{{ $scores['scores'][0][2] }}</th>
                            <th>{{ $scores['scores'][0][3] }}</th>
                            <th>{{ $scores['scores'][0][4] }}</th>
                            <th>{{ $scores['scores'][0][5] }}</th>
                            <th>Theory</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($scores['scores'] as $data)
                        @if($i > 0)
                        @if($data[7]=="Completed")

                        <tr *ngFor="let row of master_data; let i = index;">
                            <!-- <td *ngIf="row.status=='Pass' else failed_serial" >
                                  
                              </td > -->
                            <td *ngIf="row.status=='Pass' else failed_course_code" style="width: 6%;">
                                {{ $data[0] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_course_name" style="width: 26%;">
                                @php
                                $found = 0;
                                @endphp
                                @foreach($courses as $c_data)
                                @if (strcmp($c_data->course_code, $data[0])==0)
                                <a href="#">{{ $data[9] }}</a>
                                @php
                                break;
                                $found = 1;
                                @endphp
                                @endif
                                @endforeach
                                @if($found != 1)
                                {{ $data[9] }}
                                @endif
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_assign">
                                {{ $data[1] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab1">
                                {{ $data[2] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab2">
                                {{ $data[3] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab3">
                                {{ $data[4] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab4">
                                {{ $data[5] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_theory">

                                @if(true)
                                {{ $data[6] }}
                                @else
                                waiting...
                                @endif
                            </td>
                            <!-- <td *ngIf="row.status=='Pass' else failed_status" >
                                 
                              </td> -->
                            <td *ngIf="row.status=='Pass' else failed_total">
                                {{ $data[8] }}
                            </td>



                        </tr>
                        @elseif($data[6]!="-")
                        <tr *ngFor="let row of master_data; let i = index;" id="fail_table">
                            <!-- <td *ngIf="row.status=='Pass' else failed_serial" >
                                  
                              </td > -->
                            <td *ngIf="row.status=='Pass' else failed_course_code" style="width: 6%;">
                                {{ $data[0] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_course_name" style="width: 26%;">
                                {{ $data[9] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_assign">
                                {{ $data[1] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab1">
                                {{ $data[2] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab2">
                                {{ $data[3] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab3">
                                {{ $data[4] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab4">
                                {{ $data[5] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_theory">
                                {{ $data[6] }}
                            </td>
                            <!-- <td *ngIf="row.status=='Pass' else failed_status" >
                                 
                              </td> -->
                            <td *ngIf="row.status=='Pass' else failed_total">
                                {{ $data[8] }}
                            </td>



                        </tr>
                        @else
                        <tr *ngFor="let row of master_data; let i = index;" id="marks_not_uploaded">
                            <!-- <td *ngIf="row.status=='Pass' else failed_serial" >
                                  
                              </td > -->
                            <td *ngIf="row.status=='Pass' else failed_course_code" style="width: 6%;">
                                {{ $data[0] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_course_name" style="width: 26%;">
                                {{ $data[9] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_assign">
                                {{ $data[1] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab1">
                                {{ $data[2] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab2">
                                {{ $data[3] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab3">
                                {{ $data[4] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_lab4">
                                {{ $data[5] }}
                            </td>
                            <td *ngIf="row.status=='Pass' else failed_theory">
                                {{ $data[6] }}
                            </td>
                            <!-- <td *ngIf="row.status=='Pass' else failed_status" >
                                 
                              </td> -->
                            <td *ngIf="row.status=='Pass' else failed_total">
                                {{ $data[8] }}
                            </td>



                        </tr>
                        @endif


                        @endif
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                <h5>If you find any discrepency with the scores. please report at <a href="mailto:support@thescoree.com" class=""> support@thescoree.com </a> or <a href="contactus" class="" target="_blank"> contact us </a></h5>
                <br>
            </div>

        </div>

    </div>

    <!-- end of score table row -->

</div>
<!-- end of main column -->

<!-- </div> -->
<!-- end of master row -->


<!-- </div> -->


@include('footer')