Online Mess Attendance System using an RFID SmartCard
=====================================================

RFID scanner prototype for college mess attendance


Title: NITW Database Sync with RFID Smart Card


Problem Background
NITW community has been issued RFID Smart Cards to achieve a tech-savvy NITW infrastructue. There are a huge number of possibilities for how the technology could be used, along with the NITW fraternity database. This problem is an attempt in that direction to build a framework to sync between the Database and the RFID Smart Cards, whenever used. And then, the framework is to be used for NITW mess attendance, as a proof of concept.

Problem Solution
A back-end to sync NITW Database and the RFID Smart Cards, through RFID reader/writer over the internet, using a computer; and build a front-end over that for NITW mess attendance.

Proposed Solution
The solution could be broken up as follows:
Implement a Python-based Interface Layer for accessing & manipulating the NITW Database (See references below: NITW Database)
Implement a Python-based Hardware Abstraction Layer (HAL) for accessing & manipulating a RFID Smart Card through an RFID reader/writer (See references below: Smart Card Reader/Writer ...)
Integrate the Python-based Database interfaces with the RFID Smart Card, using the HAL, to get the framework for verifying & syncing with the Database with the RFID Smart Cards, when used
Build a web-based or Python-based front-end GUI using the framework, to implement the NITW Mess Attendance System

End users
NIT Warangal, Students

Devices
RFID Reader/Writer, RFID Smart Card.
Laptops for programming & implementations.

Platforms, Technologies to be used
Possible Host OSes: Linux / Windows / Mac
Software Tools: Web Interface &/or Python for the Front-End, Python for HAL & Back-end

Data set, tools, resources useful in developing solution

Documentation available:
CT - API 1.1
Contactless Smart Card Readers - DEVELOPER GUIDE
CONTACT AND CONTACTLESS USB SMART CARD READER

Smart Card Reader/Writer References:
Product: http://www.hidglobal.com/products/readers/omnikey/5321
Datasheet: http://www.hidglobal.com/sites/hidglobal.com/files/resource_files/omnikey-5321-v2-usb-reader-en-ds.pdf (Also,attached separately)
Drivers: http://www.hidglobal.com/drivers?field_brand_tid=24&product_id=All&os=All
Developer Guide: http://www.hidglobal.com/sites/hidglobal.com/files/ok_contactless_developer_guide_an_en.pdf (Also,attached separately)
Smart Card Reader/Writer Protocol/Project References:
Open Smart Card Project
Developer Info: https://www.opensc-project.org/opensc/wiki/DeveloperInformation
Website: https://github.com/OpenSC/OpenSC/wiki
Code: http://sourceforge.net/projects/opensc/files/OpenSC/
CT-API
Document: https://www.tuvit.de/cps/rde/xbcr/tuevit_de/CTAPI11EN.pdf  (Also,attached separately)
Code: http://sourceforge.net/projects/pcsc-ctapi/
Synchronous API
Library: http://support.gemalto.com/index.php?id=download_apis
OCF in Java: http://www.openscdp.org/ocf/

NITW Database References:
Download phpmyadmin ( http://www.phpmyadmin.net/home_page/downloads.php )
Create a database
Import this sql file
NOTE:
You can add more rows.
Download MYSQL tutorials (http://www.tutorialspoint.com/mysql/)




