@extends('layouts.master')
@section('content')


<div class="container">
 <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Settings</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
<h1>{{ $profile->display_name }}</h1>
</div>    
    




@stop
