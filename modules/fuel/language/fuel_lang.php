<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'مدیریت محتوا';
$lang['logged_in_as'] = 'نام کاربری:';
$lang['logout'] = 'خروج';
$lang['fuel_developed_by'] = 'FUEL CMS version %1s is developed by <a href="http://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> and built upon the <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a> framework.';
$lang['fuel_copyright'] = 'تمامی حقوق متعلق به شرکت گلدن کو می باشد.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = "شما اجازه دسترسی به این صفحه را ندارید";
$lang['error_missing_module'] = "ماژول %1s وجود ندارد";
$lang['error_invalid_login'] = 'نام کاربری یا رمز عبور اشتباه است';
$lang['error_max_attempts'] = 'متاسفانه اطلاعات کاربری شما غلط است و حساب کاربری شما به صورت موقت قفل می شود، لطفا به از گذشت %s ثانیه مجددا تلاش بفرمایید';
$lang['error_empty_user_pwd'] = 'لطفا نام کاربری و رمز عبور خود را وارد نمایید';
$lang['error_pwd_reset'] = 'خطایی در بازنشانی رمز عبور شما وجود دارد';
$lang['error_invalid_email'] = 'ایمیلی که شما وارد کرده اید در سیستم وجود ندارد';
$lang['error_invalid_password_match'] = 'پسورد مطابقت ندارد';
$lang['error_empty_email'] = 'لطفا ایمیل خود را وارد نمایید';
$lang['error_folder_not_writable'] = 'شما باید فولدر %1s را قابل ویرایش کنید';
$lang['error_invalid_folder'] = 'فولدر اشتباه است %1s';
$lang['error_file_already_exists'] = 'فایل %1s وجود دارد';
$lang['error_zip'] = 'در ساخت فایل فشرده، خطایی وجود دارد';
$lang['error_no_permissions'] = 'شما برای انجام این عملیات دسترسی ندارید';
$lang['error_no_lib_permissions'] = 'شما برای اجرای متد های این کلاس دسترسی ندارید';
$lang['error_page_layout_variable_conflict'] = 'خطایی در این صفحه آرایی وجود دارد و یا اینکه صفحه آرایی شامل یک یا چند کلمه کلیدی %1s است';
$lang['error_no_curl_lib'] = 'شما باید اکتنشن curl  را برای استفاده از این ابزار داشته باشید';
$lang['error_inline_page_edit'] = 'این متغیر باید در محیط ادمین ذخیره شود و یا در فایل views/_variables ویرایش شود';
$lang['error_saving'] = 'در ذخیره سازی خطایی وجود دارد';
$lang['error_cannot_preview'] = 'در پیش نمایش این قسمت  خطایی وجود دارد';
$lang['error_cannot_make_api_call'] = 'خطایی در ساختن API  برای %1s وجود دارد';
$lang['error_sending_email'] = 'خطایی در ارسال ایمیل به %1s وجود دارد';
$lang['error_upload'] = 'در آپلود فایل شما خطایی وجود دارد. لطفا مطمئن شوید که سرور شما برای آپلود فایل هایی با این سایز تنظیم شده باشد و پوشه ها قابلیت نوشتن را داشته باشند';
$lang['error_create_nav_group'] = 'لطفا یک گروه تنظیم راهبری بسازید';
$lang['error_requires_string_value'] = 'فیلد نام باید دارای مقدار عددی باشد';
$lang['error_missing_params'] = 'شما پارامترهای لازم برای مشاهده این صفحه را ندارید';
$lang['error_invalid_method'] = 'نام تابع (متد) اشتباه است';
$lang['error_curl_page'] = 'در بارگذاری این صفحه با CURL خطایی وجود دارد';
$lang['error_class_property_does_not_exist'] = 'متغیر %1s در کلاس وجود ندارد';
$lang['error_class_method_does_not_exist'] = 'تابع %1s در کلاس وجود ندارد';
$lang['error_could_not_create_folder'] = 'خطا یی در ساختن فولدر %1s وجود دارد';
$lang['error_could_not_create_file'] = 'خطایی در ساختن فایل %1s وجود دارد';
$lang['error_no_build'] = "تنظیمات از پیش ساخته شده ای برای نصب  این ماژول وجود ندارد.\n";


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong> اکیدا پیشنهاد می شود که پسورد خود را از حالت پیش فرض <em>%1s</em> تغییر دهید </strong>.';
$lang['warn_not_published'] = 'این آیتم منتشر نشده است.';
$lang['warn_not_active'] = 'این %1s فعال نیست.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "ورود با %s";
$lang['logged_out'] = "خروج از %s";
$lang['dev_pwd_instructions'] = 'این سایت در حال توسعه است و نیازمند رمز عبور برای نمایش است.';
$lang['login_forgot_pwd'] = 'رمز عبور را فراموش کرده اید؟';
$lang['login_reset_pwd'] = 'بازیابی رمز عبور';
$lang['login_btn'] = 'ورود';
$lang['logout_restore_original_user'] = 'بازیابی کاربر اصلی';

