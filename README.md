# catalyst-php
In this code names and emails are imported from a csv file and sent to a postgresql database. the first letter of the first and last name is changed touppercase and the eamilis changed to lowercase and also validated to check if it is in standard email format


rukayat@ubuntu:~/Desktop$ cd ~
rukayat@ubuntu:~$ sudo sh -c 'echo "deb http://apt.postgresql.org/pub/repos/apt $(lsb_release -cs)-pgdg main" > /etc/apt/sources.list.d/pgdg.list'
[sudo] password for rukayat: 
rukayat@ubuntu:~$ wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | sudo apt-key add -
OK
rukayat@ubuntu:~$ sudo apt-get update
Hit:1 http://us.archive.ubuntu.com/ubuntu focal InRelease
Hit:2 http://security.ubuntu.com/ubuntu focal-security InRelease
Hit:3 http://us.archive.ubuntu.com/ubuntu focal-updates InRelease          
Hit:4 http://us.archive.ubuntu.com/ubuntu focal-backports InRelease        
Get:5 http://apt.postgresql.org/pub/repos/apt focal-pgdg InRelease [81.6 kB]
Get:6 http://apt.postgresql.org/pub/repos/apt focal-pgdg/main amd64 Packages [190 kB]
Fetched 271 kB in 1s (309 kB/s)    
Reading package lists... Done
N: Skipping acquire of configured file 'main/binary-i386/Packages' as repository 'http://apt.postgresql.org/pub/repos/apt focal-pgdg InRelease' doesn't support architecture 'i386'
rukayat@ubuntu:~$ sudo apt-get -y install postgresql
E: Could not get lock /var/lib/dpkg/lock-frontend. It is held by process 7972 (unattended-upgr)
N: Be aware that removing the lock file is not a solution and may break your system.
E: Unable to acquire the dpkg frontend lock (/var/lib/dpkg/lock-frontend), is another process using it?
rukayat@ubuntu:~$ sudo apt-get install postgresql
E: Could not get lock /var/lib/dpkg/lock-frontend. It is held by process 7972 (unattended-upgr)
N: Be aware that removing the lock file is not a solution and may break your system.
E: Unable to acquire the dpkg frontend lock (/var/lib/dpkg/lock-frontend), is another process using it?
rukayat@ubuntu:~$ sudo apt-get -y install postgresql
E: Could not get lock /var/lib/dpkg/lock-frontend. It is held by process 7972 (unattended-upgr)
N: Be aware that removing the lock file is not a solution and may break your system.
E: Unable to acquire the dpkg frontend lock (/var/lib/dpkg/lock-frontend), is another process using it?
rukayat@ubuntu:~$ sudo apt-get install postgresql-12
E: Could not get lock /var/lib/dpkg/lock-frontend. It is held by process 7972 (unattended-upgr)
N: Be aware that removing the lock file is not a solution and may break your system.
E: Unable to acquire the dpkg frontend lock (/var/lib/dpkg/lock-frontend), is another process using it?
rukayat@ubuntu:~$ ^C
rukayat@ubuntu:~$ sudo rm /var/lib/apt/lists/lock
rukayat@ubuntu:~$ sudo rm /var/cache/apt/archives/lock
rukayat@ubuntu:~$ sudo rm /var/lib/dpkg/lock
rukayat@ubuntu:~$ sudo apt-get -y install postgresql
E: Could not get lock /var/lib/dpkg/lock-frontend. It is held by process 7972 (unattended-upgr)
N: Be aware that removing the lock file is not a solution and may break your system.
E: Unable to acquire the dpkg frontend lock (/var/lib/dpkg/lock-frontend), is another process using it?
rukayat@ubuntu:~$ cd Desktop
rukayat@ubuntu:~/Desktop$ sudo apt-get -y install postgresql
E: Could not get lock /var/lib/dpkg/lock-frontend. It is held by process 7972 (unattended-upgr)
N: Be aware that removing the lock file is not a solution and may break your system.
E: Unable to acquire the dpkg frontend lock (/var/lib/dpkg/lock-frontend), is another process using it?
rukayat@ubuntu:~/Desktop$ pgrep -a apt
32992 /usr/bin/python3 /usr/sbin/aptd
rukayat@ubuntu:~/Desktop$ sudo kill 32992
[sudo] password for rukayat: 
rukayat@ubuntu:~/Desktop$ sudo apt-get -y install postgresql
E: Could not get lock /var/lib/dpkg/lock-frontend. It is held by process 32992 (aptd)
N: Be aware that removing the lock file is not a solution and may break your system.
E: Unable to acquire the dpkg frontend lock (/var/lib/dpkg/lock-frontend), is another process using it?
rukayat@ubuntu:~/Desktop$ pgrep -a apt
32992 /usr/bin/python3 /usr/sbin/aptd
rukayat@ubuntu:~/Desktop$ sudo kill 32992
rukayat@ubuntu:~/Desktop$ sudo kill 32992
kill: (32992): No such process
rukayat@ubuntu:~/Desktop$ sudo apt-get -y install postgresql
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following packages were automatically installed and are no longer required:
  libfprint-2-tod1 linux-headers-5.4.0-42 linux-headers-5.4.0-42-generic
  linux-image-5.4.0-42-generic linux-modules-5.4.0-42-generic linux-modules-extra-5.4.0-42-generic
