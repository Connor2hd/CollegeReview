CREATE TABLE Reviews
(
ReviewID int IDENTITY(1,1) PRIMARY KEY,
CollegeID int,
UserID int,
Author varchar(30),
Main varchar(500),
ScoreOne int,
ScoreTwo int,
ScoreThree int,
FOREIGN KEY (CollegeID) REFERENCES College_Info(CollegeID)
)

INSERT INTO Reviews (CollegeID, UserID, Author, Main, ScoreOne, ScoreTwo, ScoreThree)
VALUES (1,1,'Test User','Sample Review',3,4,5)

Select * From Reviews

drop table reviews

CREATE TABLE Users
(
UserID int IDENTITY(1,1) PRIMARY KEY,
Username varchar(20),
UserPassword varchar(20),
UserEmail varchar(20),
UserFirst varchar(20),
UserLast varchar(20)
)

INSERT INTO Users(Username, UserPassword, UserEmail)
VALUES ('SampleUser', 'testpassword', 'test@hotmail.com')

Select * from Users

drop table users
