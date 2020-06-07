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

        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        
    
        if($user === false) {
            redirect('./index.php?error=Incorrect username / password combination! try again');
            die();
        }   elseif($user->username === 'admin'){
            
            if(MD5($passwordAttempt) === $user->password){
                $_SESSION['user_id'] = $user->id;
                $_SESSION['admin'] = $user->username;
                $_SESSION['logged_in'] = time();
                redirect('../Public/admin/index.php');
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

?>