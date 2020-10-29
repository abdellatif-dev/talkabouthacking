#! /bin/python3.8

def deciphering(str):
    list1= []
    a = ""
    for i in str:
        list1.append((ord(i) & 31))

    res = []

    for ele in range(0, len(list1), 2):
        res.append((list1[ele] + list1[ele + 1]) % 26)

    for i in range(len(res)):
        tmp = chr(res[i] + 64).lower()
        print(tmp, end=" ")

username = "hEzAdCfHzA"
deciphering(username)
print("::", end=" ")
password = "hEzAdCfHzAhAiJzAeIaDjBcBhHgAzAfHfN"
deciphering(password)

