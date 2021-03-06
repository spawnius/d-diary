<?php
$lang['ui_descr']= "A simple calendar application";
$lang['ui_app_name']= "D-diary";
$lang['ui_login']= "Login";
$lang['ui_login_msg'] = "D-diary login";
$lang['ui_remember_me'] = "Remember me";
$lang['ui_login_no_fb']	= "Login (no fb)";
$lang['ui_signup']	= "Signup";
$lang['ui_settings']= "Settings";
$lang['ui_about']= "About";
$lang['ui_logout']	= "Logout";
$lang['ui_fb_add']	= "Add facebook";
$lang['ui_terms'] = "Terms and conditions";
$lang['ui_invite'] = "Invite friends";
$lang['ui_extensions'] = "Extensions";
$lang['ui_account'] = "Account";
$lang['ui_security'] = "Security";
$lang['ui_calendar'] = "calendar";
$lang['ui_decl'] = "'s";
$lang['ui_reload'] = "reload";
$lang['ui_close'] = "Close";

$lang['ui_registration'] = "Registration";
$lang['ui_login_name'] = "Login";
$lang['ui_first_name'] = "First name";
$lang['ui_last_name'] = "Surname";
$lang['ui_password'] = "Password";
$lang['ui_password_confirm'] = "Confirm password";
$lang['ui_email'] = "E-mail";
$lang['ui_email_confirm'] = "Confirm e-mail";
$lang['ui_signup'] = "Signup";
$lang['ui_signup_done'] = "Done";
$lang['ui_cancel'] = "Cancel";
$lang['ui_optional'] = "optional";
$lang['ui_capatcha'] = "Enter capatcha";
$lang['ui_terms_1'] = "I agree to the";
$lang['ui_terms_2'] = "Terms and conditions";
$lang['ui_continue_to_cal'] = "Continue to D-diary";

$lang['ui_validate_terms'] = "Please read and agree to the terms and conditions";
$lang['ui_validate_capatcha'] = "Please fill in the capatcha correctly";
$lang['ui_validate_email'] = "The provided email adress is not valid";
$lang['ui_validate_taken'] = "The provided username or email is already taken";
$lang['ui_validate_match'] = "The provded password or email combinations do not match";

$lang['ui_error_login'] = "Invalid username/password combination!";

$lang['ui_error_settings'] = "Sorry there was an error - the settings were not applied";
$lang['ui_success_settings'] = "Settings applied";
$lang['ui_settings_deny'] = "Settings could not be applied since required permissions were denied";
$lang['ui_f_name'] = "First name (for display)";
$lang['ui_l_name'] = "Last name";
$lang['ui_language'] = "Language";
$lang['ui_apply_changes'] = "Apply changes";
$lang['ui_linked_profile'] = "Linked facebook profile";
$lang['ui_unlink_acc'] = "Unlink profile";
$lang['ui_english'] = "English";
$lang['ui_russian'] = "Russian";
$lang['ui_latvian'] = "Latvian";

$lang['ui_reg_successful'] = "Your registration was successful!";
$lang['ui_reg_gratitude'] = "Thank you for signing up, within 5 minutes you should recive a confirmation link on the specified email account.";
$lang['ui_reg_use_link'] = "Please use the link in the mentioned e-mail to confirm your registration within a days time from now, otherwise the requested account will be discarded.";
$lang['ui_reg_usefull'] = "I hope you will find d-diary usefull!";
$lang['ui_reg_confirm_success'] = "You have sucesfully confirmed your new account!";
$lang['ui_reg_confirm_result_success'] = "Your D-diary account is all set up and ready to use, but the capabilities of a basic account are quite primitive - link your account with facebook and extend your diary with usefull social features!";
$lang['ui_reg_no_acc'] = "No such account present for confirmation!";
$lang['ui_reg_please_reg'] = "If you want to use D-diary please login with facebook or <a href=".base_url("signup").">register!</a>";
$lang['ui_reg_cancel_success'] = "The registration for the this email was canceled";
$lang['ui_reg_cancel_fail'] = "Could not find any registration to cancel!";
$lang['ui_reg_cancel_fail'] = "Could not find any registration to cancel!";
$lang['ui_reg_fb_in_use'] =  "This facebook id is already in use!";
$lang['ui_reg_fb_in_use_res'] = "If you want to use this facebook id with a new account please unlink it from the old one, this can be done in Settings -> Account";

