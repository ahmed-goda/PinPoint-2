# Magento 2 Customer Testimonials Custom Module

[![N|Solid](http://www.ekvitech.com/wp-content/uploads/2016/08/Magento-Open-Source-Ecommerce2.png)](https://magento.com)

Code Test is a group of hand tailored modules designed for Magento 2 CMS "The best e-commerce CMS all over the globe", that could be developed easily in a simple level.

  - [Requirements][RL1]
  - [Installation][IL1]
  - [Troubleshooting][TL1]
  - [License][LL1]

# Requirements:

- PHP >= 7.1.0
- Magento >= 2.3 Installed
- MySQL Server version 5.7.23 or higher || MariaDB version 10.2.7 or higher.
- Composer: 1.6.5 or higher.
- SERVER: Apache 2 or NGINX.


# Installation & Configuration :

- Step 1: Get the code
    - Clone the repository or Download and extract then create Bytology(vendor) directory or folder inside of the following path "<magento_root_dir>/app/code/". Inside the created vendor folder move all modules into that directory.

- Step 2: Enable & activate the newely added modules
    - Run the following commands via terminal from magento root directory. Navigate to the root directory of the project  then execute these commands below as in their order:
    ```sh
    $ php bin/magento setup:upgrade
    $ php bin/magento setup:di:compile
    ```
- Step 3: Flush the cache and Reindex all
    - Login as admin, visit the cache management page from System menu at the sidebar to flush the cache or use the command line utility. Hola!, All modules now are properly installed.

Log in as a customer to find a new background color (orange) has been added to the search criteria at the top right corner of the Home Page once you are authenticated or logged in.

Navigate to any product details page to find new buttons have been added around the qauntity input that are useful for spicifying the amount or number of items a customer needs to purchase prior to submitting by hitting the "Add To Cart" Button.

Finally use the terminal on your server root directory to test the third module by typing the next commands:
```sh
$ php bin/magento greeting
$ php bin/magento check-active
```
or type the next command to get an idea about what those commands can do for you!
```sh
$ php bin/magento list
```

### Troubleshooting
Site loading very slow?
```sh
    $ php bin/magento setup:di:compile
    $ php bin/magento cache:clean
```

### License

This is free software is distributed under the terms of the MIT license.

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [RL1]: <https://github.com/ahmedgodabytology/PinPoint-2#Requirements>
   [IL1]: <https://github.com/ahmedgodabytology/PinPoint-2#Installation>
   [TL1]: <https://github.com/ahmedgodabytology/PinPoint-2#Troubleshooting>
   [LL1]: <https://github.com/ahmedgodabytology/PinPoint-2#License>