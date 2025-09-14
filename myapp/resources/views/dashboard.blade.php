<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>




    @if (Auth::user()->tools)
       <h1 class="text-white">  Your Tools</h1>
    <ul>
        @foreach (Auth::user()->tools as $tool)



            <div class="max-w-2xl px-8 py-4  m-1 justify-center bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-light text-gray-600 dark:text-gray-400"> signed out at {{$tool->signed_out_at}}</span>
                    <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">Design</a>
                </div>

                <div class="mt-2">
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Tool Name: {{$tool->name}} </p>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <a href="#" class="text-green-600 dark:text-green-400 hover:underline" tabindex="0" role="link">Read more</a>

                    <div class="flex items-center">
                        <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link"> {{$tool->user->name}}</a>
                    </div>
                </div>
            </div>


        @endforeach
    </ul>
    @else
        You have no tools
    @endif




</x-app-layout>
