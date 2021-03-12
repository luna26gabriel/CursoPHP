<?php

session_start();

// Depois de verificar o logi e senha 
// reinicie o ID da sessao

session_destroy();
session_start();
session_regenerate_id(); //Reinicia a session
echo session_id();

?>