Use 'sudo apt autoremove' to remove them.
The following additional packages will be installed:
  libpq5 pgdg-keyring postgresql-13 postgresql-client-13 postgresql-client-common postgresql-common
  sysstat
Suggested packages:
  postgresql-doc postgresql-doc-13 libjson-perl isag
The following NEW packages will be installed:
  pgdg-keyring postgresql postgresql-13 postgresql-client-13 postgresql-client-common
  postgresql-common sysstat
The following packages will be upgraded:
  libpq5
1 upgraded, 7 newly installed, 0 to remove and 108 not upgraded.
Need to get 17.4 MB/17.6 MB of archives.
After this operation, 58.1 MB of additional disk space will be used.
Get:1 http://us.archive.ubuntu.com/ubuntu focal/main amd64 sysstat amd64 12.2.0-2 [453 kB]
Get:2 http://apt.postgresql.org/pub/repos/apt focal-pgdg/main amd64 pgdg-keyring all 2018.2 [10.7 kB]
Get:3 http://apt.postgresql.org/pub/repos/apt focal-pgdg/main amd64 postgresql-client-common all 223.pgdg20.04+1 [88.9 kB]
Get:4 http://apt.postgresql.org/pub/repos/apt focal-pgdg/main amd64 postgresql-client-13 amd64 13.1-1.pgdg20.04+1 [1,493 kB]
Get:5 http://apt.postgresql.org/pub/repos/apt focal-pgdg/main amd64 postgresql-common all 223.pgdg20.04+1 [237 kB]
Get:6 http://apt.postgresql.org/pub/repos/apt focal-pgdg/main amd64 postgresql-13 amd64 13.1-1.pgdg20.04+1 [15.0 MB]
Get:7 http://apt.postgresql.org/pub/repos/apt focal-pgdg/main amd64 postgresql all 13+223.pgdg20.04+1 [64.5 kB]
Fetched 17.4 MB in 3s (6,255 kB/s)
Preconfiguring packages ...
(Reading database ... 235936 files and directories currently installed.)
Preparing to unpack .../0-libpq5_13.1-1.pgdg20.04+1_amd64.deb ...
Unpacking libpq5:amd64 (13.1-1.pgdg20.04+1) over (12.5-0ubuntu0.20.04.1) ...
Selecting previously unselected package pgdg-keyring.
Preparing to unpack .../1-pgdg-keyring_2018.2_all.deb ...
Unpacking pgdg-keyring (2018.2) ...
Selecting previously unselected package postgresql-client-common.
Preparing to unpack .../2-postgresql-client-common_223.pgdg20.04+1_all.deb ...
Unpacking postgresql-client-common (223.pgdg20.04+1) ...
Selecting previously unselected package postgresql-client-13.
Preparing to unpack .../3-postgresql-client-13_13.1-1.pgdg20.04+1_amd64.deb ...
Unpacking postgresql-client-13 (13.1-1.pgdg20.04+1) ...
Selecting previously unselected package postgresql-common.
Preparing to unpack .../4-postgresql-common_223.pgdg20.04+1_all.deb ...
Adding 'diversion of /usr/bin/pg_config to /usr/bin/pg_config.libpq-dev by postgresql-common'
Unpacking postgresql-common (223.pgdg20.04+1) ...
Selecting previously unselected package postgresql-13.
Preparing to unpack .../5-postgresql-13_13.1-1.pgdg20.04+1_amd64.deb ...
Unpacking postgresql-13 (13.1-1.pgdg20.04+1) ...
Selecting previously unselected package postgresql.
Preparing to unpack .../6-postgresql_13+223.pgdg20.04+1_all.deb ...
Unpacking postgresql (13+223.pgdg20.04+1) ...
Selecting previously unselected package sysstat.
Preparing to unpack .../7-sysstat_12.2.0-2_amd64.deb ...
Unpacking sysstat (12.2.0-2) ...
Setting up pgdg-keyring (2018.2) ...
Removing apt.postgresql.org key from trusted.gpg: OK
Setting up libpq5:amd64 (13.1-1.pgdg20.04+1) ...
Setting up sysstat (12.2.0-2) ...

