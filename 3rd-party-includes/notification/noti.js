var Notyf = function () {
    "use strict";
    var e, t, o = function () {
        return (o = Object.assign || function (t) {
            for (var i, n = 1, e = arguments.length; n < e; n++) for (var o in i = arguments[n]) Object.prototype.hasOwnProperty.call(i, o) && (t[o] = i[o]);
            return t
        }).apply(this, arguments)
    }, s = function (t) {
        this.options = t
    };
    (t = e = e || {})[t.Add = 0] = "Add", t[t.Remove = 1] = "Remove";
    var m, i, a = (n.prototype.push = function (t) {
        this.notifications.push(t), this.updateFn(t, e.Add, this.notifications)
    }, n.prototype.splice = function (t, i) {
        var n = this.notifications.splice(t, i)[0];
        return this.updateFn(n, e.Remove, this.notifications), n
    }, n.prototype.indexOf = function (t) {
        return this.notifications.indexOf(t)
    }, n.prototype.onUpdate = function (t) {
        this.updateFn = t
    }, n);

    function n() {
        this.notifications = []
    }

    var r = {
        types: [{
            type: "success",
            className: "notyf__toast--success",
            backgroundColor: "#3dc763",
            icon: {className: "notyf__icon--success", tagName: "i"}
        }, {
            type: "error",
            className: "notyf__toast--error",
            backgroundColor: "#ed3d3d",
            icon: {className: "notyf__icon--error", tagName: "i"}
        }],
        duration: 2e3,
        ripple: !0,
        position: {x: "right", y: "bottom"},
        dismissible: !((i = m = m || {})[i.Dismiss = 0] = "Dismiss")
    }, c = (p.prototype.on = function (t, i) {
        var n;
        this.events = o(o({}, this.events), ((n = {})[t] = i, n))
    }, p.prototype.update = function (t, i) {
        i === e.Add ? this.addNotification(t) : i === e.Remove && this.removeNotification(t)
    }, p.prototype.removeNotification = function (t) {
        var i, n, e = this, o = this._popRenderedNotification(t);
        o && ((i = o.node).classList.add("notyf__toast--disappear"), i.addEventListener(this.animationEndEventName, n = function (t) {
            t.target === i && (i.removeEventListener(e.animationEndEventName, n), e.container.removeChild(i))
        }))
    }, p.prototype.addNotification = function (t) {
        var i = this._renderNotification(t);
        this.notifications.push({notification: t, node: i}), this._announce(t.options.message || "Notification")
    }, p.prototype._renderNotification = function (t) {
        var i, n = this._buildNotificationCard(t), e = t.options.className;
        return e && (i = n.classList).add.apply(i, e.split(" ")), this.container.appendChild(n), n
    }, p.prototype._popRenderedNotification = function (t) {
        for (var i = -1, n = 0; n < this.notifications.length && i < 0; n++) this.notifications[n].notification === t && (i = n);
        if (-1 !== i) return this.notifications.splice(i, 1)[0]
    }, p.prototype.getXPosition = function (t) {
        var i;
        return (null === (i = null == t ? void 0 : t.position) || void 0 === i ? void 0 : i.x) || "right"
    }, p.prototype.getYPosition = function (t) {
        var i;
        return (null === (i = null == t ? void 0 : t.position) || void 0 === i ? void 0 : i.y) || "bottom"
    }, p.prototype.adjustContainerAlignment = function (t) {
        var i = this.X_POSITION_FLEX_MAP[this.getXPosition(t)], n = this.Y_POSITION_FLEX_MAP[this.getYPosition(t)],
            e = this.container.style;
        e.setProperty("justify-content", n), e.setProperty("align-items", i)
    }, p.prototype._buildNotificationCard = function (i) {
        var n = this, t = i.options, e = t.icon;
        this.adjustContainerAlignment(t);
        var o = this._createHTLMElement({tagName: "div", className: "notyf__toast"}),
            s = this._createHTLMElement({tagName: "div", className: "notyf__ripple"}),
            a = this._createHTLMElement({tagName: "div", className: "notyf__wrapper"}),
            r = this._createHTLMElement({tagName: "div", className: "notyf__message"});
        r.innerHTML = t.message || "";
        var c = t.background || t.backgroundColor;
        if (e && "object" == typeof e) {
            var p = this._createHTLMElement({tagName: "div", className: "notyf__icon"}),
                d = this._createHTLMElement({tagName: e.tagName || "i", className: e.className, text: e.text});
            c && (d.style.color = c), p.appendChild(d), a.appendChild(p)
        }
        if (a.appendChild(r), o.appendChild(a), c && (t.ripple ? (s.style.background = c, o.appendChild(s)) : o.style.background = c), t.dismissible) {
            var u = this._createHTLMElement({tagName: "div", className: "notyf__dismiss"}),
                l = this._createHTLMElement({tagName: "button", className: "notyf__dismiss-btn"});
            u.appendChild(l), a.appendChild(u), o.classList.add("notyf__toast--dismissible"), l.addEventListener("click", function () {
                var t;
                return null === (t = n.events) || void 0 === t ? void 0 : t[m.Dismiss](i)
            })
        }
        var f = "top" === this.getYPosition(t) ? "upper" : "lower";
        return o.classList.add("notyf__toast--" + f), o
    }, p.prototype._createHTLMElement = function (t) {
        var i = t.tagName, n = t.className, e = t.text, o = document.createElement(i);
        return n && (o.className = n), o.textContent = e || null, o
    }, p.prototype._createA11yContainer = function () {
        var t = this._createHTLMElement({tagName: "div", className: "notyf-announcer"});
        t.setAttribute("aria-atomic", "true"), t.setAttribute("aria-live", "polite"), t.style.border = "0", t.style.clip = "rect(0 0 0 0)", t.style.height = "1px", t.style.margin = "-1px", t.style.overflow = "hidden", t.style.padding = "0", t.style.position = "absolute", t.style.width = "1px", t.style.outline = "0", document.body.appendChild(t), this.a11yContainer = t
    }, p.prototype._announce = function (t) {
        var i = this;
        this.a11yContainer.textContent = "", setTimeout(function () {
            i.a11yContainer.textContent = t
        }, 100)
    }, p.prototype._getAnimationEndEventName = function () {
        var t, i = document.createElement("_fake"), n = {
            MozTransition: "animationend",
            OTransition: "oAnimationEnd",
            WebkitTransition: "webkitAnimationEnd",
            transition: "animationend"
        };
        for (t in n) if (void 0 !== i.style[t]) return n[t];
        return "animationend"
    }, p);

    function p() {
        this.notifications = [], this.X_POSITION_FLEX_MAP = {
            left: "flex-start",
            center: "center",
            right: "flex-end"
        }, this.Y_POSITION_FLEX_MAP = {top: "flex-start", center: "center", bottom: "flex-end"};
        var t = document.createDocumentFragment(), i = this._createHTLMElement({tagName: "div", className: "notyf"});
        t.appendChild(i), document.body.appendChild(t), this.container = i, this.animationEndEventName = this._getAnimationEndEventName(), this._createA11yContainer()
    }

    function d(t) {
        var n = this;
        this.dismiss = this._removeNotification, this.notifications = new a, this.view = new c;
        var i = this.registerTypes(t);
        this.options = o(o({}, r), t), this.options.types = i, this.notifications.onUpdate(function (t, i) {
            return n.view.update(t, i)
        }), this.view.on(m.Dismiss, function (t) {
            return n._removeNotification(t)
        })
    }

    return d.prototype.error = function (t) {
        var i = this.normalizeOptions("error", t);
        return this.open(i)
    }, d.prototype.success = function (t) {
        var i = this.normalizeOptions("success", t);
        return this.open(i)
    }, d.prototype.open = function (i) {
        var t = this.options.types.find(function (t) {
            return t.type === i.type
        }) || {}, n = o(o({}, t), i);
        this.assignProps(["ripple", "position", "dismissible"], n);
        var e = new s(n);
        return this._pushNotification(e), e
    }, d.prototype.dismissAll = function () {
        for (; this.notifications.splice(0, 1);) ;
    }, d.prototype.assignProps = function (t, i) {
        var n = this;
        t.forEach(function (t) {
            i[t] = null == i[t] ? n.options[t] : i[t]
        })
    }, d.prototype._pushNotification = function (t) {
        var i = this;
        this.notifications.push(t);
        var n = void 0 !== t.options.duration ? t.options.duration : this.options.duration;
        n && setTimeout(function () {
            return i._removeNotification(t)
        }, n)
    }, d.prototype._removeNotification = function (t) {
        var i = this.notifications.indexOf(t);
        -1 !== i && this.notifications.splice(i, 1)
    }, d.prototype.normalizeOptions = function (t, i) {
        var n = {type: t};
        return "string" == typeof i ? n.message = i : "object" == typeof i && (n = o(o({}, n), i)), n
    }, d.prototype.registerTypes = function (t) {
        var i = (t && t.types || []).slice();
        return r.types.map(function (n) {
            var e = -1;
            i.forEach(function (t, i) {
                t.type === n.type && (e = i)
            });
            var t = -1 !== e ? i.splice(e, 1)[0] : {};
            return o(o({}, n), t)
        }).concat(i)
    }, d
}();
