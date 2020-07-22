## BrandFood

#### Please follow the next steps in order to get going the project:

1. Run composer install & npm install in the root of the project
2. Clone .env.example into an .env file, this is mandatory given that file contains the required credentials for pusher and laravel-echo
3. Run `php artisan migrate --seed`
4. Run `npm run production` so you can have the appropriate compiled js
5. Visit the /app/ordenar & /app/pedidos routes so you can create orders then see how the orders list get updated in real time 
