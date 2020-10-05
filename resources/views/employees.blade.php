@extends('layouts.main-layout')
@section('content')
  <ul>
    @foreach ($employees as $employee)
      <li>
        Nome: {{$employee -> firstname}}
        Cognome: {{$employee -> lastname}}
      </li>
    @endforeach
  </ul>
@endsection
