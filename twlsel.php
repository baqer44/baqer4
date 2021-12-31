<?php
//=====================//
# DEV: @MROAN8#
# Ch: @php88#
# الملف مقدم من قناتي. #
# لصير فاشل وتغير حقوق #
//====================//
ob_start();

define('API_KEY','');
echo "setWebhook ~> <a href=\"https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."\">https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."</a>";
function bot($method,$datas=[]){
    $MROAN8 = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$MROAN8";
        $MROAN8 = file_get_contents($url);
        return json_decode($MROAN8);
}


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

$MROAN8 = 1977363274;
#==============================================================================================================#
$get_welc = file_get_contents('setwelc.txt');
$ex_welc = explode("\n", $get_welc);
$mid = $message->message_id;
$welc = file_get_contents('welcome.txt');
$get_ids = file_get_contents('ids.txt');
$ids = explode("\n", $get_ids);
#==============================================================================================================#
$get_ban = file_get_contents('ban.txt');
$ban = explode("\n", $get_ban);
$reply = $message->reply_to_message->forward_from->id;
$count_ban = count($ban);
#==============================================================================================================#
$ainfo = file_get_contents('infoMROAN8.txt');
$get_ainfo = file_get_contents('ifMROAN8.txt');
$ex_ainfo = explode("\n", $get_ainfo);
#==============================================================================================================#
$chan = file_get_contents('channel.txt');
$get_chan = file_get_contents('setchan.txt');
$ex_chan = explode("\n", $get_chan);
#==============================================================================================================#
$MROAN = file_get_contents('MROANnel.txt');
$get_MROAN = file_get_contents('setMROAN.txt');
$ex_MROAN = explode("\n", $get_MROAN);
$MROAN="$MROAN";
$id = $rep->id; 
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
#==============================================================================================================#
$infobot = file_get_contents('infobotnel.txt');
$get_infobot = file_get_contents('setinfobot.txt');
$ex_infobot = explode("\n", $get_infobot);
#==============================================================================================================#
$law = file_get_contents('lawnel.txt');
$get_law = file_get_contents('setlaw.txt');
$ex_law = explode("\n", $get_law);
#==============================================================================================================#
$T4TTTT = 1977363274; //ايديك
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt");
#==============================================================================================================#
$Nmdaer = file_get_contents('Nmdaernel.txt');
$get_Nmdaer = file_get_contents('setNmdaer.txt');
$ex_Nmdaer = explode("\n", $get_Nmdaer);
#==============================================================================================================#
$Naem = file_get_contents('Naemnel.txt');
$get_Naem = file_get_contents('setNaem.txt');
$ex_Naem = explode("\n", $get_Naem);
#==============================================================================================================#
$SAIED88I="

مرحبا بك في قسم المساعده لمساعده المستخدم في عمل البوت🤖


1⃣:- زر ارسل موقعي 🌐

يساعدك في ارسال موقعك  اذ كنت في رغبه بارساله الى مدير البوت لا تقلق فكل شي محمي تمام يظهر موقعك لمالك البوت فقط

2⃣:- زر ارسل جهه اتصالي 📞

اذ ظغطت على هذا الزر سيرسل لمدير البوت جهت اتصالك اذ كان لديك موضوع يحتاج ان ترسل جهتك الخاصه

3⃣:- زر ابروفايل الادمن 🗓

من خلال الظغط على  هذا الزر سيرسل لك معلومات عن  مدير البوت من الاسم ومكان السكن...الخ

4⃣:- زر جهه اتصال الادمن ☎️

يرسل لك جهه اتصال الادمن اذ كنت بحاجه اليها ف بعض الامور تحتاج الى رقم الشخص لتحدث معه

5⃣:- زر المساعده 💡

هو نفس هذه المعلومات اقوم بارسال لك معلومات عن كيفيه الاستخدام فبعض الاشخاص لا يعرفون

7⃣:- زر ⚜️〽️┇قناه البوت

هذا الزر يرسل لك القناه التي تم صنع البوت من داخلها وفضلا منك ان تتابع القناه لتعلم بما هو جديد وحصريا من خلال هذا المعرف 
$chan
شكرا لك 💟
";
#==============================================================================================================#
$SAIED1= file_get_contents("SAIED1.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
#==============================================================================================================#
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
#==============================================================================================================#
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
#==============================================================================================================#
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
#==============================================================================================================#
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
#==============================================================================================================#
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
$SAIED9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED11);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED11);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'text'=>'
- عليك الاشتراك بقنوات المطور اولا ، ✨🚸⚠️
• $SAIED0
• $SAIED1
- اشترك ثم اضغط /start ، ⭐️
',
]);return false;}

