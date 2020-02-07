// Background RED/GREEN
$(document).ready(function () {

    if($('#true1').click(function() {
        $(".row1").css("background-color","#a5db85");
        $(".password1").css("background-color", "#a5db85");
    }));
}); 

$(document).ready(function () {

    if ($('#false1').click(function () {
        $(".row1").css("background-color", "#d87777");
        $(".password1").css("background-color", "#d87777");
    }));
}); 



$(document).ready(function () {

    if ($('#true2').click(function () {
        $(".row2").css("background-color", "#a5db85");
        $(".password2").css("background-color", "#a5db85");
    }));
});

$(document).ready(function () {

    if ($('#false2').click(function () {
        $(".row2").css("background-color", "#d87777");
        $(".password2").css("background-color", "#d87777");
    }));
}); 


// Background RED/GREEN END


$('.email').on("change keyup paste",
    function () {
        if ($(this).val()) {
            $('.icon-paper-plane').addClass("next");
        } else {
            $('.icon-paper-plane').removeClass("next");
        }
    }
);

$('.next-button').hover(
    function () {
        $(this).css('cursor', 'pointer');
    }
);

$('.next-button.email').click(
    function () {
        $('.email-section').addClass("fold-up");
        $('.password-section').removeClass("folded");
    }
);

$('.password').on("change keyup paste",
    function () {
        if ($(this).val()) {
            $('.icon-lock').addClass("next");
        } else {
            $('.icon-lock').removeClass("next");
        }
    }
);

$('.next-button').hover(
    function () {
        $(this).css('cursor', 'pointer');
    }
);

$('.next-button.password').click(
    function () {
        $('.password-section').addClass("fold-up");
        $('.repeat-password-section').removeClass("folded");
    }
);

$('.repeat-password').on("change keyup paste",
    function () {
        if ($(this).val()) {
            $('.icon-repeat-lock').addClass("next");
        } else {
            $('.icon-repeat-lock').removeClass("next");
        }
    }
);

$('.next-button.repeat-password').click(
    function () {
        $('.repeat-password-section').addClass("fold-up");
        $('.success').css("marginTop", 0);
    }

);

$('.next-button.repeat-password').click(
    function () {
        $('.none').addClass("visiable");
    }  
);

jQuery.fn.serializeObject = function () {
    var formData = {};
    var formArray = this.serializeArray();

    for (var i = 0, n = formArray.length; i < n; ++i)
        formData[formArray[i].name] = formArray[i].value;

    return formData;
};

$('.next-button.repeat-password').on('click', () => {
    var optionCheckbox1 = document.querySelector('.optionCheckbox1').checked;

    var question = { 
        "question": document.getElementById('question').value, 
        "response1": document.getElementById('response1').value,
        "optionCheckbox1": document.querySelector('.optionCheckbox1').checked,
        "response2": document.getElementById('response2').value,
        "optionCheckbox2": document.querySelector('.optionCheckbox2').checked,
    };   
    


    let questions = JSON.parse(localStorage.getItem('questions')) || [];
    questions.push(question)
    localStorage.setItem('questions', JSON.stringify(questions));
  

    
});

//Form unfolding


$(".create").click(function () { 
                    $('.success').css("marginTop", "-75px");
                    $('.repeat-password-section').removeClass("fold-up");
                    $('.repeat-password-section').addClass("folded");
                    $('.password-section').removeClass("fold-up");
                    $('.password-section').addClass("folded");
                    $('.email-section').removeClass("fold-up");
                    
                    $(".password2").css("background-color", "white");
                    $(".password1").css("background-color", "white");
                    $(".row2").css("background-color", "white");
                    //$(".password").css("background-color", "white");
                    $(".row1").css("background-color", "white");
                    $('#my_form')[0].reset();
                    //$(".password").css("background-color", "white");       

});


//Form unfolding end

             
  
