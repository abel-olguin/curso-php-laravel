@extends('layouts.auth')

@section('content')

    <div class="p-5 bg-gray-200 shadow-sm border rounded border-gray-200">
        <h1 class="w-full text-center font-bold text-2xl">Login</h1>
        <form action="login" method="post">
            @csrf
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="input">
                    @error('email')
                    <small class="text-red-700 text-xs">{{$message}}</small>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="input">
                    @error('password')
                    <small class="text-red-700 text-xs">{{$message}}</small>
                    @enderror
                </div>

                <button type="submit" class="w-full btn-default">Entrar</button>

            </div>
        </form>
    </div>
@endsection

