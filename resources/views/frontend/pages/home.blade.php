@extends("frontend.layouts.main")

@section("title", "Home")

@section("container")
<section class="home text-white">
    <div class="text-center mb-4 text-4xl">
        Vacation isn't supposed to be frustrating.
    </div>
    <div class="mt-4 row">
        <div class="col-sm-12 col-md-6 text-center my-auto">
            <p>Let’s start our journey!, Subscribe Now!</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <form class="d-flex flex-column flex-md-row">
                        <input type="text" name="subscribe" placeholder="Enter email here"
                            class="form-control p-2 mb-2 mb-md-0 border rounded-md">
                        <button class="btn btn-primary p-2 ml-md-2 bg-white text-dark" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-element justify-center w-100 mx-auto">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" class="">
            <ol class="carousel-indicators">
                @foreach ($slider as $key => $item)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"
                    class="{{$key == 0 ? 'active':''}}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($slider as $key => $item)
                <div class="carousel-item {{$key == 0 ? 'active':''}}">
                    <img class="d-block w-100 rounded-custom" style="max-height: 700px; object-fit: cover;"
                        src="{{$item->image ?? 'https://images.unsplash.com/photo-1542378151504-0361b8ec8f93?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'}}"
                        alt="{{$item->title ?? $item->description}}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</section>
@endsection

@section('stylesheet')
<style>
    .slider-element {
        max-width: 768px !important;
        max-height: 432px !important;
    }

</style>
@endsection

@push('script')
<script>
    $('.carousel').carousel({
        interval: 2000
    })

</script>
@endpush
