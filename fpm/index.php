<?php
	$experiences = [
		[
			"job" => "De Octobre 2015 à aujourd'hui : Devops (CDI), au sein de Top Chrono Innovation, Paris, éditeur de Jogg.in, réseau social des activités du running",
			"missions" => [
				[
					"tasksList" => [
						"Environnement de développement virtualisé et tests fonctionnels",
						"Gestionnaire de version Git et intégration continue",
						"Installation et configuration du déploiement continu",
						"Santé de la production: monitoring et backup",
						"Architecture et structure de communication client-serveur"
					],
					"technologies" => [
						"Behat, Docker, Gitlab, Datadog"
					]
				]
			]
		],
		[
			"job" => "De Avril 2015 jusqu'à Octobre 2015 : Lead Développeur (CDI), au sein de Devispresto, Paris, sites Habitatpresto.com, devis dans le bâtiment",
			"missions" => [
				[
					"tasksList" => [
						"Développement de fonctionnalités Backoffice",
						"Encadrement de membres juniors",
						"Développement des applications mobiles iOS et Android",
						"Refonte graphique du site principal"
					],
					"technologies" => [
						"Zend 1, Laravel, Less, Bootstrap, jQuery, Objective C, Java Android"
					]
				]
			]
		],
		[
			"job" => "De Août 2014 jusqu'à Mars 2015 : Développeur web (CDI), au sein de Key Performance Group, Paris, agence de développement de jeux concours",
			"missions" => [
				[
					"tasksList" => [
						"Plateforme SaaS de création de jeux concours en ligne",
						"Sites événementiels jeux concours et interfaces d'extraction de données"
					],
					"technologies" => [
						"Silex, MySQL, jQuery"
					]
				]
			]
		],
		[
			"job" => "De Mars 2011 jusqu'à Août 2014 : Développeur mobile (CDI), au sein d'Airweb, Saint Cloud, agence de développement de solutions mobiles",
			"missions" => [
				[
					"tasksList" => [
						"Conception et développement d'un site portail CMS",
						"Suivi de membres juniors de l'équipe",
						"Dév. API REST, Backoffices",
						"Coordination client-serveur des échanges de données temps réel",
					],
					"technologies" => [
						"Joomla!, Prestashop, MySQL, jQuery"
					]
				],
				[
					"tasksList" => [
						"Conception, développement et maintenance évolutive d'une quinzaine d'applications mobiles"
					],
					"technologies" => [
						"C# Windows Phone, C++ Qt, Objective C, jQuery"
					]
				]
			]
		]
	];
	$talentsList = [
		[
			"title" => "Compétences",
			"list" => [
				[
					"note" => 4,
					"name" => "Dév. Back, Front, mobile"
				],
				[
					"note" => 3,
					"name" => "Paradigmes de prog."
				],
				[
					"note" => 3,
					"name" => "Architecture de services"
				],
                [
                    "note" => 3,
                    "name" => "Automatisation, CI, CD"
                ],
				[
					"note" => 3,
					"name" => "Base de données"
				],
				[
					"note" => 2,
					"name" => "Gestion de production"
				]
			]
		],
		[
			"title" => "Outils",
			"list" => [
				[
					"note" => 4,
					"name" => "IDE développement"
				],
                [
                    "note" => 3,
                    "name" => "Virtualisation et containers"
                ],
                [
                    "note" => 3,
                    "name" => "Plateformes de versioning"
                ],
				[
					"note" => 3,
					"name" => "Apache/Nginx, serveurs Web"
				],
				[
					"note" => 3,
					"name" => "Frameworks PHP"
				],
				[
					"note" => 3,
					"name" => "Responsive design, grille"
				],
				[
					"note" => 2,
					"name" => "Réseau"
				],
				[
					"note" => 2,
					"name" => "Compilateurs de CSS, Less"
				]
			]
		],
		[
			"title" => "Méthodes et organisation",
			"list" => [
                [
                    "note" => 4,
                    "name" => "Auto-formation"
                ],
				[
					"note" => 3,
					"name" => "Rédaction de doc."
				],
				[
					"note" => 2,
					"name" => "Présentation, réunion"
				],
				[
					"note" => 2,
					"name" => "Méthode agile, scrum"
				],
				[
					"note" => 2,
					"name" => "Gestion de bugs"
				],
				[
					"note" => 1,
					"name" => "Base de connaissances"
				]
			]
		]
	];
