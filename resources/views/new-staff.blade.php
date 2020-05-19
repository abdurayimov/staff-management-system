@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		<h2>Добавление нового администратора/сотрудника</h2>
		<hr>
		@include('parts.action-buttons')
		<hr>
		@include('parts.message-block')
		<form action="{{ route('add-new-staff') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Полное имя</label>
				<input type="text" name="name" placeholder="Full name" value="{{ old('name') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Email адрес</label>
				<input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="age">Возраст</label>
				<input type="number" name="age" placeholder="Age" value="{{ old('age') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="phone">Телефон</label>
				<input type="tel" name="phone" placeholder="Phone number" value="{{ old('phone') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="image">Фото сотрудника</label>
				<input type="file" name="image" class="form-control">
			</div>

			<div class="form-group">
				<label for="address">Адрес проживания</label>
				<input type="text" name="address" placeholder="Residential Address" value="{{ old('address') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="city">Город</label>
				<input type="text" name="city" placeholder="City" value="{{ old('city') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="state">Область/Район</label>
				<input type="text" name="state" placeholder="State" value="{{ old('state') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="country">Страна</label>
				<input type="text" name="country" placeholder="Country" value="{{ old('country') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="level">Уровень сотрудника</label>
				<select name="level" class="form-control">
					<option value="">Выбрать уровень сотрудника</option>
					<option value="Интерн">Интерн</option>
					<option value="Младший">Младший сотрудник</option>
					<option value="Старший">Старший сотрудник</option>
					<option value="Руководитель">Руководитель</option>
					<option value="Менеджер">Менеджер</option>
				</select>
			</div>

			<div class="form-group">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="is_admin" {{ old('is_admin') ? 'checked' : '' }}> Сделать администратором
					</label>
				</div>
			</div>

			<div class="form-group">
				<label for="start_work_date">Дата начала работы</label>
				<input type="date" name="start_work_date" placeholder="12th June, 2018" value="{{ old('start_work_date') }}" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-md">Принять изменения</button>
			</div>
		</form>
	</div>
</div>

@endsection

@endsection