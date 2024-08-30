<?php

//  Define variables
$title = $data['game_title'];

foreach ($data['questions'] as $question) {
    include('partials/question-page.php');
    
    // Define questions variables
    $filename_question = 'otazka-' . $question['id'] . '.html';
    $question_text = $question['text'];
    $answer = $question['answer'];
    $page_url = 'otazka-' . $question['id'];

    // Replace varibales in template
    $question_page = str_replace('{{title}}',$title,$question_page);
    $question_page = str_replace('{{question}}',$question_text,$question_page);
    $question_page = str_replace('{{answer}}',$answer,$question_page);
    $question_page = str_replace('{{page_url}}',$page_url,$question_page);

    // Create a new question page
    file_put_contents('output/' . $filename_question, $question_page);



    include('partials/answer-page.php');
    
    // Define questions variables
    $filename_answer = 'otazka-' . $question['id'] . '-solve.html';
    $solved_text = $question['solved_text'];
    $read_more = $question['read_more'];

    // Replace varibales in template
    $answer_page = str_replace('{{title}}',$title,$answer_page);
    $answer_page = str_replace('{{solved_text}}',$solved_text,$answer_page);
    $answer_page = str_replace('{{read_more}}',$read_more,$answer_page);

    // Create a new question page
    file_put_contents('output/' . $filename_answer, $answer_page);
}

