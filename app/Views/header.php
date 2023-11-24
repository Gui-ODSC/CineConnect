<?php $this->extend('template_base')?>

<!-- HEADER -->
<?php $this->section('header_filme')?>   
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand :hover text-white">CineConnect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link :active text-white" href="/filmes">Filmes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link :hover text-white custom-link" href="/filmes">Sessões</a>
                </li>
                <li class="nav-item dropdown ">
                <a class="nav-link :hover text-white" href="/filmes" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Salas
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link :hover text-white" href="/cadastro_filme" tabindex="-1" aria-disabled="true">Cadastro</a>
                </li>
            </ul>
            <form class="d-flex center">
                <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
                <button class="form-control-button btn btn-outline" type="submit"><img src="/assets/img/icon_search_white.png" alt="Search Icon"></button>
                <div class="form-control-user" style="display: block; padding-left:15px;">
                    <img class="user-icon-header" src="/assets/img/icon_user.png" alt="Search Icon">
                    <div class="user-icon-label">
                        <span style="color: white;">Admin</span>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </nav>
<?php $this->endSection() ?>