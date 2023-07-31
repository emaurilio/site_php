<?php

require "../../../bootstrap.php";


if(isempety()){
    flash('message','Preencha todos os campos');

   return redirect("create_user");
}


$validate = validate([
    'name'=>'s',
    'email'=>'e',
    'subject'=>'s',
    'message'=>'s'
]);

$data = [
    'quem' => $validate->email,
    'para' => 'emaurilio@alumni.usp.br',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject

];


if(send($data)){
    flash('message','Email enviado com sucesso','success');
    
    return redirect('contato');
}