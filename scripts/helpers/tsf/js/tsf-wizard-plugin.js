﻿jQuery.fn.size = function() {
	return this.length;
};
var tsfStepEffect = {
        bounce: {
            className: "bounce-effect"
        },
        slideRightLeft: {
            className: "slide-right-left-effect"
        },
        slideLeftRight: {
            className: "slide-left-right-effect"
        },
        basic: {
            className: "default-effect"
        },
        flip: {
            className: "flip-effect"
        },
        transformation: {
            className: "transformation-effect"
        },
        slideDownUp: {
            className: "slide-down-up-effect"
        },
        slideUpDown: {
            className: "slide-up-down-effect"
        }
    },
    tsfStepStyle = {
        style1: {
            className: "gsi-step-indicator triangle gsi-style-1"
        },
        style2: {
            className: "gsi-step-indicator triangle gsi-style-2"
        },
        style3: {
            className: "gsi-step-indicator triangle gsi-style-3"
        },
        style4: {
            className: "gsi-style-4"
        },
        style5: {
            className: "gsi-style-5"
        },
        style5_circle: {
            className: " gsi-style-5 gsi-number-circle"
        },
        style6: {
            className: "gsi-style-6"
        },
        style7_borderTop: {
            className: "gsi-style-7 border-top"
        },
        style7_borderBottom: {
            className: "gsi-style-7 border-bottom"
        },
        style7_borderLeft: {
            className: "gsi-style-7 border-left"
        },
        style7_borderRight: {
            className: "gsi-style-7 border-right"
        },
        style7_borderTop_circle: {
            className: "gsi-style-7 border-top gsi-number-circle"
        },
        style7_borderBottom_circle: {
            className: "gsi-style-7 border-bottom gsi-number-circle"
        },
        style7_borderLeft_circle: {
            className: "gsi-style-7 border-left gsi-number-circle"
        },
        style7_borderRight_circle: {
            className: "gsi-style-7 border-right gsi-number-circle"
        },
        style8: {
            className: "gsi-style-8"
        },
        style8_circle: {
            className: "gsi-style-8 gsi-number-circle"
        },
        style9: {
            className: "gsi-style-9"
        },
        style10: {
            className: "gsi-style-10"
        },
        style11: {
            className: "gsi-style-11"
        },
        style12: {
            className: "gsi-style-12"
        }
    },
    tsfNavPosition = {
        bottom: {
            position: "bottom",
            stepClass: "",
            containerClass: "tsf-bottom-container",
            navStepClass: "tsf-bottom-nav-step"
        },
        top: {
            position: "top",
            stepClass: "",
            containerClass: "",
            navStepClass: ""
        },
        right: {
            position: "right",
            stepClass: "gsi-arrow-left gsi-vertical",
            containerClass: "tsf-left-container",
            navStepClass: "tsf-right-nav-step"
        },
        left: {
            position: "left",
            stepClass: "gsi-vertical",
            containerClass: "tsf-right-container",
            navStepClass: "tsf-left-nav-step"
        }
    };
