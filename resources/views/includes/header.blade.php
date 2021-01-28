<nav class="navbar navbar-expand-lg navbar-primary"  style="background-color: #F5F5F5;">
  <a class="navbar-brand" href="#">SCM Bulletin Board</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    @if(Auth::user()->type==1)
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/users') }}">Users <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/user/show/1') }}">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/posts') }}">Posts</a>
      </li>
    @else  
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/user/show/1') }}">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/posts') }}">Posts</a>
      </li>
    @endif
    </ul>
    <span class="navbar-text">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <h5 style="padding-top:7px; padding-right:10px;">{{ Auth::user()->name }}</h5>
        </li>   
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/user/logout') }}">Logout</a>
        </li>
      </ul>
    </span>
  </div>
</nav>