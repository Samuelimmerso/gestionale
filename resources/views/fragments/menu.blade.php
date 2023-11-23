<nav class="container navbar navbar-expand-lg bg-body-tertiary nav-pills">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
            class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : ''  }}"
            aria-current="page"
            href="{{route('home')}}">
            Home</a>
          </li>
          <li class="nav-item">
            <a
            class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : ''  }}"
            href="{{route('contact.index')}}">
            Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'products' ? 'active' : ''  }}"
            href="{{route('products.index')}}">
            Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : ''  }}"
            href="{{route('about')}}">
            About</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
