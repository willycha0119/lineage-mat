<?php
header("Content-Type:text/html; charset=UTF-8");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>RO仙境傳說：守護永恆的愛 攻速試算</title>
</head>
<script>
function caclu() {
	jobSpd = parseInt(document.getElementById('jobSpd').value);
	agi = parseInt(document.getElementById('agi').value);
	armor = parseInt(document.getElementById('armor').value)/100;
	var skill = 0;
	for(var i = 1 ; i <= 4 ; i++) {
		if(document.getElementById('skill'+i).checked) {
			skill += parseFloat(document.getElementById('skill'+i).value);
		} 
	}
	
	if(jobSpd <= 146) { jobSpd = 146; }
	var normal = ((Math.sqrt(205)-Math.sqrt(agi))*1000/7.15)/1000;		
	var attrSpd = ((200-(200-(jobSpd-normal+Math.sqrt(agi*9.9999)*0.96))*(1-skill))*1000)/1000;	
	var armorSpd = (195-attrSpd)*armor ;	
	var finalSpd = armorSpd + attrSpd;	
	var finalPad = 50/(200-finalSpd);	
	var ans = Math.floor(finalPad*1000)/10;	
	document.getElementById('ans').value = ans+"%";
	var ans2 = (1/(1/(ans/100)+0.1));
	document.getElementById('ans2').value= ans2.toFixed(2)+'次';
}

</script>

