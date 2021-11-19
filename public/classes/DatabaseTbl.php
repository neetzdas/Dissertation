<?php
  class DatabaseTbl{ 
    
    public $dbTable;

    public function __construct($dbTable) 
    {
      $this->dbTable = $dbTable;
    }


    function funcInsert($insertData) 
    {
      global $pdo;
      
      $keys = array_keys($insertData); 
      $valuesOfData = implode(', ', $keys);
      $colonValues = implode(', :', $keys);
      $stmtForQuery ='INSERT INTO ' . $this->dbTable . ' (' . $valuesOfData . ') VALUES (:' . $colonValues . ')';
      
      $stmtOfInsert = $pdo->prepare($stmtForQuery);
      $stmtOfInsert->execute($insertData);
      return true;
    }


    function funcUpdate($updateData, $pKey)
    {
      global $pdo;
      
      $updateParameters = [];
      foreach($updateData as $updateKey => $updateValue)
      {
        $updateParameters[] = $updateKey. '= :' .$updateKey;
      }
      $commaParameters = implode(',', $updateParameters);
      $stmtForQuery = "UPDATE $this->dbTable SET $commaParameters WHERE $pKey =:pKey";

      $updateData['pKey'] = $updateData[$pKey];
      $stmtOfUpdate = $pdo->prepare($stmtForQuery);
      $stmtOfUpdate->execute($updateData);
      return true;
    }

function funcUploadImage()
    {
      global $pdo;
      return $pdo->lastInsertId();
    }

function funcDelete($dataFeld, $dataValue)
    {
      global $pdo;

      $stmtOfDelete = $pdo->prepare("DELETE FROM $this->dbTable WHERE $dataField= :dataValue"); 

      $deleteCriteria = [
        'dataValue' => $dataValue
      ];
      $stmtOfDelete->execute($deleteCriteria);
      return $stmtOfDelete;
    }



   function funcSave($saveData, $pKey = ''){
      try{
          $check = $this->funcInsert($saveData);
          return $check;
      }
      catch(Exception $e){
          $check = $this->funcUpdate($saveData, $pKey);
        return $check;
      }
  }
 
 function funcAllSelect()
    {
      global $pdo;
      
      $stmtForQuery = $pdo->prepare("SELECT * FROM $this->dbTable" ); 
      $stmtForQuery->execute();
      return $stmtForQuery;
    }

 function funcSelect($dataField, $dataValue) 
    {
      global $pdo;  
      
      $stmtForQuery = $pdo->prepare("SELECT * FROM $this->dbTable WHERE $dataField =:dataValue"); 
      $selectCriteria = [
        'dataValue' => $dataValue
      ];
      $stmtForQuery->execute($selectCriteria);
      return $stmtForQuery;
    }
   
function funcTwoSelect($field, $field1, $value, $value1)
    {
      global $pdo;
     
      $stmtForQuery = $pdo->prepare("SELECT * FROM $this->dbTable WHERE $field = :value AND $field1. = :value1"); 
      $selectCriteria = [
        'value' => $value,
        'value1' => $value1
      ];
      $stmtForQuery->execute($selectCriteria);
      return $stmtForQuery;
    }

function funcValidation($field, $value)
    {
      global $pdo;

      $validUser = $pdo->prepare("SELECT COUNT($field) AS row FROM $this->dbTable WHERE $field =:value"); 
      $validatingCriteria = [
        'value' => $value
      ];
      
      $validUser->execute($validatingCriteria);
      return $validUser;
    }
  }
?>