<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DateHelper
 *
 * @author juliana
 */
class DateHelper {

    /**
     * 22/03/2012"
     * @param type $date
     * @return type 
     */
    public static function toBrDate($date) {
        $date = substr($date, 0, 10);
        $date = explode("-", $date);

        return $date[2] . "/" . $date[1] . "/" . $date[0];
    }

    /**
     * 22/03/2012 05:16:23"
     * @param type $dateHour
     * @return type 
     */
    public static function toBrDateWithHour($dateHour) {
        $date = substr($dateHour, 0, 10);
        $date = DateHelper::toBrDate($date);
        $hour = substr($dateHour, 10, 9);

        return $date . " " . $hour;
    }
    
    /**
     *"22 Mai 2012, 05:16:23"
     * @param type $dateHour
     * @return type 
     */
    public static function toBrDateStringHourNumber($dateHour) {
        $date = substr($dateHour, 0, 10);
        $date = explode("-", $date);

        $hour = substr($dateHour, 11, 9);
        

        return $date[2] . " " . DateHelper::getStringMonth($date[1]) . " " . $date[0] . ", " . $hour;
    }

    /**
     *"22 Mai 2012, 05h16"
     * @param type $dateHour
     * @return type 
     */
    public static function toBrDateString($dateHour) {

        $date = substr($dateHour, 0, 10);
        $date = explode("-", $date);

        $hour = substr($dateHour, 11, 9);
        $hour = explode(":", $hour);

        return $date[2] . " " . DateHelper::getMonth($date[1]) . "/" . substr($date[0],-2);
    }

    public static function getStringMonth($month) {
        switch ($month) {
            case 1: return 'Janeiro';
                break;
            case 2: return 'Fevereiro';
                break;
            case 3: return 'Março';
                break;
            case 4: return 'Abril';
                break;
            case 5: return 'Maio';
                break;
            case 6: return 'Junho';
                break;
            case 7: return 'Julho';
                break;
            case 8: return 'Agosto';
                break;
            case 9: return 'Setembro';
                break;
            case 10: return 'Outubro';
                break;
            case 11: return 'Novembro';
                break;
            case 12: return 'Dezembro';
                break;
        }
    }
    
     public static function getMonth($month) {
        switch ($month) {
            case 1: return 'Jan';
                break;
            case 2: return 'Fev';
                break;
            case 3: return 'Mar';
                break;
            case 4: return 'Abr';
                break;
            case 5: return 'Mai';
                break;
            case 6: return 'Jun';
                break;
            case 7: return 'Jul';
                break;
            case 8: return 'Ago';
                break;
            case 9: return 'Set';
                break;
            case 10: return 'Out';
                break;
            case 11: return 'Nov';
                break;
            case 12: return 'Dez';
                break;
        }
    }
    
    /**
     * Metodo pega duas datas uma mais recente e uma mais antiga
     * e faz a diferenca entre elas em segundos
     * @param date $dateRecent
     * @param date $dateAgo
     * @return number
     */
    public static function diffSeconds($dateRecent, $dateAgo)
    {                       
        $totalSeconds = strtotime($dateRecent) - strtotime($dateAgo);       
        
        return $totalSeconds;
    }
    
	/**
	 * timeElapsed - Calcula o tempo em formato de horas passadas
	 * @param int $seconds
	 * @return string
	 */
	public static function timeElapsed($seconds)
    {
    	$timeElased = "";    	
    	
        $timeMeasure = array(60, 60, 24, 365);

        if ($seconds > 59)
        {
        	$i = 0;
            for ($i = 0; $i < count($timeMeasure); $i++)
            {
            	$index = 0;
                $timeCoeficient = 1;
                $finished = false;

                //proximo medida de tempo
                $nextTime = 60;
                //proximo medida de tempo
                if ($i < 3) {
                	$nextTime = (int)$timeMeasure[$i + 1];
                }
                else
                {
                 	$nextTime = (int)$timeMeasure[3];
                }

                //coeficiente de divisao de tempo
                for ($index = 0; $index <= $i; $index++)
                {
                	$timeCoeficient = ($timeCoeficient * $timeMeasure[$index]);
                }                
                
                if (($seconds / $timeCoeficient) < $nextTime)
                {
                	switch ($i)
                    {
                    	case 0:
                        	if (($seconds / $timeCoeficient) != 1)
                            {                            	
                            	$timeElapsed = "há " . (int)($seconds / 60) . " minutos";
                            	
                            } else {
                                $timeElapsed = "há 1 minuto";
                            }
                             
                            $finished = true;
                            
                            break;
                             
                        case 1:
                        	if (($seconds / $timeCoeficient) != 1)
                            {
                            	$timeElapsed = "há " . (int)($seconds / $timeCoeficient) . " horas";
                            } else {
                                $timeElapsed = "há 1 hora";
                            }
                            $finished = true;
                            
                            break;

                            case 2:
                            if (($seconds / $timeCoeficient) != 1)
                            {
                                $timeElapsed = "há " . (int)($seconds / $timeCoeficient) . " dias";
                            } else {
                                $timeElapsed = "há 1 dia";
                            }
                            $finished = true;
                            
                            break;

                            case 3:
                            if (($seconds / $timeCoeficient) != 1)
                            {
                                $timeElapsed = "há " . (int)($seconds / $timeCoeficient) . " anos";
                            } else {
                                $timeElapsed = "há 1 ano";
                            }
                            $finished = true;
                            
                            break;
                        }
                    }
                    if ($finished == true)
                    {
                        break;
                    }
                }
            }
            else
            {
                if ($seconds != 1)
                {
                    $timeElapsed = "há " . $seconds . " segundos";
                }
                else
                {
                    $timeElapsed = "há 1 segundo";
                }
            }
            return $timeElapsed;
       }
}

?>
