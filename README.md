<p align="center"><img src="https://user-images.githubusercontent.com/78177376/166720720-748acd8f-19d9-487e-aedd-bcd05c31e4ec.png" width="700"></p>

<div align="center">
    <h2><strong>PROJETO ESTÁGIO OVERDRIVE | UTILIZANDO - LARAVEL E DOCKER:</strong></h2>
</div>

## RESUMO DO PROJETO DESENVOLVIDO:

Desenvolver e Preencher um Mini-CRM para controlar os dados básicos de Empresas e Funcionários, utilizando **Laravel no Back-end**. <br>

<strong>TECNOLOGIAS UTILIZADAS:</strong>
- HTML + CSS *(Bootstrap)*
- Laravel + Docker *(Laradock)*
- Banco de dados - MySql *(PhpMyAdmin)*
- Nginx *(Servidor)*
 


## O QUE É LARAVEL?

Laravel é um framework PHP livre e open-source para o desenvolvimento de sistemas web que utilizam o padrão MVC. <br>
*link: (https://laravel.com/)*

## O QUE É DOCKER?

Docker é um conjunto de produtos de plataforma como serviço que usam virtualização de nível de sistema operacional para entregar software em pacotes chamados contêineres.<br>
*link: (https://www.docker.com/)*


## SOBRE O LARADOCK

Laradock é um importante e reconhecido projeto criado pela comunidade do PHP com configurações prontas para trabalhar com Laravel, utilizando o Docker.
*link: (https://laradock.io/)*


<div align="center">
  <h2><strong>PASSO A PASSO DE COMO UTILIZAR O CRM:</strong></h2>
</div>

# Preparando o ambiente: 
<br>
1º. Para conseguir executar o CRM, Você precisa ter o Docker instalado, Caso não tenha o Docker siga o passo a passo abaixo:
<br>
Primeiro acesse o site oficial do docker e faça o download (https://www.docker.com/get-started/), crie sua conta e siga com as etapas de Instalação!
<p align="center">
    <img src="https://user-images.githubusercontent.com/78177376/166486196-6979a9ea-6963-4564-990b-214d49a2f4b1.png" width="600">
</p>

2º. Depois de ter instalado o docker, Faça o Clone DESSE REPOSITORIO para o seu Computador;
<br>
- Utilize o comando *```git clone https://github.com/Icaro-Vieira/projeto2-crm-overdrive.git```* em seu Git Bash.


3º. Depois de clonado, clone também dentro da pasta do projeto, o laradock (https://laradock.io/getting-started/);
<br>
- Utilize o comando *```git clone https://github.com/laradock/laradock.git```*


4º. Dentro da pasta do LARADOCK no projeto, faça uma copia do arquivo ```.env.example``` e altere o nome para ```.env``` apenas!.
<br>
- para copiar basta selecionar o arquivo e apertar as teclas ```Ctrl + C``` e depois ```Ctrl + V```, clique na cópia com o botão direito do mouse e vai até a opção de ```Renomear```;
- Abra o arquivo com algum editor de texto, e coloque os segintes dados da maneira que esta descrito: 

```COMPOSE_PROJECT_NAME=myproject ``` <br>
```PHP_VERSION=7.4 ``` <br>
```MYSQL_VERSION=latest ``` <br>
```MYSQL_DATABASE=default ``` <br>
```MYSQL_USER=default ``` <br>
```MYSQL_PASSWORD=secret ``` <br>
```MYSQL_PORT=8306 ``` <br>
```MYSQL_ROOT_PASSWORD=root ``` <br>
```MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d ```


5º. Feito a etapa anterior, Abra o Prompt de Comando (CMD) ou o GitBash, entre na pasta "laradock". 
<br>
- E execute o seguinte comando: *```docker-compose up -d nginx mysql phpmyadmin```* (Esse comando vai Estartar (Iniciar) o servidor, carregar o banco de dados e seu SGBD). Aguarde um pouco até todos os containers ficarem ativos.

<br>

6º. Abra novamente o seu CMD e execute o seguinte comando: *```docker-compose exec --user=laradock workspace bash```*, Aguarde a outra linha de comando do bash do Docker aparecer e digite o comando para gerar as migrations do banco de dados *```php artisan migrate```* (O comando php artisan migrate é responsável por gerar as migrações (tabelas) no banco de dados!), Aguarde aparecer a mensagem de sucesso e insira o último comando para gerar as seeds *```php artisan db: seed```* (O comando php artisan db:seed irá gerar seu usuário admin no banco de dados!)

<br>

**7º. Abra seu navegador e coloque na URL: "localhost:8888" para testar e ter acesso ao projeto.**


[] Arrumar o env do projeto e do laradock

[] criar banco de dados com mesmo nome do .env de dentro do projeto

Alterei no .env 
- DB_PASSWORD=root
- DB_HOST=mysql


[] rodar comando: php artisan key:generate


[] rodar o comando php artisan storage:link
