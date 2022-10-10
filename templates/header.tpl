<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cervecera</title>
</head>
    <body>
    
    <nav class="navbar navbar-expand-lg bg-light">

      <div>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Cervecera</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="category">Categorias</a>
          </li>

          </li>
            {if !isset($smarty.session.USER_ID)}
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="userLogin">Login</a>
              </li>
            {else} 
              <li class="nav-item ml-auto">
              <a class="nav-link" aria-current="page" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
              </li>
            {/if}


      </div>

  </nav>