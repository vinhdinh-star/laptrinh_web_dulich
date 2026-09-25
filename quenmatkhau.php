<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';
require 'CTT_CNTT46A/TrangChu/connect/ketnoipdo.php'; 

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['content'] == "gmailotp") {
    $stmt = $conn->prepare("SELECT * FROM nguoidung WHERE email = :email");
    $stmt->execute(['email' => $_POST['gmail']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row > 0) {
 
        $_SESSION['reset_id'] = $row['id'];
        $_SESSION['reset_email'] = $row['email'];

        $so = mt_rand(1000, 9999);

        $_SESSION['otp'] = $so;

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'hotrodulich.ctt@gmail.com';
            $mail->Password   = 'duvsanjkfvqextly';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('hotrodulich.ctt@gmail.com', 'Hotro Du Lich');
            $mail->addAddress($_SESSION['reset_email']);

            $mail->isHTML(true);
            $mail->Subject = 'Ma xac nhan doi mat khau (From: hotrodulich)';
            $mail->Body = '
                <h3>Xin chào!</h3>
                <p>Bạn hoặc ai đó đã yêu cầu đổi mật khẩu cho tài khoản của bạn.</p>
                <p>Mã xác nhận của bạn là: <strong>' . $so . '</strong></p>
                <p>Nếu không phải bạn yêu cầu, hãy bỏ qua email này.</p>
            ';

            $mail->send();
            $message = "Mã xác nhận đã được gửi đến email của bạn.";
        } catch (Exception $e) {
            $message = "Lỗi gửi email: {$mail->ErrorInfo}";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['content'] == "doimatkhau") {
    $new_pass = $_POST['new_password'] ?? '';
    $confirm_pass = $_POST['confirm_password'] ?? '';
    $input_otp = $_POST['otp'] ?? '';

    if (!isset($_SESSION['otp']) || $input_otp != $_SESSION['otp']) {
        $message = "Mã xác nhận không đúng.";
    } elseif ($new_pass !== $confirm_pass) {
        $message = "Mật khẩu mới và xác nhận không khớp.";
    } elseif (empty($new_pass)) {
        $message = "Mật khẩu mới không được để trống.";
    } else {
        $hashed = password_hash($new_pass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE nguoidung SET password = :pass WHERE id = :id");
        if ($stmt->execute(['pass' => $hashed, 'id' => $_SESSION['reset_id']])) {
            unset($_SESSION['otp'], $_SESSION['reset_email'], $_SESSION['reset_id']);
            header("Location: index.php?reset=success");
            exit;
        } else {
            $message = "Lỗi cập nhật mật khẩu.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8" />
<title>Đặt lại mật khẩu</title>
<style>
    html, body {
        height: 100%;
        margin: 0;
    }

    input {
        padding: 5px;
        font-size: 20px;
        border: none;
        background-color: #f5f5f5;
        border-radius: 5px;
        transition: 0.3s;
        outline: none;
    }

    input:focus, input:hover {
        background-color: #e4e4e4;
    }

    button {
        padding: 7px;
        font-size: 20px;
        border: none;
        background-color: #ff7f7f;
        border-radius: 5px;
        transition: 0.2s;
    }

    button:hover {
        background-color: #ea6969;
    }

    form {
        margin-bottom: 20px;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 5px;
        background-color: #fafafa;
        opacity: 0.8;
    }

    .message {
        padding: 10px;
        background: #fff3cd;
        color: #856404;
        border: 1px solid #ffeeba;
        border-radius: 5px;
        margin: 10px;
        font-size: 18px;
    }
</style>
</head>
<body style="display: flex; justify-content: center; align-items: center; flex-direction: column; background-image: url('https://images.pexels.com/photos/12105519/pexels-photo-12105519.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); ">

<?php if (!empty($message)) : ?>
    <div class="message"><?= htmlspecialchars($message) ?></div>
<?php endif; ?>

<form method="post" action="">
    <h2 style="font-size: 30px;">Nhập gmail tài khoản để nhận otp</h2>
    <input type="hidden" name="content" value="gmailotp">
    <input type="email" name="gmail" placeholder="nhập gmail" required /><br>
    <button type="submit">nhận otp</button>
</form>

<form method="post" action="">
    <h2 style="font-size: 30px;">Đặt lại mật khẩu</h2>
    <input type="hidden" name="content" value="doimatkhau">
    <input type="text" name="otp" placeholder="nhập mã otp" required /><br>
    <input type="password" name="new_password" placeholder="nhập khẩu mới" required /><br>
    <input type="password" name="confirm_password" placeholder="nhập lại mật khẩu mới" required /><br>
    <button type="submit">Đặt lại mật khẩu</button>
</form>

</body>
</html>
