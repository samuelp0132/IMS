 <?php

class Curl{

    /**
     * @param $url
     * @param $values
     * @return mixed
     */
    public static function curlPost($url, $values){
    // set post fields
        /*
        $post = [
            'username' => 'user1',
            'password' => 'passuser1',
            'gender'   => 1,
        ];*/

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($values));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));
        // execute!
        $response = curl_exec($ch);

        // close the connection, release resources used
        curl_close($ch);

        // do anything you want with your response
        return json_decode($response, true);
    }

    /**
     * @param $url
     * @return mixed
     */
    public static function curlGet($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);

        return json_decode($result,true);
    }
}