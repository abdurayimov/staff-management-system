@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		<h2>View all staff members</h2>
		<hr>
		<a href="{{ url('/home') }}" class="btn btn-primary btn-md"><i class="fa fa-dashboard"></i> Dashboard</a>
		<a href="{{ url('/staff/create') }}" class="btn btn-success btn-md"><i class="fa fa-plus"></i> Add new staff</a>
		<a href="{{ url('/payslips') }}" class="btn btn-info btn-md"><i class="fa fa-plus"></i> View Payrolls</a>
		<a href="{{ url('/users') }}" class="btn btn-default btn-md"><i class="fa fa-plus"></i> All Admins</a>
		<hr>
		@include('parts.message-block')
		<div class="table-responsive">
			@if (count($staff) !== 0)
				<?php $counter = 1; ?>
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center">S/N</th>
						<th class="text-center">Name</th>
						<th class="text-center">Level</th>
						<th class="text-center">Action</th>
					</thead>
					@foreach($staff as $staff)
						<tbody>
							<tr>
								<td class="text-center">{{ $counter }}</td>
								<td class="text-center">{{ $staff->name }}</td>
								{{--<td class="text-center">{{ $staff->email }}</td>--}}
								<td class="text-center">{{ $staff->level }}</td>
								{{--<td class="text-center">{{ $staff->phone }}</td>--}}
								<td class="text-center">
									<a href="{{ route('show-staff',$staff) }}" class="btn btn-info">View</a>
									<a href="{{ url('/staff/'.$staff->id.'/edit') }}" class="btn btn-info">Edit</a>
									<a href="{{ route('delete-staff',$staff) }}" class="btn btn-danger">Delete</a>
									<a href="{{ route('email-staff', $staff) }}" class="btn btn-success">Message</a>
									<a href="{{ route('create-staff-payroll', $staff) }}" class="btn btn-success">Generate Payslip</a>

								</td>
							</tr>
						</tbody>
						<?php $counter++ ?>
					@endforeach
				</table>
			@else
				<h1>There are no staff yet!</h1>
			@endif
		</div>
	</div>
</div>

@endsection

@endsection