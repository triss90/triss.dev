---
title: Converting Color Codes
slug: converting-color-codes
date: 2019-07-02
categories: php
---

# Converting Color Codes
<p class='timestamp'><time datetime='02-07-2019'>02-07-2019</time></p>
<hr>

I run [colordrop.io](https://colordrop.io), a curated color management webapp. With that comes a need for converting colors to and from different formats. 
The following is a simple collection of PHP scripts I use when converting color codes.

## RGB to HEX
``` php
function rgbToHex($R, $G, $B) {
    $R = dechex($R);
    if (strlen($R)<2)
    $R = '0'.$R;
    $G = dechex($G);
    if (strlen($G)<2)
    $G = '0'.$G;
    $B = dechex($B);
    if (strlen($B)<2)
    $B = '0'.$B;
    return '#' . $R . $G . $B;
}
// Example
rgbToHex(240, 109, 6);
```
HEX output: `#f06d06`

## RGB to CMYK
``` php
function rgbToCmyk($var1,$g=0,$b=0) {
    if (is_array($var1)) {
        $r = $var1['r'];
        $g = $var1['g'];
        $b = $var1['b'];
    } else {
        $r = $var1;
    }
    $cyan = 255 - $r;
    $magenta = 255 - $g;
    $yellow = 255 - $b;
    $black = min($cyan, $magenta, $yellow);
    $cyan = @(($cyan    - $black) / (255 - $black));
    $magenta = @(($magenta - $black) / (255 - $black));
    $yellow = @(($yellow  - $black) / (255 - $black));
    return array(
        'c' => $cyan,
        'm' => $magenta,
        'y' => $yellow,
        'k' => $black,
    );
}
// Example
rgbToCmyk(240, 109, 6);
```
CMYK output: `0, 0.5458333333333333, 0.975, 0.05882352941176472`

## RGB to HSV
``` php
function rgbToHsv($R, $G, $B) { 
    $HSL = array();

    $var_R = ($R / 255);
    $var_G = ($G / 255);
    $var_B = ($B / 255);

    $var_Min = min($var_R, $var_G, $var_B);
    $var_Max = max($var_R, $var_G, $var_B);
    $del_Max = $var_Max - $var_Min;

    $V = $var_Max;

    if ($del_Max == 0) {
        $H = 0;
        $S = 0;
    } else {
        $S = $del_Max / $var_Max;

        $del_R = ((($var_Max - $var_R) / 6) + ($del_Max / 2)) / $del_Max;
        $del_G = ((($var_Max - $var_G) / 6) + ($del_Max / 2)) / $del_Max;
        $del_B = ((($var_Max - $var_B) / 6) + ($del_Max / 2)) / $del_Max;

        if ($var_R == $var_Max) $H = $del_B - $del_G;
        else if ($var_G == $var_Max) $H = (1 / 3) + $del_R - $del_B;
        else if ($var_B == $var_Max) $H = (2 / 3) + $del_G - $del_R;

        if ($H < 0) $H++;
        if ($H > 1) $H--;
    }

    $HSL['H'] = $H;
    $HSL['S'] = $S;
    $HSL['V'] = $V;

    return $HSL;
}
// Example
rgbToHsv(240, 109, 6);
```
HSV output: `26, 98, 94`

## HEX to HSL
``` php
function hexToHsl($hex) {
    $hex = array($hex[0].$hex[1], $hex[2].$hex[3], $hex[4].$hex[5]);
    $rgb = array_map(function($part) {
        return hexdec($part) / 255;
    }, $hex);

    $max = max($rgb);
    $min = min($rgb);

    $l = ($max + $min) / 2;

    if ($max == $min) {
        $h = $s = 0;
    } else {
        $diff = $max - $min;
        $s = $l > 0.5 ? $diff / (2 - $max - $min) : $diff / ($max + $min);

        switch($max) {
            case $rgb[0]:
                $h = ($rgb[1] - $rgb[2]) / $diff + ($rgb[1] < $rgb[2] ? 6 : 0);
                break;
            case $rgb[1]:
                $h = ($rgb[2] - $rgb[0]) / $diff + 2;
                break;
            case $rgb[2]:
                $h = ($rgb[0] - $rgb[1]) / $diff + 4;
                break;
        }

        $h /= 6;
    }

    return "$h, $s, $l";
}

// Example
hexToHsl(f06d06);
```
HSL output: `26, 95, 48`

## HEX to RGB
``` php
function hexToRgb($hex, $alpha = false) {
    $hex = str_replace('#', '', $hex);
    $length = strlen($hex);
    $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
    $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
    $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));
    if ( $alpha ) {
        $rgb['a'] = $alpha;
    }
    // return $rgb;
    return implode(array_keys($rgb)) . '(' . implode(', ', $rgb) . ')';
}
// Example
hexToRgb(f06d06);
```
RGB output: `240, 109, 6`