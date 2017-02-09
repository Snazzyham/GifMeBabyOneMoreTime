<?php
$limit = 100; //The number of gifs you want to return max 100, default 25
$offset = 0; // the pagination per page, so say you return 25, offset 25 will give you the next page
$totalGifs = 622; //the total number of gifs you have in your collection
$query = "percolate+galactic"; //the search term, filtering out by profile can be done later on. use + instead of spaces.




do {
  echo "Connecting to server \n";
  $url = 'https://api.giphy.com/v1/gifs/search?q='. $query . '&api_key=dc6zaTOxFJmzC&limit=' . $limit . '&offset=' . $offset;
  echo 'Offset: ' . $offset . ' \n';
  $response = file_get_contents($url);
  echo "Writing contents to file \n";
  file_put_contents('data.json', $response, FILE_APPEND);
  $offset += $limit;

} while ($offset <= $totalGifs);




echo "Done.";


?>
