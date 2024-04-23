# Installing Memcached for PHP 8

This guide provides step-by-step instructions on how to install and configure Memcached for PHP 8 on Linux systems. Memcached is a high-performance, distributed memory object caching system designed to speed up dynamic web applications by alleviating database load.

## Prerequisites

- A Linux system
- PHP 8.0 or higher installed
- sudo or root access

## Installation Steps

### Step 1: Install Memcached

1. Update your package manager's repository information:

```bash
sudo apt update
```


2. Install Memcached:

```bash
sudo apt install memcached
```


3. Install libmemcached-tools (optional, but recommended for testing and debugging):

```bash
sudo apt install libmemcached-tools
```

### Step 2: Verify Memcached Installation

1. Start the Memcached service:

```bash
sudo systemctl start memcached
```

2. Enable Memcached to start on boot:
```bash
sudo systemctl enable memcached
```

3. Check the status of the Memcached service:

```bash
sudo systemctl status memcached
```

### Step 3: Install PHP Memcached Extension

1. Install the PHP development package and other required packages:

```bash
sudo apt install php-dev php-pear libmemcached-dev zlib1g-dev
```

2. Install the Memcached extension for PHP:
```bash
sudo pecl install memcached
```

3. Enable the Memcached extension by adding it to your `php.ini` file. The location of this file can vary, but you can find it by running:
```bash
php --ini
```

Add the following line to your `php.ini`:
```ini
extension=memcached.so
```

### Step 4: Restart Apache or PHP-FPM

Depending on your setup, restart the web server or the PHP FastCGI Process Manager (PHP-FPM) to apply the changes.

- For Apache:

```bash
sudo systemctl restart apache2
```

- For PHP-FPM:
```bash
sudo systemctl restart php8.0-fpm
```

### Step 5: Verify Memcached Extension Installation

Verify the installation of the Memcached extension for PHP by running:
```bash
php -m | grep memcached
```


If installed correctly, you should see `memcached` in the output.

## Conclusion

You have successfully installed Memcached and the Memcached extension for PHP 8. Your PHP applications can now leverage the power of Memcached for caching and improving performance.

For more detailed information on configuring and using Memcached with PHP, refer to the [official Memcached documentation](https://www.memcached.org/) and the [PHP Memcached extension documentation](https://www.php.net/manual/en/book.memcached.php).
