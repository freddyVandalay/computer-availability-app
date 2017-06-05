DROP TABLE IF EXISTS ComputerMap, ComputerStatus;

CREATE TABLE ComputerStatus (
	computer_id int AUTO_INCREMENT,
	mac_address VARCHAR(255),
	status VARCHAR(255),
	operating_system VARCHAR(255),
	time_stamp DATETIME,
	PRIMARY KEY (computer_id) 
);

CREATE TABLE ComputerMap (
	map_id int AUTO_INCREMENT,
	computer_id int NOT NULL,
	position_number int,
	PRIMARY KEY (map_id),
	FOREIGN KEY (computer_id) REFERENCES ComputerStatus (computer_id)
);