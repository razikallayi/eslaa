  @extends('project.layout.master')
@section('content')

<div class="abt-tp">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="col-md-4 no-padding">
        <h2>Modern Law</h2>
      </div>
      <div class="col-md-8 no-padding">
        <div class="breadcrumb">
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('news')}}">Modern Law</a></li>
            <li>{{$modernLaw->title}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="nws-det">
  <div class="container">
    <div class="col-md-12 no-padding"><img src="{{$modernLaw->imageUrl()}}" class="img-responsive"></div>
    <div class="col-md-12 no-padding">
      <div class="row">>
        <div class="col-md-3 text-center"><div class="date"><h3>{{$modernLaw->date->format('d')}}</h3><p>{{$modernLaw->date->format('M-Y')}}</p></div></div>
        <div class="col-md-9">
          <div class="date-txt">
            <h2>{{$modernLaw->title}}</h2>
            {!!$modernLaw->content!!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  @endsection
