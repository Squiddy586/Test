<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guida Git, GitHub e VS Code</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background: #24292e;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h2 {
            color: #24292e;
        }

        code {
            background: #eee;
            padding: 3px 6px;
            border-radius: 5px;
            display: inline-block;
        }

        pre {
            background: #1e1e1e;
            color: #00ff88;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
        }

        ul {
            line-height: 1.8;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #24292e;
            color: white;
            margin-top: 40px;
        }

        .btn {
            display: inline-block;
            background: #0078d7;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
            margin-top: 10px;
        }

        .btn:hover {
            background: #005fa3;
        }
    </style>
</head>
<body>

<header>
    <h1>Guida Base a Git, GitHub e VS Code</h1>
    <p>Impara a gestire i tuoi progetti e pubblicarli online</p>
</header>

<div class="container">

    <div class="card">
        <h2>Cos'è Git?</h2>
        <p>
            Git è un sistema di controllo versione che permette di salvare
            modifiche al codice e lavorare su progetti in modo organizzato.
        </p>

        <h3>Comandi principali Git</h3>

        <pre>
git init
        </pre>
        <p>Inizializza un repository Git.</p>

        <pre>
git status
        </pre>
        <p>Mostra lo stato dei file.</p>

        <pre>
git add .
        </pre>
        <p>Aggiunge tutti i file al commit.</p>

        <pre>
git commit -m "Primo commit"
        </pre>
        <p>Salva le modifiche.</p>
    </div>

    <div class="card">
        <h2>Cos'è GitHub?</h2>
        <p>
            GitHub è una piattaforma online dove puoi caricare i tuoi repository Git,
            collaborare con altri sviluppatori e salvare backup dei progetti.
        </p>

        <h3>Collegare GitHub al progetto</h3>

        <pre>
git remote add origin https://github.com/USERNAME/NOME-REPO.git
git branch -M main
git push -u origin main
        </pre>

        <p>
            Dopo questi comandi il progetto verrà caricato su GitHub.
        </p>

        <a class="btn" href="https://github.com" target="_blank">
            Vai su GitHub
        </a>
    </div>

    <div class="card">
        <h2>Usare Git dentro Visual Studio Code</h2>

        <ul>
            <li>Apri il progetto in VS Code</li>
            <li>Installa Git nel computer</li>
            <li>Apri il terminale integrato</li>
            <li>Usa i comandi Git direttamente nel terminale</li>
            <li>Oppure usa il pannello "Source Control"</li>
        </ul>

        <h3>Aprire il terminale</h3>

        <pre>
Terminale -> Nuovo Terminale
        </pre>

        <h3>Esempio workflow completo</h3>

        <pre>
git add .
git commit -m "Aggiornamento sito"
git push
        </pre>

        <p>
            VS Code mostrerà anche le modifiche ai file con colori e differenze.
        </p>
    </div>

    <div class="card">
        <h2>Consigli Utili</h2>

        <ul>
            <li>Fai commit spesso</li>
            <li>Usa messaggi chiari nei commit</li>
            <li>Non caricare password o file sensibili</li>
            <li>Usa repository privati per progetti personali</li>
        </ul>
    </div>

</div>

<footer>
    <p>Guida creata con PHP + HTML/CSS</p>
</footer>

</body>
</html>