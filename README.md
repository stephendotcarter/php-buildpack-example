# php-buildpack-example
Example of different PHP versions and webservers running on Cloud Foundry

### Introduction
This project demonstrates how PHP applications running on Clound Foundry can be configured to run different PHP versions and web servers.


### Setup
There are 2 apps:
- **php-app**
  - Configured for PHP 5.5.30
  - Apache HTTP
  - 1 App Instance
 
- **php-app-dev**
  - Configured for PHP 5.6.15
  - NGINX
  - 2 App Instances

### App Layout
Both apps contain the following files:

| File | Description |
|------|------|
| .bp-config/options.json | PHP buildpack custom configuration |
| index.php | Standard PHP index.php file |
| manifest.yml | Cloud Foundry app configuration |
