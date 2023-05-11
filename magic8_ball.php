 <?php
 // Write a program of magic 8 ball 
 // Author: Sirisha Adivishnu
function magic8Ball()
{
  echo "Tell me... What is your question?\n";  
  $question = readline(">");

  echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: ";

  $choice = rand(0, 19);

  if($choice === 0) {
    echo "It is certain.\n";
  }
  elseif ($choice === 1) {
    echo "It is decidedly so.\n";
  }
  elseif ($choice === 2) {
    echo "Without a doubt.\n";
  }
  elseif ($choice === 3) {
    echo "Yes - definitely.\n";
  }
  elseif ($choice === 4) {
    echo "You may rely on it.\n";
  }
  elseif ($choice === 5) {
    echo "As I see it, yes.\n";
  }
  elseif ($choice === 6) {
    echo "Most likely.\n";
  }
  elseif ($choice === 7) {
    echo "Outlook good.\n";
  }
  elseif ($choice === 8) {
    echo "Yes.\n";
  }
  elseif ($choice === 9) {
    echo "Signs point to yes.\n";
  }
  elseif ($choice === 10) {
    echo "Reply hazy, try again.\n";
  }
  elseif ($choice === 11) {
    echo "Ask again later.\n";
  }
  elseif ($choice === 12) {
    echo "Better not tell you now.\n";
  }
  elseif ($choice === 13) {
    echo "Cannot predict now.\n";
  }
  elseif ($choice === 14) {
    echo "Concentrate and ask again.\n";
  }
  elseif ($choice === 15) {
    echo "Don't count on it.\n";
  }
  elseif ($choice === 16) {
    echo "My reply is no.\n";
  }
  elseif ($choice === 17) {
    echo "My sources say no.\n";
  }
  elseif ($choice === 18) {
    echo "Outlook not so good.\n";
  }
  elseif ($choice === 19) {
    echo "Very doubtful.\n";
  }

}

magic8Ball();
