
-- It is not polite to yell at SQL
create table if not exists Stock (
    ID int unsigned not null auto_increment,
    Start datetime not null,
    Duration int unsigned not null, -- might need bigger object
    Region varchar(10) default null,
    Flex int unsigned,
    Price int unsigned,
    primary key (ID)
);

create table if not exists Requests (
    ID int unsigned not null auto_increment,
    Start datetime not null,
    Duration int unsigned not null,
    Location varchar(20) default null, -- Where the time will be spent
    Contact varchar(20) default null, -- Email/Phone Number
    primary key (ID)
);

create table if not exists Payments (
    ID int unsigned not null auto_increment,
    CardName varchar(20) not null,
    CardNum varchar(20) not null, -- this wouldn't be stored in plaintext on a real website
    TimeOfPurchase datetime not null,
    primary key (ID)
);

