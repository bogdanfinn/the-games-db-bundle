# bogdanfinn/the-games-db-bundle
A symfony bundle for accessing the http://thegamesdb.net/ Api



Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require bogdanfinn/the-games-db-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle / Configuration
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```
<?php
// app/AppKernel.php
// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new bogdanfinn\TheGamesDbBundle\TheGamesDbBundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Usage
----------------

Get the GameClient in your Controller

```
$gameClient = $this->get('theGamesDb_game_client');
```


### Methods

#### GameClient

```
$games = $gameClient->searchGame("Battlefield");
$game = $gameClient->getGameById(2);
```
