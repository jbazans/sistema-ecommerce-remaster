CREATE TABLE PRODUCTO(
	codpro int not null AUTO_INCREMENT,
	nompro varchar(50) null,
	despro varchar(100) null,
	prepro number(6,2) null,
	estado int null,
	CONSTRAINT pk_producto
	PRIMARY KEY (codpro)
);

alter table PRODUCTO add rutimapro varchar(100) null;

INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Papel Crepe','Ideal para decoraci&oacute;n de trabajos escolares','14.99',1,'crepe.jpg')
,('Papel Bond A4','Papel ultra blanco de 180gr','9.99',1,'bonda4.jpg')
,('Colores Faber Castell','Caja de colores x 12 unid. + 2 de regalo','5.99',1,'colores12unid.jpg')
,('Ecolapices Faber Castell','Caja de ecolapices x 60 unid.','11.99',1,'ecolapices60unid.jpg')
,('Estuche lapices Faber Castell','Estuche de lapiceros de colores x 5 unid.','6.99',1,'lapiceros5unid.jpg')
,('Tempera Artesco 250 ml','Frasco de tempera Artesco de 250 ml','3.99',1,'temperaartesco.jpg')
,('Plastilina Norma','Caja con 12 barras plastilinas. 260 gr','5.99',1,'plastilinanorma.jpg')
,('Cuaderno Standford','Cuaderno cuadriculado Standford 100 hojas','3.49',1,'cuadernostandford.jpg');

CREATE TABLE USUARIO(
	codusu int not null AUTO_INCREMENT,
	nomusu varchar(50) ,
	apeusu varchar(50) ,
	emausu varchar(50) not null,
	pasusu varchar(20) not null,
	estado int not null,
	CONSTRAINT pk_usuario
	PRIMARY KEY (codusu)
);

INSERT INTO USUARIO (nomusu,apeusu,emausu,pasusu,estado)
VALUES ('Usuario','Demo','correo@example.com','123456',1);

create table PEDIDO(
	codped int not null AUTO_INCREMENT,
	codusu int not null,
	codpro int not null,
	fecped datetime not null,
	estado int not null,
	dirusuped varchar(50) not null,
	telusuped varchar(12) not null,
	PRIMARY KEY (codped)
);