$lang['auth_log_pass_reset_request'] = "درخواست بازیابی رمز عبور برای '%1s' از %2s";
$lang['auth_log_pass_reset'] = " بازیابی رمز عبور برای '%1s' از %2s";
$lang['auth_log_cms_pass_reset'] = "بازیابی پسورد برای مدیریت محتوا برای '%1s' از %2s";
$lang['auth_log_login_success'] = "ورود موفقیت آمیز '%1s' از %2s";
$lang['auth_log_failed_updating_login_info'] = "خطایی در به روز رسانی اطلاعات لاگین برای '%1s' از %2s وجود ندارد";
$lang['auth_log_failed_login'] = "Failed login by '%1s' from %2s, login attempts: %3s";
$lang['auth_log_account_lockout'] = "حساب کاربری برای '%1s' از %2 قفل شد.";

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'داشبورد';
$lang['dashboard_intro'] = 'به سیستم مدیریت محتوا خوش امدید.';
$lang['dashboard_hdr_latest_activity'] = 'آخرین فعالیت ها';
$lang['dashboard_hdr_latest_news'] = 'آخرین اخبار FUEL';
$lang['dashboard_hdr_modified'] = 'صفحات تغییر یافته اخیر';
$lang['dashboard_hdr_site_docs'] = 'مستندات سایت';
$lang['dashboard_change_pwd'] = 'تغییر رمز عبور.';
$lang['dashboard_change_pwd_later'] = 'رمز عبور خود را بعدا تغییر خواهم داد.';
$lang['dashboard_subscribe_rss'] = 'مشترک RSSشوید';
$lang['dashboard_view_all_pages'] = 'همه صفحات را ببینید.';
$lang['dashboard_view_all_activity'] = 'همه فعالیت ها را ببینید';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'پروفایل من';
$lang['profile_instructions'] = 'اطلاعات کاربری زیر را ویرایش کنید:';


/*
|--------------------------------------------------------------------------
| My Modules
|--------------------------------------------------------------------------
*/
$lang['section_my_modules'] = 'ماژول من';
$lang['module_crud']='مدیریت جداول ';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/
$lang['pwd_reset'] = 'ایمیلی برای تایید بازیابی پسورد در راه است.';
$lang['pwd_reset_subject'] = "درخواست بازیابی پسورد ادمین FUEL";
$lang['pwd_reset_email'] = "برای تایید بازیابی پسورد \n%1s بر روی لینک کلیک کنید";
$lang['pwd_reset_subject_success'] = "بازیابی پسورد ادمین FUEL با موفقیت انجام شد";
$lang['pwd_reset_email_success'] = "پسورد FUELبه  %1s تغییر یافت.برای تغییر پسورد، با این پسورد در ادمین مدیریت محتوای FUEL لاگین نمایدد و بر روی نام در قسمت بالا سمت راست کلیک نمایید تا بتوانید به اطلاعات کاربری خود دسترسی داشته باشید.";
$lang['pwd_reset_success'] = 'رمز عبور شما با موفقیت مجددا تنظیم شد و ایمیلی حاوی پسورد جدید برای شما فرستاده شد.';
$lang['cache_cleared'] = "کش سایت پاک شد.";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'داشبورد';

$lang['module_pages'] = 'صفحات';
$lang['module_blocks'] = 'بلوک ها';
$lang['module_navigation'] = 'تنظیمات راهبری ها';
$lang['module_categories'] = 'دسته بندی ها';
$lang['module_tags'] = 'برچسب ها ( تگ ها)';
$lang['module_assets'] = 'فایل های کمکی';
$lang['module_sitevariables'] = 'متغیرهای سایت';
$lang['module_users'] = 'کاربران';
$lang['module_permissions'] = 'مجوزها';
$lang['module_tools'] = 'ابزارها';
$lang['module_manage_cache'] = 'کش صفحه';
$lang['module_manage_activity'] = 'لاگ فعالیت ها';
$lang['module_manage_settings'] = 'تنظیمات';
$lang['module_generate'] = 'تولید شده';


