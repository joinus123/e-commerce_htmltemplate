<!DOCTYPE html>
<html lang="en">
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title></title>
      <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
      <link rel="icon" type="image/png" href="#">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/aos.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
      <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
      <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
   </head>
   <body>
 <style type="text/css">
     .input {
    position: relative;
    z-index: 1;
    display: inline-block;
    margin: 0px;
    width: 100%;
    width: calc(100% - 2em);
    vertical-align: top;
}

.login-page {
      display: flex;
    align-items: center;
    height: 100vh;
    background: url(../images/banner-img-4.jpg);
    background-size: cover;
}
.login-box {
    padding: 10px 10px;
    background-color: #FFF;
    width: 100%;
    display: block;
    margin: 0 auto;
    box-shadow: 0px 0 16px 0px #940026;
    border: 2px solid #940026;
    position: relative;
    z-index: 999;
}

.input__field {
    position: relative;
    display: block;
    float: right;
    padding: 0.8em;
    width: 60%;
    border: none;
    border-radius: 0;
    background: #f0f0f0;
    color: #aaa;
    -webkit-appearance: none; /* for box shadows to show on iOS */
}

.input__field:focus {
    outline: none;
}

.input__label {
    display: inline-block;
    float: right;
    padding: 0 1em;
    width: 40%;
    color: #696969;
    font-weight: bold;
    font-size: 70.25%;

}

.input__label-content {
    position: relative;
    display: block;
    padding: 1.6em 0;
    width: 100%;
}

.graphic {
    position: absolute;
    top: 0;
    left: 0;
    fill: none;
}

/*.icon {
    color: #ddd;
    font-size: 150%;
}*/

/* Individual styles */

/* Manami */
.input--manami {
    overflow: hidden;
}

/*.input__field--manami {
    width: 100%;
    background: transparent;
    padding: 0.5em;
    margin-bottom: 2em;
    color: #f9f7f6;
    z-index: 100;
    opacity: 0;
}

.input__label--manami {
    width: 100%;
    position: absolute;
    text-align: left;
    padding: 0.5em 0;
    pointer-events: none;
    font-size: 1em;
}*/

/*.input__label--manami::before,
.input__label--manami::after {
    content: '';
    position: absolute;
    width: 100%;
    left: 0;
}*/

/*.input__label--manami::before {
    height: 100%;
    background: #A8A8A8;
    top: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    -webkit-transition: -webkit-transform 0.2s;
    transition: transform 0.2s;
}*/

/*.input__label--manami::after {
    height: 2px;
    background: #A8A8A8;
    top: 100%;
    -webkit-transition: opacity 0.2s;
    transition: opacity 0.2s;
}*/

/*.input__label-content--manami {
    padding: 0;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: -webkit-transform 0.2s, color 0.2s;
    transition: transform 0.2s, color 0.2s;
}

.input__field--manami:focus,
.input--filled .input__field--manami {
    opacity: 1;
    -webkit-transition: opacity 0s 0.2s;
    transition: opacity 0s 0.2s;
}*/

.input__label--manami::before,
.input__label--manami::after,
.input__label-content--manami,
.input__field--manami:focus,
.input--filled .input__field--manami {
    -webkit-transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
    transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
}

.input__field--manami:focus + .input__label--manami::before,
.input--filled .input__label--manami::before {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.input__field--manami:focus + .input__label--manami::after,
.input--filled .input__label--manami::after {
    opacity: 0;
}

.input__field--manami:focus + .input__label--manami .input__label-content--manami,
.input--filled .input__label--manami .input__label-content--manami {
    color: #cbc4c6;
    -webkit-transform: translate3d(0, 2.1em, 0) scale3d(0.65, 0.65, 1);
    transform: translate3d(0, 2.1em, 0) scale3d(0.65, 0.65, 1);
}

/* Nariko */
.input--nariko {
    overflow: hidden;
    padding-top: 2em;
}

.input__field--nariko {
    width: 100%;
    background: transparent;
    opacity: 0;
    padding: 0.35em;
    z-index: 100;
    color: #f18292;
}

.input__label--nariko {
    width: 100%;
    bottom: 0;
    position: absolute;
    pointer-events: none;
    text-align: left;
    color: #8E9191;
    padding: 0 0.5em;
}

.input__label--nariko::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 4em;
    top: 100%;
    left: 0;
    background: #fff;
    border-top: 4px solid #9B9F9F;
    -webkit-transform: translate3d(0, -3px, 0);
    transform: translate3d(0, -3px, 0);
    -webkit-transition: -webkit-transform 0.4s;
    transition: transform 0.4s;
    -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
    transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
}

