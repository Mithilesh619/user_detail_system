<?php 
class database {
    private $dbName,$dbUsername,$dbPasswod,$dbLocalhost;

    protected function connect(){
        $this->dbName='user_detail_system';
        $this->dbLocalhost='localhost';
        $this->dbUsername='root';
        $this->dbPasswod='';
        $con = new mysqli($this->dbLocalhost,$this->dbUsername,$this->dbPasswod,$this->dbName);
        return $con;
        
    }
}
class query extends database {
    public function insertData($table,$insertArr=''){
        if($insertArr!=''){
            $fields  = [];
            $value   = [];
            foreach($insertArr as $key => $values){
                $fields[]=$key;
                $value[]=$values;
            }
            $insertColoum  = implode(",",$fields);
            $insertValues  = "'".implode("','",$value)."'";
            $sql="insert into $table ($insertColoum) values($insertValues)";
            $result = $this->connect()->query($sql);
            return $result;
        }
    }
   
    public function selectData($sql){
        $result =   $this->connect()->query($sql);
         if($result->num_rows >0){
            $data = array();
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        } else {
            return 0;
        }
    }

    public function executeQuery($sql){
        $result =   $this->connect()->query($sql);
        return 1;
    }

}