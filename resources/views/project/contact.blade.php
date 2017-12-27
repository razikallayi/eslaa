@extends('project.layout.master')

@section('styles')
<style>
.captcha-box{
  display: inline;
  width: 55px;
  height: 33px;
  padding: 4px 4px;
  color: #fff;
  border: 1px solid #bbb;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  margin: 0; 
}
</style>
@endsection
@section('content')

{{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}


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
           <form class="frm" id="my-form" action="{{url('contact')}}" method="post">
             {{csrf_field()}}

               <h3>Get a legal consultation</h3>
               <h4>Simply call, Email, or use the form below to get in touch</h4>
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group"> <input type="text" name="name" class="form-control" placeholder="Name" required></div>
                   <div class="form-group"> <input name="email" type="email" class="form-control" placeholder="Email" required></div>
                   <div class="form-group"> <input name="phone" type="number" class="form-control" placeholder="Phone"></div>
                 </div>
                 <div class="col-md-6"><div class="form-group"> <textarea name="message" class="form-control" placeholder="Message" required></textarea></div>
               </div>
                 <div class="col-md-6"><div class="form-group"><img src="{{$captcha['imageUrl']}}">
                 <input type="number" max="999" class="captcha-box form-control" name="captcha"/>
                 {{-- <div class="col-md-6"><div class="form-group"><img src="{{url('project/images/captcha.png')}}"></div></div> --}}
               </div>
             </div>


             <div class="col-md-12">
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                 <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
                 </ul>
               </div>
               @endif


               @if (session()->has('message'))
               <div class="alert {{session()->get('status')}}">
                 <ul>
                   <li>{!!session()->get('message')!!}</li>
                 </ul>
               </div>
               @endif
               <input type="hidden" name="_crypt" value="{{$captcha['crypt']}}"/>
             </div>
                 {{-- <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script> --}}
{{--                  <div id="_g-recaptcha"></div>
                 <div class="g-recaptcha" data-sitekey="6Lfy1DsUAAAAABoq4erFAB_BGHVfGOYMMawGQXuD" data-size="invisible" data-callback="_submitForm" data-badge="bottomright"></div><script src="https://www.google.com/recaptcha/api.js" async defer></script>
                 <script>var _submitForm,_captchaForm,_captchaSubmit,_execute=true;</script><script>window.onload=function(){_captchaForm=document.querySelector("#_g-recaptcha").closest("form");_captchaSubmit=_captchaForm.querySelector('[type=submit]');_submitForm=function(){if(typeof _submitEvent==="function"){_submitEvent();grecaptcha.reset();}else{_captchaForm.submit();}};_captchaForm.addEventListener('submit',function(e){e.preventDefault();if(typeof _beforeSubmit==='function'){_execute=_beforeSubmit();}if(_execute){grecaptcha.execute();}});}</script> --}}

                 <div class="col-md-12"><div class="form-group"><button type="submit" class="btn-con">SEND</button></div></div>
               </div>
           </form>
        </div>
      </div>
    </div>
    
  </div>
</div>


  @endsection