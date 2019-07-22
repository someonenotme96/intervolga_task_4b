<?php
class DataBase {
    
    public $DBH;
    //Подключение к db
    public function __construct()
        {
            $user = "root";
            $pass = "";
            $this->$DBH = new PDO('mysql:host=localhost;dbname=countries_db','root',''); 
        }
    //Запрос получения всех данных из таблицы стран
    public function GetAll()
        {
            return $this->$DBH->query('SELECT * FROM `countries`');
            
        }
    //Запрос получения id страны по имени, для проверки присутствия в таблице
    public function GetAllByCountryName($country_name)
        {
            $stmt = $this->$DBH->prepare('SELECT country_id FROM `countries` WHERE country_name= :name');
            $stmt->execute([':name'=> $country_name]);
            $res = $sdd->fetch(PDO::FETCH_BOTH);
            return $res;
        }
        //Запрос добавления новой страны
    public function AddCountry($country_name, $country_capital, $country_president) {

        if($this->GetAllByCountryName($country_name) != null)
        {
            return false;
        }
        $stmt = $this->$DBH->prepare("INSERT INTO `countries`(`country_name`, `capital`, `president`) VALUES (:name_country, :capital, :president)");
        
        $stmt->execute([':name_country'=>$country_name,':capital'=>$country_capital,':president'=>$country_president]);
        
        return true;
    }
}

 