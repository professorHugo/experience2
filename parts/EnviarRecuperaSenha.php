<?php
echo $Matricula = $_POST['matricula'];
echo $EmailRecuperacao = $_POST['EmailRecuperacao'];

echo '<br>';

echo $QueryBuscarCadastroAluno = "SELECT * FROM usuarios WHERE matricula = $Matricula AND email = '$EmailRecuperacao'";
$ExeQrBuscarCadastroAluno = mysql_query($QueryBuscarCadastroAluno);

if(mysql_num_rows($ExeQrBuscarCadastroAluno) > 0){
    while($ResBuscarAlunos = mysql_fetch_assoc($ExeQrBuscarCadastroAluno)){
        $SenhaResetada = "experience";
        $SenhaMD5 = md5($SenhaResetada);
        
        
        $Unidade = $ResBuscarAlunos['unidade'];
        $Matricula = $ResBuscarAlunos['matricula'];
        $Senha = $ResBuscarAlunos['senha'];
        $Nome = $ResBuscarAlunos['nome'];
        $Email = $ResBuscarAlunos['email'];
        $Turma = $ResBuscarAlunos['turma'];
        $Idade = $ResBuscarAlunos['idade'];
        $Foto = $ResBuscarAlunos['foto'];
        
        echo '<br>';
        
        echo $QueryResetarSenha = "UPDATE usuarios SET senha = 'experience', senha_md5 = 'd6e047923b2b0f63a7a03c66074a0151' WHERE matricula = '$Matricula'";
        
        $ExeQrResetarSenha = mysql_query($QueryResetarSenha);
        
        if($ExeQrResetarSenha){
                        
            $assunto = utf8_encode(utf8_decode('Recuperar senha do  '));
            $mensagem = '
			
                <!--Core jQuery-->
                <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

                <h1>Ol&aacute; ' . $Nome . '</h1>
                Você solicitou o reset da sua senha no portal do ' . $SITENAME . ' - Unidade '.$Unidade.'
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-4 col-sm-6 col-md-8 col-lg-10">
                                <h3>Você se cadastrou com os seguintes dados:</h3>
                                <p class="lead">
                                        Unidade: ' . $Unidade . '<br>
                                        Matrícula: ' . $Matricula . '<br>
                                        Turma: ' . $Turma . '<br>
                                        E-mail de Cadastro: ' . $Email . '<br>
                                        Senha Resetada: '.$SenhaResetada.'
                                </p>
                                <p>Lembre-se de alterar sua senha quando fizer o próximo login, é extremamente importante cuidar da nossa Segurança da Informação...!<br>
                                <b>OBS: Essa alteração de senha é obrigatória<b>
                                </p>


                        </div>
                </div>
                
        ';
        
        $enviar = sendMail($assunto . $SITENAME, $mensagem, $mensagem, MAILUSER, $SITENAME, $Email, $Nome);
            
        ?>
        <!-- Modal Ativar usuario-->
            <div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:11%">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Recuperação de Senha do aluno: <?php echo $Nome ?></h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12 text-center">
                                <p class="lead">
                                    Olá <?php echo $Nome ?>, um e-mail foi enviado para <b><?php $Email?></b> <br>
                                    <?php echo $SITENAME . ' - Unidade ' . $Unidade ?>
                                </p>
                                <hr>
                                <p class="">
                                    Verifique seu e-mail, enviamos para lá a sua senha. É extremamente importante que você altere a senha no próximo login
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                                <a href="?Acessar=<?php echo $Matricula ?>" class="btn btn-xl btn-success" name="Acessar">Acessar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }else{
            echo "<br>";
            echo "Deu ruim!";
            echo "<br>";
            echo mysql_error();
        }
    }
}