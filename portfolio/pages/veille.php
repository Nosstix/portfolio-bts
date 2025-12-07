<div class="veille-container">
    <h1 class="veille-title">
        Le composant dont la pénurie pourrait déstabiliser l’économie électronique mondiale dans les prochaines années
    </h1>
    <p class="veille-subtitle">
        Analyse de la RAM, de la VRAM et des mémoires associées à l’ère de l’IA : tensions d’approvisionnement,
        priorité aux entreprises, impact sur le marché grand public (PC, consoles, smartphones, objets connectés).
    </p>

    <!-- Présentation de la veille -->
    <div class="veille-section">
        <h3>🔎 Pourquoi ce sujet ?</h3>
        <p>
            La <strong>mémoire</strong> (RAM pour les processeurs, VRAM et HBM pour les GPU, NAND pour les SSD)
            est au cœur de <strong>tous</strong> les systèmes informatiques modernes&nbsp;:
            serveurs d’Intelligence Artificielle, datacenters, PC gamer, consoles, smartphones, objets connectés,
            électroménager “intelligent”, etc.
        </p>
        <p>
            Avec l’explosion de l’<strong>IA générative</strong> et des grands modèles (LLM, modèles de vision,
            recommandations), les besoins en mémoire ont littéralement changé d’échelle. Un seul serveur d’IA
            peut embarquer plusieurs cartes avec chacune des dizaines de gigaoctets de VRAM ou de mémoire HBM,
            là où un PC classique se contente de 16&nbsp;Go de RAM.
        </p>
        <p>
            Résultat&nbsp;: la production mondiale de mémoire est fortement <strong>tendue</strong>.
            Les fabricants comme <strong>Micron, Samsung ou SK Hynix</strong> sont poussés à
            <strong>prioriser les grands comptes</strong> (cloud, IA, datacenters) plutôt que le marché grand public.
            Certains acteurs communiquent déjà sur la réduction des volumes destinés aux particuliers
            pour concentrer leurs stocks sur les entreprises.
        </p>
        <p>
            Concrètement, cela se traduit par :
        </p>
        <ul class="veille-list">
            <li>Une tension sur la production de <strong>DRAM</strong> (RAM PC, RAM serveurs) et de
                <strong>VRAM / HBM</strong> pour les GPU IA,
            </li>
            <li>Des fabricants de mémoire qui peuvent limiter ou réorienter les ventes au détail
                au profit des contrats “entreprise”,</li>
            <li>Des acteurs comme <strong>Nvidia</strong> qui se concentrent de plus en plus
                sur les GPU destinés aux datacenters, au détriment des cartes “gaming”,</li>
            <li>Une remontée progressive des prix de la RAM, des GPU et des <strong>SSD M.2</strong>.</li>
        </ul>
        <p>
            À moyen terme, cette situation risque de rendre plus difficile et plus coûteuse la
            <strong>construction d’un PC gamer</strong>, mais aussi la production de consoles de nouvelle génération,
            de PC portables ou de smartphones.
        </p>
        <p>
            Dans le cadre de ma veille, je m’intéresse particulièrement à :
        </p>
        <ul class="veille-list">
            <li>La tension croissante sur la production de RAM, VRAM, HBM et NAND,</li>
            <li>Les décisions stratégiques des constructeurs (Micron, Crucial, Samsung, SK Hynix, Nvidia, AMD),</li>
            <li>L’impact sur :
                <ul class="veille-list">
                    <li>les <strong>PC gamer</strong> de demain (prix, VRAM, difficulté à monter une configuration),
                    </li>
                    <li>les <strong>consoles</strong> (PS5 / Xbox encore stables grâce aux stocks actuels, mais
                        générations futures potentiellement plus chères ou limitées),</li>
                    <li>les <strong>PC portables</strong> et les <strong>smartphones</strong> (LPDDR5/LPDDR5X
                        sous tension, capacité mémoire qui stagne alors que les usages augmentent),</li>
                    <li>et l’<strong>électronique grand public</strong> en général
                        (TV, aspirateurs robots, objets connectés, électroménager “intelligent”).</li>
                </ul>
            </li>
            <li>Les conséquences possibles sur l’ensemble du marché électronique
                (hausse de prix, pénuries ciblées, priorité aux usages IA).</li>
        </ul>
    </div>

    <!-- Ressources + flux RSS -->
    <div class="veille-section">
        <h3>📚 Ressources que je suis</h3>

        <div class="veille-resources-grid">
            <!-- Ressources fixes -->
            <div class="veille-card">
                <h4>Sites &amp; documentation</h4>
                <ul class="veille-links">
                    <li><a href="https://www.micron.com/" target="_blank">Micron – Memory &amp; Storage</a></li>
                    <li><a href="https://www.skhynix.com/" target="_blank">SK Hynix – DRAM / HBM</a></li>
                    <li><a href="https://www.samsung.com/semiconductor/" target="_blank">Samsung Semiconductor</a></li>
                    <li><a href="https://www.nvidia.com/" target="_blank">NVIDIA – Data Center &amp; GPU</a></li>
                    <li><a href="https://www.amd.com/" target="_blank">AMD – GPU &amp; Data Center</a></li>
                </ul>

                <h4>Analyse marché &amp; hardware</h4>
                <ul class="veille-links">
                    <li><a href="https://www.tomshardware.com/news" target="_blank">Tom’s Hardware – News</a></li>
                    <li><a href="https://www.techpowerup.com/" target="_blank">TechPowerUp</a></li>
                    <li><a href="https://www.anandtech.com/tag/memory" target="_blank">AnandTech – Mémoire</a></li>
                    <li><a href="https://www.trendforce.com/" target="_blank">TrendForce – DRAM / NAND Market</a></li>
                </ul>
            </div>

            <!-- Flux RSS (chargé JS) -->
            <div class="veille-card rss-block">
                <h4>📰 Derniers articles (flux RSS)</h4>
                <p class="rss-status">Chargement des articles en cours...</p>
                <ul id="rss-list" class="rss-list"></ul>
            </div>
        </div>
    </div>

    <!-- Synthèse perso -->
    <div class="veille-section">
        <h3>🧠 Ce que cette veille m’apporte</h3>
        <p>
            Cette veille me permet de mieux comprendre comment un composant souvent perçu comme “basique”
            (la mémoire) devient en réalité un <strong>enjeu stratégique majeur</strong> dans l’informatique moderne.
        </p>
        <ul>
            <li>
                De suivre l’évolution des <strong>prix et de la disponibilité</strong> de la RAM, des GPU et des SSD,
                et de comprendre pourquoi monter un PC gamer devient progressivement plus complexe et plus coûteux.
            </li>
            <li>
                De faire le lien entre les <strong>besoins des datacenters IA</strong> (GPU avec HBM, gros volumes de
                RAM)
                et les conséquences sur le <strong>grand public</strong> (moins de stock, produits plus chers,
                générations de consoles ou de cartes graphiques potentiellement moins bien dotées en mémoire).
            </li>
            <li>
                De prendre conscience que la pénurie de mémoire ne touche pas seulement les PC, mais aussi
                les <strong>PC portables</strong>, les <strong>smartphones</strong> et
                l’<strong>électronique grand public</strong> (TV, objets connectés, aspirateurs autonomes, etc.).
            </li>
            <li>
                D’alimenter ma réflexion en tant qu’étudiant en <strong>BTS SIO</strong> sur l’impact de ces contraintes
                matérielles sur les <strong>infrastructures</strong>, les <strong>services hébergés</strong> et
                les solutions que l’on déploie (optimisation, mutualisation, choix des configurations).
            </li>
            <li>
                De développer une vision plus globale de l’IT&nbsp;: technique (hardware, IA, serveurs),
                mais aussi <strong>économique</strong> (priorisation des clients, arbitrages des constructeurs,
                impact sur l’écosystème numérique dans son ensemble).
            </li>
        </ul>
    </div>
