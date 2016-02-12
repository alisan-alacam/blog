blog
====

Yapılacak Listesi
===

- ~~Admin ve kullanıcı giriş alanı~~
- ~~Blog yapısı için entity lerin oluşturulması post vs.~~
- ~~Frontend için bootstrap ve jquery dahil edilmesi~~
- ~~Grunt / bower / browserify entegre edilmesi~~
- ~~Blog linklerinin slug şeklinde oluşturulması~~
- ~~Tablo index lerinin kontrol edilmesi~~

Kurulum
==

Aşağıdaki işlemleri sırasıyla takip ediniz.

Ubuntu ile nodejs kurulum

```cli
sudo apt-get install --yes nodejs

Bower kurulum

```cli
npm install -g bower

Grunt Kurulum

```cli
npm install -g grunt-cli

Jquery, bootstrap gibi kütüphanelerin kurulumu için

```cli
bower install

grunt ve bağlı paketlerin kurulumu için
```cli
npm install

Assets lerin ayarlanması için

```cli
grunt

Database oluşturmak için
```cli
php bin/console doctrine:database:create

Örnek Kullanıcı eklemek için

```cli
php app/console app:add-user username password email@example.com --is-admin',

