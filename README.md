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
- Criar ficheiro teste.php para testar se carregou o php com o phpinfo
- Teste de conexão com a nossa BD
    - Ao testar a conexão deu um erro, porque falta instalar a extensão PHP mysqli para fazer a conexão com a BD
    - Vou aproveitar com o comando abaixo, instalar o mysqli e pdo (extensão para conexão com a BD).
        - $ docker-compose exec web docker-php-ext-install pdo pdo_mysql mysqli
    - O "web" é o nome do nosso container que possui o PHP.
    - Reiniciar (stop e start) os Containers e testar a página que retornou "OK". 
    - Destes estudos que estou a fazer com o Docker, a próxima etapa e carregar um ficheiro "Docker File"
    para adicionar os comandos de instalação das extensões que precisamos, para evitar de fazer manualmente.
- Teste para o Volume do MySQL
    - Mandei os Containers abaixo para ver se os dados do MySQL estavam a persistir, não estavam.
    - Depois de alguns destes, do exemplo que segui do ficheiro `.yalm` estava errado na parte do MySQL,
    faltava acrescentar o caminho para a minha pasta de dados, ficando como o exemplo abaixo:
        - volumes:
            - /home/user/Coding/mysql:/var/lib/mysql
