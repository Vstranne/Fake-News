<?php

declare(strict_types=1);
function connectNewsToAuthor(int $author_id, array $authors): string 
{
    return $authors[$author_id];
}
function sortByDate( $a, $b ) 
{
    return strtotime($b["date"]) - strtotime($a["date"]);
}


?>