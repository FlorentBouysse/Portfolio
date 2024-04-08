@extends('back.base')

@section('content')

<form class="flex flex-col relative md:w-1/2 md:m-auto" action="{{ route('auth.login') }}" method="post">
            @csrf
            <label class="text-start" for="email">Email</label>
            <input class="mb-2 rounded-lg pl-4" type="email" name="email" id="email" value="{{ old('email') }}">

            <label class="text-start" for="name_projet">Mot de passe</label>
            <input class="mb-2 rounded-lg pl-4" type="password" name="password" id="password">

            <button href="#" class="text-center text-white bg-red-950 rounded-lg w-1/2">
                Entrer
            </button>
        </form>


@endsection