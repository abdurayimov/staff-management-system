@extends('layouts.app')
@extends('layouts.admin')

@section('content')
@section('body')

    <div class="panel panel-default">
        <div class="panel-body">
            <h2>Просмотр профиля {{ $staff->name }}</h2>
            <hr>
            <a href="{{ url('/home') }}" class="btn btn-primary btn-md"><i class="fa fa-dashboard"></i> Панель управления</a>
            <a href="{{ url('/staff/create') }}" class="btn btn-info btn-md"><i class="fa fa-plus"></i> Добавить нового сотрудника</a>
            <a href="{{ url('/staff') }}" class="btn btn-success btn-md"><i class="fa fa-users"></i> Просмотр сотрудников</a>
            <hr>
            @include('parts.message-block')
            <br>


            <div class="row">
                <div class="col-md-4 col-lg-4 " align="center">
                    <img width="300" src="{{ asset('staff-img/'.$staff->image) }}" class="thumbnail"
                         alt="{{ $staff->name }}">
                </div>

                <div class=" col-md-8 col-lg-8 ">
                    <table class="table table-user-information">
                        <tbody>
                        <tr>
                            <td>Имя:</td>
                            <td>{{ $staff->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><a href="mailto:{{ $staff->user->email }}">{{ $staff->user->email }}</a></td>
                        </tr>
                        <tr>
                            <td>Возраст:</td>
                            <td>{{ $staff->age }}</td>
                        </tr>

                        <tr>
                            <td>Телефон:</td>
                            <td>{{ $staff->phone }}</td>
                        </tr>
                        <tr>
                            <td>Адрес:</td>
                            <td>{{ $staff->address }}</td>
                        </tr>

                        <tr>
                        <tr>
                            <td>Город:</td>
                            <td>{{ $staff->city }}</td>
                        </tr>
                        <tr>
                            <td>Область/район:</td>
                            <td>{{ $staff->state }}</td>
                        </tr>
                        <tr>
                            <td>Страна:</td>
                            <td>{{ $staff->country }}</td>
                        </tr>
                        <tr>
                            <td>Уровень:</td>
                            <td>{{ $staff->level }}</td>
                        </tr>

                        </tr>

                        </tbody>
                    </table>

                    <a href="{{ route("all-staff-members-payroll") }}" class="btn btn-danger">Платежки</a>
                    <a href="#" class="btn btn-primary">Статус отпуска</a>
                </div>
            </div>

            <div class="panel-footer">
                <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button"
                   class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button"
                               class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button"
                               class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i>
                            </a>
                </span>
            </div>

        </div>


        <link rel="stylesheet" href="{{ URL::asset('css/staff-profile.css') }}">

@endsection
@endsection