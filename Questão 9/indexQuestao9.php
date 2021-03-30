<?php

    session_start();

    if (isset($_SESSION['teste'])) {
        $user = $_SESSION['teste'];
         
        if ($user['perfil'] == "admin") {
            header("location: adminQuestao9.php");
        }
    }
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link  rel="stylesheet" type="text/css" href="estiloQuestao9.css">

<div class = "container">
    <div class="wrapper">
        <form action="loginQuestao9.php" method="post" name="Login_Form" class="form-signin">       
            <h3 class="form-signin-heading">Juntos Venceremos!!</h3>
              <hr class="colorgraph"><br>
              
              <input type="text" class="form-control" name="Username" placeholder="Email" required="" autofocus="" />
              <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>            
             
              <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit">Login</button>            
        </form>         
    </div>
</div>


<?php if (isset($_GET['msg']) && $_GET['msg'] == "access_denid"): ?>
    <script type="text/javascript">
        Swal.fire(
            'Não pode!!!', 
            'Tá tentando com Email e Senha!',
            'error'
        )
    </script>
<?php elseif (isset($_GET['msg']) && $_GET['msg'] == "email_not_found"): ?>
    <script type="text/javascript">
        Swal.fire(
            'Email errado', 
            'Você errou seu email.',
            'error'
        )
    </script>
<?php elseif (isset($_GET['msg']) && $_GET['msg'] == "password_error"): ?>
    <script type="text/javascript">
        Swal.fire(
            'Senha Incoreta!!', 
            'Você errou sua senha.',
            'error'
        )
    </script>
<?php endif; ?>


