<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Routines') }}
        </h2>
    </x-slot>


 @foreach ($routines as $routine)


  <!-- Header -->
  <div class="mt-10 max-w-screen-xl mx-auto px-10">
    <h2 class="text-gray-900 text-2xl font-bold leading-snug"> 
      {{ $routine->sequence }} 
      <div class="text-sm">
        {{ $routine->section_id }} - {{ $routine->team_id }} 
      </div>
    </h2>
  </div>

<!-- Layout largely stolen from https://laravel-news.com/tailwind-css-tips-and-tricks -->

<!-- Container -->
<div
  class="mt-10 max-w-screen-xl mx-auto px-6 grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
>
  
  
  
  <!-- Grid column -->
  <div class="flex flex-col flex-1 px-10 py-12 bg-white rounded-lg shadow-lg">
    <div class="flex-1">
      <h2 class="text-gray-900 text-2xl font-bold leading-snug">
        One
      </h2>
      <p class="mt-2 text-lg">
        One.
      </p>
    </div>
    <a
      href="#"
      class="mt-6 inline-block px-6 py-3 text-center text-white font-semibold bg-blue-700 rounded-md shadow-sm"
    >
      One
    </a>
  </div>


  
  
</div>

@endforeach

</x-app-layout>
