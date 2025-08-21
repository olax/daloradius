<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@lirantal.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 *
 * Description:    Ukrainian language file for daloRADIUS operators interface
 *
 * Authors:        Ukrainian Translation
 *
 *********************************************************************************************************
 */

// prevent this file to be directly accessed
if (strpos($_SERVER['PHP_SELF'], '/lang/uk.php') !== false) {
    header("Location: ../index.php");
    exit;
}

/* ********************************************************************************** */
/* Основні елементи системи */
/* ********************************************************************************** */
$l['all']['daloRADIUS'] = sprintf("daloRADIUS %s", $configValues['DALORADIUS_VERSION']);
$l['all']['daloRADIUSVersion'] = sprintf("версія %s ", $configValues['DALORADIUS_VERSION']);
$l['all']['copyright1'] = 'Управління RADIUS, звітність, облік та біллінг від <a target="_blank" href="https://github.com/lirantal/daloradius">Liran Tal</a>';
$l['all']['copyright2'] = 'daloRADIUS - Copyright &copy; 2007-' . date('Y') . <<<EOF
 <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Слідкуйте за @filippolauria на GitHub">
  <a target="_blank" href="https://github.com/filippolauria">Filippo Lauria</a>
</span> та <a target="_blank" href="https://github.com/lirantal/daloradius">Liran Tal</a>.
EOF;

$l['all']['ID'] = "ID";
$l['all']['Name'] = "Ім'я";
$l['all']['Username'] = "Ім'я користувача";
$l['all']['Password'] = "Пароль";
$l['all']['PasswordType'] = "Тип паролю";
$l['all']['IPAddress'] = "IP-адреса";
$l['all']['Profile'] = "Профіль";
$l['all']['Group'] = "Група";
$l['all']['Groupname'] = "Назва групи";
$l['all']['ProfilePriority'] = "Пріоритет профілю";
$l['all']['GroupPriority'] = "Пріоритет групи";
$l['all']['CurrentGroupname'] = "Поточна група";
$l['all']['NewGroupname'] = "Нова група";
$l['all']['Priority'] = "Пріоритет";
$l['all']['Attribute'] = "Атрибут";
$l['all']['Operator'] = "Оператор";
$l['all']['Value'] = "Значення";
$l['all']['NewValue'] = "Нове значення";
$l['all']['MaxTimeExpiration'] = "Максимальний час / Закінчення";
$l['all']['UsedTime'] = "Використаний час";
$l['all']['Status'] = "Статус";
$l['all']['Usage'] = "Використання";
$l['all']['StartTime'] = "Час початку";
$l['all']['StopTime'] = "Час закінчення";
$l['all']['TotalTime'] = "Загальний час";
$l['all']['Bytes'] = "Байти";
$l['all']['Upload'] = "Вивантаження";
$l['all']['Download'] = "Завантаження";
$l['all']['Rollback'] = "Відкат";
$l['all']['Termination'] = "Завершення";
$l['all']['NASIPAddress'] = "IP-адреса NAS";
$l['all']['Action'] = "Дія";
$l['all']['UniqueUsers'] = "Унікальні користувачі";
$l['all']['TotalHits'] = "Загальні звернення";
$l['all']['AverageTime'] = "Середній час";
$l['all']['Records'] = "Записи";
$l['all']['Summary'] = "Підсумок";
$l['all']['Statistics'] = "Статистика";
$l['all']['Credit'] = "Кредит";
$l['all']['Used'] = "Використано";
$l['all']['LeftTime'] = "Залишився час";
$l['all']['LeftPercent'] = "% залишилося часу";
$l['all']['TotalSessions'] = "Загальна кількість сесій";
$l['all']['LastLoginTime'] = "Час останнього входу";
$l['all']['TotalSessionTime'] = "Загальний час сесії";

/* ********************************************************************************** */
/* Атрибути постачальників */
/* ********************************************************************************** */
$l['all']['VendorID'] = "ID постачальника";
$l['all']['VendorName'] = "Назва постачальника";
$l['all']['VendorAttribute'] = "Атрибут постачальника";
$l['all']['RecommendedOP'] = "Рекомендований OP";
$l['all']['RecommendedTable'] = "Рекомендована таблиця";
$l['all']['RecommendedTooltip'] = "Рекомендована підказка";

