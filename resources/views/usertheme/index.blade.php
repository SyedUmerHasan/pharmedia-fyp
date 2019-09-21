
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PharMedical</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Medikal,Health Care,Medikal - Health Care & Medical HTML5 Template">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->
<link href="{{asset('themeassets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('themeassets/css/main.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('themeassets/css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('themeassets/css/responsive.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('themeassets/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('themeassets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('themeassets/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Page Wrap ===========================================-->
<div id="wrap"> 
  
  <!-- TOP BAR ===========================================-->
  <div class="top-bar light">
    <div class="container">
      <ul class="pull-left">
        <li><a href="index.html">Welcome To Our Medikal Center</a></li>
      </ul>
      
      <!-- SOCIAL ICONS ===========================================-->
      <ul class="social_icons">
        <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
        <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
        <li class="instagram"><a href="#."><i class="fa fa-instagram"></i> </a></li>
        <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
        <li class="pinterest"><a href="#."><i class="fa fa-pinterest"></i> </a></li>
        <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
      </ul>
    </div>
  </div>
  <!-- HEADER ===========================================-->
  <header>
    <div class="container"> 
      <!--======= LOGO =========-->
      <div class="logo"> <a href="index.html"><img src="{{asset("themeasset/images/logo.png")}}" alt="" ></a> </div>
      
      <!--======= NAVIGATION =========-->
      <nav class="webimenu"> 
        <!-- MENU BUTTON RESPONSIVE -->
        <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
        <ul class="ownmenu">
          <li class="active"><a href="{{route("HomePage")}}">Home</a></li>
          <li><a href="{{route("AboutUs")}}">About us </a></li>
          <li><a href="{{route("Services")}}">SERVICES </a></li>
          <li><a href="#">Department </a> </li>
          <li><a href="#">Gallery </a></li>
          <li><a #</a> </li>
        </ul>
      </nav>
    </div>
  </header>  
  <!--======= BANNER =========-->
  <div class="home-3">
    <div id="banner" class="bnr-2">
      <div class="flex-banner">
        <ul class="slides">
          <!--======= SLIDER =========-->
          <li> <img src="{{asset("themeassets/images/slider-images/slider-2.jpg")}}" alt="" >
            <div class="container"> 
              
              <!--======= SLIDER INNER DETAILS =========-->
              <div class="bnr-info">
                <h2>Welcome To Our Research Center</h2>
                <p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Nunc finibus sit amet gravida. Cum sociis natoque penatibus et magnis dis parturient</p>
                
                <!-- Small Facts --> 
                <a href="#." class="btn btn-1">Make an Appoitment</a> </div>
            </div>
          </li>
          
          <!--======= SLIDER =========-->
          <li> <img src="{{asset("themeassets/images/slider-images/slider-3.jpg")}}" alt="" >
            <div class="container"> 
              
              <!--======= SLIDER INNER DETAILS =========-->
              <div class="bnr-info">
                <h2>Our Best X-Ray Center</h2>
                <p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Nunc finibus sit amet gravida. Cum sociis natoque penatibus et magnis dis parturient</p>
                
                <!-- Small Facts --> 
                <a href="#." class="btn btn-1">Make an Appoitment</a> </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!--======= CONTENT =========-->
  <div class="content"> 
    <!--======= SERVICES =========-->
    <section id="services">
      <div class="container-fluid">
        <ul class="row">
          <li class="col-md-3"> <i class="fa fa-heartbeat"></i>
            <h5>Heart  Rate</h5>
            <p>Duis autem vel eum iriure dolor in hendr erit in vulpt feugiat nulla facilisis utate velit esse molestie consequat</p>
          </li>
          <li class="col-md-3"> <i class="fa fa-stethoscope"></i>
            <h5>Medical Counseling</h5>
            <p>Duis autem vel eum iriure dolor in hendr erit in vulpt feugiat nulla facilisis utate velit esse molestie consequat</p>
          </li>
          <li class="col-md-3"> <i class="fa fa-user-md"></i>
            <h5>Qualified Doctors</h5>
            <p>Duis autem vel eum iriure dolor in hendr erit in vulpt feugiat nulla facilisis utate velit esse molestie consequat</p>
          </li>
          <li class="col-md-3"> <i class="fa fa-ambulance"></i>
            <h5>Emergency Services</h5>
            <p>Duis autem vel eum iriure dolor in hendr erit in vulpt feugiat nulla facilisis utate velit esse molestie consequat</p>
          </li>
        </ul>
      </div>
    </section>
    
    <!--======= WHY CHOOSE US =========-->
    <div id="why-choose">
      <div class="container">
        <div class="row"> 
          
          <!--Tittle-->
          <div class="col-lg-3">
            <div class="tittle">
              <h2>Why Choose Us</h2>
            </div>
          </div>
          
          <!-- Services Row -->
          <div class="col-lg-9">
            <ul class="row">
              
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Medical Counseling</h6>
                <p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Nunc finibus sit amet gravida. </p>
              </li>
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Professional services</h6>
                <p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Nunc finibus sit amet gravida. </p>
              </li>
              <!-- Section -->
              <li class="col-sm-4">
                <h6>24 Hours service</h6>
                <p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Nunc finibus sit amet gravida. </p>
              </li>
            </ul>
            <ul class="row">
              
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Qualified medical facilities</h6>
                <p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Nunc finibus sit amet gravida. </p>
              </li>
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Top level doctors</h6>
                <p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Nunc finibus sit amet gravida. </p>
              </li>
              <!-- Section -->
              <li class="col-sm-4">
                <h6>Dedicated patient care</h6>
                <p>Cum sociis natoque penatibus et magnis dis parturient montesmus. Nunc finibus sit amet gravida. </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- Image Responsive -->
      <div class="text-center"> <img class="img-responsive" src="{{asset("themeassets/images/why-choose-img.jpg")}}" alt=""> </div>
    </div>
    
    <!--======= INTRO =========-->
    <section class="intro">
      <div class="container">
        <div class="intro-in"> 
          <!--Tittle-->
          <div class="tittle">
            <h3>We are a team of young 
              professionals passionate in our work.</h3>
          </div>
          
          <!--Text Section-->
          <ul class="row">
            <li class="col-md-6">
              <p>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie consequat, vel illum dolore eufe ugiat nulla facilisis at vero.</p>
            </li>
            <li class="col-md-6">
              <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum seacula quarta decima quinta decima. </p>
            </li>
          </ul>
          <a href="#." class="btn">Make an appoitment</a> <a href="#." class="btn btn-1">View timetable</a> </div>
      </div>
    </section>
    
    <!--======= MAKE AN APPOINTMENT =========-->
    <section class="make-oppient">
      <div class="appointment">
        <div class="container">
          <div class="row">
          <!--======= Image =========-->
            <div class="col-sm-5"> <img class="img-responsive" src="{{asset("themeassets/images/oppitent-img.png")}}" alt="" > </div>
            <div class="col-sm-7"> 
            
              <!--======= FORM =========-->
              <div class="tittle">
                <h2>Make an Appointment</h2>
              </div>
            @foreach (["danger", "warning", "success", "info"] as $msg)
                @if(Session::has($msg))
                <div id="form-messages" class="alert alert-{{$msg}}" role="alert">
                {{ Session::get($msg) }}
                </div>
                @endif
            @endforeach
              <form method="get" action="{{route("AddApointment")}}">
                <ul class="row">
                  <li class="col-sm-6">
                    <input type="text" class="form-control"  name="AppointmentName" placeholder="Full name * ">
                  </li>
                  <li class="col-sm-6">
                    <input type="email" class="form-control" name="AppointmentEmail" placeholder="Email * ">
                  </li>
                  <li class="col-sm-6">
                    <input type="text" class="form-control"  name="phone" placeholder="Phone" >
                  </li>
                  <li class="col-sm-6">
                    <select class="form-control selectpicker" name="AppointmentDepartment" id="select1">
                      <option selected>Select Department</option>
                      <option value="Dental">Dental</option>
                      <option value="Cardiology">Cardiology</option>
                      <option value="For disabled">For disabled</option>
                      <option value="Ophthalmology">Ophthalmology</option>
                      <option value="Emergency">Emergency</option>
                      <option value="X-ray">X-ray</option>
                    </select>
                  </li>
                  {{-- <li class="col-sm-12">
                    <input type="text" name="datepicker" class="form-control" id="datepicker" placeholder="DD/MM/YY">
                    <i class="fa fa-calendar"></i> </li> --}}
                  <li class="col-sm-12">
                    <textarea class="form-control" name="AppointmentMessage" id="AppointmentMessage" rows="5" placeholder="Message"></textarea>
                  </li>
                  <li class="col-sm-12">
                    {{-- <button type="submit" value="submit" class="btn">make an appointment</button> --}}
                    <input type="submit" class="btn" value="make an appointment" >
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--======= Department =========-->
    <section class="department"> 
      
      <!-- Tab Panel -->
      <div role="tabpanel">
        <div class="dep-sec-nav ab-cnter"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#depart" role="tab" data-toggle="tab">OverView</a></li>
            <li role="presentation"><a href="#dental" role="tab" data-toggle="tab">Dental</a></li>
            <li role="presentation"><a href="#cardiology" role="tab" data-toggle="tab">Cardiology </a></li>
            <li role="presentation"><a href="#for-disabled" role="tab" data-toggle="tab">For disabled </a></li>
            <li role="presentation"><a href="#ophthalmology" role="tab" data-toggle="tab">Ophthalmology </a></li>
            <li role="presentation"><a href="#emergency" role="tab" data-toggle="tab"> Emergency </a></li>
            <li role="presentation"><a href="#x-ray" role="tab" data-toggle="tab"> X-ray</a></li>
          </ul>
        </div>
        
        <!-- Tab Content -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="depart"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="depart-bg-over"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt text-left">
              <div class="tittle">
                <h2>Our Departments</h2>
              </div>
              <p>We are a team of young professionals passionate in our work. We work in a friendly and efficient using the latest technologies and sharing our expertise to make a diagnosis and implement cutting-edge therapies.</p>
              <br>
              <p>Claritas est etiam processus dynamicus, qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN --> 
              <a href="#." class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="#." class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- Dental Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="dental"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="dentel-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>Dental</h2>
              </div>
              <p>We are a team of young professionals passionate in our work. We work in a friendly and efficient using the latest technologies and sharing our expertise to make a diagnosis and implement cutting-edge therapies.</p>
              <p> We work in a friendly and efficient using the latest technologies and sharing our expertise to make a diagnosis.</p>
              <br>
              <p>Claritas est etiam processus dynamicus, qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN --> 
              <a href="#." class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="#." class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- Cardiology Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="cardiology"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="cardio-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>Cardiology</h2>
              </div>
              <p>We are a team of young professionals passionate in our work. We work in a friendly and efficient using the latest technologies and sharing our expertise</p>
              <br>
              <p>Claritas est etiam processus dynamicus,to make a diagnosis and implement cutting-edge therapies. qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN --> 
              <a href="#." class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="#." class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- For-Disabled Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="for-disabled"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="for-dis-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>For Disabled</h2>
              </div>
              <p>We are a team of young professionals passionate in our work. We work in a friendly and efficient using the latest technologies and sharing our expertise to make a diagnosis and implement cutting-edge therapies.</p>
              <br>
              <p>Claritas est etiam processus dynamicus, qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN --> 
              <a href="#." class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="#." class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- Ophthalmology Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="ophthalmology"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="opth-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>Ophthalmology</h2>
              </div>
              <p>We are a team of young professionals passionate in our work. We work in a friendly and efficient using the latest technologies and sharing our expertise to make a diagnosis and implement cutting-edge therapies.</p>
              <br>
              <p>Claritas est etiam processus dynamicus, qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN --> 
              <a href="#." class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="#." class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- Emergency Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="emergency"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- Depatment Dental Image -->
              <div class="emer-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>Emergency</h2>
              </div>
              <p>We are a team of young professionals passionate in our work. We work in a friendly and efficient using the latest technologies and sharing our expertise </p>
              <br>
              <p>Claritas est etiam processus dynamicus,to make a diagnosis and implement cutting-edge therapies. qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN --> 
              <a href="#." class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="#." class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
          
          <!-- X Ray Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="x-ray"> 
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep"> 
              <!-- X RAY BACKGROUND IMAGE -->
              <div class="x-ray-bg"></div>
            </div>
            
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>X Ray</h2>
              </div>
              <p>We are a team of young professionals passionate in our work. We work in a friendly and efficient using the latest technologies and sharing our expertise</p>
              <br>
              <p>Claritas est etiam processus dynamicus,to make a diagnosis and implement cutting-edge therapies. qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN --> 
              <a href="#." class="btn"> View Our Services</a> 
              <!-- BTN 1 --> 
              <a href="#." class="btn btn-1 margin-l-20"> CONTACT US</a> </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--======= Blog =========-->
    <section class="blog">
      <div class="container"> 
        
        <!--======= Blog POST 2nd ROW =========-->
        <ul class="row">
          
          <!-- Blog Post 2 -->
          <li class="col-md-4"> 
            <!-- Post Image -->
            <div class="post-img up"> <img class="img-responsive" src="{{asset("themeassets/images/blog-img-2.jpg")}}" alt="" > </div>
            <!-- Post Text Sec -->
            <div class="col-md-12 text-section text-center"> <a href="#.">A Vital Measure: Your Surgeon’s Skill</a> <span>post by <strong>John Doe</strong> on <strong>April 5th, 2015</strong></span>
              <hr>
              <p>Claritas est etiam processus dynamicus, qui sequ itur mutationem consuetudium lectorum. Mirum est notare quam littera.</p>
            </div>
          </li>
          
          <!-- Blog Post 4 -->
          <li class="col-md-4"> 
            <!-- Post Text Sec -->
            <div class="text-section text-center"> <a href="#.">Spending More and Getting Less for Health Care</a> <span>post by <strong>John Doe</strong> on <strong>April 5th, 2015</strong></span>
              <hr>
              <p>Claritas est etiam processus dynamicus, qui sequ itur mutationem consuetudium lectorum. Mirum est notare quam littera.</p>
            </div>
            <!-- Post Image -->
                <div class="post-img down"> <img class="img-responsive" src="{{ asset("themeassets/images/blog-img-3.jpg")}}" alt="" > </div>
          </li>
          
          <!-- Blog Post 4 -->
          <li class="col-md-4"> 
            
            <!-- Post Image -->
            <div class="post-img up"> <img class="img-responsive" src="{{asset("themeassets/images/blog-img-4.jpg")}}" alt="" > </div>
            
            <!-- Post Text Sec -->
            <div class="text-section text-center"> <a href="#.">Emergency Rooms Are No Place for the Elderly</a> <span>post by <strong>John Doe</strong> on <strong>April 5th, 2015</strong></span>
              <hr>
              <p>Claritas est etiam processus dynamicus, qui sequ itur mutationem consuetudium lectorum. Mirum est notare quam littera.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    
   <!--======= TESTIMONILAS =========-->
    <section id="prople-says">
      <div class="overlay">
        <div class="container"> 
          
          <!--======= TITTLE =========-->
          <div class="tittle tittle-2 ">
            <h3>what patients say about us</h3>
          </div>
          <div class="qou"> <i class="fa fa-quote-left"></i> <i class="fa fa-quote-right"></i> </div>
          <div class="testi">
            <div class="testi-slide">
              <div class="item">
                <p>Excepteur sint cupidatat non proident, sunt ieserunt mollit anim id occaecat cupidatat non proident, sunt ieserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus occaecat cupidatat nonerror</p>
                <div class="avatar"><img src="{{asset("themeassets/images/avatar-1.jpg")}}" alt="" ></div>
                <h5>JHON CORNNER</h5>
                <span>Ophthalmology DEOARTMENT</span> </div>
              <div class="item">
                <p>Excepteur sint cupidatat non proident, sunt ieserunt mollit anim id occaecat cupidatat non proident, sunt ieserunt mollit anim id est laborum. Sed ut perspiciatis est laborum. Sed ut perspiciatis unde omnis iste natus occaecat cupidatat nonerror</p>
                <div class="avatar"><img src="{{asset("themeassets/images/avatar-2.jpg")}}" alt="" ></div>
                <h5>CORNNER JHON </h5>
                <span>DENTAL DEOARTMENT</span> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--======= Contact Info =========-->
    <section class="contact-info">
      <div class="container"> 
        
        <!--Address-->
        <ul class="row">
          <li class="col-md-3"> <i class="ion-ios-location-outline"></i>
            <h5>Address</h5>
            <p>1800 Abbot Kinney Blvd. Unit D & E
              Venice, CA 90291</p>
          </li>
          
          <!--Hot line-->
          <li class="col-md-3"> <i class="ion-iphone"></i>
            <h5>Hotline</h5>
            <p>+00-0122-123-0089</p>
          </li>
          
          <!--Email Contact-->
          <li class="col-md-3"> <i class="ion-ios-email-outline"></i>
            <h5>Email contact</h5>
            <p>medikal@gmail.com</p>
            <p> contact@medikalclinic.com</p>
          </li>
          
          <!--Website-->
          <li class="col-md-3"> <i class="ion-earth"></i>
            <h5>Website</h5>
            <p>www.medikalclinic.com </p>
          </li>
        </ul>
      </div>
    </section>
  </div>
  
  <!--======= FOOTER =========-->
  <footer>
    <div class="container"> 
      
      <!-- Row -->
      <div class="row"> 
        
        <!-- Latest Tweet -->
        <div class="col-md-3">
          <div class="latest-tweet">
            <h5>Latest tweets</h5>
            <ul>
              
              <!--Tweet 1 -->
              <li>
                <p><span>@medikal</span> Sweets and Bakers 
                  WordPress Theme' on @EnvatoMarket by themefore<a href="#."> http://t.co/we8Kf0</a></p>
                <span class="date"> - Thursday April 9, 2015</span> </li>
              
              <!--Tweet 2 -->
              <li>
                <p><span>@medikal</span> In hendrerit in molestie consequat in <a href="#."> http://t.co/we8Kf0</a></p>
                <span class="date"> - Thursday April 9, 2015</span> </li>
              
              <!--Tweet 3 -->
              <li>
                <p><span>@medikal</span> Duis autem vel eum iriure <span>@medikal</span> dolor in hendrerit in molestie consequat <a href="#."> http://t.co/we8Kf0</a></p>
                <span class="date"> - Thursday April 9, 2015</span> </li>
            </ul>
          </div>
        </div>
        
        <!-- About Us -->
        <div class="col-md-6">
          <div class="small-info"> <img src="{{asset('themeassets/images/logo-white.png')}}" alt="">
            <p>We work in a friendly and efficient using the latest technologies and sharing our expertise to make a diagnosis and implement cutting-edge therapies.</p>
            <ul class="social_icons">
              <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
              <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
              <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
            </ul>
            
            <!-- News Letter -->
            <h5>register newsletter</h5>
            <form>
              <input type="email" placeholder="Enter your email here" required>
              <button type="submit"> Subscribe</button>
            </form>
          </div>
        </div>
        
        <!-- Patient Guide -->
        <div class="col-md-3">
          <div class="links text-right">
            <h5>Patient Guide</h5>
            <ul>
              <li><a href="#.">Choosing a doctor</a></li>
              <li><a href="#."> Health journals</a></li>
              <li><a href="#."> Insurance converage</a></li>
              <li><a href="#."> Talking to your doctor</a></li>
              <li><a href="#."> Medikal error</a></li>
            </ul>
            
            <!-- Timing -->
            <div class="timing">
              <h5>opening hours</h5>
              <p>Mon to Fri <span> 8:00 am to 7:00pm</span></p>
              <p>Sun & Sat <span>9:00 am to 5:00pm</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Rights -->
    <div class="rights">
      <p>© 2015 Medikal. Made with by M_Adnan </p>
    </div>
  </footer>
</div>
<!-- Wrap End --> 
<script src="{{asset('themeassets/js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{asset('themeassets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('themeassets/js/own-menu.js')}}"></script> 
<script src="{{asset('themeassets/js/owl.carousel.min.js')}}"></script> 
<script src="{{asset('themeassets/js/jquery.superslides.js')}}"></script> 
<script src="{{asset('themeassets/js/masonry.pkgd.min.js')}}"></script> 
<script src="{{asset('themeassets/js/jquery.stellar.min.js')}}"></script> 
<script src="{{asset('themeassets/js/jquery-ui-1.10.3.custom.js')}}"></script> 
<script src="{{asset('themeassets/js/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{asset('themeassets/js/jquery.isotope.min.js')}}"></script> 
<script src="{{asset('themeassets/js/jquery.flexslider-min.js')}}"></script> 
<script src="{{asset('themeassets/js/appointment.js')}}"></script> 
<script src="{{asset('themeassets/js/jquery.downCount.js')}}"></script>
<script src="{{asset('themeassets/js/counter.js')}}"></script> 
<script src="{{asset('themeassets/js/main.js')}}"></script>
</body>
</html>