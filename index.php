<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Mio Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript (necessario per il funzionamento dell'offcanvas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Reset e stili base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Baskerville Old Face";
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }

        /* Header */
        header {
            background-color: #fff;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Hero section */
        .hero {
            padding: 4rem 2rem;
            text-align: center;
            background-color: #fff;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Projects grid */
        .projects {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .project-info {
            padding: 1.5rem;

            .btn {
                margin-bottom: 1em;

                a {
                    text-decoration: none;
                    color: #fff;
                }
            }
        }

        .project-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .project-description {
            color: #666;
            margin-bottom: 1rem;
        }

        .project-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .tag {
            background: #f0f0f0;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.875rem;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #fff;
            padding: 2rem;
            text-align: center;
            margin-top: 4rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">Il Mio Portfolio</div>
        </nav>
    </header>

    <section class="hero d-flex">
        <div class="wrap col-md-4">
            <img src="./img/avatar1.png" alt="">
        </div>
        <div class="wrap col-md-8">
            <h1>Ciao, sono Chiara</h1>
            <p>Junior Web Developer che nel tempo libero si diverte a creare siti web</p>
        </div>


    </section>

    <section class="projects" id="projects">
        <div class="projects-grid">
            <!-- Esempio di card progetto -->
            <article class="project-card">
                <img src="./img/homeG.png" alt="Progetto 1" class="project-image">
                <div class="project-info">
                    <h3 class="project-title">Guadagno Fiori</h3>
                    <p class="project-description">Sito per far conoscere l'azienda floricola e i diversi fiori che vendono</p>
                    <p class="project-description">Diverse funzionalità implementate tra cui visualizzare il sito in diverse lingue e poter entrare in una cartella apposita per avere maggiori informazioni.</p>
                    <button type="button" class="btn btn-dark">
                        <a href="https://www.guadagnofiori.it" target="_blank">Clicca qui per vedere il sito online</a>
                    </button>

                    <div class="project-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">PHP</span>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <img src="./img/bdc.png" alt="Progetto 1" class="project-image">
                <div class="project-info">
                    <h3 class="project-title">App Pagamenti + Società Ferrovie Turistiche</h3>
                    <p class="project-description">Per un esame universitario ho svolto queste due prove in itinere.</p>
                    <p class="project-description">App Pagamenti dove si possono mandare soldi ad un esercente e visualizzare transazioni in entrata e uscita.</p>
                    <p class="project-description">SFT tre diversi profili: amministratore, utente ed esercizio. Si possono visualizzare orari dei treni, le fermate alle stazioni, acquistare biglietti e molto altro.</p>
                    <button type="button" class="btn btn-dark">
                        <a href="https://webstudenti.unimarconi.it/c.meringola/bdc/" target="_blank">Clicca qui per vedere il sito online</a>
                    </button>

                    <div class="project-tags">
                        <span class="tag">PhpMyAdmin</span>
                        <span class="tag">PHP</span>
                    </div>
                </div>
            </article>
    </section>

    <footer id="contact">
        <p>Contattami: meringolachiara@gmail.com</p>
    </footer>
</body>

</html>