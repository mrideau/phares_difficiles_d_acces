CREATE DATABASE route_des_phares;
USE route_des_phares;
CREATE TABLE phares_difficiles_d_acces
(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_phare INT,
    image VARCHAR (500) NOT NULL,
    nom_phare VARCHAR(64) NOT NULL,
    acces_phare VARCHAR(300) NOT NULL,
    localisation VARCHAR(200) NOT NULL,
    creation VARCHAR(128) NOT NULL,
    etat VARCHAR(100),
    fonction VARCHAR(100),
    lien VARCHAR(100)
);
ALTER TABLE phares_difficiles_d_acces MODIFY membre BOOLEAN NOT NULL;
TRUNCATE phares_difficiles_d_acces;
INSERT INTO phares_difficiles_d_acces(id_phare, image, nom_phare, acces_phare, localisation, creation, etat, fonction, lien, membre) VALUES
('4', 'https://www.routedesphares.qc.ca/fr/img/phare-04.jpg', 'Île Bicquette / Bas-Saint-Laurent', 'L\'île Bicquette est une Réserve nationale de faune. Il est donc interdit d\'y débarquer.\nVous pourrez toutefois voir le phare en naviguant dans le secteur. Par beau temps, il est aussi possible d\'obtenir une vue éloignée du phare à partir du haut du pic Champlain au Parc national du Bic.', 'Métis sur mer', 'Établi en 1874 reconstruit en 1909', NULL, NULL, NULL, TRUE),
('6', 'https://www.routedesphares.qc.ca/fr/img/phare-06.jpg', 'Pointe-de-Mitis / Gaspésie', 'Le phare situé à Métis-sur-Mer est difficilement accessible puisqu\'il se trouve au bout d\'une route privée. Par contre, à partir de la rue Beach, il est possible d\'obtenir unbeau point de vue.', 'Métis sur mer', 'Établi en 1874 reconstruit en 1909', NULL, 'Aide à la navigation', NULL, FALSE),
('14', 'https://www.routedesphares.qc.ca/fr/img/phare-12.jpg', 'Cap Blanc / Gaspésie', 'Le phare est entouré par des terrains privés. Il est donc difficile d\'y accéder.', 'Percé', 'Établi en 1874', NULL, NULL, NULL, FALSE),
('16', 'https://www.routedesphares.qc.ca/fr/img/phare-16.jpg', 'Port-Daniel-Ouest / Gaspésie', 'Le phare est entouré par des terrains privés. Il est donc difficile d\'y accéder.', 'Port-Daniel-Gascons', '1907', NULL, NULL, NULL, FALSE),
('21', 'https://www.routedesphares.qc.ca/fr/img/phare-21.jpg', 'Cap au Saumon / Charlevoix', '', 'Saint Siméon', 'Établi en 1894 reconstruit en 1955', 'Actif', NULL, NULL, FALSE),
('27', 'https://www.routedesphares.qc.ca/fr/img/phare-27.jpg', 'Île aux Oeufs / Côte-Nord', 'L\'île aux Oeufs n\'est accessible que par bateau. Par contre, il est possible d\'aperçevoir l\'île et son phare en empruntant un petit chemin de terre entre le km 886 et 887 avant d\'arriver au village de Pointe-aux-Anglais.\nCoordonnées : ', 'Pointe-aux-Anglais (Ville de Port-Cartier)', 'Établi en 1871 reconstruit en 1955', 'Automatisé en 1970', NULL, NULL, FALSE),
('28', 'https://www.routedesphares.qc.ca/fr/img/phare-28.jpg', 'Île du Grand Caouis / Côte-Nord', '', 'Rivière-Pentecôte', 'Établi 1927', 'Actif', NULL, NULL, FALSE),
('24', 'https://www.routedesphares.qc.ca/fr/img/phare-24.jpg', 'Île Rouge / Charlevoix', '', 'Situé sur l\'Île Rouge, à 12 km au large de Tadoussac, au milieu du fleuve Saint-Laurent', 'Établi en 1848', 'Actif', NULL, NULL, FALSE),
('29', 'https://www.routedesphares.qc.ca/fr/img/phare-29.jpg', 'Île du Corossol / Côte-Nord', '', 'Situé sur l\'Île du Corossol, au large de Sept-Îles', 'Établi en 1874\nPhare actuel 1956', 'Désactivé en 1985', NULL, 'https://www.facebook.com/groups/iles.corrossol/', FALSE),
('38', 'https://www.routedesphares.qc.ca/fr/img/phare-38.jpg', 'Cap-de-la-Table / Anticosti', '', 'Baie du Renard', 'Établi en 1919 automatisé en 1970', NULL, NULL, NULL, FALSE),
('39', 'https://www.routedesphares.qc.ca/fr/img/phare-39.jpg', 'Escarpement Bagot / Anticosti', '', 'Pointe du Sud', 'Établi en 1871\nReconstruit en 1912', 'Automatisé en 1963', NULL, NULL, FALSE),
('45', 'https://www.routedesphares.qc.ca/fr/img/phare-45.jpg', 'Rocher aux Oiseaux / Îles de la Madeleine', '', 'Grosse-Île', 'Établi 1870 reconstruit en 1967', 'Automatisé en 1988', NULL, NULL, FALSE);

INSERT INTO phares_difficiles_d_acces(id_phare, image, nom_phare, acces_phare, localisation, creation, etat, fonction, lien, membre) VALUES
('00', 'https://assets.afcdn.com/recipe/20180706/80427_w1024h768c1cx1944cy2592.jpg', 'Miam', '', 'Bretagne', 'Année', NULL, NULL, NULL, FALSE);
SELECT * FROM phares_difficiles_d_acces;