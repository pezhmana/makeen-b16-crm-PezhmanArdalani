<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create maghale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <center>
        <button type="button" class="btn btn-danger reta " onclick="history.back()" >بازگشت</button>
        <div class=" border border-primary bala">
            <form action="http://localhost/class/first/php/index.php" method="get">
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">موضوع</label>
                  <input type="text" class="form-control" id="postcat"  name="categories" >
                </div>
                <div class="mb-3">
                  <label for="writer" class="form-label">تایتل:</label>
                  <input type="text" class="form-control" id="post_title"  name="title">
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
