<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/class/first/bootstrap.css ">
</head>
<body>
    <center>
      <button type="button" class="btn btn-danger reta " onclick="history.back()" >بازگشت</button>
        <div class=" border border-primary bala">
            <form action="http://localhost/class/first/php/index.php" method="get">
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">اسم محصول</label>
                  <input type="text" class="form-control" id="namem"  name="name_mahsol">
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
                    <input type="text" class="form-control " id="tozihat"  name="tozihat" >

                </div>



                  <button type="submit" class="btn btn-primary">ثبت</button>
              </form>
        </div>
    </center>
</body>
</html>