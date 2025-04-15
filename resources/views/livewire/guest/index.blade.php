<div class="flex flex-col">
    <div class="h-135 bg-center bg-cover bg-no-repeat relative pt-8" style="background-image: url('{{ url('images/dog.webp') }}'); ">
        <div class="absolute inset-0 bg-[#6a6c81] opacity-50 "></div>
        <div class="mx-auto max-w-7xl relative flex flex-col">
            <div class="w-full flex flex-row gap-4 justify-start items-center h-24">
                <img class="w-20" src="{{ url('images/logo.png') }}">
                <span class="text-3xl text-white">PAWTASTIC</span>
            </div>
            <div class="w-full flex flex-row justify-end items-end">
                <div class="w-100 flex flex-col gap-6 text-white" x-data>
                    <div class="flex flex-row gap-10 text-lg">
                        <a href="#about-us" class="cursor-pointer" @click.prevent="document.querySelector('#about-us').scrollIntoView({ behavior: 'smooth' })">About Us</a>
                        <a href="#book-schedule" class="cursor-pointer" @click.prevent="document.querySelector('#book-schedule').scrollIntoView({ behavior: 'smooth' })">Schedule a Visit</a>
                    </div>
                    <div class="text-3xl font-bold">
                        We care for your furry little loved ones while ensuring they receive the best medical attention and loving care they deserve.
                    </div>
                    <a href="#book-schedule" class="p-4 bg-white w-50 rounded-full text-gray-600 hover:bg-gray-600 hover:text-white cursor-pointer text-center" @click.prevent="document.querySelector('#book-schedule').scrollIntoView({ behavior: 'smooth' })">
                        Schedule a Visit
                    </a>
                </div>
            </div>
            
        </div>

    </div>
    <div class="mx-auto max-w-7xl">
        <div class="w-full grid grid-cols-2 gap-24 py-30 items-center " id="about-us">
            <div class="flex flex-col">
                <div class="font-bold text-3xl mb-10">
                    Expert care for your furry, feathery, or scaley friend!
                </div>
                <div class="text-xl mb-16">
                    We know how stressful it is to leave your pets at home alone. We're a team of experienced animal caregivers well connected to local veteranian. Trust to us to love there like out owls and to keep them safe and happy till you're home.
                </div>
                <a href="#book-schedule" class="p-4 bg-gray-600 text-white w-50 rounded-full text-gray-900 hover:bg-gray-200 hover:text-gray-600 cursor-pointer text-center" @click.prevent="document.querySelector('#book-schedule').scrollIntoView({ behavior: 'smooth' })">
                    Schedule a Visit
                </a>
            </div>
            <div class="grid grid-cols-2 gap-10">
                <div class="aspect-square bg-center bg-cover bg-no-repeat w-full rounded-md relative" style="background-image: url('{{ url('images/cat.webp') }}'); ">
                    <div class="absolute inset-0 bg-[#535973] opacity-10 "></div>
                </div>
                <div class="aspect-square bg-center bg-cover bg-no-repeat w-full rounded-md relative" style="background-image: url('{{ url('images/parrot.webp') }}'); ">
                    <div class="absolute inset-0 bg-[#535973] opacity-10 "></div>
                </div>
                <div class="aspect-square bg-center bg-cover bg-no-repeat w-full rounded-md relative" style="background-image: url('{{ url('images/dogs.webp') }}'); ">
                    <div class="absolute inset-0 bg-[#535973] opacity-10 "></div>
                </div>
                <div class="aspect-square bg-center bg-cover bg-no-repeat w-full rounded-md relative" style="background-image: url('{{ url('images/hamster.webp') }}'); ">
                    <div class="absolute inset-0 bg-[#535973] opacity-10 "></div>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-rows-2  " id="book-schedule">
            <div class="w-1/3 bg-[#535973] p-18 text-white flex flex-col gap-6">
                <div class="w-full flex flex-row gap-4 justify-start items-center h-24">
                    <img class="w-15" src="{{ url('images/logo.png') }}">
                    <span class="text-3xl text-white">PAWTASTIC</span>
                </div>
                <div class="font-bold text-2xl">
                    All services include:
                </div>
                <ul class="list-disc pl-10">
                    <li class="pb-5">
                        A Photo updatefor you along
                    </li>
                    <li class="pb-5">
                        Notifications of other arrival
                    </li>
                    <li class="pb-5">
                        Treats for your pet
                    </li>
                </ul>
            </div>
            <div class="w-3/4 bg-[#f7eceb] p-18 flex flex-col gap-10">
                <div class="text-[#535973] font-bold text-4xl">
                    We'll taker your dog for a walk. Just tell us when!
                </div>
                <div class="flex flex-col gap-10">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col gap-2">
                            <span>
                                Frequency
                            </span>
                            <div class="p-2 grid grid-cols-2">

                                <button class="cursor-pointer p-2 rounded-md {{ $frequency == 'recurring' ? 'bg-[#f1d0cd]' : '' }}" wire:click="changeFrequency('recurring')">
                                    Recurring
                                </button>
                                <button class="cursor-pointer {{ $frequency == 'one-time' ? 'bg-[#f1d0cd]' : '' }}"  wire:click="changeFrequency('one-time')">
                                    One Time
                                </button>

                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span>
                                Start Date
                            </span>
                            <input type="date" placeholder="MM/DD/YYYY" class="bg-white p-2 rounded-sm">
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span>
                            Days
                        </span>
                        @php
                            $weekDays = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                        @endphp
                        <div class="grid grid-cols-7 w-full bg-white border-1 border-gray-300 rounded-sm">
                            @foreach ($weekDays as $day)
                                <button 
                                        wire:click="toggleDay('{{ $day }}')" 
                                        class="cursor-pointer border border-gray-300 p-2 rounded
                                            {{ in_array($day, $days) ? 'bg-[#f1d0cd]' : 'bg-white' }}"
                                        type="button"
                                >
                                    {{ $day }}
                                </button>
                            @endforeach
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <span>
                        Times
                    </span>
                    <div class="grid grid-cols-3 w-full bg-white">
                        <button class="cursor-pointer border-1 border-gray-300 p-2">Morning</button>
                        <button class="cursor-pointer border-1 border-gray-300 p-2">Afternoon</button>
                        <button class="cursor-pointer border-1 border-gray-300 p-2">Evening</button>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <span>
                        Notes
                    </span>
                    <textarea placeholde="Notes" class="w-full h-32 rounded-md border-1 border-gray-300"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
