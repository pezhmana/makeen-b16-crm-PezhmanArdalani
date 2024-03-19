<html lang="en" dir="rtl">
<head>
  <title>maghale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="E:\project\crm\resources\css\app.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
          <div class="container mt-3 border border-primary">
            <h2>مقالات</h2><br>
            <p><a href="/maghale/create"><button type="button" class="btn btn-primary">اضافه کردن مقاله</button></a></p>
            <table class="table table-striped">
        <thead>
          <tr>
            <th>دسته بندی</th>
            <th>تایتل</th>
            <th>نویسنده</th>

            <th>ویرایش</th>
            <th>حذف</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <form action="/maghale" method="GET">
            @foreach ($maghale as $maghal)
          <td>{{$maghal->categories}}</td>
                <td>{{$maghal->title}}</td>
                <td>{{$maghal->writer}}</td>

            <td>
                    <form action="/maghale/delete/{{$maghal->id}}" method="POST">
                      @csrf
                       @method('delete')
                        <button type="submit" value="delete" class="btn btn-danger" onclick="return confirm('حذف شود ؟')">حذف</button>
                    </form>
            </td>
                <td><a href="/maghale/edit/{{$maghal->id}}"><button type="button" class="btn btn-warning" >ویرایش</button></a></td>
            </tr>
            @endforeach

          </div>
        </form>


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

                <a href="/maghale">
                <div class="d-grid">
                  <button type="button" class="btn btn-primary btn-block">مقاله ها </button>
                </div></a> <br>
                <div class="dropdown dropstart text-end">
              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                دسته بندی ها
              </button>


              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="categories/create">اضافه کردن دسته بندی جدید</a></li>
                <li><a class="dropdown-item" href="#"></a></li>


              </ul>

            </div>
            </div>

                <button class="btn btn-secondary" type="button">A Button</button>

              </div>
            </div>


            </body>
            </html>

