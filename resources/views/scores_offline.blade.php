@include('header')
<link rel="stylesheet" href="{{ URL::asset('css/scores.css') }}">
  <!-- main column -->
  <div class="main" >
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
              <div class="col-md-12 col-lg-12">

                  <div id="scoretable">
                  <table class="table table-responsive table-fit ">
                      <thead>
                          <tr>
                              <th> course code </th>
                              <th>Name</th>
                              <th>Asgn1</th>
                              <th>Lab1</th>
                              <th>Lab2</th>
                              <th>Lab3</th>
                              <th>Lab4</th>
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
                                @if($data->status=="Completed")
                             
                          <tr *ngFor="let row of master_data; let i = index;" >
                              <!-- <td *ngIf="row.status=='Pass' else failed_serial" >
                                  
                              </td > -->
                              <td *ngIf="row.status=='Pass' else failed_course_code" style="width: 6%;">
                              {{ $data->course_code }} 
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_course_name" style="width: 26%;">
                              @php
                                $found = 0;
                              @endphp
                              @foreach($courses as $c_data)
                              @if (strcmp($c_data->course_code, $data->course_code)==0)
                                    <a href="#">{{ $data->course_code }}</a>
                                    @php 
                                        break;
                                        $found = 1;
                                    @endphp
                              @endif
                              @endforeach
                              @if($found != 1)
                                        {{ $data->course_code }}
                              @endif
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_assign" >
                              {{ $data->asgn1 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab1" >
                              {{ $data->lab1 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab2" >
                              {{ $data->lab2 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab3" >
                              {{ $data->lab3 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab4" >
                              {{ $data->lab4 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_theory">
                              
                              @if(true)
                              {{ $data->theory }}
                              @else
                              waiting...
                              @endif
                              </td>
                              <!-- <td *ngIf="row.status=='Pass' else failed_status" >
                                 
                              </td> -->
                              <td *ngIf="row.status=='Pass' else failed_total" >
                              {{ $data->total }}
                              </td>

                              
                              
                          </tr>
                            @elseif($data[6]!="-")
                            <tr *ngFor="let row of master_data; let i = index;" id="fail_table">
                              <!-- <td *ngIf="row.status=='Pass' else failed_serial" >
                                  
                              </td > -->
                              <td *ngIf="row.status=='Pass' else failed_course_code" style="width: 6%;">
                              {{ $data->course_code }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_course_name" style="width: 26%;">
                              {{ $data->course_code }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_assign" >
                              {{ $data->assgn1 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab1" >
                              {{ $data->lab1 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab2" >
                              {{ $data->lab2 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab3" >
                              {{ $data->lab3 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab4" >
                              {{ $data->lab4 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_theory">
                              {{ $data->theory }}
                              </td>
                              <!-- <td *ngIf="row.status=='Pass' else failed_status" >
                                 
                              </td> -->
                              <td *ngIf="row.status=='Pass' else failed_total" >
                              {{ $data->total }}
                              </td>

                              
                              
                          </tr>
                          @else
                            <tr *ngFor="let row of master_data; let i = index;" id="marks_not_uploaded">
                              <!-- <td *ngIf="row.status=='Pass' else failed_serial" >
                                  
                              </td > -->
                              <td *ngIf="row.status=='Pass' else failed_course_code" style="width: 6%;">
                              {{ $data->course_code }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_course_name" style="width: 26%;">
                              {{ $data->course_code }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_assign" >
                              {{ $data->assgn1 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab1" >
                              {{ $data->lab1 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab2" >
                              {{ $data->lab2 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab3" >
                              {{ $data->lab3 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_lab4" >
                              {{ $data->lab4 }}
                              </td>
                              <td *ngIf="row.status=='Pass' else failed_theory">
                              {{ $data->theory }}
                              </td>
                              <!-- <td *ngIf="row.status=='Pass' else failed_status" >
                                 
                              </td> -->
                              <td *ngIf="row.status=='Pass' else failed_total" >
                              {{ $data->total }}
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