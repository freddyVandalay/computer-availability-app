UPDATE ComputerStatus SET status='logged_in' 
WHERE mac_address='00:16:3e:86:4a:62';

/*
CREATE TABLE ComputerStatus (
        computer_id int AUTO_INCREMENT,
        mac_address int,
        status VARCHAR(255),
        operating_system VARCHAR(255),
        time_stamp DATETIME,
        PRIMARY KEY (computer_id)
);
*/
