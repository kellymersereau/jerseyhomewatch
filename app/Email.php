<?php
    namespace App;
    /**
     *   Send email via Sendgrid
     */
    class Email
    {
        
        public $email_token;
        public $email_url;
        public $reply_to;
        public $fromAddy;
        public $fromName;
        
        
        
        function __construct($init_parameters = null)
        {
            $this->email_token 	    = $_ENV['email_token'];
            $this->email_url 		= $_ENV['email_url'];
        }
        
    
        public function sendEmail($message) {
            $data = '{ "personalizations": [
            {
                "to": [
                {
                    "email": "newjerseyhomewatch@gmail.com"
                }
                ],
                "subject": "NJHW Contact Us Form Submission"
            }
            ],
            "from": {
            "email": "contact@newjerseyhomewatch.com",
            "name":"Contact"
            },
            "content": [
            {
                "type": "text/html",
                "value": "'.$message.'"
            }
            ]
        }';
    
            $curl = curl_init();
    
            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->email_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    "authorization:".$this->email_token,
                    "content-type: application/json"
                ),
            ));
    
            $response = curl_exec($curl);
            $err = curl_error($curl);
    
            curl_close($curl);
    
            if ($err) {
                echo "cURL Error #:" . $err;
                return $err;
            } else {
                echo $response;
                return $response;
            }
        }
        
    }
