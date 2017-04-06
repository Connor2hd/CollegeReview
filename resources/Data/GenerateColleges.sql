Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (2, 'Georgian College', 'Ontario', 'Barrie', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (3, 'Loyalist College', 'Ontario', 'Belleville', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (4, 'Fleming College', 'Ontario', 'Peterborough', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (5, 'St. Lawrence College', 'Ontario', 'Brockville, Cornwall, Kingston', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (6, 'Algonquin College', 'Ontario', 'Ottawa', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (7, 'La Cité collégiale', 'Ontario', 'Ottawa', 1990);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (8, 'Mohawk College', 'Ontario', 'Hamilton', 1966);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (9, 'Sheridan College', 'Ontario', 'Oakville, Brampton, Mississauga', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (10, 'Durham College', 'Ontatio', 'Oshawa, Whitby, Pickering', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (11, 'Centennial College', 'Ontario', 'Toronto', 1966);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (12, 'George Brown College', 'Ontario', 'Toronto', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (13, 'Humber College', 'Ontario', 'Toronto', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (14, 'Seneca College', 'Ontario', 'Toronto', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (15, 'Conestoga College', 'Ontario', 'Kitchener', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (16, 'Fanshawe College', 'Ontario', 'London, Simcoe, St. Thomas, Woodstock', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (17, 'Lambton College', 'Ontario', 'Sarnia', 1969);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (18, 'St. Clair College', 'Ontario', 'Windsor', 1966);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (19, 'Canadore College', 'Ontario', 'North Bay, Parry Sound', 1972);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (20, 'Sault College', 'Ontario', 'Sault Ste. Marie', 1965);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (21, 'Cambrian College', 'Ontario', 'Sudbury', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (22, 'Confederation College', 'Ontario', 'Thunder Bay', 1967);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (23, 'Collège Boréal', 'Ontario', 'Sudbury', 1995);
Insert into College_Info (CollegeID, CollegeName, Province, City, YearFounded) VALUES (24, 'Northern College', 'Ontario', 'Timmins', 1967);

select * from college_info

Alter table college_info
alter column City varchar(45);