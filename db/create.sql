CREATE TABLE User (
        user_id INT NOT NULL AUTO_INCREMENT,  
        f_Name varchar(50) NOT NULL,
        l_Name varchar(50),
        email varchar(50),
        password varchar(255),
        PRIMARY KEY(user_id)
);

CREATE TABLE Restaurant (
        restaurant_id INT NOT NULL AUTO_INCREMENT,
        name varchar(50) NOT NULL,
        description text NOT NULL,
        location varchar(100) NOT NULL,
        menu text,
        hours text,
        PRIMARY KEY(restaurant_id)
);

CREATE TABLE Review (
        review_id INT NOT NULL AUTO_INCREMENT,  
        user_id INT NOT NULL,
        restaurant_id INT NOT NULL,
        title varchar(20) NOT NULL,
        comment text NOT NULL,
        rating INT NOT NULL,
        PRIMARY KEY(review_id),
        FOREIGN KEY(user_id) REFERENCES User(user_id),
        FOREIGN KEY(restaurant_id) REFERENCES Restaurant(restaurant_id)
);

