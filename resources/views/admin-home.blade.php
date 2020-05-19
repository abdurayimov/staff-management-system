@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')
	<div class="panel panel-default">
		<div class="panel-body">
			<h2>Привет, {{ Auth::user()->name }}</h2>
			<hr>
			@include('parts.action-buttons')
			<hr>
			<p class="lead">
				<h3>Недавняя активность</h3>

				<ul>
					@foreach($recent_activities as $activity)
						<li>{{ $activity->trail_activity_details }}</li>
					@endforeach
				</ul>
			</p>
		</div>
	</div>
@endsection

@endsection
