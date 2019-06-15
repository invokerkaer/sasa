<?php
error_reporting(0);
$key = $_REQUEST["key"];

//首页数据
/*存储导航栏数据*/
$nav1 = array("hd"=>"面部护肤","column"=>array(array("head"=>"洁面/磨砂","list"=>array("泡沫洁面乳","洁面摩丝","洁面奶","洁面皂","洁面粉","磨砂膏")),array("head"=>"眼部/唇部/颈部护理","list"=>array("眼霜","眼胶","唇膏","颈霜","睡眠免法式眼膜")),array("head"=>"面膜","list"=>array("面膜贴","水洗式面膜","面膜粉")),array("head"=>"防晒护理","list"=>array("防晒乳液","防晒啫喱","防晒喷雾","晒后护理")),array("head"=>"暗疮护理","list"=>array("暗疮膏","暗疮精华","黑头导出液/膏","撕拉式鼻贴/鼻膜")),array("head"=>"精华/化妆水","list"=>array("精华液","精华素/疗程","柔肤水","精华水",)),array("head"=>"卸妆","list"=>array("卸妆油","眼/唇专用卸妆液","卸妆水","卸妆乳",))));
$nav2 = array("hd"=>"彩妆","column"=>array(array("head"=>"面部彩妆","list"=>array("隔离霜","粉底","遮瑕","BB霜","CC霜","胭脂")),array("head"=>"眼部彩妆","list"=>array("眉笔/眉粉","眼影","眼线","睫毛膏")),array("head"=>"其他","list"=>array("美唇","彩妆盒/套装","化妆棉","化妆工具","美甲"))));
$nav3 = array("hd"=>"香水","column"=>array(array("head"=>"香水","list"=>array("女士香水","男士香水","香水套装","香水工具",))));
$nav4 = array("hd"=>"健康美肌","column"=>array(array("head"=>"健康美肌","list"=>array("美容补充品","保健品","非处方药","健康零食","天然草本茶"))));
$nav5 = array("hd"=>"纤体美胸","column"=>array(array("head"=>"纤体美胸","list"=>array("纤体护理","纤体食品","纤体工具","纤体套装","美胸用品",))));
$nav6 = array("hd"=>"个人护理","column"=>array(array("head"=>"身体护理","list"=>array("沐浴/润肤","洗发/护发","头发造型","手足部护理","脱毛用品","女性护理","止汗香体")),array("head"=>"其他","list"=>array("隐形眼镜","口腔护理","家具用品","头饰/饰物"))));
$nav7 = array("hd"=>"男士专区","column"=>array(array("head"=>"男士专区","list"=>array("男士洁面","男士护肤","剃须护理","男士头部护理"))));
$nav8 = array("hd"=>"孕婴护理","column"=>array(array("head"=>"孕婴护理","list"=>array("母婴团","婴儿沐浴","婴儿护肤","婴儿食品","孕妇护肤","孕妇食品","其他孕婴工具"))));


/*存储每日必备的数据*/
$mc1 = array("img"=>"../images/1mustcheck.jpg","title"=>"人气美肌必备","subtit"=>"HABA G 露 (180 毫升) 到手价 128元","date"=>"护肤分会场","btn"=>"立即疯抢");
$mc2 = array("img"=>"../images/2mustcheck.jpg","title"=>"畅享美丽'膜'法","subtit"=>"贝佳斯 矿物营养泥浆面膜(绿泥) 到手价 118元","date"=>"面膜分会场","btn"=>"立即疯抢");
$mc3 = array("img"=>"../images/1mustcheck.jpg","title"=>"人气美肌必备","subtit"=>"HABA G 露 (180 毫升) 到手价 128元","date"=>"护肤分会场","btn"=>"立即疯抢");
$mc4 = array("img"=>"../images/2mustcheck.jpg","title"=>"畅享美丽'膜'法","subtit"=>"贝佳斯 矿物营养泥浆面膜(绿泥) 到手价 118元","date"=>"面膜分会场","btn"=>"立即疯抢");
$mc5 = array("img"=>"../images/1mustcheck.jpg","title"=>"人气美肌必备","subtit"=>"HABA G 露 (180 毫升) 到手价 128元","date"=>"护肤分会场","btn"=>"立即疯抢");
$mc6 = array("img"=>"../images/2mustcheck.jpg","title"=>"畅享美丽'膜'法","subtit"=>"贝佳斯 矿物营养泥浆面膜(绿泥) 到手价 118元","date"=>"面膜分会场","btn"=>"立即疯抢");
$mc7 = array("img"=>"../images/1mustcheck.jpg","title"=>"人气美肌必备","subtit"=>"HABA G 露 (180 毫升) 到手价 128元","date"=>"护肤分会场","btn"=>"立即疯抢");
$mc8 = array("img"=>"../images/2mustcheck.jpg","title"=>"畅享美丽'膜'法","subtit"=>"贝佳斯 矿物营养泥浆面膜(绿泥) 到手价 118元","date"=>"面膜分会场","btn"=>"立即疯抢");