#==============================================================================================================#
/*
اوامر اذاعه مال سعيد السوري
T4TTTT
*/
#==============================================================================================================#

if($SAIED17 == "/start" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[
['text'=>' ⚠️⚜️التعديل على معلوماتك' ,'callback_data'=>"home"]
],
[
['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"],['text'=>'-اوامر اخرى 📋' ,'callback_data'=>"commands"]
],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"],['text'=>'-عدد المحضورين 👥".' ,'callback_data'=>"ban"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التواصل داخل البوت مع الاعضاء🔃✅".' ,'callback_data'=>"SAIED11"]],
[['text'=>'- تعطيل التواصل داخل البوت مع الاعضاء🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
}
if($SAIED19 == "SAIED" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[
['text'=>' ⚠️⚜️التعديل على معلوماتك' ,'callback_data'=>"home"]
],
[
['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"],['text'=>'-اوامر اخرى 📋' ,'callback_data'=>"commands"]
],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"],['text'=>'-عدد المحضورين 👥".' ,'callback_data'=>"ban"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التواصل داخل البوت مع الاعضاء🔃✅".' ,'callback_data'=>"SAIED11"]],
[['text'=>'- تعطيل التواصل داخل البوت مع الاعضاء🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED0"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED0");
}
if($SAIED17 and $SAIED == "SAIED0" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED0.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED1"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED0.txt");
}
if($SAIED19 == "SAIED2"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($SAIED17 and $SAIED == "SAIED1" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED1.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED3"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED1.txt");
}
if($SAIED19 == "SAIED4"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- هذه هي قائمة قنوات الإشتراك الإجباري 📜".

- القناة الأولى '.$SAIED0.' 📡".

- القناة الثانية '.$SAIED1.' 📢".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل رسالتك ليتم نشرها توجيه لجميع الأعضاء ↪️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $T4TTTT){
bot("forwardMessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendmessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل رسالتك ليتم نشرها رسالة لجميع الأعضاء 📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- عدد مشتركين البوت هو '.$SAIED3.' 👥".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل تنبيه دخول الأعضاء 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>'- دخل شخص إلى البوت 🚶‍♂".

- اسمه '.$SAIED15.' 🔠".

- معرفه '.$SAIED16.' Ⓜ️".

- ايديه '.$SAIED11.' 🆔".',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل تنبيه دخول الأعضاء 🚸❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل توجيه الرسائل 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل توجيه الرسائل 🔃❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}

#==============================================================================================================#

if($text == '/start' and !in_array($from_id,$ban) and $message->chat->type == 'private' and $chat_id != $MROAN8 and $chat_id != $MROAN8){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"


$welc
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
🌐تابع جديدنا على التلجرام
$chan
",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"⚜️〽️┇قناه البوت"],['text'=>"جهة اتصال المدير☎️"]
],

[
['text'=>"⁉️┇نبذة عن البوت"],['text'=>"ارسل جهه اتصالي 📞",'request_contact' => true]
],
[
['text'=>"المساعده 💡"],['text'=>"القوانين ⚠️"]
],
[
['text'=>"معلومات المدير 📋"],['text'=>"ارسل موقعي 🌐",'request_location' => true]
],
],
'resize_keyboard'=>true
])
]);
}
if($text == '/infome' and $chat_id == $MROAN8){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'⚙️هلاو مطور هذا القسم الخاص بل التعديل على المعلومات التي تضها في البوت',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'اضافت ترحيب 🗒','callback_data'=>'welc'],['text'=>'تعديل على معلومات المدير⚜️','callback_data'=>'ainfo']
],
[
['text'=>'اضافه قناتك في البوت🌀','callback_data'=>'chan'],['text'=>'القوانين ⚠️','callback_data'=>'law']
],
[
['text'=>'اضافه نبذه عن بوتك📇','callback_data'=>'infobot']
],
[
['text'=>'اضافه اسمك 📜','callback_data'=>"Naem"]
],
[
['text'=>'☎️اضافه رقمك📲','callback_data'=>"Nmdaer"]
],
[
['text'=>'رجوع الى الاوامر','callback_data'=>'SAIED']
]
]    
])
]);
}
if($data == 'home'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'⚙️هلاو مطور هذا القسم الخاص بل التعديل على المعلومات التي تضها في البوت',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'اضافت ترحيب 🗒','callback_data'=>'welc'],['text'=>'تعديل على معلومات المدير⚜️','callback_data'=>'ainfo']
],
[
['text'=>'اضافه قناتك في البوت🌀','callback_data'=>'chan'],['text'=>'القوانين ⚠️','callback_data'=>'law']
],
[
['text'=>'اضافه نبذه عن بوتك📇','callback_data'=>'infobot'],['text'=>'اضافه رساله الرد','callback_data'=>'MROAN']
],
[
['text'=>'اضافه اسمك 📜','callback_data'=>"Naem"]
],
[
['text'=>'☎️اضافه رقمك📲','callback_data'=>"Nmdaer"]
],
[
['text'=>'رجوع الى الاوامر','callback_data'=>'SAIED']
]
]    
])
]);
}
#==============================================================================================================#
if($text =='⚜️〽️┇قناه البوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$chan",
]);
}

