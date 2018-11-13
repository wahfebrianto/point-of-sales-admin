<?php

namespace App\Repositories;

use App\Models\Conversation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConversationRepository
 * @package App\Repositories
 * @version November 13, 2018, 1:51 am UTC
 *
 * @method Conversation findWithoutFail($id, $columns = ['*'])
 * @method Conversation find($id, $columns = ['*'])
 * @method Conversation first($columns = ['*'])
*/
class ConversationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'conversation_date',
        'sender',
        'content',
        'support_id',
        'info',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Conversation::class;
    }
}
