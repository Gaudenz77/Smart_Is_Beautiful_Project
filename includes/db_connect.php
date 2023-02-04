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


//NEW QUERY SQL STMT --------------------------------
function fetchquestionIdSequence($topic, $questionNum, $dbConnection) {
  $query = "SELECT `id` FROM `questions` WHERE `topic` = '$topic' ORDER BY RAND() LIMIT $questionNum";  
  $sqlStatement = $dbConnection->query($query);
  $rows = $sqlStatement->fetchAll(PDO::FETCH_COLUMN);    // `id` = is column 0;

  // prettyPrint($rows);

  return $rows;
}
// SELECT `id` FROM `questions` WHERE `topic` = 'astronautics' ORDER BY RAND()LIMIT 5;  (see above) 




/* Select Fields in Index.php, Function----------------------------------------------------------*/
function getTopics($dbConnection) {
  try {
    $query = $dbConnection->query("SELECT DISTINCT `topic` FROM `questions`");
    $topics = $query->fetchAll(PDO::FETCH_COLUMN);
    return array_map('ucwords', $topics);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
  }
}


//NEW QUERY NAME_MAP SELECT OPTIONS --------------------------------
/* function displayDropdown($dbConnection) {
  // Define the map
  $nameMap = array(
      'music' => 'Music',
      'ch-norris' => 'Chuck Norris',
      'animals' => 'Animals',
      'movies' => 'Movies',
      'd-n-d' => 'Dungeons & Dragons',
      'astronautics' => 'Astronautics',
      'technology'  => 'Technology',
      'ai' => 'Artificial Intelligence',
      'geography' => 'Geography',
      'sports' => 'Sports',
      'science' => 'Science',
      'informatics' => 'Informatics',
      'gen-knowledge' => 'General Knowledge'
  );

  // Retrieve the data from the database
  $result = $dbConnection->query("SELECT * FROM `questions`");
  $data = $result->fetchAll();

  // Display the dropdown in the form
  echo '<select name="topic">';
  foreach ($data as $row) {
      $value = $row['topic'];
      $label = $nameMap[$value];
      echo '<option value="' . $value . '">' . $label . '</option>';
  }
  echo '</select>';
} */



 /* Select total questions from questions table data in  Function----------------------------------------------------------*/ 
 /*  function getTotalQuestions($dbConnection) {
  try {
    $query = $dbConnection->query("SELECT COUNT(*) FROM questions");
    $totalQuestions = $query->fetchColumn();
    return $totalQuestions;
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
  }
} */


?>