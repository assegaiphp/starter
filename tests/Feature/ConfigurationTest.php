<?php

use Assegai\Core\Config\ApplicationConfigLoader;

it('loads the 0.10 authentication and session policy', function () {
  $config = ApplicationConfigLoader::load(dirname(__DIR__, 2));

  expect($config)
    ->toHaveKey('authentication.loginRedirect.url', '/auth/login')
    ->toHaveKey('authentication.loginRedirect.preserveTarget', true)
    ->toHaveKey('session.cookieSameSite', 'Lax');
});
