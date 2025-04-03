<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    @if (count($num) > 0)
    {{ array_sum($num) }}
    @else
    в массиве нет записей
    @endif
</x-layout>