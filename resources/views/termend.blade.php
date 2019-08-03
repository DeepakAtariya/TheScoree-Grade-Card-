@include('header')
<link rel="stylesheet" href="{{ URL::asset('css/termend.css') }}">
  <!-- main column -->
  <div class="main" >
         <div class="row">        
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                  <ul class="list-inline">
                      <li>
                          <h3> Term End Exam Results - June 2019 </h3>
                          <span style="font-size: 20px;">{{ $enrollment }} </span><br>
                          
                      </li>
                  </ul> 
              </div>
          </div>
          <div style="background-color:white; border:white 1px solid" class="row">
              <div class="col-md-12 col-lg-12">
                  <div  id="scorecard"> 
                  <span id="termendresult_message" class="text-danger">**This results are incomplete and not final results. Final results will reflect in the grade card. To check grade card visit <a href="{{url('')}}" class="btn-link">here.</a></span>
                        @php
                            $i=0;
                        @endphp
                        @foreach($termendresult as $data)
                            @if($i > 0)
                            @if(($data[2]==50 && $data[1]>19) || ($data[2]==100 && $data[1]>39) || ($data[2]==40 && $data[1]>15) || ($data[2]==30 && $data[1]>11) )
                            <div class="column">
                                <div class="card" >
                                    <div class="row">
                                        <div  class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                            <h2 id="course_code" style="padding-right:10px;">{{ $data[0] }}</h2>
                                            <h3 id="total" ><span style="" >{{ $data[1] }}</span></h3>
                                        </div>

                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                
                                                <div id="assignment">
                                                    <label>Max Marks<br>{{ $data[2] }}</label>
                                                </div>
                                                <div id="assignment" >
                                                    <label>Month Year <br> {{ $data[3] }}</label>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="column">
                                <div class="card" >
                                    <div class="row fail">
                                        <div  class="col-xs-5 col-sm-5 col-md-5 col-lg-5 " id="failed_head">
                                            <h2 id="course_code" style="padding-right:10px; color:red">{{ $data[0] }}</h2>
                                            <h3 id="total" ><span style="color:red" >{{ $data[1] }}</span></h3>
                                        </div>

                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                
                                                <div id="assignment">
                                                    <label>Max Marks<br> {{ $data[2] }}</label>
                                                </div>
                                                <div id="assignment" >
                                                    <label>Month Year <br> {{ $data[3] }}</label>
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
                          
                    </div>
                        

                           
                      
                  </div>

                  <div id="scoretable">
                  <span id="termendresult_message" class="text-danger">**This results are incomplete and not final results. Final results will reflect in the grade card. To check grade card visit <a id="home" href="{{url('')}}" class="btn-link">here.</a></span>
                  <table class="table table-responsive table-fit " >
                      <thead>
                          <tr>
                              <th>Code</th>
                              <th>Marks</th>
                              <th>Max Marks</th>
                              <th>Month Year</th>
                              <th>Date of updation</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach($termendresult as $data)
                            @if($i > 0)
                            @if(($data[2]==50 && $data[1]>19) || ($data[2]==100 && $data[1]>39) || ($data[2]==40 && $data[1]>15) || ($data[2]==30 && $data[1]>11) )
                             
                          <tr>
                            <td >
                              {{ $data[0] }}
                            </td>
                            <td >
                              {{ $data[1] }}
                            </td>
                            <td >
                              {{ $data[2] }}
                            </td>
                            <td >
                              {{ $data[3] }}
                            </td>
                            <td >
                              {{ $data[4] }}
                            </td>
                          </tr>
                               @else
                                <tr style="color:red">
                                    <td >
                                    {{ $data[0] }}
                                    </td>
                                    <td >
                                    {{ $data[1] }}
                                    </td>
                                    <td>
                                    {{ $data[2] }}
                                    </td>
                                    <td>
                                    {{ $data[3] }}
                                    </td>
                                    <td>
                                    {{ $data[4] }}
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