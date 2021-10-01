#!C:/Users/djigui/AppData/Local/Programs/Python/Python39/Python.exe



from netmiko import ConnectHandler
from netmiko.ssh_exception import NetMikoTimeoutException
from paramiko.ssh_exception import SSHException
from netmiko.ssh_exception import AuthenticationException
import paramiko
import time
IP_LIST = open('myfirewall.txt')
for IP in IP_LIST:
    print("<br><br>  Firewall Configuration ")
    print('~' * 79)
    print ('\n'+ IP.strip() + '  \n' )
    
    RTR = {
    'ip':   IP,
    'username': 'djigui',
    'password': 'djigui',
    "secret":"djigui",
    'device_type': 'cisco_ios',
    }

    with open('iosv_l2_access.txt') as f:
       lines = f.read().splitlines()
    
    try:
       net_connect = ConnectHandler(**RTR)
       net_connect.enable()
    except NetMikoTimeoutException:
        print ('<br><br> Device not reachable.')
        continue
    except AuthenticationException:
        print ('<br><br> Authentication Failure.')
        continue
    except SSHException:
        print ('<br><br> Make sure SSH is enabled in device.')
        continue



    output = net_connect.send_config_set(lines)
    #print (output) 

    print("<br><br>  The Firewall  Successfull configured!")
    print('~' * 79)



    


    



