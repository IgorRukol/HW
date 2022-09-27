$(document).ready(function (){



    //$('img.bd-placeholder-img.rounded-circle').css('border', 'solid 3px red'); //img с классом bd_placeholder... и rounded...
    //$('div img').css('border', 'solid 3px red'); //<div> содержит внутри тег <img>
    //$('ul li.nav-item').css('border', 'solid 3px red'); // <ul> содержит внутри <li> с классом nav-item
    //$('a[href="https://google.com"]').css('color', 'red'); //по атрибутам(у <а> есть атрибут href=google.com)
    //$('a[href="https://google.com"]').css('color', 'red'); // a[href*=".ru" - $ - заканчивается на .ru, * - содержит .ru
    //$('img:first').css('border', 'solid 3px red');
    //$('img:eq(4)').css('border', 'solid 3px red'); // <img> nomer 4
    //$('img:first').css('border', 'solid 3px red'); // peremennaya = first, last, even(нечетные), odd(четные)
    //$('.nav:has(li)').css('border', 'solid 3px red'); // class="nav" внутри которого есть тег li , также можно использовать :has, :parent, :empty и тд

    $('h2').mouseenter(function(){
        console.log("Вы навели на заголовок");
        //$(this).css('color','red');
        $(this).toggleClass('blue');
});

    $('h2').mouseleave(function(){
        console.log("Вы навели на заголовок");
       // $(this).css('color','red');
        $(this).toggleClass('blue');
    });

    // $('input.form-control.tableviews:first').change(function (){
    // $('#hello').text(", " + $(this).val());
    // });

    $('input.form-control.tableviews:first').keyup(function (){
        $('#hello').text(", " + $(this).val());
    });


// $('span').click(function (){
// console.log("U click on h")
//  $(this).width(50);
//  $(this).height(50);
//
// });

    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
        return $star_rating.each(function() {
            if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                return $(this).removeClass('fa-star-o').addClass('fa-star');
            } else {
                return $(this).removeClass('fa-star').addClass('fa-star-o');
            }
        });
    };

    $star_rating.on('click', function() {
        $star_rating.siblings('input.rating-value').val($(this).data('rating'));
        return SetRatingStar();
    });

    SetRatingStar();


    //Базовая анимация
    //$('h3.red:first').delay(1000).hide('slow').show('slow');
    //$('h3.red:first').slideUp(1000).hide('slow').slideDown('slow');
    //$('box.tableviews').animate({'width': '200px'},5000); //увил
    
});
