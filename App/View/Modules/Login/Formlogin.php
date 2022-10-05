<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/View/Modules/Login/style.css">
    <script src="/View/Modules/Login/script.js" defer></script>
    <title>Login Dark Souls</title>
</head>
<body>
    <main>
        <Form action="/login/auth" method="post" class="login">
         <div class="wrapper">
            <img src="https://www.pngmart.com/files/7/Dark-Souls-Remastered-Transparent-PNG.png" class="login__logo">
          <h1 class="login__title">Fazer login</h1>

            <label class="login__label">
                <span>E-mail</span>
                <input type="text" name="email" class="input">
            </label>

            <label class="login__label">
                <span>senha</span>
                <input type="password" name="senha" class="input">
            </label>
            <div class="login__icons">
                 <button type="button" class="icons__button">
                     <img src="https://img.icons8.com/ios-glyphs/30/FFFFFF/facebook-new.png" alt="facebook">
                 </button>

                 <button type="button" class="icons__button">
                     <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="google">
                 </button>
 
                <button type="button" class="icons__button">
                    <img src="https://img.icons8.com/ios-glyphs/30/FFFFFF/mac-client.png" alt="apple">
                </button>
            </div>

            <label class="login__label--checkbox">
                <input type="checkbox" class="input--checkbox">
                Manter Login
            </label>
         </div>

         <div class="wrapper">
            <button type="submit" class="login__button--img">
                 <img src="https://img.icons8.com/windows/32/737373/right.png"/>
            </button>

            <a href="#" class="login__link">nao consegue iniciar sessão?</a>
            <a href="#" class="login__link">criar conta</a>
            </div>
            
        </Form>


        <section class="wallpaper"></section>
    </main>
</body>
</html>