$lang['section_site'] = 'سایت';
$lang['section_blog'] = 'بلاگ';
$lang['section_modules'] = 'ماژول ها';
$lang['section_manage'] = 'مدیریت';
$lang['section_tools'] = 'ابزارها';
$lang['section_settings'] = 'تنظیمات';
$lang['section_recently_viewed'] = 'اخیرا نمایش داده شده';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s آیتم از <em>%2s</em> ساخته شد.";
$lang['module_edited'] = "%1s آیتم از <em>%2s</em> ویرایش شد.";
$lang['module_deleted'] = "%1s آیتم از <em>%2s</em> حذف شد.";
$lang['module_multiple_deleted'] = "<em>%1s</em> چندگانه حذف شد.";
$lang['module_restored'] = "%1s آیتم از آرشیو بازیابی شد.";
$lang['module_instructions_default'] = "شما می توانید %1s را برای سایت خود مدیریت کنید.";
$lang['module_restored_success'] = 'ورژن قبلی با موفقیت افزوده شد';
$lang['module_replaced_success'] = 'محتوای این سطر با موفقیت جایگزینی شد.';
$lang['module_incompatible'] = 'ورژن این ماژول با ورژن نصب FUEL_VERSION سازگار نیست.';

$lang['cannot_determine_module'] = "ماژول را نمی تواند مشخص کند.";
$lang['incorrect_route_to_module'] = "مسیریابی برای دسترسی به این ماژول اشتباه است.";
$lang['data_saved'] = "داده ها ذخیره شدند";
$lang['data_deleted'] = "داده ها حذف شدند";
$lang['data_not_deleted'] = 'بعضی یا همه داده ها نمی تواند حذف شود';
$lang['no_data'] = 'هیچ داده ای برای نمایش وجود ندارد';
$lang['no_preview_path'] = 'هیچ مسیر پیش نمایشی برای این ماژول اختصاص نیافته است';
$lang['delete_item_message'] = 'شما می خواهید آیتم را حذف کنید:';
$lang['replace_item_message'] = 'سطری را که می خواهید جایگزین کنید را از لیست زیر انتخاب نمایید. جایگزینی باعص حذف سط قبلی و جیگزینی آن با سطر دیگری می شود';

// command line
$lang['module_install'] = "ماژول '%1s' با موفقیت نصب شد\n";
$lang['module_install_error'] = "خطایی در نصب ماژول '%1s' وجود دارد.\n";

$msg = "ماژول %1s از FUEL حذف شد.\n\n";
$msg .= "اگرچه حذف ماژول از GIT یکی از کارهایی است که اتوات تنظیم نشده است، اما موارد زیر می تواند کمک کند.\n\n";
$msg .= "1. بخش مربوطه را از فایل .gitmodules حذف کنید.\n";
$msg .= "2.  مربوطه را از فایل .git/config حذف کنید.\n";
$msg .= "3. را اجرا کنید git rm --cached %2s .\n";
$msg .= "4. زیر ماژول های بدون مسیر را ثبت یا حذف کنید.\n";
$lang['module_uninstall'] = $msg;

// build
$lang['module_build_asset'] = "%1s optimized and ouput to %2s\n";

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "شما با موفقیت به ورژن %s مهاجرت کردید\n";
$lang['migrate_nothing_todo'] = "مهاجرت لازم نیست.\n";

/*
|--------------------------------------------------------------------------
| List View
|--------------------------------------------------------------------------
*/
$lang['adv_search'] = 'جستجوی پیشرفته';
$lang['reset_search'] = 'پاک کردن جستجو';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'محل مشخص شده دارای مسیرهایمشخص شده در فایل های مسیریابی (%1s) است:';
$lang['page_controller_assigned'] = 'یک متد کنترلر به این صفحه اختصاص داده شده است.';
$lang['page_updated_view'] = 'یک فایل نمایش به روز شده در <strong>%1s</strong> وجود دارد.آیا مایل به بارگذاری آن در بدنه صفحه خود هستید؟';
$lang['page_not_published'] = 'این صفحه منتشر نشده است.';

$lang['page_no_upload'] = 'خیر، بارگذاری نشود';
$lang['page_yes_upload'] = 'بله بارگذاری شود';
$lang['page_information'] = 'اطلاعات صفحه';
$lang['page_layout_vars'] = 'متغیرهای صفحه آرایی';

