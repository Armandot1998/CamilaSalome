create database camilasalome;
use camilasalome;

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
date_image timestamp not null,
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


CREATE TABLE IF NOT EXISTS volunteering (
id_volunteering INT AUTO_INCREMENT primary key,
names VARCHAR(100) NULL,
lastname VARCHAR(100) NULL,
id VARCHAR(100) NULL,
birthday DATE NULL,
nationality VARCHAR(100) NULL,
telephone VARCHAR(15) NULL,
email VARCHAR(100) NULL,
studies VARCHAR(100) NULL,
specialty VARCHAR(100) NULL,
place_work VARCHAR(100) NULL,
workloads VARCHAR(100) NULL,
reasons_vol LONGTEXT NULL,
activities  longtext,
time_vol VARCHAR(45) NULL,
states VARCHAR(1) NULL);