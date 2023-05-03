# INICIE EDUCAÇÃO

Este projeto faz parte do teste da inicie educação, onde foi solicitado para que fosse construido uma api em laravel para consumir endpoints de users, posts e comments de uma api externa.

Obs: O aquivo .env foi adicionado neste repositório para facilitar os testes, em um repositório real este seria omitido no .gitignore.

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

### 📋 Pré-requisitos

De que coisas você precisa para instalar o software e como instalá-lo?
Para esse projeto é necessário a instalação do docker, caso não tenha instalado siga a documentação:
[Docker](https://docs.docker.com/get-docker/)

```
[Docker](https://docs.docker.com/get-docker/)
```

### 🔧 Instalação

Esse projeto utiliza o docker juntamente do utilitário do Laravel (Sail), portanto não precisa ter nada instalado na máquina além do docker.
Para intalar as dependências, abra o terminal na pasta do projeto e rode o seguinte comando:

```
./dev-setup.sh
```
Aguarde até que todas as dependêcias estejam instaladas.

## ⚙️ Executando os testes
Para esse projeto foi escolhido o [PESTPHP](https://pestphp.com/) para os testes automatizados.

Para executar os testes rode o seguinte comando:

```
./vendor/bin/sail pest
```

### 🔩 Executando o projeto

Para executar o projeto rode o seguinte comando

```
./vendor/bin/sail up
```

## 📦 Documentação

A documentação está inclusa na pasta raiz do projeto no arquivo swagger.yaml.
Para visualizar a documentação copie o conteúdo do arquivo swagger.yaml e cole no [Swagger Editor](https://editor.swagger.io/).