/*存储限时特卖的数据*/
$limit1 = array("id"=>"582354","img"=>"../images/1limit.jpg","discountNum"=>"9.2","discountWord"=>"折","icon"=>"两倍浓缩的干细胞，帮助肌肤日复日变得更年轻，且皱纹也都给抚平，肌肤光泽度也得以提升。","title"=>"赫莲娜 Powercell Skinmunity Serum绿宝瓶精华液 75 毫升","yew"=>"香港特快直送 零扣关 包税","curprice"=>"1288","oldprice"=>"￥1400","soldnum"=>"0");
$limit2 = array("id"=>"582333","img"=>"../images/2limit.jpg","discountNum"=>"6","discountWord"=>"折","icon"=>"美肌水润 5 步曲，还你水漾少女肌！","title"=>"兰芝 基础护理套装 水痕透润 5件","yew"=>"国内保税仓 零扣关 包税 ","curprice"=>"269","oldprice"=>"￥445","soldnum"=>"2");
$limit3 = array("id"=>"582322","img"=>"../images/1limit.jpg","discountNum"=>"9.2","discountWord"=>"折","icon"=>"两倍浓缩的干细胞，帮助肌肤日复日变得更年轻，且皱纹也都给抚平，肌肤光泽度也得以提升。","title"=>"赫莲娜 Powercell Skinmunity Serum绿宝瓶精华液 75 毫升","yew"=>"香港特快直送 零扣关 包税","curprice"=>"1288","oldprice"=>"￥1400","soldnum"=>"0");
$limit4 = array("id"=>"582311","img"=>"../images/2limit.jpg","discountNum"=>"6","discountWord"=>"折","icon"=>"美肌水润 5 步曲，还你水漾少女肌！","title"=>"兰芝 基础护理套装 水痕透润 5件","yew"=>"国内保税仓 零扣关 包税 ","curprice"=>"269","oldprice"=>"￥445","soldnum"=>"2");
$limit5 = array("id"=>"582344","img"=>"../images/1limit.jpg","discountNum"=>"9.2","discountWord"=>"折","icon"=>"两倍浓缩的干细胞，帮助肌肤日复日变得更年轻，且皱纹也都给抚平，肌肤光泽度也得以提升。","title"=>"赫莲娜 Powercell Skinmunity Serum绿宝瓶精华液 75 毫升","yew"=>"香港特快直送 零扣关 包税","curprice"=>"1288","oldprice"=>"￥1400","soldnum"=>"0");
$limit6 = array("id"=>"582313","img"=>"../images/2limit.jpg","discountNum"=>"6","discountWord"=>"折","icon"=>"美肌水润 5 步曲，还你水漾少女肌！","title"=>"兰芝 基础护理套装 水痕透润 5件","yew"=>"国内保税仓 零扣关 包税 ","curprice"=>"269","oldprice"=>"￥445","soldnum"=>"2");
$limit7 = array("id"=>"582355","img"=>"../images/1limit.jpg","discountNum"=>"9.2","discountWord"=>"折","icon"=>"两倍浓缩的干细胞，帮助肌肤日复日变得更年轻，且皱纹也都给抚平，肌肤光泽度也得以提升。","title"=>"赫莲娜 Powercell Skinmunity Serum绿宝瓶精华液 75 毫升","yew"=>"香港特快直送 零扣关 包税","curprice"=>"1288","oldprice"=>"￥1400","soldnum"=>"0");
$limit8 = array("id"=>"582366","img"=>"../images/2limit.jpg","discountNum"=>"6","discountWord"=>"折","icon"=>"美肌水润 5 步曲，还你水漾少女肌！","title"=>"兰芝 基础护理套装 水痕透润 5件","yew"=>"国内保税仓 零扣关 包税 ","curprice"=>"269","oldprice"=>"￥445","soldnum"=>"2");
$limit9 = array("id"=>"582377","img"=>"../images/1limit.jpg","discountNum"=>"9.2","discountWord"=>"折","icon"=>"两倍浓缩的干细胞，帮助肌肤日复日变得更年轻，且皱纹也都给抚平，肌肤光泽度也得以提升。","title"=>"赫莲娜 Powercell Skinmunity Serum绿宝瓶精华液 75 毫升","yew"=>"香港特快直送 零扣关 包税","curprice"=>"1288","oldprice"=>"￥1400","soldnum"=>"0");
$limit10 = array("id"=>"582388","img"=>"../images/2limit.jpg","discountNum"=>"6","discountWord"=>"折","icon"=>"美肌水润 5 步曲，还你水漾少女肌！","title"=>"兰芝 基础护理套装 水痕透润 5件","yew"=>"国内保税仓 零扣关 包税 ","curprice"=>"269","oldprice"=>"￥445","soldnum"=>"2");


