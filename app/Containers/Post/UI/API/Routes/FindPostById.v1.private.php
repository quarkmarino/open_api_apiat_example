<?php

/**
 * @apiGroup           Post
 * @apiName            findPostById
 *
 * @api                {GET} /v1/posts/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('posts/{id}', [
    'as' => 'api_post_find_post_by_id',
    'uses'  => 'Controller@findPostById',
    'middleware' => [
      'auth:api',
    ],
]);
