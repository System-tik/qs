<div class="flex basis-1/4 shadow-lg p-3 bg-{{$color}}-700 m-5 rounded hover:bg-{{ $color }}-500 transition duration-500 cursor-pointer">
    <div class="flex-1">
        <p>{{ $title }}</p>
        <p class="text-2xl font-bold ">{{ $number }}</p>
    </div>
    <div class="flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}" />
        </svg>
    </div>
</div>
