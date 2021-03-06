#!/usr/bin/env bash

JOOMLA_BASE=$1
HEADER=$(cat <<'EOF'
      _                       _
     | |                     | |
     | | ___   ___  _ __ ___ | | __ _
 _   | |/ _ \ / _ \|  _   _ \| |/ _  |
| |__| | (_) | (_) | | | | | | | (_) |
 \____/ \___/ \___/|_| |_| |_|_|\__,_|

  _____           _
 / ____|         | |
| (___  _   _ ___| |_ ___ _ __ ____
 \___ \| | | / __| __/ _ \  _   _  |
 ____) | |_| \__ \ ||  __/ | | | | |
|_____/ \__, |___/\__\___|_| |_| |_|
         __/ |
        |___/
 _______        _   _
|__   __|      | | (_)
   | | ___  ___| |_ _ _ __   __ _
   | |/ _ \/ __| __| |  _ \ / _  |
   | |  __/\__ \ |_| | | | | (_) |
   |_|\___||___/\__|_|_| |_|\__  |
                             __/ |
                            |____|
EOF
)


tput setaf 2 -T xterm
echo "-------------------------------"
echo "${HEADER}"
echo "-------------------------------"
tput sgr0 -T xterm

# Switch to Joomla base directory
cd $JOOMLA_BASE

apache2ctl -D FOREGROUND &
google-chrome --version
chmod 755 libraries/vendor/joomla-projects/selenium-server-standalone/bin/webdrivers/chrome/linux/chromedriver
cp libraries/vendor/joomla/test-system/src/acceptance.suite.dist.yml libraries/vendor/joomla/test-system/src/acceptance.suite.yml
libraries/vendor/bin/robo run:tests
