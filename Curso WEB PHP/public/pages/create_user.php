
<?= get('message'); ?> 
<form action="/pages/forms/create_user.php" method='POST' role="form">

<div class="form-group">
  <label for="">Nome</label>
  <input type="text" name="name"  class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
  <label for="">Sobrenome</label>
  <input type="text" name="sobrenome"  class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
  <label for="">Email</label>
  <input type="text" name="email" class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
  <label for="">Password</label>
  <input type="text" name="password"  class="form-control" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>

<button type="submit" name="" id="" class="btn btn-primary" type="button" value="">Submit</button>

</form>