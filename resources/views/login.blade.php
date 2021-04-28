@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="post">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Email Address</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-default">submit</button>
            </form>
        </div>
    </div>
</div>
@endsection