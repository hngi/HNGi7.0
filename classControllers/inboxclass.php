<?php
class inboxclass{


//can i write the codes here?
public $db;
public function __construct(){
    //constructor
    global $database;
    //db or database?
    $this->db = $database;

}

function fetch_all_admin(){
//function to list all admin
    $sql = "SELECT admin_id, concat_ws(' ',firstname,lastname) as admin_name FROM admins ORDER BY firstname ASC";
    $query = $this->db->query($sql);

    $result = $query->fetch_all(MYSQLI_ASSOC);
    return $result;
}

function savemessage($sender,$receiver,$subject,$message){

    $save = $this->db->query("INSERT INTO inbox_messages SET sender_id = '$sender', receiver_id = '$receiver', subject = '$subject', message = '$message'");
    //Done

}

function outboxmessage($sender_id){
    $query = $this->db->query("SELECT i.*,a.firstname,a.lastname FROM inbox_messages i 
    INNER JOIN admins a ON i.receiver_id = a.admin_id WHERE i.sender_id = '$sender_id'");

    $result = $query->fetch_all(MYSQLI_ASSOC);
    return $result;

}

function inboxmessage($receiver_id){
    $query = $this->db->query("SELECT i.*,a.firstname,a.lastname FROM inbox_messages i 
    INNER JOIN admins a ON i.sender_id = a.admin_id WHERE i.receiver_id = '$receiver_id'");

    $result = $query->fetch_all(MYSQLI_ASSOC);
    return $result;

}

function view_message($msg_id, $user_id){
    $query = $this->db->query("SELECT * FROM inbox_messages WHERE id = '$msg_id' AND (sender_id = '$sender_id' OR receiver_id = '$receiver_id')");
    $result = $query->fetch_assoc();
    return $result;
}

function update_msg_status($msg_id){
    $query = $this->db->query("UPDATE inbox_messages SET status = 'read' WHERE id = '$msg_id'");
}

function fetch_admin_details($id){
    $sql = "SELECT concat_ws(' ',firstname,lastname) as admin_name FROM admins WHERE admin_id = '$id'";
    $query = $this->db->query($sql);

    $result = $query->fetch_assoc();
    return $result;

}

}
?>