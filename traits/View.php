<?php
trait View
{
    public function redirect(string $url)
    {
        return header('Location: ' . $url);
    }

    public function render(string $view, array $data = [])
    {
        extract($data);

        ob_start();
        include('resources/views/' . $view . '.php');
        $content = ob_get_contents();
        ob_end_clean();
        echo $content;
        exit();
    }
}