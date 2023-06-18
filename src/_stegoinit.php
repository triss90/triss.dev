<?php

// Composer load and initialize
$autoloader = require file_exists(__DIR__.'/vendor/autoload.php') ?  __DIR__.'/vendor/autoload.php' : __DIR__.'/../../autoload.php';
$parser = new Mni\FrontYAML\Parser;


class stegosaurus {

    public function stegoSlug ($str = '') {
        $friendlyURL = htmlentities($str, ENT_COMPAT, "UTF-8", false);
        $friendlyURL = preg_replace('/&([a-z]{1,2})(?:acute|lig|grave|ring|tilde|uml|cedil|caron);/i','\1',$friendlyURL);
        $friendlyURL = html_entity_decode($friendlyURL,ENT_COMPAT, "UTF-8");
        $friendlyURL = preg_replace('/[^a-z0-9-.]+/i', '-', $friendlyURL);
        $friendlyURL = preg_replace('/-+/', '-', $friendlyURL);
        $friendlyURL = trim($friendlyURL, '-');
        $friendlyURL = strtolower($friendlyURL);
        return $friendlyURL;
    }

    static function includeVars( $template, $variables_array ) {
        foreach ( $variables_array as $name => $value ) {
            $template = str_replace(
                '%%' .  $name  . '%%', $value, $template
            );
        }

        // Clean other empty tags or in $variables_array not existing HTML variables
        $template = preg_replace(
            array( '/\%\%([^\%\%][a-zA-Z0-9]+)\%\%/'),
            array( ""),
            $template
        );

        return $template;
    }


    static function flatten_array($nestedArray) {
        return array_reduce($nestedArray, function ($flattenedArray, $value) {
            return array_merge($flattenedArray, is_array($value) ? static::flatten_array($value) : [$value]);
        }, []);
    }
    
    
    static function includeFiles($file) {
        
        $code = file_get_contents($file);
		
		preg_match_all('/{% ?(extends|include) ?\'?(.*?)\'? ?%}/i', $code, $matches, PREG_SET_ORDER);
		foreach ($matches as $value) {
			$code = str_replace($value[0], self::includeFiles($value[2]), $code);
		}
		$code = preg_replace('/{% ?(extends|include) ?\'?(.*?)\'? ?%}/i', '', $code);
		return $code;
	}

}

$stegosaurus = new stegosaurus();