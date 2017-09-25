YII2 Universal-Business & E-Commerce Template Assets Library
==================================
This extensions is library for Universal-Business & E-Commerce Template Themes

[Universal-Business](https://bootstrapious.com/p/universal-business-e-commerce-template#download-item) is clean and stylish universal website template built with Bootstrap 3.3. It stands out with its clean design and elegant typography. It is one of the most complex free Bootstrap templates and with almost 30k downloads (as of Feb 2017), it is also my most popular Bootstrap freebie.

Start Bootstrap was created by and is maintained by **[DevCows](https://github.com/devcows)**

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require hoaaah/yii2-universal-theme-asset:dev-master
```

or add

```
"hoaaah/yii2-universal-theme-asset": "*"
```

to the require section of your `composer.json` file.


Usage
-----

You can use an example views in views-example and copy it to your view.

Don't forget to use this in your view

```php
use hoaaah\universal\UniversalAsset;

UniversalAsset::register($this);
```

and just in case you want to use vendor image, to call any content of vendor image you can use this

```php
$image = hoaaah\universal\UniversalAsset::register($this);

<img src=<?= $image->baseUrl.'/img/portfolio/startup-framework.png' ?> class="img-responsive" alt="">
```
it will call startup-framework.png from /vendor/hoaaah/yii2-universal-theme-asset/assets/img/portofolio/startup-framework.png

## Creator

This Universal-Business library for Yii2 was created by and is maintained by **[Heru Arief Wijaya](http://belajararief.com/)**.

* https://twitter.com/hoaaah
* https://github.com/hoaaah
