<?php

namespace MailjetPlugin\Includes;

class MailjetUpdate
{
    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    5.0.0
     */
    public static function updateToV5()
    {
        $apikey = get_option('mailjet_apikey');
        $apisecret = get_option('mailjet_apisecret');

        // Check if transition from v4 to v5 is already done
        if ($apikey != FALSE && $apisecret != FALSE) {
            return true;
        }

        $username = get_option('mailjet_username');
        add_option('mailjet_apikey', $username);

        $password = get_option('mailjet_password');
        add_option('mailjet_apisecret', $password);

        $mailjet_widget = get_option('widget_wp_mailjet_subscribe_widget');
        add_option('widget_mailjet', $mailjet_widget);

        $initSyncListId = get_option('mailjet_initial_sync_list_id');
        add_option('mailjet_sync_list', $initSyncListId);

        $commentAuthorsListId = get_option('mailjet_comment_authors_list_id');
        add_option('mailjet_comment_authors_list', $commentAuthorsListId);
        $autoSubscribeListId = get_option('mailjet_auto_subscribe_list_id');

        // Default settings
        add_option('mailjet_activate_logger', 0);
        add_option('settings_step', 'user_access_step');
        add_option('api_credentials_ok', 1);
        add_option('activate_mailjet_sync', 1);
        add_option('activate_mailjet_initial_sync');
        add_option('create_contact_list_btn');
        add_option('create_list_name');

        // If no list set, contact list can not be ok
        $isContactListOk = $initSyncListId > 0 ? 1 : '';
        add_option('contacts_list_ok', $isContactListOk);
        add_option('mailjet_from_email_extra');
        add_option('mailjet_from_email_extra_hidden');
        add_option('send_test_email_btn');
        $authorSync = $commentAuthorsListId > 0 ? 1 : '';
        add_option('activate_mailjet_comment_authors_sync', $authorSync);

        // Delete unused options
        $deleteOptions = array(
            'mailjet_username',
            'mailjet_password',
            // 'widget_wp_mailjet_subscribe_widget',
            'mailjet_initial_sync_list_id',
            'mailjet_comment_authors_list_id',
            'mailjet_initial_sync_last_date',
            'mailjet_comment_authors_list_date',
            'mailjet_auto_subscribe_list_id',
            'mailjet_user_api_version'
        );

        foreach ($deleteOptions as $option) {
            delete_option($option);
        }
    }
}
