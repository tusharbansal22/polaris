<?php
// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
echo exec('cd /var/www/html/polaris/ && /usr/bin/git pull');
?>