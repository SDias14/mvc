<?php $render('header');

var_dump($base);

?>



<a href="<?php echo $base;?>/novo">Criar novo usuário</a> 

<table border="1" width="100%">
    <tr>
        <th>Id</th>

        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>

    <tr>
        <td><?php echo $usuario['id'];?></td>
        <td><?php echo $usuario['nome'];?></td>
        <td><?php echo $usuario['email'];?></td>
        <td>
            <a href="<?php $base;?>usuario/<?=$usuario['id'];?>/editar">
            <img src="<?php $base;?>assets/img/edit.png" width="20" height="20" alt="Editar" title="Editar"></a>

            <a href="<?php $base;?>usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza de que quer excluir ?')">
            <img src="<?php $base;?>assets/img/delete.webp" width="20" height="20" alt="Excluir" title="Excluir">
        
        </a>

   
    
        
        </td>
    </tr>
    <?php endforeach;
        
        ?>

     



</table>

<?php $render('footer');?>











