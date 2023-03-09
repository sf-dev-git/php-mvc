<?php

trait Response {
    public function redirect(string $url)
    {
        return header('Location: ' . $url);
    }
}