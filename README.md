# KAMBA SDK para PHP

[![Latest Version](https://img.shields.io/github/release/UseKamba/kamba-sdk-php.svg?style=flat-square)](https://github.com/UseKamba/kamba-sdk-php/releases)
[![Build Status](https://img.shields.io/travis/UseKamba/kamba-sdk-php.svg?style=flat-square)](https://travis-ci.org/UseKamba/kamba-sdk-php)
[![Total Downloads](https://img.shields.io/packagist/dt/UseKamba/kamba-sdk-php.svg?style=flat-square)](https://packagist.org/packages/UseKamba/kamba-sdk-php)

Repositório official do [KAMBA SDK para PHP ](https://docs.usekamba.com/sdk-for-php)
. Copyright 2018 KAMBA Soluções de Pagamento, Todos Direitos Reservados.

O KAMBA SDK para PHP fornece um conjunto de classes e métodos para interagir através de requisições HTTP com a API do KAMBA. Você pode começar [instalando o SDK através do Composer](https://github.com/UseKamba/kamba-sdk-php#instalando-o-sdk) ou baixando o código fonte da [última versão](https://github.com/UseKamba/kamba-sdk-php/releases).

## Iniciando

Crie uma conta Comerciante de testes na [Sandbox](https://sandbox.usekamba.com) e salve a sua *chave de API* e seu *identificador Comercinte* de testes.

>**Nota:** O KAMBA SDK para PHP actualmente encontra-se em fase de especificação e desenvolvimento, se >encontrar algum erro, por favor contacte-nos *info@usekamba.com*.

## Requisitos de Instalação

* PHP => 5.6

## Instalando o SDK
Recomendamos instalar o Gerenciador de Dependências [Composer](https://getcomposer.org/)

```sh
curl -sS https://getcomposer.org/installer | php
```
Agora vamos instalar o KAMBA SDK para PHP
```sh
composer require 'usekamba/kamba-sdk-php'
```
Após a instalação, você precisa incluir o [autoloader do Composer](https://getcomposer.org/doc/04-schema.md#psr-4)

```sh
require 'vendor/autoload.php';
```

# Recursos

* [Guia do Desenvolvedor](https://github.com/UseKamba/kamba-sdk-php/wiki) – Informações  detalhadas sobre o uso do SDK
* [Documentação da API](https://docs.usekamba.com/) – Para mais detalhes sobre as funcionalidades, parâmetros e respostas
* [Blog](https://medium.com/@usekamba) – Dicas e notícias, artigos e anúncios
* [Projecto de Exemplo]() - Um projeto de amostra implementando o *KAMBA SDK para PHP*
* [Forum](https://web.facebook.com/profile.php?id=1610007159310233&ref=br_rs) – Faça perguntas, obtenha ajuda e dê feedback
* [FAQ](http://usekamba.com/perguntas-frequentes) – Perguntas frequentes

## Features

* Simples Cliente HTTP em PHP para trabalhar com a [API](https://docs.usekamba.com/) Kamba Checkout
* Integraçao completa com todos os serviços da API Kamba Checkout
* Método de pagamento [Kamba carteira ou wallet](http://usekamba.com/perguntas-frequentes#carteira)

## Wiki

Verifique a [wiki](https://github.com/UseKamba/kamba-sdk-php/wiki) para documentação detalhada.

## Reportando um Bug

Se você encontrar um bug no kamba-sdk-php, gostaríamos de ouvir sobre isso *info@usekamba.com*. Pesquise os problemas existentes e tente verificar se seu problema ainda não existe antes de criar uma nova issue. É útil incluir a versão da release do [kamba-sdk-php](https://github.com/UseKamba/kamba-sdk-php/releases), a versão do PHP e o SO que você está usando. Por favor inclua a stack trace e o log de erro se possível.

Para ajuda e perguntas sobre o uso do kamba-sdk-php, use os recursos listados nesta [secção](https://github.com/UseKamba/kamba-sdk-php#recursos).

## Testes

Para realizar testes unitários use
```sh
composer test
```
Ou

```sh
phpunit tests/unit/
```

## Contribuindo

Leia o nosso [guia de contribuição](https://github.com/UseKamba/kamba-sdk-php/CONTRIBUTING.md)