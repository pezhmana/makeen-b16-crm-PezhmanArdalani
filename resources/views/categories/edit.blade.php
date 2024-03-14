<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/class/first/bootstrap.css ">
</head>
<body>
    <center>
     <button type="button" class="btn btn-danger reta " onclick="history.back()" >بازگشت</button>
        <div class=" border border-primary bala">
            <form action="/categories/edit/{{$categories->id}}" method="post">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label"> اسم دسته بندی</label>
                  <input type="text" class="form-control" id="category_name"  name="category_name" value="{{$categories->category_name}}">
                </div>
                <div class="mb-3">
                  <label for="zirg" class="form-label">زیر گروه دارد ؟</label><br>
                  <select name="supgroup" id="">
                    <option value="yes" {{$categories->supgroup == 'yes' ? 'selected' : ''}} >اره</option>
                    <option value="no" {{$categories->supgroup == 'no' ? 'selected' : ''}}>نه</option>
                  </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label"> اسم زیرگروه ها</label>
                    <input type="text" class="form-control" id="zir_groha"  name="supgroup_name" value="{{$categories->supgroup_name}}">
                  </div>

          </div>

                <button type="submit" class="btn btn-primary" >ثبت</button>

              </div>
              <


    </center>
</body>
</html>

