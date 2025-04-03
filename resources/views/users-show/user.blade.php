<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    <ul>
      @foreach ($num as $elem)
      @if ($elem % 2 == 0)
      <li>{{ $elem }}</li>
      @endif
      @endforeach
    </ul>

    @if(is_array($data))
    <ul>
      @foreach ($data as $elem)
      <li>{{ $elem }}</li>
      @endforeach
    </ul>
    @elseif(is_numeric($data))
    {{ $data }}
    @endif

</x-layout>