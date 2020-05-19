@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		<h2>Просмотр всех администраторов</h2>
		<hr>

		@include('parts.action-buttons')

		<hr>
		@include('parts.message-block')
		<div class="table-responsive">
			@if (count($admins) !== 0)
				<?php $counter = 1; ?>
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center">Номер</th>
						<th class="text-center">Имя</th>
						<th class="text-center">Email</th>
						<th class="text-center">Действие</th>
					</thead>
					@foreach($admins as $admin)
						<tbody>
							<tr>
								<td class="text-center">{{ $counter }}</td>
								<td class="text-center">{{ $admin->name }}</td>
								<td class="text-center">{{ $admin->email }}</td>
								<td class="text-center">
									<a href="{{ route('edit-staff',$admin) }}" class="btn btn-info">Edit</a>
								</td>
							</tr>
						</tbody>
						<?php $counter++ ?>
					@endforeach
				</table>
			@else
				<h1>Пока нет ни одного администратора!</h1>
			@endif
		</div>
	</div>
</div>

@endsection

@endsection