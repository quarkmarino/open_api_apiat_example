<?php

namespace App\Containers\Post\UI\API\Transformers;

use App\Containers\Post\Models\Post;
use App\Ship\Parents\Transformers\Transformer;

/**
 * @OA\Schema(
 *     title="PostTransformer",
 *     description="Post resource",
 *     @OA\Xml(
 *         name="PostTransformer"
 *     )
 * )
 */

class PostTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Post $entity
     *
     * @return array
     */
    public function transform(Post $entity)
    {
        $response = [
            'object' => 'Post',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
