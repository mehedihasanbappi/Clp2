CREATE TABLE management_authority(emp_id int(15) PRIMARY KEY,name varchar(30),email varchar(30),address varchar(30),NID int(30) NOT null,phone varchar(20),joining_date date,post varchar(15),dept_id varchar(20),FOREIGN KEY (dept_id) REFERENCES department(dept_id)  );
CREATE TABLE department(dept_id varchar(30) PRIMARY KEY,dept_type varchar(30));
INSERT INTO department(dept_id,dept_type)VALUES
('AD_001','Advisor'),
('IT_002','Information_Technology'),
('CT_003','Contact'),
('GD_001','Guide');
INSERT INTO management_authority(emp_id,name,email,address,phone,joining_date,post,dept_id,salary)VALUES 
(999,'Hriday Sarkar','hsarkar@gmail.com','Jessore,Bangladesh','01980-063502',null,'President','AD_001',null),
(101,'David Austin','daustin@gmail.com','jing,Australia','513.123.5542','2009-10-08','assistant_advisor','AD_001',54000),
(102,'Shaiful Islam','sislam@gmail.com','Dhaka,Bangladesh','01715-765489','2010-1-08','chairman','IT_002',38000),
(103,'Debashis BIswas','dbiswas@gmail.com','New Delhi,India','9845-67543278','2009-10-09','programmer','IT_002',32000),
(104,'Luis Popp','lpopp@gmail.com','Aus,Qutar','613.123.5442','2009-10-08','assistant_programmer','IT_002',28000),




