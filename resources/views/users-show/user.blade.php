<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    @for ($i = 0; $i <= 10; $i++)
      <p>{{ $i }}</p>
      @endfor

</x-layout>