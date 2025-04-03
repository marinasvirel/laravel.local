<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    <ul>
      @foreach ($num as $elem)
      <li>{{ $elem }}</li>
      @endforeach
    </ul>
    <h3>квадраты</h3>
    <ul>
      @foreach ($num as $elem)
      <li>{{ pow($elem, 2) }}</li>
      @endforeach
    </ul>
    <h3>квадратные корни</h3>
    <ul>
      @foreach ($num as $elem)
      <li>{{ sqrt($elem )}}</li>
      @endforeach
    </ul>
</x-layout>