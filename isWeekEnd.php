<?php
/*
 * isWeekEnd.php 
 * 
 * Copyright 2013 Ashwath Nadahalli <ashwathnadahalli@.com>
 * 
 * Date: 10 May 2013
 * 
 * Last revision: 10 May 2013
 * 
 * Description: returns true if the $date is a weekend false otherwise
 * $date format : 'yyyy-mm-dd' | date('Y-m-d')
 *
 */
?>
<?php
	//isWeekEnd function
	function isWeekEnd($date)
	{
        $date1 = strtotime($date);
        $date2 = date("l", $date1);
        $date3 = strtolower($date2);
        
        if(($date3 == "saturday" )|| ($date3 == "sunday"))
            return TRUE;
        else 
	    return FALSE;
	}
?>
