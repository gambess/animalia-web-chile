/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */
if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery");
+(function (a) {
    "use strict";
    var b = a.fn.jquery.split(" ")[0].split(".");
    if ((b[0] < 2 && b[1] < 9) || (1 == b[0] && 9 == b[1] && b[2] < 1) || b[0] > 3) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4");
})(jQuery),
    +(function (a) {
        "use strict";
        function b() {
            var a = document.createElement("bootstrap"),
                b = { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend" };
            for (var c in b) if (void 0 !== a.style[c]) return { end: b[c] };
            return !1;
        }
        (a.fn.emulateTransitionEnd = function (b) {
            var c = !1,
                d = this;
            a(this).one("bsTransitionEnd", function () {
                c = !0;
            });
            var e = function () {
                c || a(d).trigger(a.support.transition.end);
            };
            return setTimeout(e, b), this;
        }),
            a(function () {
                (a.support.transition = b()),
                    a.support.transition &&
                        (a.event.special.bsTransitionEnd = {
                            bindType: a.support.transition.end,
                            delegateType: a.support.transition.end,
                            handle: function (b) {
                                if (a(b.target).is(this)) return b.handleObj.handler.apply(this, arguments);
                            },
                        });
            });
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var c = a(this),
                    e = c.data("bs.alert");
                e || c.data("bs.alert", (e = new d(this))), "string" == typeof b && e[b].call(c);
            });
        }
        var c = '[data-dismiss="alert"]',
            d = function (b) {
                a(b).on("click", c, this.close);
            };
        (d.VERSION = "3.3.7"),
            (d.TRANSITION_DURATION = 150),
            (d.prototype.close = function (b) {
                function c() {
                    g.detach().trigger("closed.bs.alert").remove();
                }
                var e = a(this),
                    f = e.attr("data-target");
                f || ((f = e.attr("href")), (f = f && f.replace(/.*(?=#[^\s]*$)/, "")));
                var g = a("#" === f ? [] : f);
                b && b.preventDefault(),
                    g.length || (g = e.closest(".alert")),
                    g.trigger((b = a.Event("close.bs.alert"))),
                    b.isDefaultPrevented() || (g.removeClass("in"), a.support.transition && g.hasClass("fade") ? g.one("bsTransitionEnd", c).emulateTransitionEnd(d.TRANSITION_DURATION) : c());
            });
        var e = a.fn.alert;
        (a.fn.alert = b),
            (a.fn.alert.Constructor = d),
            (a.fn.alert.noConflict = function () {
                return (a.fn.alert = e), this;
            }),
            a(document).on("click.bs.alert.data-api", c, d.prototype.close);
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.button"),
                    f = "object" == typeof b && b;
                e || d.data("bs.button", (e = new c(this, f))), "toggle" == b ? e.toggle() : b && e.setState(b);
            });
        }
        var c = function (b, d) {
            (this.$element = a(b)), (this.options = a.extend({}, c.DEFAULTS, d)), (this.isLoading = !1);
        };
        (c.VERSION = "3.3.7"),
            (c.DEFAULTS = { loadingText: "loading..." }),
            (c.prototype.setState = function (b) {
                var c = "disabled",
                    d = this.$element,
                    e = d.is("input") ? "val" : "html",
                    f = d.data();
                (b += "Text"),
                    null == f.resetText && d.data("resetText", d[e]()),
                    setTimeout(
                        a.proxy(function () {
                            d[e](null == f[b] ? this.options[b] : f[b]),
                                "loadingText" == b ? ((this.isLoading = !0), d.addClass(c).attr(c, c).prop(c, !0)) : this.isLoading && ((this.isLoading = !1), d.removeClass(c).removeAttr(c).prop(c, !1));
                        }, this),
                        0
                    );
            }),
            (c.prototype.toggle = function () {
                var a = !0,
                    b = this.$element.closest('[data-toggle="buttons"]');
                if (b.length) {
                    var c = this.$element.find("input");
                    "radio" == c.prop("type")
                        ? (c.prop("checked") && (a = !1), b.find(".active").removeClass("active"), this.$element.addClass("active"))
                        : "checkbox" == c.prop("type") && (c.prop("checked") !== this.$element.hasClass("active") && (a = !1), this.$element.toggleClass("active")),
                        c.prop("checked", this.$element.hasClass("active")),
                        a && c.trigger("change");
                } else this.$element.attr("aria-pressed", !this.$element.hasClass("active")), this.$element.toggleClass("active");
            });
        var d = a.fn.button;
        (a.fn.button = b),
            (a.fn.button.Constructor = c),
            (a.fn.button.noConflict = function () {
                return (a.fn.button = d), this;
            }),
            a(document)
                .on("click.bs.button.data-api", '[data-toggle^="button"]', function (c) {
                    var d = a(c.target).closest(".btn");
                    b.call(d, "toggle"), a(c.target).is('input[type="radio"], input[type="checkbox"]') || (c.preventDefault(), d.is("input,button") ? d.trigger("focus") : d.find("input:visible,button:visible").first().trigger("focus"));
                })
                .on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function (b) {
                    a(b.target)
                        .closest(".btn")
                        .toggleClass("focus", /^focus(in)?$/.test(b.type));
                });
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.carousel"),
                    f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b),
                    g = "string" == typeof b ? b : f.slide;
                e || d.data("bs.carousel", (e = new c(this, f))), "number" == typeof b ? e.to(b) : g ? e[g]() : f.interval && e.pause().cycle();
            });
        }
        var c = function (b, c) {
            (this.$element = a(b)),
                (this.$indicators = this.$element.find(".carousel-indicators")),
                (this.options = c),
                (this.paused = null),
                (this.sliding = null),
                (this.interval = null),
                (this.$active = null),
                (this.$items = null),
                this.options.keyboard && this.$element.on("keydown.bs.carousel", a.proxy(this.keydown, this)),
                "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", a.proxy(this.pause, this)).on("mouseleave.bs.carousel", a.proxy(this.cycle, this));
        };
        (c.VERSION = "3.3.7"),
            (c.TRANSITION_DURATION = 600),
            (c.DEFAULTS = { interval: 5e3, pause: "hover", wrap: !0, keyboard: !0 }),
            (c.prototype.keydown = function (a) {
                if (!/input|textarea/i.test(a.target.tagName)) {
                    switch (a.which) {
                        case 37:
                            this.prev();
                            break;
                        case 39:
                            this.next();
                            break;
                        default:
                            return;
                    }
                    a.preventDefault();
                }
            }),
            (c.prototype.cycle = function (b) {
                return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this;
            }),
            (c.prototype.getItemIndex = function (a) {
                return (this.$items = a.parent().children(".item")), this.$items.index(a || this.$active);
            }),
            (c.prototype.getItemForDirection = function (a, b) {
                var c = this.getItemIndex(b),
                    d = ("prev" == a && 0 === c) || ("next" == a && c == this.$items.length - 1);
                if (d && !this.options.wrap) return b;
                var e = "prev" == a ? -1 : 1,
                    f = (c + e) % this.$items.length;
                return this.$items.eq(f);
            }),
            (c.prototype.to = function (a) {
                var b = this,
                    c = this.getItemIndex((this.$active = this.$element.find(".item.active")));
                if (!(a > this.$items.length - 1 || a < 0))
                    return this.sliding
                        ? this.$element.one("slid.bs.carousel", function () {
                              b.to(a);
                          })
                        : c == a
                        ? this.pause().cycle()
                        : this.slide(a > c ? "next" : "prev", this.$items.eq(a));
            }),
            (c.prototype.pause = function (b) {
                return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), (this.interval = clearInterval(this.interval)), this;
            }),
            (c.prototype.next = function () {
                if (!this.sliding) return this.slide("next");
            }),
            (c.prototype.prev = function () {
                if (!this.sliding) return this.slide("prev");
            }),
            (c.prototype.slide = function (b, d) {
                var e = this.$element.find(".item.active"),
                    f = d || this.getItemForDirection(b, e),
                    g = this.interval,
                    h = "next" == b ? "left" : "right",
                    i = this;
                if (f.hasClass("active")) return (this.sliding = !1);
                var j = f[0],
                    k = a.Event("slide.bs.carousel", { relatedTarget: j, direction: h });
                if ((this.$element.trigger(k), !k.isDefaultPrevented())) {
                    if (((this.sliding = !0), g && this.pause(), this.$indicators.length)) {
                        this.$indicators.find(".active").removeClass("active");
                        var l = a(this.$indicators.children()[this.getItemIndex(f)]);
                        l && l.addClass("active");
                    }
                    var m = a.Event("slid.bs.carousel", { relatedTarget: j, direction: h });
                    return (
                        a.support.transition && this.$element.hasClass("slide")
                            ? (f.addClass(b),
                              f[0].offsetWidth,
                              e.addClass(h),
                              f.addClass(h),
                              e
                                  .one("bsTransitionEnd", function () {
                                      f.removeClass([b, h].join(" ")).addClass("active"),
                                          e.removeClass(["active", h].join(" ")),
                                          (i.sliding = !1),
                                          setTimeout(function () {
                                              i.$element.trigger(m);
                                          }, 0);
                                  })
                                  .emulateTransitionEnd(c.TRANSITION_DURATION))
                            : (e.removeClass("active"), f.addClass("active"), (this.sliding = !1), this.$element.trigger(m)),
                        g && this.cycle(),
                        this
                    );
                }
            });
        var d = a.fn.carousel;
        (a.fn.carousel = b),
            (a.fn.carousel.Constructor = c),
            (a.fn.carousel.noConflict = function () {
                return (a.fn.carousel = d), this;
            });
        var e = function (c) {
            var d,
                e = a(this),
                f = a(e.attr("data-target") || ((d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, "")));
            if (f.hasClass("carousel")) {
                var g = a.extend({}, f.data(), e.data()),
                    h = e.attr("data-slide-to");
                h && (g.interval = !1), b.call(f, g), h && f.data("bs.carousel").to(h), c.preventDefault();
            }
        };
        a(document).on("click.bs.carousel.data-api", "[data-slide]", e).on("click.bs.carousel.data-api", "[data-slide-to]", e),
            a(window).on("load", function () {
                a('[data-ride="carousel"]').each(function () {
                    var c = a(this);
                    b.call(c, c.data());
                });
            });
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            var c,
                d = b.attr("data-target") || ((c = b.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, ""));
            return a(d);
        }
        function c(b) {
            return this.each(function () {
                var c = a(this),
                    e = c.data("bs.collapse"),
                    f = a.extend({}, d.DEFAULTS, c.data(), "object" == typeof b && b);
                !e && f.toggle && /show|hide/.test(b) && (f.toggle = !1), e || c.data("bs.collapse", (e = new d(this, f))), "string" == typeof b && e[b]();
            });
        }
        var d = function (b, c) {
            (this.$element = a(b)),
                (this.options = a.extend({}, d.DEFAULTS, c)),
                (this.$trigger = a('[data-toggle="collapse"][href="#' + b.id + '"],[data-toggle="collapse"][data-target="#' + b.id + '"]')),
                (this.transitioning = null),
                this.options.parent ? (this.$parent = this.getParent()) : this.addAriaAndCollapsedClass(this.$element, this.$trigger),
                this.options.toggle && this.toggle();
        };
        (d.VERSION = "3.3.7"),
            (d.TRANSITION_DURATION = 350),
            (d.DEFAULTS = { toggle: !0 }),
            (d.prototype.dimension = function () {
                var a = this.$element.hasClass("width");
                return a ? "width" : "height";
            }),
            (d.prototype.show = function () {
                if (!this.transitioning && !this.$element.hasClass("in")) {
                    var b,
                        e = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
                    if (!(e && e.length && ((b = e.data("bs.collapse")), b && b.transitioning))) {
                        var f = a.Event("show.bs.collapse");
                        if ((this.$element.trigger(f), !f.isDefaultPrevented())) {
                            e && e.length && (c.call(e, "hide"), b || e.data("bs.collapse", null));
                            var g = this.dimension();
                            this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), (this.transitioning = 1);
                            var h = function () {
                                this.$element.removeClass("collapsing").addClass("collapse in")[g](""), (this.transitioning = 0), this.$element.trigger("shown.bs.collapse");
                            };
                            if (!a.support.transition) return h.call(this);
                            var i = a.camelCase(["scroll", g].join("-"));
                            this.$element.one("bsTransitionEnd", a.proxy(h, this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i]);
                        }
                    }
                }
            }),
            (d.prototype.hide = function () {
                if (!this.transitioning && this.$element.hasClass("in")) {
                    var b = a.Event("hide.bs.collapse");
                    if ((this.$element.trigger(b), !b.isDefaultPrevented())) {
                        var c = this.dimension();
                        this.$element[c](this.$element[c]())[0].offsetHeight,
                            this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1),
                            this.$trigger.addClass("collapsed").attr("aria-expanded", !1),
                            (this.transitioning = 1);
                        var e = function () {
                            (this.transitioning = 0), this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse");
                        };
                        return a.support.transition ? void this.$element[c](0).one("bsTransitionEnd", a.proxy(e, this)).emulateTransitionEnd(d.TRANSITION_DURATION) : e.call(this);
                    }
                }
            }),
            (d.prototype.toggle = function () {
                this[this.$element.hasClass("in") ? "hide" : "show"]();
            }),
            (d.prototype.getParent = function () {
                return a(this.options.parent)
                    .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
                    .each(
                        a.proxy(function (c, d) {
                            var e = a(d);
                            this.addAriaAndCollapsedClass(b(e), e);
                        }, this)
                    )
                    .end();
            }),
            (d.prototype.addAriaAndCollapsedClass = function (a, b) {
                var c = a.hasClass("in");
                a.attr("aria-expanded", c), b.toggleClass("collapsed", !c).attr("aria-expanded", c);
            });
        var e = a.fn.collapse;
        (a.fn.collapse = c),
            (a.fn.collapse.Constructor = d),
            (a.fn.collapse.noConflict = function () {
                return (a.fn.collapse = e), this;
            }),
            a(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (d) {
                var e = a(this);
                e.attr("data-target") || d.preventDefault();
                var f = b(e),
                    g = f.data("bs.collapse"),
                    h = g ? "toggle" : e.data();
                c.call(f, h);
            });
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            var c = b.attr("data-target");
            c || ((c = b.attr("href")), (c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, "")));
            var d = c && a(c);
            return d && d.length ? d : b.parent();
        }
        function c(c) {
            (c && 3 === c.which) ||
                (a(e).remove(),
                a(f).each(function () {
                    var d = a(this),
                        e = b(d),
                        f = { relatedTarget: this };
                    e.hasClass("open") &&
                        ((c && "click" == c.type && /input|textarea/i.test(c.target.tagName) && a.contains(e[0], c.target)) ||
                            (e.trigger((c = a.Event("hide.bs.dropdown", f))), c.isDefaultPrevented() || (d.attr("aria-expanded", "false"), e.removeClass("open").trigger(a.Event("hidden.bs.dropdown", f)))));
                }));
        }
        function d(b) {
            return this.each(function () {
                var c = a(this),
                    d = c.data("bs.dropdown");
                d || c.data("bs.dropdown", (d = new g(this))), "string" == typeof b && d[b].call(c);
            });
        }
        var e = ".dropdown-backdrop",
            f = '[data-toggle="dropdown"]',
            g = function (b) {
                a(b).on("click.bs.dropdown", this.toggle);
            };
        (g.VERSION = "3.3.7"),
            (g.prototype.toggle = function (d) {
                var e = a(this);
                if (!e.is(".disabled, :disabled")) {
                    var f = b(e),
                        g = f.hasClass("open");
                    if ((c(), !g)) {
                        "ontouchstart" in document.documentElement && !f.closest(".navbar-nav").length && a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click", c);
                        var h = { relatedTarget: this };
                        if ((f.trigger((d = a.Event("show.bs.dropdown", h))), d.isDefaultPrevented())) return;
                        e.trigger("focus").attr("aria-expanded", "true"), f.toggleClass("open").trigger(a.Event("shown.bs.dropdown", h));
                    }
                    return !1;
                }
            }),
            (g.prototype.keydown = function (c) {
                if (/(38|40|27|32)/.test(c.which) && !/input|textarea/i.test(c.target.tagName)) {
                    var d = a(this);
                    if ((c.preventDefault(), c.stopPropagation(), !d.is(".disabled, :disabled"))) {
                        var e = b(d),
                            g = e.hasClass("open");
                        if ((!g && 27 != c.which) || (g && 27 == c.which)) return 27 == c.which && e.find(f).trigger("focus"), d.trigger("click");
                        var h = " li:not(.disabled):visible a",
                            i = e.find(".dropdown-menu" + h);
                        if (i.length) {
                            var j = i.index(c.target);
                            38 == c.which && j > 0 && j--, 40 == c.which && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).trigger("focus");
                        }
                    }
                }
            });
        var h = a.fn.dropdown;
        (a.fn.dropdown = d),
            (a.fn.dropdown.Constructor = g),
            (a.fn.dropdown.noConflict = function () {
                return (a.fn.dropdown = h), this;
            }),
            a(document)
                .on("click.bs.dropdown.data-api", c)
                .on("click.bs.dropdown.data-api", ".dropdown form", function (a) {
                    a.stopPropagation();
                })
                .on("click.bs.dropdown.data-api", f, g.prototype.toggle)
                .on("keydown.bs.dropdown.data-api", f, g.prototype.keydown)
                .on("keydown.bs.dropdown.data-api", ".dropdown-menu", g.prototype.keydown);
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b, d) {
            return this.each(function () {
                var e = a(this),
                    f = e.data("bs.modal"),
                    g = a.extend({}, c.DEFAULTS, e.data(), "object" == typeof b && b);
                f || e.data("bs.modal", (f = new c(this, g))), "string" == typeof b ? f[b](d) : g.show && f.show(d);
            });
        }
        var c = function (b, c) {
            (this.options = c),
                (this.$body = a(document.body)),
                (this.$element = a(b)),
                (this.$dialog = this.$element.find(".modal-dialog")),
                (this.$backdrop = null),
                (this.isShown = null),
                (this.originalBodyPad = null),
                (this.scrollbarWidth = 0),
                (this.ignoreBackdropClick = !1),
                this.options.remote &&
                    this.$element.find(".modal-content").load(
                        this.options.remote,
                        a.proxy(function () {
                            this.$element.trigger("loaded.bs.modal");
                        }, this)
                    );
        };
        (c.VERSION = "3.3.7"),
            (c.TRANSITION_DURATION = 300),
            (c.BACKDROP_TRANSITION_DURATION = 150),
            (c.DEFAULTS = { backdrop: !0, keyboard: !0, show: !0 }),
            (c.prototype.toggle = function (a) {
                return this.isShown ? this.hide() : this.show(a);
            }),
            (c.prototype.show = function (b) {
                var d = this,
                    e = a.Event("show.bs.modal", { relatedTarget: b });
                this.$element.trigger(e),
                    this.isShown ||
                        e.isDefaultPrevented() ||
                        ((this.isShown = !0),
                        this.checkScrollbar(),
                        this.setScrollbar(),
                        this.$body.addClass("modal-open"),
                        this.escape(),
                        this.resize(),
                        this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)),
                        this.$dialog.on("mousedown.dismiss.bs.modal", function () {
                            d.$element.one("mouseup.dismiss.bs.modal", function (b) {
                                a(b.target).is(d.$element) && (d.ignoreBackdropClick = !0);
                            });
                        }),
                        this.backdrop(function () {
                            var e = a.support.transition && d.$element.hasClass("fade");
                            d.$element.parent().length || d.$element.appendTo(d.$body), d.$element.show().scrollTop(0), d.adjustDialog(), e && d.$element[0].offsetWidth, d.$element.addClass("in"), d.enforceFocus();
                            var f = a.Event("shown.bs.modal", { relatedTarget: b });
                            e
                                ? d.$dialog
                                      .one("bsTransitionEnd", function () {
                                          d.$element.trigger("focus").trigger(f);
                                      })
                                      .emulateTransitionEnd(c.TRANSITION_DURATION)
                                : d.$element.trigger("focus").trigger(f);
                        }));
            }),
            (c.prototype.hide = function (b) {
                b && b.preventDefault(),
                    (b = a.Event("hide.bs.modal")),
                    this.$element.trigger(b),
                    this.isShown &&
                        !b.isDefaultPrevented() &&
                        ((this.isShown = !1),
                        this.escape(),
                        this.resize(),
                        a(document).off("focusin.bs.modal"),
                        this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),
                        this.$dialog.off("mousedown.dismiss.bs.modal"),
                        a.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", a.proxy(this.hideModal, this)).emulateTransitionEnd(c.TRANSITION_DURATION) : this.hideModal());
            }),
            (c.prototype.enforceFocus = function () {
                a(document)
                    .off("focusin.bs.modal")
                    .on(
                        "focusin.bs.modal",
                        a.proxy(function (a) {
                            document === a.target || this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus");
                        }, this)
                    );
            }),
            (c.prototype.escape = function () {
                this.isShown && this.options.keyboard
                    ? this.$element.on(
                          "keydown.dismiss.bs.modal",
                          a.proxy(function (a) {
                              27 == a.which && this.hide();
                          }, this)
                      )
                    : this.isShown || this.$element.off("keydown.dismiss.bs.modal");
            }),
            (c.prototype.resize = function () {
                this.isShown ? a(window).on("resize.bs.modal", a.proxy(this.handleUpdate, this)) : a(window).off("resize.bs.modal");
            }),
            (c.prototype.hideModal = function () {
                var a = this;
                this.$element.hide(),
                    this.backdrop(function () {
                        a.$body.removeClass("modal-open"), a.resetAdjustments(), a.resetScrollbar(), a.$element.trigger("hidden.bs.modal");
                    });
            }),
            (c.prototype.removeBackdrop = function () {
                this.$backdrop && this.$backdrop.remove(), (this.$backdrop = null);
            }),
            (c.prototype.backdrop = function (b) {
                var d = this,
                    e = this.$element.hasClass("fade") ? "fade" : "";
                if (this.isShown && this.options.backdrop) {
                    var f = a.support.transition && e;
                    if (
                        ((this.$backdrop = a(document.createElement("div"))
                            .addClass("modal-backdrop " + e)
                            .appendTo(this.$body)),
                        this.$element.on(
                            "click.dismiss.bs.modal",
                            a.proxy(function (a) {
                                return this.ignoreBackdropClick ? void (this.ignoreBackdropClick = !1) : void (a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()));
                            }, this)
                        ),
                        f && this.$backdrop[0].offsetWidth,
                        this.$backdrop.addClass("in"),
                        !b)
                    )
                        return;
                    f ? this.$backdrop.one("bsTransitionEnd", b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : b();
                } else if (!this.isShown && this.$backdrop) {
                    this.$backdrop.removeClass("in");
                    var g = function () {
                        d.removeBackdrop(), b && b();
                    };
                    a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : g();
                } else b && b();
            }),
            (c.prototype.handleUpdate = function () {
                this.adjustDialog();
            }),
            (c.prototype.adjustDialog = function () {
                var a = this.$element[0].scrollHeight > document.documentElement.clientHeight;
                this.$element.css({ paddingLeft: !this.bodyIsOverflowing && a ? this.scrollbarWidth : "", paddingRight: this.bodyIsOverflowing && !a ? this.scrollbarWidth : "" });
            }),
            (c.prototype.resetAdjustments = function () {
                this.$element.css({ paddingLeft: "", paddingRight: "" });
            }),
            (c.prototype.checkScrollbar = function () {
                var a = window.innerWidth;
                if (!a) {
                    var b = document.documentElement.getBoundingClientRect();
                    a = b.right - Math.abs(b.left);
                }
                (this.bodyIsOverflowing = document.body.clientWidth < a), (this.scrollbarWidth = this.measureScrollbar());
            }),
            (c.prototype.setScrollbar = function () {
                var a = parseInt(this.$body.css("padding-right") || 0, 10);
                (this.originalBodyPad = document.body.style.paddingRight || ""), this.bodyIsOverflowing && this.$body.css("padding-right", a + this.scrollbarWidth);
            }),
            (c.prototype.resetScrollbar = function () {
                this.$body.css("padding-right", this.originalBodyPad);
            }),
            (c.prototype.measureScrollbar = function () {
                var a = document.createElement("div");
                (a.className = "modal-scrollbar-measure"), this.$body.append(a);
                var b = a.offsetWidth - a.clientWidth;
                return this.$body[0].removeChild(a), b;
            });
        var d = a.fn.modal;
        (a.fn.modal = b),
            (a.fn.modal.Constructor = c),
            (a.fn.modal.noConflict = function () {
                return (a.fn.modal = d), this;
            }),
            a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (c) {
                var d = a(this),
                    e = d.attr("href"),
                    f = a(d.attr("data-target") || (e && e.replace(/.*(?=#[^\s]+$)/, ""))),
                    g = f.data("bs.modal") ? "toggle" : a.extend({ remote: !/#/.test(e) && e }, f.data(), d.data());
                d.is("a") && c.preventDefault(),
                    f.one("show.bs.modal", function (a) {
                        a.isDefaultPrevented() ||
                            f.one("hidden.bs.modal", function () {
                                d.is(":visible") && d.trigger("focus");
                            });
                    }),
                    b.call(f, g, this);
            });
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.tooltip"),
                    f = "object" == typeof b && b;
                (!e && /destroy|hide/.test(b)) || (e || d.data("bs.tooltip", (e = new c(this, f))), "string" == typeof b && e[b]());
            });
        }
        var c = function (a, b) {
            (this.type = null), (this.options = null), (this.enabled = null), (this.timeout = null), (this.hoverState = null), (this.$element = null), (this.inState = null), this.init("tooltip", a, b);
        };
        (c.VERSION = "3.3.7"),
            (c.TRANSITION_DURATION = 150),
            (c.DEFAULTS = {
                animation: !0,
                placement: "top",
                selector: !1,
                template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
                trigger: "hover focus",
                title: "",
                delay: 0,
                html: !1,
                container: !1,
                viewport: { selector: "body", padding: 0 },
            }),
            (c.prototype.init = function (b, c, d) {
                if (
                    ((this.enabled = !0),
                    (this.type = b),
                    (this.$element = a(c)),
                    (this.options = this.getOptions(d)),
                    (this.$viewport = this.options.viewport && a(a.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport)),
                    (this.inState = { click: !1, hover: !1, focus: !1 }),
                    this.$element[0] instanceof document.constructor && !this.options.selector)
                )
                    throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
                for (var e = this.options.trigger.split(" "), f = e.length; f--; ) {
                    var g = e[f];
                    if ("click" == g) this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this));
                    else if ("manual" != g) {
                        var h = "hover" == g ? "mouseenter" : "focusin",
                            i = "hover" == g ? "mouseleave" : "focusout";
                        this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this));
                    }
                }
                this.options.selector ? (this._options = a.extend({}, this.options, { trigger: "manual", selector: "" })) : this.fixTitle();
            }),
            (c.prototype.getDefaults = function () {
                return c.DEFAULTS;
            }),
            (c.prototype.getOptions = function (b) {
                return (b = a.extend({}, this.getDefaults(), this.$element.data(), b)), b.delay && "number" == typeof b.delay && (b.delay = { show: b.delay, hide: b.delay }), b;
            }),
            (c.prototype.getDelegateOptions = function () {
                var b = {},
                    c = this.getDefaults();
                return (
                    this._options &&
                        a.each(this._options, function (a, d) {
                            c[a] != d && (b[a] = d);
                        }),
                    b
                );
            }),
            (c.prototype.enter = function (b) {
                var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
                return (
                    c || ((c = new this.constructor(b.currentTarget, this.getDelegateOptions())), a(b.currentTarget).data("bs." + this.type, c)),
                    b instanceof a.Event && (c.inState["focusin" == b.type ? "focus" : "hover"] = !0),
                    c.tip().hasClass("in") || "in" == c.hoverState
                        ? void (c.hoverState = "in")
                        : (clearTimeout(c.timeout),
                          (c.hoverState = "in"),
                          c.options.delay && c.options.delay.show
                              ? void (c.timeout = setTimeout(function () {
                                    "in" == c.hoverState && c.show();
                                }, c.options.delay.show))
                              : c.show())
                );
            }),
            (c.prototype.isInStateTrue = function () {
                for (var a in this.inState) if (this.inState[a]) return !0;
                return !1;
            }),
            (c.prototype.leave = function (b) {
                var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
                if (
                    (c || ((c = new this.constructor(b.currentTarget, this.getDelegateOptions())), a(b.currentTarget).data("bs." + this.type, c)),
                    b instanceof a.Event && (c.inState["focusout" == b.type ? "focus" : "hover"] = !1),
                    !c.isInStateTrue())
                )
                    return (
                        clearTimeout(c.timeout),
                        (c.hoverState = "out"),
                        c.options.delay && c.options.delay.hide
                            ? void (c.timeout = setTimeout(function () {
                                  "out" == c.hoverState && c.hide();
                              }, c.options.delay.hide))
                            : c.hide()
                    );
            }),
            (c.prototype.show = function () {
                var b = a.Event("show.bs." + this.type);
                if (this.hasContent() && this.enabled) {
                    this.$element.trigger(b);
                    var d = a.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
                    if (b.isDefaultPrevented() || !d) return;
                    var e = this,
                        f = this.tip(),
                        g = this.getUID(this.type);
                    this.setContent(), f.attr("id", g), this.$element.attr("aria-describedby", g), this.options.animation && f.addClass("fade");
                    var h = "function" == typeof this.options.placement ? this.options.placement.call(this, f[0], this.$element[0]) : this.options.placement,
                        i = /\s?auto?\s?/i,
                        j = i.test(h);
                    j && (h = h.replace(i, "") || "top"),
                        f
                            .detach()
                            .css({ top: 0, left: 0, display: "block" })
                            .addClass(h)
                            .data("bs." + this.type, this),
                        this.options.container ? f.appendTo(this.options.container) : f.insertAfter(this.$element),
                        this.$element.trigger("inserted.bs." + this.type);
                    var k = this.getPosition(),
                        l = f[0].offsetWidth,
                        m = f[0].offsetHeight;
                    if (j) {
                        var n = h,
                            o = this.getPosition(this.$viewport);
                        (h = "bottom" == h && k.bottom + m > o.bottom ? "top" : "top" == h && k.top - m < o.top ? "bottom" : "right" == h && k.right + l > o.width ? "left" : "left" == h && k.left - l < o.left ? "right" : h),
                            f.removeClass(n).addClass(h);
                    }
                    var p = this.getCalculatedOffset(h, k, l, m);
                    this.applyPlacement(p, h);
                    var q = function () {
                        var a = e.hoverState;
                        e.$element.trigger("shown.bs." + e.type), (e.hoverState = null), "out" == a && e.leave(e);
                    };
                    a.support.transition && this.$tip.hasClass("fade") ? f.one("bsTransitionEnd", q).emulateTransitionEnd(c.TRANSITION_DURATION) : q();
                }
            }),
            (c.prototype.applyPlacement = function (b, c) {
                var d = this.tip(),
                    e = d[0].offsetWidth,
                    f = d[0].offsetHeight,
                    g = parseInt(d.css("margin-top"), 10),
                    h = parseInt(d.css("margin-left"), 10);
                isNaN(g) && (g = 0),
                    isNaN(h) && (h = 0),
                    (b.top += g),
                    (b.left += h),
                    a.offset.setOffset(
                        d[0],
                        a.extend(
                            {
                                using: function (a) {
                                    d.css({ top: Math.round(a.top), left: Math.round(a.left) });
                                },
                            },
                            b
                        ),
                        0
                    ),
                    d.addClass("in");
                var i = d[0].offsetWidth,
                    j = d[0].offsetHeight;
                "top" == c && j != f && (b.top = b.top + f - j);
                var k = this.getViewportAdjustedDelta(c, b, i, j);
                k.left ? (b.left += k.left) : (b.top += k.top);
                var l = /top|bottom/.test(c),
                    m = l ? 2 * k.left - e + i : 2 * k.top - f + j,
                    n = l ? "offsetWidth" : "offsetHeight";
                d.offset(b), this.replaceArrow(m, d[0][n], l);
            }),
            (c.prototype.replaceArrow = function (a, b, c) {
                this.arrow()
                    .css(c ? "left" : "top", 50 * (1 - a / b) + "%")
                    .css(c ? "top" : "left", "");
            }),
            (c.prototype.setContent = function () {
                var a = this.tip(),
                    b = this.getTitle();
                a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right");
            }),
            (c.prototype.hide = function (b) {
                function d() {
                    "in" != e.hoverState && f.detach(), e.$element && e.$element.removeAttr("aria-describedby").trigger("hidden.bs." + e.type), b && b();
                }
                var e = this,
                    f = a(this.$tip),
                    g = a.Event("hide.bs." + this.type);
                if ((this.$element.trigger(g), !g.isDefaultPrevented()))
                    return f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one("bsTransitionEnd", d).emulateTransitionEnd(c.TRANSITION_DURATION) : d(), (this.hoverState = null), this;
            }),
            (c.prototype.fixTitle = function () {
                var a = this.$element;
                (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "");
            }),
            (c.prototype.hasContent = function () {
                return this.getTitle();
            }),
            (c.prototype.getPosition = function (b) {
                b = b || this.$element;
                var c = b[0],
                    d = "BODY" == c.tagName,
                    e = c.getBoundingClientRect();
                null == e.width && (e = a.extend({}, e, { width: e.right - e.left, height: e.bottom - e.top }));
                var f = window.SVGElement && c instanceof window.SVGElement,
                    g = d ? { top: 0, left: 0 } : f ? null : b.offset(),
                    h = { scroll: d ? document.documentElement.scrollTop || document.body.scrollTop : b.scrollTop() },
                    i = d ? { width: a(window).width(), height: a(window).height() } : null;
                return a.extend({}, e, h, i, g);
            }),
            (c.prototype.getCalculatedOffset = function (a, b, c, d) {
                return "bottom" == a
                    ? { top: b.top + b.height, left: b.left + b.width / 2 - c / 2 }
                    : "top" == a
                    ? { top: b.top - d, left: b.left + b.width / 2 - c / 2 }
                    : "left" == a
                    ? { top: b.top + b.height / 2 - d / 2, left: b.left - c }
                    : { top: b.top + b.height / 2 - d / 2, left: b.left + b.width };
            }),
            (c.prototype.getViewportAdjustedDelta = function (a, b, c, d) {
                var e = { top: 0, left: 0 };
                if (!this.$viewport) return e;
                var f = (this.options.viewport && this.options.viewport.padding) || 0,
                    g = this.getPosition(this.$viewport);
                if (/right|left/.test(a)) {
                    var h = b.top - f - g.scroll,
                        i = b.top + f - g.scroll + d;
                    h < g.top ? (e.top = g.top - h) : i > g.top + g.height && (e.top = g.top + g.height - i);
                } else {
                    var j = b.left - f,
                        k = b.left + f + c;
                    j < g.left ? (e.left = g.left - j) : k > g.right && (e.left = g.left + g.width - k);
                }
                return e;
            }),
            (c.prototype.getTitle = function () {
                var a,
                    b = this.$element,
                    c = this.options;
                return (a = b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title));
            }),
            (c.prototype.getUID = function (a) {
                do a += ~~(1e6 * Math.random());
                while (document.getElementById(a));
                return a;
            }),
            (c.prototype.tip = function () {
                if (!this.$tip && ((this.$tip = a(this.options.template)), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
                return this.$tip;
            }),
            (c.prototype.arrow = function () {
                return (this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow"));
            }),
            (c.prototype.enable = function () {
                this.enabled = !0;
            }),
            (c.prototype.disable = function () {
                this.enabled = !1;
            }),
            (c.prototype.toggleEnabled = function () {
                this.enabled = !this.enabled;
            }),
            (c.prototype.toggle = function (b) {
                var c = this;
                b && ((c = a(b.currentTarget).data("bs." + this.type)), c || ((c = new this.constructor(b.currentTarget, this.getDelegateOptions())), a(b.currentTarget).data("bs." + this.type, c))),
                    b ? ((c.inState.click = !c.inState.click), c.isInStateTrue() ? c.enter(c) : c.leave(c)) : c.tip().hasClass("in") ? c.leave(c) : c.enter(c);
            }),
            (c.prototype.destroy = function () {
                var a = this;
                clearTimeout(this.timeout),
                    this.hide(function () {
                        a.$element.off("." + a.type).removeData("bs." + a.type), a.$tip && a.$tip.detach(), (a.$tip = null), (a.$arrow = null), (a.$viewport = null), (a.$element = null);
                    });
            });
        var d = a.fn.tooltip;
        (a.fn.tooltip = b),
            (a.fn.tooltip.Constructor = c),
            (a.fn.tooltip.noConflict = function () {
                return (a.fn.tooltip = d), this;
            });
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.popover"),
                    f = "object" == typeof b && b;
                (!e && /destroy|hide/.test(b)) || (e || d.data("bs.popover", (e = new c(this, f))), "string" == typeof b && e[b]());
            });
        }
        var c = function (a, b) {
            this.init("popover", a, b);
        };
        if (!a.fn.tooltip) throw new Error("Popover requires tooltip.js");
        (c.VERSION = "3.3.7"),
            (c.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, {
                placement: "right",
                trigger: "click",
                content: "",
                template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
            })),
            (c.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype)),
            (c.prototype.constructor = c),
            (c.prototype.getDefaults = function () {
                return c.DEFAULTS;
            }),
            (c.prototype.setContent = function () {
                var a = this.tip(),
                    b = this.getTitle(),
                    c = this.getContent();
                a.find(".popover-title")[this.options.html ? "html" : "text"](b),
                    a.find(".popover-content").children().detach().end()[this.options.html ? ("string" == typeof c ? "html" : "append") : "text"](c),
                    a.removeClass("fade top bottom left right in"),
                    a.find(".popover-title").html() || a.find(".popover-title").hide();
            }),
            (c.prototype.hasContent = function () {
                return this.getTitle() || this.getContent();
            }),
            (c.prototype.getContent = function () {
                var a = this.$element,
                    b = this.options;
                return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content);
            }),
            (c.prototype.arrow = function () {
                return (this.$arrow = this.$arrow || this.tip().find(".arrow"));
            });
        var d = a.fn.popover;
        (a.fn.popover = b),
            (a.fn.popover.Constructor = c),
            (a.fn.popover.noConflict = function () {
                return (a.fn.popover = d), this;
            });
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(c, d) {
            (this.$body = a(document.body)),
                (this.$scrollElement = a(a(c).is(document.body) ? window : c)),
                (this.options = a.extend({}, b.DEFAULTS, d)),
                (this.selector = (this.options.target || "") + " .nav li > a"),
                (this.offsets = []),
                (this.targets = []),
                (this.activeTarget = null),
                (this.scrollHeight = 0),
                this.$scrollElement.on("scroll.bs.scrollspy", a.proxy(this.process, this)),
                this.refresh(),
                this.process();
        }
        function c(c) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.scrollspy"),
                    f = "object" == typeof c && c;
                e || d.data("bs.scrollspy", (e = new b(this, f))), "string" == typeof c && e[c]();
            });
        }
        (b.VERSION = "3.3.7"),
            (b.DEFAULTS = { offset: 10 }),
            (b.prototype.getScrollHeight = function () {
                return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight);
            }),
            (b.prototype.refresh = function () {
                var b = this,
                    c = "offset",
                    d = 0;
                (this.offsets = []),
                    (this.targets = []),
                    (this.scrollHeight = this.getScrollHeight()),
                    a.isWindow(this.$scrollElement[0]) || ((c = "position"), (d = this.$scrollElement.scrollTop())),
                    this.$body
                        .find(this.selector)
                        .map(function () {
                            var b = a(this),
                                e = b.data("target") || b.attr("href"),
                                f = /^#./.test(e) && a(e);
                            return (f && f.length && f.is(":visible") && [[f[c]().top + d, e]]) || null;
                        })
                        .sort(function (a, b) {
                            return a[0] - b[0];
                        })
                        .each(function () {
                            b.offsets.push(this[0]), b.targets.push(this[1]);
                        });
            }),
            (b.prototype.process = function () {
                var a,
                    b = this.$scrollElement.scrollTop() + this.options.offset,
                    c = this.getScrollHeight(),
                    d = this.options.offset + c - this.$scrollElement.height(),
                    e = this.offsets,
                    f = this.targets,
                    g = this.activeTarget;
                if ((this.scrollHeight != c && this.refresh(), b >= d)) return g != (a = f[f.length - 1]) && this.activate(a);
                if (g && b < e[0]) return (this.activeTarget = null), this.clear();
                for (a = e.length; a--; ) g != f[a] && b >= e[a] && (void 0 === e[a + 1] || b < e[a + 1]) && this.activate(f[a]);
            }),
            (b.prototype.activate = function (b) {
                (this.activeTarget = b), this.clear();
                var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]',
                    d = a(c).parents("li").addClass("active");
                d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")), d.trigger("activate.bs.scrollspy");
            }),
            (b.prototype.clear = function () {
                a(this.selector).parentsUntil(this.options.target, ".active").removeClass("active");
            });
        var d = a.fn.scrollspy;
        (a.fn.scrollspy = c),
            (a.fn.scrollspy.Constructor = b),
            (a.fn.scrollspy.noConflict = function () {
                return (a.fn.scrollspy = d), this;
            }),
            a(window).on("load.bs.scrollspy.data-api", function () {
                a('[data-spy="scroll"]').each(function () {
                    var b = a(this);
                    c.call(b, b.data());
                });
            });
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.tab");
                e || d.data("bs.tab", (e = new c(this))), "string" == typeof b && e[b]();
            });
        }
        var c = function (b) {
            this.element = a(b);
        };
        (c.VERSION = "3.3.7"),
            (c.TRANSITION_DURATION = 150),
            (c.prototype.show = function () {
                var b = this.element,
                    c = b.closest("ul:not(.dropdown-menu)"),
                    d = b.data("target");
                if ((d || ((d = b.attr("href")), (d = d && d.replace(/.*(?=#[^\s]*$)/, ""))), !b.parent("li").hasClass("active"))) {
                    var e = c.find(".active:last a"),
                        f = a.Event("hide.bs.tab", { relatedTarget: b[0] }),
                        g = a.Event("show.bs.tab", { relatedTarget: e[0] });
                    if ((e.trigger(f), b.trigger(g), !g.isDefaultPrevented() && !f.isDefaultPrevented())) {
                        var h = a(d);
                        this.activate(b.closest("li"), c),
                            this.activate(h, h.parent(), function () {
                                e.trigger({ type: "hidden.bs.tab", relatedTarget: b[0] }), b.trigger({ type: "shown.bs.tab", relatedTarget: e[0] });
                            });
                    }
                }
            }),
            (c.prototype.activate = function (b, d, e) {
                function f() {
                    g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1),
                        b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0),
                        h ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"),
                        b.parent(".dropdown-menu").length && b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0),
                        e && e();
                }
                var g = d.find("> .active"),
                    h = e && a.support.transition && ((g.length && g.hasClass("fade")) || !!d.find("> .fade").length);
                g.length && h ? g.one("bsTransitionEnd", f).emulateTransitionEnd(c.TRANSITION_DURATION) : f(), g.removeClass("in");
            });
        var d = a.fn.tab;
        (a.fn.tab = b),
            (a.fn.tab.Constructor = c),
            (a.fn.tab.noConflict = function () {
                return (a.fn.tab = d), this;
            });
        var e = function (c) {
            c.preventDefault(), b.call(a(this), "show");
        };
        a(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', e).on("click.bs.tab.data-api", '[data-toggle="pill"]', e);
    })(jQuery),
    +(function (a) {
        "use strict";
        function b(b) {
            return this.each(function () {
                var d = a(this),
                    e = d.data("bs.affix"),
                    f = "object" == typeof b && b;
                e || d.data("bs.affix", (e = new c(this, f))), "string" == typeof b && e[b]();
            });
        }
        var c = function (b, d) {
            (this.options = a.extend({}, c.DEFAULTS, d)),
                (this.$target = a(this.options.target).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this))),
                (this.$element = a(b)),
                (this.affixed = null),
                (this.unpin = null),
                (this.pinnedOffset = null),
                this.checkPosition();
        };
        (c.VERSION = "3.3.7"),
            (c.RESET = "affix affix-top affix-bottom"),
            (c.DEFAULTS = { offset: 0, target: window }),
            (c.prototype.getState = function (a, b, c, d) {
                var e = this.$target.scrollTop(),
                    f = this.$element.offset(),
                    g = this.$target.height();
                if (null != c && "top" == this.affixed) return e < c && "top";
                if ("bottom" == this.affixed) return null != c ? !(e + this.unpin <= f.top) && "bottom" : !(e + g <= a - d) && "bottom";
                var h = null == this.affixed,
                    i = h ? e : f.top,
                    j = h ? g : b;
                return null != c && e <= c ? "top" : null != d && i + j >= a - d && "bottom";
            }),
            (c.prototype.getPinnedOffset = function () {
                if (this.pinnedOffset) return this.pinnedOffset;
                this.$element.removeClass(c.RESET).addClass("affix");
                var a = this.$target.scrollTop(),
                    b = this.$element.offset();
                return (this.pinnedOffset = b.top - a);
            }),
            (c.prototype.checkPositionWithEventLoop = function () {
                setTimeout(a.proxy(this.checkPosition, this), 1);
            }),
            (c.prototype.checkPosition = function () {
                if (this.$element.is(":visible")) {
                    var b = this.$element.height(),
                        d = this.options.offset,
                        e = d.top,
                        f = d.bottom,
                        g = Math.max(a(document).height(), a(document.body).height());
                    "object" != typeof d && (f = e = d), "function" == typeof e && (e = d.top(this.$element)), "function" == typeof f && (f = d.bottom(this.$element));
                    var h = this.getState(g, b, e, f);
                    if (this.affixed != h) {
                        null != this.unpin && this.$element.css("top", "");
                        var i = "affix" + (h ? "-" + h : ""),
                            j = a.Event(i + ".bs.affix");
                        if ((this.$element.trigger(j), j.isDefaultPrevented())) return;
                        (this.affixed = h),
                            (this.unpin = "bottom" == h ? this.getPinnedOffset() : null),
                            this.$element
                                .removeClass(c.RESET)
                                .addClass(i)
                                .trigger(i.replace("affix", "affixed") + ".bs.affix");
                    }
                    "bottom" == h && this.$element.offset({ top: g - b - f });
                }
            });
        var d = a.fn.affix;
        (a.fn.affix = b),
            (a.fn.affix.Constructor = c),
            (a.fn.affix.noConflict = function () {
                return (a.fn.affix = d), this;
            }),
            a(window).on("load", function () {
                a('[data-spy="affix"]').each(function () {
                    var c = a(this),
                        d = c.data();
                    (d.offset = d.offset || {}), null != d.offsetBottom && (d.offset.bottom = d.offsetBottom), null != d.offsetTop && (d.offset.top = d.offsetTop), b.call(c, d);
                });
            });
    })(jQuery);
