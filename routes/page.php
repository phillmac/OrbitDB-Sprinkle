<?php

$app->group('/page', function () {
    $this->get('/{page}', 'UserFrosting\Sprinkle\OritDB\Controller\PagesController:page');
});