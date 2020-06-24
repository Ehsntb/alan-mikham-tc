<?php

$API_KEY = '994095348:AAGFFbLiW2ywngKSGb-5C_ys7beQMWDbUoY';
$admin_EhsnTb = '439605205';
$admin_Amir_srks = '186657787';
$admin_Chi_Ks = '387409525';
$admim_JustAGhost = '661270154';
$admin_AshkanAkbari = '825378165';
$admin_Sammermo = '441834223';
$admin_sahel = '1180955191';
$channel_alan_mikham = '-1001400861137';
$channel_aln_mikhm = '-1001344169485';
$channel_allan_mikham = '-1001235589940';
$channel_alan_mikhm = '-1001241174100';
##------------------------------##
define('API_KEY',$API_KEY);
function bot ($method,$datas=[])
{
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch))
    {
        var_dump(curl_error($ch));
    }
    else
    {
        return json_decode($res);
    }
}
function sendmessage($chat_id,$text,$parse_mode,$keyboard){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$text,
        'parse_mode'=>$parse_mode,
        'reply_markup'=>$keyboard
    ]);
}
$update = json_decode(file_get_contents('php://input'));
$from_id = $update->message->from->id;
$chat_id = $update->message->chat->id;
$first_name = $update->message->from->first_name;
$last_name = $update->message->from->last_name;
$username = $update->message->from->username;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$text = $update->message->text;
$video = $update->message->video;
$voice = $update->message->voice;
$file = $update->message->document;
$music = $update->message->audio;
$photo = $update->message->photo;
$caption = file_get_contents("data/$chat_id/caption.txt");
$message_id = $update->callback_query->message->message_id;
$message_id_feed = $update->message->message_id;

/*-------------- start -------------*/

if($text)
{
    if ($chat_id == $admin_EhsnTb || $chat_id == $admin_Amir_srks || $chat_id == $admin_Chi_Ks || $chat_id == $admim_JustAGhost || $chat_id == $admin_AshkanAkbari || $chat_id == $admin_Sammermo || $chat_id == $admin_sahel) 
    {
        /****alan_mikham***/
        /*bot('sendmessage', [
            'chat_id' => $channel_alan_mikham,
            'text'=>"$text
<i>#Ersali</i>
<b>@alan_mikham</b>",
            'parse_mode'=>'html'
        ]);*/
        
        /****aln_mikhm****/
        /*bot('sendmessage', [
            'chat_id' => $channel_aln_mikhm,
            'text'=>"$text
<i>#Ersali</i>
<b>@aln_mikhm</b>",
            'parse_mode'=>'html'
        ]);*/
        
        /****allan_mikham****/
         /*bot('sendmessage', [
            'chat_id' => $channel_allan_mikham,
            'text'=>"$text
<i>#Ersali</i>
<b>@allan_mikham</b>",
            'parse_mode'=>'html'
        ]);*/
        
        /****alan_mikhm****/
        bot('sendmessage', [
            'chat_id' => $channel_alan_mikhm,
            'text'=>"$text
<i>#Ersali</i>
<b>@alan_mikhm</b>",
            'parse_mode'=>'html'
        ]);
        
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text'=>"<b>ersal shd!!!</b>
-Be kire reza :|",
            'parse_mode'=>'html'
        ]);

    }
    else
    {
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text'=>"Unknown USER!!!",
            'parse_mode'=>'HTML'
        ]);

    }
}
?>