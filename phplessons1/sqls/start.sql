USE lesson;
SHOW tables;


SELECT *
FROM EmployeeFees;


SELECT 
 SUM(Amount) AS Amout
,EmployeeID
,Cheque
FROM EmployeeFees
GROUP BY EmployeeID,Cheque;


SELECT 
 SUM(Amount) AS Amout
,EmployeeID
,Cheque
FROM EmployeeFees
GROUP BY EmployeeID,Cheque;



SELECT 
YEAR(PaymentDate) AS Year,
MONTH(PaymentDate) AS Month,
SUM(Amount)
FROM EmployeeFees
GROUP BY YEAR(PaymentDate),MONTH(PaymentDate)
ORDER BY Year,Month;

#Վարժություն 5.1.1
SELECT ID,`First Name`,`Last Name`, Salary
FROM Employees
WHERE Salary>=300000
ORDER BY `Last Name` DESC;

#Վարժություն 5.1.2
SELECT *
FROM Employees
WHERE RegDate BETWEEN '2013-12-15' AND '2014-03-28' 
ORDER BY RegDate DESC;

#Վարժություն 5.1.3
SELECT `First Name`,`Last Name`, Salary,NumberOfChildren
FROM Employees
WHERE Gender=2
ORDER BY NumberOfChildren DESC; 

#Վարժություն 5.1.4
SELECT COUNT(*),SUM(Salary),Gender
FROM Employees
GROUP BY Gender;

#Վարժություն 5.1.5
SELECT AVG(Salary),MIN(Salary),MAX(Salary),NumberOfChildren,Gender
FROM Employees
GROUP BY NumberOfChildren,Gender
ORDER BY NumberOfChildren,Gender;


/*
Վարժություն 5.1.6
Խմբավորել ըստ սեռերի, բացառելով անհայտ սեռի աշխատակիցներին։ 
Ցուցադրել երեխաների գումարային քանակը և երեխաների միջին քանակը յուրաքանչյուր խմբի համար։
*/

SELECT AVG(NumberOfChildren),SUM(NumberOfChildren),Gender
FROM Employees
WHERE Gender!=0
GROUP BY Gender;


#Վարժություն 5.1.7
SELECT *
FROM Employees
WHERE `First Name` LIKE 'Զա%';

#Վարժություն 5.1.8
SELECT 
YEAR(PaymentDate) As Years,
SUM(Amount) AS Amount
FROM EmployeeFees
GROUP BY Years
ORDER BY Years;

#Վարժություն 5.1.9
SELECT 
YEAR(PaymentDate) As Years,
MONTH(PaymentDate) As Months,
SUM(Amount) AS Amount
FROM EmployeeFees
GROUP BY Years,Months
ORDER BY Years,Months;






