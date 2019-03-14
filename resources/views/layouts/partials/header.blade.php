<nav class="navbar navbar-expand-lg p-0">
    <a class="navbar-brand ml-3" href="/">
        <img src="{{ asset('img/logo.png') }}" alt="Bulgarian Destinations" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Начало <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('destinations') }}">Стоте обекта</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Класации</a>
            </li>
{{--            <form class="form-inline my-2 my-lg-0">--}}
{{--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Търси</button>--}}
{{--            </form>--}}
        </ul>

    </div>
    <div class="d-flex justify-content-end">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Вход
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Влез</a>
                <a class="dropdown-item" href="#">Регистрация</a>
                <a class="dropdown-item" href="#">Админ</a>
            </div>
        </li>
    </ul>
    </div>
</nav>