<?PHP
/*
Simfatic Forms Main Form processor script

This script does all the server side processing. 
(Displaying the form, processing form submissions,
displaying errors, making CAPTCHA image, and so on.) 

All pages (including the form page) are displayed using 
templates in the 'templ' sub folder. 

The overall structure is that of a list of modules. Depending on the 
arguments (POST/GET) passed to the script, the modules process in sequence. 

Please note that just appending  a header and footer to this script won't work.
To embed the form, use the 'Copy & Paste' code in the 'Take the Code' page. 
To extend the functionality, see 'Extension Modules' in the help.

*/

@ini_set("display_errors", 1);//the error handler is added later in FormProc
error_reporting(E_ALL);

require_once(dirname(__FILE__)."/includes/Ramada_reservation-lib.php");
$formproc_obj =  new SFM_FormProcessor('Ramada_reservation');
$formproc_obj->initTimeZone('Europe/Moscow');
$formproc_obj->setFormID('0a706c14-7d5a-45bc-999c-bf75704c7f6b');
$formproc_obj->setRandKey('12f42c04-e7e9-4f89-9113-b0c18baccc35');
$formproc_obj->setFormKey('7c6babf3-029d-4d94-be40-6b74f73d98d7');
$formproc_obj->setLocale('en-US','yyyy-MM-dd');
$formproc_obj->setEmailFormatHTML(true);
$formproc_obj->EnableLogging(false);
$formproc_obj->SetDebugMode(false);
$formproc_obj->setIsInstalled(true);
$formproc_obj->SetPrintPreviewPage(sfm_readfile(dirname(__FILE__)."/templ/Ramada_reservation_print_preview_file.txt"));
$formproc_obj->SetSingleBoxErrorDisplay(true);
$formproc_obj->setFormPage(0,sfm_readfile(dirname(__FILE__)."/templ/Ramada_reservation_form_page_0.txt"));
$formproc_obj->AddElementInfo('full_name','text','');
$formproc_obj->AddElementInfo('Email','email','');
$formproc_obj->AddElementInfo('Phone','telephone','');
$formproc_obj->AddElementInfo('Address','text','');
$formproc_obj->AddElementInfo('Nationality','text','');
$formproc_obj->AddElementInfo('company_name','text','');
$formproc_obj->AddElementInfo('Type_of_reservation','listbox','');
$formproc_obj->AddElementInfo('chick_in_date','datepicker','');
$formproc_obj->AddElementInfo('chick_out_date','datepicker','');
$formproc_obj->AddElementInfo('no_of_rooms','decimal','');
$formproc_obj->AddElementInfo('no_of_person','text','');
$formproc_obj->AddElementInfo('no_of_childerns','decimal','');
$formproc_obj->AddElementInfo('Pickup_from_airport','single_chk','');
$formproc_obj->SetHiddenInputTrapVarName('tc5f7705414473fc5fa21');
$formproc_obj->SetFromAddress('info@ramada-almukalla.com');
$sfm_captcha =  new FM_CaptchaCreator('Captcha');
$sfm_captcha->SetSize(150,60);
$sfm_captcha->SetCharset('2356789ABCDEFGHJKLMNPQRSTUVWXYZ');
$sfm_captcha->SetCaseInsensitiveMatch(true);
$sfm_captcha->SetNChars(6);
$sfm_captcha->SetNLines(4);
$sfm_captcha->SetFontFile('images/SFOldRepublicBold.ttf');
$sfm_captcha->SetErrorStrings('Please input the code displayed in the image','The code does not match. Please try again.');
$formproc_obj->addModule($sfm_captcha);

$page_renderer =  new FM_FormPageDisplayModule();
$formproc_obj->addModule($page_renderer);

$validator =  new FM_FormValidator();
$validator->addValidation("full_name","required","Please fill in full_name");
$validator->addValidation("Email","email","The input for  should be a valid email value");
$validator->addValidation("Email","required","Please fill in Email");
$validator->addValidation("Phone","required","Please fill in Phone");
$validator->addValidation("Address","required","Please fill in Address");
$validator->addValidation("Nationality","required","Please fill in Nationality");
$validator->addValidation("Type_of_reservation","dontselect=Select one...","Please select an option for DropdownList");
$validator->addValidation("chick_in_date","required","Please fill in chick_in_date");
$validator->addValidation("chick_out_date","required","Please fill in chick_out_date");
$validator->addValidation("no_of_rooms","numeric","The input for  should be a valid numeric value");
$validator->addValidation("no_of_person","required","Please fill in no_of_person");
$validator->addValidation("no_of_childerns","numeric","The input for  should be a valid numeric value");
$formproc_obj->addModule($validator);

$data_email_sender =  new FM_FormDataSender(sfm_readfile(dirname(__FILE__)."/templ/Ramada_reservation_email_subj.txt"),sfm_readfile(dirname(__FILE__)."/templ/Ramada_reservation_email_body.txt"),'%Email%');
$data_email_sender->AddToAddr('info@ramada-almukalla.com');
$formproc_obj->addModule($data_email_sender);

$autoresp =  new FM_AutoResponseSender(sfm_readfile(dirname(__FILE__)."/templ/Ramada_reservation_resp_subj.txt"),sfm_readfile(dirname(__FILE__)."/templ/Ramada_reservation_resp_body.txt"));
$autoresp->SetToVariables('full_name','Email');
$formproc_obj->addModule($autoresp);

$tupage =  new FM_ThankYouPage(sfm_readfile(dirname(__FILE__)."/templ/Ramada_reservation_thank_u.txt"));
$formproc_obj->addModule($tupage);

$sfm_captcha->SetValidator($validator);
$page_renderer->SetFormValidator($validator);
$formproc_obj->ProcessForm();

?>