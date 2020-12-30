# SENTENCIAS EN SQL #

# Crear tabla #
CREATE TABLE usuarios(
    id          int(11),
    nombre      varchar(100),
    apellido    varchar(100),
    email       varchar(100),
    password    varchar(100)
);

# mostrar tablas: show tables; #
# mostrar estructura de table: desc /-nombre de la tabla-/; #

# Eliminar tabla #
drop table usuarios;

# Restricciones de integridad: not null, null, default, AUTO_INCREMENT, #
CREATE TABLE usuarios(
    id          int(11) AUTO_INCREMENT,
    nombre      varchar(100) not null,
    apellido    varchar(100) default 'Apellido por defecto',
    email       varchar(100) not null,
    password    varchar(100),
    CONSTRAINT pk_usuarios PRIMARY KEY(id) #Defino clave primaria#
);