<?php
if ((strpos($message, "/adm") === 0)||(strpos($message, "!adm") === 0)||(strpos($message, ".adm") === 0))
{
  $owners = file_get_contents('Database/owner.txt');
  $admins = explode("\n", $owners);
  if (!in_array($userId, $admins)) {
      sendMessage($chatId,"ð™Šð™Šð™‹ð™Ž! ð™”ð™Šð™ ð˜¼ð™ð™€ ð™‰ð™Šð™ ð˜¼ð™‰ ð˜¼ð˜¿ð™ˆð™„ð™‰  âŒ",$messageId);
  } else
  {
  sendMessage($chatId,urlencode(
    "<b>
Admin commands here

Code generate: /code day-amount
Usage: <code>/code 1-1</code>

Delete expired: /remexp
Usage: <code>/remexp</code>


</b>"),$messageId);
  }
}

?>
