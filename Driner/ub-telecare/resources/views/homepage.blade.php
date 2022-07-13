@extends('masterlayout.master')
@extends('masterlayout.navigation')

@section('content')
    @if (Auth::user()->hasRole('administrator'))
        <h1>Logged in as Admin</h1>
    @elseif (Auth::user()->hasRole('physician'))
        <h1>Logged in as Physician</h1>
    @elseif (Auth::user()->hasRole('nurse'))
        <h1>Logged in as Nurse</h1>
    @elseif (Auth::user()->hasRole('patient'))
        <h1>Logged in as Patient</h1>
    @endif
@endsection
