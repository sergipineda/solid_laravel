<?php
/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 25/01/16
 * Time: 17:00
 */

namespace App\Repositories;


class Repository implements RepositoryInterface
{

protected $model;

    /**
     * UserRepository constructor.
     * @param $model
     */
    public function __construct()
    {
        $this->model = $model = $this->makeModel();
    }

    abstract  function model ();

    public function makeModel(){

        $model = App::make($this->model());

        if(!$model instanceof Model(){
                throw new Exception;
            }
        return $model;

    }
    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
}