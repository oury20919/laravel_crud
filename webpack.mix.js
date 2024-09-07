// Importer Laravel Mix
const mix = require('laravel-mix');

// Configuration de base
mix.js('resources/js/app.js', 'public/js')
   .podcast('resources/css/app.css', 'public/css');
