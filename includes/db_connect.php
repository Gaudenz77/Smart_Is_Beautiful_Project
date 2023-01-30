<?php
// Connect to the database
$dbHost = getenv('DB_HOST');
$dbname = getenv("DB_NAME");
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');

$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbname;charset=utf8", $dbUser,  $dbPassword);

// set ERROR-MODE for webDevs ("->" calls function in class-object (new PDO (see above), "::" is a static variable, like a constant-variable)
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


// Query Functions
function fetchquestionById($id, $dbConnection) {
    $query = $dbConnection->query("SELECT * From `questions` WHERE `id` = $id");
    $row = $query->fetch(PDO::FETCH_ASSOC);
    /* print_r($row); */
    // Example row = array() Array ( [id] => 503 [topic] => astronautics [question_text] => What is the name of the first privately-funded spacecraft to reach orbit? [answer-1] => Space Shuttle [answer-2] => SpaceX [answer-3] => Apollo [answer-4] => Orion [answer-5] => [correct] => answer-2 ) 
    return $row; // fetches Row Data

} 


/* ONLY OPEN WHREN SURE AND SERIOUS SELECT statement  -----  ONLY OPEN WHREN SURE AND SERIOUS SELECT statement ONLY OPEN WHREN SURE AND SERIOUS SELECT statement  -----  ONLY OPEN WHREN SURE AND SERIOUS SELECT statement */

/* Select Fields in Index.php, Function----------------------------------------------------------*/
function getTopics($dbConnection) {
    try {
        $query = $dbConnection->query("SELECT DISTINCT topic FROM questions");
      return $query->fetchAll(PDO::FETCH_COLUMN);
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
      exit;
    }
  }


?>