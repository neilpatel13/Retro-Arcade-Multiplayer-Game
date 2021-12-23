CREATE TABLE IF NOT EXISTS Points_History
(
    id int AUTO_INCREMENT PRIMARY KEY ,
    user_id int,
    point_change int,
    reason varchar(15) not null COMMENT 'The type of transaction that occurred',
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`))