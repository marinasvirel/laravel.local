<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    @forelse ($names as $elem)
    <p>{{ $elem }}</p>
    @empty
    <p>в массиве нет элементов</p>
    @endforelse

</x-layout>