?>
<html>
	<head>
		<title>Benoît OYEZ - CV</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="/css/style.css"/>
		<meta charset="utf-8"/>
	</head>
	<body>
		<div class="container" id="header">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<div id="name" class="column-bottom size-1">Benoît OYEZ</div>
				<div id="info1" class="column-bottom size-3"><img src="/images/icon_home.png" class="icon">37 rue Rouget de Lisle, 92130 Issy les Moulineaux</div>
				<div id="info2" class="size-3"><img src="/images/icon_person.png" class="icon">né en Janvier 1988, non fumeur, permis B</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6">
				<div id="heading" class="column-bottom pull-right size-2">Contacts :</div><div class="clearfix"></div>
				<div id="email" class="column-bottom pull-right size-3"><img src="/images/icon_email.png" class="icon">boyez@sfr.fr</div><div class="clearfix"></div>
				<div id="phone" class="pull-right size-3"><img src="/images/icon_phone.png" class="icon">06.13.76.00.22</div><div class="clearfix"></div>
			</div>
		</div>
		<div class="container" id="title">Software Craftsman</div>
		<div class="container" id="quote"><div id="quote-block"><blockquote>Donner plus de valeur au développement, plus tôt</blockquote></div></div>
		<div class="container">
			<div class="col-md-8 col-sm-8 col-xs-8 first-col">
				<div id="experiences">
					<div class="section" id="experiences">
						<div class="title">Expériences choisies</div>
					</div>
					<table class="table">
						<?php foreach($experiences as $experience) : ?>
							<tr>
								<td colspan="3" class="job">
									<?= $experience['job']; ?>
								</td>
							</tr>
							<tr>
								<td>
									<?php foreach($experience["missions"] as $mission) : ?>
										<div>
											<strong>Tâches</strong>
											<ul class="tasksList">
												<?php foreach($mission["tasksList"] as $task) : ?>
													<li><?= $task ?></li>
												<?php endforeach; ?>
											</ul>
										</div>
										<div>
											<strong>Technologies notables</strong>
											<ul class="technologies">
												<?php foreach($mission["technologies"] as $technology) : ?>
													<li><?= $technology ?></li>
												<?php endforeach; ?>
											</ul>
										</div>
									<?php endforeach; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4">
				<div id="talents">
					<?php foreach($talentsList as $talents) : ?>
						<div class="section talent-list">
							<div class="title"><?= $talents['title']; ?></div>
							<div class="list">
								<div class="row-table">
								<?php
								foreach($talents['list'] as $talent) : ?>
									<div class="col-md-6 col-sm-6 col-xs-6 talent-block">
										<div class="talent-container">
											<div class="stars"><!--
								<?php for($i = 0; $i < $talent['note']; $i++) : ?>
									--><img class="star" src="/images/star_complete.png"/><!--
								<?php endfor; ?>
								<?php for($i = $talent['note']; $i < 4; $i++) : ?>
									--><img class="star" src="/images/star_empty.png"/><!--
								<?php endfor; ?>
								--></div>
											<div class="talent"><?= $talent['name'];?></div>
										</div>
									</div>
								<?php
								endforeach;
								?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div id="formation" class="section">
					<div class="title">Formation</div>
					<table class="table">
						<tr>
							<td>2007-2010</td>
							<td><strong>Diplôme d'ingénieur informatique</strong> généraliste à Télécom Nancy (anciennement ESIAL), coloration Ingénierie Logicielle</td>
						</tr>
						<tr>
							<td>2005-2007</td>
							<td><strong>CPGE section MP,</strong> lycée Jean Bart, Dunkerque</td>
						</tr>
					</table>
					<div class="title">Anglais</div>
					<table class="table">
						<tr>
							<td>lu et écrit, pratique quotidienne</td>
						</tr>
						<tr>
							<td>oral, pratique courante</td>
						</tr>
						<tr>
							<td>Score de 870 au TOEIC</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="page-break"></div>
		<div class="container section">
			<div class="title">Chaîne de production de valeur</div>
			<iframe frameborder="0" style="width:100%;height:923px" src="https://www.draw.io/?chrome=0&lightbox=1&edit=https%3A%2F%2Fwww.draw.io%2F%23G0B4OdPCoyIx8tQjc1QS1OdTJnRnM&nav=1&db=0&od=0#G0B4OdPCoyIx8tQjc1QS1OdTJnRnM"></iframe>
		</div>
		<div class="container section">
			<div class="title">Mes plus</div>
			<ul>
				<li>Une expérience de construction d'une usine logicielle de production de valeur</li>
				<li>5 années en temps que Développeur dans différents contextes: mobile, frontend web, backend web</li>
				<li>Plusieurs expériences de transmission/sensibilisation d'autres membres de l'équipe</li>
				<li>Une sensibilisation à l'organisation agile en équipe (Scrum)</li>
				<li>Dynamisme, culture générale, humour</li>
			</ul>
		</div>
	</body>
</html>