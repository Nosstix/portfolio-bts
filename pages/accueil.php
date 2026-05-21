<?php
    // Petit calcul simple pour garder le compteur dynamique dans la présentation.
    $anneesPassion = date('Y') - 2019;

    // Je garde aussi l'âge et l'ancienneté en code si j'en ai besoin plus tard sur la page.
    $dateNaissance = new DateTime('2005-09-19');
    $aujourdhui = new DateTime();
    $age = $aujourdhui->diff($dateNaissance)->y;

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

    // À partir d’août 2026, la phrase change automatiquement pour le bachelor.
    $dateBachelor = new DateTime('2026-08-01');
    $estEnBachelor = $aujourdhui >= $dateBachelor;

    if ($estEnBachelor) {
        $formationActuelle = 'je suis en <strong>bachelor BAC +3 Concepteur Développeur d’Applications</strong>';
        $texteAlternance = 'Je poursuis mon alternance chez <strong>MSA-TEAM France</strong>, dans la même école, afin de continuer à monter en compétences sur des projets concrets.';
    } else {
        $formationActuelle = 'je suis en <a href="/portfolio-bts/index.php?page=bts" class="bts-inline-link"><strong>BTS SIO option SLAM 2e année</strong></a> et l’année prochaine je serai en <strong>bachelor BAC +3 Concepteur Développeur d’Applications</strong>';
        $texteAlternance = 'Je suis en alternance chez <strong>MSA-TEAM France</strong> et je continue l’année prochaine avec la même entreprise et la même école.';
    }
?>

<!-- =================================
          INTRO + PHOTO 
================================= -->
<div class="about-container" id="top">
    <div class="about-text">
        <h2>👋 Salut</h2>
        <p>
            Je m’appelle <strong>Noah Millot</strong> et <?php echo $formationActuelle; ?>.
            Je me forme au développement d’applications web et de solutions informatiques.
        </p>
        <p>
            <?php echo $texteAlternance; ?>
        </p>
        <p>
            Depuis <strong><?php echo $anneesPassion; ?> ans</strong>, je m’intéresse à l’informatique,
            autant côté software que hardware. En avançant là-dedans, j’ai pu toucher à plusieurs sujets liés
            à l’une de mes passions, le jeu vidéo, et c’est aussi comme ça que j’ai découvert tout ce qui tourne
            autour de la création et de la gestion de serveurs.
        </p>
        <p>
            Entre l’école, l’alternance et mes projets perso, j’apprends à construire des applications, organiser
            une base de données, structurer du code et utiliser les bons outils selon le besoin.
        </p>
        <p>
            Mon objectif est simple : pouvoir créer des solutions informatiques à des problèmes qu’on rencontre
            dans la vie de tous les jours.
        </p>
    </div>

    <div class="about-image">
        <img src="/portfolio-bts/photoNoah.png" alt="Photo de Noah Millot">
    </div>
</div>

<!-- Menu rapide (accueil) -->
<nav class="home-side-nav" aria-label="Navigation rapide">
    <a href="#top" class="side-link"><i class="fas fa-arrow-up"></i><span>Haut</span></a>
    <a href="#parcours" class="side-link"><i class="fas fa-route"></i><span>Parcours</span></a>
    <a href="#objectifs" class="side-link"><i class="fas fa-bullseye"></i><span>Objectifs</span></a>
    <a href="#competences" class="side-link"><i class="fas fa-code"></i><span>Compétences</span></a>
    <a href="#cv" class="side-link"><i class="fas fa-file-pdf"></i><span>CV</span></a>
</nav>

<div class="home-about-container">

    <h2 class="home-about-title">Infos rapides</h2>
<p class="home-about-intro">
    Après un <strong>Bac Pro MELEC</strong>, je me suis réorienté vers le développement, un domaine qui m’attirait déjà depuis un bon moment. Aujourd’hui, <?php echo $formationActuelle; ?>, en alternance. <?php echo $texteAlternance; ?> Sur cette page, je présente rapidement mon parcours, ce que je vise et les compétences que je continue de renforcer entre les cours, l’entreprise et mes projets perso.
