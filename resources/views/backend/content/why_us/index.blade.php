@extends('backend.layouts.app')

@section('title', ' Why Us Description')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">

			</div>
			<div class="card-body">
				<form class="form-horizontal" action="{{ route('admin.setting.why_us.store') }}" enctype="multipart/form-data" method="POST">
					@csrf
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" col="5" row="10" name="description"></textarea>
					</div>
					<div class="form-group">
						<label>Selected Designation</label>
                        <select name="why_id" class="form-control">
                            @foreach ($why as $why)
                            <option value="{{ $why->id }}">{{ $why->title }}</option>
                            @endforeach
                        </select>
					</div>
					<div class="form-group">
						<label>Items 1</label>
						<input type="text" name="item1" class="form-control">
					</div>
					<div class="form-group">
						<label>Items 2</label>
						<input type="text" name="item2" class="form-control">
					</div>
					<div class="form-group">
						<label>Items 3</label>
						<input type="text" name="item3" class="form-control">
					</div>
					<div class="form-group">
						<label>Choose Photo</label>
						<input type="file" name="photo" class="form-control">
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
						<th>Description</th>
						<th>Item1</th>
						<th>Item2</th>
						<th>Item3</th>
						<th>Photo</th>
						<th>Active</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($why_us as $why)
					<tr>
						<td> {{ $why->title ?? 'N/A' }} </td>
						<td>{{ $why->description ?? 'N/A' }}</td>
						<td>{{ $why->item1 ?? 'N/A' }}</td>
						<td>{{ $why->item2 ?? 'N/A' }}</td>
						<td>{{ $why->item3 ?? 'N/A' }}</td>
						<td><img src="{{ asset('/setting/testmony/' . $why->photo) }}" style="width: 80px"></td>
						<td>
							@if ($why->is_active == 1)
							<button class="btn btn-sm btn-primary">Active</button>
							@elseif($why->is_active == 0)
							<button class="btn btn-sm btn-danger">Deactive</button>
							@endif
						</td>
						<td>
							<a href="why_us/edit/{{ $why->id }}" class="btn btn-success btn-sm">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>

			</table>
		</div>
	</div>
</div>

@endsection
