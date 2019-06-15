$(function () {
    let verifyCode = new GVerify("v_container");
    let username = $(".icon-yhm");
    let password = $(".icon-mm");
    let testValue = $(".img_input");
    let btn = $(".btn-major");
    //获取本地存储数据
    // let login1 = JSON.parse(localStorage.getItem("login")) || {};
    let login = {};
    username.change(function () {
        let curValue = $(this).val().trim();
        login["username"] = curValue;
    })
    password.change(function () {
        let curValue = $(this).val().trim();
        login["password"] = curValue;
    })
    testValue.change(function () {
        let curValue = $(this).val().trim();
        login["testValue"] = curValue;
    })
    let loginError = $(".message-error")
    btn.click(function (e) {
        let event = e || window.event;
        event.preventDefault();
        if (!verifyCode.validate(login.testValue)) {
            $(".message-content").text("验证码错误");
            loginError.css({
                "display": "block",
                "visibility": "visible",
                "opacity": 1,
            })
            setTimeout(function () {
                loginError.css({
                    "display": "none",
                    "visibility": "hidden",
                    "opacity": 0,
                })
            }, 2000);
            return;
        } else {
            $.ajax({
                type: "post",
                url: "http://127.0.0.1/shasha/php/login.php",
                data: `lUsername=${login["username"]}&lPassword=${login["password"]}`,
                success(responseText) {
                    if (responseText) {
                        let checkStatus = $("#for_auto_signin").prop("checked");
                        if (checkStatus) {
                            localStorage.setItem("login", JSON.stringify(login));
                        }
                        window.location.href = "shasha.html";
                    } else {
                        $(".message-content").text("用户名或密码错误");
                        loginError.css({
                            "display": "block",
                            "visibility": "visible",
                            "opacity": 1,
                        })
                        setTimeout(function () {
                            loginError.css({
                                "display": "none",
                                "visibility": "hidden",
                                "opacity": 0,
                            })
                        }, 1500);
                    }
                },
                error(xhr) {
                    alert("系统异常" + xhr.statusText)
                }
            })
        }

    })
})