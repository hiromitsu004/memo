@extends('layouts.app')

@section('content')
  <div class="container">
    <h2 class="title">ログイン</h2>
    <div class="text-center">
    </div>
    <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
      {{ csrf_field() }}
      <div class="form-group col-md-6 col-sm-12">
        <label for="user_email">メールアドレス</label><br>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <label for="user_password">パスワード</label><br>
        <input id="password" type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <input type="submit" name="commit" value="ログインする" class="loginBtn btn btn-secondary" data-disable-with="ログインする">
       
        <p class="btn btn-dark"><a href="{{ route('register') }}">アカウントを作成</a></p>


      </div>
    </form>
  </div>
</div>
@endsection