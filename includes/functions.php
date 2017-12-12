<?php
//functions
$errors = array();

function confirm_query($result_set) {
    if (!$result_set) {
        die("Database query failed.");
    }
}

// Redirect function
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
}


// get selected category
function get_selected_category_events($category) {
	global $connection;
	$query = "SELECT * FROM tbl_events WHERE eventcategory='$category'" ;
	$event_set = mysqli_query($connection, $query);
	confirm_query($event_set);
	return $event_set;
        
}


// get all categories
function get_all_categories() {
    global $connection;
    $query = "SELECT * FROM tbl_events" ;
    $category_set = mysqli_query($connection, $query);
    confirm_query($category_set);
    return $category_set;

}

// get selected event for selected id
function get_selected_event($eventid) {
    global $connection;
    $query = "SELECT * FROM tbl_events WHERE id=$eventid LIMIT 1" ;
    $event_set = mysqli_query($connection, $query);
    confirm_query($event_set);
    return $event_set;

}




?>