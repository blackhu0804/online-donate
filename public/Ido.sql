-- 创建数据库
create database Ido;
-- 切换数据库
use Ido;

-- 1.user用户表
create table user(
	id int not null auto_increment primary key,
	username varchar(50) not null,
	email varchar(50) not null,
	password varchar(50) not null,
	integration int default 0,
	isadmin tinyint default 0
);

-- 2.giftClass项目
create table giftClass(
	id int not null auto_increment primary key,
	user_id int not null,
	name varchar(100) not null,
	img varchar(1000) not null,
	expl text not null,
	summary text not null,
	user_num int default 0,
	use_money int not null,
	sum_money int default 0,
	start_time int,
	end_time int,
	time_num int not null,
	isend tinyint default 0,
	is_end tinyint default 0
);

-- 3.giftInfo用户善心表
create table giftInfo(
	id int not null auto_increment primary key,
	giftClass_id int not null,
	money int not null,
	time int,
	content text,
	user_id int not null
);

-- 4.giftMarch项目进展报告
create table giftMarch(
	id int not null auto_increment primary key,
	giftClass_id int not null,
	time int,
	img varchar(1000),
	content text
);

-- 5.sum_history历史表
create table sum_history(
	id int not null auto_increment primary key,
	sum_money int default 0,
	sum_user int default 0
);

-- 6.certification实名认证表

create table certification(
	id int not null auto_increment primary key,
	name varchar(100) not null,
	ID_card varchar(100) not null,
	myPhone varchar(100) not null,
	location varchar(100) not null,
	user_id varchar(100) not null,
	bank_ID varchar(100) not null
);

-- 7.advert 广告表

create table advert(
	id int not null auto_increment primary key,
	img varchar(100) not null,
	name varchar(100) not null,
	url varchar(50) not null
);