@extends('base')

@section('title', 'Connexion')

@section('content')

    <div class="px-4 md:px-0 md:w-1/2 md:mx-auto">
        <form action="" method="post">
            @csrf
            <div class="my-6">
                <label for="email" class="input-label @error('email') input-error-label @enderror">
                    Email
                </label>
                <input type="email" name="email" id="email"
                       class="input @error('email') input-error @enderror"
                       value="{{ old('email') }}"
                       required
                />

                @error('email')
                <div class="input-error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-6">
                <label for="password" class="input-label @error('password') input-error-label @enderror">
                    Mot de passe
                </label>
                <input type="password" name="password" id="password"
                       class="input @error('password') input-error @enderror"
                       required
                />

                @error('password')
                <div class="input-error-message">{{ $message }}</div>
                @enderror
            </div>
            <button class="button" type="submit">Connexion</button>
        </form>
    </div>

@endsection