$(document).ready(function () {
    $(".edit").click(function () {
        $.ajax({
            url: "index.html", success: function (result) {
                $('#items').css("display", "block");
                let lastQuestionn = localStorage.getItem('questions') || [];
                let myobj = JSON.parse(lastQuestionn);

                let last = myobj[myobj.length - 1];


                var i;
        
                const key = Object.keys(last);

                for (var keyy of key) {
                    console.log(keyy);
                }


                for (var i = 0; i < key.length; i++) {
                    var value = last[key[i]];
                    console.log(value);
                }

            for (i = 0; i < Object.values(last).length; i++) {

            
           

            var tr = document.createElement("tr");
            tr.dataset.index = i;
            var th = document.createElement("th");
            var td = document.createElement("td");
            var td2 = document.createElement("td");
            $(td).attr("contenteditable", "true");
            var button = document.createElement("button");
            $(button).addClass('save btn');
            $(button).css({ "margin": "0", "width": "100%"});
            $(button).html('<i class="fas fa-save"></i>');
            var table = document.getElementById("items");
            th.innerHTML += `${key[i]}`;
            td.innerHTML += `${last[key[i]]}`;
            td2.appendChild(button);

            tr.appendChild(th);
            tr.appendChild(td);
            tr.appendChild(td2);
            document.querySelector("#first-tr").appendChild(tr);
            $('.questions-page2').html(table); 

            button.addEventListener('click',function (e) {
                var local_value1 = localStorage.getItem(localStorage.key(i));
                let local_value2 = localStorage.getItem('questions') || [];
                const value2 = td.innerHTML;
                var result = localStorage.setItem(key, value2);

            })

            }             
            },
            
        });
    });
});



// View your quiz

   var index = 0;


