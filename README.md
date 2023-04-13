Steps we need to follow after taking the fresh clone:
1. Run 'composer install' command.
2. Create new ENV file and copy content from ".env.example".
3. Update MYSQL credentials in newly created file.
4. Run "php artisan key:generate".
5. Run "php artisan storage:link".
6. Run "php artisan key:generate".
7. Run "php artisan migrate".
8. Run "php artisan db:seed".