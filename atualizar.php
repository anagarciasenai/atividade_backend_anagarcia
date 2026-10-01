<?php
   include "config/conexao.php";

   $id = intval($_POST["id"]);
   $cliente = $_POST["cliente"];
   $equipamento = $_POST["equipamento"];
   $problema = $_POST["problema"];
   $data_entrada = $_POST["data_entrada"];
   $status = $POST["satus"];

   $sql = "UPDATE ordens_servico
          set cliente = ?,
          equipamento = ?,
          problema = ?,
          data_entrada = ?
          status = ?
          where id =?";
   $stmt = $conexao -> prepare($sql);
   $stmt -> blind_param(
          "sssssi",
          $cliente,
          $equipamento,
          $problema,
          $data_entrada,
          $status,
          $id
   );
     if ($stmt->execute()){
        header("Location: index.php");
        exite;
     } else{
        echo "Erro ao atualizar."
     }
?>