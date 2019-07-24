/*
**
== ÍNDICE ==
    - link externo
    - quando enviar o form de newsletter executa a funcao
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
}); // end ready