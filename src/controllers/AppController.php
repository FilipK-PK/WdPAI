<?php

class AppController
{
    private $request;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isGet(): bool
    {
        return $this->request === 'GET';
    }

    protected function isPost(): bool
    {
        return $this->request === 'POST';
    }

    protected function render(string $templ = null, array $variables = [])
    {
        $templPath = 'public/views/'.$templ.'.php';
        $output = 'file not found';

        if(file_exists($templPath))
        {
            extract($variables);

            ob_start();
            include $templPath;
            $output = ob_get_clean();
        }

        print $output;
    }
}