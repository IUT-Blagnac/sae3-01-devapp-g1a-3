from os import *
from time import sleep
import paho.mqtt.client as mqtt
import json
import signal
from datetime import datetime
from configparser import ConfigParser


StockDico = dict()
StockSeuil = []
parser = ConfigParser()
parser.read('Configuration.ini')

def envoie():
    for i in StockDico:
        fd = open(i+'.txt', O_RDWR | O_CREAT | O_APPEND, 0o644)
        write(fd,bytes(StockDico[i], 'utf-8'))
    for i in StockSeuil:
        fs = open('logsSeuil.txt', O_RDWR | O_CREAT | O_APPEND, 0o644)
        write(fs,bytes(i, 'utf-8'))

def fonctionALRM(signal,frame):
    envoie()

signal.signal(signal.SIGALRM,fonctionALRM)

def get_data(mqttc, obj, msg):

    jsonMsg = json.loads(msg.payload)
    print(jsonMsg['object'])
    try:
        if(parser.get('devices',jsonMsg["deviceName"]) == 'true'):

            today = datetime.strftime(datetime.now(),"%Y %m %d | %H h %M min %S s")
            device = jsonMsg["deviceName"]

            chaine = "| {0} | {1} ".format(today,device)
            chaineSeu = chaine
            for i in jsonMsg["object"]:
                if(parser.get('settings',i) == 'true' or parser.get('settings',i) != 'null' ):
                    donnee = jsonMsg["object"][i]
                    if(donnee > int(parser.get('seuil',i))):
                        print(i+' élevé')
                        StockSeuil.append(chaineSeu+' | '+i+' | \n')
                    chaine = chaine+' | '+i+': '+ str(donnee)
                else:
                    pass
            chaine = chaine+' | \n'
            print(chaine)
            StockDico[device] = chaine
    except:
        print(jsonMsg["deviceName"]+' pas pris')
        pass

mqttc = mqtt.Client()
mqttc.connect(parser.get('server','nom'), port=1883, keepalive=600)

mqttc.subscribe("application/1/device/+/event/up")
mqttc.subscribe("application/1/device/24e124128c012114/event/up")

mqttc.on_message = get_data

mqttc.loop_start()
while True:
    "signal.alarm(int(parser.get('server','time'))*60)"
    sleep((int(parser.get('server','time'))*60)+1)
    envoie()
    StockDico = dict()
    StockSeuil = []
