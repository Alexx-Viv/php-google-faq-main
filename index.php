<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
      <header>
        <nav>
            <div class="row justify-content-between">
            <div class="col-3">
                <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="google-logo">
                <span>Privacy e termini</span>
            </div>
            <div class="col-3 d-flex justify-content-end">
                <span><i class="fas fa-ellipsis-v"></i></span>
                <span><i class="fas fa-user-circle fa-2x"></i></span>
            </div>
        </div>
            <div class="row">
                <div class="col-12 mt-4">
                <ul>
                    <li>Introduzione</li>
                    <li>Norme sulla Privacy</li>
                    <li>termini di servizio</li>
                    <li>Tecnologie</li>
                    <li class="active">Domande frequenti</li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

        <main class="container">
        <?php foreach ($google_faq as $faq) { ?>
            <section>
                <?php echo $faq['question'] ?>
                <?php echo $faq['answer'] ?>
            </section>
        <?php } ?>
    </main>

        <footer>
        <div class="container">
            <div class="row">
            <div class="col-6">
                <div>
                    <span>Google</span>
                    <span> - </span>
                    <span>Tutto su Google</span>
                    <span> - </span>
                    <span>Privacy</span>
                    <span> - </span>
                    <span>Termini</span>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end">
                    <select>
                        <option value="Italiano">Italiano</option>
                        <option value="Inglese">Inglese</option>
                        <option value="Francese">Francese</option>
                        <option value="Spagnolo">Spagnolo</option>
                    </select>
            </div>
        </div>
    </footer>
  
</body>
</html>