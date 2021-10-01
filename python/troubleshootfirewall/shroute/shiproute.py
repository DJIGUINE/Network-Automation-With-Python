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

f = open ("myfirewall.txt")

#Telenet to each switch and configure it 
for line in f : 
    
   try: 
      print("<br><br>  the show route  command execution!")         
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
      tn.write(b"sh  route\n")
      tn.write(b"exit\n")

      readoutput = tn.read_all()
      saveoutput = open("Firewall" + HOST , "w")
#saveoutput.write (str(readoutput))
      saveoutput.write (readoutput.decode("utf-8"))
      saveoutput.write("\n")
      saveoutput.close
      print("<br><br>  The show route command Successfull executed!")
      print("<br><br>  output save inside the main folder!")
      print('~' * 79)
   except:
      #remote_connection = ("socket.error")
      #result = remote_connection

      #if result =="socket.error":
                
        print('~' * 79)        
        print((line)+ " Not Accessible It Is Shutdown")  
       

print(tn.read_all().decode('ascii'))
    