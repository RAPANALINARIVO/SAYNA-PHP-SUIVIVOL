<?php
namespace kernel;

/**
 * return la vue 
 */
class View{

    private $filename;
    private $params;

    public function __construct($filename,$params)
    {
        $this->filename=$filename;
        $this->params=$params;
    }

    public function display()
    {
        include ('../app/views/'.$this->filename);
    }

}