SELECT A.* FROM employees AS A INNER JOIN department AS B ON A.department_id = B.id WHERE year(A.date_hired) >= '2018' AND B.deparment = 'IT'