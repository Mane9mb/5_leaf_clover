<?php
función OpenCon ( ) 
 {
 $ dbhost = "localhost" ;  
 $ dbuser = "5leafclover" ;  
 $ dbpass = "manelferran" ;  
 $ db = "5leafclover" ;  
 $ conn = new mysqli ( $ dbhost , $ dbuser , $ dbpass , $ db ) o morir ( " Error de conexión:% s \ n" . $ conn - > error ) ;      
 
 return $ conn ; 
 }
 
función CloseCon ( $ conn ) 
 {
 $ conn - > close ( ) ;  
 }
   
