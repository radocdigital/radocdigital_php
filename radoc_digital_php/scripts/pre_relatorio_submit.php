<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
    $codigo1 = isset($_POST['codigo1']) ? $_POST['codigo1'] : '';
    $nome = isset($_POST['name']) ? $_POST['name'] : '';
    $nome1 = isset($_POST['name1']) ? $_POST['name1'] : '';
    $semestre = isset($_POST['semestre']) ? $_POST['semestre'] : '';
    $periodo_letivo = isset($_POST['pletivo']) ? $_POST['pletivo'] : '';
    $turmas_teorica = isset($_POST['turteorica']) ? $_POST['turteorica'] : '';
    $turmas_pratica = isset($_POST['turpratica']) ? $_POST['turpratica'] : '';
    $carga_horaria_teorica = isset($_POST['chteorica']) ? $_POST['chteorica'] : '';
    $carga_horaria_pratica = isset($_POST['chpratica']) ? $_POST['chpratica'] : '';
    $carga_horaria_total = isset($_POST['chtotal']) ? $_POST['chtotal'] : '';
    $docentes = isset($_POST['docentes']) ? $_POST['docentes'] : '';
    $docentes_ch = isset($_POST['docentesch']) ? $_POST['docentesch'] : '';
    $curso = isset($_POST['curso']) ? $_POST['curso'] : '';
    $graduacao = isset($_POST['graduacao']) ? $_POST['graduacao'] : '';
    $posgraduacao = isset($_POST['posgraduacao']) ? $_POST['posgraduacao'] : '';
    $total = isset($_POST['total']) ? $_POST['total'] : '';

    $bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

    $id_radoc = 1;




    $result1 = $bd->insert("INSERT INTO avaliacao_discente (codigo, nome, semestre, periodo_letivo, radoc_id) VALUES (:codigo, :nome, :semestre, :periodo_letivo, :id_radoc)", [
        ':codigo' => $codigo,
        ':nome' => $nome,
        ':semestre' => $semestre,
        ':periodo_letivo' => $periodo_letivo,
        ':id_radoc' => $id_radoc,
    ]);




    $result2 = $bd->insert("INSERT INTO aula (codigo, nome, turmas_teorica, turmas_pratica, carga_horaria_teorica, carga_horaria_pratica, carga_horaria_total, docentes, docentes_ch, semestre, periodo_letivo, curso_id) VALUES (:codigo, :nome, :turmas_teorica, :turmas_pratica, :carga_horaria_teorica, :carga_horaria_pratica, :carga_horaria_total, :docentes, :docentes_ch, :semestre, :periodo_letivo, :curso_id)", [
        ':codigo' => $codigo1,
        ':nome' => $nome1,
        ':turmas_teorica' => $turmas_teorica,
        ':turmas_pratica' => $turmas_pratica,
        ':carga_horaria_teorica' => $carga_horaria_teorica,
        ':carga_horaria_pratica' => $carga_horaria_pratica,
        ':carga_horaria_total' => $carga_horaria_total,
        ':docentes' => $docentes,
        ':docentes_ch' => $docentes_ch,
        ':semestre' => $semestre,
        ':periodo_letivo' => $periodo_letivo,
        ':curso_id' => $curso,
    ]);



    $result3 = $bd->insert("INSERT INTO calculo_semanal (codigo, nome, graduacao, posgraduacao, semestre, total) VALUES (:codigo, :nome, :graduacao, :posgraduacao, :semestre, :total)", [
        ':codigo' => $codigo,
        ':nome' => $nome,
        ':graduacao' => $graduacao,
        ':posgraduacao' => $posgraduacao,
        ':semestre' => $semestre,
        ':total' => $total,
    ]);

    $result4 = $bd->insert("INSERT INTO pedagogica_complementar (codigo, nome, graduacao, posgraduacao, semestre, total) VALUES (:codigo, :nome, :graduacao, :posgraduacao, :semestre, :total)", [
        ':codigo' => $codigo,
        ':nome' => $nome,
        ':graduacao' => $graduacao,
        ':posgraduacao' => $posgraduacao,
        ':semestre' => $semestre,
        ':total' => $total,
    ]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Dados cadastrados com sucesso</p>
</body>

</html>