<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html {
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0
        }

        figcaption,
        figure,
        main {
            display: block
        }

        figure {
            margin: 1em 40px
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em
        }

        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        b,
        strong {
            font-weight: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        dfn {
            font-style: italic
        }

        mark {
            background-color: #ff0;
            color: #000
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -0.25em
        }

        sup {
            top: -0.5em
        }

        audio,
        video {
            display: inline-block
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        img {
            border-style: none
        }

        svg:not(:root) {
            overflow: hidden
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal
        }

        progress {
            display: inline-block;
            vertical-align: baseline
        }

        textarea {
            overflow: auto
        }

        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            padding: 0
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        details,
        menu {
            display: block
        }

        summary {
            display: list-item
        }

        canvas {
            display: inline-block
        }

        template {
            display: none
        }

        [hidden] {
            display: none
        }

        html {
            box-sizing: border-box
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit
        }

        body {
            background: #fff;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased
        }

        hr {
            border: 0;
            display: block;
            height: 1px;
            background: #E2E8ED;
            margin-top: 24px;
            margin-bottom: 24px
        }

        ul,
        ol {
            margin-top: 0;
            margin-bottom: 24px;
            padding-left: 24px
        }

        ul {
            list-style: disc
        }

        ol {
            list-style: decimal
        }

        li>ul,
        li>ol {
            margin-bottom: 0
        }

        dl {
            margin-top: 0;
            margin-bottom: 24px
        }

        dt {
            font-weight: 500
        }

        dd {
            margin-left: 24px;
            margin-bottom: 24px
        }

        img {
            height: auto;
            max-width: 100%;
            vertical-align: middle
        }

        figure {
            margin: 24px 0
        }

        figcaption {
            font-size: 16px;
            line-height: 24px;
            padding: 8px 0
        }

        img,
        svg {
            display: block
        }

        table {
            border-collapse: collapse;
            margin-bottom: 24px;
            width: 100%
        }

        tr {
            border-bottom: 1px solid #E2E8ED
        }

        th {
            text-align: left
        }

        th,
        td {
            padding: 10px 16px
        }

        th:first-child,
        td:first-child {
            padding-left: 0
        }

        th:last-child,
        td:last-child {
            padding-right: 0
        }

        html {
            font-size: 18px;
            line-height: 27px
        }

        @media (min-width: 641px) {
            html {
                font-size: 20px;
                line-height: 30px;
                letter-spacing: -0.1px
            }
        }

        body {
            color: #6F8394;
            font-size: 1rem
        }

        body,
        button,
        input,
        select,
        textarea {
            font-family: "Hind Vadodara", sans-serif
        }

        a {
            color: inherit;
            text-decoration: underline
        }

        a:hover,
        a:active {
            outline: 0;
            text-decoration: none
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            clear: both;
            color: #1F2B35;
            font-family: "Mukta", sans-serif;
            font-weight: 500
        }

        h1,
        .h1 {
            font-size: 42px;
            line-height: 52px;
            letter-spacing: -0.1px
        }

        @media (min-width: 641px) {

            h1,
            .h1 {
                font-size: 56px;
                line-height: 66px;
                letter-spacing: -0.1px
            }
        }

        h2,
        .h2 {
            font-size: 36px;
            line-height: 46px;
            letter-spacing: -0.1px
        }

        @media (min-width: 641px) {

            h2,
            .h2 {
                font-size: 42px;
                line-height: 52px;
                letter-spacing: -0.1px
            }
        }

        h3,
        .h3,
        blockquote {
            font-size: 24px;
            line-height: 34px;
            letter-spacing: -0.1px
        }

        @media (min-width: 641px) {

            h3,
            .h3,
            blockquote {
                font-size: 36px;
                line-height: 46px;
                letter-spacing: -0.1px
            }
        }

        h4,
        h5,
        h6,
        .h4,
        .h5,
        .h6 {
            font-size: 20px;
            line-height: 30px;
            letter-spacing: -0.1px
        }

        @media (min-width: 641px) {

            h4,
            h5,
            h6,
            .h4,
            .h5,
            .h6 {
                font-size: 24px;
                line-height: 34px;
                letter-spacing: -0.1px
            }
        }

        @media (max-width: 640px) {
            .h1-mobile {
                font-size: 42px;
                line-height: 52px;
                letter-spacing: -0.1px
            }

            .h2-mobile {
                font-size: 36px;
                line-height: 46px;
                letter-spacing: -0.1px
            }

            .h3-mobile {
                font-size: 24px;
                line-height: 34px;
                letter-spacing: -0.1px
            }

            .h4-mobile,
            .h5-mobile,
            .h6-mobile {
                font-size: 20px;
                line-height: 30px;
                letter-spacing: -0.1px
            }
        }

        .text-light {
            color: #6F8394
        }

        .text-light a {
            color: #6F8394
        }

        .text-light h1,
        .text-light h2,
        .text-light h3,
        .text-light h4,
        .text-light h5,
        .text-light h6,
        .text-light .h1,
        .text-light .h2,
        .text-light .h3,
        .text-light .h4,
        .text-light .h5,
        .text-light .h6 {
            color: #fff !important
        }

        .text-sm {
            font-size: 18px;
            line-height: 27px;
            letter-spacing: -0.1px
        }

        .text-xs {
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -0.1px
        }

        h1,
        h2,
        .h1,
        .h2 {
            margin-top: 48px;
            margin-bottom: 16px
        }

        h3,
        .h3 {
            margin-top: 36px;
            margin-bottom: 12px
        }

        h4,
        h5,
        h6,
        .h4,
        .h5,
        .h6 {
            margin-top: 24px;
            margin-bottom: 4px
        }

        p {
            margin-top: 0;
            margin-bottom: 24px
        }

        dfn,
        cite,
        em,
        i {
            font-style: italic
        }

        blockquote {
            font-style: italic;
            margin-top: 24px;
            margin-bottom: 24px;
            margin-left: 24px
        }

        blockquote::before {
            content: "\201C"
        }

        blockquote::after {
            content: "\201D"
        }

        blockquote p {
            display: inline
        }

        address {
            color: #6F8394;
            border-width: 1px 0;
            border-style: solid;
            border-color: #E2E8ED;
            padding: 24px 0;
            margin: 0 0 24px
        }

        pre,
        pre h1,
        pre h2,
        pre h3,
        pre h4,
        pre h5,
        pre h6,
        pre .h1,
        pre .h2,
        pre .h3,
        pre .h4,
        pre .h5,
        pre .h6 {
            font-family: "Courier 10 Pitch", Courier, monospace
        }

        pre,
        code,
        kbd,
        tt,
        var {
            background: #F6F8FA
        }

        pre {
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 1.6em;
            max-width: 100%;
            overflow: auto;
            padding: 24px;
            margin-top: 24px;
            margin-bottom: 24px
        }

        code,
        kbd,
        tt,
        var {
            font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
            font-size: 16px;
            padding: 2px 4px
        }

        abbr,
        acronym {
            cursor: help
        }

        mark,
        ins {
            text-decoration: none
        }

        small {
            font-size: 18px;
            line-height: 27px;
            letter-spacing: -0.1px
        }

        b,
        strong {
            font-weight: 700
        }

        button,
        input,
        select,
        textarea,
        label {
            font-size: 18px;
            line-height: 27px
        }

        .container,
        .container-sm {
            width: 100%;
            margin: 0 auto;
            padding-left: 16px;
            padding-right: 16px
        }

        @media (min-width: 481px) {

            .container,
            .container-sm {
                padding-left: 24px;
                padding-right: 24px
            }
        }

        .container {
            max-width: 1128px
        }

        .container-sm {
            max-width: 848px
        }

        .container .container-sm {
            max-width: 800px;
            padding-left: 0;
            padding-right: 0
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            border-radius: 2px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
            clip: auto !important;
            display: block;
            font-size: 16px;
            letter-spacing: -0.1px;
            font-weight: 500;
            line-height: 16px;
            text-transform: uppercase;
            text-decoration: none;
            background-color: #fff;
            color: #0081F6 !important;
            border: none;
            height: auto;
            left: 8px;
            padding: 16px 32px;
            top: 8px;
            width: auto;
            z-index: 100000
        }

        .list-reset {
            list-style: none;
            padding: 0
        }

        .text-left {
            text-align: left
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-primary {
            color: #0081F6
        }

        .text-secondary {
            color: #FF4D79
        }

        .has-top-divider {
            position: relative
        }

        .has-top-divider::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: block;
            height: 1px;
            background: #E2E8ED
        }

        .has-bottom-divider {
            position: relative
        }

        .has-bottom-divider::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            display: block;
            height: 1px;
            background: #E2E8ED
        }

        .m-0 {
            margin: 0
        }

        .mt-0 {
            margin-top: 0
        }

        .mr-0 {
            margin-right: 0
        }

        .mb-0 {
            margin-bottom: 0
        }

        .ml-0 {
            margin-left: 0
        }

        .m-8 {
            margin: 8px
        }

        .mt-8 {
            margin-top: 8px
        }

        .mr-8 {
            margin-right: 8px
        }

        .mb-8 {
            margin-bottom: 8px
        }

        .ml-8 {
            margin-left: 8px
        }

        .m-16 {
            margin: 16px
        }

        .mt-16 {
            margin-top: 16px
        }

        .mr-16 {
            margin-right: 16px
        }

        .mb-16 {
            margin-bottom: 16px
        }

        .ml-16 {
            margin-left: 16px
        }

        .m-24 {
            margin: 24px
        }

        .mt-24 {
            margin-top: 24px
        }

        .mr-24 {
            margin-right: 24px
        }

        .mb-24 {
            margin-bottom: 24px
        }

        .ml-24 {
            margin-left: 24px
        }

        .m-32 {
            margin: 32px
        }

        .mt-32 {
            margin-top: 32px
        }

        .mr-32 {
            margin-right: 32px
        }

        .mb-32 {
            margin-bottom: 32px
        }

        .ml-32 {
            margin-left: 32px
        }

        .m-40 {
            margin: 40px
        }

        .mt-40 {
            margin-top: 40px
        }

        .mr-40 {
            margin-right: 40px
        }

        .mb-40 {
            margin-bottom: 40px
        }

        .ml-40 {
            margin-left: 40px
        }

        .m-48 {
            margin: 48px
        }

        .mt-48 {
            margin-top: 48px
        }

        .mr-48 {
            margin-right: 48px
        }

        .mb-48 {
            margin-bottom: 48px
        }

        .ml-48 {
            margin-left: 48px
        }

        .m-56 {
            margin: 56px
        }

        .mt-56 {
            margin-top: 56px
        }

        .mr-56 {
            margin-right: 56px
        }

        .mb-56 {
            margin-bottom: 56px
        }

        .ml-56 {
            margin-left: 56px
        }

        .m-64 {
            margin: 64px
        }

        .mt-64 {
            margin-top: 64px
        }

        .mr-64 {
            margin-right: 64px
        }

        .mb-64 {
            margin-bottom: 64px
        }

        .ml-64 {
            margin-left: 64px
        }

        .p-0 {
            padding: 0
        }

        .pt-0 {
            padding-top: 0
        }

        .pr-0 {
            padding-right: 0
        }

        .pb-0 {
            padding-bottom: 0
        }

        .pl-0 {
            padding-left: 0
        }

        .p-8 {
            padding: 8px
        }

        .pt-8 {
            padding-top: 8px
        }

        .pr-8 {
            padding-right: 8px
        }

        .pb-8 {
            padding-bottom: 8px
        }

        .pl-8 {
            padding-left: 8px
        }

        .p-16 {
            padding: 16px
        }

        .pt-16 {
            padding-top: 16px
        }

        .pr-16 {
            padding-right: 16px
        }

        .pb-16 {
            padding-bottom: 16px
        }

        .pl-16 {
            padding-left: 16px
        }

        .p-24 {
            padding: 24px
        }

        .pt-24 {
            padding-top: 24px
        }

        .pr-24 {
            padding-right: 24px
        }

        .pb-24 {
            padding-bottom: 24px
        }

        .pl-24 {
            padding-left: 24px
        }

        .p-32 {
            padding: 32px
        }

        .pt-32 {
            padding-top: 32px
        }

        .pr-32 {
            padding-right: 32px
        }

        .pb-32 {
            padding-bottom: 32px
        }

        .pl-32 {
            padding-left: 32px
        }

        .p-40 {
            padding: 40px
        }

        .pt-40 {
            padding-top: 40px
        }

        .pr-40 {
            padding-right: 40px
        }

        .pb-40 {
            padding-bottom: 40px
        }

        .pl-40 {
            padding-left: 40px
        }

        .p-48 {
            padding: 48px
        }

        .pt-48 {
            padding-top: 48px
        }

        .pr-48 {
            padding-right: 48px
        }

        .pb-48 {
            padding-bottom: 48px
        }

        .pl-48 {
            padding-left: 48px
        }

        .p-56 {
            padding: 56px
        }

        .pt-56 {
            padding-top: 56px
        }

        .pr-56 {
            padding-right: 56px
        }

        .pb-56 {
            padding-bottom: 56px
        }

        .pl-56 {
            padding-left: 56px
        }

        .p-64 {
            padding: 64px
        }

        .pt-64 {
            padding-top: 64px
        }

        .pr-64 {
            padding-right: 64px
        }

        .pb-64 {
            padding-bottom: 64px
        }

        .pl-64 {
            padding-left: 64px
        }

        .sr .has-animations .is-revealing {
            visibility: hidden
        }

        .button {
            display: inline-flex;
            font-family: "Mukta", sans-serif;
            font-size: 16px;
            letter-spacing: -0.1px;
            font-weight: 700;
            line-height: 16px;
            text-decoration: none !important;
            background-color: #fff;
            color: #0081F6 !important;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            justify-content: center;
            padding: 16px 32px;
            height: 48px;
            text-align: center;
            white-space: nowrap
        }

        .button:active {
            outline: 0
        }

        .button::before {
            border-radius: 4px
        }

        .button-shadow {
            position: relative
        }

        .button-shadow::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-shadow: 0 8px 16px rgba(31, 43, 53, 0.12);
            mix-blend-mode: multiply;
            transition: box-shadow .15s ease
        }

        .button-shadow:hover::before {
            box-shadow: 0 8px 16px rgba(31, 43, 53, 0.25)
        }

        .button-sm {
            padding: 8px 24px;
            height: 32px
        }

        .button-sm.button-shadow::before {
            box-shadow: 0 4px 16px rgba(31, 43, 53, 0.12)
        }

        .button-sm.button-shadow:hover::before {
            box-shadow: 0 4px 16px rgba(31, 43, 53, 0.25)
        }

        .button-primary {
            color: #fff !important;
            transition: background .15s ease
        }

        .button-primary {
            background: #ff678c;
            background: linear-gradient(65deg, #FF4D79 0, #FF809F 100%)
        }

        .button-primary:hover {
            background: #ff6c90;
            background: linear-gradient(65deg, #ff527d 0, #ff85a3 100%)
        }

        .button-primary.button-shadow::before {
            box-shadow: 0 8px 16px rgba(255, 77, 121, 0.25)
        }

        .button-primary.button-shadow:hover::before {
            box-shadow: 0 8px 16px rgba(255, 77, 121, 0.4)
        }

        .button-primary .button-sm.button-shadow::before {
            box-shadow: 0 4px 16px rgba(255, 77, 121, 0.25)
        }

        .button-primary .button-sm.button-shadow:hover::before {
            box-shadow: 0 4px 16px rgba(255, 77, 121, 0.4)
        }

        .button-block {
            display: flex
        }

        .site-header {
            position: relative;
            padding: 24px 0
        }

        .site-header-inner {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .header-links {
            display: inline-flex
        }

        .header-links li {
            display: inline-flex
        }

        .header-links a:not(.button) {
            font-family: "Mukta", sans-serif;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: -0.1px;
            font-weight: 700;
            color: #6F8394;
            text-transform: uppercase;
            text-decoration: none;
            line-height: 16px;
            padding: 8px 24px
        }

        .header-links a:not(.button):hover,
        .header-links a:not(.button):active {
            color: #fff
        }

        .hero {
            position: relative;
            text-align: center;
            padding-top: 40px
        }

        .hero::before {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            height: 230px;
            width: 80%;
            background: #2294fb;
            background: linear-gradient(to top right, #0081F6 0, #44A6FF 100%)
        }

        .hero-inner {
            position: relative
        }

        .hero-title {
            font-weight: 700
        }

        .hero-paragraph {
            margin-bottom: 32px
        }

        .hero-illustration {
            margin-top: 40px;
            padding-bottom: 40px
        }

        .hero-illustration img,
        .hero-illustration svg {
            width: 100%;
            max-width: 320px;
            height: auto;
            margin: 0 auto;
            overflow: visible
        }

        @media (min-width: 641px) {
            .hero {
                text-align: left;
                padding-top: 92px;
                padding-bottom: 80px
            }

            .hero::before {
                left: 620px;
                height: 800px;
                width: 100%
            }

            .hero-inner {
                display: flex
            }

            .hero-copy {
                padding-right: 48px;
                min-width: 512px
            }

            .hero-illustration {
                margin-top: -68px;
                padding-bottom: 0
            }

            .hero-illustration img,
            .hero-illustration svg {
                max-width: none;
                width: 528px
            }
        }

        @media (min-width: 1025px) {
            .hero::before {
                left: auto;
                width: 43%
            }

            .hero-copy {
                padding-right: 88px;
                min-width: 552px
            }
        }

        .features .section-title {
            margin-bottom: 48px
        }

        .features-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-right: -12px;
            margin-left: -12px
        }

        .features-wrap:first-child {
            margin-top: -12px
        }

        .features-wrap:last-child {
            margin-bottom: -12px
        }

        .feature {
            padding: 12px;
            width: 276px;
            max-width: 276px;
            flex-grow: 1
        }

        .feature-inner {
            height: 100%;
            background: #fff;
            padding: 40px 24px;
            box-shadow: 0 16px 48px #E2E8ED
        }

        @supports (-ms-ime-align: auto) {
            .feature-inner {
                box-shadow: 0 16px 48px rgba(31, 43, 53, 0.12)
            }
        }

        .feature-icon {
            display: flex;
            justify-content: center
        }

        .feature-title {
            margin-top: 12px;
            margin-bottom: 8px
        }

        @media (min-width: 641px) {
            .features {
                position: relative
            }

            .features .section-square {
                position: absolute;
                top: 0;
                left: 0;
                height: 240px;
                width: 44%;
                background: #F6F8FA
            }

            .features .section-title {
                margin-bottom: 56px
            }
        }

        .pricing {
            position: relative;
            overflow: hidden
        }

        .pricing::before {
            content: '';
            position: absolute;
            top: calc(100% - 200px);
            left: 0;
            width: 100%;
            height: 200px;
            background: #1F2B35;
            overflow: hidden
        }

        .pricing .section-title {
            margin-bottom: 48px
        }

        .pricing-tables-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-right: -12px;
            margin-left: -12px
        }

        .pricing-tables-wrap:first-child {
            margin-top: -12px
        }

        .pricing-tables-wrap:last-child {
            margin-bottom: -12px
        }

        .pricing-table {
            padding: 12px;
            width: 344px;
            max-width: 344px;
            flex-grow: 1
        }

        .pricing-table-inner {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            background: #fff;
            padding: 24px;
            height: 100%
        }

        .pricing-table-inner>* {
            position: relative;
            width: 100%
        }

        .pricing-table-inner::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-shadow: 0 16px 48px #E2E8ED;
            mix-blend-mode: multiply
        }

        @supports (-ms-ime-align: auto) {
            .pricing-table-inner::before {
                box-shadow: 0 16px 48px rgba(31, 43, 53, 0.12)
            }
        }

        .pricing-table-header {
            position: relative
        }

        .pricing-table-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            display: block;
            height: 1px;
            background: #E2E8ED
        }

        .pricing-table-title {
            font-family: "Mukta", sans-serif;
            color: #1F2B35
        }

        .pricing-table-price-currency {
            color: #6F8394
        }

        .pricing-table-features li {
            display: flex;
            align-items: center;
            margin-bottom: 14px
        }

        .pricing-table-features li .list-icon {
            display: inline-flex;
            width: 16px;
            height: 12px;
            margin-right: 12px
        }

        .pricing-table-cta {
            align-self: flex-end
        }

        @media (min-width: 641px) {
            .pricing .section-square {
                position: absolute;
                top: calc(100% - 440px);
                right: 0;
                height: 240px;
                width: 44%;
                background: #F6F8FA
            }

            .pricing .section-title {
                margin-bottom: 64px
            }
        }

        .is-boxed {
            background: #F6F8FA
        }

        .body-wrap {
            background: #fff;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh
        }

        .boxed-container {
            max-width: 1440px;
            margin: 0 auto;
            box-shadow: 0 16px 48px #E2E8ED
        }

        @supports (-ms-ime-align: auto) {
            .boxed-container {
                box-shadow: 0 16px 48px rgba(31, 43, 53, 0.12)
            }
        }

        main {
            flex: 1 0 auto
        }

        .section-inner {
            position: relative;
            padding-top: 48px;
            padding-bottom: 48px
        }

        @media (min-width: 641px) {
            .section-inner {
                padding-top: 80px;
                padding-bottom: 80px
            }
        }

        .site-footer {
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0px;
            background: #1F2B35
        }

        .site-footer a {
            text-decoration: none
        }

        .site-footer a:hover,
        .site-footer a:active {
            color: #6F8394;
            text-decoration: underline
        }

        .site-footer-inner {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            padding-top: 40px;
            padding-bottom: 40px
        }

        .site-footer-inner.has-top-divider::before {
            background: rgba(255, 255, 255, 0.08)
        }

        .footer-brand,
        .footer-links,
        .footer-social-links,
        .footer-copyright {
            flex: none;
            width: 100%;
            display: inline-flex;
            justify-content: center
        }

        .footer-brand,
        .footer-links,
        .footer-social-links {
            margin-bottom: 24px
        }

        .footer-links li+li,
        .footer-social-links li+li {
            margin-left: 16px
        }

        .footer-social-links li {
            display: inline-flex
        }

        .footer-social-links li a {
            padding: 8px
        }

        @media (min-width: 641px) {
            .site-footer-inner {
                justify-content: space-between
            }

            .footer-brand,
            .footer-links,
            .footer-social-links,
            .footer-copyright {
                flex: 50%
            }

            .footer-brand,
            .footer-copyright {
                justify-content: flex-start
            }

            .footer-links,
            .footer-social-links {
                justify-content: flex-end
            }

            .footer-links {
                order: 1;
                margin-bottom: 0
            }
        }
    </style>
    <title>Inventaris Barang</title>

