<?php

$app->group('/page', function () {
    $this->get('/{page}', 'UserFrosting\Sprinkle\OrbitDB\Controller\PagesController:page');
});