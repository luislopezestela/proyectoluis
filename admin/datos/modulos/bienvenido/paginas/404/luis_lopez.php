<style type="text/css">
  *, *:after, *:before {
  box-sizing: border-box;
}

html {
  background:#3a3b3c;
  background:radial-gradient(ellipse at center, #3a3b3c 0%, #242526 50%,  #18191a 100%);
  font-family: arial;
}

body {
  user-select:none;
  width: 100%;
  height: 100vh;
  margin: 0;
  background: radial-gradient(ellipse at center, rgba(115, 133, 154, 0.5) 1%, rgba(114, 132, 152, 0) 2%, rgba(0, 0, 0, 0) 100%);
 
}

.figure {
  position: fixed;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -65%);
}

.error-no {
  font-size:15vw;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
  color:#3498db;
  text-shadow: -2px 4px 2px rgba(0, 0, 0, 0.5);
}

.moon {
  width: 12vw;
  height: 12vw;
  border-radius:50%;
  background:#fff;
  position:relative;
  display: inline-block;
  z-index: 10;
  overflow: hidden;
  box-shadow: -20px 0 20px #e9e9e9 inset;
  border: 1px solid #68e3e9;
}
.moon:after {
  content: "";
  position: absolute;
  left: 75px;
  top: 70%;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  color: #e9e9e9;
  background: currentcolor;
  -webkit-animation: 5s spin linear infinite;
          animation: 5s spin linear infinite;
  box-shadow: -30px -50px 0 20px, 50px -30px 0 -8px, 50px -90px 0 2px, 100px -90px 0 0px, 100px -40px 0 25px, 150px -15px 0 0px, 240px 15px 0 4px, 230px -80px 0 2px, 200px -20px 0 16px, 350px 0 0, 320px -50px 0 20px, 400px -30px 0 -8px, 400px -90px 0 2px;
}

.mj {
  position: relative;
  margin: auto;
  z-index: 30;
  width: 60px;
  transform: scale(0.6) translatey(70%);
}
.mj .head {
  width: 30px;
  height: 35px;
  background: #feead6;
  position: relative;
  border-radius: 0 0 8px 0;
  transform: rotate(20deg);
  left: 10px;
  top: 5px;
  z-index: 5;
}
.mj .head:before {
  content: "";
  background: #000;
  width: 35px;
  height: 30px;
  position: absolute;
  left: -2px;
  bottom: 100%;
}
.mj .head:after {
  content: "";
  height: 3px;
  width: 60px;
  background: #000;
  position: absolute;
  left: 50%;
  transform: translatex(-50%);
  bottom: 100%;
}
.mj .head .nose {
  position: absolute;
  left: 100%;
  top: 10px;
  border-width: 8px 0 0 4px;
  border-style: solid;
  border-color: transparent #feead6;
}
.mj .hair {
  background: #151515;
  width: 12px;
  height: 20px;
  position: relative;
  left: -2px;
  border-radius: 0 0 6px 0;
}
.mj .hair .ponytail {
  position: absolute;
  background: #151515;
  width: 14px;
  height: 30px;
  border-radius: 50%;
  transform: rotate(20deg);
  left: -60%;
  top: 90%;
  transform-origin: 100% 0%;
  -webkit-animation: ponytail 1s infinite alternate;
          animation: ponytail 1s infinite alternate;
}
.mj .hair .ponytail:after {
  content: "";
  background: #151515;
  width: 9px;
  height: 14px;
  position: absolute;
  left: 10%;
  transform: rotate(21deg);
  top: 70%;
  border-radius: 10px 0 50%;
}
.mj .hair .frontpony {
  position: absolute;
  width: 8px;
  height: 12px;
  border-left: 3px solid;
  border-bottom: 2px solid;
  left: 22px;
  top: 0px;
  transform: skew(35deg, 0) rotate(35deg);
  border-radius: 0 0 0 43%;
  color: #151515;
}
.mj .hair .frontpony:after {
  content: "";
  width: 10px;
  height: 10px;
  position: absolute;
  border-right: 1px solid;
  border-bottom: 1px solid;
  left: -4px;
  top: 13px;
  transform: skew(0deg, -47deg) rotate(-28deg);
  border-radius: 0 0 7px 0;
}

