<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quizzify</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="flex">
    <div class="wrapper">
      <div class="quiz-container">
        <div class="quiz-head">
          <h1 class="quiz-title">Quizzify</h1>
        </div>
        <div class="quiz-body">
          <h2 class="quiz-question" id="question">
            <!--What is the full form of HTTP? -->
          </h2>
          <ul class="quiz-options">
            <div class="quiz-score flex">
              <span id="correct-score"></span>/<span id="total-question"></span>
            </div>
            <!-- <li>1. Hyper text transfer package</li>
                    <li>2. Hyper text transfer protocol</li>
                    <li>3. Hyphenation text test program</li>
                    <li>4. None of the above</li> -->
          </ul>
          <div id="result"></div>
        </div>
        <div class="quiz-foot">
          <button type="button" id="check-answer">Submit 🙂</button>
          <button type="button" id="play-again">Play Again! 😎</button>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
