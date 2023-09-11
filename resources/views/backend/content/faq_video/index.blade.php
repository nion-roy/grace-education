@extends('backend.layouts.app')

@section('title', ' FAQ About Video')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('admin.setting.faq_video.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>About FAQ Video</label>
                        <input type="file" name="video" class="form-control">
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
                        <th>Video</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faq_video as $f)
                    <tr>
                        <td>
                            <video width="180" height="180" controls>
                                <source src="{{ asset('setting/testmonyt/') . $f->video }}" type="video/mp4">
                            </video>
                        </td>
                        <td>
                            @if ($f->is_active == 1)
                            <button class="btn btn-sm btn-primary">Active</button>
                            @elseif($f->is_active == 0)
                            <button class="btn btn-sm btn-danger">Deactive</button>
                            @endif
                        </td>
                        <td>
                            <a href="faq_video/edit/{{ $f->id }}" class="btn btn-success"> <i class="fa fa-pencil"></i> Edit </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection
