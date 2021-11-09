<div class="w-full shadow">
  <div class="w-full max-w-7xl mx-auto flex items-center space-x-6 px-4">
    <div class="flex-1">
      <a href="/" class="block w-12">
        <img src="{{ Voyager::image( setting('site.logo') ) }}" class="w-full">
      </a>
    </div>

    <div class="flex-1 flex justify-center space-x-2 py-3">
      @foreach ($items as $link)
        <div class="relative flex group px-4 py-3 rounded hover:bg-gray-100 cursor-pointer
          @if(Route::current()->uri == $link->url) bg-gray-100 border-b-2 border-sky-500 @endif">
          <a href="{{ $link->link() }}">{{ $link->title }}</a>

          @if (count($link->children) > 0)
            <div class="absolute left-0 top-[calc(100%+.75rem)] min-w-[200px] flex flex-col py-2 shadow-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out rounded bg-white border border-gray-200">
              <div class="absolute w-full h-4 bottom-full left-0"></div>
              @foreach ($link->children as $child_link)
                <a href="{{ $child_link->link() }}" class="px-4 py-3 rounded hover:bg-gray-100
                  @if(Route::current()->uri == $child_link->url) bg-gray-100 border-b-2 border-sky-500 @endif">{{ $child_link->title }}</a>
              @endforeach
            </div>
          @endif

        </div>
      @endforeach
    </div>

    <div class="flex-1 text-right">
      <a href="#" class="px-4 py-3 rounded hover:bg-gray-100">Login</a>
      <span>/</span>
      <a href="#" class="px-4 py-3 rounded hover:bg-gray-100">Register</a>
    </div>
  </div>
</div>
