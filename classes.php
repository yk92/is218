<?php
    
    /*This file will be used wherever I need to write html.
     *These classes will hold definitions for several HTML pieces of code
     */
    
    class Link {
        private $name, $url, $target;
        
        public function __construct($name, $url, $target){
            $this->name = $name;
            $this->url = $url;
            $this->target = $target;
        }
        
        public function setName($name){
            
            $this->name = $name;
        }
        
        public function setTarget($target){
            $this->target = $target;
        }
        
        public function setURL($url){
            $this->url = $url;
        }
        
        public function createLink(){
            echo '<a href="' . $this->url . '" target="' . $this->target . '">' . $this->name . '</a>';
        }
    }
    
    class Input {
        private $name, $type, $id, $value;
        
        public function __construct($name, $type, $id, $value){
            $this->id = $id;
            $this->name = $name;
            $this->type = $type;
            $this->value = $value;
        }
        
        public function setName($name){
            
            $this->name = $name;
        }
        
        public function setID($id){
            $this->id = $id;
        }
        
        public function setType($type){
            $this->type = $type;
        }
        
        public function setValue($value){
            $this->value = $value;
        }
        
        public function createInput(){
            return '<input type="' . $this->type . '" name="' . $this->name . '" id="' . $this->id . '" value="'
                   . $this->value . '"></br>';
        }
        
        public function createLabel($label){
            return '<label for="' . $this->name . '">' . $label . '</label>'; 
        }
    }
    
    class Form {
        private $action, $method, $hasReset;
        
        public function __construct($action , $method, $hasReset){
            $this->action = $action;
            $this->method = $method;
            $this->hasReset = $hasReset;
        }
        
        public function setMethod($method){
            $this->method = $method;
        }
        
        public function setAction($action){
            $this->action = $action;
        }
        
        public function setReset($hasReset){
            $this->hasReset = $hasReset;
        }
        
        public function createForm($input_Array){
            
            echo '<form action=' . $this->action . '" method="' . $this->method . '">';
            echo '<div id="data">';
            
            foreach ($input_Array as $label => $input){
                echo $label;
                echo $input . '</br>';
            }
            
            echo '</div>';
            echo '<div id="buttons">';
            echo '  <label>&nbsp;</label>';
            echo '  <input type="submit" value="Submit Form">';
            
            if ($hasReset == TRUE){
                echo '<input type="reset" value="Reset">';
                echo '</br></div>';
                echo '</form>';
            }
            else
                echo '</div>';
                echo '</form>';
        }  
    }
    
    class Table {
        /* Creates a table using an array of objects from DB */
        private $caption;
        
        public function __construct(){
            $this->caption = $caption;
            //$this->objType = $objType;
        }
        
        public function createTable($obj_Array){
            //creates a table by iterating through obj_Array
            echo '<table>';
            echo '  <tr>';
            $objVars = get_object_vars($obj_Array[0]);
            foreach ($objVars as $key => $value){
                echo '<th>' . $key . '</th>';
            }
            echo '  </tr>';
            foreach ($obj_Array as $obj){
                $objVars = get_object_vars($obj);
                echo '<tr>';
                foreach ($objVars as $key => $value){
                    echo '<td>' . $value .'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }
    }
    
?>