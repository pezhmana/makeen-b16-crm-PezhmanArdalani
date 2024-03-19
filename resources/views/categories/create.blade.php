<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/class/first/bootstrap.css ">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('users.index')}}">کاربران</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('orders.index')}}">سفارشات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('products.index')}}">محصولات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('maghale.index')}}">مقالات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('categories.index')}}">دسته بندی</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">اضافه کردن</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('products.createGet')}}">محصول </a></li>
                <li><a class="dropdown-item" href="{{route('orders.createGet')}}">سفارش</a></li>
                <li><a class="dropdown-item" href="{{route('users.createGet')}}">کاربر</a></li>
                <li><a class="dropdown-item" href="{{route('maghale.createGet')}}">مقاله</a></li>
                <li><a class="dropdown-item" href="{{route('categories.createGet')}}">دسته بندی </a></li>
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

    <center>
     <button type="button" class="btn btn-danger reta " onclick="history.back()" >بازگشت</button>
        <div class=" border border-primary bala">
            <form action="/categories/create" method="post">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label"> اسم دسته بندی</label>
                  <input type="text" class="form-control" id="category_name"  name="category_name">
                </div>
                <div class="mb-3">
                  <label for="zirg" class="form-label">زیر گروه دارد ؟</label><br>
                  <select name="supgroup" id="">
                    <option value="yes">اره</option>
                    <option value="no">نه</option>
                  </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label"> اسم زیرگروه ها</label>
                    <input type="text" class="form-control" id="zir_groha"  name="supgroup_name">
                  </div>

          </div>

                <button type="submit" class="btn btn-primary" >ثبت</button>

              </div>
              <


    </center>
</body>
</html>

