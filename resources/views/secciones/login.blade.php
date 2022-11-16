@extends('home')

@section('cuerpo')
<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="otro">
      @csrf
      <input name="nombre" type="text" placeholder="name"/>
      <input name="email" type="text" placeholder="email address"/>
      <input name="password" type="password" placeholder="password"/>
      <input value="Enviar" type="submit">
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <!--<form class="login-form" method="POST" action="login">
      <input name="nombre" type="text" placeholder="username"/>
      <input name="password" type="password" placeholder="password"/>
      <input value="Enviar" type="submit">
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  -->
  </div>
</div>
@endsection
