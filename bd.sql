DROP TABLE `technique-projet`;
CREATE TABLE `oeuvre` (
  `IdTechnique` int(11) NOT NULL,
  `IdProjet` int(11) NOT NULL,
PRIMARY KEY (IdTechnique, IdProjet),
    FOREIGN KEY (IdTechnique) REFERENCES technique(Id),
    FOREIGN KEY (IdProjet) REFERENCES projet(Id)
 
) ENGINE=innoDB DEFAULT CHARSET=utf8;


INSERT INTO `projet` (Nom, Description, Annee, Detail, Type) VALUES
("trait d'union", 'Journal étudiant du Collège de Maisonneuve', 2019, "Projet réalisé en collaboration");
