<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Potato') }}
        </h2>
    </x-slot>








<!-- Layout largely stolen from https://laravel-news.com/tailwind-css-tips-and-tricks -->

<!-- Container -->
<div
  class="mt-10 max-w-screen-xl mx-auto px-4 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4
  bg-red-200 sm:bg-yellow-200 md:bg-green-200 lg:bg-blue-200"
>
  
  
  
  <!-- Grid column -->
  <div class="flex flex-col flex-1 px-10 py-12 bg-white rounded-lg shadow-lg">
    <div class="flex-1">
      <h2 class="text-gray-900 text-2xl font-bold leading-snug">
        Tailwind v1.1.0
      </h2>
      <p class="mt-2 text-lg">
        Tailwind v1.1.0 has been released with some cool new features and a
        couple of bug fixes. This is the first feature release since the v1.0
        release, so let's dig into some of the updates.
      </p>
    </div>
    <a
      href="#"
      class="mt-6 inline-block px-6 py-3 text-center text-white font-semibold bg-blue-700 rounded-md shadow-sm"
    >
      View article
    </a>
  </div>
  <!-- Grid column -->
  <div class="flex flex-col flex-1 px-10 py-12 bg-white rounded-lg shadow-lg">
    <div class="flex-1">
      <h2 class="text-gray-900 text-2xl font-bold leading-snug">
        Getting Started with Tailwind CSS Custom Forms
      </h2>
      <p class="mt-2 text-lg">Shorter content for accentuation</p>
    </div>
    <a
      href="#"
      class="mt-6 inline-block px-6 py-3 text-center text-white font-semibold bg-blue-700 rounded-md shadow-sm"
    >
      View article
    </a>
  </div>
  <!-- Grid column -->
  <div class="flex flex-col flex-1 px-10 py-12 bg-white rounded-lg shadow-lg">
    <div class="flex-1">
      <h2 class="text-gray-900 text-2xl font-bold leading-snug">
        11 Benefits of Tailwind CSS
      </h2>
      <p class="mt-2 text-lg">
        I've been using Tailwind CSS professionally almost every day for nearly
        two years. Here I share some of the benefits I've gained by using
        Tailwind.
      </p>
    </div>
    <a
      href="#"
      class="mt-6 inline-block px-6 py-3 text-center text-white font-semibold bg-blue-700 rounded-md shadow-sm"
    >
      View article
    </a>
  </div>
  
  
  
  
</div>









</x-app-layout>
