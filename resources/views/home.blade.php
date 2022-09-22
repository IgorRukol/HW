@extends('res.app')

@section('title')Главная@endsection

@section('main_content')

<div class="container marketing" >


    <div class="row">
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" src="shipping.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

            <h2 class="font_rus fw-normal">Бесплатная доставка</h2>{{----}}

            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" src="eco.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

            <h2 class="fw-normal font_rus">Экологически чистый продукт</h2>
            <p class="h_fonts">Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" src="hand.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

            <h2 class="fw-normal font_rus">Ручная работа</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
            <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="2.jpg" width="500" height="500"  xmlns="http://www.w3.org/2000/svg" role="img"  aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"> <title>Placeholder</title><text x="50%" y="50%" rx="10" ry="10" fill="#aaa" dy=".3em">Комплект стола с двумя стульями</text> </img>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src= "1.jpg"> <title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">Стул</text></img>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="3.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">Стульчик для кормления</text></img>

        </div>
    </div>

    <hr class="featurette-divider">



</div>@endsection

