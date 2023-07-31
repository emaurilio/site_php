<h2>Pagina inicial</h2>

<table class="table table-striped table-hover">

<thead>
  <tr>
    
    <th>id</th>
    <th>Nome</th>
    <th>Email</th>
  </tr>
</thead>

<tbody>
    <?php 
        $users = all('users');
        foreach($users as $user):
        ?>
  <tr>
    <td><?= $user->id ?></td>
    <td><?= $user->name ?></td>
    <td><?= $user->email ?></td>
    <td>
      <a href="?page=edit_user&id=<?= $user->id;?>" class="btn btn-success">Editar</a>
    </td>

    <td>
      <a href="?page=delete_user&id" class="btn btn-danger">deletar</a>
    </td>
  </tr>
  <?php endforeach; ?>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>


