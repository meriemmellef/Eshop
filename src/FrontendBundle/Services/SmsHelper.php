<?php
namespace  FrontendBundle\Services;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sms
 *
 * @author Adnen Chouibi
 */
class SmsHelper {

    private static $fct = "sms";
    private $sender = "TotalE";
    private $tel;
    private $msg;
    private $apikey;
    private $url;

    public function __construct()
    {

    }

    public function sendSms($tel, $msg) {

        $this->tel = $tel;
        $this->msg = $msg;
        $result['status'] = false;
        $result['status_msg'] = 'Erreur';
        $this->apikey="mB0N9UhKDltYMb49qC9NnVSBSTmIqdysw4iWdaV9WpKpVbVHa8wOzzJ6wA87WamTCZFRSTC53Uh/IDxz/-/MkFEISC4b5zY4kz";
      //tunis $this->apikey="95dB/-/D7pjbDGndEX2CN6edy/-/UurVya/-/EJE800hcD1G3felkNylH9jET8VkGZgBtqBU72qbTaLeLMhlgUboSHqHh0FlAG9NVe";

        if ($this->tel != "" && $this->msg != "" && $this->apikey != "" ) {
            $mySms = urlencode($this->msg);

       //was     $Url_str = "https://www.tunisiesms.tn/client/Api/Api.aspx?fct=sms&key=MYKEY&mobile=216XXXXXXXX&sms=Hello+World&sender=YYYYYYY";
        //tunis     $Url_str =  "https://www.tunisiesms.tn/client/Api/Api.aspx?fct=sms&key=MYKEY&mobile=216XXXXXXXX&sms=Hello+World&sender=YYYYYYY&date=DATET&heure=HOUR";

            $Url_str =  "http://bc1.l-2t.com/Api/Api.aspx?fct=sms&key=MYKEY&mobile=216XXXXXXXX&sms=Hello+World&sender=YYYYYYY";
            $this->tel = $this->fixGsm($this->tel);
            $this->tel = str_replace(' ', '', $this->tel);
            $this->tel = preg_replace('/\s+/', '', $this->tel);

            $Url_str = str_replace("216XXXXXXXX", $this->tel, $Url_str);
            $Url_str = str_replace("Hello+World", $mySms, $Url_str);
            $Url_str = str_replace("YYYYYYY", $this->sender, $Url_str);
            $Url_str = str_replace("MYKEY", $this->apikey, $Url_str);



            $result = $this->fetchUrl($Url_str);
        }
        return $result;
    }

    private function fetchUrl($uri) {

        $result['status'] = false;
        $result['status_msg'] = 'Erreur';
        $result['passerelle_message_id'] = '';

        // Get cURL resource
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $uri,
            CURLOPT_USERAGENT => 'TOTAL',
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
      //  dump($response);die();

        if (!$response) {
            $result['status_msg'] = 'Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl);
            return $result;
        }

        curl_close($curl);

        $xml = @simplexml_load_string($response);

//        var_dump($xml); die();

        if ($xml && isset($xml->status)) {
            $status_code = $xml->status->status_code;
            $result["passerelle_message_id"] = $xml->status->message_id;
            if ($status_code == 200) {
                $result['status'] = true;
                $result['status_msg'] = $this->getMessageCode($status_code);
            } else {
                $result['status_msg'] = $this->getMessageCode($status_code);
            }
        }

        return $result;
    }

    private function fixGsm($tel) {
        $t = '';
        if(substr($tel,0,1) == "+")
            $t =  substr($tel, 1, strlen($tel));

        if (substr($tel, 0, 2) == "00")
            $t =  substr($tel, 2, strlen($tel));

//        var_dump($tel." >>> ".$t );die;
        if($t!='')
            return $t;
        else
            return $tel;

    }

    private function getMessageCode($code) {
        switch ($code) {
            case 200: return "OK";
                break;
            case 400: return "absence d'id";
                break;
            case 401: return "id non autorisé";
                break;
            case 402: return "crédit insuffisant";
                break;
            case 420: return "quota journalier dépassé";
                break;
            case 430: return "contenu manquant";
                break;
            case 431: return "destination manquante";
                break;
            case 440: return "contenu trop long";
                break;
            case 441: return "destination non autorisée";
                break;
            case 442: return "sender non autorisée";
                break;
            case 500: return "erreur interne";
                break;

            default:
                return "undefined error";
                break;
        }
    }

}

//object(SimpleXMLElement)[615]
//  public 'status' =>
//    object(SimpleXMLElement)[622]
//      public 'status_mobile' => string '21697698086' (length=11)
//      public 'status_code' => string '200' (length=3)
//      public 'status_msg' =>
//        object(SimpleXMLElement)[623]
//      public 'message_id' => string '34031
