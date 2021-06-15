<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{config('name','PosterApp')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts">Blog</a>
          </li>

        </ul>

        <ul class="nav navbar-nav mr-auto">
          <li><a class="nav-link" href="/posts/create">Create Post</a></li>
        </ul>

      </div>
    </div>
  </nav>