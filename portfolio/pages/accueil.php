<?php
    // Nombre d'années écoulées depuis 2019 (passion pour l'informatique)
    $anneesPassion = date('Y') - 2019;

    // Calcul de l'âge 
    $dateNaissance = new DateTime('2005-09-19');
    $aujourdhui = new DateTime();
    $age = $aujourdhui->diff($dateNaissance)->y;

    // Expérience en codage depuis septembre 2023
    $debutXp = new DateTime('2023-09-01');
    $diffXp = $aujourdhui->diff($debutXp);
    $anneesXp = $diffXp->y;

    if ($anneesXp <= 0) {
        $texteXp = "moins d’un an d’expérience en codage";
    } elseif ($anneesXp === 1) {
        $texteXp = "un peu plus d’un an d’expérience en codage";
    } else {
        $texteXp = $anneesXp . " ans d’expérience en codage";
    }
?>

<!-- =================================
          INTRO + PHOTO 
================================= -->
<div class="about-container">
    <div class="about-text">
        <h2>👋 Salut !</h2>
        <p>
            Je suis <strong>Noah MILLOT</strong>, un étudiant passionné d’informatique et de développement.
        </p>
        <p>
            Depuis <strong><?php echo $anneesPassion; ?> ans</strong>, je m’intéresse à l’informatique, aux jeux vidéo,
            aux serveurs et à tout ce qui touche au numérique.
        </p>
        <p>
            Aujourd’hui, je suis en <strong>BTS SIO</strong> option <strong>SLAM</strong> en alternance, où je découvre
            différents langages, frameworks et outils orientés développement web et backend.
        </p>
        <p>
            Même si je suis encore en apprentissage, je suis motivé pour progresser et développer des projets
            toujours plus complets.
        </p>
    </div>

    <div class="about-image">
        <img src="/portfolio/photoNoah.jpg" alt="Photo de Noah Millot">
        <div class="hover-text">Pourquoi ai-je l'air de bouder ? 🤔</div>
    </div>
</div>

<div class="home-about-container">

    <h2 class="home-about-title">Informations</h2>
    <p class="home-about-intro">
        Après un <strong>Bac Pro MELEC</strong>, j’ai choisi de me réorienter vers l’informatique et le développement,
        domaine qui me passionne depuis plusieurs années. Cette transition m’a amené à intégrer un
        <strong>BTS SIO option SLAM</strong>, où je me spécialise dans la conception et le développement
        d’applications web et métiers.
        <br><br>
        Ce bloc présente donc mon <strong>parcours scolaire</strong>, mon <strong>évolution vers le
            développement</strong>,
        mes <strong>objectifs</strong> ainsi que les <strong>compétences</strong> que je construis progressivement
        au fil du BTS et de mon alternance.
    </p>



    <!-- =======================
            PARCOURS
    ======================== -->
    <div class="home-about-section">
        <h3>📌 Mon parcours</h3>

        <h4 style="color:#ffb3b3;">Parcours scolaire</h4>
        <ul class="home-timeline">
            <li>
                <span class="date">2016 - 2020</span> Collège Liberté, Drancy
                <p>Obtention du Brevet.</p>
            </li>
            <li>
                <span class="date">2020 - 2023</span> Bac Pro MELEC – Lycée Paul Le Roland
                <p>Électricité, installations, maintenance.</p>
            </li>
            <li>
                <span class="date">2023</span> Certification PIX
                <p>Compétences numériques validées.</p>
            </li>
            <li>
                <span class="date">2024 - 2026</span> BTS SIO – SLAM, CFA INSTA
                <p>Développement, bases de données, sécurité, architecture logicielle.</p>
            </li>
        </ul>

        <h4 class="mt-4" style="color:#ffb3b3;">Expérience professionnelle</h4>
        <ul class="home-timeline">
            <li>
                <span class="date">2024 - 2026</span> MSA-TEAM France
                <p>Découverte de C#/.NET, Azure, Angular, Vue.js via projets internes et exercices encadrés.</p>
            </li>
        </ul>
    </div>

    <!-- =======================
            OBJECTIFS
    ======================== -->
    <div class="home-about-section">
        <h3>🎯 Mes objectifs</h3>

        <div class="home-objectif-grid">
            <div class="home-objectif">
                <h4>Renforcer mes compétences back-end</h4>
                <p>PHP, SQL, JavaScript, architecture MVC, sécurité.</p>
            </div>

            <div class="home-objectif">
                <h4>Améliorer mes compétences en bases de données</h4>
                <p>MySQL, SQL Server, MCD/MLD, optimisation.</p>
            </div>

            <div class="home-objectif">
                <h4>Comprendre l’hébergement & le cloud</h4>
                <p>Linux, Apache, Nginx, Azure.</p>
            </div>

            <div class="home-objectif">
                <h4>Créer des applications robustes</h4>
                <p>Gestion des rôles, sécurité, performances.</p>
            </div>
        </div>
    </div>

    <!-- =======================
       COMPÉTENCES
