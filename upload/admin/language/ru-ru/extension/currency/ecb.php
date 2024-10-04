<?php
/**
 * @package    Русский язык для OpenCart 3.x
 * @file       catalog/language/ru-ru/extension/currency/ecb.php
 * @author     Hkr32
 * @copyright  © OCN, (https://opencart.name)
 * @license    https://opensource.org/licenses/GPL-3.0
 * @link       https://forum.opencart.name
 */

// Heading
$_['heading_title']    = 'Конвертер валют Европейского центрального банка';

// Text
$_['text_extension']   = 'Расширения';
$_['text_success']     = 'Успех: Вы модифицировали конвертер валют Европейского центрального банка!';
$_['text_edit']        = 'Редактировать Конвертер валют Европейского центрального банка';
$_['text_edit']       .= '<br><br>';
$_['text_edit']       .= 'Для этого расширения необходимо, чтобы валюта EUR была доступной.';
$_['text_edit']       .= '<br><br>';
$_['text_edit']       .= 'Если он включен, его можно выбрать в качестве механизма расчета курса валют в <b><a href="%2">Система &gt; Настройки</b></a>, а также можно обновлять курсы валют через <b><a href="%1">Система &gt; Локализация &gt; Валюты</a></b>.';

// Entry
$_['entry_ip']         = 'IP-адрес сервера';
$_['entry_cron']       = 'CRON-команда';
$_['entry_status']     = 'Статус';

// Help
$_['help_ip']          = 'Дополнительный IP-адрес для сервера, выполняющего задачу CRON для обновления курсов валют.';
$_['help_cron']        = 'Используйте эту команду при настройке задачи CRON на вашем сервере.';

// Error
$_['error_permission'] = 'Предупреждение: У вас нет прав на изменение конвертера валют Европейского центрального банка!';
$_['error_euro']       = 'Для этого расширения в качестве доступной валюты требуется евро!';
$_['error_ip']         = 'Неверный IP-адрес!';