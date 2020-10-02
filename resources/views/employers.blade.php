@extends('layouts.main-layout')
@section('content')
  <ul>
    @foreach ($employers as $employer)
      <li>
        Nome: {{$employer -> firstname}}
        Cognome: {{$employer -> lastname}}
      </li>
    @endforeach
  </ul>
@endsection
