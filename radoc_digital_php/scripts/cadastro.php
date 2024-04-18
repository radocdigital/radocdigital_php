<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <!--<link rel="stylesheet" href="estilo.css">-->
</head>

<body>
    <div class="container p-5">
        <form method="post" action="?rota=cadastro_submit">
            <div class="col text-center">
                <h2>Cadastro do docente</h2><br>
            </div>
            <div class="mb-3">
                Nome: <input class="form-control" type="text" placeholder="Digite seu nome" name="name" required>

                CPF: <input class="form-control" type="text" placeholder="Digite seu CPF" name="cpf" required>

                Siape: <input class="form-control" type="text" placeholder="Digite seu siape" name="siape" required>

                E-mail: <input class="form-control" type="email" placeholder="Digite seu e-mail" name="email" required>

                Classe:
                <select class="form-select" name="classe">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>

                Vínculo estatutário:
                <select class="form-select" name="vinculo">
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                </select>

                Regime de trabalho:
                <select class="form-select" name="regime_de_trabalho" required>
                    <option value="DE">DE</option>
                    <option value="20">20h</option>
                    <option value="40">40h</option>
                </select>


                Titulação:
                <select class="form-select" name="titulacao">
                    <option value="G">Graduação</option>
                    <option value="E">Especialização</option>
                    <option value="M">Mestre</option>
                    <option value="D">Doutor</option>
                </select>


                Campus:
                <select class="form-select" name="campus">
                    <option value="1">Belém</option>
                    <option value="2">Paragominas</option>
                    <option value="3">Capanema</option>
                    <option value="4">Capitão Poço</option>
                    <option value="5">Tomé-Açu</option>
                    <option value="6">Parauapebas</option>
                </select>


                Instituto:
                <select class="form-select" name="instituto">
                    <option value="1">ICA</option>
                    <option value="2">ISARH</option>
                    <option value="3">ISPA</option>
                    <option value="4">ICIBE</option>
                </select>

                Data: <input class="form-control" type="date" placeholder="Digite a data" name="data" required>
                Senha: <input class="form-control" type="password" placeholder="Digite uma Senha" name="senha" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
    <br>

</body>

</html>