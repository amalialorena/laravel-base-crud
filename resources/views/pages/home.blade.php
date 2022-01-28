@extends('layouts.main-layout')
@section('content')

<ul>
    @foreach($comics as $comic)
    <li>
       {{-- <a href="route{{}}"> --}}
            {{ $comic -> title }}
        {{-- </a> --}}
    </li>
    @endforeach
</ul>
@endsection