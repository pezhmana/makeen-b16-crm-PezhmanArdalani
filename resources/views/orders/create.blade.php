<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <center>
      <button type="button" class="btn btn-danger reta " onclick="history.back()" >بازگشت</button>
        <div class=" border border-primary bala">
            <form action="http://localhost/class/first/php/index.php" method="get">
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
                    <input type="number" class="form-control " id="tedad"  name="tedad">
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
                    <input type="text" class="form-control " id="tozihat"  name="tozihat" >


                  <button type="submit" class="btn btn-primary">ثبت</button>
              </form>
        </div>
    </center>
</body>
</html>
