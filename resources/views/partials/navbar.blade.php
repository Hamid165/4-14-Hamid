<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">Hamid</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{($title==='Home') ? 'active':''}}" aria-current="page" href="/">Home</a>
        <a class="nav-link {{($title==='About') ? 'active':''}}"  href="/1">About</a>
        <a class="nav-link {{($title==='Gallery') ? 'active':''}}"" href="/2">Gallery</a>
        <a class="nav-link {{($title==='Contacts') ? 'active':''}}"" href="/contacts">Contats</a>

      </div>
    </div>
  </div>
</nav>