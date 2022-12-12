<section class="space-y-2">
    <section class="flex items-center justify-between px-4 p-2 bg-base-300 rounded-lg">
      <div class="flex items-center gap-2">
        <img src="https://fakeimg.pl/350x200/ff0000/000" alt="..." loading="lazy"
          class="rounded-full w-14 h-14 border-none">
        <a href="#">php mvc blog</a>
      </div>

      <div class="space-x-3">
        <a href="{{ route('login.index') }}" class="link no-underline">login</a>
        <a href="" class="link no-underline">register</a>
      </div>
    </section>

    <nav class="navbar bg-base-300 rounded-lg hidden sm:block">
      <ul class="menu menu-vertical sm:menu-horizontal p-0">
        <li><a href="">home</a></li>
        <li><a href="">latest</a></li>
        <li><a href="">programming</a></li>
        <li><a href="">technology</a></li>
        <li><a href="">science</a></li>
        <li><a href="">Review</a></li>
      </ul>
    </nav>

    <div class="flex sm:hidden btm-nav z-10 h-12">
      <button class="bg-pink-200 text-pink-600">
        <span class="leading-3">Home</span>
      </button>
      <button class="bg-neutral text-neutral-content">
        <span class="leading-3">Review</span>
      </button>
      <button class="bg-teal-200 text-teal-600">
        <span class="leading-3">latest</span>
      </button>
      <button class="bg-teal-200 text-teal-600">
        <span class="leading-3">category</span>
      </button>
    </div>
  </section>
