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
                    action="{{route('admin.setting.store')}}"
                    enctype="multipart/form-data"
                    method="post" id="quickForm">
                    @csrf
                    <input type="hidden" name="id" id="" value="{{$data->id ?? ''}}">
                    <div class="row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="">Email *</label>
                                <input type="text" name="email" id="" value="{{$data->email ?? ''}}"
                                    class="form-control" placeholder="ex. info@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number *</label>
                                <input type="link" name="phone_number" id="" value="{{$data->phone_number ?? ''}}" class="form-control"
                                    placeholder="ex. 628xxxx">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat *</label>
                                <input type="text" name="address" id="" value="{{$data->address ?? ''}}" class="form-control"
                                    placeholder="ex. Jl. Payangan">
                            </div>

                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="">Logo</label>
                                <input type="file" class="dropify" name="logo"
                                    data-default-file="{{$data != null && $data->logo ? $data->logo:'Logo'}}" />
                            </div>
                        </div>
                    </div>

            </div>
            <div class="card-footer">
                <div class="button-group text-right">
                    <a href="{{route('admin.setting.index')}}" class="btn btn-dark"><i
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