.input__label-content--nariko {
    padding: 0.5em 0;
    -webkit-transform-origin: 0% 100%;
    transform-origin: 0% 100%;
    -webkit-transition: -webkit-transform 0.4s, color 0.4s;
    transition: transform 0.4s, color 0.4s;
    -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
    transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
}

.input__field--nariko:focus,
.input--filled .input__field--nariko {
    cursor: text;
    opacity: 1;
    -webkit-transition: opacity 0s 0.4s;
    transition: opacity 0s 0.4s;
} 

.input__field--nariko:focus + .input__label--nariko::before,
.input--filled .input__label--nariko::before {
    -webkit-transition-delay: 0.05s;
    transition-delay: 0.05s;
    -webkit-transform: translate3d(0, -3.3em, 0);
    transform: translate3d(0, -3.3em, 0);
}

.input__field--nariko:focus + .input__label--nariko .input__label-content--nariko,
.input--filled .input__label-content--nariko {
    color: #6B6E6E;
    -webkit-transform: translate3d(0, -3.3em, 0) scale3d(0.81, 0.81, 1);
    transform: translate3d(0, -3.3em, 0) scale3d(0.81, 0.81, 1);
}

/* Nao */
.input--nao {
    overflow: hidden;
    padding-top: 15px;
    margin-bottom: 20px;
}

.input__field--nao {
    padding: 0.5em 0em 0.36em;
    width: 100%;
    background: transparent;
    color: #940026!important;
    font-size: 16px;
}

