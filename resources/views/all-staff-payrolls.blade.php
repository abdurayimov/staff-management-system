@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		<h2>Просмотр всех платежек сотрудников</h2>
		<hr>
		@include('parts.action-buttons')
		<hr>
		@include('parts.message-block')
		<div class="table-responsive">
			@if (count($payrolls) !== 0)
				<?php $counter = 1; ?>
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center">Номер</th>
						<th class="text-center">Имя</th>
						<th class="text-center">Уровень</th>
						<th class="text-center">Доход</th>
						<th class="text-center">Чистая зарплата</th>
						<th class="text-center">Действие</th>
					</thead>
					@foreach($payrolls as $payroll)
						<tbody>
							<tr>
								<td class="text-center">{{ $counter }}</td>
								<td class="text-center">{{ $payroll->staff->user->name }}</td>
								<td class="text-center">{{ $payroll->staff->level }}</td>
								<td class="text-center">{{ $payroll->gross_salary }}</td>
								<td class="text-center">{{ $payroll->net_salary }}</td>
								<td class="text-center">
									<a href="{{ route('send-staff-payroll', [$payroll->staff,$payroll]) }}" class="btn btn-success">Отправить платежки сотрудникам</a>
								</td>
							</tr>
						</tbody>
						<?php $counter++ ?>
					@endforeach
				</table>
			@else
				<h1>Пока еще нет ни одной платежки сотрудников!</h1>
			@endif
		</div>
	</div>
</div>

@endsection

@endsection