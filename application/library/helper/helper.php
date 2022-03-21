<?php

/**
 * Asttherblay Helpers
 * @author Julien Salmon
 * @copyright Asttherblay 2018
 */

class Helper extends \Slim\Slim{

    public function __construct(){

    }

    /**
     * Recursively convert obj to array
     * @param obj (even a multidimensional one)
     */
    public function objectToArray($obj) {
        if(is_object($obj)) $obj = (array) $obj;
        if(is_array($obj)) {
            $new = array();
            foreach($obj as $key => $val) {
                $new[$key] = $this->objectToArray($val);
            }
        }
        else $new = $obj;
        return $new;       
    }

    /**
     * Test if date is coming in the future
     * @param string date (YmdHi)
     */
    public function isFutureDateYmdHi ($date) {
        $date = array(
                    "year"    => (int)substr($date,0,4),
                    "month"   => (int)substr($date,4,2),
                    "day"     => (int)substr($date,6,2),
                    "hour"    => (int)substr($date,8,2),
                    "minutes" => (int)substr($date,10,2),
                    "seconds" => 0
                    );
        $date = mktime($date["hour"],
                    $date["minutes"],
                    $date["seconds"],
                    $date["month"],
                    $date["day"],
                    $date["year"]
                    );
        if ($date > time()) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the current month in text (french)
     * @param int num (1-12)
     * @return string
     */
    public static function getTextMonth ($num) {

        $months = array("","janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre");
        return $months[intval($num)];

    }
	
	public function dateLocale($dateSQL){
	 
	 $date = explode(' ',$dateSQL);
	 $dateShort = explode('-', $date[0]);
	
	 if($date[0] == '0000-00-00')
		 $date_finale = 'No Date';
	 else{
		 
		 switch($dateShort[1]){
			 case '01' : $mois = 'janvier';
			 break;
			 case '02' : $mois = 'février';
			 break;
			 case '03' : $mois = 'mars';
			 break;
			 case '04' : $mois = 'avril';
			 break;
			 case '05' : $mois = 'mai';
			 break;
			 case '06' : $mois = 'juin';
			 break;
			 case '07' : $mois = 'juillet';
			 break;
			 case '08' : $mois = 'août';
			 break;
			 case '09' : $mois = 'septembre';
			 break;
			 case '10' : $mois = 'octobre';
			 break;
			 case '11' : $mois = 'novembre';
			 break;
			 case '12' : $mois = 'décembre';
			 break; 
			 default : $mois = 'No';
		}
			$date_finale = $dateShort[2].' '.$mois.' '.$dateShort[0];
	 }
		return  $date_finale;
	 
 }

}

?>