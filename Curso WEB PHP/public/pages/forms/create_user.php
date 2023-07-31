<?php

require "../../../bootstrap.php";


if(isempety()){
    flash('message','Preencha todos os campos');

   return redirect("contato");
}


$validate = validate([
    'name'=>'s',
    'sobrenome'=>'s',
    'email'=>'e',
    'password'=>'s'
]);


$cadastrado = create('users',$validate);

if($cadastrado){
    flash('message','Cadatrado com sucesso','success');

    return redirect('create_user');

}
    
flash('message','Erro ao cadastrar o usuário','danger');
redirect('create_user');


