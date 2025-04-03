<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    <table>
      <tr>
        @foreach ($arrNum as $subArr)
        @foreach ($subArr as $elem)
        <td>{{ $elem }}</td>
        @endforeach
        @endforeach
      </tr>
    </table>

</x-layout>