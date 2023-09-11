@extends('backend.layouts.app')

@section('title', ' Why Question')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">

			</div>
			<div class="card-body">
				<form class="form-horizontal" action="{{ route('admin.setting.why.store') }}" enctype="multipart/form-data" method="POST">
					@csrf
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Choose Icon</label>
						<input type="text" name="icon" class="form-control">
					</div>

					<div class="table-responsive">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>





</div>

<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>Title</th>
						<th>Icon</th>
						<th>Active</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($why as $why)
					<tr>
						<td> {{ $why->title ?? 'N/A' }} </td>
						<td>{{ $why->icon ?? 'N/A' }}</td>
						<td>
							@if ($why->is_active == 1)
							<button class="btn btn-sm btn-primary">Active</button>
							@elseif($why->is_active == 0)
							<button class="btn btn-sm btn-danger">Deactive</button>
							@endif
						</td>
						<td>
							<a href="why/edit/{{ $why->id }}" class="btn btn-success btn-sm">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>

			</table>
		</div>
	</div>
</div>

@endsection
