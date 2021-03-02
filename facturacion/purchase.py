
def purchase(List):
    L = List #assign list with variable name 'L'.
    a_name = input("Please enter your name: ")
    print("\nHello " + a_name + "! Welcome to Salsamentaria y Billares Pecas.\nLook at above and select product as your choice.")
    q = {}  #assign empty dictionary with variable name 'q'.
    
    flag = "Y"
    while flag.upper() == "Y":  #check and go if flag is 'Y' or 'y'.
        product = input("\nWhat product do you want to buy? ")  
        product_name = product.upper()
        
        found = False
        index = 0
        for i in range(len(L[0])):
          if product_name.upper() == L[i][0].upper(): 
            found = True
            index = i
            break


        if found: 
            while True:
                try:
                    p_quantity=int(input("How many " + product + " do you want to buy: "))
                    break
                except:  
                    print("\t\tError!!!\nPlease enter integer value!! ")

            if L[index][2] == 0:
              print("\nSorry!! " + a_name + "!, " + product + " is out of stock.\nWe will add stock of " + product + " later. \nLets hope, you will get this product after next shopping.\n")
            elif p_quantity <= int(L[index][2]):
              q[product_name] = p_quantity
            else:
              print("Sorry, we don't have that quantity available!")
                
            flag=(input(a_name + " do you want buy more products?(Y/N)")).upper()
            
        else:
            print("sorry!! " + product + " is not available in our store.")
            print("\nChoose from following products please!")
            print("--------------------------------------------")
            print("PRODUCT\t\tPRICE\t\tQUANTITY")
            print("--------------------------------------------")
            for i in range(len(L[0])):
                print(L[i][0], "\t\t", L[i][1], "\t\t", L[i][2]) # print, last updated product name, quantity and price.
            print("--------------------------------------------")

    print ("\nYou Choosed Items and it's Quantity respectively:\n", q, "\n")
    p_amount = 0
    f_amount = 0  #final amount
    for index, keys in enumerate(q.keys()):
        if keys == L[0][0].upper(): #executes this operation if product is phone entered by customer.
            p_price = int(L[index][1])
            p_num = int(q[keys])
            p_amount = (p_price * p_num)
            print("\nTotal cost for phone: ", p_amount) 
        
        
    import datetime  #import system date and time for create a unique invoive name.
    dt = str(datetime.datetime.now().year) + "-" + str(datetime.datetime.now().month) + "-" + str(datetime.datetime.now().day) + "-"  + str(datetime.datetime.now().hour) + "-" + str(datetime.datetime.now().minute) + "-" + str(datetime.datetime.now().second)
    invoice = str(dt)    #unique invoice
    t = str(datetime.datetime.now().year) + "-" + str(datetime.datetime.now().month)+ "-" + str(datetime.datetime.now().day) #date
    d = str(t)    #date
    u = str(datetime.datetime.now().hour) + ":" + str(datetime.datetime.now().minute) + ":" + str(datetime.datetime.now().second) #time
    e = str(u)    #time
    
    file = open(invoice + " (" + a_name + ").txt", "w")      #generate a unique invoive name and open it in write mode.
    file.write("=============================================================")
    file.write("\nS/B PECAS\t\t\t\tINVOICE")
    file.write("\n\nInvoice: " + invoice + "\t\tDate: " + d + "\n\t\t\t\t\tTime: " + e + "")
    file.write("\nName of Customer: " + str(a_name) + "")
    file.write("\n=============================================================")
    file.write("\nPARTICULAR\tQUANTITY\tUNIT PRICE\tTOTAL")                     
    file.write("\n-------------------------------------------------------------")
          
    for index, keys in enumerate(q.keys()): 
      file.write(str("\n" + str(keys) + " \t\t " + str(q[keys]) + " \t\t " + str(L[index][1]) + " \t\t " + str(p_amount)))

    file.write("\n-------------------------------------------------------------")
    file.write("\n\n\tThank You " + a_name + " for your shopping.\n\t\tSee you again!")
    file.write("\n=============================================================")
    file.close()
    return q