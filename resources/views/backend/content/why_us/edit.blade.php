@extends('backend.layouts.app')

@section('title', ' Why Us Description')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('admin.setting.why_us.update') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $why_us->id }}">

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $why_us->title }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" col="5" row="10" name="description">{{ $why_us->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Selected Designation</label>
                        <select name="why_id" class="form-control">
                            @foreach ($why as $why)
                            <option value="{{ $why->id }}" @if ($why_us->why_id == $why->id) selected @endif>{{ $why->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Items 1</label>
                        <input type="text" name="item1" class="form-control" value="{{ $why_us->item1 }}">
                    </div>
                    <div class="form-group">
                        <label>Items 2</label>
                        <input type="text" name="item2" class="form-control" value="{{ $why_us->item2 }}">
                    </div>
                    <div class="form-group">
                        <label>Items 3</label>
                        <input type="text" name="item3" class="form-control" value="{{ $why_us->item3 }}">
                    </div>

                    <div class="form-group">
                        <label>Choose Photo</label>
                        <input type="file" name="photo" class="form-control">
                        <input type="hidden" name="oldimage" value="{{ $why_us->photo }}" class="form-control">


                    </div>

                    <div class="form-group">
                        <label>Active/Deactive</label>
                        <select class="form-control" name="is_active">
                            <option value="1" @if ($why_us->is_active == 1) selected @endif>Active</option>
                            <option value="0" @if ($why_us->is_active == 0) selected @endif>Deactive</option>
                        </select>
                    </div>

                    <div class="table-responsive">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
