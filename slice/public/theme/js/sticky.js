;(function($, win) {

  var pluginName = 'sticky';
  var config = {
    mobile: true, //fire sticky for mobile devises or not
    mobileOnly: false, //only for mobile(if true, mobile option should set to true)
    elStickyClassProcessed: 'sticky-processed',
    elStickyClass: 'sticky',
    elPseudoClassName: 'pseudo-el',
    elIndentTop: 0, //fire sticky if top part of window has reached top or bottom of part element + elIndentTop
    // elStopIfBottomOfEl: [], //todo: create functionality if element has reached bottom part of other element
    elZIndex: 100,
    stickyIfPosition: 'top', //top part of window has reached top or bottom of part element,
    beforeSticky: function(sticky) {},
    afterSticky: function(sticky) {},
    beforeRemoveSticky: function(sticky) {},
    afterRemoveSticky: function(sticky) {}
  };

  function Sticky(element, options) {
    this.el = element;
    this.elPseudo = [];
    this.elHeight = 0;
    this.elOffsetTop = 0;
    this.isMobile = this.checkMobile();
    this.options = $.extend({}, config, options);

    if (!this.options.mobile && this.isMobile || this.options.mobileOnly && !this.isMobile) return this;

    this.init();

    return this;
  }

  Sticky.prototype = {

    init: function() {
      var self = this;

      this.el.addClass('sticky-processed');
      this.getSizes();
      this.checkPosition();

      $(win).on('resize', function() {
        self.getSizes();
      });
      $(win).on('scroll resize', function() {
        self.checkPosition();
      });
    },

    getSizes: function() {
      if (this.elPseudo.length) {
        this.elHeight = this.elPseudo.outerHeight();
        this.elOffsetTop = this.elPseudo.offset().top;
      } else {
        this.elHeight = this.el.outerHeight();
        this.elOffsetTop = this.el.offset().top;
      }
    },

    checkPosition: function() {
      var position = this.options.stickyIfPosition !== 'top' ? this.elOffsetTop + this.elHeight : this.elOffsetTop;

      if ($(win).scrollTop() > position + this.options.elIndentTop) {
        this.createElPseudo();
      } else {
        this.removeElPseudo();
      }
    },

    createElPseudo: function() {
      if (this.elPseudo.length) return;

      this.options.beforeSticky(this);

      this.el.addClass(this.options.elStickyClass);
      this.elPseudo = this.el.clone().removeClass('sticky').addClass(this.options.elPseudoClassName);
      this.el.after(this.elPseudo);
      this.setStyles();

      this.options.afterSticky(this);
    },

    removeElPseudo: function() {
      if (!this.elPseudo.length) return;

      this.options.beforeRemoveSticky(this);

      this.el.removeClass(this.options.elStickyClass);
      this.el.attr('style', '');
      this.elPseudo.remove();
      this.elPseudo = [];

      this.options.afterRemoveSticky(this);
    },

    setStyles: function() {
      this.el.css({
        position: 'fixed',
        left: 0,
        right: 0,
        top: 0,
        zIndex: this.options.elZIndex
      });

      this.elPseudo.css({
        position: 'static',
        opacity: 0,
        visibility: 'hidden'
      });
    },

    checkMobile: function() {
      var check = false;
      (function(a){if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
      return check;
    },

  };

  $.fn[pluginName] = function(options) {
    return this.each(function() {
      if (!$.data(this, 'plugin_' + pluginName)) {
        $.data(this, 'plugin_' + pluginName,
          new Sticky($(this), options));
      }
    });
  }

})(jQuery, window);
