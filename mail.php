<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>php mailer example</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
     <div class="container">
          <div class="card mt-5">
               <h5 class="card-title text-center mt-4">Send Email</h5>
               <form action="includes/mail.inc.php" class="form" id="mail-form" method="POST">
                    <div class="card-body mx-5">
                         <div class="mb-3">
                              <label for="text-name" class="form-label">Name</label>
                              <input type="text" class="form-control" id="text-name" name="text-name" placeholder="W.D Kumudika">
                         </div>
                         <div class="mb-3">
                              <label for="text-email" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="text-email" name="text-email" placeholder="name@example.com">
                         </div>
                         <div class="mb-3">
                              <label for="text-subject" class="form-label">Subject</label>
                              <input type="text" class="form-control" id="text-subject" name="text-subject" placeholder="email subject">
                         </div>
                         <div class="mb-3">
                              <label for="text-content" class="form-label">Example textarea</label>
                              <textarea class="form-control" id="text-content" rows="3" name="text-content" placeholder="email body ..."></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary" id="btn-send" name="btn-send">Send</button>
                    </div>
               </form>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
