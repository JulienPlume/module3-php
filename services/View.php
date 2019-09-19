<?php
class View
{
    public function generateView($file_content_name, array $arguments)
    {
        $content = $this->getContent($file_content_name, $arguments);
        require("../view/template.php");
    }
    public function getContent($file_content_name, array $arguments)
    {
        extract($arguments);
        ob_start();
        require ("../view/" . $file_content_name);
        return ob_get_clean();
    }
}