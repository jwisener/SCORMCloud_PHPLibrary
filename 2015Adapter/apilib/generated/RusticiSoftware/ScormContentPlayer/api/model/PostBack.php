<?php
     //------------------------------------------------------------------------------
     // <auto-generated>
     //     This code was generated by a tool.
     //     Runtime Version: 4.0.30319.42000
     //
     //     Changes to this file may cause incorrect behavior and will be lost if
     //     the code is regenerated.
     // </auto-generated>
     //------------------------------------------------------------------------------

     namespace RusticiSoftware\ScormContentPlayer\api\model;
     {
          require_once (dirname(__FILE__) .  '/../../../../../includes/Enum.php');
          class authType extends Enum 
          {
               const FORM = 'FORM';
               const HTTPBASIC = 'HTTPBASIC';
          }

          require_once (dirname(__FILE__) .  '/../../../../../includes/Enum.php');
          class resultsFormat extends Enum 
          {
               const COURSE = 'COURSE';
               const ACTIVITY = 'ACTIVITY';
               const FULL = 'FULL';
          }

          class postBack 
          {
               /**
                * @var string
                */
               public $url;
               /**
                * @var authType
                */
               public $authType;
               /**
                * @var string
                */
               public $userName;
               /**
                * @var string
                */
               public $password;
               /**
                * @var resultsFormat
                */
               public $resultsFormat;
          }

     }

?>
