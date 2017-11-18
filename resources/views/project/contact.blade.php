@extends('project.layout.master')
@section('content')


<div class="abt-tp">
  <div class="container">
    <div class="col-md-12 no-padding">
       <div class="col-md-4 no-padding"><h2>Contact Us</h2></div>
       <div class="col-md-8 no-padding">
         <div class="breadcrumb">
           <ul>
             <li><a href="{{url('/')}}">Home</a></li>
             <li>Contact us</li>
           </ul>
         </div>
       </div>
    </div>
  </div>
</div>

<div class="con-sec">
 <div class="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.442710058555!2d51.504056915484306!3d25.255688783869104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45d007890e15e5%3A0xc184984dd8674c39!2sESSA+AL+SULAITI+LEGAL+ADVOCACY+%26+ARBITRATION!5e0!3m2!1sen!2sqa!4v1500803819775" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
           <div class="con-rgt clearfix">
             <h2>Contact Address</h2>
             <ul>
               <li><a href="tel:+974 4466 4606"><img src="{{url('project/images/icons/phn-con.png')}}"> <span>Phone Number</span>+974 4466 4606</a></li>
               <li><img src="{{url('project/images/icons/fax-con.png')}}"> <span>Fax</span>+974 4466 4626</li>
               <li><a href="mailto:info@eslaa.com"><img src="{{url('project/images/icons/email.png')}}"> <span>E- mail</span>info@eslaa.com</a></li>
               <li><img src="{{url('project/images/icons/map.png')}}"> <span>Location</span>Villa 402, D Ring rd, New Salata P.O Box: 4912 Doha Qatar</li>
             </ul>
           </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-12 no-padding">
      <div class="row con-btm">
        <div class="col-md-4">
         <div class="flc">
           <h1>Our Working Hours</h1>
           <h4>6 DAYS A WEEK  <br> From <span> 7:30 </span> AM to <span> 5:30 </span> PM </h4>
        </div>
        </div>
        <div class="col-md-8">
           <form class="frm" id="my-form">
               <h3>Get a legal consultation</h3>
               <h4>Simply call, Email, or use the form below to get in touch</h4>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group"><input type="text" class="form-control" placeholder="Name" required></div>
                   <div class="form-group"><input type="text" class="form-control" placeholder="E-mail" required></div>
                   <div class="form-group"><input type="text" class="form-control" placeholder="Phone" required></div>
                 </div>
                 <div class="col-md-6"><div class="form-group"><textarea class="form-control" placeholder="Message"></textarea></div></div>
                 <div class="col-md-6"><div class="form-group"><img src="{{url('project/images/captcha.png')}}"></div></div>
                 <div class="col-md-12"><div class="form-group"><button class="btn-con">SEND</button></div></div>
               </div>
           </form>
        </div>
      </div>
    </div>
    
  </div>
</div>


  @endsection