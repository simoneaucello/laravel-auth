<header>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div class="d-flex">
                <a href=" {{ route('admin.home') }} " class="navbar-brand">Home</a>
                <a href=" {{ route('home') }} " target="_blank" class="nav-link pt-2 me-3 btn ">Vai al
                    sito</a>
                <a href=" {{ route('admin.projects.index') }} " target="_blank" class="nav-link pt-2 ">I miei
                    progetti</a>
            </div>
            <div class="d-flex align-items-center">
                <form class="d-flex me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <p class="pt-3 me-3"> {{ Auth::user()->name }} </p>

                <form action=" {{ route('logout') }} " method="POST"> @csrf
                    <button type="submit" class="btn btn-danger"><i
                            class="fa-solid fa-right-from-bracket"></i></button>
                </form>
            </div>
        </div>
    </nav>

</header>
