<?php

namespace Drupal\jobs\Controller;

use Drupal\Component\Serialization\Json;

class ListJobsController {
  public function jobs() {
    $strJsonDataURL = 'https://jobs.github.com/positions.json?location=new+york';
	
	$strJsonData = file_get_contents($strJsonDataURL);
	
	$arrJsonJobs = Json::decode($strJsonData);	
	
	return array(
	  '#title' => 'Listing Jobs',
	  '#jobs' => $arrJsonJobs,
	  '#theme' => 'listing-jobs',
	);
  }
}