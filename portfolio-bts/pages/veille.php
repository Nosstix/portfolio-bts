<div class="veille-container">
    <h1 class="veille-title"><i class="fas fa-microchip"></i> Veille technologique</h1>
    <p class="veille-subtitle">
        Sujet suivi : la tension sur le marché de la mémoire informatique (DRAM, NAND, HBM, VRAM) et ses conséquences sur l’IA, les PC, les consoles et l’électronique grand public.
    </p>

    <div class="veille-section">
        <h3><i class="fas fa-bullseye"></i> Pourquoi j’ai choisi ce sujet</h3>
        <p>
            J’ai choisi ce thème parce qu’il mélange plusieurs choses qui m’intéressent : le hardware, le marché du numérique, l’IA et l’impact concret sur les machines qu’on utilise tous les jours.
            On parle souvent des processeurs ou des cartes graphiques, mais la mémoire est devenue un vrai point stratégique.
        </p>
        <p>
            En 2026, la pression reste forte parce que les datacenters IA absorbent énormément de ressources, surtout sur la <strong>HBM</strong> et la <strong>DRAM serveur</strong>. En parallèle,
            la <strong>NAND</strong> et la mémoire grand public continuent de subir des hausses de prix et des arbitrages de production.
        </p>
    </div>

    <div class="veille-section">
        <h3><i class="fas fa-lightbulb"></i> Ce que je surveille</h3>
        <ul class="veille-list">
            <li>L’évolution des prix de la DRAM, de la NAND et de la HBM,</li>
            <li>Les décisions des grands acteurs comme Micron, Samsung, SK hynix, Nvidia et AMD,</li>
            <li>L’impact sur les PC fixes, les portables, les smartphones, les SSD et les consoles,</li>
            <li>Le lien entre besoins IA, serveurs et disponibilité des composants pour le grand public.</li>
        </ul>
        <p>
            L’idée est de comprendre comment une demande très forte côté IA peut finir par toucher le prix d’une barrette de RAM, d’un SSD ou d’une machine complète.
        </p>
    </div>

    <div class="veille-section">
        <h3><i class="fas fa-chart-line"></i> Contexte actuel</h3>
        <p>
            Aujourd’hui, le marché mémoire reste tiré par l’IA. La HBM3E domine encore une bonne partie des besoins haut de gamme, pendant que la transition vers la HBM4 commence à se préparer.
            En parallèle, les contrats DRAM et NAND ont fortement augmenté, ce qui finit par se répercuter sur les machines du quotidien.
        </p>
        <ul class="veille-list">
            <li>Les fabricants priorisent les segments les plus rentables, surtout le serveur et l’IA,</li>
            <li>Les prix DRAM et NAND restent sous tension,</li>
            <li>Les PC d’entrée de gamme, certains portables et une partie de l’électronique grand public deviennent plus sensibles aux hausses de coûts,</li>
            <li>La mémoire n’est plus juste un composant “de fond”, c’est un vrai levier stratégique du marché.</li>
        </ul>
    </div>

    <div class="veille-section">
        <h3><i class="fas fa-book"></i> Ressources que je suis</h3>
        <div class="veille-resources-grid">
            <div class="veille-card">
                <h4>Constructeurs & marché</h4>
                <ul class="veille-links">
                    <li><a href="https://www.micron.com/" target="_blank">Micron</a></li>
                    <li><a href="https://news.skhynix.com/" target="_blank">SK hynix Newsroom</a></li>
                    <li><a href="https://www.samsung.com/semiconductor/" target="_blank">Samsung Semiconductor</a></li>
                    <li><a href="https://www.trendforce.com/" target="_blank">TrendForce</a></li>
                </ul>

                <h4>Suivi hardware</h4>
                <ul class="veille-links">
                    <li><a href="https://www.tomshardware.com/news" target="_blank">Tom’s Hardware</a></li>
                    <li><a href="https://www.techpowerup.com/" target="_blank">TechPowerUp</a></li>
                    <li><a href="https://www.anandtech.com/tag/memory" target="_blank">AnandTech – Memory</a></li>
                </ul>
            </div>

            <div class="veille-card rss-block">
                <h4><i class="fas fa-newspaper"></i> Derniers articles (flux RSS)</h4>
                <p class="rss-status">Chargement des articles en cours...</p>
                <ul id="rss-list" class="rss-list"></ul>
            </div>
        </div>
    </div>

    <div class="veille-section">
        <h3><i class="fas fa-brain"></i> Ce que cette veille m’apporte</h3>
        <ul class="veille-list">
            <li>Mieux comprendre le lien entre hardware, économie et disponibilité réelle des composants,</li>
            <li>Suivre comment l’IA influence directement le marché grand public,</li>
            <li>Avoir une vision plus large des choix techniques derrière les serveurs, les GPU et les infrastructures,</li>
            <li>Développer une veille utile pour mes projets, ma culture technique et ma compréhension globale du secteur.</li>
        </ul>
    </div>
