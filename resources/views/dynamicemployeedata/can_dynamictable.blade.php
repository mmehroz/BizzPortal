
<style>
    .profile-widget{
        height: 95%;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
    border-radius: 5px !important;
    border: none;
    }
   .user-name {
        text-transform: capitalize; color: #000;font-size: 25px;height: 30px;
    }
    .profile-widget .contentdiv {
        margin-top: 20px;
    }
    .btnsdivs{
    display: flex!important; margin-top: 4%;
}
.small h6{
    text-align: left;
    font-weight: bold;
    font-size: 18px;
}
.small p{
    text-align: left;
    font-size: 16px;
}
    </style>

            <div class="container-fluid">
                <div class="row" style="display: flex !important;">
                    @foreach ($data as $val)
                    <div class="col-md-4">
                      
                       
                        <div class="profile-widget">
                            <div class="profile-img">
                                <a href="{{ URL::to('/modalemployeeview/')}}/{{$val->jobapplicant_id}}" title="Click To View Application Form" target="_blank" class="avatar">
                                    <img src="{{URL::to('public/img/')}}/{{$val->jobapplicant_picture}}">
                                </a>
                            </div>
                            <!-- <div class="profile-img" style="float: right;margin-top: -17%;margin-right: -8%;">
                            <a href="#" class="avatar" style="width: 30px;height: 30px;">
                                    <img src="{{URL::to('public/img/')}}/{{$val->jobapplicant_imageview}}">
                                </a>
                            </div> -->

                            <!-- <div class="dropdown profile-action">
                                <a href="#" class="fa fa-ellipsis-v dropdown-toggle" title="View Details" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                        <select class="form-control" id="mySelect" onchange="getedit(this.value)">
                                            <option selected="" disabled=""  value="">New</option>
                                            <option value="candidatelist~{{$val->jobapplicant_id}}">Candidate List</option>
                                            <option value="Screening~{{$val->jobapplicant_id}}">Screening</option>
                                            <option value="inexperience~{{$val->jobapplicant_id}}">Inexperience</option>
                                            <option value="Irrelevent~{{$val->jobapplicant_id}}">Irrelevant</option>
                                        </select>
                                </div>
                            </div> -->
                            
                            <h3 class="user-name m-t-10 mb-0 text-ellipsis">{{$val->jobapplicant_name}}</h3>
                            <div class="contentdiv">


                            <div class="row" style="display: flex !important;">
                                <div class="col-lg-6 col-md-12">
                                    <div class="small " >
                                        <h6>Position Applied For:</h6> 
                                        <p>{{$val->jobapplicant_postionapppliedform}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="small " >
                                    <h6>Gender:</h6> 
                                    <p> {{$val->jobapplicant_gender}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="display: flex !important;">
                                
                                <div class="col-lg-6 col-md-12">
                                    <div class="small " >
                                        <h6>Current Salary:</h6>
                                        <p> {{$val->jobapplicant_currentsalary}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="small">
                                        <h6>Expected Salary:</h6> 
                                        <p>{{$val->jobapplicant_monthlyexpectedsalary}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="display: flex !important;">
                                <div class="col-lg-6 col-md-12">
                                    <div class="small " >
                                        <h6>Comfortable in Night?:</h6>
                                        <p> {{$val->jobapplicant_nightshift}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="small " >
                                        <h6>Contact#:</h6> 
                                        <p>{{$val->jobapplicant_contact}}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row" style="display: flex!important;margin-top: 5px;">
                                <div class="col-md-8 col-sm-8 col-8 col-lg-8 col-xl-8">
                                    <div class="small " >
                                        <b>Career Level:</b> @if($val->jobapplicant_careerlevel == "stusclcol" ) Student (School/College)
                                                                @elseif( $val->jobapplicant_careerlevel == "undgra" ) Student (Undergrad./Grad.)
                                                                @elseif( $val->jobapplicant_careerlevel == "entlev" ) Entry Level
                                                                @elseif( $val->jobapplicant_careerlevel == "expnomana" ) Experienced (Non-Managerial)
                                                                @elseif( $val->jobapplicant_careerlevel == "manasup" ) Manager/Supervisor
                                                                @elseif( $val->jobapplicant_careerlevel == "hod" ) Head of Department
                                                                @elseif( $val->jobapplicant_careerlevel == "srexe" ) Sr. Executive (CEO/President)  
                                                                @endif
                                    </div>
                                </div>
                         
                            </div> -->

                            <div class="row">
                                <div class="col-sm-12 col-12 col-lg-12 col-xl-12">
                                    <div class="small " >
                                        <h6>Education:</h6> 
                                        <p>{{$val->jobapplicant_edu_cerdeg}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-12 col-lg-12 col-xl-12">
                                    <div class="small " >
                                        <h6>HR Comment:</h6> 
                                        <p>{{$val->jobapplicant_hrcomment}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row btnsdivs">
                                <div class="col-lg-7 col-12">
                                    <select class="form-control" id="mySelect" onchange="getedit(this.value)" style="height: 95%;">
                                        <!-- <option value="">New</option>-->
                                        <option value="candidatelist~{{$val->jobapplicant_id}}">Candidate List</option>
                                        <option value="Screening~{{$val->jobapplicant_id}}">Screening</option>
                                        <option value="inexperience~{{$val->jobapplicant_id}}">Inexperience</option>
                                        <option value="Irrelevent~{{$val->jobapplicant_id}}">Irrelevant</option>
                                        <option value="attend~{{$val->jobapplicant_id}}">Attend Interview</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-12 text-left mt-2">
                                    <a href="{{ URL::to('public/file/')}}/{{$val->jobapplicant_cv}}" title="Click To Download Resume" target="_blank" class="btn btn-sm btn-primary w-100"><i class="fa fa-download"></i> View Resume/CV</a>
                                </div>
                                <div class="col-lg-6 col-12 text-left mt-2 ">
                                <a href="#" title="Click To View PDF" class="btn btn-sm btn-primary w-100" onclick="getimageview({{'"'.$val->jobapplicant_id.'"'}})" ><i class="fa fa-eye"></i> PDF</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <center>
<div class="row">
        <div class="col-md-4">
            {{ $data->links() }}
        </div>
    </div>
    </center>
    <!-- Candidates Tab -->
    <div class="tab-pane show active">
        <!-- Candidates List Table -->
       
    </div>   