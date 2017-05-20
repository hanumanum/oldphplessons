USE lesson;
/* Օրինակ 1 */
UPDATE Employees
SET  `First Name`="Մարգարիտա"
	 ,Gender=2
WHERE ID=32;


/* Օրինակ 2 */
SELECT ID,RegDate,Salary
FROM Employees
WHERE year(RegDate)=2013; 


UPDATE Employees
SET Salary=Salary*(1.2)
WHERE year(RegDate)=2013;

SELECT ID,RegDate,Salary
FROM Employees
WHERE year(RegDate)=2013;


/* Օրինակ 3 */
UPDATE Employees
SET Salary=Salary*(1.5)
WHERE ID IN (
				SELECT EmployeeID 
				FROM EmployeeFees
			)




