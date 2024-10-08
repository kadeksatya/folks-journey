@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h6>Form {{$page_title}}</h6>
            </div>
            <div class="card-body">
                <form
                    action="{{$data == null ? route('admin.faq.store'):route('admin.faq.update', $data->id)}}"
                    enctype="multipart/form-data"
                    method="post" id="quickForm">
                    @csrf
                    @if ($data != null)
                    @method('PUT')
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Title FAQ</label>
                                <input type="text" name="title" id="" value="{{$data->title ?? ''}}"
                                    class="form-control" placeholder="ex. how many time we together ?" required>
                            </div>
                            <div class="form-group">
                                <label for="">Sort Number</label>
                                <input type="number" min="1" required name="sort_number" id="" value="{{$data->sort_number ?? ''}}" class="form-control"
                                    placeholder="ex. 1">
                            </div>
                            <div class="form-group">
                                <label for="">Answear FAQ</label>
                                <textarea name="description" id="" required cols="30" rows="3" class="form-control">@php
                                    echo $data->description ?? ''
                                @endphp</textarea>
                            </div>

                        </div>
                    </div>

            </div>
            <div class="card-footer">
                <div class="button-group text-right">
                    <a href="{{route('admin.faq.index')}}" class="btn btn-dark"><i
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
