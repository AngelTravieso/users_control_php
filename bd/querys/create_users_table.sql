CREATE TABLE usuarios(
	id SERIAL NOT NULL,
	name VARCHAR(50) NOT NULL,
	lastname VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	created_at TIMESTAMP,
	updated_at TIMESTAMP
);