/*存储排行榜的数据*/
/*左*/
$rankLeft1 = array("numRank"=>"28191","id"=>"27213","img"=>"../images/rankleft1.jpg","alt"=>"红球藻逆龄修复面膜","yew"=>"国内保税仓 零扣关 包税","title"=>"安娜贝拉 红球藻逆龄修复面膜 30克x10片","curprice"=>"￥45","oldprice"=>"￥111.7","soldnum"=>"111");
$rankLeft2 = array("numRank"=>"23333","id"=>"27333","img"=>"../images/rankleft1.jpg","alt"=>"红球藻逆龄修复面膜","yew"=>"国内保税仓 零扣关 包税","title"=>"安娜贝拉 红球藻逆龄修复面膜 30克x10片","curprice"=>"￥45","oldprice"=>"￥111.7","soldnum"=>"101");
$rankLeft3 = array("numRank"=>"32411","id"=>"27443","img"=>"../images/rankleft1.jpg","alt"=>"红球藻逆龄修复面膜","yew"=>"国内保税仓 零扣关 包税","title"=>"安娜贝拉 红球藻逆龄修复面膜 30克x10片","curprice"=>"￥45","oldprice"=>"￥111.7","soldnum"=>"61");
$rankLeft4 = array("numRank"=>"28131","id"=>"27553","img"=>"../images/rankleft1.jpg","alt"=>"红球藻逆龄修复面膜","yew"=>"国内保税仓 零扣关 包税","title"=>"安娜贝拉 红球藻逆龄修复面膜 30克x10片","curprice"=>"￥45","oldprice"=>"￥111.7","soldnum"=>"11");
$rankLeft5 = array("numRank"=>"24191","id"=>"27663","img"=>"../images/rankleft1.jpg","alt"=>"红球藻逆龄修复面膜","yew"=>"国内保税仓 零扣关 包税","title"=>"安娜贝拉 红球藻逆龄修复面膜 30克x10片","curprice"=>"￥45","oldprice"=>"￥111.7","soldnum"=>"1");
/*中*/
$rankMiddle1 = array("numRank"=>"28178","id"=>"27323","img"=>"../images/rankmiddle1.jpg","alt"=>"持妆粉底液","yew"=>"香港特快直送 零扣关 包税","title"=>"雅诗兰黛  持妆粉底液 SPF10/PA++ 30毫升","curprice"=>"￥278","oldprice"=>"￥360","soldnum"=>"78");
$rankMiddle2 = array("numRank"=>"28112","id"=>"54213","img"=>"../images/rankmiddle1.jpg","alt"=>"持妆粉底液","yew"=>"香港特快直送 零扣关 包税","title"=>"雅诗兰黛  持妆粉底液 SPF10/PA++ 30毫升","curprice"=>"￥278","oldprice"=>"￥360","soldnum"=>"48");
$rankMiddle3 = array("numRank"=>"28133","id"=>"55213","img"=>"../images/rankmiddle1.jpg","alt"=>"持妆粉底液","yew"=>"香港特快直送 零扣关 包税","title"=>"雅诗兰黛  持妆粉底液 SPF10/PA++ 30毫升","curprice"=>"￥278","oldprice"=>"￥360","soldnum"=>"18");
$rankMiddle4 = array("numRank"=>"28192","id"=>"52213","img"=>"../images/rankmiddle1.jpg","alt"=>"持妆粉底液","yew"=>"香港特快直送 零扣关 包税","title"=>"雅诗兰黛  持妆粉底液 SPF10/PA++ 30毫升","curprice"=>"￥278","oldprice"=>"￥360","soldnum"=>"8");
$rankMiddle5 = array("numRank"=>"28193","id"=>"59213","img"=>"../images/rankmiddle1.jpg","alt"=>"持妆粉底液","yew"=>"香港特快直送 零扣关 包税","title"=>"雅诗兰黛  持妆粉底液 SPF10/PA++ 30毫升","curprice"=>"￥278","oldprice"=>"￥360","soldnum"=>"7");
/*右*/
$rankRight1 = array("numRank"=>"43255","id"=>"23777","img"=>"../images/rankright1.jpg","alt"=>"樱花沐浴露","yew"=>"香港特快直送 零扣关 包税","title"=>"ATREUS  樱花沐浴露 250毫升","curprice"=>"￥35","oldprice"=>"￥58","soldnum"=>"109");
$rankRight2 = array("numRank"=>"43335","id"=>"23447","img"=>"../images/rankright1.jpg","alt"=>"樱花沐浴露","yew"=>"香港特快直送 零扣关 包税","title"=>"ATREUS  樱花沐浴露 250毫升","curprice"=>"￥35","oldprice"=>"￥58","soldnum"=>"56");
$rankRight3 = array("numRank"=>"43885","id"=>"23007","img"=>"../images/rankright1.jpg","alt"=>"樱花沐浴露","yew"=>"香港特快直送 零扣关 包税","title"=>"ATREUS  樱花沐浴露 250毫升","curprice"=>"￥35","oldprice"=>"￥58","soldnum"=>"49");
$rankRight4 = array("numRank"=>"43115","id"=>"23997","img"=>"../images/rankright1.jpg","alt"=>"樱花沐浴露","yew"=>"香港特快直送 零扣关 包税","title"=>"ATREUS  樱花沐浴露 250毫升","curprice"=>"￥35","oldprice"=>"￥58","soldnum"=>"39");
$rankRight5 = array("numRank"=>"43775","id"=>"23667","img"=>"../images/rankright1.jpg","alt"=>"樱花沐浴露","yew"=>"香港特快直送 零扣关 包税","title"=>"ATREUS  樱花沐浴露 250毫升","curprice"=>"￥35","oldprice"=>"￥58","soldnum"=>"29");