.body {
  width: 35px;
  background: #feead6;
  position: relative;
}
.body:after {
  content: "";
  position: absolute;
  right: 0;
  top: 0;
  border-style: solid;
  border-width: 5px 8px 15px 0px;
  border-color: transparent #feead6 transparent transparent;
}
.body .jacket {
  background: #000;
  height: 70px;
  position: relative;
}
.body .jacket:before {
  content: "";
  position: absolute;
  top: 50px;
  left: -10px;
  width: 45px;
  height: 40px;
  background: #000;
  border-radius: 0 50px 50px 50px;
  transform: rotate(25deg);
  z-index: 5;
  -webkit-animation: 1s jacket infinite alternate;
          animation: 1s jacket infinite alternate;
}
.body .jacket:after {
  content: "";
  position: absolute;
  left: 95%;
  width: 6px;
  height: 115%;
  top: 0;
  background: #000;
  z-index: -5;
  border-radius: 0 0 100px 0;
}

.hand {
  width: 15px;
  height: 40px;
  background: #151515;
  top: 10px;
  left: -5px;
  margin: auto;
  position: relative;
  border-radius: 10px 10px 0 0;
  z-index: 10;
  transform: rotate(15deg);
}
.hand:after {
  content: "";
  width: 100%;
  position: absolute;
  top: 38px;
  left: -1px;
  background: #151515;
  height: 40px;
  transform: rotate(-35deg);
  transform-origin: 0 0 0;
  border-radius: 0 0 10px 10px;
  z-index: 5;
  -webkit-animation: forArm 1s infinite alternate;
          animation: forArm 1s infinite alternate;
}
.hand:before {
  content: "";
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #feead6;
  top: 54px;
  left: 18px;
  -webkit-animation: pam 1s infinite alternate;
          animation: pam 1s infinite alternate;
}

.leg {
  width: 22px;
  background: #000;
  height: 50px;
  margin-left: 10px;
  margin-bottom: 45px;
  position: relative;
  transform-origin: 100% 0%;
  -webkit-animation: leg 1s infinite alternate;
          animation: leg 1s infinite alternate;
}
.leg .foot {
  position: absolute;
  top: 50px;
  left: 0;
  width: 22px;
  height: 50px;
  background: #000;
  transform: rotate(0deg);
  transform-origin: 100% 0%;
  border-bottom: 6px solid #fff;
  border-radius: 0 0 2px 2px;
  -webkit-animation: foot 1s infinite alternate;
          animation: foot 1s infinite alternate;
}
.leg .foot:before {
  content: "";
  position: absolute;
  top: 50px;
  left: -1px;
  height: 13px;
  width: 42px;
  background: #000;
  border-radius: 0 10px 10px;
}
.leg.lft {
  position: absolute;
  bottom: -50px;
  animation-direction: alternate-reverse;
}
.leg.lft .foot {
  animation-direction: alternate-reverse;
}

@-webkit-keyframes spin {
  0% {
    left: 75px;
  }
  100% {
    left: -275px;
  }
}

@keyframes spin {
  0% {
    left: 75px;
  }
  100% {
    left: -275px;
  }
}
@-webkit-keyframes foot {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(20deg);
  }
}
@keyframes foot {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(20deg);
  }
}
@-webkit-keyframes leg {
  0% {
    transform: rotate(-10deg);
  }
  100% {
    transform: rotate(10deg);
  }
}
@keyframes leg {
  0% {
    transform: rotate(-10deg);
  }
  100% {
    transform: rotate(10deg);
  }
}
@-webkit-keyframes ponytail {
  100% {
    transform: rotate(10deg);
  }
}
@keyframes ponytail {
  100% {
    transform: rotate(10deg);
  }
}
@-webkit-keyframes jacket {
  100% {
    transform: rotate(20deg);
  }
}
@keyframes jacket {
  100% {
    transform: rotate(20deg);
  }
}
@-webkit-keyframes forArm {
  100% {
    transform: rotate(-30deg);
  }
}
@keyframes forArm {
  100% {
    transform: rotate(-30deg);
  }
}
@-webkit-keyframes pam {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(-2px, 2px);
  }
}
@keyframes pam {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(-2px, 2px);
  }
}

@media screen and (min-width: 1050px) {
  .error-no {
    font-size: 200px;
  }
  .moon{
    width:175px;
    height:175px;
  }
}


@media screen and (max-width: 1050px) {

  .mj {
  transform: scale(0.5) translatey(70%);
}
}

</style>
<div class="figure">
  <div class="mj">
    <div class="head">
      <div class="nose"></div>
      <div class="hair">
        <div class="ponytail"></div>
        <div class="frontpony"></div>
      </div>
    </div>
    <div class="body">
      <div class="jacket">
        <div class="hand"></div>
      </div>
    </div>
    <div class="leg">
      <div class="foot"></div>
    </div>
    <div class="leg lft">
      <div class="foot"></div>
    </div>
  </div>
  <div class="error-no"> <span>4</span>
    <div class="moon"></div><span>4</span>
  </div>
</div>