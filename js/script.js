jQuery(document).ready(function(){
    /*таблицы и маски ввода*/
    $('input[type=tel]').mask("+7(999) 999-99-99");
    $('#inputBirth').mask("99.99.9999",{placeholder:"дд.мм.гггг"})
    $('.content table').stacktable();

    /*слайдер отзывы*/
    var reviews = new Swiper('#reviews', {
        pagination: '#reviews .swiper-pagination',
        slidesPerView: 3,
        slidesPerColumn: 2,
        nextButton: '#reviews .swiper-button-next',
        prevButton: '#reviews .swiper-button-prev',
        paginationType: 'fraction',
        spaceBetween: 30,
        breakpoints:{
            991:{slidesPerView:2},
            767:{slidesPerView:1}
        }
    });

    $('.title.answer-toggle').bind('click', function(){
        var number = $(this).attr('data-answer');
        if ($(this).hasClass('in')){
            $('.answer-toggle[data-answer = ' + number + '] .text').css('display', 'none');
            $(this).removeClass('in');
        }
        else{
            $('.answer-toggle[data-answer = ' + number + '] .text').css('display', 'block');
            $(this).addClass('in')
        }
        return false;
    })
})
