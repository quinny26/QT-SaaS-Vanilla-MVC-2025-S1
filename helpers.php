<?php
/**
 * Helper Functions
 *
 * Filename:        helpers.php
 * Location:        /
 * Project:         XXX-SaaS-Vanilla-MVC-SN
 * Date Created:    26/03/2025
 *
 * Author:          Quinny
 *
 */

/**
 * Get the base path
 *
 * BasePath function to provide accurate paths to files
 *
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}


/**
 * Load a view
 *
 * @param string $name
 * @return void
 */
function loadView($name, $data = [])
{
    $viewPath = basePath("App/views/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View '{$name} not found!'";
    }
}


/**
 * Load a partial
 *
 * @param string $name
 * @return string
 *
 */
function loadPartial($name, $data = [])
{
    $partialPath = basePath("App/views/partials/{$name}.view.php");

    if (file_exists($partialPath)) {
        extract($data);
        require $partialPath;
    } else {
        echo "Partial '{$name} not found!'";
    }
}

/**
 * Inspect a value(s)
 *
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}


/**
 * Inspect a value(s) and die
 *
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    inspect($value);
    die();
}

/**
 * Sanitize Data
 *
 * @param string $dirty
 * @return string
 */
function sanitize($dirty)
{
    return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}


/**
 * Redirect to a given url
 *
 * @param string $url
 * @return void
 */
function redirect($url)
{
    header("Location: {$url}");
    exit;
}


