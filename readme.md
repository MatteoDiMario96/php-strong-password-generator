//*****ESERCIZIO*****/

Consegna
Dato un array di utenti, ovvero array associativi con username e password in chiaro
Creiamo una sicurissima e semplicissima pagina di login in cui l'utente puo' autenticarsi via form con:
- un username
- una password
La pagina di login (login.php) ci redireziona, una volta effettuato e SOLO se avvenuto correttamente,
alla pagina principale della nostra applicazione (index.php), in cui visualizziamo via sessione il nome dell'utente loggato.
Creiamo poi una pagina di logout (logout.php) che rimuova le informazioni della sessione dalla sessione attuale e redirezioni
all pagina di login (login.php).
Bonus 1:
Impedire la visualizzazione dei contenuti di index.php (anche semplici di prova) fino a quanto l'utente non sia loggato.
Bonus 2:
Prevedere l'uso di qualsiasi controllo attraverso una funzione inserita in un file separato in 'src/functions.php/'
Bonus 3:
Rendere le password Crittografate. 


//***PENSIERO**/
- 1 Quindi mi devo creare un database.php contenente un array di utenti che avra all'interno un userName e una passWord.
- 2 Creiamo il nostro form per far fare il login all'utente. Iniziamo la sessiione. In login.php
    - 3a Se corretto vai in index.php e visualizziamo il nome loggato. 
    - 3b Se scorretto mostra che i campi sono errati e rimanda al login.php
- 4 Creare una pagina logout.php
    - Inizializzare session_start();
    - Inizializzare session_unset();
    - Re indirizzare a login.php --- header("Location: .../login.php")
- 5 Creare un hiperlinks tag a cui associare il logout.php 


