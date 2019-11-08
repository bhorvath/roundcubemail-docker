<?php
  $config['plugins'] = array_merge($config['plugins'], array('emoticons','contextmenu','managesieve','acl'));
  $config['des_key'] = '5cy7Jj8Lk5YCVLHOAkBub0fG';
  $config['product_name'] = 'CarmaCloud Webmail';
  $config['skin_logo'] = 'skins/larry/images/carma_logo.png';
  $config['client_mimetypes'] = array('text/plain','text/html','text/xml','image/jpeg','image/gif','image/png');
  $config['session_lifetime'] = 720;
  $config['htmleditor'] = 1;
  $config['show_images'] = 1;
  $config['check_all_folders'] = true;

  $config['managesieve_host'] = 'dovecot';
  $config['managesieve_usetls'] = true;
  $config['managesieve_conn_options'] = array(
    'ssl' => array('verify_peer' => true, 'verify_peer_name' => false, 'allow_self_signed' => false)
  );
