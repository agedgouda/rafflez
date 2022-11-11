<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Start Our Drawings --}}
    <div class="py-12 bg-blue-25">
        <h2 class="font-normal text-6xl text-center">Our Drawings</h2>
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 lg:px-96">
            @foreach ($drawings as $drawing)
            <div class="bg-white shadow-sm rounded-[30px]">
                <div class="group relative">
                    <div class="min-h-80 aspect-w-1 aspect-h-1 w-full rounded-md group-hover:opacity-75 lg:aspect-none p-4">
                        <img src="/img/nike.png" alt="Nike Shoe Prize" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-[20px]">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div x-data="raffle">
                            <h3 class="text-2xl text-gray-700 ml-4">
                                <span aria-hidden="true" class="inset-0"></span>
                                Nike Shoe
                            </h3>
                            <x-primary-button type="button" class="ml-3" @click="enterRaffle({{ $drawing->id}})">
                                {{ __('Enter Raffle') }}
                            </x-primary-button>
                            <p class="p-2 text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In accumsan lorem nec ultrices maximus. Curabitur eget felis viverra.</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- End Our Drawings --}}
</x-app-layout>
