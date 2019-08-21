create database CamilaSalome;
use CamilaSalome;

create table users (
id int auto_increment primary key,
email varchar(100) null,
password varchar(100));

create table image(
id_image int auto_increment primary key,
name varchar(250) not null);

create table gallery(
id_gallery int auto_increment primary key,
category varchar(255) not null,
id_image int not null,
title varchar(255) not null,
date_image timestamp not null ,
FOREIGN KEY (id_image) REFERENCES image(id_image)
);

create table blog(
id_blog int auto_increment primary key,
title varchar(250) not null,
author varchar(250) null,
date_blog timestamp not null,
id_image int not null,
content text not null,
FOREIGN KEY (id_image) REFERENCES image(id_image)
);
