# WeatherStation
This is a project of webpage using ThingSpeak server and an Arduino controled with pyfirmata to get remote data to display on it.

#**About This Project**
The goal of this project is to make a basic web application that gets remote data

# **To Make this Work With your own Data**

**1** - You'll need to create a ThingSpeak account at: https://thingspeak.com/ and then create your own channel                  
**2** -  You have to upload the [StandardFirmanta.ino](https://github.com/lucasdmcax/WeatherStation/blob/main/StandardFirmata.ino) on your arduino board ( this script came in the raw arduino as an example) 
**3** -  At the [real_time_data.php](https://github.com/lucasdmcax/WeatherStation/blob/main/Site/real_time_data.php) You have to feed with your own ThingSpeak <iframe>
  
