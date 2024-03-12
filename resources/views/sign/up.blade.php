<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/class/first/bootstrap.css ">
</head>
<body>
    <center>
        <div class="border border-primary bala">
        <form action="http://localhost/class/first/php/index.php?type=signup" method="post" >
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">نام</label>
                <input type="text" class="form-control wi" id="name" placeholder="نام خود را وارد کنید" name="name">
              </div>
              <div class="mb-3 mt-3">
                <label for="lastname" class="form-label">نام خانوادگی</label>
                <input type="text" class="form-control wi" id="last_name" placeholder="نام خانوادگی خود را وارد کنید" name="last_name">
              </div>
            <div class="mb-3 mt-3">
              <label for="phone" class="form-label">شماره همراه:</label>
              <input type="number" class="form-control wi" id="phone" placeholder="تلفن" name="phone">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">رمز ورود:</label>
              <input type="password" class="form-control wi" id="pwd" placeholder="رمز خود را وارد کنید" name="password" >
            </div>
            <div class="mb-3 mt-3">
              <label for="country" class="form-label">کشور </label>
              <input type="text" class="form-control wi" name="country" id="country" value="iran">
            </div>
            <div class="mb-3">
              <label for="jensiat" class="form-label">جسنیت :</label><br>

              <label for="male" class="form-label" >مرد </label><input type="radio" name="jensiat" value="male">
              <label for="female" class="form-label">زن </label><input type="radio" name="jensiat" value="female">
            </div>
            <button type="submit" class="btn btn-primary">ثبت</button><br>
            <a href="index.html">ورود </a>

          </form>
        </center>
    </div>

</body>
</html>