$(".view").click(function () {
    $.ajax({
        url: "index.html", success: function (result) {
            console.log(test);

            $('.questions-page2').hide();
            $('.make_visiable').css('display','block');
            $('.form1').css("display", "block");

            let lastQuestionn = localStorage.getItem('questions') || [];
            let myobj = JSON.parse(lastQuestionn);
            //console.log(myobj);
            var last = myobj[index];
            var numberOfQuestions = myobj.length;
            var nextBtn =  document.getElementById("continue");

            let question = last.question;
            let option1 = last.response1;
            let option2 = last.response2;

           

            //var keys = Object.keys(last);
            var i;

            const key = Object.keys(last);


            for (var i = 0; i < key.length; i++) {
                let value = last[key[i]];
            }

                let variant = localStorage.getItem('questions');

                var questionQuiz = document.getElementById("test_question");
                questionQuiz.innerHTML += `${question}`;


                var optionOne = document.getElementById("test");
                var optionTwo = document.getElementById("test2");

                //$(".questionQuiz").html()

                p1 = document.createElement("p");
                p1.innerHTML += `${option1}`;

                p2 = document.createElement("p");
                p2.innerHTML += `${option2}`;

                optionOne.appendChild(p1);
                optionTwo.appendChild(p2);
                $('p').css("margin", "0");
                $('p').css("line-height", "3");
                $('p').css("font-size", "27px");
                $('p').css("margin-left", "10px");


                //verification of the right answer

                let optionCheckbox1 = last.optionCheckbox1;
                let optionCheckbox2 = last.optionCheckbox2;


             

                    if($(p1).click(function() { 
                    $(".questions-page__answer-line.first-answer").css("background-color","#6b8986");
                
                }));

                     if($(p2).click(function() { 
                    $(".questions-page__answer-line.second-answer").css("background-color","#6b8986");
                
                }));

                 if($(submitBtn).click(function() {
                     
                    if(optionCheckbox1 === true) {
                    $(".questions-page__answer-line.first-answer").css("background-color","#a5db85");
                    $(".questions-page__answer-line.first-answer").addClass("right_answer");
                }

              else {
                    $(".questions-page__answer-line.first-answer").css("background-color","#d87777");
                    $(".questions-page__answer-line.first-answer").addClass("wrong_answer");
                    }
                    
           
                if(optionCheckbox2 === true) {
                    $(".questions-page__answer-line.second-answer").css("background-color","#a5db85");
                    $(".questions-page__answer-line.first-answer").addClass("right_answer");
                    let parent = document.getElementById("counting_answers");
                    let sameClass = parent.getElementsByClassName("questions-page__answer-line first-answer right_answer");
                    console.log(sameClass);
                    

                }

              else {
                    $(".questions-page__answer-line.second-answer").css("background-color","#d87777");
                    $(".questions-page__answer-line.first-answer").addClass("wrong_answer");
                    };
 
            }));
                
            
            $(nextBtn).click(function() {


                // WHILE THE NUMBER IS LESS THAN THE NUM OF QUESTIONS 
                 if(index < myobj.length) {
               
                    index++;
                    console.log('dress');
                    var last = myobj[index];
                    console.log(last);
                    let question = last.question;
                    let option1 = last.response1;
                    let option2 = last.response2;

                    // Removing previous elements and it's styles
                    $(p1).remove();
                    $(p2).remove();

                    //STYLES


            //var keys = Object.keys(last);
            var i;

            const key = Object.keys(last);


            for (var i = 0; i < key.length; i++) {
                let value = last[key[i]];
            }

                let variant = localStorage.getItem('questions');

                var questionQuiz = document.getElementById("test_question");
                questionQuiz.innerHTML += `${question}`;


                var optionOne = document.getElementById("test");
                var optionTwo = document.getElementById("test2");

                //$(".questionQuiz").html()

                p1 = document.createElement("p");
                p1.innerHTML += `${option1}`;

                p2 = document.createElement("p");
                p2.innerHTML += `${option2}`;

                optionOne.appendChild(p1);
                optionTwo.appendChild(p2);
                $('p').css("margin", "0");
                $('p').css("line-height", "3");
                $('p').css("font-size", "27px");
                $('p').css("margin-left", "10px");


                //verification of the right answer

                let optionCheckbox1 = last.optionCheckbox1;
                let optionCheckbox2 = last.optionCheckbox2;

// Removing the old styles

                  if(optionCheckbox1 === true) {
                    $(".questions-page__answer-line.first-answer").css("background-color","#a9d7d1");
                }

                 else {
                    $(".questions-page__answer-line.first-answer").css("background-color","#a9d7d1");
                    }
                    
           
                if(optionCheckbox2 === true) {
                    $(".questions-page__answer-line.second-answer").css("background-color","#a9d7d1");
                }

                else {
                    $(".questions-page__answer-line.second-answer").css("background-color","#a9d7d1");
                    };
             

                // Setting the new once

                    if($(p1).click(function() { 
                    $(".questions-page__answer-line.first-answer").css("background-color","#6b8986");
                
                }));

                     if($(p2).click(function() { 
                    $(".questions-page__answer-line.second-answer").css("background-color","#6b8986");
                
                }));

                 if($(submitBtn).click(function() {
                     
                    if(optionCheckbox1 === true) {
                    $(".questions-page__answer-line.first-answer").css("background-color","#a5db85");
                    $(".questions-page__answer-line.first-answer").addClass("right_answer");
                }

              else {
                    $(".questions-page__answer-line.first-answer").css("background-color","#d87777");
                    $(".questions-page__answer-line.first-answer").addClass("wrong_answer");
                    }
                    
           
                if(optionCheckbox2 === true) {
                    $(".questions-page__answer-line.second-answer").css("background-color","#a5db85");
                    $(".questions-page__answer-line.first-answer").addClass("right_answer");
                    let parent = document.getElementById("counting_answers");
                    let sameClass = parent.getElementsByClassName("questions-page__answer-line first-answer right_answer");
                    console.log(sameClass);
                    

                }

              else {
                    $(".questions-page__answer-line.second-answer").css("background-color","#d87777");
                    $(".questions-page__answer-line.first-answer").addClass("wrong_answer");
                    };
 
            }));
                        
                }else {


                        let parent = document.getElementById("counting_answers");
                        let sameClass = parent.getElementsByClassName("questions-page__answer-line first-answer right_answer");
                    
                        let numGoodAnswer = sameClass.length;
                        let resultsPage = $('.results-page');
                        let questionsPage = $('.questions-page');
                        let userScore = $('.results-page__score');
                        questionsPage.hide();
                        resultsPage.show(300);
                        console.log('wow');
                        var resultOfQuiz = numGoodAnswer * 100 / numberOfQuestions ;
                        console.log(resultOfQuiz);
                        // Display user score as a percentage
                        userScore.text((resultOfQuiz) + "%");
                        console.log('finitotooooo');
                    }
        });

    }})});


    //verification of the right answer

    


//************************************************************
//************************************************************
//************************************************************

//REAL QUIZ


