# CryptoBundle
Code copied from http://www.inanzzz.com/index.php/post/rxqs/creating-an-encrypt-decrypt-symfony-bundle-that-depends-on-config-parameters-of-main-application

1) Add to AppKernel.php

new Simplicity\CryptBundle\SecurityCryptBundle();

2) Update config.yml

simplicity_crypt:
    secret: my_secret_value
    algorithm: rijndael-128
    mode: ecb

3) Call service

//Service
$crypto = $this->get('simplicity_crypt.service.cryptor');

//Encrypt some value
$encrypted = $crypto->encrypt('Aleksandar');

//Decrypt the value
$decrypted = $crypto->decrypt($encrypted);


