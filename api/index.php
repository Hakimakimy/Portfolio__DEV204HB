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
        'defaultImgs' => ['https://placehold.co/600x400/70264d/fff1f6?text=M201+Wireframe+Spec']
    ],
    [
        'id' => 'M202',
        'code' => 'M202',
        'title' => "Approche agile",
        'category' => 'management',
        'desc' => "Gestion de projet selon la méthodologie Scrum, planification des Sprints, backlog utilisateur et daily standups.",
        'techs' => ['Scrum', 'Trello', 'Jira', 'Kanban'],
        'defaultImgs' => [
            'https://placehold.co/600x400/70264d/fff1f6?text=M202+Scrum+Board',
            'https://placehold.co/600x400/a84d75/fff1f6?text=Sprint+Planning',
            'https://placehold.co/600x400/5a2140/fff1f6?text=Backlog+User'
        ]
    ],
    [
        'id' => 'M203',
        'code' => 'M203',
        'title' => "Intégration web",
        'category' => 'frontend',
        'desc' => "Création d'interfaces web modernes, responsive design avec HTML5, CSS3, JavaScript ES6+ et frameworks CSS.",
        'techs' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Tailwind'],
        'defaultImgs' => ['https://placehold.co/600x400/70264d/fff1f6?text=M203+Integration+CSS']
    ],
    [
        'id' => 'M204',
        'code' => 'M204',
        'title' => "Développement web dynamique",
        'category' => 'backend',
        'desc' => "Conception d'applications web serveur sécurisées avec PHP, Laravel, Node.js, Express, POO, architecture MVC et MySQL.",
        'techs' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'PDO'],
        'defaultImgs' => ['https://placehold.co/600x400/70264d/fff1f6?text=M204+Laravel+Backend']
    ],
    [
        'id' => 'M205',
        'code' => 'M205',
        'title' => "Développement front-end",
        'category' => 'frontend',
        'desc' => "Création de Single Page Applications (SPA) dynamiques avec React.js / Vue.js, gestion d'état (Redux/Context API) et API REST.",
        'techs' => ['React.js', 'Redux', 'REST API', 'Tailwind'],
        'defaultImgs' => ['https://placehold.co/600x400/70264d/fff1f6?text=M205+React+App']
    ],
    [
        'id' => 'M206',
        'code' => 'M206',
        'title' => "Création d'une application mobile",
        'category' => 'mobile',
        'desc' => "Développement mobile multiplateforme avec React Native / Flutter, intégration des composants natifs et consommation d'APIs.",
        'techs' => ['React Native', 'Flutter', 'Mobile UI', 'Expo'],
        'defaultImgs' => ['https://placehold.co/600x400/70264d/fff1f6?text=M206+Mobile+Screen']
    ],
    [
        'id' => 'M207',
        'code' => 'M207',
        'title' => "Sécurité d'un site web",
        'category' => 'management',
        'desc' => "Mise en œuvre des bonnes pratiques de cybersécurité, prévention OWASP (XSS, SQLi, CSRF), chiffrement et authentification JWT.",
        'techs' => ['OWASP', 'JWT', 'HTTPS', 'Encryption'],
        'defaultImgs' => ['https://placehold.co/600x400/70264d/fff1f6?text=M207+Security+Audit']
    ],
    [
        'id' => 'M208',
        'code' => 'M208',
        'title' => "Cloud & DevOps",
        'category' => 'mobile',
        'desc' => "Conteneurisation d'applications avec Docker, hébergement cloud, intégration/déploiement continu (CI/CD) et administration serveur.",
        'techs' => ['Docker', 'CI/CD', 'Git', 'Vercel/AWS'],
        'defaultImgs' => ['https://placehold.co/600x400/70264d/fff1f6?text=M208+Docker+DevOps']
    ],
    [
        'id' => 'M209',
        'code' => 'M209',
        'title' => "Projet de fin d'études (PFE)",
        'category' => 'backend',
        'desc' => "Projet de synthèse complet intégrant l'ensemble des compétences acquises durant la formation en Développement Digital.",
        'techs' => ['Full-Stack', 'Laravel/React', 'PFE', 'UML'],
        'defaultImgs' => ['https://placehold.co/600x400/70264d/fff1f6?text=M209+PFE+Dashboard']
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
            --bg-main: #ffffff;
            --hero-bg: radial-gradient(circle at center, #f9e6ee 0%, #ffffff 75%);
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
            --bg-main: #180812;
            --hero-bg: radial-gradient(circle at center, #2a0f20 0%, #180812 75%);
            --luxury-brown: #e07aa8;
            --luxury-brown-hover: #f095be;
            --accent-green: #f28ab2;
            --text-light: #fdf8fb;
            --text-muted: #d1b2c2;
            --card-bg: rgba(35, 12, 26, 0.95);
            --border-color: rgba(224, 122, 168, 0.3);
            --shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        *, *::before, *::after {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--bg-main);
            color: var(--text-light);
            margin: 0;
            overflow-x: hidden;
            min-height: 100vh;
            transition: background-color 0.4s ease, color 0.4s ease;
        }

        header {
            background: var(--card-bg);
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
            transition: background 0.4s ease, border-color 0.4s ease;
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
            background: rgba(199, 91, 135, 0.1);
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
            transition: 0.3s;
        }

        .theme-toggle-btn:hover {
            transform: translateY(-2px);
            filter: brightness(1.1);
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
            border-bottom: 1px solid var(--border-color);
            font-family: var(--font-code);
            font-size: 0.8rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-light);
            text-decoration: none;
        }

        .dropdown-content a:hover {
            background: rgba(199,91,135,0.15);
            color: var(--accent-green);
        }

        .hero {
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: var(--hero-bg);
            padding: 60px 20px 40px;
            text-align: center;
            transition: background 0.4s ease;
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
            color: var(--text-light);
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
        }

        .btn-secondary {
            background: var(--card-bg);
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
            background: var(--card-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 12px 5%;
            backdrop-filter: blur(10px);
            transition: background 0.4s ease;
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
            background: var(--card-bg);
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

        .stats-counter {
            font-size: 0.82rem;
            color: var(--text-muted);
            font-family: var(--font-code);
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

        .section-title p {
            color: var(--luxury-brown);
            font-family: var(--font-code);
            margin: 0;
            font-size: 0.9rem;
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
            box-shadow: var(--shadow);
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .module-card:hover {
            transform: translateY(-8px);
            border-color: var(--luxury-brown);
        }

        .module-header {
            padding: 22px 25px 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .module-code {
            font-family: var(--font-code);
            font-size: 0.75rem;
            color: var(--accent-green);
            background: rgba(201,79,130,0.1);
            padding: 3px 10px;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 8px;
            border: 1px solid var(--border-color);
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

        /* Upload Area المطابق للصورة تماماً */
        .exercise-upload-area {
            padding: 20px 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .area-title {
            font-size: 0.85rem;
            font-family: var(--font-code);
            color: var(--luxury-brown);
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .drop-zone {
            border: 2px dashed var(--border-color);
            border-radius: 12px;
            padding: 16px;
            text-align: center;
            background: rgba(255,255,255,0.02);
            cursor: pointer;
            transition: 0.3s;
            margin-bottom: 15px;
        }

        .drop-zone:hover {
            border-color: var(--luxury-brown);
            background: rgba(199,91,135,0.05);
        }

        .drop-zone i {
            font-size: 1.4rem;
            color: var(--luxury-brown);
            margin-bottom: 4px;
        }

        .drop-zone p {
            margin: 0;
            font-size: 0.78rem;
            color: var(--text-muted);
            font-family: var(--font-code);
        }

        .drop-zone span {
            color: var(--luxury-brown);
            font-weight: 600;
        }

        .file-input-hidden {
            display: none;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(65px, 1fr));
            gap: 8px;
            margin-top: 5px;
        }

        .gallery-item {
            position: relative;
            aspect-ratio: 1;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            cursor: pointer;
            background: #000;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
            opacity: 0.8;
        }

        .gallery-item-actions {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(90,33,64,0.75);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            opacity: 0;
            transition: 0.2s opacity;
        }

        .gallery-item:hover .gallery-item-actions {
            opacity: 1;
        }

        .action-btn {
            background: rgba(255,255,255,0.2);
            color: white;
            border: none;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 0.65rem;
            transition: 0.2s;
        }

        .action-btn:hover {
            background: var(--luxury-brown);
        }

        .action-btn.delete-btn:hover {
            background: #e74c3c;
        }

        .module-footer {
            padding: 15px 25px;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-atelier {
            color: var(--luxury-brown);
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            padding: 6px 14px;
            border-radius: 6px;
            font-family: var(--font-code);
            font-size: 0.78rem;
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

        /* Lightbox Modal */
        .lightbox-modal {
            display: none;
            position: fixed;
            z-index: 3000;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(20,5,12,0.92);
            backdrop-filter: blur(10px);
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .lightbox-img {
            max-width: 90%;
            max-height: 80vh;
            border-radius: 12px;
            border: 2px solid var(--luxury-brown);
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: 25px;
            right: 35px;
            color: white;
            font-size: 2.5rem;
            cursor: pointer;
        }

        footer {
            text-align: center;
            padding: 50px 20px;
            border-top: 1px solid var(--border-color);
            background: var(--card-bg);
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
                <i class="fa-solid fa-folder-open"></i> Repositories.exe ▼
            </button>
            <div id="myDropdown" class="dropdown-content">
                <?php foreach ($modules as $mod): ?>
                    <a href="https://github.com/Hakimakimy/Portfolio__DEV204HB" target="_blank">
                        <span>&gt; <?php echo $mod['code']; ?> <?php echo htmlspecialchars($mod['title']); ?></span>
                        <i class="fa-brands fa-github"></i>
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
        <a href="https://github.com/Hakimakimy/Portfolio__DEV204HB" target="_blank" class="btn-secondary"><i class="fa-brands fa-github"></i> GitHub Profile</a>
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
            <i class="fa-solid fa-images"></i> Total Exercises Preserved: <span id="totalExercisesCount" style="color:var(--luxury-brown); font-weight:bold;">0</span>
        </div>
    </div>
</div>

<section class="modules-section" id="modules">
    <div class="section-title">
        <h2>OFPPT 2nd Year Modules Showcase</h2>
        <p>// Track, upload and document your daily exercises & projects</p>
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

                <!-- منطقة رفع الصور والـ Drop Zone واضحة ومطابقة للصورة تماماً -->
                <div class="exercise-upload-area" data-module-id="<?php echo $mod['id']; ?>">
                    <div class="area-title">
                        <span><i class="fa-solid fa-camera"></i> Exercises Screenshots</span>
                        <span class="mod-count" style="font-size:0.78rem;">0 file(s)</span>
                    </div>
                    <div class="drop-zone" onclick="triggerFileInput('file-<?php echo $mod['id']; ?>')">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <p>Drag & Drop exercise photo or <span>Browse</span></p>
                    </div>
                    <input type="file" id="file-<?php echo $mod['id']; ?>" class="file-input-hidden" accept="image/*" multiple onchange="handleFiles('<?php echo $mod['id']; ?>', this.files)">
                    
                    <div class="gallery-grid" id="gallery-<?php echo $mod['id']; ?>">
                        <!-- سيتم تعبئتها أوتوماتيكياً عبر الـ JavaScript مع استحضار الصور الافتراضية -->
                    </div>
                </div>

                <div class="module-footer">
                    <a href="#modules" class="btn-atelier" onclick="alert('Module code: <?php echo $mod['code']; ?> | Status: Active & Secured')">
                        <i class="fa-solid fa-folder-open"></i> View Details
                    </a>
                    <span style="font-size:0.75rem; font-family:var(--font-code); color:var(--text-muted);">OFPPT DD 2026</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox-modal" id="lightboxModal" onclick="closeLightbox()">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-img" id="lightboxImg" alt="Aperçu">
</div>

<footer>
    <p>&copy; <?php echo date('Y'); ?> <span><?php echo htmlspecialchars($studentName); ?></span> | Portfolio DEV204HB - OFPPT ISTA</p>
</footer>

<script>
    // تضمين الصور الافتراضية لكل مودول لكي تظهر دائماً حتى عند الأستاذ، مع إمكانية إضافة صور جديدة من الحاسوب
    const defaultData = {
        <?php foreach ($modules as $mod): ?>
        "<?php echo $mod['id']; ?>": <?php echo json_encode($mod['defaultImgs']); ?>,
        <?php endforeach; ?>
    };

    let exercisesData = JSON.parse(localStorage.getItem('portfolio_exercises_v2')) || defaultData;

    document.addEventListener("DOMContentLoaded", () => {
        renderAllGalleries();
    });

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
            localStorage.setItem('portfolio_theme', 'purple');
        } else {
            text.textContent = "BURGUNDY MODE";
            localStorage.setItem('portfolio_theme', 'light');
        }
    }

    if(localStorage.getItem('portfolio_theme') === 'purple') {
        document.body.classList.add('purple-mode');
        document.getElementById('themeText').textContent = "LIGHT MODE";
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

    function triggerFileInput(id) {
        document.getElementById(id).click();
    }

    function handleFiles(moduleId, files) {
        if (!exercisesData[moduleId]) {
            exercisesData[moduleId] = [];
        }

        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    exercisesData[moduleId].push(e.target.result);
                    saveAndRender();
                }
                reader.readAsDataURL(file);
            }
        });
    }

    function deleteExercise(moduleId, index, event) {
        event.stopPropagation();
        if(exercisesData[moduleId]) {
            exercisesData[moduleId].splice(index, 1);
            saveAndRender();
        }
    }

    function saveAndRender() {
        localStorage.setItem('portfolio_exercises_v2', JSON.stringify(exercisesData));
        renderAllGalleries();
    }

    function renderAllGalleries() {
        let totalCount = 0;
        for (const moduleId in exercisesData) {
            const images = exercisesData[moduleId];
            const galleryEl = document.getElementById(`gallery-${moduleId}`);
            const areaEl = galleryEl ? galleryEl.closest('.exercise-upload-area') : null;
            const countEl = areaEl ? areaEl.querySelector('.mod-count') : null;

            if (galleryEl) {
                if (images && images.length > 0) {
                    totalCount += images.length;
                    if(countEl) countEl.textContent = `${images.length} file(s)`;
                    let html = '';
                    images.forEach((imgSrc, index) => {
                        html += `
                            <div class="gallery-item" onclick="openLightbox('${imgSrc}')">
                                <img src="${imgSrc}" alt="Exercise">
                                <div class="gallery-item-actions">
                                    <button class="action-btn" title="View"><i class="fa-solid fa-eye"></i></button>
                                    <button class="action-btn delete-btn" title="Delete" onclick="deleteExercise('${moduleId}', ${index}, event)"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        `;
                    });
                    galleryEl.innerHTML = html;
                } else {
                    if(countEl) countEl.textContent = `0 file(s)`;
                    galleryEl.innerHTML = `<div style="font-size:0.75rem; color:var(--text-muted); text-align:center; padding:5px; font-style:italic;">No files uploaded</div>`;
                }
            }
        }
        document.getElementById('totalExercisesCount').textContent = totalCount;
    }

    function openLightbox(imgSrc) {
        document.getElementById('lightboxImg').src = imgSrc;
        document.getElementById('lightboxModal').style.display = "flex";
    }

    function closeLightbox() {
        document.getElementById('lightboxModal').style.display = "none";
    }
</script>

</body>
</html>