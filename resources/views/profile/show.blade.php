@extends('layouts.master')
@section('content')


<div class="container">
	<ul class="nav nav-tabs">
		<li role="presentation" class="active"><a href="#">Settings</a></li>
		<li role="presentation"><a href="#">Profile</a></li>
		<li role="presentation"><a href="#">Messages</a></li>
	</ul>
	<h1>{{ $profile->display_name }}</h1>
	<div class="col-xs-12">
		@foreach($projects as $project)
			<span class="project-container" style="background-image:url('/{{ $project->url }}')"></span>
		@endforeach
	</div>
</div>    
    




@stop
