@if (Auth::user()->is_admin == true)

    {{--<a href="{{ route('home') }}" class="btn btn-primary btn-md"><i class="fa fa-dashboard"></i> Панель управления</a>--}}
    <a href="{{ route('all-staff-members') }}" class="btn btn-info btn-md"><i class="fa fa-users"></i> Сотрудники</a>
    <a href="{{ route('new-staff') }}" class="btn btn-success btn-md"><i class="fa fa-plus"></i> Новый сотрудник/администратор</a>
    <a href="{{ route('all-admins') }}" class="btn btn-default btn-md"><i class="fa fa-user-circle"></i> Администраторы</a>
    <a href="{{ route('all-staff-members-payroll') }}" class="btn btn-primary btn-md"><i class="fa fa-list-ul"></i> Платежки</a>

@endif

<a href="{{ route('apply.leave') }}" class="btn btn-danger btn-md"><i class="fa fa-plus"></i> Заявка на отпуск</a>
<a href="{{ route('/feedback') }}" class="btn btn-primary btn-md"><i class="fa fa-list-ul"></i> Отправить отзыв</a>