jQuery.fn.tsfWizard = function (t) {
    function e(t) {
        0 == t ? _count = 1 : _count = i.find(".tsf-nav-step li").size(), _finish = !1, _first = !1, _btnPrev = i.find('.tsf-controls [data-type="prev"]'), _btnNext = i.find('.tsf-controls [data-type="next"]'), _btnFinish = i.find('.tsf-controls [data-type="finish"]'), 0 == t ? _first = !0 : _first = !1, -1 != t && (t >= _count - 1 && 0 != t && (_finish = !0), _first ? _btnPrev.hide() : _btnPrev.show(), _finish ? (_btnNext.hide(), _btnFinish.show()) : (_btnNext.show(), _btnFinish.hide()))
    }

    function n(t, n) {
        return !l && t.parent().hasClass("gsi-step-no-available") && "nav-step" == n ? !1 : (l = !1, _parent = i, _oldIndex = _parent.find(".tsf-nav-step li.current").index(), _parent.find(".tsf-nav-step li").removeClass("current"), t.addClass("current"), _newIndex = _parent.find(".tsf-nav-step li.current").index(), _id = t.data("target"), _step_effect = _stepEff.className, _parent.find(".tsf-content>.tsf-step").removeClass("active").removeClass(_step_effect), _parent.find(".tsf-content>." + _id).addClass("active").addClass(_step_effect), _parent.attr("data-step-index", t.index()), o.manySteps && "undefined" != typeof t.position() && ("top" == o.navPosition || "bottom" == o.navPosition ? (_left = Math.round(t.position().left) - 60, _notShownField = _parent.find(".tsf-nav").width() - _parent.find(".tsf-nav-many-steps").width(), _notShownField < _left ? _left = _notShownField : _left = 0, _parent.find(".tsf-nav").css("transform", "translateX(-" + _left + "px)")) : (_top = Math.round(t.position().top) + 60, _notShownField = _parent.find(".tsf-nav").height() - _parent.find(".tsf-nav-many-steps").height(), _allCount = _parent.find(".tsf-nav li").size(), _avgHeight = Math.round(_parent.find(".tsf-nav").height() / _allCount), _shownCount = Math.round(parseInt(o.height.replace("px", ""), 0) / _avgHeight), _notShownCount = _allCount - _newIndex, _oldIndex > _newIndex ? (_newIndex = _newIndex - _shownCount + 2, _newIndex < 0 && (_newIndex = 0), _top = _parent.find(".tsf-nav li").eq(_newIndex).position().top) : _notShownCount > _shownCount ? (_newIndex -= 1, _newIndex < 0 && (_newIndex = 0), _top = _parent.find(".tsf-nav li").eq(_newIndex).position().top) : (_newIndex = _allCount - _shownCount, _top = _parent.find(".tsf-nav li").eq(_newIndex).position().top), _parent.find(".tsf-nav").css("transform", "translateY(-" + _top + "px)"))), void e(t.index()))
    }
    var s, i, a = {
            stepStyle: "style1",
            stepEffect: "basic",
            showStepNum: !0,
            stepTransition: !0,
            validation: !1,
            navPosition: "top",
            height: "auto",
            showButtons: !0,
            manySteps: !1,
            prevBtn: '<i class="fa fa-chevron-left"></i> PREV',
            nextBtn: 'NEXT <i class="fa fa-chevron-right"></i>',
            finishBtn: "FINISH",
            onSlideChanged: function (t) {},
            onNextClick: function (t) {},
            onPrevClick: function (t) {},
            onPrevClick: function (t) {},
            onFinishClick: function (t) {}
        },
        o = $.extend({}, a, t),
        l = !1,
        f = !0;
    return this.getCurrentIndex = function () {
        return i.find(".tsf-nav-step li.current").index()
    }, this["goto"] = function (t) {
        e(t), n(i.find(".tsf-nav-step li").eq(t), "nav-btn")
    }, this.nextStep = function () {
        _index = this.getCurrentIndex() + 1, this["goto"](_index)
    }, this.previousStep = function () {
        _index = this.getCurrentIndex() - 1, this["goto"](_index < 0 ? 0 : _index)
    }, this.validate = function () {
        o.validation && (f = i.find(".tsf-content").parsley().validate({
            group: "block-" + this.getCurrentIndex()
        }))
    }, this.nextButtonLabel = function (t) {
        i.find('.tsf-controls [data-type="next"]').html(t)
    }, this.prevButtonLabel = function (t) {
        i.find('.tsf-controls [data-type="prev"]').html(t)
    }, this.finishButtonLabel = function (t) {
        i.find('.tsf-controls [data-type="finish"]').html(t)
    }, this.each(function (a, d) {
        s = d, i = $(d), l = !1, f = !0, _navPos = tsfNavPosition[o.navPosition], _stepEff = tsfStepEffect[o.stepEffect], _stepStyle = tsfStepStyle[o.stepStyle], s.init = function () {
            s.setDefaults(), s.setEvents(), s.loadScript(), o.validation && !o.showButtons && console.error("Validation and showButtons not be true same time.")
        }, s.setDefaults = function () {
            i.attr("data-step-effect", _stepEff.className), i.attr("data-step-index", 0), i.find(".tsf-nav-step ul").removeClass(), i.find(".tsf-nav-step ul").addClass(_stepStyle.className), o.validation === !0 && i.find(".tsf-nav-step ul").addClass("gsi-step-no-available"), 1 == o.stepTransition && i.find(".tsf-nav-step ul").addClass("gsi-transition"), o.manySteps && (i.find(".tsf-nav-step").addClass("tsf-nav-many-steps"), i.find(".tsf-nav-step ul").addClass("tsf-nav"), ("left" == o.navPosition || "right" == o.navPosition) && i.find(".tsf-nav-many-steps").css({
                height: o.height
            })), o.showStepNum ? i.removeClass("not-show-num") : i.addClass("not-show-num"), o.validation && i.find(".tsf-step").each(function (t, e) {
                $(e).find(":input").attr("data-parsley-group", "block-" + t)
            }), i.find(".tsf-nav-step").addClass(_navPos.navStepClass), i.find(".tsf-nav-step ul").addClass(_navPos.stepClass), i.find(".tsf-container").addClass(_navPos.containerClass), i.addClass(_navPos.position), i.find(".tsf-container .tsf-content").css({
                height: o.height,
                "overflow-y": "auto"
            }), i.find(".tsf-controls").css({
                display: 1 == o.showButtons ? "block" : "none"
            }), i.find('[data-type="prev"]').html(String(o.prevBtn)), i.find('[data-type="next"]').html(String(o.nextBtn)), i.find('[data-type="finish"]').html(String(o.finishBtn)), i.find('[data-type="next"]').click(function (e) {
                o.validation && (activeIndex = i.find(".tsf-step.active").index(), f = i.find(".tsf-content").parsley().validate({
                    group: "block-" + activeIndex
                })), _currIndex = i.data("step-index"), _from = _currIndex, _to = _currIndex + 1, void 0 !== t.onNextClick && t.onNextClick(e, _from, _to, f)
            }), i.find('[data-type="prev"]').click(function (e) {
                _currIndex = i.data("step-index"), _from = _currIndex, _to = _currIndex - 1, void 0 !== t.onPrevClick && t.onPrevClick(e, _from, _to)
            }), i.find('[data-type="finish"]').click(function (e) {
                o.validation && (activeIndex = i.data("step-index"), f = i.find(".tsf-content").parsley().validate({
                    group: "block-" + activeIndex
                })), void 0 !== t.onFinishClick && t.onFinishClick(e, f)
            })
        }, s.loadScript = function () {
            "top" == o.navPosition || "bottom" == o.navPosition ? (_width = 0, i.find(".tsf-nav li").each(function () {
                _width += $(this).width()
            }), i.find(".tsf-nav").css("width", _width + 60)) : (_height = 0, i.find(".tsf-nav li").each(function () {
                _height += $(this).height()
            }), i.find(".tsf-nav").css("height", _height)), $(".tsf-wizard").each(function () {
                l = !0, $(this).find(".tsf-nav-step li").eq(0).click()
            })
        }, s.setEvents = function () {
            i.find(".tsf-nav-step li").click(function () {
                _element = $(this), n(_element, "nav-step")
            }), i.find(".tsf-wizard-btn").not('[data-type="finish"]').click(function () {
                _element = $(this), _parent = _element.parents(".tsf-wizard"), _index = _parent.attr("data-step-index"), _dataType = _element.attr("data-type"), "next" == _dataType ? _index = parseInt(_index) + 1 : _index = parseInt(_index) - 1, o.validation && "next" == _dataType ? (_content = _parent.find(".tsf-step.active").find(".tsf-step-content"), 0 == _content.length && (e(_index), n(_element.parents(".tsf-wizard").find(".tsf-nav-step li").eq(_index), "nav-btn")), f && (e(_index), n(_element.parents(".tsf-wizard").find(".tsf-nav-step li").eq(_index), "nav-btn"))) : (e(_index), n(_element.parents(".tsf-wizard").find(".tsf-nav-step li").eq(_index), "nav-btn"))
            }), i.find('.tsf-wizard-btn[data-type="finish"]').click(function () {
                _element = $(this), _parent = _element.parents(".tsf-wizard"), o.validation && (_content = _parent.find(".tsf-step.active").find(".tsf-step-content"), activeIndex = i.find(".tsf-step.active").index(), f && i.find(".tsf-content").submit())
            })
        }, s.init()
    })
};