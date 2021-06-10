INSERT INTO `users` (`id`, `nom`, `email`, `password`, `admin`) VALUES (NULL, 'PepeAdmin', 'pepe@pepe.com', '12345678', '0');
INSERT INTO `users` (`id`, `nom`, `email`, `password`, `admin`) VALUES (NULL, 'PepeAdmin', 'pepeAdmin@biblio.com', '12345678', '1');


--llibres
INSERT INTO `llibres` (`id`, `ISBN`, `titol`, `autor`, `genere`, `disponible` ,`updated_at`, `created_at`)
VALUES (NULL, '8467062177', 'Las recetas verdes de MasterChef', 'Jordi', 'Cocina', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `llibres` (`id`, `ISBN`, `titol`, `autor`, `genere`, `disponible` ,`updated_at`, `created_at`)
VALUES (NULL, '8467062137', 'Las recetas de MasterChef', 'Pepe', 'Cocina', NULL,CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO `prestecs` (`id`, `data`, `retornat`, `users_id`, `llibres_id`, `created_at`, `updated_at`) VALUES (NULL, '2021-06-11 09:36:56', "0" , '1', '2', NULL, NULL);