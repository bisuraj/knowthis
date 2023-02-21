CREATE DATABASE knowthis;

USE knowthis;

CREATE TABLE Users (
  user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  user_type ENUM('rural', 'professional') NOT NULL,
  profile_picture VARCHAR(255),
  country VARCHAR(50),
  city VARCHAR(50),
  gender ENUM('male', 'female', 'other'),
  location VARCHAR(255),
  pincode INT(11)
);

CREATE TABLE Categories (
  category_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  category_name VARCHAR(50) NOT NULL
);

CREATE TABLE Questions (
  question_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id INT(11) UNSIGNED,
  category_id INT(11) UNSIGNED,
  question_title VARCHAR(255) NOT NULL,
  question_text TEXT NOT NULL,
  date_asked TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES Users(user_id),
  FOREIGN KEY (category_id) REFERENCES Categories(category_id)
);

CREATE TABLE Answers (
  answer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  question_id INT(11) UNSIGNED,
  user_id INT(11) UNSIGNED,
  answer_text TEXT NOT NULL,
  date_answered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (question_id) REFERENCES Questions(question_id),
  FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

CREATE TABLE Votes (
  vote_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id INT(11) UNSIGNED,
  question_id INT(11) UNSIGNED,
  answer_id INT(11) UNSIGNED,
  vote_type ENUM('upvote', 'downvote') NOT NULL,
  FOREIGN KEY (user_id) REFERENCES Users(user_id),
  FOREIGN KEY (question_id) REFERENCES Questions(question_id),
  FOREIGN KEY (answer_id) REFERENCES Answers(answer_id)
);

CREATE TABLE Blogs (
  blog_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id INT(11) UNSIGNED,
  blog_title VARCHAR(255) NOT NULL,
  blog_text TEXT NOT NULL,
  date_posted TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES Users(user_id),
  CHECK (user_type = 'professional')
);
