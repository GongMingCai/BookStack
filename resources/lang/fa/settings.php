<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'تنظیمات',
    'settings_save' => 'تنظیمات را ذخیره کن',
    'settings_save_success' => 'تنظیمات ذخیره شد',
    'system_version' => 'نسخه سیستم',
    'categories' => 'دسته بندی ها',

    // App Settings
    'app_customization' => 'سفارشی سازی',
    'app_features_security' => 'ویژگی ها و امنیت',
    'app_name' => 'نام نرم افزار',
    'app_name_desc' => 'این نام در هدر و در هر ایمیل ارسال شده توسط سیستم نشان داده شده است.',
    'app_name_header' => 'نمایش نام در هدر',
    'app_public_access' => 'دسترسی عمومی',
    'app_public_access_desc' => 'فعال کردن این گزینه به بازدیدکنندگانی که وارد سیستم نشده‌اند اجازه می‌دهد تا به محتوای موجود در نمونه BookStack شما دسترسی داشته باشند.',
    'app_public_access_desc_guest' => 'دسترسی بازدیدکنندگان عمومی را می توان از طریق کاربر "مهمان" کنترل کرد.',
    'app_public_access_toggle' => 'اجازه دسترسی عمومی',
    'app_public_viewing' => 'مشاهده عمومی مجاز است؟',
    'app_secure_images' => 'آپلود تصویر با امنیت بالاتر',
    'app_secure_images_toggle' => 'آپلود تصویر با امنیت بالاتر',
    'app_secure_images_desc' => 'به دلایل عملکرد، همه تصاویر عمومی هستند. این گزینه یک رشته تصادفی و غیرقابل حدس زدن را در مقابل آدرس های تصویر اضافه می کند. برای جلوگیری از دسترسی آسان، اطمینان حاصل کنید که فهرست های دایرکتوری فعال نیستند.',
    'app_default_editor' => 'ویرایشگر پیش فرض صفحه',
    'app_default_editor_desc' => 'ویرایشگر پیش فرض در زمان ویرایش صفحات را انتخاب نمایید. این انتخاب می تواند جایگزین یک سطح صفحه که مجوز داده شده است، شود.',
    'app_custom_html' => 'محتوای اصلی HTML سفارشی',
    'app_custom_html_desc' => 'هر محتوای اضافه شده در اینجا در پایین بخش <head> هر صفحه درج می شود. این برای تغییر سبک ها یا اضافه کردن کد تجزیه و تحلیل مفید است.',
    'app_custom_html_disabled_notice' => 'محتوای سر HTML سفارشی در این صفحه تنظیمات غیرفعال است تا اطمینان حاصل شود که هر گونه تغییر شکسته می تواند برگردانده شود.',
    'app_logo' => 'لوگوی برنامه',
    'app_logo_desc' => 'این تصویر باید 43 پیکسل ارتفاع داشته باشد. <br>تصاویر بزرگ کوچک می شوند.',
    'app_primary_color' => 'رنگ اصلی برنامه',
    'app_primary_color_desc' => 'رنگ اصلی برنامه را از جمله بنر، دکمه ها و پیوندها تنظیم می کند.',
    'app_homepage' => 'صفحه اصلی برنامه',
    'app_homepage_desc' => 'به جای نمای پیش‌فرض، یک نمای را برای نمایش در صفحه اصلی انتخاب کنید. مجوزهای صفحه برای صفحات انتخابی نادیده گرفته می شود.',
    'app_homepage_select' => 'یک صفحه را انتخاب کنید',
    'app_footer_links' => 'پیوندهای پاورقی',
    'app_footer_links_desc' => 'پیوندهایی را برای نمایش در پاورقی سایت اضافه کنید. اینها در پایین اکثر صفحات نمایش داده می شوند، از جمله صفحاتی که نیازی به ورود به سیستم ندارند. می توانید از برچسب "trans::<key>" برای استفاده از ترجمه های تعریف شده توسط سیستم استفاده کنید. به عنوان مثال: با استفاده از "trans::common.privacy_policy" متن ترجمه شده "خط مشی رازداری" و "trans::common.terms_of_service" متن ترجمه شده "شرایط خدمات" را ارائه می دهد.',
    'app_footer_links_label' => 'برچسب پیوند',
    'app_footer_links_url' => 'آدرس پیوند',
    'app_footer_links_add' => 'پیوند پاورقی را اضافه کنید',
    'app_disable_comments' => 'غیرفعال کردن نظرات',
    'app_disable_comments_toggle' => 'نظرات را غیرفعال کنید',
    'app_disable_comments_desc' => 'نظرات را در تمام صفحات برنامه غیرفعال می کند. <br> نظرات موجود نشان داده نمی شوند.',

    // Color settings
    'content_colors' => 'رنگ های محتوا',
    'content_colors_desc' => 'رنگ ها را برای همه عناصر در سلسله مراتب سازمان صفحه تنظیم می کند. برای خوانایی، انتخاب رنگ هایی با روشنایی مشابه با رنگ های پیش فرض توصیه می شود.',
    'bookshelf_color' => 'رنگ قفسه',
    'book_color' => 'رنگ کتاب',
    'chapter_color' => 'رنگ فصل',
    'page_color' => 'رنگ صفحه',
    'page_draft_color' => 'رنگ پیش نویس صفحه',

    // Registration Settings
    'reg_settings' => 'ثبت نام',
    'reg_enable' => 'فعال کردن ثبت نام',
    'reg_enable_toggle' => 'فعال کردن ثبت نام',
    'reg_enable_desc' => 'هنگامی که ثبت نام فعال باشد، کاربر می تواند خود را به عنوان کاربر برنامه ثبت نام کند. پس از ثبت نام به آنها یک نقش کاربر پیش فرض داده می شود.',
    'reg_default_role' => 'نقش کاربر پیش فرض پس از ثبت نام',
    'reg_enable_external_warning' => 'هنگامی که احراز هویت خارجی LDAP یا SAML فعال است، گزینه بالا نادیده گرفته می شود. در صورتی که احراز هویت، در برابر سیستم خارجی در حال استفاده، موفقیت آمیز باشد، حساب های کاربری برای اعضای غیر موجود به طور خودکار ایجاد می شود.',
    'reg_email_confirmation' => 'تایید ایمیل',
    'reg_email_confirmation_toggle' => 'نیاز به تایید ایمیل',
    'reg_confirm_email_desc' => 'در صورت استفاده از محدودیت دامنه، تایید ایمیل مورد نیاز است و این گزینه نادیده گرفته می شود.',
    'reg_confirm_restrict_domain' => 'محدودیت دامنه',
    'reg_confirm_restrict_domain_desc' => 'فهرستی از دامنه‌های ایمیل جدا شده با کاما را وارد کنید که می‌خواهید ثبت نام را محدود کنید. قبل از اینکه به کاربران اجازه تعامل با برنامه داده شود، ایمیلی برای تأیید آدرس آنها ارسال می شود. <br> توجه داشته باشید که کاربران پس از ثبت نام موفق می توانند آدرس ایمیل خود را تغییر دهند.',
    'reg_confirm_restrict_domain_placeholder' => 'بدون محدودیت',

    // Maintenance settings
    'maint' => 'نگهداری',
    'maint_image_cleanup' => 'پاکسازی تصاویر',
    'maint_image_cleanup_desc' => 'محتوای صفحه و بازبینی را اسکن می‌کند تا بررسی کند که کدام تصاویر و نقاشی‌ها در حال حاضر استفاده می‌شوند و کدام تصاویر اضافی هستند. قبل از اجرای این کار، مطمئن شوید که یک پایگاه داده کامل و یک نسخه پشتیبان از تصویر ایجاد کرده اید.',
    'maint_delete_images_only_in_revisions' => 'همچنین تصاویری را که فقط در ویرایش های صفحه قدیمی وجود دارند حذف کنید',
    'maint_image_cleanup_run' => 'پاکسازی را اجرا کنید',
    'maint_image_cleanup_warning' => ':count تصاویر بالقوه استفاده نشده پیدا شد. آیا مطمئن هستید که می خواهید این تصاویر را حذف کنید؟',
    'maint_image_cleanup_success' => ':count تصویر بالقوه استفاده نشده پیدا و حذف شد!',
    'maint_image_cleanup_nothing_found' => 'هیچ تصویر استفاده نشده ای یافت نشد، چیزی حذف نشد!',
    'maint_send_test_email' => 'یک ایمیل آزمایشی ارسال کنید',
    'maint_send_test_email_desc' => 'این یک ایمیل آزمایشی به آدرس ایمیل شما مشخص شده در نمایه شما ارسال می کند.',
    'maint_send_test_email_run' => 'ارسال ایمیل آزمایشی',
    'maint_send_test_email_success' => 'ایمیل به آدرس :address ارسال شد',
    'maint_send_test_email_mail_subject' => 'تست ایمیل',
    'maint_send_test_email_mail_greeting' => 'به نظر می رسد تحویل ایمیل کار می کند!',
    'maint_send_test_email_mail_text' => 'تبریک می گویم! با دریافت این اعلان ایمیل، به نظر می رسد تنظیمات ایمیل شما به درستی پیکربندی شده است.',
    'maint_recycle_bin_desc' => 'قفسه‌ها، کتاب‌ها، فصل‌ها و صفحات حذف‌شده به سطل بازیافت فرستاده می‌شوند تا بتوان آن‌ها را بازیابی کرد یا برای همیشه حذف کرد. بسته به پیکربندی سیستم، اقلام قدیمی در سطل بازیافت ممکن است پس از مدتی به طور خودکار حذف شوند.',
    'maint_recycle_bin_open' => 'سطل بازیافت را باز کنید',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'سطل زباله',
    'recycle_bin_desc' => 'در اینجا می توانید مواردی را که حذف شده اند بازیابی کنید یا حذف دائمی آنها را از سیستم انتخاب کنید. این لیست برخلاف لیست‌های فعالیت مشابه در سیستمی که فیلترهای مجوز اعمال می‌شوند، فیلتر نشده است.',
    'recycle_bin_deleted_item' => 'مورد حذف شده',
    'recycle_bin_deleted_parent' => 'والد',
    'recycle_bin_deleted_by' => 'حذف شده توسط',
    'recycle_bin_deleted_at' => 'زمان حذف',
    'recycle_bin_permanently_delete' => 'برای همیشه حذف کنید',
    'recycle_bin_restore' => 'بازگرداندن',
    'recycle_bin_contents_empty' => 'سطل بازیافت در حال حاضر خالی است',
    'recycle_bin_empty' => 'سطل آشغال خالی',
    'recycle_bin_empty_confirm' => 'این کار همه اقلام موجود در سطل بازیافت از جمله محتوای موجود در هر مورد را برای همیشه از بین می برد. آیا مطمئن هستید که می خواهید سطل بازیافت را خالی کنید؟',
    'recycle_bin_destroy_confirm' => 'این اقدام این مورد را به همراه هر عنصر فرعی فهرست شده در زیر برای همیشه از سیستم حذف می کند و شما نمی توانید این محتوا را بازیابی کنید. آیا مطمئن هستید که می خواهید این مورد را برای همیشه حذف کنید؟',
    'recycle_bin_destroy_list' => 'مواردی که باید نابود شوند',
    'recycle_bin_restore_list' => 'مواردی که باید بازیابی شوند',
    'recycle_bin_restore_confirm' => 'این اقدام، مورد حذف شده، از جمله هر عنصر فرزند، را به مکان اصلی خود باز می گرداند. اگر مکان اصلی از آن زمان حذف شده باشد، و اکنون در سطل بازیافت است، مورد اصلی نیز باید بازیابی شود.',
    'recycle_bin_restore_deleted_parent' => 'والد این مورد نیز حذف شده است. تا زمانی که آن والد نیز بازیابی نشود، این موارد حذف خواهند شد.',
    'recycle_bin_restore_parent' => 'بازیابی والد',
    'recycle_bin_destroy_notification' => ':count تعداد از کل اقلام از سطل بازیافت حذف شده.',
    'recycle_bin_restore_notification' => ':count تعداد از کل اقلام از سطل بازیافت بازیابی شده.',

    // Audit Log
    'audit' => 'گزارش حسابرسی',
    'audit_desc' => 'این گزارش حسابرسی لیستی از فعالیت های ردیابی شده در سیستم را نمایش می دهد. این لیست برخلاف لیست‌های فعالیت مشابه در سیستمی که فیلترهای مجوز اعمال می‌شوند، فیلتر نشده است.',
    'audit_event_filter' => 'فیلتر رویداد',
    'audit_event_filter_no_filter' => 'بدون فیلتر',
    'audit_deleted_item' => 'مورد حذف شده',
    'audit_deleted_item_name' => 'نام  :name',
    'audit_table_user' => 'نام كاربري',
    'audit_table_event' => 'رویداد',
    'audit_table_related' => 'مورد یا جزئیات مرتبط',
    'audit_table_ip' => 'آدرس IP',
    'audit_table_date' => 'تاریخ‌های فعالیت',
    'audit_date_from' => 'محدوده تاریخ از',
    'audit_date_to' => 'محدوده تاریخ تا',

    // Role Settings
    'roles' => 'نقش ها',
    'role_user_roles' => 'نقش های کاربر',
    'role_create' => 'نقش جدید ایجاد کنید',
    'role_create_success' => 'نقش با موفقیت ایجاد شد',
    'role_delete' => 'حذف نقش',
    'role_delete_confirm' => 'با این کار نقش با نام \':roleName\' حذف می شود.',
    'role_delete_users_assigned' => 'این نقش دارای :userCount کاربرانی است که به آن اختصاص داده شده است. اگر می خواهید کاربران را از این نقش مهاجرت کنید، نقش جدیدی را در زیر انتخاب کنید.',
    'role_delete_no_migration' => "کاربران را منتقل نکنید",
    'role_delete_sure' => 'آیا مطمئنید که می خواهید این نقش را حذف کنید؟',
    'role_delete_success' => 'نقش با موفقیت حذف شد',
    'role_edit' => 'ویرایش نقش',
    'role_details' => 'جزئیات نقش',
    'role_name' => 'اسم نقش',
    'role_desc' => 'شرح کوتاه نقش',
    'role_mfa_enforced' => 'به احراز هویت چند عاملی نیاز دارد',
    'role_external_auth_id' => 'شناسه های تأیید هویت خارجی',
    'role_system' => 'مجوزهای سیستم',
    'role_manage_users' => 'مدیریت کاربران',
    'role_manage_roles' => 'نقش ها و مجوزهای نقش را مدیریت کنید',
    'role_manage_entity_permissions' => 'تمام مجوزهای کتاب، فصل و صفحه را مدیریت کنید',
    'role_manage_own_entity_permissions' => 'مجوزها را در کتاب، فصل و صفحات خود مدیریت کنید',
    'role_manage_page_templates' => 'مدیریت قالب های صفحه',
    'role_access_api' => 'دسترسی به API سیستم',
    'role_manage_settings' => 'تنظیمات برنامه را مدیریت کنید',
    'role_export_content' => 'صادرات محتوا',
    'role_editor_change' => 'تغییر ویرایشگر صفحه',
    'role_asset' => 'مجوزهای دارایی',
    'roles_system_warning' => 'توجه داشته باشید که دسترسی به هر یک از سه مجوز فوق می‌تواند به کاربر اجازه دهد تا امتیازات خود یا امتیازات دیگران را در سیستم تغییر دهد. فقط نقش هایی را با این مجوزها به کاربران مورد اعتماد اختصاص دهید.',
    'role_asset_desc' => 'این مجوزها دسترسی پیش‌فرض به دارایی‌های درون سیستم را کنترل می‌کنند. مجوزهای مربوط به کتاب‌ها، فصل‌ها و صفحات این مجوزها را لغو می‌کنند.',
    'role_asset_admins' => 'به ادمین‌ها به‌طور خودکار به همه محتوا دسترسی داده می‌شود، اما این گزینه‌ها ممکن است گزینه‌های UI را نشان داده یا پنهان کنند.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'همه',
    'role_own' => 'صاحب',
    'role_controlled_by_asset' => 'توسط دارایی که در آن آپلود می شود کنترل می شود',
    'role_save' => 'ذخیره نقش',
    'role_update_success' => 'نقش با موفقیت به روز شد',
    'role_users' => 'کاربران در این نقش',
    'role_users_none' => 'در حال حاضر هیچ کاربری به این نقش اختصاص داده نشده است',

    // Users
    'users' => 'کاربران',
    'user_profile' => 'پرونده کاربر',
    'users_add_new' => 'افزودن کاربر جدید',
    'users_search' => 'جستجوی کاربران',
    'users_latest_activity' => 'آخرین فعالیت',
    'users_details' => 'جزئیات کاربر',
    'users_details_desc' => 'یک نام نمایشی و یک آدرس ایمیل برای این کاربر تنظیم کنید. آدرس ایمیل برای ورود به برنامه استفاده خواهد شد.',
    'users_details_desc_no_email' => 'یک نام نمایشی برای این کاربر تنظیم کنید تا دیگران بتوانند آنها را تشخیص دهند.',
    'users_role' => 'نقش های کاربر',
    'users_role_desc' => 'انتخاب کنید که این کاربر به کدام نقش ها اختصاص داده شود. اگر یک کاربر به چندین نقش اختصاص داده شود، مجوزهای آن نقش‌ها روی هم قرار می‌گیرند و تمام توانایی‌های نقش‌های اختصاص داده شده را دریافت خواهند کرد.',
    'users_password' => 'رمز عبور كاربر',
    'users_password_desc' => 'رمز عبوری را که برای ورود به برنامه استفاده می شود تنظیم کنید. این باید حداقل 8 کاراکتر باشد.',
    'users_send_invite_text' => 'می توانید انتخاب کنید که برای این کاربر یک ایمیل دعوت نامه ارسال شود که به آنها امکان می دهد رمز عبور خود را تعیین کنند در غیر این صورت می توانید رمز عبور خود را تعیین کنید.',
    'users_send_invite_option' => 'ارسال ایمیل دعوت کاربر',
    'users_external_auth_id' => 'شناسه احراز هویت خارجی',
    'users_external_auth_id_desc' => 'این شناسه ای است که برای مطابقت با این کاربر هنگام برقراری ارتباط با سیستم احراز هویت خارجی شما استفاده می شود.',
    'users_password_warning' => 'فقط در صورتی که مایل به تغییر رمز عبور خود هستید، موارد زیر را پر کنید.',
    'users_system_public' => 'این کاربر نماینده هر کاربر مهمانی است که از نمونه شما بازدید می کند. نمی توان از آن برای ورود استفاده کرد اما به طور خودکار اختصاص داده می شود.',
    'users_delete' => 'حذف کاربر',
    'users_delete_named' => 'حذف :userName',
    'users_delete_warning' => 'با این کار این کاربر با نام \':userName\' به طور کامل از سیستم حذف می شود.',
    'users_delete_confirm' => 'آیا مطمئن هستید که می خواهید این کاربر را حذف کنید؟',
    'users_migrate_ownership' => 'انتقال مالکیت',
    'users_migrate_ownership_desc' => 'اگر می‌خواهید کاربر دیگری مالک همه مواردی باشد که در حال حاضر متعلق به این کاربر است، کاربری را در اینجا انتخاب کنید.',
    'users_none_selected' => 'هیچ کاربری انتخاب نشد',
    'users_edit' => 'ویرایش کاربر',
    'users_edit_profile' => 'ویرایش پروفایل',
    'users_avatar' => 'آواتار کاربر',
    'users_avatar_desc' => 'تصویری را برای نشان دادن این کاربر انتخاب کنید. این باید تقریباً 256 پیکسل مربع باشد.',
    'users_preferred_language' => 'زبان ترجیحی',
    'users_preferred_language_desc' => 'این گزینه زبان مورد استفاده برای رابط کاربری برنامه را تغییر می دهد. این روی محتوای ایجاد شده توسط کاربر تأثیری نخواهد داشت.',
    'users_social_accounts' => 'حساب های اجتماعی',
    'users_social_accounts_info' => 'در اینجا می‌توانید حساب‌های دیگر خود را برای ورود سریع‌تر و آسان‌تر متصل کنید. قطع ارتباط حساب در اینجا، دسترسی مجاز قبلی را لغو نمی کند. دسترسی را از تنظیمات نمایه خود در حساب اجتماعی متصل لغو کنید.',
    'users_social_connect' => 'اتصال حساب کاربری',
    'users_social_disconnect' => 'قطع حساب',
    'users_social_connected' => 'حساب :socialAccount با موفقیت به نمایه شما پیوست شد.',
    'users_social_disconnected' => 'حساب :socialAccount با موفقیت از نمایه شما قطع شد.',
    'users_api_tokens' => 'توکن‌های API',
    'users_api_tokens_none' => 'هیچ نشانه API برای این کاربر ایجاد نشده است',
    'users_api_tokens_create' => 'ایجاد توکن',
    'users_api_tokens_expires' => 'منقضی شده ها',
    'users_api_tokens_docs' => 'مستندات API',
    'users_mfa' => 'احراز هویت چند عاملی',
    'users_mfa_desc' => 'تنظیم احراز هویت چند مرحله ای یک لایه امنیتی دیگر به حساب شما اضافه میکند.',
    'users_mfa_x_methods' => ':count روش پیکربندی شده است|:count روش های پیکربندی شده',
    'users_mfa_configure' => 'روش پیکربندی',

    // API Tokens
    'user_api_token_create' => 'ایجاد توکن API',
    'user_api_token_name' => 'نام',
    'user_api_token_name_desc' => 'توکن خود را به عنوان یادآوری هدف مورد نظر در آینده، نامی خوانا بدهید.',
    'user_api_token_expiry' => 'تاریخ انقضا',
    'user_api_token_expiry_desc' => 'تاریخی را تعیین کنید که در آن این توکن منقضی شود. پس از این تاریخ، درخواست‌هایی که با استفاده از این رمز انجام می‌شوند دیگر کار نمی‌کنند. خالی گذاشتن این فیلد باعث انقضای 100 سال آینده می شود.',
    'user_api_token_create_secret_message' => 'بلافاصله پس از ایجاد این توکن یک "شناسه رمز" و "رمز رمز" تولید و نمایش داده می شود. راز فقط یک بار نشان داده می‌شود، بنابراین قبل از ادامه، حتماً مقدار را در جایی امن و مطمئن کپی کنید.',
    'user_api_token_create_success' => 'توکن API با موفقیت ایجاد شد',
    'user_api_token_update_success' => 'توکن API با موفقیت به روز شد',
    'user_api_token' => 'توکن API',
    'user_api_token_id' => 'شناسه توکن',
    'user_api_token_id_desc' => 'این یک شناسه غیرقابل ویرایش است که برای این نشانه ایجاد شده است که باید در درخواست‌های API ارائه شود.',
    'user_api_token_secret' => 'رمز توکن',
    'user_api_token_secret_desc' => 'این یک راز ایجاد شده توسط سیستم برای این نشانه است که باید در درخواست های API ارائه شود. این فقط یک بار نمایش داده می شود، بنابراین این مقدار را در جایی امن و مطمئن کپی کنید.',
    'user_api_token_created' => 'توکن ایجاد شد :timeAgo',
    'user_api_token_updated' => 'توکن به روز شد :timeAgo',
    'user_api_token_delete' => 'توکن را حذف کنید',
    'user_api_token_delete_warning' => 'با این کار این نشانه API با نام \':tokenName\' به طور کامل از سیستم حذف می شود.',
    'user_api_token_delete_confirm' => 'آیا مطمئن هستید که می خواهید این نشانه API را حذف کنید؟',
    'user_api_token_delete_success' => 'توکن API با موفقیت حذف شد',

    // Webhooks
    'webhooks' => 'وب هوک ها',
    'webhooks_create' => 'ایجاد وب هوک جدید',
    'webhooks_none_created' => 'هنوز هیچ وب هوکی ایجاد نشده است.',
    'webhooks_edit' => 'ویرایش وب هوک',
    'webhooks_save' => 'ذخیره وب هوک',
    'webhooks_details' => 'جزئیات وب هوک',
    'webhooks_details_desc' => 'یک نام کاربر پسند و یک نقطه پایانی POST به عنوان مکانی برای ارسال داده های وب هوک ارائه دهید.',
    'webhooks_events' => 'رویدادهای وب هوک',
    'webhooks_events_desc' => 'تمام رویدادهایی را که باید باعث فراخوانی این وب هوک شوند، انتخاب کنید.',
    'webhooks_events_warning' => 'به خاطر داشته باشید که این رویدادها برای همه رویدادهای انتخابی فعال خواهند شد، حتی اگر مجوزهای سفارشی اعمال شوند. مطمئن شوید که استفاده از این وب هوک محتوای محرمانه را فاش نمی کند.',
    'webhooks_events_all' => 'تمام رویدادهای سیستم',
    'webhooks_name' => 'نام وب هوک',
    'webhooks_timeout' => 'مهلت درخواست وب هوک (ثانیه)',
    'webhooks_endpoint' => 'نقطه پایانی وب هوک',
    'webhooks_active' => 'وب هوک فعال',
    'webhook_events_table_header' => 'رویدادها',
    'webhooks_delete' => 'حذف وب هوک',
    'webhooks_delete_warning' => 'با این کار این وب هوک با نام \':webhookName\' به طور کامل از سیستم حذف می شود.',
    'webhooks_delete_confirm' => 'آیا مطمئن هستید که می خواهید این وب هوک را حذف کنید؟',
    'webhooks_format_example' => 'نمونه قالب وب هوک',
    'webhooks_format_example_desc' => 'داده‌های وب هوک به‌عنوان یک درخواست POST به نقطه پایانی پیکربندی‌شده به‌عنوان JSON با فرمت زیر ارسال می‌شوند. ویژگی های "related_item" و "url" اختیاری هستند و به نوع رویداد راه اندازی شده بستگی دارد.',
    'webhooks_status' => 'وضعیت وب هوک',
    'webhooks_last_called' => 'آخرین تماس:',
    'webhooks_last_errored' => 'آخرین خطا:',
    'webhooks_last_error_message' => 'آخرین پیغام خطا:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
