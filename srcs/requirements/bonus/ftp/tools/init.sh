#!/bin/bash
mkdir -p /var/run/vsftpd/empty
useradd dbaron -d /ftp -s /bin/bash -m -u 1234
echo -e "0809\n0809" | passwd dbaron
groupadd ftgroup
usermod -G ftgroup dbaron
chown -R dbaron:ftgroup /ftp
chmod 777 /ftp
echo "dbaron" | tee -a /etc/vsftpd.userlist
vsftpd