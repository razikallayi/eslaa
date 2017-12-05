@extends('admin.layout.app')

@section('active_menu','mnu-publication')
@section('active_submenu', 'manage')

@section('styles')
@parent
    <link href="{{url('md/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

@endsection


@section('content')

<div class="row">
@if(!$publications->isEmpty())

<div class="col-sm-12 mode" id="ListMode">
	<div class="card">
		<div class="header bg-project">
			<h2 class="">Manage Publications</h2>
		</div>

		<div class="body table-wrapper">
			@if (session()->has('message'))
			<div class="alert {{session()->get('status')}}">
				<ul>
					<li>{!!session()->get('message')!!}</li>
				</ul>
			</div>
			@endif

			<table class="table table-bordered table-responsive table-striped table-hover dataTable"  data-page-length="50">
				<thead>
					<tr>
						<th width="10">Sl.No</th>
						<th>Publication</th>
						<th width="20">Download</th>
						<th width="10">Action</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach($publications as $publication)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td><embed src="{{@$publication->pdfUrl()}}#view=FitW"  height="300px"/></td>
						<td><a href="{{@$publication->pdfUrl()}}" class="btn btn-sm btn-info" target="_blank">View</a></td>
						<td><a href="{{url('admin/publications/edit/'.$publication->id)}}#toolbar=0&navpanes=0&scrollbar=1"><i class="material-icons">edit</i></a></td>
						<td width="5px"><a href="{{url('admin/publications/'.$publication->id)}}" onclick="if(!confirm('Are you sure want to delete?')) return false;event.preventDefault();
                                                 document.getElementById('delete-form-{{$publication->id}}').submit();">
                                                 <form id="delete-form-{{$publication->id}}" action="{{ url('admin/publications/'. $publication->id) }}" method="post" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form><i class="material-icons">delete</i></a></td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>


@else
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="body">
					No data to display.
					<a href="{{url('admin/publications/add')}}" class="btn btn-info pull-right">Add Publications</a>
				</div>
			</div>
		</div>
		@endif
	</div>

@endsection


	@section('scripts')
	@parent

	    <!-- Jquery DataTable Plugin Js -->
    <script src="{{url('md/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{url('md/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script>
	$(function () {
		$('.dataTable').DataTable();
	});
</script>

@endsection