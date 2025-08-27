<html>
    <?php 
        $titulo = "Minha página";
        $campo = "text";
        $valor = "um formulário"; //espaço para declação das variaveis em PHP
    ?>
    <head>
        <title><?php echo $titulo ?></title> <!-- nesse espaço do titulo está sendo aberto o bloco php e usando o echo para interpolar o titulo-->
    </head>
    <body>
        <p>Campo para um texto:</p>
        <input type="<?=$campo;?>" value="<?= $valor; ?>"/> <!-- aqui está sendo utilizada a interpolação para "substituir" os parametros normais do html-->
    </body>
</html>