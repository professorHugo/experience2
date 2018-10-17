<h4>Aulas Disponibilizadas:</h4>
<form action="?page=Consultar_Alunos" method="post" enctype="multipart/form-data">
<?php
$NumeroMatricula = $ReturnDados['matricula'];
$QueryAulasAssistidas1 = "SELECT * FROM usuarios WHERE matricula = '$NumeroMatricula'";
$ExeQrAulasAssistidas1 = mysql_query($QueryAulasAssistidas1);

if ($ExeQrAulasAssistidas1) {
    while ($ReturnAulasAluno = mysql_fetch_assoc($ExeQrAulasAssistidas1)) {
        $AulaAssistida1 = $ReturnAulasAluno['aula1'];
        if ($AulaAssistida1 == 0) {
            $AulaAssistida1 = 1;
        }
        $AulaAssistida2 = $ReturnAulasAluno['aula2'];
        if ($AulaAssistida2 == 0) {
            $AulaAssistida2 = 2;
        }
        $AulaAssistida3 = $ReturnAulasAluno['aula3'];
        if ($AulaAssistida3 == 0) {
            $AulaAssistida3 = 3;
        }
        $AulaAssistida4 = $ReturnAulasAluno['aula4'];
        if ($AulaAssistida4 == 0) {
            $AulaAssistida4 = 4;
        }
        $AulaAssistida5 = $ReturnAulasAluno['aula5'];
        if ($AulaAssistida5 == 0) {
            $AulaAssistida5 = 5;
        }
        $AulaAssistida6 = $ReturnAulasAluno['aula6'];
        if ($AulaAssistida6 == 0) {
            $AulaAssistida6 = 6;
        }
        $AulaAssistida7 = $ReturnAulasAluno['aula7'];
        if ($AulaAssistida7 == 0) {
            $AulaAssistida7 = 7;
        }
        $AulaAssistida8 = $ReturnAulasAluno['aula8'];
        if ($AulaAssistida8 == 0) {
            $AulaAssistida8 = 8;
        }
    }
}

$QueryBuscarAulas2 = "SELECT * FROM aulas WHERE numero_aula = $AulaAssistida1 OR numero_aula = $AulaAssistida2 OR numero_aula = $AulaAssistida3 OR numero_aula = $AulaAssistida4 OR numero_aula = $AulaAssistida5 OR numero_aula = $AulaAssistida6 OR numero_aula = $AulaAssistida7 OR numero_aula = $AulaAssistida8";
$ExeQrBuscarAulas2 = mysql_query($QueryBuscarAulas2);
    

if (mysql_num_rows($ExeQrBuscarAulas2) >= 1) {
    $QueryBuscarAulas3 = "SELECT * FROM usuarios WHERE matricula = '$ReturnAulasAluno[matricula]'";
    $ExeQrBuscarAulas3 = mysql_query($QueryBuscarAulas3);

    
        while ($AulasAssistidas = mysql_fetch_assoc($ExeQrBuscarAulas2)) {
            ?>
            <article class="col-md-3" style="margin-bottom: 30px">
                <a href="#">
                    <div class="form-group" style="min-height: 120px;margin:0 auto;">
                        <img src="../img/buttons/<?php echo $AulasAssistidas['numero_aula'] ?>.png" class="img-responsive img-rounded" style="max-height: 70px;max-width: 100%;margin: 0 auto 10px;">
                        <span class="btn btn-default form-control"><?php echo $AulasAssistidas['titulo_aula'] ?></span>
                    </div>
                </a>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="ConfirmarAula<?php echo $AulasAssistidas['numero_aula'] ?>" value="1">Assistiu
                    </label>
                </div>
            </article>
            <?php
        }
    
} else {
    while ($AulasAssistidas = mysql_fetch_assoc($ExeQrBuscarAulas2)) {
        ?>
        <article class="col-md-3" style="margin-bottom: 30px">
            <a href="#">
                <div class="form-group" style="min-height: 120px;margin:0 auto;">
                    <img src="../img/buttons/<?php echo $AulasAssistidas['numero_aula'] ?>.png" class="img-responsive img-rounded" style="max-height: 70px;max-width: 100%;margin: 0 auto 10px;">
                    <span class="btn btn-default form-control"><?php echo $AulasAssistidas['titulo_aula'] ?></span>
                </div>
            </a>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="ConfirmarAula" value="?page=Consultar_alunos&Aluno=<?php echo $ReturnDados['matricula'] ?>&Aula=<?php echo $AulasAssistidas['numero_aula'] ?>" checked>Assistiu
                </label>
            </div>
        </article>
        <?php
    }
}
?>
<div class="clearfix"></div>
<div class="modal-footer">
    <input type="hidden" name="MatriculaAluno" value="<?php echo $ReturnDados['matricula'] ?>">
    <input type="hidden" name="NomeCompleto" value="<?php echo $ReturnDados['nome'] ?>">
    <input type="hidden" name="TipoUpdate" value="DadosAulas">
    <button type="submit" name="AtualizarAluno" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
</div>
</form>