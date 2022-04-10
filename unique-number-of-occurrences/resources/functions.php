<?php


require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';


/***************** Helper function QOL****************/

function validation_errors($error_message) {

  $message = <<< DELIMETER

          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Warning!</strong> $error_message
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

DELIMETER;

echo $message;
}

function remove_space($string) {

  return preg_replace('/\s*,\s*/', ',', $string);
}


function calculate_occurrences() {
        

  if (isset($_POST['calculate'])) {

    $string = remove_space($_POST['array']); // get value and remove whitespace between comma
    $array = explode(",", $string); //separate the interger by comma

    //check if element in array are interger type
    foreach ($array as $key) { 
        if (!(is_numeric($key))) {
            $errors[] = "{$key} is not an integer";
        } 
    } 

    //stop the function and display the error if any
    if(!empty($errors)) {

      foreach ($errors as $error) {
        
        echo validation_errors($error);

      }
    } else {

      $occurrences = array_count_values($array); //count the interger's occurrences

      //separate the key and its value and display it in a table
      foreach ($occurrences as $key => $value) {
        $orders = <<<DELIMETER

        <tr>
            <td>{$key}</td>
            <td>{$value}</td>
        </tr>


DELIMETER;

        echo $orders;
      }




    }


    //display the user input for reference 
    $input = <<<DELIMETER

    <table class="table table-bordered table-hover table-striped text-center">
      <thead>

          <tr>
               <th>Your Input</th>
          </tr>
          
          <td>{$string}</td>

        </thead>
        <tbody>

      </tbody>
    </table>

DELIMETER;

echo $input;

//display the reset button after calculating
function reset_button () {

  echo '<a href="index.php" class="btn btn-primary pull-right"> Reset</a>';
}
        
  } else {

      //default output when there is no integer inserted.
      $orders = <<<DELIMETER

        <tr>
            <td colspan='2'> <h2>Please enter some integers to calculate </h2></td>
        </tr>
DELIMETER;
    echo $orders;

    //hide the button
    function reset_button () {
  
  echo '';
}

  }




}

?>
