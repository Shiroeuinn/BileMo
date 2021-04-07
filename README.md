****
__BILEMO API__
_DA PHP/Symfony 7th project_
****

*Installation*

* Go to https://github.com/Shiroeuinn/BileMo and copy the URL of the project
* Return to your IDE and use the command
`git clone https://github.com/Shiroeuinn/BileMo.git`
* Finally, use the command `composer install`

Your project is now install

****

*Usage*

* In the .env edit this command line `DATABASE_URL="mysql://root@127.0.0.1:3306/bilemoapi?serverVersion=10.14.1-MariaDB"`to use your database config 
* On your terminal, use the command `symfony console doctrine:database:create` if you have the symfony CLI or `php bin/console doctrine:database:create`
* after that done, use the command `symfony console doctrine:fixtures:load` or `php bin/console doctrine:fixtures:load`
* On your terminal, use the command `symfony serve` if you have the symfony CLI or `php -S localhost:8000 -t public`
to launch the internal server of PHP
* Go to your browser, on the URL `https://localhost:8000/api` to see the documentation
