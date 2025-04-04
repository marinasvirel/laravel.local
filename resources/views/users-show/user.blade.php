<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    <!--  №1 -->
    @foreach($links as $elem)
    <a href="http://{{$elem['href']}}">{{$elem['text']}}</a>
    @endforeach

    <!-- №2 -->
    <ul>
      @foreach($links as $elem)
      <li><a href="http://{{$elem['href']}}">{{$elem['text']}}</a></li>
      @endforeach
    </ul>

    <!-- №3 -->
    <table>
      @foreach($employees as $elem)
      <tr>
        <td>{{ $elem['name'] }}</td>
        <td>{{ $elem['surname'] }}</td>
        <td>{{ $elem['salary'] }}</td>
      </tr>
      @endforeach
    </table>

    <!-- №4 -->
    <table>
      <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Зарплата</th>
      </tr>
      @foreach($employees as $elem)
      <tr>
        <td>{{ $elem['name'] }}</td>
        <td>{{ $elem['surname'] }}</td>
        <td>{{ $elem['salary'] }}</td>
      </tr>
      @endforeach
    </table>

    <!-- №5 -->
    <table>
      <tr>
        <th>Номер</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Зарплата</th>
      </tr>
      @foreach($employees as $key => $elem)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $elem['name'] }}</td>
        <td>{{ $elem['surname'] }}</td>
        <td>{{ $elem['salary'] }}</td>
      </tr>
      @endforeach
    </table>

    <!-- №6 -->
    <table>
      <tr>
        <th>Номер</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Зарплата</th>
      </tr>
      @foreach($employees as $key => $elem)
      @if($elem['salary'] > 2000)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $elem['name'] }}</td>
        <td>{{ $elem['surname'] }}</td>
        <td>{{ $elem['salary'] }}</td>
      </tr>
      @endif
      @endforeach
    </table>

    <!-- №7 -->
    <table>
      <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Статус</th>
      </tr>
      @foreach($users as $key => $elem)
      <tr>
        <td>{{ $elem['name'] }}</td>
        <td>{{ $elem['surname'] }}</td>
        @if($elem['banned'] == true)
        <td>забанен</td>
        @else
        <td>активен</td>
        @endif
      </tr>
      @endforeach
    </table>

    <!-- №8 -->
    <table>
      <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Статус</th>
      </tr>
      @foreach($users as $key => $elem)
      <tr>
        <td>{{ $elem['name'] }}</td>
        <td>{{ $elem['surname'] }}</td>
        @if($elem['banned'] == true)
        <td style="color: red;">забанен</td>
        @else
        <td style="color: green;">активен</td>
        @endif
      </tr>
      @endforeach
    </table>

    <!-- №9 -->
    @foreach($strs as $elem)
    <input type="text" value="{{ $elem }}">
    @endforeach

    <!-- №10 -->
    <select name="select" id="">
      @foreach($strs as $elem)
      <option value="{{$elem}}">{{$elem}}</option>
      @endforeach
    </select>

    <!-- №11 -->
    <ul>
      @foreach($days as $elem)
      @if($elem == $n)
      <li class="active">{{$elem}}</li>
      @else
      <li>{{$elem}}</li>
      @endif
      @endforeach
    </ul>

</x-layout>