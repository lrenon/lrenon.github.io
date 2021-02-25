<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Contact portfolio',
    'email_message' => 'Nouveau message !',
    'success_redirect' => '',
    'email' => array(
    'from' => 'contact@portfolio.com',
    'to' => 'leanar@live.fr'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Nom',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nom\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>