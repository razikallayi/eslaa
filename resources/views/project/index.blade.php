@extends('project.layout.master')
@section('content')

@section('styles')
<link rel="stylesheet" href="{{url('project/css/aos.css')}}" type="text/css">
@endsection

<section>
  <div class="parallax-one">
  </div>
</section>


<div class="sec1">
 <div class="count-bg"></div>
 <div class="news-bg"></div>
 <div class="container">
  <div class="col-md-12 no-padding">
    <div class="col-md-6 sec-lft">
     <div class="row">
       <div class="col-md-5 col-xs-12  col-sm-6">
         <h2>Publications</h2>
         <div class="col-md-6 no-padding">
          <div id="owl-demo1" class="owl-carousel owl-theme ">
         <!--<div class="item clearfix"><a href="pdf/doing-bussiness-qatar.pdf" target="_blank">
            <div class="col-md-3 no-padding"><div class="pub-lft"><img src="{{url('project/images/pub1.jpg')}}"></div></div>
              <div class="col-md-9"><h5>Doing Business in Qatar</h5><p>Qatar’s investment and trade bouquet holds
out a variety of interesting and profitable
ventures for foreign investors....</p></div></a>
</div>-->
@if($publications->isEmpty())
<div class="item"><h5>Coming soon</h5></div>
@else
@foreach($publications as $publication)
<div class="item clearfix"><a href="{{@$publication->pdfUrl()}}"" target="_blank">
  {{-- <img src="{{url('project/images/pub-lft.jpg')}}" class="img-responsive"> --}}
  <embed src="{{@$publication->pdfUrl()}}#view=FitW" style="overflow:hidden;margin-top:-100px; width: 150px; height: 250px"/>
  </a></div>
  @endforeach
  @endif
</div>
</div>
</div>


<div class="col-md-7 ml  col-xs-12  col-sm-6">
 <h2>Modern Law</h2>
 <div id="owl-demo2" class="owl-carousel owl-theme">
  @if($modernLaws->isEmpty())
  <div class="item clearfix"><a href="{{url('publications')}}">
    <div class="col-md-3"><img src="{{url('project/images/icons/ml.svg')}}"></div>
    <div class="col-md-9"><h5>Coming Soon</h5></div></a>
  </div>
  @else
  @foreach($modernLaws as $modernLaw)
  <div class="item clearfix"><a href="{{$modernLaw->detailPageUrl()}}">
    <div class="col-md-3"><img src="{{$modernLaw->imageUrl()}}"></div>
    <div class="col-md-9"><h5>{{$modernLaw->title}}</h5></div></a>
  </div>
  @endforeach
  @endif
  
</div>
</div>

</div>
</div>
<div class="col-md-6 no-padding">
 <div class="col-md-4"><h4>Latest News</h4></div>
 <div class="col-md-8">

   <div id="owl-demo" class="owl-carousel owl-theme">
     @if($allNews->isEmpty())
     <div class="item"><h5>Coming soon</h5></div>
     @else
     @foreach($allNews as $news)
     <div class="item"><a href="{{$news->detailPageUrl()}}"><div class="ln-img">
      <img src="{{$news->imageUrl()}}"></div><p>{{$news->title}}</p></a>
    </div>
    @endforeach 
    @endif
{{-- 
     <div class="item"><a href="{{url('news')}}"><div class="ln-img"><img src="{{url('project/images/nws1.jpg')}}"></div><p>A great moment where IBA Lawyers get together in a yacht cruise around Sydney... </p></a></div>
     <div class="item"><a href="{{url('news')}}"><div class="ln-img"><img src="{{url('project/images/nws2.jpg')}}"></div><p>Our participation in a productive workshop based on "Law firm management... </p></a></div>
     <div class="item"><a href="{{url('news')}}"><div class="ln-img"><img src="{{url('project/images/nws3.jpg')}}"></div><p>Our chairman Mr. Essa Al Sulaiti will be representing us at the @IBAevents from 8th to 13th... </p></a></div>
     <div class="item"><a href="{{url('news')}}"><div class="ln-img"><img src="{{url('project/images/nws4.jpg')}}"></div><p>We add efficiency to your contracts by adding meticulous details. Get in touch for more information </p></a></div> --}}
   </div>
 </div>
