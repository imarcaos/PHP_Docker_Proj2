# PHP_Docker_Proj2
Estudo de Docker e PHP

# Projeto 2 - PHP e Docker

Projeto criado com o intuíto de estudar a estruturação, organização e conexão entre PHP e MySQL utilizando o Docker.
- Irei utilizar o docker-compose para subir o php-apache e o mysql
- Aproveito também neste projeto para estudar variáveis de ambiente utilizando o ficheiro .env
- Espero que este projeto seja útil para si, aproveite. Irei tentar detalhar os passos da melhor forma possível.

##### Iniciado: 2024/06/03

##### Projeto (a escrever...)
![Projeto 2 PHP Finalizado](brevemente)


#### Pré-requisitos para este projeto
- Visual Studio Code (codar)
- DBeaver - Vou utilizar este Sistema de Gestão de BD.
- Docker (Rodar contentores em cima)
- Apacher (poderá substituir por outro, ex. NGINX)
- PHP
- MySQL

#### Sistema de Pastas e Ficheiros:
- |_ php_docker_Proj2
    - |_ .env
    - |_ docker-compose.yml


#### Pontos Principais de Trabalho:
- Criação dos ficheiro docker-compose.yml e .env
- Iniciar os contentores com o Docker Compose na primeira vez
    - Esta opção tem que ser feita dentro a pasta do projeto onde temos o ficheiro "docker-compose.yml"
    - "up" para subir a primeira vez e "-d" para rodar em background
        - docker-compose up -d    
    - Para parar o Docker Compose (Containers)
        - docker-compose stop
    - Para iniciar o Docker Compose (Containers)
        - docker-compose start
    - Para apagar os containers
        - docker-compose down
