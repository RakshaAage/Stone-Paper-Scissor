<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stone Paper Scissor</title>
    <link rel="stylesheet" href="../Game development/SPS.css">
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