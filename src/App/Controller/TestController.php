<?php
/**
 * This file is part of the Slim 3 framework skeleton.
 *
 * @link https://github.com/ansas/slim-skeleton
 */

namespace App\Controller;

use Ansas\Slim\Controller\AbstractController;
use Exception;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class TestController
 *
 * @package App\Controller
 * @author  Ansas Meyer <mail@ansas-meyer.de>
 */
class TestController extends AbstractController
{
    /**
     * Invoke controller.
     *
     * @param Request  $request  The most recent Request object
     * @param Response $response The most recent Response object
     * @param array    $args
     *
     * @return Response
     * @throws Exception
     */
    public function __invoke(Request $request, Response $response, array $args)
    {
        $method   = $args['method'];
        $params   = $request->getParams();
        $settings = $this->settings['test'];

        if ($settings['always'] || $request->getParam($settings['key']) == $settings['value']) {
            if (method_exists($this, $method)) {
                $this->$method($params);
                return $response;
            }
        }

        return $this->notFound($request, $response);
    }

    /**
     * Get PHP-Info.
     */
    public function info()
    {
        phpinfo();
    }

    /**
     * Simulate error.
     */
    public function error()
    {
        throw new Exception("Test");
    }
}