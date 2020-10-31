<?php

declare(strict_types=1);

//Connecting the two arrays linking an author to their published articles
function connectNewsToAuthor(int $author_id, array $authors): string 
{
    return $authors[$author_id];
}

// Function to use in usort() to sort newsarticles by date
function sortByDate( $a, $b ) 
{
    return strtotime($b["date"]) - strtotime($a["date"]);
}

function timeSinceNow (string $date) : array
{
    // If input is a future date
    if (strtotime("now") < strtotime($date)){
        $timeElapsed = [
            'ErrorMessage' => "The input date is in the future you goon!"
        ];
        return $timeElapsed;
    }
    
    // Time difference in seconds from today
    $timeDifference = strtotime("now") - strtotime($date);
    
    // Amounts of years
    $years = intdiv($timeDifference, (60 * 60 * 24 * 365));
    if ($years > 0) 
        $timeDifference = $timeDifference - ($years * 60 * 60 * 24 * 365);

    // Amount of days
    $days = intdiv($timeDifference, (60 * 60 * 24));
        
    if ($days > 0)
        $timeDifference = $timeDifference - ($days * 60 * 60 * 24);

    // Amount of hours
    $hours = intdiv($timeDifference, (60 * 60));
    
    if ($hours > 0)
        $timeDifference = $timeDifference - ($hours * 60 * 60);

    // Amount of minutes
    $minutes = intdiv($timeDifference, 60);

    $timeElapsed = [
        'years' => $years,
        'days' => $days,
        'hours' => $hours,
        'minutes' => $minutes
    ];
    return $timeElapsed;
}

function approxTimeSince (array $times) : string
{
    foreach($times as $key => $time){
        if($time > 0) {
            if ($key === 'days' && $time > 31 && $time <61) {
                $key = 'month';
                $time = 1;
            }
            else if ($key === 'days' && $time >= 61) {
                $key = 'months';
                $time = intdiv($time, 30);
            }
            
            $timeSince = "$time $key ago";
            return $timeSince;
        }
    }
}
$testTime = "2020-10-30 12:30";
print_r(timeSinceNow($testTime));

?>