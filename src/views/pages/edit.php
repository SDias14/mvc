<?php $render('header');

var_dump($base);


?>



<h2>Editar Usuario</h2>

<form method="POST" action="<?=$base;?>usuario/<?php echo $usuario['id'];?>/editar">
    <label for="">
        Nome:<br>
        <input type="text" name="name" value="<?php echo $usuario['nome']?>">
    </label><br><br>

    <label for="">
        E-mail:<br>
        <input type="email" name="email" value="<?php echo $usuario['email']?>">
    </label><br><br>

    <input type="submit" value="Salvar">

<?php $render('footer');?>