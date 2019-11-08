<?php

// Heading on every page
$GLOBALS['header'] = 'Acapage';

// Title bar
$title = $header;

// Pages in navigation
// Example does not include file endings, as I prefer to have 
// these hidden by server configuration.
$pages = array
    (
        array('title' => 'Home', 'url' => 'index'),
        array('title' => 'Research', 'url' => 'research'),
        array('title' => 'CV', 'url' => 'cv'),
    );