</p>



    <!-- =======================
            PARCOURS
    ======================== -->
    <div class="home-about-section" id="parcours">
        <h3><i class="fas fa-map-pin"></i> Mon parcours</h3>

        <h4 style="color:#ffb3b3;">Parcours scolaire</h4>
        <ul class="home-timeline">
            <li>
                <span class="date">2016 - 2020</span> Collège Liberté, Drancy
                <p>Obtention du Brevet.</p>
            </li>
            <li>
                <span class="date">2020 - 2023</span> Bac Pro MELEC – Lycée Paul Le Rolland
                <p>Électricité, installations, maintenance et découverte du terrain.</p>
            </li>
            <li>
                <span class="date">2023</span> Certification PIX
                <p>Compétences numériques validées.</p>
            </li>
            <li>
                <span class="date">2024 - 2026</span> BTS SIO – SLAM, CFA INSTA
                <p>Développement, bases de données, sécurité, architecture logicielle.</p>
            </li>
            <li>
                <span class="date">2026 - 2027</span> Bachelor BAC +3 – Concepteur Développeur d’Applications, CFA INSTA
                <p>Poursuite prévue en alternance pour approfondir le développement d’applications, l’architecture logicielle et la gestion de projet.</p>
            </li>
        </ul>

        <h4 class="mt-4" style="color:#ffb3b3;">Expérience professionnelle</h4>
        <ul class="home-timeline">
            <li>
                <span class="date">2022</span> CDD électricien (6 semaines)
                <p>CDD réalisé pendant le lycée avec des missions d’installation, de maintenance et le respect des règles de sécurité.</p>
                <p>Entre 2020 et 2023, j’ai aussi effectué <strong>22 semaines de stage en électricité</strong>, dont <strong>4 semaines dans la maintenance de matériel informatique</strong>.</p>
            </li>
            <li>
                <span class="date">2024 - 2027</span> MSA-TEAM France
                <p>Alternance en développement full stack, commencée pendant le BTS et poursuivie pendant le bachelor avec la même entreprise.</p>
                <p>Découverte de C#/.NET, Azure, Angular, Vue.js via projets internes et exercices encadrés.</p>
            </li>
        </ul>
    </div>

    <!-- =======================
            OBJECTIFS
    ======================== -->
    <div class="home-about-section" id="objectifs">
        <h3><i class="fas fa-bullseye"></i> Mes objectifs</h3>

        <div class="home-objectif-grid">
            <div class="home-objectif">
                <h4>Renforcer mes compétences back-end</h4>
                <p>PHP, SQL, C#, .NET, architecture MVC, sécurité.</p>
            </div>

            <div class="home-objectif">
                <h4>Améliorer mes compétences en bases de données</h4>
                <p>MySQL, SQL Server, MCD/MLD, optimisation.</p>
            </div>

            <div class="home-objectif">
                <h4>Comprendre l’hébergement & le cloud</h4>
                <p>Linux, Apache, Nginx, Azure.</p>
            </div>


        </div>
    </div>

    <!-- =======================
       COMPÉTENCES
