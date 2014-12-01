 <?php

 // Create array to hold list of todo items
 $items = array('cook', 'clean', 'dog');

 // List array items formatted for CLI
 function listItems($list) {
     foreach ($list as $key => $value) {
        $key++;
        $say .= "[$key] is to take care of $value" . PHP_EOL;
    } return $say;
 }

  // Return string of list items separated by newlines.
     // Should be listed [KEY] Value like this:
     // [1] TODO item 1
     // [2] TODO item 2 - blah
     // DO NOT USE ECHO, USE RETURN

 // Get STDIN, strip whitespace and newlines,
 // and convert to uppercase if $upper is true

 function getInput($upper = false) {
    $input = fgets(STDIN);
        if ($upper) {
         return trim(strtoupper($input));
        } else {
          return trim($input);
        } // Return filtered STDIN input
 }

 // The loop!
 do {
     // Echo the list produced by the function
     echo listItems($items);

     // Show the menu options
     echo '(N)ew item, (R)emove item, (Q)uit : ';

     // Get the input from user
     // Use trim() to remove whitespace and newlines
     $input = getInput(true);

     // Check for actionable input
     if ($input == 'N') {
         // Ask for entry
         echo 'Enter item: ';
         // Add entry to list array
         $items[] = getInput();
     } elseif ($input == 'R') {
         // Remove which item?
         echo 'Enter item number to remove: ';
         // Get array key
         $key = getInput();
         $key--;
         // Remove from array
         unset($items[$key]);
     }
 // Exit when input is (Q)uit
 } while ($input != 'Q');

 // Say Goodbye!
 echo "Goodbye!\n";

 // Exit with 0 errors
 exit(0);

// // Create array to hold list of todo items
// $items = array();

// // The loop!
// do {
//     // Iterate through list items
//     foreach ($items as $key => $item) {
//         // Display each item and a newline
//         ++$key;
//         //increment to not display zero on first item
//         echo "[{$key}] {$item}\n";
//     }

//     // Show the menu options
//     echo '(N)ew item, (R)emove item, (Q)uit : ';

//     // Get the input from user
//     // Use trim() to remove whitespace and newlines
//     $input = strtoupper(trim(fgets(STDIN)));

//     // Check for actionable input
//     if ($input == 'N' ) {
//         // Ask for entry
//         echo 'Enter item: ';
//         // Add entry to list array
//         $items[] = trim(fgets(STDIN));
//     } elseif ($input == 'R') {
//         // Remove which item?
//         echo 'Enter item number to remove: ';
//         // Get array key
//         $key = trim(fgets(STDIN));
//         //decrement to rearrange the array num 
//         $key--;
//         // Remove from array
//         unset($items[$key]);
//     }
// // Exit when input is (Q)uit
// } while ($input != 'Q');

// // Say Goodbye!
// echo "Goodbye!\n";

// // Exit with 0 errors
// exit(0);
