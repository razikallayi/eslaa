@extends('admin.layout.app')

@section('active_menu','mnu-publication')

@section('active_submenu','add')


@section('content')
<div class="row">

	<div class="col-sm-12">
		<div class="card">
			<div class="header bg-project">
				<h2 class="">@if(isset($publication)) {{"Edit"}} @else {{"Add"}}  @endif Publication </h2>
			</div>
			<div class="body">
				@if(isset($publication))
				<form id="form_validation" method="POST" action="{{url('admin/publications/edit/'.$publication->id)}}" enctype="multipart/form-data">
				{{method_field('PUT')}}
				@else
				<form id="form_validation" method="POST" action="{{url('admin/publications')}}" enctype="multipart/form-data">
				@endif
				{{csrf_field()}}

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


						<div class="row clearfix">

	{{-- 							<div class="col-sm-12">
									<label>Name<code>*</code> </label>
									<div class="form-group ">
										<div class="form-line">
											<input type="text" value="{{$publication->name or old('name')}}" name="name" maxlength="191" required class="form-control" >
										</div>
									</div>
								</div> --}}


{{-- 						<div class="col-sm-12">
							<label>Content</label>
							<div class="form-group">
								<div class="form-line">
									<textarea name="content" rows="10" class="form-control htmlEditor">{{$publication->content or old('content')}}</textarea>
								</div>
							</div>
						</div> --}}

							<div class="col-sm-12">
								<div class="form-group">
									<label>Upload Pdf<code>*</code></label>
									<span id ="ProgressInfo"></span>
									<p id="CropSizeInfo" class="help-block"></p>
									<input id="PdfInput" multiple type="file" accept="application/pdf" name="pdfs[]">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group">
									<div class="">
										<input type="submit" id="saveButton" name="save" value="Save" class="btn btn-lg btn-success waves-effect" >
									</div>
								</div>
							</div>

						</div>

					</form>			
				</div>
			</div>

		</div>
	</div>
@endsection