/* ********************************************************************************** */
/* NAS та точки доступу */
/* ********************************************************************************** */
$l['all']['HgID'] = "ID HG";
$l['all']['Hg'] = "HG";
$l['all']['HgIPHost'] = "IP/хост HG";
$l['all']['HgGroupName'] = "Назва групи HG";
$l['all']['HgPortId'] = "ID порту HG";
$l['all']['NasID'] = "ID NAS";
$l['all']['Nas'] = "NAS";
$l['all']['NasIPHost'] = "IP/хост NAS";
$l['all']['NasShortname'] = "Коротка назва NAS";
$l['all']['NasType'] = "Тип NAS";
$l['all']['NasPorts'] = "Порти NAS";
$l['all']['NasSecret'] = "Секрет NAS";
$l['all']['NasVirtualServer'] = "Віртуальний сервер NAS";
$l['all']['NasCommunity'] = "Спільнота NAS";
$l['all']['NasDescription'] = "Опис NAS";
$l['all']['PacketType'] = "Тип пакету";
$l['all']['HotSpot'] = "Точка доступу";
$l['all']['HotSpots'] = "Точки доступу";
$l['all']['HotSpotName'] = "Назва точки доступу";

/* ********************************************************************************** */
/* Фінанси та тарифи */
/* ********************************************************************************** */
$l['all']['FramedIPAddress'] = "IP-адреса кадру";
$l['all']['SimultaneousUse'] = "Одночасне використання";
$l['all']['Amount'] = "Сума";
$l['all']['TotalAmountDue'] = "Загальна сума до сплати";
$l['all']['InvoiceDate'] = "Дата рахунку";
$l['all']['InvoiceDue'] = "Термін оплати";
$l['all']['PlanCost'] = "Вартість тарифу";
$l['all']['PlanCurrency'] = "Валюта тарифу";
$l['all']['BillAmount'] = "Сума рахунку";
$l['all']['Balance'] = "Баланс";
$l['all']['BillBalance'] = "Баланс рахунку";
$l['all']['BillReason'] = "Причина виставлення рахунку";
$l['all']['BillStatus'] = "Статус рахунку";
$l['all']['BillType'] = "Тип рахунку";
$l['all']['BillAction'] = "Дія з рахунком";
$l['all']['BillPerformer'] = "Виконавець";
$l['all']['Lead'] = "Лід";
$l['all']['Coupon'] = "Купон";
$l['all']['OrderTaker'] = "Приймач замовлень";
$l['all']['LastBill'] = "Останній рахунок";
$l['all']['NextBill'] = "Наступний рахунок";
$l['all']['PostalInvoice'] = "Поштова накладна";
$l['all']['FaxInvoice'] = "Факс накладної";
$l['all']['EmailInvoice'] = "Email накладної";
$l['all']['Billed'] = "Виставлено рахунок";
$l['all']['TotalBilled'] = "Загальна сума рахунків";
$l['all']['Discount'] = "Знижка";

/* ********************************************************************************** */
/* Тарифи та ставки */
/* ********************************************************************************** */
$l['all']['RateName'] = "Назва тарифу";
$l['all']['RateType'] = "Тип тарифу";
$l['all']['RateCost'] = "Вартість тарифу";
$l['all']['CardBank'] = "Банк картки";
$l['all']['Type'] = "Тип";

/* ********************************************************************************** */
/* Дати та час */
/* ********************************************************************************** */
$l['all']['Date'] = "Дата";
$l['all']['Timestamp'] = "Мітка часу";
$l['all']['VoucherValidUntil'] = "Ваучер дійсний до";
$l['all']['VoucherValidFrom'] = "Ваучер дійсний з";
$l['all']['CreationDate'] = "Дата створення";
$l['all']['CreationBy'] = "Створено";
$l['all']['UpdateDate'] = "Дата оновлення";
$l['all']['UpdateBy'] = "Оновлено";

/* ********************************************************************************** */
/* Технічні дані */
/* ********************************************************************************** */
$l['all']['MACAddress'] = "MAC-адреса";
$l['all']['Geocode'] = "Геокод";
$l['all']['PINCode'] = "PIN-код";
$l['all']['TotalUsers'] = "Загальна кількість користувачів";