<table>
<tr><td valign="top">
<table>
<tr><td align="center">職業武器</td><td>
<select id="jobSpd">
<option value="148">　【騎士領主】長矛　</option>
<option value="144">　【騎士領主】長劍　</option>
<option value="144">　【騎士領主】斧頭　</option>
<option value="148">　【盜　　賊】短劍　</option>
<option value="146">　【盜　　賊】長劍　</option>
<option value="154">　【刺　　客】短劍　</option>
<option value="146">　【刺　　客】長劍　</option>
<option value="154">　【刺　　客】拳刃　</option>
<option value="154">　【十字刺客】短劍　</option>
<option value="154">　【十字刺客】拳刃　</option>
<option value="146">　【鐵　　匠】短劍　</option>
<option value="146">　【鐵　　匠】長劍　</option>
<option value="148">　【鐵　　匠】錘子　</option>
<option value="143">　【鐵　　匠】斧頭　</option>
<option value="136">　【神　工匠】短劍　</option>
<option value="131">　【神　工匠】長劍　</option>
<option value="146">　【神　工匠】斧頭　</option>
<option value="148">　【神　工匠】錘子　</option>
<option value="148">　【獵　　人】弓　　</option>
<option value="147">　【神　射手】弓　　</option>
<option value="141">　【法　　師】法杖　</option>
<option value="146">　【法　　師】短劍　</option>
<option value="146">　【魔　　導】法杖　</option>
<option value="143">　【魔　　導】短劍　</option>
<option value="136">　【祭　　司】法杖　</option>
<option value="153">　【祭　　司】錘子　</option>
<option value="136">　【神　　官】杖　　</option>
<option value="151">　【神　　官】錘　　</option>
<option value="155">　【武術宗師】拳套　</option>
<option value="151">　【武術宗師】錘子　</option>
</select></td></tr>
<tr><td align="center">AGI</td><td><input type="number" value="0" maxlength="3" style="width:50px;" id="agi" /></td></tr>
<tr><td align="center">裝備攻速</td><td><input type="number" value="0" maxlength="2" style="width:50px;" id="armor" />&nbsp%</td></tr>
<tr><td align="center">是否使用覺醒藥水</td><td><input name="skill1" type="radio" value="0.15" id="skill1" /> 是 <input name="skill1" type="radio" value="0" checked /> 否 </td></tr>
<tr><td align="center">是否使用劍速增加</td><td><input name="skill2" type="radio" value="0.3" id="skill2" /> 是 <input name="skill2" type="radio" value="0" checked /> 否 </td></tr>
<tr><td align="center">是否使用速度激發(自身)</td><td><input name="skill3" type="radio" value="0.3" id="skill3" /> 是 <input name="skill3" type="radio" value="0" checked /> 否 </td></tr>
<tr><td align="center">是否使用速度激發(隊友)</td><td><input name="skill4" type="radio" value="0.1" id="skill4" /> 是 <input name="skill4" type="radio" value="0" checked /> 否 </td></tr>
<tr><td colspan="2"><input type="button" value="計算" onclick="caclu();" style="width:100%;"/></td></tr>
<tr><td colspan="2">攻速為&nbsp;<input type="text" value="" readOnly id="ans" /> </td></tr>
<tr><td colspan="2">每秒攻擊次數為&nbsp;<input type="text" value="" readOnly id="ans2" /> </td></tr>
</table>
</td><td>
<table border="1" cellpadding="3" cellspacing="0" style="font-size:8pt;">
<tr><td colspan="3" align="center"><b>裝備攻速查詢表</b></td></tr>
<tr><td>	溜溜猴寵物	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	敏捷料理A	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	敏捷料理B	</td><td>	20%	</td><td>		</td></tr>
<tr><td>	長角之矛	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	錐騎槍	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	錐騎槍二階	</td><td>	12%	</td><td>		</td></tr>
<tr><td>	錐騎槍三階	</td><td>	15%	</td><td>		</td></tr>
<tr><td>	重炮長矛	</td><td>	15%	</td><td>		</td></tr>
<tr><td>	旗魚槍	</td><td>	精煉每+1裝備攻速+1%	</td><td>		</td></tr>
<tr><td>	水紋之劍	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	水紋之劍三階	</td><td>	8%	</td><td>		</td></tr>
<tr><td>	水紋之劍四階	</td><td>	11%	</td><td>		</td></tr>
<tr><td>	水紋之劍五階	</td><td>	15%	</td><td>		</td></tr>
<tr><td>	秘劍眷戀	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	秘劍眷戀三階	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	名刀不知火	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	洛奇的指甲	</td><td>	5%	</td><td>	※概率+30%持續7秒	</td></tr>
<tr><td>	斬首拳刃	</td><td>	25%	</td><td>	※血量低於25%攻速提升	</td></tr>
<tr><td>	秘拳套	</td><td>	15%	</td><td>	※普攻5%提升5%,最多三層共15%	</td></tr>
<tr><td>	森林之杖	</td><td>	15%	</td><td>		</td></tr>
<tr><td>	尖刃鐵鎚	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	尖刃鐵槌三階	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	莊嚴十字	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	斬首之斧	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	超重雙手斧	</td><td>	-40%	</td><td>		</td></tr>
<tr><td>	超重雙手斧+5	</td><td>	-35%	</td><td>		</td></tr>
<tr><td>	超重雙手斧+10	</td><td>	-30%	</td><td>		</td></tr>
<tr><td>	超重雙手斧+15	</td><td>	-25%	</td><td>		</td></tr>
<tr><td>	龍之襯衣	</td><td>	3%	</td><td>		</td></tr>
<tr><td>	龍之襯衣一階	</td><td>	4%	</td><td>		</td></tr>
<tr><td>	龍之襯衣二階	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	龍之襯衣三階	</td><td>	6%	</td><td>		</td></tr>
<tr><td>	神射手之衣	</td><td>	6%	</td><td>		</td></tr>
<tr><td>	神射手之衣三階	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	忍服血櫻	</td><td>	3%	</td><td>		</td></tr>
<tr><td>	忍服血櫻二階	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	忍服血櫻三階	</td><td>	8%	</td><td>		</td></tr>
<tr><td>	忍服。十六月夜	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	狐紋腕甲	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	狐紋腕甲二階	</td><td>	7%	</td><td>		</td></tr>
<tr><td>	狐紋腕甲三階	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	華貴腕甲	</td><td>	10%	</td><td>		</td></tr>
<tr><td>	華貴腕甲一階	</td><td>	12%	</td><td>		</td></tr>
<tr><td>	華貴腕甲二階	</td><td>	15%	</td><td>		</td></tr>
<tr><td>	敏捷別針四階	</td><td>	2%	</td><td>		</td></tr>
<tr><td>	強敏別針	</td><td>	6%	</td><td>		</td></tr>
<tr><td>	強敏別針四階	</td><td>	8%	</td><td>		</td></tr>
<tr><td>	強敏別針五階	</td><td>	12%	</td><td>		</td></tr>
<tr><td>	【套裝】高等布袋熊長靴+大貓的祝福Ⅵ+時之藍披肩Ⅳ	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	【套裝】魔錘安魂曲V+聖者法袍IV	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	【特殊】冒險者背包精煉值+10及敏捷90以上時	</td><td>	5%	</td><td>		</td></tr>
<tr><td>	摩羯宫王冠	</td><td>	1%	</td><td>		</td></tr>
<tr><td>	天秤宫王冠	</td><td>	1%	</td><td>		</td></tr>
<tr><td>	瑪勒盜蟲卡片	</td><td>	3%	</td><td>		</td></tr>
<tr><td>	阿特羅斯卡片	</td><td>	20%	</td><td>	※5%機率提升20%持續10秒	</td></tr>
<tr><td>	死靈卡片	</td><td>	15%	</td><td>		</td></tr>
<tr><td>	暗黑祭師卡片	</td><td>	1%	</td><td>	※解鎖	</td></tr>
<tr><td>	重金屬蝗蟲卡片	</td><td>	2%	</td><td>		</td></tr>
<tr><td>	重金屬蝗蟲卡片	</td><td>	1%	</td><td>	※解鎖	</td></tr>
<tr><td>	時間管理人卡片	</td><td>	1%	</td><td>	※存入	</td></tr>
<tr><td>	附魔	</td><td>	1%~4%	</td><td>		</td></tr>
</table>
</td></tr>
</table>