if($text == "المساعده 💡"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$SAIED88I",
'parse_mode'=>"markdown",
]);
}
if($text == "جهة اتصال المدير☎️"){
 $phone = "
$Nmdaer
";
 $nameea = "
 $Naem 
";
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$phone,
'first_name'=>$nameea,
]);
}     
if($text == "معلومات المدير 📋"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*$ainfo*",
'parse_mode'=>"markdown",
]);
}
if($text =='⁉️┇نبذة عن البوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$infobot",
]);
}
if($text =='القوانين ⚠️'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$law",
]);
}
#==============================================================================================================#
#==============================================================================================================#
if($data == 'welc'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ارسل الترحيب الان 🗒',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);


file_put_contents('setwelc.txt', $chat_id2);    
}

if($text and in_array($from_id, $ex_welc)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ اضافت الترحيب 💎✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('welcome.txt', $text);
file_put_contents('setwelc.txt', '');

}

if($data == 'commands'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
اهلا بك 💎 في قائمة الاوامر الاضافية ⚙️

/ban - لحضر عضو
/uban - لالغاء الحضر

/infome - لتعديل على معلوماتك 
",

'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]    
])
]);
}

if($text != '/start' and $text != 'جهة اتصال المدير☎️' and $text != '⚜️〽️┇قناه البوت' and $text != '⁉️┇نبذة عن البوت' and $text != 'القوانين ⚠️' and $text != 'معلومات المدير 📋' and   $text !='المساعده 💡' and $message->chat->type == 'private' and $from_id != $MROAN8  and !in_array($from_id, $ban)){
bot('forwardMessage',[
'chat_id'=>$MROAN8,
'from_chat_id'=>$chat_id,
'message_id'=>$mid
]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$MROAN",
'reply_to_message_id'=>$mid
]);
}
if($message->reply_to_message->forward_from->id and $text != '/ban' and $text != '/uban' and $chat_id == $MROAN8){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,    
]);
}

if($message->reply_to_message->forward_from->id and $text == '/ban' and $chat_id == $MROAN8){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ حضر العضو 🚹',
'reply_to_message_id'=>$mid
]);

bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>'تم ✅ حضرك من البوت ❌',
]);

file_put_contents('ban.txt', $message->reply_to_message->forward_from->id . "\n", FILE_APPEND);

}

if($message->reply_to_message->forward_from->id and $text == '/uban' and $chat_id == $MROAN8){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ الغاء حضر العضو ❌',
'reply_to_message_id'=>$mid
]);

bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>'تم ✅ الغاء حضرك ❌'
]);


$str = str_replace($reply . "\n", '' ,$get_ban);

file_put_contents('ban.txt', $str);

}

if($data == 'ban'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عدد 💎 المحضورين ❌ : ' . $count_ban,
 'show_alert'=>true
 ]);      
}