Creating config file /etc/default/sysstat with new version
update-alternatives: using /usr/bin/sar.sysstat to provide /usr/bin/sar (sar) in auto mode
Created symlink /etc/systemd/system/multi-user.target.wants/sysstat.service → /lib/systemd/system/sysstat.service.
Setting up postgresql-client-common (223.pgdg20.04+1) ...
Setting up postgresql-client-13 (13.1-1.pgdg20.04+1) ...
update-alternatives: using /usr/share/postgresql/13/man/man1/psql.1.gz to provide /usr/share/man/man1/psql.1.gz (psql.1.gz) in auto mode
Setting up postgresql-common (223.pgdg20.04+1) ...
Adding user postgres to group ssl-cert

Creating config file /etc/postgresql-common/createcluster.conf with new version
Building PostgreSQL dictionaries from installed myspell/hunspell packages...
  en_us
Removing obsolete dictionary files:
Created symlink /etc/systemd/system/multi-user.target.wants/postgresql.service → /lib/systemd/system/postgresql.service.
Setting up postgresql-13 (13.1-1.pgdg20.04+1) ...
Creating new PostgreSQL cluster 13/main ...
/usr/lib/postgresql/13/bin/initdb -D /var/lib/postgresql/13/main --auth-local peer --auth-host md5
The files belonging to this database system will be owned by user "postgres".
This user must also own the server process.

The database cluster will be initialized with locale "en_US.UTF-8".
The default database encoding has accordingly been set to "UTF8".
The default text search configuration will be set to "english".

Data page checksums are disabled.

fixing permissions on existing directory /var/lib/postgresql/13/main ... ok
creating subdirectories ... ok
selecting dynamic shared memory implementation ... posix
selecting default max_connections ... 100
selecting default shared_buffers ... 128MB
selecting default time zone ... America/Los_Angeles
creating configuration files ... ok
running bootstrap script ... ok
performing post-bootstrap initialization ... ok
syncing data to disk ... ok

Success. You can now start the database server using:

    pg_ctlcluster 13 main start

Ver Cluster Port Status Owner    Data directory              Log file
13  main    5432 down   postgres /var/lib/postgresql/13/main /var/log/postgresql/postgresql-13-main.log
update-alternatives: using /usr/share/postgresql/13/man/man1/postmaster.1.gz to provide /usr/share/man/man1/postmaster.1.gz (postmaster.1.gz) in auto mode
Setting up postgresql (13+223.pgdg20.04+1) ...
Processing triggers for systemd (245.4-4ubuntu3.3) ...
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for libc-bin (2.31-0ubuntu9.1) ...
rukayat@ubuntu:~/Desktop$ sudo apt install postgresql postgresql-contrib
Reading package lists... Done
Building dependency tree       
Reading state information... Done
postgresql is already the newest version (13+223.pgdg20.04+1).
The following packages were automatically installed and are no longer required:
  libfprint-2-tod1 linux-headers-5.4.0-42 linux-headers-5.4.0-42-generic
  linux-image-5.4.0-42-generic linux-modules-5.4.0-42-generic linux-modules-extra-5.4.0-42-generic
Use 'sudo apt autoremove' to remove them.
The following NEW packages will be installed:
  postgresql-contrib
0 upgraded, 1 newly installed, 0 to remove and 108 not upgraded.
Need to get 64.5 kB of archives.
After this operation, 69.6 kB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://apt.postgresql.org/pub/repos/apt focal-pgdg/main amd64 postgresql-contrib all 13+223.pgdg20.04+1 [64.5 kB]
Fetched 64.5 kB in 1s (93.0 kB/s)       
Selecting previously unselected package postgresql-contrib.
(Reading database ... 237973 files and directories currently installed.)
Preparing to unpack .../postgresql-contrib_13+223.pgdg20.04+1_all.deb ...
Unpacking postgresql-contrib (13+223.pgdg20.04+1) ...
Setting up postgresql-contrib (13+223.pgdg20.04+1) ...
rukayat@ubuntu:~/Desktop$ sudo -i -u postgres
postgres@ubuntu:~$ psql
psql (13.1 (Ubuntu 13.1-1.pgdg20.04+1))
Type "help" for help.

postgres=# create database userdb
postgres-# \l
                                  List of databases
   Name    |  Owner   | Encoding |   Collate   |    Ctype    |   Access privileges   
