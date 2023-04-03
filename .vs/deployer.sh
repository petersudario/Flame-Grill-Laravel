set -e

echo 'Deploying...'

(php artisan down --mesage 'The app is updating..')
git pull origin master

php artisan updating
echo 'Application deployed!'
