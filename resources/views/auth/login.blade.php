@extends('layout')

@section('content')
    <form class="p-4 " action="{{ route('auth') }}" method="post">
        {{ csrf_field() }}
        <fieldset class="gap-3">
            <div class="col-auto form-group">
                <label for="email" class="visually-hidden">email</label>
                <input type="text" class="form-control" id="inputPassword2" placeholder="email" name="email">
            </div>
            <div class="col-auto form-group" >
                <label for="password" class="visually-hidden">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
            </div>
        </fieldset>
    </form>
@endsection
