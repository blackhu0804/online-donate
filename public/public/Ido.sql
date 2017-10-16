-- 创建数据库
create database Ido;
-- 切换数据库
use Ido;

-- 1.user
create table user(
	id int not null auto_increment primary key,
	username varchar(50) not null,
	emaile varchar(50) not null,
	password varchar(50) not null,
	isadmin tinyint not null
);

-- 2.giftClass
create table giftClass(
	id int not null auto_increment primary key,
	name varchar(100) not null,
	expl text,
	img varchar(100) not null,
	user_num int,
	sum_money float,
	organization varchar(100),
	isend tinyint not null,
	time int
);

-- 3.giftInfo
create table giftInfo(
	id int not null auto_increment primary key,
	money float not null,
	content text,
	giftClass_id int not null,
	user_id int not null,
	time int
);