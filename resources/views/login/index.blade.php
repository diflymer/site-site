@extends('layouts.base')


@section('content')
    
<div class="container-fluid">
  <div class="row">

      <div class="col">
      </div>

      <div class="col-12 col-lg-6" align="center">
          <br/>
          <h1 class="head">Войти</h1><br/><br/>
      </div>

      <div class="col">
      </div>
  </div>

	<div class="row mb-5">
		<div class="col">
		</div>
		<div class="col-12 col-lg-4" align="center">

      <x-errors></x-errors>

		<form action="{{ route('login') }}" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  @csrf

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" required id="form3Example1" class="form-control" placeholder="Логин" name="login" value="{{ old('login') }}" />
      </div>
    </div>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form3Example4" required class="form-control" placeholder="Пароль" name="password"/>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-success btn-glow btn-block mb-4" name="do_login">Войти</button>

  </form>

		</div>
		<div class="col">
		</div>
	</div>
</div>

@endsection