-----------+----------+----------+-------------+-------------+-----------------------
 postgres  | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | 
 template0 | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | =c/postgres          +
           |          |          |             |             | postgres=CTc/postgres
 template1 | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | =c/postgres          +
           |          |          |             |             | postgres=CTc/postgres
(3 rows)

postgres-# create database userdb;
ERROR:  syntax error at or near "create"
LINE 2: create database userdb;
        ^
postgres=# CREATE DATABASE
postgres-# \l
                                  List of databases
   Name    |  Owner   | Encoding |   Collate   |    Ctype    |   Access privileges   
-----------+----------+----------+-------------+-------------+-----------------------
 postgres  | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | 
 template0 | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | =c/postgres          +
           |          |          |             |             | postgres=CTc/postgres
 template1 | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | =c/postgres          +
           |          |          |             |             | postgres=CTc/postgres
(3 rows)

postgres-# create database userdb;
ERROR:  syntax error at or near "create"
LINE 2: create database userdb;
        ^
postgres=# create database userdb
postgres-# CREATE DATABASE
postgres-# \l
                                  List of databases
   Name    |  Owner   | Encoding |   Collate   |    Ctype    |   Access privileges   
-----------+----------+----------+-------------+-------------+-----------------------
 postgres  | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | 
 template0 | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | =c/postgres          +
           |          |          |             |             | postgres=CTc/postgres
 template1 | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | =c/postgres          +
           |          |          |             |             | postgres=CTc/postgres
(3 rows)

postgres-# \c userdb
FATAL:  database "userdb" does not exist
Previous connection kept
postgres-# create database userdb
postgres-# ^C
postgres=# CREATE DATABASE userdb;
CREATE DATABASE
postgres=# \l
                                  List of databases
   Name    |  Owner   | Encoding |   Collate   |    Ctype    |   Access privileges   
-----------+----------+----------+-------------+-------------+-----------------------
 postgres  | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | 
 template0 | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | =c/postgres          +
           |          |          |             |             | postgres=CTc/postgres
 template1 | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | =c/postgres          +
           |          |          |             |             | postgres=CTc/postgres
 userdb    | postgres | UTF8     | en_US.UTF-8 | en_US.UTF-8 | 
(4 rows)

postgres=# ^C
postgres=# 
rukayat@ubuntu:~$ sudo snap install --classic code
[sudo] password for rukayat: 
code ea3859d4 from Visual Studio Code (vscode✓) installed
rukayat@ubuntu:~$ touch interview.php
rukayat@ubuntu:~$ code interview.php
rukayat@ubuntu:~$ cd /usr/nib
bash: cd: /usr/nib: No such file or directory
rukayat@ubuntu:~$ cd /usr/bin
rukayat@ubuntu:/usr/bin$ ./php -a
bash: ./php: No such file or directory
rukayat@ubuntu:/usr/bin$ cd ~
rukayat@ubuntu:~$ rpm -qa | grep php

Command 'rpm' not found, but can be installed with:

sudo apt install rpm

rukayat@ubuntu:~$ sudo apt install rpm
[sudo] password for rukayat: 
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following packages were automatically installed and are no longer required:
  libfprint-2-tod1 linux-headers-5.4.0-42 linux-headers-5.4.0-42-generic
  linux-image-5.4.0-42-generic linux-modules-5.4.0-42-generic
  linux-modules-extra-5.4.0-42-generic
Use 'sudo apt autoremove' to remove them.
The following additional packages will be installed:
  debugedit liblua5.2-0 librpm8 librpmbuild8 librpmio8 librpmsign8 rpm-common
  rpm2cpio
Suggested packages:
  rpm-i18n alien python elfutils rpmlint rpm2html
The following NEW packages will be installed:
  debugedit liblua5.2-0 librpm8 librpmbuild8 librpmio8 librpmsign8 rpm
  rpm-common rpm2cpio
