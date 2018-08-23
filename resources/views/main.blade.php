<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Gate</title>
  <style>
    body {
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
      height: 100%;
      display: flex;
    }
    form {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }
  </style>
</head>
<body class="text-center">
  <form class="form-signin">
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">CODE를 입력해주세요.</h1>
        <label for="inputCode" class="sr-only">CODE</label>
        <input type="text" id="inputCode" class="form-control mb-3" placeholder="Church code please" required="" autofocus="">
        <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Confirm</button>
        <p class="mt-5 mb-3 text-muted">© 2018-ing By YoonLab</p>
      </form>
</body>
</html>
