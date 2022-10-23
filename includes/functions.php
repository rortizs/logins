<?php
//verifications fields not emtpy
    function not_empty(array $fields){

        if (count($fields)!= 0){
            foreach ($fields as $field) {
                if(empty($_POST[$field]) || trim($_POST[$field])==""){
                    return false;
                }
            }
            return true;
        }
    }

//verifications nickname(psudo) and email not existed
    function is_already_in_use($field, $value, $table){
        $db = getDb();

        $query=$db->prepare('SELECT id FROM '.$table.' where '.$field.' = ? ');

        $query->execute([$value]);
        $count=$query->rowCount();


        return $count;

    }

    function messages_flash($message, $type='success'){
        $_SESSION['messages_flash']='
        <div class="alert alert-'.$type.' alert-dimissible fade show" role="alert">
            '.$message.'

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }

    function save_input_data(){
        foreach ($_POST as $key => $value) {
            if(strpos($key, 'password')==false){
                $_SESSION['input'][$key]=$value;
            }
        }
    }

    function get_input($key){
        if(!empty($_SESSION['input'][$key])){
            return htmlspecialchars($_SESSION['input'][$key]);
        }
    }

    function clear_input_data(){
        $_SESSION['input']=[];
    }
?>
