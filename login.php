<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>


   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
   <!-- MDB -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>


   <!--Main layout-->
   <main class="mt-5">
      <div class="container">
         <!--Section: Content-->

         <!-- FORMULAIRE -->
         <section class="mb-5">
            <h4 class="mb-5 text-center"><strong>Entrez vos identifiants :</strong></h4>

            <div class="row d-flex justify-content-center">
               <div class="col-md-4">

                  <form name="form_log" action="dashboard.php" onsubmit="aff_ids()" method="post">

                     <!-- Email input -->
                     <div class="form-outline mb-4">
                        <input type="email" id="email_log" class="form-control" />
                        <label class="form-label" for="form3Example3">Email address</label>
                     </div>

                     <!-- Password input -->
                     <div class="form-outline mb-4">
                        <input type="password" id="id_log" class="form-control" />
                        <label class="form-label" for="form3Example4">Password</label>
                     </div>

                     <!-- Submit button -->
                     <div class="row">
                        <div class="col-lg-6 d-grid justify-content-start">
                           <a href="index.php" class="btn btn-primary me-md-2" type="button">Accueil</a>
                        </div>
                        <div class="col-lg-6 d-grid justify-content-end">
                           <button type="submit" name="submit" class="btn btn-primary" id="boutton_submit" value="connexion">Connexion</button>
                        </div>
                     </div>

                  </form>
               </div>
            </div>
         </section>
         <!--Section: Content-->
      </div>
   </main>
   <!--Main layout-->

   <!--Footer-->
   <footer class="bg-light text-lg-start">
      <hr class="m-0" />
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         <!-- © 2020 Copyright: -->
         <a class="text-dark" href="#">sQUIZZme.com</a>
      </div>
      <!-- Copyright -->
   </footer>
   <!--Footer-->
   <script>
      function aff_ids() {
         //récupérer les valeur du form
         var email_log = document.getElementById("email_log").value;
         var id_log = document.getElementById("id_log").value;

         // Afficher la valeur
         console.log("Votre E-mail: " + email_log);
         console.log("Votre identifiant: " + id_log);
      }
   </script>
   <!-- MDB -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>