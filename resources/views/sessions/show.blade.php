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

                  <tr id="routine-{{ $routine->id }}">

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-90 text-left">

                      @if ($routine->can_record_start)
                        <!-- ClockIcon -->
                        <a href="#routine-{{ $routine->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg></a>
                      @endif

                      @if ($routine->can_clear_start)
                        <!-- DeleteIcon -->
                        <a href="#routine-{{ $routine->id }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg></a>
                      @endif

                      @isset($routine->start)
                        <span class="px-2">
                          {{ $routine->start->isoFormat('h:mm') }}
                        </span>
                      @endisset                    

                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      <span class="px-1">{{ $routine->sequence }}</span>
                      <span class="px-1">{{ $routine->team->cohort->club->short_name }}</span>
                      <span class="px-1">Team {{ $routine->team->team_rank->id }}</span>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{ $routine->music_title }}
                    </td>

                   <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-right">
                      
                      @isset($routine->end)
                        <span class="px-2">{{ $routine->end->isoFormat('h:mm') }}</span>
                      @endisset
                      
                      @if ($routine->can_record_end)
                        <!-- ClockIcon -->
                        <a href="#routine-{{ $routine->id }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg></a>
                      @endif

                      @if ($routine->can_clear_end)
                        <!-- DeleteIcon -->
                        <a href="#routine-{{ $routine->id }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg></a>
                      @endif

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
