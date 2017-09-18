<?php
class Settings {
    const CAMPAIGN_STATUS_PAUSED = 0;
    const CAMPAIGN_STATUS_RUNNING = 1;
    const CAMPAIGN_STATUS_COMPLETE = 2;
    public $statusLog = array();
    private $statusStartDate = null;
    private $statusStopDate = null;
    private $totalHours = 0;
    private $lastRunningState = 0;
    private $answer = 0;
    private $startDateFilter = null;
    private $stopDateFilter = null;


	public function sumTime($startDateFilter = null,$stopDateFilter = null){
		//Filters
		$this->startDateFilter = $startDateFilter;
		$this->stopDateFilter = $stopDateFilter;

		foreach($this->statusLog as $innerArray){

			  //If there's any state change check it
			  if ($this->statusStartDate == null && $this->statusStopDate == null && $innerArray['newState'] == self::CAMPAIGN_STATUS_RUNNING) {
			  		//run
					$this->statusStartDate = $innerArray['date'];
					$this->lastRunningState = $innerArray['date'];
			  }

			  if ($this->statusStopDate == null && $this->statusStartDate != null && $innerArray['newState'] != self::CAMPAIGN_STATUS_RUNNING) {
			  		//run
					$this->statusStopDate = $innerArray['date'];
					$this->lastRunningState = 0;
			  }

			  //calculate
			  if ($this->statusStartDate != null && $this->statusStopDate != null) {
			  	

			  	//Verifying filter dates agains the current status dates
			  	if(($this->startDateFilter == null || $this->statusStartDate >= $this->startDateFilter ) && (
			  		$this->stopDateFilter == null || $this->statusStopDate <= $this->stopDateFilter ) ){


			  		//Total hours
				  	$this->totalHours += ($this->statusStopDate - $this->statusStartDate)/86400;

			  	}

				$this->statusStartDate = null;
				$this->statusStopDate = null;
			  }

		}

		//If still running include NOW otherwise no
		if ($this->isRunning()){
			$lastStopState = time();
			//echo 'timer<br>';

			if ($this->stopDateFilter != null) {
				//echo 'filter<br>';
				$lastStopState = $this->stopDateFilter;
			}

			if ($this->lastRunningState < $this->startDateFilter) {
				$this->lastRunningState = $this->startDateFilter;
			}


			//Include Time() - date("U", strtotime("XXXX-XX-XX"))) in the formula
			$this->answer = $lastStopState - $this->lastRunningState + (24*60*60*$this->totalHours);
		}else{
			//Do not include Time() - date("U", strtotime("XXXX-XX-XX"))) in the formula
			$this->answer = (24*60*60*$this->totalHours);
		}

		return $this->answer;
	}

	//Determinate if still running
	private function isRunning(){
		return $this->statusStartDate != null && $this->statusStopDate == null; 
	}


}

?>