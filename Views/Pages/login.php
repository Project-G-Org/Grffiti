<main>
    <?php if (!isset($_GET['register'])): ?>
        <form class="form-signin w-100 m-auto">
            <img class="mb-4" src="#" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating m-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            
            <div class="form-floating m-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>

            <a class="small" href="<?php echo INCLUDE_PATH ?>login?register">Register</a>
        </form>

    <?php else: ?>

        <form class="form-signin w-100 m-auto">
            <img class="mb-4" src="#" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-group m-2">
                <label for="floatingInput">Usuário</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Nome de usuário">
            </div>
            
            <div class="form-group m-2">
                <label for="floatingPassword">Senha</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
            </div>

            <div class="form-group m-2">
                <label for="exampleFormControlFile1">Foto de Perfil</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group m-2">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Enviar</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>

            <a class="small" href="<?php echo INCLUDE_PATH ?>login">login</a>
        </form>

    <?php endif ?>
</main>