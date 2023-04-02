<?php 
    function loadall_comments(){
        $sql = "SELECT * FROM `comment`";
        $comment_list= pdo_query($sql);
        return $comment_list;
    }
    function add_comment ($product_id,$user_id,$description){
        $sql = "INSERT INTO `comment`(`product_id`, `user_id`, `description`) VALUES ($product_id,$user_id,'$description')";
        pdo_execute($sql);
    }
    function delete_comment ($id){
        $spl ="DELETE FROM `comment` WHERE id=$id";
        pdo_execute($spl);
    }
    function loadall_comment_theosp($id){ 
        $sql ="SELECT * FROM `comment` WHERE product_id =".$id; 
        $cm = pdo_query($sql); 
        return $cm; 
    }
    function edit_comment($comment_id, $product_id, $user_id, $description) {
        $sql = "UPDATE `comment` SET `description` = '$description' WHERE `id` = $comment_id AND `product_id` = $product_id AND `user_id` = $user_id";
        pdo_execute($sql);
    }
?>