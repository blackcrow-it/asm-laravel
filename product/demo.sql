CREATE DATABASE FLOWER_SHOP;

create table FLOWER (
   ID integer not null AUTO_INCREMENT,
   NAME varchar(255) not null,
   PRICE int not null,
   IMG varchar(255) not null,
   DETAIL varchar(255),
   primary key (ID)
);

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Tulips',15000, 'images/tulips.jpg', 'mô tả sản phẩm');

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Bouquet',10000, 'images/bouquet.jpg', 'mô tả sản phẩm');

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Roses',8000, 'images/roses.jpg', 'mô tả sản phẩm');

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Bouquet',23000, 'images/bouquet2.jpg', 'mô tả sản phẩm');

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Roses',16000, 'images/roses2.jpg', 'mô tả sản phẩm');

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Bridal Bouquet',55000, 'images/bridal-bouquet2.jpg', 'mô tả sản phẩm');

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Sunflower',31000, 'images/sunflower.jpg', 'mô tả sản phẩm');

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Bouquet',11000, 'images/', 'mô tả sản phẩm');

insert into FLOWER_SHOP (ID ,NAME ,PRICE , IMG , DETAIL)
values ( 'Hoa Speedwell',15000, 'images/speedwell.jpg', 'mô tả sản phẩm');

