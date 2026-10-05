#!/bin/bash
set -e

php artisan migrate:fresh --seed --seeder=ProductoSeeder

php artisan serve --port=8001 &
PID=$!
sleep 3

rm -rf dist
mkdir -p dist
curl -s http://127.0.0.1:8001 > dist/index.html
cp public/logo.png dist/logo.png
cp -r public/img dist/img

kill $PID
echo "Listo: carpeta dist/ generada"
