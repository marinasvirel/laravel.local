<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    @unless ($age < 18)
    несовершеннолетний
    @endunless
</x-layout>

{{-- не работает --}}