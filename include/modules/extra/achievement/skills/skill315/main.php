<?php

namespace skill315
{
	//旧成就精力所限，未全部修改，请以skill300成就为模板！
	$ach315_name = array(
		0=>'第一滴血',
	);
	
	function init() 
	{
		define('MOD_SKILL315_INFO','achievement;daily;');
		define('MOD_SKILL315_ACHIEVEMENT_ID','15');
		define('DAILY_TYPE315',3);
	}
	
	function acquire315(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		\skillbase\skill_setvalue(315,'cnt','0',$pa);
	}
	
	function lost315(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function finalize315(&$pa, $data)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if ($data=='')					
			$x=0;						
		else $x=$data;
		$ox=$x;
		$x+=\skillbase\skill_getvalue(315,'cnt',$pa);		
		$x=min($x,(1<<30)-1);
		
		if (($ox<1)&&($x>=1)){
			\cardbase\get_qiegao(100,$pa);
		}
		
		return $x;
	}
	
	function player_kill_enemy(&$pa,&$pd,$active){
		if (eval(__MAGIC__)) return $___RET_VALUE;
		$chprocess($pa, $pd, $active);
		if ( \skillbase\skill_query(315,$pa) && $pd['type']==0 && $pd['hp'] <= 0)
		{
			$x=(int)\skillbase\skill_getvalue(315,'cnt',$pa);
			$x+=1;
			\skillbase\skill_setvalue(315,'cnt',$x,$pa);
		}
		
	}	
	
	function show_achievement315($data)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if ($data=='')
			$p315=0;
		else	$p315=$data;	
		$c315=0;
		if ($p315>=1){
			$c315=999;
		}
		include template('MOD_SKILL315_DESC');
	}
}

?>
