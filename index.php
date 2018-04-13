<?php

// Config
include 'config.php';

// Routing
$q = isset($_GET['q']) ? $_GET['q'] : '';

if($q === '') {
  $page = 'home';
  $title = 'Homepage';
} else if ($q === 'events') {
  $page = 'event';
  $title = 'Events';
} else if($q === 'latest-releases') {
  $page = 'latest';
  $title = 'Latest releases';
} else {
  $page = '404';
  $title = 'Not Found';
}

include 'views/partials/header.php';

// Includes
if ($page !== '404') {
  include 'views/partials/menu.php';
}
include 'views/pages/'.$page.'.php';

if ($page !== '404') {
  include 'views/partials/footer.php';
}