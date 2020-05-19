@extends('layouts.app')
@extends('layouts.admin')

@section('content')

@section('body')

<div class="panel panel-default">
	<div class="panel-body">
		<h2>Генерирование платежки {{ $staff->name }}</h2>
		<hr>
		<a href="{{ url('/home') }}" class="btn btn-primary btn-md"><i class="fa fa-dashboard"></i> Панель управления</a>
		<a href="{{ url('/all-staff-members') }}" class="btn btn-primary btn-md"><i class="fa fa-users"></i> Просмотр сотрудников</a>
		<hr>
		@include('parts.message-block')
		<form action="{{ route('store-staff-payroll') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

			<input type="hidden" name="staff_id" value="{{ $staff->id }}">
			<div class="form-group">
				<label for="gross_salary">Доход</label>
				<input type="number" name="gross_salary" placeholder="Введите 'грязную' зарплату, например, 50000" value="{{ old('gross_salary') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="tax_percentage">Налог</label>
				<input type="number" name="tax_percentage" placeholder="Введите процент налога, например, 15" value="{{ old('tax_percentage') }}" class="form-control">
			</div>

			<div class="form-group">
				<label for="month">Заработная плата за месяц </label>
				<select name="month" class="form-control">
					<option value="">Выбрать месяц</option>
					<option value="January">Январь</option>
					<option value="February">Февраль</option>
					<option value="March">Март</option>
					<option value="April">Апрель</option>
					<option value="May">Май</option>
					<option value="June">Июнь</option>
					<option value="July">Июль</option>
					<option value="August">Август</option>
					<option value="September">Сентябрь</option>
					<option value="October">Октябрь</option>
					<option value="November">Ноябрь</option>
					<option value="December">Декабрь</option>
				</select>
			</div>


			<div class="form-group">
				<label for="year">Выберите год для указанного выше месяца </label>
				<select name="year" class="form-control">
					<option value="">Выбрать год</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="year">2019</option>
					<option value="2019">2020</option>
					<option value="2021">2021</option>
					<option value="year">2022</option>
					<option value="2022">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
					<option value="2027">2027</option>
					<option value="2028">2028</option>
					<option value="2029">2029</option>
				</select>
			</div>

			<div class="form-group">
				<label for="comment">Комментарии </label>
				<textarea name="comment" class="form-control" id="inputBody" rows="8" data-gramm="true"
						  data-txt_gramm_id="71c8bb8e-8a51-c867-6c4f-5b14b864ac06"
						  data-gramm_id="71c8bb8e-8a51-c867-6c4f-5b14b864ac06"
						  spellcheck="false" data-gramm_editor="true"
						  style="z-index: auto; position: relative; line-height: 26.6667px; font-size: 14px; transition: none; overflow: auto; background: transparent !important;">{{ old("comment") }}</textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-md">Создать платежную ведомость</button>
			</div>
		</form>
	</div>
</div>

@endsection

@endsection