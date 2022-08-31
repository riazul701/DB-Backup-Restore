# DB Backup and Restore

## Purpose
Synchronize databases among different sources Xampp, Docker, Vagrant. Do it cross platform Windows, Linux(Ubuntu).

## Do Work
* Rename "dbackup-config-example.php" to "dbackup-config.php" and set necessary configuration values.

* Place "dbackup" and "dbackup-config.php" file at project root.

* Run this script from php command line and it will backup database into specific "DB_Backups" folder.

* It includes feature like - Backup database with time (Both local PC and FTP server), Restore latest database using time, Fetch database from FTP server, Keep last 5 database backup.

* In FTP database backup folder, create `.htaccess` file and enter this code `Deny From All`. This will restrict public access from database files.

## Commands
* For Xampp (Windows/Linux) open any terminal window and execute command.
```shellscript
php dbackup backup xampp
php dbackup restore xampp
```

* For Docker (Linux) open any terminal window and execute command.
```shellscript
php dbackup backup docker
php dbackup restore docker
```

* For Vagrant, ssh into vagrant machine `vagrant ssh` and execute command.
```shellscript
php dbackup backup vagrant
php dbackup restore vagrant
```

* To fetch database from FTP server
```shellscript
php dbackup fetch
```

## Future Work:
* Backup database with git commit id in file name.
