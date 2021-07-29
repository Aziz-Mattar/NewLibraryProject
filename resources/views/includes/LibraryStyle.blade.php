<style>
    html {
        font-family: sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%
    }
    body {
        margin: 0
    }
    article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block
    }
    audio, canvas, progress, video {
        display: inline-block;
        vertical-align: baseline
    }
    audio:not([controls]) {
        display: none;
        height: 0
    }
    [hidden], template {
        display: none
    }
    a {
        background-color: transparent
    }
    a:active, a:hover {
        outline: 0
    }
    abbr[title] {
        border-bottom: 1px dotted
    }
    b, strong {
        font-weight: 700
    }
    dfn {
        font-style: italic
    }
    h1 {
        margin: .67em 0;
        font-size: 2em
    }
    mark {
        color: #000;
        background: #ff0
    }
    small {
        font-size: 80%
    }
    sub, sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline
    }
    sup {
        top: -.5em
    }
    sub {
        bottom: -.25em
    }
    img {
        border: 0
    }
    svg:not(:root) {
        overflow: hidden
    }
    figure {
        margin: 1em 40px
    }
    hr {
        height: 0;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box
    }
    pre {
        overflow: auto
    }
    code, kbd, pre, samp {
        font-family: monospace, monospace;
        font-size: 1em
    }
    button, input, optgroup, select, textarea {
        margin: 0;
        font: inherit;
        color: inherit
    }
    button {
        overflow: visible
    }
    button, select {
        text-transform: none
    }
    button, html input[type=button], input[type=reset], input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer
    }
    button[disabled], html input[disabled] {
        cursor: default
    }
    button::-moz-focus-inner, input::-moz-focus-inner {
        padding: 0;
        border: 0
    }
    input {
        line-height: normal
    }
    input[type=checkbox], input[type=radio] {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0
    }
    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
        height: auto
    }
    input[type=search] {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-appearance: textfield
    }
    input[type=search]::-webkit-search-cancel-button, input[type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }
    fieldset {
        padding: .35em .625em .75em;
        margin: 0 2px;
        border: 1px solid silver
    }
    legend {
        padding: 0;
        border: 0
    }
    textarea {
        overflow: auto
    }
    optgroup {
        font-weight: 700
    }
    table {
        border-spacing: 0;
        border-collapse: collapse
    }
    td, th {
        padding: 0
    }
    /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
    @media print {
        *, :after, :before {
            color: #000 !important;
            text-shadow: none !important;
            background: 0 0 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important
        }
        a, a:visited {
            text-decoration: underline
        }
        a[href]:after {
            content: " (" attr(href) ")"
        }
        abbr[title]:after {
            content: " (" attr(title) ")"
        }
        a[href^="#"]:after, a[href^="javascript:"]:after {
            content: ""
        }
        blockquote, pre {
            border: 1px solid #999;
            page-break-inside: avoid
        }
        thead {
            display: table-header-group
        }
        img, tr {
            page-break-inside: avoid
        }
        img {
            max-width: 100% !important
        }
        h2, h3, p {
            orphans: 3;
            widows: 3
        }
        h2, h3 {
            page-break-after: avoid
        }
        .navbar {
            display: none
        }
        .btn > .caret, .dropup > .btn > .caret {
            border-top-color: #000 !important
        }
        .label {
            border: 1px solid #000
        }
        .table {
            border-collapse: collapse !important
        }
        .table td, .table th {
            background-color: #fff !important
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #ddd !important
        }
    }
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }
    :after, :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }
    html {
        font-size: 10px;
        -webkit-tap-highlight-color: transparent
    }
    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff
    }
    button, input, select, textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }
    a {
        color: #337ab7;
        text-decoration: none
    }
    a:focus, a:hover {
        color: #23527c;
        text-decoration: underline
    }
    a:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }
    figure {
        margin: 0
    }
    img {
        vertical-align: middle
    }
    .carousel-inner > .item > a > img, .carousel-inner > .item > img, .img-responsive, .thumbnail a > img, .thumbnail > img {
        display: block;
        max-width: 100%;
        height: auto
    }
    .img-rounded {
        border-radius: 6px
    }
    .img-circle {
        border-radius: 50%
    }
    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #eee
    }
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }
    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }
    [role=button] {
        cursor: pointer
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit
    }
    .h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
        font-weight: 400;
        line-height: 1;
        color: #777
    }
    .h1, .h2, .h3, h1, h2, h3 {
        margin-top: 20px;
        margin-bottom: 10px
    }
    .h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small {
        font-size: 65%
    }
    .h4, .h5, .h6, h4, h5, h6 {
        margin-top: 10px;
        margin-bottom: 10px
    }
    .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
        font-size: 75%
    }
    .h1, h1 {
        font-size: 36px
    }
    .h2, h2 {
        font-size: 30px
    }
    .h3, h3 {
        font-size: 24px
    }
    .h4, h4 {
        font-size: 18px
    }
    .h5, h5 {
        font-size: 14px
    }
    .h6, h6 {
        font-size: 12px
    }
    p {
        margin: 0 0 10px
    }
    .small, small {
        font-size: 85%
    }
    .mark, mark {
        padding: .2em;
        background-color: #fcf8e3
    }
    .text-left {
        text-align: left
    }
    .text-right {
        text-align: right
    }
    .text-center {
        text-align: center
    }
    .text-justify {
        text-align: justify
    }
    .text-nowrap {
        white-space: nowrap
    }
    .text-lowercase {
        text-transform: lowercase
    }
    .text-uppercase {
        text-transform: uppercase
    }
    .text-capitalize {
        text-transform: capitalize
    }
    .text-muted {
        color: #777
    }
    .text-primary {
        color: #337ab7
    }
    a.text-primary:focus, a.text-primary:hover {
        color: #286090
    }
    .text-success {
        color: #3c763d
    }
    a.text-success:focus, a.text-success:hover {
        color: #2b542c
    }
    .text-info {
        color: #31708f
    }
    a.text-info:focus, a.text-info:hover {
        color: #245269
    }
    .text-warning {
        color: #8a6d3b
    }
    a.text-warning:focus, a.text-warning:hover {
        color: #66512c
    }
    .text-danger {
        color: #a94442
    }
    a.text-danger:focus, a.text-danger:hover {
        color: #843534
    }
    .bg-primary {
        color: #fff;
        background-color: #337ab7
    }
    a.bg-primary:focus, a.bg-primary:hover {
        background-color: #286090
    }
    .bg-success {
        background-color: #dff0d8
    }
    a.bg-success:focus, a.bg-success:hover {
        background-color: #c1e2b3
    }
    .bg-info {
        background-color: #d9edf7
    }
    a.bg-info:focus, a.bg-info:hover {
        background-color: #afd9ee
    }
    .bg-warning {
        background-color: #fcf8e3
    }
    a.bg-warning:focus, a.bg-warning:hover {
        background-color: #f7ecb5
    }
    .bg-danger {
        background-color: #f2dede
    }
    a.bg-danger:focus, a.bg-danger:hover {
        background-color: #e4b9b9
    }
    .page-header {
        padding-bottom: 9px;
        margin: 40px 0 20px;
        border-bottom: 1px solid #eee
    }
    ol, ul {
        margin-top: 0;
        margin-bottom: 10px
    }
    ol ol, ol ul, ul ol, ul ul {
        margin-bottom: 0
    }
    .list-unstyled {
        padding-left: 0;
        list-style: none
    }
    .list-inline {
        padding-left: 0;
        margin-left: -5px;
        list-style: none
    }
    .list-inline > li {
        display: inline-block;
        padding-right: 5px;
        padding-left: 5px
    }
    dl {
        margin-top: 0;
        margin-bottom: 20px
    }
    dd, dt {
        line-height: 1.42857143
    }
    dt {
        font-weight: 700
    }
    dd {
        margin-left: 0
    }
    @media (min-width: 768px) {
        .dl-horizontal dt {
            float: left;
            width: 160px;
            overflow: hidden;
            clear: left;
            text-align: right;
            text-overflow: ellipsis;
            white-space: nowrap
        }
        .dl-horizontal dd {
            margin-left: 180px
        }
    }
    abbr[data-original-title], abbr[title] {
        cursor: help;
        border-bottom: 1px dotted #777
    }
    .initialism {
        font-size: 90%;
        text-transform: uppercase
    }
    blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        font-size: 17.5px;
        border-left: 5px solid #eee
    }
    blockquote ol:last-child, blockquote p:last-child, blockquote ul:last-child {
        margin-bottom: 0
    }
    blockquote .small, blockquote footer, blockquote small {
        display: block;
        font-size: 80%;
        line-height: 1.42857143;
        color: #777
    }
    blockquote .small:before, blockquote footer:before, blockquote small:before {
        content: '\2014 \00A0'
    }
    .blockquote-reverse, blockquote.pull-right {
        padding-right: 15px;
        padding-left: 0;
        text-align: right;
        border-right: 5px solid #eee;
        border-left: 0
    }
    .blockquote-reverse .small:before, .blockquote-reverse footer:before, .blockquote-reverse small:before, blockquote.pull-right .small:before, blockquote.pull-right footer:before, blockquote.pull-right small:before {
        content: ''
    }
    .blockquote-reverse .small:after, .blockquote-reverse footer:after, .blockquote-reverse small:after, blockquote.pull-right .small:after, blockquote.pull-right footer:after, blockquote.pull-right small:after {
        content: '\00A0 \2014'
    }
    address {
        margin-bottom: 20px;
        font-style: normal;
        line-height: 1.42857143
    }
    code, kbd, pre, samp {
        font-family: Menlo, Monaco, Consolas, "Courier New", monospace
    }
    code {
        padding: 2px 4px;
        font-size: 90%;
        color: #c7254e;
        background-color: #f9f2f4;
        border-radius: 4px
    }
    kbd {
        padding: 2px 4px;
        font-size: 90%;
        color: #fff;
        background-color: #333;
        border-radius: 3px;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
    }
    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700;
        -webkit-box-shadow: none;
        box-shadow: none
    }
    pre {
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #333;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 4px
    }
    pre code {
        padding: 0;
        font-size: inherit;
        color: inherit;
        white-space: pre-wrap;
        background-color: transparent;
        border-radius: 0
    }
    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll
    }
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }
    @media (min-width: 768px) {
        .container {
            width: 750px
        }
    }
    @media (min-width: 992px) {
        .container {
            width: 970px
        }
    }
    @media (min-width: 1200px) {
        .container {
            width: 1170px
        }
    }
    .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }
    .row {
        margin-right: -15px;
        margin-left: -15px
    }
    .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }
    .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
        float: left
    }
    .col-xs-12 {
        width: 100%
    }
    .col-xs-11 {
        width: 91.66666667%
    }
    .col-xs-10 {
        width: 83.33333333%
    }
    .col-xs-9 {
        width: 75%
    }
    .col-xs-8 {
        width: 66.66666667%
    }
    .col-xs-7 {
        width: 58.33333333%
    }
    .col-xs-6 {
        width: 50%
    }
    .col-xs-5 {
        width: 41.66666667%
    }
    .col-xs-4 {
        width: 33.33333333%
    }
    .col-xs-3 {
        width: 25%
    }
    .col-xs-2 {
        width: 16.66666667%
    }
    .col-xs-1 {
        width: 8.33333333%
    }
    @media (min-width: 768px) {
        .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 {
            float: left
        }
        .col-sm-12 {
            width: 100%
        }
        .col-sm-11 {
            width: 91.66666667%
        }
        .col-sm-10 {
            width: 83.33333333%
        }
        .col-sm-9 {
            width: 75%
        }
        .col-sm-8 {
            width: 66.66666667%
        }
        .col-sm-7 {
            width: 58.33333333%
        }
        .col-sm-6 {
            width: 50%
        }
        .col-sm-5 {
            width: 41.66666667%
        }
        .col-sm-4 {
            width: 33.33333333%
        }
        .col-sm-3 {
            width: 25%
        }
        .col-sm-2 {
            width: 16.66666667%
        }
        .col-sm-1 {
            width: 8.33333333%
        }
    }
    @media (min-width: 992px) {
        .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
            float: left
        }
        .col-md-12 {
            width: 100%
        }
        .col-md-11 {
            width: 91.66666667%
        }
        .col-md-10 {
            width: 83.33333333%
        }
        .col-md-9 {
            width: 75%
        }
        .col-md-8 {
            width: 66.66666667%
        }
        .col-md-7 {
            width: 58.33333333%
        }
        .col-md-6 {
            width: 50%
        }
        .col-md-5 {
            width: 41.66666667%
        }
        .col-md-4 {
            width: 33.33333333%
        }
        .col-md-3 {
            width: 25%
        }
        .col-md-2 {
            width: 16.66666667%
        }
        .col-md-1 {
            width: 8.33333333%
        }
    }
    @media (min-width: 1200px) {
        .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9 {
            float: left
        }
        .col-lg-12 {
            width: 100%
        }
        .col-lg-11 {
            width: 91.66666667%
        }
        .col-lg-10 {
            width: 83.33333333%
        }
        .col-lg-9 {
            width: 75%
        }
        .col-lg-8 {
            width: 66.66666667%
        }
        .col-lg-7 {
            width: 58.33333333%
        }
        .col-lg-6 {
            width: 50%
        }
        .col-lg-5 {
            width: 41.66666667%
        }
        .col-lg-4 {
            width: 33.33333333%
        }
        .col-lg-3 {
            width: 25%
        }
        .col-lg-2 {
            width: 16.66666667%
        }
        .col-lg-1 {
            width: 8.33333333%
        }
    }
    table {
        background-color: transparent
    }
    caption {
        padding-top: 8px;
        padding-bottom: 8px;
        color: #777;
        text-align: left
    }
    th {
        text-align: left
    }
    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px
    }
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #ddd
    }
    .table > thead > tr > th {
        vertical-align: bottom;
        border-bottom: 2px solid #ddd
    }
    .table > caption + thead > tr:first-child > td, .table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > td, .table > thead:first-child > tr:first-child > th {
        border-top: 0
    }
    .table > tbody + tbody {
        border-top: 2px solid #ddd
    }
    .table .table {
        background-color: #fff
    }
    .table-condensed > tbody > tr > td, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > td, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > thead > tr > th {
        padding: 5px
    }
    .table-bordered {
        border: 1px solid #ddd
    }
    .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
        border: 1px solid #ddd
    }
    .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
        border-bottom-width: 2px
    }
    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #f9f9f9
    }
    .table-hover > tbody > tr:hover {
        background-color: #f5f5f5
    }
    table col[class*=col-] {
        position: static;
        display: table-column;
        float: none
    }
    table td[class*=col-], table th[class*=col-] {
        position: static;
        display: table-cell;
        float: none
    }
    .table > tbody > tr.active > td, .table > tbody > tr.active > th, .table > tbody > tr > td.active, .table > tbody > tr > th.active, .table > tfoot > tr.active > td, .table > tfoot > tr.active > th, .table > tfoot > tr > td.active, .table > tfoot > tr > th.active, .table > thead > tr.active > td, .table > thead > tr.active > th, .table > thead > tr > td.active, .table > thead > tr > th.active {
        background-color: #f5f5f5
    }
    .table-hover > tbody > tr.active:hover > td, .table-hover > tbody > tr.active:hover > th, .table-hover > tbody > tr:hover > .active, .table-hover > tbody > tr > td.active:hover, .table-hover > tbody > tr > th.active:hover {
        background-color: #e8e8e8
    }
    .table > tbody > tr.success > td, .table > tbody > tr.success > th, .table > tbody > tr > td.success, .table > tbody > tr > th.success, .table > tfoot > tr.success > td, .table > tfoot > tr.success > th, .table > tfoot > tr > td.success, .table > tfoot > tr > th.success, .table > thead > tr.success > td, .table > thead > tr.success > th, .table > thead > tr > td.success, .table > thead > tr > th.success {
        background-color: #dff0d8
    }
    .table-hover > tbody > tr.success:hover > td, .table-hover > tbody > tr.success:hover > th, .table-hover > tbody > tr:hover > .success, .table-hover > tbody > tr > td.success:hover, .table-hover > tbody > tr > th.success:hover {
        background-color: #d0e9c6
    }
    .table > tbody > tr.info > td, .table > tbody > tr.info > th, .table > tbody > tr > td.info, .table > tbody > tr > th.info, .table > tfoot > tr.info > td, .table > tfoot > tr.info > th, .table > tfoot > tr > td.info, .table > tfoot > tr > th.info, .table > thead > tr.info > td, .table > thead > tr.info > th, .table > thead > tr > td.info, .table > thead > tr > th.info {
        background-color: #d9edf7
    }
    .table-hover > tbody > tr.info:hover > td, .table-hover > tbody > tr.info:hover > th, .table-hover > tbody > tr:hover > .info, .table-hover > tbody > tr > td.info:hover, .table-hover > tbody > tr > th.info:hover {
        background-color: #c4e3f3
    }
    .table > tbody > tr.warning > td, .table > tbody > tr.warning > th, .table > tbody > tr > td.warning, .table > tbody > tr > th.warning, .table > tfoot > tr.warning > td, .table > tfoot > tr.warning > th, .table > tfoot > tr > td.warning, .table > tfoot > tr > th.warning, .table > thead > tr.warning > td, .table > thead > tr.warning > th, .table > thead > tr > td.warning, .table > thead > tr > th.warning {
        background-color: #fcf8e3
    }
    .table-hover > tbody > tr.warning:hover > td, .table-hover > tbody > tr.warning:hover > th, .table-hover > tbody > tr:hover > .warning, .table-hover > tbody > tr > td.warning:hover, .table-hover > tbody > tr > th.warning:hover {
        background-color: #faf2cc
    }
    .table > tbody > tr.danger > td, .table > tbody > tr.danger > th, .table > tbody > tr > td.danger, .table > tbody > tr > th.danger, .table > tfoot > tr.danger > td, .table > tfoot > tr.danger > th, .table > tfoot > tr > td.danger, .table > tfoot > tr > th.danger, .table > thead > tr.danger > td, .table > thead > tr.danger > th, .table > thead > tr > td.danger, .table > thead > tr > th.danger {
        background-color: #f2dede
    }
    .table-hover > tbody > tr.danger:hover > td, .table-hover > tbody > tr.danger:hover > th, .table-hover > tbody > tr:hover > .danger, .table-hover > tbody > tr > td.danger:hover, .table-hover > tbody > tr > th.danger:hover {
        background-color: #ebcccc
    }
    .table-responsive {
        min-height: .01%;
        overflow-x: auto
    }
    @media screen and (max-width: 767px) {
        .table-responsive {
            width: 100%;
            margin-bottom: 15px;
            overflow-y: hidden;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            border: 1px solid #ddd
        }
        .table-responsive > .table {
            margin-bottom: 0
        }
        .table-responsive > .table > tbody > tr > td, .table-responsive > .table > tbody > tr > th, .table-responsive > .table > tfoot > tr > td, .table-responsive > .table > tfoot > tr > th, .table-responsive > .table > thead > tr > td, .table-responsive > .table > thead > tr > th {
            white-space: nowrap
        }
        .table-responsive > .table-bordered {
            border: 0
        }
        .table-responsive > .table-bordered > tbody > tr > td:first-child, .table-responsive > .table-bordered > tbody > tr > th:first-child, .table-responsive > .table-bordered > tfoot > tr > td:first-child, .table-responsive > .table-bordered > tfoot > tr > th:first-child, .table-responsive > .table-bordered > thead > tr > td:first-child, .table-responsive > .table-bordered > thead > tr > th:first-child {
            border-left: 0
        }
        .table-responsive > .table-bordered > tbody > tr > td:last-child, .table-responsive > .table-bordered > tbody > tr > th:last-child, .table-responsive > .table-bordered > tfoot > tr > td:last-child, .table-responsive > .table-bordered > tfoot > tr > th:last-child, .table-responsive > .table-bordered > thead > tr > td:last-child, .table-responsive > .table-bordered > thead > tr > th:last-child {
            border-right: 0
        }
        .table-responsive > .table-bordered > tbody > tr:last-child > td, .table-responsive > .table-bordered > tbody > tr:last-child > th, .table-responsive > .table-bordered > tfoot > tr:last-child > td, .table-responsive > .table-bordered > tfoot > tr:last-child > th {
            border-bottom: 0
        }
    }
    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0
    }
    legend {
        display: block;
        width: 100%;
        padding: 0;
        margin-bottom: 20px;
        font-size: 21px;
        line-height: inherit;
        color: #333;
        border: 0;
        border-bottom: 1px solid #e5e5e5
    }
    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700
    }
    input[type=search] {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }
    input[type=checkbox], input[type=radio] {
        margin: 4px 0 0;
        line-height: normal
    }
    input[type=file] {
        display: block
    }
    input[type=range] {
        display: block;
        width: 100%
    }
    select[multiple], select[size] {
        height: auto
    }
    input[type=checkbox]:focus, input[type=file]:focus, input[type=radio]:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }
    output {
        display: block;
        padding-top: 7px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555
    }
    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }
    .form-control:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }
    .form-control::-moz-placeholder {
        color: #999;
        opacity: 1
    }
    .form-control:-ms-input-placeholder {
        color: #999
    }
    .form-control::-webkit-input-placeholder {
        color: #999
    }
    .form-control::-ms-expand {
        background-color: transparent;
        border: 0
    }
    .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
        background-color: #eee;
        opacity: 1
    }
    .form-control[disabled], fieldset[disabled] .form-control {
        cursor: not-allowed
    }
    textarea.form-control {
        height: auto
    }
    input[type=search] {
        -webkit-appearance: none
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) {
        input[type=date].form-control, input[type=datetime-local].form-control, input[type=month].form-control, input[type=time].form-control {
            line-height: 34px
        }
        .input-group-sm input[type=date], .input-group-sm input[type=datetime-local], .input-group-sm input[type=month], .input-group-sm input[type=time], input[type=date].input-sm, input[type=datetime-local].input-sm, input[type=month].input-sm, input[type=time].input-sm {
            line-height: 30px
        }
        .input-group-lg input[type=date], .input-group-lg input[type=datetime-local], .input-group-lg input[type=month], .input-group-lg input[type=time], input[type=date].input-lg, input[type=datetime-local].input-lg, input[type=month].input-lg, input[type=time].input-lg {
            line-height: 46px
        }
    }
    .form-group {
        margin-bottom: 15px
    }
    .checkbox, .radio {
        position: relative;
        display: block;
        margin-top: 10px;
        margin-bottom: 10px
    }
    .checkbox label, .radio label {
        min-height: 20px;
        padding-left: 20px;
        margin-bottom: 0;
        font-weight: 400;
        cursor: pointer
    }
    .checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
        position: absolute;
        margin-left: -20px
    }
    .checkbox + .checkbox, .radio + .radio {
        margin-top: -5px
    }
    .checkbox-inline, .radio-inline {
        position: relative;
        display: inline-block;
        padding-left: 20px;
        margin-bottom: 0;
        font-weight: 400;
        vertical-align: middle;
        cursor: pointer
    }
    .checkbox-inline + .checkbox-inline, .radio-inline + .radio-inline {
        margin-top: 0;
        margin-left: 10px
    }
    fieldset[disabled] input[type=checkbox], fieldset[disabled] input[type=radio], input[type=checkbox].disabled, input[type=checkbox][disabled], input[type=radio].disabled, input[type=radio][disabled] {
        cursor: not-allowed
    }
    .checkbox-inline.disabled, .radio-inline.disabled, fieldset[disabled] .checkbox-inline, fieldset[disabled] .radio-inline {
        cursor: not-allowed
    }
    .checkbox.disabled label, .radio.disabled label, fieldset[disabled] .checkbox label, fieldset[disabled] .radio label {
        cursor: not-allowed
    }
    .form-control-static {
        min-height: 34px;
        padding-top: 7px;
        padding-bottom: 7px;
        margin-bottom: 0
    }
    .form-control-static.input-lg, .form-control-static.input-sm {
        padding-right: 0;
        padding-left: 0
    }
    .input-sm {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }
    select.input-sm {
        height: 30px;
        line-height: 30px
    }
    select[multiple].input-sm, textarea.input-sm {
        height: auto
    }
    .form-group-sm .form-control {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }
    .form-group-sm select.form-control {
        height: 30px;
        line-height: 30px
    }
    .form-group-sm select[multiple].form-control, .form-group-sm textarea.form-control {
        height: auto
    }
    .form-group-sm .form-control-static {
        height: 30px;
        min-height: 32px;
        padding: 6px 10px;
        font-size: 12px;
        line-height: 1.5
    }
    .input-lg {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }
    select.input-lg {
        height: 46px;
        line-height: 46px
    }
    select[multiple].input-lg, textarea.input-lg {
        height: auto
    }
    .form-group-lg .form-control {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }
    .form-group-lg select.form-control {
        height: 46px;
        line-height: 46px
    }
    .form-group-lg select[multiple].form-control, .form-group-lg textarea.form-control {
        height: auto
    }
    .form-group-lg .form-control-static {
        height: 46px;
        min-height: 38px;
        padding: 11px 16px;
        font-size: 18px;
        line-height: 1.3333333
    }
    .has-feedback {
        position: relative
    }
    .has-feedback .form-control {
        padding-right: 42.5px
    }
    .form-control-feedback {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        display: block;
        width: 34px;
        height: 34px;
        line-height: 34px;
        text-align: center;
        pointer-events: none
    }
    .form-group-lg .form-control + .form-control-feedback, .input-group-lg + .form-control-feedback, .input-lg + .form-control-feedback {
        width: 46px;
        height: 46px;
        line-height: 46px
    }
    .form-group-sm .form-control + .form-control-feedback, .input-group-sm + .form-control-feedback, .input-sm + .form-control-feedback {
        width: 30px;
        height: 30px;
        line-height: 30px
    }
    .has-success .checkbox, .has-success .checkbox-inline, .has-success .control-label, .has-success .help-block, .has-success .radio, .has-success .radio-inline, .has-success.checkbox label, .has-success.checkbox-inline label, .has-success.radio label, .has-success.radio-inline label {
        color: #3c763d
    }
    .has-success .form-control {
        border-color: #3c763d;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }
    .has-success .form-control:focus {
        border-color: #2b542c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
    }
    .has-success .input-group-addon {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #3c763d
    }
    .has-success .form-control-feedback {
        color: #3c763d
    }
    .has-warning .checkbox, .has-warning .checkbox-inline, .has-warning .control-label, .has-warning .help-block, .has-warning .radio, .has-warning .radio-inline, .has-warning.checkbox label, .has-warning.checkbox-inline label, .has-warning.radio label, .has-warning.radio-inline label {
        color: #8a6d3b
    }
    .has-warning .form-control {
        border-color: #8a6d3b;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }
    .has-warning .form-control:focus {
        border-color: #66512c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
    }
    .has-warning .input-group-addon {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #8a6d3b
    }
    .has-warning .form-control-feedback {
        color: #8a6d3b
    }
    .has-error .checkbox, .has-error .checkbox-inline, .has-error .control-label, .has-error .help-block, .has-error .radio, .has-error .radio-inline, .has-error.checkbox label, .has-error.checkbox-inline label, .has-error.radio label, .has-error.radio-inline label {
        color: #a94442
    }
    .has-error .form-control {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }
    .has-error .form-control:focus {
        border-color: #843534;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
    }
    .has-error .input-group-addon {
        color: #a94442;
        background-color: #f2dede;
        border-color: #a94442
    }
    .has-error .form-control-feedback {
        color: #a94442
    }
    .has-feedback label ~ .form-control-feedback {
        top: 25px
    }
    .has-feedback label.sr-only ~ .form-control-feedback {
        top: 0
    }
    .help-block {
        display: block;
        margin-top: 5px;
        margin-bottom: 10px;
        color: #737373
    }
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px
    }
    .btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }
    .btn.focus, .btn:focus, .btn:hover {
        color: #333;
        text-decoration: none
    }
    .btn.active, .btn:active {
        background-image: none;
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }
    .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
        cursor: not-allowed;
        -webkit-box-shadow: none;
        box-shadow: none;
        opacity: .65
    }
    a.btn.disabled, fieldset[disabled] a.btn {
        pointer-events: none
    }
    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc
    }
    .btn-default.focus, .btn-default:focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c
    }
    .btn-default:hover {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }
    .btn-default.active, .btn-default:active, .open > .dropdown-toggle.btn-default {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }
    .btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover, .open > .dropdown-toggle.btn-default.focus, .open > .dropdown-toggle.btn-default:focus, .open > .dropdown-toggle.btn-default:hover {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c
    }
    .btn-default.active, .btn-default:active, .open > .dropdown-toggle.btn-default {
        background-image: none
    }
    .btn-default.disabled.focus, .btn-default.disabled:focus, .btn-default.disabled:hover, .btn-default[disabled].focus, .btn-default[disabled]:focus, .btn-default[disabled]:hover, fieldset[disabled] .btn-default.focus, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:hover {
        background-color: #fff;
        border-color: #ccc
    }
    .btn-default .badge {
        color: #fff;
        background-color: #333
    }
    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4
    }
    .btn-primary.focus, .btn-primary:focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }
    .btn-primary.active, .btn-primary:active, .open > .dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }
    .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40
    }
    .btn-primary.active, .btn-primary:active, .open > .dropdown-toggle.btn-primary {
        background-image: none
    }
    .btn-primary.disabled.focus, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary[disabled].focus, .btn-primary[disabled]:focus, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary.focus, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary:hover {
        background-color: #337ab7;
        border-color: #2e6da4
    }
    .btn-primary .badge {
        color: #337ab7;
        background-color: #fff
    }
    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c
    }
    .btn-success.focus, .btn-success:focus {
        color: #fff;
        background-color: #449d44;
        border-color: #255625
    }
    .btn-success:hover {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }
    .btn-success.active, .btn-success:active, .open > .dropdown-toggle.btn-success {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }
    .btn-success.active.focus, .btn-success.active:focus, .btn-success.active:hover, .btn-success:active.focus, .btn-success:active:focus, .btn-success:active:hover, .open > .dropdown-toggle.btn-success.focus, .open > .dropdown-toggle.btn-success:focus, .open > .dropdown-toggle.btn-success:hover {
        color: #fff;
        background-color: #398439;
        border-color: #255625
    }
    .btn-success.active, .btn-success:active, .open > .dropdown-toggle.btn-success {
        background-image: none
    }
    .btn-success.disabled.focus, .btn-success.disabled:focus, .btn-success.disabled:hover, .btn-success[disabled].focus, .btn-success[disabled]:focus, .btn-success[disabled]:hover, fieldset[disabled] .btn-success.focus, fieldset[disabled] .btn-success:focus, fieldset[disabled] .btn-success:hover {
        background-color: #5cb85c;
        border-color: #4cae4c
    }
    .btn-success .badge {
        color: #5cb85c;
        background-color: #fff
    }
    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da
    }
    .btn-info.focus, .btn-info:focus {
        color: #fff;
        background-color: #31b0d5;
        border-color: #1b6d85
    }
    .btn-info:hover {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }
    .btn-info.active, .btn-info:active, .open > .dropdown-toggle.btn-info {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }
    .btn-info.active.focus, .btn-info.active:focus, .btn-info.active:hover, .btn-info:active.focus, .btn-info:active:focus, .btn-info:active:hover, .open > .dropdown-toggle.btn-info.focus, .open > .dropdown-toggle.btn-info:focus, .open > .dropdown-toggle.btn-info:hover {
        color: #fff;
        background-color: #269abc;
        border-color: #1b6d85
    }
    .btn-info.active, .btn-info:active, .open > .dropdown-toggle.btn-info {
        background-image: none
    }
    .btn-info.disabled.focus, .btn-info.disabled:focus, .btn-info.disabled:hover, .btn-info[disabled].focus, .btn-info[disabled]:focus, .btn-info[disabled]:hover, fieldset[disabled] .btn-info.focus, fieldset[disabled] .btn-info:focus, fieldset[disabled] .btn-info:hover {
        background-color: #5bc0de;
        border-color: #46b8da
    }
    .btn-info .badge {
        color: #5bc0de;
        background-color: #fff
    }
    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236
    }
    .btn-warning.focus, .btn-warning:focus {
        color: #fff;
        background-color: #ec971f;
        border-color: #985f0d
    }
    .btn-warning:hover {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }
    .btn-warning.active, .btn-warning:active, .open > .dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }
    .btn-warning.active.focus, .btn-warning.active:focus, .btn-warning.active:hover, .btn-warning:active.focus, .btn-warning:active:focus, .btn-warning:active:hover, .open > .dropdown-toggle.btn-warning.focus, .open > .dropdown-toggle.btn-warning:focus, .open > .dropdown-toggle.btn-warning:hover {
        color: #fff;
        background-color: #d58512;
        border-color: #985f0d
    }
    .btn-warning.active, .btn-warning:active, .open > .dropdown-toggle.btn-warning {
        background-image: none
    }
    .btn-warning.disabled.focus, .btn-warning.disabled:focus, .btn-warning.disabled:hover, .btn-warning[disabled].focus, .btn-warning[disabled]:focus, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning.focus, fieldset[disabled] .btn-warning:focus, fieldset[disabled] .btn-warning:hover {
        background-color: #f0ad4e;
        border-color: #eea236
    }
    .btn-warning .badge {
        color: #f0ad4e;
        background-color: #fff
    }
    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a
    }
    .btn-danger.focus, .btn-danger:focus {
        color: #fff;
        background-color: #c9302c;
        border-color: #761c19
    }
    .btn-danger:hover {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }
    .btn-danger.active, .btn-danger:active, .open > .dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }
    .btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover, .btn-danger:active.focus, .btn-danger:active:focus, .btn-danger:active:hover, .open > .dropdown-toggle.btn-danger.focus, .open > .dropdown-toggle.btn-danger:focus, .open > .dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #ac2925;
        border-color: #761c19
    }
    .btn-danger.active, .btn-danger:active, .open > .dropdown-toggle.btn-danger {
        background-image: none
    }
    .btn-danger.disabled.focus, .btn-danger.disabled:focus, .btn-danger.disabled:hover, .btn-danger[disabled].focus, .btn-danger[disabled]:focus, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger.focus, fieldset[disabled] .btn-danger:focus, fieldset[disabled] .btn-danger:hover {
        background-color: #d9534f;
        border-color: #d43f3a
    }
    .btn-danger .badge {
        color: #d9534f;
        background-color: #fff
    }
    .btn-link {
        font-weight: 400;
        color: #337ab7;
        border-radius: 0
    }
    .btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
        background-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none
    }
    .btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {
        border-color: transparent
    }
    .btn-link:focus, .btn-link:hover {
        color: #23527c;
        text-decoration: underline;
        background-color: transparent
    }
    .btn-link[disabled]:focus, .btn-link[disabled]:hover, fieldset[disabled] .btn-link:focus, fieldset[disabled] .btn-link:hover {
        color: #777;
        text-decoration: none
    }
    .btn-group-lg > .btn, .btn-lg {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }
    .btn-group-sm > .btn, .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }
    .btn-group-xs > .btn, .btn-xs {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }
    .btn-block {
        display: block;
        width: 100%
    }
    .btn-block + .btn-block {
        margin-top: 5px
    }
    input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
        width: 100%
    }
    .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear
    }
    .fade.in {
        opacity: 1
    }
    .collapse {
        display: none
    }
    .collapse.in {
        display: block
    }
    tr.collapse.in {
        display: table-row
    }
    tbody.collapse.in {
        display: table-row-group
    }
    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
        -webkit-transition-duration: .35s;
        -o-transition-duration: .35s;
        transition-duration: .35s;
        -webkit-transition-property: height, visibility;
        -o-transition-property: height, visibility;
        transition-property: height, visibility
    }
    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent
    }
    .dropdown, .dropup {
        position: relative
    }
    .dropdown-toggle:focus {
        outline: 0
    }
    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
    }
    .dropdown-menu.pull-right {
        right: 0;
        left: auto
    }
    .dropdown-menu .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }
    .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap
    }
    .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
        color: #262626;
        text-decoration: none;
        background-color: #f5f5f5
    }
    .dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover {
        color: #fff;
        text-decoration: none;
        background-color: #337ab7;
        outline: 0
    }
    .dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
        color: #777
    }
    .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
        text-decoration: none;
        cursor: not-allowed;
        background-color: transparent;
        background-image: none
    }
    .open > .dropdown-menu {
        display: block
    }
    .open > a {
        outline: 0
    }
    .dropdown-menu-right {
        right: 0;
        left: auto
    }
    .dropdown-menu-left {
        right: auto;
        left: 0
    }
    .dropdown-header {
        display: block;
        padding: 3px 20px;
        font-size: 12px;
        line-height: 1.42857143;
        color: #777;
        white-space: nowrap
    }
    .dropdown-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 990
    }
    .pull-right > .dropdown-menu {
        right: 0;
        left: auto
    }
    .dropup .caret, .navbar-fixed-bottom .dropdown .caret {
        content: "";
        border-top: 0;
        border-bottom: 4px dashed
    }
    .dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-bottom: 2px
    }
    @media (min-width: 768px) {
        .navbar-right .dropdown-menu {
            right: 0;
            left: auto
        }
        .navbar-right .dropdown-menu-left {
            right: auto;
            left: 0
        }
    }
    .btn-group, .btn-group-vertical {
        position: relative;
        display: inline-block;
        vertical-align: middle
    }
    .btn-group-vertical > .btn, .btn-group > .btn {
        position: relative;
        float: left
    }
    .btn-group-vertical > .btn.active, .btn-group-vertical > .btn:active, .btn-group-vertical > .btn:focus, .btn-group-vertical > .btn:hover, .btn-group > .btn.active, .btn-group > .btn:active, .btn-group > .btn:focus, .btn-group > .btn:hover {
        z-index: 2
    }
    .btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group {
        margin-left: -1px
    }
    .btn-toolbar {
        margin-left: -5px
    }
    .btn-toolbar .btn, .btn-toolbar .btn-group, .btn-toolbar .input-group {
        float: left
    }
    .btn-toolbar > .btn, .btn-toolbar > .btn-group, .btn-toolbar > .input-group {
        margin-left: 5px
    }
    .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0
    }
    .btn-group > .btn:first-child {
        margin-left: 0
    }
    .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }
    .btn-group > .btn:last-child:not(:first-child), .btn-group > .dropdown-toggle:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }
    .btn-group > .btn-group {
        float: left
    }
    .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
        border-radius: 0
    }
    .btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child, .btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }
    .btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }
    .btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle {
        outline: 0
    }
    .btn-group > .btn + .dropdown-toggle {
        padding-right: 8px;
        padding-left: 8px
    }
    .btn-group > .btn-lg + .dropdown-toggle {
        padding-right: 12px;
        padding-left: 12px
    }
    .btn-group.open .dropdown-toggle {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }
    .btn-group.open .dropdown-toggle.btn-link {
        -webkit-box-shadow: none;
        box-shadow: none
    }
    .btn .caret {
        margin-left: 0
    }
    .btn-lg .caret {
        border-width: 5px 5px 0;
        border-bottom-width: 0
    }
    .dropup .btn-lg .caret {
        border-width: 0 5px 5px
    }
    .btn-group-vertical > .btn, .btn-group-vertical > .btn-group, .btn-group-vertical > .btn-group > .btn {
        display: block;
        float: none;
        width: 100%;
        max-width: 100%
    }
    .btn-group-vertical > .btn-group > .btn {
        float: none
    }
    .btn-group-vertical > .btn + .btn, .btn-group-vertical > .btn + .btn-group, .btn-group-vertical > .btn-group + .btn, .btn-group-vertical > .btn-group + .btn-group {
        margin-top: -1px;
        margin-left: 0
    }
    .btn-group-vertical > .btn:not(:first-child):not(:last-child) {
        border-radius: 0
    }
    .btn-group-vertical > .btn:first-child:not(:last-child) {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
    .btn-group-vertical > .btn:last-child:not(:first-child) {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
    }
    .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
        border-radius: 0
    }
    .btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child, .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
    .btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
    .btn-group-justified {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate
    }
    .btn-group-justified > .btn, .btn-group-justified > .btn-group {
        display: table-cell;
        float: none;
        width: 1%
    }
    .btn-group-justified > .btn-group .btn {
        width: 100%
    }
    .btn-group-justified > .btn-group .dropdown-menu {
        left: auto
    }
    [data-toggle=buttons] > .btn input[type=checkbox], [data-toggle=buttons] > .btn input[type=radio], [data-toggle=buttons] > .btn-group > .btn input[type=checkbox], [data-toggle=buttons] > .btn-group > .btn input[type=radio] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate
    }
    .input-group[class*=col-] {
        float: none;
        padding-right: 0;
        padding-left: 0
    }
    .input-group .form-control {
        position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0
    }
    .input-group .form-control:focus {
        z-index: 3
    }
    .input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }
    select.input-group-lg > .form-control, select.input-group-lg > .input-group-addon, select.input-group-lg > .input-group-btn > .btn {
        height: 46px;
        line-height: 46px
    }
    select[multiple].input-group-lg > .form-control, select[multiple].input-group-lg > .input-group-addon, select[multiple].input-group-lg > .input-group-btn > .btn, textarea.input-group-lg > .form-control, textarea.input-group-lg > .input-group-addon, textarea.input-group-lg > .input-group-btn > .btn {
        height: auto
    }
    .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }
    select.input-group-sm > .form-control, select.input-group-sm > .input-group-addon, select.input-group-sm > .input-group-btn > .btn {
        height: 30px;
        line-height: 30px
    }
    select[multiple].input-group-sm > .form-control, select[multiple].input-group-sm > .input-group-addon, select[multiple].input-group-sm > .input-group-btn > .btn, textarea.input-group-sm > .form-control, textarea.input-group-sm > .input-group-addon, textarea.input-group-sm > .input-group-btn > .btn {
        height: auto
    }
    .input-group .form-control, .input-group-addon, .input-group-btn {
        display: table-cell
    }
    .input-group .form-control:not(:first-child):not(:last-child), .input-group-addon:not(:first-child):not(:last-child), .input-group-btn:not(:first-child):not(:last-child) {
        border-radius: 0
    }
    .input-group-addon, .input-group-btn {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle
    }
    .input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px
    }
    .input-group-addon.input-sm {
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 3px
    }
    .input-group-addon.input-lg {
        padding: 10px 16px;
        font-size: 18px;
        border-radius: 6px
    }
    .input-group-addon input[type=checkbox], .input-group-addon input[type=radio] {
        margin-top: 0
    }
    .input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group > .btn, .input-group-btn:first-child > .dropdown-toggle, .input-group-btn:last-child > .btn-group:not(:last-child) > .btn, .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }
    .input-group-addon:first-child {
        border-right: 0
    }
    .input-group .form-control:last-child, .input-group-addon:last-child, .input-group-btn:first-child > .btn-group:not(:first-child) > .btn, .input-group-btn:first-child > .btn:not(:first-child), .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group > .btn, .input-group-btn:last-child > .dropdown-toggle {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }
    .input-group-addon:last-child {
        border-left: 0
    }
    .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap
    }
    .input-group-btn > .btn {
        position: relative
    }
    .input-group-btn > .btn + .btn {
        margin-left: -1px
    }
    .input-group-btn > .btn:active, .input-group-btn > .btn:focus, .input-group-btn > .btn:hover {
        z-index: 2
    }
    .input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group {
        margin-right: -1px
    }
    .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
        z-index: 2;
        margin-left: -1px
    }
    .nav {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }
    .nav > li {
        position: relative;
        display: block
    }
    .nav > li > a {
        position: relative;
        display: block;
        padding: 10px 15px
    }
    .nav > li > a:focus, .nav > li > a:hover {
        text-decoration: none;
        background-color: #eee
    }
    .nav > li.disabled > a {
        color: #777
    }
    .nav > li.disabled > a:focus, .nav > li.disabled > a:hover {
        color: #777;
        text-decoration: none;
        cursor: not-allowed;
        background-color: transparent
    }
    .nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
        background-color: #eee;
        border-color: #337ab7
    }
    .nav .nav-divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }
    .nav > li > a > img {
        max-width: none
    }
    .nav-tabs {
        border-bottom: 1px solid #ddd
    }
    .nav-tabs > li {
        float: left;
        margin-bottom: -1px
    }
    .nav-tabs > li > a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0
    }
    .nav-tabs > li > a:hover {
        border-color: #eee #eee #ddd
    }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent
    }
    .nav-tabs.nav-justified {
        width: 100%;
        border-bottom: 0
    }
    .nav-tabs.nav-justified > li {
        float: none
    }
    .nav-tabs.nav-justified > li > a {
        margin-bottom: 5px;
        text-align: center
    }
    .nav-tabs.nav-justified > .dropdown .dropdown-menu {
        top: auto;
        left: auto
    }
    @media (min-width: 768px) {
        .nav-tabs.nav-justified > li {
            display: table-cell;
            width: 1%
        }
        .nav-tabs.nav-justified > li > a {
            margin-bottom: 0
        }
    }
    .nav-tabs.nav-justified > li > a {
        margin-right: 0;
        border-radius: 4px
    }
    .nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:focus, .nav-tabs.nav-justified > .active > a:hover {
        border: 1px solid #ddd
    }
    @media (min-width: 768px) {
        .nav-tabs.nav-justified > li > a {
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0
        }
        .nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:focus, .nav-tabs.nav-justified > .active > a:hover {
            border-bottom-color: #fff
        }
    }
    .nav-pills > li {
        float: left
    }
    .nav-pills > li > a {
        border-radius: 4px
    }
    .nav-pills > li + li {
        margin-left: 2px
    }
    .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
        color: #fff;
        background-color: #337ab7
    }
    .nav-stacked > li {
        float: none
    }
    .nav-stacked > li + li {
        margin-top: 2px;
        margin-left: 0
    }
    .nav-justified {
        width: 100%
    }
    .nav-justified > li {
        float: none
    }
    .nav-justified > li > a {
        margin-bottom: 5px;
        text-align: center
    }
    .nav-justified > .dropdown .dropdown-menu {
        top: auto;
        left: auto
    }
    @media (min-width: 768px) {
        .nav-justified > li {
            display: table-cell;
            width: 1%
        }
        .nav-justified > li > a {
            margin-bottom: 0
        }
    }
    .nav-tabs-justified {
        border-bottom: 0
    }
    .nav-tabs-justified > li > a {
        margin-right: 0;
        border-radius: 4px
    }
    .nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:focus, .nav-tabs-justified > .active > a:hover {
        border: 1px solid #ddd
    }
    @media (min-width: 768px) {
        .nav-tabs-justified > li > a {
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0
        }
        .nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:focus, .nav-tabs-justified > .active > a:hover {
            border-bottom-color: #fff
        }
    }
    .tab-content > .tab-pane {
        display: none
    }
    .tab-content > .active {
        display: block
    }
    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
    .navbar {
        position: relative;
        min-height: 50px;
        margin-bottom: 20px;
        border: 1px solid transparent
    }
    @media (min-width: 768px) {
        .navbar {
            border-radius: 4px
        }
    }
    @media (min-width: 768px) {
        .navbar-header {
            float: left
        }
    }
    .navbar-collapse {
        padding-right: 15px;
        padding-left: 15px;
        overflow-x: visible;
        -webkit-overflow-scrolling: touch;
        border-top: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
    }
    .navbar-collapse.in {
        overflow-y: auto
    }
    @media (min-width: 768px) {
        .navbar-collapse {
            width: auto;
            border-top: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
        .navbar-collapse.collapse {
            display: block !important;
            height: auto !important;
            padding-bottom: 0;
            overflow: visible !important
        }
        .navbar-collapse.in {
            overflow-y: visible
        }
        .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse {
            padding-right: 0;
            padding-left: 0
        }
    }
    .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
        max-height: 340px
    }
    @media (max-device-width: 480px) and (orientation: landscape) {
        .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
            max-height: 200px
        }
    }
    .container-fluid > .navbar-collapse, .container-fluid > .navbar-header, .container > .navbar-collapse, .container > .navbar-header {
        margin-right: -15px;
        margin-left: -15px
    }
    @media (min-width: 768px) {
        .container-fluid > .navbar-collapse, .container-fluid > .navbar-header, .container > .navbar-collapse, .container > .navbar-header {
            margin-right: 0;
            margin-left: 0
        }
    }
    .navbar-static-top {
        z-index: 1000;
        border-width: 0 0 1px
    }
    @media (min-width: 768px) {
        .navbar-static-top {
            border-radius: 0
        }
    }
    .navbar-fixed-bottom, .navbar-fixed-top {
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030
    }
    @media (min-width: 768px) {
        .navbar-fixed-bottom, .navbar-fixed-top {
            border-radius: 0
        }
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px
    }
    .navbar-fixed-bottom {
        bottom: 0;
        margin-bottom: 0;
        border-width: 1px 0 0
    }
    .navbar-brand {
        float: left;
        height: 50px;
        padding: 15px 15px;
        font-size: 18px;
        line-height: 20px
    }
    .navbar-brand:focus, .navbar-brand:hover {
        text-decoration: none
    }
    .navbar-brand > img {
        display: block
    }
    @media (min-width: 768px) {
        .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
            margin-left: -15px
        }
    }
    .navbar-toggle {
        position: relative;
        float: right;
        padding: 9px 10px;
        margin-top: 8px;
        margin-right: 15px;
        margin-bottom: 8px;
        background-color: transparent;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px
    }
    .navbar-toggle:focus {
        outline: 0
    }
    .navbar-toggle .icon-bar {
        display: block;
        width: 22px;
        height: 2px;
        border-radius: 1px
    }
    .navbar-toggle .icon-bar + .icon-bar {
        margin-top: 4px
    }
    @media (min-width: 768px) {
        .navbar-toggle {
            display: none
        }
    }
    .navbar-nav {
        margin: 7.5px -15px
    }
    .navbar-nav > li > a {
        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 20px
    }
    @media (max-width: 767px) {
        .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
        .navbar-nav .open .dropdown-menu .dropdown-header, .navbar-nav .open .dropdown-menu > li > a {
            padding: 5px 15px 5px 25px
        }
        .navbar-nav .open .dropdown-menu > li > a {
            line-height: 20px
        }
        .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-nav .open .dropdown-menu > li > a:hover {
            background-image: none
        }
    }
    @media (min-width: 768px) {
        .navbar-nav {
            float: left;
            margin: 0
        }
        .navbar-nav > li {
            float: left
        }
        .navbar-nav > li > a {
            padding-top: 15px;
            padding-bottom: 15px
        }
    }
    .navbar-form {
        padding: 10px 15px;
        margin-top: 8px;
        margin-right: -15px;
        margin-bottom: 8px;
        margin-left: -15px;
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1)
    }
    @media (min-width: 768px) {
        .navbar-form .form-group {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle
        }
        .navbar-form .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }
        .navbar-form .form-control-static {
            display: inline-block
        }
        .navbar-form .input-group {
            display: inline-table;
            vertical-align: middle
        }
        .navbar-form .input-group .form-control, .navbar-form .input-group .input-group-addon, .navbar-form .input-group .input-group-btn {
            width: auto
        }
        .navbar-form .input-group > .form-control {
            width: 100%
        }
        .navbar-form .control-label {
            margin-bottom: 0;
            vertical-align: middle
        }
        .navbar-form .checkbox, .navbar-form .radio {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle
        }
        .navbar-form .checkbox label, .navbar-form .radio label {
            padding-left: 0
        }
        .navbar-form .checkbox input[type=checkbox], .navbar-form .radio input[type=radio] {
            position: relative;
            margin-left: 0
        }
        .navbar-form .has-feedback .form-control-feedback {
            top: 0
        }
    }
    @media (max-width: 767px) {
        .navbar-form .form-group {
            margin-bottom: 5px
        }
        .navbar-form .form-group:last-child {
            margin-bottom: 0
        }
    }
    @media (min-width: 768px) {
        .navbar-form {
            width: auto;
            padding-top: 0;
            padding-bottom: 0;
            margin-right: 0;
            margin-left: 0;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }
    }
    .navbar-nav > li > .dropdown-menu {
        margin-top: 0;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }
    .navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
        margin-bottom: 0;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
    .navbar-btn {
        margin-top: 8px;
        margin-bottom: 8px
    }
    .navbar-btn.btn-sm {
        margin-top: 10px;
        margin-bottom: 10px
    }
    .navbar-btn.btn-xs {
        margin-top: 14px;
        margin-bottom: 14px
    }
    .navbar-text {
        margin-top: 15px;
        margin-bottom: 15px
    }
    @media (min-width: 768px) {
        .navbar-text {
            float: left;
            margin-right: 15px;
            margin-left: 15px
        }
    }
    @media (min-width: 768px) {
        .navbar-left {
            float: left !important
        }
        .navbar-right {
            float: right !important;
            margin-right: -15px
        }
        .navbar-right ~ .navbar-right {
            margin-right: 0
        }
    }
    .navbar-default {
        background-color: #f8f8f8;
        border-color: #e7e7e7
    }
    .navbar-default .navbar-brand {
        color: #777
    }
    .navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover {
        color: #5e5e5e;
        background-color: transparent
    }
    .navbar-default .navbar-text {
        color: #777
    }
    .navbar-default .navbar-nav > li > a {
        color: #777
    }
    .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
        color: #333;
        background-color: transparent
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
        color: #555;
        background-color: #e7e7e7
    }
    .navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:focus, .navbar-default .navbar-nav > .disabled > a:hover {
        color: #ccc;
        background-color: transparent
    }
    .navbar-default .navbar-toggle {
        border-color: #ddd
    }
    .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
        background-color: #ddd
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #888
    }
    .navbar-default .navbar-collapse, .navbar-default .navbar-form {
        border-color: #e7e7e7
    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
        color: #555;
        background-color: #e7e7e7
    }
    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #777
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
            color: #333;
            background-color: transparent
        }
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover {
            color: #555;
            background-color: #e7e7e7
        }
        .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover {
            color: #ccc;
            background-color: transparent
        }
    }
    .navbar-default .navbar-link {
        color: #777
    }
    .navbar-default .navbar-link:hover {
        color: #333
    }
    .navbar-default .btn-link {
        color: #777
    }
    .navbar-default .btn-link:focus, .navbar-default .btn-link:hover {
        color: #333
    }
    .navbar-default .btn-link[disabled]:focus, .navbar-default .btn-link[disabled]:hover, fieldset[disabled] .navbar-default .btn-link:focus, fieldset[disabled] .navbar-default .btn-link:hover {
        color: #ccc
    }
    .navbar-inverse {
        background-color: #222;
        border-color: #080808
    }
    .navbar-inverse .navbar-brand {
        color: #9d9d9d
    }
    .navbar-inverse .navbar-brand:focus, .navbar-inverse .navbar-brand:hover {
        color: #fff;
        background-color: transparent
    }
    .navbar-inverse .navbar-text {
        color: #9d9d9d
    }
    .navbar-inverse .navbar-nav > li > a {
        color: #9d9d9d
    }
    .navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
        color: #fff;
        background-color: transparent
    }
    .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:focus, .navbar-inverse .navbar-nav > .active > a:hover {
        color: #fff;
        background-color: #080808
    }
    .navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:focus, .navbar-inverse .navbar-nav > .disabled > a:hover {
        color: #444;
        background-color: transparent
    }
    .navbar-inverse .navbar-toggle {
        border-color: #333
    }
    .navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
        background-color: #333
    }
    .navbar-inverse .navbar-toggle .icon-bar {
        background-color: #fff
    }
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: #101010
    }
    .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:focus, .navbar-inverse .navbar-nav > .open > a:hover {
        color: #fff;
        background-color: #080808
    }
    @media (max-width: 767px) {
        .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
            border-color: #080808
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
            background-color: #080808
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
            color: #9d9d9d
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover {
            color: #fff;
            background-color: transparent
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover {
            color: #fff;
            background-color: #080808
        }
        .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover {
            color: #444;
            background-color: transparent
        }
    }
    .navbar-inverse .navbar-link {
        color: #9d9d9d
    }
    .navbar-inverse .navbar-link:hover {
        color: #fff
    }
    .navbar-inverse .btn-link {
        color: #9d9d9d
    }
    .navbar-inverse .btn-link:focus, .navbar-inverse .btn-link:hover {
        color: #fff
    }
    .navbar-inverse .btn-link[disabled]:focus, .navbar-inverse .btn-link[disabled]:hover, fieldset[disabled] .navbar-inverse .btn-link:focus, fieldset[disabled] .navbar-inverse .btn-link:hover {
        color: #444
    }
    .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 20px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px
    }
    .breadcrumb > li {
        display: inline-block
    }
    .breadcrumb > li + li:before {
        padding: 0 5px;
        color: #ccc;
        content: "/\00a0"
    }
    .breadcrumb > .active {
        color: #777
    }
    .pagination {
        display: inline-block;
        padding-left: 0;
        margin: 20px 0;
        border-radius: 4px
    }
    .pagination > li {
        display: inline
    }
    .pagination > li > a, .pagination > li > span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd
    }
    .pagination > li:first-child > a, .pagination > li:first-child > span {
        margin-left: 0;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }
    .pagination > li:last-child > a, .pagination > li:last-child > span {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }
    .pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {
        z-index: 2;
        color: #23527c;
        background-color: #eee;
        border-color: #ddd
    }
    .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #337ab7;
        border-color: #337ab7
    }
    .pagination > .disabled > a, .pagination > .disabled > a:focus, .pagination > .disabled > a:hover, .pagination > .disabled > span, .pagination > .disabled > span:focus, .pagination > .disabled > span:hover {
        color: #777;
        cursor: not-allowed;
        background-color: #fff;
        border-color: #ddd
    }
    .pagination-lg > li > a, .pagination-lg > li > span {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333
    }
    .pagination-lg > li:first-child > a, .pagination-lg > li:first-child > span {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px
    }
    .pagination-lg > li:last-child > a, .pagination-lg > li:last-child > span {
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px
    }
    .pagination-sm > li > a, .pagination-sm > li > span {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5
    }
    .pagination-sm > li:first-child > a, .pagination-sm > li:first-child > span {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px
    }
    .pagination-sm > li:last-child > a, .pagination-sm > li:last-child > span {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px
    }
    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em
    }
    a.label:focus, a.label:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }
    .label:empty {
        display: none
    }
    .btn .label {
        position: relative;
        top: -1px
    }
    .label-default {
        background-color: #777
    }
    .label-default[href]:focus, .label-default[href]:hover {
        background-color: #5e5e5e
    }
    .label-primary {
        background-color: #337ab7
    }
    .label-primary[href]:focus, .label-primary[href]:hover {
        background-color: #286090
    }
    .label-success {
        background-color: #5cb85c
    }
    .label-success[href]:focus, .label-success[href]:hover {
        background-color: #449d44
    }
    .label-info {
        background-color: #5bc0de
    }
    .label-info[href]:focus, .label-info[href]:hover {
        background-color: #31b0d5
    }
    .label-warning {
        background-color: #f0ad4e
    }
    .label-warning[href]:focus, .label-warning[href]:hover {
        background-color: #ec971f
    }
    .label-danger {
        background-color: #d9534f
    }
    .label-danger[href]:focus, .label-danger[href]:hover {
        background-color: #c9302c
    }
    .badge {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        background-color: #777;
        border-radius: 10px
    }
    .badge:empty {
        display: none
    }
    .btn .badge {
        position: relative;
        top: -1px
    }
    .btn-group-xs > .btn .badge, .btn-xs .badge {
        top: 0;
        padding: 1px 5px
    }
    a.badge:focus, a.badge:hover {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }
    .nav-pills > li > a > .badge {
        margin-left: 3px
    }
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px
    }
    .alert h4 {
        margin-top: 0;
        color: inherit
    }
    .alert .alert-link {
        font-weight: 700
    }
    .alert > p, .alert > ul {
        margin-bottom: 0
    }
    .alert > p + p {
        margin-top: 5px
    }
    .alert-dismissable, .alert-dismissible {
        padding-right: 35px
    }
    .alert-dismissable .close, .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit
    }
    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6
    }
    .alert-success hr {
        border-top-color: #c9e2b3
    }
    .alert-success .alert-link {
        color: #2b542c
    }
    .alert-info {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1
    }
    .alert-info hr {
        border-top-color: #a6e1ec
    }
    .alert-info .alert-link {
        color: #245269
    }
    .alert-warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc
    }
    .alert-warning hr {
        border-top-color: #f7e1b5
    }
    .alert-warning .alert-link {
        color: #66512c
    }
    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1
    }
    .alert-danger hr {
        border-top-color: #e4b9c0
    }
    .alert-danger .alert-link {
        color: #843534
    }
    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }
        to {
            background-position: 0 0
        }
    }
    @-o-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }
        to {
            background-position: 0 0
        }
    }
    @keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }
        to {
            background-position: 0 0
        }
    }
    .progress {
        height: 20px;
        margin-bottom: 20px;
        overflow: hidden;
        background-color: #f5f5f5;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
    }
    .progress-bar {
        float: left;
        width: 0;
        height: 100%;
        font-size: 12px;
        line-height: 20px;
        color: #fff;
        text-align: center;
        background-color: #337ab7;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        -webkit-transition: width .6s ease;
        -o-transition: width .6s ease;
        transition: width .6s ease
    }
    .progress-bar-striped, .progress-striped .progress-bar {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        -webkit-background-size: 40px 40px;
        background-size: 40px 40px
    }
    .progress-bar.active, .progress.active .progress-bar {
        -webkit-animation: progress-bar-stripes 2s linear infinite;
        -o-animation: progress-bar-stripes 2s linear infinite;
        animation: progress-bar-stripes 2s linear infinite
    }
    .progress-bar-success {
        background-color: #5cb85c
    }
    .progress-striped .progress-bar-success {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }
    .progress-bar-info {
        background-color: #5bc0de
    }
    .progress-striped .progress-bar-info {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }
    .progress-bar-warning {
        background-color: #f0ad4e
    }
    .progress-striped .progress-bar-warning {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }
    .progress-bar-danger {
        background-color: #d9534f
    }
    .progress-striped .progress-bar-danger {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }
    .media {
        margin-top: 15px
    }
    .media:first-child {
        margin-top: 0
    }
    .media, .media-body {
        overflow: hidden;
        zoom: 1
    }
    .media-body {
        width: 10000px
    }
    .media-object {
        display: block
    }
    .media-right, .media > .pull-right {
        padding-left: 10px
    }
    .media-left, .media > .pull-left {
        padding-right: 10px
    }
    .media-body, .media-left, .media-right {
        display: table-cell;
        vertical-align: top
    }
    .media-middle {
        vertical-align: middle
    }
    .media-bottom {
        vertical-align: bottom
    }
    .media-heading {
        margin-top: 0;
        margin-bottom: 5px
    }
    .media-list {
        padding-left: 0;
        list-style: none
    }
    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }
    .panel-body {
        padding: 15px
    }
    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }
    .panel-heading > .dropdown .dropdown-toggle {
        color: inherit
    }
    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 16px;
        color: inherit
    }
    .panel-title > .small, .panel-title > .small > a, .panel-title > a, .panel-title > small, .panel-title > small > a {
        color: inherit
    }
    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }
    .panel > .panel-collapse > .table, .panel > .table, .panel > .table-responsive > .table {
        margin-bottom: 0
    }
    .panel > .panel-collapse > .table caption, .panel > .table caption, .panel > .table-responsive > .table caption {
        padding-right: 15px;
        padding-left: 15px
    }
    .panel > .table-responsive:first-child > .table:first-child, .panel > .table:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child, .panel > .table:first-child > tbody:first-child > tr:first-child, .panel > .table:first-child > thead:first-child > tr:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child, .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child, .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child, .panel > .table:first-child > thead:first-child > tr:first-child td:first-child, .panel > .table:first-child > thead:first-child > tr:first-child th:first-child {
        border-top-left-radius: 3px
    }
    .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child, .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child, .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child, .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child, .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child, .panel > .table:first-child > thead:first-child > tr:first-child td:last-child, .panel > .table:first-child > thead:first-child > tr:first-child th:last-child {
        border-top-right-radius: 3px
    }
    .panel > .table-responsive:last-child > .table:last-child, .panel > .table:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child, .panel > .table:last-child > tbody:last-child > tr:last-child, .panel > .table:last-child > tfoot:last-child > tr:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child, .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child, .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child, .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child, .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
        border-bottom-left-radius: 3px
    }
    .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child, .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child, .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child, .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child, .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child, .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child, .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
        border-bottom-right-radius: 3px
    }
    .panel > .panel-body + .table, .panel > .panel-body + .table-responsive, .panel > .table + .panel-body, .panel > .table-responsive + .panel-body {
        border-top: 1px solid #ddd
    }
    .panel > .table > tbody:first-child > tr:first-child td, .panel > .table > tbody:first-child > tr:first-child th {
        border-top: 0
    }
    .panel > .table-bordered, .panel > .table-responsive > .table-bordered {
        border: 0
    }
    .panel > .table-bordered > tbody > tr > td:first-child, .panel > .table-bordered > tbody > tr > th:first-child, .panel > .table-bordered > tfoot > tr > td:first-child, .panel > .table-bordered > tfoot > tr > th:first-child, .panel > .table-bordered > thead > tr > td:first-child, .panel > .table-bordered > thead > tr > th:first-child, .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child, .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child, .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child, .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child, .panel > .table-responsive > .table-bordered > thead > tr > td:first-child, .panel > .table-responsive > .table-bordered > thead > tr > th:first-child {
        border-left: 0
    }
    .panel > .table-bordered > tbody > tr > td:last-child, .panel > .table-bordered > tbody > tr > th:last-child, .panel > .table-bordered > tfoot > tr > td:last-child, .panel > .table-bordered > tfoot > tr > th:last-child, .panel > .table-bordered > thead > tr > td:last-child, .panel > .table-bordered > thead > tr > th:last-child, .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child, .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child, .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child, .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child, .panel > .table-responsive > .table-bordered > thead > tr > td:last-child, .panel > .table-responsive > .table-bordered > thead > tr > th:last-child {
        border-right: 0
    }
    .panel > .table-bordered > tbody > tr:first-child > td, .panel > .table-bordered > tbody > tr:first-child > th, .panel > .table-bordered > thead > tr:first-child > td, .panel > .table-bordered > thead > tr:first-child > th, .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td, .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th, .panel > .table-responsive > .table-bordered > thead > tr:first-child > td, .panel > .table-responsive > .table-bordered > thead > tr:first-child > th {
        border-bottom: 0
    }
    .panel > .table-bordered > tbody > tr:last-child > td, .panel > .table-bordered > tbody > tr:last-child > th, .panel > .table-bordered > tfoot > tr:last-child > td, .panel > .table-bordered > tfoot > tr:last-child > th, .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td, .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th, .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td, .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
        border-bottom: 0
    }
    .panel > .table-responsive {
        margin-bottom: 0;
        border: 0
    }
    .panel-group {
        margin-bottom: 20px
    }
    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 4px
    }
    .panel-group .panel + .panel {
        margin-top: 5px
    }
    .panel-group .panel-heading {
        border-bottom: 0
    }
    .panel-group .panel-heading + .panel-collapse > .list-group, .panel-group .panel-heading + .panel-collapse > .panel-body {
        border-top: 1px solid #ddd
    }
    .panel-group .panel-footer {
        border-top: 0
    }
    .panel-group .panel-footer + .panel-collapse .panel-body {
        border-bottom: 1px solid #ddd
    }
    .panel-default {
        border-color: #ddd
    }
    .panel-default > .panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd
    }
    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ddd
    }
    .panel-default > .panel-heading .badge {
        color: #f5f5f5;
        background-color: #333
    }
    .panel-default > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #ddd
    }
    .panel-primary {
        border-color: #337ab7
    }
    .panel-primary > .panel-heading {
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7
    }
    .panel-primary > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #337ab7
    }
    .panel-primary > .panel-heading .badge {
        color: #337ab7;
        background-color: #fff
    }
    .panel-primary > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #337ab7
    }
    .panel-success {
        border-color: #d6e9c6
    }
    .panel-success > .panel-heading {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6
    }
    .panel-success > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #d6e9c6
    }
    .panel-success > .panel-heading .badge {
        color: #dff0d8;
        background-color: #3c763d
    }
    .panel-success > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #d6e9c6
    }
    .panel-info {
        border-color: #bce8f1
    }
    .panel-info > .panel-heading {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1
    }
    .panel-info > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #bce8f1
    }
    .panel-info > .panel-heading .badge {
        color: #d9edf7;
        background-color: #31708f
    }
    .panel-info > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #bce8f1
    }
    .panel-warning {
        border-color: #faebcc
    }
    .panel-warning > .panel-heading {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc
    }
    .panel-warning > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #faebcc
    }
    .panel-warning > .panel-heading .badge {
        color: #fcf8e3;
        background-color: #8a6d3b
    }
    .panel-warning > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #faebcc
    }
    .panel-danger {
        border-color: #ebccd1
    }
    .panel-danger > .panel-heading {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1
    }
    .panel-danger > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #ebccd1
    }
    .panel-danger > .panel-heading .badge {
        color: #f2dede;
        background-color: #a94442
    }
    .panel-danger > .panel-footer + .panel-collapse > .panel-body {
        border-bottom-color: #ebccd1
    }
    .embed-responsive {
        position: relative;
        display: block;
        height: 0;
        padding: 0;
        overflow: hidden
    }
    .embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0
    }
    .embed-responsive-16by9 {
        padding-bottom: 56.25%
    }
    .embed-responsive-4by3 {
        padding-bottom: 75%
    }
    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
    }
    .well blockquote {
        border-color: #ddd;
        border-color: rgba(0, 0, 0, .15)
    }
    .well-lg {
        padding: 24px;
        border-radius: 6px
    }
    .well-sm {
        padding: 9px;
        border-radius: 3px
    }
    .close {
        float: right;
        font-size: 21px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .2
    }
    .close:focus, .close:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        opacity: .5
    }
    button.close {
        -webkit-appearance: none;
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0
    }
    .modal-open {
        overflow: hidden
    }
    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
        outline: 0
    }
    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform .3s ease-out;
        -o-transition: -o-transform .3s ease-out;
        transition: transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        -o-transform: translate(0, -25%);
        transform: translate(0, -25%)
    }
    .modal.in .modal-dialog {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0)
    }
    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }
    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px
    }
    .modal-content {
        position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5)
    }
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000
    }
    .modal-backdrop.fade {
        opacity: 0
    }
    .modal-backdrop.in {
        opacity: .5
    }
    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5
    }
    .modal-header .close {
        margin-top: -2px
    }
    .modal-title {
        margin: 0;
        line-height: 1.42857143
    }
    .modal-body {
        position: relative;
        padding: 15px
    }
    .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 1px solid #e5e5e5
    }
    .modal-footer .btn + .btn {
        margin-bottom: 0;
        margin-left: 5px
    }
    .modal-footer .btn-group .btn + .btn {
        margin-left: -1px
    }
    .modal-footer .btn-block + .btn-block {
        margin-left: 0
    }
    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }
    @media (min-width: 768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto
        }
        .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
        }
        .modal-sm {
            width: 300px
        }
    }
    @media (min-width: 992px) {
        .modal-lg {
            width: 900px
        }
    }
    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal;
        white-space: normal;
        opacity: 0;
        line-break: auto
    }
    .tooltip.in {
        opacity: .9
    }
    .tooltip.top {
        padding: 5px 0;
        margin-top: -3px
    }
    .tooltip.right {
        padding: 0 5px;
        margin-left: 3px
    }
    .tooltip.bottom {
        padding: 5px 0;
        margin-top: 3px
    }
    .tooltip.left {
        padding: 0 5px;
        margin-left: -3px
    }
    .tooltip-inner {
        max-width: 200px;
        padding: 3px 8px;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 4px
    }
    .tooltip-arrow {
        position: absolute;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }
    .tooltip.top .tooltip-arrow {
        bottom: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }
    .tooltip.top-left .tooltip-arrow {
        right: 5px;
        bottom: 0;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }
    .tooltip.top-right .tooltip-arrow {
        bottom: 0;
        left: 5px;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }
    .tooltip.right .tooltip-arrow {
        top: 50%;
        left: 0;
        margin-top: -5px;
        border-width: 5px 5px 5px 0;
        border-right-color: #000
    }
    .tooltip.left .tooltip-arrow {
        top: 50%;
        right: 0;
        margin-top: -5px;
        border-width: 5px 0 5px 5px;
        border-left-color: #000
    }
    .tooltip.bottom .tooltip-arrow {
        top: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }
    .tooltip.bottom-left .tooltip-arrow {
        top: 0;
        right: 5px;
        margin-top: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }
    .tooltip.bottom-right .tooltip-arrow {
        top: 0;
        left: 5px;
        margin-top: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }
    .btn-group-vertical > .btn-group:after, .btn-group-vertical > .btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
        display: table;
        content: " "
    }
    .btn-group-vertical > .btn-group:after, .btn-toolbar:after, .clearfix:after, .container-fluid:after, .container:after, .dl-horizontal dd:after, .form-horizontal .form-group:after, .modal-footer:after, .modal-header:after, .nav:after, .navbar-collapse:after, .navbar-header:after, .navbar:after, .pager:after, .panel-body:after, .row:after {
        clear: both
    }
    .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto
    }
    .pull-right {
        float: right !important
    }
    .pull-left {
        float: left !important
    }
    .hide {
        display: none !important
    }
    .show {
        display: block !important
    }
    .invisible {
        visibility: hidden
    }
    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }
    .hidden {
        display: none !important
    }
    .affix {
        position: fixed
    }
    @-ms-viewport {
        width: device-width
    }
    .visible-lg, .visible-md, .visible-sm, .visible-xs {
        display: none !important
    }
    .visible-lg-block, .visible-lg-inline, .visible-lg-inline-block, .visible-md-block, .visible-md-inline, .visible-md-inline-block, .visible-sm-block, .visible-sm-inline, .visible-sm-inline-block, .visible-xs-block, .visible-xs-inline, .visible-xs-inline-block {
        display: none !important
    }
    @media (max-width: 767px) {
        .visible-xs {
            display: block !important
        }
        table.visible-xs {
            display: table !important
        }
        tr.visible-xs {
            display: table-row !important
        }
        td.visible-xs, th.visible-xs {
            display: table-cell !important
        }
    }
    @media (max-width: 767px) {
        .visible-xs-block {
            display: block !important
        }
    }
    @media (max-width: 767px) {
        .visible-xs-inline {
            display: inline !important
        }
    }
    @media (max-width: 767px) {
        .visible-xs-inline-block {
            display: inline-block !important
        }
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm {
            display: block !important
        }
        table.visible-sm {
            display: table !important
        }
        tr.visible-sm {
            display: table-row !important
        }
        td.visible-sm, th.visible-sm {
            display: table-cell !important
        }
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-block {
            display: block !important
        }
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-inline {
            display: inline !important
        }
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-inline-block {
            display: inline-block !important
        }
    }
    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md {
            display: block !important
        }
        table.visible-md {
            display: table !important
        }
        tr.visible-md {
            display: table-row !important
        }
        td.visible-md, th.visible-md {
            display: table-cell !important
        }
    }
    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-block {
            display: block !important
        }
    }
    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-inline {
            display: inline !important
        }
    }
    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-inline-block {
            display: inline-block !important
        }
    }
    @media (min-width: 1200px) {
        .visible-lg {
            display: block !important
        }
        table.visible-lg {
            display: table !important
        }
        tr.visible-lg {
            display: table-row !important
        }
        td.visible-lg, th.visible-lg {
            display: table-cell !important
        }
    }
    @media (min-width: 1200px) {
        .visible-lg-block {
            display: block !important
        }
    }
    @media (min-width: 1200px) {
        .visible-lg-inline {
            display: inline !important
        }
    }
    @media (min-width: 1200px) {
        .visible-lg-inline-block {
            display: inline-block !important
        }
    }
    @media (max-width: 767px) {
        .hidden-xs {
            display: none !important
        }
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .hidden-sm {
            display: none !important
        }
    }
    @media (min-width: 992px) and (max-width: 1199px) {
        .hidden-md {
            display: none !important
        }
    }
    @media (min-width: 1200px) {
        .hidden-lg {
            display: none !important
        }
    }
    .visible-print {
        display: none !important
    }
    @media print {
        .visible-print {
            display: block !important
        }
        table.visible-print {
            display: table !important
        }
        tr.visible-print {
            display: table-row !important
        }
        td.visible-print, th.visible-print {
            display: table-cell !important
        }
    }
    .visible-print-block {
        display: none !important
    }
    @media print {
        .visible-print-block {
            display: block !important
        }
    }
    .visible-print-inline {
        display: none !important
    }
    @media print {
        .visible-print-inline {
            display: inline !important
        }
    }
    .visible-print-inline-block {
        display: none !important
    }
    @media print {
        .visible-print-inline-block {
            display: inline-block !important
        }
    }
    @media print {
        .hidden-print {
            display: none !important
        }
    }
    @font-face {
        font-display: swap;
        font-family: FontAwesome;
        src: url(https://www.nourbook.com/publice/fonts/fontawesome-webfont.eot?v=4.7.0);
        src: url(https://www.nourbook.com/publice/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format('embedded-opentype'), url(https://www.nourbook.com/publice/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'), url(https://www.nourbook.com/publice/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'), url(https://www.nourbook.com/publice/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'), url(https://www.nourbook.com/publice/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format('svg');
        font-weight: 400;
        font-style: normal
    }
    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }
    .fa-lg {
        font-size: 1.33333333em;
        line-height: .75em;
        vertical-align: -15%
    }
    .fa-2x {
        font-size: 2em
    }
    .fa-3x {
        font-size: 3em
    }
    .fa-4x {
        font-size: 4em
    }
    .fa-5x {
        font-size: 5em
    }
    .fa-fw {
        width: 1.28571429em;
        text-align: center
    }
    .fa-ul {
        padding-left: 0;
        margin-left: 2.14285714em;
        list-style-type: none
    }
    .fa-ul > li {
        position: relative
    }
    .fa-li {
        position: absolute;
        left: -2.14285714em;
        width: 2.14285714em;
        top: .14285714em;
        text-align: center
    }
    .fa-li.fa-lg {
        left: -1.85714286em
    }
    .fa-border {
        padding: .2em .25em .15em;
        border: solid .08em #eee;
        border-radius: .1em
    }
    .pull-right {
        float: right
    }
    .pull-left {
        float: left
    }
    .fa.pull-left {
        margin-right: .3em
    }
    .fa.pull-right {
        margin-left: .3em
    }
    .fa-spin {
        -webkit-animation: fa-spin 2s infinite linear;
        animation: fa-spin 2s infinite linear
    }
    .fa-pulse {
        -webkit-animation: fa-spin 1s infinite steps(8);
        animation: fa-spin 1s infinite steps(8)
    }
    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }
    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }
    .fa-rotate-90 {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
    }
    .fa-rotate-180 {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }
    .fa-rotate-270 {
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg)
    }
    .fa-flip-horizontal {
        -webkit-transform: scale(-1, 1);
        -ms-transform: scale(-1, 1);
        transform: scale(-1, 1)
    }
    .fa-flip-vertical {
        -webkit-transform: scale(1, -1);
        -ms-transform: scale(1, -1);
        transform: scale(1, -1)
    }
    :root .fa-flip-horizontal, :root .fa-flip-vertical, :root .fa-rotate-180, :root .fa-rotate-270, :root .fa-rotate-90 {
        filter: none
    }
    .fa-stack {
        position: relative;
        display: inline-block;
        width: 2em;
        height: 2em;
        line-height: 2em;
        vertical-align: middle
    }
    .fa-stack-1x, .fa-stack-2x {
        position: absolute;
        left: 0;
        width: 100%;
        text-align: center
    }
    .fa-stack-1x {
        line-height: inherit
    }
    .fa-stack-2x {
        font-size: 2em
    }
    .fa-inverse {
        color: #fff
    }
    .fa-glass:before {
        content: "\f000"
    }
    .fa-music:before {
        content: "\f001"
    }
    .fa-search:before {
        content: "\f002"
    }
    .fa-envelope-o:before {
        content: "\f003"
    }
    .fa-heart:before {
        content: "\f004"
    }
    .fa-star:before {
        content: "\f005"
    }
    .fa-star-o:before {
        content: "\f006"
    }
    .fa-user:before {
        content: "\f007"
    }
    .fa-film:before {
        content: "\f008"
    }
    .fa-th-large:before {
        content: "\f009"
    }
    .fa-th:before {
        content: "\f00a"
    }
    .fa-th-list:before {
        content: "\f00b"
    }
    .fa-check:before {
        content: "\f00c"
    }
    .fa-close:before, .fa-remove:before, .fa-times:before {
        content: "\f00d"
    }
    .fa-search-plus:before {
        content: "\f00e"
    }
    .fa-search-minus:before {
        content: "\f010"
    }
    .fa-power-off:before {
        content: "\f011"
    }
    .fa-signal:before {
        content: "\f012"
    }
    .fa-cog:before, .fa-gear:before {
        content: "\f013"
    }
    .fa-trash-o:before {
        content: "\f014"
    }
    .fa-home:before {
        content: "\f015"
    }
    .fa-file-o:before {
        content: "\f016"
    }
    .fa-clock-o:before {
        content: "\f017"
    }
    .fa-road:before {
        content: "\f018"
    }
    .fa-download:before {
        content: "\f019"
    }
    .fa-arrow-circle-o-down:before {
        content: "\f01a"
    }
    .fa-arrow-circle-o-up:before {
        content: "\f01b"
    }
    .fa-inbox:before {
        content: "\f01c"
    }
    .fa-play-circle-o:before {
        content: "\f01d"
    }
    .fa-repeat:before, .fa-rotate-right:before {
        content: "\f01e"
    }
    .fa-refresh:before {
        content: "\f021"
    }
    .fa-list-alt:before {
        content: "\f022"
    }
    .fa-lock:before {
        content: "\f023"
    }
    .fa-flag:before {
        content: "\f024"
    }
    .fa-headphones:before {
        content: "\f025"
    }
    .fa-volume-off:before {
        content: "\f026"
    }
    .fa-volume-down:before {
        content: "\f027"
    }
    .fa-volume-up:before {
        content: "\f028"
    }
    .fa-qrcode:before {
        content: "\f029"
    }
    .fa-barcode:before {
        content: "\f02a"
    }
    .fa-tag:before {
        content: "\f02b"
    }
    .fa-tags:before {
        content: "\f02c"
    }
    .fa-book:before {
        content: "\f02d"
    }
    .fa-bookmark:before {
        content: "\f02e"
    }
    .fa-print:before {
        content: "\f02f"
    }
    .fa-camera:before {
        content: "\f030"
    }
    .fa-font:before {
        content: "\f031"
    }
    .fa-bold:before {
        content: "\f032"
    }
    .fa-italic:before {
        content: "\f033"
    }
    .fa-text-height:before {
        content: "\f034"
    }
    .fa-text-width:before {
        content: "\f035"
    }
    .fa-align-left:before {
        content: "\f036"
    }
    .fa-align-center:before {
        content: "\f037"
    }
    .fa-align-right:before {
        content: "\f038"
    }
    .fa-align-justify:before {
        content: "\f039"
    }
    .fa-list:before {
        content: "\f03a"
    }
    .fa-dedent:before, .fa-outdent:before {
        content: "\f03b"
    }
    .fa-indent:before {
        content: "\f03c"
    }
    .fa-video-camera:before {
        content: "\f03d"
    }
    .fa-image:before, .fa-photo:before, .fa-picture-o:before {
        content: "\f03e"
    }
    .fa-pencil:before {
        content: "\f040"
    }
    .fa-map-marker:before {
        content: "\f041"
    }
    .fa-adjust:before {
        content: "\f042"
    }
    .fa-tint:before {
        content: "\f043"
    }
    .fa-edit:before, .fa-pencil-square-o:before {
        content: "\f044"
    }
    .fa-share-square-o:before {
        content: "\f045"
    }
    .fa-check-square-o:before {
        content: "\f046"
    }
    .fa-arrows:before {
        content: "\f047"
    }
    .fa-step-backward:before {
        content: "\f048"
    }
    .fa-fast-backward:before {
        content: "\f049"
    }
    .fa-backward:before {
        content: "\f04a"
    }
    .fa-play:before {
        content: "\f04b"
    }
    .fa-pause:before {
        content: "\f04c"
    }
    .fa-stop:before {
        content: "\f04d"
    }
    .fa-forward:before {
        content: "\f04e"
    }
    .fa-fast-forward:before {
        content: "\f050"
    }
    .fa-step-forward:before {
        content: "\f051"
    }
    .fa-eject:before {
        content: "\f052"
    }
    .fa-chevron-left:before {
        content: "\f053"
    }
    .fa-chevron-right:before {
        content: "\f054"
    }
    .fa-plus-circle:before {
        content: "\f055"
    }
    .fa-minus-circle:before {
        content: "\f056"
    }
    .fa-times-circle:before {
        content: "\f057"
    }
    .fa-check-circle:before {
        content: "\f058"
    }
    .fa-question-circle:before {
        content: "\f059"
    }
    .fa-info-circle:before {
        content: "\f05a"
    }
    .fa-crosshairs:before {
        content: "\f05b"
    }
    .fa-times-circle-o:before {
        content: "\f05c"
    }
    .fa-check-circle-o:before {
        content: "\f05d"
    }
    .fa-ban:before {
        content: "\f05e"
    }
    .fa-arrow-left:before {
        content: "\f060"
    }
    .fa-arrow-right:before {
        content: "\f061"
    }
    .fa-arrow-up:before {
        content: "\f062"
    }
    .fa-arrow-down:before {
        content: "\f063"
    }
    .fa-mail-forward:before, .fa-share:before {
        content: "\f064"
    }
    .fa-expand:before {
        content: "\f065"
    }
    .fa-compress:before {
        content: "\f066"
    }
    .fa-plus:before {
        content: "\f067"
    }
    .fa-minus:before {
        content: "\f068"
    }
    .fa-asterisk:before {
        content: "\f069"
    }
    .fa-exclamation-circle:before {
        content: "\f06a"
    }
    .fa-gift:before {
        content: "\f06b"
    }
    .fa-leaf:before {
        content: "\f06c"
    }
    .fa-fire:before {
        content: "\f06d"
    }
    .fa-eye:before {
        content: "\f06e"
    }
    .fa-eye-slash:before {
        content: "\f070"
    }
    .fa-exclamation-triangle:before, .fa-warning:before {
        content: "\f071"
    }
    .fa-plane:before {
        content: "\f072"
    }
    .fa-calendar:before {
        content: "\f073"
    }
    .fa-random:before {
        content: "\f074"
    }
    .fa-comment:before {
        content: "\f075"
    }
    .fa-magnet:before {
        content: "\f076"
    }
    .fa-chevron-up:before {
        content: "\f077"
    }
    .fa-chevron-down:before {
        content: "\f078"
    }
    .fa-retweet:before {
        content: "\f079"
    }
    .fa-shopping-cart:before {
        content: "\f07a"
    }
    .fa-folder:before {
        content: "\f07b"
    }
    .fa-folder-open:before {
        content: "\f07c"
    }
    .fa-arrows-v:before {
        content: "\f07d"
    }
    .fa-arrows-h:before {
        content: "\f07e"
    }
    .fa-bar-chart-o:before, .fa-bar-chart:before {
        content: "\f080"
    }
    .fa-twitter-square:before {
        content: "\f081"
    }
    .fa-facebook-square:before {
        content: "\f082"
    }
    .fa-camera-retro:before {
        content: "\f083"
    }
    .fa-key:before {
        content: "\f084"
    }
    .fa-cogs:before, .fa-gears:before {
        content: "\f085"
    }
    .fa-comments:before {
        content: "\f086"
    }
    .fa-thumbs-o-up:before {
        content: "\f087"
    }
    .fa-thumbs-o-down:before {
        content: "\f088"
    }
    .fa-star-half:before {
        content: "\f089"
    }
    .fa-heart-o:before {
        content: "\f08a"
    }
    .fa-sign-out:before {
        content: "\f08b"
    }
    .fa-linkedin-square:before {
        content: "\f08c"
    }
    .fa-thumb-tack:before {
        content: "\f08d"
    }
    .fa-external-link:before {
        content: "\f08e"
    }
    .fa-sign-in:before {
        content: "\f090"
    }
    .fa-trophy:before {
        content: "\f091"
    }
    .fa-github-square:before {
        content: "\f092"
    }
    .fa-upload:before {
        content: "\f093"
    }
    .fa-lemon-o:before {
        content: "\f094"
    }
    .fa-phone:before {
        content: "\f095"
    }
    .fa-square-o:before {
        content: "\f096"
    }
    .fa-bookmark-o:before {
        content: "\f097"
    }
    .fa-phone-square:before {
        content: "\f098"
    }
    .fa-twitter:before {
        content: "\f099"
    }
    .fa-facebook-f:before, .fa-facebook:before {
        content: "\f09a"
    }
    .fa-github:before {
        content: "\f09b"
    }
    .fa-unlock:before {
        content: "\f09c"
    }
    .fa-credit-card:before {
        content: "\f09d"
    }
    .fa-feed:before, .fa-rss:before {
        content: "\f09e"
    }
    .fa-hdd-o:before {
        content: "\f0a0"
    }
    .fa-bullhorn:before {
        content: "\f0a1"
    }
    .fa-bell:before {
        content: "\f0f3"
    }
    .fa-certificate:before {
        content: "\f0a3"
    }
    .fa-hand-o-right:before {
        content: "\f0a4"
    }
    .fa-hand-o-left:before {
        content: "\f0a5"
    }
    .fa-hand-o-up:before {
        content: "\f0a6"
    }
    .fa-hand-o-down:before {
        content: "\f0a7"
    }
    .fa-arrow-circle-left:before {
        content: "\f0a8"
    }
    .fa-arrow-circle-right:before {
        content: "\f0a9"
    }
    .fa-arrow-circle-up:before {
        content: "\f0aa"
    }
    .fa-arrow-circle-down:before {
        content: "\f0ab"
    }
    .fa-globe:before {
        content: "\f0ac"
    }
    .fa-wrench:before {
        content: "\f0ad"
    }
    .fa-tasks:before {
        content: "\f0ae"
    }
    .fa-filter:before {
        content: "\f0b0"
    }
    .fa-briefcase:before {
        content: "\f0b1"
    }
    .fa-arrows-alt:before {
        content: "\f0b2"
    }
    .fa-group:before, .fa-users:before {
        content: "\f0c0"
    }
    .fa-chain:before, .fa-link:before {
        content: "\f0c1"
    }
    .fa-cloud:before {
        content: "\f0c2"
    }
    .fa-flask:before {
        content: "\f0c3"
    }
    .fa-cut:before, .fa-scissors:before {
        content: "\f0c4"
    }
    .fa-copy:before, .fa-files-o:before {
        content: "\f0c5"
    }
    .fa-paperclip:before {
        content: "\f0c6"
    }
    .fa-floppy-o:before, .fa-save:before {
        content: "\f0c7"
    }
    .fa-square:before {
        content: "\f0c8"
    }
    .fa-bars:before, .fa-navicon:before, .fa-reorder:before {
        content: "\f0c9"
    }
    .fa-list-ul:before {
        content: "\f0ca"
    }
    .fa-list-ol:before {
        content: "\f0cb"
    }
    .fa-strikethrough:before {
        content: "\f0cc"
    }
    .fa-underline:before {
        content: "\f0cd"
    }
    .fa-table:before {
        content: "\f0ce"
    }
    .fa-magic:before {
        content: "\f0d0"
    }
    .fa-truck:before {
        content: "\f0d1"
    }
    .fa-pinterest:before {
        content: "\f0d2"
    }
    .fa-pinterest-square:before {
        content: "\f0d3"
    }
    .fa-google-plus-square:before {
        content: "\f0d4"
    }
    .fa-google-plus:before {
        content: "\f0d5"
    }
    .fa-money:before {
        content: "\f0d6"
    }
    .fa-caret-down:before {
        content: "\f0d7"
    }
    .fa-caret-up:before {
        content: "\f0d8"
    }
    .fa-caret-left:before {
        content: "\f0d9"
    }
    .fa-caret-right:before {
        content: "\f0da"
    }
    .fa-columns:before {
        content: "\f0db"
    }
    .fa-sort:before, .fa-unsorted:before {
        content: "\f0dc"
    }
    .fa-sort-desc:before, .fa-sort-down:before {
        content: "\f0dd"
    }
    .fa-sort-asc:before, .fa-sort-up:before {
        content: "\f0de"
    }
    .fa-envelope:before {
        content: "\f0e0"
    }
    .fa-linkedin:before {
        content: "\f0e1"
    }
    .fa-rotate-left:before, .fa-undo:before {
        content: "\f0e2"
    }
    .fa-gavel:before, .fa-legal:before {
        content: "\f0e3"
    }
    .fa-dashboard:before, .fa-tachometer:before {
        content: "\f0e4"
    }
    .fa-comment-o:before {
        content: "\f0e5"
    }
    .fa-comments-o:before {
        content: "\f0e6"
    }
    .fa-bolt:before, .fa-flash:before {
        content: "\f0e7"
    }
    .fa-sitemap:before {
        content: "\f0e8"
    }
    .fa-umbrella:before {
        content: "\f0e9"
    }
    .fa-clipboard:before, .fa-paste:before {
        content: "\f0ea"
    }
    .fa-lightbulb-o:before {
        content: "\f0eb"
    }
    .fa-exchange:before {
        content: "\f0ec"
    }
    .fa-cloud-download:before {
        content: "\f0ed"
    }
    .fa-cloud-upload:before {
        content: "\f0ee"
    }
    .fa-user-md:before {
        content: "\f0f0"
    }
    .fa-stethoscope:before {
        content: "\f0f1"
    }
    .fa-suitcase:before {
        content: "\f0f2"
    }
    .fa-bell-o:before {
        content: "\f0a2"
    }
    .fa-coffee:before {
        content: "\f0f4"
    }
    .fa-cutlery:before {
        content: "\f0f5"
    }
    .fa-file-text-o:before {
        content: "\f0f6"
    }
    .fa-building-o:before {
        content: "\f0f7"
    }
    .fa-hospital-o:before {
        content: "\f0f8"
    }
    .fa-ambulance:before {
        content: "\f0f9"
    }
    .fa-medkit:before {
        content: "\f0fa"
    }
    .fa-fighter-jet:before {
        content: "\f0fb"
    }
    .fa-beer:before {
        content: "\f0fc"
    }
    .fa-h-square:before {
        content: "\f0fd"
    }
    .fa-plus-square:before {
        content: "\f0fe"
    }
    .fa-angle-double-left:before {
        content: "\f100"
    }
    .fa-angle-double-right:before {
        content: "\f101"
    }
    .fa-angle-double-up:before {
        content: "\f102"
    }
    .fa-angle-double-down:before {
        content: "\f103"
    }
    .fa-angle-left:before {
        content: "\f104"
    }
    .fa-angle-right:before {
        content: "\f105"
    }
    .fa-angle-up:before {
        content: "\f106"
    }
    .fa-angle-down:before {
        content: "\f107"
    }
    .fa-desktop:before {
        content: "\f108"
    }
    .fa-laptop:before {
        content: "\f109"
    }
    .fa-tablet:before {
        content: "\f10a"
    }
    .fa-mobile-phone:before, .fa-mobile:before {
        content: "\f10b"
    }
    .fa-circle-o:before {
        content: "\f10c"
    }
    .fa-quote-left:before {
        content: "\f10d"
    }
    .fa-quote-right:before {
        content: "\f10e"
    }
    .fa-spinner:before {
        content: "\f110"
    }
    .fa-circle:before {
        content: "\f111"
    }
    .fa-mail-reply:before, .fa-reply:before {
        content: "\f112"
    }
    .fa-github-alt:before {
        content: "\f113"
    }
    .fa-folder-o:before {
        content: "\f114"
    }
    .fa-folder-open-o:before {
        content: "\f115"
    }
    .fa-smile-o:before {
        content: "\f118"
    }
    .fa-frown-o:before {
        content: "\f119"
    }
    .fa-meh-o:before {
        content: "\f11a"
    }
    .fa-gamepad:before {
        content: "\f11b"
    }
    .fa-keyboard-o:before {
        content: "\f11c"
    }
    .fa-flag-o:before {
        content: "\f11d"
    }
    .fa-flag-checkered:before {
        content: "\f11e"
    }
    .fa-terminal:before {
        content: "\f120"
    }
    .fa-code:before {
        content: "\f121"
    }
    .fa-mail-reply-all:before, .fa-reply-all:before {
        content: "\f122"
    }
    .fa-star-half-empty:before, .fa-star-half-full:before, .fa-star-half-o:before {
        content: "\f123"
    }
    .fa-location-arrow:before {
        content: "\f124"
    }
    .fa-crop:before {
        content: "\f125"
    }
    .fa-code-fork:before {
        content: "\f126"
    }
    .fa-chain-broken:before, .fa-unlink:before {
        content: "\f127"
    }
    .fa-question:before {
        content: "\f128"
    }
    .fa-info:before {
        content: "\f129"
    }
    .fa-exclamation:before {
        content: "\f12a"
    }
    .fa-superscript:before {
        content: "\f12b"
    }
    .fa-subscript:before {
        content: "\f12c"
    }
    .fa-eraser:before {
        content: "\f12d"
    }
    .fa-puzzle-piece:before {
        content: "\f12e"
    }
    .fa-microphone:before {
        content: "\f130"
    }
    .fa-microphone-slash:before {
        content: "\f131"
    }
    .fa-shield:before {
        content: "\f132"
    }
    .fa-calendar-o:before {
        content: "\f133"
    }
    .fa-fire-extinguisher:before {
        content: "\f134"
    }
    .fa-rocket:before {
        content: "\f135"
    }
    .fa-maxcdn:before {
        content: "\f136"
    }
    .fa-chevron-circle-left:before {
        content: "\f137"
    }
    .fa-chevron-circle-right:before {
        content: "\f138"
    }
    .fa-chevron-circle-up:before {
        content: "\f139"
    }
    .fa-chevron-circle-down:before {
        content: "\f13a"
    }
    .fa-html5:before {
        content: "\f13b"
    }
    .fa-css3:before {
        content: "\f13c"
    }
    .fa-anchor:before {
        content: "\f13d"
    }
    .fa-unlock-alt:before {
        content: "\f13e"
    }
    .fa-bullseye:before {
        content: "\f140"
    }
    .fa-ellipsis-h:before {
        content: "\f141"
    }
    .fa-ellipsis-v:before {
        content: "\f142"
    }
    .fa-rss-square:before {
        content: "\f143"
    }
    .fa-play-circle:before {
        content: "\f144"
    }
    .fa-ticket:before {
        content: "\f145"
    }
    .fa-minus-square:before {
        content: "\f146"
    }
    .fa-minus-square-o:before {
        content: "\f147"
    }
    .fa-level-up:before {
        content: "\f148"
    }
    .fa-level-down:before {
        content: "\f149"
    }
    .fa-check-square:before {
        content: "\f14a"
    }
    .fa-pencil-square:before {
        content: "\f14b"
    }
    .fa-external-link-square:before {
        content: "\f14c"
    }
    .fa-share-square:before {
        content: "\f14d"
    }
    .fa-compass:before {
        content: "\f14e"
    }
    .fa-caret-square-o-down:before, .fa-toggle-down:before {
        content: "\f150"
    }
    .fa-caret-square-o-up:before, .fa-toggle-up:before {
        content: "\f151"
    }
    .fa-caret-square-o-right:before, .fa-toggle-right:before {
        content: "\f152"
    }
    .fa-eur:before, .fa-euro:before {
        content: "\f153"
    }
    .fa-gbp:before {
        content: "\f154"
    }
    .fa-dollar:before, .fa-usd:before {
        content: "\f155"
    }
    .fa-inr:before, .fa-rupee:before {
        content: "\f156"
    }
    .fa-cny:before, .fa-jpy:before, .fa-rmb:before, .fa-yen:before {
        content: "\f157"
    }
    .fa-rouble:before, .fa-rub:before, .fa-ruble:before {
        content: "\f158"
    }
    .fa-krw:before, .fa-won:before {
        content: "\f159"
    }
    .fa-bitcoin:before, .fa-btc:before {
        content: "\f15a"
    }
    .fa-file:before {
        content: "\f15b"
    }
    .fa-file-text:before {
        content: "\f15c"
    }
    .fa-sort-alpha-asc:before {
        content: "\f15d"
    }
    .fa-sort-alpha-desc:before {
        content: "\f15e"
    }
    .fa-sort-amount-asc:before {
        content: "\f160"
    }
    .fa-sort-amount-desc:before {
        content: "\f161"
    }
    .fa-sort-numeric-asc:before {
        content: "\f162"
    }
    .fa-sort-numeric-desc:before {
        content: "\f163"
    }
    .fa-thumbs-up:before {
        content: "\f164"
    }
    .fa-thumbs-down:before {
        content: "\f165"
    }
    .fa-youtube-square:before {
        content: "\f166"
    }
    .fa-youtube:before {
        content: "\f167"
    }
    .fa-xing:before {
        content: "\f168"
    }
    .fa-xing-square:before {
        content: "\f169"
    }
    .fa-youtube-play:before {
        content: "\f16a"
    }
    .fa-dropbox:before {
        content: "\f16b"
    }
    .fa-stack-overflow:before {
        content: "\f16c"
    }
    .fa-instagram:before {
        content: "\f16d"
    }
    .fa-flickr:before {
        content: "\f16e"
    }
    .fa-adn:before {
        content: "\f170"
    }
    .fa-bitbucket:before {
        content: "\f171"
    }
    .fa-bitbucket-square:before {
        content: "\f172"
    }
    .fa-tumblr:before {
        content: "\f173"
    }
    .fa-tumblr-square:before {
        content: "\f174"
    }
    .fa-long-arrow-down:before {
        content: "\f175"
    }
    .fa-long-arrow-up:before {
        content: "\f176"
    }
    .fa-long-arrow-left:before {
        content: "\f177"
    }
    .fa-long-arrow-right:before {
        content: "\f178"
    }
    .fa-apple:before {
        content: "\f179"
    }
    .fa-windows:before {
        content: "\f17a"
    }
    .fa-android:before {
        content: "\f17b"
    }
    .fa-linux:before {
        content: "\f17c"
    }
    .fa-dribbble:before {
        content: "\f17d"
    }
    .fa-skype:before {
        content: "\f17e"
    }
    .fa-foursquare:before {
        content: "\f180"
    }
    .fa-trello:before {
        content: "\f181"
    }
    .fa-female:before {
        content: "\f182"
    }
    .fa-male:before {
        content: "\f183"
    }
    .fa-gittip:before, .fa-gratipay:before {
        content: "\f184"
    }
    .fa-sun-o:before {
        content: "\f185"
    }
    .fa-moon-o:before {
        content: "\f186"
    }
    .fa-archive:before {
        content: "\f187"
    }
    .fa-bug:before {
        content: "\f188"
    }
    .fa-vk:before {
        content: "\f189"
    }
    .fa-weibo:before {
        content: "\f18a"
    }
    .fa-renren:before {
        content: "\f18b"
    }
    .fa-pagelines:before {
        content: "\f18c"
    }
    .fa-stack-exchange:before {
        content: "\f18d"
    }
    .fa-arrow-circle-o-right:before {
        content: "\f18e"
    }
    .fa-arrow-circle-o-left:before {
        content: "\f190"
    }
    .fa-caret-square-o-left:before, .fa-toggle-left:before {
        content: "\f191"
    }
    .fa-dot-circle-o:before {
        content: "\f192"
    }
    .fa-wheelchair:before {
        content: "\f193"
    }
    .fa-vimeo-square:before {
        content: "\f194"
    }
    .fa-try:before, .fa-turkish-lira:before {
        content: "\f195"
    }
    .fa-plus-square-o:before {
        content: "\f196"
    }
    .fa-space-shuttle:before {
        content: "\f197"
    }
    .fa-slack:before {
        content: "\f198"
    }
    .fa-envelope-square:before {
        content: "\f199"
    }
    .fa-wordpress:before {
        content: "\f19a"
    }
    .fa-openid:before {
        content: "\f19b"
    }
    .fa-bank:before, .fa-institution:before, .fa-university:before {
        content: "\f19c"
    }
    .fa-graduation-cap:before, .fa-mortar-board:before {
        content: "\f19d"
    }
    .fa-yahoo:before {
        content: "\f19e"
    }
    .fa-google:before {
        content: "\f1a0"
    }
    .fa-reddit:before {
        content: "\f1a1"
    }
    .fa-reddit-square:before {
        content: "\f1a2"
    }
    .fa-stumbleupon-circle:before {
        content: "\f1a3"
    }
    .fa-stumbleupon:before {
        content: "\f1a4"
    }
    .fa-delicious:before {
        content: "\f1a5"
    }
    .fa-digg:before {
        content: "\f1a6"
    }
    .fa-pied-piper-pp:before {
        content: "\f1a7"
    }
    .fa-pied-piper-alt:before {
        content: "\f1a8"
    }
    .fa-drupal:before {
        content: "\f1a9"
    }
    .fa-joomla:before {
        content: "\f1aa"
    }
    .fa-language:before {
        content: "\f1ab"
    }
    .fa-fax:before {
        content: "\f1ac"
    }
    .fa-building:before {
        content: "\f1ad"
    }
    .fa-child:before {
        content: "\f1ae"
    }
    .fa-paw:before {
        content: "\f1b0"
    }
    .fa-spoon:before {
        content: "\f1b1"
    }
    .fa-cube:before {
        content: "\f1b2"
    }
    .fa-cubes:before {
        content: "\f1b3"
    }
    .fa-behance:before {
        content: "\f1b4"
    }
    .fa-behance-square:before {
        content: "\f1b5"
    }
    .fa-steam:before {
        content: "\f1b6"
    }
    .fa-steam-square:before {
        content: "\f1b7"
    }
    .fa-recycle:before {
        content: "\f1b8"
    }
    .fa-automobile:before, .fa-car:before {
        content: "\f1b9"
    }
    .fa-cab:before, .fa-taxi:before {
        content: "\f1ba"
    }
    .fa-tree:before {
        content: "\f1bb"
    }
    .fa-spotify:before {
        content: "\f1bc"
    }
    .fa-deviantart:before {
        content: "\f1bd"
    }
    .fa-soundcloud:before {
        content: "\f1be"
    }
    .fa-database:before {
        content: "\f1c0"
    }
    .fa-file-pdf-o:before {
        content: "\f1c1"
    }
    .fa-file-word-o:before {
        content: "\f1c2"
    }
    .fa-file-excel-o:before {
        content: "\f1c3"
    }
    .fa-file-powerpoint-o:before {
        content: "\f1c4"
    }
    .fa-file-image-o:before, .fa-file-photo-o:before, .fa-file-picture-o:before {
        content: "\f1c5"
    }
    .fa-file-archive-o:before, .fa-file-zip-o:before {
        content: "\f1c6"
    }
    .fa-file-audio-o:before, .fa-file-sound-o:before {
        content: "\f1c7"
    }
    .fa-file-movie-o:before, .fa-file-video-o:before {
        content: "\f1c8"
    }
    .fa-file-code-o:before {
        content: "\f1c9"
    }
    .fa-vine:before {
        content: "\f1ca"
    }
    .fa-codepen:before {
        content: "\f1cb"
    }
    .fa-jsfiddle:before {
        content: "\f1cc"
    }
    .fa-life-bouy:before, .fa-life-buoy:before, .fa-life-ring:before, .fa-life-saver:before, .fa-support:before {
        content: "\f1cd"
    }
    .fa-circle-o-notch:before {
        content: "\f1ce"
    }
    .fa-ra:before, .fa-rebel:before, .fa-resistance:before {
        content: "\f1d0"
    }
    .fa-empire:before, .fa-ge:before {
        content: "\f1d1"
    }
    .fa-git-square:before {
        content: "\f1d2"
    }
    .fa-git:before {
        content: "\f1d3"
    }
    .fa-hacker-news:before, .fa-y-combinator-square:before, .fa-yc-square:before {
        content: "\f1d4"
    }
    .fa-tencent-weibo:before {
        content: "\f1d5"
    }
    .fa-qq:before {
        content: "\f1d6"
    }
    .fa-wechat:before, .fa-weixin:before {
        content: "\f1d7"
    }
    .fa-paper-plane:before, .fa-send:before {
        content: "\f1d8"
    }
    .fa-paper-plane-o:before, .fa-send-o:before {
        content: "\f1d9"
    }
    .fa-history:before {
        content: "\f1da"
    }
    .fa-circle-thin:before {
        content: "\f1db"
    }
    .fa-header:before {
        content: "\f1dc"
    }
    .fa-paragraph:before {
        content: "\f1dd"
    }
    .fa-sliders:before {
        content: "\f1de"
    }
    .fa-share-alt:before {
        content: "\f1e0"
    }
    .fa-share-alt-square:before {
        content: "\f1e1"
    }
    .fa-bomb:before {
        content: "\f1e2"
    }
    .fa-futbol-o:before, .fa-soccer-ball-o:before {
        content: "\f1e3"
    }
    .fa-tty:before {
        content: "\f1e4"
    }
    .fa-binoculars:before {
        content: "\f1e5"
    }
    .fa-plug:before {
        content: "\f1e6"
    }
    .fa-slideshare:before {
        content: "\f1e7"
    }
    .fa-twitch:before {
        content: "\f1e8"
    }
    .fa-yelp:before {
        content: "\f1e9"
    }
    .fa-newspaper-o:before {
        content: "\f1ea"
    }
    .fa-wifi:before {
        content: "\f1eb"
    }
    .fa-calculator:before {
        content: "\f1ec"
    }
    .fa-paypal:before {
        content: "\f1ed"
    }
    .fa-google-wallet:before {
        content: "\f1ee"
    }
    .fa-cc-visa:before {
        content: "\f1f0"
    }
    .fa-cc-mastercard:before {
        content: "\f1f1"
    }
    .fa-cc-discover:before {
        content: "\f1f2"
    }
    .fa-cc-amex:before {
        content: "\f1f3"
    }
    .fa-cc-paypal:before {
        content: "\f1f4"
    }
    .fa-cc-stripe:before {
        content: "\f1f5"
    }
    .fa-bell-slash:before {
        content: "\f1f6"
    }
    .fa-bell-slash-o:before {
        content: "\f1f7"
    }
    .fa-trash:before {
        content: "\f1f8"
    }
    .fa-copyright:before {
        content: "\f1f9"
    }
    .fa-at:before {
        content: "\f1fa"
    }
    .fa-eyedropper:before {
        content: "\f1fb"
    }
    .fa-paint-brush:before {
        content: "\f1fc"
    }
    .fa-birthday-cake:before {
        content: "\f1fd"
    }
    .fa-area-chart:before {
        content: "\f1fe"
    }
    .fa-pie-chart:before {
        content: "\f200"
    }
    .fa-line-chart:before {
        content: "\f201"
    }
    .fa-lastfm:before {
        content: "\f202"
    }
    .fa-lastfm-square:before {
        content: "\f203"
    }
    .fa-toggle-off:before {
        content: "\f204"
    }
    .fa-toggle-on:before {
        content: "\f205"
    }
    .fa-bicycle:before {
        content: "\f206"
    }
    .fa-bus:before {
        content: "\f207"
    }
    .fa-ioxhost:before {
        content: "\f208"
    }
    .fa-angellist:before {
        content: "\f209"
    }
    .fa-cc:before {
        content: "\f20a"
    }
    .fa-ils:before, .fa-shekel:before, .fa-sheqel:before {
        content: "\f20b"
    }
    .fa-meanpath:before {
        content: "\f20c"
    }
    .fa-buysellads:before {
        content: "\f20d"
    }
    .fa-connectdevelop:before {
        content: "\f20e"
    }
    .fa-dashcube:before {
        content: "\f210"
    }
    .fa-forumbee:before {
        content: "\f211"
    }
    .fa-leanpub:before {
        content: "\f212"
    }
    .fa-sellsy:before {
        content: "\f213"
    }
    .fa-shirtsinbulk:before {
        content: "\f214"
    }
    .fa-simplybuilt:before {
        content: "\f215"
    }
    .fa-skyatlas:before {
        content: "\f216"
    }
    .fa-cart-plus:before {
        content: "\f217"
    }
    .fa-cart-arrow-down:before {
        content: "\f218"
    }
    .fa-diamond:before {
        content: "\f219"
    }
    .fa-ship:before {
        content: "\f21a"
    }
    .fa-user-secret:before {
        content: "\f21b"
    }
    .fa-motorcycle:before {
        content: "\f21c"
    }
    .fa-street-view:before {
        content: "\f21d"
    }
    .fa-heartbeat:before {
        content: "\f21e"
    }
    .fa-venus:before {
        content: "\f221"
    }
    .fa-mars:before {
        content: "\f222"
    }
    .fa-mercury:before {
        content: "\f223"
    }
    .fa-intersex:before, .fa-transgender:before {
        content: "\f224"
    }
    .fa-transgender-alt:before {
        content: "\f225"
    }
    .fa-venus-double:before {
        content: "\f226"
    }
    .fa-mars-double:before {
        content: "\f227"
    }
    .fa-venus-mars:before {
        content: "\f228"
    }
    .fa-mars-stroke:before {
        content: "\f229"
    }
    .fa-mars-stroke-v:before {
        content: "\f22a"
    }
    .fa-mars-stroke-h:before {
        content: "\f22b"
    }
    .fa-neuter:before {
        content: "\f22c"
    }
    .fa-genderless:before {
        content: "\f22d"
    }
    .fa-facebook-official:before {
        content: "\f230"
    }
    .fa-pinterest-p:before {
        content: "\f231"
    }
    .fa-whatsapp:before {
        content: "\f232"
    }
    .fa-server:before {
        content: "\f233"
    }
    .fa-user-plus:before {
        content: "\f234"
    }
    .fa-user-times:before {
        content: "\f235"
    }
    .fa-bed:before, .fa-hotel:before {
        content: "\f236"
    }
    .fa-viacoin:before {
        content: "\f237"
    }
    .fa-train:before {
        content: "\f238"
    }
    .fa-subway:before {
        content: "\f239"
    }
    .fa-medium:before {
        content: "\f23a"
    }
    .fa-y-combinator:before, .fa-yc:before {
        content: "\f23b"
    }
    .fa-optin-monster:before {
        content: "\f23c"
    }
    .fa-opencart:before {
        content: "\f23d"
    }
    .fa-expeditedssl:before {
        content: "\f23e"
    }
    .fa-battery-4:before, .fa-battery-full:before, .fa-battery:before {
        content: "\f240"
    }
    .fa-battery-3:before, .fa-battery-three-quarters:before {
        content: "\f241"
    }
    .fa-battery-2:before, .fa-battery-half:before {
        content: "\f242"
    }
    .fa-battery-1:before, .fa-battery-quarter:before {
        content: "\f243"
    }
    .fa-battery-0:before, .fa-battery-empty:before {
        content: "\f244"
    }
    .fa-mouse-pointer:before {
        content: "\f245"
    }
    .fa-i-cursor:before {
        content: "\f246"
    }
    .fa-object-group:before {
        content: "\f247"
    }
    .fa-object-ungroup:before {
        content: "\f248"
    }
    .fa-sticky-note:before {
        content: "\f249"
    }
    .fa-sticky-note-o:before {
        content: "\f24a"
    }
    .fa-cc-jcb:before {
        content: "\f24b"
    }
    .fa-cc-diners-club:before {
        content: "\f24c"
    }
    .fa-clone:before {
        content: "\f24d"
    }
    .fa-balance-scale:before {
        content: "\f24e"
    }
    .fa-hourglass-o:before {
        content: "\f250"
    }
    .fa-hourglass-1:before, .fa-hourglass-start:before {
        content: "\f251"
    }
    .fa-hourglass-2:before, .fa-hourglass-half:before {
        content: "\f252"
    }
    .fa-hourglass-3:before, .fa-hourglass-end:before {
        content: "\f253"
    }
    .fa-hourglass:before {
        content: "\f254"
    }
    .fa-hand-grab-o:before, .fa-hand-rock-o:before {
        content: "\f255"
    }
    .fa-hand-paper-o:before, .fa-hand-stop-o:before {
        content: "\f256"
    }
    .fa-hand-scissors-o:before {
        content: "\f257"
    }
    .fa-hand-lizard-o:before {
        content: "\f258"
    }
    .fa-hand-spock-o:before {
        content: "\f259"
    }
    .fa-hand-pointer-o:before {
        content: "\f25a"
    }
    .fa-hand-peace-o:before {
        content: "\f25b"
    }
    .fa-trademark:before {
        content: "\f25c"
    }
    .fa-registered:before {
        content: "\f25d"
    }
    .fa-creative-commons:before {
        content: "\f25e"
    }
    .fa-gg:before {
        content: "\f260"
    }
    .fa-gg-circle:before {
        content: "\f261"
    }
    .fa-tripadvisor:before {
        content: "\f262"
    }
    .fa-odnoklassniki:before {
        content: "\f263"
    }
    .fa-odnoklassniki-square:before {
        content: "\f264"
    }
    .fa-get-pocket:before {
        content: "\f265"
    }
    .fa-wikipedia-w:before {
        content: "\f266"
    }
    .fa-safari:before {
        content: "\f267"
    }
    .fa-chrome:before {
        content: "\f268"
    }
    .fa-firefox:before {
        content: "\f269"
    }
    .fa-opera:before {
        content: "\f26a"
    }
    .fa-internet-explorer:before {
        content: "\f26b"
    }
    .fa-television:before, .fa-tv:before {
        content: "\f26c"
    }
    .fa-contao:before {
        content: "\f26d"
    }
    .fa-500px:before {
        content: "\f26e"
    }
    .fa-amazon:before {
        content: "\f270"
    }
    .fa-calendar-plus-o:before {
        content: "\f271"
    }
    .fa-calendar-minus-o:before {
        content: "\f272"
    }
    .fa-calendar-times-o:before {
        content: "\f273"
    }
    .fa-calendar-check-o:before {
        content: "\f274"
    }
    .fa-industry:before {
        content: "\f275"
    }
    .fa-map-pin:before {
        content: "\f276"
    }
    .fa-map-signs:before {
        content: "\f277"
    }
    .fa-map-o:before {
        content: "\f278"
    }
    .fa-map:before {
        content: "\f279"
    }
    .fa-commenting:before {
        content: "\f27a"
    }
    .fa-commenting-o:before {
        content: "\f27b"
    }
    .fa-houzz:before {
        content: "\f27c"
    }
    .fa-vimeo:before {
        content: "\f27d"
    }
    .fa-black-tie:before {
        content: "\f27e"
    }
    .fa-fonticons:before {
        content: "\f280"
    }
    .fa-reddit-alien:before {
        content: "\f281"
    }
    .fa-edge:before {
        content: "\f282"
    }
    .fa-credit-card-alt:before {
        content: "\f283"
    }
    .fa-codiepie:before {
        content: "\f284"
    }
    .fa-modx:before {
        content: "\f285"
    }
    .fa-fort-awesome:before {
        content: "\f286"
    }
    .fa-usb:before {
        content: "\f287"
    }
    .fa-product-hunt:before {
        content: "\f288"
    }
    .fa-mixcloud:before {
        content: "\f289"
    }
    .fa-scribd:before {
        content: "\f28a"
    }
    .fa-pause-circle:before {
        content: "\f28b"
    }
    .fa-pause-circle-o:before {
        content: "\f28c"
    }
    .fa-stop-circle:before {
        content: "\f28d"
    }
    .fa-stop-circle-o:before {
        content: "\f28e"
    }
    .fa-shopping-bag:before {
        content: "\f290"
    }
    .fa-shopping-basket:before {
        content: "\f291"
    }
    .fa-hashtag:before {
        content: "\f292"
    }
    .fa-bluetooth:before {
        content: "\f293"
    }
    .fa-bluetooth-b:before {
        content: "\f294"
    }
    .fa-percent:before {
        content: "\f295"
    }
    .fa-gitlab:before {
        content: "\f296"
    }
    .fa-wpbeginner:before {
        content: "\f297"
    }
    .fa-wpforms:before {
        content: "\f298"
    }
    .fa-envira:before {
        content: "\f299"
    }
    .fa-universal-access:before {
        content: "\f29a"
    }
    .fa-wheelchair-alt:before {
        content: "\f29b"
    }
    .fa-question-circle-o:before {
        content: "\f29c"
    }
    .fa-blind:before {
        content: "\f29d"
    }
    .fa-audio-description:before {
        content: "\f29e"
    }
    .fa-volume-control-phone:before {
        content: "\f2a0"
    }
    .fa-braille:before {
        content: "\f2a1"
    }
    .fa-assistive-listening-systems:before {
        content: "\f2a2"
    }
    .fa-american-sign-language-interpreting:before, .fa-asl-interpreting:before {
        content: "\f2a3"
    }
    .fa-deaf:before, .fa-deafness:before, .fa-hard-of-hearing:before {
        content: "\f2a4"
    }
    .fa-glide:before {
        content: "\f2a5"
    }
    .fa-glide-g:before {
        content: "\f2a6"
    }
    .fa-sign-language:before, .fa-signing:before {
        content: "\f2a7"
    }
    .fa-low-vision:before {
        content: "\f2a8"
    }
    .fa-viadeo:before {
        content: "\f2a9"
    }
    .fa-viadeo-square:before {
        content: "\f2aa"
    }
    .fa-snapchat:before {
        content: "\f2ab"
    }
    .fa-snapchat-ghost:before {
        content: "\f2ac"
    }
    .fa-snapchat-square:before {
        content: "\f2ad"
    }
    .fa-pied-piper:before {
        content: "\f2ae"
    }
    .fa-first-order:before {
        content: "\f2b0"
    }
    .fa-yoast:before {
        content: "\f2b1"
    }
    .fa-themeisle:before {
        content: "\f2b2"
    }
    .fa-google-plus-circle:before, .fa-google-plus-official:before {
        content: "\f2b3"
    }
    .fa-fa:before, .fa-font-awesome:before {
        content: "\f2b4"
    }
    .fa-handshake-o:before {
        content: "\f2b5"
    }
    .fa-envelope-open:before {
        content: "\f2b6"
    }
    .fa-envelope-open-o:before {
        content: "\f2b7"
    }
    .fa-linode:before {
        content: "\f2b8"
    }
    .fa-address-book:before {
        content: "\f2b9"
    }
    .fa-address-book-o:before {
        content: "\f2ba"
    }
    .fa-address-card:before, .fa-vcard:before {
        content: "\f2bb"
    }
    .fa-address-card-o:before, .fa-vcard-o:before {
        content: "\f2bc"
    }
    .fa-user-circle:before {
        content: "\f2bd"
    }
    .fa-user-circle-o:before {
        content: "\f2be"
    }
    .fa-user-o:before {
        content: "\f2c0"
    }
    .fa-id-badge:before {
        content: "\f2c1"
    }
    .fa-drivers-license:before, .fa-id-card:before {
        content: "\f2c2"
    }
    .fa-drivers-license-o:before, .fa-id-card-o:before {
        content: "\f2c3"
    }
    .fa-quora:before {
        content: "\f2c4"
    }
    .fa-free-code-camp:before {
        content: "\f2c5"
    }
    .fa-telegram:before {
        content: "\f2c6"
    }
    .fa-thermometer-4:before, .fa-thermometer-full:before, .fa-thermometer:before {
        content: "\f2c7"
    }
    .fa-thermometer-3:before, .fa-thermometer-three-quarters:before {
        content: "\f2c8"
    }
    .fa-thermometer-2:before, .fa-thermometer-half:before {
        content: "\f2c9"
    }
    .fa-thermometer-1:before, .fa-thermometer-quarter:before {
        content: "\f2ca"
    }
    .fa-thermometer-0:before, .fa-thermometer-empty:before {
        content: "\f2cb"
    }
    .fa-shower:before {
        content: "\f2cc"
    }
    .fa-bath:before, .fa-bathtub:before, .fa-s15:before {
        content: "\f2cd"
    }
    .fa-podcast:before {
        content: "\f2ce"
    }
    .fa-window-maximize:before {
        content: "\f2d0"
    }
    .fa-window-minimize:before {
        content: "\f2d1"
    }
    .fa-window-restore:before {
        content: "\f2d2"
    }
    .fa-times-rectangle:before, .fa-window-close:before {
        content: "\f2d3"
    }
    .fa-times-rectangle-o:before, .fa-window-close-o:before {
        content: "\f2d4"
    }
    .fa-bandcamp:before {
        content: "\f2d5"
    }
    .fa-grav:before {
        content: "\f2d6"
    }
    .fa-etsy:before {
        content: "\f2d7"
    }
    .fa-imdb:before {
        content: "\f2d8"
    }
    .fa-ravelry:before {
        content: "\f2d9"
    }
    .fa-eercast:before {
        content: "\f2da"
    }
    .fa-microchip:before {
        content: "\f2db"
    }
    .fa-snowflake-o:before {
        content: "\f2dc"
    }
    .fa-superpowers:before {
        content: "\f2dd"
    }
    .fa-wpexplorer:before {
        content: "\f2de"
    }
    .fa-meetup:before {
        content: "\f2e0"
    }
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }
    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }
    @font-face {
        font-family: 'Noto Naskh Arabic';
        font-style: normal;
        font-weight: 400;
        src: url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Regular.eot);
        src: url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Regular.eot?#iefix) format('embedded-opentype'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Regular.woff2) format('woff2'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Regular.woff) format('woff'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Regular.ttf) format('truetype');
        font-display: swap
    }
    @font-face {
        font-display: swap;
        font-family: 'Noto Naskh Arabic';
        font-style: normal;
        font-weight: 700;
        src: url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Bold.eot);
        src: url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Bold.eot?#iefix) format('embedded-opentype'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Bold.woff2) format('woff2'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Bold.woff) format('woff'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoNaskhArabic-Bold.ttf) format('truetype')
    }
    @font-face {
        font-display: swap;
        font-family: 'Noto Kufi Arabic';
        font-style: normal;
        font-weight: 400;
        src: url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Regular.eot);
        src: url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Regular.eot?#iefix) format('embedded-opentype'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Regular.woff2) format('woff2'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Regular.woff) format('woff'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Regular.ttf) format('truetype')
    }
    @font-face {
        font-display: swap;
        font-family: 'Noto Kufi Arabic';
        font-style: normal;
        font-weight: 700;
        src: url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Bold.eot);
        src: url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Bold.eot?#iefix) format('embedded-opentype'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Bold.woff2) format('woff2'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Bold.woff) format('woff'), url(https://www.nourbook.com/publice/fonts/stable_fonts/NotoKufiArabic-Bold.ttf) format('truetype')
    }
    .active.focus, .active:focus, .focus, :active.focus, :active:focus, :focus {
        outline: 0 !important
    }
    span.more {
        display: none
    }
    .btn, .kufi-b, .kufi-r, .similar-books a, body, h1, h2, h3, h4, h5, h6, nav {
        font-family: 'Noto Kufi Arabic', 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        line-height: 1.84
    }
    .breadcrumb, .checkbox, .form--container, .form-control, .naskh-b, .naskh-r, .quote-content-child, .tooltip, input, p, select, textarea, ul.typeahead li a {
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        line-height: 1.64
    }
    .modal-title {
        line-height: 1.84 !important;
        font-size: 16px
    }
    .tooltip {
        font-size: 12px
    }
    .no-border {
        border: 0 !important
    }
    .red-color {
        color: #c0392b !important
    }
    .green-color {
        color: #45b09e !important
    }
    .no-background {
        background: 0 0 !important
    }
    body {
        position: relative;
        min-height: 100vh;
        background-color: #f1f1f1;
        color: #333 !important;
        font-size: 16px;
        padding: 0 !important;
        margin: 0 !important
    }
    .btn.active, .btn:active {
        box-shadow: none !important
    }
    .noor-btn {
        color: #45b09e !important;
        border: 1px solid #45b09e !important;
        font-size: 15px;
        background: #fff;
        border-radius: 2px
    }
    .noor-btn.focus, .noor-btn:active:focus, .noor-btn:focus, .noor-btn:hover {
        color: #fff !important;
        background-color: #45b09e !important;
        opacity: .9
    }
    .noor-btn-b {
        color: #fff !important;
        border: 1px solid #45b09e !important;
        background: #45b09e !important;
        border-radius: 2px
    }
    .noor-btn2 {
        color: #347e7d !important;
        border: 1px solid #347e7d !important;
        font-size: 17px;
        background: #fff
    }
    .noor-btn2.focus, .noor-btn2:active:focus, .noor-btn2:focus, .noor-btn2:hover {
        color: #fff !important;
        background-color: #347e7d !important;
        opacity: .9
    }
    .noor-btn-b2 {
        color: #fff !important;
        border: 1px solid #347e7d !important;
        background: #347e7d !important
    }
    .noor-btn-b3 {
        background: #ceece7;
        color: #45b09e;
        border: 0
    }
    .noor-btn-b3.focus, .noor-btn-b3:active:focus, .noor-btn-b3:focus, .noor-btn-b3:hover {
        background: #ceece7;
        color: #45b09e;
        border: 0;
        opacity: .9
    }
    .noor-btn-b4 {
        background: #00a6a0;
        color: #fff;
        border: 0
    }
    .noor-btn-b4.focus, .noor-btn-b4:active:focus, .noor-btn-b4:focus, .noor-btn-b4:hover {
        background: #00a6a0;
        color: #fff;
        border: 0;
        opacity: .9
    }
    .border-half-rad {
        border-radius: 50px !important
    }
    .navbar-btn {
        margin-top: 5px;
        margin-bottom: 5px
    }
    a {
        transition: all ease-in-out .2s
    }
    .btn-link {
        color: #45b09e
    }
    .btn-link:focus, .btn-link:hover {
        color: #148a72
    }
    .modal-content {
        border-radius: 6px;
        border: none;
        box-shadow: none
    }
    .login-modal .modal-body {
        padding-bottom: 5px
    }
    .modal-footer {
        border-top: none
    }
    .modal-header {
        border-bottom: none
    }
    .modal-content {
        padding: 10px
    }
    .modal-title:after {
        border-bottom: 1px solid #45b09e;
        bottom: -10px;
        content: "";
        display: block;
        position: absolute;
        width: 40px
    }
    .modal-title {
        position: relative
    }
    .modal .close {
        position: relative;
        z-index: 99
    }
    .form-control:focus {
        box-shadow: none;
        border-color: #45b09e
    }
    .form-control {
        border-radius: 4px
    }
    .u-line:after {
        border-bottom: 1px solid #45b09e;
        bottom: -10px;
        content: "";
        display: block;
        position: absolute;
        width: 40px
    }
    .u-line {
        position: relative
    }
    .page_container {
        margin-bottom: 15px
    }
    .pagination > li > a {
        margin: 3px !important;
        border-radius: 0 !important;
        color: #35be97;
        border: 1px solid #45b09e
    }
    .pagination-lg > li > a, .pagination-lg > li > span {
        padding: 15px 20px;
        font-size: 22px
    }
    .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
        background-color: #45b09e;
        border-color: #45b09e
    }
    .pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {
        background-color: #45b09e;
        border-color: #45b09e;
        color: #fff
    }
    .affix {
        top: 0;
        width: 100%;
        z-index: 1001 !important
    }
    .modal-backdrop {
        z-index: 1001 !important
    }
    .top_header {
        width: 100%;
        background: #fff;
        padding-top: 30px;
        padding-bottom: 30px
    }
    .top_header .logo {
        height: 120px
    }
    .a-icon-logo {
        padding-top: 5px !important;
        padding-bottom: 5px !important
    }
    .icon-logo {
        height: 40px;
        width: 40px
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
        color: #333
    }
    .navbar-default .navbar-nav > li > a.atab:focus, .navbar-default .navbar-nav > li > a.atab:hover {
        padding-bottom: 13px;
        border-bottom: 2px solid #45b09e;
        background: #fff;
        font-weight: 500
    }
    .navbar-default .navbar-nav > li > a i {
        color: #444
    }
    .nav.navbar-nav a {
        padding-left: 15px !important;
        padding-right: 15px !important;
        margin-right: 0;
        margin-left: 0;
        font-size: 15px
    }
    .m-t-15 {
        margin-top: 15px !important
    }
    .m-t-5 {
        margin-top: 5px !important
    }
    .m-t-20 {
        margin-top: 20px !important
    }
    .affix ~ .the_main {
        position: relative;
        padding-top: 76px
    }
    .sidenav {
        background: #fff;
        border-radius: 2px;
        padding: 15px 15px 0 15px;
        border: 1px solid #dadde1 !important;
        border-radius: 4px
    }
    .side_results {
        margin-top: 25px
    }
    .side_results a {
        border-bottom: 2px solid #fff;
        padding-bottom: 0;
        display: block;
        color: #333;
        margin-bottom: 8px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
    .side_results a.all-catg {
        text-align: center;
        font-size: 18px;
        margin-bottom: 0
    }
    .writer-box:hover {
        text-decoration: none
    }
    .none-decoration {
        text-decoration: none
    }
    .none-decoration:hover {
        text-decoration: none
    }
    .writer-box {
        display: block
    }
    .side_results i {
        color: #45b09e;
        font-size: 18px
    }
    .side_results a:hover {
        color: #333
    }
    .more_categories {
        background: #ceece7 !important;
        color: #45b09e !important;
        padding: 9px !important;
        border-radius: 56px !important;
        margin-bottom: 15px !important;
        text-align: center;
        font-weight: 500
    }
    .m-t-30 {
        margin-top: 30px !important
    }
    .book-restult {
        padding: 30px 10px 20px 10px;
        padding-top: 30px;
        background: #fff;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 30px;
        border: 1px solid #dadde1 !important;
        position: relative;
        transform: translateY(0);
        transition: all .2s cubic-bezier(.4, 0, .2, 1)
    }
    .book-restult img {
        border-radius: 0;
        width: 100%
    }
    .book-restult .f_p_p {
        display: flex;
        height: 100%
    }
    .book-restult .f_p_p picture {
        align-self: center;
        width: 100%
    }
    .book_photo_container_results {
        width: 137px;
        height: 192px;
        border-radius: 6px;
        position: relative;
        overflow: hidden
    }
    .copyright_label {
        position: absolute;
        color: #fff;
        background: rgba(24, 188, 156, .7);
        bottom: 0;
        left: 0;
        right: 0;
        display: block;
        padding: 5px;
        font-size: 10px;
        text-align: center;
        font-weight: 600
    }
    .book_page_img_container_parent .copyright_label {
        font-size: 16px
    }
    label {
        font-weight: 500
    }
    .book_page_img_container {
        width: 180px;
        border-radius: 6px;
        position: relative;
        overflow: hidden
    }
    .book_data_table tr td:first-child {
        min-width: 150px;
        vertical-align: top;
        font-weight: 500
    }
    .book_data_table tr td {
        padding-top: 7px
    }
    .img-a {
        display: inline-block;
        padding: 2px;
        border: 1px solid #dadde1;
        border-radius: 7px;
        position: relative
    }
    .book-restult .book_rating_avg {
        color: #ffb400;
        position: absolute;
        top: 1px;
        left: 0;
        right: 0;
        margin: auto;
        font-size: 15px;
        line-height: 2.1
    }
    .book-restult .book_rating_count_book_result {
        color: #333
    }
    .book-restult .book_rating_count {
        color: #545454
    }
    .book-restult .book_rating_count .fa-users {
        color: #6d6d6d
    }
    .users_rating_ico {
        color: #929292;
        padding-right: 4px
    }
    .book-restult h3 {
        margin-top: 10px;
        height: 53px;
        font-size: 14px;
        color: #333;
        align-self: center;
        overflow: hidden
    }
    .book-restult p {
        color: #00b390;
        height: 23px;
        overflow: hidden;
        margin-bottom: 0
    }
    .book_results {
        margin-top: 40px
    }
    .head_side {
        font-size: 20px;
        margin-top: 0
    }
    .m-b-30 {
        margin-bottom: 30px !important
    }
    .m-b-15 {
        margin-bottom: 15px !important
    }
    .f-s-25 {
        font-size: 25px !important
    }
    .f-s-24 {
        font-size: 24px !important
    }
    .f-s-23 {
        font-size: 23px !important
    }
    .f-s-22 {
        font-size: 22px !important
    }
    .f-s-20 {
        font-size: 20px !important
    }
    .f-s-40 {
        font-size: 40px !important
    }
    .f-s-16 {
        font-size: 16px !important
    }
    .f-s-17 {
        font-size: 17px !important
    }
    .the-box {
        padding: 30px;
        background: #fff;
        border-radius: 4px;
        margin-bottom: 20px;
        border: 1px solid #dadde1;
        position: relative;
        overflow: hidden
    }
    .book_desc {
        margin-top: 20px;
        font-size: 17px
    }
    .under_img_title {
        font-size: 20px
    }
    .btn {
        border-radius: 4px;
        font-weight: 500
    }
    .share-title {
        margin-top: 0;
        margin-bottom: 30px
    }
    .f-s-70 {
        font-size: 70px !important
    }
    .l-h-50 {
        line-height: 50px !important
    }
    .m-t-0 {
        margin-top: 0 !important
    }
    .m-t-20 {
        margin-top: 20px !important
    }
    .m-b-20 {
        margin-bottom: 20px !important
    }
    .black-color {
        color: #333 !important
    }
    .m-b-0 {
        margin-bottom: 0 !important
    }
    h1 {
        font-size: 30px
    }
    .modal .close {
        position: absolute;
        top: 0;
        height: 40px;
        width: 40px;
        text-align: center
    }
    .breadcrumb {
        border-bottom: 0 solid #e8e8e8;
        margin-top: -15px;
        background-color: #fff !important;
        border: 1px solid #dadde1;
        border-radius: 4px;
        margin-bottom: 20px;
        font-weight: 500
    }
    a {
        color: #317d71
    }
    .footer {
        background: #fff;
        width: 100%;
        border-top: 1px solid #dadde1;
        padding: 20px;
        text-align: center;
        bottom: 0
    }
    .btn-group-lg > .btn, .btn-lg {
        padding: 20px 20px !important;
        font-size: 20px !important
    }
    .daftra .panel-heading {
        border-color: #fff !important
    }
    .daftra.panel {
        border-width: 4px !important
    }
    .f-s-18 {
        font-size: 18px !important
    }
    .danger {
        color: red !important
    }
    .loader {
        color: #1abc9c;
        margin: 10px;
        text-align: center;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -webkit-animation: fa-spin 2s infinite linear;
        animation: fa-spin 2s infinite linear;
        font-size: 30px
    }
    .loader:before {
        content: "\f021"
    }
    .done_message {
        margin: 20px 0;
        font-size: 20px
    }
    .starrr span {
        margin: 13px 1px auto 1px
    }
    .quotes, .reviews {
        background: #fff;
        border-radius: 4px;
        margin-bottom: 20px;
        position: relative;
        border: 1px solid #dadde1;
        padding: 1px
    }
    .quotes .empty, .reviews .empty {
        padding: 30px 10px
    }
    .quotes .quotes-box {
        padding: 30px
    }
    .reply_container .media-object, .reviews .media-object {
        border: 1px solid #dadde1;
        border-radius: 50%;
        padding: 1px
    }
    .reviews .add-review {
        padding: 30px 15px;
        border-bottom: 1px solid #dadde1
    }
    .reviews .media-heading {
        font-size: 16px;
        color: #1fbd9d;
        margin-bottom: 0
    }
    .reviews p {
        font-size: 15px
    }
    .quotes .view-more-quotes, .reply_container .view-more-replies, .reviews .view-more-reviews, .view-more-btn {
        text-align: center;
        cursor: pointer;
        background: #ceece7;
        color: #45b09e;
        font-size: 17px;
        padding: 15px;
        margin: auto 20px 20px 20px;
        border: 0;
        border-radius: 55px;
        transition: .3s;
        font-weight: 500
    }
    .quotes .view-more-quotes.disable_loading, .reviews .view-more-reviews.disable_loading {
        text-align: center;
        cursor: auto !important;
        background: #f1f1f1 !important;
        color: #868686 !important
    }
    .review_loading {
        font-size: 30px;
        color: #45b09e
    }
    .reviews .media-left {
        position: relative
    }
    .reviews small {
        color: #7b7b7b
    }
    .btn-group-xs, .btn-xs {
        border-radius: 0 !important
    }
    textarea {
        width: 100% !important
    }
    .media {
        margin-top: 30px
    }
    .reviews .review-stars {
        font-size: 28px;
        color: #ffb400
    }
    .reviews .all-users-rating {
        padding: 0 20px 30px 20px
    }
    .review_show .review-f-box, .review_show .review-s-box, .review_show .review-t-box {
        padding-bottom: 15px
    }
    .review_show .review-f-box .review_number_circle {
        display: inline-block;
        padding: 6px;
        border: 2px solid #ffb400;
        background: #fff;
        border-radius: 50%;
        font-size: 24px;
        margin-bottom: 8px;
        width: 60px;
        height: 60px;
        color: #ffb400;
        text-align: center
    }
    .reviews .user_review_content {
        font-size: 16px
    }
    .latest_quotes_tab .latest_quotes_tab_loader, .latest_reviews_tab .latest_reviews_tab_loader {
        padding: 30px;
        font-size: 30px;
        color: #45b09e
    }
    .review_show .review-f-box .review_box_stars {
        color: #ffb400;
        font-size: 20px
    }
    .review_show .review-f-box .review_box_total {
        color: #888
    }
    .review_show .review-s-box .review-progress {
        background-color: #e0e0e0;
        margin-bottom: 0;
        border-radius: 2px;
        box-shadow: none
    }
    .review_show .review-s-box .review-progress span {
        color: #7d7d7d;
        padding-left: 5px;
        padding-right: 5px;
        line-height: 2
    }
    .review_show .review-s-box .review-progress .progress-bar {
        background-color: #ffb400;
        box-shadow: none
    }
    .review_show .review-s-box .row .f-col, .review_show .review-s-box .row .s-col, .review_show .review-s-box .row .t-col {
        padding-left: 0;
        padding-right: 0
    }
    .review_show .review-s-box .row .s-col {
        padding-left: 10px;
        padding-right: 10px
    }
    .review_show .review-s-box .row:not(:last-child) {
        margin-bottom: 10px
    }
    .review_show .review-s-box {
        border-right: 1px solid #dadde1;
        border-left: 1px solid #dadde1
    }
    .book-first-details .book_rating, .media .book_rating {
        color: #ffb400
    }
    .book-first-details .book_rating .rating_num, .media .book_rating .rating_num {
        color: #333
    }
    .register_or {
        text-align: center;
        padding: 20px
    }
    .login_container {
        max-width: 700px;
        margin: auto
    }
    .upload_container {
        max-width: 800px;
        margin: auto
    }
    .login_container .the-box {
        margin-top: 30px
    }
    .m-r-5 {
        margin-right: 5px !important
    }
    .m-l-5 {
        margin-left: 5px !important
    }
    .m-l-10 {
        margin-left: 10px !important
    }
    .morecontent span {
        display: none
    }
    .morelink {
        display: inline-block;
        text-decoration: underline
    }
    .btn .fa {
        padding-left: 3px;
        padding-right: 3px
    }
    .dropdown-menu {
        border: 0;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
        border-radius: 4px;
        padding: 0;
        overflow: hidden
    }
    .dropdown-menu > li > a {
        padding: 10px 10px 10px 10px !important;
        font-size: 15px
    }
    .dropdown-menu .fa {
        padding-left: 5px !important
    }
    .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
        color: #262626;
        text-decoration: none;
        background-color: #45b09e;
        color: #fff
    }
    .dropdown-menu .divider {
        margin: 0
    }
    .similar-books {
        background: #fff;
        border: 0;
        font-size: 18px !important
    }
    .similar-books a {
        font-weight: 500;
        color: #616161;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        line-height: 2.2
    }
    .similar-books a i {
        padding-left: 5px
    }
    .share-title-addthis {
        color: #ff6550 !important;
        font-size: 25px !important;
        margin-top: 0;
        margin-bottom: 0
    }
    .rating-top-to-img {
        cursor: pointer;
        display: inline-block
    }
    .desk-book-view .media-left .book_page_img_container_parent {
        border: 1px solid #dadde1;
        border-radius: 7px;
        padding: 2px;
        position: relative
    }
    .book_details .media-object, .desk-book-view .media-object {
        margin: auto;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        height: 100%
    }
    .desk-book-view .media-heading {
        font-size: 25px;
        margin-bottom: 10px
    }
    hr {
        border-top: 1px solid #d8d7d7
    }
    .download_links hr {
        border-top: 2px solid #dadde1
    }
    .download_links h3 {
        margin-bottom: 0;
        margin-top: 0;
        font-size: 16px
    }
    .download_links .collection h3:not(:first-child) {
        margin-top: 16px
    }
    .p-0 {
        padding: 0 !important
    }
    .desk-book-view {
        position: relative
    }
    .num_downloads {
        position: absolute;
        left: 0;
        border-top: 1px solid #dadde1;
        border-right: 1px solid #dadde1;
        bottom: 0;
        padding: 5px 10px;
        background: #f1f1f1
    }
    .form-group {
        margin-bottom: 25px
    }
    .form-control {
        box-shadow: none !important;
        border: 1px solid #dadde1
    }
    .m-b-0 {
        margin-bottom: 0 !important
    }
    .p-b-0 {
        padding-bottom: 0 !important
    }
    .m-r-5 {
        margin-right: 5px !important
    }
    .m-l-5 {
        margin-left: 5px !important
    }
    .p-b-5 {
        padding-bottom: 5px !important
    }
    .m-b-10 {
        margin-bottom: 10px !important
    }
    .m-b-5 {
        margin-bottom: 5px !important
    }
    .well {
        box-shadow: none;
        border-radius: 2px
    }
    ul.typeahead {
        left: 0 !important;
        display: block;
        margin-right: 0 !important;
        margin-left: 0 !important;
        right: 0 !important;
        overflow: hidden
    }
    .dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover {
        background-color: #ededed;
        color: #333
    }
    .m-t-10 {
        margin-top: 10px !important
    }
    .p-t-5 {
        padding-top: 5px !important
    }
    .p-t-10 {
        padding-top: 10px !important
    }
    .p-t-0 {
        padding-top: 0 !important
    }
    .avatar_uploader_book_view {
        width: 60px;
        height: 60px
    }
    .profile-f-box {
        background: #fff;
        border-top: 3px solid #45b09e;
        border-right: 1px solid #dadde1;
        border-left: 1px solid #dadde1;
        margin-bottom: 30px;
        margin-top: 15px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px
    }
    .profile-f-box .profile_ident {
        padding: 40px 30px 30px 30px
    }
    .book_actions .btn {
        border-radius: 0 !important
    }
    .profile-book-status {
        background: #4caf50;
        color: #fff;
        padding: 10px 0
    }
    .search-a {
        color: #45b09e !important
    }
    a:focus, a:hover {
        color: #00886c
    }
    .book_next_prev .next_book, .book_next_prev .prev_book {
        position: fixed;
        background: #45b09e;
        color: #fff !important;
        bottom: 50%;
        margin-bottom: -53px;
        opacity: .5
    }
    .book_next_prev .next_book:hover, .book_next_prev .prev_book:hover {
        opacity: 1
    }
    .book_next_prev .next_book i, .book_next_prev .prev_book i {
        padding: 27px 15px 30px 15px;
        font-size: 45px
    }
    .book_next_prev .next_book {
        left: 0;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px
    }
    .book_next_prev .prev_book {
        right: 0;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px
    }
    .desk-book-view div.num_downloads span:nth-child(1):hover {
        text-decoration: underline;
        color: #45b09e
    }
    .my_lib .btn {
        border-radius: 0 !important;
        padding: 15px
    }
    .save_to_my_lib {
        position: absolute;
        top: 10px;
        font-size: 23px !important;
        cursor: pointer;
        background: #efefef;
        width: 45px;
        height: 45px;
        display: flex;
        border-radius: 100px
    }
    .save_to_my_lib i {
        margin: auto;
        align-self: center;
        vertical-align: middle
    }
    .book-restult:hover {
        border-color: #45b09e !important;
        transition: .3s;
        transform: translateY(-4px) !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05) !important
    }
    .settings_container .panel-body form {
        display: none
    }
    .settings_container {
        max-width: 900px;
        margin: auto
    }
    .settings_container .panel-heading {
        padding: 0 !important;
        background-color: #45b09e !important;
        color: #fff !important
    }
    .settings_container .panel-title a {
        display: block;
        padding: 15px
    }
    .settings_container .panel-title a:focus, .settings_container .panel-title a:hover, .settings_container .panel-title a:visited {
        color: #fff !important;
        text-decoration: none
    }
    .settings_container .panel-default {
        border-color: #45b09e;
        border-radius: 0;
        border-width: 2px
    }
    .settings_container .panel-default > .panel-heading {
        border-color: #45b09e !important;
        border-radius: 0
    }
    .settings_container .submit-btn {
        margin-top: 10px
    }
    .settings_container .panel-body {
        padding: 25px
    }
    .bootstrap-select .dropdown-toggle {
        border: 1px solid #dadde1 !important;
        height: 46px !important;
        padding: 10px 12px !important;
        outline: 0 !important
    }
    .bootstrap-select .dropdown-toggle:focus, .btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle {
        outline: 0 !important
    }
    .btn-group.open .dropdown-toggle {
        box-shadow: none !important;
        border: 1px solid #45b09e !important
    }
    .bootstrap-select .btn-default.active, .bootstrap-select .btn-default:active, .bootstrap-select .open > .dropdown-toggle.btn-default {
        background-color: #fff !important
    }
    .sell-contaner .bootstrap-select.btn-group .dropdown-toggle .caret {
        margin-top: -2px !important
    }
    .form-control:focus {
        box-shadow: none !important;
        border-color: #45b09e !important
    }
    .bootstrap-select div.dropdown-menu {
        border: 2px solid #45b09e !important
    }
    .profile_img_container {
        position: relative;
        display: inline-block
    }
    .profile_img_container:hover .profile_img_container_overlay {
        display: block
    }
    .profile_img_container_overlay {
        position: absolute;
        top: 0;
        border-bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        background: rgba(0, 0, 0, .41);
        z-index: 2;
        border-radius: 50%;
        display: none;
        cursor: pointer
    }
    .profile_img_container_overlay .fa {
        z-index: 3;
        color: #fff;
        position: absolute;
        top: calc(50% - 23px);
        left: 0;
        font-size: 46px;
        right: 0;
        margin: auto;
        text-align: center
    }
    .btn-group .btn {
        border-radius: 0 !important;
        border: 0
    }
    .crop_container {
        max-width: 300px;
        text-align: center;
        margin: auto;
        border: 1px solid #dadde1;
        padding-top: 15px
    }
    .close_choose_profile_img {
        position: absolute;
        left: 0;
        top: 0;
        font-size: 17px;
        color: #dcdada;
        padding: 5px 8px;
        cursor: pointer
    }
    .save_to_my_lib_parent2 {
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0
    }
    .save_to_my_lib_parent2 .dropdown-toggle {
        background: #f1f1f1;
        border: 0;
        border-right: 1px solid #dadde1;
        border-bottom: 1px solid #dadde1;
        font-size: 18px;
        border-radius: 0px !important;
        padding: 6px 10px;
        border-radius: 0 !important
    }
    .save_to_my_lib_parent2 .dropdown-toggle.btn-default.focus, .save_to_my_lib_parent2 .dropdown-toggle.btn-default:focus, .save_to_my_lib_parent2 .dropdown-toggle.btn-default:hover {
        background: #45b09e;
        border-right: 2px solid #45b09e;
        border-bottom: 2px solid #45b09e;
        color: #fff
    }
    .go_down_reviews {
        cursor: pointer;
        color: #45b09e
    }
    .count_book_btn {
        text-align: center;
        padding: 10px;
        font-weight: 500;
        display: block;
        cursor: pointer;
        transition: all ease-in-out .2s
    }
    .count_book_btn:hover {
        background: #ceece7
    }
    .count_book_btn_center {
        border-left: 2px solid #f1f1f1;
        border-right: 2px solid #f1f1f1
    }
    .upload-link-in-search {
        margin-top: 17px;
        font-size: 18px;
        background: #fff;
        color: #45b09e;
        padding: 5px 15px;
        border-radius: 4px;
        text-decoration: none;
        border: 1px solid #45b09e
    }
    .child-home-search-section {
        min-height: 450px;
        display: flex;
        align-items: center
    }
    .home_search_for {
        border: 2px solid #fff !important
    }
    .home-search-section h1, .home-search-section p {
        color: #fff
    }
    .home-search-section p {
        font-size: 35px
    }
    .content-home-search-section {
        margin: auto
    }
    .home-search-submit-btn {
        position: absolute;
        top: 0;
        margin: 0;
        height: 60px;
        font-size: 20px;
        border-radius: 100px !important;
        background: #45b09e !important;
        border-color: #45b09e !important;
        font-weight: 700;
        border: 1px solid #fff !important
    }
    .home_search_for-i {
        color: #45b09e;
        top: 16px;
        position: absolute;
        font-size: 25px !important
    }
    .span-home-search-keyword {
        font-size: 15px
    }
    ul.typeahead li a {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 17px !important;
        padding: 3px 10px !important
    }
    .facebook_box_container {
        position: relative;
        display: none
    }
    .facebook_box {
        position: fixed;
        bottom: 10px;
        right: 10px;
        border: 2px solid #3578e5;
        margin-bottom: 20px;
        width: 200px;
        background: #fff;
        border-radius: 2px;
        padding: 0;
        height: 57px
    }
    .facebook_box .facebook_icon {
        color: #fff;
        background: #3578e5;
        padding: 0 15px;
        display: inline-block;
        text-align: center;
        font-size: 30px;
        width: 25%
    }
    .facebook_box .close_facebook_box {
        font-size: 16px;
        color: #fff;
        background: #3578e5;
        padding: 12px 15px;
        display: inline-block;
        text-align: center;
        width: 25%
    }
    .facebook_box .facebook_like {
        display: inline-block;
        width: 45%
    }
    .not_found_alert img {
        display: block;
        text-align: center;
        width: 100px;
        height: 100px;
        margin: 20px auto 30px auto
    }
    .profile_quote_book_title {
        padding-top: 10px;
        display: block
    }
    .not_found_alert {
        text-align: center;
        background: #fff;
        border: 1px solid #dadde1;
        font-size: 19px
    }
    .navbar-default .navbar-nav > li > a {
        color: #333;
        font-weight: 500;
        z-index: 1001
    }
    .alert .close {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 7px;
        font-size: 14px;
        font-weight: 600
    }
    .trans_page, .trans_page:active, .trans_page:focus, .trans_page:hover, .trans_page:visited {
        background: #45b09e;
        color: #fff;
        padding: 3px 13px 6px 13px;
        text-decoration: none;
        border-bottom-left-radius: 5px;
        position: absolute;
        top: -30px;
        border-bottom-right-radius: 5px;
        z-index: 10;
        font-weight: 500
    }
    .top_header .container {
        position: relative
    }
    .croppie-container .cr-slider-wrap {
        padding-bottom: 15px
    }
    .cr-slider {
        padding-top: 15px !important;
        padding-bottom: 15px !important
    }
    .profile_upload_book_btn {
        border: 2px solid #fff;
        border-radius: 0;
        display: block;
        background: #fff;
        text-align: center;
        padding-top: 50px;
        padding-bottom: 50px;
        text-decoration: none;
        border-radius: 5px
    }
    #downloadModal .progress-bar {
        background-color: #45b09e !important
    }
    #downloadModal .progress {
        background-color: #ececec;
        box-shadow: none !important;
        border-radius: 50px
    }
    .internal_download_link {
        display: block;
        background: #ededed;
        padding: 10px;
        border-radius: 50px;
        text-decoration: none
    }
    .internal_download_link:hover {
        text-decoration: none
    }
    .btn-notification {
        margin-left: 0;
        margin-right: 7px;
        padding-left: 10px !important;
        padding-right: 14px;
        position: relative;
        text-align: center
    }
    .btn-messages {
        margin-left: 7px;
        margin-right: 7px;
        padding-left: 10px !important;
        padding-right: 14px;
        position: relative;
        text-align: center
    }
    .btn-messages .fa, .btn-notification .fa {
        position: absolute;
        font-size: 22px;
        top: 9px;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center
    }
    .notification_number {
        position: absolute;
        background: #e74c3c;
        border-radius: 50px;
        padding: 0;
        color: #fff;
        font-size: 12px;
        min-width: 13px;
        left: 23px;
        top: 4px;
        width: 18px;
        height: 18px;
        line-height: 18px;
        font-weight: 700;
        text-align: center
    }
    .share-icons .fa-copy, .share-icons .fa-facebook, .share-icons .fa-linkedin, .share-icons .fa-share-alt, .share-icons .fa-twitter, .share-icons .fa-whatsapp {
        width: 44px;
        height: 44px;
        color: #fff;
        border-radius: 5px;
        text-align: center;
        font-size: 27px !important;
        padding: 8px;
        margin: 3px
    }
    .share-icons .fa-whatsapp {
        background: #25d366
    }
    .share-icons .fa-share-alt {
        background: #45b09e
    }
    .share-icons .fa-facebook {
        background: #3578e5
    }
    .share-icons .fa-twitter {
        background: #00acee
    }
    .share-icons .fa-linkedin {
        background: #0e76a8
    }
    .share-icons .fa-copy {
        background: #999
    }
    .modal.fade .modal-dialog {
        -webkit-transform: translate(0);
        -moz-transform: translate(0);
        transform: translate(0)
    }
    .close_noor_alert {
        position: relative
    }
    .close_noor_alert .fa {
        background: #777;
        padding: 5px 7px;
        border-radius: 9px;
        position: absolute;
        top: -11px;
        right: -10px;
        font-size: 15px;
        cursor: pointer
    }
    .noor-alert-messsage {
        padding: 20px
    }
    .noor-alert {
        text-align: center;
        left: 50%;
        margin-left: -350px;
        position: fixed;
        width: 700px;
        top: 80px;
        font-size: 20px;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .2), 0 1px 1px 0 rgba(0, 0, 0, .14), 0 2px 1px -1px rgba(0, 0, 0, .12);
        -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .2), 0 1px 1px 0 rgba(0, 0, 0, .14), 0 2px 1px -1px rgba(0, 0, 0, .12);
        z-index: 1003;
        color: #fff;
        opacity: .9;
        transition: opacity .6s;
        border-radius: 4px
    }
    .dropdown-menu.open {
        z-index: 1002
    }
    .noor_alert_prog {
        border-top: 5px solid #777;
        content: "";
        display: block;
        width: 0%;
        border-radius: 50px
    }
    .choos-star-box {
        border: 2px solid #dadde1;
        margin: 15px;
        padding: 5px;
        display: block;
        border-radius: 50px;
        text-align: center;
        color: #dadde1;
        font-size: 28px;
        cursor: pointer
    }
    .choos-star-box:hover {
        border: 2px solid #45b09e !important;
        cursor: pointer
    }
    .quote_text_area {
        position: relative
    }
    .quote_text_area .fa {
        color: #45b09e
    }
    .quote_text_area .fa-quote-left {
        position: absolute;
        position: absolute;
        top: -15px
    }
    .quote_text_area .fa-quote-right {
        position: absolute;
        bottom: -17px
    }
    .tag_box {
        padding: 0 !important;
        background: 0 0;
        border: none;
        overflow: visible;
        display: block;
        margin-bottom: 30px;
        overflow-x: auto !important;
        white-space: nowrap
    }
    .tag_btn {
        text-decoration: none;
        padding: 2px 7px;
        border-radius: 4px;
        color: #45b09e;
        background: #fff;
        display: inline-block;
        margin-bottom: 8px;
        background: #f1f1f1;
        font-size: 15px
    }
    .tag_btn:hover {
        text-decoration: none;
        background: #ceece7;
        cursor: pointer;
        border-color: #45b09e
    }
    .single-quote:not(:last-child) {
        margin-bottom: 30px
    }
    .single-quote {
        font-size: 18px;
        border: 1px solid #dadde1;
        border-radius: 4px;
        overflow: hidden;
        background: #fff
    }
    .quote-content {
        color: #333;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center
    }
    .quote-content-child {
        background-color: rgba(255, 255, 255, .65);
        padding: 10px;
        border-radius: 4px
    }
    .opacity_background_quote {
        background-color: rgba(255, 255, 255, .9);
        padding: 10px
    }
    .quote_bottom_btns {
        border-top: 1px solid #f1f1f1
    }
    .quote-bottom-btn, .quote-bottom-btn-download {
        padding: 7px 14px;
        display: inline-block;
        text-decoration: none
    }
    .quote-bottom-btn-download:focus, .quote-bottom-btn:focus {
        text-decoration: none
    }
    .quote-content i.fa-quote-left, .quote-content i.fa-quote-right {
        color: #45b09e
    }
    .quote_bottom_btns .quote_adder {
        padding: 8px 15px;
        display: block;
        height: 47px;
        max-width: 150px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
    .quote_bottom_btns .quote_book_title {
        padding: 8px 15px;
        display: block;
        height: 47px;
        max-width: 300px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: flex
    }
    .quote_bottom_btns .quote_book_title i, .quote_bottom_btns .quote_book_title span {
        align-self: center
    }
    .quote_bottom_btns .quote_book_title span {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }
    .quote_bottom_btns a:hover {
        text-decoration: none;
        background: #ceece7
    }
    .single-quote:hover {
        border-color: #45b09e
    }
    .pointer {
        cursor: pointer
    }
    .noor-tabs .s-tab {
        text-align: center;
        display: block;
        cursor: pointer;
        padding: 15px 10px;
        color: #333;
        text-decoration: none
    }
    .noor-tabs .col-xs-3, .noor-tabs .col-xs-4, .noor-tabs .col-xs-6, .noor-tabs .row {
        margin: 0;
        padding: 0
    }
    .noor-tabs {
        border-bottom: 2px solid #dadde1
    }
    .noor-tabs .s-tab.active {
        color: #45b09e;
        text-decoration: none
    }
    .noor-tabs .s-tab.active:after {
        border-bottom: 2px solid #45b09e;
        bottom: -2px;
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        right: 0;
        left: 0;
        transition: all ease-in-out .2s
    }
    .noor-tabs .s-tab:hover:after {
        width: 100%;
        right: 0;
        left: 0;
        text-decoration: none
    }
    .noor-tabs .s-tab:after {
        border-bottom: 2px solid #45b09e;
        bottom: -2px;
        content: "";
        display: block;
        position: absolute;
        width: 0%;
        right: 0;
        left: 0;
        margin: auto;
        transition: width .5s
    }
    .noor-tabs .s-tab:hover {
        color: #45b09e;
        text-decoration: none
    }
    .user_avatar {
        width: 45px;
        height: 45px
    }
    .breadcrumb > li + li:before {
        padding: 0 3px;
        color: #ccc;
        font-size: 20px;
        content: "»"
    }
    .navbar-collapse {
        padding-left: 0;
        padding-right: 0
    }
    .inside_rating_profile {
        padding: 30px 20px 30px 20px !important
    }
    .start_download_notification {
        position: absolute;
        top: 50px;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        z-index: 1
    }
    .start_download_notification span {
        background: #000;
        color: #fff;
        padding: 12px 20px;
        font-size: 18px;
        border-radius: 100px;
        opacity: .6;
        z-index: 10;
        font-weight: 500
    }
    .lds-ellipsis {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px
    }
    .lds-ellipsis div {
        position: absolute;
        top: 33px;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background: #45b09e;
        animation-timing-function: cubic-bezier(0, 1, 1, 0)
    }
    .lds-ellipsis div:nth-child(1) {
        left: 8px;
        animation: lds-ellipsis1 .6s infinite
    }
    .lds-ellipsis div:nth-child(2) {
        left: 8px;
        animation: lds-ellipsis2 .6s infinite
    }
    .lds-ellipsis div:nth-child(3) {
        left: 32px;
        animation: lds-ellipsis2 .6s infinite
    }
    .lds-ellipsis div:nth-child(4) {
        left: 56px;
        animation: lds-ellipsis3 .6s infinite
    }
    @keyframes lds-ellipsis1 {
        0% {
            transform: scale(0)
        }
        100% {
            transform: scale(1)
        }
    }
    @keyframes lds-ellipsis3 {
        0% {
            transform: scale(1)
        }
        100% {
            transform: scale(0)
        }
    }
    @keyframes lds-ellipsis2 {
        0% {
            transform: translate(0, 0)
        }
        100% {
            transform: translate(24px, 0)
        }
    }
    .navbar-nav > li > a {
        padding-top: 16px;
        padding-bottom: 16px
    }
    .navbar {
        min-height: 52px;
        border-radius: 0;
        border: 1px;
        box-shadow: rgba(0, 0, 0, .04) 0 3px 6px;
        background: #fff;
        border-top: 1px solid #e8e8e8;
        border-bottom: 2px solid #e8e8e8
    }
    nav.affix {
        border-top: 0 !important;
        border-bottom: 2px solid #e0e2e5
    }
    .p-30 {
        padding: 30px !important
    }
    .p-5 {
        padding: 5px !important
    }
    .book_header_tabs {
        border-top: 2px solid #f1f1f1
    }
    .book_header_tabs .col-xs-4 {
        padding: 0
    }
    .m-0 {
        margin: 0 !important
    }
    .category-box:hover {
        text-decoration: none
    }
    .category-box {
        display: block;
        text-align: center
    }
    .category-box .book-restult {
        padding-top: 15px;
        padding-bottom: 15px;
        height: 180px;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex
    }
    .category-box .book-restult p {
        position: absolute;
        bottom: 10px;
        left: 10px;
        right: 10px;
        margin-left: auto;
        margin-right: auto
    }
    .category-box .book-restult h3 {
        align-self: center;
        margin: auto !important;
        height: auto !important
    }
    .no_more_result_scroll {
        text-align: center;
        background: #ddd;
        padding: 30px;
        border-radius: 4px;
        margin-bottom: 10px
    }
    .no_more_result_scroll a {
        background: #fff;
        border-radius: 4px;
        margin: 3px;
        padding: 10px 20px;
        display: block;
        text-decoration: none;
        font-size: 18px
    }
    .no_more_result_scroll > p {
        padding-bottom: 0;
        margin-bottom: 15px;
        font-size: 20px
    }
    .no_more_result_scroll > img {
        width: 80px;
        height: 80px;
        margin-bottom: 10px
    }
    .load_more_scroll_loader {
        margin-bottom: 100px
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
        background: 0 0
    }
    #myNavbar > ul > li.active:after {
        border-bottom: 2px solid #45b09e;
        bottom: -2px;
        content: "";
        display: block;
        position: absolute;
        width: 80%;
        left: 0;
        right: 0;
        margin: auto
    }
    .my_acc_btn {
        position: relative
    }
    .my_acc_btn img {
        position: absolute;
        width: 26px;
        height: 26px;
        border: 1px solid #fff;
        border-radius: 50%;
        top: 7px
    }
    .notifications .single-notification {
        padding: 20px
    }
    .notifications .single-notification {
        border-bottom: 1px solid #eee
    }
    .notifications .single-notification h4 {
        font-size: 17px
    }
    .notifications .single-notification p {
        font-size: 16px
    }
    .notifications .a-note {
        color: inherit;
        text-decoration: none;
        display: block
    }
    .notifications .a-note:hover {
        color: inherit;
        text-decoration: none;
        cursor: pointer;
        background: #f7fffe
    }
    .notifications .from_time {
        font-size: 15px;
        color: #949494;
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif
    }
    .bar {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 6px;
        background: #ceece7;
        overflow: hidden;
        z-index: 10
    }
    .bar div:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        background: #45b09e;
        animation: box-1 2.1s cubic-bezier(.65, .81, .73, .4) infinite
    }
    .bar div:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        background: #45b09e;
        animation: box-2 2.1s cubic-bezier(.16, .84, .44, 1) infinite;
        animation-delay: 1.15s
    }
    @keyframes box-1 {
        0% {
            left: -35%;
            right: 100%
        }
        100%, 60% {
            left: 100%;
            right: -90%
        }
    }
    @keyframes box-2 {
        0% {
            left: -200%;
            right: 100%
        }
        100%, 60% {
            left: 107%;
            right: -8%
        }
    }
    .no_more_notfications {
        background: #e1e1e1;
        text-align: center;
        padding: 15px 5px
    }
    .top_bar {
        background: #45b09e;
        height: 3px;
        width: 100%
    }
    #meta_data {
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif
    }
    .notifications-img {
        width: 60px
    }
    .profile .profile_details .single_details {
        background: #f8f8f8;
        padding: 7px 10px;
        margin: auto;
        border-radius: 20px;
        text-align: center;
        overflow: hidden;
        position: relative;
        color: #000;
        font-size: 15px;
        height: 70px;
        display: flex
    }
    .profile .profile_details .single_details .svg_img {
        position: absolute;
        overflow: hidden;
        width: 90px;
        opacity: .1;
        left: 3px;
        top: 5px;
        height: 90px;
        z-index: 2
    }
    .profile .profile_details .single_details .inside_sigle_details {
        z-index: 3;
        position: relative;
        margin: auto;
        align-self: center
    }
    .star_color {
        color: #ffb400
    }
    .profile .main_profile_img .img-circle {
        border: solid 1px #dadde1;
        padding: 1px;
        background-clip: content-box;
        background-color: #fff;
        width: 154px;
        height: 154px
    }
    .profile .profile-send-msg-btn {
        width: 200px;
        border-radius: 100px
    }
    .profile .main_profile_img .guarantee {
        position: absolute;
        width: 35px;
        right: 0;
        top: 67%;
        background: #fff;
        border-radius: 60px;
        padding: 2px;
        border: 1px solid #dadde1
    }
    .the_box_achievments {
        background: #fff;
        border-top: 1px solid #dadde1;
        border-right: 1px solid #dadde1
    }
    .the_box_achievments .row {
        margin: 0;
        padding: 0
    }
    .the_box_achievments .row .col-xs-4 {
        margin: 0;
        padding: 0;
        border-left: 1px solid #dadde1;
        border-bottom: 1px solid #dadde1;
        overflow: hidden;
        text-align: center;
        display: flex;
        padding: 15px;
        align-self: center
    }
    .the_box_achievments img {
        width: 40px;
        height: 40px;
        margin: auto
    }
    .achievments_title {
        background: #fff;
        padding: 15px;
        border-top: 1px solid #dadde1;
        border-left: 1px solid #dadde1;
        border-right: 1px solid #dadde1;
        border-top-right-radius: 4px;
        border-top-left-radius: 4px;
        font-size: 18px
    }
    .writer-box .writer_avatar {
        width: 100px;
        height: 100px;
        border-radius: 100px;
        border: 1px solid #dadde1;
        margin: auto;
        position: relative
    }
    .writer-box .guarantee {
        width: 25px;
        height: 25px;
        position: absolute;
        right: 0;
        top: 67%;
        background: #fff;
        border-radius: 50%;
        padding: 1px;
        border: 1px solid #dadde1
    }
    .writer-box .writer_avatar .writer_avatar_img {
        width: 100%;
        height: 100%;
        border-radius: 100px;
        padding: 2px
    }
    .writer-box .book_rating_avg {
        bottom: auto;
        top: auto;
        padding-top: 15px;
        border-top: 1px solid #dadde1;
        position: static;
        padding-bottom: 5px
    }
    .writer-box h3 {
        height: 55px;
        margin-top: 15px;
        margin-bottom: 15px
    }
    .ratings_stars {
        position: relative;
        vertical-align: middle;
        display: inline-block;
        color: #e0e0e0;
        overflow: hidden;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased
    }
    .full-stars {
        position: absolute;
        top: 0;
        white-space: nowrap;
        overflow: hidden;
        color: #ffb400
    }
    .empty-stars:before, .full-stars:before {
        content: "\f005\f005\f005\f005\f005"
    }
    @-moz-document url-prefix() {
        .full-stars {
            color: #ffb400
        }
    }
    .three_circle .btn {
        width: 180px;
        height: 180px;
        margin: auto;
        display: flex;
        border-radius: 50%;
        text-align: center;
        border: 10px double #fff !important
    }
    .three_circle .single_circle {
        align-self: center;
        margin: auto
    }
    .three_circle .single_circle img {
        width: 50px;
        height: 50px
    }
    .three_circle .single_circle span {
        font-size: 20px
    }
    .s-tab img {
        width: 100%;
        height: 100%
    }
    .s-tab .tab_img_span {
        width: 45px;
        height: 45px;
        margin-bottom: 5px;
        display: inline-block
    }
    .community .scores_c {
        border-top: 1px solid #dadde1;
        padding-top: 15px;
        font-size: 13px;
        padding-right: 15px;
        padding-left: 15px
    }
    .community .scores_c .col-xs-4, .community .scores_c .col-xs-5, .community .scores_c .col-xs-6, .community .scores_c .col-xs-7, .community .scores_c .col-xs-8 {
        padding-right: 0;
        padding-left: 0
    }
    .book-restult .aprove_book {
        position: absolute;
        width: 24px;
        height: 24px;
        background: #fff;
        border-radius: 50%;
        right: calc(50% - 12px);
        bottom: -11px;
        padding: 1px;
        border: 1px solid #dadde1;
        z-index: 3
    }
    .book_page_img_container_parent .aprove_book {
        position: absolute;
        width: 30px;
        height: 30px;
        background: #fff;
        border-radius: 50%;
        right: calc(50% - 15px);
        bottom: -15px;
        padding: 1px;
        border: 1px solid #dadde1;
        z-index: 3
    }
    .the_upload_book .guarantee {
        position: absolute;
        width: 20px;
        height: 20px;
        z-index: 2;
        top: 67%;
        right: 0;
        background: #fff;
        border-radius: 50%;
        padding: 1px
    }
    .the_upload_book a {
        display: block;
        position: relative;
        z-index: 1
    }
    #scroll_download_here {
        border-bottom: 1px solid #dbdee2;
        padding-bottom: 40px;
        padding-top: 40px
    }
    .ad_background_befor_download {
        background: #f1f1f1;
        padding-bottom: 30px;
        padding-top: 35px;
        margin-left: -30px;
        margin-right: -30px
    }
    .readModal .the_modal_nav {
        height: 60px;
        display: flex;
        border-bottom: 1px solid rgba(0, 0, 0, .2)
    }
    .readModal .the_modal_nav .modal_nav_header_items {
        align-self: center;
        padding-left: 10px;
        padding-right: 10px;
        width: 100%
    }
    .readModal .modal-body {
        max-height: calc(100vh - 60px);
        overflow-y: auto;
        overflow-x: hidden
    }
    .readModal .modal-content {
        height: 100vh
    }
    .readModal .modal-dialog {
        height: 100%;
        margin-top: 0;
        margin-bottom: 0
    }
    .readModal {
        padding: 0 !important
    }
    .readModal .modal-content {
        border-radius: 0 !important;
        padding: 0
    }
    .readModal .modal-content .modal-body {
        padding: 0
    }
    .readModal .modal-content .modal-body .page_img {
        border-bottom: 3px solid rgba(0, 0, 0, .2);
        position: relative
    }
    .readModal .modal-content .lds-ellipsis {
        display: block;
        margin: auto
    }
    .readModal .modal-content .loading_read {
        margin-bottom: 0;
        margin-top: 0;
        padding-top: 40px
    }
    .the_modal_nav .select_page_number {
        margin: 0
    }
    .modal_nav_header_items .row {
        display: flex
    }
    .modal_nav_header_items .row .col-xs-4 {
        align-self: center
    }
    .readModal .modal-dialog .modal_nav_header_items .read-back-btn {
        height: 46px;
        display: flex
    }
    .readModal .modal-dialog .modal_nav_header_items .read-back-btn i, .readModal .modal-dialog .modal_nav_header_items .read-back-btn span {
        align-self: center
    }
    .readModal .modal-dialog .modal_nav_header_items .read-back-btn span {
        margin: auto
    }
    .readModal .modal-dialog .read_book_modal_title {
        padding: 20px 10px 10px 10px;
        margin: 0;
        text-align: center
    }
    .readModal .modal-dialog .read_book_num_pages {
        margin-top: 0;
        text-align: center;
        border-bottom: 3px solid rgba(0, 0, 0, .2);
        margin-bottom: 0;
        padding-bottom: 20px;
        font-size: 20px
    }
    .readModal .modal-dialog .modal-body .page_img .read_page_num {
        background: #000;
        color: #fff;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 0;
        margin: auto;
        width: 83px;
        text-align: center;
        opacity: .2;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif
    }
    .readModal .modal-dialog .modal-body .page_img .read_loader {
        padding-top: 50px
    }
    .search_form_group {
        margin-bottom: 0 !important;
        position: relative
    }
    .search_form_group .btn-div {
        display: flex;
        height: 100%;
        position: absolute;
        left: 8px;
        top: 0
    }
    .search_form_group .btn-div .btn {
        align-self: center
    }
    .btn-default {
        border-color: #dadde1
    }
    .writer_photo {
        width: 100px;
        height: 100px;
        border: 1px solid #dadde1;
        padding: 1px;
        border-radius: 50%
    }
    .home_titles h1, .home_titles h2 {
        margin-bottom: 0;
        margin-top: 0;
        color: #fff;
        text-align: center
    }
    .home_titles {
        margin-bottom: 30px
    }
    .home_titles h2 {
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif
    }
    .canel_in_search {
        display: flex;
        height: 100%;
        position: absolute;
        top: 0
    }
    .canel_in_search img {
        height: 35px;
        width: 35px;
        align-self: center
    }
    .rating-background {
        background: #f1f1f1;
        border-radius: 4px;
        padding: 15px
    }
    .user_action_for_book {
        background: #fff;
        border: 1px solid #dadde1;
        border-radius: 4px;
        margin-bottom: 20px;
        text-align: center;
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        overflow: hidden
    }
    .user_action_for_book .col-xs-4 {
        padding: 0;
        margin: 0
    }
    .user_action_for_book a .read-btn {
        background: #f1f1f1;
        margin: 5px;
        display: inline-block;
        padding: 2px 10px;
        border-radius: 50px
    }
    .user_action_for_book a {
        display: block;
        padding: 10px;
        text-decoration: none
    }
    .user_action_for_book a:hover {
        background: #ceece7 !important
    }
    .user_action_for_book img {
        width: 60px
    }
    .last_search_suggest {
        text-align: right
    }
    .last_search_suggest .col-md-6 {
        padding-left: 5px;
        padding-right: 5px
    }
    .last_search_suggest .col-md-6 a {
        font-size: 15px
    }
    .modal-donate {
        display: inline-block;
        background: #00a587;
        padding: 10px 15px;
        border-radius: 15px;
        color: #fff;
        font-size: 17px
    }
    .center_menu .modal-content {
        border-radius: 12px;
        padding: 0;
        overflow: hidden
    }
    .center_menu .modal-content a {
        display: block;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
        font-size: 17px
    }
    .center_menu .modal-content a:hover {
        background: #f1f1f1;
        overflow: hidden
    }
    .center_menu .modal-content a:not(:last-child) {
        border-bottom: 1px solid #ddd
    }
    .modal-open .in.center-modal {
        display: flex !important
    }
    .modal-open .in.center-modal .modal-dialog {
        align-self: center
    }
    .navbar-brand {
        height: 52px;
        padding: 16px 16px;
        font-size: 18px;
        line-height: 20px;
        border-left: 1px solid #e8e8e8;
        border-right: 1px solid #e8e8e8;
        margin-right: 0 !important;
        margin-left: 0 !important
    }
    .desk-book-view .media {
        overflow: visible
    }
    .flex-wrapper {
        display: flex;
        flex-flow: row nowrap;
        margin-bottom: 5px
    }
    .single-chart {
        width: 100%;
        justify-content: space-around
    }
    .circular-chart {
        display: block;
        margin: auto;
        max-width: 90%;
        max-height: 80px
    }
    .circle-bg {
        fill: none;
        stroke: #e0e0e0;
        stroke-width: 2.5
    }
    .circle {
        fill: none;
        stroke-width: 2.5;
        stroke-linecap: round;
        animation: progress 1s ease-out forwards
    }
    @keyframes progress {
        0% {
            stroke-dasharray: 0 100
        }
    }
    .circular-chart.orange .circle {
        stroke: #ffb400
    }
    .percentage {
        fill: #666;
        font-family: sans-serif;
        font-size: .5em;
        text-anchor: middle
    }
    .trans_page, .trans_page:active, .trans_page:focus, .trans_page:hover, .trans_page:visited {
        right: 15px
    }
    .content-home-search-section h1 {
        font-size: 35px
    }
    .home-search-submit-btn {
        right: 0
    }
    .home_search_for-i {
        left: 22px
    }
    .home_search_for {
        padding-left: 55px;
        border-radius: 100px
    }
    .modal .close {
        right: 0
    }
    .modal-title:after, .u-line:after {
        left: 0
    }
    .facebook_box .close_facebook_box, .side_results i {
        float: right
    }
    .noor-btn {
        padding-right: 14px
    }
    .bootstrap-select.btn-group .dropdown-toggle .caret {
        right: 12px !important;
        left: auto !important
    }
    .bootstrap-select > .dropdown-toggle {
        padding-right: 25px !important;
        padding-left: 15px !important;
        outline: 0 !important
    }
    .modal-footer {
        text-align: left
    }
    .text-left {
        text-align: right
    }
    .text-right {
        text-align: left
    }
    .desk-book-view .media-left {
        padding-right: 30px;
        padding-left: 0
    }
    .save_to_my_lib {
        right: 10px
    }
    .book_data_table tr td:first-child {
        padding-right: 5px
    }
    .pull-left {
        float: right !important
    }
    .pull-right {
        float: left !important
    }
    .add-btns button:not(:last-child) {
        margin-right: 10px
    }
    .media-left, .media > .pull-left {
        padding-right: 20px
    }
    .quote_text_area .fa-quote-left {
        left: 0
    }
    .quote_text_area .fa-quote-right {
        right: 0
    }
    .tag_btn:not(:last-child) {
        margin-right: 6px
    }
    .quote-bottom-btn {
        border-right: 1px solid #f1f1f1
    }
    .quote-bottom-btn-download, .quote_bottom_btns .quote_adder {
        border-left: 1px solid #f1f1f1
    }
    .mob-nav .nav-item:not(:last-child) {
        border-right: 1px solid rgba(0, 0, 0, .1) !important;
        border-left: 0 solid rgba(0, 0, 0, .1) !important
    }
    .login_actions_place .login_actions_place_loader {
        left: 0;
        right: auto
    }
    .sign-up-menu {
        left: 0;
        right: auto
    }
    .trans_page_mob {
        right: 0 !important;
        left: auto
    }
    .in-profile-rating .user-rating-view-box {
        border-left: 3px solid #dadde1;
        padding-left: 20px
    }
    .my_acc_btn img {
        left: 9px
    }
    .profile .main_profile_img .guarantee, .the_upload_book .guarantee, .writer-box .guarantee {
        right: auto;
        left: 0
    }
    .search_form_group .btn-div {
        display: flex;
        height: 100%;
        position: absolute;
        right: 9px;
        left: auto;
        top: 0
    }
    #mainListModal .single_list {
        font-size: 16px !important
    }
    .mob_nav_num {
        margin-right: unset !important;
        padding-left: unset !important;
        margin-left: auto;
        padding-right: 15px
    }
    .search_form_group .in_search {
        padding-left: 50px
    }
    .canel_in_search {
        left: 8px
    }
    .last_search_suggest {
        text-align: left
    }
    .price-btn {
        background: #ff7186;
        color: #f1f1f1;
        padding: 5px 5px;
        border-radius: 50px;
        display: block;
        font-weight: 700;
        font-size: 18px
    }
    .donation_panel a {
        text-decoration: none
    }
    .donation_panel a:hover {
        text-decoration: none
    }
    .donation_panel .price-btn:hover {
        opacity: .9
    }
    .donation_panel {
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: none;
        border-bottom: 3px solid #ddd;
        border-radius: 0
    }
    .count_book_btn_copyright {
        background: #f1f1f1;
        border-radius: 100px
    }
    .seach_keywords_suggestion a {
        display: inline-block;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 100px;
        padding: 8px 18px;
        margin-right: 5px
    }
    .seach_keywords_suggestion a:hover {
        text-decoration: none
    }
    .seach_keywords_suggestion {
        display: block;
        margin-bottom: 30px;
        overflow-x: auto;
        white-space: nowrap;
        padding-bottom: 15px
    }
    #readModal .modal-body {
        overflow-x: auto
    }
    #readModal .modal-dialog .modal-body .page_img img {
        border-bottom: 3px solid rgba(0, 0, 0, .2)
    }
    .panel.with-nav-tabs .panel-heading {
        padding: 5px 5px 0 5px
    }
    .panel.with-nav-tabs .nav-tabs {
        border-bottom: none
    }
    .panel.with-nav-tabs .nav-justified {
        margin-bottom: -1px
    }
    .with-nav-tabs.panel-default .nav-tabs > li > a, .with-nav-tabs.panel-default .nav-tabs > li > a:focus, .with-nav-tabs.panel-default .nav-tabs > li > a:hover {
        color: #777
    }
    .with-nav-tabs.panel-default .nav-tabs > .open > a, .with-nav-tabs.panel-default .nav-tabs > .open > a:focus, .with-nav-tabs.panel-default .nav-tabs > .open > a:hover, .with-nav-tabs.panel-default .nav-tabs > li > a:focus, .with-nav-tabs.panel-default .nav-tabs > li > a:hover {
        color: #777;
        background-color: #ddd;
        border-color: transparent
    }
    .with-nav-tabs.panel-default .nav-tabs > li.active > a, .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus, .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover {
        color: #555;
        background-color: #fff;
        border-color: #ddd;
        border-bottom-color: transparent
    }
    .book_copies_section .with-nav-tabs {
        margin-bottom: 0;
        border-radius: 0;
        border-right: 0;
        border-left: 0
    }
    .pages_from_to {
        display: inline-block;
        text-align: center;
        background: #f1f1f1;
        padding: 5px;
        margin: 2px;
        border-radius: 7px;
        cursor: pointer;
        font-size: 13px
    }
    .pages_from_to:hover {
        background: #ceece7
    }
    .m-l-0 {
        margin-left: 0 !important
    }
    .m-r-0 {
        margin-right: 0 !important
    }
    .p-l-0 {
        padding-left: 0 !important
    }
    .p-r-0 {
        padding-right: 0 !important
    }
    .reply_modal .book_details {
        display: flex
    }
    .book_details .book_title, .book_details img {
        align-self: center;
        display: flex
    }
    .book_details .book_title {
        padding-left: 15px;
        padding-right: 15px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block
    }
    .book_details img {
        border: 1px solid #ddd;
        border-radius: 4px
    }
    .reply_container .reply_textarea {
        background: #f1f1f1;
        border-color: #f1f1f1;
        border-radius: 10px
    }
    .reply_container .media, .reply_container .media-body {
        overflow: visible
    }
    .reply_container .reply_edit_menu {
        display: inline-block
    }
    .reply_container .reply_edit_menu .btn {
        border: 0;
        color: #777
    }
    .reply_container .reply_edit_menu .dropdown-menu {
        min-width: 100px
    }
    .reply_container {
        padding: 30px
    }
    .chat_style .media-body {
        background: #f1f1f1;
        border-radius: 10px;
        padding: 8px 15px 10px 15px
    }
    .chat_style .media-left, .media > .pull-left {
        padding-left: 0;
        padding-right: 15px
    }
    .chat_style .media-heading {
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 0;
        line-height: 1.6;
        height: 26px
    }
    .chat_style .media-object {
        border: 1px solid #f1f1f1;
        border-radius: 100px;
        padding: 0
    }
    .chat_style .dropdown-toggle {
        background: #f1f1f1
    }
    .chat_style .job_title {
        display: block;
        color: #777;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 230px
    }
    .chat_style .media-heading-user-name a {
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 135px
    }
    .chat_style .media_content {
        padding-top: 8px
    }
    .good_bad_rate_no_reply .btn-group {
        border: 1px solid #dadde1;
        border-radius: 4px;
        overflow: hidden
    }
    .add_app_btn {
        width: 290px;
        margin: 15px auto 25px auto;
        background: #f1f1f1;
        padding: 20px;
        border-radius: 50px;
        color: #45b09e;
        border: 1px solid #ddd
    }
    .add_app_btn .bg-logo {
        background: #45b09e;
        display: inline-block;
        width: 90px;
        height: 90px;
        padding: 15px;
        border-radius: 100px
    }
    .add_app_btn .bg-logo img {
        width: 100%;
        height: 100%
    }
    .add_app_btn .add_app_text {
        font-size: 18px;
        font-weight: 700;
        margin-top: 20px;
        line-height: 1
    }
    .ad_div {
        text-align: center;
        background: #fff;
        border: 0 solid #dadde1;
        position: relative;
        margin-top: 40px;
        margin-bottom: 30px;
        border-radius: 0;
        padding: 0;
        overflow: visible
    }
    .ad_div .top_title_ad {
        position: absolute;
        background: #ddd;
        color: #555;
        padding: 2px 10px;
        border-top-right-radius: 6px;
        border-top-left-radius: 6px;
        top: -26px;
        left: 4px;
        font-size: 13px;
        cursor: pointer;
        display: none
    }
    .book-restult .book_result_avatar {
        width: 34px;
        height: 34px;
        right: calc(50% - 17px);
        bottom: -17px
    }
    .side_book_info {
        position: fixed;
        background: #fff;
        top: 0;
        left: 0;
        padding: 10px 15px 7px 15px;
        border: 1px solid #dadde1 !important;
        border-radius: 0;
        box-shadow: rgba(0, 0, 0, .04) 0 3px 6px;
        display: none;
        border-radius: 4px
    }
    .side_book_info .side_info_book_title {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px
    }
    .side_book_info img {
        width: 100%;
        height: 100%
    }
    .side_book_info .book_photo_container_results {
        width: 80px;
        height: 110px
    }
    .close_side_info img {
        width: 25px;
        height: 25px;
        padding: 7px;
        background: #f1f1f1;
        right: -5px;
        top: -5px;
        position: absolute;
        border-radius: 100px
    }
    .side_book_info .img-a {
        padding: 1px
    }
    .side_book_info .rating_side_info, .side_book_info .rating_side_info .rating_num {
        font-size: 14px !important
    }
    .user-rating-view-box .book_rating {
        display: flex
    }
    .user-rating-view-box .book_rating div, .user-rating-view-box .book_rating span {
        vertical-align: middle;
        align-self: center
    }
    .user-rating-view-box .book_rating .ratings_stars {
        margin-left: 5px;
        margin-right: 5px
    }
    .search_details_box .search_details_img {
        max-width: 200px;
        margin-bottom: 10px !important;
        margin-left: 10px !important;
        border: 1px solid #f1f1f1;
        padding: 2px
    }
    .donate_now_btn {
        max-width: 357px;
        border: 2px solid #ff7186;
        padding: 7px;
        display: block;
        margin: auto;
        color: #ff7186;
        border-radius: 102px;
        font-weight: 700;
        font-size: 16px
    }
    .grecaptcha-badge {
        display: none
    }
    .search_details_box h2 {
        font-size: 15px !important;
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }
    .search_details_box h2.media-heading {
        font-size: 17px !important;
        font-weight: 700
    }
    .search_details_box h3 {
        font-size: 14px !important;
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }
    .search_details_box ul {
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        line-height: 1.64;
        font-size: 15px;
        padding-right: 20px
    }
    .search_details_box td {
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        line-height: 1.64;
        font-size: 15px
    }
    .search_details_box th {
        font-size: 14px
    }
    .search_details_box table {
        width: 100%;
        margin-top: 5px
    }
    .search_details_box table, .search_details_box td, .search_details_box th {
        border: 1px solid #ddd;
        padding: 5px
    }
    .over_lay_article {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9;
        background-image: linear-gradient(to bottom, rgb(255, 0, 0, 0), #fff)
    }
    .search_details_box {
        position: relative
    }
    .show_more_article_btn {
        background: #45b09e;
        color: #fff;
        padding: 5px 15px;
        border-radius: 10px;
        position: absolute;
        z-index: 10;
        bottom: 10px;
        right: calc(50% - 57px);
        width: 115px;
        text-align: center;
        cursor: pointer
    }
    .search_details_content {
        font-family: 'Noto Naskh Arabic', 'Helvetica Neue', Helvetica, Arial, sans-serif
    }
    .col-xs-12 {
        padding-left: 15px !important;
        padding-right: 15px !important
    }
    .switch {
        position: relative;
        display: inline-block;
        width: 51px;
        height: 24px
    }
    .switch input {
        opacity: 0;
        width: 0;
        height: 0
    }
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s
    }
    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 4px;
        background-color: #fff;
        -webkit-transition: .4s;
        transition: .4s
    }
    input:checked + .slider {
        background-color: #2ecc71
    }
    input:focus + .slider {
        box-shadow: 0 0 1px #2ecc71
    }
    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px)
    }
    .slider.round {
        border-radius: 34px
    }
    .slider.round:before {
        border-radius: 50%
    }
    .home-search-section {
        min-height: 350px;
        background-color: #45b09e !important;
        margin-top: -20px;
        background-size: cover !important;
        background-position: center !important
    }
    .home-search-section form {
        max-width: 700px;
        margin: auto
    }
    .home-search-section .home_collcetion_btns {
        max-width: 500px;
        margin: auto;
        margin-top: 40px
    }
    .home-search-section .home_collcetion_btns a {
        color: #fff;
        text-decoration: none;
        border: 1px solid #fff;
        padding: 5px 5px;
        border-radius: 10px;
        display: block;
        font-size: 15px
    }
    .quiz {
        border-top: 1px solid #ceece7;
        background-color: #ceece7 !important;
        background-size: cover !important;
        background-position: bottom !important
    }
    .quiz .winner {
        width: 100px;
        height: 100px;
        margin: auto;
        text-align: center
    }
    .quiz .home_titles {
        text-align: center;
        color: #00715e
    }
    .quiz .content-home-search-section {
        margin-top: 25px
    }
    .quiz .child-home-search-section {
        min-height: 430px
    }
    .quiz .btn {
        border-color: #fff;
        border-radius: 50px;
        margin: 3px;
        color: #00715e;
        font-size: 15px;
        padding: 5px 15px;
        width: 195px
    }
    .quiz h3 {
        font-size: 16px
    }
    .quiz .quiz-desc {
        font-size: 16px !important
    }
    #book_settings .f_p_p {
        display: flex;
        height: 100%
    }
    #book_settings .f_p_p picture {
        align-self: center
    }
    #book_settings .f_p_p picture img {
        width: 100%
    }
    #book_settings .book_photo_container_results {
        height: auto;
        min-width: 150px
    }
    .f-s-14 {
        font-size: 14px !important
    }
    .f-s-13 {
        font-size: 13px !important
    }
    #book_settings .single-notification {
        padding-bottom: 15px;
        padding-top: 15px;
        border-top: 3px solid #ddd;
        position: relative
    }
    #book_settings .switch {
        position: absolute;
        top: 10px;
        right: 0
    }
    #book_settings .notifications-img {
        width: 45px !important
    }
    .color {
        color: #317d71
    }
    .home_titles h1 {
        line-height: 1;
        padding-bottom: 15px
    }
    .home_search_for:focus {
        box-shadow: none !important;
        border-color: #fff !important
    }
    .book_desc {
        line-height: 1.8;
        font-size: 20px
    }
    .quote-content-child {
        line-height: 1.7;
        font-size: 20px
    }
    .user_review_content {
        font-size: 18px
    }
</style>
<style id="theia-sticky-sidebar-stylesheet-TSS">.theiaStickySidebar:after {
        content: "";
        display: table;
        clear: both;
    }
</style>
