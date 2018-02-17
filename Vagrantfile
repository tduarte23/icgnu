# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.define "smbserver" do |smbserver|
    smbserver.vm.hostname = "smbserver"
    smbserver.vm.box = "ubuntu/trusty64"
    smbserver.vm.network "forwarded_port", guest: 80, host: 8080
    smbserver.vm.network "private_network", ip: "192.168.1.2", virtualbox__intnet: "RedeVagrant"
    smbserver.vm.synced_folder ".", "/var/www/html"
    smbserver.vm.provider "virtualbox" do |vb|
      vb.name = "smbserver"
    end
    smbserver.vm.provision "shell", path: "scripts/smb-server.sh"
  end

  config.vm.define "smbclient" do |smbclient|
    smbclient.vm.hostname = "smbclient"
    smbclient.vm.box = "ubuntu/trusty64"
    smbclient.vm.network "private_network", ip: "192.168.1.3", virtualbox__intnet: "RedeVagrant"
    smbclient.vm.provider "virtualbox" do |vb|
      vb.name = "smbclient"
    end
      smbclient.vm.provision "shell", path: "scripts/smb-client.sh"
  end

end
