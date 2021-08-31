@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your Name...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Message</label>
            <textarea class="form-control" rows="5" placeholder="Please enter your requested date..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Request avability</button>
    </form>
</div>
@endsection

