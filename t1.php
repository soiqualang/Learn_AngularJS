<?php



// FOLLOW A SINGLE REDIRECT:

// This makes a single request and reads the "Location" header to determine the

// destination. It doesn't check if that location is valid or not.

function get_redirect_target($url)

{

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HEADER, 1);

    curl_setopt($ch, CURLOPT_NOBODY, 1);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $headers = curl_exec($ch);

    curl_close($ch);



    // Check if there's a Location: header (redirect)

    if (preg_match('/^Location: (.+)$/im', $headers, $matches))

        return trim($matches[1]);



    // If not, there was no redirect so return the original URL

    // (Alternatively change this to return false)

    return $url;

}



// FOLLOW ALL REDIRECTS:

// This makes multiple requests, following each redirect until it reaches the

// final destination.

function get_redirect_final_target($url)

{

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_NOBODY, 1);

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // follow redirects

    curl_setopt($ch, CURLOPT_AUTOREFERER, 1); // set referer on redirect

    curl_exec($ch);

    $target = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

    curl_close($ch);



    if ($target)

        return $target;



    return false;

}
echo get_redirect_final_target('https://www.google.com/maps/place/268A+Nam+Kỳ+Khởi+Nghĩa,+Phường+8,+Quận+3,+Hồ+Chí+Minh,+Việt+Nam/');
?>