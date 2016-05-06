<?php
header("Content-Type:text/html; charset=UTF-8");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<script>
var _木箭 = { "NAME": "木箭", "QUANTITY": 500 , "DETAIL": [{"NAME": "樹枝", "AMT": 4},{"NAME": "鋼鐵礦", "AMT": 2}]}; 
var _寬劍 = { "NAME": "寬劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "寬劍的劍身", "AMT": 1},{"NAME": "鋼鐵礦", "AMT": 18},{"NAME": "煤礦", "AMT": 18}]}; 
var _柳木魔杖 = { "NAME": "柳木魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "柳木魔杖的金屬塊", "AMT": 1},{"NAME": "樹枝", "AMT": 12},{"NAME": "鋼鐵礦", "AMT": 12},{"NAME": "動物的骨頭", "AMT": 24}]}; 
var _弓 = { "NAME": "弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "弓的金屬塊", "AMT": 1},{"NAME": "軟皮", "AMT": 4},{"NAME": "鋼鐵礦", "AMT": 20},{"NAME": "絞線", "AMT": 4}]}; 
var _柏木魔杖 = { "NAME": "柏木魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "柏木魔杖的金屬塊", "AMT": 2},{"NAME": "樹枝", "AMT": 55},{"NAME": "鋼鐵礦", "AMT": 55},{"NAME": "動物的骨頭", "AMT": 110}]}; 
var _短刀 = { "NAME": "短刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "短刀的刀身", "AMT": 2},{"NAME": "鋼鐵礦", "AMT": 80},{"NAME": "煤礦", "AMT": 80}]}; 
var _刺擊刀 = { "NAME": "刺擊刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "刺擊刀的刀身", "AMT": 2},{"NAME": "鋼鐵礦", "AMT": 110},{"NAME": "煤礦", "AMT": 55}]}; 
var _短矛 = { "NAME": "短矛", "QUANTITY": 1 , "DETAIL": [{"NAME": "短矛刀身", "AMT": 3},{"NAME": "軟皮", "AMT": 55},{"NAME": "鋼鐵礦", "AMT": 220},{"NAME": "煤礦", "AMT": 110}]}; 
var _反射劍 = { "NAME": "反射劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "反射劍的劍身", "AMT": 3},{"NAME": "鋼鐵礦", "AMT": 200},{"NAME": "煤礦", "AMT": 200}]}; 
var _森林弓 = { "NAME": "森林弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "森林弓的柄", "AMT": 3},{"NAME": "軟皮", "AMT": 45},{"NAME": "鋼鐵礦", "AMT": 225},{"NAME": "絞線", "AMT": 45}]}; 
var _皮鞋 = { "NAME": "皮鞋", "QUANTITY": 1 , "DETAIL": [{"NAME": "皮鞋的材料", "AMT": 2},{"NAME": "軟皮", "AMT": 1},{"NAME": "動物的皮", "AMT": 8}]}; 
var _皮外衣 = { "NAME": "皮外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "皮外衣的圖樣", "AMT": 2},{"NAME": "動物的皮", "AMT": 24},{"NAME": "線", "AMT": 12}]}; 
var _皮長襪 = { "NAME": "皮長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "皮長襪的圖樣", "AMT": 2},{"NAME": "動物的皮", "AMT": 12},{"NAME": "線", "AMT": 12}]}; 
var _皮頭盔 = { "NAME": "皮頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "皮頭盔的組件", "AMT": 3},{"NAME": "軟皮", "AMT": 15},{"NAME": "動物的皮", "AMT": 12}]}; 
var _皮手套 = { "NAME": "皮手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "皮手套的材料", "AMT": 3},{"NAME": "軟皮", "AMT": 3},{"NAME": "動物的皮", "AMT": 24}]}; 
var _骨片胸甲 = { "NAME": "骨片胸甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "骨片胸甲的原料", "AMT": 3},{"NAME": "鋼鐵礦", "AMT": 30},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _骨片脛甲 = { "NAME": "骨片脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "骨片脛甲的原料", "AMT": 3},{"NAME": "動物的骨頭", "AMT": 14},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _幻滅項鍊 = { "NAME": "幻滅項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "幻滅項鍊的鍊子", "AMT": 2},{"NAME": "樹枝", "AMT": 20},{"NAME": "研磨劑", "AMT": 4}]}; 
var _智慧項鍊 = { "NAME": "智慧項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "智慧項鍊的鍊子", "AMT": 3},{"NAME": "樹枝", "AMT": 50},{"NAME": "研磨劑", "AMT": 10}]}; 
var _靈魂彈_D級 = { "NAME": "靈魂彈_D級", "QUANTITY": 156 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 1},{"NAME": "精靈礦石", "AMT": 3}]}; 
var _靈魂彈_C級 = { "NAME": "靈魂彈_C級", "QUANTITY": 476 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 1},{"NAME": "精靈礦石", "AMT": 15}]}; 
var _靈魂彈_B級 = { "NAME": "靈魂彈_B級", "QUANTITY": 450 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 1},{"NAME": "精靈礦石", "AMT": 54}]}; 
var _靈魂彈_A級 = { "NAME": "靈魂彈_A級", "QUANTITY": 300 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 1},{"NAME": "精靈礦石", "AMT": 50}]}; 
var _皮革 = { "NAME": "皮革", "QUANTITY": 1 , "DETAIL": [{"NAME": "動物的皮", "AMT": 6}]}; 
var _強化繩索 = { "NAME": "強化繩索", "QUANTITY": 20 , "DETAIL": [{"NAME": "線", "AMT": 25},{"NAME": "鐵", "AMT": 2}]}; 
var _奧里哈魯根 = { "NAME": "奧里哈魯根", "QUANTITY": 1 , "DETAIL": [{"NAME": "銀塊", "AMT": 12},{"NAME": "奧里哈魯根原石", "AMT": 4},{"NAME": "合成的炭焦", "AMT": 1}]}; 
var _絞線 = { "NAME": "絞線", "QUANTITY": 1 , "DETAIL": [{"NAME": "樹枝", "AMT": 5}]}; 
var _炭焦 = { "NAME": "炭焦", "QUANTITY": 1 , "DETAIL": [{"NAME": "煤礦", "AMT": 3},{"NAME": "木炭", "AMT": 3}]}; 
var _鐵 = { "NAME": "鐵", "QUANTITY": 1 , "DETAIL": [{"NAME": "研磨劑", "AMT": 5},{"NAME": "鋼鐵礦", "AMT": 5}]}; 
var _顆粒狀的骨粉 = { "NAME": "顆粒狀的骨粉", "QUANTITY": 1 , "DETAIL": [{"NAME": "動物的骨頭", "AMT": 10}]}; 
var _鐵鑄模 = { "NAME": "鐵鑄模", "QUANTITY": 1 , "DETAIL": [{"NAME": "鋼鐵礦", "AMT": 5},{"NAME": "煤礦", "AMT": 5},{"NAME": "絞線", "AMT": 5}]}; 
var _高級軟皮 = { "NAME": "高級軟皮", "QUANTITY": 1 , "DETAIL": [{"NAME": "軟皮", "AMT": 3},{"NAME": "顆粒狀的骨粉", "AMT": 1}]}; 
var _銀鑄模 = { "NAME": "銀鑄模", "QUANTITY": 1 , "DETAIL": [{"NAME": "銀塊", "AMT": 10},{"NAME": "絞線", "AMT": 5},{"NAME": "炭焦", "AMT": 5}]}; 
var _純化的研磨劑 = { "NAME": "純化的研磨劑", "QUANTITY": 1 , "DETAIL": [{"NAME": "研磨劑", "AMT": 3},{"NAME": "純石", "AMT": 1},{"NAME": "顆粒狀的骨粉", "AMT": 3}]}; 
var _合成的炭焦 = { "NAME": "合成的炭焦", "QUANTITY": 1 , "DETAIL": [{"NAME": "奧里哈魯根原石", "AMT": 1},{"NAME": "炭焦", "AMT": 3}]}; 
var _合成的絞線 = { "NAME": "合成的絞線", "QUANTITY": 1 , "DETAIL": [{"NAME": "線", "AMT": 5},{"NAME": "絞線", "AMT": 5}]}; 
var _米索莉合金 = { "NAME": "米索莉合金", "QUANTITY": 1 , "DETAIL": [{"NAME": "米索莉原石", "AMT": 1},{"NAME": "鐵", "AMT": 2},{"NAME": "純化的研磨劑", "AMT": 1}]}; 
var _工匠模具 = { "NAME": "工匠模具", "QUANTITY": 1 , "DETAIL": [{"NAME": "金剛石塊", "AMT": 10},{"NAME": "鐵鑄模", "AMT": 1},{"NAME": "純化的研磨劑", "AMT": 5}]}; 
var _鐵匠模具 = { "NAME": "鐵匠模具", "QUANTITY": 1 , "DETAIL": [{"NAME": "米索莉原石", "AMT": 10},{"NAME": "銀鑄模", "AMT": 1},{"NAME": "純化的研磨劑", "AMT": 5}]}; 
var _高級皮革 = { "NAME": "高級皮革", "QUANTITY": 1 , "DETAIL": [{"NAME": "煤礦", "AMT": 4},{"NAME": "皮革", "AMT": 4},{"NAME": "強化繩索", "AMT": 4}]}; 
var _金屬纖維 = { "NAME": "金屬纖維", "QUANTITY": 20 , "DETAIL": [{"NAME": "銀塊", "AMT": 15},{"NAME": "強化繩索", "AMT": 20}]}; 
var _藍鑽項鍊 = { "NAME": "藍鑽項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "藍鑽項鍊的鍊子", "AMT": 3},{"NAME": "樹枝", "AMT": 80},{"NAME": "研磨劑", "AMT": 16}]}; 
var _奉獻項鍊 = { "NAME": "奉獻項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "寶石-D級", "AMT": 2},{"NAME": "奉獻項鍊的鍊子", "AMT": 4},{"NAME": "研磨劑", "AMT": 3},{"NAME": "絞線", "AMT": 15},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _魔力項鍊 = { "NAME": "魔力項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 18},{"NAME": "寶石-D級", "AMT": 3},{"NAME": "魔力項鍊的鍊子", "AMT": 5},{"NAME": "研磨劑", "AMT": 3},{"NAME": "絞線", "AMT": 15},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _虎眼耳環 = { "NAME": "虎眼耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 22},{"NAME": "寶石-D級", "AMT": 4},{"NAME": "虎眼耳環的石頭", "AMT": 6},{"NAME": "研磨劑", "AMT": 6},{"NAME": "強化繩索", "AMT": 30},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _精靈耳環 = { "NAME": "精靈耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-D級", "AMT": 6},{"NAME": "精靈耳環的珠子", "AMT": 7},{"NAME": "研磨劑", "AMT": 12},{"NAME": "強化繩索", "AMT": 60},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _精靈戒指 = { "NAME": "精靈戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 20},{"NAME": "寶石-D級", "AMT": 4},{"NAME": "精靈戒指的組件", "AMT": 7},{"NAME": "研磨劑", "AMT": 6},{"NAME": "強化繩索", "AMT": 30},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _精靈項鍊 = { "NAME": "精靈項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 38},{"NAME": "寶石-D級", "AMT": 9},{"NAME": "精靈項鍊的珠子", "AMT": 7},{"NAME": "研磨劑", "AMT": 14},{"NAME": "絞線", "AMT": 70},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _瑪瑙獸眼耳環 = { "NAME": "瑪瑙獸眼耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-D級", "AMT": 8},{"NAME": "瑪瑙獸眼耳環的寶石", "AMT": 8},{"NAME": "研磨劑", "AMT": 18},{"NAME": "強化繩索", "AMT": 90},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _米索莉戒指 = { "NAME": "米索莉戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 25},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "米索莉戒指的金屬線", "AMT": 8},{"NAME": "研磨劑", "AMT": 10},{"NAME": "強化繩索", "AMT": 50},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _黑暗項鍊 = { "NAME": "黑暗項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 50},{"NAME": "寶石-D級", "AMT": 12},{"NAME": "黑暗項鍊的寶石", "AMT": 8},{"NAME": "研磨劑", "AMT": 18},{"NAME": "絞線", "AMT": 90},{"NAME": "銀鑄模", "AMT": 1}]}; 
var _月長石耳環 = { "NAME": "月長石耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "月長石耳環的金屬線", "AMT": 8},{"NAME": "純化的研磨劑", "AMT": 1},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 5}]}; 
var _水石戒指 = { "NAME": "水石戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 25},{"NAME": "寶石-C級", "AMT": 2},{"NAME": "水石戒指的金屬線", "AMT": 8},{"NAME": "銀鑄模", "AMT": 1},{"NAME": "純化的研磨劑", "AMT": 3},{"NAME": "金屬纖維", "AMT": 15}]}; 
var _水石項鍊 = { "NAME": "水石項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 65},{"NAME": "寶石-C級", "AMT": 5},{"NAME": "水石項鍊的鍊子", "AMT": 8},{"NAME": "純化的研磨劑", "AMT": 1},{"NAME": "合成的絞線", "AMT": 5},{"NAME": "鐵匠模具", "AMT": 1}]}; 
var _守護耳環 = { "NAME": "守護耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 14},{"NAME": "寶石-C級", "AMT": 5},{"NAME": "守護耳環的寶石", "AMT": 9},{"NAME": "純化的研磨劑", "AMT": 1},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 5}]}; 
var _守護戒指 = { "NAME": "守護戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 10},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "守護戒指的寶石", "AMT": 9},{"NAME": "銀鑄模", "AMT": 1},{"NAME": "純化的研磨劑", "AMT": 3},{"NAME": "金屬纖維", "AMT": 15}]}; 
var _守護項鍊 = { "NAME": "守護項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-C級", "AMT": 7},{"NAME": "守護項鍊的寶石", "AMT": 9},{"NAME": "純化的研磨劑", "AMT": 2},{"NAME": "合成的絞線", "AMT": 10},{"NAME": "鐵匠模具", "AMT": 1}]}; 
var _封印耳環 = { "NAME": "封印耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 22},{"NAME": "寶石-C級", "AMT": 8},{"NAME": "封印耳環的寶石", "AMT": 10},{"NAME": "純化的研磨劑", "AMT": 4},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 20}]}; 
var _永命戒指 = { "NAME": "永命戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 5},{"NAME": "永命戒指的寶石", "AMT": 10},{"NAME": "銀鑄模", "AMT": 1},{"NAME": "純化的研磨劑", "AMT": 6},{"NAME": "金屬纖維", "AMT": 30}]}; 
var _人魚之淚 = { "NAME": "人魚之淚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 26},{"NAME": "寶石-C級", "AMT": 11},{"NAME": "人魚之淚的淚珠", "AMT": 10},{"NAME": "純化的研磨劑", "AMT": 4},{"NAME": "合成的絞線", "AMT": 20},{"NAME": "鐵匠模具", "AMT": 1}]}; 
var _封印項鍊 = { "NAME": "封印項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 38},{"NAME": "寶石-C級", "AMT": 16},{"NAME": "封印項鍊的鍊子", "AMT": 11},{"NAME": "純化的研磨劑", "AMT": 7},{"NAME": "合成的絞線", "AMT": 35},{"NAME": "鐵匠模具", "AMT": 1}]}; 
var _娜仙耳環 = { "NAME": "娜仙耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 28},{"NAME": "寶石-C級", "AMT": 12},{"NAME": "娜仙耳環的寶石", "AMT": 11},{"NAME": "純化的研磨劑", "AMT": 9},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 45}]}; 
var _賢者戒指 = { "NAME": "賢者戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "賢者戒指的寶石", "AMT": 13},{"NAME": "製作卷軸((賢者戒指100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 18},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "純化的研磨劑", "AMT": 10},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 50},{"NAME": "梭芷", "AMT": 10}]}; 
var _賢者項鍊 = { "NAME": "賢者項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "賢者項鍊的鍊子", "AMT": 13},{"NAME": "製作卷軸(賢者項鍊100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 37},{"NAME": "寶石-B級", "AMT": 8},{"NAME": "純化的研磨劑", "AMT": 11},{"NAME": "合成的絞線", "AMT": 55},{"NAME": "梭芷", "AMT": 11},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _硬皮襯衫 = { "NAME": "硬皮襯衫", "QUANTITY": 1 , "DETAIL": [{"NAME": "硬皮襯衫的圖樣", "AMT": 3},{"NAME": "動物的皮", "AMT": 110},{"NAME": "線", "AMT": 55}]}; 
var _硬皮脛甲 = { "NAME": "硬皮脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "硬皮脛甲的材料", "AMT": 3},{"NAME": "動物的皮", "AMT": 55},{"NAME": "線", "AMT": 55}]}; 
var _長靴 = { "NAME": "長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "長靴的材料", "AMT": 3},{"NAME": "軟皮", "AMT": 5},{"NAME": "動物的皮", "AMT": 40}]}; 
var _皮靴 = { "NAME": "皮靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "寶石-D級", "AMT": 1},{"NAME": "皮靴的材料", "AMT": 4},{"NAME": "皮革", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1}]}; 
var _骨頭盔 = { "NAME": "骨頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "寶石-D級", "AMT": 2},{"NAME": "骨頭盔的組件", "AMT": 4},{"NAME": "皮革", "AMT": 15},{"NAME": "鐵鑄模", "AMT": 1}]}; 
var _黑暗長襪 = { "NAME": "黑暗長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 20},{"NAME": "寶石-D級", "AMT": 4},{"NAME": "黑暗長襪的布料", "AMT": 5},{"NAME": "皮革", "AMT": 20},{"NAME": "強化繩索", "AMT": 20}]}; 
var _高級皮手套 = { "NAME": "高級皮手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "寶石-D級", "AMT": 1},{"NAME": "高級皮手套的材料", "AMT": 4},{"NAME": "皮革", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1}]}; 
var _鱗甲 = { "NAME": "鱗甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-D級", "AMT": 9},{"NAME": "鱗甲的原料", "AMT": 5},{"NAME": "鐵", "AMT": 20},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _純白外衣 = { "NAME": "純白外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 28},{"NAME": "寶石-D級", "AMT": 7},{"NAME": "純白外衣的圖樣", "AMT": 5},{"NAME": "皮革", "AMT": 40},{"NAME": "強化繩索", "AMT": 20}]}; 
var _鱗脛甲 = { "NAME": "鱗脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 20},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "鱗脛甲的原料", "AMT": 5},{"NAME": "鐵", "AMT": 14},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _米索莉板甲 = { "NAME": "米索莉板甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 45},{"NAME": "寶石-D級", "AMT": 11},{"NAME": "米索莉板甲的原料", "AMT": 6},{"NAME": "鐵", "AMT": 25},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _米索莉板脛甲 = { "NAME": "米索莉板脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-D級", "AMT": 6},{"NAME": "米索莉板脛甲的原料", "AMT": 6},{"NAME": "鐵", "AMT": 14},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _鋼鐵靴 = { "NAME": "鋼鐵靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 16},{"NAME": "寶石-D級", "AMT": 3},{"NAME": "鋼鐵靴的組件", "AMT": 6},{"NAME": "皮革", "AMT": 16},{"NAME": "高級軟皮", "AMT": 2}]}; 
var _鎖子甲 = { "NAME": "鎖子甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 90},{"NAME": "寶石-D級", "AMT": 24},{"NAME": "鎖子甲的原料", "AMT": 7},{"NAME": "鐵", "AMT": 54},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _刺尾獅皮襯衫 = { "NAME": "刺尾獅皮襯衫", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 70},{"NAME": "寶石-D級", "AMT": 17},{"NAME": "刺尾獅皮襯衫的材料", "AMT": 7},{"NAME": "皮革", "AMT": 84},{"NAME": "強化繩索", "AMT": 42}]}; 
var _刺尾獅皮脛甲 = { "NAME": "刺尾獅皮脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 45},{"NAME": "寶石-D級", "AMT": 10},{"NAME": "刺尾獅皮脛甲的組件", "AMT": 7},{"NAME": "皮革", "AMT": 45},{"NAME": "強化繩索", "AMT": 45}]}; 
var _米索莉外衣 = { "NAME": "米索莉外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 70},{"NAME": "寶石-D級", "AMT": 17},{"NAME": "米索莉外衣的布料", "AMT": 7},{"NAME": "皮革", "AMT": 84},{"NAME": "強化繩索", "AMT": 42}]}; 
var _米索莉長襪 = { "NAME": "米索莉長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 45},{"NAME": "寶石-D級", "AMT": 10},{"NAME": "米索莉長襪的材料", "AMT": 7},{"NAME": "皮革", "AMT": 45},{"NAME": "強化繩索", "AMT": 45}]}; 
var _安魂長手套 = { "NAME": "安魂長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "安魂長手套的圖樣", "AMT": 7},{"NAME": "皮革", "AMT": 24},{"NAME": "高級軟皮", "AMT": 3}]}; 
var _鳶形盾 = { "NAME": "鳶形盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "鳶形盾的原料", "AMT": 7},{"NAME": "炭焦", "AMT": 4},{"NAME": "鐵", "AMT": 12},{"NAME": "皮革", "AMT": 4}]}; 
var _力量靴 = { "NAME": "力量靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "力量靴的圖樣", "AMT": 7},{"NAME": "皮革", "AMT": 24},{"NAME": "高級軟皮", "AMT": 3}]}; 
var _米索莉手套 = { "NAME": "米索莉手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-D級", "AMT": 6},{"NAME": "米索莉手套的組件", "AMT": 8},{"NAME": "皮革", "AMT": 32},{"NAME": "高級軟皮", "AMT": 4}]}; 
var _半身盔甲 = { "NAME": "半身盔甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 120},{"NAME": "寶石-D級", "AMT": 32},{"NAME": "半身盔甲的原料", "AMT": 8},{"NAME": "鐵", "AMT": 70},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _金屬脛甲 = { "NAME": "金屬脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 70},{"NAME": "寶石-D級", "AMT": 19},{"NAME": "金屬脛甲的原料", "AMT": 8},{"NAME": "鐵", "AMT": 45},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _火蜥蜴皮甲 = { "NAME": "火蜥蜴皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 130},{"NAME": "寶石-D級", "AMT": 36},{"NAME": "火蜥蜴皮甲的組件", "AMT": 8},{"NAME": "絞線", "AMT": 35},{"NAME": "皮革", "AMT": 140},{"NAME": "強化繩索", "AMT": 70}]}; 
var _賢者的破衣 = { "NAME": "賢者的破衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 130},{"NAME": "寶石-D級", "AMT": 36},{"NAME": "賢者破衣的材料", "AMT": 8},{"NAME": "絞線", "AMT": 35},{"NAME": "皮革", "AMT": 140},{"NAME": "強化繩索", "AMT": 70}]}; 
var _卡勒米安長襪 = { "NAME": "卡勒米安長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 70},{"NAME": "寶石-C級", "AMT": 6},{"NAME": "卡勒米安長襪的圖樣", "AMT": 8},{"NAME": "高級皮革", "AMT": 15},{"NAME": "金屬纖維", "AMT": 15}]}; 
var _鎖鏈頭盔 = { "NAME": "鎖鏈頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 45},{"NAME": "寶石-D級", "AMT": 10},{"NAME": "鎖鏈頭盔的組件", "AMT": 8},{"NAME": "皮革", "AMT": 60},{"NAME": "鐵鑄模", "AMT": 1}]}; 
var _方盾 = { "NAME": "方盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 32},{"NAME": "寶石-D級", "AMT": 7},{"NAME": "方盾的原料", "AMT": 8},{"NAME": "炭焦", "AMT": 5},{"NAME": "鐵", "AMT": 15},{"NAME": "皮革", "AMT": 5}]}; 
var _襲擊靴 = { "NAME": "襲擊靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-D級", "AMT": 6},{"NAME": "襲擊靴的原料", "AMT": 8},{"NAME": "皮革", "AMT": 32},{"NAME": "高級軟皮", "AMT": 4}]}; 
var _強化米索莉靴 = { "NAME": "強化米索莉靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-D級", "AMT": 9},{"NAME": "強化米索莉靴的組件", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _鏈甲衫 = { "NAME": "鏈甲衫", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 150},{"NAME": "寶石-C級", "AMT": 14},{"NAME": "鏈甲衫的原料", "AMT": 8},{"NAME": "米索莉合金", "AMT": 1},{"NAME": "鐵匠模具", "AMT": 3}]}; 
var _鏈脛甲 = { "NAME": "鏈脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 90},{"NAME": "寶石-C級", "AMT": 8},{"NAME": "鏈脛甲的原料", "AMT": 8},{"NAME": "米索莉合金", "AMT": 1},{"NAME": "鐵匠模具", "AMT": 2}]}; 
var _強化米索莉襯衫 = { "NAME": "強化米索莉襯衫", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 120},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "強化米索莉襯衫的布料", "AMT": 8},{"NAME": "高級皮革", "AMT": 24},{"NAME": "金屬纖維", "AMT": 12}]}; 
var _卡勒米安外衣 = { "NAME": "卡勒米安外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 120},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "卡勒米安外衣的圖樣", "AMT": 8},{"NAME": "高級皮革", "AMT": 24},{"NAME": "金屬纖維", "AMT": 12}]}; 
var _食人魔力量長手套 = { "NAME": "食人魔力量長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-D級", "AMT": 6},{"NAME": "食人魔力量長手套的原料", "AMT": 8},{"NAME": "皮革", "AMT": 32},{"NAME": "高級軟皮", "AMT": 4}]}; 
var _厄達拉克塔盾 = { "NAME": "厄達拉克塔盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "厄達拉克塔盾的原料", "AMT": 8},{"NAME": "合成的炭焦", "AMT": 1},{"NAME": "米索莉合金", "AMT": 3},{"NAME": "高級皮革", "AMT": 1}]}; 
var _金屬頭盔 = { "NAME": "金屬頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 14},{"NAME": "寶石-C級", "AMT": 5},{"NAME": "金屬頭盔的原料", "AMT": 9},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 3}]}; 
var _金屬皮甲 = { "NAME": "金屬皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 30},{"NAME": "寶石-C級", "AMT": 12},{"NAME": "金屬皮甲的原料", "AMT": 9},{"NAME": "高級皮革", "AMT": 30},{"NAME": "金屬纖維", "AMT": 15}]}; 
var _金屬皮脛甲 = { "NAME": "金屬皮脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 18},{"NAME": "寶石-C級", "AMT": 7},{"NAME": "金屬皮脛甲的原料", "AMT": 9},{"NAME": "高級皮革", "AMT": 18},{"NAME": "金屬纖維", "AMT": 18}]}; 
var _矮人鏈甲衫 = { "NAME": "矮人鏈甲衫", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 42},{"NAME": "寶石-C級", "AMT": 19},{"NAME": "矮人鏈甲衫的原料", "AMT": 9},{"NAME": "米索莉合金", "AMT": 5},{"NAME": "鐵匠模具", "AMT": 3}]}; 
var _矮人鏈脛甲 = { "NAME": "矮人鏈脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-C級", "AMT": 11},{"NAME": "矮人鏈脛甲的原料", "AMT": 9},{"NAME": "米索莉合金", "AMT": 3},{"NAME": "鐵匠模具", "AMT": 2}]}; 
var _封印長袍 = { "NAME": "封印長袍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 50},{"NAME": "寶石-C級", "AMT": 21},{"NAME": "封印長袍的布料", "AMT": 9},{"NAME": "合成的絞線", "AMT": 10},{"NAME": "高級皮革", "AMT": 40},{"NAME": "金屬纖維", "AMT": 20}]}; 
var _巨型頭盔 = { "NAME": "巨型頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-C級", "AMT": 6},{"NAME": "巨型頭盔的原料", "AMT": 9},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 6}]}; 
var _騎士盾 = { "NAME": "騎士盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "騎士盾的材料", "AMT": 9},{"NAME": "合成的炭焦", "AMT": 1},{"NAME": "米索莉合金", "AMT": 4},{"NAME": "高級皮革", "AMT": 1}]}; 
var _帕格立歐的手 = { "NAME": "帕格立歐的手", "QUANTITY": 1 , "DETAIL": [{"NAME": "帕格立歐之手的組件", "AMT": 9},{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 10}]}; 
var _緋紅靴 = { "NAME": "緋紅靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "緋紅靴的布料", "AMT": 9},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 10}]}; 
var _覆皮皮甲 = { "NAME": "覆皮皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 32},{"NAME": "寶石-C級", "AMT": 14},{"NAME": "覆皮皮甲的組件", "AMT": 9},{"NAME": "高級皮革", "AMT": 32},{"NAME": "金屬纖維", "AMT": 16}]}; 
var _覆皮脛甲 = { "NAME": "覆皮脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 20},{"NAME": "寶石-C級", "AMT": 8},{"NAME": "覆皮脛甲的材料", "AMT": 9},{"NAME": "高級皮革", "AMT": 20},{"NAME": "金屬纖維", "AMT": 20}]}; 
var _合金盔甲 = { "NAME": "合金盔甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 95},{"NAME": "寶石-C級", "AMT": 48},{"NAME": "合金盔甲的材料", "AMT": 10},{"NAME": "純化的研磨劑", "AMT": 7},{"NAME": "米索莉合金", "AMT": 21},{"NAME": "鐵匠模具", "AMT": 4}]}; 
var _塔盾 = { "NAME": "塔盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 17},{"NAME": "寶石-C級", "AMT": 7},{"NAME": "塔盾的材料", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 2},{"NAME": "米索莉合金", "AMT": 6},{"NAME": "高級皮革", "AMT": 2}]}; 
var _惡魔外衣 = { "NAME": "惡魔外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 50},{"NAME": "寶石-C級", "AMT": 22},{"NAME": "惡魔外衣的布料", "AMT": 10},{"NAME": "高級皮革", "AMT": 48},{"NAME": "金屬纖維", "AMT": 24}]}; 
var _惡魔長襪 = { "NAME": "惡魔長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 30},{"NAME": "寶石-C級", "AMT": 13},{"NAME": "惡魔長襪的圖樣", "AMT": 10},{"NAME": "高級皮革", "AMT": 30},{"NAME": "金屬纖維", "AMT": 30}]}; 
var _米索莉長手套 = { "NAME": "米索莉長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-C級", "AMT": 6},{"NAME": "米索莉長手套的組件", "AMT": 10},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16}]}; 
var _被遺忘的靴 = { "NAME": "被遺忘的靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "被遺忘的靴的圖樣", "AMT": 10},{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-C級", "AMT": 6},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16}]}; 
var _閃耀頭箍 = { "NAME": "閃耀頭箍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "閃耀頭箍的圖樣", "AMT": 10},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 14}]}; 
var _覆殼皮甲 = { "NAME": "覆殼皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 55},{"NAME": "寶石-C級", "AMT": 25},{"NAME": "覆殼皮甲的圖樣", "AMT": 10},{"NAME": "高級皮革", "AMT": 54},{"NAME": "金屬纖維", "AMT": 27}]}; 
var _覆殼脛甲 = { "NAME": "覆殼脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 35},{"NAME": "寶石-C級", "AMT": 15},{"NAME": "覆殼脛甲的材料", "AMT": 10},{"NAME": "高級皮革", "AMT": 32},{"NAME": "金屬纖維", "AMT": 32}]}; 
var _全身盔甲 = { "NAME": "全身盔甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 140},{"NAME": "寶石-C級", "AMT": 73},{"NAME": "全身盔甲的原料", "AMT": 11},{"NAME": "純化的研磨劑", "AMT": 12},{"NAME": "米索莉合金", "AMT": 36},{"NAME": "鐵匠模具", "AMT": 4}]}; 
var _飛龍皮甲 = { "NAME": "飛龍皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 100},{"NAME": "寶石-C級", "AMT": 53},{"NAME": "飛龍皮甲的材料", "AMT": 11},{"NAME": "合成的絞線", "AMT": 24},{"NAME": "高級皮革", "AMT": 96},{"NAME": "金屬纖維", "AMT": 48}]}; 
var _神聖外衣 = { "NAME": "神聖外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 72},{"NAME": "寶石-C級", "AMT": 34},{"NAME": "神聖外衣的布料", "AMT": 11},{"NAME": "高級皮革", "AMT": 70},{"NAME": "金屬纖維", "AMT": 35}]}; 
var _神聖長襪 = { "NAME": "神聖長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 45},{"NAME": "寶石-C級", "AMT": 20},{"NAME": "神聖長襪的圖樣", "AMT": 11},{"NAME": "高級皮革", "AMT": 42},{"NAME": "金屬纖維", "AMT": 42}]}; 
var _米索莉頭盔 = { "NAME": "米索莉頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "米索莉頭盔的圖樣", "AMT": 11},{"NAME": "結晶-C級", "AMT": 36},{"NAME": "寶石-C級", "AMT": 15},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 26}]}; 
var _死靈長手套 = { "NAME": "死靈長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "死靈長手套的圖樣", "AMT": 11},{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _金剛石靴 = { "NAME": "金剛石靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "金剛石靴的組件", "AMT": 11},{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _骨箭 = { "NAME": "骨箭", "QUANTITY": 650 , "DETAIL": [{"NAME": "樹枝", "AMT": 1},{"NAME": "顆粒狀的骨粉", "AMT": 1}]}; 
var _鐵箭 = { "NAME": "鐵箭", "QUANTITY": 600 , "DETAIL": [{"NAME": "樹枝", "AMT": 4},{"NAME": "鐵", "AMT": 1}]}; 
var _鋼鎚 = { "NAME": "鋼鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "鋼鎚的金屬塊", "AMT": 3},{"NAME": "軟皮", "AMT": 130},{"NAME": "鋼鐵礦", "AMT": 260},{"NAME": "煤礦", "AMT": 260}]}; 
var _碎劍者 = { "NAME": "碎劍者", "QUANTITY": 1 , "DETAIL": [{"NAME": "碎劍者的劍身", "AMT": 3},{"NAME": "鋼鐵礦", "AMT": 365},{"NAME": "煤礦", "AMT": 365}]}; 
var _合金弓 = { "NAME": "合金弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "合金弓的柄", "AMT": 3},{"NAME": "軟皮", "AMT": 80},{"NAME": "鋼鐵礦", "AMT": 400},{"NAME": "絞線", "AMT": 80}]}; 
var _軍刀 = { "NAME": "軍刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "寶石-D級", "AMT": 34},{"NAME": "軍刀的刀身", "AMT": 4},{"NAME": "炭焦", "AMT": 70},{"NAME": "鐵", "AMT": 70},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _刺客刀 = { "NAME": "刺客刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "寶石-D級", "AMT": 34},{"NAME": "刺客刀的刀身", "AMT": 4},{"NAME": "炭焦", "AMT": 70},{"NAME": "鐵", "AMT": 70},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _三叉戟 = { "NAME": "三叉戟", "QUANTITY": 1 , "DETAIL": [{"NAME": "寶石-D級", "AMT": 34},{"NAME": "三叉戟的刀身", "AMT": 4},{"NAME": "炭焦", "AMT": 40},{"NAME": "鐵", "AMT": 80},{"NAME": "高級軟皮", "AMT": 20}]}; 
var _深淵誘惑 = { "NAME": "深淵誘惑", "QUANTITY": 1 , "DETAIL": [{"NAME": "寶石-D級", "AMT": 34},{"NAME": "深淵誘惑組件", "AMT": 4},{"NAME": "絞線", "AMT": 30},{"NAME": "鐵", "AMT": 30},{"NAME": "顆粒狀的骨粉", "AMT": 60}]}; 
var _椎骨之劍 = { "NAME": "椎骨之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 200},{"NAME": "寶石-D級", "AMT": 57},{"NAME": "椎骨之劍的劍身", "AMT": 5},{"NAME": "炭焦", "AMT": 75},{"NAME": "鐵", "AMT": 75},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _審判之鎚 = { "NAME": "審判之鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 200},{"NAME": "寶石-D級", "AMT": 57},{"NAME": "審判之鎚的刀身", "AMT": 5},{"NAME": "炭焦", "AMT": 60},{"NAME": "鐵", "AMT": 60},{"NAME": "高級軟皮", "AMT": 30}]}; 
var _法咒魔杖 = { "NAME": "法咒魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 200},{"NAME": "寶石-D級", "AMT": 57},{"NAME": "法咒魔杖的金屬塊", "AMT": 5},{"NAME": "絞線", "AMT": 45},{"NAME": "鐵", "AMT": 45},{"NAME": "顆粒狀的骨粉", "AMT": 90}]}; 
var _精靈弓 = { "NAME": "精靈弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 200},{"NAME": "寶石-D級", "AMT": 57},{"NAME": "精靈弓的柄", "AMT": 5},{"NAME": "絞線", "AMT": 20},{"NAME": "鐵", "AMT": 100},{"NAME": "高級軟皮", "AMT": 20}]}; 
var _矮人三叉戟 = { "NAME": "矮人三叉戟", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 200},{"NAME": "寶石-D級", "AMT": 57},{"NAME": "矮人三叉戟的刀身", "AMT": 5},{"NAME": "炭焦", "AMT": 40},{"NAME": "鐵", "AMT": 80},{"NAME": "高級軟皮", "AMT": 20}]}; 
var _雙手劍 = { "NAME": "雙手劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 300},{"NAME": "寶石-D級", "AMT": 91},{"NAME": "雙手劍的劍身", "AMT": 6},{"NAME": "炭焦", "AMT": 72},{"NAME": "鐵", "AMT": 144},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _狼牙棒 = { "NAME": "狼牙棒", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 300},{"NAME": "寶石-D級", "AMT": 91},{"NAME": "狼牙棒的金屬塊", "AMT": 6},{"NAME": "炭焦", "AMT": 90},{"NAME": "鐵", "AMT": 90},{"NAME": "高級軟皮", "AMT": 45}]}; 
var _森林神之刀 = { "NAME": "森林神之刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 300},{"NAME": "寶石-D級", "AMT": 91},{"NAME": "森林神之刀的刀身", "AMT": 6},{"NAME": "炭焦", "AMT": 118},{"NAME": "鐵", "AMT": 118},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _腰弩 = { "NAME": "腰弩", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 300},{"NAME": "寶石-D級", "AMT": 91},{"NAME": "腰弩的柄", "AMT": 6},{"NAME": "絞線", "AMT": 30},{"NAME": "鐵", "AMT": 150},{"NAME": "高級軟皮", "AMT": 30}]}; 
var _染血卷冊 = { "NAME": "染血卷冊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 300},{"NAME": "寶石-D級", "AMT": 91},{"NAME": "染血卷冊組件", "AMT": 6},{"NAME": "絞線", "AMT": 70},{"NAME": "鐵", "AMT": 70},{"NAME": "顆粒狀的骨粉", "AMT": 140}]}; 
var _流星鎚 = { "NAME": "流星鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "流星鎚的金屬塊", "AMT": 7},{"NAME": "炭焦", "AMT": 128},{"NAME": "鐵", "AMT": 128},{"NAME": "高級軟皮", "AMT": 64}]}; 
var _山羊頭之杖 = { "NAME": "山羊頭之杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "山羊頭之杖的金屬塊", "AMT": 7},{"NAME": "絞線", "AMT": 100},{"NAME": "鐵", "AMT": 100},{"NAME": "顆粒狀的骨粉", "AMT": 200}]}; 
var _翼之矛 = { "NAME": "翼之矛", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "翼之矛的刀身", "AMT": 7},{"NAME": "炭焦", "AMT": 90},{"NAME": "鐵", "AMT": 180},{"NAME": "高級軟皮", "AMT": 45}]}; 
var _革命劍 = { "NAME": "革命劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "革命劍的劍身", "AMT": 7},{"NAME": "炭焦", "AMT": 175},{"NAME": "鐵", "AMT": 175},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _塔巴曲刃斧 = { "NAME": "塔巴曲刃斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "塔巴曲刃斧的金屬塊", "AMT": 7},{"NAME": "炭焦", "AMT": 128},{"NAME": "鐵", "AMT": 128},{"NAME": "高級軟皮", "AMT": 64}]}; 
var _頭顱破壞者 = { "NAME": "頭顱破壞者", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "頭顱破壞者的金屬塊", "AMT": 7},{"NAME": "炭焦", "AMT": 128},{"NAME": "鐵", "AMT": 128},{"NAME": "高級軟皮", "AMT": 64}]}; 
var _巨大骨棒 = { "NAME": "巨大骨棒", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "巨大骨棒的金屬塊", "AMT": 7},{"NAME": "炭焦", "AMT": 128},{"NAME": "鐵", "AMT": 128},{"NAME": "高級軟皮", "AMT": 64}]}; 
var _突刺刀 = { "NAME": "突刺刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "突刺刀的刀緣", "AMT": 7},{"NAME": "炭焦", "AMT": 175},{"NAME": "鐵", "AMT": 175},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _拳套刀 = { "NAME": "拳套刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "拳套刀的刀緣", "AMT": 7},{"NAME": "炭焦", "AMT": 128},{"NAME": "鐵", "AMT": 128},{"NAME": "高級軟皮", "AMT": 64}]}; 
var _強化長弓 = { "NAME": "強化長弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 300},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "強化長弓的柄", "AMT": 7},{"NAME": "絞線", "AMT": 45},{"NAME": "鐵", "AMT": 225},{"NAME": "高級軟皮", "AMT": 45}]}; 
var _火鎚 = { "NAME": "火鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "火鎚的金屬塊", "AMT": 7},{"NAME": "炭焦", "AMT": 90},{"NAME": "鐵", "AMT": 180},{"NAME": "高級軟皮", "AMT": 45}]}; 
var _染血十字架 = { "NAME": "染血十字架", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "染血十字架的組件", "AMT": 7},{"NAME": "絞線", "AMT": 100},{"NAME": "鐵", "AMT": 100},{"NAME": "顆粒狀的骨粉", "AMT": 200}]}; 
var _無界之眼 = { "NAME": "無界之眼", "QUANTITY": 1 , "DETAIL": [{"NAME": "無界之眼的石塊", "AMT": 7},{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "絞線", "AMT": 100},{"NAME": "鐵", "AMT": 100},{"NAME": "顆粒狀的骨粉", "AMT": 200}]}; 
var _受詛咒的突刺刀 = { "NAME": "受詛咒的突刺刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "受詛咒的突刺刀刀緣", "AMT": 7},{"NAME": "炭焦", "AMT": 175},{"NAME": "鐵", "AMT": 175},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _藍色水晶骷髏 = { "NAME": "藍色水晶骷髏", "QUANTITY": 1 , "DETAIL": [{"NAME": "藍色水晶骷髏的頭骨", "AMT": 7},{"NAME": "結晶-D級", "AMT": 470},{"NAME": "寶石-D級", "AMT": 153},{"NAME": "絞線", "AMT": 110},{"NAME": "鐵", "AMT": 110},{"NAME": "顆粒狀的骨粉", "AMT": 220}]}; 
var _惡魔尖牙 = { "NAME": "惡魔尖牙", "QUANTITY": 1 , "DETAIL": [{"NAME": "惡魔尖牙的尖端", "AMT": 7},{"NAME": "結晶-D級", "AMT": 470},{"NAME": "寶石-D級", "AMT": 153},{"NAME": "絞線", "AMT": 110},{"NAME": "鐵", "AMT": 110},{"NAME": "顆粒狀的骨粉", "AMT": 220}]}; 
var _雙刃大砍刀 = { "NAME": "雙刃大砍刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "雙刃大砍刀的刀身", "AMT": 8},{"NAME": "炭焦", "AMT": 135},{"NAME": "鐵", "AMT": 270},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _碎骨者 = { "NAME": "碎骨者", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "碎骨者的金屬塊", "AMT": 8},{"NAME": "炭焦", "AMT": 160},{"NAME": "鐵", "AMT": 160},{"NAME": "高級軟皮", "AMT": 80}]}; 
var _阿吐巴鎚 = { "NAME": "阿吐巴鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "阿吐巴鎚的金屬塊", "AMT": 8},{"NAME": "炭焦", "AMT": 110},{"NAME": "鐵", "AMT": 220},{"NAME": "高級軟皮", "AMT": 55}]}; 
var _魂靈魔杖 = { "NAME": "魂靈魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "魂靈魔杖的金屬塊", "AMT": 8},{"NAME": "絞線", "AMT": 130},{"NAME": "鐵", "AMT": 130},{"NAME": "顆粒狀的骨粉", "AMT": 260}]}; 
var _生命手杖 = { "NAME": "生命手杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "生命手杖的柄", "AMT": 8},{"NAME": "絞線", "AMT": 130},{"NAME": "鐵", "AMT": 130},{"NAME": "顆粒狀的骨粉", "AMT": 260}]}; 
var _米索莉匕首 = { "NAME": "米索莉匕首", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "米索莉匕首的刀身", "AMT": 8},{"NAME": "炭焦", "AMT": 220},{"NAME": "鐵", "AMT": 220},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _波浪刀 = { "NAME": "波浪刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "波浪刀的刀緣", "AMT": 8},{"NAME": "炭焦", "AMT": 160},{"NAME": "鐵", "AMT": 160},{"NAME": "高級軟皮", "AMT": 80}]}; 
var _風暴弓 = { "NAME": "風暴弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "風暴弓的柄", "AMT": 8},{"NAME": "絞線", "AMT": 55},{"NAME": "鐵", "AMT": 275},{"NAME": "高級軟皮", "AMT": 55}]}; 
var _闊矛 = { "NAME": "闊矛", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "闊矛的刀身", "AMT": 8},{"NAME": "炭焦", "AMT": 110},{"NAME": "鐵", "AMT": 220},{"NAME": "高級軟皮", "AMT": 55}]}; 
var _金剛杵 = { "NAME": "金剛杵", "QUANTITY": 1 , "DETAIL": [{"NAME": "金剛杵的模具", "AMT": 8},{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "絞線", "AMT": 130},{"NAME": "鐵", "AMT": 130},{"NAME": "顆粒狀的骨粉", "AMT": 260}]}; 
var _阿吐巴釘鎚 = { "NAME": "阿吐巴釘鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "阿吐巴釘鎚的金屬塊", "AMT": 8},{"NAME": "炭焦", "AMT": 110},{"NAME": "鐵", "AMT": 220},{"NAME": "高級軟皮", "AMT": 55}]}; 
var _焰形劍 = { "NAME": "焰形劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "焰形劍的劍身", "AMT": 8},{"NAME": "合成的炭焦", "AMT": 12},{"NAME": "米索莉合金", "AMT": 24},{"NAME": "工匠模具", "AMT": 3},{"NAME": "金屬強化劑", "AMT": 48}]}; 
var _暴風之劍 = { "NAME": "暴風之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "暴風之劍的劍身", "AMT": 8},{"NAME": "合成的炭焦", "AMT": 25},{"NAME": "米索莉合金", "AMT": 25},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _重鎚 = { "NAME": "重鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "重鎚的金屬塊", "AMT": 8},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "合成的炭焦", "AMT": 30},{"NAME": "米索莉合金", "AMT": 30},{"NAME": "金屬強化劑", "AMT": 60}]}; 
var _大鐮刀 = { "NAME": "大鐮刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "大鐮刀的刀緣", "AMT": 8},{"NAME": "高級軟皮", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 20},{"NAME": "米索莉合金", "AMT": 40},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _戰斧 = { "NAME": "戰斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "戰斧的金屬塊", "AMT": 8},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "合成的炭焦", "AMT": 30},{"NAME": "米索莉合金", "AMT": 30},{"NAME": "金屬強化劑", "AMT": 60}]}; 
var _戰錐 = { "NAME": "戰錐", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "戰錐的金屬塊", "AMT": 8},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "合成的炭焦", "AMT": 30},{"NAME": "米索莉合金", "AMT": 30},{"NAME": "金屬強化劑", "AMT": 60}]}; 
var _顱骨雕刻者 = { "NAME": "顱骨雕刻者", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "顱骨雕刻者的金屬塊", "AMT": 8},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "合成的炭焦", "AMT": 30},{"NAME": "米索莉合金", "AMT": 30},{"NAME": "金屬強化劑", "AMT": 60}]}; 
var _巨大末日鎚 = { "NAME": "巨大末日鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "巨大末日鎚的金屬塊", "AMT": 8},{"NAME": "高級軟皮", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 20},{"NAME": "米索莉合金", "AMT": 40},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _水晶魔杖 = { "NAME": "水晶魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "水晶魔杖的金屬塊", "AMT": 8},{"NAME": "顆粒狀的骨粉", "AMT": 40},{"NAME": "合成的絞線", "AMT": 20},{"NAME": "奧里哈魯根", "AMT": 20},{"NAME": "金屬強化劑", "AMT": 60}]}; 
var _信仰手杖 = { "NAME": "信仰手杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "信仰手杖的柄", "AMT": 8},{"NAME": "顆粒狀的骨粉", "AMT": 40},{"NAME": "合成的絞線", "AMT": 20},{"NAME": "奧里哈魯根", "AMT": 20},{"NAME": "金屬強化劑", "AMT": 60}]}; 
var _巨大末日斧 = { "NAME": "巨大末日斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "巨大末日斧的刀身", "AMT": 8},{"NAME": "高級軟皮", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 20},{"NAME": "米索莉合金", "AMT": 40},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _受詛咒的匕首 = { "NAME": "受詛咒的匕首", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "受詛咒匕首的刀身", "AMT": 8},{"NAME": "合成的炭焦", "AMT": 25},{"NAME": "米索莉合金", "AMT": 25},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _狼之針 = { "NAME": "狼之針", "QUANTITY": 1 , "DETAIL": [{"NAME": "狼之針的刀緣", "AMT": 8},{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "合成的炭焦", "AMT": 25},{"NAME": "米索莉合金", "AMT": 25},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _黑暗精靈匕首 = { "NAME": "黑暗精靈匕首", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "黑暗精靈匕首的刀緣", "AMT": 8},{"NAME": "合成的炭焦", "AMT": 25},{"NAME": "米索莉合金", "AMT": 25},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _圓月輪 = { "NAME": "圓月輪", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "圓月輪的刀緣", "AMT": 8},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "合成的炭焦", "AMT": 30},{"NAME": "米索莉合金", "AMT": 30},{"NAME": "金屬強化劑", "AMT": 60}]}; 
var _冰晶弓 = { "NAME": "冰晶弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "冰晶弓的柄", "AMT": 8},{"NAME": "高級軟皮", "AMT": 9},{"NAME": "合成的絞線", "AMT": 9},{"NAME": "米索莉合金", "AMT": 45},{"NAME": "金屬強化劑", "AMT": 54}]}; 
var _歐西斯闊矛 = { "NAME": "歐西斯闊矛", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "歐西斯闊矛的刀身", "AMT": 8},{"NAME": "高級軟皮", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 20},{"NAME": "米索莉合金", "AMT": 40},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _殺戮者 = { "NAME": "殺戮者", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 700},{"NAME": "寶石-C級", "AMT": 81},{"NAME": "殺戮者的刀身", "AMT": 8},{"NAME": "高級軟皮", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 20},{"NAME": "米索莉合金", "AMT": 40},{"NAME": "金屬強化劑", "AMT": 50}]}; 
var _彎刀 = { "NAME": "彎刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "彎刀的刀身", "AMT": 9},{"NAME": "合成的炭焦", "AMT": 33},{"NAME": "米索莉合金", "AMT": 33},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 66}]}; 
var _武士刀 = { "NAME": "武士刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "武士刀的刀身", "AMT": 9},{"NAME": "合成的炭焦", "AMT": 33},{"NAME": "米索莉合金", "AMT": 33},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 66}]}; 
var _貝卡合金 = { "NAME": "貝卡合金", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 170},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "貝卡合金的刀身", "AMT": 9},{"NAME": "高級軟皮", "AMT": 13},{"NAME": "合成的炭焦", "AMT": 26},{"NAME": "米索莉合金", "AMT": 52},{"NAME": "金屬強化劑", "AMT": 65}]}; 
var _靈魂之劍 = { "NAME": "靈魂之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "靈魂之劍的劍身", "AMT": 9},{"NAME": "合成的炭焦", "AMT": 33},{"NAME": "米索莉合金", "AMT": 33},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 66}]}; 
var _襲擊劍 = { "NAME": "襲擊劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "襲擊劍的劍身", "AMT": 9},{"NAME": "合成的炭焦", "AMT": 33},{"NAME": "米索莉合金", "AMT": 33},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 66}]}; 
var _受詛咒的魔杖 = { "NAME": "受詛咒的魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "受詛咒魔杖的金屬塊", "AMT": 9},{"NAME": "顆粒狀的骨粉", "AMT": 52},{"NAME": "合成的絞線", "AMT": 26},{"NAME": "奧里哈魯根", "AMT": 26},{"NAME": "金屬強化劑", "AMT": 78}]}; 
var _袖珍刀 = { "NAME": "袖珍刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "袖珍刀的刀身", "AMT": 9},{"NAME": "合成的炭焦", "AMT": 33},{"NAME": "米索莉合金", "AMT": 33},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 66}]}; 
var _魔炎匕首 = { "NAME": "魔炎匕首", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "魔炎匕首的刀身", "AMT": 9},{"NAME": "合成的炭焦", "AMT": 33},{"NAME": "米索莉合金", "AMT": 33},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 66}]}; 
var _元素弓 = { "NAME": "元素弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 170},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "元素弓的柄", "AMT": 9},{"NAME": "高級軟皮", "AMT": 12},{"NAME": "合成的絞線", "AMT": 12},{"NAME": "米索莉合金", "AMT": 60},{"NAME": "金屬強化劑", "AMT": 72}]}; 
var _高級精靈弓 = { "NAME": "高級精靈弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 170},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "高級精靈弓的金屬塊", "AMT": 9},{"NAME": "高級軟皮", "AMT": 12},{"NAME": "合成的絞線", "AMT": 12},{"NAME": "米索莉合金", "AMT": 60},{"NAME": "金屬強化劑", "AMT": 72}]}; 
var _榮譽號角 = { "NAME": "榮譽號角", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "榮譽號角的碎片", "AMT": 9},{"NAME": "顆粒狀的骨粉", "AMT": 52},{"NAME": "合成的絞線", "AMT": 26},{"NAME": "奧里哈魯根", "AMT": 26},{"NAME": "金屬強化劑", "AMT": 78}]}; 
var _卡里埔士劍 = { "NAME": "卡里埔士劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "卡里埔士劍的劍身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _迷惑之劍 = { "NAME": "迷惑之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "迷惑之劍的劍身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _大和劍 = { "NAME": "大和劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "大和劍的劍身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _何門奎思之劍 = { "NAME": "何門奎思之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "何門奎思之劍的劍身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _長柄戰斧 = { "NAME": "長柄戰斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "長柄戰斧的刀身", "AMT": 10},{"NAME": "高級軟皮", "AMT": 18},{"NAME": "合成的炭焦", "AMT": 36},{"NAME": "米索莉合金", "AMT": 72},{"NAME": "金屬強化劑", "AMT": 90}]}; 
var _極限之劍 = { "NAME": "極限之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "極限之劍的劍身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _夢魘劍 = { "NAME": "夢魘劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "夢魘劍的劍身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _死息之劍 = { "NAME": "死息之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "死息之劍的劍身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _巨戰斧 = { "NAME": "巨戰斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "巨戰斧的刀身", "AMT": 10},{"NAME": "高級軟皮", "AMT": 27},{"NAME": "合成的炭焦", "AMT": 54},{"NAME": "米索莉合金", "AMT": 54},{"NAME": "金屬強化劑", "AMT": 108}]}; 
var _夢想斧 = { "NAME": "夢想斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "夢想斧的刀身", "AMT": 10},{"NAME": "高級軟皮", "AMT": 27},{"NAME": "合成的炭焦", "AMT": 54},{"NAME": "米索莉合金", "AMT": 54},{"NAME": "金屬強化劑", "AMT": 108}]}; 
var _永恆手杖 = { "NAME": "永恆手杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "永恆手杖的金屬塊", "AMT": 10},{"NAME": "顆粒狀的骨粉", "AMT": 74},{"NAME": "合成的絞線", "AMT": 37},{"NAME": "奧里哈魯根", "AMT": 37},{"NAME": "金屬強化劑", "AMT": 111}]}; 
var _佩勒迪亞魔杖 = { "NAME": "佩勒迪亞魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "佩勒迪亞魔杖的金屬塊", "AMT": 10},{"NAME": "顆粒狀的骨粉", "AMT": 74},{"NAME": "合成的絞線", "AMT": 37},{"NAME": "奧里哈魯根", "AMT": 37},{"NAME": "金屬強化劑", "AMT": 111}]}; 
var _地獄魔杖 = { "NAME": "地獄魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "地獄魔杖的金屬塊", "AMT": 10},{"NAME": "顆粒狀的骨粉", "AMT": 74},{"NAME": "合成的絞線", "AMT": 37},{"NAME": "奧里哈魯根", "AMT": 37},{"NAME": "金屬強化劑", "AMT": 111}]}; 
var _帕格立歐之鎚 = { "NAME": "帕格立歐之鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "帕格立歐之鎚的金屬塊", "AMT": 10},{"NAME": "高級軟皮", "AMT": 18},{"NAME": "合成的炭焦", "AMT": 36},{"NAME": "米索莉合金", "AMT": 72},{"NAME": "金屬強化劑", "AMT": 90}]}; 
var _賢者魔杖 = { "NAME": "賢者魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "賢者魔杖的金屬塊", "AMT": 10},{"NAME": "顆粒狀的骨粉", "AMT": 74},{"NAME": "合成的絞線", "AMT": 37},{"NAME": "奧里哈魯根", "AMT": 37},{"NAME": "金屬強化劑", "AMT": 111}]}; 
var _自然之棍 = { "NAME": "自然之棍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "自然之棍的金屬塊", "AMT": 10},{"NAME": "顆粒狀的骨粉", "AMT": 74},{"NAME": "合成的絞線", "AMT": 37},{"NAME": "奧里哈魯根", "AMT": 37},{"NAME": "金屬強化劑", "AMT": 111}]}; 
var _底獄之鎚 = { "NAME": "底獄之鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "底獄之鎚的金屬塊", "AMT": 10},{"NAME": "高級軟皮", "AMT": 27},{"NAME": "合成的炭焦", "AMT": 54},{"NAME": "米索莉合金", "AMT": 54},{"NAME": "金屬強化劑", "AMT": 108}]}; 
var _優雅匕首 = { "NAME": "優雅匕首", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "優雅匕首的刀身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _黑暗狂嘯者 = { "NAME": "黑暗狂嘯者", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "黑暗狂嘯者的刀身", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 50},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _拳刃 = { "NAME": "拳刃", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 300},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "拳刃的刀身", "AMT": 10},{"NAME": "高級軟皮", "AMT": 27},{"NAME": "合成的炭焦", "AMT": 54},{"NAME": "米索莉合金", "AMT": 54},{"NAME": "金屬強化劑", "AMT": 108}]}; 
var _阿卡特長弓 = { "NAME": "阿卡特長弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 290},{"NAME": "寶石-C級", "AMT": 166},{"NAME": "阿卡特長弓的柄", "AMT": 10},{"NAME": "高級軟皮", "AMT": 17},{"NAME": "合成的絞線", "AMT": 17},{"NAME": "米索莉合金", "AMT": 85},{"NAME": "金屬強化劑", "AMT": 102}]}; 
var _帕格立歐之斧 = { "NAME": "帕格立歐之斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 330},{"NAME": "寶石-C級", "AMT": 187},{"NAME": "帕格立歐之斧的刀身", "AMT": 10},{"NAME": "高級軟皮", "AMT": 20},{"NAME": "合成的炭焦", "AMT": 40},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _蠍子 = { "NAME": "蠍子", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 330},{"NAME": "寶石-C級", "AMT": 187},{"NAME": "蠍子的刀身", "AMT": 10},{"NAME": "高級軟皮", "AMT": 20},{"NAME": "合成的炭焦", "AMT": 40},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _黑寡婦 = { "NAME": "黑寡婦", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 330},{"NAME": "寶石-C級", "AMT": 187},{"NAME": "黑寡婦的金屬塊", "AMT": 10},{"NAME": "高級軟皮", "AMT": 20},{"NAME": "合成的炭焦", "AMT": 40},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "金屬強化劑", "AMT": 100}]}; 
var _瑟魯基長劍 = { "NAME": "瑟魯基長劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 410},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "瑟魯基長劍的劍身", "AMT": 11},{"NAME": "合成的炭焦", "AMT": 41},{"NAME": "米索莉合金", "AMT": 82},{"NAME": "工匠模具", "AMT": 3},{"NAME": "金屬強化劑", "AMT": 164}]}; 
var _亡者魔杖 = { "NAME": "亡者魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 410},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "亡者魔杖的金屬塊", "AMT": 11},{"NAME": "顆粒狀的骨粉", "AMT": 108},{"NAME": "合成的絞線", "AMT": 54},{"NAME": "奧里哈魯根", "AMT": 54},{"NAME": "金屬強化劑", "AMT": 162}]}; 
var _食屍鬼魔杖 = { "NAME": "食屍鬼魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 410},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "食屍鬼魔杖的金屬塊", "AMT": 11},{"NAME": "顆粒狀的骨粉", "AMT": 108},{"NAME": "合成的絞線", "AMT": 54},{"NAME": "奧里哈魯根", "AMT": 54},{"NAME": "金屬強化劑", "AMT": 162}]}; 
var _惡魔魔杖 = { "NAME": "惡魔魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 410},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "惡魔魔杖的金屬塊", "AMT": 11},{"NAME": "顆粒狀的骨粉", "AMT": 108},{"NAME": "合成的絞線", "AMT": 54},{"NAME": "奧里哈魯根", "AMT": 54},{"NAME": "金屬強化劑", "AMT": 162}]}; 
var _水晶匕首 = { "NAME": "水晶匕首", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 410},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "水晶匕首的刀身", "AMT": 11},{"NAME": "合成的炭焦", "AMT": 76},{"NAME": "米索莉合金", "AMT": 76},{"NAME": "工匠模具", "AMT": 2},{"NAME": "金屬強化劑", "AMT": 152}]}; 
var _巨型帕塔拳刃 = { "NAME": "巨型帕塔拳刃", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 410},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "巨型帕塔拳刃的刀身", "AMT": 11},{"NAME": "高級軟皮", "AMT": 40},{"NAME": "合成的炭焦", "AMT": 80},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "金屬強化劑", "AMT": 160}]}; 
var _卓越弓 = { "NAME": "卓越弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 420},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "卓越弓的柄", "AMT": 11},{"NAME": "高級軟皮", "AMT": 24},{"NAME": "合成的絞線", "AMT": 24},{"NAME": "米索莉合金", "AMT": 120},{"NAME": "金屬強化劑", "AMT": 144}]}; 
var _歐西斯戰斧 = { "NAME": "歐西斯戰斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 420},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "歐西斯戰斧的刀身", "AMT": 11},{"NAME": "高級軟皮", "AMT": 26},{"NAME": "合成的炭焦", "AMT": 52},{"NAME": "米索莉合金", "AMT": 104},{"NAME": "金屬強化劑", "AMT": 130}]}; 
var _封印戒指 = { "NAME": "封印戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 20},{"NAME": "寶石-C級", "AMT": 7},{"NAME": "封印戒指的寶石", "AMT": 11},{"NAME": "銀鑄模", "AMT": 1},{"NAME": "純化的研磨劑", "AMT": 8},{"NAME": "金屬纖維", "AMT": 40}]}; 
var _米索莉鱗脛甲 = { "NAME": "米索莉鱗脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 60},{"NAME": "寶石-D級", "AMT": 14},{"NAME": "米索莉鱗脛甲材料", "AMT": 7},{"NAME": "鐵", "AMT": 32},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _鎖脛甲 = { "NAME": "鎖脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 60},{"NAME": "寶石-D級", "AMT": 14},{"NAME": "鎖脛甲材料", "AMT": 7},{"NAME": "鐵", "AMT": 32},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _精靈米索莉外衣 = { "NAME": "精靈米索莉外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "精靈米索莉外衣的圖樣", "AMT": 7},{"NAME": "結晶-D級", "AMT": 70},{"NAME": "寶石-D級", "AMT": 17},{"NAME": "皮革", "AMT": 84},{"NAME": "強化繩索", "AMT": 42}]}; 
var _精靈米索莉襪 = { "NAME": "精靈米索莉襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "精靈米索莉襪的圖樣", "AMT": 7},{"NAME": "結晶-D級", "AMT": 45},{"NAME": "寶石-D級", "AMT": 10},{"NAME": "皮革", "AMT": 45},{"NAME": "強化繩索", "AMT": 45}]}; 
var _鎖子頭盔 = { "NAME": "鎖子頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 35},{"NAME": "寶石-D級", "AMT": 8},{"NAME": "鎖子頭盔的組件", "AMT": 7},{"NAME": "皮革", "AMT": 20},{"NAME": "鐵鑄模", "AMT": 1}]}; 
var _刺尾獅皮靴 = { "NAME": "刺尾獅皮靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "刺尾獅皮靴的內襯", "AMT": 7},{"NAME": "皮革", "AMT": 24},{"NAME": "高級軟皮", "AMT": 3}]}; 
var _鎖子長靴 = { "NAME": "鎖子長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "鎖子長靴組件", "AMT": 7},{"NAME": "皮革", "AMT": 24},{"NAME": "高級軟皮", "AMT": 3}]}; 
var _精靈米索莉靴 = { "NAME": "精靈米索莉靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "精靈米索莉靴的組件", "AMT": 7},{"NAME": "皮革", "AMT": 24},{"NAME": "高級軟皮", "AMT": 3}]}; 
var _刺尾獅皮手套 = { "NAME": "刺尾獅皮手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "刺尾獅皮手套的內襯", "AMT": 7},{"NAME": "皮革", "AMT": 24},{"NAME": "高級軟皮", "AMT": 3}]}; 
var _鎖子甲長手套 = { "NAME": "鎖子甲長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "鎖子甲長手套的圖樣", "AMT": 7},{"NAME": "皮革", "AMT": 24},{"NAME": "高級軟皮", "AMT": 3}]}; 
var _精靈米索莉手套 = { "NAME": "精靈米索莉手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "精靈米索莉手套的組件", "AMT": 7},{"NAME": "皮革", "AMT": 24},{"NAME": "高級軟皮", "AMT": 3}]}; 
var _鎖子盾 = { "NAME": "鎖子盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 24},{"NAME": "寶石-D級", "AMT": 5},{"NAME": "鎖子盾的碎片", "AMT": 7},{"NAME": "炭焦", "AMT": 4},{"NAME": "鐵", "AMT": 12},{"NAME": "皮革", "AMT": 4}]}; 
var _金屬板頭盔 = { "NAME": "金屬板頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 45},{"NAME": "寶石-D級", "AMT": 10},{"NAME": "金屬板頭盔的組件", "AMT": 8},{"NAME": "皮革", "AMT": 60},{"NAME": "鐵鑄模", "AMT": 1}]}; 
var _火蜥蜴皮靴 = { "NAME": "火蜥蜴皮靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-D級", "AMT": 6},{"NAME": "火蜥蜴皮靴的內襯", "AMT": 8},{"NAME": "皮革", "AMT": 32},{"NAME": "高級軟皮", "AMT": 4}]}; 
var _金屬靴 = { "NAME": "金屬靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-D級", "AMT": 6},{"NAME": "金屬靴的組件", "AMT": 8},{"NAME": "皮革", "AMT": 32},{"NAME": "高級軟皮", "AMT": 4}]}; 
var _賢者的舊手套 = { "NAME": "賢者的舊手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 30},{"NAME": "寶石-D級", "AMT": 6},{"NAME": "賢者的舊手套內襯", "AMT": 8},{"NAME": "皮革", "AMT": 32},{"NAME": "高級軟皮", "AMT": 4}]}; 
var _金屬盾 = { "NAME": "金屬盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 32},{"NAME": "寶石-D級", "AMT": 7},{"NAME": "金屬盾的碎片", "AMT": 8},{"NAME": "炭焦", "AMT": 5},{"NAME": "鐵", "AMT": 15},{"NAME": "皮革", "AMT": 5}]}; 
var _強化米索莉脛甲 = { "NAME": "強化米索莉脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 70},{"NAME": "寶石-C級", "AMT": 6},{"NAME": "強化米索莉脛甲的碎片", "AMT": 8},{"NAME": "高級皮革", "AMT": 15},{"NAME": "金屬纖維", "AMT": 15}]}; 
var _鏈頭巾 = { "NAME": "鏈頭巾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 60},{"NAME": "寶石-C級", "AMT": 5},{"NAME": "鏈頭巾的圖樣", "AMT": 8},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 2}]}; 
var _鏈甲靴 = { "NAME": "鏈甲靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "鏈甲靴的碎片", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _卡勒米安長靴 = { "NAME": "卡勒米安長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "卡勒米安長靴的組件", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _金屬皮長靴 = { "NAME": "金屬皮長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "金屬皮長靴內襯", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _矮人鏈靴 = { "NAME": "矮人鏈靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "矮人鏈靴的碎片", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _封印長靴 = { "NAME": "封印長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "封印長靴的圖樣", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _強化米索莉手套 = { "NAME": "強化米索莉手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "強化米索莉手套的組件", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _鏈手套 = { "NAME": "鏈手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "鏈手套的組件", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _卡勒米安手套 = { "NAME": "卡勒米安手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "卡勒米安手套的布料", "AMT": 8},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _鏈盾 = { "NAME": "鏈盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 40},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "鏈盾的碎片", "AMT": 8},{"NAME": "合成的炭焦", "AMT": 1},{"NAME": "米索莉合金", "AMT": 3},{"NAME": "高級皮革", "AMT": 1}]}; 
var _金屬皮手套 = { "NAME": "金屬皮手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 10},{"NAME": "寶石-C級", "AMT": 3},{"NAME": "金屬皮手套的組件", "AMT": 9},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 8}]}; 
var _矮人鏈盾 = { "NAME": "矮人鏈盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "矮人鏈盾的碎片", "AMT": 9},{"NAME": "合成的炭焦", "AMT": 1},{"NAME": "米索莉合金", "AMT": 3},{"NAME": "高級皮革", "AMT": 1}]}; 
var _覆皮長靴 = { "NAME": "覆皮長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "覆皮長靴的內襯", "AMT": 9},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 10}]}; 
var _矮人鏈手套 = { "NAME": "矮人鏈手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "矮人鏈手套的組件", "AMT": 9},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 10}]}; 
var _封印手套 = { "NAME": "封印手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "封印手套的圖樣", "AMT": 9},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 10}]}; 
var _覆皮手套 = { "NAME": "覆皮手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 12},{"NAME": "寶石-C級", "AMT": 4},{"NAME": "覆皮手套的組件", "AMT": 9},{"NAME": "高級軟皮", "AMT": 1},{"NAME": "高級皮革", "AMT": 10}]}; 
var _惡魔長靴 = { "NAME": "惡魔長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-C級", "AMT": 6},{"NAME": "惡魔長靴的布料", "AMT": 10},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16}]}; 
var _惡魔手套 = { "NAME": "惡魔手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-C級", "AMT": 6},{"NAME": "惡魔手套的布料", "AMT": 10},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16}]}; 
var _覆殼長靴 = { "NAME": "覆殼長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 20},{"NAME": "寶石-C級", "AMT": 7},{"NAME": "覆殼長靴的材料", "AMT": 10},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 18}]}; 
var _覆殼手套 = { "NAME": "覆殼手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 20},{"NAME": "寶石-C級", "AMT": 7},{"NAME": "覆殼手套的材料", "AMT": 10},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 18}]}; 
var _合金靴 = { "NAME": "合金靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-C級", "AMT": 6},{"NAME": "合金靴的碎片", "AMT": 10},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16}]}; 
var _合金頭盔 = { "NAME": "合金頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "合金頭盔的組件", "AMT": 10},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 14}]}; 
var _聖恩靴 = { "NAME": "聖恩靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "聖恩靴的布料", "AMT": 11},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _全覆式頭盔 = { "NAME": "全覆式頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 36},{"NAME": "寶石-C級", "AMT": 15},{"NAME": "全覆式頭盔的組件", "AMT": 11},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 26}]}; 
var _飛龍皮長靴 = { "NAME": "飛龍皮長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "飛龍皮長靴的組件", "AMT": 11},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _全覆式長靴 = { "NAME": "全覆式長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "全覆式長靴的碎片", "AMT": 11},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _飛龍皮手套 = { "NAME": "飛龍皮手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "飛龍皮手套的組件", "AMT": 11},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _全覆式長手套 = { "NAME": "全覆式長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "全覆式長手套的碎片", "AMT": 11},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _神聖手套 = { "NAME": "神聖手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "神聖手套的圖樣", "AMT": 11},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _聖恩手套 = { "NAME": "聖恩手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "聖恩手套的布料", "AMT": 11},{"NAME": "結晶-C級", "AMT": 24},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24}]}; 
var _全覆式盾 = { "NAME": "全覆式盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-C級", "AMT": 10},{"NAME": "全覆式盾的碎片", "AMT": 11},{"NAME": "合成的炭焦", "AMT": 3},{"NAME": "米索莉合金", "AMT": 9},{"NAME": "高級皮革", "AMT": 3}]}; 
var _精靈長劍 = { "NAME": "精靈長劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 550},{"NAME": "寶石-D級", "AMT": 185},{"NAME": "精靈長劍的劍身", "AMT": 8},{"NAME": "炭焦", "AMT": 220},{"NAME": "鐵", "AMT": 220},{"NAME": "鐵鑄模", "AMT": 2}]}; 
var _矮人戰鎚 = { "NAME": "矮人戰鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 180},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "矮人戰鎚的金屬塊", "AMT": 9},{"NAME": "高級軟皮", "AMT": 19},{"NAME": "合成的炭焦", "AMT": 38},{"NAME": "米索莉合金", "AMT": 38},{"NAME": "金屬強化劑", "AMT": 76}]}; 
var _夜叉釘鎚 = { "NAME": "夜叉釘鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 410},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "夜叉釘鎚的金屬塊", "AMT": 11},{"NAME": "高級軟皮", "AMT": 40},{"NAME": "合成的炭焦", "AMT": 80},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "金屬強化劑", "AMT": 160}]}; 
var _下巨人鑰匙 = { "NAME": "下巨人鑰匙", "QUANTITY": 1 , "DETAIL": [{"NAME": "司塔卡拓的殼", "AMT": 20},{"NAME": "安皮克奧的毒腺", "AMT": 10},{"NAME": "蜘蛛刺", "AMT": 10},{"NAME": "結晶-D級", "AMT": 10}]}; 
var _熟練工的戒指 = { "NAME": "熟練工的戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "熟練工的寶石", "AMT": 1},{"NAME": "熟練工的裝飾球", "AMT": 1},{"NAME": "結晶-D級", "AMT": 10},{"NAME": "研磨劑", "AMT": 10},{"NAME": "鐵", "AMT": 1}]}; 
var _琥珀珠 = { "NAME": "琥珀珠", "QUANTITY": 5 , "DETAIL": [{"NAME": "琥珀塊", "AMT": 1}]}; 
var _魔靈彈_D級 = { "NAME": "魔靈彈_D級", "QUANTITY": 100 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 1},{"NAME": "魔精石", "AMT": 3}]}; 
var _魔靈彈_C級 = { "NAME": "魔靈彈_C級", "QUANTITY": 200 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 1},{"NAME": "魔精石", "AMT": 10}]}; 
var _魔靈彈_B級 = { "NAME": "魔靈彈_B級", "QUANTITY": 150 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 1},{"NAME": "魔精石", "AMT": 15}]}; 
var _魔靈彈_A級 = { "NAME": "魔靈彈_A級", "QUANTITY": 200 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 1},{"NAME": "魔精石", "AMT": 50}]}; 
var _巨人動力裝置 = { "NAME": "巨人動力裝置", "QUANTITY": 1 , "DETAIL": [{"NAME": "損壞的巨人動力裝置", "AMT": 1}]}; 
var _祝福的魔靈彈_D級 = { "NAME": "祝福的魔靈彈_D級", "QUANTITY": 100 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 2},{"NAME": "魔精石", "AMT": 8}]}; 
var _祝福的魔靈彈_C級 = { "NAME": "祝福的魔靈彈_C級", "QUANTITY": 200 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 2},{"NAME": "魔精石", "AMT": 30}]}; 
var _祝福的魔靈彈_B級 = { "NAME": "祝福的魔靈彈_B級", "QUANTITY": 100 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 2},{"NAME": "魔精石", "AMT": 16}]}; 
var _祝福的魔靈彈_A級 = { "NAME": "祝福的魔靈彈_A級", "QUANTITY": 200 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 2},{"NAME": "魔精石", "AMT": 150}]}; 
var _巨匠骨架 = { "NAME": "巨匠骨架", "QUANTITY": 1 , "DETAIL": [{"NAME": "純化的研磨劑", "AMT": 10},{"NAME": "鑄模的潤滑劑", "AMT": 10},{"NAME": "鑄模的強化劑", "AMT": 10}]}; 
var _巨匠砧鎖 = { "NAME": "巨匠砧鎖", "QUANTITY": 1 , "DETAIL": [{"NAME": "合成的炭焦", "AMT": 4},{"NAME": "鑄模的黏劑", "AMT": 4},{"NAME": "鑄模的潤滑劑", "AMT": 4}]}; 
var _刀匠鑄模 = { "NAME": "刀匠鑄模", "QUANTITY": 1 , "DETAIL": [{"NAME": "工匠模具", "AMT": 2},{"NAME": "鑄模的強化劑", "AMT": 20},{"NAME": "恩尼亞", "AMT": 5}]}; 
var _巨匠模具 = { "NAME": "巨匠模具", "QUANTITY": 1 , "DETAIL": [{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "鑄模的黏劑", "AMT": 10},{"NAME": "亞索沛", "AMT": 5}]}; 
var _金剛石耳環 = { "NAME": "金剛石耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(金剛石耳環100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 35},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "金剛石耳環的寶石", "AMT": 12},{"NAME": "純化的研磨劑", "AMT": 8},{"NAME": "金屬纖維", "AMT": 40},{"NAME": "梭芷", "AMT": 8},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _金剛石戒指 = { "NAME": "金剛石戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(金剛石戒指100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 32},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "金剛石戒指的金屬線", "AMT": 12},{"NAME": "純化的研磨劑", "AMT": 6},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 30},{"NAME": "梭芷", "AMT": 6}]}; 
var _金剛石項鍊 = { "NAME": "金剛石項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(金剛石項鍊100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 58},{"NAME": "寶石-B級", "AMT": 5},{"NAME": "金剛石項鍊的鍊子", "AMT": 12},{"NAME": "純化的研磨劑", "AMT": 7},{"NAME": "合成的絞線", "AMT": 35},{"NAME": "梭芷", "AMT": 7},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _黑光耳環 = { "NAME": "黑光耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(黑光耳環100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 25},{"NAME": "寶石-B級", "AMT": 6},{"NAME": "黑光耳環的碎片", "AMT": 13},{"NAME": "純化的研磨劑", "AMT": 13},{"NAME": "金屬纖維", "AMT": 65},{"NAME": "梭芷", "AMT": 13},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _黑光戒指 = { "NAME": "黑光戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(黑光戒指100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 18},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "黑光戒指的金屬線", "AMT": 13},{"NAME": "純化的研磨劑", "AMT": 10},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 50},{"NAME": "梭芷", "AMT": 10}]}; 
var _黑光項鍊 = { "NAME": "黑光項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(黑光項鍊100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 37},{"NAME": "寶石-B級", "AMT": 8},{"NAME": "黑光項鍊的珠子", "AMT": 13},{"NAME": "純化的研磨劑", "AMT": 11},{"NAME": "合成的絞線", "AMT": 55},{"NAME": "梭芷", "AMT": 11},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _合金盾 = { "NAME": "合金盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 17},{"NAME": "寶石-C級", "AMT": 7},{"NAME": "合金盾的碎片", "AMT": 10},{"NAME": "合成的炭焦", "AMT": 2},{"NAME": "米索莉合金", "AMT": 6},{"NAME": "高級皮革", "AMT": 2}]}; 
var _夏隆胸甲 = { "NAME": "夏隆胸甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆胸甲100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 129},{"NAME": "寶石-B級", "AMT": 12},{"NAME": "夏隆胸甲的碎片", "AMT": 12},{"NAME": "米索莉合金", "AMT": 33},{"NAME": "亞索沛", "AMT": 22},{"NAME": "巨匠模具", "AMT": 3}]}; 
var _夏隆脛甲 = { "NAME": "夏隆脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆脛甲100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 72},{"NAME": "寶石-B級", "AMT": 7},{"NAME": "夏隆脛甲的材料", "AMT": 12},{"NAME": "米索莉合金", "AMT": 21},{"NAME": "亞索沛", "AMT": 14},{"NAME": "巨匠模具", "AMT": 2}]}; 
var _寧靜靴 = { "NAME": "寧靜靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "寧靜靴的布料", "AMT": 12},{"NAME": "製作卷軸(寧靜靴100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 33},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24},{"NAME": "亞索沛", "AMT": 3},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _佩勒迪亞靴 = { "NAME": "佩勒迪亞靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "佩勒迪亞靴的圖樣", "AMT": 13},{"NAME": "製作卷軸(佩勒迪亞靴100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _元素靴 = { "NAME": "元素靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "元素靴的內襯", "AMT": 13},{"NAME": "製作卷軸(元素靴100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _恩寵靴 = { "NAME": "恩寵靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "恩寵靴的內襯", "AMT": 13},{"NAME": "製作卷軸(恩寵靴100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _阿巴敦胸甲 = { "NAME": "阿巴敦胸甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦胸甲100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 129},{"NAME": "寶石-B級", "AMT": 12},{"NAME": "阿巴敦胸甲的碎片", "AMT": 12},{"NAME": "米索莉合金", "AMT": 33},{"NAME": "亞索沛", "AMT": 22},{"NAME": "巨匠模具", "AMT": 3}]}; 
var _阿巴敦脛甲 = { "NAME": "阿巴敦脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦脛甲100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 72},{"NAME": "寶石-B級", "AMT": 7},{"NAME": "阿巴敦脛甲材料", "AMT": 12},{"NAME": "米索莉合金", "AMT": 21},{"NAME": "亞索沛", "AMT": 14},{"NAME": "巨匠模具", "AMT": 2}]}; 
var _夏隆皮衫 = { "NAME": "夏隆皮衫", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆皮衫100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 118},{"NAME": "寶石-B級", "AMT": 9},{"NAME": "夏隆皮衫的布料", "AMT": 12},{"NAME": "高級皮革", "AMT": 58},{"NAME": "金屬纖維", "AMT": 29},{"NAME": "亞索沛", "AMT": 29},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _夏隆皮脛甲 = { "NAME": "夏隆皮脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆皮脛甲100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 70},{"NAME": "寶石-B級", "AMT": 5},{"NAME": "夏隆皮脛甲的材料", "AMT": 12},{"NAME": "高級皮革", "AMT": 29},{"NAME": "金屬纖維", "AMT": 29},{"NAME": "亞索沛", "AMT": 29},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _阿巴敦皮甲 = { "NAME": "阿巴敦皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦皮甲100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 161},{"NAME": "寶石-B級", "AMT": 14},{"NAME": "阿巴敦皮甲的內襯", "AMT": 12},{"NAME": "合成的絞線", "AMT": 24},{"NAME": "高級皮革", "AMT": 96},{"NAME": "金屬纖維", "AMT": 48},{"NAME": "亞索沛", "AMT": 24},{"NAME": "巨匠砧鎖", "AMT": 3}]}; 
var _夏隆外衣 = { "NAME": "夏隆外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆外衣100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 118},{"NAME": "寶石-B級", "AMT": 9},{"NAME": "夏隆外衣的布料", "AMT": 12},{"NAME": "高級皮革", "AMT": 58},{"NAME": "金屬纖維", "AMT": 29},{"NAME": "亞索沛", "AMT": 29},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _夏隆長襪 = { "NAME": "夏隆長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆長襪100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 70},{"NAME": "寶石-B級", "AMT": 5},{"NAME": "夏隆長襪的布料", "AMT": 12},{"NAME": "高級皮革", "AMT": 29},{"NAME": "金屬纖維", "AMT": 29},{"NAME": "亞索沛", "AMT": 29},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _阿巴敦長袍 = { "NAME": "阿巴敦長袍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦長袍100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 161},{"NAME": "寶石-B級", "AMT": 14},{"NAME": "阿巴敦長袍的布料", "AMT": 12},{"NAME": "合成的絞線", "AMT": 24},{"NAME": "高級皮革", "AMT": 96},{"NAME": "金屬纖維", "AMT": 48},{"NAME": "亞索沛", "AMT": 24},{"NAME": "巨匠砧鎖", "AMT": 3}]}; 
var _阿巴敦頭箍 = { "NAME": "阿巴敦頭箍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦頭箍100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 41},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "阿巴敦頭箍的圖樣", "AMT": 12},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _封印的阿巴敦手套 = { "NAME": "封印的阿巴敦手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的阿巴敦手套100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 33},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "封印的阿巴敦手套的碎片", "AMT": 12},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24},{"NAME": "亞索沛", "AMT": 3},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _寧靜鏈手套 = { "NAME": "寧靜鏈手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "寧靜鏈手套的組件", "AMT": 12},{"NAME": "製作卷軸(寧靜鏈手套100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _守護神手套 = { "NAME": "守護神手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "守護神手套的組件", "AMT": 12},{"NAME": "製作卷軸(守護神手套100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _末日盾 = { "NAME": "末日盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日盾100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 20},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "末日盾的碎片", "AMT": 13},{"NAME": "合成的炭焦", "AMT": 3},{"NAME": "米索莉合金", "AMT": 9},{"NAME": "高級皮革", "AMT": 3},{"NAME": "亞索沛", "AMT": 3},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _青狼胸甲 = { "NAME": "青狼胸甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼胸甲100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 89},{"NAME": "寶石-B級", "AMT": 20},{"NAME": "青狼胸甲的碎片", "AMT": 13},{"NAME": "米索莉合金", "AMT": 54},{"NAME": "亞索沛", "AMT": 36},{"NAME": "巨匠模具", "AMT": 3}]}; 
var _祝福靴 = { "NAME": "祝福靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福靴的組件", "AMT": 12},{"NAME": "製作卷軸(祝福靴100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 33},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24},{"NAME": "亞索沛", "AMT": 3},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _青狼脛甲 = { "NAME": "青狼脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼脛甲100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 49},{"NAME": "寶石-B級", "AMT": 12},{"NAME": "青狼脛甲的材料", "AMT": 13},{"NAME": "米索莉合金", "AMT": 36},{"NAME": "亞索沛", "AMT": 24},{"NAME": "巨匠模具", "AMT": 2}]}; 
var _末日金屬盔甲 = { "NAME": "末日金屬盔甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日金屬盔甲100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 136},{"NAME": "寶石-B級", "AMT": 31},{"NAME": "末日金屬盔甲的合金", "AMT": 13},{"NAME": "純化的研磨劑", "AMT": 23},{"NAME": "米索莉合金", "AMT": 69},{"NAME": "亞索沛", "AMT": 46},{"NAME": "巨匠模具", "AMT": 4}]}; 
var _青狼皮甲 = { "NAME": "青狼皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼皮甲100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 107},{"NAME": "寶石-B級", "AMT": 22},{"NAME": "青狼皮甲的材料", "AMT": 12},{"NAME": "合成的絞線", "AMT": 35},{"NAME": "高級皮革", "AMT": 140},{"NAME": "金屬纖維", "AMT": 75},{"NAME": "亞索沛", "AMT": 35},{"NAME": "巨匠砧鎖", "AMT": 3}]}; 
var _末日皮甲 = { "NAME": "末日皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日皮甲100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 107},{"NAME": "寶石-B級", "AMT": 22},{"NAME": "末日皮甲的組件", "AMT": 12},{"NAME": "合成的絞線", "AMT": 35},{"NAME": "高級皮革", "AMT": 140},{"NAME": "金屬纖維", "AMT": 70},{"NAME": "亞索沛", "AMT": 35},{"NAME": "巨匠砧鎖", "AMT": 3}]}; 
var _青狼外衣 = { "NAME": "青狼外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼外衣100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 73},{"NAME": "寶石-B級", "AMT": 14},{"NAME": "青狼外衣的布料", "AMT": 13},{"NAME": "高級皮革", "AMT": 88},{"NAME": "金屬纖維", "AMT": 44},{"NAME": "亞索沛", "AMT": 44},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _末日外衣 = { "NAME": "末日外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日外衣100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 73},{"NAME": "寶石-B級", "AMT": 14},{"NAME": "末日外衣的圖樣", "AMT": 13},{"NAME": "高級皮革", "AMT": 88},{"NAME": "金屬纖維", "AMT": 44},{"NAME": "亞索沛", "AMT": 44},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _青狼長襪 = { "NAME": "青狼長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼長襪100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 47},{"NAME": "寶石-B級", "AMT": 8},{"NAME": "青狼長襪的圖樣", "AMT": 13},{"NAME": "高級皮革", "AMT": 41},{"NAME": "金屬纖維", "AMT": 41},{"NAME": "亞索沛", "AMT": 41},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _末日長襪 = { "NAME": "末日長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日長襪100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 47},{"NAME": "寶石-B級", "AMT": 8},{"NAME": "末日長襪的圖樣", "AMT": 13},{"NAME": "高級皮革", "AMT": 41},{"NAME": "金屬纖維", "AMT": 41},{"NAME": "亞索沛", "AMT": 41},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _青狼頭盔 = { "NAME": "青狼頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼頭盔100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 39},{"NAME": "寶石-B級", "AMT": 7},{"NAME": "青狼頭盔的組件", "AMT": 13},{"NAME": "高級皮革", "AMT": 50},{"NAME": "亞索沛", "AMT": 5},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _末日頭盔 = { "NAME": "末日頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日頭盔100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 39},{"NAME": "寶石-B級", "AMT": 7},{"NAME": "末日頭盔的圖樣", "AMT": 13},{"NAME": "高級皮革", "AMT": 50},{"NAME": "亞索沛", "AMT": 5},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _封印的青狼長靴 = { "NAME": "封印的青狼長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的青狼長靴100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "封印的青狼長靴的圖樣", "AMT": 13},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _封印的末日手套 = { "NAME": "封印的末日手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的末日手套100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "封印的末日手套的碎片", "AMT": 13},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _元素手套 = { "NAME": "元素手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "元素手套的內襯", "AMT": 13},{"NAME": "製作卷軸(元素手套100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _恩寵手套 = { "NAME": "恩寵手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "恩寵手套的內襯", "AMT": 13},{"NAME": "製作卷軸(恩寵手套100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _毀滅長手套 = { "NAME": "毀滅長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "毀滅長手套的布料", "AMT": 13},{"NAME": "製作卷軸(毀滅長手套100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _佩勒迪亞手套 = { "NAME": "佩勒迪亞手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "佩勒迪亞手套的圖樣", "AMT": 13},{"NAME": "製作卷軸(佩勒迪亞手套100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _封印的青狼手套 = { "NAME": "封印的青狼手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的青狼手套100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "封印的青狼手套的布料", "AMT": 13},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _封印的夏隆靴 = { "NAME": "封印的夏隆靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的夏隆靴100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 33},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "封印的夏隆靴的組件", "AMT": 12},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24},{"NAME": "亞索沛", "AMT": 3},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _封印的阿巴敦靴 = { "NAME": "封印的阿巴敦靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的阿巴敦靴100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 33},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "封印的阿巴敦靴的組件", "AMT": 12},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24},{"NAME": "亞索沛", "AMT": 3},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _封印的末日靴 = { "NAME": "封印的末日靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的末日靴100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "封印的末日靴的碎片", "AMT": 13},{"NAME": "高級軟皮", "AMT": 6},{"NAME": "高級皮革", "AMT": 48},{"NAME": "亞索沛", "AMT": 6},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _封印的夏隆長手套 = { "NAME": "封印的夏隆長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的夏隆長手套100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 33},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "封印的夏隆長手套的碎片", "AMT": 12},{"NAME": "高級軟皮", "AMT": 3},{"NAME": "高級皮革", "AMT": 24},{"NAME": "亞索沛", "AMT": 3},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _夏隆盾 = { "NAME": "夏隆盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆盾100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-B級", "AMT": 3},{"NAME": "夏隆盾的碎片", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 4},{"NAME": "米索莉合金", "AMT": 12},{"NAME": "高級皮革", "AMT": 4},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _夏隆頭盔 = { "NAME": "夏隆頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆頭盔100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 41},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "夏隆頭盔的組件", "AMT": 12},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _銀箭 = { "NAME": "銀箭", "QUANTITY": 550 , "DETAIL": [{"NAME": "銀塊", "AMT": 5},{"NAME": "絞線", "AMT": 1}]}; 
var _帕塔拳刃 = { "NAME": "帕塔拳刃", "QUANTITY": 1 , "DETAIL": [{"NAME": "帕塔拳刃的刀身", "AMT": 12},{"NAME": "製作卷軸(帕塔拳刃100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 467},{"NAME": "寶石-B級", "AMT": 55},{"NAME": "高級軟皮", "AMT": 50},{"NAME": "合成的炭焦", "AMT": 100},{"NAME": "米索莉合金", "AMT": 100},{"NAME": "恩尼亞", "AMT": 50},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _巨劍 = { "NAME": "巨劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(巨劍100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 317},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "巨劍的刀身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 63},{"NAME": "米索莉合金", "AMT": 126},{"NAME": "恩尼亞", "AMT": 63},{"NAME": "刀匠鑄模", "AMT": 3}]}; 
var _巨大戰斧 = { "NAME": "巨大戰斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(巨大戰斧100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 498},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "巨大戰斧的金屬塊", "AMT": 12},{"NAME": "高級軟皮", "AMT": 59},{"NAME": "合成的炭焦", "AMT": 118},{"NAME": "米索莉合金", "AMT": 118},{"NAME": "恩尼亞", "AMT": 59},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _精靈魔杖 = { "NAME": "精靈魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(精靈魔杖100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 491},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "精靈魔杖的金屬塊", "AMT": 12},{"NAME": "顆粒狀的骨粉", "AMT": 150},{"NAME": "合成的絞線", "AMT": 75},{"NAME": "奧里哈魯根", "AMT": 75},{"NAME": "恩尼亞", "AMT": 75},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _柯貝克劍 = { "NAME": "柯貝克劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(柯貝克劍100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 517},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "柯貝克劍的劍身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 114},{"NAME": "米索莉合金", "AMT": 114},{"NAME": "恩尼亞", "AMT": 57},{"NAME": "刀匠鑄模", "AMT": 2}]}; 
var _聖堂之劍 = { "NAME": "聖堂之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(聖堂之劍100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 517},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "聖堂之劍的刀身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 114},{"NAME": "米索莉合金", "AMT": 114},{"NAME": "恩尼亞", "AMT": 57},{"NAME": "刀匠鑄模", "AMT": 2}]}; 
var _波形刃 = { "NAME": "波形刃", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(波形刃100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 517},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "波形刃的刀身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 114},{"NAME": "米索莉合金", "AMT": 114},{"NAME": "恩尼亞", "AMT": 57},{"NAME": "刀匠鑄模", "AMT": 2}]}; 
var _地獄刀 = { "NAME": "地獄刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(地獄刀100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 517},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "地獄刀的刀身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 114},{"NAME": "米索莉合金", "AMT": 114},{"NAME": "恩尼亞", "AMT": 57},{"NAME": "刀匠鑄模", "AMT": 2}]}; 
var _阿斯拉爪 = { "NAME": "阿斯拉爪", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿斯拉爪100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 498},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "阿斯拉爪的刀身", "AMT": 12},{"NAME": "高級軟皮", "AMT": 59},{"NAME": "合成的炭焦", "AMT": 118},{"NAME": "米索莉合金", "AMT": 118},{"NAME": "恩尼亞", "AMT": 59},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _黑暗精靈長弓 = { "NAME": "黑暗精靈長弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(黑暗精靈長弓100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 534},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "黑暗精靈長弓的柄", "AMT": 12},{"NAME": "高級軟皮", "AMT": 37},{"NAME": "合成的絞線", "AMT": 37},{"NAME": "米索莉合金", "AMT": 185},{"NAME": "恩尼亞", "AMT": 37},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _巨斧 = { "NAME": "巨斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(巨斧100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 353},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "巨斧的金屬塊", "AMT": 12},{"NAME": "高級軟皮", "AMT": 40},{"NAME": "合成的炭焦", "AMT": 80},{"NAME": "米索莉合金", "AMT": 160},{"NAME": "恩尼亞", "AMT": 40},{"NAME": "巨匠骨架", "AMT": 4}]}; 
var _大馬士革刀 = { "NAME": "大馬士革刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(大馬士革刀100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 341},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "大馬士革刀的劍身", "AMT": 13},{"NAME": "合成的炭焦", "AMT": 172},{"NAME": "米索莉合金", "AMT": 172},{"NAME": "恩尼亞", "AMT": 86},{"NAME": "刀匠鑄模", "AMT": 2}]}; 
var _長槍 = { "NAME": "長槍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(長槍100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 291},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "長槍的刀身", "AMT": 13},{"NAME": "高級軟皮", "AMT": 58},{"NAME": "合成的炭焦", "AMT": 116},{"NAME": "米索莉合金", "AMT": 232},{"NAME": "恩尼亞", "AMT": 58},{"NAME": "巨匠骨架", "AMT": 4}]}; 
var _亡者榮譽 = { "NAME": "亡者榮譽", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(亡者榮譽100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 339},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "亡者榮譽的石材", "AMT": 13},{"NAME": "高級軟皮", "AMT": 86},{"NAME": "合成的炭焦", "AMT": 172},{"NAME": "米索莉合金", "AMT": 172},{"NAME": "恩尼亞", "AMT": 86},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _工藝戰斧 = { "NAME": "工藝戰斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(工藝戰斧100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 339},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "工藝戰斧的刀身", "AMT": 13},{"NAME": "高級軟皮", "AMT": 86},{"NAME": "合成的炭焦", "AMT": 172},{"NAME": "米索莉合金", "AMT": 172},{"NAME": "恩尼亞", "AMT": 86},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _邪靈魔杖 = { "NAME": "邪靈魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(邪靈魔杖100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 342},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "邪靈魔杖的金屬塊", "AMT": 13},{"NAME": "顆粒狀的骨粉", "AMT": 216},{"NAME": "合成的絞線", "AMT": 108},{"NAME": "奧里哈魯根", "AMT": 108},{"NAME": "恩尼亞", "AMT": 108},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _惡魔短劍 = { "NAME": "惡魔短劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(惡魔短劍100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 341},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "惡魔短劍的刀身", "AMT": 13},{"NAME": "合成的炭焦", "AMT": 172},{"NAME": "米索莉合金", "AMT": 172},{"NAME": "恩尼亞", "AMT": 86},{"NAME": "刀匠鑄模", "AMT": 2}]}; 
var _博利恩拳套 = { "NAME": "博利恩拳套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(博利恩拳套100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 339},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "博利恩拳套的刃部", "AMT": 13},{"NAME": "高級軟皮", "AMT": 86},{"NAME": "合成的炭焦", "AMT": 172},{"NAME": "米索莉合金", "AMT": 172},{"NAME": "恩尼亞", "AMT": 86},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _冒險弓 = { "NAME": "冒險弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(冒險弓100%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 328},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "冒險弓的柄", "AMT": 13},{"NAME": "高級軟皮", "AMT": 57},{"NAME": "合成的絞線", "AMT": 57},{"NAME": "米索莉合金", "AMT": 285},{"NAME": "恩尼亞", "AMT": 57},{"NAME": "巨匠骨架", "AMT": 3}]}; 
var _關節拳 = { "NAME": "關節拳", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 200},{"NAME": "寶石-C級", "AMT": 105},{"NAME": "關節拳的刃", "AMT": 9},{"NAME": "高級軟皮", "AMT": 27},{"NAME": "合成的炭焦", "AMT": 54},{"NAME": "米索莉合金", "AMT": 54}]}; 
var _阿巴敦盾 = { "NAME": "阿巴敦盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦盾100%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 16},{"NAME": "寶石-B級", "AMT": 3},{"NAME": "阿巴敦盾的破片", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 4},{"NAME": "米索莉合金", "AMT": 12},{"NAME": "高級皮革", "AMT": 4},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠砧鎖", "AMT": 1}]}; 
var _阿巴敦盾 = { "NAME": "阿巴敦盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦盾60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 3},{"NAME": "阿巴敦盾的破片", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 3},{"NAME": "米索莉合金", "AMT": 9},{"NAME": "高級皮革", "AMT": 3},{"NAME": "亞索沛", "AMT": 3}]}; 
var _金剛石耳環 = { "NAME": "金剛石耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(金剛石耳環70%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 28},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "金剛石耳環的寶石", "AMT": 12},{"NAME": "純化的研磨劑", "AMT": 6},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 30},{"NAME": "梭芷", "AMT": 6}]}; 
var _金剛石戒指 = { "NAME": "金剛石戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(金剛石戒指70%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 22},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "金剛石戒指的金屬線", "AMT": 12},{"NAME": "銀鑄模", "AMT": 1},{"NAME": "純化的研磨劑", "AMT": 5},{"NAME": "金屬纖維", "AMT": 25},{"NAME": "梭芷", "AMT": 5}]}; 
var _金剛石項鍊 = { "NAME": "金剛石項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(金剛石項鍊70%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 34},{"NAME": "寶石-B級", "AMT": 5},{"NAME": "金剛石項鍊的鍊子", "AMT": 12},{"NAME": "純化的研磨劑", "AMT": 6},{"NAME": "合成的絞線", "AMT": 30},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "梭芷", "AMT": 6}]}; 
var _夏隆胸甲 = { "NAME": "夏隆胸甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆胸甲60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 82},{"NAME": "寶石-B級", "AMT": 12},{"NAME": "夏隆胸甲的碎片", "AMT": 12},{"NAME": "米索莉合金", "AMT": 18},{"NAME": "鐵匠模具", "AMT": 3},{"NAME": "亞索沛", "AMT": 12}]}; 
var _夏隆脛甲 = { "NAME": "夏隆脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆脛甲60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 45},{"NAME": "寶石-B級", "AMT": 7},{"NAME": "夏隆脛甲的材料", "AMT": 12},{"NAME": "米索莉合金", "AMT": 12},{"NAME": "鐵匠模具", "AMT": 2},{"NAME": "亞索沛", "AMT": 8}]}; 
var _阿巴敦胸甲 = { "NAME": "阿巴敦胸甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦胸甲60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 82},{"NAME": "寶石-B級", "AMT": 12},{"NAME": "阿巴敦胸甲的碎片", "AMT": 12},{"NAME": "米索莉合金", "AMT": 18},{"NAME": "鐵匠模具", "AMT": 3},{"NAME": "亞索沛", "AMT": 12}]}; 
var _阿巴敦脛甲 = { "NAME": "阿巴敦脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦脛甲60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 45},{"NAME": "寶石-B級", "AMT": 7},{"NAME": "阿巴敦脛甲材料", "AMT": 12},{"NAME": "米索莉合金", "AMT": 12},{"NAME": "鐵匠模具", "AMT": 2},{"NAME": "亞索沛", "AMT": 8}]}; 
var _夏隆皮衫 = { "NAME": "夏隆皮衫", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆皮衫60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 65},{"NAME": "寶石-B級", "AMT": 9},{"NAME": "夏隆皮衫的布料", "AMT": 12},{"NAME": "高級皮革", "AMT": 40},{"NAME": "金屬纖維", "AMT": 20},{"NAME": "亞索沛", "AMT": 20}]}; 
var _夏隆皮脛甲 = { "NAME": "夏隆皮脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆皮脛甲60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 34},{"NAME": "寶石-B級", "AMT": 5},{"NAME": "夏隆皮脛甲的材料", "AMT": 12},{"NAME": "高級皮革", "AMT": 20},{"NAME": "金屬纖維", "AMT": 20},{"NAME": "亞索沛", "AMT": 20}]}; 
var _阿巴敦皮甲 = { "NAME": "阿巴敦皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦皮甲60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 95},{"NAME": "寶石-B級", "AMT": 14},{"NAME": "阿巴敦皮甲的內襯", "AMT": 12},{"NAME": "合成的絞線", "AMT": 16},{"NAME": "高級皮革", "AMT": 65},{"NAME": "金屬纖維", "AMT": 32},{"NAME": "亞索沛", "AMT": 16}]}; 
var _夏隆外衣 = { "NAME": "夏隆外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆外衣60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 65},{"NAME": "寶石-B級", "AMT": 9},{"NAME": "夏隆外衣的布料", "AMT": 12},{"NAME": "高級皮革", "AMT": 40},{"NAME": "金屬纖維", "AMT": 20},{"NAME": "亞索沛", "AMT": 20}]}; 
var _夏隆長襪 = { "NAME": "夏隆長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆長襪60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 34},{"NAME": "寶石-B級", "AMT": 5},{"NAME": "夏隆長襪的布料", "AMT": 12},{"NAME": "高級皮革", "AMT": 20},{"NAME": "金屬纖維", "AMT": 20},{"NAME": "亞索沛", "AMT": 20}]}; 
var _阿巴敦長袍 = { "NAME": "阿巴敦長袍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦長袍60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 95},{"NAME": "寶石-B級", "AMT": 14},{"NAME": "阿巴敦長袍的布料", "AMT": 12},{"NAME": "合成的絞線", "AMT": 16},{"NAME": "高級皮革", "AMT": 65},{"NAME": "金屬纖維", "AMT": 32},{"NAME": "亞索沛", "AMT": 16}]}; 
var _阿巴敦頭箍 = { "NAME": "阿巴敦頭箍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿巴敦頭箍60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 30},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "阿巴敦頭箍的圖樣", "AMT": 12},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 20},{"NAME": "亞索沛", "AMT": 2}]}; 
var _封印的阿巴敦手套 = { "NAME": "封印的阿巴敦手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的阿巴敦手套60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "封印的阿巴敦手套的碎片", "AMT": 12},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16},{"NAME": "亞索沛", "AMT": 2}]}; 
var _寧靜鏈手套 = { "NAME": "寧靜鏈手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "寧靜鏈手套的組件", "AMT": 12},{"NAME": "製作卷軸(寧靜鏈手套60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16},{"NAME": "亞索沛", "AMT": 2}]}; 
var _祝福靴 = { "NAME": "祝福靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福靴的組件", "AMT": 12},{"NAME": "製作卷軸(祝福靴60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16},{"NAME": "亞索沛", "AMT": 2}]}; 
var _封印的夏隆靴 = { "NAME": "封印的夏隆靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的夏隆靴60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "封印的夏隆靴的組件", "AMT": 12},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16},{"NAME": "亞索沛", "AMT": 2}]}; 
var _封印的阿巴敦靴 = { "NAME": "封印的阿巴敦靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的阿巴敦靴60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "封印的阿巴敦靴的組件", "AMT": 12},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16},{"NAME": "亞索沛", "AMT": 2}]}; 
var _封印的夏隆長手套 = { "NAME": "封印的夏隆長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的夏隆長手套60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-B級", "AMT": 2},{"NAME": "封印的夏隆長手套的碎片", "AMT": 12},{"NAME": "高級軟皮", "AMT": 2},{"NAME": "高級皮革", "AMT": 16},{"NAME": "亞索沛", "AMT": 2}]}; 
var _夏隆盾 = { "NAME": "夏隆盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆盾60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 25},{"NAME": "寶石-B級", "AMT": 3},{"NAME": "夏隆盾的碎片", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 2},{"NAME": "米索莉合金", "AMT": 6},{"NAME": "高級皮革", "AMT": 2},{"NAME": "亞索沛", "AMT": 2}]}; 
var _夏隆頭盔 = { "NAME": "夏隆頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(夏隆頭盔60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 30},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "夏隆頭盔的組件", "AMT": 12},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 20},{"NAME": "亞索沛", "AMT": 2}]}; 
var _巨劍 = { "NAME": "巨劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(巨劍60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 350},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "巨劍的刀身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 40},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "工匠模具", "AMT": 3},{"NAME": "恩尼亞", "AMT": 40}]}; 
var _巨大戰斧 = { "NAME": "巨大戰斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(巨大戰斧60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 325},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "巨大戰斧的金屬塊", "AMT": 12},{"NAME": "高級軟皮", "AMT": 40},{"NAME": "合成的炭焦", "AMT": 80},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "恩尼亞", "AMT": 40}]}; 
var _精靈魔杖 = { "NAME": "精靈魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(精靈魔杖60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 330},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "精靈魔杖的金屬塊", "AMT": 12},{"NAME": "顆粒狀的骨粉", "AMT": 100},{"NAME": "合成的絞線", "AMT": 50},{"NAME": "奧里哈魯根", "AMT": 50},{"NAME": "恩尼亞", "AMT": 50}]}; 
var _柯貝克劍 = { "NAME": "柯貝克劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(柯貝克劍60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 360},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "柯貝克劍的劍身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 72},{"NAME": "米索莉合金", "AMT": 72},{"NAME": "工匠模具", "AMT": 2},{"NAME": "恩尼亞", "AMT": 36}]}; 
var _聖堂之劍 = { "NAME": "聖堂之劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(聖堂之劍60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 360},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "聖堂之劍的刀身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 72},{"NAME": "米索莉合金", "AMT": 72},{"NAME": "工匠模具", "AMT": 2},{"NAME": "恩尼亞", "AMT": 36}]}; 
var _波形刃 = { "NAME": "波形刃", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(波形刃60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 360},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "波形刃的刀身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 72},{"NAME": "米索莉合金", "AMT": 72},{"NAME": "工匠模具", "AMT": 2},{"NAME": "恩尼亞", "AMT": 36}]}; 
var _地獄刀 = { "NAME": "地獄刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(地獄刀60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 360},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "地獄刀的刀身", "AMT": 12},{"NAME": "合成的炭焦", "AMT": 72},{"NAME": "米索莉合金", "AMT": 72},{"NAME": "工匠模具", "AMT": 2},{"NAME": "恩尼亞", "AMT": 36}]}; 
var _阿斯拉爪 = { "NAME": "阿斯拉爪", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(阿斯拉爪60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 325},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "阿斯拉爪的刀身", "AMT": 12},{"NAME": "高級軟皮", "AMT": 40},{"NAME": "合成的炭焦", "AMT": 80},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "恩尼亞", "AMT": 40}]}; 
var _黑暗精靈長弓 = { "NAME": "黑暗精靈長弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(黑暗精靈長弓60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 350},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "黑暗精靈長弓的柄", "AMT": 12},{"NAME": "高級軟皮", "AMT": 25},{"NAME": "合成的絞線", "AMT": 25},{"NAME": "米索莉合金", "AMT": 125},{"NAME": "恩尼亞", "AMT": 25}]}; 
var _巨斧 = { "NAME": "巨斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(巨斧60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 360},{"NAME": "寶石-B級", "AMT": 62},{"NAME": "巨斧的金屬塊", "AMT": 12},{"NAME": "高級軟皮", "AMT": 25},{"NAME": "合成的炭焦", "AMT": 50},{"NAME": "米索莉合金", "AMT": 100},{"NAME": "恩尼亞", "AMT": 25}]}; 
var _黑光耳環 = { "NAME": "黑光耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(黑光耳環70%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 16},{"NAME": "寶石-B級", "AMT": 6},{"NAME": "黑光耳環的碎片", "AMT": 13},{"NAME": "純化的研磨劑", "AMT": 10},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "金屬纖維", "AMT": 50},{"NAME": "梭芷", "AMT": 10}]}; 
var _黑光戒指 = { "NAME": "黑光戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(黑光戒指70%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 10},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "黑光戒指的金屬線", "AMT": 13},{"NAME": "銀鑄模", "AMT": 1},{"NAME": "純化的研磨劑", "AMT": 8},{"NAME": "金屬纖維", "AMT": 40},{"NAME": "梭芷", "AMT": 8}]}; 
var _黑光項鍊 = { "NAME": "黑光項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(黑光項鍊70%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 20},{"NAME": "寶石-B級", "AMT": 8},{"NAME": "黑光項鍊的珠子", "AMT": 13},{"NAME": "純化的研磨劑", "AMT": 8},{"NAME": "合成的絞線", "AMT": 40},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "梭芷", "AMT": 8}]}; 
var _佩勒迪亞靴 = { "NAME": "佩勒迪亞靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "佩勒迪亞靴的圖樣", "AMT": 13},{"NAME": "製作卷軸(佩勒迪亞靴60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _元素靴 = { "NAME": "元素靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "元素靴的內襯", "AMT": 13},{"NAME": "製作卷軸(元素靴60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _恩寵靴 = { "NAME": "恩寵靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "恩寵靴的內襯", "AMT": 13},{"NAME": "製作卷軸(恩寵靴60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _末日盾 = { "NAME": "末日盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日盾60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 15},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "末日盾的碎片", "AMT": 13},{"NAME": "合成的炭焦", "AMT": 3},{"NAME": "米索莉合金", "AMT": 9},{"NAME": "高級皮革", "AMT": 3},{"NAME": "亞索沛", "AMT": 3}]}; 
var _青狼胸甲 = { "NAME": "青狼胸甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼胸甲60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 40},{"NAME": "寶石-B級", "AMT": 20},{"NAME": "青狼胸甲的碎片", "AMT": 13},{"NAME": "米索莉合金", "AMT": 36},{"NAME": "鐵匠模具", "AMT": 3},{"NAME": "亞索沛", "AMT": 24}]}; 
var _青狼脛甲 = { "NAME": "青狼脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼脛甲60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 20},{"NAME": "寶石-B級", "AMT": 12},{"NAME": "青狼脛甲的材料", "AMT": 13},{"NAME": "米索莉合金", "AMT": 24},{"NAME": "鐵匠模具", "AMT": 2},{"NAME": "亞索沛", "AMT": 16}]}; 
var _末日金屬盔甲 = { "NAME": "末日金屬盔甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日金屬盔甲60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 60},{"NAME": "寶石-B級", "AMT": 31},{"NAME": "末日金屬盔甲的合金", "AMT": 13},{"NAME": "純化的研磨劑", "AMT": 15},{"NAME": "米索莉合金", "AMT": 45},{"NAME": "鐵匠模具", "AMT": 4},{"NAME": "亞索沛", "AMT": 30}]}; 
var _青狼皮甲 = { "NAME": "青狼皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼皮甲60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 48},{"NAME": "寶石-B級", "AMT": 22},{"NAME": "青狼皮甲的材料", "AMT": 12},{"NAME": "合成的絞線", "AMT": 25},{"NAME": "高級皮革", "AMT": 100},{"NAME": "金屬纖維", "AMT": 50},{"NAME": "亞索沛", "AMT": 25}]}; 
var _末日皮甲 = { "NAME": "末日皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日皮甲60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 48},{"NAME": "寶石-B級", "AMT": 22},{"NAME": "末日皮甲的組件", "AMT": 12},{"NAME": "合成的絞線", "AMT": 25},{"NAME": "高級皮革", "AMT": 100},{"NAME": "金屬纖維", "AMT": 50},{"NAME": "亞索沛", "AMT": 25}]}; 
var _青狼外衣 = { "NAME": "青狼外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼外衣60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 32},{"NAME": "寶石-B級", "AMT": 14},{"NAME": "青狼外衣的布料", "AMT": 13},{"NAME": "高級皮革", "AMT": 64},{"NAME": "金屬纖維", "AMT": 32},{"NAME": "亞索沛", "AMT": 32}]}; 
var _末日外衣 = { "NAME": "末日外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日外衣60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 32},{"NAME": "寶石-B級", "AMT": 14},{"NAME": "末日外衣的圖樣", "AMT": 13},{"NAME": "高級皮革", "AMT": 64},{"NAME": "金屬纖維", "AMT": 32},{"NAME": "亞索沛", "AMT": 32}]}; 
var _青狼長襪 = { "NAME": "青狼長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼長襪60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 18},{"NAME": "寶石-B級", "AMT": 8},{"NAME": "青狼長襪的圖樣", "AMT": 13},{"NAME": "高級皮革", "AMT": 30},{"NAME": "金屬纖維", "AMT": 30},{"NAME": "亞索沛", "AMT": 30}]}; 
var _末日長襪 = { "NAME": "末日長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日長襪60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 18},{"NAME": "寶石-B級", "AMT": 8},{"NAME": "末日長襪的圖樣", "AMT": 13},{"NAME": "高級皮革", "AMT": 30},{"NAME": "金屬纖維", "AMT": 30},{"NAME": "亞索沛", "AMT": 30}]}; 
var _青狼頭盔 = { "NAME": "青狼頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(青狼頭盔60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 14},{"NAME": "寶石-B級", "AMT": 7},{"NAME": "青狼頭盔的組件", "AMT": 13},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 4}]}; 
var _末日頭盔 = { "NAME": "末日頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(末日頭盔60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 14},{"NAME": "寶石-B級", "AMT": 7},{"NAME": "末日頭盔的圖樣", "AMT": 13},{"NAME": "鐵匠模具", "AMT": 1},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 4}]}; 
var _封印的青狼長靴 = { "NAME": "封印的青狼長靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的青狼長靴60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "封印的青狼長靴的圖樣", "AMT": 13},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _封印的末日手套 = { "NAME": "封印的末日手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的末日手套60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "封印的末日手套的碎片", "AMT": 13},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _元素手套 = { "NAME": "元素手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "元素手套的內襯", "AMT": 13},{"NAME": "製作卷軸(元素手套60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _恩寵手套 = { "NAME": "恩寵手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "恩寵手套的內襯", "AMT": 13},{"NAME": "製作卷軸(恩寵手套60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _毀滅長手套 = { "NAME": "毀滅長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "毀滅長手套的布料", "AMT": 13},{"NAME": "製作卷軸(毀滅長手套60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _佩勒迪亞手套 = { "NAME": "佩勒迪亞手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "佩勒迪亞手套的圖樣", "AMT": 13},{"NAME": "製作卷軸(佩勒迪亞手套60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _封印的青狼手套 = { "NAME": "封印的青狼手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的青狼手套60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "封印的青狼手套的布料", "AMT": 13},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _封印的末日靴 = { "NAME": "封印的末日靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(封印的末日靴60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 8},{"NAME": "寶石-B級", "AMT": 4},{"NAME": "封印的末日靴的碎片", "AMT": 13},{"NAME": "高級軟皮", "AMT": 4},{"NAME": "高級皮革", "AMT": 32},{"NAME": "亞索沛", "AMT": 4}]}; 
var _大馬士革刀 = { "NAME": "大馬士革刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(大馬士革刀60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 160},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "大馬士革刀的劍身", "AMT": 13},{"NAME": "合成的炭焦", "AMT": 120},{"NAME": "米索莉合金", "AMT": 120},{"NAME": "工匠模具", "AMT": 2},{"NAME": "恩尼亞", "AMT": 60}]}; 
var _長槍 = { "NAME": "長槍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(長槍60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 168},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "長槍的刀身", "AMT": 13},{"NAME": "高級軟皮", "AMT": 40},{"NAME": "合成的炭焦", "AMT": 80},{"NAME": "米索莉合金", "AMT": 160},{"NAME": "恩尼亞", "AMT": 40}]}; 
var _亡者榮譽 = { "NAME": "亡者榮譽", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(亡者榮譽60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 165},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "亡者榮譽的石材", "AMT": 13},{"NAME": "高級軟皮", "AMT": 60},{"NAME": "合成的炭焦", "AMT": 120},{"NAME": "米索莉合金", "AMT": 120},{"NAME": "恩尼亞", "AMT": 60}]}; 
var _工藝戰斧 = { "NAME": "工藝戰斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(工藝戰斧60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 165},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "工藝戰斧的刀身", "AMT": 13},{"NAME": "高級軟皮", "AMT": 60},{"NAME": "合成的炭焦", "AMT": 120},{"NAME": "米索莉合金", "AMT": 120},{"NAME": "恩尼亞", "AMT": 60}]}; 
var _邪靈魔杖 = { "NAME": "邪靈魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(邪靈魔杖60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 165},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "邪靈魔杖的金屬塊", "AMT": 13},{"NAME": "顆粒狀的骨粉", "AMT": 150},{"NAME": "合成的絞線", "AMT": 75},{"NAME": "奧里哈魯根", "AMT": 75},{"NAME": "恩尼亞", "AMT": 75}]}; 
var _惡魔短劍 = { "NAME": "惡魔短劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(惡魔短劍60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 160},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "惡魔短劍的刀身", "AMT": 13},{"NAME": "合成的炭焦", "AMT": 120},{"NAME": "米索莉合金", "AMT": 120},{"NAME": "工匠模具", "AMT": 2},{"NAME": "恩尼亞", "AMT": 60}]}; 
var _博利恩拳套 = { "NAME": "博利恩拳套", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(博利恩拳套60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 165},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "博利恩拳套的刃部", "AMT": 13},{"NAME": "高級軟皮", "AMT": 60},{"NAME": "合成的炭焦", "AMT": 120},{"NAME": "米索莉合金", "AMT": 120},{"NAME": "恩尼亞", "AMT": 60}]}; 
var _冒險弓 = { "NAME": "冒險弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "製作卷軸(冒險弓60%)", "AMT": 1},{"NAME": "結晶-B級", "AMT": 155},{"NAME": "寶石-B級", "AMT": 98},{"NAME": "冒險弓的柄", "AMT": 13},{"NAME": "高級軟皮", "AMT": 40},{"NAME": "合成的絞線", "AMT": 40},{"NAME": "米索莉合金", "AMT": 200},{"NAME": "恩尼亞", "AMT": 40}]}; 
var _帕塔拳刃 = { "NAME": "帕塔拳刃", "QUANTITY": 1 , "DETAIL": [{"NAME": "帕塔拳刃的刀身", "AMT": 12},{"NAME": "帕塔拳刃的刀身", "AMT": 12},{"NAME": "製作卷軸(帕塔拳刃60%)", "AMT": 1},{"NAME": "製作卷軸(帕塔拳刃60%)", "AMT": 1},{"NAME": "結晶-C級", "AMT": 310},{"NAME": "結晶-C級", "AMT": 310},{"NAME": "寶石-B級", "AMT": 55},{"NAME": "寶石-B級", "AMT": 55},{"NAME": "高級軟皮", "AMT": 35},{"NAME": "高級軟皮", "AMT": 35},{"NAME": "合成的炭焦", "AMT": 70},{"NAME": "合成的炭焦", "AMT": 70},{"NAME": "米索莉合金", "AMT": 70},{"NAME": "米索莉合金", "AMT": 70},{"NAME": "恩尼亞", "AMT": 35},{"NAME": "恩尼亞", "AMT": 35}]}; 
var _壓縮靈魂彈_D級 = { "NAME": "壓縮靈魂彈_D級", "QUANTITY": 1 , "DETAIL": [{"NAME": "靈魂彈-D級", "AMT": 300},{"NAME": "D級魔法繩子", "AMT": 3}]}; 
var _壓縮靈魂彈_C級 = { "NAME": "壓縮靈魂彈_C級", "QUANTITY": 1 , "DETAIL": [{"NAME": "靈魂彈-C級", "AMT": 300},{"NAME": "C級魔法繩子", "AMT": 3}]}; 
var _壓縮靈魂彈_B級 = { "NAME": "壓縮靈魂彈_B級", "QUANTITY": 1 , "DETAIL": [{"NAME": "靈魂彈-B級", "AMT": 300},{"NAME": "B級魔法繩子", "AMT": 6}]}; 
var _壓縮靈魂彈_A級 = { "NAME": "壓縮靈魂彈_A級", "QUANTITY": 1 , "DETAIL": [{"NAME": "靈魂彈-A級", "AMT": 300},{"NAME": "A級魔法繩子", "AMT": 20}]}; 
var _壓縮魔靈彈_D級 = { "NAME": "壓縮魔靈彈_D級", "QUANTITY": 1 , "DETAIL": [{"NAME": "魔靈彈-D級", "AMT": 300},{"NAME": "D級魔法繩子", "AMT": 6}]}; 
var _壓縮魔靈彈_C級 = { "NAME": "壓縮魔靈彈_C級", "QUANTITY": 1 , "DETAIL": [{"NAME": "魔靈彈-C級", "AMT": 300},{"NAME": "C級魔法繩子", "AMT": 7}]}; 
var _壓縮魔靈彈_B級 = { "NAME": "壓縮魔靈彈_B級", "QUANTITY": 1 , "DETAIL": [{"NAME": "魔靈彈-B級", "AMT": 300},{"NAME": "B級魔法繩子", "AMT": 12}]}; 
var _壓縮魔靈彈_A級 = { "NAME": "壓縮魔靈彈_A級", "QUANTITY": 1 , "DETAIL": [{"NAME": "魔靈彈-A級", "AMT": 300},{"NAME": "A級魔法繩子", "AMT": 30}]}; 
var _祝福的壓縮魔靈彈_D級 = { "NAME": "祝福的壓縮魔靈彈_D級", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福的魔靈彈-D級", "AMT": 300},{"NAME": "D級魔法繩子", "AMT": 15}]}; 
var _祝福的壓縮魔靈彈_C級 = { "NAME": "祝福的壓縮魔靈彈_C級", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福的魔靈彈-C級", "AMT": 300},{"NAME": "C級魔法繩子", "AMT": 18}]}; 
var _祝福的壓縮魔靈彈_B級 = { "NAME": "祝福的壓縮魔靈彈_B級", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福的魔靈彈-B級", "AMT": 300},{"NAME": "B級魔法繩子", "AMT": 30}]}; 
var _祝福的壓縮魔靈彈_A級 = { "NAME": "祝福的壓縮魔靈彈_A級", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福的魔靈彈-A級", "AMT": 300},{"NAME": "A級魔法繩子", "AMT": 80}]}; 
var _米索莉箭 = { "NAME": "米索莉箭", "QUANTITY": 500 , "DETAIL": [{"NAME": "米索莉原石", "AMT": 1},{"NAME": "絞線", "AMT": 10}]}; 
var _金屬強化劑 = { "NAME": "金屬強化劑", "QUANTITY": 1 , "DETAIL": [{"NAME": "樹枝", "AMT": 10},{"NAME": "研磨劑", "AMT": 10},{"NAME": "鋼鐵礦", "AMT": 10}]}; 
var _高級壓縮靈魂彈_D級 = { "NAME": "高級壓縮靈魂彈_D級", "QUANTITY": 1 , "DETAIL": [{"NAME": "靈魂彈-D級", "AMT": 1000},{"NAME": "D級魔法繩子", "AMT": 26}]}; 
var _高級壓縮靈魂彈_C級 = { "NAME": "高級壓縮靈魂彈_C級", "QUANTITY": 1 , "DETAIL": [{"NAME": "靈魂彈-C級", "AMT": 1000},{"NAME": "C級魔法繩子", "AMT": 25}]}; 
var _高級壓縮靈魂彈_B級 = { "NAME": "高級壓縮靈魂彈_B級", "QUANTITY": 1 , "DETAIL": [{"NAME": "靈魂彈-B級", "AMT": 1000},{"NAME": "B級魔法繩子", "AMT": 50}]}; 
var _高級壓縮靈魂彈_A級 = { "NAME": "高級壓縮靈魂彈_A級", "QUANTITY": 1 , "DETAIL": [{"NAME": "靈魂彈-A級", "AMT": 1000},{"NAME": "A級魔法繩子", "AMT": 65}]}; 
var _高級壓縮魔靈彈_D級 = { "NAME": "高級壓縮魔靈彈_D級", "QUANTITY": 1 , "DETAIL": [{"NAME": "魔靈彈-D級", "AMT": 1000},{"NAME": "D級魔法繩子", "AMT": 50}]}; 
var _高級壓縮魔靈彈_C級 = { "NAME": "高級壓縮魔靈彈_C級", "QUANTITY": 1 , "DETAIL": [{"NAME": "魔靈彈-C級", "AMT": 1000},{"NAME": "C級魔法繩子", "AMT": 58}]}; 
var _高級壓縮魔靈彈_B級 = { "NAME": "高級壓縮魔靈彈_B級", "QUANTITY": 1 , "DETAIL": [{"NAME": "魔靈彈-B級", "AMT": 1000},{"NAME": "B級魔法繩子", "AMT": 100}]}; 
var _高級壓縮魔靈彈_A級 = { "NAME": "高級壓縮魔靈彈_A級", "QUANTITY": 1 , "DETAIL": [{"NAME": "魔靈彈-A級", "AMT": 1000},{"NAME": "A級魔法繩子", "AMT": 95}]}; 
var _高級祝福的壓縮魔靈彈_D級 = { "NAME": "高級祝福的壓縮魔靈彈_D級", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福的魔靈彈-D級", "AMT": 1000},{"NAME": "D級魔法繩子", "AMT": 125}]}; 
var _高級祝福的壓縮魔靈彈_C級 = { "NAME": "高級祝福的壓縮魔靈彈_C級", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福的魔靈彈-C級", "AMT": 1000},{"NAME": "C級魔法繩子", "AMT": 150}]}; 
var _高級祝福的壓縮魔靈彈_B級 = { "NAME": "高級祝福的壓縮魔靈彈_B級", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福的魔靈彈-B級", "AMT": 1000},{"NAME": "B級魔法繩子", "AMT": 248}]}; 
var _高級祝福的壓縮魔靈彈_A級 = { "NAME": "高級祝福的壓縮魔靈彈_A級", "QUANTITY": 1 , "DETAIL": [{"NAME": "祝福的魔靈彈-A級", "AMT": 1000},{"NAME": "A級魔法繩子", "AMT": 250}]}; 
var _封印的黑暗水晶皮甲 = { "NAME": "封印的黑暗水晶皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 37},{"NAME": "寶石-B級", "AMT": 73},{"NAME": "封印的黑暗水晶皮甲的圖樣", "AMT": 13},{"NAME": "高級皮革", "AMT": 100},{"NAME": "金屬纖維", "AMT": 60},{"NAME": "亞索沛", "AMT": 20},{"NAME": "巨匠砧鎖", "AMT": 4}]}; 
var _封印的塔魯皮甲 = { "NAME": "封印的塔魯皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 56},{"NAME": "寶石-B級", "AMT": 112},{"NAME": "封印的塔魯皮甲的圖樣", "AMT": 15},{"NAME": "合成的絞線", "AMT": 33},{"NAME": "高級皮革", "AMT": 132},{"NAME": "金屬纖維", "AMT": 66},{"NAME": "亞索沛", "AMT": 33},{"NAME": "巨匠砧鎖", "AMT": 9}]}; 
var _封印的夢魘皮甲 = { "NAME": "封印的夢魘皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 44},{"NAME": "寶石-A級", "AMT": 17},{"NAME": "封印的夢魘皮甲的布料", "AMT": 17},{"NAME": "合成的絞線", "AMT": 55},{"NAME": "高級皮革", "AMT": 220},{"NAME": "金屬纖維", "AMT": 110},{"NAME": "亞索沛", "AMT": 55},{"NAME": "巨匠砧鎖", "AMT": 16}]}; 
var _封印的聖威皮甲 = { "NAME": "封印的聖威皮甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 44},{"NAME": "寶石-A級", "AMT": 17},{"NAME": "封印的聖威皮甲的布料", "AMT": 17},{"NAME": "合成的絞線", "AMT": 55},{"NAME": "高級皮革", "AMT": 220},{"NAME": "金屬纖維", "AMT": 110},{"NAME": "亞索沛", "AMT": 55},{"NAME": "巨匠砧鎖", "AMT": 16}]}; 
var _封印的黑暗水晶皮脛甲 = { "NAME": "封印的黑暗水晶皮脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 22},{"NAME": "寶石-B級", "AMT": 43},{"NAME": "封印的黑暗水晶皮脛甲的組件", "AMT": 13},{"NAME": "高級皮革", "AMT": 60},{"NAME": "金屬纖維", "AMT": 36},{"NAME": "亞索沛", "AMT": 12},{"NAME": "巨匠砧鎖", "AMT": 3}]}; 
var _封印的塔魯外衣 = { "NAME": "封印的塔魯外衣", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 37},{"NAME": "寶石-B級", "AMT": 73},{"NAME": "封印的塔魯外衣的材料", "AMT": 13},{"NAME": "高級皮革", "AMT": 100},{"NAME": "金屬纖維", "AMT": 60},{"NAME": "亞索沛", "AMT": 20},{"NAME": "巨匠砧鎖", "AMT": 4}]}; 
var _封印的黑暗水晶長袍 = { "NAME": "封印的黑暗水晶長袍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 49},{"NAME": "寶石-B級", "AMT": 112},{"NAME": "封印的黑暗水晶長袍的布料", "AMT": 15},{"NAME": "合成的絞線", "AMT": 35},{"NAME": "高級皮革", "AMT": 140},{"NAME": "金屬纖維", "AMT": 70},{"NAME": "亞索沛", "AMT": 35},{"NAME": "巨匠砧鎖", "AMT": 8}]}; 
var _封印的夢魘長袍 = { "NAME": "封印的夢魘長袍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 53},{"NAME": "寶石-A級", "AMT": 17},{"NAME": "封印的夢魘長袍的布料", "AMT": 17},{"NAME": "合成的絞線", "AMT": 51},{"NAME": "高級皮革", "AMT": 204},{"NAME": "金屬纖維", "AMT": 102},{"NAME": "亞索沛", "AMT": 51},{"NAME": "巨匠砧鎖", "AMT": 16}]}; 
var _封印的聖威長袍 = { "NAME": "封印的聖威長袍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 53},{"NAME": "寶石-A級", "AMT": 17},{"NAME": "封印的聖威長袍的布料", "AMT": 17},{"NAME": "合成的絞線", "AMT": 51},{"NAME": "高級皮革", "AMT": 204},{"NAME": "金屬纖維", "AMT": 102},{"NAME": "亞索沛", "AMT": 51},{"NAME": "巨匠砧鎖", "AMT": 16}]}; 
var _封印的塔魯長襪 = { "NAME": "封印的塔魯長襪", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 22},{"NAME": "寶石-B級", "AMT": 43},{"NAME": "封印的塔魯長襪的布料", "AMT": 13},{"NAME": "高級皮革", "AMT": 60},{"NAME": "金屬纖維", "AMT": 36},{"NAME": "亞索沛", "AMT": 12},{"NAME": "巨匠砧鎖", "AMT": 3}]}; 
var _封印的黑暗水晶盾 = { "NAME": "封印的黑暗水晶盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 9},{"NAME": "寶石-B級", "AMT": 22},{"NAME": "封印的黑暗水晶盾碎片", "AMT": 13},{"NAME": "合成的炭焦", "AMT": 4},{"NAME": "米索莉合金", "AMT": 12},{"NAME": "高級皮革", "AMT": 4},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _封印的夢魘盾 = { "NAME": "封印的夢魘盾", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 12},{"NAME": "寶石-A級", "AMT": 3},{"NAME": "封印的夢魘盾碎片", "AMT": 14},{"NAME": "合成的炭焦", "AMT": 7},{"NAME": "米索莉合金", "AMT": 21},{"NAME": "高級皮革", "AMT": 7},{"NAME": "亞索沛", "AMT": 7},{"NAME": "巨匠砧鎖", "AMT": 5}]}; 
var _封印的黑暗水晶靴 = { "NAME": "封印的黑暗水晶靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 10},{"NAME": "寶石-B級", "AMT": 21},{"NAME": "封印的黑暗水晶靴的內襯", "AMT": 13},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "高級皮革", "AMT": 25},{"NAME": "亞索沛", "AMT": 5},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _封印的塔魯靴 = { "NAME": "封印的塔魯靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 10},{"NAME": "寶石-B級", "AMT": 21},{"NAME": "封印的塔魯靴的內襯", "AMT": 13},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "高級皮革", "AMT": 25},{"NAME": "亞索沛", "AMT": 5},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _封印的夢魘靴 = { "NAME": "封印的夢魘靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 11},{"NAME": "寶石-A級", "AMT": 3},{"NAME": "封印的夢魘靴的內襯", "AMT": 14},{"NAME": "高級軟皮", "AMT": 24},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 8},{"NAME": "巨匠砧鎖", "AMT": 5}]}; 
var _封印的聖威靴 = { "NAME": "封印的聖威靴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 11},{"NAME": "寶石-A級", "AMT": 3},{"NAME": "封印的聖威靴的內襯", "AMT": 14},{"NAME": "高級軟皮", "AMT": 24},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 8},{"NAME": "巨匠砧鎖", "AMT": 5}]}; 
var _封印的黑暗水晶手套 = { "NAME": "封印的黑暗水晶手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 10},{"NAME": "寶石-B級", "AMT": 21},{"NAME": "封印的黑暗水晶手套的組件", "AMT": 13},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "高級皮革", "AMT": 25},{"NAME": "亞索沛", "AMT": 5},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _封印的塔魯手套 = { "NAME": "封印的塔魯手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 10},{"NAME": "寶石-B級", "AMT": 21},{"NAME": "封印的塔魯手套的組件", "AMT": 13},{"NAME": "高級軟皮", "AMT": 15},{"NAME": "高級皮革", "AMT": 25},{"NAME": "亞索沛", "AMT": 5},{"NAME": "巨匠砧鎖", "AMT": 2}]}; 
var _封印的夢魘長手套 = { "NAME": "封印的夢魘長手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 11},{"NAME": "寶石-A級", "AMT": 3},{"NAME": "封印的夢魘長手套的組件", "AMT": 14},{"NAME": "高級軟皮", "AMT": 24},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 8},{"NAME": "巨匠砧鎖", "AMT": 5}]}; 
var _封印的聖威手套 = { "NAME": "封印的聖威手套", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 11},{"NAME": "寶石-A級", "AMT": 3},{"NAME": "封印的聖威手套的組件", "AMT": 14},{"NAME": "高級軟皮", "AMT": 24},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 8},{"NAME": "巨匠砧鎖", "AMT": 5}]}; 
var _封印的黑暗水晶胸甲 = { "NAME": "封印的黑暗水晶胸甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 40},{"NAME": "寶石-B級", "AMT": 101},{"NAME": "封印的黑暗水晶胸甲的圖樣", "AMT": 13},{"NAME": "米索莉合金", "AMT": 42},{"NAME": "亞索沛", "AMT": 28},{"NAME": "巨匠模具", "AMT": 5}]}; 
var _封印的塔魯金屬盔甲 = { "NAME": "封印的塔魯金屬盔甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 63},{"NAME": "寶石-B級", "AMT": 156},{"NAME": "封印的塔魯金屬盔甲的圖樣", "AMT": 15},{"NAME": "純化的研磨劑", "AMT": 18},{"NAME": "米索莉合金", "AMT": 54},{"NAME": "亞索沛", "AMT": 36},{"NAME": "巨匠模具", "AMT": 8}]}; 
var _封印的夢魘盔甲 = { "NAME": "封印的夢魘盔甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 61},{"NAME": "寶石-A級", "AMT": 23},{"NAME": "封印的夢魘盔甲的圖樣", "AMT": 17},{"NAME": "純化的研磨劑", "AMT": 33},{"NAME": "米索莉合金", "AMT": 99},{"NAME": "亞索沛", "AMT": 66},{"NAME": "巨匠模具", "AMT": 20}]}; 
var _封印的聖威金屬盔甲 = { "NAME": "封印的聖威金屬盔甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 61},{"NAME": "寶石-A級", "AMT": 23},{"NAME": "封印的聖威金屬盔甲的圖樣", "AMT": 17},{"NAME": "純化的研磨劑", "AMT": 33},{"NAME": "米索莉合金", "AMT": 99},{"NAME": "亞索沛", "AMT": 66},{"NAME": "巨匠模具", "AMT": 20}]}; 
var _封印的黑暗水晶脛甲 = { "NAME": "封印的黑暗水晶脛甲", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 27},{"NAME": "寶石-B級", "AMT": 59},{"NAME": "封印的黑暗水晶脛甲的圖樣", "AMT": 13},{"NAME": "米索莉合金", "AMT": 24},{"NAME": "亞索沛", "AMT": 16},{"NAME": "巨匠模具", "AMT": 3}]}; 
var _封印的黑暗水晶頭盔 = { "NAME": "封印的黑暗水晶頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 19},{"NAME": "寶石-B級", "AMT": 33},{"NAME": "封印的黑暗水晶頭盔的組件", "AMT": 13},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠模具", "AMT": 2}]}; 
var _封印的塔魯帽 = { "NAME": "封印的塔魯帽", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 19},{"NAME": "寶石-B級", "AMT": 33},{"NAME": "封印的塔魯帽的組件", "AMT": 13},{"NAME": "高級皮革", "AMT": 40},{"NAME": "亞索沛", "AMT": 4},{"NAME": "巨匠模具", "AMT": 2}]}; 
var _封印的夢魘頭盔 = { "NAME": "封印的夢魘頭盔", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 15},{"NAME": "寶石-A級", "AMT": 5},{"NAME": "封印的夢魘頭盔的組件", "AMT": 14},{"NAME": "高級皮革", "AMT": 80},{"NAME": "亞索沛", "AMT": 8},{"NAME": "巨匠模具", "AMT": 4}]}; 
var _封印的聖威頭箍 = { "NAME": "封印的聖威頭箍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 15},{"NAME": "寶石-A級", "AMT": 5},{"NAME": "封印的聖威頭箍的組件", "AMT": 14},{"NAME": "高級皮革", "AMT": 80},{"NAME": "亞索沛", "AMT": 8},{"NAME": "巨匠模具", "AMT": 4}]}; 
var _斬龍刀 = { "NAME": "斬龍刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 195},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "斬龍刀的刀身", "AMT": 29},{"NAME": "合成的炭焦", "AMT": 78},{"NAME": "米索莉合金", "AMT": 156},{"NAME": "恩尼亞", "AMT": 78},{"NAME": "刀匠鑄模", "AMT": 7},{"NAME": "強化金屬板", "AMT": 78}]}; 
var _狂戰士之刃 = { "NAME": "狂戰士之刃", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 375},{"NAME": "寶石-C級", "AMT": 248},{"NAME": "狂戰士之刃的刀身", "AMT": 11},{"NAME": "合成的炭焦", "AMT": 43},{"NAME": "米索莉合金", "AMT": 86},{"NAME": "工匠模具", "AMT": 3},{"NAME": "金屬強化劑", "AMT": 172}]}; 
var _重型劍 = { "NAME": "重型劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 117},{"NAME": "寶石-D級", "AMT": 34},{"NAME": "重型劍的刀身", "AMT": 4},{"NAME": "炭焦", "AMT": 30},{"NAME": "鐵", "AMT": 60},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _流星雨 = { "NAME": "流星雨", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 215},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "流星雨的金屬塊", "AMT": 25},{"NAME": "高級軟皮", "AMT": 30},{"NAME": "合成的炭焦", "AMT": 60},{"NAME": "米索莉合金", "AMT": 60},{"NAME": "恩尼亞", "AMT": 30},{"NAME": "巨匠骨架", "AMT": 7},{"NAME": "強化金屬板", "AMT": 120}]}; 
var _樂園 = { "NAME": "樂園", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 194},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "樂園的金屬塊", "AMT": 30},{"NAME": "高級軟皮", "AMT": 49},{"NAME": "合成的炭焦", "AMT": 98},{"NAME": "米索莉合金", "AMT": 98},{"NAME": "恩尼亞", "AMT": 49},{"NAME": "巨匠骨架", "AMT": 10},{"NAME": "強化金屬板", "AMT": 196}]}; 
var _靈魂弓 = { "NAME": "靈魂弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 197},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "靈魂弓的柄", "AMT": 29},{"NAME": "高級軟皮", "AMT": 49},{"NAME": "合成的絞線", "AMT": 49},{"NAME": "米索莉合金", "AMT": 245},{"NAME": "恩尼亞", "AMT": 49},{"NAME": "巨匠骨架", "AMT": 10},{"NAME": "強化金屬板", "AMT": 98}]}; 
var _顱之弓 = { "NAME": "顱之弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 219},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "顱之弓的柄", "AMT": 25},{"NAME": "高級軟皮", "AMT": 30},{"NAME": "合成的絞線", "AMT": 30},{"NAME": "米索莉合金", "AMT": 150},{"NAME": "恩尼亞", "AMT": 30},{"NAME": "巨匠骨架", "AMT": 7},{"NAME": "強化金屬板", "AMT": 60}]}; 
var _血腥之蘭 = { "NAME": "血腥之蘭", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 193},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "血腥之蘭的刀身", "AMT": 25},{"NAME": "合成的炭焦", "AMT": 82},{"NAME": "米索莉合金", "AMT": 82},{"NAME": "恩尼亞", "AMT": 41},{"NAME": "刀匠鑄模", "AMT": 5},{"NAME": "強化金屬板", "AMT": 41}]}; 
var _魂體分離器 = { "NAME": "魂體分離器", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 161},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "魂體分離器的刀身", "AMT": 29},{"NAME": "合成的炭焦", "AMT": 156},{"NAME": "米索莉合金", "AMT": 156},{"NAME": "恩尼亞", "AMT": 78},{"NAME": "刀匠鑄模", "AMT": 7},{"NAME": "強化金屬板", "AMT": 78}]}; 
var _龍牙 = { "NAME": "龍牙", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 194},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "龍牙的刀身", "AMT": 30},{"NAME": "高級軟皮", "AMT": 49},{"NAME": "合成的炭焦", "AMT": 98},{"NAME": "米索莉合金", "AMT": 98},{"NAME": "恩尼亞", "AMT": 49},{"NAME": "巨匠骨架", "AMT": 10},{"NAME": "強化金屬板", "AMT": 196}]}; 
var _血旋風 = { "NAME": "血旋風", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 215},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "血旋風的刀身", "AMT": 25},{"NAME": "高級軟皮", "AMT": 30},{"NAME": "合成的炭焦", "AMT": 60},{"NAME": "米索莉合金", "AMT": 60},{"NAME": "恩尼亞", "AMT": 30},{"NAME": "巨匠骨架", "AMT": 7},{"NAME": "強化金屬板", "AMT": 120}]}; 
var _塔魯闊矛 = { "NAME": "塔魯闊矛", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 193},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "塔魯闊矛的刀身", "AMT": 29},{"NAME": "高級軟皮", "AMT": 37},{"NAME": "合成的炭焦", "AMT": 74},{"NAME": "米索莉合金", "AMT": 148},{"NAME": "恩尼亞", "AMT": 37},{"NAME": "巨匠骨架", "AMT": 10},{"NAME": "強化金屬板", "AMT": 148}]}; 
var _長柄戰戟 = { "NAME": "長柄戰戟", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 222},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "長柄戰戟的刀身", "AMT": 25},{"NAME": "高級軟皮", "AMT": 21},{"NAME": "合成的炭焦", "AMT": 42},{"NAME": "米索莉合金", "AMT": 84},{"NAME": "恩尼亞", "AMT": 21},{"NAME": "巨匠骨架", "AMT": 8},{"NAME": "強化金屬板", "AMT": 84}]}; 
var _帕黎恩魔杖 = { "NAME": "帕黎恩魔杖", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 216},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "帕黎恩魔杖的金屬塊", "AMT": 25},{"NAME": "顆粒狀的骨粉", "AMT": 94},{"NAME": "合成的絞線", "AMT": 47},{"NAME": "奧里哈魯根", "AMT": 47},{"NAME": "恩尼亞", "AMT": 47},{"NAME": "巨匠骨架", "AMT": 7},{"NAME": "強化金屬板", "AMT": 94}]}; 
var _世界樹樹枝 = { "NAME": "世界樹樹枝", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 193},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "世界樹樹枝的金屬塊", "AMT": 29},{"NAME": "顆粒狀的骨粉", "AMT": 154},{"NAME": "合成的絞線", "AMT": 77},{"NAME": "奧里哈魯根", "AMT": 77},{"NAME": "恩尼亞", "AMT": 77},{"NAME": "巨匠骨架", "AMT": 10},{"NAME": "強化金屬板", "AMT": 154}]}; 
var _黑暗軍刀 = { "NAME": "黑暗軍刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 161},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "黑暗軍刀的刀身", "AMT": 29},{"NAME": "合成的炭焦", "AMT": 156},{"NAME": "米索莉合金", "AMT": 156},{"NAME": "恩尼亞", "AMT": 78},{"NAME": "刀匠鑄模", "AMT": 7},{"NAME": "強化金屬板", "AMT": 78}]}; 
var _奇蹟劍 = { "NAME": "奇蹟劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 152},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "奇蹟劍的刀身", "AMT": 32},{"NAME": "合成的炭焦", "AMT": 160},{"NAME": "米索莉合金", "AMT": 160},{"NAME": "恩尼亞", "AMT": 80},{"NAME": "刀匠鑄模", "AMT": 6},{"NAME": "強化金屬板", "AMT": 80}]}; 
var _元素劍 = { "NAME": "元素劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 193},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "元素劍的刀身", "AMT": 25},{"NAME": "合成的炭焦", "AMT": 82},{"NAME": "米索莉合金", "AMT": 82},{"NAME": "恩尼亞", "AMT": 41},{"NAME": "刀匠鑄模", "AMT": 5},{"NAME": "強化金屬板", "AMT": 41}]}; 
var _塔魯刀 = { "NAME": "塔魯刀", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 192},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "塔魯刀的刀身", "AMT": 25},{"NAME": "合成的炭焦", "AMT": 82},{"NAME": "米索莉合金", "AMT": 82},{"NAME": "恩尼亞", "AMT": 41},{"NAME": "刀匠鑄模", "AMT": 5},{"NAME": "強化金屬板", "AMT": 41}]}; 
var _金屬絲 = { "NAME": "金屬絲", "QUANTITY": 1 , "DETAIL": [{"NAME": "線", "AMT": 10},{"NAME": "鋼鐵礦", "AMT": 5}]}; 
var _強化金屬板 = { "NAME": "強化金屬板", "QUANTITY": 1 , "DETAIL": [{"NAME": "米索莉原石", "AMT": 5},{"NAME": "金屬絲", "AMT": 5}]}; 
var _里澳林的模具 = { "NAME": "里澳林的模具", "QUANTITY": 1 , "DETAIL": [{"NAME": "金剛石塊", "AMT": 15},{"NAME": "強化繩索", "AMT": 40},{"NAME": "強化金屬板", "AMT": 10}]}; 
var _戰爭工匠的模具 = { "NAME": "戰爭工匠的模具", "QUANTITY": 1 , "DETAIL": [{"NAME": "工匠模具", "AMT": 1},{"NAME": "鑄模的強化劑", "AMT": 10},{"NAME": "恩尼亞", "AMT": 5}]}; 
var _名匠砧鎖 = { "NAME": "名匠砧鎖", "QUANTITY": 1 , "DETAIL": [{"NAME": "鑄模的潤滑劑", "AMT": 20},{"NAME": "梭芷", "AMT": 10},{"NAME": "巨匠砧鎖", "AMT": 3}]}; 
var _戰爭工匠的骨架 = { "NAME": "戰爭工匠的骨架", "QUANTITY": 1 , "DETAIL": [{"NAME": "線", "AMT": 20},{"NAME": "鑄模的黏劑", "AMT": 10},{"NAME": "巨匠骨架", "AMT": 2}]}; 
var _封印的不死鳥項鍊 = { "NAME": "封印的不死鳥項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 23},{"NAME": "寶石-B級", "AMT": 12},{"NAME": "封印的不死鳥項鍊的珠子", "AMT": 17},{"NAME": "純化的研磨劑", "AMT": 33},{"NAME": "金屬纖維", "AMT": 100},{"NAME": "梭芷", "AMT": 20},{"NAME": "巨匠模具", "AMT": 2}]}; 
var _封印的不死鳥耳環 = { "NAME": "封印的不死鳥耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 18},{"NAME": "寶石-B級", "AMT": 29},{"NAME": "封印的不死鳥耳環的寶石", "AMT": 16},{"NAME": "純化的研磨劑", "AMT": 21},{"NAME": "金屬纖維", "AMT": 35},{"NAME": "梭芷", "AMT": 7},{"NAME": "巨匠模具", "AMT": 1}]}; 
var _封印的不死鳥戒指 = { "NAME": "封印的不死鳥戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 11},{"NAME": "寶石-B級", "AMT": 18},{"NAME": "封印的不死鳥戒指的寶石", "AMT": 15},{"NAME": "純化的研磨劑", "AMT": 18},{"NAME": "鐵匠模具", "AMT": 2},{"NAME": "金屬纖維", "AMT": 30},{"NAME": "梭芷", "AMT": 6}]}; 
var _封印的聖威項鍊 = { "NAME": "封印的聖威項鍊", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 17},{"NAME": "寶石-A級", "AMT": 6},{"NAME": "封印的聖威項鍊的珠子", "AMT": 17},{"NAME": "純化的研磨劑", "AMT": 60},{"NAME": "金屬纖維", "AMT": 200},{"NAME": "梭芷", "AMT": 30},{"NAME": "巨匠模具", "AMT": 3}]}; 
var _封印的聖威耳環 = { "NAME": "封印的聖威耳環", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 15},{"NAME": "寶石-A級", "AMT": 5},{"NAME": "封印的聖威耳環的寶石", "AMT": 20},{"NAME": "純化的研磨劑", "AMT": 39},{"NAME": "金屬纖維", "AMT": 150},{"NAME": "梭芷", "AMT": 25},{"NAME": "巨匠模具", "AMT": 2}]}; 
var _封印的聖威戒指 = { "NAME": "封印的聖威戒指", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 12},{"NAME": "寶石-A級", "AMT": 3},{"NAME": "封印的聖威戒指的寶石", "AMT": 19},{"NAME": "純化的研磨劑", "AMT": 27},{"NAME": "鐵匠模具", "AMT": 3},{"NAME": "金屬纖維", "AMT": 115},{"NAME": "梭芷", "AMT": 18}]}; 
var _鋼劍 = { "NAME": "鋼劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 117},{"NAME": "寶石-D級", "AMT": 34},{"NAME": "鋼劍劍身", "AMT": 4},{"NAME": "炭焦", "AMT": 30},{"NAME": "鐵", "AMT": 60},{"NAME": "鐵鑄模", "AMT": 3}]}; 
var _煉獄之主 = { "NAME": "煉獄之主", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 230},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "煉獄之主刃部", "AMT": 20},{"NAME": "合成的炭焦", "AMT": 40},{"NAME": "米索莉合金", "AMT": 80},{"NAME": "恩尼亞", "AMT": 40},{"NAME": "刀匠鑄模", "AMT": 8},{"NAME": "強化金屬板", "AMT": 40}]}; 
var _英魂之眼 = { "NAME": "英魂之眼", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 215},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "英魂之眼組件", "AMT": 20},{"NAME": "高級軟皮", "AMT": 30},{"NAME": "合成的炭焦", "AMT": 60},{"NAME": "米索莉合金", "AMT": 60},{"NAME": "恩尼亞", "AMT": 30},{"NAME": "巨匠骨架", "AMT": 12},{"NAME": "強化金屬板", "AMT": 120}]}; 
var _火龍之首 = { "NAME": "火龍之首", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 194},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "火龍之首組件", "AMT": 20},{"NAME": "高級軟皮", "AMT": 49},{"NAME": "合成的炭焦", "AMT": 98},{"NAME": "米索莉合金", "AMT": 98},{"NAME": "恩尼亞", "AMT": 49},{"NAME": "巨匠骨架", "AMT": 18},{"NAME": "強化金屬板", "AMT": 196}]}; 
var _下巨人之鎚 = { "NAME": "下巨人之鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 430},{"NAME": "寶石-D級", "AMT": 139},{"NAME": "下巨人之鎚組件", "AMT": 7},{"NAME": "炭焦", "AMT": 88},{"NAME": "鐵", "AMT": 176},{"NAME": "高級軟皮", "AMT": 44}]}; 
var _末日毀滅者 = { "NAME": "末日毀滅者", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 193},{"NAME": "寶石-A級", "AMT": 74},{"NAME": "末日毀滅者金屬塊", "AMT": 20},{"NAME": "高級軟皮", "AMT": 37},{"NAME": "合成的炭焦", "AMT": 74},{"NAME": "米索莉合金", "AMT": 148},{"NAME": "恩尼亞", "AMT": 37},{"NAME": "巨匠骨架", "AMT": 18},{"NAME": "強化金屬板", "AMT": 148}]}; 
var _破壞者巨鎚 = { "NAME": "破壞者巨鎚", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 222},{"NAME": "寶石-B級", "AMT": 143},{"NAME": "破壞者巨鎚組件", "AMT": 20},{"NAME": "高級軟皮", "AMT": 21},{"NAME": "合成的炭焦", "AMT": 42},{"NAME": "米索莉合金", "AMT": 84},{"NAME": "恩尼亞", "AMT": 21},{"NAME": "巨匠骨架", "AMT": 13},{"NAME": "強化金屬板", "AMT": 84}]}; 
var _伊波斯巨劍 = { "NAME": "伊波斯巨劍", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "伊波斯巨劍劍身", "AMT": 20},{"NAME": "合成的炭焦", "AMT": 113},{"NAME": "米索莉合金", "AMT": 226},{"NAME": "恩尼亞", "AMT": 113},{"NAME": "刀匠鑄模", "AMT": 11},{"NAME": "強化金屬板", "AMT": 113}]}; 
var _貝拉凱爾聖斧 = { "NAME": "貝拉凱爾聖斧", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "貝拉凱爾聖斧碎片", "AMT": 20},{"NAME": "高級軟皮", "AMT": 68},{"NAME": "合成的炭焦", "AMT": 136},{"NAME": "米索莉合金", "AMT": 136},{"NAME": "恩尼亞", "AMT": 68},{"NAME": "巨匠骨架", "AMT": 15},{"NAME": "強化金屬板", "AMT": 272}]}; 
var _貝希莫斯巨叉 = { "NAME": "貝希莫斯巨叉", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "貝希莫斯巨叉碎片", "AMT": 20},{"NAME": "高級軟皮", "AMT": 52},{"NAME": "合成的炭焦", "AMT": 104},{"NAME": "米索莉合金", "AMT": 208},{"NAME": "恩尼亞", "AMT": 52},{"NAME": "巨匠骨架", "AMT": 15},{"NAME": "強化金屬板", "AMT": 208}]}; 
var _那卡風暴 = { "NAME": "那卡風暴", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "那卡風暴碎片", "AMT": 20},{"NAME": "合成的炭焦", "AMT": 204},{"NAME": "米索莉合金", "AMT": 204},{"NAME": "恩尼亞", "AMT": 102},{"NAME": "刀匠鑄模", "AMT": 10},{"NAME": "強化金屬板", "AMT": 102}]}; 
var _岱依封長戟 = { "NAME": "岱依封長戟", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "岱依封長戟刃部", "AMT": 20},{"NAME": "高級軟皮", "AMT": 52},{"NAME": "合成的炭焦", "AMT": 104},{"NAME": "米索莉合金", "AMT": 208},{"NAME": "恩尼亞", "AMT": 52},{"NAME": "巨匠骨架", "AMT": 15},{"NAME": "強化金屬板", "AMT": 208}]}; 
var _夏伊德獵弓 = { "NAME": "夏伊德獵弓", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "夏伊德獵弓柄", "AMT": 20},{"NAME": "高級軟皮", "AMT": 68},{"NAME": "合成的絞線", "AMT": 68},{"NAME": "米索莉合金", "AMT": 340},{"NAME": "恩尼亞", "AMT": 68},{"NAME": "巨匠骨架", "AMT": 15},{"NAME": "強化金屬板", "AMT": 136}]}; 
var _索貝克颶風 = { "NAME": "索貝克颶風", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "索貝克颶風刀緣", "AMT": 20},{"NAME": "高級軟皮", "AMT": 68},{"NAME": "合成的炭焦", "AMT": 136},{"NAME": "米索莉合金", "AMT": 136},{"NAME": "恩尼亞", "AMT": 68},{"NAME": "巨匠骨架", "AMT": 15},{"NAME": "強化金屬板", "AMT": 272}]}; 
var _緹米絲之舌 = { "NAME": "緹米絲之舌", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "緹米絲之舌碎片", "AMT": 20},{"NAME": "合成的炭焦", "AMT": 204},{"NAME": "米索莉合金", "AMT": 204},{"NAME": "恩尼亞", "AMT": 102},{"NAME": "刀匠鑄模", "AMT": 10},{"NAME": "強化金屬板", "AMT": 102}]}; 
var _卡布里歐之手 = { "NAME": "卡布里歐之手", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "卡布里歐之手金屬塊", "AMT": 20},{"NAME": "顆粒狀的骨粉", "AMT": 212},{"NAME": "合成的絞線", "AMT": 106},{"NAME": "奧里哈魯根", "AMT": 106},{"NAME": "恩尼亞", "AMT": 106},{"NAME": "巨匠骨架", "AMT": 15},{"NAME": "強化金屬板", "AMT": 212}]}; 
var _惡魔結晶 = { "NAME": "惡魔結晶", "QUANTITY": 1 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 254},{"NAME": "寶石-A級", "AMT": 100},{"NAME": "惡魔結晶碎片", "AMT": 20},{"NAME": "顆粒狀的骨粉", "AMT": 212},{"NAME": "合成的絞線", "AMT": 106},{"NAME": "奧里哈魯根", "AMT": 106},{"NAME": "恩尼亞", "AMT": 106},{"NAME": "巨匠骨架", "AMT": 15},{"NAME": "強化金屬板", "AMT": 212}]}; 
var _祝福的靈魂彈_A級 = { "NAME": "祝福的靈魂彈_A級", "QUANTITY": 155 , "DETAIL": [{"NAME": "結晶-A級", "AMT": 1},{"NAME": "精靈礦石", "AMT": 100}]}; 
var _祝福的靈魂彈_B級 = { "NAME": "祝福的靈魂彈_B級", "QUANTITY": 170 , "DETAIL": [{"NAME": "結晶-B級", "AMT": 1},{"NAME": "精靈礦石", "AMT": 70}]}; 
var _祝福的靈魂彈_C級 = { "NAME": "祝福的靈魂彈_C級", "QUANTITY": 400 , "DETAIL": [{"NAME": "結晶-C級", "AMT": 2},{"NAME": "精靈礦石", "AMT": 40}]}; 
var _祝福的靈魂彈_D級 = { "NAME": "祝福的靈魂彈_D級", "QUANTITY": 330 , "DETAIL": [{"NAME": "結晶-D級", "AMT": 1},{"NAME": "精靈礦石", "AMT": 30}]}; 



function init() {

var equipment = new Array();

for(var b in window) { 
  if(window.hasOwnProperty(b)) { 
	if(b.startsWith("_") == 1) {		
		var json = eval(b);					
		equipment.push(json);
	}
  }
}

var equipHtml = '<select size="10" style="border:0px; width:100%; height:200px;" multiple onchange="document.getElementById(\'materialHome\').innerHTML = \'\'; switchEquip(this.value, 1, true);">';
for(var i = 0 ; i < equipment.length ; i++) {	
	equipHtml += '<option name="items" value="'+equipment[i].NAME+'">'+equipment[i].NAME+'</option>';
}

equipHtml += '</select>';
document.getElementById('equipHome').innerHTML = equipHtml;

}

function switchEquip(val, num, needGen) {
	
	if(val != '') {
		var json = eval('_'+val);
		var NAME = json.NAME;		
		var QUANTITY = json.QUANTITY;	

		num = Math.ceil((num/QUANTITY));
		var DETAIL;
		
		try {					
			DETAIL = json.DETAIL;
			for(var i = 0 ; i < DETAIL.length ; i++) {
				var D_NAME = DETAIL[i].NAME;
				var D_AMT = DETAIL[i].AMT;
				
				var childJson;
				try {
					
					childJson = eval('_'+D_NAME);
					console.log(childJson);				

					if(childJson.DETAIL) {
						if(document.getElementById('_'+D_NAME) == null) {							
							document.getElementById('materialHome').innerHTML += '<input id="_'+D_NAME+'" value="'+(D_AMT*num)+'" style="background-color:red;width:50px;" type="hidden" name="hiddenItems" />';
						} else {						
							var currentVal = parseInt(document.getElementById('_'+D_NAME).value);							
							document.getElementById('materialHome').innerHTML = document.getElementById('materialHome').innerHTML.replace('id="_'+D_NAME+'" value="'+currentVal+'"', 'id="_'+D_NAME+'" value="'+(currentVal + D_AMT*num)+'"');
						}
						switchEquip(D_NAME, D_AMT*num, false);
					} else {
						if(document.getElementById('_'+D_NAME) == null) {							
							document.getElementById('materialHome').innerHTML += '<table border="1" width="100%"><tr><td width="40%" align="center">'+D_NAME+'</td><td align="right"><input id="_'+D_NAME+'" value="'+(D_AMT*num)+'" style="width:100px;text-align: right;" type="number" min="0" onchange="compute();" readonly />個</td><td width="20%" align="right"><input type="number" id="PRICE_'+D_NAME+'" value="0" data-amt="0" min="0" style="width:100px;text-align: right;" onchange="compute();" />元</td><td width="20%" align="right"><input type="number" readonly id="TOTAL__'+D_NAME+'" min="0" value="0" style="width:100px;text-align: right;" onchange="compute();" />元</td></tr></table>';
						} else {						
							var currentVal = parseInt(document.getElementById('_'+D_NAME).value);														
							document.getElementById('materialHome').innerHTML = document.getElementById('materialHome').innerHTML.replace('id="_'+D_NAME+'" value="'+currentVal+'"', 'id="_'+D_NAME+'" value="'+(currentVal + D_AMT*num)+'"');
						}
					}
		
					
				} catch (err) {		
					if(document.getElementById('_'+D_NAME) == null) {
						document.getElementById('materialHome').innerHTML += '<table border="1" width="100%"><tr><td width="40%" align="center">'+D_NAME+'</td><td align="right"><input id="_'+D_NAME+'" value="'+(D_AMT*num)+'" style="width:100px;text-align: right;" type="number" min="0" onchange="compute();" readonly />個</td><td width="20%" align="right"><input type="number" id="PRICE_'+D_NAME+'" value="0" data-amt="0" min="0" style="width:100px;text-align: right;" onchange="compute();" />元</td><td width="20%" align="right"><input type="number" readonly id="TOTAL__'+D_NAME+'" min="0" value="0" style="width:100px;text-align: right;" onchange="compute();" />元</td></tr></table>';
					} else {
						var currentVal = parseInt(document.getElementById('_'+D_NAME).value);												
						document.getElementById('materialHome').innerHTML = document.getElementById('materialHome').innerHTML.replace('id="_'+D_NAME+'" value="'+currentVal+'"', 'id="_'+D_NAME+'" value="'+(currentVal + D_AMT*num)+'"');
					}						
				}
				
			}

					
		} catch (err) {
			
		}
	}

	if(needGen) {
		genMiddle();
		document.getElementById('TOTAL_PRICE').value = 0;
	}		
}

function filterDropDownList(val) {
	var items = document.getElementsByName('items');
	for(var i = 0 ; i < items.length ; i++) {
		if(items[i].innerHTML.indexOf(val) > -1) {
			items[i].style.display = '';
		} else {
			items[i].style.display = 'none';
		}
	}
}

function genMiddle() {
	document.getElementById('alrdyHome').innerHTML = '';
	var input = document.getElementsByName('hiddenItems');
	for(var i = 0 ; i < input.length ; i++) {		
		if(input[i].type == 'hidden') {
			
			document.getElementById('alrdyHome').innerHTML += '<table border="1" width="100%"><tr><td width="40%" align="center">'+input[i].id.replace('_', '') + '</td><td align="right"><input data-origin="0" type="number" min="0" max="'+input[i].value+'" value="0" onchange="minusMaterial(\''+input[i].id.replace('_', '')+'\', (parseInt(this.value)-parseInt(this.getAttribute(\'data-origin\')))); this.setAttribute(\'data-origin\', this.value); compute();" style="width:100px;text-align: right;">個</td><td width="20%" align="right"><input type="number" id="PRICE'+input[i].id+'" min="0" value="0" style="width:100px;text-align: right;" onchange="compute();" />元</td><td width="20%" align="right"><input type="number" readonly id="TOTAL'+input[i].id+'" min="0" value="0" style="width:100px;text-align: right;" onchange="compute();" />元</td></tr></table>';
		}
	}
}

function minusMaterial(name, num) {	
	if(name != '') {
		
		var json = eval('_'+name);

		var DETAIL;
			
		try {					
			DETAIL = json.DETAIL;
			for(var i = 0 ; i < DETAIL.length ; i++) {
				var D_NAME = DETAIL[i].NAME;
				var D_AMT = DETAIL[i].AMT;
					
				var childJson;
				try {
					
					childJson = eval('_'+D_NAME);
									

					if(childJson.DETAIL) {
						
						minusMaterial(D_NAME, D_AMT*num);
					} else {
						if(document.getElementById('_'+D_NAME) == null) {							
		
						} else {						
							var currentVal = parseInt(document.getElementById('_'+D_NAME).value);	
							var dataAmt = parseInt(document.getElementById('PRICE_'+D_NAME).getAttribute('data-amt'));
							var currentPrice = parseInt(document.getElementById('PRICE_'+D_NAME).value);
							

							document.getElementById('materialHome').innerHTML = document.getElementById('materialHome').innerHTML.replace('id="_'+D_NAME+'" value="'+currentVal+'"', 'id="_'+D_NAME+'" value="'+(currentVal - D_AMT*num) +'"');
							document.getElementById('materialHome').innerHTML = document.getElementById('materialHome').innerHTML.replace('id="PRICE_'+D_NAME+'" value="'+dataAmt+'" data-amt="'+dataAmt+'"', 'id="PRICE_'+D_NAME+'" value="'+currentPrice+'" data-amt="+currentPrice+"');

						}
					}
		
						
				} catch (err) {		
					if(document.getElementById('_'+D_NAME) == null) {
						
					} else {
						var currentVal = parseInt(document.getElementById('_'+D_NAME).value);	
						var dataAmt = parseInt(document.getElementById('PRICE_'+D_NAME).getAttribute('data-amt'));
						var currentPrice = parseInt(document.getElementById('PRICE_'+D_NAME).value);
							
						document.getElementById('materialHome').innerHTML = document.getElementById('materialHome').innerHTML.replace('id="_'+D_NAME+'" value="'+currentVal+'"', 'id="_'+D_NAME+'" value="'+(currentVal - D_AMT*num) +'"');						
						document.getElementById('materialHome').innerHTML = document.getElementById('materialHome').innerHTML.replace('id="PRICE_'+D_NAME+'" value="'+dataAmt+'" data-amt="'+dataAmt+'"', 'id="PRICE_'+D_NAME+'" value="'+currentPrice+'" data-amt="+currentPrice+"');

					}						
		
				}
			}
		} catch (err) {
		
		}
		
	}
}

function compute() {
	var inputNumbers = document.getElementsByTagName('input');
	var amt = 0;
	var num = 0;
	var total = 0;
 
	for(var i = 0, j = 0 ; i < inputNumbers.length ; i++) {
		if(inputNumbers[i].type == 'number' && inputNumbers[i].id != 'TOTAL_PRICE') {
			if(j == 0) {
				amt = 0; num = 0;
				amt = parseInt(inputNumbers[i].value);

				console.log('amt:'+amt);
				j = 1;
			} else if(j == 1) {
				num = parseInt(inputNumbers[i].value);
				console.log('num:'+num);
				j = 2;
			} else if(j == 2) {
				if(amt < 0) {
					inputNumbers[i].value = 0;
				} else {
					inputNumbers[i].value = amt*num;
					total += parseInt(inputNumbers[i].value);
				}
				console.log('total:'+inputNumbers[i].value);
				j = 0;
				
			}			
		} else {
			continue;
		}
	}
	console.log('total:'+total);
	document.getElementById('TOTAL_PRICE').value = total;
}
</script>
<body onload="init();">
<table border="1" cellpadding="0" cellspacing="0" style="width:800px;">
<tr><td align="center">
搜尋條件</td><td><input style="width:100%; height:20px;" type="text" value="" id="filterDropDownList" onkeyup="filterDropDownList(this.value);" /></td></tr>
<tr style="height:200px;"><td align="center">名稱</td><td><div id="equipHome"></div></td></tr>
<tr style="height:30px;"><td align="center">已有材料</td><td><table border="1" width="100%" style="background-color:lightgray;"><tr align="center"><td width="40%" align="center">材料名稱</td><td width="20%">持有數量</td><td width="20%">單價</td><td width="20%">小計</td></tr></table><div id="alrdyHome"></div></td></tr>
<tr style="height:30px;">
<td align="center" style="width:100px;">材料清單</td><td valign="top"><table border="1" width="100%" style="background-color:lightgray;"><tr align="center"><td width="40%" align="center">材料名稱</td><td width="20%">需準備數量</td><td width="20%">單價</td><td width="20%">小計</td></tr></table>
<div id="materialHome"></div>
</td></tr>
<tr style="height:30px;"><td align="center">總價</td><td align="right"><table border="1" width="100%"><tr align="center"><td width="40%" align="center">&nbsp;</td><td align="center">&nbsp;</td><td width="20%" align="center">&nbsp;</td><td width="20%" align="right"><input type="number" id="TOTAL_PRICE" readonly min="0" value="0" style="width:100px;text-align: right;"/>元</td></tr></table>
</td></tr>
</table>
