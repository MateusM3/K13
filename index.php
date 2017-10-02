<?php
    function __autoload($class_name){
        require_once 'classes/'.$class_name.'.php';
        require_once 'controllers/UsuarioController.php';
    }

    $usuario = new Usuario();

?>
<html>
<head>

    <title>Teste Pratico K13</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Adicionando JQuery -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" src="js/cep-automatico.js" >  </script>




<!--FRAME FRONT-END-->
    <link rel="stylesheet" type="text/css"href="foundation/css/foundation.css">
    <link rel="stylesheet" type="text/css"href="foundation/css/app.css">

    <link rel="stylesheet" type="text/css"href="css/font-awesome.min.css">
    <script src="foundation/js/app.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
<!--    <script src="foundation/js/vendor/jquery.js"></script>-->
    <script src="foundation/js/foundation/foundation.orbit.js"></script>


    <!--    EDITAR USUARIO-->
    <?php
    if (isset($_GET['acao'])&& $_GET['acao']== 'editar'){
    $id = (int)$_GET['id'];
    $user = $usuario->find($id);
    ?>
</head>

<body>

<div class="row">
    <div class="small-12 medium-12 large-12">
        <div class="callout titulo-pg">
             <h4>TESTE PRATICO K13</h4>
        </div>
    </div>
</div>
<hr>
<div class="large-3 columns">
     <h5 style="color: green"><i class="users icon"></i>Atualizar</h5>

    <!--    INCLUINDO FORMULARIO PARA EDITAR-->
        <?php include 'views/usuario/forms/editar.php'; ?>

        <?php }else{ ?>


        <div class="row">
            <div class="small-12 medium-12 large-12">
                <div class="callout primary">
                   <center> <h4>TESTE PRÁTICO K13</h4></center>
                </div>
            </div>
        </div>
       <hr>
        <div class="large-3 columns">

        <h5 style="color: green"><i class="users icon"></i>Cadastro</h5>
    <!--INCLUINDO FORMULARIO PARA CRIAR-->

                <?php include 'views/usuario/forms/criar.php'; ?>


        <?php } ?>
        </div>


    <div class="large-9 columns">
            <h5 style="color: green"><i class="users icon"></i>Lista de Usuarios</h5>
<!--        Incluindo lista de usuarios-->
        <?php include 'views/usuario/lista.php'; ?>

    </div>
</div>
</div>


</body>

</html>