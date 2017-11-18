@extends('project.layout.master')
@section('content')


<div class="abt-tp">
  <div class="container">
    <div class="col-md-12 no-padding">
       <div class="col-md-4 no-padding"><h2>Career</h2></div>
       <div class="col-md-8 no-padding">
         <div class="breadcrumb">
           <ul>
             <li><a href="{{url('/')}}">Home</a></li>
             <li>Career</li>
           </ul>
         </div>
       </div>
    </div>
  </div>
</div>


<div class="crr">
  <div class="container">
    <div class="col-md-12 no-padding">
       <div class="crr-tp">
          <h2>Why We Love It ?</h2>
          <p>Join Us for The Best Opportunities in a Law Firm </p>
          <div class="row">
            <div class="col-md-3 ">
               <div class="crr-icon"><img src="{{url('project/images/icons/st.svg')}}"></div>
               <h4>Expert Team </h4>
               <p>We are committed to hiring, developing and retaining the most talented legal professionals across our practice areas </p>
            </div>
            
            <div class="col-md-3">
               <div class="crr-icon"><img src="{{url('project/images/icons/cw.svg')}}"></div>
               <h4>Inclusive Growth </h4>
               <p>Our continued success relies on our ability to provide supportive and inclusive growth to our team </p>
            </div>
            
            <div class="col-md-3">
               <div class="crr-icon"><img src="{{url('project/images/icons/lg.svg')}}"></div>
               <h4>Work Environment </h4>
               <p>We promote a dynamic and diverse work environment to encourage our people in building a rewarding career. </p>
            </div>
            
            <div class="col-md-3">
               <div class="crr-icon"><img src="{{url('project/images/icons/oppertunity.png')}}"></div>
               <h4>Best Opportunities</h4>
               <p>We offer exceptional career opportunities to our lawyers, aspiring graduates and legal professionals in an environment that is challenging and goal oriented. </p>
            </div>
            
          </div>
       </div>
    </div>
    
    <div class="col-md-12 no-padding">
      <div class="cr-form">
         <form class="frm">
               <h3>Post Your Resume</h3>
               <h4>Simply call, Email, or use the form below to get in touch</h4>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
                   <div class="form-group"><input type="text" class="form-control" placeholder="Email"></div>
                   <div class="form-group"><input type="text" class="form-control" placeholder="Phone"></div>
                   <div class="form-group"><select class="form-control"><option>Applying For</option><option>Applying For</option><option>Applying For</option><option>Applying For</option></select></div>
                 </div>
                 <div class="col-md-6">
                 
                   <div class="form-group"><span id="filename">Select your file</span><label for="file-upload"><img src="{{url('project/images/icons/attach.png')}}"><input type="file" id="file-upload" class="form-control"></label></div>
                 	<div class="form-group"><textarea class="form-control" placeholder="Message"></textarea></div>
                    <div class="form-group text-left"><img src="{{url('project/images/captcha.png')}}"></div>
                 </div>
                 <div class="col-md-12"><div class="form-group"><button class="btn-con">SEND</button></div></div>
               </div>
           </form>
      </div>
    </div>
    
  </div>
</div>



  @endsection