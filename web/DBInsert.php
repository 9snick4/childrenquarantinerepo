
<?php
    require("dbConnect.php");
    $db = get_db();
    $query = "";
    try
    {
    //Query sample
    /
       switch($_POST["form-id"])
        {
            case 'a':
                $query = "INSERT INTO Asset 
                (AssetName, AssetType, CreatedOn,ModifiedOn) 
                VALUES(:AssetName, :AssetType, NOW(),NOW())";
                $statement = $db->prepare($query);
                $statement->bindValue(':AssetName', $_POST["assetName-textfield"]);
                $statement->bindValue(':AssetType', $_POST["assetType-textfield"]);
                $statement->execute();
            break;/*
            case 'a':
                $query = "INSERT INTO MapCity
                (MapID, CityID, CreatedOn,ModifiedOn,CreatedBy,ModifiedBy) 
                VALUES(:MapID, :CityID, NOW(),NOW(),1, 1)";
                $statement = $db->prepare($query);
                $statement->bindValue(':MapID', $_POST["map-select"]);
                $statement->bindValue(':CityID', $_POST["city-select"]);
                $statement->execute();
            break;
            case 'g':
                $query = "INSERT INTO Gamer 
                (GamerName, CreatedOn,ModifiedOn,CreatedBy,ModifiedBy) 
                VALUES(:GamerName, NOW(),NOW(),1, 1)";
                $statement = $db->prepare($query);
                $statement->bindValue(':GamerName', $_POST["gamer-textfield"]);
                $statement->execute();
            break;
            case 'm':
                $query = "INSERT INTO Map 
                (MapName, CreatedOn,ModifiedOn,CreatedBy,ModifiedBy) 
                VALUES(:MapName, NOW(),NOW(),1, 1)";
                $statement = $db->prepare($query);
                $statement->bindValue(':MapName', $_POST["map-textfield"]);
                $statement->execute();
            break;*/
            default;
                echo "Input error";
        }
        
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }
    echo "Success!";  
?>