

<?= get('message')?>
<form action="/pages/forms/contato.php" method="POST" role="form">
    <legend>Cadastros</legend>
    <label for=""></label>
        <div class="form-group">
          <label for="">Nome</label>
          <input type="text"
            class="form-control" name="name" aria-describedby="helpId" placeholder="Nome">
          <small id="helpId" class="form-text text-muted">Inclua seu nome</small>
        </div>

        <div class="form-group">
          <label for="">E-mail</label>
          <input type="text"
            class="form-control" name="email" aria-describedby="helpId" placeholder="E-mail">
          <small id="helpId" class="form-text text-muted">Inclua seu e-mail</small>
        </div>

        <div class="form-group">
          <label for="">Assunto</label>
          <input type="text"
            class="form-control" name="subject" aria-describedby="helpId" placeholder="Assunto">
          <small id="helpId" class="form-text text-muted">Inclua o assunto</small>
        </div>

        <div class="form-group">
          <label for="">Mensagem</label>
          <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
          <small id="helpId" class="form-text text-muted">Inclua a mensagem</small>
        </div>

       <button type="submit" class="btn btn-primary">Submit</button>
</form>