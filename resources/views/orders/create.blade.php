<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <form action="/orders/create" method="post">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">اسم</label>
                  <input type="text" class="form-control" id="name"  name="name" >
                </div>
                <div class="mb-3">
                  <label for="pwd" class="form-label">فامیلی:</label>
                  <input type="text" class="form-control" id="lastname"  name="last_name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">شماره همراه:</label>
                    <input type="number" class="form-control " id="phone"  name="phone">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="name" class="form-label">اسم سفارش</label>
                    <input type="text" class="form-control" id="sefaresh"  name="order_name">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">تعداد سفارش</label>
                    <input type="number" class="form-control " id="tedad"  name="number">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">شماره سفارش</label>
                    <input type="number" class="form-control " id="shomares"  name="order_number">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">قیمت</label>
                    <input type="number" class="form-control " id="gheimat"  name="price">
                  </div>
                  <div class="mb-3">
                    <label for="tozihat" class="form-label">توضیحات</label>
                    <input type="text" class="form-control " id="tozihat"  name="description" >


                  <button type="submit" class="btn btn-primary">ثبت</button>
              </form>
        </div>
    </center>
</body>
</html>