</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <div class="brand header-brand" >
                    <h1 class="m-0">
                        <a href="#">
                            <svg width="48" height="32" viewBox="0 0 48 32" xmlns="http://www.w3.org/2000/svg">
                                <title>Inventaris Barang</title>
                                <defs>
                                    <linearGradient x1="0%" y1="100%" y2="0%" id="logo-a">
                                        <stop stop-color="#007CFE" stop-opacity="0" offset="0%" />
                                        <stop stop-color="#007DFF" offset="100%" />
                                    </linearGradient>
                                    <linearGradient x1="100%" y1="50%" x2="0%" y2="50%"
                                        id="logo-b">
                                        <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%" />
                                        <stop stop-color="#FF4F7A" offset="100%" />
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <rect fill="url(#logo-a)" width="32" height="32" rx="16" />
                                    <rect fill="url(#logo-b)" x="16" width="32" height="32"
                                        rx="16" />
                                </g>
                            </svg>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div>
        <section class="hero">
            <div class="container">
                <div class="hero-inner">
                    <div class="hero-copy">
                        <h1 class="hero-title h2-mobile mt-0 is-revealing">Selamat Datang Admin</h1>
                        <p class="hero-paragraph is-revealing">semangat untuk hari ini</p>
                        <p class="hero-cta is-revealing"><a class="button button-primary button-shadow"
                                href="#">LOGIN</a></p>
                    </div>
                    <div class="hero-illustration is-revealing">
                        <svg width="528" height="413" viewBox="0 0 528 413" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%"
                                    id="hero-illustration-a">
                                    <stop stop-color="#A7FDE8" stop-opacity="0" offset="0%" />
                                    <stop stop-color="#6EFACC" offset="100%" />
                                </linearGradient>
                                <linearGradient x1="100%" y1="50%" x2="0%" y2="50%"
                                    id="hero-illustration-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%" />
                                    <stop stop-color="#FF4F7A" offset="100%" />
                                </linearGradient>
                                <radialGradient fx="50%" fy="50%" r="100%" id="hero-illustration-c">
                                    <stop stop-color="#6EFACC" offset="0%" />
                                    <stop stop-color="#6EFACC" stop-opacity="0" offset="100%" />
                                </radialGradient>
                                <linearGradient x1="0%" y1="100%" y2="0%"
                                    id="hero-illustration-d">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%" />
                                    <stop stop-color="#007DFF" offset="100%" />
                                </linearGradient>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%"
                                    id="hero-illustration-e">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%" />
                                    <stop stop-color="#FF4F7A" offset="100%" />
                                </linearGradient>
                                <filter x="-500%" y="-500%" width="1000%" height="1000%"
                                    filterUnits="objectBoundingBox" id="dropshadow-1">
                                    <feOffset dy="16" in="SourceAlpha" result="shadowOffsetOuter" />
                                    <feGaussianBlur stdDeviation="24" in="shadowOffsetOuter"
                                        result="shadowBlurOuter" />
                                    <feColorMatrix values="0 0 0 0 0.12 0 0 0 0 0.17 0 0 0 0 0.21 0 0 0 0.2 0"
                                        in="shadowBlurOuter" />
                                </filter>
                            </defs>
                            <g transform="translate(0 -1)" fill="none" fill-rule="evenodd">
                                <g transform="translate(128 290)" fill="url(#hero-illustration-a)">
                                    <path
                                        d="M62.225 0l1.415 1.414L1.414 63.64 0 62.225zM66.468 4.243l1.414 1.414L5.657 67.882l-1.414-1.414zM70.71 8.485L72.126 9.9 9.899 72.125 8.485 70.71zM74.953 12.728l1.415 1.414-62.226 62.226-1.414-1.415zM79.196 16.97l1.414 1.415L18.385 80.61l-1.414-1.414zM83.439 21.213l1.414 1.414-62.226 62.226-1.414-1.414zM87.681 25.456l1.414 1.414L26.87 89.095l-1.414-1.414zM91.924 29.698l1.414 1.415-62.225 62.225-1.415-1.414z" />
                                    <path
                                        d="M91.924 29.698l1.414 1.415-62.225 62.225-1.415-1.414zM96.167 33.941l1.414 1.414-62.226 62.226-1.414-1.414zM100.41 38.184l1.413 1.414-62.225 62.225-1.414-1.414zM104.652 42.426l1.414 1.415-62.225 62.225-1.415-1.414zM108.894 46.669l1.415 1.414-62.226 62.226-1.414-1.415zM113.137 50.912l1.414 1.414-62.225 62.225-1.414-1.414zM117.38 55.154l1.414 1.415-62.225 62.225-1.415-1.414zM121.622 59.397l1.415 1.414-62.226 62.226-1.414-1.415z" />
                                    <g>
                                        <path
                                            d="M100.811 0l-1.414 1.414 62.225 62.226 1.415-1.415zM96.569 4.243l-1.415 1.414 62.226 62.225 1.414-1.414zM92.326 8.485L90.912 9.9l62.225 62.226 1.414-1.414zM88.083 12.728l-1.414 1.414 62.225 62.226 1.415-1.415zM83.84 16.97l-1.414 1.415 62.226 62.225 1.414-1.414zM79.598 21.213l-1.414 1.414 62.225 62.226 1.414-1.414zM75.355 25.456l-1.414 1.414 62.226 62.225 1.414-1.414zM71.113 29.698l-1.415 1.415 62.226 62.225 1.414-1.414z" />
                                        <path
                                            d="M71.113 29.698l-1.415 1.415 62.226 62.225 1.414-1.414zM66.87 33.941l-1.414 1.414 62.225 62.226 1.414-1.414zM62.627 38.184l-1.414 1.414 62.226 62.225 1.414-1.414zM58.385 42.426l-1.414 1.415 62.225 62.225 1.414-1.414zM54.142 46.669l-1.414 1.414 62.225 62.226 1.415-1.415zM49.9 50.912l-1.415 1.414 62.226 62.225 1.414-1.414zM45.657 55.154l-1.414 1.415 62.225 62.225 1.414-1.414zM41.414 59.397L40 60.811l62.225 62.226 1.415-1.415z" />
                                    </g>
                                </g>
                                <g transform="matrix(1 0 0 -1 326 124)" fill="url(#hero-illustration-a)">
                                    <path
                                        d="M62.225 0l1.415 1.414L1.414 63.64 0 62.225zM66.468 4.243l1.414 1.414L5.657 67.882l-1.414-1.414zM70.71 8.485L72.126 9.9 9.899 72.125 8.485 70.71zM74.953 12.728l1.415 1.414-62.226 62.226-1.414-1.415zM79.196 16.97l1.414 1.415L18.385 80.61l-1.414-1.414zM83.439 21.213l1.414 1.414-62.226 62.226-1.414-1.414zM87.681 25.456l1.414 1.414L26.87 89.095l-1.414-1.414zM91.924 29.698l1.414 1.415-62.225 62.225-1.415-1.414z" />
                                    <path
                                        d="M91.924 29.698l1.414 1.415-62.225 62.225-1.415-1.414zM96.167 33.941l1.414 1.414-62.226 62.226-1.414-1.414zM100.41 38.184l1.413 1.414-62.225 62.225-1.414-1.414zM104.652 42.426l1.414 1.415-62.225 62.225-1.415-1.414zM108.894 46.669l1.415 1.414-62.226 62.226-1.414-1.415zM113.137 50.912l1.414 1.414-62.225 62.225-1.414-1.414zM117.38 55.154l1.414 1.415-62.225 62.225-1.415-1.414zM121.622 59.397l1.415 1.414-62.226 62.226-1.414-1.415z" />
                                    <g>
                                        <path
                                            d="M100.811 0l-1.414 1.414 62.225 62.226 1.415-1.415zM96.569 4.243l-1.415 1.414 62.226 62.225 1.414-1.414zM92.326 8.485L90.912 9.9l62.225 62.226 1.414-1.414zM88.083 12.728l-1.414 1.414 62.225 62.226 1.415-1.415zM83.84 16.97l-1.414 1.415 62.226 62.225 1.414-1.414zM79.598 21.213l-1.414 1.414 62.225 62.226 1.414-1.414zM75.355 25.456l-1.414 1.414 62.226 62.225 1.414-1.414zM71.113 29.698l-1.415 1.415 62.226 62.225 1.414-1.414z" />
                                        <path
                                            d="M71.113 29.698l-1.415 1.415 62.226 62.225 1.414-1.414zM66.87 33.941l-1.414 1.414 62.225 62.226 1.414-1.414zM62.627 38.184l-1.414 1.414 62.226 62.225 1.414-1.414zM58.385 42.426l-1.414 1.415 62.225 62.225 1.414-1.414zM54.142 46.669l-1.414 1.414 62.225 62.226 1.415-1.415zM49.9 50.912l-1.415 1.414 62.226 62.225 1.414-1.414zM45.657 55.154l-1.414 1.415 62.225 62.225 1.414-1.414zM41.414 59.397L40 60.811l62.225 62.226 1.415-1.415z" />
                                    </g>
                                </g>
                                <path d="M0 0h528v414H0z" />
                                <path fill="#FFF" d="M0 63h528v297H0z"
                                    style="mix-blend-mode:multiply;filter:url(#dropshadow-1)" />
                                <path fill="#FFF" d="M0 63h528v297H0z" />
                                <path fill="url(#hero-illustration-b)" d="M408 230h80v48h-80z" />
                                <path
                                    d="M0 0h4v4H0V0zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zm0 12h4v4H0v-4zM12 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM24 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM36 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM48 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zM60 0h4v4h-4V0zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4zm0 12h4v4h-4v-4z"
                                    transform="rotate(45 -118.861 431.981)" fill="url(#hero-illustration-c)" />
                                <path fill="#FFF" d="M288 254h160v160H288z"
                                    style="mix-blend-mode:multiply;filter:url(#dropshadow-1)" />
                                <path fill="#FFF" d="M288 254h160v160H288z" />
                                <path d="M248 79h88v24c0 35.346-28.654 64-64 64h-24V79z"
                                    fill="url(#hero-illustration-d)" />
                                <path d="M348 132c0 26.51-21.49 48-48 48 0-26.51 21.49-48 48-48z"
                                    fill="url(#hero-illustration-e)" transform="matrix(1 0 0 -1 0 312)" />
                                <path fill="#FFF" d="M200 31h88v88h-88z"
                                    style="mix-blend-mode:multiply;filter:url(#dropshadow-1)" />
                                <path fill="#FFF" d="M200 31h88v88h-88z" />
                                <path fill="#F6F8FA" d="M24 248l88 88H24z" />
                                <rect fill="url(#hero-illustration-d)" x="335" y="242" width="32"
                                    height="32" rx="16" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>
