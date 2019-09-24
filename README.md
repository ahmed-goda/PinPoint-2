# Magento 2 Customer Testimonials Custom Module

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

Code Test is a group of hand tailored modules designed Magento 2 CMS "The best e-commerce CMS all over the globe", that could be developed easily in simple level.

  - [Requirements][RL1]
  - [Installation][IL1]
  - [Troubleshooting][TL1]
  - [License][LL1]

# Requirements:

- PHP >= 7.1.0
- Magento >= 2.3 Installed
- MySQL Server version 5.7.23 or higher
    -  or MariaDB version 10.2.7 or higher.
- Composer: 1.6.5 or higher.
- SERVER: Apache 2 or NGINX.


# Installation & Configuration :

- Step 1: Get the code - Download the repository
    Download and unzip the respective extension zip and create Bytology(vendor) inside your magento/app/code/ directory and then move all modules into magento root directory Magento2/app/code/Bytology directory respectively.

- Step 2: Run following command via terminal from magento root directory
    Navigate to the root directory of the project and execute these commands below as respectively:
    ```sh
    $ php bin/magento setup:upgrade
    $ php bin/magento setup:di:compile
    ```
    => Flush the cache and reindex all.
    and Hola!, the modules now are properly installed.

Log in as a customer to find a new background color (orange) has been added to the search criteria at the top of the Home Page once you are authenticated or logged in.

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
    $ php bin/magento cache:flush
```

### License

This is free software distributed under the terms of the MIT license.

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [RL1]: <https://github.com/ahmadSaeedGoda/simple-blog#Requirements>
   [IL1]: <https://github.com/ahmadSaeedGoda/simple-blog#Installation>
   [TL1]: <https://github.com/ahmadSaeedGoda/simple-blog#Troubleshooting>
   [LL1]: <https://github.com/ahmadSaeedGoda/simple-blog#License>
   [LMDL1]: <https://github.com/ahmadSaeedGoda/simple-blog/blob/master/LICENSE.md>