</div>
</div>
</div>
</div>

<div class="waa">
  <div class="container">
   <div class="col-md-12 no-padding">
    <div class="col-md-5 no-padding">
      <div class="waa-lft"><img src="{{url('project/images/hm-tm.jpg')}}"></div>
    </div>
    <div class="col-md-7 slide-right no-padding">
     <div class="waa-rgt">
      <h2>Chairman's Message</h2>
      <p>At Essa Sulaiti Law Firm, we consciously nurture and develop our legal services to stimulate growth and stay aligned with the changing social, economic and political landscape of the State of Qatar.</p>
      <p>Client satisfaction is most vital to the philosophy and work culture of Essa Sulaiti Law Firm.</p>
      <p>Renowned for its high client satisfaction record, the Firm takes immense pride in its client servicing capabilities that offers clarity, accessibility and business oriented legal advice to our diverse clientele in Qatar.</p>
      <a href="{{url('about')}}">Read More <i class="fa fa-arrow-right"></i></a>
    </div>
  </div>
</div>
</div>
</div>

<div class="sect">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="row">
        <div class="col-md-2">
          <h2>Sectors</h2>
          
        </div>
      </div>
    </div>
  </div>
  <div class="secto">
   <div id="owl-demo3" class="owl-carousel owl-theme">
     @if($services->isEmpty())
     <div class="item"><h5>Coming soon</h5></div>
     @else
     @foreach($services as $service)
     <div class="item"><a href="{{url('service')}}#sector-{{$service->slug}}"><div class="ln-img"><img src="{{$service->imageUrl()}}"></div><h4>{{$service->title}}</h4></a></div>
     @endforeach
     @endif
    {{--  <div class="item"><a href="{{url('service')}}#cc"><div class="ln-img"><img src="{{url('project/images/cc.jpg')}}"></div><h4>Corporate & Commercial</h4></a></div>
     <div class="item"><a href="{{url('service')}}#ec"><div class="ln-img"><img src="{{url('project/images/ec.jpg')}}"></div><h4>Engineering & Construction </h4></a></div>
     <div class="item"><a href="{{url('service')}}#le"><div class="ln-img"><img src="{{url('project/images/le.jpg')}}"></div><h4>Labour & Employment</h4></a></div>
     <div class="item"><a href="{{url('service')}}#pr"><div class="ln-img"><img src="{{url('project/images/pre.jpg')}}"></div><h4> Property & Real State</h4></a></div>
     <div class="item"><a href="{{url('service')}}#m"><div class="ln-img"><img src="{{url('project/images/mt.jpg')}}"></div><h4>Maritime</h4></a></div>
     <div class="item"><a href="{{url('service')}}#fb"><div class="ln-img"><img src="{{url('project/images/fb.jpg')}}"></div><h4> Finance & Banking </h4></a></div>
     <div class="item"><a href="{{url('service')}}#ie"><div class="ln-img"><img src="{{url('project/images/liti.jpg')}}"></div><h4>Litigation</h4></a></div>
     <div class="item"><a href="{{url('service')}}#c"><div class="ln-img"><img src="{{url('project/images/c.jpg')}}"></div><h4>Criminal</h4></a></div>
     <div class="item"><a href="{{url('service')}}#s"><div class="ln-img"><img src="{{url('project/images/s.jpg')}}"></div><h4>Sports</h4></a></div> --}}
   </div>
 </div>
</div>

