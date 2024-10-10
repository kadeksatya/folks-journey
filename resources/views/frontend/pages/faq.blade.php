@extends("frontend.layouts.main")


@section("container")
@foreach ($faq as $key => $item)
<p>
    <a class="text-white" data-toggle="collapse" href="#collapseExample_{{$key}}" role="button" aria-expanded="false"
        aria-controls="collapseExample">
        <i class="fas fa-chevron-right rotate mr-4"></i>
        {{$item->title}}

    </a>
</p>
<div class="collapse" id="collapseExample_{{$key}}">
    <div class="text-wrap text-white text-sm w-75 ml-5 mb-3">
        @php
            echo $item->description ?? ''
        @endphp
    </div>
</div>
@endforeach

@endsection


@push('script')
<script>
  // Script to toggle the rotation of the arrow
  var collapseLink = document.querySelector('[data-toggle="collapse"]');
  collapseLink.addEventListener('click', function () {
    var icon = this.querySelector('.rotate');
    icon.classList.toggle('down');
  });
</script>
@endpush

@push('style')

  <style>
    .rotate {
      transition: transform 0.2s ease-in-out;
    }
    .rotate.down {
      transform: rotate(90deg);
    }
  </style>
@endpush
