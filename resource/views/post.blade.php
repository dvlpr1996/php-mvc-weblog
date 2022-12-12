@extends('layouts.master')

@section('title', toTitleCase('::slug::'))

@section('content')

<section class="w-full flex justify-between gap-2 flex-col md:flex-row">
    <aside class="md:w-3/12 space-y-5 bg-base-300 p-3 rounded-lg order-2 md:order-1">
      <div class="space-y-5 bg-base-100 p-4 text-center rounded-lg">
        <h3>author</h3>
        <div class="flex gap-2 items-center flex-col">
            <img src="https://fakeimg.pl/350x200/bada55/000" alt="" class="rounded-full w-14 h-14 border-none">
            <span>نام نویسنده مقاله</span>
            <span>۲ ماه پیش</span>
          </div>
      </div>

      <div class="space-y-5 bg-base-100 p-4 text-center rounded-lg">
        <h3>download blog post pdf</h3>
        <button class="btn btn-primary btn-sm">download</button>
      </div>
    </aside>

    <section class="space-y-5 w-full md:w-9/12 rounded-lg order-1 md:order-2">
      <main class="bg-base-300 p-4 rounded-lg">
        <article class="bg-base-300 p-4">
          <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, eligendi.</h1>

          <div class="flex gap-2 items-center">
            <img src="https://fakeimg.pl/350x200/bada55/000" alt="" class="rounded-full w-14 h-14 border-none">
            <span>نام نویسنده مقاله</span>
            <span>۲ ماه پیش</span>
          </div>

          <img src="https://fakeimg.pl/350x128/bada55/000" alt=""
            class="w-full rounded-lg border-none object-fill h-32">

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius porro repellendus officiis ex dolorem
            tempora
            rem id dignissimos eveniet natus modi, corporis repellat maxime tenetur alias? Officia placeat minus
            labore
            quaerat vero, optio dolorem ex, nostrum fugiat nam consectetur perferendis vitae impedit quas, error autem
            voluptas voluptates alias! Dolorum non iste, ipsam provident id molestias tempora? Harum, neque. At iste
            magni
            nostrum sint maxime quia dolore vitae numquam, vel sequi quae id et qui repellat esse ullam. Voluptatum
            minus
            consequatur ducimus, rem necessitatibus repellendus laborum sed perspiciatis ratione quis ullam ad natus
            accusantium reprehenderit. A enim id laboriosam repellat! Facilis.
          </p>

          <div class="mt-10">
            <div class="mt-10 sm:mt-24 text-center sm:text-left">
              <ul>
                <li class="inline-block whitespace-nowrap ml-2 mb-4 text-sm">
                  <a href="#" class="text-white py-1 px-3 bg-primary rounded-lg">تک مقاله</a>
                </li>
                <li class="inline-block whitespace-nowrap ml-2 mb-4 text-sm">
                  <a href="#" class="text-white py-1 px-3 bg-primary rounded-lg">تک مقاله</a>
                </li>
                <li class="inline-block whitespace-nowrap ml-2 mb-4 text-sm">
                  <a href="#" class="text-white py-1 px-3 bg-primary rounded-lg">تک مقاله</a>
                </li>
                <li class="inline-block whitespace-nowrap ml-2 mb-4 text-sm">
                  <a href="#" class="text-white py-1 px-3 bg-primary rounded-lg">تک مقاله</a>
                </li>
              </ul>
            </div>

            <div class="mt-7 flex flex-col gap-7 sm:flex-row items-center justify-center sm:justify-between">
              <div class="flex flex-col sm:flex-row items-center gap-4">
                <a href="#" class="text-base text-base-300 py-1 px-5 border rounded-full">
                  https://aaaaaaa/abc
                  <i class="far fa-copy"></i>
                </a>
              </div>

              <div class="flex items-center gap-7">
                <div>
                  <a href="#" class="inline-block">
                    <i class="fa-lg far fa-heart align-middle hover:text-rose-600"></i>
                  </a>
                  <span class="inline-block text-xs align-middle">۵۲</span>
                </div>

                <div>
                  <a href="#" class="inline-block">
                    <i class="far fa-comment-alt fa-lg align-middle"></i>
                  </a>
                  <span class="inline-block text-xs align-middle">۶</span>
                </div>

              </div>
            </div>
          </div>
        </article>
      </main>

      <section class="grid sm:grid-cols-2 lg:grid-cols-3 gap-2 bg-base-300 p-4 rounded-lg">
        <div class="border border-primary mb-3 sm:mb-0 rounded-lg">
          <img src="dist/img/bg-1.png" class="w-full h-40 object-cover" alt="..." loading="lazy">
          <div class="px-4 py-2 space-y-3">
            <p class="text-sm">مطلبی دیگر از این نویسنده</p>
            <p class="text-base overflow-hidden leading-8">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است
            </p>
          </div>

          <div class="flex justify-between items-center p-4">
            <div class="flex items-center gap-2">
              <div class="w-8 h-8">
                <img src="dist/img/avatar-3.png" class="w-full h-full rounded-full" alt="..." loading="lazy">
              </div>
              <div>
                <p class="text-primary overflow-ellipsis text-xs">نام نویسنده</p>
                <p class="text-sm">خواندن در ۳ دقیقه</p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <section class="bg-base-300 p-4 rounded-lg space-y-3">
        <h5 class="text-lg font-bold align-middle">
            <i class="far fa-comment-alt fa-lg"></i>
            comments
        </h5>

        <div class="flex items-center gap-4 bg-base-100 p-2 rounded-lg">
          <img src="dist/img/avatar.jpg" class="w-9 h-9 rounded-full" alt="" loading="lazy">
          <p>نظر خود را درباره این پست بنویسید</p>
        </div>

        <div class="bg-base-100 rounded-lg space-y-3 p-3 my-4">
          <div class="flex items-center gap-2">
            <div class="w-8 h-8">
              <img src="dist/img/avatar-3.png" class="w-full h-full rounded-full" alt="..." loading="lazy">
            </div>
            <div>
              <p class="text-primary overflow-ellipsis text-xs">نام نویسنده</p>
              <p class="text-xs">خواندن در ۷ دقیقه</p>
            </div>
          </div>
          <p>سلام ممنون بابت محتوای خوبتون</p>

          <div class="flex items-center justify-between">

            <div class="flex items-center gap-3">
              <i class="far fa-comment fa-lg"></i>
              <span>10</span>
              <i class="far fa-comment-alt fa-lg"></i>
              <span>پاسخ ۱۰</span>
            </div>

            <div><i class="fa fa-reply fa-lg"></i></div>

          </div>
        </div>
      </section>
    </section>
  </section>

@endsection