<div class="wad parallax-two clearfix">
  <div class="wad-img"></div>
  <div class="container">
   <div class="col-md-12 no-padding">
     <div class="col-md-7 no-padding">
      <h2>Our Client Relation</h2>
      <div class="row">
        <div class="col-md-6">
          <h4>Professional & Trustworthy </h4>
          <p>We offer professional & trustworthy services and build lasting relationships with our clients through the legal process. We keep in touch with our clients even post the case to ensure their satisfaction and maintain good professional ties.</p>
          <h4>Expert Counsel & Tailored solutions </h4>
          <p>Our experienced team of lawyers, arbitrators, attorneys and legal translators are regularly available for clients in order to better understand and provide tailored solutions to them.  </p>
        </div>
        
        <div class="col-md-6">
          <h4>Mindful Approach </h4>
          <p>We work closely with our clients to understand their needs and concerns, guiding them through safe business routes and legal advice. Our ultimate aim is to achieve the best outcome and results for our clients.</p>
          <h4>Integrity & Excellence </h4>
          <p>We are committed to meet our client’s legal requirements and expectations in a timely manner. We treat our clients as valued partners and nurture genuine interactions to build mutual trust.</p>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>

<div class="loc">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="row">
        <div class="col-md-8">
          <img src="{{url('project/images/map.jpg')}}" class="img-responsive">
        </div>
        <div class="col-md-4">
          <h2>A Local Firm <br> With a Global Reach</h2>
          <div class="row">
            <div class="col-md-6">
              <ul>
               <li><div class="uk aos-item" data-aos="fade-down" data-aos-delay="100">United Kingdom</div></li>
               <li><div class="frn aos-item" data-aos="fade-down" data-aos-delay="200">France</div></li>
               <li><div class="swi aos-item" data-aos="fade-down" data-aos-delay="100">Switzerland</div></li>
               <li><div class="tur aos-item" data-aos="fade-down" data-aos-delay="100">Turkey</div></li>
               <li><div class="aus aos-item" data-aos="fade-down" data-aos-delay="400">Australia</div></li>
               <li><div class="sac aos-item" data-aos="fade-down" data-aos-delay="300">South Korea</div></li>
               <li><div class="egt aos-item" data-aos="fade-down" data-aos-delay="500">Egypt</div></li>
               <li><div class="kw aos-item" data-aos="fade-down" data-aos-delay="200">Kuwait</div></li>
               <li><div class="ksa aos-item" data-aos="fade-down" data-aos-delay="300">KSA</div></li>
             </ul>
           </div>
           <div class="col-md-6">
            <ul>
             <li><div class="it aos-item" data-aos="fade-down" data-aos-delay="500">Italy</div></li>
             <li><div class="ger aos-item" data-aos="fade-down" data-aos-delay="300">Germany</div></li>
             <li><div class="sp aos-item" data-aos="fade-down" data-aos-delay="300">Spain</div></li>
             <li><div class="usa aos-item" data-aos="fade-down" data-aos-delay="400">USA</div></li>
             <li><div class="cna aos-item" data-aos="fade-down" data-aos-delay="300">China</div></li>
             <li><div class="inr aos-item" data-aos="fade-down" data-aos-delay="100">India</div></li>
             <li><div class="jor aos-item" data-aos="fade-down" data-aos-delay="200">Jordan</div></li>
             <li><div class="om aos-item" data-aos="fade-down" data-aos-delay="300">Oman</div></li>
             <li><div class="uae aos-item" data-aos="fade-down" data-aos-delay="100">UAE</div></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>

@endsection
@section('scripts')
<script src="{{url('project/js/waypoints.min.js')}}"></script> 
<script src="{{url('project/js/jquery.counterup.min.js')}}"></script> 
<script src="{{url('project/js/owl.carousel.js')}}" type="text/javascript"></script>
<script async src="{{url('project/js/widgets.js')}}" charset="utf-8"></script>
<script src="{{url('project/js/aos.js')}}"></script>
<script type="text/javascript" src="{{url('project/js/main.js')}}"></script>
@endsection