@extends('backend.layouts.app')

@section('title', 'Why Question Edit ')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.why.update') }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $why->id }}">

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $why->title }}">
                        </div>
                        <div class="form-group">
                            <label>Choose Icon</label>
                            <input type="text" name="icon" class="form-control" value="{{ $why->icon }}">
                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($why->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($why->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <div class="table-responsive">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
