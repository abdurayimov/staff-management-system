@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		<h2>Просмотр сотрудников</h2>
		<hr>

		@include('parts.action-buttons')

		<hr>
		@include('parts.message-block')
		<div class="table-responsive">
			@if (count($staff) !== 0)
				<?php $counter = 1; ?>
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center">Номер</th>
						<th class="text-center">Имя</th>
						<th class="text-center">Уровень</th>
						<th class="text-center">Действие</th>
					</thead>
					@foreach($staff as $staff)
						<tbody>
							<tr>
								<td class="text-center">{{ $counter }}</td>
								<td class="text-center">{{ $staff->user->name }}</td>
								{{--<td class="text-center">{{ $staff->email }}</td>--}}
								<td class="text-center">{{ $staff->level }}</td>
								{{--<td class="text-center">{{ $staff->phone }}</td>--}}
								<td class="text-center">
									<a href="{{ route('show-staff',$staff) }}" class="btn btn-info">View</a>
									<a href="{{ url('/staff/'.$staff->id.'/edit') }}" class="btn btn-warning">Edit</a>
									<!--<a href="{{ route('delete-staff',$staff) }}" class="btn btn-danger">Delete</a>-->
									<a href="{{ url('/staff/'.$staff->id.'/delete') }}" class="btn btn-danger">Delete</a>
									<a href="{{ route('email-staff', $staff) }}" class="btn btn-success">Message</a>
									<a href="{{ route('create-staff-payroll', $staff) }}" class="btn btn-success">Платежка</a>

								</td>
							</tr>
						</tbody>
						<?php $counter++ ?>
					@endforeach
				</table>
			@else
				<h1>Пока нет ни одного сотрудника!</h1>
			@endif
		</div>
	</div>
</div>

@endsection

@endsection