/* ********************************************************************************** */
/* Дії та команди */
/* ********************************************************************************** */
$l['all']['edit'] = "редагувати";
$l['all']['del'] = "видалити";
$l['all']['groupslist'] = "список груп";
$l['all']['TestUser'] = "Тестувати користувача";
$l['all']['Accounting'] = "Облік";
$l['all']['RADIUSReply'] = "RADIUS відповідь";
$l['all']['Disconnect'] = "Відключити";

/* ********************************************************************************** */
/* Налаштування підключення */
/* ********************************************************************************** */
$l['all']['Debug'] = "Налагодження";
$l['all']['Timeout'] = "Таймаут";
$l['all']['Retries'] = "Повторні спроби";
$l['all']['Count'] = "Кількість";
$l['all']['Requests'] = "Запити";

/* ********************************************************************************** */
/* Налаштування бази даних */
/* ********************************************************************************** */
$l['all']['DatabaseHostname'] = "Ім'я хоста бази даних";
$l['all']['DatabaseUser'] = "Користувач бази даних";
$l['all']['DatabasePass'] = "Пароль бази даних";
$l['all']['DatabaseName'] = "Назва бази даних";

/* ********************************************************************************** */
/* Мовні налаштування */
/* ********************************************************************************** */
$l['all']['PrimaryLanguage'] = "Основна мова";

/* ********************************************************************************** */
/* Налаштування журналювання */
/* ********************************************************************************** */
$l['all']['PagesLogging'] = "Журналювання сторінок (відвідування сторінок)";
$l['all']['QueriesLogging'] = "Журналювання запитів (звіти та графіки)";
$l['all']['ActionsLogging'] = "Журналювання дій (подання форм)";
$l['all']['FilenameLogging'] = "Файл журналування (повний шлях)";
$l['all']['LoggingDebugOnPages'] = "Журналювання інформації налагодження на сторінках";
$l['all']['LoggingDebugInfo'] = "Журналювання інформації налагодження";

/* ********************************************************************************** */
/* Налаштування інтерфейсу */
/* ********************************************************************************** */
$l['all']['PasswordHidden'] = "Увімкнути приховування паролю (відображатимуться зірочки)";
$l['all']['TablesListing'] = "Рядки / записи на сторінках списків таблиць";
$l['all']['TablesListingNum'] = "Увімкнути нумерацію списків таблиць";
$l['all']['AjaxAutoComplete'] = "Увімкнути Ajax автозаповнення";

/* ********************************************************************************** */
/* Повідомлення */
/* ********************************************************************************** */
$l['messages']['missingratetype'] = "помилка: відсутній тип тарифу для видалення";
$l['messages']['missingtype'] = "помилка: відсутній тип";
$l['messages']['missingcardbank'] = "помилка: відсутній банк картки";
$l['messages']['missingrate'] = "помилка: відсутній тариф";
$l['messages']['success'] = "успішно";
$l['messages']['gisedit1'] = "Ласкаво просимо, ви знаходитесь в режимі редагування";
$l['messages']['gisedit2'] = "Видалити поточний маркер з карти та бази даних?";
$l['messages']['gisedit3'] = "Будь ласка, введіть назву точки доступу";
$l['messages']['gisedit4'] = "Додати поточний маркер до бази даних?";
$l['messages']['gisedit5'] = "Будь ласка, введіть назву точки доступу";
$l['messages']['gisedit6'] = "Будь ласка, введіть MAC-адресу точки доступу";

$l['messages']['gismain1'] = "Успішно оновлено код реєстрації GoogleMaps API";
$l['messages']['gismain2'] = "помилка: не вдалося відкрити файл для запису:";
$l['messages']['gismain3'] = "Перевірте права доступу до файлу. Файл повинен бути доступний для запису користувачем/групою веб-сервера";
$l['messages']['gisviewwelcome'] = "Ласкаво просимо до візуальних карт Enginx";

$l['messages']['loginerror'] = "<br/><br/>одна з наступних причин:<br/>
1. неправильне ім'я користувача/пароль<br/>
2. адміністратор вже увійшов в систему (дозволено лише один екземпляр)<br/>
3. схоже, що в базі даних більше одного користувача 'administrator'<br/>
";

