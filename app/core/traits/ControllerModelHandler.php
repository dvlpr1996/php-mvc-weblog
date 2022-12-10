<?php

namespace app\core\traits;

trait ControllerModelHandler
{
    public function model($modelName)
    {
        if (class_exists($modelName))
            return new $modelName();

        return null;
    }
}
