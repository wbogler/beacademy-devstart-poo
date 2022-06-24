CREATE DATABASE db_store;

USE db_store;

CREATE TABLE tb_category(
    id INT(11) UUID NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description CARCHAR(100) NOT NULL);

INSERT INTO tb_category(name, description) VALUES 
('informática', 'Produtos de informática e acessórios para computadores'),
('Escritório', 'Canetas, cadernos, folhas e etc'),
('Eletrônicos', 'TVs, som portátil, geladeiras e etc');

CREATE TABLE tb_product(
    id int(11) not null primary key auto_increment,
    name varchar(30) not null,
    description varchar(100) not null,
    photo varchar(255) not null,
    valor float(5,2) not null,
    category_id int(11) not null
    quantity int(5) not null,
    created_at datetime not null);


