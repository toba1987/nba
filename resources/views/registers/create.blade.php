@extends('layouts.master')
    @section('content')


    <h2>Register User</h2>

    <hr>

    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" class="form-control" id="name" name="name">
        </div>

         <div class="form-group">
            <label for="email">E-mail</label><br>
            <input type="text" class="form-control" id="email" name="email">
        </div>

     <div class="form-group">
              <label for="password">Password</label><br>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
              <label for="password_confirmation">Repeat the password</label><br>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach
    @endif
@endsection