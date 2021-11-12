# WeatherStation
This is a project of webpage using ThingSpeak server and an Arduino controled with pyfirmata and then display this data on it.

# **More About This Project**
The goal of this web app is to make digital environment to be used inside a lesson plan designed by undergradute students at UNICAMP. Also This project is part of my master's reaserch, which is related with blended learning and flipped classroom. 

# **What Needs to Be Implemented**
I created a database conection using MySQL, althoug this application hasn't any kind of feature using this. In this sense, I'm planning to use this database connection to get students feedbacks and store arduino data on it.

# **To Make this Work With Your Own Data**

**1** - You'll need to create a ThingSpeak account at: https://thingspeak.com/ and then create your channel               
**2** - You have to upload the [StandardFirmanta.ino](https://github.com/lucasdmcax/WeatherStation/blob/main/StandardFirmata.ino) on your arduino board ( this script came in the raw arduino as an example) <br />
**3** - At the [thingspeak_pyfirmata.py](https://github.com/lucasdmcax/WeatherStation/blob/main/thingspeak_pyfirmata.py), You have to feed this script with your channel informations and let it running on some PC connected to an Arduino. (Currently I'm testing with a Rasberry pi 3b+ and it's working fine) <br />
**4** - Finally,At the [real_time_data.php](https://github.com/lucasdmcax/WeatherStation/blob/main/Site/real_time_data.php) You have to feed with your ThingSpeak <iframe>
  
