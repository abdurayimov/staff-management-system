@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		{{--<h2>Просмотр всех отпусков по {{ $leaves->user->name }}</h2>--}}
		<h2>Просмотр всех <span class="text-info">{{ $leave_type }}</span> отпусков</h2>
		<hr>

		@include('parts.action-buttons')

		<hr>
		@include('parts.message-block')
		<div class="table-responsive">
			@if (count($leaves) !== 0)
				{{ $counter = 1 }}
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center">Номер</th>
						<th class="text-center">Имя сотрудника</th>
						<th class="text-center">Дата начала отпуска</th>
						<th class="text-center">Дата окончания отпуска</th>
						<th class="text-center">Причина отпуска</th>
						<th class="text-center">Действие/статус</th>
					</thead>
					@foreach($leaves as $leaf)
						<tbody>
							<tr>
								<td class="text-center">{{ $counter }}</td>
								<td class="text-center">{{ $leaf->staff->user->name }}</td>
								<td class="text-center">{{ $leaf->leave_start_date->format('l jS \\of F Y') }}</td>
								<td class="text-center">{{ $leaf->leave_end_date->format('l jS \\of F Y') }}</td>
								<td class="text-center">{{ $leaf->reason_for_leave }}</td>
								<td class="text-center">
									@if ($leaf->is_approved == false)
										<form method="post" action="{{ route('admin-approve-leave') }}">
											{{ csrf_field() }}
											<input type="hidden" name="leave_id" value="{{ $leaf->id }}">
											<button type="submit" class="btn btn-primary btn-md"> Одобрить</button>
										</form>
									@else
										<span class="text-info">Одобрен</span>
									@endif

								</td>
							</tr>
						</tbody>
						{{ $counter++ }}
					@endforeach
				</table>
			@else
				<h1>Пока еще нет {{ strtoupper($leave_type) }} отпусков!</h1>
			@endif
		</div>
	</div>
</div>

@endsection

@endsection