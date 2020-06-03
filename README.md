# tbot.php

Lightweight library for API Telegram

## Usage

Webhook
```$bot = bot_start('Paste you token here');```

Only send bot
```$token = 'Paste you token here'; ```

bot('Method', ['Params' => 'Array']);

```bot('sendMessage', ['chat_id' => $bot->message->chat->id, 'text' => $bot->message->text]);```
