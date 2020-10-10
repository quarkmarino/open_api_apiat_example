<?php

/**
 * @apiGroup           Post
 * @apiName            getAllPosts
 *
 * @api                {GET} /v1/posts Endpoint title here..
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

/**
 * @OA\Get(
 *      path="/posts",
 *      operationId="getAllPosts",
 *      tags={"Posts"},
 *      summary="Get list of posts",
 *      description="Returns list of posts",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/PostTransformer")
 *       ),
 *      @OA\Response(
 *          response=401,
 *          description="Unauthenticated",
 *      ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 *     )
 */

/** @var Route $router */
$router->get('posts', [
    'as' => 'api_post_get_all_posts',
    'uses'  => 'Controller@getAllPosts',
    'middleware' => [
      'auth:api',
    ],
]);
