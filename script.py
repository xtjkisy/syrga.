import csv
import mysql.connector

mydb = mysql.connector.connect(host='localhost',
    user='root',
    password='Syrga1309.',
    database='employees')
cursor = mydb.cursor()

csv_data = csv.reader('employees.csv')
a = cursor.execute('SELECT * FROM employees')
print(cursor.fetchall())
# for row in csv_data:

#     cursor.execute('INSERT INTO employees (EMPLOYEE_ID, \
#         FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUMBER, HIRE_DATE, \
#             JOB_ID, SALARY, COMMISSION_PCT, MANAGER_ID, DEPARTMENT_ID ) \
#           VALUES("%s", "%s", "%s", "%s", "%s", "%s", "%s", "%s", "%s","%s", "%s")', 
#           row)
#close the connection to the database.
mydb.commit()
cursor.close()
mydb.close()
print ("Done")
