# cors-research
- Apache2 configuration files to setup CORS environment for testing.

- Default commands to setup apache
```shell
sudo ln -s /etc/apache2/sites-available/dev.secure-business.test.conf /etc/apache2/sites-enabled/
sudo ln -s /etc/apache2/sites-available/live.secure-business.test.conf /etc/apache2/sites-enabled/
sudo systemctl restartrestart apache2
```
