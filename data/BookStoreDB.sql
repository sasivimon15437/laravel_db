
CREATE TABLE Publisher
(
    PID  VARCHAR(10) PRIMARY KEY NOT NULL,
    Name VARCHAR(50)
);

CREATE TABLE  Books 
(
    BOOKID  VARCHAR(10) PRIMARY KEY NOT NULL,
    Title   VARCHAR(50),
    PID     VARCHAR(10),
    Price   DOUBLE,
    FOREIGN KEY (PID) REFERENCES Publisher(PID)
);


INSERT INTO Books(BOOKID,Title,PID,Price) VALUES('1001','Windows98','12',500);
INSERT INTO Books(BOOKID,Title,PID,Price) VALUES('1002','Office97','12',150);
INSERT INTO Books(BOOKID,Title,PID,Price) VALUES('1003','Java VS C++','5',250);
INSERT INTO Books(BOOKID,Title,PID,Price) VALUES('1004','Database','4',155);
INSERT INTO Books(BOOKID,Title,PID,Price) VALUES('1005','Netscape','4',490);
INSERT INTO Books(BOOKID,Title,PID,Price) VALUES('1006','C Algorithm','12',1000);
INSERT INTO Books(BOOKID,Title,PID,Price) VALUES('1007','Networking','4',1950);
INSERT INTO Books(BOOKID,Title) VALUES('1008','Digital Image');


INSERT INTO Publisher(PID,Name) VALUES('4','SE-Education');
INSERT INTO Publisher(PID,Name) VALUES('5','KTP COM And Consult');
INSERT INTO Publisher(PID,Name) VALUES('12','Microsoft');