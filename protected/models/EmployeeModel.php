<?php
class EmployeeModel extends CActiveRecord{
    public static function model($className=__CLASS__){
        return parent::model($className);
    }
    public function tableName(){
        return "platform_employee";
    }

}
