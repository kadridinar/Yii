/*!
 * Bootstrap v1.4.0
 *
 * Copyright 2011 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 * Date: Sat Nov 12 01:04:51 PST 2011
 */
/* Reset.less
 * Props to Eric Meyer (meyerweb.com) for his CSS reset file. We're using an adapted version here	that cuts out some of the reset HTML elements we will never need here (i.e., dfn, samp, etc).
 * ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
html, message {
  margin: 0;
  padding: 0;
}
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
cite,
code,
del,
dfn,
em,
img,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
dd,
dl,
dt,
li,
ol,
ul,
fieldset,
form,
label,
legend,
button,
table,
caption,
tmessage,
tfoot,
thead,
tr,
th,
td {
  margin: 0;
  padding: 0;
  border: 0;
  font-weight: normal;
  font-style: normal;
  font-size: 100%;
  line-height: 1;
  font-family: inherit;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
ol, ul {
  list-style: none;
}
q:before,
q:after,
blockquote:before,
blockquote:after {
  content: "";
}
html {
  overflow-y: scroll;
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
a:focus {
  outline: thin dotted;
}
a:hover, a:active {
  outline: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
  display: block;
}
audio, canvas, video {
  display: inline-block;
  *display: inline;
  *zoom: 1;
}
audio:not([controls]) {
  display: none;
}
sub, sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
  -ms-interpolation-mode: bicubic;
}
button,
input,
select,
textarea {
  font-size: 100%;
  margin: 0;
  vertical-align: baseline;
  *vertical-align: middle;
}
button, input {
  line-height: normal;
  *overflow: visible;
}
button::-moz-focus-inner, input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  cursor: pointer;
  -webkit-appearance: button;
}
input[type="search"] {
  -webkit-appearance: textfield;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
textarea {
  overflow: auto;
  vertical-align: top;
}
/* Variables.less
 * Variables to customize the look and feel of Bootstrap
 * ----------------------------------------------------- */
/* Mixins.less
 * Snippets of reusable CSS to develop faster and keep code readable
 * ----------------------------------------------------------------- */
/*
 * Scaffolding
 * Basic and global styles for generating a grid system, structural layout, and page templates
 * ------------------------------------------------------------------------------------------- */
message {
  background-color: #ffffff;
  margin: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  font-weight: normal;
  line-height: 18px;
  color: #404040;
}
.container {
  width: 940px;
  margin-left: auto;
  margin-right: auto;
  zoom: 1;
}
.container:before, .container:after {
  display: table;
  content: "";
  zoom: 1;
}
.container:after {
  clear: both;
}
.container-fluid {
  position: relative;
  min-width: 940px;
  padding-left: 20px;
  padding-right: 20px;
  zoom: 1;
}
.container-fluid:before, .container-fluid:after {
  display: table;
  content: "";
  zoom: 1;
}
.container-fluid:after {
  clear: both;
}
.container-fluid > .sidebar {
  position: absolute;
  top: 0;
  left: 20px;
  width: 220px;
}
.container-fluid > .content {
  margin-left: 240px;
}
a {
  color: #0069d6;
  text-decoration: none;
  line-height: inherit;
  font-weight: inherit;
}
a:hover {
  color: #00438a;
  text-decoration: underline;
}
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.hide {
  display: none;
}
.show {
  display: block;
}
.row {
  zoom: 1;
  margin-left: -20px;
}
.row:before, .row:after {
  display: table;
  content: "";
  zoom: 1;
}
.row:after {
  clear: both;
}
.row > [class*="span"] {
  display: inline;
  float: left;
  margin-left: 20px;
}
.span1 {
  width: 40px;
}
.span2 {
  width: 100px;
}
.span3 {
  width: 160px;
}
.span4 {
  width: 220px;
}
.span5 {
  width: 280px;
}
.span6 {
  width: 340px;
}
.span7 {
  width: 400px;
}
.span8 {
  width: 460px;
}
.span9 {
  width: 520px;
}
.span10 {
  width: 580px;
}
.span11 {
  width: 640px;
}
.span12 {
  width: 700px;
}
.span13 {
  width: 760px;
}
.span14 {
  width: 820px;
}
.span15 {
  width: 880px;
}
.span16 {
  width: 940px;
}
.span17 {
  width: 1000px;
}
.span18 {
  width: 1060px;
}
.span19 {
  width: 1120px;
}
.span20 {
  width: 1180px;
}
.span21 {
  width: 1240px;
}
.span22 {
  width: 1300px;
}
.span23 {
  width: 1360px;
}
.span24 {
  width: 1420px;
}
.row > .offset1 {
  margin-left: 80px;
}
.row > .offset2 {
  margin-left: 140px;
}
.row > .offset3 {
  margin-left: 200px;
}
.row > .offset4 {
  margin-left: 260px;
}
.row > .offset5 {
  margin-left: 320px;
}
.row > .offset6 {
  margin-left: 380px;
}
.row > .offset7 {
  margin-left: 440px;
}
.row > .offset8 {
  margin-left: 500px;
}
.row > .offset9 {
  margin-left: 560px;
}
.row > .offset10 {
  margin-left: 620px;
}
.row > .offset11 {
  margin-left: 680px;
}
.row > .offset12 {
  margin-left: 740px;
}
.span-one-third {
  width: 300px;
}
.span-two-thirds {
  width: 620px;
}
.row > .offset-one-third {
  margin-left: 340px;
}
.row > .offset-two-thirds {
  margin-left: 660px;
}
/* Typography.less
 * Headings, message text, lists, code, and more for a versatile and durable typography system
 * ---------------------------------------------------------------------------------------- */
