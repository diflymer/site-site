@extends('layouts.base')

@section('content')

<div class="container-fluid">
  <div class="row">

    <div class="col">
    </div>

    <div class="col-12 col-lg-8" align="center">
      <br />
      <h1 class="head">Создать аккаунт</h1><br /><br />
    </div>

    <div class="col">
    </div>
  </div>

  <div class="row mb-5">
    <div class="col">
    </div>
    <div class="col-12 col-lg-6" align="center">

      <x-errors></x-errors>

      <form action="{{ route('register') }}" method="POST">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-3">
          <div class="col">
            <div class="form-outline">
              <input type="text" required id="form3Example1" class="form-control" placeholder="Логин" name="login"
                value="{{ old('login') }}" />
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="email" id="form3Example3" required class="form-control" placeholder="Email адрес"
                name="email" value="{{ old('email') }}" />
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col">
            <!-- Surname input -->
            <div class="form-outline">
              <input type="text" id="form3Example4" required class="form-control" placeholder="Фамилия" name="surname"
                value="{{ old('surname') }}" />
            </div>
          </div>
          <div class="col">
            <!-- Name input -->
            <div class="form-outline">
              <input type="text" id="form3Example4" required class="form-control" placeholder="Имя" name="name"
                value="{{ old('name') }}" />
            </div>
          </div>
        </div>

        <!-- Отчество input -->
        <div class="form-outline mb-5">
          <input type="text" id="form3Example4" class="form-control" placeholder="Отчество" name="fatherName"
            value="{{ old('fatherName') }}" />
        </div>

        <div class="row mb-3">
          <div class="col">
            <!-- Дата рождения -->
            <p class="form-p" align="left">Дата рождения</p>
            <div class="form-outline">
              <input type="date" id="form3Example4" required class="form-control" placeholder="" name="birthdate"
                value="{{ old('birthdate') }}" />
            </div>
          </div>
          <div class="col">
            <!-- Город input -->
            <div class="form-outline">
              <p class="form-p" align="left">Город</p>
              <input type="text" id="form3Example4" class="form-control" placeholder="Владивосток" name="city"
                value="{{ old('city') }}" />
            </div>
          </div>
        </div>

        <!-- Телефон input -->
        <div class="form-outline mb-5">
          <p class="form-p" align="left">Телефон</p>
          <input type="text" id="form3Example4" required class="form-control" placeholder="89149999999" name="phone"
            value="{{ old('phone') }}" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
          <input type="password" id="form3Example4" required class="form-control" placeholder="Пароль"
            name="password" />
        </div>

        <!-- Password input check -->
        <div class="form-outline mb-4">
          <input type="password" id="form3Example4" required class="form-control" placeholder="Повторите пароль"
            name="password_confirmation" />
        </div>

        <h3 align="center" class="mb-4">Выберите ваши хобби</h3>
        {{-- Хобби --}}
        <div class="row hobbies mb-3 overflow-y-scroll">
          
    
          @foreach ($hobbies as $hobby)
            <div class="col-lg-3 col-md-6 col-12 mb-4">
              <input hidden type="text" name="no" value={{ $hobby->id }}>
              <div onclick="clickedHobby(this)" class="hobby">{{ $hobby->name }}</div>
            </div>
          @endforeach

      </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success btn-glow btn-block mb-4"
          name="register">Зарегистрироваться</button>

      </form>

    </div>
    <div class="col">
    </div>
  </div>
</div>


@endsection