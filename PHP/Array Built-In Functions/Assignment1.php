<?php
$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];
$result = array_map(function($chunk) {
    return array_change_key_case($chunk, CASE_LOWER);
}, array_chunk($friends, 2, true));
print_r($result);
