<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Inbox\CreateInboxThreads;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getBody()
 * @method $this  setBody(string $body)
 * @method Entity getEntity()
 * @method $this  setEntity(array|Entity $entity)
 * @method Topic  getTopic()
 * @method $this  setTopic(array|Topic $topic)
 */
class ThreadInput extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'entity' => [Entity::class, 'create'],
        'topic'  => [Topic::class, 'factory'],
    ];
}
