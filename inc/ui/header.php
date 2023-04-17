<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
        crossorigin="anonymous">
</head>


<body class="bg-dark">
<nav class="navbar bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?=$path_to_root.'/index.php'?>">
  <img src="<?=$path_to_root.'/assets/images/logo.png'?>" alt="StrikeOut" 
        class="rounded" width="140" height="60"></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" i
      data-bs-target="#navbarNav" aria-controls="navbarNav" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="navbar-item">
          <a class="nav-link" 
            href="<?=$path_to_root.'/pages/invoice.php'?>">Invoice</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link" 
            href="<?=$path_to_root.'/pages/setup.php'?>">Configure</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"           
            href="<?=$path_to_root.'/pages/webhooks.php'?>" role="button"  
            data-bs-toggle="dropdown" aria-haspopup="true" 
             aria-expanded="false" >Webhooks</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" 
              href="<?=$path_to_root.'/webhooks/csv'?>">CSV Payments</a></li>
            <li><a class="dropdown-item" href="<?=$path_to_root
             .'/webhooks/frontaccounting'?>">FrontAccounting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" 
                   href="<?=$path_to_root.'/pages/webhooks.php'?>">Subscriptions
                </a></li>
          </ul>
        </li>
        <li class="navbar-item">
          <a class="nav-link" 
            href="<?=strtok($_SERVER["REQUEST_URI"], '?')
            .'?logout=true'?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