$lang['pages_instructions'] = 'در این قسمت شما می توانید داده های مرتبط با این صفحه را مدیریت کنید';
$lang['pages_associated_navigation'] = 'تنظیمات راهبری مرتبط';
$lang['pages_success_upload'] = 'نمای صفحه با موفقیت آپلود شد';
$lang['pages_upload_instructions'] = 'فایل نما را انتخاب کنید و در صفحه زیر بارگذاری نمایید';
$lang['pages_select_action'] = 'انتخاب';

// page specific form fields
$lang['form_label_layout'] = 'صفحه آرایی';
$lang['form_label_cache'] = 'کش';
$lang['pages_last_updated'] = 'آخرین به روز رسانی %1s';
$lang['pages_last_updated_by'] = 'آخرین به روز رسانی %1s توسط %2s';
$lang['pages_not_published'] = 'این صفحه منتشر نشده است.';
$lang['pages_default_location'] = 'مثال: company/about';

$lang['form_label_page'] = 'صفحه';
$lang['form_label_target'] = 'هدف';
$lang['form_label_class'] = 'کلاس';

$lang['navigation_related'] = 'ساختن تنظیمات راهبری';
$lang['navigation_quick_add'] = 'این فیلد به شما این امکان را میدهد که آیتم تنظیم راهبری را به این صفحه اضافه کنید.شما تنها در هنگام ساخت صفحه می توانید این آیتم را ایجاد کنید. برای ویرایش آیتم تنظیم راهبری شما باید بر روی لینک \'راهبری\'  در سمت چپ کلیک کنید و آیتم تنظیم راهبری یابی را که می خواهید تغییر دهید و سپس بر روی لینک ویرایش کلیک کنید';

$lang['page_select_pages'] = 'صفحات';
$lang['page_select_pdfs'] = 'پی دی اف ها';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'فایل نمایش به روز شده در <strong>%1s</strong> وجود دارد . آیا مایل به استفاده از آن هستید؟';
$lang['blocks_success_upload'] = 'بلوک های نمایش با موفقیت بارگذاری شد.';
$lang['blocks_upload_instructions'] = 'یک فایل بلوک نمایش را انتخاب کنید و آن را در زیر بارگذاری نمایید';

$lang['form_label_view'] = 'نمایش';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = 'وارد کردن تنظیمات راهبری';
$lang['navigation_instructions'] = 'در این قسمت شما می توانید آیتم های منوی بالای صفحه را ایجاد و یا ویرایش کنید.';
$lang['navigation_import_instructions'] = 'یک گروه راهبری را انتخاب نمایید و در قسمت پایین فایلی را برای وارد کردن تنظیمات راهبری بارگذاری نمایید.فایل باید شامل متغیر آرایه ای PHP باشد  که به فیلدهای متغیری زیر اختصاص داده می شود. به عنوان مثال (<strong>$nav</strong>) برای مرجعی برای فرمت آرایه به قسمت  <a href="http://docs.getfuelcms.com/general/navigation" target="_blank">user guide</a> سری بزنید.';
$lang['navigation_success_upload'] = 'تنظیمات راهبری با موفقیت بارگذاری شد.';
$lang['form_label_navigation_group'] = 'گروه تنظیمات راهبری:';
$lang['form_label_nav_key'] = 'کلید';
$lang['form_label_parent_id'] = 'والدین';
$lang['form_label_attributes'] = 'مشخصات';
$lang['form_label_selected'] = 'انتخاب شده';
$lang['form_label_hidden'] = 'مخفی';

$lang['error_location_parents_match'] = 'موقعیت ها و والدین تطابق ندارند.';

