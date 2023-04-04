<?php
// session_start();
include("./dbconnect.php");
if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.css">


    <title>AskME</title>
    <style>
        body {
            background-color: white;
        }

        .h7 {
            font-size: 0.8rem;
        }

        .gedf-main {
            margin-top: 5rem;
        }


        @media (min-width: 992px) {
            .gedf-main {
                padding-left: 4rem;
                padding-right: 4rem;
                position: relative;
            }

            .gedf-card {
                margin-bottom: 2.77rem;

            }
        }

        /**Reset Bootstrap*/
        .dropdown-toggle::after {
            content: none;
            display: none;
        }

        .hr-text {
            /* padding-top: 50px; */
            line-height: 1em;
            position: relative;
            outline: 0;
            border: 0;
            color: black;
            text-align: center;
            height: 1.5em;
            opacity: .5;
            font-size: large;
            margin-top: 10px;
        }

        .hr-text:before {
            content: '';
            background: linear-gradient(to right, transparent, black, transparent);
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
        }

        .hr-text:after {
            content: attr(data-content);
            position: absolute;
            top: -1.5em;
            /* move the content above the line */
            left: 50%;
            transform: translateX(-50%);
            display: inline-block;
            color: black;
            padding: 0 .5em;
            line-height: 1.5em;
            /* color: #818078; */
            background-color: #fcfcfa;
            margin-bottom: 10px;
        }


        #qTitle {
            margin-bottom: 5px;
            width: 40%;
            height: 15%;
            border: 1px solid #ced4da;
        }

        .question-main .card-body {
            padding-bottom: 10px;
        }

        .question-main .card {
            border-color: black;
        }

        .question-main .card-header {
            color: black;
        }

        .fa-sort-up,
        .fa-sort-down {
            display: block;
            text-align: center;
            margin: auto;
        }

        .btn-transparent {
            border: none;
            background: transparent;
            padding: 0;
            font-size: inherit;
            color: inherit;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <main class="d-flex align-items-center justify-content-center flex-column flex-wrap m-2 p-2 mt-5 pt-5 gap-4 w-100">
    <h4>Ask a new question</h2>
            <form action="submit_question.php" class="w-50" method="post">
                <div class="form-group">
                    <label for="post_title">Question:</label>
                    <input type="text" name="post_title" id="post_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="post_content">Post Content:</label>
                    <textarea name="post_content" id="post_content" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Question</button>
            </form>
        <!-- previous Question -->

        <hr class="hr-text w-50 mt-4" data-content="Recent Questions">

        <?php

        $sql = "SELECT 
        q.question_id, 
        q.user_id, 
        q.question_title, 
        q.question_text, 
        q.date_asked, 
        u.user_name,
        v.vote_count
      FROM Questions q 
      JOIN Users u ON q.user_id = u.user_id
      LEFT JOIN Vote v ON q.question_id = v.question_id
      GROUP BY q.question_id";
        $result = $con->query($sql);

        while ($question = $result->fetch_assoc()) {
            ?>


            <div class="card gedf-card w-50">
                <div class="card-header" style="border: 0;background-color: white;">
                    <div class="d-flex ">
                        <div class="d-flex  position-relative">
                            <div class="mr-2">
                                <!-- <i class="fa-light fa-circle fa-flip fa-lg"></i> -->
                                <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0">
                                    <?php echo $question['user_name']; ?>

                                </div>
                            </div>
                            <div class="text-muted h7 mb-2 " style="position: relative;left: 140%;">
                                <i class="fa-solid fa-clock" style="padding-right: 5px;"></i>Asked:
                                <?php echo $question['date_asked']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="d-flex align-items-center justify-content-center">

                       <div class="d-flex align-items-center justify-content-center flex-column">
                            <i class="fa-solid fa-sort-up fa-2xl" style="padding-left: 3px; cursor: pointer;"
                                onclick="upvote(this)" data-question-id="<?php echo $question['question_id']; ?>"></i>
                            <p style="position: relative;padding: 5px 0;margin: 0;" id="voteCount">
                                <?php echo $question['vote_count']; ?>
                            </p>
                            <i class="fa-solid fa-sort-down fa-2xl" style="padding-left: 3px; cursor: pointer;"
                                onclick="downvote(this)" data-question-id="<?php echo $question['question_id']; ?>"></i>
                        </div> 
                    <div class="col-sm-11">
                            <a class="card-link" href="#">
                                <h5 class="card-title" style="font-weight: bold;">
                                    <?php echo $question['question_title']; ?>
                                </h5>
                            </a>
                            <p class="card-text">
                                <?php echo $question['question_text'];
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php $question_id = $question['question_id'];

                $sql1 = "SELECT a.answer_text, a.date_answered, u.user_name
                    FROM answers a
                     JOIN Users u ON a.user_id = u.user_id
                     WHERE a.question_id = $question_id";
                $result1 = $con->query($sql1);
                $count = mysqli_num_rows($result1);
                ?>
                <div class="card-footer">
                    <button class="card-link btn-transparent" type="button" onclick="toggleAnswers()"><i
                            class="fa-regular fa-message"></i>
                        <?php echo $count; ?> Answers
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-sm" style="position: absolute;left: 88%;"
    onclick="showAnswerForm(<?php echo $question_id; ?>)" <?php  if(isset($_SESSION['utype'])){if ($_SESSION['utype'] == "rural"){
        echo "hidden"; }}?>>Answer</button>
                    <div id="answer-form-container-<?php echo $question_id; ?>" style="display: none;">
                        <?php $questionid1 = $question['question_id']; ?>
                        <form action="post_answer.php" method="post">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                <input type="hidden" name="q_id" value="<?php echo $questionid1; ?>">
                                <label for="answer_content">Your Answer:</label>
                                <textarea name="answer_content" id="answer_content" class="form-control"></textarea>
                            </div>
                            <button type="submit" name="answer_submit" class="btn btn-primary">Submit Answer</button>
                        </form>
                    </div>
                </div>
                <?php
                while ($answer = $result1->fetch_assoc()) {
                    ?>
                    <div class="answers" style="display: none;">
                        <div class="card mt-3">
                            <div class="card-body">
                                <p class="card-text">
                                    <?php echo $answer['answer_text']; ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p style="font-size: smaller;" class="text-muted">Answered by:
                                            <?php echo $answer['user_name']; ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <p style="font-size: smaller;" class="text-muted">Answered on:
                                            <?php echo $answer['date_answered']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>

            <?php
        } ?>



    </main>

    <script>
function showAnswerForm(questionId) {
    var container = document.getElementById("answer-form-container-" + questionId);
    container.style.display = (container.style.display == "none") ? "block" : "none";
}



        let voteCount = 10;

        function upvote() {
            
            vote=document.getElementById("voteCount");
            vote++;
            document.getElementById("voteCount").innerText = vote;
        }

        function downvote() {
            voteCount--;
            document.getElementById("voteCount").innerText = voteCount;
        }

        function updateVoteCount(questionId, voteType) {
  $.ajax({
    type: 'POST',
    url: 'update_vote.php',
    data: { question_id: questionId, vote_type: voteType },
    success: function(result) {
      $('#voteCount').html(result);
    }
  });
}
function upvote(button) {
  var questionId = $(button).data('question-id');
  updateVoteCount(questionId, 'upvote');
}

function downvote(button) {
  var questionId = $(button).data('question-id');
  updateVoteCount(questionId, 'downvote');
}
        function toggleAnswers() {
            var answers = document.querySelectorAll(".answers");
            for (var i = 0; i < answers.length; i++) {
                answers[i].style.display = answers[i].style.display === "none" ? "block" : "none";
            }
        }

        ClassicEditor
            .create(document.querySelector('#post_content'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>