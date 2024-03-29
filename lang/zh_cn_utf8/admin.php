<?PHP // $Id$ 
      // admin.php - created with Moodle 1.5.3+ (2005060230)


$string['adminseesallevents'] = '管理员看到所有事件';
$string['adminseesownevents'] = '管理员和其它用户一样';
$string['blockinstances'] = '实例';
$string['blockmultiple'] = '多个';
$string['cachetext'] = '永久缓存数据';
$string['calendarsettings'] = '日历';
$string['change'] = '修改';
$string['configallowcoursethemes'] = '如果激活，则可以为每个课程设定自己的主题风格。课程的主题风格将覆盖在其它位置(站点、用户或会话)设定的主题风格。';
$string['configallowemailaddresses'] = '如果您希望将新的电邮地址限制在一定的域名中，可以将它们列出，域名之间以空格分割。系统会拒绝所有其它域名的邮件。例如<strong>ourcollege.edu.au .gov.au</strong>';
$string['configallowobjectembed'] = '作为缺省的安全考量，普通用户是不能在网页文本中通过显示的EMBED或OBJECT标记嵌入多媒体(如Falsh)的(通过mediaplugins过滤器是比较安全的)。如果您希望允许用户使用上述标记，请开启此选项。';
$string['configallowunenroll'] = '如果设为“是”，那么学生可以在任何时候自己从课程注销。否则，只能由教师和管理员进行这项操作。';
$string['configallowuserblockhiding'] = '是否允许用户隐藏/显示此站点中各页面两侧的版块？这个功能使用JavaScript和Cookie来记住每一个可折叠版块的状态，它只影响用户自己的视图。';
$string['configallowuserthemes'] = '如果开启，则用户可以设定自己的主题风格。用户的主题风格设定会覆盖站点主题风格(但不会覆盖课程的)。';
$string['configallusersaresitestudents'] = '是否假定<strong>所有</strong>访问站点首页的用户为学生。如果设定为是，则所有经过确认的用户帐号都可以参加首页上学生的活动。如果设定为否，则只有那些至少参加了一门课程学习的用户才可以参加首页上学生的活动。只有管理员和特别指定的教师才可以作为这些首页活动的教师。';
$string['configautologinguests'] = '当访问者访问时，是否自动以访客(guest)身份登录那些允许访客(guest)进入的课程。';
$string['configcachetext'] = '对于较大的或者是开启了文本过滤器的站点，这个设置可以提高速度。在一段时间之内，已经处理过的文本的副本将会被保留。如果将这个值设得太小会减慢相应速度，但设定得太大也会使文本刷新缓慢。';
$string['configclamactlikevirus'] = '认为文件带病毒';
$string['configclamdonothing'] = '认为文件没问题';
$string['configclamfailureonupload'] = '如果您让clam扫描上传的文件，但并未正确配置clam或它因某些未知原因而运行失败了，那应该怎么做? 如果您选择了“认为文件带病毒”，那么它们将会被转移到隔离区或是被删除。如果您选择了“认为文件没问题”，那么文件将会如往常一样被转移到目标目录中。无论选择哪个，系统都会提醒管理员clam运行失败了。如果您选择“认为文件带病毒”且由于某些原因clam运行失败了(通常是因为您未能指定合法的pathtoclam值)，所有上传的文件将会被转移到隔离区或者被删除。使用这个设置要小心。';
$string['configcountry'] = '如果在此处设定一个国家或地区，则他将被用于用户注册时的缺省选择。要强制用户自己选择一个国家或地区，保持此处为空白。';
$string['configdbsessions'] = '如果开启此设定，将会使用数据库来保存当前的会话信息。这对于那些大的/繁忙的站点或是在集群上建立的站点是很有用的。对于多数站点这个选项应当保持关闭，即使用服务器硬盘来保存会话信息。注意改变这个设定将会强制退出所有的在线用户(包括您)。';
$string['configdebug'] = '如果您打开这个选项，那么PHP的错误报告会增加，页面上会出现更多的警告信息。这只对开发人员有用。';
$string['configdeleteunconfirmed'] = '使用电子邮件认证注册时，超过该时限未认证的用户将被删除。';
$string['configdenyemailaddresses'] = '要拒绝某些域名的电邮地址，请把他们列在这里。系统会接受所有其它域名的邮件。例如<strong>hotmail.com yahoo.co.uk</strong>';
$string['configdigestmailtime'] = '系统每天会给那些希望以文摘形式接受邮件的人发送文摘。这个选项控制着每日发送文摘邮件的时间(下一个在此时间后运行的cron程序将会发出这些信件)。';
$string['configdisplayloginfailures'] = '为指定用户显示登录失败的日志。';
$string['configenablerssfeeds'] = '这个选项允许所有的论坛支持RSS种子。您仍需手工激活每一个论坛配置中的RSS种子选项。';
$string['configenablerssfeedsdisabled'] = '由于RSS种子已经在整个站点关闭了，因此无法使用。要开启它，访问管理中的变量设置。';
$string['configerrorlevel'] = '选择显示的PHP警告数目。“正常”通常是最佳选择。';
$string['configextendedusernamechars'] = '激活这个选项将允许学生在用户名中使用任何字符(这并不会影响它们的实际名字)。缺省的情况是“否”，它限制用户名只能使用英文字母和数字。';
$string['configfilterall'] = '过滤全部字符串，包括头部、标题、导航栏等等。当使用多语言过滤时，这是非常有用的，否则它只会给您的系统带来额外的负担。';
$string['configfilteruploadedfiles'] = '使用该设置会让Moodle在显示上传的HTML和文本前用过滤器处理他们。';
$string['configforcelogin'] = '正常地，不需要登录即可看到首页和课表(但是不课程)。如果您想要禁止在登录前做任何事，请使用此项设置。';
$string['configforceloginforprofiles'] = '激活这个选项会强制访问者在 查看用户信息页面时必须以真实(非访客)登录。缺省的情况下此选项是关闭的(“否”)，这样访问者可以在未正式入学前查看每一个课程的教师情况，但同时搜索引擎也可以看到这些信息。';
$string['configframename'] = '如果您把本系统嵌入于网页框架(frame)中，那么在此填入该框架名称，否则这里须保持为‘_top’。';
$string['configfullnamedisplay'] = '这定义了如何显示名字。对于多数单一语言站点，最有效的设置是缺省的“名 + 姓”，但也可以选择隐藏姓或者让当前的语言包来决定(一些语言有不同的习俗)。';
$string['configgdversion'] = '指明已安装的GD版本。默认显示的版本号是自动探测的结果。不要轻易改变它，除非您清楚您在做什么。';
$string['confightmleditor'] = '选择是否允许使用嵌入的HTML编辑器。即便您选择允许，也只有在兼容的浏览器上才会显示出这个编辑器。用户也可以选择不使用它。';
$string['configidnumber'] = '指定用户是否(a)不需要ID号，(b)要ID号但可留空，(c)必须要ID号。如果给出，它将显示在用户资料中。';
$string['configintro'] = '在此页中您能够设定许多变量，它们让Moodle更好地运行在您的服务器上。不必过多忧虑——默认的设置已能很好地运行，而且您以后也可以回到这里改变设置。';
$string['configintroadmin'] = '在这个页面中，您可以设置您的主管理员帐号，它可以完全控制站点。请确认您为它设定了一个安全的用户名和密码以及一个合法的电子邮件地址。您以后可以创建更多的管理员帐号。';
$string['configintrosite'] = '在此页中您可以配置首页和这个站点的名称。您可以在今后任何的时间通过首页上的“站点设置”链接返回到此页修改这些设置。';
$string['configintrotimezones'] = '这个页面用于搜索新的关于全世界时区的信息(包括夏时制规则)并更新您的本地数据库。这些位置将会被按此次序逐一检查：{$a}。这个过程通常是非常安全的，他不会破坏正常的安装。您要更新您的时区吗？';
$string['configlang'] = '为整个站点选择一种缺省的语言。用户是可以设定自己的语言的。';
$string['configlangcache'] = '缓冲语言目录。这会节省很多的内存和处理器时间。如果激活这个选项，当您增加或删除语言时，需经过一段时间菜单才会更新。';
$string['configlangdir'] = '多数的语言都是从左向右写的，但也有一些(如阿拉伯文和希伯来语)是从右向左写的。';
$string['configlanglist'] = '此处留空将允许用户从您所有已安装的语言种类中任选一种。当然如果您要缩短语言选择菜单，那么可以在此填入语言代码，以逗号(半角)隔开。例如：en,es_es,fr,it。';
$string['configlangmenu'] = '选择要不要在主页、登录页显示通用的语言菜单。这并不影响用户在他们的个人资料中选择偏爱的语言。';
$string['configlocale'] = '选择站点的地区设置——它会影响日期的格式和语言。您的操作系统上必须安装这种地区设置(如en_US或es_ES)。如果不知如何选择，请不要填写。';
$string['configloginhttps'] = '打开这个选项会让Moodle在登录时使用安全的https连接，登录之后再返回到普通的http方式以保证速度。注意: 这个设定<strong>需要</strong>Web服务器上的https已经被激活。如果没有激活，<strong>您可能会将自己锁在站点之外</strong>。';
$string['configloglifetime'] = '在此指定保存用户活动日志的时间长短。超出此时间段的日志将被自动删除。最好是将日志保留尽量长的时间，万一需要他们呢？但如果您的服务器非常繁忙且有性能方面的问题，您也许会希望减少保留日志的时间。';
$string['configlongtimenosee'] = '如果学生很长时间没有登录，系统可以自动将它们从课程除名。此参数指定这个期限。';
$string['configmaxbytes'] = '限制整个站点内上传文件的最大尺寸。这个设置会受到PHP设定中upload_max_filesize以及Apache设定中LimitRequestBody的影响。这个设置也会影响课程和模块中选择文件尺寸的范围。';
$string['configmaxeditingtime'] = '此参数指定用户在多长时间内可以重新编辑讨论区的贴子。通常30分钟比较合适。';
$string['configmessaging'] = '是否应当开启在站点用户之间发送短消息的功能?';
$string['confignoreplyaddress'] = '有时电子邮件以用户身份发送(如论坛帖子)。有时用户不希望别人看到自己的电子邮件地址，在这些情况下，您在此处指定的电子邮件地址将会被使用。';
$string['confignotifyloginfailures'] = '如果登录失败的信息被记录，可以通过E-mail将它们发送出去。谁应当收到这些通知呢？';
$string['confignotifyloginthreshold'] = '如果发送登录失败的通知，对于一个用户或者IP地址而言，多少次登录失败之后发送通知呢？';
$string['configopentogoogle'] = '如果使用该设置，Google将能够以访客的身份进入网站。通过Google搜索而来的访问者也可以以访客的身份登陆网站。这个选项仅对允许访客访问的课程有效。';
$string['configpathtoclam'] = 'Clam AV的路径。通常是/usr/bin/clamscan或/usr/bin/clamdscan。设定了这个选项，Clam AV才能运行。';
$string['configpathtodu'] = '路径到 du。 可能是 /usr/bin/du。 如果你输入这个，显示目录内容的页面在目录中有很多文件时会变快。';
$string['configperfdebug'] = '如果你打开这个，性能的数据将被输出到标准风格的页面底部。';
$string['configproxyhost'] = '如果此服务器是通过代理(防火墙)上网，那么请填入代理的主机名和端口，否则留空。';
$string['configquarantinedir'] = '如果您希望Clam AV把受感染的文件转移到一个隔离目录中，那么请在此处指定它。这个目录对于Web服务器必须是可写的。如果您在此处留空或者填写了一个不存在或无法访问的目录，受感染的文件将会被删除。注意末尾不需要斜线。';
$string['configrunclamonupload'] = '在上传文件时运行Clam AV? 您需要在pathtoclam中填写了正确的路径，此选项才能生效。(Clam AV是一个病毒扫描程序，它是自由软件，可从 http://www.clamav.net/ 获得。';
$string['configsectioninterface'] = '界面';
$string['configsectionmail'] = '邮件';
$string['configsectionmaintenance'] = '管理';
$string['configsectionmisc'] = '杂项';
$string['configsectionoperatingsystem'] = '操作系统';
$string['configsectionpermissions'] = '权限';
$string['configsectionsecurity'] = '安全';
$string['configsectionuser'] = '用户';
$string['configsecureforms'] = '当读取表单的数据时，Moodle可以提供更多的安全级别。如果此选项被激活，系统将检查浏览器的HTTP_REFERER变量是否与当前的表单相符。在一些极个别的情况下，这会带来一些麻烦，譬如用户使用防火墙(如Zonealarm)并配置了从Web信息中删除HTTP_REFERER的时候。其症状是遇到表单就再也无法前进了。如果用户在登录页面上发生错误，或许您应当选在关闭这个选项，尽管这样做会使您的站点进一步暴露在暴力密码攻击之下。如果不知道选什么，那就让它保留“是”吧。';
$string['configsessioncookie'] = '此选项用来设定Moodle会话所使用的cookie的名称。这个选项是可选的，仅仅在一种情况下比较有用：一个站点上运行了多个Moodle的拷贝，要避免cookie发生混乱。';
$string['configsessiontimeout'] = '如果用户登入本站后空闲了很长时间(没有加载新页面)，那么他们将自动登离(会话结束)。该变量指定这个时间有多长。';
$string['configshowblocksonmodpages'] = '一些活动的模块支持在它们的页面上显示版块。如果您开启这个选项，教师们就可以在这些页面上添加版块，否则将不显示这一功能。';
$string['configshowsiteparticipantslist'] = '站点中所有的学生和站点教师将会被列在站点参与者列表中。谁可以查看这个列表呢?';
$string['configsitepolicy'] = '如果您有一份站点使用协议，并且需要所有的用户在使用此站点前阅读并同意，那么请在此指定它的URL，否则请留空。URL可以指向任何地址——一个方便的方法是指向站点中的文件，如 http://yoursite/file.php/1/policy.html 。';
$string['configslasharguments'] = '通过使用“斜杠参数”(即这里的第二选项)脚本来提供对文件(图像、上传的资料等)的访问。该方法能让文件更容易地缓存于网页浏览器和代理服务器等。但有些PHP服务器不支持这种方法，所以如果您查看上传的文件或图像有点麻烦，请选择第一个选项。';
$string['configsmtphosts'] = '填入一个或多个本地SMTP服务器全名(例如“mail.a.com”或“mail.a.com;mail.b.com”)，本系统将用它(们)发送邮件。如果留空不填，将使用PHP默认的方法发信。';
$string['configsmtpuser'] = '如果您在上面指定了一个SMTP服务器，而该服务器要求身份验证，那么在此填入用户名和密码。';
$string['configteacherassignteachers'] = '普通老师可以在他的课程内委派其他教师吗？如果选择“否”，则只有课程管理员和网站管理员可以委派教师。';
$string['configthemelist'] = '此项为空则用户可以使用所有的合法主题风格。如果您希望让可选的主题风格列表短一些，您可以在此指定一些。譬如: standard,orangewhite。';
$string['configtimezone'] = '您可以在此设定缺省时区。这是只是用于显示日期的缺省时区——每个用户都可以设定他自己的时区。此处的“服务器时间”让Moodle缺省情况下直接使用服务器上操作系统的设置，而用户个人设置中的“服务器时间”则表示缺省情况下使用此处的设定。';
$string['configunzip'] = 'unzip程序的位置(仅针对Unix系统，可选)。如果指定了，将用它来解压服务器上的zip文件。如果留空，则Moodle使用内部函数解压。';
$string['configvariables'] = '变量';
$string['configwarning'] = '小心修改这些选项——不合法的值可能导致错误。';
$string['configzip'] = 'zip程序的位置(仅针对Unix系统，可选)。如果指定了，将用它来创建服务器上的zip文件。如果留空，则Moodle使用内部函数压缩。';
$string['confirmation'] = '确认';
$string['cronwarning'] = '<a href=\"cron.php\">cron.php维护脚本</a>已经有最少24个小时都没有运行过了。<br /><a href=\"../doc/?frame=install.html&sub=cron\">安装文档</a>中解释了如何自动运行它。';
$string['edithelpdocs'] = '编辑帮助文档';
$string['editstrings'] = '编辑字符串';
$string['filterall'] = '过滤全部字符串';
$string['filteruploadedfiles'] = '过滤上传的文件';
$string['globalsquoteswarning'] = '<p><strong>安全警告</strong>: 为完成操作, Moodle 需要 <br />你修改你的PHP中的几个设置.<p/><p>你 <em>必须</em> 设置 <code>register_globals=off</code> 和/或 <code>magic_quotes_gpc=on</code>. <br />如果可能, 你应该设置 <code>register_globals=off</code> 来增强一般的 <br /> 服务器安全, 设置 <code>magic_quotes_gpc=on</code> 也是被推荐的.<p/><p>这些设置可以通过修改 <code>php.ini</code>来控制, Apache/IIS <br />配置或者 <code>.htaccess</code> 文件.</p>';
$string['helpadminseesall'] = '管理员看到日历中全部的事件还是只看到那些于他们自己相关的事件?';
$string['helpcalendarsettings'] = '设定Moodle中几个与日历和日期/事件相关的方面';
$string['helpforcetimezone'] = '您可以允许用户选择他自己的时区或者让所有用户只能使用同一时区。';
$string['helpsitemaintenance'] = '用于升级和其它需要的工作';
$string['helpstartofweek'] = '在日历中一周的开始是哪一天?';
$string['helpupcominglookahead'] = '缺省情况下日历系统查找未来几天之内的即将发生事件?';
$string['helpupcomingmaxevents'] = '缺省情况下为用户显示(最多)几天之内的即将发生事件?';
$string['helpweekenddays'] = '一周中的哪些天是“周末”并用不同的颜色显示?';
$string['importtimezones'] = '更新全部时区';
$string['importtimezonescount'] = '从{$a-source}中导入{$a->count}项';
$string['importtimezonesfailed'] = '没找到数据源！(坏消息)';
$string['incompatibleblocks'] = '不兼容的版块';
$string['optionalmaintenancemessage'] = '可选的维护信息';
$string['pleaseregister'] = '要删除此按钮，请注册您的站点。';
$string['sitemaintenance'] = '这个站点目前正在维护中，暂时不能访问。';
$string['sitemaintenancemode'] = '维护模式';
$string['sitemaintenanceoff'] = '维护模式已经关闭了，现在站点已经重新正常运行。';
$string['sitemaintenanceon'] = '您的站点目前处于维护模式(只有管理员可以登录或使用站点)。';
$string['sitemaintenancewarning'] = '您的站点目前处于维护模式(只有管理员可以登录)。要让站点返回到正常模式，请<a href=\"maintenance.php\">关闭维护模式</a>。';
$string['tabselectedtofront'] = '在有制表符的表格中，是否要将当前选择的行置于顶部。';
$string['therewereerrors'] = '在您的数据中有错误';
$string['timezoneforced'] = '站点管理员规定必须这样做';
$string['timezoneisforcedto'] = '强制所有用户使用';
$string['timezonenotforced'] = '用户可以选择自己的时区';
$string['upgradeforumread'] = '在Moodle 1.5中增加了一项新的功能，它可以跟踪论坛帖子是否已经阅读。<br />为了使用这个功能，您需要<a href=\"$a\">升级您的表格</a>。';
$string['upgradeforumreadinfo'] = '在Moodle 1.5中增加了一项新的功能，它可以跟踪论坛帖子是否已经阅读。为了使用这个功能，您需要升级您的表格为已经存在的帖子添加这一信息。如果您的站点很大，这会花费很长的时间(数小时)，并且给数据库服务器带来很大负担，因此最好在夜深人静时再做这个工作。当然，在您的站点升级时，它还是可以继续工作的，用户不会受到任何影响。一旦您开始了这个工作，就必须让它结束(一直开启浏览器)。当然，如果您中途关闭了浏览器：不用担心，重新开始就可以了。<br /><br />您现在要开始升级么？';
$string['upgradelogs'] = '要获得完整功能，您的旧日志必须升级。<a href=\"$a\">更多信息</a>';
$string['upgradelogsinfo'] = '保存日志的方式最近有些变动。为了能查看每个活动的旧日志，它们必须被升级。这个过程所花费的时间取决于您的网站（可能长达几小时），并且会给大规模网站的数据库带来很大的负荷。一旦您开始了这个工作，就必须让它结束(一直开启浏览器)。不用担心——日志升级过程中，其他人仍然可以正常地使用网站。<br /><br />打算现在升级日志吗?';
$string['upgradesure'] = '您的Moodle文件已经被修改了，您正在准备自动升级您的服务器为如下版本:
<p><b>$a</b></p>
<p>您一旦执行了这个操作就不能再返回到先前的版本了。</p>
<p>您确定要将服务器升级到这个版本么?</p>';
$string['upgradingdata'] = '升级数据';
$string['upgradinglogs'] = '升级日志';

?>