// for upload form
$lang['form_label_clear_first'] = 'اولین را پاک کنید.';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'در این قسمت شما می توانید فایل های کمکی جدید را بارگذاری نمایید.اگر می خواهید فایلی با همان نام بازنویسی شود گزینه بازنویسی را انتخاب نمایید';
$lang['form_label_preview/kb'] = 'Preview/kb';
$lang['form_label_link'] = 'لینک';
$lang['form_label_asset_folder'] = 'پوشه فایلهای کمکی';
$lang['form_label_new_file_name'] = 'نام جدید برای فایل';
$lang['form_label_subfolder'] = 'زیرپوشه';
$lang['form_label_overwrite'] = 'بازنویسی';
$lang['form_label_create_thumb'] = 'ایجاد تصویر کوچک';
$lang['form_label_resize_method'] = 'تابع تغییر سایز';
$lang['form_label_maintain_ratio'] = 'نسبت طول به عرص عکس حفظ شود.';
$lang['form_label_resize_and_crop'] = 'در صورت نیاز قسمت های از عکس را حذف کنید.';
$lang['form_label_overwrite'] = 'بازنویسی';
$lang['form_label_width'] = 'پهنا';
$lang['form_label_height'] = 'ارتفاع';
$lang['form_label_alt'] = 'Alt';
$lang['form_label_align'] = 'هم تراز و ردیف کردن';
$lang['form_label_master_dim'] = 'Master dimension';
$lang['form_label_unzip'] = 'خروج فایل های فشرده از حالت فشرده';
$lang['assets_upload_action'] = 'بارگذاری';
$lang['assets_select_action'] = 'انتخاب';
$lang['assets_comment_asset_folder'] = 'فولدر برای آپلود فایل های کمکی';
$lang['assets_comment_filename'] = 'اگر هیچ نامی فراهم نشده باشد، نام فایلی که وجود دارد، مورد استفاده قرار می گیرد.';
$lang['assets_comment_subfolder'] = 'تلاش برای ساخت زیرپوشه برای جایگزینی فایل های کمکی';
$lang['assets_comment_overwrite'] = 'فایل را با همان نام بازنویسی کنید.اگر تیک نخورده باشد، فالی جدیدی با شماره ورژن به انتهای آن افزوده می شود.';
$lang['assets_heading_general'] = 'عمومی';
$lang['assets_heading_image_specific'] = 'مشخصات تصویر';
$lang['assets_comment_thumb'] = 'تصویر کوچکی از تصویر را بسازید.';
$lang['assets_comment_resize_method'] = 'Maintains the aspect ratio or resizes and crops the image to fit the provided dimensions. If "Create thumbnail" is selected, it will only effect the size of the thumbnail.';
$lang['assets_comment_width'] = 'Will change the width of an image to the desired amount. If "Create thumbnail" is selected, then it will only effect the size of the thumbnail.';
$lang['assets_comment_height'] = 'Will change the height of an image to the desired amount. If "Create thumbnail" is selected, it will only effect the size of the thumbnail.';
$lang['assets_comment_master_dim'] = 'Specifies the master dimension to use for resizing. If the source image size does not allow perfect resizing to those dimensions, this setting determines which axis should be used as the hard value. "auto" sets the axis automatically based on whether the image is taller then wider, or vice versa.';
$lang['assets_comment_unzip'] = 'خروج از حالت فشرده';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'در این قسمت شما می توانید متغیرهای سایت را برای وب سایت خود ویرایش کنید';
$lang['sitevariables_scope'] = 'حوزه';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'در این قسمت شما می توانید داده های کاربر را ویرایش کنید.';
$lang['permissions_heading'] = 'مجوزها';
$lang['form_label_language'] = 'زبان';
$lang['form_label_send_email'] = 'ارسال ایمیل';
$lang['btn_send_email'] = 'ارسال ایمیل';
$lang['new_user_email_subject'] = 'حساب کاربری مدیریت محتوا FUEL شما ساخته شد.';
$lang['new_user_email'] = 'حساب کاربری مدیریت محتوا FUEL شما ساخته شد. شما می توانید با اطلاعات زیر وارد شوید:
آدرس کاربر: %1s
نام کاربری: %2s
رمز عبور: %3s';
$lang['new_user_created_notification'] = 'اطلاعات کاربر با موفقیت ذخیره شد وپیام اطلاع رسانی آن به %1s فرستاده شد.';
$lang['error_cannot_deactivate_yourself'] = 'شما نمی توانید خودتان را غیرفعال کنید.';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'شما در این قسمت می توانید مجوزای ماژول های FUEL را مدیریت کنید و سپس آنها را به کاربران تخصیص دهید.';
$lang['form_label_other_perms'] = 'مجوز های ماژول ساده مرتبط را ایجاد کنید';

