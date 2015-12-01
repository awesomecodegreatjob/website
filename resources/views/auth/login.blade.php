@extends('layouts.admin.main')

@section('content')

    <div class="row">
        <div class="small-12 columns">

            <h2>Login</h2>

        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <form action="{{ route('auth.login') }}" method="post">

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Password</label>
                <input type="password" name="password">

                <input class="button" type="submit" value="Sign-in">
            </form>
        </div>
    </div>
    
@endsection