/*存储上市新品的数据*/
$new1 = array("serial"=>"87463","numNew"=>"71143","id"=>"19998","img"=>"../images/new1.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"../images/newJap.png","name"=>"日本产品","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"89","oldprice"=>"119.0");
$new2 = array("serial"=>"87333","numNew"=>"72243","id"=>"19228","img"=>"../images/new2.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"../images/newKor.png","name"=>"韩国产品","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"10","oldprice"=>"199.0");
$new3 = array("serial"=>"87443","numNew"=>"73343","id"=>"19338","img"=>"../images/new3.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"../images/newWes.png","name"=>"欧美产品","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"2","oldprice"=>"999.0");
$new4 = array("serial"=>"87553","numNew"=>"44243","id"=>"19558","img"=>"../images/new4.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"","name"=>"","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"89","oldprice"=>"119.0");
$new5 = array("serial"=>"87533","numNew"=>"75543","id"=>"19448","img"=>"../images/new1.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"../images/newJap.png","name"=>"日本产品","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"89","oldprice"=>"119.0");
$new6 = array("serial"=>"87323","numNew"=>"76643","id"=>"19668","img"=>"../images/new2.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"../images/newKor.png","name"=>"韩国产品","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"8","oldprice"=>"119.0");
$new7 = array("serial"=>"87773","numNew"=>"77743","id"=>"19778","img"=>"../images/new3.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"../images/newWes.png","name"=>"欧美产品","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"49","oldprice"=>"119.0");
$new8 = array("serial"=>"87883","numNew"=>"78843","id"=>"19888","img"=>"../images/new4.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"../","name"=>"","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"89","oldprice"=>"119.0");
$new9 = array("serial"=>"87993","numNew"=>"79943","id"=>"19008","img"=>"../images/new1.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"../images/newWes.png","name"=>"欧美产品","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"299","oldprice"=>"119.0");
$new10 = array("serial"=>"80063","numNew"=>"00543","id"=>"11198","img"=>"../images/new2.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"","name"=>"","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"89","oldprice"=>"119.0");
$new11 = array("serial"=>"81163","numNew"=>"11543","id"=>"12298","img"=>"../images/new3.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"","name"=>"","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"89","oldprice"=>"119.0");
$new12 = array("serial"=>"82263","numNew"=>"22543","id"=>"13398","img"=>"../images/new4.jpg","alt"=>"怡思丁多维光护沁融水感防晒液30毫升","icon"=>"","name"=>"","yew"=>"香港特快直送 零扣关 包税","title"=>"怡思丁 多维光护沁融水感防晒液 30毫升","newprice"=>"89","oldprice"=>"119.0");

