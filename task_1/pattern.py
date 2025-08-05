flage : bool = True
p : int = 1

while(p < 5):
    for i in range(1,6):
        if flage == True:
            print('*' * i)
        else:
            print(f"{' ' * (5 - i)}{'*' * i}")

    # this condition change the programm pattern and use the flage var.
    if p % 2 != 0:
        flage = False
    else:
        flage = True

    p += 1


