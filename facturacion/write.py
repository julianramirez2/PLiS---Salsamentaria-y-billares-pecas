def over_write(List,Dictionary): #an overwrite function 
    L = List #assign list with variable name 'L'
    d = Dictionary #assign Dictionary with variable name 'd'

    for index, keys in  enumerate(d.keys()):
      L[index][2] = str(int(L[index][2]) - d[keys]) 
      
    print("\nRemaining Stock Products:\n", L)
        
    files = open("products.txt", "w") 
    
    for each in L:
        files.write(str(",".join(each)))
        files.write("\n")         
    files.close()
    return