======================== -->
    <div class="home-about-section" id="competences">
        <h3 class="home-skills-title"><i class="fas fa-layer-group"></i> Mes compétences</h3>

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
                ['SQL', 'fa-solid fa-database',
                    "Langage que j’utilise quotidiennement depuis 2024 pour manipuler mes bases de données (requêtes, CRUD, jointures, vues…)."]
            ],

            'Frameworks & bibliothèques' => [
                ['Vue.js', 'fa-brands fa-vuejs',
                    "Framework JavaScript que j’ai appris dans le cadre de mon alternance pour créer des interfaces web réactives et dynamiques."],
                ['Bootstrap', 'fa-brands fa-bootstrap',
                    "Utilisé depuis mon arrivée en BTS pour mettre en forme rapidement mes sites et applis web. Couplé à ChatGPT, il m’aide à gagner du temps sur le design."],
                ['.NET', 'fa-solid fa-circle-nodes',
                    "Plateforme que j’utilise en entreprise avec C# pour développer des applications et services, notamment en environnement web et API."]
            ],

            'Outils & plateformes' => [
                ['Git / GitHub', 'fa-brands fa-git-alt',
                    "Outils indispensables pour versionner mon code : je travaille avec des branches, des commits réguliers et des dépôts GitHub pour collaborer et garder un historique propre."],
                ['Docker', 'fa-brands fa-docker',
                    "Utilisé depuis environ 2023 pour isoler et gérer mes serveurs de jeux (Minecraft, ARK, etc.) et certains environnements de développement."],
                ['VS Code', 'fa-solid fa-code',
                    "Mon éditeur de code de base quand j’ai commencé : léger, extensible et pratique pour le web grâce à ses nombreuses extensions."],
                ['Solutions JetBrains', 'fa-solid fa-lightbulb',
                    "Je regroupe ici les IDE JetBrains que j’utilise selon les projets : IntelliJ IDEA pour Java, PhpStorm pour PHP, PyCharm pour Python et Rider pour C#/.NET."],
                ['VMware', 'fa-solid fa-server',
                    "Solution de virtualisation que j’utilise pour créer des machines virtuelles, tester des environnements et travailler sur des installations comme Debian ou GLPI sans casser ma machine principale. Parce que casser une VM, c’est quand même plus élégant."],
                ['Hyper-V', 'fa-brands fa-windows',
                    "Outil de virtualisation intégré à Windows que j’utilise pour lancer et tester des environnements virtuels directement depuis l’écosystème Microsoft."],
                ['Android Studio', 'fa-brands fa-android',
                    "IDE que j’utilise en cours pour commencer le développement Android et découvrir la logique d’une application mobile."],
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
                ['Linux (Ubuntu / Debian)', 'fa-brands fa-linux',
                    "Je l’utilise depuis 2022 pour héberger mes propres serveurs de jeux et tester des environnements Linux, notamment Ubuntu et Debian."],
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
        <h3><i class="fas fa-file-pdf"></i> Mon CV</h3>
        <iframe class="home-cv-frame" src="/portfolio-bts/Millot_Noah_CV.pdf"></iframe>

        <a href="/portfolio-bts/Millot_Noah_CV.pdf" class="home-cv-download" download>
            <i class="fas fa-download"></i> Télécharger le CV
        </a>
    </div>
</div>


<!-- =======================
     COMPÉTENCES - données des modales
     L'idée ici : quand on clique sur une compétence,
     on affiche un texte perso + un résumé plus général.
======================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const skillDetails = {
        "Python": {
            why: "J’ai commencé à utiliser Python en autodidacte, puis je l’ai repris en cours pour faire des scripts simples, de l’automatisation et quelques tests perso.",
            about: "Python est un langage créé en 1991 par Guido van Rossum. Il est connu pour être lisible et polyvalent. On le retrouve dans les scripts, l’automatisation, l’IA, la data, la cybersécurité et le développement web.",
            doc: "https://docs.python.org/fr/3/"
        },
        "Java": {
            why: "J’ai commencé à utiliser Java en première année de BTS SIO pour découvrir la programmation orientée objet, puis j’ai développé mes premières applications avec interface. Je l’utilise aussi en perso pour apprendre des choses autour du modding Minecraft.",
            about: "Java est un langage lancé en 1995 par Sun Microsystems. Il a été pensé pour être portable grâce à la JVM. Il sert au développement d’applications, de back-end, d’outils d’entreprise et a longtemps été central dans l’écosystème Android.",
            doc: "https://docs.oracle.com/en/java/"
        },
        "JavaScript": {
            why: "J’ai commencé JavaScript en entreprise pour pouvoir utiliser des frameworks comme Vue.js, puis plus tard Angular à la demande de mon employeur. Ensuite, je l’ai aussi utilisé en perso sur de petits projets comme un morpion et d’autres mini-apps web.",
            about: "JavaScript a été créé en 1995 par Brendan Eich. C’est le langage principal du web côté navigateur. Il sert à rendre les pages interactives, mais aussi à faire du back-end avec Node.js et à alimenter beaucoup de frameworks modernes.",
            doc: "https://developer.mozilla.org/fr/docs/Web/JavaScript"
        },
        "C#": {
            why: "Aujourd’hui je l’utilise un peu moins, mais pendant mon BTS j’en ai beaucoup fait grâce à l’entreprise. Ça m’a permis de découvrir l’écosystème Microsoft, la POO, le .NET et quelques programmes console.",
            about: "C# a été créé par Microsoft au début des années 2000. Il est surtout utilisé avec .NET pour faire des applications desktop, du web, des API, des outils d’entreprise et aussi des jeux avec Unity.",
            doc: "https://learn.microsoft.com/fr-fr/dotnet/csharp/"
        },
        "C": {
            why: "Je l’ai surtout utilisé en première année de BTS pour comprendre les bases du code, la logique et une approche plus proche de la machine. Je l’utilise beaucoup moins aujourd’hui, mais ça m’a aidé à mieux comprendre le reste.",
            about: "Le langage C a été créé au début des années 1970 par Dennis Ritchie. Il sert encore dans les systèmes, l’embarqué, les logiciels performants et tout ce qui demande un contrôle fin de la mémoire.",
            doc: "https://en.cppreference.com/w/c"
        },
        "PHP": {
            why: "C’est de très loin le langage que j’utilise le plus. J’ai commencé à l’utiliser en BTS parce qu’une grosse partie des projets était en PHP, puis j’ai continué dessus en perso pour construire des sites et des applis web, souvent en MVC.",
            about: "PHP signifie à l’origine “Personal Home Page”, puis “PHP: Hypertext Preprocessor”. Créé en 1995 par Rasmus Lerdorf, il sert à générer des pages web dynamiques et reste très présent dans le développement back-end.",
            doc: "https://www.php.net/manual/fr/"
        },
        "SQL": {
            why: "Je l’utilise vraiment tout le temps, parce que toutes mes bases de données passent par là. Dès qu’il faut manipuler des données, faire du CRUD, des jointures ou structurer une BDD, j’en fais.",
            about: "SQL signifie “Structured Query Language”. Il s’est imposé à la fin des années 1970 comme le langage standard des bases de données relationnelles. Il sert à créer, lire, modifier et organiser les données.",
            doc: "https://dev.mysql.com/doc/"
        },
        "Vue.js": {
            why: "C’est un framework que j’utilise en entreprise pour construire des interfaces plus propres, plus dynamiques et plus agréables à maintenir.",
            about: "Vue.js est un framework JavaScript créé en 2014 par Evan You. Il sert à construire des interfaces web réactives à base de composants, surtout pour des applications modernes côté front.",
            doc: "https://vuejs.org/guide/introduction.html"
        },
        "Bootstrap": {
            why: "Je l’ai découvert à l’école et aujourd’hui je l’utilise souvent en perso pour décorer mes applications web et gagner du temps sur la mise en page. Quand c’est bien utilisé, le rendu peut être vraiment propre.",
            about: "Bootstrap est un framework front lancé en 2011 par Twitter. Il fournit une base CSS et JavaScript avec grille, composants et responsive pour construire des interfaces rapidement.",
            doc: "https://getbootstrap.com/docs/"
        },
        ".NET": {
            why: "Je l’utilise surtout en entreprise, souvent couplé à du front comme Vue.js, pour développer des solutions dans l’écosystème Microsoft.",
            about: ".NET est une plateforme de développement créée par Microsoft. Elle permet de faire des applications web, des API, du desktop, des services et d’autres solutions logicielles avec plusieurs langages, surtout C#.",
            doc: "https://learn.microsoft.com/fr-fr/dotnet/"
        },
        "Git / GitHub": {
            why: "Je les utilise tout le temps pour collaborer, versionner mes projets, garder un historique propre et revenir en arrière si besoin. Je les ai appris en solo, puis j’ai renforcé ça à l’école.",
            about: "Git est un système de gestion de versions créé en 2005 par Linus Torvalds. GitHub est une plateforme qui permet d’héberger des dépôts Git, de collaborer, de suivre les modifications et de partager du code.",
            doc: "https://git-scm.com/doc"
        },
        "Docker": {
            why: "Je l’utilise surtout en solo, principalement pour héberger ou organiser des serveurs de jeux et isoler certains environnements.",
            about: "Docker est une solution de conteneurisation apparue en 2013. Elle permet d’exécuter des applications dans des conteneurs isolés et reproductibles, ce qui simplifie les déploiements et l’organisation technique.",
            doc: "https://docs.docker.com/"
        },
        "VS Code": {
            why: "VS Code reste mon outil principal pour coder, parce qu’il est très polyvalent, rapide à lancer et pratique pour presque tout.",
            about: "Visual Studio Code est un éditeur de code publié par Microsoft en 2015. Il est très utilisé grâce à ses extensions, son intégration Git et sa capacité à s’adapter à beaucoup de langages.",
            doc: "https://code.visualstudio.com/docs"
        },
        "Solutions JetBrains": {
            why: "Je regroupe ici les environnements JetBrains que j’utilise selon les besoins : IntelliJ IDEA pour Java, PhpStorm pour PHP, PyCharm pour Python et Rider pour C#/.NET. Ça évite d’avoir une collection de cartes qui donnent l’impression d’un inventaire de magasin d’IDE.",
            about: "Les IDE JetBrains sont des environnements de développement complets. Ils apportent autocomplétion avancée, refactorisation, outils Git, débogage et navigation efficace dans les projets complexes.",
            doc: "https://www.jetbrains.com/help/"
        },
        "VMware": {
            why: "Je l’utilise pour créer des machines virtuelles et tester des environnements isolés, notamment pour des installations système ou serveur comme Debian et GLPI.",
            about: "VMware propose des solutions de virtualisation permettant d’exécuter plusieurs systèmes d’exploitation sur une même machine physique, sans transformer le PC principal en champ de ruines.",
            doc: "https://docs.vmware.com/"
        },
        "Hyper-V": {
            why: "Je l’utilise comme solution de virtualisation intégrée à Windows, pratique pour tester rapidement des environnements dans l’écosystème Microsoft.",
            about: "Hyper-V est l’hyperviseur de Microsoft. Il permet de créer et gérer des machines virtuelles directement depuis Windows ou Windows Server.",
            doc: "https://learn.microsoft.com/fr-fr/windows-server/virtualization/hyper-v/hyper-v-overview"
        },
        "Android Studio": {
            why: "Je l’utilise en cours pour commencer le développement Android et découvrir comment se construit une application mobile avec l’outil principal de l’écosystème Android.",
            about: "Android Studio est l’IDE officiel du développement Android, maintenu par Google et basé sur IntelliJ IDEA. Il sert à créer, tester, déboguer et publier des applications Android.",
            doc: "https://developer.android.com/studio/intro"
        },
        "Photoshop": {
            why: "Je l’ai déjà utilisé plusieurs fois en solo pour différents projets quand j’avais besoin de retoucher des images, préparer un visuel ou bricoler un logo.",
            about: "Adobe Photoshop est un logiciel de retouche et de création graphique. Il sert à modifier des images, créer des visuels et préparer des éléments graphiques.",
            doc: "https://helpx.adobe.com/fr/photoshop/user-guide.html"
        },
        "Premiere Pro": {
            why: "J’ai quelques notions de montage vidéo grâce à des projets perso et à différents essais de montage.",
            about: "Adobe Premiere Pro est un logiciel de montage vidéo utilisé pour assembler, couper, améliorer et exporter des vidéos.",
            doc: "https://helpx.adobe.com/fr/premiere-pro/user-guide.html"
        },
        "Notion": {
            why: "Je l’utilise pour gérer certains projets et prendre des notes quand j’ai besoin de tout centraliser au même endroit.",
            about: "Notion est un outil d’organisation qui mélange notes, tableaux, bases de données et wiki. Il sert à structurer des informations et suivre des projets.",
            doc: "https://www.notion.com/fr/help"
        },
        "Figma": {
            why: "J’ai appris à l’utiliser en cours pour faire des maquettes de projet, même si au quotidien je préfère souvent Excalidraw pour aller vite.",
            about: "Figma est un outil de design d’interface collaboratif. Il sert à réaliser des maquettes, des composants UI et des prototypes d’applications ou de sites web.",
            doc: "https://help.figma.com/"
        },
        "Google Docs / Sheets / Slides": {
            why: "J’utilise les solutions Google tous les jours, que ce soit pour écrire, faire un tableur, préparer une diapo ou organiser mes journées avec Agenda entre l’école, l’entreprise, mes projets, mes serveurs, le sport et le sommeil.",
            about: "Google Docs, Sheets, Slides et Agenda font partie de Google Workspace. Ce sont des outils en ligne de bureautique et d’organisation très pratiques pour travailler, partager et collaborer facilement.",
            doc: "https://support.google.com/docs/"
        },
        "Linux (Ubuntu / Debian)": {
            why: "J’ai commencé à apprendre Linux au lycée, surtout sur Ubuntu, puis j’ai continué en BTS avec Debian. Je l’utilise aussi régulièrement pour mes serveurs.",
            about: "Linux est un système d’exploitation open source très utilisé sur les serveurs. Ubuntu et Debian sont deux distributions connues pour leur stabilité, leur documentation et leur usage fréquent en administration système.",
            doc: "https://help.ubuntu.com/"
        },
        "HTML": {
            why: "Je l’utilise partout, en solo, en entreprise et à l’école. C’est la base de toutes mes pages web.",
            about: "HTML signifie “HyperText Markup Language”. Il sert à structurer une page web avec des titres, paragraphes, images, liens, formulaires et autres éléments.",
            doc: "https://developer.mozilla.org/fr/docs/Web/HTML"
        },
        "CSS": {
            why: "Je l’utilise partout aussi, en entreprise, à l’école et en perso, pour mettre en forme mes solutions et leur donner un vrai style.",
            about: "CSS signifie “Cascading Style Sheets”. Il sert à gérer l’apparence d’un site web: couleurs, polices, mise en page, responsive et animations.",
            doc: "https://developer.mozilla.org/fr/docs/Web/CSS"
        }
    };

    const modal = document.createElement('div');
    modal.className = 'skill-modal';
    modal.innerHTML = `
        <div class="skill-modal-backdrop"></div>
        <div class="skill-modal-content">
            <button class="skill-modal-close">&times;</button>
            <h3 id="skill-modal-title"></h3>
            <div class="skill-modal-section">
                <h4>Pourquoi je l’utilise / comment je l’ai appris</h4>
                <p id="skill-modal-why"></p>
            </div>
            <div class="skill-modal-section">
                <h4>Résumé rapide</h4>
                <p id="skill-modal-about"></p>
            </div>
            <a id="skill-modal-doc" class="skill-modal-doc" href="#" target="_blank" rel="noopener">
                <i class="fas fa-up-right-from-square"></i> Documentation officielle
            </a>
        </div>
    `;
    document.body.appendChild(modal);

    const modalTitle = document.getElementById('skill-modal-title');
    const modalWhy = document.getElementById('skill-modal-why');
    const modalAbout = document.getElementById('skill-modal-about');
    const modalDoc = document.getElementById('skill-modal-doc');

    document.querySelectorAll('.skill-card').forEach(card => {
        card.addEventListener('click', () => {
            const name = card.dataset.skill;
            const info = skillDetails[name] || {};
            modalTitle.textContent = name;
            modalWhy.textContent = info.why || 'Détails en cours d’ajout.';
            modalAbout.textContent = info.about || '';

            if (info.doc && info.doc.trim() !== '') {
                modalDoc.href = info.doc;
                modalDoc.style.display = 'inline-flex';
            } else {
                modalDoc.removeAttribute('href');
                modalDoc.style.display = 'none';
            }

            modal.classList.add('open');
        });
    });

    modal.addEventListener('click', e => {
        if (e.target.classList.contains('skill-modal-close') || e.target.classList.contains('skill-modal-backdrop')) {
            modal.classList.remove('open');
        }
    });
});
</script>
