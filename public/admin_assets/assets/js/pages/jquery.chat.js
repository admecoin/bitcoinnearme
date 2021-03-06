! function(t) {
    "use strict";
    var i = function() {
        this.$body = t("body"), this.$chatInput = t(".chat-input"), this.$chatList = t(".conversation-list"), this.$chatSendBtn = t(".chat-send")
    };
    i.prototype.save = function() {
        var i = this.$chatInput.val(),
            s = moment().format("h:mm");
        "" == i ? (sweetAlert("Oops...", "You forgot to enter your chat message", "error"), this.$chatInput.focus()) : (t('<li class="clearfix odd"><div class="chat-avatar"><img src="assets/images/users/user-1.jpg" alt="male"><i>' + s + '</i></div><div class="conversation-text"><div class="ctext-wrap"><i>Geneva</i><p>' + i + "</p></div></div></li>").appendTo(".conversation-list"), this.$chatInput.val(""), this.$chatInput.focus(), this.$chatList.scrollTo("100%", "100%", {
            easing: "swing"
        }))
    }, i.prototype.init = function() {
        var t = this;
        t.$chatInput.keypress(function(i) {
            if (13 == i.which) return t.save(), !1
        }), t.$chatSendBtn.click(function(i) {
            return t.save(), !1
        })
    }, t.ChatApp = new i, t.ChatApp.Constructor = i
}(window.jQuery),
function(t) {
    "use strict";
    t.ChatApp.init()
}(window.jQuery);