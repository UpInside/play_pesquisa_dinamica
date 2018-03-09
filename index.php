<?php

require_once __DIR__ . '/Config.inc.php';

$read = new \CRUD\Read;

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pesquisa Dinâmica</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700">
    <link rel="stylesheet" href="Theme/_css/fonticon.css">
    <link rel="stylesheet" href="Theme/_css/style.css">
</head>
<body>

<header class="main_header">
    <div class="main_header_content">
        <div class="main_header_search">
            <h1>Sistema de Pesquisa:</h1>

            <form action="index.php?action=search" method="post" class="main_header_search_form">
                <input type="text" name="what" placeholder="O que você quer hoje? Restaurante? Bar? Pizzaria?">
                <input type="text" name="where" placeholder="Onde você está?">
                <button class="icon-search icon-notext"></button>
            </form>
        </div>
    </div>
</header>

<main>

    <section class="main_list">
        <div class="main_list_content">

            <header class="main_list_header">
                <h1>Você procurou por XPTO em XPTO:</h1>
            </header>

            <article class="main_list_item">
                <header>
                    <h2>Nome da Empresa</h2>
                </header>

                <p class="icon-address-book">Endereço: </p>
                <p class="icon-phone">Telefone: </p>
            </article>

            <article class="main_list_item">
                <header>
                    <h2>Nome da Empresa</h2>
                </header>

                <p class="icon-address-book">Endereço: </p>
                <p class="icon-phone">Telefone: </p>
            </article>

        </div>
    </section>

    <p style="text-align: center; padding: 40px 20px;">CONTEÚDO DO SITE</p>
</main>
</body>
</html>