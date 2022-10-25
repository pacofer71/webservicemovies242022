# WebService 
## _Ejemplo de consumir una api con PHP (DAW IES Al-ANDALUS)_


[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Consumiremos la API de TheMovie, en concretolas películas más populares, para ello

- Tenemos que registrarnos en la web para conseguir nuestra api-key
- Utilizaremos el paquete: [vlucas/phpdotenv]: <https://packagist.org/packages/vlucas/phpdotenv> para no mostrar nuestra api-key en github
- ✨Magic ✨

## Install

- gitclone del repositorio
- composer update para traer las libreria necesarias
- Renombrar env.example a .env
- Poner en el archivo .env nuestra api-key
```sh
git clone https://github.com/pacofer71/webservicemovies242022.git
composer update
```