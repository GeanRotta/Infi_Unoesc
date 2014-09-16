 <?php
 if($_SESSION['adm']==true){
 ?>
 <a href="<?php echo $caminho."?p=Usuarios/show_user"?>"><button class="btn btn-primary">Voltar</button></a><br/>
 <?php
    $table = $_GET['t'];
    if(is_int($_GET['id_d'])){
      $id = $_GET['id_d'];
    }else{
      $id = $_GET['id_d'];
    }
    require_once('conectausr.php');
    if($table=="cad"){
      $sql="DELETE FROM cadastros where id=$id";
    }else if($table=="usr"){
      $sql="DELETE FROM usuarios where id=$id";
    } 
    $result = mysql_query($sql,$conn);
    if($result){
    echo'<div class="alert alert-success" role="alert">Apagado com sucesso!</div>';
    }else{
    echo'<div class="alert alert-danger" role="alert">Erro ao apagar!</div>';
    }
    mysql_close();
 }
 ?>