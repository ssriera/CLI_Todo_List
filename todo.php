 
<?php
/* Add a (S)ort option to your menu. When it is chosen, it should call a function called sort_menu().

When sort menu is opened, show the following options "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered".

When a sort type is selected, order the TODO list accordingly and display the results. */


 // Create array to hold list of todo items
 $items = array('cook', 'clean', 'dog');
 $sorted_items = $items;

function sort_menu($sorted_items, $sort_choice) {
    if ($sort_choice == 'A') {
        asort($sorted_items);
    } elseif ($sort_choice == 'Z') {
        rsort($sorted_items);
    } elseif ($sort_choice == 'O') {
        echo '$items';
    } elseif ($sort_choice == 'R') {
        krsort($items);
    }
}

sort_menu(1,2);

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
    
    $input = trim(fgets(STDIN));
    
    if ($upper == true) {
        $input = strtoupper($input);
    }
    
    // Return filtered STDIN input
    return $input;
 }

 // The loop!
 do {
     // Echo the list produced by the function
     echo listItems($items);

     // Show the menu options
     echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';

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
     } elseif ($input == 'S') {
        echo "Please make a selection: 'A' for Alphabetical,'Z' for Reverse Alphabetical,'O' for Order Entered,'R' for Reverse Order Entered";
        // capture user choice
        $sort_choice = getInput(true);
        // pass that choice, and our data to sort, into our function
        sort_menu($items, $sort_choice);
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
