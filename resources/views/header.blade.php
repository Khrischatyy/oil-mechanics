<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="image" src="{{ asset('images/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample07" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ URL::route('home') }}#systems">Продукция</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route('home') }}#principles">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route('home') }}#contacts">Контакты</a>
                </li>
            </ul>
        </div>
        <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">oilmechanic@bk.ru</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">+7 (495) 677-90-07</a></li>
    </ul>
    </div>
</nav>
