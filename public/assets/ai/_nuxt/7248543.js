(window.webpackJsonp=window.webpackJsonp||[]).push([[182],{576:function(t,e,n){"use strict";n.r(e);var o={},r=n(13),component=Object(r.a)(o,(function(){var t=this,e=t._self._c;return e("li",{staticClass:"flex items-center justify-start"},[e("IconCheck",{staticClass:"text-green-500 w-4 h-4 mr-1.5"}),t._v(" "),e("p",[t._t("default")],2)],1)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{IconCheck:n(384).default})},729:function(t,e,n){var map={"./cat/1.jpg":730,"./cat/2.jpg":731,"./cat/3.jpg":732,"./cat/4.jpg":733,"./cat/5.jpg":734,"./couple/1.jpg":735,"./couple/2.jpg":736,"./couple/3.jpg":737,"./couple/4.jpg":738,"./couple/5.jpg":739,"./dog/1.jpg":740,"./dog/2.jpg":741,"./dog/3.jpg":742,"./dog/4.jpg":743,"./dog/5.jpg":744,"./female/1.jpg":745,"./female/2.jpg":746,"./female/3.jpg":747,"./female/4.jpg":748,"./female/5.jpg":749,"./male/1.jpg":644,"./male/2.jpg":645,"./male/3.jpg":646,"./male/4.jpg":647,"./male/5.jpg":648};function o(t){var e=r(t);return n(e)}function r(t){if(!n.o(map,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return map[t]}o.keys=function(){return Object.keys(map)},o.resolve=r,t.exports=o,o.id=729},730:function(t,e,n){t.exports=n.p+"img/1.be49131.jpg"},731:function(t,e,n){t.exports=n.p+"img/2.c311024.jpg"},732:function(t,e,n){t.exports=n.p+"img/3.71f3a3b.jpg"},733:function(t,e,n){t.exports=n.p+"img/4.572d4a7.jpg"},734:function(t,e,n){t.exports=n.p+"img/5.42b733f.jpg"},735:function(t,e,n){t.exports=n.p+"img/1.3bfb13c.jpg"},736:function(t,e,n){t.exports=n.p+"img/2.2a406a0.jpg"},737:function(t,e,n){t.exports=n.p+"img/3.186e354.jpg"},738:function(t,e,n){t.exports=n.p+"img/4.2b2771e.jpg"},739:function(t,e,n){t.exports=n.p+"img/5.32a9c0b.jpg"},740:function(t,e,n){t.exports=n.p+"img/1.96916ee.jpg"},741:function(t,e,n){t.exports=n.p+"img/2.1fd57a8.jpg"},742:function(t,e,n){t.exports=n.p+"img/3.c619d2e.jpg"},743:function(t,e,n){t.exports=n.p+"img/4.e1d8cbe.jpg"},744:function(t,e,n){t.exports=n.p+"img/5.5663ac0.jpg"},745:function(t,e,n){t.exports=n.p+"img/1.14188a0.jpg"},746:function(t,e,n){t.exports=n.p+"img/2.dc5d895.jpg"},747:function(t,e,n){t.exports=n.p+"img/3.1e6875b.jpg"},748:function(t,e,n){t.exports=n.p+"img/4.5759234.jpg"},749:function(t,e,n){t.exports=n.p+"img/5.f6cecaa.jpg"},837:function(t,e,n){"use strict";n.r(e);n(34),n(47);var o=n(2),r=(n(32),n(43),n(33),n(9),n(40),n(392),n(16),{asyncData:function(t){return Object(o.a)(regeneratorRuntime.mark((function e(){var n,o,r;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=t.$axios,o=t.params,e.next=3,n.$get("/style/?trigger=".concat(o.subject));case 3:return r=e.sent,e.abrupt("return",{styles:r});case 5:case"end":return e.stop()}}),e)})))()},data:function(){return{positions:[{size:200,x:40,y:10},{size:152,x:223,y:0},{size:185,x:-30,y:203},{size:185,x:221,y:198},{size:185,x:78,y:104},{size:185,x:122,y:230},{size:185,x:237,y:67},{size:106,x:173,y:54},{size:91,x:67,y:342},{size:125,x:230,y:324}],heroImages:[]}},head:function(){return{title:this.title,meta:[{hid:"description",name:"description",content:this.description},{hid:"twitter:title",name:"twitter:title",content:this.title},{hid:"twitter:description",name:"twitter:description",content:this.description},{hid:"twitter:image:alt",name:"twitter:image:alt",content:this.title},{hid:"og:title",property:"og:title",content:this.title},{hid:"og:description",property:"og:description",content:this.description},{hid:"og:image:alt",property:"og:image:alt",content:this.title}]}},computed:{subject:function(){return this.$route.params.subject},title:function(){return"Make ".concat(this.slugToTitle(this.subject)," Profile Pictures in ").concat(this.styles.length," Styles with AI | PFP.AI")},description:function(){return"With ProfilePicture.AI, you can get a new profile picture in just one click and ".concat(this.styles.length," different styles to choose from. It's never been this easy or convenient for ").concat(this.subject," to look their best online!")}},created:function(){var t=this.styles;(t=t.filter((function(style){return style.uses>10}))).length<6&&(t=this.styles),this.heroImages=t.sort((function(a,b){return b.downloads/(8*b.uses)-a.downloads/(8*a.uses)})).map((function(style){return style.image}))}}),c=n(13),component=Object(c.a)(r,(function(){var t=this,e=t._self._c;return e("div",[e("Header"),t._v(" "),e("Section",{staticClass:"py-4"},[e("div",{staticClass:"flex flex-col md:flex-row gap-8 max-w-7xl mx-auto"},[e("div",{staticClass:"w-full md:w-3/5 xl:w-2/5 flex justify-start flex-col"},[e("CountdownUntilDate",{attrs:{"start-date":"2023-01-30T00:00:00.000Z","end-date":"2023-02-06T00:00:00.000Z"}}),t._v(" "),e("h1",{staticClass:"text-4xl font-bold tracking-tighter text-black sm:text-5xl max-w-2xl mt-4 capitalize"},[t._v("\n          Make\n          "),e("TitleAccent",[t._v(t._s(t.subject))]),t._v("\n          Profile Pictures in "+t._s(t.styles.length)+" styles\n        ")],1),t._v(" "),e("h2",{staticClass:"font-medium text-xl mt-4 text-gray-700"},[t._v("\n          The #1 AI Profile Picture Maker and Generator\n        ")]),t._v(" "),e("p",{staticClass:"max-w-xl mx-auto mt-4 text-lg leading-7 text-gray-700 lg:leading-8 lg:text-lg"},[t._v("\n          With ProfilePicture.AI, you can get a new "+t._s(t.subject)+" profile picture in just one click and "+t._s(t.styles.length)+" different styles to choose from. It's never been this easy or convenient for "+t._s(t.subject)+" to look their best online!\n        ")]),t._v(" "),e("ul",{staticClass:"my-4 text-sm md:text-base text-gray-700 space-y-2"},[e("ListCheck",[t._v("4K format (4096x4096) and 300 dpi.")]),t._v(" "),e("ListCheck",[t._v("Over "+t._s(t.styles.length)+" styles to choose from")]),t._v(" "),e("ListCheck",[t._v("\n            Founded in 🇳🇱 Holland.\n            "),e("nuxt-link",{staticClass:"underline",attrs:{to:"#faq"}},[t._v("\n              We respect your data.\n            ")])],1)],1),t._v(" "),e("div",{staticClass:"mt-2 flex flex-col md:flex-row items-center justify-start space-y-2 md:space-y-0 md:space-x-2 w-full"},[t.isLoggedIn?e("nuxt-link",{staticClass:"w-full md:w-auto",attrs:{to:"/app"}},[e("ButtonGradient",{staticClass:"block w-full md:w-auto"},[e("span",[t._v("Manage your pictures")]),t._v(" "),e("IconChevron",{staticClass:"w-4 h-4 ml-1.5"})],1)],1):e("nuxt-link",{staticClass:"w-full md:w-auto",attrs:{to:"/app"}},[e("ButtonGradient",{staticClass:"block w-full md:w-auto"},[e("span",[t._v("Create your pictures now")]),t._v(" "),e("IconChevron",{staticClass:"w-4 h-4 ml-1.5"})],1)],1)],1),t._v(" "),t.isLoggedIn?t._e():e("div",{staticClass:"flex items-center justify-start space-x-2 mt-4"},[e("img",{staticClass:"h-4",attrs:{src:n(434)}}),t._v(" "),e("img",{staticClass:"h-4",attrs:{src:n(435)}}),t._v(" "),e("img",{staticClass:"h-4",attrs:{src:n(437)}}),t._v(" "),e("img",{staticClass:"h-4",attrs:{src:n(436)}}),t._v(" "),e("img",{staticClass:"h-4",attrs:{src:n(588)}}),t._v(" "),e("img",{staticClass:"h-4",attrs:{src:n(438)}}),t._v(" "),e("img",{staticClass:"h-4",attrs:{src:n(439)}}),t._v(" "),e("img",{staticClass:"h-4",attrs:{src:n(440)}})]),t._v(" "),t.isLoggedIn?t._e():e("p",{staticClass:"text-sm text-gray-500 italic my-4"},[t._v("\n          One-time payment. No subscription.\n        ")])],1),t._v(" "),e("div",{staticClass:"flex items-center justify-center relative md:w-2/5 xl:w-3/5 md:scale-125 scale-100"},[e("div",{staticClass:"w-[422px] h-[449px] relative"},[t._l(t.positions,(function(n,o){return[e("img",{key:o,staticClass:"border-[5px] border-white rounded-2xl absolute hover:scale-105 hover:rotate-2 transition-all duration-300 ease-in-out",style:"width:".concat(n.size,"px; height:").concat(n.size,"px; left:").concat(n.x,"px; top:").concat(n.y,"px;"),attrs:{src:t.heroImages[o],width:n.size,height:n.size}})]}))],2)])])]),t._v(" "),e("MarketingLogoCloud"),t._v(" "),e("MarketingSteps",{staticClass:"bg-gray-50"}),t._v(" "),e("Section",{staticClass:"bg-gray-50"},[e("div",{staticClass:"text-center space-y-4"},[e("MarketingSectionTitle",{attrs:{title:"1. Upload your photos",subtitle:"Upload 20 upperbody photos of ".concat(["male","female"].includes(t.subject)?"yourself":"your ".concat(t.subject),", taken on different days and with different backgrounds.")}})],1),t._v(" "),e("div",{staticClass:"grid grid-cols-5 gap-4 max-w-2xl mx-auto mt-4"},t._l(5,(function(o){return e("img",{key:o,staticClass:"rounded-lg hover:scale-105 hover:rotate-2 transition-all duration-300 ease-in-out",attrs:{src:n(729)("./".concat(t.subject,"/").concat(o,".jpg"))}})})),0),t._v(" "),e("MarketingSpacer"),t._v(" "),e("div",{staticClass:"text-center space-y-4 my-8"},[e("MarketingSectionTitle",{attrs:{title:"2. Choose any style you want",subtitle:"Choose any style you want from ".concat(t.styles.length," different styles tailored to ").concat(t.subject,"s. We'll generate 120+ AI generated profile pictures for you with these.")}})],1),t._v(" "),e("MarketingStyles",{attrs:{styles:t.styles}}),t._v(" "),e("MarketingSpacer"),t._v(" "),e("div",{staticClass:"text-center space-y-4 mt-16 my-8"},[e("MarketingSectionTitle",{attrs:{title:"✅ Get AI generated profile pictures",subtitle:"Receive 120+ AI generated profile pictures that whatever style you want."}})],1),t._v(" "),e("div",{staticClass:"flex space-x-2 items-center justify-center"},[t.isLoggedIn?e("nuxt-link",{attrs:{to:"/app"}},[e("ButtonGradient",{staticClass:"block"},[e("span",[t._v("Manage your pictures")]),t._v(" "),e("IconChevron",{staticClass:"w-4 h-4 ml-1.5"})],1)],1):e("nuxt-link",{attrs:{to:"/app"}},[e("ButtonGradient",{staticClass:"block"},[e("span",[t._v("Create your pictures")]),t._v(" "),e("IconChevron",{staticClass:"w-4 h-4 ml-1.5"})],1)],1)],1)],1),t._v(" "),e("MarketingTestimonials"),t._v(" "),e("MarketingCallToAction",{staticClass:"bg-gray-50"}),t._v(" "),e("MarketingFAQ"),t._v(" "),e("Footer")],1)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{Header:n(383).default,CountdownUntilDate:n(424).default,TitleAccent:n(586).default,ListCheck:n(576).default,IconChevron:n(399).default,ButtonGradient:n(376).default,Section:n(369).default,MarketingLogoCloud:n(629).default,MarketingSteps:n(630).default,MarketingSectionTitle:n(631).default,MarketingSpacer:n(632).default,MarketingStyles:n(587).default,MarketingTestimonials:n(432).default,MarketingCallToAction:n(425).default,MarketingFAQ:n(433).default,Footer:n(387).default})}}]);