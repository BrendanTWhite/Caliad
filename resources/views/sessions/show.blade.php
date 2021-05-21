<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $session->description }}
            <div class="text-sm">
              {{ $session->start->toDayDateTimeString() }}
            </div>
        </h2>
    </x-slot>


@foreach ($session->sections as $section)

  <!-- Header -->
  <div class="mt-10 max-w-screen-xl mx-auto px-10">
    <h2 class="text-gray-900 text-2xl font-bold leading-snug"> 
      {{ $section->description }} 
    </h2>
  </div>



 
<!-- Table from https://tailwindui.com/components/application-ui/lists/tables -->
<!-- This example requires Tailwind CSS v2.0+ -->
  <div class="mt-10 max-w-screen-xl mx-auto px-10">


    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <tbody class="bg-white divide-y divide-gray-200">

  @foreach ($section->routines as $routine)

                <tr>

                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Start</a>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    @isset($routine->start)
                    {{ $routine->start->isoFormat('h:mm') }}                  
                    @endisset
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Clear</a>
                  </td>

                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    {{ $routine->sequence }}                  
                    {{ $routine->team->cohort->club->short_name }}                  
                    Team {{ $routine->team->team_rank->id }}                            
                  </td>

                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    {{ $routine->music_title }}                  
                  </td>

                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Clear</a>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    @isset($routine->end)
                    {{ $routine->end->isoFormat('h:mm') }}                  
                    @endisset
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">End</a>
                  </td>

                </tr>

  @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>



  


@endforeach







</x-app-layout>
