(function ($) {
    $(function () {
        //根据数据生成列表页面 传递data参数为list
        $.ajax({
            type: "post",
            url: "http://127.0.0.1/shasha/php/sasa.php",
            async:false,
            data: "key=list",
            success(responseText) {
                let res = JSON.parse(responseText);
                console.log(res);
                //渲染
                let listBox = $(".arrivalslist");
                $(res).each(function (index) {
                    let listR = "";
                    if(index % 3 == 2){listR = "left"};
                    listBox.append($(`<li class='${listR}'></li>`).append($(`<div class="formall pro${res[index].id}" product_id="${res[index].id}" goods_id="${res[index].listNum}"></div>`).append($(`<div class="formalpic fr"></div>`).append($(`<dl class="formalpic_list"></dl>`).append($(`<dd key="0"></dd>`).append($(`<img switch-src='${res[index].img[0]}' src='${res[index].img[1]}' alt='${res[index].alt}'>`))).append($(`<dd key='0'></dd>`).append($(`<img switch-src='${res[index].img[0]}' src='${res[index].img[1]}' alt='${res[index].alt}'>`))).append($(`<dd key='0'></dd>`).append($(`<img switch-src='${res[index].img[0]}' src='${res[index].img[2]}' alt='${res[index].alt}'>`))).append($(`<dd key='0'><>`).append($(`<img switch-src='${res[index].img[0]}' src='${res[index].img[0]}' alt='${res[index].alt}'>`))))).append($(`<div class="formallcont"></div>`).append($(`<div class='arrivals-pic'></div>`).append($(`<dl></dl>`).append($(`<dd></dd>`).append($(`<i class="icountry"></i>`).append($(`<img src='${res[index].icon}'>`))).append(`${res[index].name}`))).append($(`<a href='detail.html'></a>`).append($(`<img src='${res[index].img[0]}' alt='${res[index].alt}' id="JS-goods-img-${index}" class="action-goods-img">`)))).append($(`<div class="sale-price"></div>`).append($(`<span class="count fr"></span>`).text(`${res[index].discount}`)).append($(`<span class="price tl"></span>`).text(`${res[index].curprice}`)).append($(`<span class="dis tl"></span>`).append($(`<del></del>`).text(`${res[index].oldprice}`)))).append($(`<div class="arrivals-info"></div>`).append($(`<div class="infoconts"></div>`).append($(`<div class="des02"></div>`).append($(`<b class="yew"></b>`).text(`${res[index].yew}`)).append($(`<a href=''></a>`).text(`${res[index].brand}`))).append($(`<p class="des03"></p>`).append($(`<a href=''></a>`).text(`${res[index].des}`))).append($(`<p class="des04"></p>`).text(`${res[index].volume}`))).append($(`<div class="tags"></div>`).append($(`<a href='' style="background:#c69a62;color:#ffffff;"></a>`)))).append($(`<div class="btn-buy"></div>`).append($(`<a href='' class="btn btn-major action-addtocart" rel="nofollow"></a>`).append($(`<span></span>`).append($(`<span></span>`).text(`加入购物车`))))))));
                });
                listBox.append($(`<li class='last'></li>`).append($(`<b class="ipak itips"></b>`)).append($(`<a href='' class="flip next"></a>`).append($(`<i class="inext itips"></i>`)).append($(`<p class="nextpage"></p>`).text(`下一页`)).append($(`<p class="pageinfo"></p>`).text(`显示下一页结果`))));
            },
            error(xhr) {
                alert("系统异常" + xhr.status)
            },
        })

        //排序
        //设置价格排序方法
        let galleryList = $(".gallery-sort");
        let listProduct = $(".arrivalslist li:not('.last')");
        let listSort =[];
        function priceSort(listProduct,className){
            let listArr = [];
            listProduct.each(function(index,value){
                let curListKey = listProduct.eq(index).children().attr("product_id");
                let curListVal = listProduct.eq(index).find(".price").text().slice(1,-1);

                listArr.push([curListKey,curListVal,listProduct[index]]);
            })
            // console.log(listArr);
            let listPrice = [];
            for(let i = 0,len = listArr.length;i < len;i++){
                listPrice.push(listArr[i][1]);
            }
            if(className == "asc"){
                listPrice.sort(function(a,b){return a - b;});
            }else if(className == "desc"){
                listPrice.sort(function(a,b){return b - a;});
            }
            for(let j = 0,len = listPrice.length;j < len;j++){
                let curNum = listPrice[j];
                for(let k = 0,len = listArr.length;k < len;k++){
                    if(curNum == listArr[k][1]){
                        listSort.push(listArr[k][2]);
                        break;
                    }
                }
            };
            return listSort;
        }
        let listSortOfPrice = $(".arrivalslist")
        galleryList.on("click","a",function(event){
            let e = $(event.target);
            event.preventDefault();
            if(e.text() == "价格"){
                if(!e.next().attr("class")){
                    e.next().addClass("asc");
                }else if(e.next().attr("class") == "asc"){
                    e.next().removeClass("asc").addClass("desc");
                }else if(e.next().attr("class") == "desc"){
                    e.next().removeClass("desc").addClass("asc");
                }
                let priceClassName = e.next().attr("class");
                priceSort(listProduct,priceClassName);
                let res = listSortOfPrice.empty().append($(`<input type="hidden" class="action-pagedata" value="{total:188, pagecurrent:1, pagetotal:9}">`));
                $(listSort).each(function(index){
                    res.append(listSort[index]);
                })
            }
        })
    })
})(jQuery)