/* ********************************************************************************** */
/* Кнопки */
/* ********************************************************************************** */
$l['buttons']['savesettings'] = "Зберегти налаштування";
$l['buttons']['apply'] = "Застосувати";
$l['buttons']['save'] = "Зберегти";
$l['buttons']['cancel'] = "Скасувати";
$l['buttons']['delete'] = "Видалити";
$l['buttons']['edit'] = "Редагувати";
$l['buttons']['add'] = "Додати";
$l['buttons']['search'] = "Пошук";
$l['buttons']['clear'] = "Очистити";
$l['buttons']['reset'] = "Скинути";
$l['buttons']['submit'] = "Надіслати";
$l['buttons']['close'] = "Закрити";
$l['buttons']['view'] = "Переглянути";
$l['buttons']['update'] = "Оновити";
$l['buttons']['create'] = "Створити";
$l['buttons']['download'] = "Завантажити";
$l['buttons']['upload'] = "Вивантажити";
$l['buttons']['export'] = "Експорт";
$l['buttons']['import'] = "Імпорт";
$l['buttons']['backup'] = "Резервна копія";
$l['buttons']['restore'] = "Відновити";

/* Кнопки управління користувачами */
$l['button']['ListUsers'] = "Список користувачів";
$l['button']['NewUser'] = "Новий користувач";
$l['button']['EditUser'] = "Редагувати користувача";
$l['button']['SearchUsers'] = "Пошук користувачів";
$l['button']['RemoveUser'] = "Видалити користувача";
$l['button']['ListUserGroups'] = "Список груп користувачів";
$l['button']['ListProfiles'] = "Список профілів";
$l['button']['NewProfile'] = "Новий профіль";
$l['button']['EditProfile'] = "Редагувати профіль";
$l['button']['RemoveProfile'] = "Видалити профіль";

/* Кнопки звітів */
$l['button']['OnlineUsers'] = "Користувачі онлайн";
$l['button']['LastConnectionAttempts'] = "Останні спроби підключення";
$l['button']['TopUser'] = "Топ користувач";
$l['button']['History'] = "Історія";

/* Кнопки статусу */
$l['button']['ServerStatus'] = "Статус сервера";
$l['button']['ServicesStatus'] = "Статус служб";

/* Кнопки журналів */
$l['button']['daloRADIUSLog'] = "Журнал daloRADIUS";
$l['button']['RadiusLog'] = "Журнал Radius";
$l['button']['SystemLog'] = "Системний журнал";
$l['button']['BootLog'] = "Журнал завантаження";

/* Кнопки графіків */
$l['button']['UserLogins'] = "Входи користувачів";
$l['button']['UserDownloads'] = "Завантаження користувачів";
$l['button']['UserUploads'] = "Вивантаження користувачів";
$l['button']['TotalLogins'] = "Загальна кількість входів";
$l['button']['TotalTraffic'] = "Загальний трафік";

/* Кнопки карт */
$l['button']['ViewMAP'] = "Переглянути карту";
$l['button']['EditMAP'] = "Редагувати карту";
$l['button']['RegisterGoogleMapsAPI'] = "Зареєструвати API GoogleMaps";

/* Кнопки конфігурації */
$l['button']['DatabaseSettings'] = "Налаштування бази даних";
$l['button']['LanguageSettings'] = "Налаштування мови";
$l['button']['LoggingSettings'] = "Налаштування журналювання";
$l['button']['InterfaceSettings'] = "Налаштування інтерфейсу";
$l['button']['TestUserConnectivity'] = "Тестувати підключення користувача";
$l['button']['DisconnectUser'] = "Відключити користувача";

/* Кнопки операторів */
$l['button']['ListOperators'] = "Список операторів";
$l['button']['NewOperator'] = "Новий оператор";
$l['button']['EditOperator'] = "Редагувати оператора";
$l['button']['RemoveOperator'] = "Видалити оператора";

/* Кнопка обробки */
$l['button']['ProcessQuery'] = "Обробити запит";

/* Кнопки біллінгу */
$l['button']['BusinessInformation'] = "Бізнес інформація";

