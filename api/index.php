<?php
header('Content-Type: text/html; charset=utf-8');

$studentName = "Hakima Bouabidi";
$academicYear = "2025/2026";
$specialization = "Développement Digital - Option Web / Full-Stack";

$modules = [
    [
        'id' => 'M201',
        'code' => 'M201',
        'title' => "Préparation d'un projet web",
        'category' => 'management',
        'desc' => "Analyse des besoins, élaboration du cahier des charges, modélisation UML, wireframing et charte graphique.",
        'techs' => ['UML', 'Figma', 'Agile', 'Cahier des charges'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M201+Wireframe+Spec'
    ],
    [
        'id' => 'M202',
        'code' => 'M202',
        'title' => "Approche agile",
        'category' => 'management',
        'desc' => "Gestion de projet selon la méthodologie Scrum, planification des Sprints, backlog utilisateur et daily standups.",
        'techs' => ['Scrum', 'Trello', 'Jira', 'Kanban'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M202+Scrum+Board'
    ],
    [
        'id' => 'M203',
        'code' => 'M203',
        'title' => "Intégration web",
        'category' => 'frontend',
        'desc' => "Création d'interfaces web modernes, responsive design avec HTML5, CSS3, JavaScript ES6+ et frameworks CSS.",
        'techs' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Tailwind'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M203+Integration+CSS'
    ],
    [
        'id' => 'M204',
        'code' => 'M204',
        'title' => "Développement web dynamique",
        'category' => 'backend',
        'desc' => "Conception d'applications web serveur sécurisées avec PHP, Laravel, Node.js, Express, POO, architecture MVC et MySQL.",
        'techs' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'PDO'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M204+Laravel+Backend'
    ],
    [
        'id' => 'M205',
        'code' => 'M205',
        'title' => "Développement front-end",
        'category' => 'frontend',
        'desc' => "Création de Single Page Applications (SPA) dynamiques avec React.js / Vue.js, gestion d'état (Redux/Context API) et API REST.",
        'techs' => ['React.js', 'Redux', 'REST API', 'Tailwind'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M205+React+App'
    ],
    [
        'id' => 'M206',
        'code' => 'M206',
        'title' => "Création d'une application mobile",
        'category' => 'mobile',
        'desc' => "Développement mobile multiplateforme avec React Native / Flutter, intégration des composants natifs et consommation d'APIs.",
        'techs' => ['React Native', 'Flutter', 'Mobile UI', 'Expo'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M206+Mobile+Screen'
    ],
    [
        'id' => 'M207',
        'code' => 'M207',
        'title' => "Sécurité d'un site web",
        'category' => 'management',
        'desc' => "Mise en œuvre des bonnes pratiques de cybersécurité, prévention OWASP (XSS, SQLi, CSRF), chiffrement et authentification JWT.",
        'techs' => ['OWASP', 'JWT', 'HTTPS', 'Encryption'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M207+Security+Audit'
    ],
    [
        'id' => 'M208',
        'code' => 'M208',
        'title' => "Cloud & DevOps",
        'category' => 'mobile',
        'desc' => "Conteneurisation d'applications avec Docker, hébergement cloud, intégration/déploiement continu (CI/CD) et administration serveur.",
        'techs' => ['Docker', 'CI/CD', 'Git', 'Vercel/AWS'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M208+Docker+DevOps'
    ],
    [
        'id' => 'M209',
        'code' => 'M209',
        'title' => "Projet de fin d'études (PFE)",
        'category' => 'backend',
        'desc' => "Projet de synthèse complet intégrant l'ensemble des compétences acquises durant la formation en Développement Digital.",
        'techs' => ['Full-Stack', 'Laravel/React', 'PFE', 'UML'],
        'defaultImg' => 'https://placehold.co/600x400/70264d/fff1f6?text=M209+PFE+Dashboard'
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFPPT ISTA Portfolio | <?php echo htmlspecialchars($studentName); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-dark: #ffffff;
            --deep-green: #5a2140;
            --luxury-brown: #c75b87;
            --luxury-brown-hover: #a8446c;
            --accent-green: #c94f82;
            --text-light: #1a0d16;
            --text-muted: #6b5360;
            --card-bg: rgba(255, 255, 255, 0.96);
            --border-color: rgba(112, 38, 77, 0.25);
            --shadow: 0 15px 35px rgba(90, 33, 64, 0.15);
            --font-code: 'Fira Code', 'Consolas', monospace;
            --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body.purple-mode {
            --deep-green: #f8e8ef;
            --border-color: rgba(199, 91, 135, 0.3);
            --shadow: 0 15px 35px rgba(199, 91, 135, 0.15);
        }

        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            background-color: #ffffff;
            color: var(--text-light);
            margin: 0;
            overflow-x: hidden;
            min-height: 100vh;
        }

        header {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 1000;
            height: 75px;
        }

        .logo {
            font-family: var(--font-code);
            font-weight: 800;
            color: var(--luxury-brown);
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .logo span.badge {
            font-size: 0.65rem;
            background: rgba(199, 91, 135, 0.1);
            border: 1px solid var(--luxury-brown);
            color: var(--luxury-brown);
            padding: 2px 8px;
            border-radius: 12px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        nav a, .dropdown-btn {
            text-decoration: none;
            color: var(--text-light);
            padding: 8px 14px;
            font-weight: 500;
            font-size: 0.88rem;
            cursor: pointer;
            border: none;
            background: none;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: 0.3s;
        }

        nav a:hover, .dropdown-btn:hover {
            color: var(--luxury-brown);
            background: rgba(199, 91, 135, 0.06);
        }

        .theme-toggle-btn {
            background: linear-gradient(135deg, var(--luxury-brown), #a84d75);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.75rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 4px 12px rgba(90,33,64,0.15);
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 50px;
            right: 0;
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            min-width: 280px;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: var(--shadow);
            max-height: 420px;
            overflow-y: auto;
            z-index: 1001;
            padding: 6px 0;
        }

        .dropdown-content.show {
            display: block;
        }

        .dropdown-content a {
            padding: 10px 18px;
            border-bottom: 1px solid rgba(0,0,0,0.04);
            font-family: var(--font-code);
            font-size: 0.8rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-light);
            text-decoration: none;
        }

        .dropdown-content a:hover {
            background: rgba(199,91,135,0.1);
            color: var(--accent-green);
        }

        .hero {
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at center, #f9e6ee 0%, #ffffff 75%);
            padding: 60px 20px 40px;
            text-align: center;
        }

        .hero-badge {
            background: rgba(199,91,135,0.08);
            border: 1px solid var(--luxury-brown);
            color: var(--luxury-brown);
            padding: 6px 16px;
            border-radius: 20px;
            font-family: var(--font-code);
            font-size: 0.8rem;
            margin-bottom: 20px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin: 0;
            font-weight: 900;
            color: #24141c;
        }

        .hero h1 span {
            color: var(--luxury-brown);
        }

        .hero p {
            font-family: var(--font-code);
            color: var(--accent-green);
            font-size: 1rem;
            margin: 20px 0 35px;
            max-width: 650px;
        }

        .hero-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-main {
            background: linear-gradient(135deg, var(--luxury-brown), #a84d75);
            color: white;
            padding: 14px 32px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            box-shadow: 0 10px 20px rgba(90,33,64,0.15);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: none;
            cursor: pointer;
        }

        .btn-secondary {
            background: white;
            color: var(--text-light);
            border: 1px solid var(--border-color);
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .modules-nav-wrapper {
            position: sticky;
            top: 75px;
            z-index: 900;
            background: rgba(255,255,255,0.94);
            border-bottom: 1px solid var(--border-color);
            padding: 12px 5%;
            backdrop-filter: blur(10px);
        }

        .filter-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
            max-width: 1400px;
            margin: 0 auto;
        }

        .filter-tabs {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding-bottom: 4px;
        }

        .filter-tab {
            background: #fff7fa;
            border: 1px solid var(--border-color);
            color: var(--text-muted);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.8rem;
            cursor: pointer;
            white-space: nowrap;
            font-family: var(--font-code);
            transition: 0.3s;
        }

        .filter-tab:hover, .filter-tab.active {
            background: var(--luxury-brown);
            color: white;
            border-color: var(--luxury-brown);
        }

        .modules-section {
            padding: 40px 5% 80px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 2.2rem;
            color: var(--text-light);
            margin: 0 0 10px;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 30px;
        }

        .module-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 25px rgba(90,33,64,0.08);
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .module-card:hover {
            transform: translateY(-8px);
            border-color: var(--luxury-brown);
        }

        .module-header {
            padding: 22px 25px 15px;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .module-code {
            font-family: var(--font-code);
            font-size: 0.75rem;
            color: var(--accent-green);
            background: rgba(201,79,130,0.08);
            padding: 3px 10px;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 8px;
            border: 1px solid rgba(201,79,130,0.2);
        }

        .module-title {
            font-size: 1.25rem;
            margin: 0 0 10px;
            color: var(--text-light);
            font-weight: 700;
        }

        .module-desc {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.5;
            margin: 0;
        }

        .module-tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 12px;
        }

        .tech-tag {
            font-size: 0.7rem;
            background: rgba(199,91,135,0.1);
            color: var(--luxury-brown);
            padding: 2px 8px;
            border-radius: 4px;
            font-family: var(--font-code);
        }

        .exercise-upload-area {
            padding: 20px 25px;
            background: #fffafb;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .module-footer {
            padding: 15px 25px;
            border-top: 1px solid rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* تعديل المسارات لتكون صحيحة ومضبوطة نحو مجلد public لضمان ظهور الملفات عند الأستاذ */
        .btn-atelier {
            color: var(--luxury-brown);
            background: white;
            border: 1px solid var(--border-color);
            padding: 8px 16px;
            border-radius: 6px;
            font-family: var(--font-code);
            font-size: 0.8rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: 0.3s;
        }

        .btn-atelier:hover {
            background: var(--luxury-brown);
            color: white;
        }

        footer {
            text-align: center;
            padding: 50px 20px;
            border-top: 1px solid var(--border-color);
            background: #ffffff;
            font-family: var(--font-code);
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        footer span {
            color: var(--luxury-brown);
        }
    </style>
</head>
<body>

<header>
    <a href="index.php" class="logo">
        <i class="fa-solid fa-code"></i>
        <?php echo htmlspecialchars($studentName); ?>.DEV
        <span class="badge">OFPPT DD 2ND YEAR</span>
    </a>
    <nav>
        <a href="#modules"><i class="fa-solid fa-cubes"></i> Modules</a>
        <div class="dropdown">
            <button class="dropdown-btn" onclick="toggleDropdown(event)">
                <i class="fa-solid fa-folder-open"></i> Resources ▼
            </button>
            <div id="myDropdown" class="dropdown-content">
                <?php foreach ($modules as $mod): ?>
                    <!-- مسارات موجهة نحو مجلد public لكي تفتح الملفات مباشرة عند الأستاذ -->
                    <a href="../public/docs/<?php echo strtolower($mod['code']); ?>.pdf" target="_blank">
                        <span>&gt; <?php echo $mod['code']; ?> <?php echo htmlspecialchars($mod['title']); ?></span>
                        <i class="fa-solid fa-file-pdf"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <button class="theme-toggle-btn" onclick="toggleTheme()">
            <i class="fa-solid fa-circle-half-stroke"></i>
            <span id="themeText">BURGUNDY MODE</span>
        </button>
    </nav>
</header>

<section class="hero">
    <div class="hero-badge">
        <i class="fa-solid fa-graduation-cap"></i> OFPPT ISTA <?php echo $academicYear; ?> - <?php echo htmlspecialchars($specialization); ?>
    </div>
    <h1>Digital <span>Elegance</span></h1>
    <p>&gt; system.init("2nd Year Digital Development Portfolio - Specialization Projects & Exercises Showcase");</p>
    <div class="hero-actions">
        <a href="#modules" class="btn-main"><i class="fa-solid fa-play"></i> Explore Modules</a>
        <a href="https://github.com/Hakimakimy/Portfolio" target="_blank" class="btn-secondary"><i class="fa-brands fa-github"></i> GitHub Profile</a>
    </div>
</section>

<div class="modules-nav-wrapper">
    <div class="filter-container">
        <div class="filter-tabs">
            <button class="filter-tab active" onclick="filterModules('all', event)">All Modules (<?php echo count($modules); ?>)</button>
            <button class="filter-tab" onclick="filterModules('frontend', event)">Front-End</button>
            <button class="filter-tab" onclick="filterModules('backend', event)">Backend & DB</button>
            <button class="filter-tab" onclick="filterModules('mobile', event)">Mobile & Cloud</button>
            <button class="filter-tab" onclick="filterModules('management', event)">Management & Security</button>
        </div>
        <div class="stats-counter" id="statsCounter">
            <i class="fa-solid fa-check-circle" style="color:var(--luxury-brown);"></i> Status: <span style="color:var(--luxury-brown); font-weight:bold;">Production Ready</span>
        </div>
    </div>
</div>

<section class="modules-section" id="modules">
    <div class="section-title">
        <h2>OFPPT 2nd Year Modules Showcase</h2>
        <p>// Access all course documents, exercises & projects directly</p>
    </div>

    <div class="modules-grid" id="modulesContainer">
        <?php foreach ($modules as $mod): ?>
            <div class="module-card" data-category="<?php echo $mod['category']; ?>">
                <div class="module-header">
                    <span class="module-code"><i class="fa-solid fa-bookmark"></i> <?php echo $mod['code']; ?></span>
                    <h3 class="module-title"><?php echo htmlspecialchars($mod['title']); ?></h3>
                    <p class="module-desc"><?php echo htmlspecialchars($mod['desc']); ?></p>
                    <div class="module-tech-stack">
                        <?php foreach ($mod['techs'] as $tech): ?>
                            <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="exercise-upload-area">
                    <p style="font-size:0.85rem; color:var(--text-muted); margin:0 0 10px;">
                        <i class="fa-solid fa-folder-tree"></i> Ressources du module :
                    </p>
                    <!-- روابط مباشرة صحيحة نحو مجلد public لتفادي خطأ 404 عند الأستاذ -->
                    <a href="../public/docs/<?php echo strtolower($mod['code']); ?>.pdf" target="_blank" class="btn-atelier">
                        <i class="fa-solid fa-file-pdf"></i> Ouvrir le Cours (PDF)
                    </a>
                </div>
                <div class="module-footer">
                    <span style="font-size:0.75rem; font-family:var(--font-code); color:var(--text-muted);">OFPPT - 2ème Année</span>
                    <a href="https://github.com/Hakimakimy/Portfolio" target="_blank" class="btn-atelier">
                        <i class="fa-brands fa-github">Code source</i>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<footer>
    <p>&copy; <?php echo date('Y'); ?> <span><?php echo htmlspecialchars($studentName); ?></span> | Portfolio DEV204HB - OFPPT ISTA</p>
</footer>

<script>
    function toggleDropdown(event) {
        event.stopPropagation();
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropdown-btn') && !event.target.closest('.dropdown-btn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    function toggleTheme() {
        document.body.classList.toggle('purple-mode');
        const text = document.getElementById('themeText');
        if(document.body.classList.contains('purple-mode')) {
            text.textContent = "LIGHT MODE";
        } else {
            text.textContent = "BURGUNDY MODE";
        }
    }

    function filterModules(category, event) {
        const tabs = document.querySelectorAll('.filter-tab');
        tabs.forEach(tab => tab.classList.remove('active'));
        event.target.classList.add('active');

        const cards = document.querySelectorAll('.module-card');
        cards.forEach(card => {
            if(category === 'all' || card.getAttribute('data-category') === category) {
                card.style.display = "flex";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>

</body>
</html>