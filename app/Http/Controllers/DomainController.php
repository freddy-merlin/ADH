<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    private $sections = [
        'erp-fintech' => [
            'title' => 'ERP, Fintech & Digitalisation des services publics',
            'subtitle' => 'Solutions de gestion intégrée et innovation financière',
            'focus_label' => 'Excellence en',
            'heading' => 'Centralisez, automatisez, sécurisez',
            'description' => 'Nous concevons et intégrons des solutions de gestion sur mesure destinées aux entreprises, institutions et organisations financières. Nos solutions ERP (Enterprise Resource Planning) et Fintech permettent de centraliser, automatiser et sécuriser l\'ensemble des processus métiers : finance, comptabilité, facturation, paiements, ressources humaines, achats, ventes et pilotage décisionnel. Notre approche est orientée métier, évolutive et conforme aux exigences réglementaires locales et internationales.',
            'hero_image' => 'images/about/img6.png',
            
            'objectifs' => [
                'Centraliser les données et processus de l\'entreprise',
                'Optimiser la gestion financière et opérationnelle',
                'Réduire les tâches manuelles et les erreurs',
                'Améliorer la prise de décision grâce à des tableaux de bord fiables',
                'Sécuriser les transactions et les flux financiers'
            ],
            
            'benefices' => [
                'Vision globale et en temps réel de l\'activité',
                'Gain de productivité et réduction des coûts opérationnels',
                'Meilleure traçabilité et conformité réglementaire',
                'Interopérabilité avec les systèmes existants',
                'Solutions adaptées au contexte africain et sous-régional'
            ],
            
            'domaines_title' => ' Domaines et Solutions',
            'domaines' => [
                [
                    'titre' => 'ERP & Gestion intégrée',
                    'items' => [
                        'Comptabilité générale, analytique et budgétaire',
                        'Gestion des achats, contrats et fournisseurs',
                        'Gestion des ressources humaines et de la paie',
                        'Gestion des immobilisations',
                        'Tableaux de bord et reporting stratégique'
                    ],
                    'image' => 'images/about/about5.png'
                ],
                [
                    'titre' => 'Microsoft Dynamics 365',
                    'items' => [
                        'Finance & Operations',
                        'Customer Engagement (CRM)',
                        'Gestion des services et des workflows',
                        'Automatisation avec Power Automate',
                        'Applications métiers avec Power Apps'
                    ],
                    'image' => 'images/about/about5.png'
                ],
                [
                    'titre' => 'Fintech & Paiements digitaux',
                    'items' => [
                        'Paiements électroniques et mobile money',
                        'Intégration bancaire et trésorerie',
                        'Gestion des recettes et taxes',
                        'Portails de paiement pour services publics',
                        'Sécurisation et audit des flux financiers'
                    ],
                    'image' => 'images/about/about5.png'
                ],
                [
                    'titre' => 'Digitalisation des services publics',
                    'items' => [
                        'Portails usagers et e-services',
                        'Gestion électronique des dossiers',
                        'Workflow de traitement administratif',
                        'Suivi et traçabilité des demandes',
                        'Interconnexion entre administrations'
                    ],
                    'image' => 'images/about/about5.png'
                ]
            ],
            
            'livrables' => [
                'Cahier des charges fonctionnel et technique',
                'Architecture ERP / Fintech',
                'Développement et intégration de la solution',
                'Interfaces web et mobiles',
                'Tableaux de bord et rapports personnalisés',
                'Documentation et formation utilisateurs'
            ],
            
            'methodologie' => [
                'Analyse des processus métiers existants',
                'Co-construction avec les équipes métiers',
                'Développement agile et itératif',
                'Tests, déploiement et accompagnement',
                'Support et évolution continue'
            ],
            
            'cas_usage' => [
                'PME et grandes entreprises',
                'Institutions financières et microfinances',
                'Startups fintech',
                'Organisations publiques et parapubliques',
                'Projets de digitalisation financière'
            ],
            
            'cta_title' => 'Prêt à moderniser votre gestion ?',
            'cta_description' => 'Discutons de votre projet ERP ou Fintech et construisons ensemble la solution qui transformera votre organisation.'
        ],
        
        'ia-data' => [
            'title' => 'Intelligence artificielle & Data',
            'subtitle' => 'Transformez vos données en décisions intelligentes',
            'focus_label' => 'Innovation en',
            'heading' => 'L\'IA et la Data au service de votre performance',
            'description' => 'Nous accompagnons les organisations dans la valorisation stratégique de leurs données grâce à l\'intelligence artificielle (IA), à l\'analytique avancée et aux plateformes data modernes. Nos solutions permettent de transformer des volumes importants de données en insights exploitables, d\'automatiser des processus complexes et de soutenir la prise de décision intelligente. Nous intervenons aussi bien sur des projets IA appliquée aux entreprises que sur des projets de Data & IA pour le secteur public.',
            'hero_image' => 'images/about/img6.png',
            
            'objectifs' => [
                'Exploiter efficacement les données existantes',
                'Automatiser les analyses et processus décisionnels',
                'Anticiper les risques et opportunités',
                'Améliorer la performance opérationnelle',
                'Soutenir les décisions stratégiques par la data'
            ],
            
            'benefices' => [
                'Décisions basées sur des données fiables',
                'Amélioration de la performance et de la productivité',
                'Réduction des risques et des coûts',
                'Vision prospective et prédictive',
                'Solutions adaptées aux contextes locaux et sectoriels'
            ],
            
            'domaines_title' => '  Domaines d\'intervention',
            'domaines' => [
                [
                    'titre' => 'Data & Analytics',
                    'items' => [
                        'Collecte, structuration et gouvernance des données',
                        'Data warehouse & data lake',
                        'Tableaux de bord interactifs et BI',
                        'Indicateurs de performance (KPI)'
                    ],
                    'image' => 'images/about/about5.png'
                ],
                [
                    'titre' => 'Intelligence Artificielle',
                    'items' => [
                        'Machine Learning et modèles prédictifs',
                        'IA pour l\'aide à la décision',
                        'Traitement automatique du langage (NLP)',
                        'Analyse d\'images et de documents',
                        'Chatbots et assistants intelligents'
                    ],
                    'image' => 'images/about/about5.png'
                ],
                [
                    'titre' => 'IA appliquée aux métiers',
                    'items' => [
                        'Finance et gestion des risques',
                        'Énergie, eau et infrastructures',
                        'Santé et éducation',
                        'Administration publique et e-gouvernement',
                        'Service client et relation usagers'
                    ],
                    'image' => 'images/about/about5.png'
                ]
            ],
            
            'livrables' => [
                'Stratégie Data & IA',
                'Architecture data et IA',
                'Modèles et algorithmes IA',
                'Tableaux de bord décisionnels',
                'APIs et intégrations métiers',
                'Documentation et transfert de compétences'
            ],
            
            'methodologie' => [
                'Audit et cadrage data',
                'Identification des cas d\'usage à forte valeur',
                'Prototypage rapide (POC)',
                'Déploiement progressif et sécurisé',
                'Suivi, amélioration et maintenance'
            ],
            
            'cas_usage' => [
                'Prévision et planification',
                'Détection de fraude et d\'anomalies',
                'Optimisation des ressources',
                'Analyse des comportements usagers',
                'Pilotage de politiques publiques'
            ],
            
            'section_supplementaire' => [
                'titre' => '🛡️ Éthique, sécurité et conformité',
                'items' => [
                    'Protection des données personnelles',
                    'Explicabilité des modèles IA',
                    'Sécurité et gouvernance des données',
                    'Conformité réglementaire'
                ]
            ],
            
            'cta_title' => 'Exploitez la puissance de vos données',
            'cta_description' => 'Transformons ensemble vos données en avantage compétitif avec l\'IA et l\'analytique avancée.'
        ],
        
        'cybersecurite' => [
            'title' => 'Cybersécurité & Cyberdéfense',
            'subtitle' => 'Protéger les systèmes, sécuriser les données, garantir la confiance',
            'focus_label' => 'Sécurité avec',
            'heading' => 'Votre bouclier digital en Afrique',
            'description' => 'Nous accompagnons les entreprises, institutions publiques et organisations stratégiques dans la protection de leurs systèmes d\'information face aux menaces numériques. Nos solutions de cybersécurité et de cyberdéfense couvrent l\'ensemble du cycle de sécurité : prévention, détection, réponse aux incidents et résilience. Nous intervenons sur des environnements IT, Cloud, applicatifs et data, en tenant compte des exigences de continuité de service, de souveraineté numérique et de conformité réglementaire.',
            'hero_image' => 'images/about/img6.png',
            
            'objectifs' => [
                'Protéger les systèmes d\'information et les données sensibles',
                'Prévenir les cyberattaques et intrusions',
                'Détecter et répondre rapidement aux incidents de sécurité',
                'Garantir la continuité et la résilience des services',
                'Renforcer la confiance des usagers et partenaires'
            ],
            
            'benefices' => [
                'Réduction significative des risques cyber',
                'Protection des données stratégiques et personnelles',
                'Continuité des services critiques',
                'Conformité aux normes et réglementations',
                'Renforcement de la crédibilité institutionnelle'
            ],
            
            'domaines_title' => '🔐 Domaines d\'intervention',
            'domaines' => [
                [
                    'titre' => 'Gouvernance & Stratégie de sécurité',
                    'items' => [
                        'Stratégie de cybersécurité',
                        'Politique de sécurité des systèmes d\'information (PSSI)',
                        'Gestion des risques et audits de sécurité',
                        'Conformité réglementaire'
                    ],
                    'image' => 'images/about/about5.png'
                ],
                [
                    'titre' => 'Protection des systèmes',
                    'items' => [
                        'Sécurisation des infrastructures IT et Cloud',
                        'Sécurité des applications et des API',
                        'Gestion des identités et des accès (IAM)',
                        'Sécurité des données et chiffrement'
                    ],
                    'image' => 'images/about/about5.png'
                ],
                [
                    'titre' => 'Cyberdéfense & Résilience',
                    'items' => [
                        'Surveillance et détection des menaces',
                        'Réponse aux incidents et gestion de crise',
                        'Plans de continuité et de reprise d\'activité (PCA / PRA)',
                        'Tests d\'intrusion et audits techniques'
                    ],
                    'image' => 'images/about/about_3.png'
                ],
                [
                    'titre' => 'Sensibilisation & Formation',
                    'items' => [
                        'Formation des équipes techniques',
                        'Sensibilisation des utilisateurs',
                        'Simulations d\'attaques et exercices cyber'
                    ],
                    'image' => 'images/about/about5.png'
                ]
            ],
            
            'livrables' => [
                'Diagnostic de sécurité et analyse des risques',
                'PSSI et feuilles de route cyber',
                'Rapports d\'audit et recommandations',
                'Plans de continuité et de reprise',
                'Tableaux de bord de sécurité',
                'Rapports post-incident'
            ],
            
            'methodologie' => [
                'Évaluation des risques et du niveau de maturité',
                'Définition des priorités de sécurité',
                'Mise en œuvre progressive des mesures',
                'Tests, surveillance et amélioration continue',
                'Accompagnement long terme'
            ],
            
            'cas_usage' => [
                'Administrations publiques et collectivités',
                'Infrastructures critiques',
                'Institutions financières',
                'Entreprises et opérateurs numériques',
                'Projets de transformation digitale'
            ],
            
            'cta_title' => 'Sécurisez votre infrastructure dès maintenant',
            'cta_description' => 'Ne laissez pas les cybermenaces compromettre votre activité. Protégez vos systèmes avec nos solutions de cybersécurité.'
        ],
        
        'cloud-infrastructure' => [
            'title' => 'Cloud & Infrastructure',
            'subtitle' => 'Des fondations numériques performantes, sécurisées et évolutives',
            'focus_label' => 'Infrastructure par',
            'heading' => 'Modernisez vos infrastructures IT',
            'description' => 'Nous concevons, déployons et exploitons des infrastructures Cloud et IT hybrides permettant aux entreprises et aux administrations de disposer de systèmes fiables, sécurisés et hautement disponibles. Nos solutions s\'appuient sur des environnements Cloud public, privé ou hybride, intégrés aux infrastructures existantes, afin de garantir performance, résilience et maîtrise des coûts. Nous accompagnons également les projets de modernisation des infrastructures publiques.',
            'hero_image' => 'images/about/img6.png',
            
            'objectifs' => [
                'Moderniser les infrastructures IT',
                'Garantir la disponibilité et la performance des systèmes',
                'Sécuriser les données et les accès',
                'Optimiser les coûts d\'exploitation',
                'Soutenir la croissance et l\'innovation'
            ],
            
            'benefices' => [
                'Infrastructures évolutives et hautement disponibles',
                'Réduction des coûts matériels et opérationnels',
                'Amélioration de la performance des applications',
                'Sécurité renforcée et continuité de service',
                'Adaptation aux besoins métiers et réglementaires'
            ],
            
            'domaines_title' => '  Domaines d\'intervention',
            'domaines' => [
                [
                    'titre' => 'Cloud Computing',
                    'items' => [
                        'Cloud public, privé et hybride',
                        'Migration vers le Cloud',
                        'Architectures Cloud natives',
                        'Conteneurisation et orchestration'
                    ],
                    'image' => 'images/about/3.png'
                ],
                [
                    'titre' => 'Infrastructure IT',
                    'items' => [
                        'Serveurs, stockage et réseaux',
                        'Virtualisation et hyperconvergence',
                        'Datacenters et infrastructures souveraines',
                        'Haute disponibilité et reprise après sinistre'
                    ],
                    'image' => 'images/about/about5.png'
                ],
                [
                    'titre' => 'Exploitation & Services managés',
                    'items' => [
                        'Supervision et monitoring',
                        'Gestion des performances',
                        'Sauvegarde et restauration',
                        'Support et maintenance'
                    ],
                    'image' => 'images/about/img3.png'
                ]
            ],
            
            'livrables' => [
                'Schéma d\'architecture Cloud & Infrastructure',
                'Plan de migration et de modernisation',
                'Environnements Cloud opérationnels',
                'Documentation technique',
                'Procédures d\'exploitation et de sécurité'
            ],
            
            'methodologie' => [
                'Audit de l\'existant et diagnostic d\'infrastructure',
                'Définition de l\'architecture cible',
                'Migration progressive et sécurisée',
                'Tests de performance et de résilience',
                'Exploitation et optimisation continue'
            ],
            
            'cas_usage' => [
                'Administrations publiques et collectivités',
                'Entreprises privées et institutions financières',
                'Plateformes numériques et e-services',
                'Projets de digitalisation à grande échelle',
                'Infrastructures critiques'
            ],
            
            'cta_title' => 'Modernisez votre infrastructure',
            'cta_description' => 'Passez au Cloud et optimisez vos infrastructures IT pour plus de performance et de flexibilité.'
        ],
        
        'support-infogrance' => [
            'title' => 'Support & Infogérance',
            'subtitle' => 'La continuité et la performance de vos systèmes au quotidien',
            'focus_label' => 'Support par',
            'heading' => 'Votre partenaire opérationnel IT',
            'description' => 'Nous assurons le support technique et l\'infogérance de vos systèmes d\'information afin de garantir leur disponibilité, leur sécurité et leur performance. Nos équipes prennent en charge tout ou partie de l\'exploitation de vos infrastructures, applications et services numériques, vous permettant de vous concentrer pleinement sur votre cœur de métier. Nos services s\'adressent aussi bien aux entreprises privées qu\'aux administrations publiques.',
            'hero_image' => 'images/about/img6.png',
            
            'objectifs' => [
                'Garantir la disponibilité continue des systèmes',
                'Assurer une assistance rapide et efficace',
                'Prévenir les incidents et limiter les interruptions',
                'Optimiser l\'exploitation des infrastructures et applications',
                'Sécuriser les environnements numériques'
            ],
            
            'benefices' => [
                'Réduction des temps d\'arrêt et des incidents',
                'Assistance technique réactive et structurée',
                'Maîtrise des coûts d\'exploitation',
                'Amélioration de la performance globale',
                'Tranquillité opérationnelle et continuité de service'
            ],
            
            'domaines_title' => '  Domaines d\'intervention',
            'domaines' => [
                [
                    'titre' => 'Support utilisateurs',
                    'items' => [
                        'Assistance de niveau 1, 2 et 3',
'Gestion des incidents et demandes',
'Support applicatif et fonctionnel',
'Support sur site et à distance'
],
'image' => 'images/about/about5.png'
],
[
'titre' => 'Infogérance',
'items' => [
'Exploitation des infrastructures IT et Cloud',
'Supervision et monitoring 24/7',
'Gestion des mises à jour et correctifs',
'Sauvegarde, restauration et sécurité'
],
'image' => 'images/about/about5.png'
],
[
'titre' => 'Gestion des services IT',
'items' => [
'Mise en place de centres de services (Service Desk)',
'Gestion des SLA et indicateurs de performance',
'Reporting et tableaux de bord',
'Amélioration continue des services'
],
'image' => 'images/about/about5.png'
]
],'livrables' => [
            'Contrat de support et d\'infogérance',
            'Catalogue de services et niveaux de service (SLA)',
            'Procédures d\'exploitation et d\'escalade',
            'Rapports d\'intervention et de performance',
            'Tableaux de bord de suivi'
        ],
        
        'methodologie' => [
            'Analyse de l\'environnement et des besoins',
            'Définition des niveaux de service',
            'Mise en place des outils de support',
            'Exploitation et supervision continue',
            'Évaluation et optimisation régulière'
        ],
        
        'cas_usage' => [
            'Administrations publiques et collectivités',
            'Entreprises et institutions financières',
            'Plateformes numériques et e-services',
            'Infrastructures critiques',
            'Organisations multisites'
        ],
        
        'cta_title' => 'Confiez-nous votre exploitation IT',
        'cta_description' => 'Bénéficiez d\'un support réactif et d\'une infogérance professionnelle pour vos systèmes d\'information.'
    ],
    
    'formation' => [
        'title' => 'Formation & Certification',
        'subtitle' => 'Développer durablement les compétences numériques',
        'focus_label' => 'Formation avec',
        'heading' => 'Investissez dans vos talents',
        'description' => 'Nous concevons et déployons des programmes de formation et de certification destinés aux professionnels, aux organisations et aux institutions publiques souhaitant renforcer leurs compétences numériques et accompagner leur transformation digitale. Nos formations couvrent les domaines clés du numérique et s\'appuient sur des approches pédagogiques pratiques, certifiantes et orientées métier. Nous intervenons également dans le cadre de programmes nationaux ou financés par des bailleurs.',
        'hero_image' => 'images/about/img6.png',
        
        'objectifs' => [
            'Renforcer les compétences techniques et métiers',
            'Accompagner la transformation digitale des organisations',
            'Favoriser l\'autonomie et la montée en compétences des équipes',
            'Améliorer l\'employabilité et la performance professionnelle',
            'Structurer des parcours certifiants reconnus'
        ],
        
        'benefices' => [
            'Compétences opérationnelles immédiatement mobilisables',
            'Programmes adaptés aux besoins réels des métiers',
            'Valorisation des profils par la certification',
            'Amélioration de la performance des équipes',
            'Pérennisation des projets numériques'
        ],
        
        'domaines_title' => '  Domaines de formation',
        'domaines' => [
            [
                'titre' => 'Technologies & Systèmes',
                'items' => [
                    'Cloud computing et infrastructures',
                    'Cybersécurité et cyberdéfense',
                    'Administration systèmes et réseaux'
                ],
                'image' => 'images/about/about5.png'
            ],
            [
                'titre' => 'Data & Intelligence Artificielle',
                'items' => [
                    'Analyse de données et Business Intelligence',
                    'Intelligence artificielle et machine learning',
                    'Gouvernance et valorisation des données'
                ],
                'image' => 'images/about/about5.png'
            ],
            [
                'titre' => 'Solutions métiers & digitalisation',
                'items' => [
                    'ERP et solutions de gestion',
                    'Digitalisation des services publics',
                    'Gestion de projets numériques'
                ],
                'image' => 'images/about/about5.png'
            ],
            [
                'titre' => 'Compétences transverses',
                'items' => [
                    'Méthodes agiles et gestion de projets',
                    'Design thinking et innovation',
                    'Transformation digitale et conduite du changement'
                ],
                'image' => 'images/about/about5.png'
            ]
        ],
        
        'livrables' => [
            'Programmes et supports de formation',
            'Ateliers pratiques et études de cas',
            'Évaluations et certifications',
            'Rapports de formation',
            'Attestations et diplômes'
        ],
        
        'methodologie' => [
            'Analyse des besoins et du niveau des apprenants',
            'Parcours personnalisés et modulaires',
            'Apprentissage pratique et orienté cas réels',
            'Évaluations continues et finales',
            'Accompagnement post-formation'
        ],
        
        'cas_usage' => [
            'Administrations publiques et collectivités',
            'Entreprises et institutions financières',
            'Programmes nationaux de formation',
            'Projets financés par bailleurs',
            'Centres de formation et universités'
        ],
        
        'cta_title' => 'Formez vos équipes aux technologies de demain',
        'cta_description' => 'Investissez dans le développement des compétences avec nos programmes de formation certifiants.'
    ]
];

public function show($domain)
{
    if (!array_key_exists($domain, $this->sections)) {
        abort(404);
    }

    return view('domains.show', [
        'domain' => $domain,
        'sections' => $this->sections
    ]);
}
}