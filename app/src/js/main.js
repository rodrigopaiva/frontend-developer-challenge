/*
**
== ÍNDICE ==
    - link externo
    - quando enviar o form de newsletter executa a funcao
    - load more products on click button
    - scroll to
    - load products on load page
    - requisita o JSON e carrega a lista de produtos
    - formartar numero
**
*/

$(document).ready(function() {

    // link externo
        $('.external').on('click',function (e){
            e.preventDefault();
            var url = $(this).attr('href');
            window.open(url);
        });



    // quando enviar o form de newsletter executa a funcao
        $('.form-news .btn').click(function(event) {
            // a cada campo dentro do form que tiver a classe validatxt executa a funcao
            $('.form-news .validatxt').each(function(index) {
                var thisVal = $(this).val();
                var valorValidate = $(this).val();

                //verifica os inputs que tem a class "validatxt"
                if ($(this).hasClass('validatxt')) {
                    if (thisVal == "") {
                        $(this).addClass('error');
                    }else{
                        $(this).removeClass('error');
                    }
                }

                /* validar email */
                var objEmail = new RegExp(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i);

                if ($(this).hasClass('email')) {
                    if (!objEmail.test($(this).val())) {
                        $(this).addClass('error');
                    }else{
                        $(this).removeClass('error');
                    }
                }else{
                    if (valorValidate == "" || valorValidate.length < 2) {
                        $(this).addClass('error');
                    }
                }/* end validar email */
            }); // end each

            var errors = $('.error').length;


            /* Coletando dados */
            var nome     = $('#news-nome-amigo').val();
            var email    = $('#news-email').val();


            /* construindo url */
            var urlData = "&nome=" + nome + "&email=" + email;


            if (errors == "0"){
                $('.news-box-error').fadeOut();
                $('.news-box-success').show('fast');


                /* Ajax */
                $.ajax({
                     type: "POST",
                     url: "email-news.php", /* endereço do phpmailer */
                     async: true,
                     data: urlData, /* informa Url */

                     success: function(data) { /* sucesso */
                        $('.news-box-success').html(data);
                     },
                     beforeSend: function() { /* antes de enviar */
                        $('.loading').show('fast');
                     },
                     complete: function(){ /* completo */
                        $('.loading').hide('fast');
                        $('form').find('input[type=text]').val('');
                        $('form').find('input[type=email]').val('');
                     }
                 });

                event.preventDefault();
            }else{
                $('.news-box-error').fadeIn();
                $('.news-box-success').hide('fast');
                event.preventDefault();
            }
        });// end validacao form newsletter



    // load more products on click button
        $('.more-products').on('click',function (e){
            e.preventDefault();
            $('.loading-aux').fadeIn();

            setTimeout(function() {
                $('.loading-aux').fadeOut();
                loadProducts();
            }, 1000);
        });



    // scroll to
        $('.go-to-products').on('click',function (e){
            e.preventDefault();
            $('html, body').animate({ scrollTop: $('.hdr-products').offset().top }, 1000);
        });

        $('.go-to-share').on('click',function (e){
            e.preventDefault();
            $('html, body').animate({ scrollTop: $('.form-news').offset().top }, 1000);
        });
}); // end ready



// load products on load page
$(window).load(function() {
    $('.loading-aux').fadeIn();

    setTimeout(function() {
        $('.loading-aux').fadeOut();
        loadProducts();
    }, 1000);
});



var page = "https://frontend-intern-challenge-api.iurykrieger.now.sh/products?page=1";

// requisita o JSON e carrega a lista de produtos
function loadProducts(){
    $.getJSON(page , function(obj) {
        // console.log(obj);
        $.each(obj.products, function(){
            var valor    = numberToReal(this["installments"]["value"]);
            var price    = numberToReal(this["price"]);
            var oldPrice = numberToReal(this["oldPrice"]);

            $('.list-products').append('<li><figure><img src="' + this["image"] + '" alt="" /></figure><h3>' + this["name"] + '</h3><p>' + this["description"] + '</p><div class="old-price">De: <span>R$ ' + oldPrice + '</span></div><div class="price">Por: <span>R$ ' + price + '</span></div><div class="price-divided">ou ' + this["installments"]["count"] + 'x de R$ ' + valor + '</div><a href="" class="btn btn-empty">Comprar</a></li>');
        });

        // Armazena endpoint da próxima página de produtos da API
        page = "https://" + obj.nextPage;
    });
}

// formartar numero
function numberToReal(numero) {
    var numero = numero.toFixed(2).split('.');
    numero[0] = numero[0].split(/(?=(?:...)*$)/).join('.');
    return numero.join(',');
}
