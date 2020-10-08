<?php
    //開啟檔案作為讀取
    $fp = fopen ("counter.txt", "r") or die ("unable to open the file");
    //讀取目前檔案的內容，也就是目前的人次
    $counter = fread($fp, filesize ("counter.txt"));
    //關檔，$fp是檔案指標，可以自行命名
    fclose ($fp);
    echo "本網參觀人次：";
    readfile ("counter.txt");
    echo "人次";
    $counter ++;
    $fp = fopen ("counter.txt", "w") or die ("unable to open the file");
    //開啟檔案寫入
    fwrite ($fp, $counter);
    //關檔
    fclose ($fp);
?>
<a href="https://info.flagcounter.com/hhwv"><img src="https://s05.flagcounter.com/count2/hhwv/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>