@extends('layouts.master')

@section('title', toTitleCase('home'))

@section('content')
<section>
    <div class="sm:grid sm:grid-cols-5 sm:grid-rows-2 sm:gap-2 space-y-2 sm:space-y-[unset]">

      <div class="relative row-start-1 row-end-2 col-start-1 col-end-4">
        <a href="blog-post.html" class="img-hover">
          <img src="https://fakeimg.pl/350x200/ff0000/000" class="w-full h-60 object-fill rounded-md" alt="..."
            loading="lazy">
        </a>
        <div class="absolute left-3 bottom-4 translate-x-[0%] translate-y-[10%] text-[#F4FFFF]">
          <div class="flex items-center flex-row gap-5 mt-3">
            <img src="https://fakeimg.pl/350x200/bada55/000" class="w-12 h-12 rounded-full object-cover" alt="..."
              loading="lazy">
            <div class="text-xs text-white space-y-1">
              <h3 class="text-white">عنوان مقاله</h3>
              <div>
                <span>نام نویسنده مقاله</span>
                -
                <span>۲ ماه پیش</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="relative row-start-1 row-end-2 col-start-4 col-end-6">
        <a href="blog-post.html" class="img-hover">
          <img src="https://fakeimg.pl/350x200/ff0000/000" class="w-full h-60 object-fill rounded-md" alt="..."
            loading="lazy">
        </a>
        <div class="absolute left-3 bottom-4 translate-x-[0%] translate-y-[10%] text-[#F4FFFF]">
          <div class="flex items-center flex-row gap-5 mt-3">
            <img src="https://fakeimg.pl/350x200/bada55/000" class="w-12 h-12 rounded-full object-cover" alt="..."
              loading="lazy">
            <div class="text-xs text-white space-y-1">
              <h3 class="text-white">عنوان مقاله</h3>
              <div>
                <span>نام نویسنده مقاله</span>
                -
                <span>۲ ماه پیش</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="relative row-start-2 row-end-3 col-start-1 col-end-3">
        <a href="blog-post.html" class="img-hover">
          <img src="https://fakeimg.pl/350x200/ff0000/000" class="w-full h-60 object-fill rounded-md" alt="..."
            loading="lazy">
        </a>
        <div class="absolute left-3 bottom-4 translate-x-[0%] translate-y-[10%] text-[#F4FFFF]">
          <div class="flex items-center flex-row gap-5 mt-3">
            <img src="https://fakeimg.pl/350x200/bada55/000" class="w-12 h-12 rounded-full object-cover" alt="..."
              loading="lazy">
            <div class="text-xs text-white space-y-1">
              <h3 class="text-white">عنوان مقاله</h3>
              <div>
                <span>نام نویسنده مقاله</span>
                -
                <span>۲ ماه پیش</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="relative row-start-2 row-end-3 col-start-3 col-end-6">
        <a href="blog-post.html" class="img-hover">
          <img src="https://fakeimg.pl/350x200/ff0000/000" class="w-full h-60 object-fill rounded-md" alt="..."
            loading="lazy">
        </a>
        <div class="absolute left-3 bottom-4 translate-x-[0%] translate-y-[10%] text-[#F4FFFF]">
          <div class="flex items-center flex-row gap-5 mt-3">
            <img src="https://fakeimg.pl/350x200/bada55/000" class="w-12 h-12 rounded-full object-cover" alt="..."
              loading="lazy">
            <div class="text-xs text-white space-y-1">
              <h3 class="text-white">عنوان مقاله</h3>
              <div>
                <span>نام نویسنده مقاله</span>
                -
                <span>۲ ماه پیش</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="w-full flex justify-between gap-2 flex-col md:flex-row">

    @include('layouts.aside')

    <main class="w-full md:w-9/12 bg-base-300 p-3 rounded-lg order-1 md:order-2">

      <div class="bg-base-100 rounded-lg p-4 flex flex-col sm:flex-row gap-3 items-center">
        <img src="https://fakeimg.pl/350x200/bada56/000" alt="Album" class="object-fill rounded-lg w-full sm:w-5/12">
        <div class="space-y-3">
          <div class="badge badge-primary">primary</div>
          <h2 class="text-lg">New album is released!</h2>
          <div>
            <span>نام نویسنده مقاله</span>
            -
            <span>۲ ماه پیش</span>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aspernatur rerum quos adipisci animi quam.
          </p>
        </div>
      </div>
      
    </main>
  </section>
@endsection
