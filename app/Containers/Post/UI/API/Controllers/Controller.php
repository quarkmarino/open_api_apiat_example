<?php

namespace App\Containers\Post\UI\API\Controllers;

use App\Containers\Post\UI\API\Requests\CreatePostRequest;
use App\Containers\Post\UI\API\Requests\DeletePostRequest;
use App\Containers\Post\UI\API\Requests\GetAllPostsRequest;
use App\Containers\Post\UI\API\Requests\FindPostByIdRequest;
use App\Containers\Post\UI\API\Requests\UpdatePostRequest;
use App\Containers\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Post\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreatePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createPost(CreatePostRequest $request)
    {
        $post = Apiato::call('Post@CreatePostAction', [$request]);

        return $this->created($this->transform($post, PostTransformer::class));
    }

    /**
     * @param FindPostByIdRequest $request
     * @return array
     */
    public function findPostById(FindPostByIdRequest $request)
    {
        $post = Apiato::call('Post@FindPostByIdAction', [$request]);

        return $this->transform($post, PostTransformer::class);
    }

    /**
     * @param GetAllPostsRequest $request
     * @return array
     */
    public function getAllPosts(GetAllPostsRequest $request)
    {
        $posts = Apiato::call('Post@GetAllPostsAction', [$request]);

        return $this->transform($posts, PostTransformer::class);
    }

    /**
     * @param UpdatePostRequest $request
     * @return array
     */
    public function updatePost(UpdatePostRequest $request)
    {
        $post = Apiato::call('Post@UpdatePostAction', [$request]);

        return $this->transform($post, PostTransformer::class);
    }

    /**
     * @param DeletePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deletePost(DeletePostRequest $request)
    {
        Apiato::call('Post@DeletePostAction', [$request]);

        return $this->noContent();
    }
}
