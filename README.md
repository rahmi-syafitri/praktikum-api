## membuat controller

... php
php artisan make:controller FakultasController -r

...
name harus sama dengan di database

##membuat model dan migrasi otomatis
php artisan make:migration create_prodis_table -m

##membuat migrasi baru
php artisan make:migration create_prodis_table

```php
php artisan migrate:fresh
```
##push ke database
git add .
git commit -m "update"
git push