/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = 'کش پاک شد.';
$lang['cache_instructions'] = 'شما می خواهید کش صفحه را پاک کنید.';
$lang['cache_no_clear'] = 'خیر، کش را پاک نکنید';
$lang['cache_yes_clear'] = 'بله، کش را پاک کنید';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = 'هیچ تنظیمی برای مدیریت ماژول های پیشرفته وجود ندارد.';
$lang['settings_manage'] = 'مدیریت تنظیمات برای ماژول های پیشرفته روبرو:';
$lang['settings_problem'] = 'مشکلی در تنظیمات ماژول پیشرفته <strong>%1s</strong> وجود دارد.<br /> فایل <strong>/fuel/modules/%1s/config/%1s.php</strong> را به منظور تنظیم دستی تنظیمات چک کنید';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = 'این یک درخواست CLI نیست';
$lang['error_not_in_dev_mode'] = 'این تنها می تواند در وضعیت توسعه، اجرا شود';
$lang['error_missing_generation_files'] = 'هیچ فایل تولید کننده ای برای ساخت %1s وجود ندارد.';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'ویرایش';
$lang['table_action_delete'] = 'حذف';
$lang['table_action_view'] = 'نمایش';
$lang['click_to_toggle'] = 'برای تغییر حالتکلیک کنید';
$lang['table_action_login_as'] = 'ورود با عنوان';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'نمایش:';
$lang['label_language'] = 'زبان:';
$lang['label_restore_from_prev'] = 'از نسخه های قبلی بازیابی کنید...';
$lang['label_select_another'] = 'مورد دیگری را انتخاب نمایید...';
$lang['label_select_one'] = 'یکی را انتخاب کنید...';
$lang['label_belongs_to'] = 'متعلق به';
$lang['label_select_a_language'] = 'یک زبان را انتخاب کنید...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'لیست';
$lang['btn_tree'] = 'درخت';
$lang['btn_create'] = 'ایجاد';
$lang['btn_delete_multiple'] = 'حذف چند گانه';
$lang['btn_rearrange'] = 'مرتب سازی مجدد';
$lang['btn_search'] = 'جستجو';
$lang['btn_view'] = 'نمایش';
$lang['btn_publish'] = 'منتشر کردن';
$lang['btn_unpublish'] = 'عدم انتشار';
$lang['btn_activate'] = 'فعال کردن';
$lang['btn_deactivate'] = 'غیر فعال کردن';
$lang['btn_delete'] = 'حذف';
$lang['btn_duplicate'] = 'Duplicate';
$lang['btn_replace'] = 'جایگزینی';
$lang['btn_ok'] = 'تایید';
$lang['btn_upload'] = 'بارگذاری';
$lang['btn_download'] = 'دانلود';
$lang['btn_export_data'] = 'انتقال داده ها ';

$lang['btn_no'] = 'خیر';
$lang['btn_yes'] = 'بله';

$lang['btn_no_upload'] = 'خیر، آن را بارگذاری نکنید';
$lang['btn_yes_upload'] = 'بله، بارگذاری کنید';

