echo "Installing Samba"
sudo apt-get -y install samba
cat << EOF > /etc/samba/smb.conf
[global]
  workgroup = GRUPO
  security = user
EOF
sudo service smbd restart
sudo service nmbd restart
