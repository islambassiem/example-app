<div class="flex justify-center items-center flex-col mt-10">

    <div class="text-xl font-bold underline">Livewire</div>
    <div class="flex justify-center items-center flex-col">
        <button wire:click="increment" class="px-2 py-1 bg-green-600 text-white rounded-md w-10 my-2">+</button>
        <div>{{ $count }}</div>
        <button wire:click="decrement" class="px-2 py-1 bg-red-600 text-white rounded-md w-10 my-2">-</button>
    </div>


    <hr class="border border-black w-24 my-10">

    <div class="text-xl font-bold underline">Alpine Js</div>
    <div x-data="{ count: 0 }" class="flex justify-center items-center flex-col">
        <button x-on:click="count++" class="px-2 py-1 bg-green-600 text-white rounded-md w-full my-2">Increment</button>

        <h1 x-text="count" class="block mx-auto"></h1>

        <button x-on:click="count--" class="px-2 py-1 bg-red-600 text-white rounded-md w-full my-2">Decrement</button>
    </div>
</div>
