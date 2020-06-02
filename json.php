$country = $_GET['country'];
$citylist = "";
$country_list = file_get_contents("country_iso.txt"); //grab this file @ http://pastebin.com/e8gxcVHm

preg_match_all('/(.*?):'.$country.'/im', $country_list, $country_iso, PREG_PATTERN_ORDER);
$country_iso = $country_iso[1][0];


if(isset($country_iso))
{
$tz = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $country_iso); //php 5.3 needed to use DateTimeZone::PER_COUNTRY !

foreach($tz as $city)   
    $citylist .= "{\"optionValue\": \"$city\", \"optionDisplay\": \"$city\"}, ";   
}

$citylist = preg_replace('/, $/im', '', $citylist);
$citylist = "[".$citylist."]";

echo $citylist; 