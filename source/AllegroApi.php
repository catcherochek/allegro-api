<?php
/**
 * Namespace declaration
 */
namespace AsocialMedia\AllegroApi;

/**
 * Class created for back compatibility
 * in order to organize class names
 * 
 * @see        http://allegro.pl/webapi/documentation.php
 * @author     ASOCIAL MEDIA Maciej Strączkowski <biuro@asocial.media>
 * @copyright  ASOCIAL MEDIA Maciej Strączkowski
 * @version    3.0.0
 */
class AllegroApi extends AllegroWebApi
{
    /**
     * Returns an instance of AllegroWebApi
     * 
     * @return  AllegroWebApi
     */
    public function webApi()
    {
        return $this;
    }
    
    /**
     * Returns an instance of AllegroRestApi
     * 
     * @return  AllegroRestApi
     */
    public function restApi($token, $sandbox = false)
    {
        return new AllegroRestApi($token, $sandbox);
    }
}
