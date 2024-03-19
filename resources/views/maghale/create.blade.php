<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create maghale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <form action="/maghale/create" method="post">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">موضوع</label>
                  <select name="categories" class="form-select form-select-lg mb-3">
                    @foreach ($categories as $categories_id )
                    <option value="{{$categories_id->category_name}}">{{$categories_id->category_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="writer" class="form-label">تایتل:</label>
                  <input type="text" class="form-control" id="title"  name="title">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">نویسنده:</label>
                    <input type="text" class="form-control " id="writer"  name="writer">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="name" class="form-label">تاریخ</label>
                    <input type="text" class="form-control" id="post_date"  name="date">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">منبع</label>
                    <input type="text" class="form-control " id="source"  name="source">
                  </div>



                  <button type="submit" class="btn btn-primary">ثبت</button>
              </form>
        </div>
    </center>
</body>
</html>
