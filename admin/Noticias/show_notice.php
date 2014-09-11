<a href="<?php echo $caminho."?p=Noticias/cad_not"?>"><button class="btn btn-primary">Cadastrar</button></a><br/>
<?php
    include ("conecta.php");
?>
<script type="text/javascript" >
     function apagar(id, desc){
        if(window.confirm("Deseja realmente apagar este registro: " + desc))
            window.location = 'Noticias/apagar.php?id=' + id;
      }                
</script> 
 <div id="cadastro">
                <fieldset>
                    <legend>Listar News</legend>
                    <ul>
                        <?php
                            $SQL = "SELECT * FROM noticias";                              
                            $query = mysql_query($SQL, $conn);
                            while($exibir = mysql_fetch_array($query)){
                        ?>
                        <li><?php echo $exibir ["data"]?> - <?php echo $exibir ["titulo"]?> - <a href="?p=Noticias/edt_not&id=<?php echo $exibir["id"];?>">[Editar]</a> &nbsp; <a href="#" onclick="apagar('<?php echo $exibir["id"];?>','<?php echo $exibir["titulo"];?>')">[Apagar]</a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </fieldset>
 </div>