//table.php

if(isset($_POST))
{
    foreach($_POST as $inputName => $inputValue)
    {
        echo $inputName; 
        echo $inputValue; 

//....
    }
}