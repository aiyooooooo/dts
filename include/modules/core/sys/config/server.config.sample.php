<?php
//������������Ϸ��װʱ��ʼ��������ͨ����Ϸ��̨�޸�
// [EN]	Set below parameters according to your account information provided by your hosting
// [CH] ���±�������ݿռ����ṩ���˺Ų�����?��������,����ϵ�������ṩ?

	$server_address = 'http://localhost/dts'; 			//��������������Ҫ������б�ܣ�
	
	$dbhost = 'localhost';			// database server
						// ���ݿ������

	$dbuser = '';			// database username
						// ���ݿ��û���

	$dbpw = '';			// database password
						// ���ݿ���?

	$dbname = '';			// database name
						// ���ݿ���

	$dbreport = 1;				// send db error report? 1=yes
						// �Ƿ������ݿ���󱨸�? 0=? 1=?

// [EN] If you have problems logging in Discuz!, then modify the following parameters, else please leave default
// [CH] ����?cookie ���÷�Χ������Ҫ?����Ϸ��¼������,���޸������?�����뱣��Ĭ?

	$cookiedomain = ''; 			// cookie domain
						// cookie ����?

	$cookiepath = '/';			// cookie path
						// cookie ����·��


// [EN] Special parameters, DO NOT modify these unless you are an expert in Discuz!
// [CH] ���±���Ϊ�ر�ѡ��,һ�������û�б�Ҫ�޸�

	$headercharset = 0;			// force outputing charset header
						// ǿ�������ַ�?ֻ����ʱʹ��

	$onlinehold = 900;			// time span of online recording
						// ���߱���ʱ��,��λ?

	$pconnect = true;				// persistent database connection, 0=off, 1=on
						// ���ݿ�־���?false=�ر�, true=��

	$gamefounder = 'admin';			// super administrator's UID
						// ��Ϸ��ʼ?UID, ����֧�ֶ����ʼ�ˣ�֮��ʹ�� ??�ָ�?
						// �����������Ϸ��ʼ�ˣ������Ա֮������໥�༭������Ȩ����������Ϸʹ���ĵ�

	$postinterval = 1;   //�û��ύ����ļ��ʱ�䣬��λ?

	$moveut = 8; //set the difference of server time and client time
			//�������ʱ���������ʱ����ʱ��ڴ˴���?

	$moveutmin = 0; //set the difference of server time and client time, by minutes
	//�������ʱ���������ʱ����ʱ��ڴ˴���?

// [EN] !ATTENTION! Do NOT modify following after your board was settle down
// [CH] ��ϷͶ��ʹ�ú����޸ĵı���

	$gtablepre = 'acbra2_';   			// ����ǰ׺, ͬһ���ݿⰲװ�����Ϸ���޸Ĵ˴�
						// table prefix, modify this when you are installingmore than 1 Discuz! in the same database.

	$authkey = 'bra';		//game encrypt key ,the same of plus key
						//��Ϸ������Կ��Ҫ������Կ��?

// [EN] !ATTENTION! Preservation or debugging for developing
// [CH] �����޸����±���,�������򿪷�������!

	$database = 'mysql';			// 'mysql' for MySQL version and 'pgsql' for PostgreSQL version
						// MySQL �汾����?'mysql', PgSQL �汾����?'pgsql'

	$charset = 'utf-8';			// default character set, 'gbk', 'big5', 'utf-8' are available
						// ��ϷĬ���ַ�? ��?'gbk', 'big5', 'utf-8'

	$dbcharset = 'utf8';			// default database character set, 'gbk', 'big5', 'utf8', 'latin1' and blank are available
						// MySQL �ַ�? ��?'gbk', 'big5', 'utf8', 'latin1', ����Ϊ������Ϸ�ַ����趨

	$attackevasive = 0;			// protect against attacks via common request, 0=off, 1=cookie refresh limitation, 2=deny proxy request, 3=both
						// ������������������ɵľܾ�����? 0=�ر�, 1=cookie ˢ������, 2=���ƴ�������, 3=cookie+��������

	$tplrefresh = 1;			// auto check validation of templates, 0=off, 1=on
						// ģ���Զ�ˢ�¿�?0=�ر�, 1=��, �ڲ��޸�ҳ�������¿��Թر�

	$bbsurl = 'http://76573.org/';    //the bbs url for the game plus
									//��װ��Ϸ�������̳��ַ

	$gameurl = 'http://lg.dianbo.me/';    // the url of game program files,for the full-window mode
									//��Ϸ�����ַ������ȫ��ģ?

	$homepage = 'http://www.amarilloviridian.com/';      // game homepage
									//�ٷ���վ��ַ

	$title = '�� �� �� �� ɱ';     //game title
							//��Ϸ����

	$errorinfo = 1;				//�Ƿ���������Ϣ��ʾ��1Ϊ������0Ϊ�رա�������й©��Ϸ��װ·��

	
// ============================================================================

?>