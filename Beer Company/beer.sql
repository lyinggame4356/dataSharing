DROP DATABASE IF EXISTS weeklybeer;

CREATE DATABASE weeklybeer;

USE weeklybeer;

CREATE TABLE beer(
  BeerId INT PRIMARY KEY AUTO INCREMENT ,
  name VARCHAR(54) NOT NULL,
  type VARCHAR(54) ,
  price FLOAT(6,4) ,
  number FLOAT(6,0),
  totalP FLOAT(10,4)
);

INSERT  INTO beer (name , type , price , number , totalP) VALUES(Ian,India Pale Ale,56.34,5,281.7);
