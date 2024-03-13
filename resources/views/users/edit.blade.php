
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/class/first/bootstrap.css ">
</head>
<body>

    <center>
      <button type="button" class="btn btn-danger reta " onclick="history.back()" >بازگشت</button>
        <div class=" border border-primary bala">
            <form action="/users/edit/{{$user->id}}" method="post">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">اسم</label>
                  <input type="text" class="form-control" id="name"  name="name" value="{{$user->name}}">
                </div>
                <div class="mb-3">
                  <label for="last_name" class="form-label">فامیلی:</label>
                  <input type="text" class="form-control" id="last_name"  name="last_name"  value="{{$user->last_name}}">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">شماره همراه:</label>
                    <input type="number" class="form-control " id="phone"  name="phone"  value="{{$user->phone}}">
                  </div>
                  <div class="mb-3">
                    <label for="pwd" class="form-label">رمز ورود:</label>
                    <input type="password" class="form-control " id="pwd"  name="password"  value="{{$user->password}}" >

                </div>
                <div class="mb-3">
                  <label for="country" class="form-label">کشور:</label>
                  <input type="text" class="form-control " id="country"  name="country"  value="{{$user->country}}" >

              </div>
              <div class="mb-3">
                <label for="jensiat" class="form-label">جسنیت:</label>
                <select name="gender" id="">
                    <option value="male" {{$user->gender == 'male' ? 'selected' : ''}}>مرد</option>
                    <option value="female" {{$user->gender == 'female' ? 'selected' : ''}}>زن</option>
                  </select>

            </div>
            <div class="mb-3">
              <label for="tozihat" class="form-label">توضیحات</label>
              <input type="text" class="form-control " id="tozihat"  name="description" value="{{$user->description}}" >

          </div>

                <button type="submit" class="btn btn-primary" >ثبت</button>

              </div>
            </form>



    </center>
</body>
</html>

