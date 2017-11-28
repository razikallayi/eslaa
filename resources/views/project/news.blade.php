@extends('project.layout.master')
@section('content')

<div class="abt-tp">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="col-md-4 no-padding">
        <h2>News</h2>
      </div>
      <div class="col-md-8 no-padding">
        <div class="breadcrumb">
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>News</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="nws">
  <div class="container">
          @if($allNews->isEmpty())
       <div class="col-md-12"><h1>Coming Soon</h1></div>
      @else

     <div class="col-md-12 no-padding">
        <div class="row">
          @foreach($allNews as $news)
                    <div class="col-md-6 col-sm-6">
            <div class="nws-tp clearfix"><a href="{{$news->detailPageUrl()}}">
              <div class="col-md-6 no-padding"><div class="nws-tp-img"><img src="{{$news->imageUrl()}}"></div></div>
               <div class="col-md-6 no-padding">
                   <div class="nws-tp-txt">
                       <p>{{$news->title}}</p>
                   </div>
               </div>
               
               <div class="drm-tp clearfix"><div class="d"> <i class="fa fa-calendar"></i> {{$news->date->format('d-m-Y')}}</div></div>
               </a>
            </div>
          </div>
         @endforeach 


          {{--
          <div class="col-md-6 col-sm-6">
            <div class="nws-tp clearfix"><a >
              <div class="col-md-6 no-padding"><div class="nws-tp-img"><img src="{{url('project/images/nws1.jpg')}}"></div></div>
               <div class="col-md-6 no-padding">
                   <div class="nws-tp-txt">
                       <p>A great moment where IBA Lawyers get together in a yacht cruise around Sydney, discussing international investment and legal opportunities.</p>
                   </div>
               </div>
               
               <div class="drm-tp clearfix"><div class="d"> <i class="fa fa-calendar"></i> 12-10-17</div></div>
               </a>
            </div>
          </div>
          
          <div class="col-md-6 col-sm-6">
            <div class="nws-tp clearfix"><a >
              <div class="col-md-6 no-padding"><div class="nws-tp-img"><img src="{{url('project/images/nws2.jpg')}}"></div></div>
               <div class="col-md-6 no-padding">
                   <div class="nws-tp-txt">
                     <p>Our participation in a productive workshop based on "Law firm management and improvement” Well done ! </p>
                   </div>
               </div>
               
               <div class="drm-tp clearfix"><div class="d"> <i class="fa fa-calendar"></i> 09-10-17</div></div>
               </a>
            </div>
          </div>
        </div>
     </div>
     
     <div class="col-md-12 no-padding">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="nws-sec clearfix"><a>
              <div class="col-md-4 col-sm-5 no-padding"><div class="nws-sec-img"><img src="{{url('project/images/nws3.jpg')}}"></div></div>
               <div class="col-md-8 col-sm-7 no-padding">
                   <div class="nws-sec-txt">
                       <p>Our chairman Mr. Essa Al Sulaiti will be representing us at the @IBAevents  from 8th to 13th October. See you there. #IBASydney</p>
                   </div>
               </div>
               <div class="drm clearfix"><div class="d"> <i class="fa fa-calendar"></i> 06-10-17</div></div>
               </a>
            </div>
          </div>
          
          <div class="col-md-6 col-sm-6">
            <div class="nws-sec clearfix"><a >
              <div class="col-md-4 col-sm-5  no-padding"><div class="nws-sec-img"><img src="{{url('project/images/nws4.jpg')}}"></div></div>
               <div class="col-md-8 col-sm-7 no-padding">
                   <div class="nws-sec-txt">
                       <p>We add efficiency to your contracts by adding meticulous details. Get in touch for more information</p>
                   </div>
               </div>
               <div class="drm clearfix"><div class="d"> <i class="fa fa-calendar"></i> 10-09-17</div></div>
               </a>
            </div>
          </div>
          
          --}}
          
          
          
        </div>
     </div>
     @endif
     
     
  </div>
</div>



  @endsection