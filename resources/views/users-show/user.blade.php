<x-layout>
  <x-slot:title>
    {{ $title }}
    </x-slot>  
    <p class="{{ $class }}" style="color: {{$color}}">Фамилия: {{ $surname }}</p>
    <p class="{{ $class }}">Имя: {{ $name }}</p>
    <p class="{{ $class }}">Возраст: {{ $age }}</p>
    <p class="{{ $class }}">Зарплата: {{ $salary }}</p>
    <a href="{{$href}}">{{$text}}</a>
    <input type="text" value="{{$value1}}">
    <input type="text" value="{{$value2}}">
    <input type="text" value="{{$value3}}">
</x-layout>