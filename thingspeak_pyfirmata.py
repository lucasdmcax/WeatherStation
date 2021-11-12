from pyfirmata import Arduino,util
import thingspeak
import time

channel_id = 1567731
write_key = "" # Insert here your ThingSpeak write Key
read_key = "" # Insert here your ThingSpeak write Key
board = Arduino('Insert Here Your Arduino Port Connection')

#ThingSpeak Connection
def measure(channel,measure):
    try:
        #write
        response = channel.update({'field1':measure})

        #read
        reading = channel.get({})
        print("Read:",reading)
    except:
        print(("connection failed"))

#Get data from the arduino connected to a PC
def arduino(port):
    it = util.Iterator(board)
    it.start()
    board.analog[port].enable_reporting()
    data = board.analog[port].read()
    return data



#ThingSpeak Data Update
if __name__ == '__main__':
    channel = thingspeak.Channel(id=channel_id,api_key=write_key)
    while True:
        measure(channel,arduino(0))
        time.sleep(15)
