## Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework) [![License](https://poser.pugx.org/laravel/framework/license.png)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Listas Dependientes con Laravel 4

Les comparto un ejemplo en el cual realizo un ejemplo simple para realizar listas dependientes en Laravel 4 utilizando ajax,los documentos que genere son los siguientes:

#--app/views 				(index.blade.php)

#--app/database/migrations 	(db_lista_paises.php)

#--app/database/migrations 	(db_lista_estados.php)

#--app/database/seeds 		(ListaPaisesSeeder.php)

#--app/database/seeds 		(ListaEstadosSeeder.php)

#--app/database/seeds 		(ListaPaisesSeeder.php)

#--app/models/ 				(ListaPaises.php)

#--app/models/ 				(ListaEstados.php)

#--app/						(routes.php)

Espero y les funcione y estoy abierto a mejores practicas, por el momento lo dejare en modo simple espero pronto subir algo un poco más complejo.

Contacto
twitter @nredbugs 