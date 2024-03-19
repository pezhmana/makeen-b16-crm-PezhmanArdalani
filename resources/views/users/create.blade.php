
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css ">
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
            <form action="/users/create" method="post">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">اسم</label>
                  <input type="text" class="form-control" id="name"  name="name">
                </div>
                <div class="mb-3">
                  <label for="lastname" class="form-label">فامیلی:</label>
                  <input type="text" class="form-control" id="last_name"  name="last_name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">شماره همراه:</label>
                    <input type="number" class="form-control " id="phone"  name="phone">
                  </div>
                  <div class="mb-3">
                    <label for="pwd" class="form-label">رمز ورود:</label>
                    <input type="password" class="form-control " id="pwd"  name="password" >

                </div>
                <div class="mb-3">
                  <label for="country" class="form-label">کشور:</label>
                  <input type="text" class="form-control " id="country"  name="country" >

              </div>
              <div class="mb-3">
                <label for="jensiat" class="form-label">جسنیت:</label>
               <select name="gender" class="form-select form-select-lg mb-3">
                <option value="male">مرد</option>
                <option value="female">زن</option>
               </select>

            </div>
            <div class="mb-3">
              <label for="tozihat" class="form-label">توضیحات</label>
              <input type="text" class="form-control " id="tozihat"  name="description" >

          </div>

                <button type="submit" class="btn btn-primary" >ثبت</button>

              </div>
            </form>



    </center>
</body>
</html>