//Front page
$lang['ui_front_slogan']="D-diary is a simple way to organise your day!";
$lang['ui_features'][] = "Simple and elegant design";
$lang['ui_features'][] = "Easy to use";
$lang['ui_features'][] = "Extendable with aditional features";
$lang['ui_features'][] = "Not bloated with things you don't want";
$lang['ui_features'][] = "The vintage look and feel of a simple wall calendar";

$lang['ui_facebook'] = "facebook";
$lang['ui_facebook_slogan'] = "A simple, easy to use diary that's intergrated with facebook:";
$lang['ui_fb_features'][] = "Simple access and registration via facebook";
$lang['ui_fb_features'][] = "Can be used outside of facebook";
$lang['ui_fb_features'][] = "Accessable and usable without facebook";
$lang['ui_fb_features'][] = "Can be linked with a different facebook account after";

$lang['ui_plugins'] = "Plugins";
$lang['ui_plugins_slogan'] = "Extend your diary with additional social features you need using the provided plugins:";
$lang['ui_plugins_features'][] = "<b>Friends birthdays</b> - see the upcoming birthdays";
$lang['ui_plugins_features'][] = "<b>Events</b> - keep track of events";
$lang['ui_plugins_features'][] = "<b>Your photos</b> - remember when and with who";
$lang['ui_plugins_features'][] = "<b>Publish notes</b> - right to your facebook wall";
$lang['ui_plugins_features'][] = "more coming..";

$lang['ui_privacy'] = "Privacy";
$lang['ui_privacy_slogan'] = "We try to keep things as confidential and private as possible:";
$lang['ui_privacy_features'][] = "SSL encrypted access";
$lang['ui_privacy_features'][] = "Requesting only essential permissions";
$lang['ui_privacy_features'][] = "Unlink from facebook via simple click";
$lang['ui_privacy_features'][] = "Deletion of private data and facebook permissions on account removal";

$lang['ui_friends_events'] = "Upcoming events";
$lang['ui_friends_events_info'] = "Shows the events you and your frends are planing to attend, so you wouldn't miss anything intresting.";
$lang['ui_friends_birthdays'] = "Frends birthdays";
$lang['ui_friends_birthdays_info'] = "Shows friends birthdays depending on the date selected, provides sorting and ordering so you wouldn't miss a single one.";
$lang['ui_change_settings'] = "Change settings";
$lang['ui_extensions_use_facebook'] = "To use extensions please log in with Facebook";
$lang['ui_acc_unlink_fb'] = "Unlinking the facebook user account will revoke all settings asociated with facebook, 
		disable all used extenenstions and will require you to relogin with the currently active password, or a new username and password sent to this facebbok account by email if you registered with facebook.
		Afterwards you will be able to link a different facebook account to this D-diary profile.";
$lang['ui_sec_last_login_details'] = "Last login information:";	
$lang['ui_sec_last_login_ip'] = "Last login IP:";
$lang['ui_sec_last_login_date'] = "Last login time:";
$lang['ui_sec_pass_change'] = "Password change:";
$lang['ui_sec_old_pass'] = "Current password";
$lang['ui_sec_new_pass_repeat'] = "New password again";
$lang['ui_sec_new_pass'] = "New password";
$lang['ui_sec_close_acc'] = "Close account";
$lang['ui_sec_if_issues'] = "If you have issues";
$lang['ui_sec_close_acc'] = "Close this account";
$lang['ui_sec_close_info'] = "Closing this account will permenantly deny all access to D-diary from it and revoke all facebook permissions, if any were given to the app.";
$lang['ui_sec_access_log'] = "Access history";
// Notes extension
$lang['ui_publish_notes'] = "Publish notes";
$lang['ui_publish_notes_info'] = "This extension will allow you to publish entries from your diary directly to your facebook wall. Your entries will be published as notes, so they won't have a character length restriction.";
// Pictures extenison
$lang['ui_user_photos'] = "My photos";
$lang['ui_user_photos_info'] = "Shows your photos depending on the date selected and provides sorting by either date added in the past or in the future. Great for refreshing your memory about those important moments, so photos can be viewed directly or opened on facebook.";