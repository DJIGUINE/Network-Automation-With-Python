#!C:/Users/djigui/AppData/Local/Programs/Python/Python39/Python.exe

import getpass
import sys
import telnetlib
import time
import re
import paramiko




user = sys.argv[1]
password = sys.argv[2] 
#user = "djigui"
#password = "djigui"       
        
        #open file with list of switches 

f = open ("myfirewall.txt")

#Telenet to each switch and configure it 
for line in f : 
    
   try:       
        ip_address = line.strip()
        ssh_client = paramiko.SSHClient()
        ssh_client.set_missing_host_key_policy(paramiko.AutoAddPolicy())
        ssh_client.connect(hostname=ip_address,username=user,password=password)

        remote_connection = ssh_client.invoke_shell()
        remote_connection.send(b"exit\n")
        print("<br><br>Conectivity Cheking  ")
        print('~' * 79)    
        print("<br><br>connecting to   " +  (line))
        print ("<br><br>successful connection")             
        print('~' * 79) 

   except:
      remote_connection = ("socket.error")
      result = remote_connection

      if result =="socket.error":
        print("<br><br>Conectivity Cheking  " )    
        print('~' * 79)        
        print((line)+ " Not Accessible It Is Shutdown") 
        print('~' * 79) 
      

       

#print(tn.read_all().decode('ascii'))



    