.input__label--nao {
    position: absolute;
    top: 0;
    font-size: 0.95em;
    left: 0;
    display: block;
    width: 100%;
    text-align: left;
    padding: 0em;
    pointer-events: none;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: -webkit-transform 0.2s 0.15s, color 1s;
    transition: transform 0.2s 0.15s, color 1s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.graphic--nao {
    stroke: #940026;
    pointer-events: none;
    -webkit-transition: -webkit-transform 0.7s, stroke 0.7s;
    transition: transform 0.7s, stroke 0.7s;
    -webkit-transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
    transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
} 

.input__field--nao:focus + .input__label--nao,
.input--filled .input__label--nao {
    color: #333;
    -webkit-transform: translate3d(0, -1.25em, 0) scale3d(0.75, 0.75, 1);
    transform: translate3d(0, -1.25em, 0) scale3d(0.75, 0.75, 1);
}

.input__field--nao:focus ~ .graphic--nao,
.input--filled .graphic--nao {
    stroke: #333;
    -webkit-transform: translate3d(-66.6%, 0, 0);
    transform: translate3d(-66.6%, 0, 0);
}

/* Shoko */
.input--shoko {
    overflow: hidden;
    padding-bottom: 2.5em;
}

.input__field--shoko {
    padding: 0;
    margin-top: 1.2em;
    width: 100%;
    background: transparent;
    color: #fff;
    font-size: 1.55em;
}

.input__label--shoko {
    position: absolute;
    top: 2em;
    left: 0;
    display: block;
    width: 100%;
    text-align: left;
    padding: 0em;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #A09C9C;
    pointer-events: none;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: -webkit-transform 0.2s 0.1s, color 0.3s;
    transition: transform 0.2s 0.1s, color 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.graphic--shoko {
    stroke: #A09C9C;
    pointer-events: none;
    stroke-width: 2px;
    top: 1.25em;
    bottom: 0px;
    height: 3.275em;
    -webkit-transition: -webkit-transform 0.7s, stroke 0.7s;
    transition: transform 0.7s, stroke 0.7s;
    -webkit-transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
    transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
} 

.input__field--shoko:focus + .input__label--shoko,
.input--filled .input__label--shoko {
    color: #A58282;
    -webkit-transform: translate3d(0, 3.5em, 0) scale3d(0.85, 0.85, 1);
    transform: translate3d(0, 3.5em, 0) scale3d(0.85, 0.85, 1);
}

.input__field--shoko:focus ~ .graphic--shoko,
.input--filled .graphic--shoko {
    stroke: #A58282;
    -webkit-transform: translate3d(-66.6%, 0, 0);
    transform: translate3d(-66.6%, 0, 0);
}

/* Yoshiko */
.input__field--yoshiko {
    width: 100%;
    background-color: #d0d1d0;
    border: 2px solid transparent;
    -webkit-transition: background-color 0.25s, border-color 0.25s;
    transition: background-color 0.25s, border-color 0.25s;
}

.input__label--yoshiko {
    width: 100%;
    text-align: left;
    position: absolute;
    bottom: 100%;
    pointer-events: none;
    overflow: hidden;
    padding: 0 1.25em;
    -webkit-transform: translate3d(0, 3em, 0);
    transform: translate3d(0, 3em, 0);
    -webkit-transition: -webkit-transform 0.25s;
    transition: transform 0.25s ;
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
}

.input__label-content--yoshiko {
    color: #8B8C8B;
    padding: 0.25em 0;
    -webkit-transition: -webkit-transform 0.25s;
    transition: transform 0.25s;
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
}

.input__label-content--yoshiko::after {
    content: attr(data-content);
    position: absolute;
    font-weight: 800;
    bottom: 100%;
    left: 0;
    height: 100%;
    width: 100%;
    color: #a3d39c;
    padding: 0.25em 0;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.85em;
}

.input__field--yoshiko:focus + .input__label--yoshiko,
.input--filled .input__label--yoshiko {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.input__field--yoshiko:focus + .input__label--yoshiko .input__label-content--yoshiko,
.input--filled .input__label-content--yoshiko {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
}

.input__field--yoshiko:focus + .input__field--yoshiko,
.input--filled .input__field--yoshiko {
    background-color: transparent;
    border-color: #a3d39c;
}

/* Chisato */

.input--chisato {
    padding-top: 1em;
}

.input__field--chisato {
    width: 100%;
    padding: 0.8em 0.5em;
    background: transparent;
    border: 2px solid;
    color: #b5b5b5;
    -webkit-transition: border-color 0.25s;
    transition: border-color 0.25s;
}

.input__label--chisato {
    width: 100%;
    position: absolute;
    top: 0;
    text-align: left;
    overflow: hidden;
    padding: 0;
    pointer-events: none;
    -webkit-transform: translate3d(0, 3em, 0);
    transform: translate3d(0, 3em, 0);
}

.input__label-content--chisato {
    padding: 0 1em;
    font-weight: 400;
    color: #b5b5b5;
}

.input__label-content--chisato::after {
    content: attr(data-content);
    position: absolute;
    top: -200%;
    left: 0;
    color: #da6484;
    font-weight: 800;
}

.input__field--chisato:focus,
.input--filled .input__field--chisato {
    border-color: #da6484;
}

.input__field--chisato:focus + .input__label--chisato,
.input--filled .input__label--chisato {
    -webkit-animation: anim-chisato-1 0.25s forwards;
    animation: anim-chisato-1 0.25s forwards;
}

.input__field--chisato:focus + .input__label--chisato .input__label-content--chisato,
.input--filled .input__label-content--chisato {
    -webkit-animation: anim-chisato-2 0.25s forwards ease-in;
    animation: anim-chisato-2 0.25s forwards ease-in;
}


/* Kozakura */
.input--kozakura {
    overflow: hidden;
    padding-bottom: 1em;
}

.input__field--kozakura {
    padding: 0.25em 0.5em;
    margin-top: 1.25em;
    width: 100%;
    background: transparent;
    color: #2F3238;
    font-size: 1.55em;
    opacity: 0;
}

.input__label--kozakura {
    width: 100%;
    text-align: left;
    position: absolute;
    top: 1em;
    pointer-events: none;
    overflow: hidden;
    padding: 0 0.25em;
    -webkit-transform: translate3d(1em, 2.75em, 0);
    transform: translate3d(1em, 2.75em, 0);
    -webkit-transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
}

.input__label-content--kozakura {
    color: #A4A5A6;
    padding: 0.4em 0 0.25em;
    -webkit-transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
}

.input__label-content--kozakura::after {
    content: attr(data-content);
    position: absolute;
    font-weight: 800;
    top: 100%;
    left: 0;
    height: 100%;
    width: 100%;
    color: #fff;
    padding: 0.25em 0;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.85em;
}

.graphic--kozakura {
    fill: #494E57;
    pointer-events: none;
    top: 1em;
    bottom: 0px;
    height: 4.5em;
    z-index: -1;
    -webkit-transition: -webkit-transform 0.7s, fill 0.7s;
    transition: transform 0.7s, fill 0.7s;
    -webkit-transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
    transition-timing-function: cubic-bezier(0, 0.25, 0.5, 1);
} 

.input__field--kozakura:focus,
.input--filled .input__field--kozakura {
    -webkit-transition: opacity 0s 0.35s;
    transition: opacity 0s 0.35s;
    opacity: 1;
}

.input__field--kozakura:focus + .input__label--kozakura,
.input--filled .input__label--kozakura {
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.input__field--kozakura:focus + .input__label--kozakura .input__label-content--kozakura,
.input--filled .input__label-content--kozakura {
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
}

.input__field--kozakura:focus ~ .graphic--kozakura,
.input--filled .graphic--kozakura {
    fill: #fff;
    -webkit-transform: translate3d(-66.6%, 0, 0);
    transform: translate3d(-66.6%, 0, 0);
}

/* Makiko */
.input--makiko {
    overflow: hidden;
    background: #CBCBCB;
}

.input__field--makiko {
    width: 100%;
    background: transparent;
    color: #797693;
    z-index: 10;
    font-weight: 500;
}

.input__label--makiko {
    position: absolute;
    width: 100%;
    text-align: left;
    pointer-events: none;
    color: #fff;
}

.input__label--makiko::before {
    content: '';
    position: absolute;
    width: 30px;
    height: 30px;
    top: 45%;
    left: 20px;
    background: url(../img/search.svg) no-repeat center center;
    background-size: 100%;
    -webkit-transition: -webkit-transform 0.4s cubic-bezier(0.7,0,0.3,1);
    transition: transform 0.4s cubic-bezier(0.7,0,0.3,1);
}

.input__label-content--makiko {
    display: block;
    padding: 1.5em 0 0 2.75em;
    -webkit-transition: -webkit-transform 0.4s cubic-bezier(0.7,0,0.3,1);
    transition: transform 0.4s cubic-bezier(0.7,0,0.3,1);
}

.input__field--makiko:focus + .input__label--makiko::before,
.input--filled .input__label--makiko::before {
    -webkit-transform: scale3d(38, 38, 1);
    transform: scale3d(38, 38, 1);
}

/* Sae */
.input--sae {
    overflow: hidden;
    width: 200px;
    margin: 0 2em 2em;
}

.input__field--sae {
    background: transparent;
    width: 100%;
    color: #fff;
    padding: 1em 0 0.5em;
    font-weight: 500;
}

.input__label--sae {
    position: absolute;
    width: 100%;
    text-align: left;
    color: #7771ab;
    padding: 0;
    height: 100%;
    pointer-events: none;
}

.input__label--sae::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    background: #fff;
    bottom: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    -webkit-transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
}

.icon--sae {
    position: absolute;
    bottom: 0;
    font-size: 1em;
    opacity: 0.5;
    left: -30px;
    color: #fff;
    pointer-events: none;
    -webkit-transform: translate3d(205px, 0, 0);
    transform: translate3d(205px, 0, 0);
    -webkit-transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
}

.input__label-content--sae {
    padding: 0;
    font-size: 18px;
    display: inline-block;
    vertical-align: bottom;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transform: translate3d(0, 50px, 0);
    transform: translate3d(0, 50px, 0);
    -webkit-transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
}

.input__field--sae:focus + .input__label--sae .input__label-content--sae,
.input--filled .input__label-content--sae {
    -webkit-transform: translate3d(0, 0, 0) scale3d(0.7, 0.7, 1);
    transform: translate3d(0, 0, 0) scale3d(0.7, 0.7, 1);
}

.input__field--sae:focus + .input__label--sae::after,
.input--filled .input__label--sae::after {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.input__field--sae:focus + .input__label--sae .icon--sae,
.input--filled .icon--sae {
    -webkit-transition-delay: 0.01s;
    transition-delay: 0.01s;
    -webkit-transform: translate3d(0, 0, 0) rotate3d(0, 0, 1, -90deg);
    transform: translate3d(0, 0, 0) rotate3d(0, 0, 1, -90deg);
}

/* Fumi */
.input--fumi {
    background: #fff;
    overflow: hidden;
    padding: 0.25em 0;
}

.input--fumi::after {
    content: '';
    width: 1px;
    position: absolute;
    top: 0.5em;
    bottom: 0.5em;
    left: 2.5em;
    background: #f0f0f0;
    z-index: 100;
}

.input__field--fumi {
    background: transparent;
    padding: 1.5em 1em 0.25em 3.15em;
    width: 100%;
    color: #00aeef;
}

.input__label--fumi {
    position: absolute;
    width: 100%;
    text-align: left;
    padding-left: 4.5em;
    pointer-events: none;
}

.icon--fumi {
    width: 2em;
    position: absolute;
    top: 0;
    left: 0;
    padding: 1em 0 0 0.5em;
}

.input__label-content--fumi {
    padding: 1.7em 0;
    display: inline-block;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
}

.input__label-content--fumi span {
    display: inline-block;
}

.input__field--fumi:focus + .input__label--fumi .input__label-content--fumi,
.input--filled .input__label-content--fumi {
    -webkit-animation: anim-fumi-1 0.3s forwards;
    animation: anim-fumi-1 0.3s forwards;
}

@-webkit-keyframes anim-fumi-1 {
    50% {
        -webkit-transform: translate3d(0, 3em, 0);
        transform: translate3d(0, 3em, 0);
    }
    51% {
        -webkit-transform: translate3d(0, -3em, 0) scale3d(0.85, 0.85, 1);
        transform: translate3d(0, -3em, 0) scale3d(0.85, 0.85, 1);
    }
    100% {
        color: #a3a3a3;
        -webkit-transform: translate3d(0, -1.1em, 0) scale3d(0.85, 0.85, 1);
        transform: translate3d(0, -1.1em, 0) scale3d(0.85, 0.85, 1);
    }
}

@keyframes anim-fumi-1 {
    50% {
        -webkit-transform: translate3d(0, 3em, 0);
        transform: translate3d(0, 3em, 0);
    }
    51% {
        -webkit-transform: translate3d(0, -3em, 0) scale3d(0.85, 0.85, 1);
        transform: translate3d(0, -3em, 0) scale3d(0.85, 0.85, 1);
    }
    100% {
        color: #a3a3a3;
        -webkit-transform: translate3d(0, -1.1em, 0) scale3d(0.85, 0.85, 1);
        transform: translate3d(0, -1.1em, 0) scale3d(0.85, 0.85, 1);
    }
}


.input__field--fumi:focus + .input__label--fumi .icon--fumi,
.input--filled .icon--fumi {
    -webkit-animation: anim-fumi-2 0.3s forwards;
    animation: anim-fumi-2 0.3s forwards;
}

@-webkit-keyframes anim-fumi-2 {
    50% {
        opacity: 1;
        -webkit-transform: translate3d(0, -3em, 0);
        transform: translate3d(0, -3em, 0);
    }
    50.25% {
        opacity: 0;
        -webkit-transform: translate3d(0, -3em, 0);
        transform: translate3d(0, -3em, 0);
    }
    50.75% {
        opacity: 0;
        -webkit-transform: translate3d(0, 3em, 0);
        transform: translate3d(0, 3em, 0);
    }
    51% {
        opacity: 1;
        -webkit-transform: translate3d(0, 3em, 0);
        transform: translate3d(0, 3em, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        color: #00aeef;
    }
}

@keyframes anim-fumi-2 {
    50% {
        opacity: 1;
        -webkit-transform: translate3d(0, -3em, 0);
        transform: translate3d(0, -3em, 0);
    }
    50.25% {
        opacity: 0;
        -webkit-transform: translate3d(0, -3em, 0);
        transform: translate3d(0, -3em, 0);
    }
    50.75% {
        opacity: 0;
        -webkit-transform: translate3d(0, 3em, 0);
        transform: translate3d(0, 3em, 0);
    }
    51% {
        opacity: 1;
        -webkit-transform: translate3d(0, 3em, 0);
        transform: translate3d(0, 3em, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        color: #00aeef;
    }
}


/* Ruri */
.input__field--ruri {
    width: 100%;
    background: transparent;
    padding: 0.5em 0;
    margin-bottom: 2em;
    color: #fff;
}

.input__label--ruri {
    width: 100%;
    position: absolute;
    text-align: left;
    font-size: 1em;
    padding: 10px 0 5px;
    pointer-events: none;
}

.input__label--ruri::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 7px;
    background: #B7C3AC;
    left: 0;
    top: 100%;
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition: -webkit-transform 0.3s, background-color 0.3s;
    transition: transform 0.3s, background-color 0.3s;
}

.input__label-content--ruri {
    padding: 0;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: -webkit-transform 0.3s, color 0.3s;
    transition: transform 0.3s, color 0.3s;
}

.input__field--ruri:focus + .input__label--ruri::after,
.input--filled .input__label--ruri::after {
    background: #a3d39c;
    -webkit-transform: scale3d(1, 0.25, 1);
    transform: scale3d(1, 0.25, 1);
}

.input__field--ruri:focus + .input__label--ruri .input__label-content--ruri,
.input--filled .input__label--ruri .input__label-content--ruri {
    color: #a3d39c;
    -webkit-transform: translate3d(0, 2em, 0) scale3d(0.655, 0.655, 1);
    transform: translate3d(0, 2em, 0) scale3d(0.655, 0.655, 1);
}

/* Kohana */
.input--kohana {
    overflow: hidden;
    background: #fff;
}

.input__field--kohana {
    width: 100%;
    background: transparent;
    padding-left: 2.75em;
    color: #6a7989;
}

.input__label--kohana {
    position: absolute;
    width: 100%;
    text-align: left;
    pointer-events: none;
    color: #D2D2D2;
}

.input__label-content--kohana {
    display: inline-block;
    width: auto;
    -webkit-transform: translate3d(-1.75em, 0, 0);
    transform: translate3d(-1.75em, 0, 0);
    -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
    transition: transform 0.3s, opacity 0.3s;
}

.icon--kohana {
    display: inline-block;
    margin-top: 0.9em;
    -webkit-transform: translate3d(-2em, 0, 0);
    transform: translate3d(-2em, 0, 0);
    -webkit-transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
}

.input__field--kohana:focus + .input__label--kohana .input__label-content--kohana,
.input--filled .input__label-content--kohana {
    opacity: 0;
    -webkit-transform: translate3d(100px, 0, 0);
    transform: translate3d(100px, 0, 0);
}

.input__label-content--kohana,
.icon--kohana,
.input__field--kohana:focus + .input__label--kohana .input__label-content--kohana,
.input--filled .input__label-content--kohana {
    -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
    transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
}

.input__field--kohana:focus + .input__label--kohana .icon--kohana,
.input--filled  .icon--kohana {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
/*end-set2.css*/

@import url(http://fonts.googleapis.com/css?family=Raleway:200,500,700,800);

@font-face {
    font-weight: normal;
    font-style: normal;
    font-family: 'codropsicons';
    src:url('../fonts/codropsicons/codropsicons.eot');
    src:url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
        url('../fonts/codropsicons/codropsicons.woff') format('woff'),
        url('../fonts/codropsicons/codropsicons.ttf') format('truetype'),
        url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
}

*, *:after, *:before { -webkit-box-sizing: border-box; box-sizing: border-box; }
.clearfix:before, .clearfix:after { content: ''; display: table; }
.clearfix:after { clear: both; }




.container {
    margin: 0 auto;
    text-align: center;
    overflow: hidden;
}

.content {
    font-size: 150%;
    padding: 3em 0;
}

.content h2 {
    margin: 0 0 2em;
    opacity: 0.1;
}

.content p {
    margin: 1em 0;
    padding: 5em 0 0 0;
    font-size: 0.65em;
}



@media screen and (max-width: 40em) {
    .codrops-header h1 {
        font-size: 2.8em;
    }
}
/*demo.css*/
.login-box button {
    background-color: #940026;
    border: none;
    width: 93%;
    margin-top: 10px;
    padding: 8px 0px;
    color: #FFF;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
    border-radius: .25rem;
}

.login-overlay {
    background-color: #000000;
    height: 100vh;
    position: absolute;
    z-index: 999;
    left: 0;
    right: 0;
    opacity: 0.7;
}
.login-page {
    display: flex;
    align-items: center;
    height: 100vh;
    background: url("../images/banner-img-4.jpg");
    background-size: cover;
}


 </style>

    <section class="form">
        <div class="login-overlay"></div>
        <div class="login-page">
            <div class="container">
                <div class="row">
                       <div class="col-12 col-sm-5 col-md-5 col-lg-5 offset-lg-3 center">
                        <div class="login-box">
                            <img src="assets/images/logo.png" class="img-fluid">
                           
                           
                           <span class="input input--nao">
                        <input class="input__field input__field--nao" type="text" id="input-1">
                        <label class="input__label input__label--nao" for="input-1">
                           <span class="input__label-content input__label-content--nao">First Name</span>
                            </label>
                            <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                            </svg>
                            </span>
                            <span class="input input--nao">
                        <input class="input__field input__field--nao" type="text" id="input-1">
                        <label class="input__label input__label--nao" for="input-1">
                           <span class="input__label-content input__label-content--nao">Last Name</span>
                            </label>
                            <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                            </svg>
                            </span>
                           
                           
                           
                            <span class="input input--nao">
                        <input class="input__field input__field--nao" type="text" id="input-1">
                        <label class="input__label input__label--nao" for="input-1">
                           <span class="input__label-content input__label-content--nao">Email</span>
                            </label>
                            <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                            </svg>
                            </span>
                            <span class="input input--nao">
                        <input class="input__field input__field--nao" type="password" id="input-1">
                        <label class="input__label input__label--nao" for="input-1">
                           <span class="input__label-content input__label-content--nao">Password</span>
                            </label>
                            <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                            </svg>
                            </span>
                            
                            
                            <span class="input input--nao">
                        <input class="input__field input__field--nao" type="text" id="input-1">
                        <label class="input__label input__label--nao" for="input-1">
                           <span class="input__label-content input__label-content--nao">Contact Number</span>
                            </label>
                            <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                            </svg>
                            </span>
                            
                            <button>sign in</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

      <!-- end-footer -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      <script src="assets/js/aos.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>