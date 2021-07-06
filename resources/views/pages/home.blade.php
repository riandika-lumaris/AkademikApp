@extends('layouts.default')

@section('content')
    <h1 style="background:lime">INI CONTENT</h1>

    @for ($i = 0; $i < 10; $i++)
        <h2>{{ $i }}</h2>
    @endfor


@endsection

