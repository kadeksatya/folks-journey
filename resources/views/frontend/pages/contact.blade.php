@extends("frontend.layouts.main")

@section("container")
  <div class="row mx-auto mt-5">
    <div class="col-md-2 my-auto">
        <label for="">Name</label>
    </div>
    <div class="col-md-10">
        <input type="text" name="name" class="form-control w-100" required>
    </div>
    <div class="col-md-2 my-auto mt-3">
        <label for="">Phone</label>
    </div>
    <div class="col-md-10 mt-3">
        <input type="tel" name="phone" class="form-control w-100" required>
    </div>
    <div class="col-md-2 mt-3">
        <label for="">Message</label>
    </div>
    <div class="col-md-10 mt-3">
        <textarea name="message" id="" cols="30" rows="6" class="form-control w-100" required></textarea>
    </div>
    <div class="col-md-2 mt-4">

    </div>
    <div class="col-md-10 mt-4">
        <div class="d-flex justify-content-between">
            <div>
              {{-- reCAPTCHA v2 Checkbox --}}
              {!! NoCaptcha::display() !!}
            </div>
            <div><button class="btn btn-primary block" style="background-color: #fff; color:#000;">Submit</button></div>
        </div>
    </div>
    <div class="col-md-12 mt-4">
        <div class="d-flex justify-content-between text-center">
            <div class="my-auto w-100">
                <i class="fa fa-envelope text-white mr-3"></i>
                <a href="mailto:info@folksjurney.com" class="text-white text-lowercase">info@folksjurney.com</a>
            </div>
            <div class="my-auto w-100 text-center">
                <i class="fa-brands fa-whatsapp text-white mr-3"></i>
                <a href="wa.me/6287777488892" class="text-white">+6287777488892</a>
            </div>
            <div class="w-100">
                <div class="d-flex justify-content-end text-left">
                    <i class="fa fa-map-pin text-white mr-3 my-auto"></i>
                    <p class="text-wrap text-white" style="width: 65%">Jalan Raya Payangan, Banjar Bayad, Kecamatan Payangan, Gianyar, Bali INA</p>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@push('script')
    {!! NoCaptcha::renderJs() !!}
@endpush