0 upgraded, 9 newly installed, 0 to remove and 122 not upgraded.
Need to get 610 kB of archives.
After this operation, 2,587 kB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://us.archive.ubuntu.com/ubuntu focal/main amd64 liblua5.2-0 amd64 5.2.4-1.1build3 [106 kB]
Get:2 http://us.archive.ubuntu.com/ubuntu focal/universe amd64 librpmio8 amd64 4.14.2.1+dfsg1-1build2 [75.2 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu focal/universe amd64 debugedit amd64 4.14.2.1+dfsg1-1build2 [19.5 kB]
Get:4 http://us.archive.ubuntu.com/ubuntu focal/universe amd64 librpm8 amd64 4.14.2.1+dfsg1-1build2 [174 kB]
Get:5 http://us.archive.ubuntu.com/ubuntu focal/universe amd64 librpmbuild8 amd64 4.14.2.1+dfsg1-1build2 [70.9 kB]
Get:6 http://us.archive.ubuntu.com/ubuntu focal/universe amd64 librpmsign8 amd64 4.14.2.1+dfsg1-1build2 [8,280 B]
Get:7 http://us.archive.ubuntu.com/ubuntu focal/universe amd64 rpm-common amd64 4.14.2.1+dfsg1-1build2 [28.8 kB]
Get:8 http://us.archive.ubuntu.com/ubuntu focal/universe amd64 rpm2cpio amd64 4.14.2.1+dfsg1-1build2 [8,096 B]
Get:9 http://us.archive.ubuntu.com/ubuntu focal/universe amd64 rpm amd64 4.14.2.1+dfsg1-1build2 [119 kB]
Fetched 610 kB in 10s (58.5 kB/s)                                              
Selecting previously unselected package liblua5.2-0:amd64.
(Reading database ... 237976 files and directories currently installed.)
Preparing to unpack .../0-liblua5.2-0_5.2.4-1.1build3_amd64.deb ...
Unpacking liblua5.2-0:amd64 (5.2.4-1.1build3) ...
Selecting previously unselected package librpmio8.
Preparing to unpack .../1-librpmio8_4.14.2.1+dfsg1-1build2_amd64.deb ...
Unpacking librpmio8 (4.14.2.1+dfsg1-1build2) ...
Selecting previously unselected package debugedit.
Preparing to unpack .../2-debugedit_4.14.2.1+dfsg1-1build2_amd64.deb ...
Unpacking debugedit (4.14.2.1+dfsg1-1build2) ...
Selecting previously unselected package librpm8.
Preparing to unpack .../3-librpm8_4.14.2.1+dfsg1-1build2_amd64.deb ...
Unpacking librpm8 (4.14.2.1+dfsg1-1build2) ...
Selecting previously unselected package librpmbuild8.
Preparing to unpack .../4-librpmbuild8_4.14.2.1+dfsg1-1build2_amd64.deb ...
Unpacking librpmbuild8 (4.14.2.1+dfsg1-1build2) ...
Selecting previously unselected package librpmsign8.
Preparing to unpack .../5-librpmsign8_4.14.2.1+dfsg1-1build2_amd64.deb ...
Unpacking librpmsign8 (4.14.2.1+dfsg1-1build2) ...
Selecting previously unselected package rpm-common.
Preparing to unpack .../6-rpm-common_4.14.2.1+dfsg1-1build2_amd64.deb ...
Unpacking rpm-common (4.14.2.1+dfsg1-1build2) ...
Selecting previously unselected package rpm2cpio.
Preparing to unpack .../7-rpm2cpio_4.14.2.1+dfsg1-1build2_amd64.deb ...
Unpacking rpm2cpio (4.14.2.1+dfsg1-1build2) ...
Selecting previously unselected package rpm.
Preparing to unpack .../8-rpm_4.14.2.1+dfsg1-1build2_amd64.deb ...
Unpacking rpm (4.14.2.1+dfsg1-1build2) ...
Setting up liblua5.2-0:amd64 (5.2.4-1.1build3) ...
Setting up librpmio8 (4.14.2.1+dfsg1-1build2) ...
Setting up librpm8 (4.14.2.1+dfsg1-1build2) ...
Setting up rpm-common (4.14.2.1+dfsg1-1build2) ...
Setting up librpmbuild8 (4.14.2.1+dfsg1-1build2) ...
Setting up librpmsign8 (4.14.2.1+dfsg1-1build2) ...
Setting up debugedit (4.14.2.1+dfsg1-1build2) ...
Setting up rpm2cpio (4.14.2.1+dfsg1-1build2) ...
Setting up rpm (4.14.2.1+dfsg1-1build2) ...
Processing triggers for libc-bin (2.31-0ubuntu9.1) ...
Processing triggers for man-db (2.9.1-1) ...
rukayat@ubuntu:~$ yum install epel-release yum-utils -y

Command 'yum' not found, did you mean:

  command 'gum' from snap gum (0.8.0)
  command 'num' from deb quickcal (2.4-1)
  command 'uum' from deb freewnn-jserver (1.1.1~a021+cvs20130302-7build1)
  command 'zum' from deb perforate (1.2-5.1)
  command 'sum' from deb coreutils (8.30-3ubuntu2)

See 'snap info <snapname>' for additional versions.

rukayat@ubuntu:~$ sudo apt-get install yum
Reading package lists... Done
Building dependency tree       
Reading state information... Done
E: Unable to locate package yum
rukayat@ubuntu:~$ yum install epel-release yum-utils -y

