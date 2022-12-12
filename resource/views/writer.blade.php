@extends('layouts.master')

@section('title', toTitleCase('writer'))

@section('content')

<section class="hero bg-base-300 rounded-lg p-5">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <div class="avatar">
          <div class="w-36 mask mask-squircle">
            <img src="https://placeimg.com/192/192/people" />
          </div>
        </div>
        <h1 class="text-5xl font-bold">Hello there</h1>
        <p class="py-6">
          Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
          exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.
        </p>
        <button class="btn btn-primary">email icon</button>
      </div>
    </div>
  </section>

  <main>
    <section class="bg-base-300 rounded-lg p-5">
      <div class="bg-base-200 rounded-lg p-4 flex flex-col sm:flex-row gap-3 items-center">
        <img src="https://fakeimg.pl/350x100/bada56/000" alt="Album" class="object-fill rounded-lg w-full sm:w-5/12">
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
    </section>
  </main>
@endsection
