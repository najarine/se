@extends('Layouts.app')
@section('content')


<div class="container">
<div class="jumbotron">
    <h4> Name: {{$nameKey}}<br></h4>
    <h4> Username: {{$usernameKey}}<br></h4>
    <h4> Email: {{$emailKey}}<br></h4>
    <h4> facebook: <a href="{{$link_1_Key}}">{{$link_1_Key}}</a><br></h4>
    <h4> Linkedin: <a href="{{$link_2_Key}}">{{$link_2_Key}}</a><br></h4>
    <h4> Website: <a href="{{$link_3_Key}}">{{$link_3_Key}}</a><br></h4>

  
  
  
  
  
</div>
</div>


@endsection