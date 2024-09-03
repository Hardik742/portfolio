def count_digits():
    input_string = input("Enter a string: ")

    digit_counts = [0] * 10  

    for char in input_string:
        if char.isdigit():  
            digit = int(char)
            digit_counts[digit] += 1  

    for i in range(10):
        if digit_counts[i] > 0:
            print(f"Digit {i} appears {digit_counts[i]} times")

count_digits()
