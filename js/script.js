// aff_q(() => {
//    'use strict'

//    // Fetch all the forms we want to apply custom Bootstrap validation styles to
//    const forms = document.querySelectorAll('.needs-validation')

//    // Loop over them and prevent submission
//    Array.from(forms).forEach(form => {
//       form.addEventListener('submit', event => {
//          if (!form.checkValidity()) {
//             event.preventDefault()
//             event.stopPropagation()
//          }

//          form.classList.add('was-validated')
//       }, false)
//    })
// })()
// *********************************************************
// initialisation
// const msg = new SpeechSynthesisUtterance();
// msg.text = "bonjour virginie et fabrice comment sa va ?";
// window.speechSynthesis.speak(msg);
var quizz_1 = [
   [1, "photo 01.jpg", "q1 du quizz1", "rep1", "rep2", "rep3", "rep4", "cor1", "cor2", "cor3", "cor4"],
   [2, "photo 02.jpg", "q2 du quizz1", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
   [3, "photo 03.jpg", "que3", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
   [4, "photo 04.jpg", "que4", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
   [5, "photo 05.jpg", "que5", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
]
var quizz_2 = [
   [1, "photo 01.jpg", "q1 du quizz2", "rep1", "rep2", "rep3", "rep4", "cor1", "cor2", "cor3", "cor4"],
   [2, "photo 02.jpg", "q2 du quizz2", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
   [3, "photo 03.jpg", "que3", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
   [4, "photo 04.jpg", "que4", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
   [5, "photo 05.jpg", "que5", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
]
var quizz_3 = [
   [1, "photo 01.jpg", "q1 du quizz3", "rep1", "rep2", "rep3", "rep499", "cor1", "cor2", "cor3", "cor4"],
   [2, "photo 02.jpg", "q2 du quizz3", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
   [3, "photo 03.jpg", "que3", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
   [4, "photo 04.jpg", "que4", "rep1", "rep2", "rep2", "xxx", "cor1", "cor2", "cor2", "cor2"],
   [5, "photo 05.jpg", "que5", "rep1", "rep2", "rep2", "rep4", "cor1", "cor2", "cor2", "cor2"],
]
// const liste = document.getElementById("pays");
// const optionSelectionnee = liste.querySelector("option:checked");
// console.log(quizz_1);
console.log(quizz_1[0][2]);
console.log(quizz_3[3][6]);
// console.log(quizz_1[1][1]); // 11
// affichage des donnees du tableau
for (var i = 0; i < 11; i++) {
   console.log(quizz_1[0][i]);
}
// var xx = document.getElementById("id_photo").files[0].name;
// document.getElementById("id_photo").value = quizz_1[0][1];
// document.getElementById("num_q").innerText = quizz_1[0][1];
document.getElementById("id_q").value = quizz_1[0][2];
//reponses
document.getElementById("id_r1").value = quizz_1[0][3];
document.getElementById("id_r2").value = quizz_1[0][4];
document.getElementById("id_r3").value = quizz_1[0][5];
document.getElementById("id_r4").value = quizz_1[0][6]; 
//corection
document.getElementById("id_c1").value = quizz_1[0][7];
document.getElementById("id_c2").value = quizz_1[0][8];
document.getElementById("id_c3").value = quizz_1[0][9];
document.getElementById("id_c4").value = quizz_1[0][10];



// itinialisation BDD
var bdd;
bdd = localStorage.getItem("question")

if (!bdd) {
   console.log("rien dans la base");
   bdd = "rien dans la base";
   document.getElementById("verifQ").placeholder = bdd;
   var id_question = 1;
   // document.getElementById("id_question").placeholder = id_question;
}

var element = document.getElementById("bouton_verif");
element.addEventListener("click", verifQ);

function verifQ() {
   // document.getElementById("verifQ").placeholder = id_question;
   // numero
   var champ1 = document.getElementById("id_question").placeholder;
   // photo
   var champ2 = document.getElementById("id_photo").files[0].name;
   console.log(champ2);
   document.getElementById("id_photo").value = champ2; //quizz_1[0][1];

   // question
   var champ3 = document.getElementById("id_q").value;

   // reponses
   // r1
   var champ4 = document.getElementById("id_r1").value;
   // r2
   var champ5 = document.getElementById("id_r2").value;
   // r3
   var champ6 = document.getElementById("id_r3").value;
   // r4
   var champ7 = document.getElementById("id_r4").value;

   // corections
   // c1
   var champ8 = document.getElementById("id_c1").value;
   // c2
   var champ9 = document.getElementById("id_c2").value;
   // c3
   var champ10 = document.getElementById("id_c3").value;
   // c4
   var champ11 = document.getElementById("id_c4").value;

   // console.log(champ1);
   // console.log(champ2);
   // console.log(champ3);
   // console.log(champ4);
   // console.log(champ5);
   // console.log(champ6);
   // console.log(champ7);
   // console.log(champ8);
   // console.log(champ9);
   // console.log(champ10);
   // console.log(champ11);
   // document.getElementById("id_question").placeholder = 1;
   document.getElementById("verifQ").placeholder = champ1 + "," + champ2 + "," + champ3 + "," + champ4 + "," + champ5 + "," + champ6 + "," + champ7 + "," + champ8 + "," + champ9 + "," + champ10 + "," + champ11;

   console.log(champ1, ",", champ2, ",", champ3, ",", champ4, ",", champ5, ",", champ6, ",", champ7, ",", champ8, ",", champ9, ",", champ10, ",", champ11);
   console.log("je suis la");
}