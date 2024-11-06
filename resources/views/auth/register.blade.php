@extends('layouts.layout')

@section('title', 'Регистрация')

@section('content')

    <section>
        <h2>Регистрация</h2>
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="register-surname">Фамилия *</label>
                <input type="text" id="register-surname" placeholder="Введите фамилию" name="surname" required>
                @error('surname')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-name">Имя *</label>
                <input type="text" id="register-name" placeholder="Введите имя" name="name" required>
                @error('name')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-patronymic">Отчество</label>
                <input type="text" id="register-patronymic" placeholder="Введите отчество" name="patronymic">
                @error('patronymic')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Пол *</label>
                <input type="radio" name="sex" checked value="1"> Мужской
                <input type="radio" name="sex" value="0"> Женский
                @error('sex')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-birthday">День рождения *</label>
                <input type="date" id="register-birthday" placeholder="Введите дату рождения" name="birthday" required>
                @error('birthday')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-email">Электронная почта *</label>
                <input type="email" id="register-email" placeholder="Введите электронную почту" name="email" required>
                @error('email')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-password">Пароль *</label>
                <input type="password" id="register-password" placeholder="Введите пароль" name="password" required>
            </div>
            <div>
                <label for="register-password-confirmation">Подтвердите пароль *</label>
                <input type="password" id="register-password-confirmation" placeholder="Введите пароль ещё раз" name="password_confirmation" required>
                @error('password')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-nickname">Никнейм *</label>
                <input type="text" id="register-nickname" placeholder="Введите никнейм" name="nickname" required>
                @error('nickname')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-avatar">Аватар</label>
                <input type="file" id="register-avatar" name="avatar" accept="image/jpeg,image/png,image/svg+xml">
                @error('avatar')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-phone">Номер телефона</label>
                <input type="tel" id="register-phone" placeholder="+7(___)___-__-__" name="phone">
                @error('phone')
                <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit">Зарегистрироваться</button>
            </div>
        </form>
    </section>

@endsection
