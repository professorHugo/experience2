<h4>Dados do Aluno:</h4>
<form action="?page=Consultar_Alunos" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-5">
        <label for="nome_aluno<?php echo $ReturnDados[matricula]?>">Nome:</label>
        <input type="tel" name="NomeCompleto" id="nome_aluno<?php echo $ReturnDados['matricula']?>" class="form-control" value="<?php echo $ReturnDados['nome'] ?>">
    </div>
    <div class="form-group col-md-2">
        <label for="idade<?php echo $ReturnDados['matricula']?>">Idade:</label>
        <input type="text" name="IdadeAluno" id="idade<?php echo $ReturnDados['matricula']?>" value="<?php echo $ReturnDados['idade']?>" class="form-control">
    </div>
    <div class="form-group col-md-5">
        <?php
        echo $QueryBuscarFotoAluno = "SELECT * FROM usuarios WHERE matricula = '$ReturnDados[matricula]'";
        $ExeQrBuscarFotoAluno = mysql_query($QueryBuscarFotoAluno);

        while ($ReturnDadosFoto = mysql_fetch_assoc($ExeQrBuscarFotoAluno)) {
            if ($ReturnDadosFoto['foto'] != '') {
                ?>
                <div style="width: 40%; margin: 0 auto">
                    <img class="img-responsive img-rounded" src="../img/Fotos/<?php echo $ReturnDadosFoto['foto'] ?>.png" alt="<?php echo $ReturnDadosFoto['foto'] ?>" title="<?php echo $ReturnDadosFoto['foto'] ?>">
                </div>
                <input type="file" name="UpdateFoto" class="form-control">
                <?php
            } else {
                ?>
                <div style="width: 40%; margin: 0 auto">
                    <img class="img-responsive img-rounded" src="../img/Fotos/default.png" alt="<?php echo $ReturnDadosFoto['foto'] ?>" title="<?php echo $ReturnDadosFoto['foto'] ?>">
                </div>
                <input type="file" name="UpdateFoto" class="form-control">
                <?php
            }
        }
        ?>
    </div>
    <div class="modal-footer">
        <input type="hidden" name="MatriculaAluno" value="<?php echo $ReturnDados['matricula'] ?>">
        <input type="hidden" name="TipoUpdate" value="DadosPessoais">
        <button type="submit" name="AtualizarAluno" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
    </div>
</form>