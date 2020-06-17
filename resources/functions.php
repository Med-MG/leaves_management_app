<?php

//Helper Functions

function redirect($location)
{
    header("location: $location");
}

// Set up your messgae
function set_message($msg)
{
    !empty($msg) ? $_SESSION['message'] = $msg : $msg = "";
}

// Display your message

function display_msg()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function login_users()
{
    if (isset($_POST['login'])) {
        global $pdo;
        $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
        $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user === false) {
            redirect('./index.php?error=Incorrect username / password combination! try again');
            die();
        } elseif ($user->username === 'admin') {

            if (MD5($passwordAttempt) === $user->password) {
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

        } else {

            if (MD5($passwordAttempt) === $user->password) {
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
function add_users()
{
    global $pdo;

    if (isset($_POST['submit'])) {
        try {
            //Personal info
            $name = trim($_POST['name']);
            $lastname = trim($_POST['surname']);
            $cin = trim($_POST['cin']);
            $phone = trim($_POST['phone']);
            $gender = trim($_POST['sexe']);
            $birthday = trim($_POST['birthday']);
            // Handling profile picture
            $profile_pic = $_FILES['profile_pic']['name'];
            $profile_pic_type = $_FILES['profile_pic']['type'];
            $profile_pic_size = $_FILES['profile_pic']['size'];
            $profile_pic_temp = $_FILES['profile_pic']['tmp_name'];
            $upload_path = '../../resources/uploads/'; //setting up ulpoad folder
            $uploadfile = $upload_path . basename($profile_pic);

            if ($profile_pic_type == "image/jpg" || $profile_pic_type = "image/jpeg" || $profile_pic_type = "image/png" || $profile_pic_type = "image/gif") // check file extension
            {
                // You should also check filesize here.
                if ($profile_pic_size < 5000000) { //check file size 5mb
                    move_uploaded_file($profile_pic_temp, $uploadfile); // move upload file temperory directory to your upload folder
                } else {
                    $errorMsg = "Your file To large PLease Upload 5mb size";
                }

            } else {
                $errorMsg = " Upload jpg, jpeg, png, gif file format..... check file extension";
            }

            if (!isset($errorMsg)) {

                //professional info
                $username = trim($_POST['username']);
                $password = MD5($_POST['password']);
                $email = trim($_POST['email']);
                $service = trim($_POST['service']);
                $role = trim($_POST['role']);
                $salary = trim($_POST['salary']);
                $sold_conge = trim($_POST['pto']);
                $hire_date = trim($_POST['hire_date']);

                $sql = "INSERT INTO users(username, password, email, name, surname, cin, tel, role, salary, hire_date, sexe, birthday, sold_conge, photo_profile, service_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                $result = $stmt->execute([$username, $password, $email, $name, $lastname, $cin, $phone, $role, $salary, $hire_date, $gender, $birthday, $sold_conge, $profile_pic, $service]);
                if ($result) {
                    set_message('File Uploaded Successfully');
                    redirect('index.php?users');

                } else {
                    set_message('there is an issue with the query');

                }
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}

function display_users()
{
    global $pdo;

    $sql = "SELECT u.id, u.photo_profile, u.name, u.surname, u.role, s.service_name, u.status, u.hire_date FROM users u join service s on u.service_id = s.id WHERE username != 'admin' ";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $user) {

        if ($user->status == 0) {
            $status = "<div class='badge badge-danger'>Inactive</div>";
        }
        if ($user->status == 1) {
            $status = "<div class='badge badge-success'>active</div>";
        }

        echo <<<user
        <tr>
        <td class="text-center text-muted">{$user->id}</td>
        <td>
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                        <div class="widget-content-left">
                            <img width="40" class="rounded-circle" src="../../resources/uploads/{$user->photo_profile}"
                                alt="profil picture">
                        </div>
                    </div>
                    <div class="widget-content-left flex2">
                        <div class="widget-heading"> {$user->name} {$user->surname} </div>
                        <div class="widget-subheading opacity-7">{$user->role}</div>
                    </div>
                </div>
            </div>
        </td>
        <td class="text-center"> {$user->service_name} </td>
        <td class="text-center">
            {$status}
        </td>
        <td class="text-center"> {$user->hire_date} </td>
        <td class="text-center">
            <a href="index?edit_user={$user->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <a href="index?users&status={$user->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-icon btn-icon-only btn btn-outline-danger">
                <i class="pe-7s-delete-user" style="font-size: 1rem;"></i>
            </button>
            </a>
        </td>
    </tr>
user;

    }
}

function toggle_status()
{
    global $pdo;
    if (isset($_GET['status'])) {
        $user_id = $_GET['status'];
        $stmt_status = $pdo->prepare("SELECT status FROM users WHERE id = ?");
        $stmt_status->execute([$user_id]);
        $user_status = $stmt_status->fetch();
        if ($user_status) {
            if ($user_status->status == 1) {
                $pdo->prepare('UPDATE users SET status = 0 where id = ?')->execute([$user_id]);
            } elseif ($user_status->status == 0) {
                $pdo->prepare('UPDATE users SET status = 1 where id = ?')->execute([$user_id]);
            }
        }
    }
}

// function delete_users()
// {
//     //
// }

function update_users()
{
    global $pdo;

    if (isset($_POST['submit'])) {
        try {
            //Personal info
            $name = trim($_POST['name']);
            $lastname = trim($_POST['surname']);
            $cin = trim($_POST['cin']);
            $phone = trim($_POST['phone']);
            $gender = trim($_POST['sexe']);
            $birthday = trim($_POST['birthday']);
            $user_id = $_POST['user_id'];
            // Handling profile picture
            $profile_pic = $_FILES['profile_pic']['name'];
            $profile_pic_type = $_FILES['profile_pic']['type'];
            $profile_pic_size = $_FILES['profile_pic']['size'];
            $profile_pic_temp = $_FILES['profile_pic']['tmp_name'];
            $upload_path = '../../resources/uploads/'; //setting up ulpoad folder
            $uploadfile = $upload_path . basename($profile_pic);

            if ($profile_pic_type == "image/jpg" || $profile_pic_type = "image/jpeg" || $profile_pic_type = "image/png" || $profile_pic_type = "image/gif") // check file extension
            {
                // You should also check filesize here.
                if ($profile_pic_size < 5000000) { //check file size 5mb
                    move_uploaded_file($profile_pic_temp, $uploadfile); // move upload file temperory directory to your upload folder
                } else {
                    $errorMsg = "Your file To large PLease Upload 5mb size";
                }

            } else {
                $errorMsg = " Upload jpg, jpeg, png, gif file format..... check file extension";
            }

            if (!isset($errorMsg)) {

                //professional info
                $username = trim($_POST['username']);
                $password = MD5($_POST['password']);
                $email = trim($_POST['email']);
                $service = trim($_POST['service']);
                $role = trim($_POST['role']);
                $salary = trim($_POST['salary']);
                $sold_conge = trim($_POST['pto']);
                $hire_date = trim($_POST['hire_date']);

                $sql = "UPDATE users SET username = ?, password = ?, email = ?, name = ?, surname = ?, cin = ?, tel = ?, role = ?, salary = ?, hire_date = ?, sexe = ?, birthday = ?, sold_conge = ?, photo_profile = ?, service_id = ? WHERE id = ? ";
                $stmt = $pdo->prepare($sql);
                $result = $stmt->execute([$username, $password, $email, $name, $lastname, $cin, $phone, $role, $salary, $hire_date, $gender, $birthday, $sold_conge, $profile_pic, $service, $user_id]);
                if ($result) {
                    set_message('File Uploaded Successfully');
                    redirect('index.php?users');

                } else {
                    set_message('there is an issue with the query');
                    redirect('index.php?users&failed');

                }
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}

//****  Request Management **** /

function request_leave()
{
    //
}

function display_leaves_request()
{
    //
}

function approve_disapprove_request()
{
    //
}

function single__leave_request()
{
    //
}

function update_request()
{
    //
}

function delete_request()
{
    //
}

//****  Leave Management */
function add_leave()
{
    //
}

function display_leaves()
{
    //
}

function update_leave()
{
    //
}

function delete_leave()
{
    //
}

//*** department or services */

//Display services in the adding users Form
function display_service_in_form()
{
    global $pdo;
    $sql = "SELECT id, service_name FROM service";
    $services = $pdo->query($sql)->fetchAll();

    foreach ($services as $service) {
        echo <<<service
        <option value="{$service->id}">{$service->service_name}</option>;
service;

    }

}

//Adding services to the database
function add_services()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try {
            $sql = "INSERT INTO service(service_name, service_shortname) VALUES(?, ?)";
            $add_service = $pdo->prepare($sql);
            $add_service->execute([$_POST['service_name'], $_POST['service_short_name']]);
            redirect('index.php?manage_services');
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}

//Displaying services in Manage services page
function display_services()
{
    global $pdo;
    try {

        $sql = "SELECT s.id, s.service_name , s.service_shortname, COUNT(u.username) as employee_count FROM service s LEFT OUTER join users u on s.id = u.service_id GROUP BY u.service_id, s.service_name ORDER BY s.service_shortname ";
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $service) {

            echo <<<service
        <tr>
        <td class="text-center text-muted">{$service->id}</td>
        <td class="text-center"> {$service->service_name} </td>
        <td class="text-center"> {$service->service_shortname} </td>
        <td class="text-center"> {$service->employee_count} </td>
        <td class="text-center">
            <a href="index?edit_service={$service->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <a href="index?manage_services&delete_service={$service->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-icon btn-icon-only btn btn-outline-danger">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
            </a>
        </td>
    </tr>
service;
        }
    } catch (PDOException $e) {
        echo 'query failed' . $e->getMessage();
    }
}

//Delete service
function delete_service()
{
    global $pdo;
    if (isset($_GET['delete_service'])) {
        try {
            $sql = "DELETE FROM service WHERE id = ?";
            $delete_service = $pdo->prepare($sql);
            $delete_service->execute([$_GET['delete_service']]);
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }

    }
}

