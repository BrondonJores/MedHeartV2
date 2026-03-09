<?php

namespace App\Helpers;

class AlertHelper
{
    public static function toast(string $message, string $type = 'success', string $redirectTo = null) : void
    {
        session()->flash('alert', [
            'type' => $type,
            'message' => $message,
            'redirect' => $redirectTo
        ]);
    }

    public static function imageToast(string $title, string $text, string $redirectTo = null) : void
    {
        session()->flash('image_alert', [
            'title' => $title,
            'text' => $text,
            'redirect' => $redirectTo
        ]);
    }

    public static function formToast(string $title, string $redirectTo = null) : void
    {
        session()->flash('form_alert', [
            'title' => $title,
            'redirect' => $redirectTo
        ]);
    }
}
