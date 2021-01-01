 CREATE TABLE usuarios(
    id          int(255) AUTO_INCREMET not null,
    nombre      varchar(100) not null,
    apellido    varchar(100) not null
    email       varchar(255) not null,
    password    varchar(255) not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
 );

 CREATE TABLE categorias(
   id       int(255) AUTO_INCREMET not null,
   nombre   varchar(100) not null,
   CONSTRAINT pk_categorias PRIMARY KEY(id)
 );

 CREATE TABLE entradas(
   id             int(255) AUTO_INCREMET not null,
   usuario_id     int(255) not null, 
   categoria_id   int(255) not null,
   titulo         varchar(255) not null,
   descripcion    MEDIUMTEXT,
   fecha          date not null,
   CONSTRAINT pk_entradas PRIMARY KEY(id),
   CONSTRAINT fk_entrada_usuario FOREING KEY(usuario_id) REFERENCES usuarios(id),
   CONSTRAINT fk_entrada_categoria FOREING KEY(categoria_id) REFERENCES categorias(id)
 );