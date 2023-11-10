<!DOCTYPE html>
<html>
<body>
 <div id="quiz-form">
        <?php  
            $answer1 = $_POST['question-1-choice'];
            $answer2 = $_POST['question-2-choice'];
            $answer3 = $_POST['question-3-choice'];
            $answer4 = $_POST['question-4-choice'];
            $answer5 = $_POST['question-5-choice'];
            echo "Question 1: Which concept is not introduced in Calculus 1? <br>";
            echo "Right answer: Partial Differentiation <br>";
            echo "Your answer: " . $answer1 . "<br>";
            echo "<br>";
            echo "Question 2: What is the power rule of differentiation? <br>";
            echo "Right answer: xm^(x-1) <br>";
            echo "Your answer: " . $answer2 . "<br>";
            echo "<br>";
            echo "Question 3: What is calculated for Integration? <br>";
            echo "Right answer: Area of a curve <br>";
            echo "Your answer: " . $answer3 . "<br>";
            echo "<br>";
            echo "Question 4: What is the formula of the Fundamental Theorem of Calculus: Part 2? <br>";
            echo "Right answer: F(b)-F(a) <br>";
            echo "Your answer: " . $answer4 . "<br>";
            echo "<br>";
            echo "Question 5: Which law is not a law of Limits? <br>";
            echo "Right answer: Factorial Law <br>";
            echo "Your answer: " . $answer5 . "<br>";
            echo "<br>";
            $totalScore = 0;
            if ($answer1 == "Partial Differentiation") 
            { 
               $totalScore++; 
            }
            if ($answer2 == "xm^(x-1)") 
            { 
               $totalScore++; 
            }
            if ($answer3 == "Area of a curve") 
            { 
               $totalScore++; 
            }
            if ($answer4 == "F(b)-F(a)") 
            { 
               $totalScore++; 
            }
            if ($answer5 == "Factorial Law")
            { 
               $totalScore++; 
            }     
            echo "Total right answers: " . $totalScore . " / 5 <br>";
            $percentageScore =  ($totalScore / 5) * 100;
            echo "Percentage: " . $percentageScore . "% <br>";
        ?>
 </div>
</body>
</html>
