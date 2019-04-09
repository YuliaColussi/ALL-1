-- Jointure interne ou INNER JOIN sert à lier pluisieurs tables entre elles.
-- Cette commande retourne les enregistrements lorsqu'il y a au moins une ligne dans chaque colonne 
-- qui correspondent a la condition
SELECT * FROM nom_de_la_table INNER JOIN nom_de_la_table_2 ON condition;
-- OU
SELECT * FROM nom_de_la_table INNER JOIN nom_de_la_table_2 WHERE condition;

-- CROSS JOIN sert à croiser chaque lignes d'un tableau A avec les lignes d'un tablmeau B. Retourne le produit(*) de ces 2 tableau. En générant le commande CROSS JOIN est combinée 
-- avec lq commande WHERE pour filtrer les resultats qui respect certaine conditions.
SELECT * FROM nom_de_la_table CROSS JOIN nom_de_la_table_2;
--Alternative à la commande CROSS JOIN
SELECT * FROM nom_de_la_table, nom_de_la_table_2;

-- LEFT JOIN permet de lister tous les enregistrements de la table gauche meme si il n'y pas de
-- correspondances dans la 2eme table
SELECT * FROM nom_de_la_table LEFT JOIN nom_de_la_table_2 ON condition;
-- OU
SELECT * FROM nom_de_la_table LEFT OUTER JOIN nom_de_la_table_2 ON condition;

-- RIGHT JOIN permet de lister tous les inregistrements de la table droite meme si il n'y pas de correspondances dans la deuxieme table.
SELECT * FROM nom_de_la_table RIGHT JOIN nom_de_la_table_2 ON condition;
-- OU
SELECT * FROM nom_de_la_table RIGHT OUTER JOIN nom_de_la_table_2 ON condition;







