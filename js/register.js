(function ($) {
    $(function () {
        let register = {};
        let verifyCode = new GVerify("v_container");
        let oInput = $(".x-input");
        let btn = $(".btn-major")
        oInput.eq(0).on("change", function () {
            let rUsername = $(this).val().trim();
            console.log(rUsername);
            let phoneReg = /^1[3-9]\d{9}$/;
            let emailReg = /^[\w-+&%]+@[\w-+&%]+\.[a-zA-z]+$/;
            if (!phoneReg.test(rUsername) && !emailReg.test(rUsername)) {
                $("#_build_tips_inline_error_20").css("display", "block");
            } else {
                $("#_build_tips_inline_error_20").css("display", "none");
                register.username = rUsername;
            }
        })
        let arr1 = [],
            arr2 = [],
            arr3 = [];
        for (let i = 48; i <= 57; i++) {
            arr1.push(String.fromCharCode(i));
        }
        for (let j = 65; j <= 90; j++) {
            arr2.push(String.fromCharCode(j));
        }
        for (let k = 97; k <= 122; k++) {
            arr3.push(String.fromCharCode(k));
        }
        oInput.eq(1).on("input", function () {
            let rPassword = $(this).val().trim();
            let passCheck = $(".password-check");
            let k = 0;
            for (let l = 0, len1 = arr1.length; l < len1; l++) {
                if (rPassword.indexOf(arr1[l]) != -1) {
                    k++;
                    break;
                }
            }
            for (let m = 0, len2 = arr2.length; m < len2; m++) {
                if (rPassword.indexOf(arr2[m]) != -1) {
                    k++;
                    break;
                }
            }
            for (let n = 0, len3 = arr3.length; n < len3; n++) {
                if (rPassword.indexOf(arr3[n]) != -1) {
                    k++;
                    break;
                }
            }
            if (k == 1) {
                passCheck.css("visibility", "visible").children(".intensity").text("弱").css("background", "orange");
            } else if (k == 2) {
                passCheck.css("visibility", "visible").children(".intensity").text("中").css("background", "green");
            } else if (k == 3) {
                passCheck.css("visibility", "visible").children(".intensity").text("强").css("background", "blue");
            } else {
                passCheck.css("visibility", "hidden");
            }
        })
        oInput.eq(1).on("change", function () {
            let rPassword = $(this).val().trim();
            if (rPassword.length < 6) {
                $("#_build_tips_inline_error_8").css("display", "block");
            } else {
                $("#_build_tips_inline_error_8").css("display", "none");
            }
        })
        oInput.eq(2).on("change", function () {
            let rPassword = $(oInput).eq(1).val().trim();
            let rPassCheck = $(this).val().trim();
            if (rPassCheck != rPassword) {
                $(this).next().css("display", "block");
            } else {
                $(this).next().css("display", "none");
                register.password = rPassCheck;
            }
        })
        oInput.eq(3).on("change", function () {
            let testValue = $(this).val().trim();
            register.testValue = testValue;
        })
        btn.click(function (e) {
            let event = e || window.event;
            event.preventDefault();
            if (!verifyCode.validate(register.testValue)) {
                $("#_build_tips_inline_error_12").css("display", "block");
                return;
            } else {
                $("#_build_tips_inline_error_12").css("display", "none");
            };
            if (register.username && register.password) {
                
                $.ajax({
                    type: "post",
                    url: "http://127.0.0.1/shasha/php/login.php",
                    data: `rUsername=${register.username}&rPassword=${register.password}`,
                    success() {
                        localStorage.setItem("login", JSON.stringify(register));
                        window.location.href = "shasha.html";
                    },
                    error(xhr) {
                        alert("系统异常" + xhr.statusText)
                    }
                })
            }
        })
    })
})(jQuery)