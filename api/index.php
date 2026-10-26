<?php
/**
 * Portfolio — ISTA NTIC Tanger
 * Développement Digital — 2ème Année
 * Fichier unique PHP + HTML + CSS + JS
 */

declare(strict_types=1);

/* ============================================================
   1. CONFIGURATION
   ============================================================ */
$student = [
    'name'     => 'Ton Nom Complet',
    'title'    => 'Étudiante en Développement Digital',
    'school'   => 'ISTA NTIC Tanger',
    'level'    => '2ème Année',
    'bio'      => 'Étudiante passionnée par le développement web et les nouvelles technologies. J\'aime créer des interfaces modernes, élégantes et performantes.',
    'email'    => 'ton.email@example.com',
    'phone'    => '+212 6 00 00 00 00',
    'github'   => 'https://github.com/ton-username',
    'linkedin' => 'https://linkedin.com/in/ton-username',
    'photo'    => 'assets/img/profile.jpg',
];

$modules = [
    ['icon' => '🌐', 'title' => 'Développement Web Front-End', 'desc' => 'HTML5, CSS3, JavaScript, Bootstrap, responsive design', 'skills' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Tailwind']],
    ['icon' => '⚙️', 'title' => 'Développement Back-End', 'desc' => 'PHP, MySQL, POO, MVC, API REST', 'skills' => ['PHP', 'MySQL', 'POO', 'MVC', 'API REST']],
    ['icon' => '🗄️', 'title' => 'Bases de Données', 'desc' => 'Conception, modélisation et requêtes SQL avancées', 'skills' => ['MERISE', 'SQL', 'MySQL', 'phpMyAdmin']],
    ['icon' => '⚛️', 'title' => 'Frameworks JavaScript', 'desc' => 'React.js, composants, hooks, state management', 'skills' => ['React', 'Hooks', 'Router', 'Redux']],
    ['icon' => '📱', 'title' => 'Développement Mobile', 'desc' => 'Applications mobiles cross-platform', 'skills' => ['React Native', 'Flutter']],
    ['icon' => '🎨', 'title' => 'UI/UX Design', 'desc' => 'Figma, maquettage, prototypage, ergonomie', 'skills' => ['Figma', 'Maquettage', 'Prototypage']],
    ['icon' => '🔧', 'title' => 'Gestion de Projet', 'desc' => 'Méthodes agiles, Git, GitHub, travail en équipe', 'skills' => ['Git', 'GitHub', 'Scrum', 'Trello']],
    ['icon' => '🛡️', 'title' => 'Sécurité Web', 'desc' => 'Bonnes pratiques, authentification, protection', 'skills' => ['Sessions', 'Hachage', 'XSS/CSRF']],
];

/**
 * قراءة صور الدروس من مجلد uploads
 */
function getLessons(string $dir = 'uploads'): array
{
    $lessons = [];
    if (!is_dir($dir)) {
        return $lessons;
    }
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $files = @scandir($dir);
    if ($files === false) {
        return $lessons;
    }
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, $allowed, true)) {
            $lessons[] = [
                'file' => $dir . '/' . $file,
                'name' => pathinfo($file, PATHINFO_FILENAME),
            ];
        }
    }
    sort($lessons);
    return $lessons;
}

