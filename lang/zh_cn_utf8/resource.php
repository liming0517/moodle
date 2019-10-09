<?PHP // $Id$ 
      // resource.php - created with Moodle 1.5.3+ (2005060230)


$string['addresource'] = '添加资源';
$string['chooseafile'] = '选择或上传一个文件';
$string['chooseparameter'] = '选择一个参数';
$string['configallowlocalfiles'] = '允许在创建新文件资源时使用指向本地文件系统的链接，如光驱或者硬盘。这对于学生都在一个教室内访问网络驱动器或CD上的文件是很有用出的。是用这个功能可能要修改您的浏览器的安全设置。';
$string['configdefaulturl'] = '当添加一个基于URL的资源时，该值用于预填URL表格.';
$string['configfilterexternalpages'] = '使用该值将使所有外部资源(网页,上传的HTML文件) 按当前设定过滤(如词汇自动链接).使用此项将拖慢访问速度 - 当您确实需要时再谨慎的使用它.';
$string['configframesize'] = '当页面或上传的文件显示在框架中时,该象素值设定顶层框架的大小';
$string['configparametersettings'] = '当添加新的资源时，以此作为参数设置框的缺省值。在第一次设置之后，就允许每个用户自己设置。';
$string['configpopup'] = '所添加的新资源显示在弹出窗口, 设其为默认值吗?';
$string['configpopupdirectories'] = '弹出窗口是否显示缺省目录链接？';
$string['configpopupheight'] = '新窗口缺省高度？';
$string['configpopuplocation'] = '弹出窗口是否显示地址栏？';
$string['configpopupmenubar'] = '弹出窗口是否显示菜单栏？';
$string['configpopupresizable'] = '弹出窗口是否可以调整大小？';
$string['configpopupscrollbars'] = '弹出窗口是否可滚动？';
$string['configpopupstatus'] = '弹出窗口是否显示状态栏？';
$string['configpopuptoolbar'] = '弹出窗口是否显示工具栏？';
$string['configpopupwidth'] = '新窗口缺省宽度？';
$string['configsecretphrase'] = '这个保密口令用于制作加密码传递给一些资源作为参数。加密码是当前用户的IP地址加上保密口令后用md5算法生成的，即code = md5(IP.secretprahse)。这允许目标资源进行额外的安全检查。';
$string['configwebsearch'] = '当添加一个URL作为网页或链接时,该站将帮助用户寻找其想要的URL.';
$string['configwindowsettings'] = '当添加新资源时，此处设置将作为窗口设置框的缺省值。在第一次设之后，就允许每个用户自己设置。';
$string['directlink'] = '直接链接到此文件';
$string['directoryinfo'] = '将显示已选择目录中的所有文件。';
$string['display'] = '窗口';
$string['editingaresource'] = '编辑资源';
$string['encryptedcode'] = '加密代码';
$string['example'] = '例子';
$string['exampleurl'] = 'http://www.example.com/somedirectory/somefile.html';
$string['fetchclienterror'] = '当试图下载网页时您的Web客户程序发生错误(可能是错误的URL)。';
$string['fetcherror'] = '当试图下载网页时发生错误。';
$string['fetchservererror'] = '当试图下载网页时远程服务器发生错误(可能是程序错误)。';
$string['filename'] = '文件名';
$string['filtername'] = '资源名称自动链接';
$string['frameifpossible'] = '将资源放在单独框架中以保证站点导航';
$string['fulltext'] = '全文';
$string['htmlfragment'] = 'HTML片段';
$string['localfile'] = '本地文件';
$string['localfilechoose'] = '选择一个本地文件(CD-ROM)';
$string['localfilehelp'] = '帮助显示本地文件';
$string['localfileinfo'] = '<p>从您的计算机上选择一个本地文件。这个文件将不会被上传到Web站点上，但Moodle会在想要浏览此资源的的计算机的同样位置寻找它。</p><p>当您有很大的多媒体文件存储在CD-ROM并发给参与者时，这个功能是很有用的。每个参与者都可以通过<a href=\"$a\" target=\"_blank\">修改个人信息</a>来选择他自己的本地路径。</p>';
$string['localfilepath'] = '要为此资源设置您自己的本度路径，请随便从您电脑的保存资源的驱动器(通常是光驱)上选择一个文件。这个文件不会被上传，但其信息将会被存储并用于本地文件资源。';
$string['localfileselect'] = '选择这个路径。';
$string['maindirectory'] = '主文件目录';
$string['modulename'] = '资源';
$string['modulenameplural'] = '资源';
$string['neverseen'] = '没看过';
$string['newdirectories'] = '显示目录链接';
$string['newfullscreen'] = '全屏';
$string['newheight'] = '缺省窗口高度(像素)';
$string['newlocation'] = '显示地址栏';
$string['newmenubar'] = '显示菜单栏';
$string['newresizable'] = '允许调整窗口大小';
$string['newscrollbars'] = '允许窗口滚动';
$string['newstatus'] = '显示状态栏';
$string['newtoolbar'] = '显示工具栏';
$string['newwidth'] = '缺省窗口宽度(像素)';
$string['newwindow'] = '新窗口';
$string['newwindowopen'] = '在新窗口打开';
$string['notallowedlocalfileaccess'] = '访问本地文件的功能已禁用，故无法访问此资源。';
$string['note'] = '注意';
$string['notefile'] = '要上载更多文件到课程中（这样它们就会出现于该列表），请用 
<a href=\"$a\">文件管理器</a>.';
$string['notypechosen'] = '您必需选择一个类型。用浏览器的后退按钮退回并重试。';
$string['pagedisplay'] = '在当前窗口显示此资源';
$string['pagewindow'] = '同一窗口';
$string['pan'] = '平衡';
$string['parameter'] = '参数';
$string['parameters'] = '参数';
$string['popupresource'] = '该资源将出现在一个弹出窗口中.';
$string['popupresourcelink'] = '若不行, 点击这里: $a';
$string['resourcetype'] = '资源类型';
$string['resourcetype1'] = '参考书目';
$string['resourcetype2'] = '网页';
$string['resourcetype3'] = '上载的文件';
$string['resourcetype4'] = '纯文本';
$string['resourcetype5'] = '网页链接';
$string['resourcetype6'] = 'HTML文本';
$string['resourcetype7'] = '程序';
$string['resourcetype8'] = 'Wiki文本';
$string['resourcetype9'] = '目录';
$string['resourcetypedirectory'] = '显示一个目录';
$string['resourcetypefile'] = '链接到文件或站点';
$string['resourcetypehtml'] = '编写网页';
$string['resourcetypelabel'] = '插入标签';
$string['resourcetyperepository'] = '链接到一个资源库对象';
$string['resourcetypetext'] = '编写文本页';
$string['searchweb'] = '搜索网页';
$string['serverurl'] = '服务器链接($a->wwwroot)';
$string['variablename'] = '变量名';
$string['vol'] = '音量';

?>
