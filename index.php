<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stone Paper Scissor</title>
    <link rel="stylesheet" href="../Game development/SPS.css">
    <style>
      *{
  box-sizing:content-box;
}
html,
body,
form {
  height:90%;
}
body {
  background: #ece5b5;
  font-family: "Slabo 27px", serif;
  background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
  background-size: 400% 400%;
  -webkit-animation: Gradient 10s ease infinite;
  animation: Gradient 10s ease infinite;
}
@-webkit-keyframes Gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes Gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

form {
  align-items: center;
  display: flex;
  justify-content: center;
}
input {
  left: 50%;
  opacity: 0.01;
  position: fixed;
  top: 50%;
}
h1{
  padding-left: 30px;
  text-align: center;
}
h1 span{
  font-size: 2.1rem;
  -webkit-animation: fade-in-left 0.5s cubic-bezier(0.46, -0.41, 0.3, 1.52) both 0.5s;
          animation: fade-in-left 0.5s cubic-bezier(0.46, -0.41, 0.3, 1.52) both 0.5s;
}
.options {
  display: flex;
  flex-direction: column;
  margin: 0 60px;
}
.options label {
  background-color: #E0D6AF;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 60%;
  border-radius: 50%;
  cursor: pointer;
  display: block;
  height: 120px;
  margin: 10px auto;
  transition: transform 0.2s;
  transform: scale(1);
  width: 120px;
}
.options label:hover {
  background-color: #D1C79F;
  background-size: 65%;
}
.options label.r {
  background-image: url("http://www.jerrylow.com/demo/rps/rock.svg");
  background-size: 50%;
}
.options label.p {
  background-image: url("http://www.jerrylow.com/demo/rps/paper.svg");
}
.options label.s {
  background-image: url("http://www.jerrylow.com/demo/rps/scissor.svg");
}

input.you:checked ~ .options label {
  transform: scale(0.8);
}

input.you:nth-of-type(1):checked ~ .options label.r,
input.you:nth-of-type(2):checked ~ .options label.p,
input.you:nth-of-type(3):checked ~ .options label.s {
  background-color: #BFCCA3;
  transform: scale(1.25);
}
.it {
  display: flex;
  flex-direction: column;
  margin: 0 60px;
  width: 120px;
}
.it div {
  background-color: #C9A185;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 60%;
  border-radius: 50%;
  display: none;
  height: 120px;
  transform: scale(1.25);
  width: 120px;
}
.it div.r {
  background-image: url("http://www.jerrylow.com/demo/rps/rock.svg");
  background-size: 50%;
}
.it div.p {
  background-image: url("http://www.jerrylow.com/demo/rps/paper.svg");
}
.it div.s {
  background-image: url("http://www.jerrylow.com/demo/rps/scissor.svg");
}
.game {
  border-radius: 50%;
  height: 120px;
  overflow: hidden;
  position: relative;
  width: 120px;
  z-index: 10;
}
.game:before, .game:after {
  align-items: center;
  background: #a39f8c;
  color: white;
  content: "Choose your weapon";
  display: flex;
  height: 100%;
  justify-content: center;
  left: 0;
  position: absolute;
  text-align: center;
  top: 0;
  width: 100%;
  z-index: 2;
}
.game:after {
  background: #706C59;
  content: "Fight!";
  cursor: pointer;
  font-size: 26px;
  pointer-events: none;
  transition: font 0.2s;
  z-index: 1;
}
.game:hover:after {
  font-size: 30px;
}
.game .go {
  -webkit-animation-duration: 0.02s;
          animation-duration: 0.02s;
  -webkit-animation-name: random;
          animation-name: random;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  display: flex;
  flex-direction: column;
}
.game .go:active {
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
}
.game label {
  cursor: pointer;
  height: 120px;
  width: 120px;
}
input.skynet:checked ~ .game .go {
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
}


@-webkit-keyframes random {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-240px);
  }
}
@keyframes random {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-240px);
  }
}
input.you:checked ~ .game:before {
  display: none;
}

