<?php return [
    'plugin' => [
        'name' => 'Simple Contact',
        'description' => 'A simple contact us Form',
    ],
    'simplecontact' => [
        'from' => 'De',
        'subject' => 'Sujet',
        'name' => 'Nom',
        'email' => 'Courriel',
        'status' => 'État',
        'date' => 'Date',
        'mainmenu' => 'Messages',
        'submenu' => 'Boîte de réception',
        'permission' => 'Simple Contact',
        'permission_messages' => 'Messages',
        'permission_settings' => 'Paramètres',
        'phone' => 'Téléphone',
        'message' => 'Message',
        'reply' => 'Réponse',
        'print' => 'Imprimer',
        'print_message' => 'Imprimer le message',
        'back' => 'Retour',
        'message_delete_success' => 'Message supprimé avec succès.',
        'message_delete_error' => 'Un problème est survenu. Impossible de supprimer.',
        'message_not_found_error' => 'Impossible de trouver ce que vous recherchiez!',
        'message_reply_error' => 'Un problème est survenu. Impossible d\'envoyer la réponse.',
        'message_reply_success' => 'Message envoyé avec succès.',
        'message_reply' => 'Répondre au message',
        'button_submit_reply' => 'Envoyer',
        'button_close_reply' => 'Fermer',
    ],
    'settings' => [
        'section_contact_label' => 'Paramètres',
        'redirect_label' => 'Redirection',
        'redirect_comment' => 'Activer la redirection vers une page après la soumission du formulaire.',
        'redirect_url_label' => 'Choiri la page de redirection.',
        'redirect_url_comment' => 'Select the page from drop down where to redirect after successful form submit',
        'success_message' => 'Message d\'alerte en cas de succès',
        'success_message_comment' => 'Après la soumission réussie du formulaire, le message suivant sera affiché',
        'section_mail_label' => 'Paramètres de messagerie',
        'notification_label' => 'Notification',
        'notification_comment' => 'Envoyer une notification par courriel lorsque le formulaire de contact est soumis',
        'notification_email_address' => 'Courriel de notification',
        'notification_email_address_comment' => 'L\'adresse courriel où les notifications courriels seront expédiées.',
        'auto_reply_label' => 'Réponse automatique',
        'auto_reply_comment' => 'Envoyer une réponse automatique à l\'utilisateur qui a soumis le formulaire de contact.',
        'section_recaptcha_label' => 'Paramètres reCAPTCHA',
        'section_recaptcha_comments' => 'Afficher ou cacher le reCAPTCHA dans le formulaire de contact',
        'recaptcha_label' => 'reCAPTCHA',
        'recaptcha_comment' => 'Afficher le widget reCAPTCHA dans le formulaire',
        'site_key_label' => 'Clé de site',
        'site_key_comment' => 'Votre clé de site est fourni par Google',
        'secret_key_label' => 'Clé secrète',
        'secret_key_comment' => 'Votre clé secret est fournie par Google',
        'form_top_text_label' => 'Entête du formulaire',
        'form_top_text_comment' => 'Ce texte s\'affichera au-dessus du formulaire',
    ],
    'component' => [
        'name' => 'Simple Contact Form',
        'description' => 'Ajouter un formulaire de contact à la page',
        'name_title' => 'Étiquette du champ Nom (Name)',
        'name_description' => 'L\'étiquette du champ Nom (Name) s\'affichera au-dessus du champ (requis)',
        'name_validation_message' => '',
        'email_title' => 'Étiquette du champ Courriel (Email)',
        'email_description' => 'L\'étiquette du champ Courriel (Email) s\'affichera au-dessus du champ (requis)',
        'email_validation_message' => '',
        'phone_title' => 'Étiquette du champ Téléphone (Phone)',
        'phone_description' => 'L\'étiquette du champ Téléphone (Phone) s\'affichera au-dessus du champ',
        'subject_title' => 'Étiquette du champ Sujet (Subject)',
        'subject_description' => 'L\'étiquette du champ Sujet (Subject) s\'affichera au-dessus du champ (requis)',
        'subject_validation_message' => '',
        'message_title' => 'Étiquette du champ Message',
        'message_description' => 'L\'étiquette du champ Message s\'affichera au-dessus du champ (requis)',
        'message_validation_message' => '',
        'display_phone_field' => 'Afficher le champ Téléphone',
        'display_phone_field_description' => 'Afficher le champ Téléphone dans le formulaire',
        'detailed_errors_field' => 'Erreurs détaillées',
        'detailed_errors_field_description' => 'Afficher toutes les erreurs de validation en utilisant une liste',
        'button_text' => 'Texte du bouton de soumission du formulaire',
        'button_description' => 'Texte du bouton de soumission du formulaire (requis)',
        'button_validation_message' => '',
    ],
    'widget' => [
        'label' => 'Vue d\'ensemble des message de contact',
        'properties_title' => 'titre du Widget',
        'properties_chart' => 'Type de graphique',
        'properties_chart_option_bar' => 'Diagramme à bandes',
        'properties_chart_option_pie' => 'Camembert',
        'new' => 'Nouveau',
        'replied' => 'Répondu',
        'total' => 'Total'
    ]
];
