<?php

/**
 * @apiGroup           Post
 * @apiName            createPost
 *
 * @api                {POST} /v1/posts Endpoint title here..
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
 * @OA\Post(
 *      path="/posts",
 *      operationId="storePost",
 *      tags={"Posts"},
 *      summary="Store new post",
 *      description="Returns post data",
 *      @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(ref="#/components/schemas/CreatePostRequest")
 *      ),
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/Post")
 *       ),
 *      @OA\Response(
 *          response=400,
 *          description="Bad Request"
 *      ),
 *      @OA\Response(
 *          response=401,
 *          description="Unauthenticated",
 *      ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 * )
 */

/** @var Route $router */
$router->post('posts', [
    'as' => 'api_post_create_post',
    'uses'  => 'Controller@createPost',
    'middleware' => [
      'auth:api',
    ],
]);
