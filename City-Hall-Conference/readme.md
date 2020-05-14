Due to MicroSD card failure, I had to rebuild this from scracth 5/14/2020.

This guide should get you there, as it's mostly all built:

1.  Get Raspbian installed and functional.  Updated it if you like,
    I couldn't care less.  JK, update it.  I just like quoting Swanson.
2.  Install apache2 (sudo apt install apache2)
3.  Install PHP (sudo apt install php)
4.  Install git (sudo apt install git)
5.  Clone this repo to somewhere sane (I usually use /var/www/html)
6.  Change the apache doc root to [wherever you picked]/AV-PHP/City-Hall-Conference
7.  In Raspbian-config, enable vnc and ssh.
8.  run *sudo usermod -a -G dialout www-data*  This is required so that the
    user apache runs under can access the serial ports.
9.  Configure the wired interface with a static IP.
10. You should probably set up a cron job to reboot the pi daily.
11. in /etc/xdg/lxsession/LXDE-pi/autostart, add:
    /usr/bin/chromium-browser --kiosk --noerrdialogs --disablerestore-session-state http://localhost
    - this auto starts chome, but contrary to what this command would have you believe,
    - it DOESN'T, in fact disable the 'Restore Pages' dialog.  I gave up.  Sue me.
    - you can also comment out (by adding a '#' at the start of the line):
        @lxpanel --profile LXDE-pi
        @pcmanfm --desktop --profile LXDE-pi
      but just note, it doesn't load Raspian to desktop, just chrome.
      It is faster that way, so...
12.  I think that should be all that's required.  You've now received my brain dump.
