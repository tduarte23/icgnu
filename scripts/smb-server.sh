# echo "Changing password"
# passwd -d -u ubuntu
# chage -d0 ubuntu
# echo "ubuntu:ubuntu" | sudo chpasswd

echo "Updating apt"
sudo apt-get -y update > /dev/null

echo "Installing Apache"
sudo apt-get -y install apache2 > /dev/null

echo "Installing PHP"
sudo LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php > /dev/null
sudo apt-get -y update > /dev/null
sudo LC_ALL=C.UTF-8 apt-get -y install php7.1 php7.1-mysql > /dev/null
sudo service apache2 restart > /dev/null

echo "Configurating PHP SSH2"
# https://gist.github.com/magnetikonline/48ce1d1dca53b44666ba9332bc41c698
sudo apt-get -y install autoconf libssh2-1-dev > /dev/null
sudo cp /var/www/html/scripts/ssh2.so /usr/lib/php/20160303/ssh2.so
echo 'extension=ssh2.so' | sudo tee --append /etc/php/7.1/mods-available/ssh2.ini
sudo ln -s /etc/php/7.1/mods-available/ssh2.ini /etc/php/7.1/cli/conf.d/20-ssh2.ini
echo -e "\n\n[ssh2]\nextension=ssh2.so" | sudo tee --append /etc/php/7.1/apache2/php.ini
sudo service apache2 restart > /dev/null

echo "Installing MySQL"
DBPASSWD=abc123
echo "mysql-server mysql-server/root_password password $DBPASSWD" | sudo debconf-set-selections  > /dev/null
echo "mysql-server mysql-server/root_password_again password $DBPASSWD" | sudo debconf-set-selections  > /dev/null
sudo apt-get -y install mysql-server  > /dev/null
echo "Vagrant finish installing"

echo "Installing Samba Server"
sudo apt-get -y install samba
sudo cp /var/www/html/scripts/smb.conf /etc/samba/smb.conf
sudo service smbd restart
sudo service nmbd restart

echo "Finish"
