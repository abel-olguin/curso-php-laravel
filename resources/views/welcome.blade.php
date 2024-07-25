@extends('layouts.app')
@section('content')
    <nav>
        <ul>
            @auth
                <form action="{{route('login.logout')}}" method="post">
                    @csrf
                    <button type="submit">Cerrar sesión</button>
                </form>
            @else
                <li><a href="{{route('login.index')}}">Login</a></li>

            @endauth
        </ul>
    </nav>

@endsection
