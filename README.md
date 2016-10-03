# Books
A simple Book module for handle a personal library

## Prerequisites
You will need:

- [Git](http://git-scm.com/)
- [Composer](https://getcomposer.org/)

## Apache Configuration

Now we have to tell to our Apache webserver that we have a new site called myproject.com (the tld could be changed properly as you like)
Open the /etc/hosts file and type:

    127.0.0.1 myproject.com www.myproject.com

Create a new file by your preferite text editor I am using the "nano":

    sudo nano /etc/apache2/sites-available/myproject.conf

and paste this text:

	<VirtualHost *:80>
		ServerName myproject.com
		ServerAlias www.myproject.com
		DocumentRoot /var/www/PROJECT-FOLDER/public
		SetEnv APPLICATION_ENV "development"
		<Directory /var/www/PROJECT-FOLDER/public>
		    DirectoryIndex index.php
		    AllowOverride All
		    Order allow,deny
		    Allow from all
		</Directory>
	</VirtualHost>

and then enable the website configuration by this shell command:

    sudo a2ensite myproject

and reload the Apache configuration by this shell command:

    service apache2 reload

## Getting Started
To get the application running, perform the following steps:

1. Create a new application by Zend Framework 2 cloning the [Skeleton](http://framework.zend.com/manual/current/en/user-guide/skeleton-application.html).
2. After creation, paste the following JSON into the "composer.json" text file within the repositories section:

```json
    [
        {
            "type": "vcs",
            "url": "https://github.com/marinazacon/books.git"
        }
    ],
```
3. Run the following commands from the console:

  ```bash
  cd YOUR-INSTALLATION-PATH
  composer update
  ```
4. Set the pdo.local.php with the mysql account  
  
5. Import the data/data.sql dump into you MySQL database

6. Now open your preferite browser and type: http://www.myproject.com/.

7. Hooray! You will see the standard Zend Framework page! Now you can see the module in action! How simple was that??
