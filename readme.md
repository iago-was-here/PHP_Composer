# Composer

- Gerenciador de dependências.
- Instalação: https://getcomposer.org/download/
- Instalação deve ser feita no diretório do projeto para o qual será utilizado.

- Comandos:
    - php composer.phar init: para iniciar o guia de criação de um composer.json

    - php composer.phar self-update: atualiza a versão do composer utilizado

    - php composer.phar --version: exibe a versão utilizada

    - php composer.phar install: le e executa o arquivo composer.json.

    - php composer.phar require nome-da-biblioteca: adiciona uma dependencia ao composer.

    - php composer.phar remove nome-da-biblioteca: remove uma dependencia do composer.

    - php composer.phar dump-autoload: refaz a lista de autoload

## Exemplo:

```
use Teste\CursoSON\Hello;

//create a log chanel

$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));


//add record to the log

$log->warning((new Hello)->say('Iago'));
```