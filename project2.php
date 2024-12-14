<?php

$questions = [
    ['question' => 'what is 2 + 2?' , 'correct' => '4'],
    ['question' => 'what the capital of France?' , 'correct' => 'Paris'],
    ['question' => 'who wrote Hamlet?' , 'correct' => 'Shakespeare']
];

$answers = [];

foreach ($questions as $index => $question){
    echo ($index + 1) . ' .' . $question['question'] . "\n" ;
    $answers[] = trim(readline('Your Answer: '));
}

function results(array $questions, array $answers): int {
    $score = 0;
    foreach($questions as $index => $question){
        if($answers[$index] === $question['correct']){
            $score++;
        }
    }
    return $score;
}

$score = results($questions, $answers);
echo 'you scored '. $score .' out of ' . count($questions) . "\n";

if($score === count($questions)) {
    echo "Excellent Job! \n;";
}elseif($score > 1) {
    echo "Good Effort! \n;";
}else{
    echo "Better Luck Next Time! \n;";
}