// pages
var initPage,
    questionsPage,
    resultsPage,
    // buttons
    startBtn,
    submitBtn,
    continueBtn,
    retakeBtn,
    spanishBtn,
    // question and answers
    question,
    answerList,
    answerSpan,
    answerA,
    answerB,
    answerC,
    answerD,
    // event listeners
    answerDiv,
    answerDivA,
    answerDivB,
    answerDivC,
    answerDivD,
    feedbackDiv,
    selectionDiv,
    toBeHighlighted,
    toBeMarked,
    userScore,
    // quiz
    quiz,
    questionCounter,
    correctAnswer,
    correctAnswersCounter,
    userSelectedAnswer,
    // function names
    newQuiz,
    generateQuestionAndAnswers,
    getCorrectAnswer,
    getUserAnswer,
    selectAnswer,
    deselectAnswer,
    selectCorrectAnswer,
    deselectCorrectAnswer,
    getSelectedAnswerDivs,
    highlightCorrectAnswerGreen,
    highlightIncorrectAnswerRed,
    clearHighlightsAndFeedback;

$(document).ready(function () {

    // DOM SELECTION ------

    // App pages
    // Page 1 - Initial
    initPage = $('.init-page');
    // Page 2 - Questions/answers
    questionsPage = $('.questions-page');
    // Page 3 - Results
    resultsPage = $('.results-page');

    // Buttons
    startBtn = $('.init-page__btn');
    submitBtn = $('.questions-page__submit-btn');
    continueBtn = $('.questions-page__continue-btn');
    retakeBtn = $('.results-page__retake-btn');
    spanishBtn = $('.results-page__spanish-btn');

    // Answer block divs
    answerDiv = $('.questions-page__answer-div');
    answerDivA = $('.questions-page__answer-div-a');
    answerDivB = $('.questions-page__answer-div-b');
    answerDivC = $('.questions-page__answer-div-c');
    answerDivD = $('.questions-page__answer-div-d');

    // Selection div (for the pointer, on the left)
    selectionDiv = $('.questions-page__selection-div');

    // Feedback div (for the checkmark or X, on the right)
    feedbackDiv = $('.questions-page__feedback-div');

    // Questions and answers
    question = $('.questions-page__question');
    answerList = $('.questions-page__answer-list');
    answerSpan = $('.questions-page__answer-span');
    answerA = $('.questions-page__answer-A');
    answerB = $('.questions-page__answer-B');
    answerC = $('.questions-page__answer-C');
    answerD = $('.questions-page__answer-D');

    // User final score
    userScore = $('.results-page__score');


    

    // QUIZ CONTENT ------
    quiz = [
        {
            question: "1 question: ",
            answers: ["Arabic", "English", "French", "Latin"],
            //correctAnswer: "2nd"
        },
        {
            question: "2 question: ",
            answers: ["Arabic", "English", "French", "Latin"],
            //correctAnswer: "French"
        },
        {
            question: "3 question: ",
            answers: ["35 million", "40 million", "45 million", "50 million"],
           // correctAnswer: "50 million"
        },
        {
            question: "4 question: ",
            answers: ["the 17th century", "the 18th century", "the 19th century", "the 20th century"],
           // correctAnswer: "the 19th century"
        },
        {
            question: "5 question: ",
            answers: ["2nd", "3rd", "4th", "5th"],
           // correctAnswer: "2nd"
        }
    ];

    // FUNCTION DECLARATIONS ------

    // Start the quiz
    newQuiz = function () {
        // Set the question counter to 0
        questionCounter = 0;

        // Set the total correct answers counter to 0
        correctAnswersCounter = 0;

        // Hide other pages of the app
        questionsPage.hide();
        resultsPage.hide();
    };

    // Load the next question and set of answers
    generateQuestionAndAnswers = function () {
        question.text(quiz[questionCounter].question);
        answerA.text(quiz[questionCounter].answers[0]);
        answerB.text(quiz[questionCounter].answers[1]);
        answerC.text(quiz[questionCounter].answers[2]);
        answerD.text(quiz[questionCounter].answers[3]);
    };

    // Store the correct answer of a given question
    getCorrectAnswer = function () {
        correctAnswer = quiz[questionCounter].correctAnswer;
    };

    // Store the user's selected (clicked) answer
    getUserAnswer = function (target) {
        userSelectedAnswer = $(target).find(answerSpan).text();
    };

    // Add the pointer to the clicked answer
    selectAnswer = function (target) {
        $(target).find(selectionDiv).addClass('ion-chevron-right');
    };

    // Remove the pointer from any answer that has it
    deselectAnswer = function () {
        if (selectionDiv.hasClass('ion-chevron-right')) {
            selectionDiv.removeClass('ion-chevron-right');
        }
    };

    // Get the selected answer's div for highlighting purposes
    getSelectedAnswerDivs = function (target) {
        toBeHighlighted = $(target);
        toBeMarked = $(target).find(feedbackDiv);
    };

    // Make the correct answer green and add checkmark
    highlightCorrectAnswerGreen = function (target) {
        if (correctAnswer === answerA.text()) {
            answerDivA.addClass('questions-page--correct');
            answerDivA.find(feedbackDiv).addClass('ion-checkmark-round');
        }
        if (correctAnswer === answerB.text()) {
            answerDivB.addClass('questions-page--correct');
            answerDivB.find(feedbackDiv).addClass('ion-checkmark-round');
        }
        if (correctAnswer === answerC.text()) {
            answerDivC.addClass('questions-page--correct');
            answerDivC.find(feedbackDiv).addClass('ion-checkmark-round');
        }
        if (correctAnswer === answerD.text()) {
            answerDivD.addClass('questions-page--correct');
            answerDivD.find(feedbackDiv).addClass('ion-checkmark-round');
        }
    };

    // Make the incorrect answer red and add X
    highlightIncorrectAnswerRed = function () {
        toBeHighlighted.addClass('questions-page--incorrect');
        toBeMarked.addClass('ion-close-round');
    };

    // Clear all highlighting and feedback
    clearHighlightsAndFeedback = function () {
        answerDiv.removeClass('questions-page--correct');
        answerDiv.removeClass('questions-page--incorrect');
        feedbackDiv.removeClass('ion-checkmark-round');
        feedbackDiv.removeClass('ion-close-round');
    };

    // APP FUNCTIONALITY ------

    /* --- PAGE 1/3 --- */

    // Start the quiz:
    newQuiz();

    // Clicking on start button:
    startBtn.on('click', function () {

        // Advance to questions page
        initPage.hide();
        questionsPage.show(300);

        // Load question and answers
        generateQuestionAndAnswers();

        // Store the correct answer in a variable
        getCorrectAnswer();

        // Hide the submit and continue buttons
        //submitBtn.hide();
        continueBtn.hide();

    });

    /* --- PAGE 2/3 --- */

    // Clicking on an answer:
    answerDiv.on('click', function () {

        // Make the submit button visible
        submitBtn.show(300);

        // Remove pointer from any answer that already has it
        deselectAnswer();

        // Put pointer on clicked answer
        selectAnswer(this);

        // Store current selection as user answer
        getUserAnswer(this);

        // Store current answer div for highlighting purposes
        getSelectedAnswerDivs(this);

    });

    // Clicking on the submit button:
    submitBtn.on('click', function () {

        // Disable ability to select an answer
        answerDiv.off('click');

        // Make correct answer green and add a checkmark
        highlightCorrectAnswerGreen();

        // Evaluate if the user got the answer right or wrong
        if (userSelectedAnswer === correctAnswer) {
            // Increment the total correct answers counter
            correctAnswersCounter++;
        }
        else {
            highlightIncorrectAnswerRed();
        }

        // Substitute the submit button for the continue button:
        submitBtn.hide(300);
        continueBtn.show(300);

    });

    // Clicking on the continue button:
    continueBtn.on('click', function () {

        // Increment question number until there are no more questions, then advance to the next page
        if (questionCounter < quiz.length - 1) {
            questionCounter++;
        }
        else {
            questionsPage.hide();
            resultsPage.show(300);
            // Display user score as a percentage
            userScore.text(Math.floor((correctAnswersCounter / quiz.length) * 100) + "%");
        }

        // Load the next question and set of answers
        generateQuestionAndAnswers();

        // Store the correct answer in a variable
        getCorrectAnswer();

        // Remove all selections, highlighting, and feedback
        deselectAnswer();
        clearHighlightsAndFeedback();

        // Hide the continue button
        continueBtn.hide(300);

        // Enable ability to select an answer
        answerDiv.on('click', function () {
            // Make the submit button visible
            submitBtn.show(300);
            // Remove pointer from any answer that already has it
            deselectAnswer();
            // Put pointer on clicked answer
            selectAnswer(this);
            // Store current answer div for highlighting purposes
            getSelectedAnswerDivs(this);
            // Store current selection as user answer
            getUserAnswer(this);
        });

    });

    /* --- PAGE 3/3 --- */

    // Clicking on the retake button:
    retakeBtn.on('click', function () {

        // Go to the first page
        resultsPage.hide();
        initPage.show(300);

        // Start the quiz over
        newQuiz();

    });

    // Clicking on the spanish button:
    // Link takes user to Duolingo

});


