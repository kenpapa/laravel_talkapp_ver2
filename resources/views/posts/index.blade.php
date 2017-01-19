@extends('layouts.base')

@section('title')
トーク画面
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 well">
    <form action="{{ route('delete_all_post') }}" method="post">
      <button type="submit" class="btn btn-danger btn-xs pull-right">削除</button>
      {{ csrf_field() }}
    </form>

    @foreach($posts as $post)
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object img-circle" src="{{ asset("images/".$post->user->image) }}" width=64 height=64>
        </a>
      </div>
      <div class="media-body">
        <h5 class="media-heading">{{ $post->user->name }} <small>{{ $post->created_at }}</small></h5>
        <p>{{ $post->message }}</p>
      </div>
    </div>
    @endforeach

    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-space-30 btn-block">メッセージ作成</a>
  </div>
</div>
@endsection

@section('script')
$(document).ready(function(){
  $(".btn-danger").click(function(e){
    if(!confirm("本当に削除しますか？")){
      e.preventDefault();
      return false;
    }
    return true;
  });
});

window.scrollTo(0,document.body.scrollHeight);
@endsection
