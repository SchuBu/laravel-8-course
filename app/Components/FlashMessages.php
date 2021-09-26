<?php

namespace App\Components;

trait FlashMessages
{
    protected static function message($level = 'info', $message = null)
    {
        $messages = self::messages();

        $messages[] = $message = [
            'level' => $level,
            'message' => $message
        ];

        session()->flash('messages', $messages);

        return $message;
    }

    protected static function messages()
    {
        return self::hasMessages() ? session()->pull('messages') : [];
    }

    protected static function hasMessages()
    {
        return session()->has('messages');
    }

    protected static function info($message)
    {
        self::message('info', $message);
    }

    protected static function success($message)
    {
        self::message('success', $message);
    }

    protected static function danger($message)
    {
        self::message('danger', $message);
    }

    protected static function warning($message)
    {
        self::message('warning', $message);
    }


}
