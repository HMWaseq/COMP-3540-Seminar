<!DOCTYPE html>
<html>
<head>
    <title>Quiz Application</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .question{
            display: none;
        }

        .correct{
            background-color: lightgreen;
            padding: 5px;
        }

        .wrong{
            background-color: lightcoral;
            padding: 5px;
        }

        #result{
            display: none;
        }
    </style>
</head>
<body>

<h2>True / False Quiz</h2>

<div id="quiz"></div>

<div id="result"></div>

<script>

const questions = [
    {
        question: "PHP is a server-side language.",
        answer: "True"
    },
    {
        question: "JavaScript runs only on the server.",
        answer: "False"
    },
    {
        question: "HTML is a programming language.",
        answer: "False"
    },
    {
        question: "CSS is used for styling web pages.",
        answer: "True"
    },
    {
        question: "XAMPP includes Apache.",
        answer: "True"
    }
];

let userAnswers = [];
let currentQuestion = 0;

const quizDiv = document.getElementById("quiz");

function createQuestions()
{
    for(let i = 0; i < questions.length; i++)
    {
        quizDiv.innerHTML += `
            <div class="question" id="q${i}">
                <h3>${questions[i].question}</h3>

                <input type="radio" name="answer${i}" value="True">
                True

                <input type="radio" name="answer${i}" value="False">
                False

                <br><br>

                <button onclick="nextQuestion()">Next</button>
            </div>
        `;
    }

    document.getElementById("q0").style.display = "block";
}

function nextQuestion()
{
    let selected =
        document.querySelector(
            'input[name="answer' + currentQuestion + '"\]:checked'
        );

    if(selected == null)
    {
        alert("Please select an answer.");
        return;
    }

    userAnswers.push(selected.value);

    document.getElementById("q" + currentQuestion).style.display = "none";

    currentQuestion++;

    if(currentQuestion < questions.length)
    {
        document.getElementById("q" + currentQuestion).style.display = "block";
    }
    else
    {
        showResults();
    }
}

function showResults()
{
    let resultDiv = document.getElementById("result");
    resultDiv.style.display = "block";

    let score = 0;
    let output = "<h2>Results</h2>";

    for(let i = 0; i < questions.length; i++)
    {
        let correct = questions[i].answer;
        let user = userAnswers[i];

        let status = "";
        let cssClass = "";

        if(user === correct)
        {
            status = "Correct";
            cssClass = "correct";
            score++;
        }
        else
        {
            status = "Wrong";
            cssClass = "wrong";
        }

        output += `
            <div>
                <p><strong>Question:</strong> ${questions[i].question}</p>

                <p><strong>Correct Answer:</strong> ${correct}</p>

                <p class="${cssClass}">
                    User Answer:
                    <strong>${user}</strong>
                </p>

                <p>${status}</p>

                <hr>
            </div>
        `;
    }

    output += `
        <h2>Total Correct Answers: ${score}/${questions.length}</h2>
    `;

    resultDiv.innerHTML = output;
}

createQuestions();

</script>

</body>
</html>