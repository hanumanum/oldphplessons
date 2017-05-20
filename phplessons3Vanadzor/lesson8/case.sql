SELECT *
,CASE WHEN Gender=0 THEN "Չկողմնորոշված"
      WHEN Gender=1 THEN "Արական"
      WHEN Gender=2 THEN "Իգական"
  END As GendgetrDescr
FROM  `Employees`	
LIMIT 0 , 30