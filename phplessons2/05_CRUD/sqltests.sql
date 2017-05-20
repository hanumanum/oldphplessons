use store;
show tables;
describe categories;
describe products;
SELECT * FROM products;

UPDATE products 
SET prodTitle=`Հաց`
	,prodPrice=`52`
	,prodDescr=`փափուկ, սպիտակ`
	,prodCat=2 
WHERE prodID = 8