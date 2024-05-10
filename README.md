Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
1 - Create un nuovo progetto Laravel 9 (o clonate il template fatto in classe) OK
2 - tramite **phpMyAdmin** create un nuovo database (scegliete liberamente il nome del DB) OK
3 - Importate nel vostro database la tabella **movies** in allegato OK
4 - inserite le vostre credenziali per il database nel file **.env** (se il progetto è stato clonato duplicate il file .env.exemple, lo rinominate in .env, generate la chiave e impostate le credenziali) OK
5 - Create un model Movie OK
**php artisan make:model Movie** OK
6 - Create un controller che gestirà la rotta **/**
**php artisan make:controller Guest/PageController** OK
7 - All’interno della funzione **index()** del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card. OK
**BONUS:**
8 - Create altre rotte filtrando i dati come preferite
9 - Create una pagina di dettaglio. La pagina di dettaglio riceve dinamicamente l’ID del movie, esegue la query in base all’ID ricevuto e stampa il singolo elemento. Il link alla pagina di dettaglio sarà presente nell’elenco dei film
