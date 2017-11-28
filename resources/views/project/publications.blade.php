  @extends('project.layout.master')
  @section('content')

  <div class="abt-tp">
    <div class="container">
      <div class="col-md-12 no-padding">
        <div class="col-md-4 no-padding">
          <h2>Publications</h2>
        </div>
        <div class="col-md-8 no-padding">
          <div class="breadcrumb">
            <ul>
              <li><a href="{{url('/')}}">Home</a></li>
              <li>Publications</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="nws">
    <div class="container">
      @if($publications->isEmpty())
       <div class="col-md-12"><h1>Coming Soon</h1></div>
      @else

     <div class="col-md-12 no-padding">
      <div class="row">
        @foreach($publications as $publication)
        <div class="col-md-3 col-sm-4">
          <div class="nws-tp clearfix"><a href="{{@$publication->pdfUrl()}}" target="_blank"><embed src="{{@$publication->pdfUrl()}}#view=FitW"  height="300px"/></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
@endif
    



  </div>
</div>


@endsection