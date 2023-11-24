<?php $this->extend('footer')?>
form
<!-- MAIN -->
<?php $this->section('dados_filme')?>
<h1 style="color: white; margin: 10px 10px 30px 10px; text-decoration: underline;">Cadastro de Filmes</h1>
<div class="formulario-agrup">
    <form action="<?php echo site_url('/cadastro_filme/preenchimento'); ?>" method="POST">
        <div class="teste">
        <label for="inputEmail4" style="color:white">Título Filme</label>
        <input type="text" class="form-control" name="titulo" id="inputEmail4" required placeholder="Titulo">
  
        <label for="inputPassword4">Duração</label>
        <input type="text" class="form-control" name="duracao" id="inputPassword4" required placeholder="2h30">
  
        <label for="inputAddress">Data Estreia</label>
        <input type="text" class="form-control" name="data_estreia" id="inputAddress" required placeholder="22-05-2023">
  
        <label for="inputAddress">Classificação Indicativa</label>
        <input type="text" class="form-control" name="classificacao" id="inputAddress" required placeholder="14 anos">

        <label for="inputAddress">Genero</label>
        <input type="text" class="form-control" name="genero" id="inputAddress" required placeholder="Ação">
 
        <label for="inputAddress">Atores</label>
        <input type="text" class="form-control" name="atores" id="inputAddress" required placeholder="The Rock">

        <label for="inputAddress">Sala de Exibição</label>
        <input type="text" class="form-control" name="sala_exibicao" id="inputAddress" required placeholder="Sala 09">
  
        <label for="inputAddress">Sessão</label>
        <input type="text" class="form-control" name="sessao" id="inputAddress" required placeholder="22h">
   
        <label for="inputAddress2">Link Imagem Filme</label>
        <input type="text" class="form-control" name="link" id="inputAddress2" required placeholder="www.imagem_escolhida.com.br">
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
</div>
</div>



<?php $this->endSection() ?>