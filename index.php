<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekal Chat Box</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3d516bf83c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Ekal Chat Box</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Ad</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Soyad</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Adresi</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Şifre</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Fotoğraf Seç</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Zaten kaydoldun mu? <a href="#">Giriş Yap</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>
</html>