<?php
$logo = "
   ╭━━━━━━━━╮
   ┃ ┃┃     ┃    ╭━━━━━━━━━━━━━━━╮
┏━╮┃▍┃╰╮    ┃    │ URL Shortener │
┗╮┃┃ ┃ ┃    ┣╮   ╰━━━━━━━━━━━━━━━╯
 ┃╰╯ ┃ ┃    ┃┃  /  Coder : Tegar Dev
 ╰━┳╯╰━╯    ┃╰
   ┃┓ ┏━━┳┓ ┃      [ Dunia Kode ]
   ┗┻━┛  ┗┻━┛
";
$url='http://lolhuman.herokuapp.com/api/shortlink?url=';
system("clear");
print $logo;
echo "Enter URL: ";
$link = trim(fgets(STDIN));
$konten = file_get_contents("$url$link");
$data = json_decode($konten, true);
$short = $data['result'];
echo "Hasil Short: $short ";
?>