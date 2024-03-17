<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 Forms Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
<body>
<div class="container mt-3 mb-3">
 
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
 
    <h3>Форма регистрации студента</h3>
    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
 
        @csrf
 
        <div class="form-group">
            <label>Заголовок имени</label>
            <select class="form-control" name="title" id="title">
                <option value="">--</option>
                <option value="mr">Mr.</option>
                <option value="ms.">Ms.</option>
            </select>
        </div>
 
        <div class="form-group">
            <label>Имя</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
 
        <div class="form-group">
            <label>Дата рождения</label>
            <input type="date" class="form-control" name="bday" id="bday">
        </div>
 
        <div class="form-group">
            <label>Возраст</label>
            <input type="number" class="form-control" name="age" id="age">
        </div>
 
        <div class="form-group">
            <label>Пол</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Male" id="male" name="gender">
                    <label class="custom-control-label" for="male">Мужской</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Female" id="female" name="gender">
                    <label class="custom-control-label" for="female">Женский</label>
                </div>
        </div>
 
        <div class="form-group">
            <label>Телефон</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
 
        <div class="form-group">
            <label>Адрес</label>
            <textarea class="form-control" name="address" id="address" rows="4"></textarea>
        </div>
 
        <div class="form-group">
            <label>Электронная почта</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
 
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
 
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="t&c" name="t&c">
                <label class="form-check-label">
                    Я согласен с условиями.
                </label>
            </div>
            </div>
 
        <input type="reset" name="reset" value="Reset" class="btn btn-dark">
        <input type="submit" name="submit" value="Submit" class="btn btn-dark">
 
    </form>
</div>
</body>
 
</html>