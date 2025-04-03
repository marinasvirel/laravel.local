<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>
    @if ($age > 18)
    <p class="{{ $class }}">Фамилия: {{ $surname }}</p>
    <p class="{{ $class }}">Имя: {{ $name }}</p>
    <p class="{{ $class }}">Возраст: {{ $age }}</p>
    <p class="{{ $class }}">Зарплата: {{ $salary }}</p>
    <a href="{{ $href }}">{{$text}}</a>
    <input type="text" value="{{ $value1 }}">
    <input type="text" value="{{ $value2 }}">
    <input type="text" value="{{ $value3 }}">
    <p>current timestamp: {{ date('d.m.Y') }}</p>
    <p>{{ $arr['name'] }}</p>
    <p>{{ $arr['age'] }}</p>
    <p>{{ $arr['salary'] }}</p>
    <div>{{ count($arr) }}</div>
    <p>{{-- $city ?? 'Москва' --}}</p>
    <p>{ {$location['country'] ?? 'Россия' }}</p>
    <p>{{ $location['city'] ?? 'Москва' }}</p>
    <p>{{ $year ?? date('Y') }}</p>
    <p>{{ $month ?? date('m') }}</p>
    <p>{{ $day ?? date('d') }}</p>
    <p>{!! $str !!}</p>
    @elseif ($age === 18)
    вам 18
    @else
    вам меньше 18
    @endif
</x-layout>