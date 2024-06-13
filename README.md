# PHP_Docker_Proj2
Estudo de Docker e PHP

# Projeto 2 - PHP e Docker

Projeto criado com o intuíto de estudar a estruturação, organização e conexão entre PHP e MySQL utilizando o Docker.
- Irei utilizar o docker-compose para subir o php-apache e o mysql
- Aproveito também neste projeto para estudar variáveis de ambiente utilizando o ficheiro .env
- Vou detalhar os passos da melhor forma possível para uma futura busca de informação.

##### Iniciado: 2024/06/03

##### Projeto (a escrever...)
![Projeto 2 PHP Finalizado](brevemente)


### Pré-requisitos para este projeto
- Visual Studio Code (codar)
- DBeaver - Vou utilizar este Sistema de Gestão de BD.
- Docker (Rodar contentores em cima)
- Apache (poderá ser substituido por outro, ex. NGINX)
- PHP
- MySQL

### Sistema de Pastas e Ficheiros:
- |_ php_docker_Proj2
    - |_ v1
        - |_ .env
        - |_ docker-compose.yml
        - |_ Dockerfile
        - |_ index.html
        - |_ teste.php
    - |_ v2
        - |_ ?


### Pontos Principais de Trabalho:

#### Primeira Fase de Estudos com o Docker
- **Resumo da primeira fase, v1:**
    - Estudei como subir os contentores com as imagens php-apache e mysql através do docker-compose e instalando manualmente diretamente do Docker as extensões do php para conexão com a BD.
    - Removi as imagens anteriores. Através do docker-compose chamei um ficheiro Dockerfile que carregou as imagens do apache-php e instalou a extensões que necessiva para conectar a BD, tudo ao fazer o up das imagens.
    - Resolvi o problema ao qual não estava a conseguir fazer persistir as informações da BD.

- **v1 Passos e processos que fiz:**
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
- Subir Container PHP e adicionar extensões através do Dockerfile
    - Será preciso remover nossos Containers e subi-lo novamente
        - docker-compose down
        - docker-compose up -d
    - Foi adicionado ao docker-file uma linha de código para remover o erro do servidor apache
- Aqui Finalizo a primeira deste estudo, que irei guardar todo o conteúdo na pasta v1(versão1)
    - Conteúdo da pasta v1:
        - docker-compose
        - Dockerfile
        - index.html (1º teste do servidor)
        - teste.php (1º teste com phpinfo e 2º teste para conexão com a BD)

#### Segunda Fase de Estudos com o Docker
- **Resumo da segunda fase, v2:**
    - a preencher

- **v2 Passos e processos que fiz:**
- brevemente