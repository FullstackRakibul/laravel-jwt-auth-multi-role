@extends('layout')

@section('content')
    <form class="p-4 " action="{{ route('register') }}" method="post">
        {{ csrf_field() }}
        <fieldset class="gap-3">
            <div class="col-auto form-group">
                <label for="email" class="">email</label>
                <input type="text" class="form-control" placeholder="email" name="email">
            </div>
            <div class="col-auto form-group">
                <label for="email" class="">name</label>
                <input type="text" class="form-control" placeholder="name" name="name">
            </div>
            <div class="col-auto form-group" >
                <label for="password">Password</label>
                <input class="form-control" placeholder="Password" name="password">
            </div>
            <div class="col-auto form-group" >
                <label class="visually-hidden">Password</label>
                <input type="password" class="form-control"placeholder="Password" name="password_confirmation">
            </div>
            <!-- <select class="form-select" aria-label="Default select example" name="role">
                <option selected> Select the role </option>
                <option value="admin">Admin</option>
                <option value="employee">Employee</option>
            </select> -->
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
            </div>
        </fieldset>
    </form>
@endsection
