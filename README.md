# Cadastro de Vendas

O sistema usa o framework CakePhp para gerènciamento e com ele é possivel cadastrar, atualizar, visualizar  e deletar dados.


Requisitos para usar o siste:

* Php 7.4 ou superior.
* Extensão mbstring.
* Extensão intl.
* MySQL (5.1.10 ou superior)

## Como usar o sistema
O sistema tem um recurso de CRUD completo, e ainda é possivel carregar informações de arquivos .txt no caminho:

~~~~php
localhost/eureciclo/dados/upload
~~~~

## Como usar o sistema
Vocè precisa ter o Docker instalado no seu sistema.
Depois disso suba uma container com a versão do Mysql mais atual com as seguintes informações:

~~~~docker
version: '3.9'
services:
  db:
    image: mysql:latest
    restart: always
    environment:
      MYSQL_DATABASE: romiseta
      MYSQL_USER: root
      MYSQL_PASSWORD: example_password
      MYSQL_ROOT_PASSWORD: seu_password
    ports:
      - "3306:3306"
    volumes:
      - db_data:/var/lib/mysql
~~~~

Nesse banco adicione a tabela  "dados" nescessárias para rodar o sistema, como por exemplo:

~~~~sql
CREATE TABLE dados (
  id INT(11) PRIMARY KEY,
  compradores VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  descricao LONGTEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  preco_unitario VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  quantidade INT(11),
  endereco VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  fornecedor VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci
);
~~~~

Depois disso baixe a imagem do sitema no DockerHub:

~~~~docker
docker pull jaelcio/bolo-eco
~~~~

Depois disso você pode criar um container para rodar esta imagem criando um docker compose:

~~~~docker
version: '3'
services:
  bolo-eco:
    image: jaelcio/bolo-eco
    ports:
      - 80:80
~~~~

O Docker Compose irá ler o arquivo docker-compose.yml, baixar a imagem jaelcio/bolo-eco (se ainda não estiver presente localmente) e iniciar o contêiner com base nas configurações fornecidas.

Agora, o contêiner está em execução e pode ser acessado através de http://localhost no navegador ou usando o endereço IP do host.