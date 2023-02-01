create DATABASE lii;

CREATE TABLE profile
(
    p_id int AUTO_INCREMENT PRIMARY KEY NOT NULL,  
    pro_name text,
    pro_pic VARCHAR(300)
);

    create table story
    (   id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
        image VARCHAR(300),
        caption text,
        p_id INT,
        FOREIGN KEY(p_id) REFERENCES profile(p_id)
    );
