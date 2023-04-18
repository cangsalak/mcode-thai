<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['form_validation_required'] = 'จำเป็นต้องระบุ {field}';
$lang['form_validation_isset'] = '{field} ฟิลด์ต้องมีค่า';
$lang['form_validation_valid_email'] = '{field} ฟิลด์ต้องมีที่อยู่อีเมลที่ถูกต้อง';
$lang['form_validation_valid_emails'] = '{field} ฟิลด์ต้องมีที่อยู่อีเมลที่ถูกต้องทั้งหมด';
$lang['form_validation_valid_url'] = '{field} ฟิลด์ต้องมี URL ที่ถูกต้อง';
$lang['form_validation_valid_ip'] = '{field} ฟิลด์ต้องมี IP ที่ถูกต้อง';
$lang['form_validation_valid_base64'] = '{field} ฟิลด์ต้องมีสตริง Base64 ที่ถูกต้อง';
$lang['form_validation_min_length'] = '{field} ฟิลด์ต้องมีความยาวอย่างน้อย {param} อักขระ';
$lang['form_validation_max_length'] = '{field} ฟิลด์ต้องมีความยาวไม่เกิน {param} อักขระ';
$lang['form_validation_exact_length'] = 'ช่อง {field} ต้องมีความยาว {param} อักขระพอดี';
$lang['form_validation_alpha'] = '{field} ฟิลด์ต้องประกอบด้วยตัวอักษรเท่านั้น';
$lang['form_validation_alpha_numeric'] = '{field} ฟิลด์ต้องมีเฉพาะอักขระที่เป็นตัวอักษรและตัวเลขเท่านั้น';
$lang['form_validation_alpha_numeric_spaces'] = '{field} ฟิลด์ต้องมีเฉพาะอักขระที่เป็นตัวเลขและช่องว่างเท่านั้น';
$lang['form_validation_alpha_dash'] = '{field} ฟิลด์ต้องมีเฉพาะตัวอักษรและตัวเลข ขีดล่าง และขีดกลาง';
$lang['form_validation_alpha_underscores'] = '{field} ฟิลด์ต้องประกอบด้วยตัวอักษรและตัวเลขและขีดล่างเท่านั้น';
$lang['form_validation_numeric'] = '{field} ฟิลด์ต้องมีเฉพาะตัวเลขเท่านั้น';
$lang['form_validation_is_numeric'] = '{field} ฟิลด์ต้องมีเฉพาะตัวเลขเท่านั้น';
$lang['form_validation_integer'] = '{field} ฟิลด์ต้องมีจำนวนเต็ม';
$lang['form_validation_regex_match'] = '{field} ฟิลด์ไม่อยู่ในรูปแบบที่ถูกต้อง';
$lang['form_validation_matches'] = '{field} ฟิลด์ไม่ตรงกับฟิลด์ {param}';
$lang['form_validation_differs'] = '{field} ฟิลด์ต้องแตกต่างจากฟิลด์ {param}';
$lang['form_validation_is_unique'] = '{field} ฟิลด์ต้องมีค่าที่ไม่ซ้ำกัน';
$lang['form_validation_is_natural'] = '{field} ฟิลด์ต้องมีเฉพาะตัวเลขเท่านั้น';
$lang['form_validation_is_natural_no_zero'] = '{field} ฟิลด์ต้องมีตัวเลขเท่านั้นและต้องมากกว่าศูนย์';
$lang['form_validation_decimal'] = '{field} ฟิลด์ต้องมีตัวเลขทศนิยม';
$lang['form_validation_less_than'] = '{field} ฟิลด์ต้องมีตัวเลขน้อยกว่า {param}.';
$lang['form_validation_less_than_equal_to'] = '{field} ฟิลด์ต้องมีตัวเลขที่น้อยกว่าหรือเท่ากับ {param}';
$lang['form_validation_greater_than'] = '{field} ฟิลด์ต้องมีตัวเลขที่มากกว่า {param}.';
$lang['form_validation_greater_than_equal_to'] = '{field} ฟิลด์ต้องมีตัวเลขที่มากกว่าหรือเท่ากับ {param}.';
$lang['form_validation_error_message_not_set'] = 'ไม่สามารถเข้าถึงข้อความแสดงข้อผิดพลาดที่เกี่ยวข้องกับชื่อฟิลด์ของคุณ';
$lang['form_validation_in_list'] = '{field} ฟิลด์ต้องเป็นหนึ่งใน: {param}.';

