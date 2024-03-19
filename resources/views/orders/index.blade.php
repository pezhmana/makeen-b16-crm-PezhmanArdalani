<html lang="en" dir="rtl">
<head>
  <title>orders</title>
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
        <h2>سفارشات</h2><br>
        <p><a href="/orders/create"><button type="button" class="btn btn-primary">اضافه کردن سفارش</button></a></p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>اسم</th>
              <th>فامیلی</th>
              <th>شماره همراه</th>

              <th>حذف</th>
              <th>ویرایش</th>

              <th>تعداد</th>
              <th>شماره سفارش</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order )



                <tr>
                  <td>{{$order->name}}</td>
                  <td>{{$order->last_name}}</td>
                  <td>{{$order->phone}}</td>
                  <td>
                    <form action="/orders/delete/{{$order->id}}" method="POST">
                        @csrf @method('delete')
                        <button type="submit" value="delete" class="btn btn-danger" onclick="return confirm('حذف شود ؟')">حذف</button>
                    </form></td>
                  <td><a href="/orders/edit/{{$order->id}}"><button type="button" class="btn btn-warning">ویرایش</button></a></td>
                  <td>{{$order->number}}</td>
                  <td>{{$order->order_number}}</td>

                </tr>
                @endforeach

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

