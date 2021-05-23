<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    Welcome! 
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    This is a work in progress; please let Brendan know if 
                    there's anything useful you think we should add.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
