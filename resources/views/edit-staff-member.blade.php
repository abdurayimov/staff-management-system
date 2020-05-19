@extends('layouts.app')
@extends('layouts.admin')

@section('content')
@section('body')

	<div class="panel panel-default">
		<div class="panel-body">
			<h2>Редактирование профиля {{ $staff->user->name }}</h2>
			<hr>

			@include('parts.action-buttons')

			<hr>
			@include('parts.message-block')

			<img width="300" src="{{ asset('staff-img/'.$staff->image) }}" class="thumbnail" alt="{{ $staff->name }}">
			<br>
			<form action="{{ route('update-staff', ['id' => $staff->id]) }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

				{{ method_field('PUT') }}
				<input type="hidden" name="user_id" value="{{ $staff->user_id }}">
				<div class="form-group">
					<label for="name">Полное имя</label>
					<input type="text" name="name" placeholder="Full name" value="{{ $staff->user->name }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="email">Email адрес</label>
					<input type="email" name="email" placeholder="Email Address" value="{{ $staff->user->email }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="age">Возраст</label>
					<input type="number" name="age" placeholder="Age" value="{{ $staff->age }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="phone">Телефон</label>
					<input type="tel" name="phone" placeholder="Phone number" value="{{ $staff->phone }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="image">Обновить фото сотрудника</label>
					<input type="file" name="image" class="form-control">
				</div>

				<div class="form-group">
					<label for="address">Адрес проживания</label>
					<input type="text" name="address" placeholder="Residential Address" value="{{ $staff->address }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="city">Город</label>
					<input type="text" name="city" placeholder="City" value="{{ $staff->city }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="state">Область</label>
					<input type="text" name="state" placeholder="State" value="{{ $staff->state }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="country">Страна</label>
					<input type="text" name="country" placeholder="Country" value="{{ $staff->country }}" class="form-control">
				</div>

				<div class="form-group">
					<label for="level">Уровень сотрудника</label>
					<select name="level" class="form-control">
						<option value="">Выбрать уровень сотрудника</option>
						<option value="Интерн" {{ $staff->level == 'Intern' ? 'selected' : ''  }}>Интерн</option>
						<option value="Младший" {{ $staff->level == 'Junior' ? 'selected' : ''  }}>Младший</option>
						<option value="Старший" {{ $staff->level == 'Senior' ? 'selected' : ''  }}>Старший</option>
						<option value="Руководитель" {{ $staff->level == 'Supervisor' ? 'selected' : ''  }}>Руководитель</option>
						<option value="Менеджер" {{ $staff->level == 'Manager' ? 'selected' : ''  }}>Менеджер</option>
					</select>
				</div>


				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="is_admin" {{ $staff->user->is_admin ? 'checked' : '' }}> Сделать администратором
						</label>
					</div>
				</div>

				<div class="form-group">
					<label for="start_work_date">Дата начала работы</label>
					<input type="date" name="start_work_date" value="{{ $staff->start_work_date->format('Y-m-d') }}" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-md">Принять изменения</button>
				</div>
			</form>
		</div>
	</div>

@endsection
@endsection