$lessons = getLessons(__DIR__ . '/uploads');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de <?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?> — Étudiante en Développement Digital à ISTA NTIC Tanger">
    <title><?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?> | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* ===== Reset & Variables ===== */
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --accent: #ec4899;
            --bg: #0f172a;
            --bg-alt: #1e293b;
            --text: #e2e8f0;
            --text-muted: #94a3b8;
            --card: rgba(30, 41, 59, 0.7);
            --border: rgba(148, 163, 184, 0.15);
            --radius: 18px;
            --shadow: 0 10px 40px rgba(0, 0, 0, 0.35);
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container { max-width: 1180px; margin: 0 auto; padding: 0 20px; }

        /* ===== Navbar ===== */
        .navbar {
            position: fixed; top: 0; left: 0; right: 0; z-index: 100;
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            transition: background 0.3s;
        }
        .nav-inner { display: flex; justify-content: space-between; align-items: center; height: 70px; }
        .logo { font-size: 1.5rem; font-weight: 700; color: var(--text); text-decoration: none; }
        .logo span { color: var(--primary); }
        .nav-links { display: flex; gap: 28px; list-style: none; }
        .nav-links a {
            color: var(--text-muted); text-decoration: none; font-weight: 500; font-size: 0.95rem;
            position: relative; transition: color 0.3s;
        }
        .nav-links a::after {
            content: ''; position: absolute; bottom: -6px; left: 0; width: 0; height: 2px;
            background: var(--primary); transition: width 0.3s;
        }
        .nav-links a:hover { color: var(--text); }
        .nav-links a:hover::after { width: 100%; }
        .menu-toggle { display: none; background: none; border: none; color: var(--text); font-size: 1.6rem; cursor: pointer; }

        /* ===== Hero ===== */
        .hero {
            min-height: 100vh; display: flex; align-items: center; padding-top: 70px;
            background: radial-gradient(circle at 20% 20%, rgba(99, 102, 241, 0.15), transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(236, 72, 153, 0.12), transparent 50%);
        }
        .hero-inner { display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: center; }
        .tag { display: inline-block; padding: 6px 16px; background: rgba(99, 102, 241, 0.15); border-radius: 50px; color: var(--primary); font-size: 0.9rem; margin-bottom: 20px; }
        .hero h1 { font-size: clamp(2.2rem, 5vw, 3.6rem); font-weight: 700; margin-bottom: 12px; line-height: 1.15; }
        .gradient { background: linear-gradient(135deg, var(--primary), var(--accent)); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .hero h2 { font-size: 1.2rem; font-weight: 400; color: var(--text-muted); margin-bottom: 20px; }
        .bio { color: var(--text-muted); margin-bottom: 30px; max-width: 520px; }
        .hero-btns { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 24px; }
        .btn { display: inline-block; padding: 13px 28px; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s; }
        .btn-primary { background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: #fff; box-shadow: 0 6px 20px rgba(99, 102, 241, 0.35); }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 10px 28px rgba(99, 102, 241, 0.55); }
        .btn-outline { border: 2px solid var(--border); color: var(--text); }
        .btn-outline:hover { border-color: var(--primary); background: rgba(99, 102, 241, 0.1); }
        .hero-info { display: flex; gap: 20px; color: var(--text-muted); font-size: 0.95rem; flex-wrap: wrap; }

        .hero-img { display: flex; justify-content: center; }
        .img-wrapper {
            width: 320px; height: 320px; border-radius: 50%; padding: 6px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            animation: float 6s ease-in-out infinite;
        }
        .img-wrapper img { width: 100%; height: 100%; border-radius: 50%; object-fit: cover; border: 4px solid var(--bg); }
        @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-18px); } }

        /* ===== Sections ===== */
        .section { padding: 90px 0; }
        .section-alt { background: var(--bg-alt); }
        .section-title { font-size: clamp(1.8rem, 4vw, 2.6rem); text-align: center; margin-bottom: 12px; }
        .section-title span { color: var(--primary); }
        .section-sub { text-align: center; color: var(--text-muted); margin-bottom: 50px; }

        /* ===== About ===== */
        .about-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; }
        .card { padding: 30px; border-radius: var(--radius); border: 1px solid var(--border); transition: transform 0.3s, border-color 0.3s; }
        .glass { background: var(--card); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); }
        .card h3 { margin-bottom: 10px; color: var(--primary); }
        .card p { color: var(--text-muted); }
        .card:hover { transform: translateY(-6px); border-color: var(--primary); }

        /* ===== Modules ===== */
        .modules-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; }
        .module-card {
            padding: 28px; border-radius: var(--radius); background: var(--card);
            border: 1px solid var(--border); transition: all 0.35s; position: relative; overflow: hidden;
        }
        .module-card::before {
            content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: left 0.4s;
        }
        .module-card:hover::before { left: 0; }
        .module-card:hover { transform: translateY(-8px); border-color: var(--primary); box-shadow: var(--shadow); }
        .module-icon { font-size: 2.4rem; margin-bottom: 14px; }
        .module-card h3 { margin-bottom: 8px; font-size: 1.1rem; }
        .module-card p { color: var(--text-muted); font-size: 0.92rem; margin-bottom: 16px; }
        .tags { display: flex; flex-wrap: wrap; gap: 8px; }
        .tag-skill { padding: 4px 12px; border-radius: 50px; background: rgba(99, 102, 241, 0.15); color: var(--primary); font-size: 0.78rem; font-weight: 500; }

        /* ===== Gallery ===== */
        .gallery { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 18px; }
        .gallery-item {
            position: relative; border-radius: var(--radius); overflow: hidden; cursor: pointer;
            border: 1px solid var(--border); background: var(--card); aspect-ratio: 4/3;
        }
        .gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; display: block; }
        .gallery-item:hover img { transform: scale(1.08); }
        .gallery-item figcaption {
            position: absolute; bottom: 0; left: 0; right: 0; padding: 10px 14px;
            background: linear-gradient(transparent, rgba(0,0,0,0.85));
            font-size: 0.85rem; opacity: 0.95;
        }
        .empty-state { text-align: center; padding: 40px; border: 2px dashed var(--border); border-radius: var(--radius); color: var(--text-muted); }
        .empty-state code { background: var(--bg); padding: 2px 8px; border-radius: 6px; color: var(--primary); }

        /* ===== Contact ===== */
        .contact-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; }
        .contact-card {
            display: flex; flex-direction: column; align-items: center; text-align: center;
            padding: 30px 20px; border-radius: var(--radius); background: var(--card);
            border: 1px solid var(--border); text-decoration: none; color: var(--text);
            transition: all 0.3s;
        }
        .contact-card span { font-size: 2rem; margin-bottom: 10px; }
        .contact-card strong { color: var(--primary); margin-bottom: 4px; }
        .contact-card p { color: var(--text-muted); font-size: 0.85rem; word-break: break-all; }
        .contact-card:hover { transform: translateY(-6px); border-color: var(--primary); }

        /* ===== Lightbox ===== */
        .lightbox {
            display: none; position: fixed; inset: 0; z-index: 999;
            background: rgba(0,0,0,0.9); justify-content: center; align-items: center; padding: 20px;
        }
        .lightbox.active { display: flex; animation: fadeIn 0.3s; }
        .lightbox img { max-width: 92%; max-height: 88vh; border-radius: 12px; }
        .lightbox-close { position: absolute; top: 24px; right: 32px; font-size: 2.5rem; color: #fff; cursor: pointer; line-height: 1; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        /* ===== Footer ===== */
        .footer { padding: 30px 0; text-align: center; border-top: 1px solid var(--border); color: var(--text-muted); font-size: 0.9rem; }
        .footer .muted { font-size: 0.8rem; margin-top: 6px; color: #64748b; }

        /* ===== Reveal ===== */
        .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; transition-delay: var(--delay, 0s); }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        /* ===== Responsive ===== */
        @media (max-width: 900px) {
            .hero-inner { grid-template-columns: 1fr; text-align: center; gap: 40px; }
            .hero-img { order: -1; }
            .hero-btns, .hero-info { justify-content: center; }
            .nav-links {
                position: fixed; top: 70px; right: -100%; flex-direction: column;
                background: var(--bg-alt); width: 240px; height: calc(100vh - 70px);
                padding: 30px; gap: 22px; transition: right 0.35s;
            }
            .nav-links.active { right: 0; }
            .menu-toggle { display: block; }
            .img-wrapper { width: 240px; height: 240px; }
        }
    </style>
</head>
<body>

<header class="navbar">
    <div class="container nav-inner">
        <a href="#home" class="logo"><?= htmlspecialchars(explode(' ', $student['name'])[0], ENT_QUOTES, 'UTF-8') ?><span>.</span></a>
        <nav>
            <ul class="nav-links">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#modules">Modules</a></li>
                <li><a href="#lessons">Démos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <button class="menu-toggle" aria-label="Menu">☰</button>
    </div>
</header>

<!-- HERO -->
<section id="home" class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <p class="tag">👋 Bienvenue sur mon portfolio</p>
            <h1>Salut, je suis <span class="gradient"><?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?></span></h1>
            <h2><?= htmlspecialchars($student['title'], ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="bio"><?= htmlspecialchars($student['bio'], ENT_QUOTES, 'UTF-8') ?></p>
            <div class="hero-btns">
                <a href="#modules" class="btn btn-primary">Voir mes modules</a>
                <a href="#lessons" class="btn btn-outline">Voir les démos</a>
            </div>
            <div class="hero-info">
                <span>🎓 <?= htmlspecialchars($student['school'], ENT_QUOTES, 'UTF-8') ?></span>
                <span>📚 <?= htmlspecialchars($student['level'], ENT_QUOTES, 'UTF-8') ?></span>
            </div>
        </div>
        <div class="hero-img">
            <div class="img-wrapper">
                <img src="<?= htmlspecialchars($student['photo'], ENT_QUOTES, 'UTF-8') ?>"
                     alt="Photo de profil"
                     onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=<?= urlencode($student['name']) ?>&size=400&background=6366f1&color=fff&bold=true'">
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">À propos <span>de moi</span></h2>
        <p class="section-sub">Étudiante passionnée en développement digital</p>
        <div class="about-grid">
            <div class="card glass reveal">
                <h3>🎯 Mon objectif</h3>
                <p>Devenir développeuse full-stack et créer des applications web modernes, performantes et accessibles.</p>
            </div>
            <div class="card glass reveal">
                <h3>💡 Mes qualités</h3>
                <p>Curiosité, rigueur, créativité, esprit d'équipe et volonté d'apprendre chaque jour.</p>
            </div>
            <div class="card glass reveal">
                <h3>🚀 Mes passions</h3>
                <p>Le code propre, le design élégant, les nouvelles technologies et les projets open-source.</p>
            </div>
        </div>
    </div>
</section>

<!-- MODULES -->
<section id="modules" class="section section-alt">
    <div class="container">
        <h2 class="section-title">Mes <span>Modules</span></h2>
        <p class="section-sub">Programme officiel — Développement Digital (2ème année)</p>
        <div class="modules-grid">
            <?php foreach ($modules as $i => $m): ?>
                <article class="module-card reveal" style="--delay: <?= $i * 0.05 ?>s">
                    <div class="module-icon"><?= $m['icon'] ?></div>
                    <h3><?= htmlspecialchars($m['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p><?= htmlspecialchars($m['desc'], ENT_QUOTES, 'UTF-8') ?></p>
                    <div class="tags">
                        <?php foreach ($m['skills'] as $s): ?>
                            <span class="tag-skill"><?= htmlspecialchars($s, ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- LESSONS -->
<section id="lessons" class="section">
    <div class="container">
        <h2 class="section-title">Démos <span>des cours</span></h2>
        <p class="section-sub">Captures et exercices réalisés en cours</p>

        <?php if (empty($lessons)): ?>
            <div class="empty-state">
                <p>📸 Aucune image pour le moment. Placez vos captures dans le dossier <code>uploads/</code>.</p>
            </div>
        <?php else: ?>
            <div class="gallery">
                <?php foreach ($lessons as $lesson): ?>
                    <figure class="gallery-item reveal" onclick="openLightbox('<?= htmlspecialchars($lesson['file'], ENT_QUOTES, 'UTF-8') ?>')">
                        <img src="<?= htmlspecialchars($lesson['file'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($lesson['name'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                        <figcaption><?= htmlspecialchars($lesson['name'], ENT_QUOTES, 'UTF-8') ?></figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section section-alt">
    <div class="container">
        <h2 class="section-title">Me <span>Contacter</span></h2>
        <p class="section-sub">N'hésitez pas à me joindre</p>
        <div class="contact-grid">
            <a href="mailto:<?= htmlspecialchars($student['email'], ENT_QUOTES, 'UTF-8') ?>" class="contact-card reveal">
                <span>📧</span><strong>Email</strong><p><?= htmlspecialchars($student['email'], ENT_QUOTES, 'UTF-8') ?></p>
            </a>
            <a href="tel:<?= htmlspecialchars($student['phone'], ENT_QUOTES, 'UTF-8') ?>" class="contact-card reveal">
                <span>📞</span><strong>Téléphone</strong><p><?= htmlspecialchars($student['phone'], ENT_QUOTES, 'UTF-8') ?></p>
            </a>
            <a href="<?= htmlspecialchars($student['github'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" class="contact-card reveal">
                <span>💻</span><strong>GitHub</strong><p>Mes projets</p>
            </a>
            <a href="<?= htmlspecialchars($student['linkedin'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" class="contact-card reveal">
                <span>🔗</span><strong>LinkedIn</strong><p>Mon profil</p>
            </a>
        </div>
    </div>
</section>

<!-- LIGHTBOX -->
<div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
    <span class="lightbox-close" onclick="closeLightbox(event)">&times;</span>
    <img id="lightbox-img" src="" alt="Aperçu">
</div>

<footer class="footer">
    <div class="container">
        <p>© <?= date('Y') ?> <?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?> — ISTA NTIC Tanger</p>
        <p class="muted">Fait avec ❤️ en PHP, HTML, CSS & JS</p>
    </div>
</footer>

<script>
/* ===== Menu Mobile ===== */
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');
if (menuToggle && navLinks) {
    menuToggle.addEventListener('click', () => navLinks.classList.toggle('active'));
    navLinks.querySelectorAll('a').forEach(link =>
        link.addEventListener('click', () => navLinks.classList.remove('active'))
    );
}

/* ===== Navbar au scroll ===== */
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if (navbar) {
        navbar.style.background = window.scrollY > 50
            ? 'rgba(15, 23, 42, 0.95)'
            : 'rgba(15, 23, 42, 0.75)';
    }
});

/* ===== Reveal on scroll ===== */
if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
} else {
    document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));
}

/* ===== Lightbox ===== */
function openLightbox(src) {
    const lb = document.getElementById('lightbox');
    const img = document.getElementById('lightbox-img');
    if (!lb || !img) return;
    img.src = src;
    lb.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox(e) {
    const lb = document.getElementById('lightbox');
    if (!lb) return;
    if (e && e.target !== lb && !e.target.classList.contains('lightbox-close')) return;
    lb.classList.remove('active');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
        const lb = document.getElementById('lightbox');
        if (lb && lb.classList.contains('active')) {
            lb.classList.remove('active');
            document.body.style.overflow = '';
        }
    }
});

/* ===== Smooth scroll ===== */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        const target = document.querySelector(href);
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});
</script>
</body>
</html>