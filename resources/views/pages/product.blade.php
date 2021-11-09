@extends('layouts.app')

@section('main')
  <div class="flex flex-wrap">
    <div class="w-full lg:w-1/2">
      <div class="relative pb-[127%]">
        <a href="#" class="absolute w-full h-full top-0 left-0">
          @php
            $images = json_decode($product->images);
          @endphp

          <img src="{{ Voyager::image($images[0]) }}" class="w-full h-full object-cover" />
        </a>
      </div>
    </div>

    <div class="w-full lg:w-1/2">

    </div>
  </div>
@endsection
