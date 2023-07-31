<?= get('message'); ?>

<?= $user = find('users','id',$_GET['id']); 

?>

<form action="/pages/forms/update_user.php" method='POST' role="form">

<div class="form-group">
  <label for="">Nome</label>
  <input type="text" name="name"  class="form-control" placeholder="" aria-describedby="helpId" value=<?= $user->name?>>
  <small id="helpId" class="text-muted">Help text</small>
</div>

<input type="hidden" name="id" value="<?=$user->id?>">

<div class="form-group">
  <label for="">Sobrenome</label>
  <input type="text" name="sobrenome"  class="form-control" placeholder="" aria-describedby="helpId" value=<?= $user->sobrenome?>>
  <small id="helpId" class="text-muted">Help text</small>
</div>

<div class="form-group">
  <label for="">Email</label>
  <input type="text" name="email" class="form-control" placeholder="" aria-describedby="helpId" value=<?= $user->email?> > 
  <small id="helpId" class="text-muted">Help text</small>
</div>

<button type="submit" name="" id="" class="btn btn-primary" type="button" value="">Submit</button>

</form>