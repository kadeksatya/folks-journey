@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h6>Form {{$page_title}}</h6>
            </div>
            <div class="card-body">
                <form
                    action="{{$data == null ? route('admin.masterdata.banner.store'):route('admin.masterdata.banner.update', $data->id)}}"
                    enctype="multipart/form-data"
                    method="post" id="quickForm">
                    @csrf
                    @if ($data != null)
                    @method('PUT')
                    @endif
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="">Title Banner</label>
                                <input type="text" name="title" id="" value="{{$data->title ?? ''}}"
                                    class="form-control" placeholder="ex. Ubud" required>
                            </div>
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="link" name="link" id="" value="{{$data->link ?? ''}}" class="form-control"
                                    placeholder="ex. https://">
                            </div>
                            <div class="form-group">
                                <label for="">Description Banner</label>
                                <textarea name="description" id="" cols="30" rows="3" class="form-control">@php
                                    echo $data->description ?? ''
                                @endphp</textarea>
                            </div>

                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="">Photo Banner</label>
                                <input type="file" class="dropify" name="image"
                                    data-default-file="{{$data != null && $data->image ? $data->image:'File'}}" />
                            </div>
                        </div>
                    </div>

            </div>
            <div class="card-footer">
                <div class="button-group text-right">
                    <a href="{{route('admin.masterdata.banner.index')}}" class="btn btn-dark"><i
                            class="fa fa-arrow-left mr-2"></i> Back</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2"></i> Submit Data</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
@endpush

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    $(function () {
        $('.dropify').dropify();
    });

</script>
@endpush
