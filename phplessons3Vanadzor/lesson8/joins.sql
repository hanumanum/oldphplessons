SELECT EC.ContactID
	  ,EC.ContactInfo
	  ,EC.RegDate
	  ,ECT.ContactTypeDescr
	  ,E.`Last Name`
	  ,E.`First Name`
FROM  EmployeeContacts AS EC
INNER JOIN EmployeeContactsTypes AS ECT ON EC.ContactType=ECT.ContactTypeID
INNER JOIN Employees AS E ON  E.ID=EC.EmployeeID