</div>

<script>
// Chargement du flux RSS hardware côté navigateur via un proxy CORS
document.addEventListener('DOMContentLoaded', function() {
    // Flux RSS orienté hardware / marché composants
    const rssUrl = encodeURIComponent('https://www.tomshardware.com/feeds/all');
    const proxyUrl = 'https://api.allorigins.win/raw?url=' + rssUrl;

    const rssList = document.getElementById('rss-list');
    const rssStatus = document.querySelector('.rss-status');

    function afficherFallback() {
        rssStatus.textContent =
            "Impossible de charger le flux en direct. Voici quelques exemples d’articles de référence sur la mémoire :";

        const fallback = [{
                title: "La pénurie de DRAM et de NAND sous la pression de l’IA",
                link: "https://www.tomshardware.com/",
                date: "Exemple"
            },
            {
                title: "Pourquoi la HBM est devenue le cœur des GPU IA modernes",
                link: "https://www.techpowerup.com/",
                date: "Exemple"
            },
            {
                title: "Impact de la demande IA sur les prix de la RAM et des SSD",
                link: "https://www.anandtech.com/",
                date: "Exemple"
            }
        ];

        fallback.forEach(item => {
            const li = document.createElement('li');
            li.className = 'rss-item';

            const a = document.createElement('a');
            a.href = item.link;
            a.target = '_blank';
            a.textContent = item.title;

            const d = document.createElement('div');
            d.className = 'rss-date';
            d.textContent = item.date;

            li.appendChild(a);
            li.appendChild(d);
            rssList.appendChild(li);
        });
    }

    fetch(proxyUrl)
        .then(response => {
            if (!response.ok) throw new Error('Erreur HTTP');
            return response.text();
        })
        .then(str => {
            const parser = new DOMParser();
            const xml = parser.parseFromString(str, 'application/xml');
            const items = Array.from(xml.querySelectorAll('item')).slice(0, 5);

            if (!items.length) {
                afficherFallback();
                return;
            }

            rssStatus.textContent = "";

            items.forEach(item => {
                const li = document.createElement('li');
                li.className = 'rss-item';

                const linkNode = item.querySelector('link');
                const titleNode = item.querySelector('title');
                const dateNode = item.querySelector('pubDate');

                const a = document.createElement('a');
                a.href = linkNode ? linkNode.textContent : '#';
                a.target = '_blank';
                a.textContent = titleNode ? titleNode.textContent : 'Article';

                const d = document.createElement('div');
                d.className = 'rss-date';

                if (dateNode && dateNode.textContent) {
                    const date = new Date(dateNode.textContent);
                    if (!isNaN(date.getTime())) {
                        d.textContent = date.toLocaleDateString('fr-FR');
                    } else {
                        d.textContent = '';
                    }
                } else {
                    d.textContent = '';
                }

                li.appendChild(a);
                li.appendChild(d);
                rssList.appendChild(li);
            });
        })
        .catch(err => {
            console.error(err);
            afficherFallback();
        });
});
</script>