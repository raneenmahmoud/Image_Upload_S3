<?php

use Aws\S3\S3Client;

class Files
{
    private $_S3_file;
    public function __construct()
        {
            $this->set_credentials();//call method
        }
        //instantiate an amazon s3 client
    public function set_credentials()
        {
            $this->_S3_file = S3Client::factory(
                array(
                    'credentials' => array(
                        'key' => Access_Key,
                        'secret' => Secret_Access_Key
                    ),
                    'region' => 'eu-north-1',
                    'version' => 'latest'
                )
            );
        }
    public function Validate_File()
    {
        if($_FILES['fileToUpload']['size'] > 3000000)
        {
            die('<body style="margin: 0%;
                display:flex;
                justify-content:center;
                align-items:center;
                background-attachment: fixed;"
                >'  
                ."<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <center><h1 >File is too large</h1>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>".'</div></body>'
            );

        }elseif(!stristr($_FILES['fileToUpload']['type'] , 'image')){
            die('<body style="margin: 0%;
                display:flex;
                justify-content:center;
                align-items:center;
                background-attachment: fixed;"
                >'  
                ."<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <center><h1 >File chosen is not supported</h1>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>".'</div></body>'
            );
        }else{
            return true;
        }
        return false;
    }   
    public function Upload_File()
    {
        try{
            $id = uniqid();
            $uploaded_file = $_FILES['fileToUpload']['tmp_name'] ;
            $this->_S3_file->putObject(
                array(
                    'Bucket' => 's3-by-php',
                    'Key' =>  $id,
                    'SourceFile' => $uploaded_file
                )
            );
        }
        catch (Aws\S3\Exception\S3Exception $e) 
        {
            echo "There was an error uploading the file.\n";
        }
        die('<body style="margin: 0%;
                display:flex;
                justify-content:center;
                align-items:center;
                background-attachment: fixed;"
                >'  
                ."<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <center><h1 >File Uploaded Successfully</h1>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>".'</div></body>'
            );
    } 
}