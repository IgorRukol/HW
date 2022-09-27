
<body class="backgr d-flex h-100 text-center text-bg-dark">


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" >


        <div class="container">
            <h3 class="font_h float-md-end mt-3" ><img src="hwlogo.png" alt="asd" width="40" height="40"><a class="wh" href="\">HludWood</a> </h3>
            <header class="d-flex justify-content-left py-3">

                <ul class="nav nav-pills md-start">

                    <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
                    <li class="nav-item"><a href="/review" class="nav-link">Отзывы</a></li>
                    <li class="nav-item"><a href="/price" class="nav-link">Цены</a></li>
                    <li class="nav-item"><a href="/contacts" class="nav-link">Контакты</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">О нас</a></li>
                </ul>

            </header>



    <hr>
    @yield('pattern')

    <div class="container">
      @yield('main_content')
    </div>

    <footer class="mt-auto text-white-50">
        <p>2022, ИП "Руколь А.А", УНП 12312312312 <a href="https://HludWood.by/" class="text-white">HludWood</a>, by <a href="https://google.com" class="text-https://google.com/white">IharRukol@gmail.com</a>.</p>
    </footer>
</div>





</body>
