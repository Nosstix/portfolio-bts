<h2 class="projet-blanc"><i class="fas fa-code"></i> 🚀 Mes Projets</h2>

<div class="container projects-container">
    <?php
    // ===============================
    // LISTE DE TOUS MES PROJETS
    // ===============================
    $projects = [
        // ===============================
        // DÉVELOPPEMENT WEB & SITES
        // ===============================
        [
            'id' => 'lsmotors',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-car',
            'title' => '🚗 LS Motors (PPE – GTA RP)',
            'short' => "Site de concession automobile pour un serveur GTA RP : catalogue véhicules, gestion des ventes, espace employé et admin.",
            'long' => "LS Motors est l’un de mes pour le BTS : une application web complète pour une concession automobile sur un serveur GTA RP.\n\nGTA (Grand Theft Auto) est un jeu vidéo en monde ouvert. FiveM est une plateforme qui permet de créer des serveurs personnalisés. Le RP (roleplay) consiste à jouer un rôle dans un univers cohérent.\n\nLe site permet :\n- côté client : de consulter les véhicules d’une concession, classés par catégories, avec leurs prix.\n- côté employé : de gérer les ventes, suivre son chiffre d’affaires, enregistrer les remises et les prix HT/TTC.\n- côté administrateur : de créer/modifier/supprimer des véhicules, gérer les employés, visualiser l’historique des ventes.\n\nL’objectif est d’éviter les erreurs de prix, d’aider les vendeurs dans leurs calculs et de rendre la gestion du RP beaucoup plus fluide.",
            'tags' => ['PHP', 'MySQL', 'MVC', 'BTS SIO', 'GTA RP'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_lsmotors.pdf']
        ],
        [
            'id' => 'goldbook',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-star',
            'title' => '⭐ Gold Book',
            'short' => "Livre d’or en ligne pour un restaurant, avec un gros focus sur la sécurité.",
            'long' => "Gold Book est un projet de livre d’or en ligne pensé pour un restaurant. Le but principal n’était pas uniquement d’afficher des messages, mais surtout de travailler la sécurité : injections SQL, XSS, filtrage des entrées, gestion des rôles, etc.\n\nLe projet a ensuite été testé par un professeur qui a essayé de l’attaquer, ce qui m’a permis de mieux comprendre les bonnes pratiques de sécurisation côté backend.",
            'tags' => ['PHP', 'MySQL', 'Sécurité', 'Formulaires'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_goldbook.pdf']
        ],
        [
            'id' => 'gcat',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-store',
            'title' => '🛒 Gcat Marketplace',
            'short' => "Marketplace de matériel informatique avec gestion des produits, utilisateurs et commandes.",
            'long' => "Gcat Marketplace est une place de marché dédiée au matériel informatique. On y trouve une gestion complète des produits (ajout, modification, suppression), des utilisateurs, et une base de données structurée.\n\nC’est un projet très important pour moi car il m’a permis de progresser en PHP, en organisation de code et en logique CRUD (Create, Read, Update, Delete).",
            'tags' => ['PHP', 'MySQL', 'CRUD', 'E-commerce'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_gcat.pdf']
        ],
        [
            'id' => 'biblio',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-book',
            'title' => '📚 Bibliothèque',
            'short' => "Application web de gestion de livres, auteurs et catégories.",
            'long' => "Ce projet de bibliothèque permet de gérer des livres, des auteurs et potentiellement des catégories. Il inclut une interface d’ajout, de modification et de suppression, ce qui m’a permis de travailler sur la structure des formulaires, les relations entre tables et le CRUD en PHP/MySQL.",
            'tags' => ['PHP', 'MySQL', 'CRUD'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_bibliotheque.pdf']
        ],
        [
            'id' => 'todo',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-list-check',
            'title' => '📝 ToDo App',
            'short' => "Petite application de gestion de tâches pour pratiquer le SQL et le routing.",
            'long' => "La ToDo App est une mini-application de gestion de tâches développée en PHP. L’objectif principal était de pratiquer les opérations SQL et de mettre en place un petit système de routing.\n\nOn peut ajouter, supprimer des tâches, et manipuler les données côté base de données.",
            'tags' => ['PHP', 'SQL', 'Routing'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_todo.pdf']
        ],
        [
            'id' => 'chauffeur',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-taxi',
            'title' => '🚕 Projet Chauffeur',
            'short' => "Prototype d’application VTC avec choix de véhicules et options.",
            'long' => "Le projet Chauffeur est une première version d’application de type VTC. L’utilisateur peut se connecter, choisir un type de véhicule et configurer un trajet. L’objectif principal était de travailler l’interface et l’expérience utilisateur.",
            'tags' => ['Web', 'Maquettes', 'UX'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_chauffeur.pdf']
        ],
        [
            'id' => 'vtc',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-car-side',
            'title' => '🚖 Projet VTC (version avancée)',
            'short' => "Version plus poussée d’une application VTC avec davantage de fonctionnalités.",
            'long' => "Ce projet est une version plus avancée de Chauffeur, avec plus d’options côté interface et logique métier améliorée. Le but était d’aller plus loin dans la structure du projet et l’esthétique.",
            'tags' => ['PHP', 'MySQL', 'CRUD'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_vtc.pdf']
        ],
        [
            'id' => 'portfolio',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-laptop-code',
            'title' => '🌐 Mon Portfolio',
            'short' => "Site portfolio personnel (pas celui que vous lisez actuellement).",
            'long' => "Mon portfolio est un projet en continu. Il me permet de présenter mon parcours, mes compétences, mes projets et de tester de nouvelles idées d’interface.\n\nIl est développé principalement en PHP, HTML et CSS, avec une mise en page inspirée d’un thème sombre et d’effets rouges.",
            'tags' => ['PHP', 'HTML', 'CSS'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_portfolio.pdf']
        ],
                [
            'id' => 'portfolio bts sio',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-laptop-code',
            'title' => '🌐 Mon Portfolio bts sio',
            'short' => "Site portfolio adapté au bts sio ( celui que vous lisez actuellement).",
            'long' => "Mon portfolio est un projet en continu. Il me permet de présenter mon parcours, mes compétences, mes projets et de tester de nouvelles idées d’interface.\n\nIl est développé principalement en PHP, HTML et CSS, avec une mise en page inspirée d’un thème sombre et d’effets rouges.",
            'tags' => ['PHP', 'HTML', 'CSS'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_portfolio_bts.pdf']
        ],
        [
            'id' => 'gta-site',
            'category' => 'Développement Web & Applications',
            'icon' => 'fa-map',
            'title' => '🌎 Site GTA RP',
            'short' => "Mini-site pour un serveur GTA RP : présentation, règles, informations.",
            'long' => "Ce mini-site GTA RP avait pour but de structurer les informations d’un serveur : règles, contexte RP, liens utiles, etc.\n\nMême si le projet était simple, il m’a permis de travailler l’aspect présentation et immersion pour un univers RP.",
            'tags' => ['HTML', 'CSS', 'RP', 'GTA'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_gta_site.pdf']
        ],

        // ===============================
        // APPLIS CONSOLE / POO / BACK
        // ===============================
        [
            'id' => 'authjeudi',
            'category' => 'Applications & Console / POO',
            'icon' => 'fa-key',
            'title' => '🔐 AuthJeudi',
            'short' => "Projet d’apprentissage du routing et des sessions en PHP.",
            'long' => "AuthJeudi est un petit projet qui m’a servi à comprendre le fonctionnement des sessions et du routing en PHP.\n\nIl propose une interface simple de connexion/déconnexion avec gestion basique des utilisateurs et de leur état connecté.",
            'tags' => ['PHP', 'Sessions', 'Routing'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_authjeudi.pdf']
        ],
        [
            'id' => 'calc-csharp',
            'category' => 'Applications & Console / POO',
            'icon' => 'fa-calculator',
            'title' => '🧮 Calculatrice Web & Console en C#',
            'short' => "Deux versions d’une calculatrice : console et .NET Web.",
            'long' => "Ce projet m’a permis de découvrr C# à travers une petite calculatrice. J’en ai fait une version en console puis une version web avec .NET.\n\nC’est un projet simple mais très utile pour prendre en main la syntaxe, les types, les méthodes et les bases de .NET.",
            'tags' => ['C#', '.NET', 'Console', 'Web'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_calc_csharp.pdf']
        ],
        [
            'id' => 'combat-csharp',
            'category' => 'Applications & Console / POO',
            'icon' => 'fa-fist-raised',
            'title' => '⚔️ Combat tour par tour en C#',
            'short' => "Jeu console en C# avec deux personnages qui s’affrontent.",
            'long' => "Ce projet est un petit jeu en console. Deux personnages s’affrontent à tour de rôle, chacun avec ses points de vie, attaques et actions.\n\nLe but était de pratiquer la POO en C# : classes, attributs, méthodes et logique de combat.",
            'tags' => ['C#', 'POO', 'Console'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_combat_csharp.pdf']
        ],
        [
            'id' => 'taches-csharp',
            'category' => 'Applications & Console / POO',
            'icon' => 'fa-tasks',
            'title' => '📋 Gestionnaire de tâches (C#)',
            'short' => "Application console pour gérer des tâches (ajout, suppression, statut).",
            'long' => "Le gestionnaire de tâches en C# permet de créer, modifier, marquer comme terminées ou supprimer des tâches. Le projet m’a servi à manipuler des listes, des boucles, et à structurer proprement un programme console.",
            'tags' => ['C#', 'Console', 'Gestion de données'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_taches_csharp.pdf']
        ],
        [
            'id' => 'ecole-poo',
            'category' => 'Applications & Console / POO',
            'icon' => 'fa-school',
            'title' => '🏫 Gestion d’école (POO)',
            'short' => "Projet orienté objet pour gérer des promotions, étudiants et diplômes.",
            'long' => "Ce projet orienté objet permet de gérer une école : promotions, étudiants, diplômes… L’objectif était de bien comprendre la modélisation, les relations entre classes et la logique métier côté POO.",
            'tags' => ['POO', 'Java ', 'Modélisation'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_ecole_poo.pdf']
        ],
        [
            'id' => 'produit-poo',
            'category' => 'Applications & Console / POO',
            'icon' => 'fa-box',
            'title' => '📦 Gestion de produit (POO)',
            'short' => "Gestion d’un produit avec référence, désignation, prix, quantité.",
            'long' => "Ce projet orienté objet tourne autour d’un produit : référence, désignation, prix, quantité. Il m’a permis de travailler les classes simples, les accesseurs et la logique de calcul (prix total, etc.).",
            'tags' => ['POO', 'Java '],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_produit_poo.pdf']
        ],
        [
            'id' => 'ratp-poo',
            'category' => 'Applications & Console / POO',
            'icon' => 'fa-bus',
            'title' => '🚌 Gestion RATP (POO)',
            'short' => "Gestion d’un parc de bus et de leurs caractéristiques.",
            'long' => "Le projet RATP simule la gestion d’un parc de bus avec leurs différentes caractéristiques. L’objectif était de manipuler des collections, des objets et des relations entre entités.",
            'tags' => ['POO', 'Java ', 'Simulation'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_ratp_poo.pdf']
        ],
        [
            'id' => 'rectangle-poo',
            'category' => 'Applications & Console / POO',
            'icon' => 'fa-square',
            'title' => '⬛ Gestion de rectangles (POO)',
            'short' => "Création de rectangles avec calcul de surface et périmètre.",
            'long' => "Un projet classique en POO : créer des rectangles, calculer leur surface et leur périmètre. Idéal pour travailler la notion de classes, attributs et méthodes simples.",
            'tags' => ['POO', 'Maths', 'Java '],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_rectangle_poo.pdf']
        ],

        // ===============================
        // FRONT / FRAMEWORKS
        // ===============================
        [
            'id' => 'morpion-vue',
            'category' => 'Front & Frameworks',
            'icon' => 'fa-gamepad',
            'title' => '🎮 Morpion Vue.js',
            'short' => "Jeu de morpion avec Vue.js pour apprendre la réactivité.",
            'long' => "Ce projet est un jeu de morpion développé avec Vue.js. Il m’a permis de travailler sur les composants, les événements et la logique réactive côté frontend.",
            'tags' => ['Vue.js', 'JavaScript', 'Frontend'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_morpion_vue.pdf']
        ],
  










        // ===============================
        // SERVEURS & INFRASTRUCTURE
        // ===============================
        [
            'id' => 'hebergement',
            'category' => 'Serveurs & Infrastructure',
            'icon' => 'fa-server',
            'title' => '🖥️ Hébergement & maintenance serveur',
            'short' => "Transformation d’un ancien PC gamer en serveur 24/7 sous Linux.",
            'long' => "J’ai transformé un ancien PC gamer (i7 10750H, RTX 2070 Super, 64 Go RAM, 1 To SSD) en serveur Linux tournant 24/7. Il héberge plusieurs jeux (Minecraft, Ark, Gmod, Zomboid…) pour mes amis.\n\nCe projet m’a permis de progresser en Linux, en hébergement de serveurs de jeux, en réseau et en organisation des services.",
            'tags' => ['Linux', 'Jeux Vidéo', 'Infrastructure'],
            'github' => null,
            'images' => ['/portfolio/docs/fiche_hebergement.pdf']
        ],
        [
            'id' => 'server-manager-v1',
            'category' => 'Serveurs & Infrastructure',
            'icon' => 'fa-network-wired',
            'title' => '🌐 Serveur Manager V1',
            'short' => "Application pour centraliser la gestion de plusieurs serveurs de jeux via Docker.",
            'long' => "Serveur Manager V1 est une application développée avec un ami pour gérer nos serveurs de jeux hébergés sur mon serveur Linux.\n\nTout a commencé avec des lancements manuels, puis on a créé un outil en Python couplé à Docker pour :\n- lancer les serveurs dans des conteneurs,\n- les arrêter,\n- les modifier,\n- surveiller les ressources,\n- gérer tout ça via une interface web maison.\n\nC’est l’un de mes projets les plus complets, mêlant développement, administration système et conteneurisation.",
            'tags' => ['Python', 'Docker', 'Linux', 'Web', 'Jeux Vidéo'],
            'github' => '#',
            'images' => ['/portfolio/docs/fiche_server_manager_v1.pdf']
        ],
    ];
    ?>

    <!-- LISTE DES PROJETS (cartes) -->
    <div class="row">
        <?php foreach ($projects as $proj): ?>
        <div class="col-12 col-md-4 mb-4">
            <div class="project-card" data-project-id="<?php echo $proj['id']; ?>">
                <div class="projects-category-title">
                    <?php echo htmlspecialchars($proj['category']); ?>
                </div>
                <div class="project-title">
                    <i class="fas <?php echo $proj['icon']; ?> project-icon"></i>
                    <?php echo htmlspecialchars($proj['title']); ?>
                </div>
                <p class="project-description">
                    <?php echo htmlspecialchars($proj['short']); ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- DÉTAILS DES PROJETS (en dessous) -->
    <div class="project-detail-wrapper">
        <?php foreach ($projects as $proj): ?>
        <div class="project-detail" id="detail-<?php echo $proj['id']; ?>">
            <div class="project-detail-title">
                <?php echo htmlspecialchars($proj['title']); ?>
            </div>
            <div class="project-detail-subtitle">
                Catégorie : <?php echo htmlspecialchars($proj['category']); ?>
            </div>

            <div class="project-detail-text">
                <?php echo nl2br(htmlspecialchars($proj['long'])); ?>
            </div>

            <div class="project-detail-tags">
                <?php foreach ($proj['tags'] as $tag): ?>
                <span><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
            </div>

            <div class="project-detail-links">
                <?php if (!empty($proj['github']) && $proj['github'] !== '#'): ?>
                <a href="<?php echo htmlspecialchars($proj['github']); ?>" target="_blank">
                    <i class="fab fa-github"></i> Voir sur GitHub
                </a>
                <?php else: ?>
                <span class="project-detail-empty">Lien GitHub à venir.</span>
                <?php endif; ?>
            </div>

            <div class="project-detail-images">
                <?php if (!empty($proj['images'])): ?>
                <?php foreach ($proj['images'] as $file): ?>
                <?php
                                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                            ?>
                <?php if ($ext === 'pdf'): ?>
                <a href="<?php echo htmlspecialchars($file); ?>" target="_blank" class="project-pdf-link">
                    <i class="fas fa-file-pdf"></i>
                    Voir la fiche projet (PDF)
                </a>
                <?php else: ?>
                <img src="<?php echo htmlspecialchars($file); ?>" alt="Image projet">
                <?php endif; ?>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="project-detail-empty">
                    Aucune fiche ou capture d’écran pour le moment.
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.project-card');
    const details = document.querySelectorAll('.project-detail');

    function hideAllDetails() {
        details.forEach(d => d.classList.remove('active'));
    }

    cards.forEach(card => {
        card.addEventListener('click', () => {
            const id = card.getAttribute('data-project-id');
            const target = document.getElementById('detail-' + id);
            if (!target) return;

            if (target.classList.contains('active')) {
                target.classList.remove('active');
                return;
            }

            hideAllDetails();
            target.classList.add('active');

            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
});
</script>