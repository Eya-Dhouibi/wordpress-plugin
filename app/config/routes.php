<?php
MvcRouter::public_connect('https://dev-eyatsmm320.pantheonsite.io/cvs', array('controller' => 'cvs', 
'action' => 'index'));

MvcRouter::public_connect('add/cv', array('controller' => 'cvs', 
'action' => 'add'));

MvcRouter::public_connect('edit/cv/{:id:[\d]+}', 
array('controller' => 'cvs', 'action' => 'edit'));

?>