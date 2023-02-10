# CodeIgniter 4 Framework sample & study & example

The project is my practice.

# Install

```bash
composer create-project codeigniter4/appstarter codeigniter4_study
```

# Remove CodeIgniter4 public directory

Step1. Copy ~/public/* to ~/

Copy index.php、.htaccess、favicon.ico、robot.txt to project root directory.

Step2. Change in ~/app/Config/App.php File

```txt
public $baseURL = 'http://localhost:8080/';
To
public $baseURL = 'http://localhost/your_project_name/';
```

```txt
public $uriProtocol = 'REQUEST_URI';
To
public $uriProtocol = 'PATH_INFO';
```

Step3. Change ~/index.php

```txt
require FCPATH . '../app/Config/Paths.php';
To
require FCPATH . 'app/Config/Paths.php';
```

Step4. Change ~/spark

```txt
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);
To
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
```

```txt
require FCPATH . '../app/Config/Paths.php';
To
require FCPATH . 'app/Config/Paths.php';
```

Step5. Copy env To .env

Step6. Generate .env Key

```bash
php spark key:generate
```

Step7. Set Directory writable can write

```bash
chmod -R 777 writable/
```

Step8. Set .env variable CI_ENVIRONMENT

```txt
# CI_ENVIRONMENT = production
To
CI_ENVIRONMENT = development
```

# Install JWT Package
```bash
composer require firebase/php-jwt
```
