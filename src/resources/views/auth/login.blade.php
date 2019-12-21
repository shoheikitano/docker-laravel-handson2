@extends('layouts.postapp')

@section('content')
@section('maincopy', 'ログインしてください')

<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    @if ($errors->has('email'))
        {{ $errors->first('email') }}
    @endif
    <input type="text" class="form" name="email" placeholder="メールアドレス">

    @if ($errors->has('password'))
        {{ $errors->first('password') }}
    @endif
    <input type="password" class="form" name="password" placeholder="パスワード">
    <input type="submit" class="create" value="ログイン">
</form>
@endsection