======================== -->
    <div class="home-about-section" id="competences">
        <h3 class="home-skills-title">🚀 Mes compétences</h3>

        <div class="skills-wrapper">
            <?php
        $categories = [
            'Langages' => [
                ['Python', 'fa-brands fa-python',
                    "Langage que j’ai commencé en autodidacte en 2023 pour l’algorithmie, puis approfondi en BTS et en entreprise pour écrire des scripts et petits outils."],
                ['Java', 'fa-brands fa-java',
                    "Appris en 2024 en BTS, principalement pour la POO. Il me permet aujourd’hui de développer des applications orientées objets, en lien avec mon intérêt pour Minecraft."],
                ['JavaScript', 'fa-brands fa-js',
                    "Langage que j’ai commencé en 2024 dans le cadre de mon alternance, pour le développement web frontend et l’utilisation de frameworks comme Vue.js."],
                ['C#', 'fa-solid fa-hashtag',
                    "L’un des langages que j’utilise le plus depuis 2022 : d’abord pour des algorithmes en console, puis en entreprise avec .NET, où j’ai vraiment appris la POO."],
                ['C', 'fa-solid fa-laptop-code',
                    "Langage appris en première année de BTS (2024) pour travailler l’algorithmique procédurale et comprendre les bases du fonctionnement bas niveau."],
                ['PHP', 'fa-brands fa-php',
                    "Mon langage principal côté web depuis 2024 : je l’utilise presque tous les jours pour mes projets personnels et scolaires, souvent en architecture MVC."],
                ['Rust', 'fa-brands fa-rust',
                    "Langage bas niveau moderne que j’ai commencé en fin d’année 2024-2025 pour découvrir une technologie plus récente, orientée performance et sécurité."],
                ['SQL', 'fa-solid fa-database',
                    "Langage que j’utilise quotidiennement depuis 2024 pour manipuler mes bases de données (requêtes, CRUD, jointures, vues…)."]
            ],

            'Frameworks & bibliothèques' => [
                ['Vue.js', 'fa-brands fa-vuejs',
                    "Framework JavaScript que j’ai appris dans le cadre de mon alternance pour créer des interfaces web réactives et dynamiques."],
                ['Bootstrap', 'fa-brands fa-bootstrap',
                    "Utilisé depuis mon arrivée en BTS pour mettre en forme rapidement mes sites et applis web. Couplé à ChatGPT, il m’aide à gagner du temps sur le design."],
                ['.NET', 'fa-solid fa-circle-nodes',
                    "Plateforme que j’utilise en entreprise avec C# pour développer des applications et services, notamment en environnement web et API."],
                ['Laravel', 'fa-brands fa-laravel',
                    "Framework PHP que j’ai commencé à explorer en 2025 pour structurer des applications plus professionnelles, avec routing, ORM et sécurité intégrés."]
            ],

            'Outils & plateformes' => [
                ['Git / GitHub', 'fa-brands fa-git-alt',
                    "Outils indispensables pour versionner mon code : je travaille avec des branches, des commits réguliers et des dépôts GitHub pour collaborer et garder un historique propre."],
                ['Docker', 'fa-brands fa-docker',
                    "Utilisé depuis environ 2023 pour isoler et gérer mes serveurs de jeux (Minecraft, ARK, etc.) et certains environnements de développement."],
                ['VS Code', 'fa-solid fa-code',
                    "Mon éditeur de code de base quand j’ai commencé : léger, extensible et pratique pour le web grâce à ses nombreuses extensions."],

                // IDE JetBrains
                ['PhpStorm', 'fa-solid fa-lightbulb',
                    "Découvert en 2025, PhpStorm et les autres IDE JetBrains ont été une vraie révolution : autocomplétion avancée, refactorings et intégration complète pour le développement PHP."],
                ['PyCharm', 'fa-solid fa-lightbulb',
                    "IDE JetBrains que j’utilise pour mes projets Python, avec gestion des environnements, tests et outils intégrés."],
                ['IntelliJ IDEA', 'fa-solid fa-lightbulb',
                    "IDE JetBrains utilisé pour mes projets Java, très complet pour la POO, les frameworks et la navigation dans des projets complexes."],
                ['Rider', 'fa-solid fa-lightbulb',
                    "IDE JetBrains dédié à C# et .NET que j’utilise pour mes projets en entreprise, avec un très bon support des solutions .NET."],
                ['RustRover', 'fa-solid fa-lightbulb',
                    "IDE JetBrains orienté Rust, que j’utilise pour expérimenter ce langage avec des outils de compilation et d’analyse intégrés."],

                ['Photoshop', 'fa-solid fa-image',
                    "Je l’utilise occasionnellement pour des retouches photo et la création de logos ou visuels pour mes projets."],
                ['Premiere Pro', 'fa-solid fa-video',
                    "Utilisé pour quelques montages vidéo personnels ; je maîtrise aussi d’autres logiciels de montage en parallèle."],
                ['Notion', 'fa-solid fa-note-sticky',
                    "Outil central dans mon organisation : je m’en sers pour gérer mes tâches, objectifs, idées de projets et suivis de travail."],
                ['Figma', 'fa-brands fa-figma',
                    "Utilisé pour réaliser des maquettes d’interfaces plus poussées ; pour les brouillons rapides, j’utilise souvent Excalidraw."],
                ['Google Docs / Sheets / Slides', 'fa-solid fa-file-lines',
                    "Suite que j’utilise presque tous les jours, que ce soit en entreprise, en cours ou en perso, pour rédiger, analyser des données ou préparer des présentations."]
            ],

            'Systèmes & markup' => [
                ['Linux (Ubuntu)', 'fa-brands fa-linux',
                    "Je l’utilise depuis 2022 pour héberger mes propres serveurs de jeux. Je suis passé de simples machines virtuelles à une machine dédiée qui fait tourner plusieurs serveurs en parallèle."],
                ['HTML', 'fa-brands fa-html5',
                    "Base de tous mes projets web : structure de pages, formulaires, sémantique et organisation propre du contenu."],
                ['CSS', 'fa-brands fa-css3-alt',
                    "Utilisé pour donner vie à mes sites : mise en page, responsive, animations, dégradés et cohérence graphique avec mes différentes chartes."]
            ]
        ];

        foreach ($categories as $category => $skills) {
            echo "<div>";
            echo "<h4 class='skill-category'>$category</h4>";
            echo "<div class='skills-container'>";

            foreach ($skills as $skill) {
                $name = htmlspecialchars($skill[0], ENT_QUOTES, 'UTF-8');
                $icon = htmlspecialchars($skill[1], ENT_QUOTES, 'UTF-8');
                $desc = htmlspecialchars($skill[2], ENT_QUOTES, 'UTF-8');

                echo '
                    <div class="skill-card"
                         data-skill="'.$name.'"
                         data-description="'.$desc.'">
                        <i class="skill-icon '.$icon.'"></i>
                        <div class="skill-name">'.$name.'</div>
                    </div>
                ';
            }

            echo "</div>";
            echo "</div>";
        }
        ?>
        </div>
    </div>


    <!-- =======================
               CV
    ======================== -->
    <div class="home-about-section" id="cv">
        <h3>📄 Mon CV</h3>

        <div class="home-cv-warning">
            ⚠️ Ce CV n’est pas encore totalement à jour. Une version actualisée arrive bientôt.
        </div>

        <iframe class="home-cv-frame" src="/portfolio/Millot_Noah_CV.pdf"></iframe>

        <a href="/portfolio/Millot_Noah_CV.pdf" class="home-cv-download" download>
            📥 Télécharger le CV
        </a>
    </div>
