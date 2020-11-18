<?php
define ('NDB_API_KEY','VO1iCAhu1zGfyDFs3VEsYHAvafUpseDagdRwNKnz');

$params = array('api_key' => NDB_API_KEY,
		      'q' => 'black pepper',
		 'format' => 'json');
echo $url = "https://api.nal.usda.gov/ndb/search?." . http_build_query($params);

?>
