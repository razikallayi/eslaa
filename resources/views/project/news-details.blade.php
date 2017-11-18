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
            <li><a href="{{url('news')}}">News</a></li>
            <li>{{$news->title}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="nws-det">
  <div class="container">
    <div class="col-md-12 no-padding"><img src="{{$news->imageUrl()}}" class="img-responsive"></div>
    <div class="col-md-12 no-padding">
      <div class="row">>
        <div class="col-md-3 text-center"><div class="date"><h3>{{$news->date->format('d')}}</h3><p>{{$news->date->format('M-Y')}}</p></div></div>
        <div class="col-md-9">
          <div class="date-txt">
            <h2>{{$news->title}}</h2>
            {!!$news->content!!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  @endsection
