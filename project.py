1.  name = input("Aidin ")
print("Hello", name + "!")


2.   number = int(input(" Enter number: "))
if number%3==0 and number%4==0:     
    print (str(number),"is divisible by 3 and 4") 
if number%3==0 :     
    print (str(number),"is divisible by 3 ") 
if number%4==0:     
    print (str(number),"is divisible by 4") 
if number%4!=0 and number%3!=0:     
    print ("NOt divisible by 3 or 4")



3.   def Series(n):
 sums = 0
 for i in range(1, n + 1):
  sums += (i * i);
 return sums
 
n = int(input('input your number:'))
res = Series(n)
print(res)



4.  number = int(input("Enter: "))


sum_of_digits = 0

for digit in str(number):
    sum_of_digits += int(digit)


print(sum_of_digits)





5.   change = str(input("Enter any text to capitalize: "))
h = change.title()

print(h)
