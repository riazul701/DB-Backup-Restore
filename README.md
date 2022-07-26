# DB Backup and Restore

## Purpose
Synchronize databases among different sources Xampp, Docker, Vagrant. Do it cross platform Windows, Linux(Ubuntu).

## Do Work
* Place "dbackup" file at project root.

* Run this script from php command line and it will backup database into specific "DB_Backups" folder.

* It includes feature like - Backup database with time, Restore latest database using time, Keep last 5 database backup.

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

## Future Work:
* Backup database with git commit id in file name.