/* ********************************************************************************** */
/* Меню */
/* ********************************************************************************** */
$l['menu']['Home'] = "Головна";
$l['menu']['Managment'] = "Управління";
$l['menu']['Reports'] = "Звіти";
$l['menu']['Accounting'] = "Облік";
$l['menu']['Billing'] = "Виставлення рахунків";
$l['menu']['Gis'] = "ГІС";
$l['menu']['Graphs'] = "Графіки";
$l['menu']['Config'] = "Конфігурація";
$l['menu']['Help'] = "Допомога";

/* ********************************************************************************** */
/* Підменю */
/* ********************************************************************************** */
$l['submenu']['General'] = "Загальне";
$l['submenu']['Reporting'] = "Звітність";
$l['submenu']['Maintenance'] = "Обслуговування";
$l['submenu']['Operators'] = "Оператори";
$l['submenu']['Backup'] = "Резервне копіювання";
$l['submenu']['Logs'] = "Журнали";
$l['submenu']['Status'] = "Статус";
$l['submenu']['Batch Users'] = "Пакетні користувачі";
$l['submenu']['Dashboard'] = "Панель управління";
$l['submenu']['Users'] = "Користувачі";
$l['submenu']['Hotspots'] = "Точки доступу";
$l['submenu']['Nas'] = "NAS";
$l['submenu']['User-Groups'] = "Групи користувачів";
$l['submenu']['Profiles'] = "Профілі";
$l['submenu']['HuntGroups'] = "Групи пошуку";
$l['submenu']['Attributes'] = "Атрибути";
$l['submenu']['Realm/Proxy'] = "Область/Проксі";
$l['submenu']['IP-Pool'] = "Пул IP";
$l['submenu']['POS'] = "POS";
$l['submenu']['Plans'] = "Тарифи";
$l['submenu']['Rates'] = "Розцінки";
$l['submenu']['Merchant-Transactions'] = "Торгові операції";
$l['submenu']['Billing-History'] = "Історія рахунків";
$l['submenu']['Invoices'] = "Накладні";
$l['submenu']['Payments'] = "Платежі";
$l['submenu']['Custom'] = "Настроюване";
$l['submenu']['Hotspot'] = "Точка доступу";

/* ********************************************************************************** */
/* Заголовки сторінок */
/* ********************************************************************************** */
$l['Intro']['mngusernew.php'] = "Новий користувач";
$l['Intro']['mnguserlist.php'] = "Список користувачів";
$l['Intro']['mnguseredit.php'] = "Редагувати користувача";
$l['Intro']['mnguserdel.php'] = "Видалити користувача";
$l['Intro']['mngusersearch.php'] = "Пошук користувачів";

$l['Intro']['mngradprofilesnew.php'] = "Новий профіль";
$l['Intro']['mngradprofileslist.php'] = "Список профілів";
$l['Intro']['mngradprofilesedit.php'] = "Редагувати профіль";
$l['Intro']['mngradprofilesdel.php'] = "Видалити профіль";
$l['Intro']['mngradprofilessearch.php'] = "Пошук профілів";

$l['Intro']['mngradgroupreplynew.php'] = "Нова група відповідей";
$l['Intro']['mngradgroupreplylist.php'] = "Список груп відповідей";
$l['Intro']['mngradgroupreplyedit.php'] = "Редагувати групу відповідей";
$l['Intro']['mngradgroupreplydel.php'] = "Видалити групу відповідей";
$l['Intro']['mngradgroupreplysearch.php'] = "Пошук груп відповідей";

$l['Intro']['mngradgroupchecknew.php'] = "Нова група перевірок";
$l['Intro']['mngradgroupchecklist.php'] = "Список груп перевірок";
$l['Intro']['mngradgroupcheckedit.php'] = "Редагувати групу перевірок";
$l['Intro']['mngradgroupcheckdel.php'] = "Видалити групу перевірок";
$l['Intro']['mngradgroupchecksearch.php'] = "Пошук груп перевірок";

