SELECT 
 Gender
 ,NumberOfChildren as children
,COUNT(*)
,SUM(Salary)
,AVG(Salary) as average
,MAX(Salary)
,MIN(Salary)
FROM Employees
GROUP BY Gender,NumberOfChildren
ORDER BY average
LIMIT 6,5
