<?php 
    namespace App;
    use MF\Model\Model;

    class User extends Model
    {
// * Getting data from method __set()
        public function __get($attribute)
        {
            return $this->$attribute;
        }
        
        // * Setting data from form
        public function __set($attribute, $value)
        {
            $this->$attribute = $value;
        } 
    }