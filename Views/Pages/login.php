<?php

    use Controllers\LoginController;
    $loginController = new LoginController();
    
?>

<main>
    <?php if (!isset($_GET['register'])): ?>
        <?php  
            if (isset($_POST['login'])) {
                $loginController -> login();
            }
        ?>

        <form action="" method="post" class="form-signin w-100 m-auto">
            <img class="mb-4" src="#" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating m-2">
                <input type="text" class="form-control" id="username" placeholder="nome de usuário" name="username">
                <label for="floatingInput">Nome de usario</label>
            </div>
            
            <div class="form-floating m-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            
            <div class="form-check text-start my-3">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            </div>
            
            <button class="btn btn-primary w-100 py-2" name="login" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
            
            <a class="small" href="<?php echo INCLUDE_PATH ?>login?register">Register</a>
        </form>

    <?php else: ?>
        <?php
            if (isset($_POST['register'])) {
                // $loginController -> register();
            }
        ?>

        <form method="post" class="form-signin w-100 m-auto" enctype="multipart/form-data">
            <img class="mb-4" src="#" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-group m-2">
                <label for="username">Usuário</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nome de usuário">
            </div>
            
            <div class="form-group m-2">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
            </div>

            <div class="form-group m-2">
                <label for="exampleFormControlFile1">Foto de Perfil</label>
                <input type="file" class="form-control-file" id="profile_pic" name="profile_pic">
            </div>

            <div class="form-group m-2">
                <label for="description">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit" name="register">Enviar</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>

            <a class="small" href="<?php echo INCLUDE_PATH ?>login">login</a>
        </form>

    <?php endif ?>
</main>