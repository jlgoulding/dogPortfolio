 <?php

   $router->get('', 'PagesController@home');
   $router->get('about', 'PagesController@about');
   $router->get('about/sub', 'PagesController@aboutsub');
   $router->get('contact', 'PagesController@contact');
   $router->get('gallery', 'PagesController@gallery');
   $router->get('puppies', 'PagesController@puppies');

   $router->get('users', 'UsersController@index');
   $router->post('users', 'UsersController@store');


   $router->get('dogs', 'DogsController@index');
   $router->get('dogs/dog', 'DogsController@dogPage');
   $router->get('dogs/male', 'DogsController@bySex');
   $router->get('dogs/female', 'DogsController@bySex');

   $router->get('projects', 'ProjectsController@index');
