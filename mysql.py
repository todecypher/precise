#!/usr/bin/python
 
import serial 
import MySQLdb
import time
 
db = MySQLdb.connect(host="localhost",    
                     user="root",        
                     passwd="root", 
                     db="")        
 
cur = db.cursor()
 
 
port = serial.Serial("/dev/ttyACM0", baudrate = 9600,timeout=None)
port.flushInput()      
 

 
vals = []
ID=1
i=0
for i in range(0,3):
	while (port.inWaiting()==0):  #keep sending char until arduino replies
    		port.write("*")
    		time.sleep(1)
	
	#print vals
	SD=port.readline()
	vals = SD.split(",")
	print vals
	TEMP = int(vals[0])
	HUMID    =  int(vals[1])
	MVALUE = int(vals[2])
	print TEMP
	print HUMID
	print MVALUE
	ID=ID+1
	cur.execute('insert into sensor values("%d","%d","%d","%d")'% (ID,TEMP,HUMID,MVALUE)) 
	#put adc values in mysql db
     	cur.execute("SELECT * from sensor")
#for i in range(1,3):
	#delt="DELETE FROM sensor WHERE id > '%d'" % (0)
	#cur.execute(delt)
	#db.commit()
#dataset = cur.fetchall()    
#for row in dataset:    
 # print row
     
 
db.close()
     