Command 'yum' not found, did you mean:

  command 'gum' from snap gum (0.8.0)
  command 'sum' from deb coreutils (8.30-3ubuntu2)
  command 'uum' from deb freewnn-jserver (1.1.1~a021+cvs20130302-7build1)
  command 'num' from deb quickcal (2.4-1)
  command 'zum' from deb perforate (1.2-5.1)

See 'snap info <snapname>' for additional versions.

rukayat@ubuntu:~$ sudo apt install php libapache2-mod-php php-psql
Reading package lists... Done
Building dependency tree       
Reading state information... Done
E: Unable to locate package php-psql
rukayat@ubuntu:~$ sudo apt install php libapache2-mod-php 
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following packages were automatically installed and are no longer required:
  libfprint-2-tod1 linux-headers-5.4.0-42 linux-headers-5.4.0-42-generic
  linux-image-5.4.0-42-generic linux-modules-5.4.0-42-generic
  linux-modules-extra-5.4.0-42-generic
Use 'sudo apt autoremove' to remove them.
The following additional packages will be installed:
  apache2 apache2-bin apache2-data apache2-utils libapache2-mod-php7.4 libapr1
  libaprutil1 libaprutil1-dbd-sqlite3 libaprutil1-ldap php-common php7.4
  php7.4-cli php7.4-common php7.4-json php7.4-opcache php7.4-readline
Suggested packages:
  apache2-doc apache2-suexec-pristine | apache2-suexec-custom php-pear
The following NEW packages will be installed:
  apache2 apache2-bin apache2-data apache2-utils libapache2-mod-php
  libapache2-mod-php7.4 libapr1 libaprutil1 libaprutil1-dbd-sqlite3
  libaprutil1-ldap php php-common php7.4 php7.4-cli php7.4-common php7.4-json
  php7.4-opcache php7.4-readline
