CREATE DATABASE loginfuncional;

CREATE TABLE usuarios
(
  id int primary key AUTO_INCREMENT,
  user varchar(24) not null,
  pass varchar(32) not null,
  email varchar(46) not null
);