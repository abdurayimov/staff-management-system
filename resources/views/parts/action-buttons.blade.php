@if (Auth::user()->is_admin == true)

    {{--<a href="{{ route('home') }}" class="btn btn-primary btn-md"><i class="fa fa-dashboard"></i> Панель управления</a>--}}
    <a href="{{ route('all-staff-members') }}" class="btn btn-info btn-md"><i class="fa fa-users"></i> Просмотр сотрудников</a>
    <a href="{{ route('new-staff') }}" class="btn btn-success btn-md"><i class="fa fa-plus"></i> Добавление нового сотрудника/администратора</a>
    <a href="{{ route('all-admins') }}" class="btn btn-default btn-md"><i class="fa fa-user-circle"></i> Все администраторы</a>
    <a href="{{ route('all-staff-members-payroll') }}" class="btn btn-primary btn-md"><i class="fa fa-list-ul"></i> Просмотр платежных ведомостей</a>

@endif

<a href="{{ route('apply.leave') }}" class="btn btn-danger btn-md"><i class="fa fa-plus"></i> Подать заявку на отпуск</a>
