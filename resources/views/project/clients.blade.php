  @extends('project.layout.master')
@section('content')



<div class="abt-tp">
  <div class="container">
    <div class="col-md-12 no-padding">
       <div class="col-md-4 no-padding"><h2>Our Clients</h2></div>
       <div class="col-md-8 no-padding">
         <div class="breadcrumb">
           <ul>
             <li><a href="{{url('/')}}">Home</a></li>
             <li>Our Clients</li>
           </ul>
         </div>
       </div>
    </div>
  </div>
</div>

<div class="client">
  <div class="container">
    <div class="col-md-12 no-padding">
      <ul>
        <li><a href="https://www.salini-impregilo.com/en/" target="_blank"><img src="{{url('project/images/clients/1.jpg')}}"></a></li>
        <li><a href="javscript:void()"><img src="{{url('project/images/clients/2.jpg')}}"></a></li>
        <li><a href="http://www.fcc.es/en/home" target="_blank"><img src="{{url('project/images/clients/3.jpg')}}"></a></li>
        <li><a href="https://www.astad.qa/sites/website" target="_blank"><img src="{{url('project/images/clients/4.jpg')}}"></a></li>
        <li><a href="http://www.swissboring.com/" target="_blank"><img src="{{url('project/images/clients/5.jpg')}}"></a></li>
        <li><a href="http://www.corporacionllorente.com/" target="_blank"><img src="{{url('project/images/clients/6.jpg')}}"></a></li>
        <li><a href="http://www.jtckw.com/" target="_blank"><img src="{{url('project/images/clients/7.jpg')}}"></a></li>
        <li><a href="http://www.aqualiamace.com/" target="_blank"><img src="{{url('project/images/clients/8.jpg')}}"></a></li>
        <li><a href="http://www.technital.it/en/home-page/1.html" target="_blank"><img src="{{url('project/images/clients/9.jpg')}}"></a></li>
        <li><a href="javscript:void()" ><img src="{{url('project/images/clients/10.jpg')}}"></a></li>
        <li><a href="http://www.glf.it/ita/" target="_blank"><img src="{{url('project/images/clients/11.jpg')}}"></a></li>
        <li><a href="http://www.hyattplaza.com/" target="_blank"><img src="{{url('project/images/clients/12.jpg')}}"></a></li>
        <li><a href="http://www.tozziqatar.com.qa/" target="_blank"><img src="{{url('project/images/clients/13.jpg')}}"></a></li>
        <li><a href="https://www.hyundai-rotem.co.kr/rotem.asp" target="_blank"><img src="{{url('project/images/clients/14.jpg')}}"></a></li>
        <li><a href="javscript:void()"><img src="{{url('project/images/clients/15.jpg')}}"></a></li>
      </ul>
    </div>
  </div>
</div>


  @endsection
