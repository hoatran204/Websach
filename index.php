<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sachhay</title>
    <script src="scr.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="fontawesome-free-6.5.1-web/css/all.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="nav1">
            <h1 class="slogan">Sách là "liều thuốc" cho tâm hồn.</h1>
            <div class="nav2">
                <input placeholder="Tìm sách bạn muốn" class="inputSearch">
                <button class = "search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="information">
                <div class = "back" onclick="Logout()">
                    <i class="fa-solid fa-house-chimney"></i>
                </div>
                <ul class="infor">
                    <li onclick="Signin()">Đăng nhập</li>
                    <li class="enrol" onclick="handleEnrolClick()" id ="enrol">Đăng ký</li>
                    
                </ul>
                
            </div>
            
            <div class="idngdung">
                <ul >
                    <li class="idngdung1"></li>
                    <li class="caret-down"><i id="caret-down" onclick="Logoutview()" class="fa-solid fa-caret-down"></i></li>
                    <span class="logout" onclick="Logout()">Đăng xuất</span>
                </ul>
            </div>
            <div class="menu-icon" onclick="toggleMenu()">
                <i class="fa-solid fa-user"></i> <!-- Biểu tượng menu -->
            </div>

        </nav>
        
        <nav class="nav2s">
            <div>
                <input placeholder="Tìm sách bạn muốn" class="inputSearch2">
                <button class = "search2"><i class="fa-solid fa-magnifying-glass"></i></button>
                <i class="fa-light fa-ellipsis-stroke"></i>
            </div>
            <div class="nav3s" onclick="ClickHomePage()">
                <i class="fa-solid fa-bars"></i>
            </div>  
        </nav>
        <nav class="nav3">
            <div class="change">
                <div class="home"><i class="fa-solid fa-house"></i></div>
                
                <ul>
                    <li>Trang chủ</li>
                    <li>Sách của bạn</li>
                    <li>Sách hay</li>
                    <li>Quốc gia</li>
                    <li>Thể loại</li>
                    <li>Liên hệ</li>
                </ul>
            </div>
        </nav>
        
    </header>
    
    <div class="logout2">
        <i onclick="handleHome()" class="fa-solid fa-house"></i>
        <button>
            <span onclick="Logout()">Đăng xuất</span>
        </button>
    </div>
    <div class="signin">
        <i onclick="handleHome()" id="home" class="fa-solid fa-backward"></i>
        <form class = "lognin" action ="" method="post">
            <input type="hidden" name="login" value="1">
            <h1>Đăng nhập</h1>
            <p class="ider">Id không tồn tại</p>
            <div class="input-icon">
                <input class="idlog" name="idlog" type="text" placeholder="Id:" required>
                <i class="fa-solid fa-id-card"></i>
            </div>
            <p class="passer">Sai mật khẩu</p>
            <div class="input-icon">
                <input class="pass2" name="pass2" type="password" placeholder="Mật khẩu" required>
                <span onclick="PassType2()" class="show-btn">
                    <i id="show2" class="fas fa-eye"></i>
                </span>
            </div>


            <button class="logbut" type="submit">Đăng nhập</button>
            <div class="logbut2">
                <p>Chưa có tài khoản?</p>
                <span onclick="Login()">Đăng Ký</span>
            </div>

        </form>
    </div>
    <div class="HomePage">
        <h1 class="category">Sách hot</h1>
    </div>
    <div class ="register">
        <i onclick="handleHome()" id="home" class="fa-solid fa-backward"></i>
        <form id="myForm" class="form-register" action="" method="post" >
            <input type="hidden" name="register" value="1">
            <h1 class="sachhay">ĐĂNG KÝ</h1>
            <label class="input-label">
                <i class ="fa-solid fa-user"></i>
                <input name="user" type="text" required placeholder="Tên người dùng:">
            </label><br>
            <p class='error-phone'>Số điện thoại đã tồn tại</p>
            <label class="input-label">
                <i class ="fa-solid fa-phone"></i>
                <input name = "phone" placeholder="Số điện thoại:" id="myInput" type="tel" pattern="[0-9]{10}"  minlength="10" maxlength="10" required><br>
            </label><br>
            <p class='error-email'>Email đã tồn tại</p>
            <label class="input-label">
                <i class="fa-solid fa-envelope"></i>
                <input name="email" placeholder="Email:" type="email" required><br>
            </label><br>
            <p class='error-id'>Id đã tồn tại</p>
            <label class="input-label">
                <i class="fa-regular fa-id-card"></i>
                <input name ="id" placeholder="Id đăng ký" type="text" required><br>
            </label><br>
            <label class="input-label" id="pass">
                <i class ="fa-solid fa-lock"></i>
                <input class="pass" 
                    name ="pass"
                    placeholder="Mật khẩu" 
                    type="password" 
                    title="Mật khẩu phải có ít nhất 8 ký tự, 1 chữ cái viết hoa, 1 ký tự đặc biệt, 1 chữ thường và 1 chữ số" 
                    minlenght= "8"
                    pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"
                    required>
                <span onclick="PassType()" class="show-btn">
                    <i id="show" class="fas fa-eye"></i>
                </span>

                <br>
            </label><br>
            
            <button class="sub1" type="submit">Đăng ký</button>
            <div class="sub2">
                <p>Đã có tài khoản?</p>
                <span onclick="Signin()">Đăng nhập</span>
            </div>
        </form>
    </div>
    
    <?php
    
    ini_set('display_errors', 0);
    
    // Thông tin kết nối đến MySQL
    $server = "localhost"; // hoặc tên máy chủ MySQL
    $username = "root"; // tên người dùng MySQL
    $password = "123456"; // mật khẩu MySQL
    $database = "register"; // tên cơ sở dữ liệu MySQL
    

    // Kết nối đến MySQL
    $conn = new mysqli($server, $username, $password, $database);
    if ($conn->connect_error) {
        die("Không kết nối :" . $conn->connect_error);
    }
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
        // Lấy dữ liệu người dùng nhập
        $user = $_POST['user'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); // Hash mật khẩu
        $id = $_POST['id'];
        $idlog = $_POST['idlog'];
        
     
        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
        $sql = "SELECT * FROM form WHERE Email = '$email'";
        $result = $conn->query($sql);

        // Kiểm tra email trong cơ sở dữ liệu
        if ($result->num_rows > 0) {
        
            echo "<script>document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('.register').style.display = 'block';
                document.querySelector('.error-email').style.display = 'block';
                document.querySelector('.error-email').style.positive = 'fixed';
            });</script>";
        }
        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
        $sql = "SELECT * FROM form WHERE PhoneNumber = '$phone'";
        $result = $conn->query($sql);

        // Kiểm tra email trong cơ sở dữ liệu
        if ($result->num_rows > 0) {
        
            echo "<script>document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('.register').style.display = 'block';
                document.querySelector('.error-phone').style.display = 'block';
                document.querySelector('.error-phone').style.positive = 'fixed';
            });</script>";
        }
         // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
        $sql = "SELECT * FROM form WHERE Id = '$id'";
        $result = $conn->query($sql);

        // Kiểm tra email trong cơ sở dữ liệu
        if ($result->num_rows > 0) {
        
            echo "<script>document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('.register').style.display = 'block';
                document.querySelector('.error-id').style.display = 'block';
                document.querySelector('.error-id').style.positive = 'fixed';
            });</script>";
        }
         
        // Thêm vào MySQL
        $sql_insert = "INSERT INTO form VALUES ('$user', '$phone', '$email', '$id','$pass')";
        if ($conn->query($sql_insert) === TRUE) {
            // Ghi nhận rằng dữ liệu đã được thêm thành công và thực hiện các hành động khác nếu cần
            echo "<script>document.addEventListener('DOMContentLoaded', function() {
                var signinElement = document.querySelector('.signin');
                if (signinElement) {
                    signinElement.style.setProperty('display', 'block', 'important');
                } else {
                    console.error('Không tìm thấy phần tử có class là \"signin\"');
                }
            });</script>";

        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }

    ?>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
        $id = $_POST["idlog"];
        $pass = $_POST['pass2'];
        $sql = "SELECT * FROM form WHERE Id = '$id' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password_from_database = $row["Pass"];
            // So sánh mật khẩu đã nhập với mật khẩu trong cơ sở dữ liệu
            if (password_verify($pass, $hashed_password_from_database)) {
                echo "<script>document.addEventListener('DOMContentLoaded', function() {
                    document.querySelector('.information').style.display = 'none';
                    document.querySelector('.menu-icon').style.display = 'none';
                    document.querySelector('.idngdung').style.setProperty('display', 'block', 'important');    
                    document.querySelector('.idngdung1').innerHTML =  '$id';       
                });</script>";
            } else {
                echo "<script>document.addEventListener('DOMContentLoaded', function() {
                    document.querySelector('.signin').style.display = 'block';
                    document.querySelector('.passer').style.display = 'block';
                });</script>";
            }
        } else {
            echo "<script>document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('.signin').style.display = 'block';
                document.querySelector('.ider').style.display = 'block';
            });</script>";
        }
    }
    ?>

</body>
</html>
<?php