</div>

<script>
// Chargement d’un flux RSS orienté mémoire / hardware.
// Le filtre évite de sortir des articles hors sujet juste parce qu’ils viennent d’un site tech connu.
document.addEventListener('DOMContentLoaded', function() {
    const rssUrl = encodeURIComponent('https://www.tomshardware.com/feeds/all');
    const proxyUrl = 'https://api.allorigins.win/raw?url=' + rssUrl;
    const rssList = document.getElementById('rss-list');
    const rssStatus = document.querySelector('.rss-status');
    const keywords = ['dram', 'ddr5', 'ddr4', 'ram', 'memory', 'nand', 'ssd', 'hbm', 'hbm3e', 'hbm4', 'vram', 'gddr', 'micron', 'sk hynix', 'samsung'];

    function addItem(title, link, date) {
        const li = document.createElement('li');
        li.className = 'rss-item';

        const a = document.createElement('a');
        a.href = link;
        a.target = '_blank';
        a.rel = 'noopener';
        a.textContent = title;

        const d = document.createElement('div');
        d.className = 'rss-date';
        d.textContent = date || '';

        li.appendChild(a);
        li.appendChild(d);
        rssList.appendChild(li);
    }

    function afficherFallback() {
        rssStatus.textContent = 'Impossible de charger le flux en direct. Voici quand même quelques sujets cohérents avec ma veille :';
        [
            ['Hausse des prix de la DRAM et de la NAND sous l’effet de la demande IA', 'https://www.trendforce.com/', 'Veille marché'],
            ['HBM3E / HBM4 : pourquoi la mémoire devient critique dans les serveurs IA', 'https://news.skhynix.com/', 'Veille constructeur'],
            ['Conséquences sur les PC, SSD et composants grand public', 'https://www.tomshardware.com/news', 'Veille hardware']
        ].forEach(item => addItem(item[0], item[1], item[2]));
    }

    fetch(proxyUrl)
        .then(response => {
            if (!response.ok) throw new Error('Erreur HTTP');
            return response.text();
        })
        .then(str => {
            const parser = new DOMParser();
            const xml = parser.parseFromString(str, 'application/xml');
            const items = Array.from(xml.querySelectorAll('item'));

            const filtered = items.filter(item => {
                const title = (item.querySelector('title')?.textContent || '').toLowerCase();
                const desc = (item.querySelector('description')?.textContent || '').toLowerCase();
                const haystack = title + ' ' + desc;
                return keywords.some(keyword => haystack.includes(keyword));
            }).slice(0, 6);

            if (!filtered.length) {
                afficherFallback();
                return;
            }

            rssStatus.textContent = '';
            filtered.forEach(item => {
                const link = item.querySelector('link')?.textContent || '#';
                const title = item.querySelector('title')?.textContent || 'Article';
                const pubDate = item.querySelector('pubDate')?.textContent || '';
                let formattedDate = '';
                if (pubDate) {
                    const date = new Date(pubDate);
                    if (!isNaN(date.getTime())) {
                        formattedDate = date.toLocaleDateString('fr-FR');
                    }
                }
                addItem(title, link, formattedDate);
            });
        })
        .catch(err => {
            console.error(err);
            afficherFallback();
        });
});
</script>