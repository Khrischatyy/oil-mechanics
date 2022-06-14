<nav class="navbar navbar-expand-lg navbar-dark bg-green" aria-label="Eighth navbar example">
    <div class="container " style="max-width: 800px">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="image" src="{{ asset('images/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample07" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ URL::route('home') }}#systems">Продукция</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ URL::route('home') }}#principles">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ URL::route('home') }}#contacts">Контакты</a>
                </li>
            </ul>
            <ul style="margin-bottom: 0">
                <li style="list-style: none; margin-bottom: 0" class="nav-item text-right"><a href="mailto:oilmechanic@bk.ru" class="nav-link px-2 text-white">oilmechanic@bk.ru</a></li>
                <li style="list-style: none; margin-bottom: 0" class="nav-item text-right"><a href="mailto:oilmechanic@bk.ru" style="position: relative; left: -4px" class="nav-link px-2 text-white">+7 (495) 677-90-07</a></li>
            </ul>
        </div>
    </div>
</nav>
