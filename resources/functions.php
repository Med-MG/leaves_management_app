<?php

//Helper Functions

function redirect($location) {
    header("location: $location");
}


// Set up your messgae
function set_message($msg) {
    !emty($msg) ? $_SESSION['message'] = $msg : $msg = "";
}

// Display your message

function display_msg() {
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function login_users() {
    if(isset($_POST['login'])){
        global $pdo;
        $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
        $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        
    
        if($user === false) {
            redirect('./index.php?error=Incorrect username / password combination! try again');
            die();
        }   elseif($user->username === 'admin'){
            
            if(MD5($passwordAttempt) === $user->password){
                $_SESSION['user_id'] = $user->id;
                $_SESSION['name'] = $user->name . " " . $user->surname;
                $_SESSION['profile_pic'] = $user->photo_profile;
                $_SESSION['admin'] = $user->username;
                $_SESSION['logged_in'] = time();
                redirect('../public/admin/index.php');
                exit;
            } else {
                redirect('./index.php?error=Incorrect username or password combination! try again b');
            }

        } 
        else {
          
            if(MD5($passwordAttempt) === $user->password){
                $_SESSION['user_id'] = $user->id;
                $_SESSION['logged_in'] = time();
                redirect('../Public/index.php');
                exit;
            } else {
                redirect('./index.php?error=Incorrect username or password combination! try again A');
            }

        }
    }
}


//****  User Management **** /
function add_users() {
    //
}

function delete_users() {
    //
}

function update_users(){
    //
}


//****  Request Management **** /

function request_leave(){
    //
}

function display_leaves_request(){
    //
}

function approve_disapprove_request() {
    //
}

function single__leave_request() {
    //
}

function update_request() {
    //
}

function delete_request() {
    //
}


//****  Leave Management */
function add_leave() {
    //
}

function display_leaves() {
    //
}

function update_leave() {
    //
}

function delete_leave() {
    //
}




?>