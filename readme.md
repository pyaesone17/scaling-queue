# Running Jobs And Closing Connections

### Installation

composer install

php artisan migrate


### Run worker in 10 tabs

php artisan queue:work 


### Dispatch 100 fake jobs

php artisan push:queues


### Check Active connections

mysql -u root -p

SHOW STATUS WHERE `variable_name` = 'Threads_connected';

** 1 Active connections **


# Running Jobs And NotClosing Connections

### Comment this code in App\Providers\AppServiceProvider

```php

    / **
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Queue::after(function (JobProcessed $event) {
        //     \DB::disconnect();
        // });
    }
```


### Installation

composer install

php artisan migrate


### Run worker in 10 tabs

php artisan queue:work 


### Dispatch 100 fake jobs

php artisan push:queues


### Check Active connections

mysql -u root -p

SHOW STATUS WHERE `variable_name` = 'Threads_connected';

** 11 Active connections **