//列表页数据
/*产品各项数据*/
$list1 = array("id"=>"1111","listNum"=>"111","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"4.3折","curprice"=>"￥109.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list2 = array("id"=>"1112","listNum"=>"112","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"4折","curprice"=>"￥111.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"200毫升","down"=>"直降",);
$list3 = array("id"=>"1113","listNum"=>"113","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"8.2折","curprice"=>"￥149.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list4 = array("id"=>"1114","listNum"=>"114","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"6.5折","curprice"=>"￥199.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list5 = array("id"=>"1115","listNum"=>"115","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"3.7折","curprice"=>"￥369.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list6 = array("id"=>"1116","listNum"=>"116","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"4.3折","curprice"=>"￥288.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list7 = array("id"=>"1117","listNum"=>"117","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"4.3折","curprice"=>"￥45.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list8 = array("id"=>"1118","listNum"=>"118","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"5.3折","curprice"=>"￥10.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list9 = array("id"=>"1119","listNum"=>"119","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"4.9折","curprice"=>"￥999.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list10 = array("id"=>"1121","listNum"=>"121","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"9,9折","curprice"=>"￥666.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);
$list11 = array("id"=>"1122","listNum"=>"122","img"=>array("../images/lista.jpg","../images/list1.jpg","../images/list2.jpg","../images/list3.jpg"),"alt"=>"欧树蜂蜜洁肤凝胶【面部/身体】","icon"=>"../images/newWes.png","name"=>"欧美品牌","discount"=>"1.1折","curprice"=>"￥333.0","oldprice"=>"￥252.0","yew"=>"国内保税仓 零扣关 包税","brand"=>"欧树","des"=>"蜂蜜梦幻柔护系列 欧树蜂蜜洁肤凝胶【面部/身体】","volume"=>"400毫升","down"=>"直降",);


$resSasa = array("mustCheck"=>array($mc1,$mc2,$mc3,$mc4,$mc5,$mc6,$mc7,$mc8,),"limit"=>array($limit1,$limit2,$limit3,$limit4,$limit5,$limit6,$limit7,$limit8,$limit9,$limit10,),"rank"=>array("left"=>array($rankLeft1,$rankLeft2,$rankLeft3,$rankLeft4,$rankLeft5,),"middle"=>array($rankMiddle1,$rankMiddle2,$rankMiddle3,$rankMiddle4,$rankMiddle5,),"right"=>array($rankRight1,$rankRight2,$rankRight3,$rankRight4,$rankRight5,)),"newSasa"=>array($new1,$new2,$new3,$new4,$new5,$new6,$new7,$new8,$new9,$new10,$new11,$new12,),"nav"=>array($nav1,$nav2,$nav3,$nav4,$nav5,$nav6,$nav7,$nav8,),"list"=>array($list1,$list2,$list3,$list4,$list5,$list6,$list7,$list8,$list9,$list10,$list11,),);


echo json_encode($resSasa[$key]);
?>