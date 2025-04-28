<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Professionnel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Polices Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@400;500;600;700&display=swap');
        
        /* Variables CSS */
        :root {
            --primary-color: #1a3a5f;
            --secondary-color: #2d5f8b;
            --accent-color: #107e7d;
            --text-color: #333;
            --text-light: #666;
            --light-bg: #f9fafb;
            --border-color: #e0e0e0;
            --highlight: #e8f0fe;
        }
        
        /* CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
            font-family: 'Roboto', sans-serif;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        
        /* Header Section */
        header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            border-bottom: 3px solid var(--primary-color);
            padding-bottom: 20px;
            position: relative;
        }
        
        .header-main {
            flex: 2;
        }
        
        .header-photo {
            flex: 1;
            text-align: right;
        }
        
        .profile-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid var(--primary-color);
            object-fit: cover;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: auto;
        }
        
        .profile-photo i {
            font-size: 48px;
            color: var(--primary-color);
        }
        
        header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.8em;
            color: var(--primary-color);
            margin-bottom: 5px;
            font-weight: 700;
        }
        
        header h2 {
            font-size: 1.5em;
            color: var(--secondary-color);
            font-weight: 500;
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        
        .contact-info p {
            margin: 5px 20px 5px 0;
            display: flex;
            align-items: center;
        }
        
        .contact-info i {
            margin-right: 8px;
            color: var(--accent-color);
        }
        
        /* Section Styling */
        section {
            margin-bottom: 30px;
        }
        
        section h3 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 8px;
            margin-bottom: 20px;
            font-size: 1.5em;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        section h3 i {
            margin-right: 10px;
            background-color: var(--primary-color);
            color: white;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 0.8em;
        }
        
        /* Experience and Education Items */
        .item {
            margin-bottom: 25px;
            position: relative;
        }
        
        .item:last-child {
            margin-bottom: 0;
        }
        
        .item-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-bottom: 8px;
        }
        
        .item-title {
            flex: 2;
        }
        
        .item-date {
            flex: 1;
            text-align: right;
        }
        
        .item h4 {
            color: var(--secondary-color);
            margin-bottom: 5px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.1em;
        }
        
        .item .company {
            font-weight: 500;
            color: var(--text-color);
        }
        
        .item .location {
            display: flex;
            align-items: center;
            color: var(--text-light);
            font-size: 0.9em;
            margin-bottom: 8px;
        }
        
        .item .location i {
            margin-right: 5px;
            color: var(--accent-color);
            font-size: 0.9em;
        }
        
        .item .date {
            color: var(--text-light);
            font-size: 0.9em;
            padding: 4px 10px;
            background-color: var(--highlight);
            border-radius: 15px;
            display: inline-block;
        }
        
        .item p {
            margin-top: 8px;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .item ul {
            margin-top: 8px;
            margin-left: 20px;
        }
        
        .item ul li {
            margin-bottom: 5px;
        }
        
        /* Timeline Style */
        .timeline-item {
            position: relative;
            padding-left: 30px;
        }
        
        .timeline-item:before {
            content: "";
            position: absolute;
            left: 0;
            top: 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: var(--accent-color);
            z-index: 1;
        }
        
        .timeline-item:after {
            content: "";
            position: absolute;
            left: 5px;
            top: 17px;
            width: 2px;
            height: calc(100% - 12px);
            background-color: var(--border-color);
        }
        
        .timeline-item:last-child:after {
            display: none;
        }
        
        /* Skills Section */
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .skill-category {
            margin-bottom: 20px;
        }
        
        .skill-category h4 {
            color: var(--secondary-color);
            margin-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }
        
        .skill-item {
            margin-bottom: 10px;
        }
        
        .skill-item .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        
        .skill-item .skill-level {
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .skill-item .skill-level .level {
            height: 100%;
            background-color: var(--accent-color);
        }
        
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .skill-badge {
            background-color: var(--highlight);
            border: 1px solid var(--accent-color);
            color: var(--accent-color);
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 0.9em;
            display: inline-flex;
            align-items: center;
        }
        
        .skill-badge i {
            margin-right: 5px;
            font-size: 0.9em;
        }
        
        /* Languages */
        .language-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            align-items: center;
        }
        
        .language-dots {
            display: flex;
            gap: 3px;
        }
        
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #e0e0e0;
        }
        
        .dot.active {
            background-color: var(--accent-color);
        }
        
        /* Two Column Layout */
        .two-column {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }
        
        /* Footer */
        footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            color: var(--text-light);
            font-size: 0.9em;
        }
        
        /* QR Code */
        .qr-code {
            text-align: center;
            margin-top: 20px;
        }
        
        .qr-placeholder {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8em;
            color: var(--text-light);
        }
        
        /* Print Styles */
        @media print {
            body {
                background-color: #fff;
                padding: 0;
                font-size: 12pt;
            }
            
            .container {
                box-shadow: none;
                padding: 0;
                max-width: 100%;
            }
            
            section h3 {
                page-break-after: avoid;
            }
            
            .item {
                page-break-inside: avoid;
            }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            
            header {
                flex-direction: column;
            }
            
            .header-photo {
                text-align: center;
                margin-bottom: 20px;
            }
            
            .profile-photo {
                margin: 0 auto;
            }
            
            .item-header {
                flex-direction: column;
            }
            
            .item-date {
                text-align: left;
                margin-top: 5px;
            }
            
            .two-column {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .skills-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<?php
// Définir les informations du CV
$nom = "Adrien Franto";
$titre = "Développeur Web Full Stack Senior";
$email = "radrienfranto@gmail.com";
$telephone = "+261 38 xx xx xx";
$adresse = "Fianarantsoa, Madagascar";
$linkedin = "linkedin.com/in/adrienfranto";
$github = "https://github.com/adrienfranto";
$site_web = "adrienfranto.fr";
$date_naissance = "15 mai 2002";
$nationalite = "Malagasy";

// Résumé professionnel
$resume = "Développeur Web Full Stack senior avec plus de 8 ans d'expérience dans la conception et le développement d'applications web performantes et scalables. Expert en PHP, Laravel, JavaScript et frameworks front-end modernes. Passionné par l'architecture logicielle, les bonnes pratiques de développement et la qualité du code. Expérience significative en gestion d'équipe et méthodologies Agile.";

// Expériences professionnelles
$experiences = [
    [
        "titre" => "Lead Développeur Full Stack",
        "entreprise" => "Tech Solutions International",
        "lieu" => "Paris",
        "date" => "Janvier 2020 - Présent",
        "description" => "Direction technique d'une équipe de 5 développeurs pour la création d'applications web SaaS pour le secteur financier.",
        "realisations" => [
            "Mise en place d'une architecture microservices avec Laravel et API REST",
            "Optimisation des performances ayant conduit à une amélioration de 40% du temps de chargement",
            "Implémentation de CI/CD avec GitHub Actions et Docker",
            "Migration d'une application monolithique vers une architecture moderne"
        ]
    ],
    [
        "titre" => "Développeur Web Full Stack",
        "entreprise" => "Agence Digitale Créative",
        "lieu" => "Lyon",
        "date" => "Juin 2017 - Décembre 2019",
        "description" => "Conception et développement de sites web et applications sur mesure pour des clients de divers secteurs.",
        "realisations" => [
            "Développement d'une plateforme e-commerce générant plus de 2M€ de CA annuel",
            "Création d'un CMS personnalisé basé sur Laravel pour un média d'information",
            "Intégration de systèmes de paiement et d'API tierces (Stripe, PayPal, HubSpot)"
        ]
    ],
    [
        "titre" => "Développeur PHP",
        "entreprise" => "StartUp Innovante",
        "lieu" => "Bordeaux",
        "date" => "Janvier 2015 - Mai 2017",
        "description" => "Développement backend d'une application de mise en relation professionnelle.",
        "realisations" => [
            "Conception de l'architecture backend avec PHP et MySQL",
            "Développement d'une API REST consommée par des applications mobiles",
            "Intégration de fonctionnalités temps réel avec WebSockets"
        ]
    ]
];

// Formation
$formations = [
    [
        "diplome" => "Master en Ingénierie Logicielle",
        "etablissement" => "École Supérieure d'Informatique",
        "lieu" => "Paris",
        "date" => "2013 - 2015",
        "description" => "Spécialisation en Développement Web et Architecture Logicielle. Projet de fin d'études: conception d'une plateforme collaborative pour développeurs."
    ],
    [
        "diplome" => "Licence en Informatique",
        "etablissement" => "Université de Lyon",
        "lieu" => "Lyon",
        "date" => "2010 - 2013",
        "description" => "Formation générale en informatique avec un accent sur la programmation et les bases de données."
    ]
];

// Certifications
$certifications = [
    [
        "nom" => "AWS Certified Developer - Associate",
        "organisme" => "Amazon Web Services",
        "date" => "2023",
        "expiration" => "2026"
    ],
    [
        "nom" => "Laravel Certification",
        "organisme" => "Laravel",
        "date" => "2022",
        "expiration" => null
    ],
    [
        "nom" => "Professional Scrum Master I (PSM I)",
        "organisme" => "Scrum.org",
        "date" => "2021",
        "expiration" => null
    ]
];

// Compétences
$competences = [
    "Langages de programmation" => [
        ["nom" => "PHP", "niveau" => 95],
        ["nom" => "JavaScript", "niveau" => 90],
        ["nom" => "TypeScript", "niveau" => 85],
        ["nom" => "HTML5/CSS3", "niveau" => 90],
        ["nom" => "SQL", "niveau" => 85]
    ],
    "Frameworks & Bibliothèques" => [
        ["nom" => "Laravel", "niveau" => 95],
        ["nom" => "Vue.js", "niveau" => 90],
        ["nom" => "React", "niveau" => 85],
        ["nom" => "Node.js", "niveau" => 80],
        ["nom" => "Bootstrap", "niveau" => 90],
        ["nom" => "Tailwind CSS", "niveau" => 85]
    ],
    "Outils & Technologies" => [
        ["nom" => "Git", "niveau" => 90],
        ["nom" => "Docker", "niveau" => 85],
        ["nom" => "CI/CD", "niveau" => 80],
        ["nom" => "RESTful API", "niveau" => 95],
        ["nom" => "AWS", "niveau" => 80],
        ["nom" => "Elasticsearch", "niveau" => 75]
    ]
];

// Langues
$langues = [
    ["nom" => "Français", "niveau" => 5, "description" => "Natif"],
    ["nom" => "Anglais", "niveau" => 5, "description" => "Courant (TOEIC: 950/990)"],
    ["nom" => "Espagnol", "niveau" => 3, "description" => "Intermédiaire"],
    ["nom" => "Allemand", "niveau" => 2, "description" => "Débutant"]
];

// Projets personnels
$projets = [
    [
        "nom" => "OpenSourceFramework",
        "description" => "Framework PHP léger pour le développement rapide d'applications web. +500 stars sur GitHub.",
        "lien" => "https://github.com/adrienfranto/opensourceframework"
    ],
    [
        "nom" => "DevToolkit",
        "description" => "Extension Chrome pour les développeurs, facilitant le débogage et l'optimisation des applications web.",
        "lien" => "chrome.google.com/webstore/devtoolkit"
    ]
];

// Intérêts
$interets = ["Développement open source", "Nouvelles technologies", "Intelligence artificielle", "Cyclisme", "Photographie"];

// Générer le QR Code (simulé)
$qr_code = true;

// Date de mise à jour
$date_maj = date("d/m/Y");
?>

<div class="container">
    <header>
        <div class="header-main">
            <h1><?php echo $nom; ?></h1>
            <h2><?php echo $titre; ?></h2>
            <div class="contact-info">
                <p><i class="fas fa-envelope"></i> <?php echo $email; ?></p>
                <p><i class="fas fa-phone"></i> <?php echo $telephone; ?></p>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo $adresse; ?></p>
                <p><i class="fab fa-linkedin"></i> <?php echo $linkedin; ?></p>
                <p><i class="fab fa-github"></i> <?php echo $github; ?></p>
                <p><i class="fas fa-globe"></i> <?php echo $site_web; ?></p>
            </div>
        </div>
        <div class="header-photo">
            <div class="profile-photo">
                
                <img src="/src/franto.png" alt="<?php echo $nom; ?>" class="profile-photo"> 
                
            </div>
        </div>
    </header>
    
    <section>
        <h3><i class="fas fa-user-tie"></i> Profil Professionnel</h3>
        <p><?php echo $resume; ?></p>
    </section>
    
    <div class="two-column">
        <div class="main-column">
            <section>
                <h3><i class="fas fa-briefcase"></i> Expérience Professionnelle</h3>
                <?php foreach ($experiences as $experience): ?>
                    <div class="item timeline-item">
                        <div class="item-header">
                            <div class="item-title">
                                <h4><?php echo $experience["titre"]; ?></h4>
                                <div class="company"><?php echo $experience["entreprise"]; ?></div>
                                <div class="location"><i class="fas fa-map-pin"></i> <?php echo $experience["lieu"]; ?></div>
                            </div>
                            <div class="item-date">
                                <span class="date"><i class="far fa-calendar-alt"></i> <?php echo $experience["date"]; ?></span>
                            </div>
                        </div>
                        <p><?php echo $experience["description"]; ?></p>
                        <?php if (isset($experience["realisations"]) && !empty($experience["realisations"])): ?>
                            <ul>
                                <?php foreach ($experience["realisations"] as $realisation): ?>
                                    <li><?php echo $realisation; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </section>
            
            <section>
                <h3><i class="fas fa-graduation-cap"></i> Formation</h3>
                <?php foreach ($formations as $formation): ?>
                    <div class="item timeline-item">
                        <div class="item-header">
                            <div class="item-title">
                                <h4><?php echo $formation["diplome"]; ?></h4>
                                <div class="company"><?php echo $formation["etablissement"]; ?></div>
                                <div class="location"><i class="fas fa-map-pin"></i> <?php echo $formation["lieu"]; ?></div>
                            </div>
                            <div class="item-date">
                                <span class="date"><i class="far fa-calendar-alt"></i> <?php echo $formation["date"]; ?></span>
                            </div>
                        </div>
                        <p><?php echo $formation["description"]; ?></p>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
        
        <div class="side-column">
            <section>
                <h3><i class="fas fa-info-circle"></i> Informations</h3>
                <div class="item">
                    <p><strong><i class="fas fa-birthday-cake"></i> Date de naissance:</strong> <?php echo $date_naissance; ?></p>
                    <p><strong><i class="fas fa-flag"></i> Nationalité:</strong> <?php echo $nationalite; ?></p>
                </div>
            </section>
            
            <section>
                <h3><i class="fas fa-certificate"></i> Certifications</h3>
                <?php foreach ($certifications as $certification): ?>
                    <div class="item">
                        <h4><?php echo $certification["nom"]; ?></h4>
                        <p><?php echo $certification["organisme"]; ?></p>
                        <p class="date">
                            <i class="far fa-calendar-check"></i> <?php echo $certification["date"]; ?>
                            <?php if ($certification["expiration"]): ?>
                                - <?php echo $certification["expiration"]; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </section>
            
            <section>
                <h3><i class="fas fa-language"></i> Langues</h3>
                <?php foreach ($langues as $langue): ?>
                    <div class="language-item">
                        <div>
                            <strong><?php echo $langue["nom"]; ?></strong>
                            <?php if (isset($langue["description"])): ?>
                                <span> - <?php echo $langue["description"]; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="language-dots">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <div class="dot <?php echo ($i <= $langue["niveau"]) ? 'active' : ''; ?>"></div>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
            
            <section>
                <h3><i class="fas fa-code-branch"></i> Projets Personnels</h3>
                <?php foreach ($projets as $projet): ?>
                    <div class="item">
                        <h4><?php echo $projet["nom"]; ?></h4>
                        <p><?php echo $projet["description"]; ?></p>
                        <p><i class="fas fa-link"></i> <a href="https://<?php echo $projet["lien"]; ?>" target="_blank"><?php echo $projet["lien"]; ?></a></p>
                    </div>
                <?php endforeach; ?>
            </section>
            
            <section>
                <h3><i class="fas fa-heart"></i> Centres d'Intérêt</h3>
                <div class="skills-list">
                    <?php foreach ($interets as $interet): ?>
                        <span class="skill-badge"><i class="fas fa-check-circle"></i> <?php echo $interet; ?></span>
                    <?php endforeach; ?>
                </div>
            </section>
            
            <?php if ($qr_code): ?>
            <div class="qr-code">
                <p><small>Scannez pour télécharger le CV</small></p>
                <div class="qr-placeholder">QR Code</div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <section>
        <h3><i class="fas fa-tools"></i> Compétences Techniques</h3>
        <div class="skills-container">
            <?php foreach ($competences as $categorie => $liste): ?>
                <div class="skill-category">
                    <h4><?php echo $categorie; ?></h4>
                    <?php foreach ($liste as $competence): ?>
                        <div class="skill-item">
                            <div class="skill-name">
                                <span><?php echo $competence["nom"]; ?></span>
                                <span><?php echo $competence["niveau"]; ?>%</span>
                            </div>
                            <div class="skill-level">
                                <div class="level" style="width: <?php echo $competence["niveau"]; ?>%"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <footer>
        <p>CV mis à jour le <?php echo $date_maj; ?> | <?php echo $nom; ?> | <?php echo $email; ?></p>
    </footer>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Script pour générer des animations ou interactions si nécessaire
    console.log('CV chargé avec succès');
    
    // Exemple d'ajout d'une animation simple sur les barres de compétences
    const skillBars = document.querySelectorAll('.skill-level .level');
    skillBars.forEach(bar => {
        const width = bar.style.width;
        bar.style.width = '0';
        setTimeout(() => {
            bar.style.transition = 'width 1s ease-in-out';
            bar.style.width = width;
        }, 300);
    });
});
</script>

</body>
</html>