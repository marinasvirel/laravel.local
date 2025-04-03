<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    @foreach ($strs as $key => $elem)
    {{ $key + 1 }} {{ $elem }}
    @endforeach
</x-layout>