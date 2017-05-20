USE lesson;
SHOW tables;

#Վարժություն 5.1.10
SELECT E.ID
	  ,E.`First Name`
	  ,EF.ID as PaymID
	  ,EF.EmployeeID
	  ,EF.Amount
FROM Employees AS E
INNER JOIN EmployeeFees AS EF ON E.ID=EF.EmployeeID;


SELECT E.ID
	  ,E.`First Name`
	  ,EF.ID as PaymID
	  ,EF.EmployeeID
	  ,EF.Amount
FROM Employees AS E
LEFT OUTER JOIN EmployeeFees AS EF ON E.ID=EF.EmployeeID;



#Վարժություն 5.1.11
SELECT 
 E.`First Name`
,E.`Last Name`
,EC.ContactInfo
,ECT.ContactTypeDescr
FROM EmployeeContacts AS EC
INNER JOIN Employees AS E ON E.ID=EC.EmployeeID
INNER JOIN EmployeeContactsTypes AS ECT ON ECT.ContactTypeID=EC.ContactType
WHERE ECT.ContactTypeID IN (1,2)
ORDER BY E.ID;

#Վարժություն 5.1.12
SELECT 
 E.`First Name` AS Name
,SUM(EF.Amount)
FROM Employees AS E
LEFT OUTER JOIN EmployeeFees AS EF ON E.ID=EF.EmployeeID
GROUP BY E.ID;


#Վարժություն 5.1.14
SELECT E.`First Name`
,E.`Last Name`
,E.Salary
,E.ID
,(SELECT EC.ContactInfo 
  FROM EmployeeContacts AS EC
  WHERE EC.EmployeeID=E.ID
  AND EC.ContactType=1
  LIMIT 0,1) AS Mail
FROM Employees AS E
WHERE  E.ID IN (
				SELECT EmployeeID
				FROM EmployeeFees
				WHERE YEAR(PaymentDate)=2015
			);