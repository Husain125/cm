<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

define('USERALREADY', "User already registered");
define('USERRAGISTER', "User has been registered successfully. Please verify your Mobile no.");
define('LOGINSUCCESSFULL',"User login successfully");
define('LOGINFAIL',"Login fail please check your email id and password");
define('FOUND',"Password updated successfully. Please check your email id for updated Password.");
define('NOTFOUND',"Email not found");
define('USER_NOT_FOUND',"User not found");
define('NOTUPDATE',"Password not update");
define('AVAILABLE',"User available");
define('NOTAVAILABLE',"User not find");
define('EDITSUCCESSFULL',"Profile has been updated successfully");

define('EDITFAIL',"Profile has been not updated");

define('USERNOTFOND',"Profile not fount you have now registered as artist");

define('NOT_ACTIVE',"User not active.");

define('PASS_NT_MTCH',"Invalid Password.");
/*Get All Category*/
define('ALL_CAT',"Get all Categories");

/*Get All sub_category*/
define('ALL_SUB_CAT',"Get all Sub-Categories");

/*No data*/
define('NO_DATA',"No data found.");

/*Get All Category*/
define('ALL_SKILLS',"Get all Skills");

/*Get All Category*/
define('ALL_ARTISTS',"Get all Artists");

/*Artist Upadte*/
define('ARTIST_UPDATE',"Artist updates successfully.");

/*Something went to wrong. Please try again later.*/
define('TRY_AGAIN',"Something went to wrong. Please try again later.");

/*Product Added successfully.*/
define('PRODUCT_ADD',"Product Added successfully.");

/*Qualification Added successfully.*/
define('QUALIFICATION_ADD',"Qualification Added successfully.");

/*Comment Added successfully.*/
define('ADD_COMMENT',"Comment Added successfully.");

/*Please Check you Email*/
define('CHECK_MAIL',"Please Check you Email.");

/*Gallery image added successfully.*/
define('ADD_GALLERY',"Gallery image added successfully.");

/*Appointment booked successfully.*/
define('BOOK_APP',"Appointment booked successfully.");

/*Get all Appointments*/
define('GET_APP',"Get all Appointments");

define('VRY_NO',"Please verify your Mobile no.");

/*CURRENCY TYPE*/
define('CURRENCY_TYPE',"USD");

/*Booking end successfully*/
define('BOOKING_END',"Booking end successfully.");

/*"Get my current booking."*/
define('CURRENT_BOOKING',"Get my current booking.");

/*Get my invoice.*/
define('MY_INVOICE',"Get my invoice.");

/*Payment Confirm successfully*/
define('PAYMENT_CONFIRM',"Payment Confirm successfully.");

/*View profile and get Category*/
define('VIEW_PROFILE', 'product according to user');

/*Product_find*/
define('PRODUCT_FIND', 'Product Found');

/*Product_find*/
define('ADD_SNAP', 'Snap Added successfully');

/*product edit msg*/
define('PRO_EDIT','Product Edit successfully');

define('SELECT_FILE', 'Please select a file to upload');

/*Get All Category*/
define('ALL_FIELD_MANDATORY',"All Fields are mandatory.");

define('PLEASE_LOGIN_FIRST', 'Please Login First');

define('CHECK_YOUR_EMAIL', 'Invalid email Format');

define('MOBILE_NUMBER_INVALID', 'Mobile number format invalid');

define('PASSWORD_MIN_LENGTH_8', 'Password must be 8-20 characters long');

define('SUCCESSFULLY_LOGOUT', 'successfully logout');

define('PRODUCT_NAME_EXIST', 'This product name exist');

define('SNAP_ALREADY_ADDED', 'Snap Already added');

define('SUCCESSFULLY_DELETED', 'successfully Deleted');

define('UPDATE_SNAP','Snap Updated successfully');

define('NOPRODUCT', 'No Product found');

define('TYPE_SIZE', 'File type invalid or file size exceeds');

define('NO_MORE_SNAP', 'Already have 3 snaps , you cannot add more than 3 snap');

define('MSG_SEND', "Message sent successfully");

define('ALL_PACKAGES', "Get all Packages.");

define('GET_CHAT', "Get my conversation.");

define('NO_CHAT', "Not yet any conversation.");

define('CHAT_HST', "Get chat history.");

define('SUB_CAT', 'get all sub categories');

define('SUB_SUCCESS', 'Subscription successfully.');

define('ALRAEDY_SUB', 'Already Subscribed.');

define('SUB_HISTORY', 'Subscription history found.');

define('MY_SUB', 'Get my Subscription.');

define('NOT_SUB', 'You are not Subscribed user.');

define('PRODUCT_NOT', "Product not found.");

define('CAT_NOT', "Category not found.");

define('PKG_NOT', "Package not found.");

define('SUB_CAT_NOT', "Sub category not found.");

define('PRD_DETAILS', "Get product Details.");

define('FOLLOWUSER', "Follow successfully.");

/* User Table*/
define('USR_TBL', 'user');

/* chat Table*/
define('CHT_TBL', 'chat');

/*Subscription Type*/
define('FREE', 'Free');
define('MONTHLY', 'Monthly');
define('QUARTERLY', 'Quarterly');
define('HALFYEARLY', 'Half Yearly');
define('YEARLY', 'Yearly');


/*Registration Email Subject*/
define('REG_SUB',"KeyMarket Registration");

/*Registration Email Subject*/
define('PWD_SUB',"KeyMarket Forget Password");

define('APP_NAME',"KeyMarket");

/*Email Sender ID*/
define('SENDER_EMAIL','samyotechindore@gmail.com');

/*FireBase Key*/
define('FIREBASE_KEY', 'AAAAKSqjGB0:APA91bFP_IkOlThCrVei_7YwZMled7BEdv25ZqSTg32dTpYOHQV7_rUQPDMngBMZJ5JWTVoYnsujCq3yy-0hzop6GrpSGJTF4dxQHTMfGnAy9dA4lBdb8w-XWlfyItsYMPKoEXJBg3y94LLHNgBKgUiKvXz1w5j-oQ');