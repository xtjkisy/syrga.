print("Welcome to Syrga's quiz!")
playing = input("Do you want to play? ")

if playing.lower() !="yes":
    quit()

print("Okay! Let's play :)")
score = 0

answer = input("How many letters are there in the Russian alphabet? ")
if answer == "33":
    print('Correct!')
    score += 1
else:
    print("Incorrect!")

answer = input("How many continents are there in the world? ")
if answer == "6":
    print("Correct!")
    score += 1
else:
    print("Incorrect!")

answer = input("What does Luffy want to find? ")
if answer.lower() == "one piece":
    print("Correct!")
    score += 1
else:
    print("Incorrect!")

answer = input("The capital of Great Britain? ")
if answer.lower() == "london":
    print("Correct!")
    score += 1
else:
    print("Incorrect!")

print("You got " + str(score) + " questions correct!")
print("You got " + str((score/4) * 100) + " %")
         