$l['Intro']['configdb.php'] = "Конфігурація бази даних";
$l['Intro']['configlang.php'] = "Конфігурація мови";
$l['Intro']['configlogging.php'] = "Конфігурація журналювання";
$l['Intro']['configinterface.php'] = "Конфігурація веб-інтерфейсу";
$l['Intro']['configmainttestuser.php'] = "Тестування підключення користувача";
$l['Intro']['configmain.php'] = "Конфігурація бази даних";
$l['Intro']['configmaint.php'] = "Обслуговування";
$l['Intro']['configbusiness.php'] = "Бізнес деталі";
$l['Intro']['configbusinessinfo.php'] = "Бізнес інформація";
$l['Intro']['configbackup.php'] = "Резервне копіювання";
$l['Intro']['configbackupbackup.php'] = "Резервне копіювання";
$l['Intro']['configmaintdisconnectuser.php'] = "Відключити користувача";

$l['Intro']['configoperators.php'] = "Конфігурація операторів";
$l['Intro']['configoperatorsdel.php'] = "Видалити оператора";
$l['Intro']['configoperatorsedit.php'] = "Редагувати налаштування оператора";
$l['Intro']['configoperatorsnew.php'] = "Новий оператор";
$l['Intro']['configoperatorslist.php'] = "Список операторів";

$l['Intro']['login.php'] = "Вхід";

/* ********************************************************************************** */
/* Підписи */
/* ********************************************************************************** */
$l['captions']['providebillratetodel'] = "Вкажіть тип тарифу, який ви хочете видалити";
$l['captions']['detailsofnewrate'] = "Ви можете заповнити деталі нового тарифу нижче";
$l['captions']['filldetailsofnewrate'] = "Заповніть деталі нового тарифу нижче";

/* ********************************************************************************** */
/* Заголовки */
/* ********************************************************************************** */
$l['title']['ImportUsers'] = "Імпорт користувачів";
$l['title']['Dashboard'] = "Панель управління";
$l['title']['DashboardAlerts'] = "Сповіщення";

$l['title']['Invoice'] = "Рахунок";
$l['title']['Invoices'] = "Рахунки";
$l['title']['InvoiceRemoval'] = "Видалення рахунку";
$l['title']['Payments'] = "Платежі";
$l['title']['Items'] = "Елементи";

$l['title']['PayTypeInfo'] = "Інформація про тип платежу";
$l['title']['PaymentInfo'] = "Інформація про платіж";

$l['title']['RateInfo'] = "Інформація про тариф";
$l['title']['PlanInfo'] = "Інформація про план";
$l['title']['TimeSettings'] = "Налаштування часу";
$l['title']['BandwidthSettings'] = "Налаштування пропускної здатності";
$l['title']['PlanRemoval'] = "Видалення плану";

$l['title']['BatchRemoval'] = "Пакетне видалення";

$l['title']['Backups'] = "Резервні копії";
$l['title']['FreeRADIUSTables'] = "Таблиці FreeRADIUS";
$l['title']['daloRADIUSTables'] = "Таблиці daloRADIUS";

$l['title']['IPPoolInfo'] = "Інформація про пул IP";

$l['title']['BusinessInfo'] = "Бізнес інформація";

$l['title']['CleanupRecords'] = "Очищення записів";
$l['title']['DeleteRecords'] = "Видалення записів";

$l['title']['RealmInfo'] = "Інформація про область";

$l['title']['ProxyInfo'] = "Інформація про проксі";

$l['title']['VendorAttribute'] = "Атрибут постачальника";

$l['title']['AccountRemoval'] = "Видалення облікового запису";
$l['title']['AccountInfo'] = "Інформація про обліковий запис";

$l['title']['Profiles'] = "Профілі";
$l['title']['ProfileInfo'] = "Інформація про профіль";

$l['title']['GroupInfo'] = "Інформація про групу";
$l['title']['GroupAttributes'] = "Атрибути групи";

$l['title']['NASInfo'] = "Інформація про NAS";
$l['title']['NASAdvanced'] = "Розширені налаштування NAS";
$l['title']['HGInfo'] = "Інформація про групу пошуку";
$l['title']['UserInfo'] = "Інформація про користувача";
$l['title']['BillingInfo'] = "Інформація про виставлення рахунків";

$l['title']['Attributes'] = "Атрибути";
$l['title']['ProfileAttributes'] = "Атрибути профілю";

$l['title']['HotspotInfo'] = "Інформація про точку доступу";
$l['title']['HotspotRemoval'] = "Видалення точки доступу";

$l['title']['ContactInfo'] = "Контактна інформація";

$l['title']['Plan'] = "План";

