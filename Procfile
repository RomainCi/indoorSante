postdeploy: php artisan migrate:refresh --no-interaction --force
postdeploy: php artisan config:cache
queues: php artisan queue:work --queue=high,default
