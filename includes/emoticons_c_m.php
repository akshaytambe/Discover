<?php
$em_img_path = htmlspecialchars($_POST['path'])."imgs/emoticons/";
$emType = htmlspecialchars($_POST['emType']);
switch ($emType) {
case 'comment':
$get_post_id = htmlspecialchars($_POST['cid']);
echo "
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😀');\" src='"."$em_img_path"."1f600.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😁');\" src='"."$em_img_path"."1f601.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😂');\" src='"."$em_img_path"."1f602.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😃');\" src='"."$em_img_path"."1f603.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😄');\" src='"."$em_img_path"."1f604.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😅');\" src='"."$em_img_path"."1f605.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😆');\" src='"."$em_img_path"."1f606.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😉');\" src='"."$em_img_path"."1f609.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😊');\" src='"."$em_img_path"."1f60a.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😋');\" src='"."$em_img_path"."1f60b.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😎');\" src='"."$em_img_path"."1f60e.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😍');\" src='"."$em_img_path"."1f60d.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😘');\" src='"."$em_img_path"."1f618.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😗');\" src='"."$em_img_path"."1f617.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😙');\" src='"."$em_img_path"."1f619.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😚');\" src='"."$em_img_path"."1f61a.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' ☺');\" src='"."$em_img_path"."263a.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🙂');\" src='"."$em_img_path"."1f642.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🤗');\" src='"."$em_img_path"."1f917.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🤔');\" src='"."$em_img_path"."1f914.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😐');\" src='"."$em_img_path"."1f610.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😑');\" src='"."$em_img_path"."1f611.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😶');\" src='"."$em_img_path"."1f636.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🙄');\" src='"."$em_img_path"."1f644.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😏');\" src='"."$em_img_path"."1f60f.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😣');\" src='"."$em_img_path"."1f623.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😥');\" src='"."$em_img_path"."1f625.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😮');\" src='"."$em_img_path"."1f62e.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🤐');\" src='"."$em_img_path"."1f910.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😯');\" src='"."$em_img_path"."1f62f.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😪');\" src='"."$em_img_path"."1f62a.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😫');\" src='"."$em_img_path"."1f62b.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😴');\" src='"."$em_img_path"."1f634.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😌');\" src='"."$em_img_path"."1f60c.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🤓');\" src='"."$em_img_path"."1f913.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😛');\" src='"."$em_img_path"."1f61b.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😜');\" src='"."$em_img_path"."1f61c.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😝');\" src='"."$em_img_path"."1f61d.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😒');\" src='"."$em_img_path"."1f612.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😓');\" src='"."$em_img_path"."1f613.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😔');\" src='"."$em_img_path"."1f614.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😕');\" src='"."$em_img_path"."1f615.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🙃');\" src='"."$em_img_path"."1f643.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🤑');\" src='"."$em_img_path"."1f911.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😲');\" src='"."$em_img_path"."1f632.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' ☹');\" src='"."$em_img_path"."2639.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🙁');\" src='"."$em_img_path"."1f641.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😖');\" src='"."$em_img_path"."1f616.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😞');\" src='"."$em_img_path"."1f61e.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😟');\" src='"."$em_img_path"."1f61f.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😤');\" src='"."$em_img_path"."1f624.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😢');\" src='"."$em_img_path"."1f622.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😭');\" src='"."$em_img_path"."1f62d.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😦');\" src='"."$em_img_path"."1f626.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😧');\" src='"."$em_img_path"."1f627.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😨');\" src='"."$em_img_path"."1f628.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😩');\" src='"."$em_img_path"."1f629.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😬');\" src='"."$em_img_path"."1f62c.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😰');\" src='"."$em_img_path"."1f613.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😱');\" src='"."$em_img_path"."1f631.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😳');\" src='"."$em_img_path"."1f633.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😵');\" src='"."$em_img_path"."1f635.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😡');\" src='"."$em_img_path"."1f621.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😠');\" src='"."$em_img_path"."1f620.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😇');\" src='"."$em_img_path"."1f607.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😷');\" src='"."$em_img_path"."1f637.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🤒');\" src='"."$em_img_path"."1f912.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🤕');\" src='"."$em_img_path"."1f915.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 😈');\" src='"."$em_img_path"."1f608.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 👿');\" src='"."$em_img_path"."1f47f.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 👻');\" src='"."$em_img_path"."1f47b.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🤖');\" src='"."$em_img_path"."1f916.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💩');\" src='"."$em_img_path"."1f4a9.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 👣');\" src='"."$em_img_path"."1f463.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 👀');\" src='"."$em_img_path"."1f440.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 👁');\" src='"."$em_img_path"."1f441.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' eye🗨');\" src='"."$em_img_path"."1f441-1f5e8.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 👅');\" src='"."$em_img_path"."1f445.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 👄');\" src='"."$em_img_path"."1f444.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💋');\" src='"."$em_img_path"."1f48b.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💘');\" src='"."$em_img_path"."1f498.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' ❤');\" src='"."$em_img_path"."2764.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💓');\" src='"."$em_img_path"."1f493.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💔');\" src='"."$em_img_path"."1f494.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💕');\" src='"."$em_img_path"."1f495.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💖');\" src='"."$em_img_path"."1f496.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💗');\" src='"."$em_img_path"."1f497.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💙');\" src='"."$em_img_path"."1f499.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💚');\" src='"."$em_img_path"."1f49a.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💛');\" src='"."$em_img_path"."1f49b.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💜');\" src='"."$em_img_path"."1f49c.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💝');\" src='"."$em_img_path"."1f49d.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💞');\" src='"."$em_img_path"."1f49e.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💟');\" src='"."$em_img_path"."1f49f.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' ❣');\" src='"."$em_img_path"."2763.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💌');\" src='"."$em_img_path"."1f48c.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💤');\" src='"."$em_img_path"."1f4a4.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💢');\" src='"."$em_img_path"."1f4a2.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 💨');\" src='"."$em_img_path"."1f4a8.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🐸');\" src='"."$em_img_path"."1f438.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🐍');\" src='"."$em_img_path"."1f40d.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' ♨');\" src='"."$em_img_path"."2668.png' />
<img class='emojiFace' onclick=\"cEmoji('$get_post_id',' 🚬');\" src='"."$em_img_path"."1f6ac.png' />
";
break;
case 'message':
echo "
<img class='emojiFace' onclick=\"mEmoji(' 😀');\" src='"."$em_img_path"."1f600.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😁');\" src='"."$em_img_path"."1f601.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😂');\" src='"."$em_img_path"."1f602.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😃');\" src='"."$em_img_path"."1f603.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😄');\" src='"."$em_img_path"."1f604.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😅');\" src='"."$em_img_path"."1f605.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😆');\" src='"."$em_img_path"."1f606.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😉');\" src='"."$em_img_path"."1f609.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😊');\" src='"."$em_img_path"."1f60a.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😋');\" src='"."$em_img_path"."1f60b.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😎');\" src='"."$em_img_path"."1f60e.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😍');\" src='"."$em_img_path"."1f60d.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😘');\" src='"."$em_img_path"."1f618.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😗');\" src='"."$em_img_path"."1f617.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😙');\" src='"."$em_img_path"."1f619.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😚');\" src='"."$em_img_path"."1f61a.png' />
<img class='emojiFace' onclick=\"mEmoji(' ☺');\" src='"."$em_img_path"."263a.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🙂');\" src='"."$em_img_path"."1f642.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🤗');\" src='"."$em_img_path"."1f917.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🤔');\" src='"."$em_img_path"."1f914.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😐');\" src='"."$em_img_path"."1f610.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😑');\" src='"."$em_img_path"."1f611.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😶');\" src='"."$em_img_path"."1f636.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🙄');\" src='"."$em_img_path"."1f644.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😏');\" src='"."$em_img_path"."1f60f.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😣');\" src='"."$em_img_path"."1f623.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😥');\" src='"."$em_img_path"."1f625.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😮');\" src='"."$em_img_path"."1f62e.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🤐');\" src='"."$em_img_path"."1f910.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😯');\" src='"."$em_img_path"."1f62f.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😪');\" src='"."$em_img_path"."1f62a.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😫');\" src='"."$em_img_path"."1f62b.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😴');\" src='"."$em_img_path"."1f634.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😌');\" src='"."$em_img_path"."1f60c.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🤓');\" src='"."$em_img_path"."1f913.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😛');\" src='"."$em_img_path"."1f61b.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😜');\" src='"."$em_img_path"."1f61c.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😝');\" src='"."$em_img_path"."1f61d.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😒');\" src='"."$em_img_path"."1f612.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😓');\" src='"."$em_img_path"."1f613.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😔');\" src='"."$em_img_path"."1f614.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😕');\" src='"."$em_img_path"."1f615.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🙃');\" src='"."$em_img_path"."1f643.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🤑');\" src='"."$em_img_path"."1f911.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😲');\" src='"."$em_img_path"."1f632.png' />
<img class='emojiFace' onclick=\"mEmoji(' ☹');\" src='"."$em_img_path"."2639.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🙁');\" src='"."$em_img_path"."1f641.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😖');\" src='"."$em_img_path"."1f616.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😞');\" src='"."$em_img_path"."1f61e.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😟');\" src='"."$em_img_path"."1f61f.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😤');\" src='"."$em_img_path"."1f624.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😢');\" src='"."$em_img_path"."1f622.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😭');\" src='"."$em_img_path"."1f62d.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😦');\" src='"."$em_img_path"."1f626.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😧');\" src='"."$em_img_path"."1f627.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😨');\" src='"."$em_img_path"."1f628.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😩');\" src='"."$em_img_path"."1f629.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😬');\" src='"."$em_img_path"."1f62c.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😰');\" src='"."$em_img_path"."1f613.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😱');\" src='"."$em_img_path"."1f631.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😳');\" src='"."$em_img_path"."1f633.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😵');\" src='"."$em_img_path"."1f635.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😡');\" src='"."$em_img_path"."1f621.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😠');\" src='"."$em_img_path"."1f620.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😇');\" src='"."$em_img_path"."1f607.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😷');\" src='"."$em_img_path"."1f637.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🤒');\" src='"."$em_img_path"."1f912.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🤕');\" src='"."$em_img_path"."1f915.png' />
<img class='emojiFace' onclick=\"mEmoji(' 😈');\" src='"."$em_img_path"."1f608.png' />
<img class='emojiFace' onclick=\"mEmoji(' 👿');\" src='"."$em_img_path"."1f47f.png' />
<img class='emojiFace' onclick=\"mEmoji(' 👻');\" src='"."$em_img_path"."1f47b.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🤖');\" src='"."$em_img_path"."1f916.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💩');\" src='"."$em_img_path"."1f4a9.png' />
<img class='emojiFace' onclick=\"mEmoji(' 👣');\" src='"."$em_img_path"."1f463.png' />
<img class='emojiFace' onclick=\"mEmoji(' 👀');\" src='"."$em_img_path"."1f440.png' />
<img class='emojiFace' onclick=\"mEmoji(' 👁');\" src='"."$em_img_path"."1f441.png' />
<img class='emojiFace' onclick=\"mEmoji(' eye🗨');\" src='"."$em_img_path"."1f441-1f5e8.png' />
<img class='emojiFace' onclick=\"mEmoji(' 👅');\" src='"."$em_img_path"."1f445.png' />
<img class='emojiFace' onclick=\"mEmoji(' 👄');\" src='"."$em_img_path"."1f444.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💋');\" src='"."$em_img_path"."1f48b.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💘');\" src='"."$em_img_path"."1f498.png' />
<img class='emojiFace' onclick=\"mEmoji(' ❤');\" src='"."$em_img_path"."2764.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💓');\" src='"."$em_img_path"."1f493.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💔');\" src='"."$em_img_path"."1f494.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💕');\" src='"."$em_img_path"."1f495.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💖');\" src='"."$em_img_path"."1f496.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💗');\" src='"."$em_img_path"."1f497.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💙');\" src='"."$em_img_path"."1f499.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💚');\" src='"."$em_img_path"."1f49a.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💛');\" src='"."$em_img_path"."1f49b.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💜');\" src='"."$em_img_path"."1f49c.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💝');\" src='"."$em_img_path"."1f49d.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💞');\" src='"."$em_img_path"."1f49e.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💟');\" src='"."$em_img_path"."1f49f.png' />
<img class='emojiFace' onclick=\"mEmoji(' ❣');\" src='"."$em_img_path"."2763.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💌');\" src='"."$em_img_path"."1f48c.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💤');\" src='"."$em_img_path"."1f4a4.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💢');\" src='"."$em_img_path"."1f4a2.png' />
<img class='emojiFace' onclick=\"mEmoji(' 💨');\" src='"."$em_img_path"."1f4a8.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🐸');\" src='"."$em_img_path"."1f438.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🐍');\" src='"."$em_img_path"."1f40d.png' />
<img class='emojiFace' onclick=\"mEmoji(' ♨');\" src='"."$em_img_path"."2668.png' />
<img class='emojiFace' onclick=\"mEmoji(' 🚬');\" src='"."$em_img_path"."1f6ac.png' />
";
break;
}

?>