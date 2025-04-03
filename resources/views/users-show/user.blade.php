<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    <ul>
      @foreach ($employees as $employe)
      <li>{{ $employe['name'] }} {{ $employe['surname'] }} {{ $employe['salary'] }}</li>
      @endforeach
    </ul>

    <table>
    @foreach ($employees as $employe)
    <tr>
      <td>{{ $employe['name'] }}</td>
      <td>{{ $employe['surname'] }}</td>
      <td>{{ $employe['salary'] }}</td>
    </tr>
    @endforeach
    </table>

</x-layout>