input#you-1:checked ~ input#skynet-1:checked ~ .results .tie,
input#you-2:checked ~ input#skynet-2:checked ~ .results .tie,
input#you-3:checked ~ input#skynet-3:checked ~ .results .tie {
  display: flex;
}

input#you-1:checked ~ input#skynet-3:checked ~ .results .win,
input#you-2:checked ~ input#skynet-1:checked ~ .results .win,
input#you-3:checked ~ input#skynet-2:checked ~ .results .win {
  display: flex;
}

input#you-1:checked ~ input#skynet-2:checked ~ .results .lose,
input#you-2:checked ~ input#skynet-3:checked ~ .results .lose,
input#you-3:checked ~ input#skynet-1:checked ~ .results .lose {
  display: flex;
}

input#skynet-1:checked ~ .it .r,
input#skynet-2:checked ~ .it .p,
input#skynet-3:checked ~ .it .s {
  display: flex;
}

input.you:checked ~ input.skynet:checked ~ .results {
  display: flex;
  position: absolute;
  
}

.results {
  align-items: center;
  display: none;
  bottom: 0;
  flex-direction: column;
  justify-content: center;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 100;
}
.results .win,
.results .lose,
.results .tie {
  align-items: center;
  background: #D1B354;
  border-radius: 50%;
  color: white;
  display: none;
  font-size: 40px;
  height: 140px;
  justify-content: center;
  width: 140px;
}
.results button {
  background: #706C59;
  border: none;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  height: 40px;
  margin: 20px 0 -60px;
  width: 80px;
}

.main-header h1 span:first-child {
  font-family: "Luckiest Guy", cursive;
}
.main-header h1 span:nth-child(2) {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
  font-family: "Open Sans Condensed", sans-serif;
}
.main-header h1 span:first-child {
  -webkit-animation: fade-in-left 0.5s cubic-bezier(0.46, -0.41, 0.3, 1.52) both 0.5s;
          animation: fade-in-left 0.5s cubic-bezier(0.46, -0.41, 0.3, 1.52) both 0.5s;
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.main-header h1 span:last-child {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
  font-family: "Mr Dafoe", cursive;
}/*
.game-started .main-header h1 span {
  -webkit-animation: scale-text 1s cubic-bezier(0.46, -0.41, 0.3, 1.52) both 0.2s;
          animation: scale-text 1s cubic-bezier(0.46, -0.41, 0.3, 1.52) both 0.2s;
}*/
@-webkit-keyframes fade-in-left {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}
@keyframes fade-in-left {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}/*
@-webkit-keyframes scale-text {
  100% {
    font-size: 2rem;
  }
}
@keyframes scale-text {
  100% {
    font-size: 2rem;
  }
}*/
    </style>
</head>
<body>
      <header class="main-header">
        <h1><span class="s1">Stone,</span> 
          <span>Paper,</span> 
          <span class="s3"> Scissor</span>
        </h1>
      </header>
      <form>    
        <input class="you" id="you-1" name="you" type="radio" />
        <input class="you" id="you-2" name="you" type="radio" />
        <input class="you" id="you-3" name="you" type="radio" />
        <div class="options">
          <label class="r" for="you-1" ></label>
          <label class="p" for="you-2"></label>
          <label class="s" for="you-3"></label>
        </div>

        <input class="skynet" id="skynet-1" name="skynet" type="radio" />
        <input class="skynet" id="skynet-2" name="skynet" type="radio" />
        <input class="skynet" id="skynet-3" name="skynet" type="radio" />
        <div class="game">
            <div class="go">        
            <label for="skynet-1"></label>
            <label for="skynet-2"></label>
            <label for="skynet-3"></label>
          </div> 
        </div>
        <div class="it">
          <div class="r"></div>
          <div class="p"></div>
          <div class="s"></div>
        </div>
        <div class="results">
          <div class="win">
            Win
          </div>
          <div class="lose">
            Lose
          </div>
          <div class="tie">
            Tie
          </div>
          <button type="reset">Again</button>
        </div>
      </form>  
</body>
</html>