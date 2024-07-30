<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedal Events | Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/utilitarios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="global-container">
        <div class="container-form-register">
            <div class="form-register">
                <div class="titles-register">
                    <h1><span class="blue">Pedal</span> Events</h1>
                    <h3>Acesse sua Conta!</h3>
                </div>
                <div>
                    <form id="registerForm">
                        <div id="step1" class="form-step">
                            <div class="group-box">
                                <label for="fullName">Nome Completo:</label>
                                <input class="input-border" type="text" id="fullName" placeholder="Digite seu nome completo">
                            </div>
                            <div class="group-box">
                                <label for="cpf">CPF:</label>
                                <input class="input-border" type="text" id="cpf" placeholder="Digite um cpf válido">
                            </div>
                            <div class="group-box">
                                <label for="city">Sua cidade:</label>
                                <input class="input-border" type="text" id="city" placeholder="Digite sua cidade">
                            </div>
                            <div class="group-box register">
                                <label for="birthdate">Data de nascimento:</label>
                                <input class="input-border" type="date" id="birthdate" placeholder="20/07/2024">
                            </div>
                            <div class="btns-login">
                                <button class="btn btn-blue" type="button" onclick="nextStep()">Próxima página</button>
                                <a href="?page=login" class="btn ">Voltar</a>
                            </div>
                        </div>
                        <div id="step2" class="form-step" style="display: none;">
                            <div class="group-box">
                                <label for="email">Email:</label>
                                <input class="input-border" type="text" id="email" placeholder="Digite seu melhor email">
                            </div>
                            <div class="group-box">
                                <label for="password">Senha:</label>
                                <input class="input-border" type="password" id="password" placeholder="Digite uma senha">
                            </div>
                            <div class="group-box register">
                                <label for="confirmPassword">Confirme sua senha:</label>
                                <input class="input-border" type="password" id="confirmPassword" placeholder="Confirme sua senha">
                            </div>
                            <div class="btns-login">
                                <button type="submit" class="btn btn-blue">Criar conta</button>
                                <button type="button" class="btn " onclick="prevStep()">Voltar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-banner-register">
            <img src="./assets/img/undraw_team_up_re_84ok 1.svg" alt="">
        </div>
    </div>

    <script>
        function nextStep() {
            document.getElementById('step1').style.display = 'none';
            document.getElementById('step2').style.display = 'block';
        }

        function prevStep() {
            document.getElementById('step1').style.display = 'block';
            document.getElementById('step2').style.display = 'none';
        }
    </script>
</body>

</html>