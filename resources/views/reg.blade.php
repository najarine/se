@extends('Layouts.app')

@section('content')

<div class="container">
    <input type="text" class="form-control" id="username" name="username" placeholder="Username (Permanent superL.INK)">
    <input type="text" class="form-control" id="fullname" name="full_name" placeholder="Full Name">
    <input class="form-control" id="email" type="email" placeholder="Email" name="email">
    <input class="form-control" id="link_1" type="text" placeholder="Facebook" name="link_1">
    <input class="form-control" id="link_2" type="text" placeholder="Linkein" name="link_2">
    <input class="form-control" id="link_3" type="text" placeholder="Website" name="link_3">

    <button class="btn btn-default btn-register" onclick="sendData()">Register</button>
</div>

@endsection