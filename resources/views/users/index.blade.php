<html lang="en" dir="rtl">
<head>
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="E:\project\crm\bootstrap " rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/class/first/karbar/modi.php">کاربران</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/class/first/sefaresh/sefaresh.php">سفارشات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/class/first/mahsol/mahsol.php">محصولات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/class/first/maghale/posts.php">مقالات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/class/first/categories/categories.php">دسته بندی</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">اضافه کردن</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/class/first/mahsol/newm.php">محصول </a></li>
            <li><a class="dropdown-item" href="http://localhost/class/first/sefaresh/news.php">سفارش</a></li>
            <li><a class="dropdown-item" href="http://localhost/class/first/karbar/newc.php">کاربر</a></li>
            <li><a class="dropdown-item" href="http://localhost/class/first/maghale/new_maghale.php">مقاله</a></li>
            <li><a class="dropdown-item" href="http://localhost/class/first/categories/new_categories.php">دسته بندی </a></li>
          </ul>
        </li>
        <li class="nav-item">
          <button class="btn  btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            منو برای اینده
          </button>
        </li>


      </ul>
    </div>
  </nav>
      <hr>

<div class="container mt-3 border border-primary">
  <h2>کاربران</h2><br>
  <p><a href="newc.php"><button type="button" class="btn btn-primary">اضافه کردن کاربر</button></a></p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>اسم</th>
        <th>فامیلی</th>
        <th>شماره همراه</th>
        <th>رمز </th>


        <th>حذف</th>
        <th>ویرایش</th>
        <th>جنسیت</th>
      </tr>
    </thead>
    <tbody>


        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href=""><button type="button" class="btn btn-danger" onclick="return confirm('حذف شود ؟')">حذف</button></a></td>
            <td><a href="/users/edit"><button type="button" class="btn btn-warning" >ویرایش</button></a></td>
            <td>
        </tr>



    </tbody>
  </table>
</div>
</div>
<div class="offcanvas offcanvas-start text-bg-dark" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">منو </h1>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <div class="d-grid">

      <div class="input-group ">
        <div class="form-outline" data-mdb-input-init>
          <input type="search" id="form1" class="form-control" placeholder="سرج کنید" />

        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-success btn-block"> برو برام پیدا کن</button>
        </div>
      </div>
    </div>
    <br>

    <a href="http://localhost/class/first/maghale/posts.php">
    <div class="d-grid">
      <button type="button" class="btn btn-primary btn-block">مقاله ها </button>
    </div></a> <br>
    <div class="dropdown dropstart text-end">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    دسته بندی ها
  </button>


  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="http://localhost/class/first/categories/new_categories.php">اضافه کردن دسته بندی جدید</a></li>
    <li><a class="dropdown-item" href="#"></a></li>


  </ul>

</div>
</div>

    <button class="btn btn-secondary" type="button">A Button</button>

  </div>
</div>


</body>
</html>

