<?php

include_once("conexao_questoes.php");
$reso = mysqli_query($conn2, "select * from questoes order by rand() limit 30");
$i = 1;


$texto_inicio = '<script id="rendered-js"> (function () { const myQuestions = [';

$name = 'arquivo_'.$_SESSION['id'].'.php';
$file = fopen("provas/".$name."", 'a');
fwrite($file, utf8_encode($texto_inicio));
fclose($file);



while ($questao = mysqli_fetch_object($reso)) {

$text = "{ question: \"".$i." - ".$questao->questao."\",
    answers: {
      a: \"".$questao->altA."\",  
      b: \"".$questao->altB."\",
      c: \"".$questao->altC."\",
      d: \"".$questao->altD."\" },

    correctAnswer: \"".$questao->altCorreta."\" },\n";
    
$i++;

$name = 'arquivo_'.$_SESSION['id'].'.php';
$file = fopen("provas/".$name."", 'a');
fwrite($file, utf8_encode($text));
fclose($file);

};



$text_final = "];\nfunction buildQuiz() {
    // armazenar saida HTML
    const output = [];

    // para cada questao...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // armazenar as alternativas
      const answers = [];

      // para cada alternativa...
      for (letter in currentQuestion.answers) {
        // ...adicionar radio
        answers.push(
        `<label>
             <input type=\"radio\" name=\"question\${questionNumber}\" value=\"\${letter}\">
              \${letter} :
              \${currentQuestion.answers[letter]}
           </label>`);

      }

      // adicionar questao e alternativas na saida
      output.push(
      `<div class=\"slide\">
           <div class=\"question\"> \${currentQuestion.question} </div>
           <div class=\"answers\"> \${answers.join(\"\")} </div>
         </div>`);

    });

    // combinar lista de saida e mostrar na pagina
    quizContainer.innerHTML = output.join(\"\");
  }

  function showResults() {
    // combinar alternativas
    const answerContainers = quizContainer.querySelectorAll(\".answers\");

    // respostas do usuario
    let numCorrect = 0;

    // para cada questao...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question\${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // alternativa correta
      if (userAnswer === currentQuestion.correctAnswer) {
        // add to the number of correct answers
        numCorrect++;

        // alternativa verde
        answerContainers[questionNumber].style.color = \"lightgreen\";
      } else {
        // alternativa errada ou em branco
        // alternativa vermelha
        answerContainers[questionNumber].style.color = \"red\";
      }
    });

    // mostrar numero de acertos
    resultsContainer.innerHTML = `Acertou \${numCorrect} de \${myQuestions.length}`;
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove(\"active-slide\");
    slides[n].classList.add(\"active-slide\");
    currentSlide = n;

    if (currentSlide === 0) {
      previousButton.style.display = \"none\";
    } else {
      previousButton.style.display = \"inline-block\";
    }

    if (currentSlide === slides.length - 1) {
      nextButton.style.display = \"none\";
      submitButton.style.display = \"inline-block\";
    } else {
      nextButton.style.display = \"inline-block\";
      submitButton.style.display = \"inline-block\";
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

    function restartQuiz() {
    parent.window.document.location.href = 'quiz.php';
  }

  const quizContainer = document.getElementById(\"quiz\");
  const resultsContainer = document.getElementById(\"results\");
  const submitButton = document.getElementById(\"submit\");

  // exibir questoes
  buildQuiz();

  const restartButton = document.getElementById(\"restart\");
  const previousButton = document.getElementById(\"previous\");
  const nextButton = document.getElementById(\"next\");
  const slides = document.querySelectorAll(\".slide\");
  let currentSlide = 0;

  showSlide(0);

  // enviar, mostrar resultado
  restartButton.addEventListener(\"click\", restartQuiz);
  submitButton.addEventListener(\"click\", showResults);
  previousButton.addEventListener(\"click\", showPreviousSlide);
  nextButton.addEventListener(\"click\", showNextSlide);
})();
      //# sourceURL=pen.js
    </script>";



$name = 'arquivo_'.$_SESSION['id'].'.php';
$file = fopen("provas/".$name."", 'a');
fwrite($file, utf8_encode($text_final));
fclose($file);


?>