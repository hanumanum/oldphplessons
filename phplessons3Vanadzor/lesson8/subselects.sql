/*

SELECT E.`Last Name`
	  ,E.`First Name`
	  ,COUNT(E.ID)
FROM  EmployeeContacts AS EC
INNER JOIN EmployeeContactsTypes AS ECT ON EC.ContactType=ECT.ContactTypeID
INNER JOIN Employees AS E ON  E.ID=EC.EmployeeID
GROUP BY E.ID

*/



SELECT
	  E.ID
	  ,E.`Last Name`
	  ,E.`First Name`
	  ,(SELECT COUNT(*)
	  	FROM EmployeeContacts AS EC
	  	WHERE EC.EmployeeID=E.ID) AS Count
FROM Employees AS E


SELECT DISTINCT Gender,NumberOfChildren
FROM Employees AS E



SELECT *
FROM Employees AS E
WHERE E.ID IN (21,5,35)

SELECT *
FROM Employees AS E
WHERE E.ID IN  (SELECT DISTINCT EmployeeID
					  	FROM EmployeeFees
					   )  

