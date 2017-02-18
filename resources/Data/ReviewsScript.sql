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

INSERT INTO Reviews (ReviewID, CollegeID, UserID, Author, Main, ScoreOne, ScoreTwo, ScoreThree)
VALUES (1,1,1,'Test User','Sample Review',3,4,5)

Select * From Reviews

drop table reviews