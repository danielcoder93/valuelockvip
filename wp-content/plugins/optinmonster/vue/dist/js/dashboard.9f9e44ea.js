(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["dashboard"],{"81e0":function(e,t,s){"use strict";var r=s("f51f"),o=s.n(r);o.a},ec95:function(e,t,s){"use strict";s.r(t);var r=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("core-page",[s("common-alerts",{attrs:{id:"dashboard-alerts",alerts:e.alerts}}),e.isLoading?s("core-loading"):e._e(),e.hasSiteError?s("dashboard-resources-widget"):s("div",{staticClass:"omapi-dash omapi-card__flex"},[e.connected?e.showGrowUpsell?s("dashboard-growth-upsell-box"):e.showProUpsell?s("dashboard-pro-upsell-box"):e.showWelcomeBack?s("common-welcome-back-box"):e._e():s("common-welcomebox",{attrs:{cardType:e.connected?"dismiss":"permanent",learnMore:!0},scopedSlots:e._u([{key:"afterButtons",fn:function(){return[s("core-button",{staticClass:"omapi-create-campaign__link-more",attrs:{href:e.$urls.docs("getting-started-optinmonster-wordpress-checklist","WelcomeBox"),target:"_blank",rel:"noopener noreferrer",linkStyle:!0,arrow:!0}},[e._v("\n\t\t\t\t\tRead the Getting Started Guide\n\t\t\t\t")])]},proxy:!0}],null,!1,3939029944)},[e._v("\n\t\t\tInstantly grow your email list, get more leads and increase sales with the #1 most powerful conversion optimization toolkit in the world.\n\t\t\t")]),s("dashboard-stats-widget"),s("div",{staticClass:"omapi-dash__cards-wrapper omapi-dash__cards-wrapper__left"},[s("dashboard-template-select-widget")],1),s("div",{staticClass:"omapi-dash__cards-wrapper omapi-dash__cards-wrapper__right"},[s("dashboard-top-campaigns-widget"),s("dashboard-resources-widget")],1)],1)],1)},o=[],a=(s("8e6e"),s("ac6a"),s("456d"),s("bd86")),i=s("ed08"),n=s("2f62");function c(e,t){var s=Object.keys(e);return Object.getOwnPropertySymbols&&s.push.apply(s,Object.getOwnPropertySymbols(e)),t&&(s=s.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),s}function d(e){for(var t=1;t<arguments.length;t++){var s=null!=arguments[t]?arguments[t]:{};t%2?c(s,!0).forEach(function(t){Object(a["a"])(e,t,s[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(s)):c(s).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(s,t))})}return e}var l={data:function(){return{canShowWelcomeBack:!0}},watch:Object(i["f"])(["dismissedProUpsell","dismissedGrowthUpsell"],"disableShowWelcomeBack"),beforeCreate:function(){this.$store.dispatch("dashboard/fetch")},computed:d({},Object(n["d"])(["upgradeGrowth","topTier"]),{},Object(n["f"])(["alerts"]),{},Object(n["f"])("dashboard",["dismissedWelcomeBack","dismissedProUpsell","dismissedGrowthUpsell"]),{},Object(n["d"])(["connected","hasSiteError"]),{isLoading:function(){return this.$store.getters.isLoading("plugins")},showGrowUpsell:function(){return!this.topTier&&2<this.visits&&this.upgradeGrowth&&!this.dismissedGrowthUpsell},showProUpsell:function(){return!this.topTier&&!this.upgradeGrowth&&2<this.visits&&!this.dismissedProUpsell},showWelcomeBack:function(){return this.canShowWelcomeBack&&!this.dismissedWelcomeBack},visits:function(){return this.$get("$store.state.visits."+(this.$route.fullPath||this.$route.path),1)}}),methods:{disableShowWelcomeBack:function(e){e&&(this.canShowWelcomeBack=!1)}}},p=l,h=(s("81e0"),s("2877")),u=Object(h["a"])(p,r,o,!1,null,null,null);t["default"]=u.exports},f51f:function(e,t,s){}}]);
//# sourceMappingURL=dashboard.9f9e44ea.js.map