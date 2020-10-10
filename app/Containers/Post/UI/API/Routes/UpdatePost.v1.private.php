<?php

/**
 * @apiGroup           Post
 * @apiName            updatePost
 *
 * @api                {PATCH} /v1/posts/:id Endpoint title here..
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
$router->patch('posts/{id}', [
    'as' => 'api_post_update_post',
    'uses'  => 'Controller@updatePost',
    'middleware' => [
      'auth:api',
    ],
]);
