@include('header')
<link rel="stylesheet" href="{{ URL::asset('css/termend.css') }}">
  <!-- main column -->
  <div class="main" >
          <!-- alert switching row  -->

          <!-- score table row -->
          <div style="background-color:white; border:white 1px solid" class="row">
              <div class="col-md-12 col-lg-12">

                  <div  id="scorecard"> 
                        @php
                            $i=0;
                        @endphp
                        @foreach($termendresult as $data)
                            @if($i > 0)
                            @if(($data[2]==50 && $data[1]>19) || ($data[2]==100 && $data[1]>39) )
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
                              <div class="row" style="color:red">
                                  <div  class="col-xs-5 col-sm-5 col-md-5 col-lg-5" id="failed_head">
                                      <h2 id="course_code" style="padding-right:10px;">{{ $data[0] }}</h2>
                                      <h3 id="total" ><span style="" >{{ $data[1] }}</span></h3>
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
                  <table class="table table-responsive table-fit ">
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
                                
                             
                          <tr *ngFor="let row of master_data; let i = index;" >
                              <!-- <td *ngIf="row.status=='Pass' else failed_serial" >
                                  
                              </td > -->
                              <td *ngIf="row.status=='Pass' else failed_course_code" style="width: 6%;">
                              {{ $data[0] }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_course_name" style="width: 26%;">
                              {{ $data[1] }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_assign" >
                              {{ $data[2] }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab1" >
                              {{ $data[3] }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab1" >
                              {{ $data[4] }}
                              </td>
                          </tr>
                            

                               
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