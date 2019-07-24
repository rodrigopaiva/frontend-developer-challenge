
<form class="form-news center" name="form-news" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Compartilhe a novidade</legend>

        <p>Quer que seus amigos também ganhem a lista personalizada deles? Preencha agora!</p>

        <label for="news-nome-amigo" class="left">
            <span>Nome do seu amigo:</span>
            <input name="news-nome-amigo" id="news-nome-amigo" class="validatxt" type="text" value="" required />
        </label>

        <label for="news-email" class="right">
            <span>E-mail:</span>
            <input name="news-email" id="news-email" class="validatxt email" type="email" value="" required />
        </label>

        <div class="clear"></div>

        <button class="btn btn-empty center">Enviar agora</button>
    </fieldset>

    <fieldset>
        <figure>
            <img src="images/loading.gif" width="32" height="32" class="loading center none" />
        </figure>

        <div class="news-box-error alert message-fail none">
            <p>Os campos acima destacados são obrigatórios.</p>
        </div>

        <!-- conteudo gerado via send-news php -->
        <div class="news-box-success alert message-success none"></div><!-- box-success -->
    </fieldset>
</form>