if($text == '/welcome'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$welc,
'reply_to_message_id'=>$mid
]);
}
#///////--/-//////#
if($data == 'Naem'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'حسنا ارسال اسمك الان',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);
file_put_contents('setNaem.txt', $chat_id2);    
}
if($text and in_array($from_id, $ex_Naem)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);
file_put_contents('Naemnel.txt', $text);
file_put_contents('setNaem.txt', '');
}
if($data == 'ainfo'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
🗯┇ارسل نص معلوماتك كاملا مثال -:
الاسم :
اللقب : 
العمـر :
البـلـد : 
ومعلومات اخرى عنك ❤
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);
file_put_contents('ifMROAN8.txt', $chat_id2);    
}
if($text and in_array($from_id, $ex_ainfo)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'حسنا حمبي تم حفظ معلوماتك￤✅💠',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);
file_put_contents('infoMROAN8.txt', $text);
file_put_contents('ifMROAN8.txt', '');
}
if($data == 'chan'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
💛حسنا قم بارسال معرف قنواتك
كمثال❓
♻️🔰🔰🔰🔰🔰
┇━━━━━━━━━━━
┇◯☣️@php88
┇━━━━━━━━━━━
┇◯☣️@mroan1235
┇━━━━━━━━━━━
┇◯☣️ @c_941
┇━━━━━━━━━━━
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);
file_put_contents('setchan.txt', $chat_id2);    
}
if($text and in_array($from_id, $ex_chan)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('channel.txt', $text);
file_put_contents('setchan.txt', '');

}
#==============================================================================================================#
if($data == 'infobot'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
👨‍💻┇هيلاو حمبي الغالي رتب النبذه مال البوت
-
يمكنك حفظ سيرتك الذاتية بمعلوماتك الخاصة ويمكنك وضع نبذه عن عمل البوت يمكن ان يراها جميع مستخدمين بوتك ~ 👁‍🗨
-
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);
file_put_contents('setinfobot.txt', $chat_id2);    
}
if($text and in_array($from_id, $ex_infobot)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);
file_put_contents('infobotnel.txt', $text);
file_put_contents('setinfobot.txt', '');
}
if($data == 'Nmdaer'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
📲قم بارسال رقمك ⚜️
مثال 
9647801681195
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);


file_put_contents('setNmdaer.txt', $chat_id2);    
}

if($text and in_array($from_id, $ex_Nmdaer)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('Nmdaernel.txt', $text);
file_put_contents('setNmdaer.txt', '');
}



if($data == 'law'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
👨‍💻┇هيلاو حمبي الغالي رتب القوانين بوتك
-
يمكنك وضع القوانين في البوت 
-
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);


file_put_contents('setlaw.txt', $chat_id2);    
}

if($text and in_array($from_id, $ex_law)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🚸┇حسنا عزيزي تم معلوماتك┇🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('lawnel.txt', $text);
file_put_contents('setlaw.txt', '');

}


if($data == 'MROAN'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
👨‍💻┇هيلاو حمبي الغالي عليك اضافه الرد ع رسالتك 
-
اي شي بالك😍 مثلا رابط قناتك الخاص تم تسليم بعد يمك  انته وذوقك☹️
-
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'home']]    
]    
])
]);


file_put_contents('setMROAN.txt', $chat_id2);    
}

if($text and in_array($from_id, $ex_MROAN)){
for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم الحفظ الرساله الرد😍🌐',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏚','callback_data'=>'home']]    
]
])
]);

file_put_contents('MROANnel.txt', $text);
file_put_contents('setMROAN.txt', '');

}
if($message->sticker){
bot('sendSticker',[
'chat_id'=>$reply,
'sticker'=>$message->sticker->file_id
]);
}

if($message->voice){
bot('sendVoice',[
'chat_id'=>$reply,
'voice'=>$message->voice->file_id
]);
}

if($message->video){
bot('sendVideo',[
'chat_id'=>$reply,
'video'=>$message->video->file_id
]);
}

if($message->document){
bot('sendDocument',[
'chat_id'=>$reply,
'document'=>$message->document->file_id
]);
}

if($message->video){
bot('sendVideo',[
'chat_id'=>$reply,
'video'=>$message->video->file_id
]);
}

if($message->photo){
    
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('photo.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
       
    
bot('sendPhoto',[
'chat_id'=>$reply,
'photo'=>new CURLFILE('photo.png')
]);
}
//=====================//
# DEV: @MROAN8#
# Ch: @php88#
# الملف مقدم من قناتي. #
# لصير فاشل وتغير حقوق #
//====================//