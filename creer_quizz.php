<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Création d'un quizz</title>


   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
   <!-- MDB -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
   <!--Main Navigation-->
   <header>
      <style>
         .label-file {
            cursor: pointer;
            color: #00b1ca;
            font-weight: bold;
         }

         .label-file:hover {
            color: #25a5c4;
         }

         /* et on masque le input */
         .input-file {
            display: none;
         }
      </style>
   </header>
   <!--Main Navigation-->

   <!--Main layout-->
   <main class="mt-5">
      <div class="container-sm">

         <!-- <form class="needs-validation" novalidate> -->
         <!--Section: Content-->
         <section>
            <h4 class="mb-5 text-center"><strong>Création d'un QUIZZ</strong></h4>

            <form name="form_log" action="dashboard.html" onsubmit="aff_q()" method="post"> <!-- </form> -->

               <div class="row">
                  <div class="col-2">
                     <label for="lastName" class="form-label">Quizz n°</label>
                     <select class="select form-select form-select-sm" aria-label="Default select example">
                        <option selected>Choisissez votre quizz</option>
                        <option value="1">Quizz 1</option>
                        <option value="2">Quizz 2</option>
                        <option value="3">Quizz 3</option>
                        <option value="3">Quizz 4</option>
                        <option value="3">Quizz 5</option>
                     </select>
                  </div>
                  <div class="col-2">
                     <!-- <label for="lastName" class="form-label">Question n°:</label>
                     <input type="text" class="form-control" id="id_question" placeholder="" value="" disabled required> -->
                     <label for="lastName" class="form-label">Question n°:</label>
                     <select class="select form-select form-select-sm" aria-label="Default select example">
                        <option selected>Choisissez votre Question</option>
                        <option value="1">Question 1</option>
                        <option value="2">Question 2</option>
                        <option value="3">Question 3</option>
                        <option value="3">Question 4</option>
                        <option value="3">Question 5</option>
                     </select>
                  </div>
                  <div class="col-sm-5">
                     <label for="file" class="label-file">Choisir une image</label>
                     <input id="file" class="input-file" type="file">
                     <input type="text" class="form-control" id="id_photo" placeholder="" disdabled>

                     <!-- <label for="Photo" class="form-label">Photo</label><br> -->
                     <!-- <input type="file" id="myfile" title="dd" name="myfile"><br><br> -->
                     <!-- <input type="file" class="form-control" id="id_photo" placeholder="" value="" required> -->
                  </div>
               </div>
               <div class="row">
                  <!-- question -->
                  <!-- **************************************** -->
                  <div class="col-12 mt-3">
                     <label for="num_q" class="form-label">Question</label>
                     <div class="input-group has-validation">
                        <input type="text" class="form-control text-muted" id="id_q" placeholder="votre question" required>

                     </div>
                  </div>
               </div>
               <!-- reponses -->
               <!-- **************************************** -->
               <div class="row mt-3 mb-4">
                  <div class="col-md-3">
                     <label for="r1" class="form-label">Réponse A</label>
                     <input type="text" class="form-control" id="id_r1" placeholder="" required>

                  </div>
                  <div class="col-md-3">
                     <label for="r1" class="form-label">Réponse B</label>
                     <input type="text" class="form-control" id="id_r2" placeholder="" required>

                  </div>
                  <div class="col-md-3">
                     <label for="r1" class="form-label">Réponse C</label>
                     <input type="text" class="form-control" id="id_r3" placeholder="" required>

                  </div>
                  <div class="col-md-3">
                     <label for="r1" class="form-label">Réponse D</label>
                     <input type="text" class="form-control" id="id_r4" placeholder="" required>

                  </div>
               </div>
               <div class="row">
                  <hr class="m-0" />
               </div>

               <div class="row mt-4">
                  <!-- reponses -->
                  <!-- **************************************** -->
                  <div class="col-md-3 mb-5">
                     <label for="r4" class="form-label ">Correction A</label>
                     <input type="text" class="form-control" id="id_c1" placeholder="" required>

                  </div>
                  <div class="col-md-3">
                     <label for="r4" class="form-label">Correction B</label>
                     <input type="text" class="form-control" id="id_c2" placeholder="" required>

                  </div>
                  <div class="col-md-3">
                     <label for="r4" class="form-label">Correction C</label>
                     <input type="text" class="form-control" id="id_c3" placeholder="" required>

                  </div>
                  <div class="col-md-3">
                     <label for="r4" class="form-label">Correction D</label>
                     <input type="text" class="form-control" id="id_c4" placeholder="" required>

                  </div>
               </div>
               <!-- bouton de validation -->
               <!-- **************************************** -->
               <button class="w-100 btn btn-primary btn-lg" id="valid_text" type="submit">Enregistrer la question n°
               </button>
            </form>
         </section>

         <!-- BDD -->
         <!-- **************************************** -->
         <div class="col-md-12 mt-2">
            <button type="button" class="btn btn-warning mb-2" id="bouton_verif">Vérification</button>
            <label for="q_bdd" class="form-label">BDD</label>
            <input type="text" class="form-control" id="verifQ" placeholder="" disdabled>
         </div>
      </div>
      <!-- **************************************** -->
      <!--Section: Content-->
      <section class="mb-5">
         <hr class="my-5" />
         <div class="row-4 d-flex justify-content-center text-center">
            <a href="index.php" class="btn btn-primary">Accueil</a>
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
   <!-- MDB -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
   <!-- <script src="js/checkout.js"></script> -->
   <script src="js/script.js"></script>
</body>

</html>