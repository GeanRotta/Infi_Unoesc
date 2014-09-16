<?php if($_SESSION['adm']== true){ 
require_once("conectausr.php");
?>
<div align="center">
<div class="panel panel-default" >
  <!-- Default panel contents -->
  <div class="panel-heading">Controle de usuários cadastrados</div>
  <table class="table">
   <?php
   $sql = "SELECT * FROM usuarios;";
 $resultado = mysql_query($sql, $conn);
     echo"<tr>";
     echo"<td>ID</td>";
     echo"<td>Usuário</td>";
     echo"<td>Nome</td>";
     echo"<td>Nível de acesso</td>";
     echo"<td>Ação</td>";
     echo"</tr>";
     while( $linha = mysql_fetch_array($resultado)){
         echo"<tr>";
         echo"<td>$linha[id]</td>";
         echo"<td>$linha[usuario]</td>";
         echo"<td>$linha[nome]</td>";
         echo"<td>$linha[nivel]</td>";
         echo"<td><a href='?p=Usuarios/edt_usr&id_e=$linha[id]'>Editar</a> | <a href='?p=Usuarios/apaga&id_d=$linha[id]&t=usr'>Excluir</a></td>";
         echo"</tr>";
     }
  ?>
  </table>
  </div></div>
  
  <br/>
  
  <div align="center">
<div class="panel panel-default" >
  <!-- Default panel contents -->
  <div class="panel-heading">Controle de usuários pendentes</div>
  <table class="table">
   <?php
   $sql = "SELECT * FROM cadastros;";
 $resultado = mysql_query($sql, $conn);
     echo"<tr>";
     echo"<td>ID</td>";
     echo"<td>Usuário</td>";
     echo"<td>Nome</td>";
     echo"<td>Curso</td>";
     echo"<td>Ação</td>";
     echo"</tr>";
     while( $linha = mysql_fetch_array($resultado)){
         echo"<tr>";
         echo"<td>$linha[id]</td>";
         echo"<td>$linha[usuario]</td>";
         echo"<td>$linha[nome]</td>";
         echo"<td>$linha[curso]</td>";
         echo"<td><a href='?p=Usuarios/cad_usr&id_e=$linha[id]'>Aceitar</a> | <a href='?p=Usuarios/apaga&id_d=$linha[id]&t=cad'>Excluir</a></td>";
         echo"</tr>";
     }
  ?>
  </table>
  </div></div>
  <?php 
  mysql_close();
  } 
  ?>