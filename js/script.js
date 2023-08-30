$(function () {
    //Aqui vai todo nosso codigo JavaScript 
    $('nav.mobile').click(function () {
        //o que vai acontecer quando clicar na nav mobile
        var listaMenu = $('nav.mobile ul');
        //Abrir menu atravez do FadIn
        /*
        if (listaMenu.is(':hidden') == true)
            listaMenu.fadeIn();
        else
            listaMenu.fadeOut();
        */

        //Abrir e fechar o menu

        // listaMenu.slideToggle();

        if (listaMenu.is(':hidden') == true) {
            //fa fa-times
            //fa fa-bars
            var icone = $('.botao-menu-mobile').find('i')
            icone.removeClass('fa-bars');
            icone.addClass('fa-times')
            listaMenu.slideToggle();
        } else {
            var icone = $('.botao-menu-mobile').find('i')
            icone.removeClass('fa-times');
            icone.addClass('fa-bars')
            listaMenu.slideToggle();
        }
    });

    if($('target').length > 0){
        //o elemento existe, portanto precisamos dar o scroll em algum elemento 
        var elemento = '#'+$('target').attr('target');
        
        var divScroll = $(elemento).offset().top;
        
        $('html,body').animate({scrolTop:divScroll});

    }

})