<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 20/03/19
 * Time: 22:06
 */
declare(strict_types=1);
class Tags
{
    protected
        $id,
        $name;


    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id){
        if (is_int($id) and $id >0){
            $this->id = $id;

            return $this;
        }
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name){
        if (is_string($name) and strlen($name) > 0){
            $this->name = $name;

            return $this;
        }
    }
}