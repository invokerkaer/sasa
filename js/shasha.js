(function ($) {
    $(function () {
        //进入页面读取本地数据自动登录
        let login = JSON.parse(localStorage.getItem("login"));
        if (login) {
            $("#loginBar_538").css("display", "none");
            $("#memberBar_538").css("display", "block");
        } else {
            $("#loginBar_538").css("display", "block");
            $("#memberBar_538").css("display", "none");
        }
        //退出功能
        let quit = $("#quit");
        quit.on("click", function (e) {
            console.log(1);
            let event = e || window.event;
            event.preventDefault();
            localStorage.removeItem("login");
            $("#loginBar_538").css("display", "block");
            $("#memberBar_538").css("display", "none");
        })
        // topbar效果
        let noline = $(".noline");
        let minicart = $(".minicart-cont-rs");
        let memberAttention2Item = $(".member_attention_2_item");
        noline.eq(0).hover(function () {
            $(this).children("#memDl").stop(true).slideDown(300);
        }, function () {
            $(this).children("#memDl").stop(true).slideUp(300);
        });
        // 根据本地存储数据更新购物车
        noline.eq(1).hover(function () {
            // console.log($(this).children().children(".miniCarDetail"));
            $(this).children().children(".miniCarDetail").css("visibility", "unset");
            let miniCar = localStorage.getItem("minnicar");
            if (!miniCar) {
                minicart.children(".empty").html("购物车还没有商品，<br>快去挑选心爱的商品吧")
            } else {

            };
        }, function () {
            $(this).children().children(".miniCarDetail").css("visibility", "hidden");
        });
        memberAttention2Item.hover(function () {
            $(this).next().next().css("display", "block");
        }, function () {
            $(this).next().next().css("display", "none");
        })

        //导航小王子启动 传递data参数为nav
        $.ajax({
            type: "post",
            url: "http://127.0.0.1/shasha/php/sasa.php",
            data: "key=nav",
            success(responseText) {
                let res = JSON.parse(responseText);
                //渲染
                let navBox = $(".sasa_category_ul");
                $(res).each(function (index) {
                    // let navRank = "fst"
                    //     if (index % 3 == 1) {
                    //         navRank = "sec"
                    //     } else if (index % 3 == 2) {
                    //         navRank = "thd"
                    //     };
                    navBox.append($(`<li class="sasa_category_item"></li>`).append($(`<div class="sasa_category_item_inner"></div>`).append($(`<div class="sasa_category_item_hd"></div>`).append($(`<a href='list.html'></a>`).text(`${res[index].hd}`))).append($(`<i class="iconfont more_category"></i>`)).append($(`<div class="sasa_category_sidebox" style></div>`))));
                    let navSide = $(".sasa_category_sidebox").eq(index);
                    let res1 = res[index]["column"];
                    $(res1).each(function (index1, value) {
                        navSide.append($(`<div class="sasa_category_column"></div>`).append($(`<div class="sasa_category_column_head"></div>`).append($(`<a href=''></a>`).text(`${res1[index1].head}`))).append($(`<div class="sasa_category_item_list"></div>`)));
                        let navItem = $(".sasa_category_sidebox").eq(index);
                        let navList = navItem.children().children(".sasa_category_item_list").eq(index1);
                        let res2 = res1[index1]["list"];
                        $(res2).each(function(index2,value){
                            navList.append($(`<a href='list.html'>${res2[index2]}</a>`));
                        });
                    });
                });
            },
            error(xhr) {
                alert("系统异常" + xhr.status)
            }
        })

        //轮播图
        let bannerBox = $(".switchable-panel");
        let bannerClick = $(".switchable-triggerBox");
        let bannerImg = ["../images/banner1.jpg", "../images/banner2.jpg", "../images/banner3.jpg", "../images/banner1.jpg"];
        bannerBox.css({
            "background": `url(${bannerImg[0]}) no-repeat center center`,
            "background-size": "cover",
        })
        let t = 0;
        $(bannerImg).each(function (index, value) {
            if (index >= bannerImg.length - 1) {
                return;
            }
            bannerClick.append($("<li class='bannerList'></li>"));
        })
        let bannerList = $(".bannerList");
        bannerList.first().css("background", "#fa3778");
        bannerClick.on("click", "li", function (e) {
            let target = $(e.target);
            let index1 = $(target).index();
            bannerBox.css({
                "background": `url(${bannerImg[index1]}) no-repeat center center`,
                "background-size": "cover",
            });
            bannerList.eq(index1).css("background", "#fa3778").siblings().css("background", "#333");
            t = index1;
        })
        let autoPlay = () => {
            timer = setInterval(function () {
                let index2 = t % bannerImg.length;
                t++;
                bannerBox.css({
                    "background": `url(${bannerImg[index2]}) no-repeat center center`,
                    "background-size": "cover",
                },1);
                bannerList.eq(index2).css("background", "#fa3778").siblings().css("background", "#333");
            }, 1000)
        };
        autoPlay();
        bannerBox.hover(() => clearInterval(timer), autoPlay);

        //公告栏轮播
        let broadcastBox = $(".sasa_broadcast_adv_box");
        let broadcastAdv = $(".sasa_broadcast_adv");
        let advCount = broadcastAdv.length;
        let offsetHeight = broadcastAdv.height();
        let advIndex = 0;
        let advTimer = setInterval(function () {
            advIndex++;
            if (advIndex >= advCount) {
                advIndex = 1;
                broadcastBox.css("top", 0)
            }
            broadcastBox.animate({
                "top": `${- (advIndex) * offsetHeight}px`,
            });
        }, 2000)

        //每日必看 根据请求数据渲染页面 传递参数为mustcheck
        $.ajax({
            type: "post",
            url: "http://127.0.0.1/shasha/php/sasa.php",
            data: "key=mustCheck",
            success(responseText) {
                let res = JSON.parse(responseText);
                //渲染
                let mustCheckBox = $("#sasa_mustcheck_container");
                $(res).each(function (index) {
                    if (index % 2 == 0) {
                        var mcIndex = "odd";
                    } else {
                        var mcIndex = "even";
                    }
                    mustCheckBox.append($(`<a href='' class='sasa_mustcheck_a_${mcIndex}'></a>`).append($(`<div class="sasa_mustcheck_item sasa_mustcheck_item_${mcIndex}"></div>`).append($(`<img src="${res[index].img}" alt="" class="sasa_mustcheck_img">`)).append($(`<div class="sasa_mustcheck_info"></div>`).append($(`<p class="sasa_mustcheck_title"></p>`).text(`${res[index].title}`)).append($(`<p class="sasa_mustcheck_subtit"></p>`).text(`${res[index].subtit}`)).append($(`<p class="sasa_mustcheck_date"></p>`).text(`${res[index].date}`)).append($(`<span class="sasa_mustcheck_btn"></span>`).text(`${res[index].btn}`)))));
                })
            },
            error(xhr) {
                alert("系统异常" + xhr.status)
            }
        })
        //限时特卖 根据数据渲染页面 传递data参数为limit
        $.ajax({
            type: "post",
            url: "http://127.0.0.1/shasha/php/sasa.php",
            data: "key=limit",
            success(responseText) {
                let res = JSON.parse(responseText);
                //渲染
                let limitBox = $("#index_seckill_514");
                $(res).each(function (index) {
                    limitBox.append($(`<a href=''></a>`).append($(`<div class="sasa_limit_item" id="iprefix_index_seckill2_${res[index].id}"></div>`).append($(`<div class="sasa_limit_imgWrapper"></div>`).append($(`<img src='${res[index].img}' alt="Powercell Skinmunity Serum绿宝瓶精华液" class="sasa_limit_img">`)).append($(`<li class="sasa_limit_count"></li>`).append($(`<b></b>`).text(`${res[index].discountNum}`).append($(`<span></span>`).text("折"))))).append($(`<div class="sasa_limit_info"></div>`).append($(`<div class="sasa_limit_countdown" id="iprefix_seckill2_time_${res[index].id}"></div>`).append(`剩余`).append($(`<span class="hour"></span>`)).append(`:`).append($(`<span class='minute'></span>`)).append(`:`).append($(`<span class='second'></span>`))).append($(`<div class="sasa_limit_detail"></div>`).append($(`<div class="sasa_limit_detail_intro"></div>`).text(`${res[index].icon}`)).append($(`<div class="sasa_limit_detail_title"></div>`).append($(`<b class="yew"></b>`).text(`${res[index].yew}`)).append(`${res[index].title}`)).append($(`<div class="sasa_limit_detail_price"></div>`).append($(`<div class="sasa_limit_price_cur"></div>`).append($(`<span class="sasa_limit_price_cur_sig"></span>`).text("￥")).append($(`<span class="sasa_limit_price_cur_num"></span>`).text(`${res[index].curprice}`))).append($(`<div class="sasa_limit_price_old"></div>`).append($(`<span class="sasa_limit_price_old_num"></span>`).text(`${res[index].oldprice}`))))).append($(`<div class="sasa_limit_bottom"></div>`).append($(`<div class="sasa_limit_sold" style="display: none"></div>`).append(`已售`).append($(`<span class="sasa_limit_soldnum"></span>`).text(`${res[index].soldnum}`)).append(`件`)).append($(`<span class="sasa_limit_btn"></span>`).text(`马上抢`))))))
                })
            },
            error(xhr) {
                alert("系统异常" + xhr.status)
            }
        })
        //排行榜 根据数据渲染页面 传递data参数为rank
        $.ajax({
            type: "post",
            url: "http://127.0.0.1/shasha/php/sasa.php",
            data: "key=rank",
            success(responseText) {
                let res = JSON.parse(responseText);
                //渲染
                let rankBox = $(".sasa_rank_column");
                //左排行榜
                let res1 = res["left"];
                $(res1).each(function (index) {
                    rankBox.eq(0).append($(`<div class="sasa_rank_item" goods_id="${res1[index].numRank}" id="sasa_rank_item_${res1[index].id}"></div>`).append($(`<div class="sasa_rank_icon"></div>`)).append($(`<a href=''></a>`).append($(`<img src='${res1[index].img}' alt='${res1[index].alt}' class="sasa_rank_item_img">`))).append($(`<div class="sasa_rank_item_info"></div>`).append($(`<div class="sasa_rank_item_name"></div>`).append($(`<a href=''></a>`).append($(`<b class='yew'></b>`).text(`${res1[index].yew}`)).append(`${res1[index].title}`))).append($(`<div class="sasa_rank_item_price"></div>`).append($(`<div class="sasa_rank_item_price_cur"></div>`).append($(`<span class="sasa_rank_item_price_cur_num"></span>`).text(`${res1[index].curprice}`))).append($(`<div class="sasa_rank_item_price_cur_num"></div>`).append($(`<span class="sasa_rank_item_price_old_num"></span>`).text(`${res1[index].oldprice}`))).append($(`<div class="sasa_rank_item_sold"></div>`).append(`已售`).append($(`<span class="sasa_rank_item_sold_num"></span>`).text(`${res1[index].soldnum}`))))));
                })
                //中排行榜
                let res2 = res["middle"];
                $(res2).each(function (index) {
                    rankBox.eq(1).append($(`<div class="sasa_rank_item" goods_id="${res2[index].numRank}" id="sasa_rank_item_${res2[index].id}"></div>`).append($(`<div class="sasa_rank_icon"></div>`)).append($(`<a href=''></a>`).append($(`<img src='${res2[index].img}' alt='${res2[index].alt}' class="sasa_rank_item_img">`))).append($(`<div class="sasa_rank_item_info"></div>`).append($(`<div class="sasa_rank_item_name"></div>`).append($(`<a href=''></a>`).append($(`<b class='yew'></b>`).text(`${res2[index].yew}`)).append(`${res2[index].title}`))).append($(`<div class="sasa_rank_item_price"></div>`).append($(`<div class="sasa_rank_item_price_cur"></div>`).append($(`<span class="sasa_rank_item_price_cur_num"></span>`).text(`${res2[index].curprice}`))).append($(`<div class="sasa_rank_item_price_cur_num"></div>`).append($(`<span class="sasa_rank_item_price_old_num"></span>`).text(`${res2[index].oldprice}`))).append($(`<div class="sasa_rank_item_sold"></div>`).append(`已售`).append($(`<span class="sasa_rank_item_sold_num"></span>`).text(`${res2[index].soldnum}`))))));
                })
                //右排行榜
                let res3 = res["right"];
                $(res3).each(function (index) {
                    rankBox.eq(2).append($(`<div class="sasa_rank_item" goods_id="${res3[index].numRank}" id="sasa_rank_item_${res3[index].id}"></div>`).append($(`<div class="sasa_rank_icon"></div>`)).append($(`<a href=''></a>`).append($(`<img src='${res1[index].img}' alt='${res3[index].alt}' class="sasa_rank_item_img">`))).append($(`<div class="sasa_rank_item_info"></div>`).append($(`<div class="sasa_rank_item_name"></div>`).append($(`<a href=''></a>`).append($(`<b class='yew'></b>`).text(`${res3[index].yew}`)).append(`${res3[index].title}`))).append($(`<div class="sasa_rank_item_price"></div>`).append($(`<div class="sasa_rank_item_price_cur"></div>`).append($(`<span class="sasa_rank_item_price_cur_num"></span>`).text(`${res3[index].curprice}`))).append($(`<div class="sasa_rank_item_price_cur_num"></div>`).append($(`<span class="sasa_rank_item_price_old_num"></span>`).text(`${res3[index].oldprice}`))).append($(`<div class="sasa_rank_item_sold"></div>`).append(`已售`).append($(`<span class="sasa_rank_item_sold_num"></span>`).text(`${res3[index].soldnum}`))))));
                })
            },
            error(xhr) {
                alert("系统异常" + xhr.status);
            },
        })
        //新品上市 根据数据渲染页面 传递data参数为newSaSa
        $.ajax({
            type: "post",
            url: "http://127.0.0.1/shasha/php/sasa.php",
            data: "key=newSasa",
            success(responseText) {
                let res = JSON.parse(responseText);
                //渲染
                let newBox = $("#new_pro_list");
                $(res).each(function (index) {
                    newBox.append($(`<div class="sasa_new_item" abc_data="2" product_id="${res[index].serial}" goods_id="${res[index].numNew}" id="sasa_new_item_goods_${res[index].id}"></div>`).append($(`<div class="sasa_new_item_cont"></div>`).append($(`<div class="sasa_new_imgWrapper"></div>`).append($(`<a href=''></a>`).append($(`<img id="JS-goods-img-${index}" src='${res[index].img}' alt='${res[index].alt}' class="sasa_new_img">`))).append($(`<div class="sasa_new_arrival_icon"></div>`).append($(`<p></p>`).append(`新品`).append($(`<br>`)).append(`上市`))).append($(`<div class="sasa_new_source_icon"></div>`).append($(`<div class="sasa_new_cty_i sasa_new_cty_i_" style='background: url(${res[index].icon}) no-repeat'></div>`)).append($(`<div class="sasa_source_name"></div>`).append($(`<span class="sasa_new_nation_name"></span>`).text(`${res[index].name}`)))))).append($(`<div class="sasa_new_intro"></div>`).append($(`<a href=''></a>`).append($(`<b class="yew"></b>`).text(`${res[index].yew}`)).append(`${res[index].title}`))).append($(`<div class="sasa_new_price"></div>`).append($(`<span class="sasa_new_price_cur_sign"></span>`).text(`￥`)).append($(`<span class="sasa_new_price_cur_num"></span>`).text(`${res[index].newprice}`)).append($(`<span class="sasa_new_price_old"></span>`).append($(`<del></del>`).text(`${res[index].oldprice}`)))));
                })
            },
            error(xhr) {
                alert("系统异常" + xhr.status)
            },
        })
        //新品瀑布流排列
        // let newItem = $(".sasa_new_item");
        // let itemWidth = newItem.width();
        // let itemHeight = newItem.height();
        // let margin = 12;

        // function newComputedOffset() {
        //     let len = 4;
        //     newItem.each(function (i, ele) {
        //         let curRow = Math.floor(i / len);
        //         let curCol = i % len;
        //         let offsetLeft = margin + curCol * (itemWidth + margin);
        //         let offsetTop = margin + curRow * (itemHeight + margin);
        //         $(this).stop(true).animate({
        //             left: offsetLeft,
        //             top: offsetTop
        //         }, 200);
        //     })
        // }
        // newComputedOffset();
    })
})(jQuery)