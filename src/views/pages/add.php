<?php $render('header');?>



<h2>Adicionar novo Usuario</h2>

<form action="<?=$base;?>/novo" method="POST">
    <label for="">
        Nome:<br>
        <input type="text" name="name">
    </label><br><br>

    <label for="">
        E-mail:<br>
        <input type="email" name="email">
    </label><br><br>

    <input type="submit" value="Adicionar">

<?php $render('footer');?>