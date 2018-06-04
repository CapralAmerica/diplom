<?php


namespace AppBundle\Traits;



trait ParserTrait
{
   public function getUrlContent(
       $url,
       $user_agent,
       $cookie_path,
       $proxy = null,
       $proxy_type = null,
       $data = null
   )
   {
       $curl = curl_init($url);

       curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, true);

       curl_setopt( $curl, CURLOPT_USERAGENT, $user_agent);
       curl_setopt( $curl, CURLOPT_COOKIEFILE, $cookie_path);
       curl_setopt( $curl, CURLOPT_COOKIEJAR, $cookie_path);

       curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, false);
       curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);

       if ($proxy && $proxy_type) {

        curl_setopt($curl, CURLOPT_PROXY, $proxy);
        curl_setopt($curl, CURLOPT_PROXYTYPE, $proxy_type);

       }

       curl_setopt( $curl, CURLOPT_TIMEOUT, 10 );
       curl_setopt( $curl, CURLOPT_CONNECTTIMEOUT, 15 );

       if ($data)
       {
           curl_setopt( $curl, CURLOPT_POSTFIELDS, $data);
       }

       $result = curl_exec($curl);
       curl_close($curl);

       return $result;
   }

}