$lang['btn_no_dont_delete'] = 'خیر، ان را حذف نکنید';
$lang['btn_yes_dont_delete'] = 'بله، آن را حذف کنید';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'نام';
$lang['form_label_title'] = 'عنوان';
$lang['form_label_label'] = 'برچسب';
$lang['form_label_location'] = 'موقعیت';
$lang['form_label_published'] = 'منتشر شده';
$lang['form_label_bio'] = 'بیوگرافی';
$lang['form_label_slug'] = 'عنوان';
$lang['form_label_facebook'] = 'فیس بوک';
$lang['form_label_cat_id'] = 'دسته بندی';
$lang['form_label_display_name'] = 'نام قابل نمایش';
$lang['form_label_linkedin'] = 'لینکدین';
$lang['form_label_google'] = 'گوگل';
$lang['form_label_website'] = 'وب سایت';
$lang['form_label_about'] = 'درباره';
$lang['form_label_twitter'] = 'توئیتر';
$lang['form_label_categories'] = 'دسته بندی ها';
$lang['form_label_post_date'] = 'تاریخ ارسال مطلب';
$lang['form_label_thumbnail_image'] = 'تصویر کوچک';
$lang['form_label_author'] = 'نویسنده';
$lang['form_label_avatar_image'] = 'تصویر آواتار';
$lang['form_label_main_image'] = 'تصویر اصلی';
$lang['form_label_list_image'] = 'تصویر لیست';
$lang['form_label_start_date'] = 'تاریخ شروع';
$lang['form_label_start_datethumbnail_image'] = 'jw,dv ;,];';
$lang['form_label_end_date'] = 'تاریخ پایان';
$lang['form_label_category'] = 'دسته بندی';
$lang['form_label_summary'] = 'چکیده';
$lang['form_label_order'] = 'ترتیب اولویت';
$lang['form_label_keyword'] = 'کلمات کلیدی';
$lang['form_label_author_id'] = 'نویسنده';
$lang['form_label_thumb_image'] = 'تصویر کوچک';
$lang['form_label_meta_description'] = 'توصیف متا';
$lang['form_label_active'] = 'فعال';
$lang['form_label_precedence'] = 'اولویت';
$lang['form_label_date_added'] = 'تاریخ افزودن';
$lang['form_label_last_updated'] = 'تاریخ به روز رسانی';
$lang['form_label_file'] = 'فایل';
$lang['form_label_value'] = 'مقدار';
$lang['form_label_email'] = 'ایمیل';
$lang['form_label_user_name'] = 'نام کاربری';
$lang['form_label_first_name'] = 'نام';
$lang['form_label_last_name'] = 'نام خانوادگی';
$lang['form_label_super_admin'] = 'مدیر ارشد';
$lang['form_label_password'] = 'پسورد';
$lang['form_label_confirm_password'] = 'تایید پسورد';
$lang['form_label_new_password'] = 'پسورد جدید';
$lang['form_label_description'] = 'توضیح';
$lang['form_label_entry_date'] = 'تاریخ ورود';
$lang['form_label_message'] = 'پیام';
$lang['form_label_image'] = 'تصویر';
$lang['form_label_upload_image'] = 'بارگذاری تصویر';
$lang['form_label_upload_images'] = 'بارگذاری تصاویر';
$lang['form_label_content'] = 'محتوا';
$lang['form_label_excerpt'] = 'چکیده';
$lang['form_label_permalink'] = 'لینک';
$lang['form_label_slug'] = 'Slug';
$lang['form_label_url'] = 'آدرس (URL)';
$lang['form_label_link'] = 'لینک';
$lang['form_label_pdf'] = 'پی دی اف';
$lang['form_label_canonical'] = 'استاندارد';
$lang['form_label_og_title'] = 'عنوان گراف را باز کنید';
$lang['form_label_og_description'] = 'توضیح نمودار را باز کنید';
$lang['form_label_og_image'] = 'تصویر نمودار را باز کنید';
$lang['form_label_category_id'] = 'دسته بندی';
$lang['form_label_save_entries'] = 'ذخیره داده ها';
$lang['form_label_form_display'] = 'نمایش فرم ';
$lang['form_label_anti_spam_method'] = 'روش ضد هرزنامه';
$lang['form_label_submit_button_text'] = 'متن دکمه ذخیره';
$lang['form_label_reset_button_text'] = 'متن دکمه انصراف';
$lang['form_label_Field type'] = 'نوع فیلد';
$lang['form_label_Required'] = 'الزامی';
$lang['form_label_form_action'] = 'عملیات فرم';
$lang['form_label_after_submit_text'] = 'متن بعد از ذخیره';
$lang['form_label_javascript_submit'] = 'ذخیره جاوا اسکریپتی';
$lang['form_label_javascript_validate'] = 'اعتبارسنجی جاوااسکریپتی';
$lang['form_label_javascript_waiting_message'] = 'متن انتظار جاوااسکریپتی';
$lang['form_label_email_recipients'] = 'گیرندگان ایمیل';
$lang['form_label_email_cc'] = 'گیرندگان ایمیل CC';
$lang['form_label_email_bcc'] = 'گیرندگان ایمیل BCC';
$lang['form_label_email_subject'] = 'موضوع ایمیل';
$lang['form_label_email_message'] = 'متن ایمیل';
$lang['form_label_return_url'] = 'لینک بازگشت ';


$lang['form_label_group_id'] = 'گروه';
$lang['form_label_or_select'] = 'یا انتخاب کنید';

$lang['form_enum_option_yes'] = 'بله';
$lang['form_enum_option_no'] = 'خیر';

$lang['required_text'] = 'فیلدهای مورد نیاز';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = 'این صفحه آرایی اصلی برای این سایت می باشد';
$lang['layout_field_page_title'] = 'عنوان صفحه';
$lang['layout_field_meta_description'] = 'توضیحات کلیدی';
$lang['layout_field_meta_keywords'] = 'کلمات کلیدی';
$lang['layout_field_body'] = 'بدنه سایت';
$lang['layout_field_heading'] = 'Heading';
$lang['layout_field_body_description'] = 'محتوای عمده سایت';
$lang['layout_field_body_class'] = 'کلاس بدنه سایت';
$lang['layout_field_redirect_to'] = 'بازگشت به';

