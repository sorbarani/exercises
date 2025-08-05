def fib(n):
    if n == 1 :
        return 1
    if n == 0:
        return 0
    
    return fib(n-1) + fib(n-2)


print("Print Fibonacci series from 1 to 20.")
for i in range(1, 20+1):
    print("{:3d} : {:d}".format(i, fib(i)))