!(function (e, t) {
    "object" == typeof exports && "undefined" != typeof module ? (module.exports = t()) : "function" == typeof define && define.amd ? define(t) : (e.Sweetalert2 = t());
})(this, function () {
    "use strict";
    var e = {
            title: "",
            titleText: "",
            text: "",
            html: "",
            type: null,
            customClass: "",
            target: "body",
            animation: !0,
            allowOutsideClick: !0,
            allowEscapeKey: !0,
            allowEnterKey: !0,
            showConfirmButton: !0,
            showCancelButton: !1,
            preConfirm: null,
            confirmButtonText: "OK",
            confirmButtonColor: "#3085d6",
            confirmButtonClass: null,
            cancelButtonText: "Cancel",
            cancelButtonColor: "#aaa",
            cancelButtonClass: null,
            buttonsStyling: !0,
            reverseButtons: !1,
            focusCancel: !1,
            showCloseButton: !1,
            showLoaderOnConfirm: !1,
            imageUrl: null,
            imageWidth: null,
            imageHeight: null,
            imageClass: null,
            timer: null,
            width: 500,
            padding: 20,
            background: "#fff",
            input: null,
            inputPlaceholder: "",
            inputValue: "",
            inputOptions: {},
            inputAutoTrim: !0,
            inputClass: null,
            inputAttributes: {},
            inputValidator: null,
            progressSteps: [],
            currentProgressStep: null,
            progressStepsDistance: "40px",
            onOpen: null,
            onClose: null,
        },
        t = function (e) {
            var t = {};
            for (var n in e) t[e[n]] = "swal2-" + e[n];
            return t;
        },
        n = t([
            "container",
            "shown",
            "iosfix",
            "modal",
            "overlay",
            "fade",
            "show",
            "hide",
            "noanimation",
            "close",
            "title",
            "content",
            "spacer",
            "confirm",
            "cancel",
            "icon",
            "image",
            "input",
            "file",
            "range",
            "select",
            "radio",
            "checkbox",
            "textarea",
            "inputerror",
            "validationerror",
            "progresssteps",
            "activeprogressstep",
            "progresscircle",
            "progressline",
            "loading",
            "styled",
        ]),
        o = t(["success", "warning", "info", "question", "error"]),
        r = function (e, t) {
            (e = String(e).replace(/[^0-9a-f]/gi, "")), e.length < 6 && (e = e[0] + e[0] + e[1] + e[1] + e[2] + e[2]), (t = t || 0);
            for (var n = "#", o = 0; o < 3; o++) {
                var r = parseInt(e.substr(2 * o, 2), 16);
                (r = Math.round(Math.min(Math.max(0, r + r * t), 255)).toString(16)), (n += ("00" + r).substr(r.length));
            }
            return n;
        },
        i = { previousWindowKeyDown: null, previousActiveElement: null, previousBodyPadding: null },
        a = function (e) {
            if ("undefined" == typeof document) return void console.error("SweetAlert2 requires document to initialize");
            var t = document.createElement("div");
            (t.className = n.container), (t.innerHTML = l);
            var o = document.querySelector(e.target);
            o || (console.warn("SweetAlert2: Can't find the target \"" + e.target + '"'), (o = document.body)), o.appendChild(t);
            var r = u(),
                i = B(r, n.input),
                a = B(r, n.file),
                s = r.querySelector("." + n.range + " input"),
                c = r.querySelector("." + n.range + " output"),
                d = B(r, n.select),
                p = r.querySelector("." + n.checkbox + " input"),
                f = B(r, n.textarea);
            return (
                (i.oninput = function () {
                    $.resetValidationError();
                }),
                (i.onkeydown = function (t) {
                    setTimeout(function () {
                        13 === t.keyCode && e.allowEnterKey && (t.stopPropagation(), $.clickConfirm());
                    }, 0);
                }),
                (a.onchange = function () {
                    $.resetValidationError();
                }),
                (s.oninput = function () {
                    $.resetValidationError(), (c.value = s.value);
                }),
                (s.onchange = function () {
                    $.resetValidationError(), (s.previousSibling.value = s.value);
                }),
                (d.onchange = function () {
                    $.resetValidationError();
                }),
                (p.onchange = function () {
                    $.resetValidationError();
                }),
                (f.oninput = function () {
                    $.resetValidationError();
                }),
                r
            );
        },
        l = (
            '\n <div  role="dialog" aria-labelledby="modalTitleId" aria-describedby="modalContentId" class="' +
            n.modal +
            '" tabIndex="-1" >\n   <ul class="' +
            n.progresssteps +
            '"></ul>\n   <div class="' +
            n.icon +
            " " +
            o.error +
            '">\n     <span class="x-mark"><span class="line left"></span><span class="line right"></span></span>\n   </div>\n   <div class="' +
            n.icon +
            " " +
            o.question +
            '">?</div>\n   <div class="' +
            n.icon +
            " " +
            o.warning +
            '">!</div>\n   <div class="' +
            n.icon +
            " " +
            o.info +
            '">i</div>\n   <div class="' +
            n.icon +
            " " +
            o.success +
            '">\n     <span class="line tip"></span> <span class="line long"></span>\n     <div class="placeholder"></div> <div class="fix"></div>\n   </div>\n   <img class="' +
            n.image +
            '">\n   <h2 class="' +
            n.title +
            '" id="modalTitleId"></h2>\n   <div id="modalContentId" class="' +
            n.content +
            '"></div>\n   <input class="' +
            n.input +
            '">\n   <input type="file" class="' +
            n.file +
            '">\n   <div class="' +
            n.range +
            '">\n     <output></output>\n     <input type="range">\n   </div>\n   <select class="' +
            n.select +
            '"></select>\n   <div class="' +
            n.radio +
            '"></div>\n   <label for="' +
            n.checkbox +
            '" class="' +
            n.checkbox +
            '">\n     <input type="checkbox">\n   </label>\n   <textarea class="' +
            n.textarea +
            '"></textarea>\n   <div class="' +
            n.validationerror +
            '"></div>\n   <hr class="' +
            n.spacer +
            '">\n   <button type="button" role="button" tabIndex="0" class="' +
            n.confirm +
            '">OK</button>\n   <button type="button" role="button" tabIndex="0" class="' +
            n.cancel +
            '">Cancel</button>\n   <span class="' +
            n.close +
            '">&times;</span>\n </div>\n'
        ).replace(/(^|\n)\s*/g, ""),
        s = function () {
            return document.body.querySelector("." + n.container);
        },
        u = function () {
            return s() ? s().querySelector("." + n.modal) : null;
        },
        c = function () {
            return u().querySelectorAll("." + n.icon);
        },
        d = function (e) {
            return s() ? s().querySelector("." + e) : null;
        },
        p = function () {
            return d(n.title);
        },
        f = function () {
            return d(n.content);
        },
        m = function () {
            return d(n.image);
        },
        v = function () {
            return d(n.spacer);
        },
        h = function () {
            return d(n.progresssteps);
        },
        y = function () {
            return d(n.validationerror);
        },
        g = function () {
            return d(n.confirm);
        },
        b = function () {
            return d(n.cancel);
        },
        w = function () {
            return d(n.close);
        },
        C = function (e) {
            var t = [g(), b()];
            return e && t.reverse(), t.concat(Array.prototype.slice.call(u().querySelectorAll("button:not([class^=swal2-]), input:not([type=hidden]), textarea, select")));
        },
        k = function (e, t) {
            return !!e.classList && e.classList.contains(t);
        },
        x = function (e) {
            if ((e.focus(), "file" !== e.type)) {
                var t = e.value;
                (e.value = ""), (e.value = t);
            }
        },
        S = function (e, t) {
            if (e && t) {
                t.split(/\s+/)
                    .filter(Boolean)
                    .forEach(function (t) {
                        e.classList.add(t);
                    });
            }
        },
        E = function (e, t) {
            if (e && t) {
                t.split(/\s+/)
                    .filter(Boolean)
                    .forEach(function (t) {
                        e.classList.remove(t);
                    });
            }
        },
        B = function (e, t) {
            for (var n = 0; n < e.childNodes.length; n++) if (k(e.childNodes[n], t)) return e.childNodes[n];
        },
        A = function (e, t) {
            t || (t = "block"), (e.style.opacity = ""), (e.style.display = t);
        },
        P = function (e) {
            (e.style.opacity = ""), (e.style.display = "none");
        },
        T = function (e) {
            for (; e.firstChild; ) e.removeChild(e.firstChild);
        },
        L = function (e) {
            return e.offsetWidth || e.offsetHeight || e.getClientRects().length;
        },
        M = function (e, t) {
            e.style.removeProperty ? e.style.removeProperty(t) : e.style.removeAttribute(t);
        },
        q = function (e) {
            if (!L(e)) return !1;
            if ("function" == typeof MouseEvent) {
                var t = new MouseEvent("click", { view: window, bubbles: !1, cancelable: !0 });
                e.dispatchEvent(t);
            } else if (document.createEvent) {
                var n = document.createEvent("MouseEvents");
                n.initEvent("click", !1, !1), e.dispatchEvent(n);
            } else document.createEventObject ? e.fireEvent("onclick") : "function" == typeof e.onclick && e.onclick();
        },
        V = (function () {
            var e = document.createElement("div"),
                t = { WebkitAnimation: "webkitAnimationEnd", OAnimation: "oAnimationEnd oanimationend", msAnimation: "MSAnimationEnd", animation: "animationend" };
            for (var n in t) if (t.hasOwnProperty(n) && void 0 !== e.style[n]) return t[n];
            return !1;
        })(),
        O = function () {
            if (((window.onkeydown = i.previousWindowKeyDown), i.previousActiveElement && i.previousActiveElement.focus)) {
                var e = window.scrollX,
                    t = window.scrollY;
                i.previousActiveElement.focus(), e && t && window.scrollTo(e, t);
            }
        },
        H = function () {
            if ("ontouchstart" in window || navigator.msMaxTouchPoints) return 0;
            var e = document.createElement("div");
            (e.style.width = "50px"), (e.style.height = "50px"), (e.style.overflow = "scroll"), document.body.appendChild(e);
            var t = e.offsetWidth - e.clientWidth;
            return document.body.removeChild(e), t;
        },
        I = function (e, t) {
            var n = void 0;
            return function () {
                var o = function () {
                    (n = null), e();
                };
                clearTimeout(n), (n = setTimeout(o, t));
            };
        },
        N =
            "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
                ? function (e) {
                      return typeof e;
                  }
                : function (e) {
                      return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e;
                  },
        j =
            Object.assign ||
            function (e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (e[o] = n[o]);
                }
                return e;
            },
        K = j({}, e),
        D = [],
        U = void 0,
        W = function (t) {
            var r = u() || a(t);
            for (var i in t) e.hasOwnProperty(i) || "extraParams" === i || console.warn('SweetAlert2: Unknown parameter "' + i + '"');
            (r.style.width = "number" == typeof t.width ? t.width + "px" : t.width), (r.style.padding = t.padding + "px"), (r.style.background = t.background);
            var l = p(),
                s = f(),
                d = g(),
                y = b(),
                C = w();
            if ((t.titleText ? (l.innerText = t.titleText) : (l.innerHTML = t.title.split("\n").join("<br>")), t.text || t.html)) {
                if ("object" === N(t.html))
                    if (((s.innerHTML = ""), 0 in t.html)) for (var k = 0; k in t.html; k++) s.appendChild(t.html[k].cloneNode(!0));
                    else s.appendChild(t.html.cloneNode(!0));
                else t.html ? (s.innerHTML = t.html) : t.text && (s.textContent = t.text);
                A(s);
            } else P(s);
            t.showCloseButton ? A(C) : P(C), (r.className = n.modal), t.customClass && S(r, t.customClass);
            var x = h(),
                B = parseInt(null === t.currentProgressStep ? $.getQueueStep() : t.currentProgressStep, 10);
            t.progressSteps.length
                ? (A(x),
                  T(x),
                  B >= t.progressSteps.length && console.warn("SweetAlert2: Invalid currentProgressStep parameter, it should be less than progressSteps.length (currentProgressStep like JS arrays starts from 0)"),
                  t.progressSteps.forEach(function (e, o) {
                      var r = document.createElement("li");
                      if ((S(r, n.progresscircle), (r.innerHTML = e), o === B && S(r, n.activeprogressstep), x.appendChild(r), o !== t.progressSteps.length - 1)) {
                          var i = document.createElement("li");
                          S(i, n.progressline), (i.style.width = t.progressStepsDistance), x.appendChild(i);
                      }
                  }))
                : P(x);
            for (var L = c(), q = 0; q < L.length; q++) P(L[q]);
            if (t.type) {
                var V = !1;
                for (var O in o)
                    if (t.type === O) {
                        V = !0;
                        break;
                    }
                if (!V) return console.error("SweetAlert2: Unknown alert type: " + t.type), !1;
                var H = r.querySelector("." + n.icon + "." + o[t.type]);
                switch ((A(H), t.type)) {
                    case "success":
                        S(H, "animate"), S(H.querySelector(".tip"), "animate-success-tip"), S(H.querySelector(".long"), "animate-success-long");
                        break;
                    case "error":
                        S(H, "animate-error-icon"), S(H.querySelector(".x-mark"), "animate-x-mark");
                        break;
                    case "warning":
                        S(H, "pulse-warning");
                }
            }
            var I = m();
            t.imageUrl
                ? (I.setAttribute("src", t.imageUrl),
                  A(I),
                  t.imageWidth ? I.setAttribute("width", t.imageWidth) : I.removeAttribute("width"),
                  t.imageHeight ? I.setAttribute("height", t.imageHeight) : I.removeAttribute("height"),
                  (I.className = n.image),
                  t.imageClass && S(I, t.imageClass))
                : P(I),
                t.showCancelButton ? (y.style.display = "inline-block") : P(y),
                t.showConfirmButton ? M(d, "display") : P(d);
            var j = v();
            t.showConfirmButton || t.showCancelButton ? A(j) : P(j),
                (d.innerHTML = t.confirmButtonText),
                (y.innerHTML = t.cancelButtonText),
                t.buttonsStyling && ((d.style.backgroundColor = t.confirmButtonColor), (y.style.backgroundColor = t.cancelButtonColor)),
                (d.className = n.confirm),
                S(d, t.confirmButtonClass),
                (y.className = n.cancel),
                S(y, t.cancelButtonClass),
                t.buttonsStyling
                    ? (S(d, n.styled), S(y, n.styled))
                    : (E(d, n.styled), E(y, n.styled), (d.style.backgroundColor = d.style.borderLeftColor = d.style.borderRightColor = ""), (y.style.backgroundColor = y.style.borderLeftColor = y.style.borderRightColor = "")),
                t.animation === !0 ? E(r, n.noanimation) : S(r, n.noanimation);
        },
        R = function (e, t) {
            var o = s(),
                r = u();
            e ? (S(r, n.show), S(o, n.fade), E(r, n.hide)) : E(r, n.fade),
                A(r),
                (o.style.overflowY = "hidden"),
                V && !k(r, n.noanimation)
                    ? r.addEventListener(V, function e() {
                          r.removeEventListener(V, e), (o.style.overflowY = "auto");
                      })
                    : (o.style.overflowY = "auto"),
                S(document.documentElement, n.shown),
                S(document.body, n.shown),
                S(o, n.shown),
                z(),
                Y(),
                (i.previousActiveElement = document.activeElement),
                null !== t &&
                    "function" == typeof t &&
                    setTimeout(function () {
                        t(r);
                    });
        },
        z = function () {
            null === i.previousBodyPadding && document.body.scrollHeight > window.innerHeight && ((i.previousBodyPadding = document.body.style.paddingRight), (document.body.style.paddingRight = H() + "px"));
        },
        Q = function () {
            null !== i.previousBodyPadding && ((document.body.style.paddingRight = i.previousBodyPadding), (i.previousBodyPadding = null));
        },
        Y = function () {
            if (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream && !k(document.body, n.iosfix)) {
                var e = document.body.scrollTop;
                (document.body.style.top = e * -1 + "px"), S(document.body, n.iosfix);
            }
        },
        Z = function () {
            if (k(document.body, n.iosfix)) {
                var e = parseInt(document.body.style.top, 10);
                E(document.body, n.iosfix), (document.body.style.top = ""), (document.body.scrollTop = e * -1);
            }
        },
        $ = function e() {
            for (var t = arguments.length, o = Array(t), a = 0; a < t; a++) o[a] = arguments[a];
            if (void 0 === o[0]) return console.error("SweetAlert2 expects at least 1 attribute!"), !1;
            var l = j({}, K);
            switch (N(o[0])) {
                case "string":
                    (l.title = o[0]), (l.html = o[1]), (l.type = o[2]);
                    break;
                case "object":
                    j(l, o[0]),
                        (l.extraParams = o[0].extraParams),
                        "email" === l.input &&
                            null === l.inputValidator &&
                            (l.inputValidator = function (e) {
                                return new Promise(function (t, n) {
                                    /^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(e) ? t() : n("Invalid email address");
                                });
                            }),
                        "url" === l.input &&
                            null === l.inputValidator &&
                            (l.inputValidator = function (e) {
                                return new Promise(function (t, n) {
                                    /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w .-]*)*\/?$/.test(e) ? t() : n("Invalid URL");
                                });
                            });
                    break;
                default:
                    return console.error('SweetAlert2: Unexpected type of argument! Expected "string" or "object", got ' + N(o[0])), !1;
            }
            W(l);
            var c = s(),
                d = u();
            return new Promise(function (t, o) {
                l.timer &&
                    (d.timeout = setTimeout(function () {
                        e.closeModal(l.onClose), o("timer");
                    }, l.timer));
                var a = function (e) {
                        if (!(e = e || l.input)) return null;
                        switch (e) {
                            case "select":
                            case "textarea":
                            case "file":
                                return B(d, n[e]);
                            case "checkbox":
                                return d.querySelector("." + n.checkbox + " input");
                            case "radio":
                                return d.querySelector("." + n.radio + " input:checked") || d.querySelector("." + n.radio + " input:first-child");
                            case "range":
                                return d.querySelector("." + n.range + " input");
                            default:
                                return B(d, n.input);
                        }
                    },
                    k = function () {
                        var e = a();
                        if (!e) return null;
                        switch (l.input) {
                            case "checkbox":
                                return e.checked ? 1 : 0;
                            case "radio":
                                return e.checked ? e.value : null;
                            case "file":
                                return e.files.length ? e.files[0] : null;
                            default:
                                return l.inputAutoTrim ? e.value.trim() : e.value;
                        }
                    };
                l.input &&
                    setTimeout(function () {
                        var e = a();
                        e && x(e);
                    }, 0);
                for (
                    var T = function (n) {
                            l.showLoaderOnConfirm && e.showLoading(),
                                l.preConfirm
                                    ? l.preConfirm(n, l.extraParams).then(
                                          function (o) {
                                              e.closeModal(l.onClose), t(o || n);
                                          },
                                          function (t) {
                                              e.hideLoading(), t && e.showValidationError(t);
                                          }
                                      )
                                    : (e.closeModal(l.onClose), t(n));
                        },
                        M = function (t) {
                            var n = t || window.event,
                                i = n.target || n.srcElement,
                                a = g(),
                                s = b(),
                                u = a === i || a.contains(i),
                                c = s === i || s.contains(i);
                            switch (n.type) {
                                case "mouseover":
                                case "mouseup":
                                    l.buttonsStyling && (u ? (a.style.backgroundColor = r(l.confirmButtonColor, -0.1)) : c && (s.style.backgroundColor = r(l.cancelButtonColor, -0.1)));
                                    break;
                                case "mouseout":
                                    l.buttonsStyling && (u ? (a.style.backgroundColor = l.confirmButtonColor) : c && (s.style.backgroundColor = l.cancelButtonColor));
                                    break;
                                case "mousedown":
                                    l.buttonsStyling && (u ? (a.style.backgroundColor = r(l.confirmButtonColor, -0.2)) : c && (s.style.backgroundColor = r(l.cancelButtonColor, -0.2)));
                                    break;
                                case "click":
                                    if (u && e.isVisible())
                                        if ((e.disableButtons(), l.input)) {
                                            var d = k();
                                            l.inputValidator
                                                ? (e.disableInput(),
                                                  l.inputValidator(d, l.extraParams).then(
                                                      function () {
                                                          e.enableButtons(), e.enableInput(), T(d);
                                                      },
                                                      function (t) {
                                                          e.enableButtons(), e.enableInput(), t && e.showValidationError(t);
                                                      }
                                                  ))
                                                : T(d);
                                        } else T(!0);
                                    else c && e.isVisible() && (e.disableButtons(), e.closeModal(l.onClose), o("cancel"));
                            }
                        },
                        V = d.querySelectorAll("button"),
                        O = 0;
                    O < V.length;
                    O++
                )
                    (V[O].onclick = M), (V[O].onmouseover = M), (V[O].onmouseout = M), (V[O].onmousedown = M);
                (w().onclick = function () {
                    e.closeModal(l.onClose), o("close");
                }),
                    (c.onclick = function (t) {
                        t.target === c && l.allowOutsideClick && (e.closeModal(l.onClose), o("overlay"));
                    });
                var H = g(),
                    j = b();
                l.reverseButtons ? H.parentNode.insertBefore(j, H) : H.parentNode.insertBefore(H, j);
                var K = function (e, t) {
                        for (var n = C(l.focusCancel), o = 0; o < n.length; o++) {
                            (e += t), e === n.length ? (e = 0) : e === -1 && (e = n.length - 1);
                            var r = n[e];
                            if (L(r)) return r.focus();
                        }
                    },
                    D = function (t) {
                        var n = t || window.event,
                            r = n.keyCode || n.which;
                        if ([9, 13, 32, 27].indexOf(r) !== -1) {
                            for (var i = n.target || n.srcElement, a = C(l.focusCancel), s = -1, u = 0; u < a.length; u++)
                                if (i === a[u]) {
                                    s = u;
                                    break;
                                }
                            9 === r
                                ? (n.shiftKey ? K(s, -1) : K(s, 1), n.stopPropagation(), n.preventDefault())
                                : 13 === r || 32 === r
                                ? s === -1 && l.allowEnterKey && q(l.focusCancel ? j : H)
                                : 27 === r && l.allowEscapeKey === !0 && (e.closeModal(l.onClose), o("esc"));
                        }
                    };
                (i.previousWindowKeyDown = window.onkeydown),
                    (window.onkeydown = D),
                    l.buttonsStyling && ((H.style.borderLeftColor = l.confirmButtonColor), (H.style.borderRightColor = l.confirmButtonColor)),
                    (e.showLoading = e.enableLoading = function () {
                        A(v()), A(H, "inline-block"), S(H, n.loading), S(d, n.loading), (H.disabled = !0), (j.disabled = !0);
                    }),
                    (e.hideLoading = e.disableLoading = function () {
                        l.showConfirmButton || (P(H), l.showCancelButton || P(v())), E(H, n.loading), E(d, n.loading), (H.disabled = !1), (j.disabled = !1);
                    }),
                    (e.getTitle = function () {
                        return p();
                    }),
                    (e.getContent = function () {
                        return f();
                    }),
                    (e.getInput = function () {
                        return a();
                    }),
                    (e.getImage = function () {
                        return m();
                    }),
                    (e.getConfirmButton = function () {
                        return g();
                    }),
                    (e.getCancelButton = function () {
                        return b();
                    }),
                    (e.enableButtons = function () {
                        (H.disabled = !1), (j.disabled = !1);
                    }),
                    (e.disableButtons = function () {
                        (H.disabled = !0), (j.disabled = !0);
                    }),
                    (e.enableConfirmButton = function () {
                        H.disabled = !1;
                    }),
                    (e.disableConfirmButton = function () {
                        H.disabled = !0;
                    }),
                    (e.enableInput = function () {
                        var e = a();
                        if (!e) return !1;
                        if ("radio" === e.type) for (var t = e.parentNode.parentNode, n = t.querySelectorAll("input"), o = 0; o < n.length; o++) n[o].disabled = !1;
                        else e.disabled = !1;
                    }),
                    (e.disableInput = function () {
                        var e = a();
                        if (!e) return !1;
                        if (e && "radio" === e.type) for (var t = e.parentNode.parentNode, n = t.querySelectorAll("input"), o = 0; o < n.length; o++) n[o].disabled = !0;
                        else e.disabled = !0;
                    }),
                    (e.recalculateHeight = I(function () {
                        var e = u();
                        if (e) {
                            var t = e.style.display;
                            (e.style.minHeight = ""), A(e), (e.style.minHeight = e.scrollHeight + 1 + "px"), (e.style.display = t);
                        }
                    }, 50)),
                    (e.showValidationError = function (e) {
                        var t = y();
                        (t.innerHTML = e), A(t);
                        var o = a();
                        o && (x(o), S(o, n.inputerror));
                    }),
                    (e.resetValidationError = function () {
                        P(y()), e.recalculateHeight();
                        var t = a();
                        t && E(t, n.inputerror);
                    }),
                    (e.getProgressSteps = function () {
                        return l.progressSteps;
                    }),
                    (e.setProgressSteps = function (e) {
                        (l.progressSteps = e), W(l);
                    }),
                    (e.showProgressSteps = function () {
                        A(h());
                    }),
                    (e.hideProgressSteps = function () {
                        P(h());
                    }),
                    e.enableButtons(),
                    e.hideLoading(),
                    e.resetValidationError();
                for (var z = ["input", "file", "range", "select", "radio", "checkbox", "textarea"], Q = void 0, Y = 0; Y < z.length; Y++) {
                    var Z = n[z[Y]],
                        $ = B(d, Z);
                    if ((Q = a(z[Y]))) {
                        for (var J in Q.attributes)
                            if (Q.attributes.hasOwnProperty(J)) {
                                var X = Q.attributes[J].name;
                                "type" !== X && "value" !== X && Q.removeAttribute(X);
                            }
                        for (var _ in l.inputAttributes) Q.setAttribute(_, l.inputAttributes[_]);
                    }
                    ($.className = Z), l.inputClass && S($, l.inputClass), P($);
                }
                var F = void 0;
                switch (l.input) {
                    case "text":
                    case "email":
                    case "password":
                    case "number":
                    case "tel":
                    case "url":
                        (Q = B(d, n.input)), (Q.value = l.inputValue), (Q.placeholder = l.inputPlaceholder), (Q.type = l.input), A(Q);
                        break;
                    case "file":
                        (Q = B(d, n.file)), (Q.placeholder = l.inputPlaceholder), (Q.type = l.input), A(Q);
                        break;
                    case "range":
                        var G = B(d, n.range),
                            ee = G.querySelector("input"),
                            te = G.querySelector("output");
                        (ee.value = l.inputValue), (ee.type = l.input), (te.value = l.inputValue), A(G);
                        break;
                    case "select":
                        var ne = B(d, n.select);
                        if (((ne.innerHTML = ""), l.inputPlaceholder)) {
                            var oe = document.createElement("option");
                            (oe.innerHTML = l.inputPlaceholder), (oe.value = ""), (oe.disabled = !0), (oe.selected = !0), ne.appendChild(oe);
                        }
                        F = function (e) {
                            for (var t in e) {
                                var n = document.createElement("option");
                                (n.value = t), (n.innerHTML = e[t]), l.inputValue === t && (n.selected = !0), ne.appendChild(n);
                            }
                            A(ne), ne.focus();
                        };
                        break;
                    case "radio":
                        var re = B(d, n.radio);
                        (re.innerHTML = ""),
                            (F = function (e) {
                                for (var t in e) {
                                    var o = document.createElement("input"),
                                        r = document.createElement("label"),
                                        i = document.createElement("span");
                                    (o.type = "radio"), (o.name = n.radio), (o.value = t), l.inputValue === t && (o.checked = !0), (i.innerHTML = e[t]), r.appendChild(o), r.appendChild(i), (r.for = o.id), re.appendChild(r);
                                }
                                A(re);
                                var a = re.querySelectorAll("input");
                                a.length && a[0].focus();
                            });
                        break;
                    case "checkbox":
                        var ie = B(d, n.checkbox),
                            ae = a("checkbox");
                        (ae.type = "checkbox"), (ae.value = 1), (ae.id = n.checkbox), (ae.checked = Boolean(l.inputValue));
                        var le = ie.getElementsByTagName("span");
                        le.length && ie.removeChild(le[0]), (le = document.createElement("span")), (le.innerHTML = l.inputPlaceholder), ie.appendChild(le), A(ie);
                        break;
                    case "textarea":
                        var se = B(d, n.textarea);
                        (se.value = l.inputValue), (se.placeholder = l.inputPlaceholder), A(se);
                        break;
                    case null:
                        break;
                    default:
                        console.error('SweetAlert2: Unexpected type of input! Expected "text", "email", "password", "number", "tel", "select", "radio", "checkbox", "textarea", "file" or "url", got "' + l.input + '"');
                }
                ("select" !== l.input && "radio" !== l.input) ||
                    (l.inputOptions instanceof Promise
                        ? (e.showLoading(),
                          l.inputOptions.then(function (t) {
                              e.hideLoading(), F(t);
                          }))
                        : "object" === N(l.inputOptions)
                        ? F(l.inputOptions)
                        : console.error("SweetAlert2: Unexpected type of inputOptions! Expected object or Promise, got " + N(l.inputOptions))),
                    R(l.animation, l.onOpen),
                    l.allowEnterKey ? K(-1, 1) : document.activeElement && document.activeElement.blur(),
                    (s().scrollTop = 0),
                    "undefined" == typeof MutationObserver || U || ((U = new MutationObserver(e.recalculateHeight)), U.observe(d, { childList: !0, characterData: !0, subtree: !0 }));
            });
        };
    return (
        ($.isVisible = function () {
            return !!u();
        }),
        ($.queue = function (e) {
            D = e;
            var t = function () {
                    (D = []), document.body.removeAttribute("data-swal2-queue-step");
                },
                n = [];
            return new Promise(function (e, o) {
                !(function r(i, a) {
                    i < D.length
                        ? (document.body.setAttribute("data-swal2-queue-step", i),
                          $(D[i]).then(
                              function (e) {
                                  n.push(e), r(i + 1, a);
                              },
                              function (e) {
                                  t(), o(e);
                              }
                          ))
                        : (t(), e(n));
                })(0);
            });
        }),
        ($.getQueueStep = function () {
            return document.body.getAttribute("data-swal2-queue-step");
        }),
        ($.insertQueueStep = function (e, t) {
            return t && t < D.length ? D.splice(t, 0, e) : D.push(e);
        }),
        ($.deleteQueueStep = function (e) {
            void 0 !== D[e] && D.splice(e, 1);
        }),
        ($.close = $.closeModal = function (e) {
            var t = s(),
                o = u();
            if (o) {
                E(o, n.show), S(o, n.hide), clearTimeout(o.timeout), O();
                var r = function () {
                    t.parentNode.removeChild(t), E(document.documentElement, n.shown), E(document.body, n.shown), Q(), Z();
                };
                V && !k(o, n.noanimation)
                    ? o.addEventListener(V, function e() {
                          o.removeEventListener(V, e), k(o, n.hide) && r();
                      })
                    : r(),
                    null !== e &&
                        "function" == typeof e &&
                        setTimeout(function () {
                            e(o);
                        });
            }
        }),
        ($.clickConfirm = function () {
            return g().click();
        }),
        ($.clickCancel = function () {
            return b().click();
        }),
        ($.setDefaults = function (t) {
            if (!t || "object" !== (void 0 === t ? "undefined" : N(t))) return console.error("SweetAlert2: the argument for setDefaults() is required and has to be a object");
            for (var n in t) e.hasOwnProperty(n) || "extraParams" === n || (console.warn('SweetAlert2: Unknown parameter "' + n + '"'), delete t[n]);
            j(K, t);
        }),
        ($.resetDefaults = function () {
            K = j({}, e);
        }),
        ($.noop = function () {}),
        ($.version = "6.4.4"),
        ($.default = $),
        $
    );
}),
    window.Sweetalert2 && (window.sweetAlert = window.swal = window.Sweetalert2);


