<?php

namespace App\Http\Controllers\Api\Utils;

use App\Models\Log as LogModel;
use Illuminate\Support\Facades\Auth;

class Log
{
    /**
     * The type of the log message.
     *
     * @var string $type
     */
    private string $type;

    /**
     * The content of log message.
     *
     * @var string $content
     */
    private string $content;

    /**
     * The method for the prefer which is going to used as the log type.
     *
     * @var string $type
     */
    public static function type(string $type): object
    {
        self::$type = $type;

        return new self;
    }

    /**
     * The method for the prefer which is going to used as the log type.
     *
     * @var string $type
     */
    public static function create(string $content): void
    {
        self::$content = $content;

        $userId = Auth::user()->user_id;

        LogModel::create([
            'user_id'  => $userId,
            'content'  => self::$content,
            'type'     => self::$type,
        ]);
    }
}
