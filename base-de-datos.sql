drop database IF EXISTS imprimete_acolor;
create database imprimete_acolor;
use imprimete_acolor;

create table categorias(
    ID int AUTO_INCREMENT PRIMARY KEY,
    DESCRIPCION varchar(100),
    NOMBRE varchar(100),
    CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UPDATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table agencias(
    ID int AUTO_INCREMENT PRIMARY KEY,
    NOMBRE varchar(200),
    CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UPDATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table clientes(
    ID int AUTO_INCREMENT PRIMARY KEY, 
    RUT int,
    NOMBRES varchar(200),  
    APELLIDOS varchar(200),
    TELEFONO int,
    CORREO varchar(100),
    CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UPDATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table emprendimientos(
    ID int AUTO_INCREMENT PRIMARY KEY,
    NOMBRE varchar(100), 
    WHATSAPP varchar(200),
    INSTAGRAM varchar(200),
    FACEBOOK varchar(200),
    PAGINA_WEB varchar(200),
    CLIENTE int,
    CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UPDATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    constraint fk_emprendimiento_cliente foreign key(CLIENTE) references clientes(ID)
);

create table direcciones(
    ID int AUTO_INCREMENT PRIMARY KEY,
    CIUDAD varchar(200),
    DIRECCION varchar(200),
    NUM_CASA int,
    DEPTO varchar(10),
    AGENCIA int,
    CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UPDATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    constraint fk_direcciones_agencia foreign key(AGENCIA) references agencias(ID)
);

create table productos(
    ID int AUTO_INCREMENT PRIMARY KEY,
    NOMBRE varchar(200),
    PRECIO int,
    CANTIDAD int,
    COSTO int,
    DESCRIPCION varchar(400),
    CATEGORIA int,
    CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UPDATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    constraint fk_productos_categoria foreign key(CATEGORIA) references categorias(ID)
);

create table fotos_productos(
    ID int AUTO_INCREMENT PRIMARY KEY,
    NOMBRE varchar(200),
    RUTA varchar(300),
    PRODUCTO int,
    CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UPDATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    constraint fk_fotos_productos foreign key(PRODUCTO) references productos(ID)
);