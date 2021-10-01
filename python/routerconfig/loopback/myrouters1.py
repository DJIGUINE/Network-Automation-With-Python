#!C:/Users/djigui/AppData/Local/Programs/Python/Python39/Python.exe

import getpass
import sys
import telnetlib
import time
import re



user = sys.argv[1]
password = sys.argv[2] 
#user = "djigui"
#password = "djigui"       
        
        #open file with list of switches 

f = open ("myrouters.txt")

#Telenet to each switch and configure it 
for line in f : 
    
   try:
      print("<br><br>  Loopback Configuration!")           
      print('~' * 79)    
      print("<br><br>connecting to   " +  (line))
#    print ("<br><br>successful connection") 
      HOST = line.strip()
      tn = telnetlib.Telnet(HOST)
      time.sleep(1)
      tn.write(user.encode('ascii') + b"\n")
      tn.write(password.encode('ascii') + b"\n")
      time.sleep(1)
                
      tn.write(b"enable\n")
      tn.write(b"djigui\n")
      tn.write(b"terminal length 0\n")
      tn.write(b"conf t\n")
      tn.write(b"int loop 0\n")
      tn.write(b"ip address 1.1.1.1 255.255.255.0\n")
      tn.write(b"exit\n")
      tn.write(b"exit\n")
      tn.write(b"sh ip int brief\n")
      tn.write(b"exit\n")

      readoutput = tn.read_all()
      saveoutput = open("router" + HOST , "w")
#saveoutput.write (str(readoutput))
      saveoutput.write (readoutput.decode("utf-8"))
      saveoutput.write("\n")
      saveoutput.close
      print("<br><br>  interface loopback  successfull configured!")
      print('~' * 79)
   except:
      #remote_connection = ("socket.error")
      #result = remote_connection

      #if result =="socket.error":
              
        print('~' * 79)        
        print((line)+ " Not Accessible it is shutdown")  
       

print(tn.read_all().decode('ascii'))
    