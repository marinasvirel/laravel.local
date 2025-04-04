<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    <ul>
      @foreach($strs as $elem)
      @if ($loop->first)
      <li class="first">
        {{ $loop->iteration }}
        {{ $elem }}
      </li>
      @elseif ($loop->last)
      <li class="last">
        {{ $loop->iteration }}
        {{ $elem }}
      </li>
      @else
      <li>
        {{ $loop->iteration }}
        {{ $elem }}
      </li>
      @endif
      @endforeach
    </ul>

    @foreach ($num as $elem)
    @if($loop->remaining == 2 || $loop->remaining == 1 || $loop->remaining == 0)
    <i>{{ $elem }}</i>
    @else
    <b>{{ $elem }}</b>
    @endif
    @endforeach


</x-layout>