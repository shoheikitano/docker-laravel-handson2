@extends('layouts.postapp')
@section('title', '詳細記事')

@section('content')
    @section('maincopy', '詳細記事')

    @if($item !== '')
        <div class="headcopy">Title</div><hr>
        <div class="text">{{ $item->title }}</div>

        <div class="headcopy">Message</div><hr>
        <div class="text">{{ $item->message }}</div>
        <form action="/post/{{$item->id}}" method="POST">
            {{ csrf_field() }}
            <!-- value仮入れ(Userモデルとリレーションするのに必要) -->
            <input type="hidden" name="user_id" value="{{ $authUser->id }}">
            <input type="text" class="form" name="title" placeholder="タイトル" value="{{ $item->title }}">
            <div>
                <textarea class="form" name="message" placeholder="メッセージ">{{ $item->message }}</textarea>
            </div>
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" class="create" value="変　更">
        </form>
    @endif

    <a href="/post"><img src="{{ asset('img/edit.svg') }}" class="add" alt="topへ"></a>
@endsection
