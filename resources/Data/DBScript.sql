CREATE TABLE College_Info
(
CollegeID int,
CollegeName nvarchar(40),
Province nvarchar(20),
City nvarchar(20),
YearFounded int,
ScoreOne int,
ScoreTwo int,
ScoreThree int,
PRIMARY KEY (CollegeID)
);

drop table college_info

Insert Into College_Info (CollegeID, CollegeName, Province, City, YearFounded, ScoreOne, ScoreTwo, ScoreThree)
Values (1, 'Niagara College', 'Ontario', 'Welland', 1967, 3, 4, 5);

select * from college_info