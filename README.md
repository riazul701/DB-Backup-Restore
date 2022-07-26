# DB Backup and Restore

## Purpose
Synchronize databases among different sources Xampp, Docker, Vagrant. Do it cross platform Windows, Linux(Ubuntu).

## Do Work
* Place "dbackup" file at project root.

* Run this script from php command line and it will backup database into specific "DB_Backups" folder.

* It includes feature like - Backup database with time, Restore latest database using time, Keep last 5 database backup.

## Commands
```php
php dbackup backup
php dbackup restore
```

## Future Work:
* Backup database with time and git commit id.