0 upgraded, 18 newly installed, 0 to remove and 122 not upgraded.
Need to get 5,735 kB of archives.
After this operation, 25.5 MB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://us.archive.ubuntu.com/ubuntu focal/main amd64 libapr1 amd64 1.6.5-1ubuntu1 [91.4 kB]
Get:2 http://us.archive.ubuntu.com/ubuntu focal/main amd64 libaprutil1 amd64 1.6.1-4ubuntu2 [84.7 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu focal/main amd64 libaprutil1-dbd-sqlite3 amd64 1.6.1-4ubuntu2 [10.5 kB]
Get:4 http://us.archive.ubuntu.com/ubuntu focal/main amd64 libaprutil1-ldap amd64 1.6.1-4ubuntu2 [8,736 B]
Get:5 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 apache2-bin amd64 2.4.41-4ubuntu3.1 [1,180 kB]
Get:6 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 apache2-data all 2.4.41-4ubuntu3.1 [158 kB]
Get:7 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 apache2-utils amd64 2.4.41-4ubuntu3.1 [83.8 kB]
Get:8 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 apache2 amd64 2.4.41-4ubuntu3.1 [95.5 kB]
Get:9 http://us.archive.ubuntu.com/ubuntu focal/main amd64 php-common all 2:75 [11.9 kB]
Get:10 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-common amd64 7.4.3-4ubuntu2.4 [979 kB]
Get:11 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-json amd64 7.4.3-4ubuntu2.4 [19.2 kB]
Get:12 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-opcache amd64 7.4.3-4ubuntu2.4 [198 kB]
Get:13 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-readline amd64 7.4.3-4ubuntu2.4 [12.6 kB]
Get:14 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-cli amd64 7.4.3-4ubuntu2.4 [1,422 kB]
Get:15 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 libapache2-mod-php7.4 amd64 7.4.3-4ubuntu2.4 [1,364 kB]
Get:16 http://us.archive.ubuntu.com/ubuntu focal/main amd64 libapache2-mod-php all 2:7.4+75 [2,836 B]
Get:17 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4 all 7.4.3-4ubuntu2.4 [9,248 B]
Get:18 http://us.archive.ubuntu.com/ubuntu focal/main amd64 php all 2:7.4+75 [2,712 B]
Fetched 5,735 kB in 18s (314 kB/s)                                             
Selecting previously unselected package libapr1:amd64.
(Reading database ... 238271 files and directories currently installed.)
Preparing to unpack .../00-libapr1_1.6.5-1ubuntu1_amd64.deb ...
Unpacking libapr1:amd64 (1.6.5-1ubuntu1) ...
Selecting previously unselected package libaprutil1:amd64.
Preparing to unpack .../01-libaprutil1_1.6.1-4ubuntu2_amd64.deb ...
Unpacking libaprutil1:amd64 (1.6.1-4ubuntu2) ...
Selecting previously unselected package libaprutil1-dbd-sqlite3:amd64.
Preparing to unpack .../02-libaprutil1-dbd-sqlite3_1.6.1-4ubuntu2_amd64.deb ...
Unpacking libaprutil1-dbd-sqlite3:amd64 (1.6.1-4ubuntu2) ...
Selecting previously unselected package libaprutil1-ldap:amd64.
Preparing to unpack .../03-libaprutil1-ldap_1.6.1-4ubuntu2_amd64.deb ...
Unpacking libaprutil1-ldap:amd64 (1.6.1-4ubuntu2) ...
Selecting previously unselected package apache2-bin.
Preparing to unpack .../04-apache2-bin_2.4.41-4ubuntu3.1_amd64.deb ...
Unpacking apache2-bin (2.4.41-4ubuntu3.1) ...
Selecting previously unselected package apache2-data.
Preparing to unpack .../05-apache2-data_2.4.41-4ubuntu3.1_all.deb ...
Unpacking apache2-data (2.4.41-4ubuntu3.1) ...
Selecting previously unselected package apache2-utils.
Preparing to unpack .../06-apache2-utils_2.4.41-4ubuntu3.1_amd64.deb ...
Unpacking apache2-utils (2.4.41-4ubuntu3.1) ...
Selecting previously unselected package apache2.
Preparing to unpack .../07-apache2_2.4.41-4ubuntu3.1_amd64.deb ...
Unpacking apache2 (2.4.41-4ubuntu3.1) ...
Selecting previously unselected package php-common.
Preparing to unpack .../08-php-common_2%3a75_all.deb ...
Unpacking php-common (2:75) ...
Selecting previously unselected package php7.4-common.
Preparing to unpack .../09-php7.4-common_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-common (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-json.
Preparing to unpack .../10-php7.4-json_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-json (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-opcache.
Preparing to unpack .../11-php7.4-opcache_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-opcache (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-readline.
Preparing to unpack .../12-php7.4-readline_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-readline (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-cli.
Preparing to unpack .../13-php7.4-cli_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-cli (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package libapache2-mod-php7.4.
Preparing to unpack .../14-libapache2-mod-php7.4_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking libapache2-mod-php7.4 (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package libapache2-mod-php.
Preparing to unpack .../15-libapache2-mod-php_2%3a7.4+75_all.deb ...
Unpacking libapache2-mod-php (2:7.4+75) ...
Selecting previously unselected package php7.4.
Preparing to unpack .../16-php7.4_7.4.3-4ubuntu2.4_all.deb ...
Unpacking php7.4 (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php.
Preparing to unpack .../17-php_2%3a7.4+75_all.deb ...
Unpacking php (2:7.4+75) ...
Setting up php-common (2:75) ...
Created symlink /etc/systemd/system/timers.target.wants/phpsessionclean.timer → 
/lib/systemd/system/phpsessionclean.timer.
Setting up php7.4-common (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/calendar.ini with new version

Creating config file /etc/php/7.4/mods-available/ctype.ini with new version

Creating config file /etc/php/7.4/mods-available/exif.ini with new version

Creating config file /etc/php/7.4/mods-available/fileinfo.ini with new version

Creating config file /etc/php/7.4/mods-available/ffi.ini with new version

Creating config file /etc/php/7.4/mods-available/ftp.ini with new version

Creating config file /etc/php/7.4/mods-available/gettext.ini with new version

Creating config file /etc/php/7.4/mods-available/iconv.ini with new version

Creating config file /etc/php/7.4/mods-available/pdo.ini with new version

Creating config file /etc/php/7.4/mods-available/phar.ini with new version

Creating config file /etc/php/7.4/mods-available/posix.ini with new version

Creating config file /etc/php/7.4/mods-available/shmop.ini with new version

Creating config file /etc/php/7.4/mods-available/sockets.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvmsg.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvsem.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvshm.ini with new version

Creating config file /etc/php/7.4/mods-available/tokenizer.ini with new version
Setting up libapr1:amd64 (1.6.5-1ubuntu1) ...
Setting up php7.4-readline (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/readline.ini with new version
Setting up php7.4-opcache (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/opcache.ini with new version
Setting up apache2-data (2.4.41-4ubuntu3.1) ...
Setting up libaprutil1:amd64 (1.6.1-4ubuntu2) ...
Setting up php7.4-json (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/json.ini with new version
Setting up php7.4-cli (7.4.3-4ubuntu2.4) ...
update-alternatives: using /usr/bin/php7.4 to provide /usr/bin/php (php) in auto
 mode
update-alternatives: using /usr/bin/phar7.4 to provide /usr/bin/phar (phar) in a
uto mode
update-alternatives: using /usr/bin/phar.phar7.4 to provide /usr/bin/phar.phar (
phar.phar) in auto mode

Creating config file /etc/php/7.4/cli/php.ini with new version
Setting up libaprutil1-ldap:amd64 (1.6.1-4ubuntu2) ...
Setting up libaprutil1-dbd-sqlite3:amd64 (1.6.1-4ubuntu2) ...
Setting up apache2-utils (2.4.41-4ubuntu3.1) ...
Setting up apache2-bin (2.4.41-4ubuntu3.1) ...
Setting up libapache2-mod-php7.4 (7.4.3-4ubuntu2.4) ...
Package apache2 is not configured yet. Will defer actions by package libapache2-
mod-php7.4.

Creating config file /etc/php/7.4/apache2/php.ini with new version
No module matches 
Setting up apache2 (2.4.41-4ubuntu3.1) ...
Enabling module mpm_event.
Enabling module authz_core.
Enabling module authz_host.
Enabling module authn_core.
Enabling module auth_basic.
Enabling module access_compat.
Enabling module authn_file.
Enabling module authz_user.
Enabling module alias.
Enabling module dir.
Enabling module autoindex.
Enabling module env.
Enabling module mime.
Enabling module negotiation.
Enabling module setenvif.
Enabling module filter.
Enabling module deflate.
Enabling module status.
Enabling module reqtimeout.
Enabling conf charset.
Enabling conf localized-error-pages.
Enabling conf other-vhosts-access-log.
Enabling conf security.
Enabling conf serve-cgi-bin.
Enabling site 000-default.
info: Switch to mpm prefork for package libapache2-mod-php7.4
Module mpm_event disabled.
Enabling module mpm_prefork.
info: Executing deferred 'a2enmod php7.4' for package libapache2-mod-php7.4
Enabling module php7.4.
Created symlink /etc/systemd/system/multi-user.target.wants/apache2.service → /l
ib/systemd/system/apache2.service.
Created symlink /etc/systemd/system/multi-user.target.wants/apache-htcacheclean.
service → /lib/systemd/system/apache-htcacheclean.service.
Setting up php7.4 (7.4.3-4ubuntu2.4) ...
Setting up libapache2-mod-php (2:7.4+75) ...
Setting up php (2:7.4+75) ...
Processing triggers for ufw (0.36-6) ...
Processing triggers for systemd (245.4-4ubuntu3.3) ...
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for libc-bin (2.31-0ubuntu9.1) ...
Processing triggers for php7.4-cli (7.4.3-4ubuntu2.4) ...
Processing triggers for libapache2-mod-php7.4 (7.4.3-4ubuntu2.4) ...
rukayat@ubuntu:~$ sudo apt-get install php7.4-pgsql
Reading package lists... Done
Building dependency tree       
Reading state information... Done
The following packages were automatically installed and are no longer required:
  libfprint-2-tod1 linux-headers-5.4.0-42 linux-headers-5.4.0-42-generic
  linux-image-5.4.0-42-generic linux-modules-5.4.0-42-generic
  linux-modules-extra-5.4.0-42-generic
Use 'sudo apt autoremove' to remove them.
The following NEW packages will be installed:
  php7.4-pgsql
0 upgraded, 1 newly installed, 0 to remove and 122 not upgraded.
Need to get 56.8 kB of archives.
After this operation, 233 kB of additional disk space will be used.
Get:1 http://us.archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-pgsql amd64 7.4.3-4ubuntu2.4 [56.8 kB]
Fetched 56.8 kB in 0s (129 kB/s)  
Selecting previously unselected package php7.4-pgsql.
(Reading database ... 239114 files and directories currently installed.)
Preparing to unpack .../php7.4-pgsql_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-pgsql (7.4.3-4ubuntu2.4) ...
Setting up php7.4-pgsql (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/pgsql.ini with new version

Creating config file /etc/php/7.4/mods-available/pdo_pgsql.ini with new version
Processing triggers for libapache2-mod-php7.4 (7.4.3-4ubuntu2.4) ...
Processing triggers for php7.4-cli (7.4.3-4ubuntu2.4) ...
rukayat@ubuntu:~$ php -m
[PHP Modules]
calendar
Core
ctype
date
exif
FFI
fileinfo
filter
ftp
gettext
hash
iconv
json
libxml
openssl
pcntl
pcre
PDO
pdo_pgsql
pgsql
Phar
posix
readline
Reflection
session
shmop
sockets
sodium
SPL
standard
sysvmsg
sysvsem
sysvshm
tokenizer
Zend OPcache
zlib

[Zend Modules]
Zend OPcache


