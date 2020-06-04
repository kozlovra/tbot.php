<?php 
require_once('tbot.php');

$bot = bot_start('1234567890:QwErTyUiOpAsDfGhJkLzXcVbNmQwErTyU');

switch ($bot->message->text) {
  case '/start':
    bot('sendMessage', ['chat_id' => $bot->message->chat->id, 'parse_mode' => 'HTML', 'text' => 'I work in <a href="https://github.com/roakozlov/tbot.php">tbot.php</a> library by <a href="https://roakozlov.ml/">roakozlov</a>']);
  break;
	
  default:
    bot('sendMessage', ['chat_id' => $bot->message->chat->id, 'text' => $bot->message->text]);
  break;
}
