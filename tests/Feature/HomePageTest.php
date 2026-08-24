<?php

use Assegai\App\AppService;
use Assegai\Core\Config\ProjectConfig;

it('builds the starter home page', function () {
  $view = (new AppService(new ProjectConfig()))->home();

  expect($view->data)
    ->toHaveKey('projectName', 'starter')
    ->toHaveKey('status', 'starter is running.')
    ->toHaveKeys(['title', 'titleNote', 'summary', 'websiteLink', 'guideLink', 'supportLink']);
});
