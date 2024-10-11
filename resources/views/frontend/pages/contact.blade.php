@extends("frontend.layouts.main")

@section("container")

<div class="row mx-auto mt-5">
    <div class="col-12">
        <form action="{{ route('frontend.contact.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-12 col-md-2 my-auto">
                    <label for="">Name</label>
                </div>
                <div class="col-sm-12 col-md-10 mt-2 mt-md-0">
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="col-sm-12 col-md-2 my-auto mt-3">
                    <label for="">Phone</label>
                </div>
                <div class="col-sm-12 col-md-10 mt-3">
                    <input type="tel" name="phone" class="form-control" required>
                </div>

                <div class="col-sm-12 col-md-2 my-auto mt-3">
                    <label for="">Message</label>
                </div>
                <div class="col-sm-12 col-md-10 mt-3">
                    <textarea name="message" cols="30" rows="6" class="form-control" required></textarea>
                </div>

                <div class="col-sm-12 col-md-2 mt-4"></div>
                <div class="col-sm-12 col-md-10 mt-4">
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div>
                            {{-- reCAPTCHA v2 Checkbox --}}
                            {!! NoCaptcha::display() !!}
                        </div>
                        <div class="mt-3 mt-md-0">
                            <button class="btn btn-primary btn-block" style="background-color: #fff; color:#000;">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="col-12 mt-4">
    <div class="row text-left text-md-left">
        <!-- Email Section -->
        <div class="col-12 col-md-4 mb-3 mb-md-0">
            <div class="d-flex justify-content-start justify-content-md-start align-items-start">
                <i class="fa fa-envelope text-white mr-2"></i>
                <a href="mailto:info@folksjurney.com" class="text-white text-lowercase">info@folksjurney.com</a>
            </div>
        </div>

        <!-- WhatsApp Section -->
        <div class="col-12 col-md-4 mb-3 mb-md-0">
            <div class="d-flex justify-content-start justify-content-md-start align-items-start">
                <i class="fa-brands fa-whatsapp text-white mr-2"></i>
                <a href="https://wa.me/6287777488892" class="text-white">+6287777488892</a>
            </div>
        </div>

        <!-- Address Section -->
        <div class="col-12 col-md-4">
            <div class="d-flex justify-content-start justify-content-md-end align-items-start">
                <i class="fa fa-map-pin text-white mr-2"></i>
                <p class="text-wrap text-white mb-0" style="width: 65%">Jalan Raya Payangan, Banjar Bayad, Kecamatan Payangan, Gianyar, Bali INA</p>
            </div>
        </div>
    </div>
</div>

</div>

@endsection

@push('script')
{!! NoCaptcha::renderJs() !!}
@endpush