$l['title']['Profile'] = "Профіль";
$l['title']['Groups'] = "Групи";
$l['title']['RADIUSCheck'] = "Атрибути перевірки";
$l['title']['RADIUSReply'] = "Атрибути відповіді";

$l['title']['Settings'] = "Налаштування";
$l['title']['DatabaseSettings'] = "Налаштування бази даних";
$l['title']['DatabaseTables'] = "Таблиці бази даних";
$l['title']['AdvancedSettings'] = "Розширені налаштування";

$l['title']['Advanced'] = "Розширені";
$l['title']['Optional'] = "Необов'язково";

/* ********************************************************************************** */
/* Графіки */
/* ********************************************************************************** */
$l['graphs']['Day'] = "День";
$l['graphs']['Month'] = "Місяць";
$l['graphs']['Year'] = "Рік";
$l['graphs']['Jan'] = "Січень";
$l['graphs']['Feb'] = "Лютий";
$l['graphs']['Mar'] = "Березень";
$l['graphs']['Apr'] = "Квітень";
$l['graphs']['May'] = "Травень";
$l['graphs']['Jun'] = "Червень";
$l['graphs']['Jul'] = "Липень";
$l['graphs']['Aug'] = "Серпень";
$l['graphs']['Sep'] = "Вересень";
$l['graphs']['Oct'] = "Жовтень";
$l['graphs']['Nov'] = "Листопад";
$l['graphs']['Dec'] = "Грудень";

/* ********************************************************************************** */
/* Текст */
/* ********************************************************************************** */
$l['text']['LoginRequired'] = "Потрібен вхід";
$l['text']['LoginPlease'] = "Будь ласка, увійдіть";
$l['text']['Welcome'] = "Ласкаво просимо";
$l['text']['Loading'] = "Завантаження...";
$l['text']['NoRecords'] = "Записи не знайдено";
$l['text']['Optional'] = "Необов'язково";
$l['text']['Required'] = "Обов'язково";
$l['text']['Yes'] = "Так";
$l['text']['No'] = "Ні";
$l['text']['Active'] = "Активний";
$l['text']['Inactive'] = "Неактивний";
$l['text']['Enabled'] = "Увімкнено";
$l['text']['Disabled'] = "Вимкнено";
$l['text']['Online'] = "В мережі";
$l['text']['Offline'] = "Не в мережі";
$l['text']['Connected'] = "Підключено";
$l['text']['Disconnected'] = "Відключено";

/* ********************************************************************************** */
/* Контактна інформація */
/* ********************************************************************************** */
$l['ContactInfo']['FirstName'] = "Ім'я";
$l['ContactInfo']['LastName'] = "Прізвище";
$l['ContactInfo']['Email'] = "Електронна пошта";
$l['ContactInfo']['Department'] = "Відділ";
$l['ContactInfo']['WorkPhone'] = "Робочий телефон";
$l['ContactInfo']['HomePhone'] = "Домашній телефон";
$l['ContactInfo']['Phone'] = "Телефон";
$l['ContactInfo']['MobilePhone'] = "Мобільний телефон";
$l['ContactInfo']['Notes'] = "Примітки";
$l['ContactInfo']['EnableUserUpdate'] = "Дозволити оновлення користувача";
$l['ContactInfo']['EnablePortalLogin'] = "Дозволити вхід в портал";
$l['ContactInfo']['PortalLoginPassword'] = "Пароль для входу в портал";

$l['ContactInfo']['OwnerName'] = "Ім'я власника";
$l['ContactInfo']['OwnerEmail'] = "Електронна пошта власника";
$l['ContactInfo']['ManagerName'] = "Ім'я менеджера";
$l['ContactInfo']['ManagerEmail'] = "Електронна пошта менеджера";
$l['ContactInfo']['Company'] = "Компанія";
$l['ContactInfo']['Address'] = "Адреса";
$l['ContactInfo']['City'] = "Місто";
$l['ContactInfo']['State'] = "Область";
$l['ContactInfo']['Country'] = "Країна";
$l['ContactInfo']['Zip'] = "Поштовий індекс";
$l['ContactInfo']['Phone1'] = "Телефон 1";
$l['ContactInfo']['Phone2'] = "Телефон 2";

?>