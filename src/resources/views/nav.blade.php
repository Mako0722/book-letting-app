<nav class="navbar navbar-expand navbar-dark sunny-morning-gradient sticky-top">

<a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>read book</a>

  <ul class="navbar-nav ml-auto">

    
    <li class="nav-item">
      <a class="nav-link" href=""><i class="fas fa-book-reader"></i>リードブックとは？</a>
    </li>
    
    
    @auth 
    <li class="nav-item">
      <a class="nav-link" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth

    @auth 
    <li class="nav-item">
      <a class="nav-link" href=""><i class="fas fa-bookmark"></i>ブックリスト</a>
    </li>
    @endauth

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>
    @endguest

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest


    <a href="{{ route('login.guest') }}" class="btn btn-default p-3">
      ゲストログイン
    </a>

    @auth
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
          onclick="location.href='{{ route("users.show", ["name" => Auth::user()->name]) }}'">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
      @csrf
    </form>
    <!-- Dropdown -->
    @endauth
  </ul>

</nav>