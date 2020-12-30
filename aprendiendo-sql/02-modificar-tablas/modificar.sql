# RENOMBRAR TABLA #
ALTER TABLE usuarios RENAME TO usuarios_rename;

# RENOMBRAR COLUMNA #
ALTER TABLE     usuarios_rename CHANGE apellidos lastname varchar(100) null;

# CAMBIAR REESTRICCIONES DE COLUMNA #
ALTER TABLE usuarios_rename MODIFY lastanme char(50) not null;

# AGREGAR COLUMNA #
ALTER TABLE usuarios_rename  ADD website varchar(100) null;

# BORRAR COLUMNA #
ALTER TABLE usuarios_rename DROP website;

# AÑADIR RESTRICCION #
ALTER TABLE usuarios_rename ADD CONSTRAINT uq_eºmail UNIQUE(email);
