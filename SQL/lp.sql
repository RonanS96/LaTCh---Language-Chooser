-- MySQL database tables for LaTCh.
-- Copy this script and paste it into a MySQL console or phpMyAdmin to create the tables.
-- The database must already be created before adding these tables.
-- Author: Ronan Smith, Date: 09/01/18.

CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
	email VARCHAR(255) UNIQUE NOT NULL,
	password VARCHAR(255) NOT NULL,
	firstName VARCHAR(255) NOT NULL,
	surname VARCHAR(255) NOT NULL,
	active ENUM('Y', 'N') NOT NULL,
	PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE admin (
	id INT NOT NULL AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	firstName VARCHAR(255) NOT NULL,
	surname VARCHAR(255) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE dBoard (
	id INT NOT NULL AUTO_INCREMENT,
	boardName VARCHAR(255) NOT NULL,
	PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE facts (
	id INT NOT NULL AUTO_INCREMENT,
	fact VARCHAR(255) NOT NULL,
	source VARCHAR(255),
	PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE paradigm (
	pName VARCHAR(100) UNIQUE NOT NULL,
	description VARCHAR(255) NOT NULL,
	PRIMARY KEY(pName)
) ENGINE=InnoDB;

CREATE TABLE language (
	id INT NOT NULL AUTO_INCREMENT,
	lName VARCHAR(255) NOT NULL,
	description VARCHAR(255) NOT NULL,
	year YEAR NOT NULL,
	mainParadigm VARCHAR(100) NOT NULL,
	highOrLow ENUM('High-Level', 'Low-Level'),
	FOREIGN KEY (mainParadigm) REFERENCES paradigm(pName),
	PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE threads (
	id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	content VARCHAR(500) NOT NULL,
	op INT,
	board INT,
	datePosted DATE,
	timePosted TIME,
	FOREIGN KEY (op) REFERENCES users(id),
	FOREIGN KEY (board) REFERENCES dBoard(id),
	PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE replies (
	id INT NOT NULL AUTO_INCREMENT,
	user VARCHAR(255),
	content VARCHAR(500),
	thread INT,
	FOREIGN KEY (thread) REFERENCES threads(id),
	PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE feedback (
	id INT NOT NULL AUTO_INCREMENT,
	nameOfSender VARCHAR(255),
	email VARCHAR(255),
	message VARCHAR(255),
	PRIMARY KEY(id)
) ENGINE=InnoDB;
