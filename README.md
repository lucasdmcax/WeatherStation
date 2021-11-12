# WeatherStation
This is a project of webpage using ThingSpeak server and an Arduino controled with pyfirmata and then display this data on it.

# **More About This Project**
The goal of this web app is to make digital environment to be used inside a lesson plan designed by undergradute students at UNICAMP. Also This project is part of my master's reaserch, which is related with blended learning and flipped classroom. 

# **What needs to be implemented**
A created a database conection using MySQL that
 
# **To Make this Work With your own Data**

**1** - You'll need to create a ThingSpeak account at: https://thingspeak.com/ and then create your own channel                  
**2** -  You have to upload the [StandardFirmanta.ino](https://github.com/lucasdmcax/WeatherStation/blob/main/StandardFirmata.ino) on your arduino board ( this script came in the raw arduino as an example) 
**3** -  At the [real_time_data.php](https://github.com/lucasdmcax/WeatherStation/blob/main/Site/real_time_data.php) You have to feed with your own ThingSpeak <iframe>
  
