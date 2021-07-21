## Frontend

[Link do frontend ReactJS](https://github.com/soualexandre/frentend-botOrcamentos.git)

### About
Este projeto foi desenvolvido para o processo seletivo da codificar, com bastante esforço e boas práticas desenvolvi o máximo que consegui dado o tempo que tive para estar realizando as atividades, para este projeto usei a maioria dos recursos que estão sendo utilizados atualmente no ReactJS como propriedades, estados, hooks, context Api, consumo de api com axios, entre diversos outros, como boa prática foi criado um hook separado com a context Api e grande parte da lógica utilizada no frontend, cada parte que cabia foi dividido em componentes o que facilita muito o entendimento e a manutenção.

## Tech Stack

    - Laravel 8
    - php 7.4
    - Xampp
    - MySql
    
## Installation

Install my-project with composer

```bash
  cd backend-teste-bot
  composer Install
  cp .env-example .env
  configure .env com o banco mysql
  php artisa key:generate
  php artisan migrate
```

## Routes

INDEX METHOD GET: http://localhost:8000/api/budget

CREATE METHOD POST: http://localhost:8000/api/budget/create

UPDATE METHOD POST: http://localhost:8000/api/budget/update/id

DELETE METHOD POST: http://localhost:8000/api/budget/delete/id



  
