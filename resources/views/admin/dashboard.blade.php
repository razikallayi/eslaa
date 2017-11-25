@extends('admin.layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">



	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="card">
			<div class="header bg-project">
				<h2>Service</h2>
			</div>
			<div class="body">
				<div class="list-group">
					<br/>
					<a href="{{url('admin/services/add')}}" class="list-group-item">Add Service</a>
					<a href="{{url('admin/services')}}" class="list-group-item">Manage Service</a>
					<br/>
				</div>
			</div>
		</div>
	</div>



	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="card">
			<div class="header bg-project">
				<h2>Team</h2>
			</div>
			<div class="body">
				<div class="list-group">
					<br/>
					<a href="{{url('admin/teams/add')}}" class="list-group-item">Add Team</a>
					<a href="{{url('admin/teams')}}" class="list-group-item">Manage Team</a>
					<br/>
				</div>
			</div>
		</div>
	</div>





	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="card">
			<div class="header bg-project">
				<h2>News</h2>
			</div>
			<div class="body">
				<div class="list-group">
					<br/>
					<a href="{{url('admin/news/add')}}" class="list-group-item">Add News</a>
					<a href="{{url('admin/news')}}" class="list-group-item">Manage News</a>
					<br/>
				</div>
			</div>
		</div>
	</div>


	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="card">
			<div class="header bg-project">
				<h2>Publication</h2>
			</div>
			<div class="body">
				<div class="list-group">
					<br/>
					<a href="{{url('admin/publications/add')}}" class="list-group-item">Add Publication</a>
					<a href="{{url('admin/publications')}}" class="list-group-item">Manage Publication</a>
					<br/>
				</div>
			</div>
		</div>
	</div>






</div>
@endsection