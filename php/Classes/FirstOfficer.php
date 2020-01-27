<?php
namespace  Gkephart\AutoloadNamespaces;

require_once("autoload.php");

/**
 * A class that models a captain for Star Trek
 * @author George Kephart
 */
class FirstOfficer{
	/**
	 * State variable containing the eyeColor of the captain in question
	 * @var string $captainEyeColor
	 **/
	private $captainEyeColor;
	/**
	 * State variable containing the year of a experince of the captain in question
	 * @var int $captainYearsExperince
	 **/
	private $captainYearsExperince;

	public function __construct( string $newCaptainEyeColor, int $newCaptainYearsExperince ) {

		try{
			$this->setCaptainEyeColor($newCaptainEyeColor);
			$this->setCaptainYearsExperince($newCaptainYearsExperince);
		} catch(\Exception $exception) {
			throw(new Exception($exception));

		}

	}

	public function getCaptainEyeColor(): string {
		return $this->captainEyeColor;
	}
	public function setCaptainEyeColor(string $newCaptainEyeColor) {
		if($newCaptainEyeColor === "blue" || $newCaptainEyeColor === "green") {
			$this->captainEyeColor = $newCaptainEyeColor;
		} else {
			$this->captainEyeColor = "brown";
		}
	}
	public function getCaptainYearsExperince(): int {
		return $this->captainYearsExperince;
	}

	public function setCaptainYearsExperince($newCaptainYearsExperince): void {
		if($newCaptainYearsExperince > 0) {
			$this->captainYearsExperince = $newCaptainYearsExperince;
		}
	}
}