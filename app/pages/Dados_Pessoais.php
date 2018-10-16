<h3>Dados do Aluno: <b><?php echo $_SESSION['Login']['nome']?></b></h3>

<?php
//Verificar se houve envio do formulário e atualizar os dados pessoais do aluno
    if(isset($_POST['SalvarDadosAluno'])){
        "Os dados do aluno serão atualizados";
        
        $Matricula = $_SESSION['Login']['matricula'];
        $NomeUpdate = $_POST['Nome'];
        $EmailUpdate = $_POST['Email'];
        $IdadeUpdate = $_POST['Idade'];
        
        "<br>";
        $QueryUpdateDados = "UPDATE usuarios SET nome = '$NomeUpdate', email = '$EmailUpdate', idade = '$IdadeUpdate' WHERE matricula = '$Matricula'";
        
        $ExeQrUpdateDados = mysql_query($QueryUpdateDados);
        
        if($ExeQrUpdateDados){
            ?>
            <!-- Modal Dados Alterados-->
            <div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="margin-top:15%">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Dados do aluno atualizados</h4>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="col-md-10 col-md-push-1 text-center" style="padding-left: 0;padding-right: 0">
                                    <img src="../img/loading.svg" class="img-responsive" width="100px" style="margin:0 auto;">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-10 col-md-push-1 text-center" style="margin-top: 30px">
                                    Atualizando o usuário...<br>
                                    Usuário: <?php echo $_SESSION['Login']['matricula'] ?><br>
                                    Nome: <?php echo $_SESSION['Login']['nome'] ?><br>
                                    Atualizado com sucesso...
                                </div>
                                <div class="clearfix"></div>
                                <meta http-equiv="refresh" content="2;index.php?page=Dados_Pessoais">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <?php
        }
    }
?>
<hr>
<form action="" method="post">
    <div class="form-group">
        <h4>Dados Pessoais</h4>
        <div class="col-md-6">
            <label for="Nome">Nome: </label>
            <input type="text" name="Nome" id="Nome" class="form-control" value="<?php echo $_SESSION['Login']['nome']?>">
        </div>
        <div class="col-md-4">
            <label for="Email">E-mail:</label>
            <input type="email" name="Email" id="Email" class="form-control" value="<?php echo $_SESSION['Login']['email'] ?>">
        </div>
        <div class="col-md-2">
            <label for="Idade">Idade: </label>
            <input type="number" name="Idade" id="Idade" class="form-control" value="<?php echo $_SESSION['Login']['idade']?>">
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <h4>Sua Experience: </h4>
        
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
        <h4>Certificado: </h4>
        <?php
        //Fazer tomada de decisão para verificar se o aluno já concluiu as disciplinas para solicitar o certificado
        ?>
        <a href="?page=Home&Imprimir&Matricula=<?php echo $_SESSION['Login']['matricula']?>&Aula=1" class="col-md-3" style="border:solid 1px #333">
            <img src="img/print.svg" style="height:50px; margin:0 auto" class="img-responsive" alt="Imprimir Certificado" title="Imprimir Certificado">
        </a>
        
        <a href="?page=Home&Imprimir&Matricula=<?php echo $_SESSION['Login']['matricula']?>&Aula=2" class="col-md-3" style="border:solid 1px #333">
            <img src="img/print.svg" style="height:50px; margin:0 auto" class="img-responsive" alt="Imprimir Certificado" title="Imprimir Certificado">
        </a>
        
        <a href="?page=Home&Imprimir&Matricula=<?php echo $_SESSION['Login']['matricula']?>&Aula=3" class="col-md-3" style="border:solid 1px #333">
            <img src="img/print.svg" style="height:50px; margin:0 auto" class="img-responsive" alt="Imprimir Certificado" title="Imprimir Certificado">
        </a>
        
        <a href="?page=Home&Imprimir&Matricula=<?php echo $_SESSION['Login']['matricula']?>&Aula=4" class="col-md-3" style="border:solid 1px #333">
            <img src="img/print.svg" style="height:50px; margin:0 auto" class="img-responsive" alt="Imprimir Certificado" title="Imprimir Certificado">
        </a>
        
        <a href="?page=Home&Imprimir&Matricula=<?php echo $_SESSION['Login']['matricula']?>&Aula=5" class="col-md-3" style="border:solid 1px #333">
            <img src="img/print.svg" style="height:50px; margin:0 auto" class="img-responsive" alt="Imprimir Certificado" title="Imprimir Certificado">
        </a>
        
        <a href="?page=Home&Imprimir&Matricula=<?php echo $_SESSION['Login']['matricula']?>&Aula=6" class="col-md-3" style="border:solid 1px #333">
            <img src="img/print.svg" style="height:50px; margin:0 auto" class="img-responsive" alt="Imprimir Certificado" title="Imprimir Certificado">
        </a>
        
        <a href="?page=Home&Imprimir&Matricula=<?php echo $_SESSION['Login']['matricula']?>&Aula=7" class="col-md-3" style="border:solid 1px #333">
            <img src="img/print.svg" style="height:50px; margin:0 auto" class="img-responsive" alt="Imprimir Certificado" title="Imprimir Certificado">
        </a>
        
        <a href="?page=Home&Imprimir&Matricula=<?php echo $_SESSION['Login']['matricula']?>&Aula=8" class="col-md-3" style="border:solid 1px #333">
            <img src="img/print.svg" style="height:50px; margin:0 auto" class="img-responsive" alt="Imprimir Certificado" title="Imprimir Certificado">
        </a>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <button type="submit" class="btn btn-success" name="SalvarDadosAluno">Salvar Alterações</button>
    </div>
</form>