@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		<h2>Просмотр всех отпусков по {{ $leaves->user->name }}</h2>
		<h3>Ваши текущие непогашенные дни отпуска: <span class="text-info">{{ $leaves->getOutStandingLeaveDays() }} </span> дней</h3>
		<hr>

		@include('parts.action-buttons')

		<hr>
		@include('parts.message-block')
		<div class="table-responsive">
			@if (count($leaves->leaves) !== 0)
				<?php $counter = 1; ?>
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center">Номер</th>
						<th class="text-center">Дата начала отпуска</th>
						<th class="text-center">Дата окончания отпуска</th>
						<th class="text-center">Причиная отпуска</th>
						<th class="text-center">Status</th>
					</thead>
					@foreach($leaves->leaves as $leaf)
						<tbody>
							<tr>
								<td class="text-center">{{ $counter }}</td>
								<td class="text-center">{{ $leaf->leave_start_date->format('l jS \\of F Y')}}</td>
								<td class="text-center">{{ $leaf->leave_end_date->format('l jS \\of F Y')}}</td>
								<td class="text-center">{{ $leaf->reason_for_leave }}</td>
								<td class="text-center">
									@if ($leaf->is_approved == true)
										<span class="text-info">{{ 'Одобрен' }} </span>
									@else
										<span class="text-danger">{{ 'Ожидание одобрения' }}</span>
									@endif
								</td>
							</tr>
						</tbody>
						<?php $counter++ ?>
					@endforeach
				</table>
			@else
				<h1>У этого пользователя еще нет заявок на отпуск!</h1>
			@endif
		</div>
	</div>
</div>

@endsection

@endsection