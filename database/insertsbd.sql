INSERT INTO `USERS` (`id`, `nom`, `email`, `password`, `admin`) VALUES (NULL, 'PepeAdmin', 'pepe@pepe.com', '12345678', '0');
INSERT INTO `USERS` (`id`, `nom`, `email`, `password`, `admin`) VALUES (NULL, 'PepeAdmin', 'pepeAdmin@biblio.com', '12345678', '1');


--llibres
INSERT INTO `LLIBRES` (`id`, `ISBN`, `titol`, `autor`, `genere`, `updated_at`, `created_at`)
VALUES (NULL, '8467062177', 'Las recetas verdes de MasterChef', 'Jordi', 'Cocina', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)

INSERT INTO `LLIBRES` (`id`, `ISBN`, `titol`, `autor`, `genere`, `updated_at`, `created_at`)
VALUES (NULL, '8467062137', 'Las recetas de MasterChef', 'Pepe', 'Cocina', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)