$lang['layout_field_301_redirect_copy'] = 'This layout will do a 301 redirect to another page.';
$lang['layout_field_alias_copy'] = 'This layout is similar to a 301 redirect but the location of the page does not change and <br />the page content from the specifiec location is used to render the page.';
$lang['layout_field_sitemap_xml_copy'] = 'این صفحه بندی برای تولید نقشه سایت مورد استفاده قرار می گیرد.برای نمایش این صفحه فایل sitemap.xml  نباید بر روی سرور وجود داشته باشد.';
$lang['layout_field_robots_txt_copy'] = 'این صفحه آرایی برای تولید فایل  robots.txt مورد استفاده قرار می گیرد.برای دیدن این صفحه فایل  robots.txt نباید بر روی سرور وجود داشته باشد';
$lang['layout_field_none_copy'] = 'این صفحه آرایی معادل این است که هیچ صفحه آرایی اتنخاب نشده است';

$lang['layout_field_frequency'] = 'به صورت متناوب';
$lang['layout_field_frequency_always'] = 'همیشه';
$lang['layout_field_frequency_hourly'] = 'هر ساعت یکبار';
$lang['layout_field_frequency_daily'] = 'روزانه';
$lang['layout_field_frequency_weekly'] = 'هفتگی';
$lang['layout_field_frequency_monthly'] = 'ماهانه';
$lang['layout_field_frequency_yearly'] = 'سالیانه';
$lang['layout_field_frequency_never'] = 'هرگز';


/*
|--------------------------------------------------------------------------
| Tooltips
|--------------------------------------------------------------------------
*/
$lang['tooltip_dbl_click_to_open'] = 'بار باز کردن، دوبار کلیک نمایید';


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; اولین';
$lang['pagination_last_link'] = 'آخرین &rsaquo;';


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$lang['action_edit'] = 'ویرایش';
$lang['action_create'] = 'ایجاد';
$lang['action_delete'] = 'حذف';
$lang['action_upload'] = 'بارگذاری';
$lang['action_replace'] = 'جایگزین';

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['database_migration_success'] = 'مهاجرت موفق پایگاه داده به ورژن %1s';

//$lang['import'] = 'وارد کردن';

/*
|--------------------------------------------------------------------------
| Installation
|--------------------------------------------------------------------------
*/
$lang['install_cli_intro'] = "The FUEL CMS installer is an easy way to setup the CMS with common configurations. It will do the following:\n";
$lang['install_cli_intro'] .= "1) Automatically generate an encryption key in fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "2) Enable the CMS admin by changing the 'admin_enabled' config value in fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "3) Change the 'fuel_mode' config value in in fuel/application/config/MY_fuel.php to allow for pages to be created in the CMS.\n";
$lang['install_cli_intro'] .= "4) Change the 'site_name' config value in the fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "5) Setup your evironments fuel/application/config/environments.php.\n";
$lang['install_cli_intro'] .= "6) Will make the fuel/application/logs, fuel/application/cache and assets/images folders writable.\n";
$lang['install_cli_intro'] .= "7) Update the fuel/application/config/database.php file with the inputted values.\n";
$lang['install_cli_intro'] .= "8) Create a database and install the fuel_schema.sql file using your local MySQL connection.\n";

$lang['install_site_name'] = 'What would you like the site name to be for this FUEL CMS installation?';
$lang['install_environments_testing'] = 'What are the domains for your TESTING environment (e.g. myserver.com *.mystagingserver.com)?';
$lang['install_environments_production'] = 'What are the domains for your PRODUCTION environment (e.g. myserver.com *.myserver.com)?';
$lang['install_permissions'] = 'What permissions do you want for your writable folders (e.g. 0755, 0775, 0777)?';
$lang['install_db_name'] = 'What do you want the name of your database to be?';
$lang['install_db_user'] = 'What is the user name to connect to your database?';
$lang['install_db_pwd'] = 'What is the password for that user?';

$lang['install_success'] = 'Your FUEL CMS installation is complete!';
$lang['install_success_with_errors'] = "Your FUEL CMS installation is complete but the follow ERRORS did occur:\n%1s";
$lang['install_further_info'] = "Now, to access the FUEL CMS admin, browse to your installation folder in your browser enter '/fuel' (e.g. localhost/fuel) in your location bar.\n";
$lang['install_further_info'] .= "For additional configuration options, go to http://docs.getfuelcms.com/installation/configuration.\n";
$lang['install_further_info'] .= "For questions, or bug reports, go to https://github.com/daylightstudio/FUEL-CMS/issues or visit us at http://forums.getfuelcms.com.\n";

// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */
