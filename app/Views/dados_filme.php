<?php $this->extend('footer')?>

<!-- MAIN -->
<?php $this->section('dados_filme')?>
<h1 style="color: white; margin: 10px 10px 30px 10px; text-decoration: underline;">FILMES EM CARTAZ</h1>
<div class="main">
<?php foreach($filmes as $filme): ?>
    <div class="container_filme">
        <div class="table_container">
            <div class="table_itens">
                <div class="imagem_filme">
                    <td><img class="w-100" src="<?php echo $filme['link']?>" alt="filme"></td>
                </div>
                <table class="table_filme"> 
                    <tr>
                        <th>Titulo</th>
                        <td><?php echo $filme['titulo']?></td>
                    </tr>
                    <tr>
                        <th>Duração</th>
                        <td><?php echo $filme['duracao']?></td>
                    </tr>
                    <tr>
                        <th>Data_Estreia</th>
                        <td><?php echo $filme['data_estreia']?></td>
                    </tr>
                    <tr>
                        <th>Classificação</th>
                        <td><?php echo $filme['classificacao']?></td>
                    </tr>
                    <tr>
                        <th>Genero</th>
                        <td><?php echo $filme['genero']?></td>
                    </tr>
                    <tr>
                        <th>Atores</th>
                        <td><?php echo $filme['atores']?></td>
                    </tr>
                    <tr>
                        <th>Sala de Exibição</th>
                        <td><?php echo $filme['sala_exibicao']?></td>
                    </tr>
                    <tr>
                        <th>Sessão</th>
                        <td><?php echo $filme['sessao']?></td>
                    </tr>
                </table>
                <div class="botoes">
                    <div class="button-section-left">
                        <a href="DeleterFilme" class="button-deletar btn btn-danger">Deletar</a>
                    </div>
                    <div class="button-section-right">
                        <a href="EditarFilme" class="button-editar btn btn-warning">Editar</a>
                        <a href="Detalhes" class="button-detalhes btn btn-success">Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<div class="align-pagination">
    <?php echo $pager->links();?>
</div>
</div>
<?php $this->endSection() ?>