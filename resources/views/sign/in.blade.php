<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://localhost:8000/project/crm/resources/css/app.css ">
</head>

<body>

  <center>
    <div class="border border-primary bala">
      <form action="http://localhost/class/first/php/index.php?type=login" method="post">
        <div class="mb-3 mt-3">
          <label for="phone" class="form-label">شماره همراه:</label>
          <input type="number" class="form-control wi" id="phone" placeholder="تلفن" name="phone">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">رمز ورود:</label>
          <input type="password" class="form-control wi" id="pwd" placeholder="رمز خود را وارد کنید" name="password">
        </div>
        <button type="submit" class="btn btn-primary">ثبت</button><br>
        <a href="signup.html">ثبت نام</a>
      </form>
  </center>
  </div>


</body>

</html>