</div>

<!-- =======================
     COMPÉTENCE
======================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const descriptions = {
        Python: "Scripts, automatisation, bases solides.",
        Java: "POO, architecture orientée objet.",
        JavaScript: "DOM, interactivité, logique front.",
        "C#": "Découverte via .NET et projets internes.",
        C: "Bas niveau, mémoire, logique système.",
        PHP: "Backend, MVC, projets personnels et scolaires.",
        Rust: "Veille active, sécurité mémoire, performance.",
        SQL: "Requêtes, jointures, bases de données.",

        "Vue.js": "Front moderne, composants réactifs.",
        Bootstrap: "Responsive rapide, mise en page.",
        ".NET": "Écosystème Microsoft, API, architecture.",
        Laravel: "PHP moderne, MVC, routage, migrations.",

        "Git / GitHub": "Versionning, branches, collaboration.",
        Docker: "Conteneurisation des environnements.",
        "VS Code": "IDE principal.",
        PhpStorm: "IDE PHP professionnel.",
        Photoshop: "Retouches, visuels.",
        "Premiere Pro": "Montage vidéo.",
        Notion: "Organisation, gestion de projets.",
        Figma: "Maquettage UI/UX.",
        "Google Docs / Sheets / Slides": "Bureautique avancée.",

        "Linux (Ubuntu)": "Serveurs, hébergement, shell.",
        HTML: "Structure de pages web.",
        CSS: "Styles, animations, identité visuelle."
    };

    const modal = document.createElement('div');
    modal.className = "skill-modal";
    modal.innerHTML = `
        <div class="skill-modal-backdrop"></div>
        <div class="skill-modal-content">
            <button class="skill-modal-close">&times;</button>
            <h3 id="skill-modal-title"></h3>
            <p id="skill-modal-body"></p>
        </div>
    `;
    document.body.appendChild(modal);

    const modalTitle = document.getElementById("skill-modal-title");
    const modalBody = document.getElementById("skill-modal-body");

    document.querySelectorAll('.skill-card').forEach(card => {
        card.addEventListener('click', () => {
            const name = card.dataset.skill;
            modalTitle.textContent = name;
            modalBody.textContent = descriptions[name] || "Description en cours.";
            modal.classList.add("open");
        });
    });

    modal.addEventListener('click', e => {
        if (e.target.classList.contains('skill-modal-close') || e.target.classList.contains(
                'skill-modal-backdrop')) {
            modal.classList.remove("open");
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.skill-card');
    const titleEl = document.getElementById('skill-desc-title');
    const textEl = document.getElementById('skill-desc-text');

    if (!cards.length || !titleEl || !textEl) return;

    cards.forEach(card => {
        card.addEventListener('click', () => {
            const name = card.dataset.skill || 'Compétence';
            const desc = card.dataset.description || 'Description en cours.';

            titleEl.textContent = name;
            textEl.textContent = desc;
        });
    });
});
</script>