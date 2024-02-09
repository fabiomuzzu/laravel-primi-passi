Esercizio di oggi:
nome repo: laravel-primi-passi

Ciao ragazzi, oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel! Per prima cosa, creiamo un nuovo progetto Laravel 9, utilizzando questo comando: composer create-project laravel/laravel:^9.2 laravel-primi-passi

Al termine dell'installazione, entriamo nella cartella del progetto cd laravel-primi-passi e avviamo l'artisan serve con uno di questi due comandi:

php artisan serve oppure php -S localhost:8000 -t public

A questo punto, iniziamo a prendere confidenza con le rotte e le views:

cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

Bonus: Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route().

In allegato trovate la steps list con i primi comandi e passaggi per avviare il vostro progetto laravel. Il consiglio è sempre il solito: prendetela come esempio ma createne una vostra.

Consigli: lavorate con la documentazione aperta

Buon lavoro!