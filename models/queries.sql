
create table users (
id int auto_increment,
name varchar(100) not null CHECK(LENGTH(myfield) > 0  ),
type ENUM('admin', 'customer') not null CHECK(LENGTH(myfield) > 0  ),

email varchar(100) not null CHECK(LENGTH(myfield) > 0  ),

password text not null CHECK(LENGTH(myfield) > 0  ),


`creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key (id)
);



create table appointments (
id int auto_increment,
service varchar(100) not null CHECK(LENGTH(myfield) > 0  ),
apt_date varchar(20) ,
apt_time varchar(20) ,
user_id int,
`creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key (id)
);
