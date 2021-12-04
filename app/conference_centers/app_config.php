<?php

	//application details
		$apps[$x]['name'] = "Conference Center";
		$apps[$x]['uuid'] = "8d083f5a-f726-42a8-9ffa-8d28f848f10e";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.1";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Conferences Centers allows one or more audio and video conference rooms.";
		$apps[$x]['description']['en-gb'] = "Conferences Centers allows one or more audio and video conference rooms.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Konferenzzentralen stellen ein oder mehrere Audio- und Videokonferenzräume bereit.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Konferenzzentralen stellen ein oder mehrere Audio- und Videokonferenzräume bereit.";
		$apps[$x]['description']['es-cl'] = "El Centro de Conferencia permite una o más salas de conferencia para audio y video.";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Centre de Conférences permet une ou plus conferences audio ou vidéo.";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "Conferentie centra maakt instellen van een of meer audio en video conferenties mogelijk.";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "O centro de conferências permite gerir uma ou mais salas de conferência de audio e vídeo.";
		$apps[$x]['description']['pt-pt'] = "O centro de conferências permite gerir uma ou mais salas de conferência, audio e vídeo.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//destination details
		$y=0;
		$apps[$x]['destinations'][$y]['type'] = "sql";
		$apps[$x]['destinations'][$y]['label'] = "conference_centers";
		$apps[$x]['destinations'][$y]['name'] = "conference_centers";
		$apps[$x]['destinations'][$y]['where'] = "where domain_uuid = '\${domain_uuid}' and conference_center_enabled = 'true' ";
		$apps[$x]['destinations'][$y]['order_by'] = "conference_center_name asc";
		$apps[$x]['destinations'][$y]['field']['conference_center_uuid'] = "conference_center_uuid";
		$apps[$x]['destinations'][$y]['field']['name'] = "conference_center_name";
		$apps[$x]['destinations'][$y]['field']['destination'] = "conference_center_extension";
		$apps[$x]['destinations'][$y]['field']['extension'] = "conference_center_extension";
		$apps[$x]['destinations'][$y]['field']['description'] = "conference_center_description";
		$apps[$x]['destinations'][$y]['select_value']['dialplan'] = "transfer:\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_value']['ivr'] = "menu-exec-app:transfer \${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_label'] = "\${destination} \${name} \${description}";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "conference_center_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "95f88726-4706-43f0-b52b-9504a0b8046f";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_center_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_center_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_center_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "95f88726-4706-43f0-b52b-9504a0b8046f";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_view_all";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_view";
		//$apps[$x]['permissions'][$y]['menu']['uuid'] = "95f88726-4706-43f0-b52b-9504a0b8046f";
		//$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_play";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_details";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_profile";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_record";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_max_members";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_wait_mod";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_moderator_endconf";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_schedule";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_announce_name";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_announce_count";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_announce_recording";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_mute";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_sounds";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_email_address";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_accountcode";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_room_enabled";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_detail_view";
		//$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		//$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_detail_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_detail_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_session_detail_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "conference_center_destinations";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b321797c-2b77-4213-9339-c9c2794bf457";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "conference_center";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "session_enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable Conference Sessions";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b1a4e1b7-8201-4637-b2fb-380b67112ea5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "conference_center";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "accountcode_enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Request the account ID.";

	//cache details
		$apps[$x]['cache']['key'] = "dialplan.\${domain_name}";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_conference_centers";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_center_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_dialplans";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "dialplan_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_center_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the conference center name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_center_extension";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the conference center extension number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_center_pin_length";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the pin length.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_center_greeting";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the conference greeting.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_center_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the center description.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_center_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enable or disable the conference center.";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_conference_rooms";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_room_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_center_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_conference_centers";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "conference_center_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Conference UUID";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_room_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the conference room name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "profile";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the conference profile.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "record";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "recording";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select whether to record the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "moderator_pin";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the moderator PIN number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "participant_pin";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the participant PIN number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "max_members";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Limit number of people in the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "start_datetime";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Open the conference room at the start time.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "stop_datetime";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Close the conference room at the stop time.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "wait_mod";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Wait for the moderator to join before starting the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "moderator_endconf";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "When moderator exits end conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "announce_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Introduce participants as they enter the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "announce_count";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Announce number of participants when entering the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "announce_recording";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Announce to participants that conference is being recorded.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "sounds";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Play sound when someone enters or exists the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "mute";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Mute participants on entering the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "created";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Date when the conference was created.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "created_by";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "The user that created the conference session.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "email_address";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Optional email address for the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "accountcode";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['search'] = 'true';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Optional accountcode for the conference.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select to enable or disable the session.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Description.for the conference session.";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_conference_room_users";
		$apps[$x]['db'][$y]['table']['parent'] = "v_conference_rooms";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_room_user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_room_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_conference_rooms";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "conference_room_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_users";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_conference_sessions";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_session_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "meeting_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_meetings";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "meeting_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "meeting_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "profile";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the conference profile.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "recording";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Conference Recording";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "start_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "start_epoch";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "end_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "end_epoch";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_conference_session_details";
		$apps[$x]['db'][$y]['table']['parent'] = "v_conference_sessions";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_session_detail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "conference_session_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_conference_sessions";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "conference_session_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "meeting_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_meetings";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "meeting_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "meeting_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "username";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Extension number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_id_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "caller_id_name";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_id_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "caller_id_number";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Call UUID";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "moderator";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Moderator";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "network_addr";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "network address";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "start_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "start_epoch";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "end_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "end_epoch";

?>
