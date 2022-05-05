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

<br>
<br>
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
- Abra o arquivo que você renomeou, com algum editor de texto, e coloque os segintes dados da maneira que esta descrito: 
- *Para pesquisar dentro do código use a tecla de atalho: ```Ctrl + F```* <br>
- ```PHP_VERSION=7.4 ``` <br>
- ```MYSQL_VERSION=latest ``` <br>
- ```MYSQL_DATABASE=default ``` <br>
- ```MYSQL_USER=default ``` <br>
- ```MYSQL_PASSWORD=secret ``` <br>
- ```MYSQL_PORT=8306 ``` <br>
- ```MYSQL_ROOT_PASSWORD=root ``` <br>
- ```MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d```


5º. Dentro da pasta do PROJETO, faça o mesmo passo anterior, uma copia do arquivo ```.env.example``` e altere o nome para ```.env```.
<br>

- Abra o arquivo ```.env``` que da pasta do PROJETO que você renomeou, com algum editor de texto, e também coloque os segintes dados da maneira que esta descrito: 
- ```DB_CONNECTION=mysql ``` <br>
- ```DB_HOST=mysql ``` <br>
- ```DB_PORT=3306 ``` <br>
- ```DB_DATABASE=projeto_crm ``` <br>
- ```DB_USERNAME=root ``` <br>
- ```DB_PASSWORD=root ``` <br>



6º. Feito a etapa anterior, Abra o Prompt de Comando (CMD) ou o GitBash, entre na pasta "laradock". 
<br>
- E execute o seguinte comando: *```docker-compose up -d nginx mysql phpmyadmin```* (Esse comando vai criar e estartar (Iniciar) o servidor, carregar o banco de dados e seu SGBD). Aguarde um pouco até todos os containers ficarem ativos.

- Execute o comando ```docker ps``` para verificar as portas do projeto: 
<br>

<p align="center">
    <img src="https://user-images.githubusercontent.com/78177376/166983556-4a0c0b1b-3328-4ea1-bd3f-920d0e95f673.png" width="800">
</p>

- Verifique a porta do seu phpmyadmin e coloque no seu navegador: ```localhost:sua porta```
<p align="center">
    <img src="https://user-images.githubusercontent.com/78177376/166999846-c31b6dc8-1884-4e25-84a6-981e1a15e36d.png" widht="600">
</p>

<br>

7º. Abra novamente o seu CMD e execute o seguinte comando: <br>
- *```docker-compose exec --user=laradock workspace bash```*, Aguarde a outra linha de comando do bash do Docker aparecer
- E digite o comando para gerar uma chave para seu ```.env```! utilize o comando ```php artisan key:generate``` para gerar a chave. 

# Configurando o Banco de Dados:

- Vai aparecer essa tela: preencha os campos dessa maneira e clique em continuar!
<p align="center">
    <img src="https://user-images.githubusercontent.com/78177376/167002443-ef008e8a-4704-4428-b77f-d6ba0744cd85.png" widht="600">
</p>

- Apos fazer isso, crie o banco de dados com o nome que está no seu ```DB_DATABASE=projeto_crm```
<p align="center">
    <img src="https://user-images.githubusercontent.com/78177376/167014003-175d373f-dd0b-4ea6-b4e0-8b8dd629a991.png" widht="600">
</p>


- as migrations do banco de dados *```php artisan migrate```* (O comando php artisan migrate é responsável por gerar as migrações (tabelas) no banco de dados!), Aguarde aparecer a mensagem de sucesso e insira o último comando para gerar as seeds *```php artisan db: seed```* (O comando php artisan db:seed irá gerar seu usuário admin no banco de dados!)

