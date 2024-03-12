<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/class/first/bootstrap.css ">
</head>
<body>
    <center>
      <button type="button" class="btn btn-danger reta " onclick="history.back()" >بازگشت</button>
        <div class=" border border-primary bala">
            <form action="/products/create" method="post">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">اسم محصول</label>
                  <input type="text" class="form-control" id="namem"  name="products_name">
                </div>
                <div class="mb-3">
                  <label for="pwd" class="form-label">رنگ:</label>
                  <input type="text" class="form-control" id="rang"  name="colour">
                </div>

                  <div class="mb-3 mt-3">
                    <label for="name" class="form-label">دسته بندی</label>
                    <input type="text" class="form-control" id="daste"  name="categories">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">تعداد محصول</label>
                    <input type="number" class="form-control " id="tedadm"  name="stock">
                  </div>
                  <div class="mb-3">
                    <label for="tozihat" class="form-label">توضیحات</label>
                    <input type="text" class="form-control " id="tozihat"  name="description" >

                </div>



                  <button type="submit" class="btn btn-primary">ثبت</button>
              </form>
        </div>
    </center>
</body>
</html>
