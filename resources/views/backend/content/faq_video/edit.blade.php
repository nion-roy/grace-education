@extends('backend.layouts.app')

@section('title', ' About Management')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('admin.setting.faq_video.update') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $faq_video->id }}">
                    <div class="form-group">
                        <label>About FAQ Video</label>
                        <input type="file" name="video" class="form-control">
                        <input type="hidden" name="oldvideo" value="{{ asset('setting/testmony/' . $faq_video->video) }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Active/Deactive</label>
                        <select class="form-control" name="is_active">
                            <option value="1" @if ($faq_video->is_active == 1) selected @endif>Active</option>
                            <option value="0" @if ($faq_video->is_active == 0) selected @endif>Deactive</option>
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
