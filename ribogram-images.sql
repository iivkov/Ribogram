CREATE TABLE images (
	id_image INT AUTO_INCREMENT,
	image VARCHAR(100) NOT NULL,
	image_info VARCHAR(100) NOT NULL,
	access VARCHAR(10) NOT NULL,
	id_user INT,
	CONSTRAINT images_pk PRIMARY KEY(id_image),
	CONSTRAINT images_fk_users FOREIGN KEY(id_user) REFERENCES users(id_user)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;