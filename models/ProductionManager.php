<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 21/03/19
 * Time: 19:39
 */
declare(strict_types=1);
class ProductionManager
{
    private $_db;

    /**
     * ProductionManager constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    /**
     * @return mixed
     */
    public function getDb(){
        return $this->_db;
    }

    /**
     * @param PDO $db
     * @return $this
     */
    public function setDb(PDO $db){
        $this->_db = $db;

        return $this;
    }

    /**
     * @return array|Production
     */
    public function getProductions(){
        $arrayOfProductions = [];
        $queryProductions = $this->getDb()->query('SELECT * FROM production');

        $dataProductions = $queryProductions->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dataProductions as $dataProduction){
            $arrayOfProductions[] = new Production($dataProduction);
        }

        return $arrayOfProductions;
    }
}