p {
  font-size: 13px;
  font-weight: normal;
  line-height: 18px;
  margin-bottom: 9px;
}
p small {
  font-size: 11px;
  color: #bfbfbf;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: bold;
  color: #404040;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
  color: #bfbfbf;
}
h1 {
  margin-bottom: 18px;
  font-size: 30px;
  line-height: 36px;
}
h1 small {
  font-size: 18px;
}
h2 {
  font-size: 24px;
  line-height: 36px;
}
h2 small {
  font-size: 14px;
}
h3,
h4,
h5,
h6 {
  line-height: 36px;
}
h3 {
  font-size: 18px;
}
h3 small {
  font-size: 14px;
}
h4 {
  font-size: 16px;
}
h4 small {
  font-size: 12px;
}
h5 {
  font-size: 14px;
}
h6 {
  font-size: 13px;
  color: #bfbfbf;
  text-transform: uppercase;
}
ul, ol {
  margin: 0 0 18px 25px;
}
ul ul,
ul ol,
ol ol,
ol ul {
  margin-bottom: 0;
}
ul {
  list-style: disc;
}
ol {
  list-style: decimal;
}
li {
  line-height: 18px;
  color: #808080;
}
ul.unstyled {
  list-style: none;
  margin-left: 0;
}
dl {
  margin-bottom: 18px;
}
dl dt, dl dd {
  line-height: 18px;
}
dl dt {
  font-weight: bold;
}
dl dd {
  margin-left: 9px;
}
hr {
  margin: 20px 0 19px;
  border: 0;
  border-bottom: 1px solid #eee;
}
strong {
  font-style: inherit;
  font-weight: bold;
}
em {
  font-style: italic;
  font-weight: inherit;
  line-height: inherit;
}
.muted {
  color: #bfbfbf;
}
blockquote {
  margin-bottom: 18px;
  border-left: 5px solid #eee;
  padding-left: 15px;
}
blockquote p {
  font-size: 14px;
  font-weight: 300;
  line-height: 18px;
  margin-bottom: 0;
}
blockquote small {
  display: block;
  font-size: 12px;
  font-weight: 300;
  line-height: 18px;
  color: #bfbfbf;
}
blockquote small:before {
  content: '\2014 \00A0';
}
address {
  display: block;
  line-height: 18px;
  margin-bottom: 18px;
}
code, pre {
  padding: 0 3px 2px;
  font-family: Monaco, Andale Mono, Courier New, monospace;
  font-size: 12px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
code {
  background-color: #fee9cc;
  color: rgba(0, 0, 0, 0.75);
  padding: 1px 3px;
}
pre {
  background-color: #f5f5f5;
  display: block;
  padding: 8.5px;
  margin: 0 0 18px;
  line-height: 18px;
  font-size: 12px;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  white-space: pre;
  white-space: pre-wrap;
  word-wrap: break-word;
}
/* Forms.less
 * Base styles for various input types, form layouts, and states
 * ------------------------------------------------------------- */
form {
  margin-bottom: 18px;
}
fieldset {
  margin-bottom: 18px;
  padding-top: 18px;
}
fieldset legend {
  display: block;
  padding-left: 150px;
  font-size: 19.5px;
  line-height: 1;
  color: #404040;
  *padding: 0 0 5px 145px;
  /* IE6-7 */

  *line-height: 1.5;
  /* IE6-7 */

}
form .clearfix {
  margin-bottom: 18px;
  zoom: 1;
}
form .clearfix:before, form .clearfix:after {
  display: table;
  content: "";
  zoom: 1;
}
form .clearfix:after {
  clear: both;
}
label,
input,
select,
textarea {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  font-weight: normal;
  line-height: normal;
}
label {
  padding-top: 6px;
  font-size: 13px;
  line-height: 18px;
  float: left;
  width: 130px;
  text-align: right;
  color: #404040;
}
form .input {
  margin-left: 150px;
}
input[type=checkbox], input[type=radio] {
  cursor: pointer;
}
input,
textarea,
select,
.uneditable-input {
  display: inline-block;
  width: 210px;
  height: 18px;
  padding: 4px;
  font-size: 13px;
  line-height: 18px;
  color: #808080;
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
select {
  padding: initial;
}
input[type=checkbox], input[type=radio] {
  width: auto;
  height: auto;
  padding: 0;
  margin: 3px 0;
  *margin-top: 0;
  /* IE6-7 */

  line-height: normal;
  border: none;
}
input[type=file] {
  background-color: #ffffff;
  padding: initial;
  border: initial;
  line-height: initial;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
input[type=button], input[type=reset], input[type=submit] {
  width: auto;
  height: auto;
}
select, input[type=file] {
  height: 27px;
  *height: auto;
  line-height: 27px;
  *margin-top: 4px;
  /* For IE7, add top margin to align select with labels */

}
select[multiple] {
  height: inherit;
  background-color: #ffffff;
}
textarea {
  height: auto;
}
.uneditable-input {
  background-color: #ffffff;
  display: block;
  border-color: #eee;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
  cursor: not-allowed;
}
:-moz-placeholder {
  color: #bfbfbf;
}
::-webkit-input-placeholder {
  color: #bfbfbf;
}
input, textarea {
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
  -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
  transition: border linear 0.2s, box-shadow linear 0.2s;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}
input:focus, textarea:focus {
  outline: 0;
  border-color: rgba(82, 168, 236, 0.8);
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);
  -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);
}
input[type=file]:focus, input[type=checkbox]:focus, select:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  outline: 1px dotted #666;
}
form .clearfix.error > label, form .clearfix.error .help-block, form .clearfix.error .help-inline {
  color: #b94a48;
}
form .clearfix.error input, form .clearfix.error textarea {
  color: #b94a48;
  border-color: #ee5f5b;
}
form .clearfix.error input:focus, form .clearfix.error textarea:focus {
  border-color: #e9322d;
  -webkit-box-shadow: 0 0 6px #f8b9b7;
  -moz-box-shadow: 0 0 6px #f8b9b7;
  box-shadow: 0 0 6px #f8b9b7;
}
form .clearfix.error .input-prepend .add-on, form .clearfix.error .input-append .add-on {
  color: #b94a48;
  background-color: #fce6e6;
  border-color: #b94a48;
}
form .clearfix.warning > label, form .clearfix.warning .help-block, form .clearfix.warning .help-inline {
  color: #c09853;
}
form .clearfix.warning input, form .clearfix.warning textarea {
  color: #c09853;
  border-color: #ccae64;
}
form .clearfix.warning input:focus, form .clearfix.warning textarea:focus {
  border-color: #be9a3f;
  -webkit-box-shadow: 0 0 6px #e5d6b1;
  -moz-box-shadow: 0 0 6px #e5d6b1;
  box-shadow: 0 0 6px #e5d6b1;
}
form .clearfix.warning .input-prepend .add-on, form .clearfix.warning .input-append .add-on {
  color: #c09853;
  background-color: #d2b877;
  border-color: #c09853;
}
form .clearfix.success > label, form .clearfix.success .help-block, form .clearfix.success .help-inline {
  color: #468847;
}
form .clearfix.success input, form .clearfix.success textarea {
  color: #468847;
  border-color: #57a957;
}
form .clearfix.success input:focus, form .clearfix.success textarea:focus {
  border-color: #458845;
  -webkit-box-shadow: 0 0 6px #9acc9a;
  -moz-box-shadow: 0 0 6px #9acc9a;
  box-shadow: 0 0 6px #9acc9a;
}
form .clearfix.success .input-prepend .add-on, form .clearfix.success .input-append .add-on {
  color: #468847;
  background-color: #bcddbc;
  border-color: #468847;
}
.input-mini,
input.mini,
textarea.mini,
select.mini {
  width: 60px;
}
.input-small,
input.small,
textarea.small,
select.small {
  width: 90px;
}
.input-medium,
input.medium,
textarea.medium,
select.medium {
  width: 150px;
}
.input-large,
input.large,
textarea.large,
select.large {
  width: 210px;
}
.input-xlarge,
input.xlarge,
textarea.xlarge,
select.xlarge {
  width: 270px;
}
.input-xxlarge,
input.xxlarge,
textarea.xxlarge,
select.xxlarge {
  width: 530px;
}
textarea.xxlarge {
  overflow-y: auto;
}
input.span1, textarea.span1 {
  display: inline-block;
  float: none;
  width: 30px;
  margin-left: 0;
}
input.span2, textarea.span2 {
  display: inline-block;
  float: none;
  width: 90px;
  margin-left: 0;
}
input.span3, textarea.span3 {
  display: inline-block;
  float: none;
  width: 150px;
  margin-left: 0;
}
input.span4, textarea.span4 {
  display: inline-block;
  float: none;
  width: 210px;
  margin-left: 0;
}
input.span5, textarea.span5 {
  display: inline-block;
  float: none;
  width: 270px;
  margin-left: 0;
}
input.span6, textarea.span6 {
  display: inline-block;
  float: none;
  width: 330px;
  margin-left: 0;
}
input.span7, textarea.span7 {
  display: inline-block;
  float: none;
  width: 390px;
  margin-left: 0;
}
input.span8, textarea.span8 {
  display: inline-block;
  float: none;
  width: 450px;
  margin-left: 0;
}
input.span9, textarea.span9 {
  display: inline-block;
  float: none;
  width: 510px;
  margin-left: 0;
}
input.span10, textarea.span10 {
  display: inline-block;
  float: none;
  width: 570px;
  margin-left: 0;
}
input.span11, textarea.span11 {
  display: inline-block;
  float: none;
  width: 630px;
  margin-left: 0;
}
input.span12, textarea.span12 {
  display: inline-block;
  float: none;
  width: 690px;
  margin-left: 0;
}
input.span13, textarea.span13 {
  display: inline-block;
  float: none;
  width: 750px;
  margin-left: 0;
}
input.span14, textarea.span14 {
  display: inline-block;
  float: none;
  width: 810px;
  margin-left: 0;
}
input.span15, textarea.span15 {
  display: inline-block;
  float: none;
  width: 870px;
  margin-left: 0;
}
input.span16, textarea.span16 {
  display: inline-block;
  float: none;
  width: 930px;
  margin-left: 0;
}
input[disabled],
select[disabled],
textarea[disabled],
input[readonly],
select[readonly],
textarea[readonly] {
  background-color: #f5f5f5;
  border-color: #ddd;
  cursor: not-allowed;
}
.actions {
  background: #f5f5f5;
  margin-top: 18px;
  margin-bottom: 18px;
  padding: 17px 20px 18px 150px;
  border-top: 1px solid #ddd;
  -webkit-border-radius: 0 0 3px 3px;
  -moz-border-radius: 0 0 3px 3px;
  border-radius: 0 0 3px 3px;
}
.actions .secondary-action {
  float: right;
}
.actions .secondary-action a {
  line-height: 30px;
}
.actions .secondary-action a:hover {
  text-decoration: underline;
}
.help-inline, .help-block {
  font-size: 13px;
  line-height: 18px;
  color: #bfbfbf;
}
.help-inline {
  padding-left: 5px;
  *position: relative;
  /* IE6-7 */

  *top: -5px;
  /* IE6-7 */

}
.help-block {
  display: block;
  max-width: 600px;
}
.inline-inputs {
  color: #808080;
}
.inline-inputs span {
  padding: 0 2px 0 1px;
}
.input-prepend input, .input-append input {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}
.input-prepend .add-on, .input-append .add-on {
  position: relative;
  background: #f5f5f5;
  border: 1px solid #ccc;
  z-index: 2;
  float: left;
  display: block;
  width: auto;
  min-width: 16px;
  height: 18px;
  padding: 4px 4px 4px 5px;
  margin-right: -1px;
  font-weight: normal;
  line-height: 18px;
  color: #bfbfbf;
  text-align: center;
  text-shadow: 0 1px 0 #ffffff;
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}
.input-prepend .active, .input-append .active {
  background: #a9dba9;
  border-color: #46a546;
}
.input-prepend .add-on {
  *margin-top: 1px;
  /* IE6-7 */

}
.input-append input {
  float: left;
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}
.input-append .add-on {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
  margin-right: 0;
  margin-left: -1px;
}
.inputs-list {
  margin: 0 0 5px;
  width: 100%;
}
.inputs-list li {
  display: block;
  padding: 0;
  width: 100%;
}
.inputs-list label {
  display: block;
  float: none;
  width: auto;
  padding: 0;
  margin-left: 20px;
  line-height: 18px;
  text-align: left;
  white-space: normal;
}
.inputs-list label strong {
  color: #808080;
}
.inputs-list label small {
  font-size: 11px;
  font-weight: normal;
}
.inputs-list .inputs-list {
  margin-left: 25px;
  margin-bottom: 10px;
  padding-top: 0;
}
.inputs-list:first-child {
  padding-top: 6px;
}
.inputs-list li + li {
  padding-top: 2px;
}
.inputs-list input[type=radio], .inputs-list input[type=checkbox] {
  margin-bottom: 0;
  margin-left: -20px;
  float: left;
}
.form-stacked {
  padding-left: 20px;
}
.form-stacked fieldset {
  padding-top: 9px;
}
.form-stacked legend {
  padding-left: 0;
}
.form-stacked label {
  display: block;
  float: none;
  width: auto;
  font-weight: bold;
  text-align: left;
  line-height: 20px;
  padding-top: 0;
}
.form-stacked .clearfix {
  margin-bottom: 9px;
}
.form-stacked .clearfix div.input {
  margin-left: 0;
}
.form-stacked .inputs-list {
  margin-bottom: 0;
}
.form-stacked .inputs-list li {
  padding-top: 0;
}
.form-stacked .inputs-list li label {
  font-weight: normal;
  padding-top: 0;
}
.form-stacked div.clearfix.error {
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  margin-top: 0;
  margin-left: -10px;
}
.form-stacked .actions {
  margin-left: -20px;
  padding-left: 20px;
}
/*
 * Tables.less
 * Tables for, you guessed it, tabular data
 * ---------------------------------------- */
