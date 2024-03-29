<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">Hamid</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{($title==='Home') ? 'active':''}}" aria-current="page" href="/">Home</a></li>
        <li class="nav-item">
          <a class="nav-link {{($title==='About') ? 'active':''}}"  href="/1">About</a></li>
        <li class="nav-item">
          <a class="nav-link {{($title==='Experience') ? 'active':''}}" href="/2">Experience</a></li>
        <li class="nav-item">
          <a class="nav-link {{($title==='Contacts') ? 'active':''}}" href="{{ route('contacts.create') }}">Contats</a></li>

      </div>
      
      <div class="navbar-nav ms-auto">
        <ul class="nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Regrister</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>