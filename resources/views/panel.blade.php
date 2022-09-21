
<body class="d-flex h-100 text-center text-bg-dark" style="background-image: url('woodback.jpg');">


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" >
    <header class="mb-auto">
        <div>
            <h3 class="float-md-end mb-0" ><img src="hwlogo.png" alt="asd" width="40" height="40">HludWood</h3>

            <nav class="nav nav-masthead justify-content-center float-md-start">

                <a class="nav-link fw-bold py-1 px-1 active" aria-current="page" href="/">Главная</a>
                <a class="nav-link fw-bold py-1 px-1" href="/about">Про нас</a>
                <a class="nav-link fw-bold py-1 px-1" href="/contacts">Контакты</a>
                <a class="nav-link fw-bold py-1 px-1" href="/review">Отзывы</a>
            </nav>
        </div>

    </header>

    <hr>
    @yield('pattern')

    <div class="container">
      @yield('main_content')
    </div>

    <footer class="mt-auto text-white-50">
        <p>2022, ИП "Руколь А.А", УНП 12312312312 <a href="https://getbootstrap.com/" class="text-white">HludWood</a>, by <a href="http://google.com" class="text-white">IharRukol@gmail.com</a>.</p>
    </footer>
</div>





</body>
