/* Axel Lárusson - SQL gagnagrunnur */
BEGIN TRANSACTION;
CREATE TABLE "Stodvar" (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`title`	TEXT NOT NULL,
	`1man`	INTEGER,
	`3man`	INTEGER,
	`6man`	INTEGER,
	`12man`	INTEGER,
	`staerd`	INTEGER,
	`stadur`	TEXT NOT NULL,
	`hoptimar`	INTEGER,
	`postnr`	INTEGER NOT NULL,
	`ot-man-fim`	TEXT,
	`ot-fos`	TEXT,
	`ot-lau`	TEXT,
	`ot-sun`	TEXT,
	`lt-man-fim`	TEXT,
	`lt-fos`	TEXT,
	`lt-lau`	TEXT,
	`lt-sun`	TEXT
);
INSERT INTO `Stodvar` VALUES (1,'World Class - Laugar',11430,31190,54590,79990,7500,'Laugar, Reykjavik',25,105,'06:00','06:00','08:00','08:00','23:30','23:30','22:00','20:00');
INSERT INTO `Stodvar` VALUES (2,'World Class - Egilsholl',11430,31190,54590,79990,2400,'Egilsholl, Reykjavik',25,112,'06:00','06:00','08:00','10:00','22:30','20:30','16:30','16:00');
INSERT INTO `Stodvar` VALUES (3,'World Class - Hafnarfjordur',11430,31190,54590,79990,700,'Hafnarfjordur',25,220,'06:00','06:00','08:00','10:00','22:30','20:30','16:30','14:00');
INSERT INTO `Stodvar` VALUES (4,'World Class - HR',11430,31190,54590,79990,200,'Haskoli Reykjavik, Reykjavik',25,101,'24/7','24/7','24/7','24/7','24/7','24/7','24/7','24/7');
INSERT INTO `Stodvar` VALUES (5,'World Class - Kopavogur',11430,31190,54590,79990,700,'Smaratorg, Kopavogur',25,201,'06:00','06:00','08:00','Lokad','22:30','20:30','16:30','Lokad');
INSERT INTO `Stodvar` VALUES (6,'World Class - Kringlan',11430,31190,54590,79990,2000,'Kringlan, Reykjavik',25,103,'24/7','24/7','24/7','24/7','24/7','24/7','24/7','24/7');
INSERT INTO `Stodvar` VALUES (7,'World Class - Mosfellsbaer',11430,31190,54590,79990,700,'Mosfellsbaer',25,270,'06:00','06:00','08:00','08:00','21:30','21:30','19:00','19:00');
INSERT INTO `Stodvar` VALUES (8,'World Class - Seltjarnarnes',11430,31190,54590,79990,2000,'Seltjarnarnes',25,170,'06:00','06:00','08:00','08:00','22:30','22:30','20:00','20:00');
INSERT INTO `Stodvar` VALUES (9,'World Class - Ogurhvarf',11430,31190,54590,79990,1100,'Ogurhvarf, Kopavogur',25,203,'05:50','05:50','08:00','10:00','22:30','20:30','16:30','14:00');
INSERT INTO `Stodvar` VALUES (10,'Hress - Dalshraun',12990,26990,36990,71990,0,'Dalshraun, Hafnarfjordur',15,220,'05:30','05:30','08:00','09:00','21:30','20:00','16:00','15:00');
INSERT INTO `Stodvar` VALUES (11,'Hress - Asvellir',12990,26990,36990,71990,0,'Asvellir, Hafnarfjordur',15,221,'05:30','05:30','08:00','09:00','21:30','20:00','16:00','15:00');
INSERT INTO `Stodvar` VALUES (12,'Reebok Fitness - Holtagardar',6540,19620,36900,65400,0,'Holtagardar, Reykjavik',31,104,'05:45','05:45','08:00','09:00','22:00','21:00','17:00','16:00');
INSERT INTO `Stodvar` VALUES (13,'Reebok Fitness - Ogurhvarf',6540,19620,36900,65400,0,'Ogurhvarf, Kopavogur',31,203,'05:45','05:45','08:00','09:00','22:00','21:00','17:00','16:00');
INSERT INTO `Stodvar` VALUES (14,'Sporthusid - Reykjanesbaer',13900,29900,49900,78990,2000,'Reykjanesbaer',25,701,'05:50','05:50','08:00','10:00','22:00','21:00','18:00','17:00');
INSERT INTO `Stodvar` VALUES (15,'Sporthusid - Kopavogur	',13900,29900,49900,78990,7000,'Kopavogur',25,201,'05:50','05:50','08:00','09:00','23:30','22:30','19:00','22:30');
INSERT INTO `Stodvar` VALUES (16,'Hreyfing - Reykjavik',14900,39900,64900,97092,0,'Reykjavik',33,104,'06:00','06:00','08:00','09:00','22:00','21:00','17:00','17:00');
COMMIT;
