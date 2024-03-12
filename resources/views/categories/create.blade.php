<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <center>
     <button type="button" class="btn btn-danger reta " onclick="history.back()" >بازگشت</button>
        <div class=" border border-primary bala">
            <form action="http://localhost/class/first/php/index.php" method="get">
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label"> اسم دسته بندی</label>
                  <input type="text" class="form-control" id="category_name"  name="category_name">
                </div>
                <div class="mb-3">
                  <label for="zirg" class="form-label">زیر گروه دارد ؟</label><br>
                  <input type="text" class="form-control" id="zirg"  name="zirg" >
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label"> اسم زیرگروه ها</label>
                    <input type="text" class="form-control" id="zir_groha"  name="zir_groha">
                  </div>

          </div>

                <button type="submit" class="btn btn-primary" >ثبت</button>

              </div>
              <


    </center>
</body>
</html>

