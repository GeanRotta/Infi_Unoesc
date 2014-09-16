  <?php
 if($_SESSION['adm']==true){
 require_once("conectausr.php");
 ?>
 <a href="<?php echo $caminho."?p=Usuarios/show_user"?>"><button class="btn btn-primary">Voltar</button></a><br/>
 <?php
    if(is_int($_GET['id_e'])){
      $id = $_GET['id_e'];
    }else{
      $id = $_GET['id_e'];
    }
    require_once('conectausr.php');
    $sql = "select * from cadastros where id=$id";
    $result = mysql_query($sql,$conn);
    $ins = mysql_fetch_array($result);
    $sql="insert into usuarios (nome, usuario, senha, nivel) values ('$ins[nome]','$ins[usuario]','$ins[senha]',3)";
    $result1 = mysql_query($sql,$conn);
    echo mysql_error($conn);
    if($result1){
      $sql="DELETE FROM cadastros where id=$id";
      $result = mysql_query($sql,$conn);
    }
    if($result1){
    echo'<div class="alert alert-success" role="alert">Cadastrado com sucesso!</div>';
    }else{
    echo'<div class="alert alert-danger" role="alert">Erro ao cadastrar!</div><br/>';
    }
    mysql_close();
 }
 ?>