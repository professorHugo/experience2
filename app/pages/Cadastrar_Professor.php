<?php
if(isset($_POST['CadastrarProfessor'])){
    ?>
    <h2>Professor Será cadastrado</h2>
    <?php
}else{
    ?>
    <h2>Cadastro do Professor</h2>
    <?php
}
?>
<hr>
<form action="?page=Cadastrar_Professor" method="post">
    <div class="form-group col-xs-12 col-sm-2 col-md-2 col-lg-2">
        <label for="matricula"> Login</label>
        <input type="text" name="matricula" id="matricula" placeholder="Matrícula" title="Matrícula" class="form-control">
    </div>
    <div class="form-group col-xs-12 col-sm-3 col-md-5 col-lg-4">
        <label for="nome"> Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome" title="nome" class="form-control">
    </div>
    <div class="form-group col-xs-12 col-sm-3 col-md-2 col-lg-2">
        <label for="idade"> Idade</label>
        <input type="text" name="idade" id="idade" placeholder="Idade" title="idade" class="form-control">
    </div>

    <div class="form-group col-xs-12 col-sm-4 col-md-2 col-lg-4">
        <label for="foto"> Foto do Professor</label>
        <input type="file" id="foto">
        <p class="help-block">Escolha a foto do professor.</p>
    </div>
    
    <button type="submit" name="CadastrarProfessor" class="btn btn-primary">Cadastrar o professor</button>
    <button type="reset" class="btn btn-danger">Limpar formulário</button>
</form>