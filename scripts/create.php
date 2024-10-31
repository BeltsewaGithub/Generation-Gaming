<?php
    if (isset($_POST['ItemName']))
    {
            $db_user="root";
            $db_password= "7359";
            $db_name= "generation-gaming";
            $db_host = 'localhost';
            $db_table = 'items';    
            
            try
            {
                $conn = new mysqli('localhost', $db_user, $db_password, $db_name);
               
                if($conn->connect_error)
                {
                    die("Ошибка соединения с базой данных: " . $conn->connect_error);
                }
                else 
                {
                    $query = "set names utf8";
                }

                $itemName = $conn->real_escape_string( $_POST['ItemName']);
                $itemPrice = $conn->real_escape_string($_POST['ItemPrice']);
                $itemDescription = $conn->real_escape_string($_POST['ItemDescription']);
                $itemLabel = $conn->real_escape_string( $_POST['ItemLabel']);
                $value = $_POST["ItemCategory"];
                //$itemCategory = $_POST["make_text"];
                
                $itemCategory = $conn->real_escape_string( $_POST['make_text']);
                
                $itemImage = null;
                
                $dir = '../Upload/';
                $extensions = array('jpeg', 'jpg', 'png');
                $max_size = 5000000;
                
                if ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    if ($_FILES['file']['size'] > $max_size)
                    {
                      echo 'Файл больше допустимого размера';
                    }
                    else
                    {
                        $ext = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
                        if (in_array($ext, $extensions))
                        {
                            $name =  uniqid() . '.' . $ext;
                            $itemImage = './Upload/' . $name;
                            $path =$dir.$name;
                            if (move_uploaded_file($_FILES['file']['tmp_name'], $path))
                            {
                                echo 'Файл загружен'.'<br>';
                            }
                            else
                            {
                                echo 'Файл загрузить не удалось';
                            }
                        }
                    }
                    
                    $sql = "INSERT INTO $db_table 
                    (idItems, ItemName, ItemPrice, ItemCategory, ItemDescription, ItemSellerNickname, ItemPicture, ItemLabelText)
                        VALUES (null, '$itemName', $itemPrice, '$value', ".($itemDescription == "" ? "DEFAULT" : "'$itemDescription'").", DEFAULT, " .
                        ($itemImage == null ? "DEFAULT" : "'$itemImage'"). ", " .($itemLabel == "" ? "DEFAULT" : "'$itemLabel'"). ")";

                    if($conn->query($sql))
                    {
                        echo "Данные успешно добавлены"."<br>";
                    }
                    else
                    {
                        echo "Ошибка добавления данных в объявление: " . $conn->error;
                    }
                    $conn->close();
                    }              
            }
            catch (Exception $e)
            {
                // Если есть ошибка соединения, выводим её
                print "Ошибка соединения!: " . $e->getMessage() . "<br/>";
            }
    }