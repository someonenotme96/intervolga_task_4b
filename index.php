<?php
require_once('template.html');
include "data_base_class.php";
$db = new DataBase();


//Вызов
if (isset($_POST['show']))
    {
    
    include('country_show_form.php');

    }
    //Вызов формы создания страны
if (isset($_POST['create']))
    {

    include('create_country_form.php');
    
    }
if(isset($_POST['show_new_country']))
    {
        //Проверка есть ли уже такая страна
        if($db->AddCountry(htmlspecialchars($_POST['country_nm']),htmlspecialchars($_POST['capital']),htmlspecialchars($_POST['president'])) == false)
            {

            ?>
            <script type="text/javascript">
                alert("Страна с таким именем уже существует!");
            </script>
            <?php

            }
        include('country_show_form.php');
    }


?>
