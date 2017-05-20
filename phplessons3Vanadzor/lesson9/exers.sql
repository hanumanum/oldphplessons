/* 5.1.13 */


/*
SELECT 
 E.`First Name` AS Name
,E.`Last Name` AS Lname
,EC.*
FROM Employees AS E
LEFT OUTER JOIN EmployeeContacts AS EC ON E.ID = EC.EmployeeID AND EC.ContactType IN (1,NULL)   
WHERE ID IN (SELECT DISTINCT EmployeeID
			FROM EmployeeFees
			WHERE PaymentDate BETWEEN '2015-01-01' AND '2016-01-01')

*/

SELECT 
 E.`First Name` AS Name
,E.`Last Name` AS Lname
,EC.*
FROM Employees AS E
LEFT OUTER JOIN EmployeeContacts AS EC ON E.ID = EC.EmployeeID AND EC.ContactType IN (1,NULL)   
LEFT OUTER JOIN EmployeeFees AS EF ON EF.EmployeeID =  E.ID
WHERE EF.PaymentDate BETWEEN '2014-01-01' AND '2015-01-01'

/*
SELECT YEAR( PaymentDate ) AS Year,COUNT(*) 
FROM EmployeeFees
GROUP BY Year
*/


/* 5.3.5 */

/*
100.000֊ից պակաս աշխատավարձը ֊ “1֊ին կարգ”
100.000֊ից մինջև 200.000 ֊ “2֊րդ կարգ”
200.000֊ից մինջև 300.000 ֊ “3֊րդ կարգ”
300.000 և ավել ֊ “4֊րդ կարգ”
*/

SELECT 
Salary,
CASE WHEN Salary<100000 THEN '1֊ին կարգ'
	 WHEN Salary>=100000 AND Salary<200000 THEN '2֊րդ կարգ'
	 WHEN Salary>=200000 AND Salary<300000 THEN '3֊րդ կարգ'
 	 WHEN Salary>=300000 THEN '4֊րդ կարգ'
END AS SalaryCategory 	 
FROM Employees


UPDATE Employees
SET SalaryCategory = (CASE WHEN Salary<100000 THEN '1֊ին կարգ'
						 WHEN Salary>=100000 AND Salary<200000 THEN '2֊րդ կարգ'
						 WHEN Salary>=200000 AND Salary<300000 THEN '3֊րդ կարգ'
					 	 WHEN Salary>=300000 THEN '4֊րդ կարգ'
					END)  	 

