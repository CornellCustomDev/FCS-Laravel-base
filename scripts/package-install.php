<?php

/**
 * Runs automatically via post-root-package-install during `composer create-project`.
 * Replaces placeholder project names in .lando.yml, .env.example, and composer.json
 * with values derived from the new project's directory name.
 */

$name = basename(getcwd());

$textName = ucwords(preg_replace('/[-_]+/', ' ', $name));
$description = "A project based on the Cornell Custom Development Laravel Starter Kit.";

// Lando app names: lowercase alphanumeric and hyphens only
$slug = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', $name));
$slug = trim($slug, '-');

echo "Initializing project: $name (lando name: $slug)\n";

// .lando.yml — name field
$file = '.lando.yml';
$content = file_get_contents($file);
$content = preg_replace('/^name: .+/m', "name: $slug", $content);
file_put_contents($file, $content);

// .env.example — APP_NAME and APP_URL
$file = '.env.example.stub';
$content = file_get_contents($file);
$content = str_replace(':project_name', $textName, $content);
$content = str_replace(':project_slug', $slug, $content);
file_put_contents('.env.example', $content);
file_put_contents('.env', $content);

// composer.json — name field
$file = 'composer.json';
$content = file_get_contents($file);
$content = preg_replace('/"name": "cornell-custom-dev\/fcs-laravel-base"/', "\"name\": \"cornell-custom-dev/$slug\"", $content);
$content = preg_replace('/"description": ".*"/', "\"description\": \"$description\"", $content);
file_put_contents($file, $content);

// README.project.md — replace :project_slug and overwrite main README.md
$file = 'README.project.md';
$content = file_get_contents($file);
$content = str_replace(':project_name', $textName, $content);
$content = str_replace(':project_description', $description, $content);
$content = str_replace(':project_slug', $slug, $content);
file_put_contents('README.md', $content);
unlink($file);

echo "Updated .lando.yml, .env.example, composer.json, and README.md.\n";

// Set up for local git
echo "Commenting out /vendor in .gitignore and initializing git repository...\n";
$file = '.gitignore';
$content = file_get_contents($file);
$content = preg_replace('/^\/vendor/m', '# /vendor', $content);
file_put_contents($file, $content);
