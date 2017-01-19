<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">ホーム</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::check())
      <ul class="nav navbar-nav">
        <li><a href="{{ route('posts.index') }}">トーク画面</a></li>
      </ul>
      @endif
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li><a href="{{ route('users.edit', Auth::user()->id) }}">{{ Auth::user()->name }}さんようこそ</a></li>
        <li><a href="{{ route('logout') }}">ログアウト</a></li>
        @else
        <li><a href="{{ route('login') }}">ログイン</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