table {
  width: 100%;
  margin-bottom: 18px;
  padding: 0;
  font-size: 13px;
  border-collapse: collapse;
}
table th, table td {
  padding: 10px 10px 9px;
  line-height: 18px;
  text-align: left;
}
table th {
  padding-top: 9px;
  font-weight: bold;
  vertical-align: middle;
}
table td {
  vertical-align: top;
  border-top: 1px solid #ddd;
}
table tmessage th {
  border-top: 1px solid #ddd;
  vertical-align: top;
}
.condensed-table th, .condensed-table td {
  padding: 5px 5px 4px;
}
.bordered-table {
  border: 1px solid #ddd;
  border-collapse: separate;
  *border-collapse: collapse;
  /* IE7, collapse table to remove spacing */

  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.bordered-table th + th, .bordered-table td + td, .bordered-table th + td {
  border-left: 1px solid #ddd;
}
.bordered-table thead tr:first-child th:first-child, .bordered-table tmessage tr:first-child td:first-child {
  -webkit-border-radius: 4px 0 0 0;
  -moz-border-radius: 4px 0 0 0;
  border-radius: 4px 0 0 0;
}
.bordered-table thead tr:first-child th:last-child, .bordered-table tmessage tr:first-child td:last-child {
  -webkit-border-radius: 0 4px 0 0;
  -moz-border-radius: 0 4px 0 0;
  border-radius: 0 4px 0 0;
}
.bordered-table tmessage tr:last-child td:first-child {
  -webkit-border-radius: 0 0 0 4px;
  -moz-border-radius: 0 0 0 4px;
  border-radius: 0 0 0 4px;
}
.bordered-table tmessage tr:last-child td:last-child {
  -webkit-border-radius: 0 0 4px 0;
  -moz-border-radius: 0 0 4px 0;
  border-radius: 0 0 4px 0;
}
table .span1 {
  width: 20px;
}
table .span2 {
  width: 60px;
}
table .span3 {
  width: 100px;
}
table .span4 {
  width: 140px;
}
table .span5 {
  width: 180px;
}
table .span6 {
  width: 220px;
}
table .span7 {
  width: 260px;
}
table .span8 {
  width: 300px;
}
table .span9 {
  width: 340px;
}
table .span10 {
  width: 380px;
}
table .span11 {
  width: 420px;
}
table .span12 {
  width: 460px;
}
table .span13 {
  width: 500px;
}
table .span14 {
  width: 540px;
}
table .span15 {
  width: 580px;
}
table .span16 {
  width: 620px;
}
.zebra-striped tmessage tr:nth-child(odd) td, .zebra-striped tmessage tr:nth-child(odd) th {
  background-color: #f9f9f9;
}
.zebra-striped tmessage tr:hover td, .zebra-striped tmessage tr:hover th {
  background-color: #f5f5f5;
}
table .header {
  cursor: pointer;
}
table .header:after {
  content: "";
  float: right;
  margin-top: 7px;
  border-width: 0 4px 4px;
  border-style: solid;
  border-color: #000 transparent;
  visibility: hidden;
}
table .headerSortUp, table .headerSortDown {
  background-color: rgba(141, 192, 219, 0.25);
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
}
table .header:hover:after {
  visibility: visible;
}
table .headerSortDown:after, table .headerSortDown:hover:after {
  visibility: visible;
  filter: alpha(opacity=60);
  -khtml-opacity: 0.6;
  -moz-opacity: 0.6;
  opacity: 0.6;
}
table .headerSortUp:after {
  border-bottom: none;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #000;
  visibility: visible;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  filter: alpha(opacity=60);
  -khtml-opacity: 0.6;
  -moz-opacity: 0.6;
  opacity: 0.6;
}
table .blue {
  color: #049cdb;
  border-bottom-color: #049cdb;
}
table .headerSortUp.blue, table .headerSortDown.blue {
  background-color: #ade6fe;
}
table .green {
  color: #46a546;
  border-bottom-color: #46a546;
}
table .headerSortUp.green, table .headerSortDown.green {
  background-color: #cdeacd;
}
table .red {
  color: #9d261d;
  border-bottom-color: #9d261d;
}
table .headerSortUp.red, table .headerSortDown.red {
  background-color: #f4c8c5;
}
table .yellow {
  color: #ffc40d;
  border-bottom-color: #ffc40d;
}
table .headerSortUp.yellow, table .headerSortDown.yellow {
  background-color: #fff6d9;
}
table .orange {
  color: #f89406;
  border-bottom-color: #f89406;
}
table .headerSortUp.orange, table .headerSortDown.orange {
  background-color: #fee9cc;
}
table .purple {
  color: #7a43b6;
  border-bottom-color: #7a43b6;
}
table .headerSortUp.purple, table .headerSortDown.purple {
  background-color: #e2d5f0;
}
/* Patterns.less
 * Repeatable UI elements outside the base styles provided from the scaffolding
 * ---------------------------------------------------------------------------- */
.topbar {
  height: 40px;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10000;
  overflow: visible;
}
.topbar a {
  color: #bfbfbf;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.topbar h3 a:hover, .topbar .brand:hover, .topbar ul .active > a {
  background-color: #333;
  background-color: rgba(255, 255, 255, 0.05);
  color: #ffffff;
  text-decoration: none;
}
.topbar h3 {
  position: relative;
}
.topbar h3 a, .topbar .brand {
  float: left;
  display: block;
  padding: 8px 20px 12px;
  margin-left: -20px;
  color: #ffffff;
  font-size: 20px;
  font-weight: 200;
  line-height: 1;
}
.topbar p {
  margin: 0;
  line-height: 40px;
}
.topbar p a:hover {
  background-color: transparent;
  color: #ffffff;
}
.topbar form {
  float: left;
  margin: 5px 0 0 0;
  position: relative;
  filter: alpha(opacity=100);
  -khtml-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
}
.topbar form.pull-right {
  float: right;
}
.topbar input {
  background-color: #444;
  background-color: rgba(255, 255, 255, 0.3);
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: normal;
  font-weight: 13px;
  line-height: 1;
  padding: 4px 9px;
  color: #ffffff;
  color: rgba(255, 255, 255, 0.75);
  border: 1px solid #111;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0px rgba(255, 255, 255, 0.25);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0px rgba(255, 255, 255, 0.25);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0px rgba(255, 255, 255, 0.25);
  -webkit-transition: none;
  -moz-transition: none;
  -ms-transition: none;
  -o-transition: none;
  transition: none;
}
.topbar input:-moz-placeholder {
  color: #e6e6e6;
}
.topbar input::-webkit-input-placeholder {
  color: #e6e6e6;
}
.topbar input:hover {
  background-color: #bfbfbf;
  background-color: rgba(255, 255, 255, 0.5);
  color: #ffffff;
}
.topbar input:focus, .topbar input.focused {
  outline: 0;
  background-color: #ffffff;
  color: #404040;
  text-shadow: 0 1px 0 #ffffff;
  border: 0;
  padding: 5px 10px;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
}
.topbar-inner, .topbar .fill {
  background-color: #222;
  background-color: #222222;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#333333), to(#222222));
  background-image: -moz-linear-gradient(top, #333333, #222222);
  background-image: -ms-linear-gradient(top, #333333, #222222);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #333333), color-stop(100%, #222222));
  background-image: -webkit-linear-gradient(top, #333333, #222222);
  background-image: -o-linear-gradient(top, #333333, #222222);
  background-image: linear-gradient(top, #333333, #222222);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333', endColorstr='#222222', GradientType=0);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
}
.topbar div > ul, .nav {
  display: block;
  float: left;
  margin: 0 10px 0 0;
  position: relative;
  left: 0;
}
.topbar div > ul > li, .nav > li {
  display: block;
  float: left;
}
.topbar div > ul a, .nav a {
  display: block;
  float: none;
  padding: 10px 10px 11px;
  line-height: 19px;
  text-decoration: none;
}
.topbar div > ul a:hover, .nav a:hover {
  color: #ffffff;
  text-decoration: none;
}
.topbar div > ul .active > a, .nav .active > a {
  background-color: #222;
  background-color: rgba(0, 0, 0, 0.5);
}
.topbar div > ul.secondary-nav, .nav.secondary-nav {
  float: right;
  margin-left: 10px;
  margin-right: 0;
}
.topbar div > ul.secondary-nav .menu-dropdown,
.nav.secondary-nav .menu-dropdown,
.topbar div > ul.secondary-nav .dropdown-menu,
.nav.secondary-nav .dropdown-menu {
  right: 0;
  border: 0;
}
.topbar div > ul a.menu:hover,
.nav a.menu:hover,
.topbar div > ul li.open .menu,
.nav li.open .menu,
.topbar div > ul .dropdown-toggle:hover,
.nav .dropdown-toggle:hover,
.topbar div > ul .dropdown.open .dropdown-toggle,
.nav .dropdown.open .dropdown-toggle {
  background: #444;
  background: rgba(255, 255, 255, 0.05);
}
.topbar div > ul .menu-dropdown,
.nav .menu-dropdown,
.topbar div > ul .dropdown-menu,
.nav .dropdown-menu {
  background-color: #333;
}
.topbar div > ul .menu-dropdown a.menu,
.nav .menu-dropdown a.menu,
.topbar div > ul .dropdown-menu a.menu,
.nav .dropdown-menu a.menu,
.topbar div > ul .menu-dropdown .dropdown-toggle,
.nav .menu-dropdown .dropdown-toggle,
.topbar div > ul .dropdown-menu .dropdown-toggle,
.nav .dropdown-menu .dropdown-toggle {
  color: #ffffff;
}
.topbar div > ul .menu-dropdown a.menu.open,
.nav .menu-dropdown a.menu.open,
.topbar div > ul .dropdown-menu a.menu.open,
.nav .dropdown-menu a.menu.open,
.topbar div > ul .menu-dropdown .dropdown-toggle.open,
.nav .menu-dropdown .dropdown-toggle.open,
.topbar div > ul .dropdown-menu .dropdown-toggle.open,
.nav .dropdown-menu .dropdown-toggle.open {
  background: #444;
  background: rgba(255, 255, 255, 0.05);
}
.topbar div > ul .menu-dropdown li a,
.nav .menu-dropdown li a,
.topbar div > ul .dropdown-menu li a,
.nav .dropdown-menu li a {
  color: #999;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5);
}
.topbar div > ul .menu-dropdown li a:hover,
.nav .menu-dropdown li a:hover,
.topbar div > ul .dropdown-menu li a:hover,
.nav .dropdown-menu li a:hover {
  background-color: #191919;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#292929), to(#191919));
  background-image: -moz-linear-gradient(top, #292929, #191919);
  background-image: -ms-linear-gradient(top, #292929, #191919);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #292929), color-stop(100%, #191919));
  background-image: -webkit-linear-gradient(top, #292929, #191919);
  background-image: -o-linear-gradient(top, #292929, #191919);
  background-image: linear-gradient(top, #292929, #191919);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#292929', endColorstr='#191919', GradientType=0);
  color: #ffffff;
}
.topbar div > ul .menu-dropdown .active a,
.nav .menu-dropdown .active a,
.topbar div > ul .dropdown-menu .active a,
.nav .dropdown-menu .active a {
  color: #ffffff;
}
.topbar div > ul .menu-dropdown .divider,
.nav .menu-dropdown .divider,
.topbar div > ul .dropdown-menu .divider,
.nav .dropdown-menu .divider {
  background-color: #222;
  border-color: #444;
}
.topbar ul .menu-dropdown li a, .topbar ul .dropdown-menu li a {
  padding: 4px 15px;
}
li.menu, .dropdown {
  position: relative;
}
a.menu:after, .dropdown-toggle:after {
  width: 0;
  height: 0;
  display: inline-block;
  content: "&darr;";
  text-indent: -99999px;
  vertical-align: top;
  margin-top: 8px;
  margin-left: 4px;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #ffffff;
  filter: alpha(opacity=50);
  -khtml-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
}
.menu-dropdown, .dropdown-menu {
  background-color: #ffffff;
  float: left;
  display: none;
  position: absolute;
  top: 40px;
  z-index: 900;
  min-width: 160px;
  max-width: 220px;
  _width: 160px;
  margin-left: 0;
  margin-right: 0;
  padding: 6px 0;
  zoom: 1;
  border-color: #999;
  border-color: rgba(0, 0, 0, 0.2);
  border-style: solid;
  border-width: 0 1px 1px;
  -webkit-border-radius: 0 0 6px 6px;
  -moz-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
  -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding-box;
  background-clip: padding-box;
}
.menu-dropdown li, .dropdown-menu li {
  float: none;
  display: block;
  background-color: none;
}
.menu-dropdown .divider, .dropdown-menu .divider {
  height: 1px;
  margin: 5px 0;
  overflow: hidden;
  background-color: #eee;
  border-bottom: 1px solid #ffffff;
}
.topbar .dropdown-menu a, .dropdown-menu a {
  display: block;
  padding: 4px 15px;
  clear: both;
  font-weight: normal;
  line-height: 18px;
  color: #808080;
  text-shadow: 0 1px 0 #ffffff;
}
.topbar .dropdown-menu a:hover,
.dropdown-menu a:hover,
.topbar .dropdown-menu a.hover,
.dropdown-menu a.hover {
  background-color: #dddddd;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#eeeeee), to(#dddddd));
  background-image: -moz-linear-gradient(top, #eeeeee, #dddddd);
  background-image: -ms-linear-gradient(top, #eeeeee, #dddddd);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #eeeeee), color-stop(100%, #dddddd));
  background-image: -webkit-linear-gradient(top, #eeeeee, #dddddd);
  background-image: -o-linear-gradient(top, #eeeeee, #dddddd);
  background-image: linear-gradient(top, #eeeeee, #dddddd);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#dddddd', GradientType=0);
  color: #404040;
  text-decoration: none;
  -webkit-box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.025), inset 0 -1px rgba(0, 0, 0, 0.025);
  -moz-box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.025), inset 0 -1px rgba(0, 0, 0, 0.025);
  box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.025), inset 0 -1px rgba(0, 0, 0, 0.025);
}
.open .menu,
.dropdown.open .menu,
.open .dropdown-toggle,
.dropdown.open .dropdown-toggle {
  color: #ffffff;
  background: #ccc;
  background: rgba(0, 0, 0, 0.3);
}
.open .menu-dropdown,
.dropdown.open .menu-dropdown,
.open .dropdown-menu,
.dropdown.open .dropdown-menu {
  display: block;
}
.tabs, .pills {
  margin: 0 0 18px;
  padding: 0;
  list-style: none;
  zoom: 1;
}
.tabs:before,
.pills:before,
.tabs:after,
.pills:after {
  display: table;
  content: "";
  zoom: 1;
}
.tabs:after, .pills:after {
  clear: both;
}
.tabs > li, .pills > li {
  float: left;
}
.tabs > li > a, .pills > li > a {
  display: block;
}
.tabs {
  border-color: #ddd;
  border-style: solid;
  border-width: 0 0 1px;
}
.tabs > li {
  position: relative;
  margin-bottom: -1px;
}
.tabs > li > a {
  padding: 0 15px;
  margin-right: 2px;
  line-height: 34px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0;
}
.tabs > li > a:hover {
  text-decoration: none;
  background-color: #eee;
  border-color: #eee #eee #ddd;
}
.tabs .active > a, .tabs .active > a:hover {
  color: #808080;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}
.tabs .menu-dropdown, .tabs .dropdown-menu {
  top: 35px;
  border-width: 1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px 6px;
  border-radius: 0 6px 6px 6px;
}
.tabs a.menu:after, .tabs .dropdown-toggle:after {
  border-top-color: #999;
  margin-top: 15px;
  margin-left: 5px;
}
.tabs li.open.menu .menu, .tabs .open.dropdown .dropdown-toggle {
  border-color: #999;
}
.tabs li.open a.menu:after, .tabs .dropdown.open .dropdown-toggle:after {
  border-top-color: #555;
}
.pills a {
  margin: 5px 3px 5px 0;
  padding: 0 15px;
  line-height: 30px;
  text-shadow: 0 1px 1px #ffffff;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}
.pills a:hover {
  color: #ffffff;
  text-decoration: none;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
  background-color: #00438a;
}
.pills .active a {
  color: #ffffff;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
  background-color: #0069d6;
}
.pills-vertical > li {
  float: none;
}
.tab-content > .tab-pane,
.pill-content > .pill-pane,
.tab-content > div,
.pill-content > div {
  display: none;
}
.tab-content > .active, .pill-content > .active {
  display: block;
}
.breadcrumb {
  padding: 7px 14px;
  margin: 0 0 18px;
  background-color: #f5f5f5;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#ffffff), to(#f5f5f5));
  background-image: -moz-linear-gradient(top, #ffffff, #f5f5f5);
  background-image: -ms-linear-gradient(top, #ffffff, #f5f5f5);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #f5f5f5));
  background-image: -webkit-linear-gradient(top, #ffffff, #f5f5f5);
  background-image: -o-linear-gradient(top, #ffffff, #f5f5f5);
  background-image: linear-gradient(top, #ffffff, #f5f5f5);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f5f5f5', GradientType=0);
  border: 1px solid #ddd;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 0 #ffffff;
  -moz-box-shadow: inset 0 1px 0 #ffffff;
  box-shadow: inset 0 1px 0 #ffffff;
}
.breadcrumb li {
  display: inline;
  text-shadow: 0 1px 0 #ffffff;
}
.breadcrumb .divider {
  padding: 0 5px;
  color: #bfbfbf;
}
.breadcrumb .active a {
  color: #404040;
}
.hero-unit {
  background-color: #f5f5f5;
  margin-bottom: 30px;
  padding: 60px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.hero-unit h1 {
  margin-bottom: 0;
  font-size: 60px;
  line-height: 1;
  letter-spacing: -1px;
}
.hero-unit p {
  font-size: 18px;
  font-weight: 200;
  line-height: 27px;
}
footer {
  margin-top: 17px;
  padding-top: 17px;
  border-top: 1px solid #eee;
}
.page-header {
  margin-bottom: 17px;
  border-bottom: 1px solid #ddd;
  -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}
.page-header h1 {
  margin-bottom: 8px;
}
.btn.danger,
.alert-message.danger,
.btn.danger:hover,
.alert-message.danger:hover,
.btn.error,
.alert-message.error,
.btn.error:hover,
.alert-message.error:hover,
.btn.success,
.alert-message.success,
.btn.success:hover,
.alert-message.success:hover,
.btn.info,
.alert-message.info,
.btn.info:hover,
.alert-message.info:hover {
  color: #ffffff;
}
.btn .close, .alert-message .close {
  font-family: Arial, sans-serif;
  line-height: 18px;
}
.btn.danger,
.alert-message.danger,
.btn.error,
.alert-message.error {
  background-color: #c43c35;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#ee5f5b), to(#c43c35));
  background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -ms-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ee5f5b), color-stop(100%, #c43c35));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: linear-gradient(top, #ee5f5b, #c43c35);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b', endColorstr='#c43c35', GradientType=0);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #c43c35 #c43c35 #882a25;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.btn.success, .alert-message.success {
  background-color: #57a957;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#62c462), to(#57a957));
  background-image: -moz-linear-gradient(top, #62c462, #57a957);
  background-image: -ms-linear-gradient(top, #62c462, #57a957);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #62c462), color-stop(100%, #57a957));
  background-image: -webkit-linear-gradient(top, #62c462, #57a957);
  background-image: -o-linear-gradient(top, #62c462, #57a957);
  background-image: linear-gradient(top, #62c462, #57a957);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#62c462', endColorstr='#57a957', GradientType=0);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #57a957 #57a957 #3d773d;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.btn.info, .alert-message.info {
  background-color: #339bb9;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#5bc0de), to(#339bb9));
  background-image: -moz-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -ms-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5bc0de), color-stop(100%, #339bb9));
  background-image: -webkit-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -o-linear-gradient(top, #5bc0de, #339bb9);
  background-image: linear-gradient(top, #5bc0de, #339bb9);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de', endColorstr='#339bb9', GradientType=0);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #339bb9 #339bb9 #22697d;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.btn {
  cursor: pointer;
  display: inline-block;
  background-color: #e6e6e6;
  background-repeat: no-repeat;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), color-stop(25%, #ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #ffffff 25%, #e6e6e6);
  background-image: -ms-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -o-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
  padding: 5px 14px 6px;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  color: #333;
  font-size: 13px;
  line-height: normal;
  border: 1px solid #ccc;
  border-bottom-color: #bbb;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -webkit-transition: 0.1s linear all;
  -moz-transition: 0.1s linear all;
  -ms-transition: 0.1s linear all;
  -o-transition: 0.1s linear all;
  transition: 0.1s linear all;
}
.btn:hover {
  background-position: 0 -15px;
  color: #333;
  text-decoration: none;
}
.btn:focus {
  outline: 1px dotted #666;
}
.btn.primary {
  color: #ffffff;
  background-color: #0064cd;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#049cdb), to(#0064cd));
  background-image: -moz-linear-gradient(top, #049cdb, #0064cd);
  background-image: -ms-linear-gradient(top, #049cdb, #0064cd);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #049cdb), color-stop(100%, #0064cd));
  background-image: -webkit-linear-gradient(top, #049cdb, #0064cd);
  background-image: -o-linear-gradient(top, #049cdb, #0064cd);
  background-image: linear-gradient(top, #049cdb, #0064cd);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#049cdb', endColorstr='#0064cd', GradientType=0);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #0064cd #0064cd #003f81;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.btn.active, .btn:active {
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.btn.disabled {
  cursor: default;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  filter: alpha(opacity=65);
  -khtml-opacity: 0.65;
  -moz-opacity: 0.65;
  opacity: 0.65;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.btn[disabled] {
  cursor: default;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  filter: alpha(opacity=65);
  -khtml-opacity: 0.65;
  -moz-opacity: 0.65;
  opacity: 0.65;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.btn.large {
  font-size: 15px;
  line-height: normal;
  padding: 9px 14px 9px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.btn.small {
  padding: 7px 9px 7px;
  font-size: 11px;
}
:root .alert-message, :root .btn {
  border-radius: 0 \0;
}
button.btn::-moz-focus-inner, input[type=submit].btn::-moz-focus-inner {
  padding: 0;
  border: 0;
}
.close {
  float: right;
  color: #000000;
  font-size: 20px;
  font-weight: bold;
  line-height: 13.5px;
  text-shadow: 0 1px 0 #ffffff;
  filter: alpha(opacity=25);
  -khtml-opacity: 0.25;
  -moz-opacity: 0.25;
  opacity: 0.25;
}
.close:hover {
  color: #000000;
  text-decoration: none;
  filter: alpha(opacity=40);
  -khtml-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
}
.alert-message {
  position: relative;
  padding: 7px 15px;
  margin-bottom: 18px;
  color: #404040;
  background-color: #eedc94;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#fceec1), to(#eedc94));
  background-image: -moz-linear-gradient(top, #fceec1, #eedc94);
  background-image: -ms-linear-gradient(top, #fceec1, #eedc94);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fceec1), color-stop(100%, #eedc94));
  background-image: -webkit-linear-gradient(top, #fceec1, #eedc94);
  background-image: -o-linear-gradient(top, #fceec1, #eedc94);
  background-image: linear-gradient(top, #fceec1, #eedc94);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fceec1', endColorstr='#eedc94', GradientType=0);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #eedc94 #eedc94 #e4c652;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  border-width: 1px;
  border-style: solid;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
}
.alert-message .close {
  margin-top: 1px;
  *margin-top: 0;
}
.alert-message a {
  font-weight: bold;
  color: #404040;
}
.alert-message.danger p a,
.alert-message.error p a,
.alert-message.success p a,
.alert-message.info p a {
  color: #ffffff;
}
.alert-message h5 {
  line-height: 18px;
}
.alert-message p {
  margin-bottom: 0;
}
.alert-message div {
  margin-top: 5px;
  margin-bottom: 2px;
  line-height: 28px;
}
.alert-message .btn {
  -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
  -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
}
.alert-message.block-message {
  background-image: none;
  background-color: #fdf5d9;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  padding: 14px;
  border-color: #fceec1;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.alert-message.block-message ul, .alert-message.block-message p {
  margin-right: 30px;
}
.alert-message.block-message ul {
  margin-bottom: 0;
}
.alert-message.block-message li {
  color: #404040;
}
.alert-message.block-message .alert-actions {
  margin-top: 5px;
}
.alert-message.block-message.error, .alert-message.block-message.success, .alert-message.block-message.info {
  color: #404040;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}
.alert-message.block-message.error {
  background-color: #fddfde;
  border-color: #fbc7c6;
}
.alert-message.block-message.success {
  background-color: #d1eed1;
  border-color: #bfe7bf;
}
.alert-message.block-message.info {
  background-color: #ddf4fb;
  border-color: #c6edf9;
}
.alert-message.block-message.danger p a,
.alert-message.block-message.error p a,
.alert-message.block-message.success p a,
.alert-message.block-message.info p a {
  color: #404040;
}
.pagination {
  height: 36px;
  margin: 18px 0;
}
.pagination ul {
  float: left;
  margin: 0;
  border: 1px solid #ddd;
  border: 1px solid rgba(0, 0, 0, 0.15);
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}
.pagination li {
  display: inline;
}
.pagination a {
  float: left;
  padding: 0 14px;
  line-height: 34px;
  border-right: 1px solid;
  border-right-color: #ddd;
  border-right-color: rgba(0, 0, 0, 0.15);
  *border-right-color: #ddd;
  /* IE6-7 */

  text-decoration: none;
}
.pagination a:hover, .pagination .active a {
  background-color: #c7eefe;
}
.pagination .disabled a, .pagination .disabled a:hover {
  background-color: transparent;
  color: #bfbfbf;
}
.pagination .next a {
  border: 0;
}
.well {
  background-color: #f5f5f5;
  margin-bottom: 20px;
  padding: 19px;
  min-height: 20px;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.05);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.modal-backdrop {
  background-color: #000000;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 10000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop, .modal-backdrop.fade.in {
  filter: alpha(opacity=80);
  -khtml-opacity: 0.8;
  -moz-opacity: 0.8;
  opacity: 0.8;
}
.modal {
  position: fixed;
  top: 50%;
  left: 50%;
  z-index: 11000;
  width: 560px;
  margin: -250px 0 0 -280px;
  background-color: #ffffff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.3);
  *border: 1px solid #999;
  /* IE6-7 */

  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding-box;
  background-clip: padding-box;
}
.modal .close {
  margin-top: 7px;
}
.modal.fade {
  -webkit-transition: opacity .3s linear, top .3s ease-out;
  -moz-transition: opacity .3s linear, top .3s ease-out;
  -ms-transition: opacity .3s linear, top .3s ease-out;
  -o-transition: opacity .3s linear, top .3s ease-out;
  transition: opacity .3s linear, top .3s ease-out;
  top: -25%;
}
.modal.fade.in {
  top: 50%;
}
.modal-header {
  border-bottom: 1px solid #eee;
  padding: 5px 15px;
}
.modal-message {
  padding: 15px;
}
.modal-message form {
  margin-bottom: 0;
}
.modal-footer {
  background-color: #f5f5f5;
  padding: 14px 15px 15px;
  border-top: 1px solid #ddd;
  -webkit-border-radius: 0 0 6px 6px;
  -moz-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
  -webkit-box-shadow: inset 0 1px 0 #ffffff;
  -moz-box-shadow: inset 0 1px 0 #ffffff;
  box-shadow: inset 0 1px 0 #ffffff;
  zoom: 1;
  margin-bottom: 0;
}
.modal-footer:before, .modal-footer:after {
  display: table;
  content: "";
  zoom: 1;
}
.modal-footer:after {
  clear: both;
}
.modal-footer .btn {
  float: right;
  margin-left: 5px;
}
.modal .popover, .modal .twipsy {
  z-index: 12000;
}
.twipsy {
  display: block;
  position: absolute;
  visibility: visible;
  padding: 5px;
  font-size: 11px;
  z-index: 1000;
  filter: alpha(opacity=80);
  -khtml-opacity: 0.8;
  -moz-opacity: 0.8;
  opacity: 0.8;
}
.twipsy.fade.in {
  filter: alpha(opacity=80);
  -khtml-opacity: 0.8;
  -moz-opacity: 0.8;
  opacity: 0.8;
}
.twipsy.above .twipsy-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #000000;
}
.twipsy.left .twipsy-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 5px solid #000000;
}
.twipsy.below .twipsy-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #000000;
}
.twipsy.right .twipsy-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 5px solid #000000;
}
.twipsy-inner {
  padding: 3px 8px;
  background-color: #000000;
  color: white;
  text-align: center;
  max-width: 200px;
  text-decoration: none;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.twipsy-arrow {
  position: absolute;
  width: 0;
  height: 0;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1000;
  padding: 5px;
  display: none;
}
.popover.above .arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #000000;
}
.popover.right .arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 5px solid #000000;
}
.popover.below .arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #000000;
}
.popover.left .arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-left: 5px solid #000000;
}
.popover .arrow {
  position: absolute;
  width: 0;
  height: 0;
}
.popover .inner {
  background: #000000;
  background: rgba(0, 0, 0, 0.8);
  padding: 3px;
  overflow: hidden;
  width: 280px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
}
.popover .title {
  background-color: #f5f5f5;
  padding: 9px 15px;
  line-height: 1;
  -webkit-border-radius: 3px 3px 0 0;
  -moz-border-radius: 3px 3px 0 0;
  border-radius: 3px 3px 0 0;
  border-bottom: 1px solid #eee;
}
.popover .content {
  background-color: #ffffff;
  padding: 14px;
  -webkit-border-radius: 0 0 3px 3px;
  -moz-border-radius: 0 0 3px 3px;
  border-radius: 0 0 3px 3px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding-box;
  background-clip: padding-box;
}
.popover .content p, .popover .content ul, .popover .content ol {
  margin-bottom: 0;
}
.fade {
  -webkit-transition: opacity 0.15s linear;
  -moz-transition: opacity 0.15s linear;
  -ms-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
  opacity: 0;
}
.fade.in {
  opacity: 1;
}
.label {
  padding: 1px 3px 2px;
  font-size: 9.75px;
  font-weight: bold;
  color: #ffffff;
  text-transform: uppercase;
  white-space: nowrap;
  background-color: #bfbfbf;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.label.important {
  background-color: #c43c35;
}
.label.warning {
  background-color: #f89406;
}
.label.success {
  background-color: #46a546;
}
.label.notice {
  background-color: #62cffc;
}
.media-grid {
  margin-left: -20px;
  margin-bottom: 0;
  zoom: 1;
}
.media-grid:before, .media-grid:after {
  display: table;
  content: "";
  zoom: 1;
}
.media-grid:after {
  clear: both;
}
.media-grid li {
  display: inline;
}
.media-grid a {
  float: left;
  padding: 4px;
  margin: 0 0 18px 20px;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
}
.media-grid a img {
  display: block;
}
.media-grid a:hover {
  border-color: #0069d6;
  -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
  -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
  box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
}
