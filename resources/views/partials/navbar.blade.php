<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">Hamid</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{($tittle==='Home') ? 'active':''}}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{($tittle==='About') ? 'active':''}}"  href="/1">About</a>
        <a class="nav-link {{($tittle==='Gallery') ? 'active':''}}"" href="/2">Gallery</a>

      </div>
    </div>
  </div>
</nav>