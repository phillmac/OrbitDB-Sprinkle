<?php
namespace UserFrosting\Sprinkle\OrbitDB\Controller;

use Carbon\Carbon;
use UserFrosting\Sprinkle\Core\Controller\SimpleController;
use Illuminate\Database\Capsule\Manager as Capsule;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use UserFrosting\Fortress\RequestSchema;
use UserFrosting\Fortress\Adapter\JqueryValidationAdapter;
use UserFrosting\Fortress\RequestDataTransformer;
use UserFrosting\Fortress\ServerSideValidator;
use UserFrosting\Support\Exception\ForbiddenException;
use UserFrosting\Support\Exception\BadRequestException;



class PagesController extends SimpleController
{

    public function page($request, $response, $args)
    {
        return $this->ci->view->render($response, "pages/{$args['page']}.html.twig");
    }

}