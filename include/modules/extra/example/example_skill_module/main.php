<?php

namespace skill编号
{
	function init() {}
	
	function acquire编号(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		在这里添加获得技能时的动作
	}
	
	function lost编号(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		在这里添加失去技能时的动作
	}
	
	function skill_onload_event(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		在这里添加载入一个人物时的动作
		$chprocess($pa);
	}
	
	function skill_onsave_event(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		在这里添加保存一个人物时的动作
		$chprocess($pa);
	}
}

?>
