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

  config.vm.define "sambclient" do |sambclient|
    sambclient.vm.hostname = "sambclient"
    sambclient.vm.box = "ubuntu/trusty64"
    sambclient.vm.network "private_network", ip: "192.168.1.3", virtualbox__intnet: "RedeVagrant"
    sambclient.vm.provider "virtualbox" do |vb|
      vb.name = "sambclient"
    end
      sambclient.vm.provision "shell", path: "scripts/smb-client.sh"
  end

end
