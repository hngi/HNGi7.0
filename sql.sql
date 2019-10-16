CREATE TABLE interns (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(128) not null,
    email varchar(128) not null,
    phone_no varchar(15) not null,
    link_to_portfolio varchar(1000) not null,
    link_to_cv varchar(128) not null,
    years_of_experience varchar(128) not null,
    interest varchar(128) not null,
    current_location varchar(128) not null,
    employment_status varchar(128) not null,
    about varchar(1000) not null,
    timestamp varchar(1000) not null
);
